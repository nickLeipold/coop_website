<!DOCTYPE html>
<html lang="en">
<head>
    <title>About WSIB Innovation Lab</title>
    <?php
    echo file_get_contents(__DIR__ . "/../shared/bootstrap_jquery.html");
    ?>
</head>
<body style="background-color: #212121">
<?php
echo file_get_contents(__DIR__ . "/../shared/nav_bar.html");
?>
<h2 style="text-align:center; background-color: rgba(255,255,255,0.7)">About WSIB</h2>

<style>
    #what-we-do {
        word-wrap: break-word;
        font-size: 12pt;
        text-align: left;
        border: 1px solid black;
        border-radius: 10px;
        margin: 10px 10px 10px 10px;
        padding: 10px 10px 10px 10px;
        background-color: rgba(255, 255, 255, 0.7);
</style>
<div id="what-we-do" style="float:left;">

    <div id="WSIB" style="display:block; width:100%">
            <a href="https://www.wsib-lab.ca/">
                <img src="lab-logo.ad733c38.gif" style="float:left; padding: 20px 20px 20px 20px; width:20%">
            </a>
        <div id="quick-facts">
            <h4>Quick Facts</h4>
            <p>
            - Located in the Tannery building in downtown Kitchener within Communitech<br>
            - Small agile team of co-ops from different schools ranging from UI designers and back-end developers<br>
            - Analyzing problems that the parent company encounters or a customer encounters with the parent company and working to make solutions<br>
            - Data Analysis and research
            </p>
    </div>
</div>
<div id="advertising" style="display:block">
    <h4>About WSIB Innovation Lab</h4>
    <p>&nbsp;&nbsp;WSIB Innovation Lab is an outpost of WSIB that focuses on researching and developing new solutions 
for the future state of workers compensation in Ontario by testing new technologies and developing working prototypes.
The Lab centers on three areas for project research and development. Customer Satisfaction, Injury Prevention and Enhanced Healing.
    </p>
</div>
<br>
</div>
</body>
