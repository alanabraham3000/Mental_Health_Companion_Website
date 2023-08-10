<?php

session_start();

include("connection.php");
include("adminfunctions.php");

$user_data = check_login($con);
if ($user_data) {
    $username = $user_data['user_name'];
    $user_id = $user_data['user_id'];
    $mail_id = $user_data['mail_id'];
}

/*$_SESSION;*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="admindashcss.css">

    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <title>Dashboard Sidebar Menu</title>
</head>

<body>

    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="logo.png" alt="">
                </span>

                <div class="text logo-text">
                    <span class="name">companion</span>
                    <span class="profession">brings peace of mind</span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>
        <div class="menu-bar">
            <div class="menu">



                <ul class="menu-links">

                    <li class="nav-link">
                        <a href="admindash.php">
                            <i class='bx bx-user icon'></i>
                            <span class="text nav-text">Admin</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="zz2.php">
                            <i class='bx bxs-dashboard icon'></i>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>



                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-bell icon'></i>
                            <span class="text nav-text">Notifications</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="adminfeedback.php">
                            <i class='bx bxs-file-html icon'></i>
                            <span class="text nav-text">Pages</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="tables1.php">
                            <i class='bx bx-table icon'></i>
                            <span class="text nav-text">Tables</span>
                        </a>
                    </li>



                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="logout.php">
                        <i class='bx bx-log-out icon'></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>

            </div>
        </div>

    </nav>

    <section class="home" style="padding-left: 40px; padding-top:40px; ">
        <h1>hi,<?php echo $username ?></h1>
        <br><br><br>
        <h4>user id:<?php echo $user_id ?></h4>
        <h4>mail id:<?php echo $mail_id ?></h4>

    </section>

    <script src="script.js"></script>

</body>

</html>