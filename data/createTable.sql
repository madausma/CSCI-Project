DROP TABLE IF EXISTS UserInfo
DROP TABLE IF EXISTS Quiz
/*DROP TABLE IF EXISTS TakeQuiz*/
DROP TABLE IF EXISTS QuizGrade

Create table UserInfo (
    UserID Int,
    Username varchar(50),
    firstname varchar(50),
    lastname varchar(50),
    email varchar (50),
    phone varchar(50),
    address varchar(150),
    dob date(),
    quizpassed Int,
    Primary Key (UserID)
);

Create table Quiz(
    QuizID Int,
    QuizTitle varchar(20),
    Questions Int,
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
    UserID Int,
    QuizID Int,
    questions Decimal(3,1),
    questionsRight Int,
    grade Decimal(10/2),
    percentage Decimal(10,2),
    Foreign Key (UserID) references UserInfo(UserID),
    Foreign Key (QuizID) references Quiz(QuizID),
);

/*Select Grade From QuizGrade Where Questions/QuestionsRight > 0;*/ 

/*
 * Author:  Victor
 * Created: Apr 23, 2016
 */

