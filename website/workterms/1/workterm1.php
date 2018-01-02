
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Workterm Report 1 & 2</title>
  <?php
    echo file_get_contents(__DIR__."/../shared/bootstrap_jquery.html");
?>
  <link rel="stylesheet" href="../css/workterm1.css">
</head>
<body>

<?php
    echo file_get_contents(__DIR__."/../shared/nav_bar.html");
?>

<div id="content">
    <div id="company">
    <img id="adknown-logo" src="adknown_logo.png" >
    </div>
    <div id="term-info">
        Duration: May 2017 - January 2018 <br>
        Position: Software Engineering Intern
    </div>
    <div id="job-description" >
        <h2 style="text-align:center;">Job Description</h2>
        <img id="group-picture" src="group.png" >
        <br>
        <div id="job-desc">
            My job as a Software Engineering Intern involved working on a variety of projects. <br>
            The first project I had worked on had to do with on-line traffic, the traffic that comes in needs to be filtered for authenticity from artificial traffic to ensure quality of our product. <br>
            I was tasked with rewriting the existing tool with a new aggregation system. <br>
            This involved looking onto different aggregation methods and services and aggregating the new data onto AWS's S3, along with this was fixing rendering problems and using Athena to run queries on the data gathered from the traffic to use towards the services ADknown offers to customers
        </div>
    </div>
    
</div>
  
