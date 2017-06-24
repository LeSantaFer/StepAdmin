<!DOCTYPE html>
<html lang="en">
<head>
    <!-- CSS  -->
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>

<?php
    if (isset($_REQUEST["page"])) {
        if ($_REQUEST["page"] == "users") {
            $pageUsers = true;
        } else {
            $pageUsers = false;
        }
    } else {
        $pageUsers = true;
    }
?>

<nav class="white header">
    <div class="nav-wrapper fixed" id="header-container">
        <?php if ($pageUsers) { ?>
            <a class='page-title'><strong>Usuários</strong></a>
        <?php } else { ?>
            <a class='page-title'><strong>Números</strong></a>
        <?php } ?>

        <!--ul class="left">
            <li>
                <div class="input-field" id="search-input">
                    <input id="search" class="search" required>
                    <label class="label-icon" for="search"><i class="material-icons text-darken-4 black-text">search</i></label>
                </div>
            </li>
        </ul-->

        <ul id="slide-out" class="side-nav fixed">
            <li <?php if ($pageUsers) echo("class='active'") ?>>
                <a class="waves-effect waves-light" href="index.php?page=users">Usuários</a>
            </li>

            <li <?php if (!$pageUsers) echo("class='active'") ?>>
                <a class="waves-effect waves-light" href="index.php?page=numbers">Números</a>
            </li>
        </ul>
    </div>
</nav>

</body>
</html>