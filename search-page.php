<?php include "./db_worksheets.php" ?>
<?php include "./includes/header.php" ?>
<?php include "./includes/social.php" ?>
<?php include "./includes/navbar.php" ?>

<div id="wrapper" class="wrapper">
  <div class="gridfiller"></div>

  <?php include "./includes/narrow-ad-top.php" ?>
  <div class="sidebar" id="sidebar">
    <?php include "sidebar.html"; ?>
  </div>

    <?php 
    include "./search_page_includes/page-random-selection.php";?>

  <?php
  $imgsrc = "Buho.webp";
  $title = "Search Esl-ology.com";
  $text = '<p>Use the search panel to search our complete range of
            <b style="font-weight: bold">printables</b>,
            <b style="font-weight: bold">online games</b>,
            <b style="font-weight: bold">grammar mazes</b> and more. You can search by topic e.g. <b style="font-weight: bold">jobs</b>, by activity e.g. <b style="font-weight: bold">online board games</b> or <b style="font-weight: bold">bingo</b>, or by level, e.g. <b style="font-weight: bold">A2</b>. Leave the box blank to browse everything. Happy hunting!    </p>';
  include "./search_page_includes/page-intro.php";

  ?>



  <div class="main">



    <?php include "search_page_includes/include_page_items1.php"; ?>

    <?php include "search_page_includes/include_page_items2.php"; ?>

    <?php include "search_page_includes/include_page_items3.php"; ?>

  </div>
</div>

<?php include "./includes/footer.php"; ?>