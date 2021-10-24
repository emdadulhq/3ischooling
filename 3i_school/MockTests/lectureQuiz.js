class Quiz {

  constructor()
  {

    this.AllAnswers = 0;
    this.Questions = [
    {
      question: "This is question number 1",
      type: "multi",
      score: 0,
      answers: [
      {
        answer: "This is answer 1",
        correct: true },

      {
        answer: "This is answer 2",
        correct: false },

      {
        answer: "This is answer 3",
        correct: true }] },



    {
      question: "This is question number 2",
      type: "single",
      score: 0,
      answers: [
      {
        answer: "This is answer 1",
        correct: true },

      {
        answer: "This is answer 2",
        correct: false }] },



    {
      question: "This is question number 3",
      type: "multi",
      score: 0,
      answers: [
      {
        answer: "This is answer 1",
        correct: false },

      {
        answer: "This is answer 2",
        correct: true },

      {
        answer: "This is answer 3",
        correct: true },

      {
        answer: "This is answer 4",
        correct: false },

      {
        answer: "This is answer 5",
        correct: true }] }];





  }

  Init()
  {

    this.QuizEl = $('.quiz');
    this.BuildQuiz();

    $('.check-answers').on('click', this.SubmitAnswers.bind(this));

  }

  BuildQuiz()
  {

    let intQuestions = this.Questions.length;
    for (var i = 0; i < intQuestions; i++)
    {

      let objQuestion = this.Questions[i];
      let strAnswers = '';
      this.AllAnswers += objQuestion.type !== 'multi' ? 1 : 0;
      for (var j = 0, intLen2 = objQuestion.answers.length; j < intLen2; j++)
      {

        let objAnswer = objQuestion.answers[j];
        this.AllAnswers += objQuestion.type === 'multi' ? 1 : 0;
        let strInput = objQuestion.type === 'multi' ? `<input type="checkbox" id="answer-${i}${j}" name="question${i}${j}" value="1">` : `<input type="radio" id="answer-${i}${j}" name="question${i}" value="1">`;
        strAnswers += `<li class="answer"><label for="answer-${i}${j}">${objAnswer.answer}</label>${strInput}</li>`;

      }
      this.QuizEl.append(`<li class="question">
                <h3 data-question="${i}">${objQuestion.question}</h3>
                <ul class="f-list answers">
                    ${strAnswers}
                </ul>
            </li>`);

    }

  }

  SubmitAnswers()
  {

    let intCompleteQs = 0;
    let intCorrect = 0;
    let intOverall = 0;
    let intQuestions = this.Questions.length;
    for (var i = 0; i < intQuestions; i++)
    {

      let objQuestion = this.Questions[i];
      objQuestion.answerLength = 0;
      let objHeader = $(`[data-question=${i}]`);
      objQuestion.score = 0;

      for (var j = 0, intLen2 = objQuestion.answers.length; j < intLen2; j++)
      {

        let objAnswer = objQuestion.answers[j];
        let objInput = objQuestion.type === 'multi' ? $(`[name="question${i}${j}"]`) : $(`[name="question${i}"]`);
        let objQuesEl = objInput.parent();
        objQuesEl.removeClass('correct incorrect');
        if (objAnswer.correct)
        {

          intOverall++;

        }
        if (objInput.prop('checked') && objAnswer.correct)
        {

          objQuestion.score++;
          objAnswer.isCorrect = true;
          objQuesEl.addClass('correct');
          intCorrect++;
          objQuestion.answerLength++;

          if (objQuestion.type === 'single')
          {

            break;

          }

        } else if (!objInput.prop('checked') && !objAnswer.correct && objQuestion.type === 'multi')
        {

          objAnswer.isCorrect = true;
          // objQuesEl.addClass('correct');

        } else if (objInput.prop('checked') && !objAnswer.correct && objQuestion.type === 'multi')
        {

          objQuestion.answerLength++;
          objAnswer.isCorrect = false;
          objQuesEl.addClass('incorrect');

        } else {

          objQuestion.answerLength++;
          objAnswer.isCorrect = false;
          objQuesEl.addClass('incorrect');

        }

      }

      let intPerc = parseFloat((objQuestion.score / objQuestion.answerLength * 100).toFixed(2));
      objHeader.children('.score').length ? objHeader.children('.score').text(' - Score: ' + intPerc + '%') : objHeader.append('<span class="score"> - Score: ' + intPerc + '%</span>');

      if (intPerc === 100)
      {

        intCompleteQs++;

      }

    }

    $('.show-score').addClass('is-shown');
    $('.overall-answers').text(intCorrect + '/' + intOverall);
    $('.overall-questions').text(intCompleteQs + '/' + intQuestions);

  }}

;
const clsQuiz = new Quiz();
clsQuiz.Init();