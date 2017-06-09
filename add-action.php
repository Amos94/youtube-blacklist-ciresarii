<?php
/**
 * Created by PhpStorm.
 * User: amos neculau
 * Date: 6/8/2017
 * Time: 4:01 PM
 */

include 'Dbconnection.php';

$connection = new Dbconnection();

$link = $_POST['link'];
$chname = $_POST['chname'];
$reporter = $_POST['reporter'];

//HANDLING THE SOLVED
if($_POST['reported'] == '0'){
    $reported=0;
}elseif ($_POST['reported'] == '1'){
    $reported=0;
}else{
    $reported=1;
}

//HANDLING THE REPORTED
if($_POST['solved'] == '0'){
    $solved="not yet";
}elseif ($_POST['solved'] == '1'){
    $solved="not yet";
}elseif($_POST['solved'] == '2'){
    $solved="no";
}else{
    $solved="yes";
}
$timestamp = date('Y-m-d H:i:s');

$sql = "INSERT INTO list VALUES('".$link."', '".$chname."', ".$reported.", '".$solved."', '".$reporter."', '".$timestamp."')";

$status = $connection->insert($sql);

if($status == 1){
    header("Location: /success.html");
    die();
}
else{
    header("Location: /fail.html");
    die();
}

?>