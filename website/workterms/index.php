
<!DOCTYPE html>
<html lang="en">
<head>
<meta name="google-site-verification" content="wNIG2wKfFNZVvTIV9ihz458uL8C3zvyjqmjFaI5QOcc" />
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
    <div id="univ-logo" style="text-align:center; background-color: rgba(255,255,255,0.7)">
        <img src="shared/universityOfGuelph.jpg" width="30%">
    </div>
    <div id="git-link">
        <a href="//github.com/nickLeipold">
        <img src="shared/GitHub_Logo.png" width="18%">
        </a>
    </div>
    <div id="workterm-buttons" style="background-color:#d3d3d3;">
        <div style="margin-right:5px; margin-left:5px; display:table;">
            <h1>Employers</h1>
            <div style="overflow: hidden;">
                <div id="adknown" style="float:left;">
                    <a href="adknown/about.php">
                    <img src="adknown/adknown_logo.png" style="width:80%">
                    </a>
                </div>
                <div id="sortable" style="layout: block">
                    <a href="sortable/about.php">
                        <img src="sortable/sortable_logo.png" style="width:18%; min-width: 250px;">
                    </a>
                </div>
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

