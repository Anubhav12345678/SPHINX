function Question(text, choices, answer)   // constructer func as question has 3 attributes.in js there are no classes with the keyword class we just write a function keyword
{
   this.text = text;
   this.choices = choices;
   this.answer = answer;  
}


//now we need to make functions to check whther answer clicked was correct or not whether it was equal to this.answer
//we need to wite a fun that belongs to the above question we can write it inside also but it is not a recommended practice
Question.prototype.correctAnswer = function(choice) {   //prototype is used as we r selecting the same question as above. function is recieving a choice.(choice) will be containing the value of user clickde option
 return choice===this.answer;

}
//this file is on oop's concepts in java pl see them
