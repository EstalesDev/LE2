<html>
    <head>
        <title>.: Login :. </title>
        <style>
            <?php 
            switch($_GET["theme"]) 
            {
                case "blue":
            ?>
                body {
                    background-color: blue;
                    color: white;
                }
                a {
                    color: white;
                }
                a:hover {
                    color: red;
                }
            <?php
                break;

                case "red":
            ?>
                body {
                    background-color: red;
                }
                a {
                    color: white;
                }
                a:hover {
                    color: red;
                }
            <?php
                break;
                case "green":
            ?>
                body {
                    background-color: green;
                    color: white;
                }
                a {
                    color: white;
                }
                a:hover {
                    color: red;
                }
            <?php
                break;
                
                default:
            ?>
            body {
                background-color: #fff;
            }
            <?php
                break;
            }
            ?>
        </style>
    </head>
    <body>  
        <?php
        if(isset($_POST["submit"])){
            $userName = $_POST["username"];
            $password = $_POST["password"];
            if($userName == "Ashxx" && $password == "Ashxx123"){
            echo "Welcome! ".$_POST["username"]."</strong><br>";
            echo "<a href='case_study-07.php'>Back</a>";
            } else {
            echo "Log in failed! </strong><br>";
            echo "<a href='case_study-07.php'>Back</a>";
            }
        }
        else{
            ?>
        <form method="post" action="">
        <a href="case_study-07.php?theme=blue">Blue</a> / 
        <a href="case_study-07.php?theme=red">Red</a> / 
        <a href="case_study-07.php?theme=green">Green</a> / 
        <a href="case_study-07.php">Default</a><br>
            <label>Username</label> <br>
            <input type="text" name="username"> <br>
            <label>Password</label> <br>
            <input type="text" name="password"> <br>
            <input type="submit" name="submit" value="Log In"> 
        </form>
        <?php } ?>
    </body>
</html>