<!DOCTYPE html>
<html lang="en">
<head>
    <title>Goals</title>
    <?php
    echo file_get_contents(__DIR__ . "/../shared/bootstrap_jquery.html");
    ?>
</head>
<body background="../shared/background.jpg">
<?php
echo file_get_contents(__DIR__ . "/../shared/nav_bar.html");
?>

<h2 style="text-align:center; background-color: rgba(255,255,255,0.7)">Work term Goals</h2>
<style>
    #goals {
        border: 1px solid black;
        text-align: left;
        border-radius: 10px;
        margin: 10px 10px 10px 10px;
        padding: 10px 10px 10px 10px;
        background-color: rgba(255, 255, 255, 0.7);
    }
</style>

<div id="goals">
    <div>
        <h4>I would like to become more proficient in functional coding</h4>
    </div>
    <br>
    <div>
        <h4>I would like to complete tasks with a higher degree of clarity and understanding of functionality with the
            languages i work with</h4>
    </div>
    <br>
    <div>
        <h4>I would like to become more clear at conveying thoughts and ideas and code changes</h4>
    </div>
    <br>
    <div>
        <h4>I would like to retain spoken instruction more readily and be able to write down that information for future
            use</h4>
    </div>
    <br>
</div>