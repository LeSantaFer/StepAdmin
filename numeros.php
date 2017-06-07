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
    <div class="card">
        <div class="card-content">

            <ul class="collection column">
                <?php
                    for ($i = 1; $i < 51; $i++) {
                        echo("
                            <li class='collection-item waves-effect waves-grey'>
                                <div>$i
                                    <p class='secondary-content'>
                                        <strong>INFO</strong>
                                    </p>
                                </div>
                            </li>
                        ");
                    }
                ?>
            </ul>

            <ul class="collection column">
                <?php
                    for ($i = 51; $i < 101; $i++) {
                        echo("
                            <li class='collection-item waves-effect waves-grey'>
                                <div>$i
                                    <p class='secondary-content'>
                                        <strong>INFO</strong>
                                    </p>
                                </div>
                            </li>
                        ");
                    }
                ?>
            </ul>

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