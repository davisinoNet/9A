<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>OPERACIONES ARITMETICAS BASICAS</h1>
<form action="operaciones.php" method="post">
    <div class="card">
      <img src="" alt="">
      <div class="card-body">
        <h5 class="card-title"></h5>
        <p class="card-text"></p>
        <div class="text-warning">
        <div class="form-group">
        <label for="exampleInput">Dato 1</label>
        <input type="text" class="form-control" id="d1" placeholder="introduce un valor numerico">
        <br><br>
        <label for="exampleInput">Dato 2</label>
        <input type="text" class="form-control" id="d2" placeholder="introduce un valor numerico">
        <br><br>
        <input type="button" value="suma"> 
        <input type="button" value="RESTA">
        <?php 
        

        echo "hola esto es una modificación";  
         echo "Aqui se pondra las operaciones";  ?>
    </div>
        </div>
        <a href="#" class="btn btn-primary pull-right"></a>
      </div>
    </div>


</form>
    
</body>
</html>