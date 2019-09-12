<!DOCTYPE html>
<html lang="en">
<head>
    <title>Goals</title>
    <?php
    echo file_get_contents(__DIR__ . "/../shared/bootstrap_jquery.html");
    ?>
</head>
<body style="background-color: #212121">
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
        <h4>Learn how to better design user interfaces </h4>
        <p>&nbsp;&nbsp;This has improved some from going through UI design workshops and working directly with a UI designer to create and understand design choices.</p>
    </div>
    <br>
    <div>
        <h4>Become better at coding user interfaces and making them responsive </h4>
        <p>&nbsp;&nbsp;This is something i think i had decent progress on, but still not to the level as someone who creates user interfaces on a regular basis, but my effeciency with css has increased and making concious decisions on color
choices and designs has improved from being able to listen in on design discussions.
        </p>
    </div>
    <br>
    <div>
        <h4>Learning more back-end start up scripting </h4>
        <p>&nbsp;&nbsp;Was able to work with some bash scripting to create projects with lab based files and texts, while setting up git repos. This allows people to worry less about the config of their project and focus more on code
	I think i made some good progress on this area, but there is obviously a lot more scripting that can be done in industry and practice.</p>
    </div>
    <br>
</div>