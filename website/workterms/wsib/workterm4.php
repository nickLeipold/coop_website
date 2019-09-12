<?php $title = "Work Term 4"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $title ?></title>
    <?php
    echo file_get_contents(__DIR__ . "/../shared/bootstrap_jquery.html");
    ?>
    <link rel="stylesheet" href="../css/workterm3.css">
</head>
<body style="background-color: #212121">
<?php
echo file_get_contents(__DIR__ . "/../shared/nav_bar.html");
?>

<div id="content">
    <div id="company" style="background-color: rgba(255,255,255,0.7)">
        <img id="wsib-innovation logo" src="lab-logo.ad733c38.gif" style="padding: 20px 20px 20px 20px; width: 20%; min-width: 250px;">
    </div>

    <h2 style="text-align:center; background-color: rgba(255,255,255,0.7);"><?php echo $title ?></h2>
    <style>
        #job-description {
            background-color: rgba(255,255,255,0.7);
        }
    </style>
    <div id="job-description">
        <h2 style="text-align:center;">Job Description</h2>
        <img id="group-picture" src="wsib-team-photo.jpg">
        <br>
        <div id="term-info">
            Duration: January 2019 - August 2019 <br>
            Position: Full-stack Developer
        </div>
        <div id="job-desc">
            My job as a Full-stack Developer involved working on many different projects that had previously been researched by the team or projects we researched and created.
            <br>
		The main Project I worked on this term was analyzing back strain in masonry workers. This was sparked from a meeting the lab had been invited to that involved a masonry union.<br>
		The masonry Union wanted a way to reduce their most common injury which is back strain, and the solution that was presented i felt miss the mark as a product, from this meeting I was given the freedom
to research and develope a solution that i felt fit the need of the consumer more. This enabled me to research Android and iOS development, as well as bluetooth interfacing and external sensing units that would be placed on the worker.
    </div>

	<img id="fatigue detector" src="fatigueReading-2019-06-18-074913.gif" style="padding: 20px 20px 20px 20px; width: 20%; min-width: 250px;">


</div>
  
