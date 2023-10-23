<?php
    //calculator
    $number1 =  $_GET["number1"];
    $number2 = $_GET["number2"];
    $op = $_GET["op"];

    if (empty($number1)) {
        $result = "الرقم الاول فارغ";
    }elseif(empty($number2)){
        $result = "الرقم الثاني فارغ";
    }elseif(empty($op)){
        $result = "العملية فارغة";
    }else{
        if ($op === "+") {
            $result = $_GET["number1"] + $_GET["number2"];
        }elseif($op === "-") {
            $result = $_GET["number1"] - $_GET["number2"];
        }elseif($op === "/") {
            $result = $_GET["number1"] / $_GET["number2"];
        }elseif($op === "*") {
            $result = $_GET["number1"] * $_GET["number2"];
        }
    }
?>

<body>
    <div class="container">
        <form action="calc.php" method="GET" class="form">
            <div>
                <label>الرقم الاول:</lable>
                <input type="number" id="num1" name="number1" class="form-control">
            </div>
            <br>
            <div>
                <label>الرقم الثاني:</lable>
                <input type="number" id="num2" name="number2" class="form-control">
            </div>
            <br>
            <div>
                <label>العملية:</label>
                <input type="text" name="op" class="form-control">
            </div>
            <br>
            <div class="alert alert-success">
                <?php echo $result ?>
            </div>
            <input type="submit" class="btn btn-primary">

            

        </form>

    </div>
</body>