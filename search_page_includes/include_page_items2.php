<?php
global $connection;

//CHECK for how many rows in table

$quessy = "SELECT * FROM worksheets";
$result = mysqli_query($connection, $quessy);
$num_rows = mysqli_num_rows($result);


//find out if tag type has been set in the URL
if(isset($_GET['type'])){
$type = $_GET['type'];

//select rows that contain tags
$quessy2 = "SELECT * FROM worksheets WHERE sheet_tags LIKE '%{$type}%'";
$result2 = mysqli_query($connection, $quessy2);
//check for how many tag rows
$num_rows2 = mysqli_num_rows($result2);

$query = "SELECT * FROM worksheets WHERE sheet_tags LIKE '%{$type}%' LIMIT 9, 9";
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

if($num_rows2 > 18){
include "./includes/narrow-ad-middle.php";
}
}  else {
    $query = "SELECT * FROM worksheets LIMIT 9, 9";
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

    if ($num_rows > 18) {
        include "./includes/narrow-ad-middle.php";
    }
}

?>