
<!DOCTYPE html>
<html lang="en">
<head>
    <title>NickolasLeipold.com</title>
<?php
    echo file_get_contents(__DIR__."/shared/bootstrap_jquery.html");
?>
</head>
<body>
<?php
    echo file_get_contents(__DIR__."/shared/nav_bar.html");
?>

<div id="workterm-buttons" class="jumbotron">
    <h1>Workterm reports</h1>
    <a href="1/workterm1.php" class="btn" style="margin-left=10px;" >First & Second</a>
</div>

</body>

