var message = "What is your name?"
function getCorrectAlert(hour, minutes, userInput) {
    var message;

    if (hour >= 5 && (hour <= 11 && minutes <= 59)) {
        message = 'Good morning, ${userInput}! Thank you for visiting my resume website.'
    } else if (hour >= 12 && (hour <= 17 && minutes <= 59)) {
        'Good afternoon, ${userInput}! Thank you for visiting my resume website.'
    }else {
        message = 'Good evening, ${userInput}! Thank you for visiting my resume website.'
    }
    return message;
}

debugger;

var suerInput = prompt(message)

var date = new Date();
var hour = date.getHours();
var minutes = date.getMinutes();

var returnMessage = getCorrectAlert(hour, minutes, userInput);

alert(returnMessage)