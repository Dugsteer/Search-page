
      

<?php

$sorter = substr($sheet_url, -3);
echo "<div class='item'>
            <h2 class='download'>$sheet_title</h2>
          <div class='$sheet_type'>";?>

<?php
//decide whether to open a web address or download a document
switch ($sorter) {
  case 'tml':
    echo
            "<a href='https://esl-ology.com/$sheet_url'>
            <img src='img/$sheet_image' alt='$sheet_title'></a>
          </div>
      </div>";
    break;

case 'ebp':
      echo
      "<a href='https://esl-ology.com/$sheet_url'>
      <img src='img/$sheet_image' alt='$sheet_title'></a>
      </div>
</div>";
      break;

case 'php':
      echo
      "<a href='https://esl-ology.com/$sheet_url'>
      <img src='img/$sheet_image' alt='$sheet_title'></a>
      </div>
</div>";
      break;

  default:
    echo "<a href='docs/$sheet_url'>
            <img src='img/$sheet_image' alt='$sheet_title'></a>
             </div>
      </div>";
 };

 
?>
