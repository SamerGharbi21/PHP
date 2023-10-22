<?php 

$number1 = $_GET["Number1"];
$number2 = $_GET["Number2"];
$op = $_GET["op"];

if(!empty($number1) && !empty($number2 && !empty($op))){
if($op === "+"){
$result = $_GET["Number1"] + $_GET["Number2"];
}elseif($op === "-"){
    $result = $_GET["Number1"] - $_GET["Number2"];
}elseif($op === "*"){
    $result = $_GET["Number1"] * $_GET["Number2"];
}elseif($op === "/"){
    $result = $_GET["Number1"] /$_GET["Number2"];
} 
}else{
    $result = "wrong input !!";
}
?>


<head>
<
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <br>
    <div class="container">

    <form action="cal.php" method="GET" class="form">
        <div>
            <label> Enter Number 1 </label>
            <input type="number" name="Number1" class="form-control">
</div>
<br>
    <div class="container">

    <form action="cal.php" method="POST" class="form">
        <div>
            <label> Enter Number 2 </label>
            <input type="number" name="Number2" class="form-control">
</div>
<br>
<div>
    <label> Opration </label>
    <input type="text" name="op" class="form-control">
</div>
    <br>
    <div  class="alert alert-success">
    <?php
    echo $result
    ?>
    </div>
<br>
    <input type="submit" class="btn btn-primary">
   
</form>
</div>
</body>
