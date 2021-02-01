<!DOCTYPE html>
<html>
        <head>
            <title>Ren's Resume</title>
            <link rel="stylesheet" href="index.css" />
        </head>
    
        <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    
        <body>
           
            <nav class="navbar navbar-expand-md">
                <a href="#" class="navbar-brand"></a>
                   <ul class="navbar-nav">
                    <li class="navbar-item"> <a href="./index.php" class="nav-link">Home</a>
                    <li class="navbar-item"> <a href="./contactform.php" class="nav-link">Contact Form</a>
                    <li class="navbar-item"> <a href="./about.php" class="nav-link">About</a>
                    <li class="navbar-item"> <a href="./portfolio.php" class="nav-link">Portfolio</a>
                    <li class="navbar-item"> <a href="./contact.php" class="nav-link">Contact</a>
                    <li class="navbar-item"> <a href="./test.php" class="nav-link">JavaScript</a>
                    <li class="navbar-item"> <a href="./data.php" class="nav-link">Data</a>
                   <a href="./resume.docx"download Resume></a>
                   </ul>
               </nav>
    <hr>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = $phoneErr = "";
$name = $email = $gender = $comment = $website = $phone = "";
$to = $message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (empty($_POST["name"])) {
$nameErr = "Name is required";
} else {
$name = test_input($_POST["name"]);
// check if name only contains letters and whitespace
if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
$nameErr = "Only letters and white space allowed";
}
}
 
if (empty($_POST["email"])) {
$emailErr = "Email is required";
} else {
$email = test_input($_POST["email"]);
// check if e-mail address is well-formed
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
$emailErr = "Invalid email format";
}
}

if (empty($_POST["phone"])) {
$phoneErr = "Phone is required";
} else {
$phone = test_input($_POST["phone"]);
// check if e-mail address is well-formed
if (!preg_match("/^[0-9]*$/",$phone,)) {
$phoneErr = "Invalid phone format";
}
}
 
if (empty($_POST["website"])) {
$website = "";
} else {
$website = test_input($_POST["website"]);
// check if URL address syntax is valid (this regular expression also allows dashes in the URL)
if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
$websiteErr = "Invalid URL";
}
}

if (empty($_POST["comment"])) {
$comment = "";
} else {
$comment = test_input($_POST["comment"]);
}

if (empty($_POST["gender"])) {
$genderErr = "Gender is required";
} else {
$gender = test_input($_POST["gender"]);
}
}

function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return$data;
}
?>


<h2>Information Form</h2>
<p><span class="error">* required field</span></p>
<form method="post"action="insert.php">
Name: <input type="text" name="name" value="<?php echo $name;?>">
<span class="error">* <?php echo $nameErr;?></span>
<br><br>
E-mail: <input type="text" name="email" value="<?php echo $email;?>">
<span class="error">* <?php echo $emailErr;?></span>
<br><br>
Website: <input type="text" name="website" value="<?php echo $website;?>">
<span class="error"><?php echo $websiteErr;?></span>
<br><br>
Phone: <input type="text" name="phone" value="<?php echo $phone;?>">
<span class="error"><?php echo $phoneErr;?></span>
<br><br>
Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
<br><br>
Gender:
<input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="f">Female
<input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="m">Male
<input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="o">Other
<span class="error">* <?php echo $genderErr;?></span>
<br><br>
<input type="submit" name="submit" value="Submit">
<input type="reset" value="clear form" />
</form>


<?php 
    $servername = "mysql.khubacek.slccwebdev.com";
    $username = "katherine_100";
    $password = "S1gnm31n!";
    $dbname = "katherine_db_100";

    try {
        $conn = new PDO("myslq:host=$servername; dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("INSERT INTO Persons (Name, Email, Website, Phone, Comment, Gender)
        VALUES (:Name, :Email, :Website, :Phone, :Comment, :Gender)");

        $stmt->bindParam(':Name', $name);
        $stmt->bindParam(':Email', $email);
        $stmt->bindParam(':Website', $website);
        $stmt->bindParam(':Phone', $phone);
        $stmt->bindParam(':Comment', $comment);
        $stmt->bindParam(':Gender', $gender);

        $name = $_POST['Name'];
        $email = $_POST['Email'];
        $website = $_POST['Website'];
        $phone = $_POST['Phone'];
        $comment = $_POST['Comment'];
        $gender = $_POST['Gender'];
        $stmt->execute();

        Echo "New record created successfully!";
    }

    catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $conn = null;
    
    ?>
</body>
</html>