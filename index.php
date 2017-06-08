<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>Enough Spam! Administração</title>

    <!-- CSS  -->
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>

<?php
    $menu = 0;
    include("head.php")
?>

<div class="container main-container">
    <div class="card">
        <div class="card-content">

            <ul class="collection">
                <?php
                for ($i = 0; $i < 100; $i++) {
                    echo("
                            <li class='collection-item waves-effect waves-grey'>
                            <div>
                        ");
                    include("php/nameGenerator.php");
                    echo("  <p class='secondary-content'>  
                                    <strong>INFORMAÇÕES</strong>
                                </p>
                            </div>
                            </li>
                        ");
                }
                ?>
            </ul>

        </div>
    </div>
</div>

<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/materialize.js"></script>
<script src="js/init.js"></script>

</body>
</html>