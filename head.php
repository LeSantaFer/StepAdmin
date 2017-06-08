<!DOCTYPE html>
<html lang="en">
<head>
    <!-- CSS  -->
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>

<nav class="white header">
    <div class="nav-wrapper fixed" id="header-container">
        <?php
            if ($page == "index")
                echo("<a class='page-title'><strong>Usuários</strong></a>");
            else if ($page == "numbers")
                echo("<a class='page-title'><strong>Números</strong></a>");
        ?>

        <!--ul class="left">
            <li>
                <div class="input-field" id="search-input">
                    <input id="search" class="search" required>
                    <label class="label-icon" for="search"><i class="material-icons text-darken-4 black-text">search</i></label>
                </div>
            </li>
        </ul-->

        <ul id="slide-out" class="side-nav fixed">
            <li <?php if ($page == "index") echo("class='active'") ?>>
                <a class="waves-effect waves-light" href="index.php">Usuários</a>
            </li>
            <li <?php if ($page == "numbers") echo("class='active'") ?>>
                <a class="waves-effect waves-light" href="numbers.php">Números</a>
            </li>
        </ul>
    </div>
</nav>

</body>
</html>