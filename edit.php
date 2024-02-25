<?php
$id= $_REQUEST["id"];
//Create connection
require_once("connection.php");
//Prepare Stameent

$st=$pdo->prepear("select * from product where product_id=:id");
//bind value


$st->bindValue (':id' , $id');

$product = $st->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Edit Project</h1>
            <form method="POST" action="">

            <div>
                <div class="mb-3 row">
                    <label for="proName" class="form-label col-md-3" > Product Name</label>
                    <div class="col-md-9">
                    <input type="text" name="name" value="<?php  echo Sproduct('name')?>" class="form-control" id="proName" />
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="proPrice" class="form-label col-md-3" >Price </label>
                    <div class="col-md-9">
                    <input type="text" name="price" value="<?php  echo Sproduct('price')?>" class="form-control" id="proPrice" />
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="pronote" class="form-label col-md-3" >Note </label>
                    <div class="col-md-9">
                    <input type="text" name="note" value="<?php  echo Sproduct('note')?>" class="form-control" id="pronote" />
                    </div>
                </div>

                

            </div>
            
            </form>
    </div>
</body>
</html>