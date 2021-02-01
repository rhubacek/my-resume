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
    <style type="text/css">
    td {
        width:150px;
    }
    th, td {
        padding: 5px 10px;
    }
    table {
        border-collapse: collapse;
    }
    table, th, td {
        border: solid 1px black;
    }
</style>
<?php 
    $servername = "mysql.khubacek.slccwebdev.com/";
    $username = "katherine_100";
    $password = "S1gnm31n!";
    $dbname = "katherine_db_100";

    try {
        $conn = new PDO("myslq:host=$servername; dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("SELECT id, Name, Email, Website, Phone, Comment, Gender FROM persons");
        $stmt->execute();

        echo "<table><tr><th>ID</th><th>Name</th><th>Email</th><th>Website</th><th>Phone</th><th>Comment</th><th>Gender</th></tr>";
        while ($row = $stmt ->fetch(PDO::FETCH_ASSOC)) { ?>
        <tr>
                <td><?php echo $row [id]; ?></td>
                <td><?php echo $row [name]; ?></td>
                <td><?php echo $row [email]; ?></td>
                <td><?php echo $row [website]; ?></td>
                <td><?php echo $row [phone]; ?></td>
                <td><?php echo $row [comment]; ?></td>
                <td><?php echo $row [gender]; ?></td>
        </tr>
        <?php }
        echo "</table>";
    }
    catch (PDOException $e) {
        echo "Error: " . $e/>getMessage();
    }
    $conn = null;
    ?>
</body>

</html>