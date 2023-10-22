<?php 

$result = $_POST["Number1"] + $_POST["Number2"];

?>


<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <br>
    <div class="container">

    <form action="cal.php" method="POST" class="form">
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
<div  class="alert alert-success">
    <?php
    echo $result
    ?>
    </div>

    <input type="submit" class="btn btn-primary">
</form>
</div>
</body>
