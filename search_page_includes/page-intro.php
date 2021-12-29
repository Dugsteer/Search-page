<div class="introduction">
  <div class="introduction__img" id="mainpic">
    <img src="img/<?php echo $imgsrc ?>" alt="Intro panel picture" />
  </div>
  <div class="introduction__text">
    <h1 style="text-transform:uppercase;"><?php echo $title ?></h1>
    <p><?php echo $text ?></p>
    <br>
    <form action="search-page.php" method="get">
      <input class="input-submit" type="text" name="type" placeholder="SEARCH here">
      <button class="btn-submit" type="submit">Submit</button>
    </form>
  </div>
</div>
