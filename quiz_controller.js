//containing the scores and the number of Questions we r having
//first we need to make our constructor function
function Quiz(questions) //the construction names can be different from the file names
{
   this.score = 0;
   this.questions = questions;
   this.questionIndex = 0;
}

//ont function to get the index of current Question
//another function to check if our Quiz has ended or not
//another function guess function to check if he answer is correct or not

Quiz.prototype.getQuestionIndex  = function() {  //getQuestionIndex is the name of function
 return this.questions[this.questionIndex];
}

Quiz.prototype.isEnded = function()
{
	return this.questions.length === this.questionIndex;
}

Quiz.prototype.guess = function(answer)
{
	//whether the user has marked the correct answer or wrong we need to proceed to the next Question

	if(this.getQuestionIndex().correctAnswer(answer)) {
		this.score++;
	}
    //first the current question is correct or not that is checked and then the question index is being incremented
		this.questionIndex++;

}





//this file is on oop's concepts in java pl see them