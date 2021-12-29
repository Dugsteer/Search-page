<?php
global $connection;


//Include either the results of the search OR all the available worksheets, placing an advert after every nine sheets in either case.
//Check for how many rows in table and in search results in next doc.


if(isset($_GET['type'])){

$type = $_GET['type'];

$query = "SELECT * FROM worksheets WHERE sheet_tags LIKE '%{$type}%' LIMIT 0, 9";
$select_sheets = mysqli_query($connection, $query);

while ($row = mysqli_fetch_assoc($select_sheets)) {
    $sheet_id = $row['id'];
    $sheet_title = $row['sheet_title'];
    $sheet_description = $row['sheet_description'];
    $sheet_tags = $row['sheet_tags'];
    $sheet_type = $row['sheet_type'];
    $sheet_url = $row['sheet_url'];
    $sheet_date = $row['sheet_date'];
    $sheet_image = $row['sheet_image'];
  
  
    include "./search_page_includes/page-item.php";
    
}
  
include "./includes/narrow-ad-middle.php";
} else {
    $query = "SELECT * FROM worksheets LIMIT 0, 9";
    $select_sheets = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($select_sheets)) {
        $sheet_id = $row['id'];
        $sheet_title = $row['sheet_title'];
        $sheet_description = $row['sheet_description'];
        $sheet_tags = $row['sheet_tags'];
        $sheet_type = $row['sheet_type'];
        $sheet_url = $row['sheet_url'];
        $sheet_date = $row['sheet_date'];
        $sheet_image = $row['sheet_image'];
      

        include "./search_page_includes/page-item.php";
       
}
    include "./includes/narrow-ad-middle.php";
}
?>