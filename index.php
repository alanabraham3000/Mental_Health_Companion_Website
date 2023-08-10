<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Project</title>
    <link rel="stylesheet" type="text/css" href="style1.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

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

    <style>
    body {
        margin-top: 50px;
        padding: 0;
        background-image: url(background.png);
        background-repeat: repeat;
        background-size: cover;
        height: 100vh;
        position: relative;
        display: flex;
        flex-direction: column;
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


    nav li a {
        display: block;
        color: #ffffff;
        text-align: center;
        font-size: medium;
        padding: 14px 16px;
        text-decoration: none;
    }

    nav li a:hover {
        background-color: #e4d7d7;
        color: #000000;
    }

    nav ul li a.active {
        background-color: rgb(52, 52, 234);
        /* Example active tab background color */
        color: black;
        /* Example active tab text color */
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    }

    .container h1 {
        font-size: 100px;
        /* adjust the font size as desired */
        text-align: center;
        color: #ffffff;
        margin-top: 15%;
        margin-left: 15%;
    }

    .container h3 {
        font-size: 20px;
        /* adjust the font size as desired */
        text-align: center;
        color: #ffffff;
        margin-top: 1%;
        margin-left: 15%;
    }
    </style>
</head>

<body>
    <nav>
        <ul>
            <li><a class="active" href="index.php">Home</a></li>
            <li><a href="resource.html">Resources</a></li>
            <li><a href="symptoms.html">Symptoms</a></li>
            <li><a href="tutorial.html">Tutorials</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="feedback.php">Feedback</a></li>

        </ul>
    </nav>
    <div class="container">
        <div class="col-xl-10">
            <h1>Companion</h1>
            <h3>"Your mental health, with a trusted Companion"</h3>
        </div>
    </div>
    <?php
    session_start();

    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);

    if ($user_data) {
        $username = $user_data['user_name'];
        echo '<a href="#" class="btn btn-primary" id="openBtn" style="position: fixed; top: 40px; right: 30px;font-size:18px" >' . $username . '</a>';
    }
    ?>


    <div id="popup" class="popup">
        <div class="popup-content" style="background-color: rgb(85, 134, 207);">
            <h2><?php echo $username; ?></h2>
            <p><?php echo $user_data['mail_id']; ?></p>
            <button id="closeBtn" class="btn btn-primary">Close</button>
            <a href="logout.php" class="btn btn-primary">Logout</a>
        </div>
    </div>

    <script>
    document.getElementById("openBtn").addEventListener("click", function() {
        document.getElementById("popup").style.display = "block";
    });

    document.getElementById("closeBtn").addEventListener("click", function() {
        document.getElementById("popup").style.display = "none";
    });
    </script>

</body>

</html>