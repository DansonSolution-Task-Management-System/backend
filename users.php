<?php require_once "include/header.php"; ?>

    <body>
<div class="grid-container">
    <!-- header starts -->
    <?php require_once "include/navigation.php"; ?>

    <!-- sidenav starts -->
    <?php require_once "include/sidebar.php"; ?>

    <!-- main starts -->
    <main class="main">
        <!-- content goes here -->
        <?php
        if (isset($_GET['users']))
        {
            $users = $_GET['users'];

            switch ($users)
            {
                case "admin":
                    require_once "users/admin.php";
                    break;
                case "interns":
                    require_once "users/interns.php";
                    break;
                case "developer":
                    require_once "users/developer.php";
                    break;
                case "add-user":
                    require_once "users/add-users.php";
                    break;
            }
        }
        ?>
        <!-- content goes here -->
    </main>

<?php
require_once "include/footer.php";
?>