<?php 

include '../helpers/utilities.php';


session_start();

$title = $_SESSION['title'];

if(isset($_GET['id'])){
    $titleId = $_GET['id'];

    $elementIndex = getIndexElement($title,'id', $titleId);

    unset($title[$elementIndex]);

    $_SESSION['title'] = $title;
}


header("Location: ../index.php");
exit();



?>
