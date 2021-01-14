<!DOCTYPE html>
<html>
<script>
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


</script>

<head>
    <title>Ren's Resume </title>
    <link rel="stylesheet" href="index.css" />
</head>
<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<body>
    <section>
    </section>
    <nav class="navbar navbar-expand-md">
        <a href="#" class="navbar-brand"></a>
        <ul class="navbar-nav">
            <li class="navbar-item"> <a href="./index.php" class="nav-link">Home</a>
            <li class="navbar-item"> <a href="./about.php" class="nav-link">About</a>
            <li class="navbar-item"> <a href="./portfolio.php" class="nav-link">Portfolio</a>
            <li class="navbar-item"> <a href="./contact.php" class="nav-link">Contact</a>
            <li class="navbar-item"> <a href="./test.php" class="nav-link">JavaScript</a>
                <a href="./resume.docx" download Resume></a>
        </ul>
    </nav>

    <body>

        <!-- <div id='app'>
            <table>
                <tr>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Testimony</th>
                </tr>
            </table>
        </div> -->
    </body>
<script>
    const reference1 = {
    name: "Benjamin",
    phone: "1111111111",
    testimony: "They are a hard worker"
}

const reference2 = {
    name: "Beetroot",
    phone: "2222222222",
    testimony: "They get their work done"
}

const reference3 = {
    name: "Linda",
    phone: "3333333333",
    testimony: "They are very skilled"
}

const referencesArray = [
    reference1,
    reference2,
    reference3
]
var table = document.createElement('table');
for (var i = 0; i < 4; i++){
    var tr = document.createElement('tr');   
    var td1 = document.createElement('td');
    var td2 = document.createElement('td');
    var td3 = document.createElement('td');
    if (i==0)
    {
    var text1 = document.createTextNode("Name");
    var text2 = document.createTextNode("Phone");
    var text3 = document.createTextNode("Testimony"); 
    }
    else{
    var text1 = document.createTextNode(referencesArray[i-1].name);
    var text2 = document.createTextNode(referencesArray[i-1].phone);
    var text3 = document.createTextNode(referencesArray[i-1].testimony);
        
    }
 
    td1.appendChild(text1);
    td2.appendChild(text2);
    td3.appendChild(text3);
    tr.appendChild(td1);
    tr.appendChild(td2);
    tr.appendChild(td3);
    table.appendChild(tr);
}
document.body.appendChild(table);

// var app = document.getElementById('app');

// var table = document.getElementsByTagName('table')[4][3];

// for (var i = 0; i < referencesArray.length; i++) {
//     console.log(referencesArray[i])

//     var p = document.createElement('p');
//     p.innerHTML = referencesArray[i].name;

//     app.appendChild(p);
//      p.innerHTML = referencesArray[i].phone;
//      app.appendChild(p);
//     var tdName = document.createElement('td');
//     var tdPhone = document.createElement('td');
//     var tdTestimony = document.createElement('td');
//     var tr = document.createElement('td');
//     // tdName.innerHTML = referencesArray[i].name;
//     // tdPhone.innerHTML = referencesArray[i].phone;
//     // tdTestimony.innerHTML = referencesArray[i].testimony;

//     tr.appendChild(tdName);
//     tr.appendChild(tdPhone);
//     tr.appendChild(tdTestimony);
//     table.appendChild(tr);
// }
</script>

</html>