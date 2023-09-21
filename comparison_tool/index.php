<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="js/bootstrap.css" >

    <title>Document</title>
</head>
<body>
    <div class="container">
        <h3>Comparison Between Two Number</h3>
        <div class="row">
            <div class="col-5">
                <form method="post" action="">
                    <label>Input Your First Number</label>
                    <input name="number1" class="form-control" /><br>
                    <label>Input Your Secound Number</label>
                    <input name="number2" class="form-control" /><br>
                    <button class="btn btn-primary" type="submit">Get Result</button>
                    <button class="btn btn-danger" type="button" onclick="clearResult()">Clear</button>
                </form>


            </div>
            <div class="col-4">
                <h3>Result:</h3><br>
                <div id="result">

                <?php
                       include("calculate.php");
                ?>

                </div>

            </div>
            

    </div>
    </div>







       <script src="funcjs.js"></script>
       <script src="js/bootstrap.bundle.js"></script>
</body>
</html>