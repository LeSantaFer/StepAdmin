<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>Enough Spam! Administração</title>

    <!-- CSS  -->
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>

<?php
    $menu = 1;
    include("head.php")
?>

<div class="container main-container">
    <div class="card" id="card-home">
        <div class="card-content">

            <div id="left-column">
                <div id="left-column-left">
                    <?php
                    for ($i = 1; $i < 51; $i++) {
                        echo("<p>" . $i . "</p>");
                    }
                    ?>
                </div>
                <div id="left-column-right">
                    <?php
                    for ($i = 51; $i < 101; $i++) {
                        echo("<p>" . $i . "</p>");
                    }
                    ?>
                </div>
            </div>

            <div id="right-column">
                <div id="right-column-left">
                    <?php
                    for ($i = 101; $i < 151; $i++) {
                        echo("<p>" . $i . "</p>");
                    }
                    ?>
                </div>
                <div id="right-column-right">
                    <?php
                    for ($i = 151; $i < 201; $i++) {
                        echo("<p>" . $i . "</p>");
                    }
                    ?>
                </div>
            </div>

            <br style="clear:both;"/>
        </div>
    </div>
</div>

<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/materialize.js"></script>
<script src="js/init.js"></script>

</body>
</html>