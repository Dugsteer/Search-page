<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PageIntro</title>
</head>
<body>
        <div class="introduction">
        <div class="introduction__img" id="mainpic">
          <img src="img/<?php echo $imgsrc?>" alt="Intro panel picture" />
        </div>
        <div class="introduction__text">
          <h1 style="text-transform:uppercase;"><?php echo $title?></h1>
          <p>
              <?php echo $text?>
          </p>
        </div>
     </div>
</body>
</html>