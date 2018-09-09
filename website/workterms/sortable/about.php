<!DOCTYPE html>
<html lang="en">
<head>
    <title>About Sortable</title>
    <?php
    echo file_get_contents(__DIR__ . "/../shared/bootstrap_jquery.html");
    ?>
</head>
<body background="../shared/background.jpg">
<?php
echo file_get_contents(__DIR__ . "/../shared/nav_bar.html");
?>
<h2 style="text-align:center; background-color: rgba(255,255,255,0.7)">About Sortable</h2>

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

    <div id="Sortable" style="display:block; width:100%">
            <a href="https://www.Sortable.com/about-us">
                <img src="sortable_logo.png" style="float:left; padding: 20px 20px 20px 20px; width:20%">
            </a>
        <div id="quick-facts">
            <h4>Quick Facts</h4>
            <p>
            - Located in the market Square Building in the same office as the Record<br>
            - Close knit scrappy team of marketers, sales and developers<br>
            - Great breadth of customers from many demographics<br>
            - Machine learning Ad optimization
            </p>
    </div>
</div>
<div id="advertising" style="display:block">
    <h4>About Sortable</h4>
    <p>&nbsp;&nbsp;Sortable is an agnostic, low-cost, broad spectrum platform that helps publishers unify demand partners, data, and tools.
    They've developed a best-in-class UI that contextualizes this data, allowing publishers to more deeply understand the correlation between content, marketing, and monetization.
        Sortable started out building sites that helped consumers compare products, but found a more productive use of the knowledge of building sites
        was through bringing new publishers into the online ad space and ad optimizations.
    </p>
</div>
<br>
</div>
</body>
