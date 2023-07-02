<?php

$satisfaction = $_POST["satisfaction"];
$likes = $_POST["likes"];
$aware = $_POST["aware"];
$rate = $_POST["rate"];
$issues = $_POST["issues"];
$issues_details = $_POST["issues_details"];
$pricing_satisfaction = $_POST["pricing_satisfaction"];
$features = $_POST["features"];
$feature_details = $_POST["feature_details"];
$need = $_POST["need"];
$communicate = $_POST["communicate"];
$overall_satisfaction = $_POST["overall_satisfaction"];

$con = new mysqli('localhost', 'root', '', 'survey');
$sql="INSERT INTO survey_details (satisfaction, likes, aware, rate, issues, issues_details, pricing_satisfaction, features, feature_details, need, communicate, overall_satisfaction)
VALUES('$satisfaction', '$likes', '$aware', '$rate', '$issues', '$issues_details', '$pricing_satisfaction', '$features', '$feature_details', '$need', '$communicate', '$overall_satisfaction')";
if (mysqli_query($con,$sql))
 {
    echo "sucess";
} else {
    echo "failed";
}
?>
