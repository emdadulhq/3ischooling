@extends('3i_school.layouts.master')

@section('title')
    Mock Tests
@stop

@push('styles')

    <link rel="stylesheet" type="text/css" href="{{ asset('3i_school') }}/MockTests/60min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('3i_school') }}/MockTests/popup.css">
@endpush

@section('content')
    <div class="quizing">
        <div class="firstcontainer" class="flex-center flex-column" style="padding-bottom: 50px;">
            <h1 class="title mb-0 position-relative onwhitetitle" style="text-align: center;"> Short Quiz</h1>
            <h5 class="explanation py-4">You will be given random questions based on your level. Select your level and start
                playing!</h5>
            <div id="home" class="flex-center flex-column ">
                <!-- btn readon-->
                {{-- <select class="  btn readon" id="selectoptions" name="cars">
                    <option value="easy">Easy</option>
                    <option value="medium">Medium</option>
                    <option value="hard">Hard</option>
                </select> --}}
                <a class="btn readon" href="{{route('admin.minquiz')}}">Start Quiz</a>
                <a class="btn readon" id="playButton">Start Quiz!</a>
                <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
            </div>
        </div>

        <div class="container hidden" id="playing">
            <div id="loader"></div>
            <div id="game" class="justify-center flex-column hidden">
                <div id="hud">
                    <div id="hud-item">
                        <p id="progressText" class="hud-prefix">Question</p>
                        <div id="progressBar">
                            <div id="progressBarFull"></div>
                        </div>
                    </div>
                    <div id="hud-item">
                        <div class="timer">Time : <span id="timer"></span></div>
                        <p class="hud-prefix">Score</p>
                        <h1 class="hud-main-text title mb-0 position-relative onwhitetitle" id="score">0</h1>
                    </div>
                </div>
                <h2 id="question"></h2>
                <div class="choice-container">
                    <p class="choice-text" data-number="1"></p>
                </div>
                <div class="choice-container">
                    <p class="choice-text" data-number="2"></p>
                </div>
                <div class="choice-container">
                    <p class="choice-text" data-number="3"></p>
                </div>
                <div class="choice-container">
                    <p class="choice-text" data-number="4"></p>
                </div>
                <div style="margin: 30px; text-align: center;">
                    <a class=" btn readon " onclick="endGame()">End Quiz</a>
                </div>
            </div>
        </div>
        <div class="endPage container flex-center flex-column hidden" style="padding-bottom: 50px;">
            <p class="endText">Total Questions : <a class="maxQuestion flex-center">0</a></p>
            <p class="endText">Your Score : <a class="result flex-center">0</a></p>
            <p class="endText">Wrong Answer : <a class="wronganswer flex-center">0</a></p>
            <a class=" btn readon" href="60min.php">Play Again</a>


        </div>

        <!-- Pop Up-->
        <div id="id01" class="modal" style="padding: 20px;">

            <form class="modal-content animate" action="/action_page.php" method="post">
                <div class="imgcontainer">
                    <span onclick="document.getElementById('id01').style.display='none'" class="close"
                        title="Close Modal">&times;</span>

                </div>

                <div class="container">
                    <label for="exampleInputEmail1" class="onwhite"><b>Username</b></label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="username">

                    <label for="exampleInputPassword1" class="onwhite"><b>Password</b></label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password">

                    <button type="submit" class="readon" name="login_user" style="margin-top: 30px;">Login <i
                            class="flaticon flaticon-right-arrow"></i></button>
                    <label>
                        <input type="checkbox" checked="checked" name="remember"> Remember me
                    </label>
                    <p>
                        Not yet a member? <a href="register.php">Sign up</a>
                    </p>
                </div>

                <div class="container" style="background-color:#f1f1f1">
                    <button type="button" onclick="document.getElementById('id01').style.display='none'"
                        class="cancelbtn">Cancel</button>
                    <span class="psw">Forgot <a href="#">password?</a></span>
                </div>
            </form>
        </div>
    </div>


@stop

@push('scripts')

    <script>
        // Get the modal
        var modal = document.getElementById('id01');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>

    <!--
    <script src="{{ asset('3i_school') }}/MockTests/60min.js"></script>
    -->
    <script type="text/javascript">
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

    </script>
@endpush
