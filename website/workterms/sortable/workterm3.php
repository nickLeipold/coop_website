<?php $title = "Work Term 3"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $title ?></title>
    <?php
    echo file_get_contents(__DIR__ . "/../shared/bootstrap_jquery.html");
    ?>
    <link rel="stylesheet" href="../css/workterm3.css">
</head>
<body background="../shared/background.jpg">

<?php
echo file_get_contents(__DIR__ . "/../shared/nav_bar.html");
?>

<div id="content">
    <div id="company" style="background-color: rgba(255,255,255,0.7)">
        <img id="sortable-logo" src="sortable_logo.png" style="padding: 20px 20px 20px 20px; width: 20%; min-width: 250px;">
    </div>

    <h2 style="text-align:center; background-color: rgba(255,255,255,0.7);"><?php echo $title ?></h2>

    <style>
        #job-description {
            background-color: rgba(255, 255, 255, 0.7);
        }
    </style>
    <div id="job-description">
        <h2 style="text-align:center;">Job Description</h2>
        <img id="group-picture" src="SortableTeamPhoto2018.jpg">
        <br>
        <div id="term-info">
            Duration: May 2018 - August 2018 <br>
            Position: Software Developer Co-op
        </div>
        <div id="job-desc">
            My job as a Software Developer Co-op involved working a new product that was to be released.
            <br>
            The project involved changes to user facing tools as well as backend and server side changes to the system itself for optimal performance.
            Languages i got to work with for the UI tools consisted of HTML, vanilla js and some AngualrJs. Angular is a fun one, especially on a slightly older version of the language, lots of magic to deal with and files to track through,
            although it was a nice refresher into the world of user design and making items nice and pretty. UI changes were something that was sprinkled through my time at Sortable and I was number 2 on the team for tackling them.
            <br>
            The majority of my work was feature enhancement to the existing back-end system, and working on getting the product to market. This is where i got to learn and work with scala,
            by helping with prebid adapter protocol support and had the experience of sifting through objects and functions to find when a function is actually called. Functional programming showed me a new way to look at problems
            and how a problem can be solved.
            <br>
            I found functional programming to be an eye opener as well as Scala as a language, which will help me keep a more open mind when completing other tasks and problems in my future endeavours.
        </div>
    </div>

</div>
  
