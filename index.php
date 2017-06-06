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

<nav class="white header">
    <div class="nav-wrapper fixed" id="header-container">
        <a class="page-title"><strong>Usuários</strong></a>

        <!--ul class="left">
            <li>
                <div class="input-field" id="search-input">
                    <input id="search" class="search" required>
                    <label class="label-icon" for="search"><i class="material-icons text-darken-4 black-text">search</i></label>
                </div>
            </li>
        </ul-->

        <ul id="slide-out" class="side-nav fixed">
            <li class="active">
                <a class="waves-effect waves-light" href="">Usuários</a>
            </li>
            <li>
                <a class="waves-effect waves-light" href="numeros.php">Números</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container main-container">
    <div class="card" id="card-home">
        <div class="card-content">

            <div id="left-column">
                <?php
                for ($i = 1; $i < 51; $i++) {
                    echo("<p>" . $i . "</p>");
                }
                ?>
            </div>

            <div id="right-column">
                <?php
                for ($i = 51; $i < 101; $i++) {
                    echo("<p>" . $i . "</p>");
                }
                ?>
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