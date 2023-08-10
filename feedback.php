<?php
session_start();

include("connection.php");
include("functions.php");


if ($_SERVER['REQUEST_METHOD'] == "POST") {
  //SOMETHING WAS POSTED
  $user_name = $_POST['user_name'];
  $password = $_POST['password'];
  $mail_id = $_POST['mail_id'];


  if (!empty($user_name) && !empty($password) && !empty($user_name)) {
    //save to db
    $query = "insert into feedback (user_name,mail_id,feedback) values('$user_name','$mail_id','$password')";
    mysqli_query($con, $query);

    header("Location:feedback.php");
    die;
  } else {
    echo "Please enter some valid info";
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Feedback</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="stylefeed.css" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
    body {
        margin-top: 50px;
        padding: 0;
        background-image: url(background.png);
        background-repeat: no-repeat;
        background-size: cover;
        height: 100%;
        position: relative;
    }

    nav {
        margin-left: 80px;
    }

    nav ul {
        list-style: none;
        margin: 0;
        padding: 10px;
        overflow: hidden;
    }

    nav li {
        float: left;
    }

    .button {
        margin-left: 45%;
        margin-top: 2%;
    }

    nav li a {
        display: block;
        color: #ffffff;
        text-align: center;
        font-size: medium;
        padding: 14px 16px;
        text-decoration: none;
    }

    nav ul li a.active {
        background-color: rgb(52, 52, 234);
        /* Example active tab background color */
        color: black;
        /* Example active tab text color */
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    }

    nav li a:hover {
        background-color: #e4d7d7;
        color: #000000;
    }

    .username {
        width: 25vw;
    }

    .email {
        width: 25vw;
    }

    .detail {
        border-radius: 8px;
        height: 100%;
        width: 100%;
        resize: none;
        outline: 0;
        padding: 8px 14px;
        border: 1px solid rgb(219, 213, 213);
        height: 50vh;
    }
    </style>
</head>

<body>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="resource.html">Resources</a></li>
            <li><a href="symptoms.html">Symptoms</a></li>
            <li><a href="tutorial.html">Tutorials</a></li>
            <li><a class="active" href="feedback.php">Feedback</a></li>
        </ul>
    </nav>
    <script type="text/javascript">
    (function(d, m) {
        var kommunicateSettings = {
            "appId": "ac248645c24dd0b6a239761d2ccb0917",
            "popupWidget": true,
            "automaticChatOpenOnNavigation": true
        };
        var s = document.createElement("script");
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://widget.kommunicate.io/v2/kommunicate.app";
        var h = document.getElementsByTagName("head")[0];
        h.appendChild(s);
        window.kommunicate = m;
        m._globals = kommunicateSettings;
    })(document, window.kommunicate || {});
    /* NOTE : Use web server to view HTML files as real-time update will not work if you directly open the HTML file in the browser. */
    </script>
    <div class="container">
        <form action="feedback.php" method="post" class="user">
            <div class="heading fw-bolder">
                <h2>Feedback</h2>
            </div>
            <div class="form-group">
                <input type="text" placeholder="Enter username" name="user_name" class="username form-control" />
            </div>
            <div class="form-group">
                <input type="text" placeholder="Enter your email" name="mail_id" class="email form-control" />
            </div>
            <div class="form-group">
                <input type="text" class="detail form-control" name="password"
                    placeholder="Enter your feedback"></input>
            </div>
            <div class="form-btn">
                <input type="submit" value="Submit" name="submit" class="btn btn-primary" />
            </div>
        </form>
    </div>
</body>

</html>