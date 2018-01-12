
<!DOCTYPE html>
<html lang="en">
<head>
    <title>NickolasLeipold.com</title>
<?php
    echo file_get_contents(__DIR__."/shared/bootstrap_jquery.html");
?>
</head>
<body background="shared/orange-background.png">
<?php
    echo file_get_contents(__DIR__."/shared/nav_bar.html");
?>
<div style="margin-left: 5px; margin-right: 5px;">

    <div id="intro" style="text-align:center">
        <h4>Hey folks, welcome to my site. The main purpose of this site is to bring light on my work experiences, while in the co-op program at the University of Guelph.</h4>
    </div>
    <div id="univ-logo" style="text-align:center">
        <img src="shared/universityOfGuelph.jpg" width="30%">
    </div>
    <div id="git-link">
        <a href="//github.com/nickLeipold">
        <img src="shared/GitHub_Logo.png" width="18%">
        </a>
    </div>
    <div id="workterm-buttons" style="background-color:#d3d3d3;">
        <div style="margin-right:5px; margin-left:5px;">
            <h1>Employers</h1>
            <div id="adknown">
                <a href="/adknown/about.php">
                <img src="/adknown/adknown_logo.png" width="18%">
                </a>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
</div>


<h4 style="padding-left:5px;">
    The site has been made using HTML, PHP and javascript. Bootstrap has been implemented and files are linked together using PHP for shared elements.
<h4>

</body>

