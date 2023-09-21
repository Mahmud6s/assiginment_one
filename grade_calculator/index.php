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
        <div class="row">
            <div class="col-5">
                <form method="post" action="">
                    <label>Bangla</label>
                    <input name="bangla" class="form-control" placeholder="Input Bangla Marks" /><br>
                    <label>English</label>
                    <input name="english" class="form-control"placeholder="Input English Marks" /><br>
                    <label>Math</label>
                    <input name="math" class="form-control" placeholder="Input Math Marks" /><br>
                    <button class="btn btn-primary" type="submit">Get Result</button>
                    <button class="btn btn-danger" type="button" onclick="clearResult()">Clear</button>
                </form>


            </div>
            <div class="col-4">
                <div id="result">

                <?php
                       include("calculate.php");
                ?>

                </div>

            </div>
            

    </div>
    







       <script src="funcjs.js"></script>
       <script src="js/bootstrap.bundle.js"></script>
</body>
</html>