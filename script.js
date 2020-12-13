function getCorrectAlert(hour, minutes, userInput) {
    var message;

    var str1 = "Good morning, ";
    var str2 = "Good afternoon, ";
    var str3 = "Good evening, ";
    if (hour >= 5 && (hour <= 11 && minutes <= 59)) {
        message = str1.concat(userInput,'!  Thank you for visiting my resume website.');
    } else if (hour >= 12 && (hour <= 17 && minutes <= 59)) {
        message = str2.concat(userInput,'! Thank you for visiting my resume website.');
    } else {
        message = str3.concat(userInput,'! Thank you for visiting my resume website.');
    }
    return message;
}

var message = "What is your name?";

//debugger;

var userInput = prompt(message)

var date = new Date();
var hour = date.getHours();
var minutes = date.getMinutes();

var returnMessage = getCorrectAlert(hour, minutes, userInput);
alert(returnMessage);
console.log(returnMessage);