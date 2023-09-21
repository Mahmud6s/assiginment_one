<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css" >

    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-5">
                <form method="post" action="">
                    <input name="num" class="form-control" /><br>
                    <select name="operation">
                    <option value="celTofer">Celsius to Fahrenheit</option>
                    <option value="ferTocel">Fahrenheit to Celsius</option>
                    </select><br>
                    <button class="btn btn-primary" type="submit">Calculate</button>
                    <button class="btn btn-primary" type="button" onclick="clearResult()">Clear</button>
                </form>


            </div>
            <div class="col-4">

               <div id="result">

                   <?php
                         include("calculatee.php");
                   ?>
               </div>
            </div>

        </div>

    </div>
    







       <script src="funcjs.js"></script>
       <script src="js/bootstrap.bundle.js"></script>
</body>
</html>