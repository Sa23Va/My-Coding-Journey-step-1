<?php
    require __DIR__ . '/../app/src/app.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAVA</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;500&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="../app/css/normalize.css">
    <link rel="stylesheet" href="../app/css/sandra.css">
    <script src="https://kit.fontawesome.com/5f1801b413.js" crossorigin="anonymous"></script>

</head>
<body>

    <?php 
        include '../app/views/header.php';
        include '../app/views/contact.php';
        include '../app/views/footer.php';
    ?>
    
<script src="../app/js/jquery.min.js"></script>
<script src="../app/js/sandra.js"></script>

</body>
</html>

