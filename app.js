function populate(){
	if(quiz.isEnded()) {
		showScores();
	}
    else
    {
       
       var element = document.getElementById("question");
       element.innerHTML = quiz.getQuestionIndex().text;

       //show choices

       var choices = quiz.getQuestionIndex().choices;
       for(var i =0;i<choices.length;i++)
       {
       	var element2 = document.getElementById("choice" + i);
       	element2.innerHTML = choices[i];
        guess("btn" + i, choices[i]);
       	//calling guess function si whether the user has clicked the right or wrong answer we ned to proceed to next question
       }

       showprogress();
    }
	



};

function guess(id, guess)
{
	var button = document.getElementById(id);
	button.onclick = function() {
		quiz.guess(guess);
		populate();
	}
};


function showprogress() {
	// to change the values of variables x and y in the footer
    var currentquestionnumber = quiz.questionIndex + 1;
    //bcoz if the user have clicked the right or wrong answer we wat to change the index to the next question
    var element4 = document.getElementById("progress");
    element4.innerHTML = "Question " + currentquestionnumber + "of " + quiz.questions.length;
};


function showScores(){
	var gameoverhtml = "<h1>Results</h1>";
	gameoverhtml += "<center><h2 id='score'>Your Score: " + quiz.score + "</h2></center>";
	var element3 = document.getElementById("quiz");
	element3.innerHTML = gameoverhtml;

};


var questions = [
  new Question("Which one is not an object oriented programming language?",["Java","C#","C++","C"],"C"),
  new Question("Which language is used for styling web pages?",["HTML","jQuery","CSS","XML"],"CSS"),
  new Question("There are _______ main componentes of object oriented programming?",["1","6","2","4"],"4"),
  new Question("Which language is used for web apps?",["PHP","Python","JavaScript","All"],"All"),
  new Question("MVC is a _______?",["Language","Library","Framework","All"],"Framework")
];

//now lets create an object for this quiz controller

var quiz = new Quiz(questions);

populate();

//this function is main it will compute scores, show result at the end , populate the question text and options in the html elements 
//show question
       // we are going to show the question to the paragraph with id="question" in our html file