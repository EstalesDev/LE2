<!DOCTYPE html>
<html>
<head>
    <title>My Web Page</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css" />
</head>
<body>
    <div id="wrapper">

        <div class="header">
            <h1>Welcome to My Website</h1>
        </div>

        <div class="main-navigation">
            <a href="index.php">Home</a> /
            <a href="index.php?page=about-us">About us</a> /
            <a href="index.php?page=mission-vision">Mission and vision</a> /
            <a href="index.php?page=gallery">Gallery</a>
        </div>

        <div class="container">
            <?php
            switch (@$_GET['page']) {
                case "about-us":
                    include("about-us.php");
                    break;

                case "mission-vision":
                    include("mission-vision.php");
                    break;

                case "gallery":
                    include("gallery.php");
                    break;

                default:
                    include("home.php");
                    break;
            }
            ?>
        </div>

        <div class="footer">
        </div>

    </div>
</body>
</html>