<?php

session_start();
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "miniproject";

$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);


$query = 'select * from users';
$result1 = mysqli_query($connection, $query);
$rowcount = mysqli_num_rows($result1);

$query = 'select * from feedback';
$result2 = mysqli_query($connection, $query);
$rowcount2 = mysqli_num_rows($result2);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap-extended.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/fonts/simple-line-icons/style.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/colors.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="admindashcss.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</head>

<body>

    <div class="container">
        <nav class=" sidebar close">
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
                            <a href="#">
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
                        <a href="logout2.php">
                            <i class='bx bx-log-out icon'></i>
                            <span class="text nav-text">Logout</span>
                        </a>
                    </li>

                </div>
            </div>

        </nav>


        <div class="grey-bg container-fluid">


            <section id="stats-subtitle">
                <div class="row">
                    <div class="col-12 mt-3 mb-1">
                        <h4 class="text-uppercase">Dashboard</h4>
                        <p>Statistics of users</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-6 col-md-12">
                        <div class="card overflow-hidden">
                            <div class="card-content">
                                <div class="card-body cleartfix">
                                    <div class="media align-items-stretch">
                                        <div class="align-self-center">
                                            <i class="icon-user primary font-large-2 mr-2"></i>
                                        </div>
                                        <div class="media-body">
                                            <h4>Users</h4>
                                            <span><a href="tables1.php"> All Users</a></span>
                                        </div>
                                        <div class="align-self-center">

                                            <h1> <?php echo $rowcount ?></h1>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-md-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body cleartfix">
                                    <div class="media align-items-stretch">
                                        <div class="align-self-center">
                                            <i class="icon-book-open warning font-large-2 mr-2"></i>
                                        </div>
                                        <div class="media-body">
                                            <h4>Pages</h4>
                                            <span><a href="pages.html">All Pages</a></span>
                                        </div>
                                        <div class="align-self-center">
                                            <h1>-</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-6 col-md-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body cleartfix">
                                    <div class="media align-items-stretch">
                                        <div class="align-self-center">
                                            <h1 class="mr-2"><?php echo $rowcount2 ?></h1>
                                        </div>
                                        <div class="media-body">
                                            <h4>Feedback</h4>
                                            <span><a href="adminfeedback.php">Feedback</a> </span>
                                        </div>
                                        <div class="align-self-center">
                                            <i class="icon-speech danger font-large-2"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-md-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body cleartfix">
                                    <div class="media align-items-stretch">
                                        <div class="align-self-center">
                                            <h1 class="mr-2">-</h1>
                                        </div>
                                        <div class="media-body">
                                            <h4>Total Visits</h4>
                                            <span>Monthly Visits</span>
                                        </div>
                                        <div class="align-self-center">
                                            <i class="icon-direction success font-large-2"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <script src="script.js"></script>
</body>

</html>