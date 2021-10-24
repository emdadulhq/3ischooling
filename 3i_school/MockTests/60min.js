//Time
document.getElementById('timer').innerHTML =1 + ":" + 02;
//Json File
let url ='MockTests/quiz.json';

const question = document.querySelector("#question");
const choices = Array.from(document.getElementsByClassName("choice-text"));

const progressBarFull = document.querySelector("#progressBarFull");
const progressText = document.querySelector("#progressText");
const scoreText = document.querySelector("#score");

const home = document.querySelector("#home");
const playing = document.querySelector("#playing");
const playButton = document.querySelector("#playButton");
const explanation = document.querySelector('.explanation');
const selectoptions = document.querySelector("#selectoptions");
const endPage = document.querySelector('.endPage');
const result = document.querySelector('.result');
const mq = document.querySelector('.maxQuestion');
const wrong = document.querySelector('.wronganswer');
const playAgainButton = document.querySelector('#playAgainButton');

const point = 1;
let maxQuestion = 5;
let score = 0;
let questionCounter = 0;
let acceptingAnswers = false;
let resultvalue = 0;
let allQuestionsArray = [];
let currentQuestion = {};


function urlSelection() {
    var x = selectoptions.value;
    if(x === 'easy') {
        url = 'MockTests/quiz.json';
    }
    if(x === 'hard') {
        url = 'MockTests/quiz_hard.json';
    }
   
}
selectoptions.addEventListener('change', urlSelection)

function play() {
    explanation.innerHTML = 'Good Luck!'
    game.classList.add("hidden");
    loader.classList.remove("hidden");
    playing.classList.remove("hidden");
    home.classList.add("hidden");
    fetch(url)
    .then(response => {
        return response.json();
    })
    .then(response => {
        allQuestionsArray = response.results.map(q => {
            let allQuestionsObject = {};
            allQuestionsObject.question = q.question;
            allQuestionsObject.answer = Math.floor(Math.random() * 3) + 1;
            const choices = [...q.incorrect_answers];
            choices.splice(allQuestionsObject.answer - 1, 0, q['correct_answer']);
            choices.forEach((eachChoice, index) => {
                allQuestionsObject["choice" + (index + 1)] = eachChoice;
            });
            return allQuestionsObject;
            });
        startGame();
    })
}
playButton.addEventListener('click', play)

function startGame() {
    score = 0;
    questionCounter = 0;
    remainedQuestions = [...allQuestionsArray];
    getQuestion();
    game.classList.remove("hidden");
    loader.classList.add("hidden");
    startTimer();
}

function getQuestion() {
    if (remainedQuestions.length === 0 || questionCounter >= maxQuestion) {
        endGame();
        return;
    }
    questionCounter++;
    progressText.innerText = `Question ${questionCounter}/${maxQuestion}`;
    progressBarFull.style.width = `${(questionCounter / maxQuestion) * 100}%`;
    const questionIndex = Math.floor(Math.random() * remainedQuestions.length);
    currentQuestion = remainedQuestions[questionIndex];
    question.innerText = decoding(currentQuestion.question);
    choices.forEach(choice => {
        const number = choice.dataset["number"];
        choice.innerText = decoding(currentQuestion["choice" + number]);
    });
    remainedQuestions.splice(questionIndex, 1);
    acceptingAnswers = true;
}

let incrementScore = num => {
    score += num;
    scoreText.innerText = score;
    resultvalue += num;
    result.innerHTML = `${score}`;
}

function decoding(html) {
    let el = document.createElement( 'html' );
    el.innerHTML = html;
    return el.textContent;
}

choices.forEach(choice => {
    choice.addEventListener("click", e => {
      if (!acceptingAnswers) return;
  
      acceptingAnswers = false;
      const selectedChoice = e.target;
      const selectedAnswer = selectedChoice.dataset["number"];
      const classToApply =
        selectedAnswer == currentQuestion.answer ? "correct" : "incorrect";
  
      if (classToApply === "correct") {
        incrementScore(point);
      }
  
      selectedChoice.parentElement.classList.add(classToApply);

      setTimeout(() => {
        selectedChoice.parentElement.classList.remove(classToApply);
        getQuestion();
      }, 500);
    });
  });


function endGame() {
    endPage.classList.remove("hidden");
    playing.classList.add("hidden");
    explanation.innerHTML = "";
    mq.innerHTML = maxQuestion;
    console.log("Max "+maxQuestion);
    wronganswer = maxQuestion - score;
    wrong.innerHTML = wronganswer;
}


function playAgain() {
    home.classList.remove("hidden");
    endPage.classList.add("hidden");
    scoreText.innerHTML = 0;
    resultvalue = 0;
    result.innerHTML = `0%`;
    questionCounter = 0;
    explanation.innerHTML = "You will be given random questions based on your level. Select your level and start playing!";
}

function startTimer() {
  var presentTime = document.getElementById('timer').innerHTML;
  var timeArray = presentTime.split(/[:]+/);
  var m = timeArray[0];
  var s = checkSecond((timeArray[1] - 1));
  if(s==59){m=m-1}
  if(m<0){
    acceptingAnswers = false;
    endGame();
    return
  }
  
  document.getElementById('timer').innerHTML =
    m + ":" + s;
  setTimeout(startTimer, 1000);
  
}

function checkSecond(sec) {
  if (sec < 10 && sec >= 0) {sec = "0" + sec}; // add zero in front of numbers < 10
  if (sec < 0) {sec = "59"};
  return sec;
}

//playAgainButton.addEventListener('click', playAgain);