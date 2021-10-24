

// let qstn=[];

// let ch1 = [];
// let ch2 = [];
// let ch3 = [];
// let ch4 = [];
// let ans = [];

let questions=[];

    $.ajax({
        url:'run_quiz',
                    type: 'get',
                    dataType: 'json',
                    data: {"data":"check"},
                    success: function (response) {


                        questions.push(response.quizess[2]);
                        // console.log(questions);

                // for (dta in questions ){
                //         dta.push(questions);
                //             // qstn.push(questions[dta].question);

                //             // ch1.push(questions[dta].choice1);

                //             // ch2.push(questions[dta].choice2);
                //             // ch3.push(questions[dta].choice3);
                //             // ch4.push(questions[dta].choice4);
                //             // ans.push(questions[dta].answer);

                //     }

                    }

    })

//     // console.log(response)
//     // let inc=number(2);
        console.log(questions);
// //     console.log(qstn.length)
// // for (let dta in qstn){
// //     console.log(qstn[dta])
// // }

let quiz = [
    {
        question:questions[0].question,

        option: [
            ch1,
            ch2,
            ch3,
            ch4,
        ],
        ans,
    }

];



