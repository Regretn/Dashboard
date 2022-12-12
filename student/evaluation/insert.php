<?php
session_start();
include_once 'connection.php';
$q1 = mysqli_real_escape_string($con, $_POST['q1']); //mysqli_real_escape_string($conn, this will protect us from SQL injection
$q2 =  mysqli_real_escape_string($con, $_POST['q2']);
$q3 = mysqli_real_escape_string($con, $_POST['q3']);
$q4 = mysqli_real_escape_string($con, $_POST['q4']);
$q5 = mysqli_real_escape_string($con, $_POST['q5']);
$q6 = mysqli_real_escape_string($con, $_POST['q6']);
$teacher_id = mysqli_real_escape_string($con, $_POST['teacher_id']);
$date = date("Y-m-d H:i:s");

$sql =  "INSERT  INTO `score`(`Q1` , `Q2` , `Q3` , `Q4`, `Q5`, `Q6`,`teacher_id`, `time`) VALUE  (' {$q1} ' , ' {$q2} ' , ' {$q3} ' , ' {$q4} ' , ' {$q5} ', ' {$q6} ', ' {$teacher_id} ', ' {$date} ' )";

mysqli_query($con, $sql);

header("Location: home.php");
