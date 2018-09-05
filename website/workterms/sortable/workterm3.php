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
<body background="/../shared/background.jpg">

<?php
echo file_get_contents(__DIR__ . "/../shared/nav_bar.html");
?>

<div id="content">
    <div id="company" style="background-color: rgba(255,255,255,0.7)">
        <img id="sortable-logo" src="sortable_logo.png">
    </div>

    <h2 style="text-align:center; background-color: rgba(255,255,255,0.7);"><?php echo $title ?></h2>

    <style>
        #job-description {
            background-color: rgba(255, 255, 255, 0.7);
        }
    </style>
    <div id="job-description">
        <h2 style="text-align:center;">Job Description</h2>
        <img id="group-picture" src="group.png">
        <br>
        <div id="term-info">
            Duration: May 2018 - August 2018 <br>
            Position: Software Developer Co-op
        </div>
        <div id="job-desc">
            My job as a Software Engineering Intern involved working on a variety of projects. <br>
            The first project I had worked on had to do with on-line traffic, the traffic that comes in needs to be
            filtered for authenticity from artificial traffic to ensure quality of our product. <br>
            I was tasked with rewriting the existing tool with a new aggregation system. <br>
            This involved looking into different aggregation methods and services, as well as aggregating the data onto
            AWS's S3.<br>
            I was also fixing rendering problems and using Athena to run queries on the data gathered, used towards the
            services Sortable offers. <br>
            I had also worked on multiple tools that are used in house to increase productivity, as well as securing
            Wordpress sites to prevent attacks from being successful and creating API's.
            <br>
            What I found most interesting about the position is the amount of information gathered and used for
            advertisements.<br> I enjoyed learning about all of the different tools used, and learning about Amazon Web
            Services which are very useful and highly scalable.
        </div>
    </div>

</div>
  
