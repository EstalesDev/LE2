<html>
    <head>
        <title>My first php file</title>
    </head>
    <body>
        <?php
            if(isset($_POST["btnSubmit"])){
                echo "the name you entered is <strong>".$_POST["txtName"]."</strong><br>";
                echo "<a=href='activity_02.php'>Back</a>";
            } else {
        ?>
        <form method="post" action="activitiy01.php">
            <label>Name</label>
            <input type="text" name="txtName" id="txtName" placeholder="name...">
            <input type="submit" name="btnSubmit" value="Submit"/>
        </form>
        <?php } ?>
    </body>
</html>