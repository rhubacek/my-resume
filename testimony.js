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

var app = document.getElementById('app');

var table = document.getElementsByTagName('table')[0];

for (var i = 0; i < referencesArray.length; i++) {
    console.log(referencesArray[i])

    var p = document.createElement('p');
    p.innerHTML = referencesArray[i].name;
    app.appendChild(p);

    var tdName = document.createElement('td');
    var tdPhone = document.createElement('td');
    var tdTestimony = document.createElement('td');
    var tr = document.createElement('td');
    tdName.innerHTML = referencesArray[i].name;
    tdPhone.innerHTML = referencesArray[i].phone;
    tdTestimony.innerHTML = referencesArray[i].testimony;

    tr.appendChild(tdName);
    tr.appendChild(tdPhone);
    tr.appendChild(tdTestimony);
    table.appendChild(tr);
}