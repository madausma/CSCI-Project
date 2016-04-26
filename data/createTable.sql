DROP TABLE IF EXISTS UserInfo
DROP TABLE IF EXISTS Quiz
/*DROP TABLE IF EXISTS TakeQuiz*/
DROP TABLE IF EXISTS QuizGrade

Create table UserInfo (
    UserID Int Not Null Auto-Increment,
    Username varchar(25) Not Null,
    firstname varchar(25) Not Null,
    lastname varchar(25) Not Null,
    email varchar (50) Not Null,
    phone char(15) Not Null,
    address varchar(150) Not Null,
    dob date(),
    quizpassed Int Not Null,
    Primary Key (UserID)
);

Create table Quiz(
    QuizID Int Not Nill Auto-Increment,
    QuizTitle varchar(20) Not Null,
    Questions Int Not Null,
    Primary Key (QuizID)
);

/*Create table TakeQuiz(
    UserID Int Not Null,
    QuizID Int Not Null,
    Foreign Key (UserID) references UserInfo(UserID),
    Foreign Key (QuizID) references Quiz(QuizID),
);
*/

Create table QuizGrade(
    UserID Int Not Null,
    QuizID Int Not Null,
    questions Decimal(3,1),
    questionsRight Int Not Null,
    grade Decimal(10/2),
    percentage Decimal(10,2),
    Foreign Key (UserID) references UserInfo(UserID),
    Foreign Key (QuizID) references Quiz(QuizID),
);

/*Select Grade From QuizGrade Where Questions/QuestionsRight > 0;*/ 


