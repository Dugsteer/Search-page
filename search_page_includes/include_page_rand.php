<?php
global $connection;

$query = "SELECT * FROM worksheets ORDER BY RAND() LIMIT 2";
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

?>