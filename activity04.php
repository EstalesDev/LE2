<html>
    <head>
        <title>My first php file</title>
        <script>
            function calculate(){
                let op = document.getElementById("oper").value;
                let num1 = document.getElementById("txtNum1").value;
                let num2 = document.getElementById("txtNum2").value;
                let answer = 0;
                
                if (op == "+") {
                    answer = parseFloat(num1) + parseFloat(num2);
                }
                else if (op == "-") {
                    answer = parseFloat(num1) - parseFloat(num2);
                }
                else if (op == "*") {
                    answer = parseFloat(num1) * parseFloat(num2);
                }
                else if (op == "/") {
                    if (parseFloat(num2) === 0) {
                        answer = "Cannot divide by zero";
                    } else {
                        answer = parseFloat(num1) / parseFloat(num2);
                    }
                }
                else {
                    answer = "Invalid operation";
                }
                
                document.getElementById("result").innerHTML = "Result: <strong>" + answer + "</strong>";
            }
        </script>
    </head>
    <body>
        <?php
            if(isset($_POST["btnSubmit"])){
                echo "Number 1 entered: <strong>".$_POST["txtNum1"]."</strong><br>";
                echo "Number 2 entered: <strong>".$_POST["txtNum2"]."</strong><br>";
                echo "<a href='activity_02.php'>Back</a>";
            } else {
        ?>
        
        <form onsubmit="calculate(); return false;">
            <div>
                <label for="txtNum1">Enter Number 1: </label> 
                <input type="text" name="txtNum1" id="txtNum1" placeholder="0"> 
            </div>
            <br>
            <div>
                <label for="txtNum2">Enter Number 2: </label> 
                <input type="text" name="txtNum2" id="txtNum2" placeholder="0"> 
            </div>
            <br>
            <div>
                <label for="oper">Enter Operator (+, -, *, /): </label> 
                <input type="text" name="oper" id="oper" placeholder="+"> 
            </div>
            <br>
            
            <input type="submit" name="btnSubmit" value="Compute">
        </form>

        <div id="result" style="margin-top: 20px; font-size: 18px;"></div>

        <?php } ?>
    </body>
</html>
