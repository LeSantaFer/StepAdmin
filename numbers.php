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
    $page = "numbers";
    include("head.php")
?>

<div class="container main-container">
    <div class="card">
        <div class="card-content">
            <?php
                if ($page == "users") include("users-table.php");
                else include("numbers-table.php");
            ?>
        </div>
    </div>
</div>

<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/materialize.js"></script>

<!-- Modal  -->
<script>
    $(document).ready(function() {
        $('.modal').modal();
    });
</script>

</body>

<div class='modal modal-fixed-footer' id='main-modal'>
    <div class='modal-content'>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
    </div>
    <div class="modal-footer">
        <a href="#" class="modal-action modal-close waves-effect waves-grey btn-flat">Excluir conta</a>
    </div>
</div>

</html>