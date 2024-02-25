<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
//1 create connection
require("connection.php");

//2 get data from form
$name = $_REQUEST["name"];
$price = $_REQUEST["price"];
$note = $_REQUEST["note"];

//3 prepare statament
$statament = $pdo->prepare(
    "INSERT INTO product(name,price,note)
    VALUE(:name,:price,:note)");



//4 Bind value
    $statament->bindValue(":name,$name");
    $statament->bindValue(":price,$price");
    $statament->bindValue(":note,$note");

 //5 Execte
    $statament->execute();
//6 Redirect to List
    header("Location: index.php");


};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Add New Project</h1>
            <form method="POST" action="">

            <div>
                <div class="mb-3 row">
                    <label for="proName" class="form-label col-md-3" > Product Name</label>
                    <div class="col-md-9">
                    <input type="text" value="<?php  echo Sproduct('name')?>" name="name" class="form-control" id="proName" />
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="proPrice" class="form-label col-md-3" >Price </label>
                    <div class="col-md-9">
                    <input type="text" value="<?php  echo Sproduct('price')?>" name="price" class="form-control" id="proPrice" />
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="pronote" class="form-label col-md-3" >Note </label>
                    <div class="col-md-9">
                    <input type="text" value="<?php  echo Sproduct('note')?>" name="note" class="form-control" id="pronote" />
                    </div>
                </div>

                

            </div>
            </form>
    </div>
</body>
</html>