<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <header>

</header>
<main>

<?php
include 'database.php';

foreach($FAQ as $FAQ){ ?>
    <?php echo $FAQ['ask']; ?>
    <?php echo $FAQ['answer']; ?>
   <?php } ?>

</main> 
<footer>

</footer>
    </div>


</body>
</html>