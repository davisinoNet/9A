<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
        <h1>hola programadores</h1>
        <h1>OPERACIONES ARITMETICAS BASICAS</h1>
<form action="calculadora.php" method="POST">
    <div class="card">
      <img src="" alt="">
      <div class="card-body">
        <h5 class="card-title"> Calculadora básica</h5>
        <p class="card-text"></p>
        <div class="text-warning">
        <div class="form-group">
        <label for="exampleInput">Dato 1</label>
        <input type="number" class="form-control" name="d1" placeholder="introduce un valor numerico" required>
        <br><br>
        <label for="exampleInput">Dato 2</label>
        <input type="number" class="form-control" name="d2" placeholder="introduce un valor numerico" required>
        <br><br>
        <input type="submit" name="btnsuma" value="suma" class="btn btn-primary pull-right"> 
        <input type="submit" name="btnresta" value="RESTA">
        <input type="button" value="Multiplicacion" class="btn btn-danger">
        <input type="button" value="Division">
        
    </div>
        </div>
        <a href="#" class="btn btn-primary pull-right"></a>
      </div>
    </div>


</form>
    
        </header>
       

        <main></main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>


<?php 

        if($_POST)
	{	
        $num1 = $_POST['d1'];
		$num2 = $_POST['d2'];

		if(isset($_POST['btnsuma'])=="suma")
        {
		    $suma = $num1 + $num2;
		    echo "La suma de ".$num1." + ".$num2." es: ".$suma; 
        }
        else if(isset($_POST['btnresta'])=="RESTA")
        {
            $resta = $num1 - $num2;
		    echo "La resta de ".$num1." - ".$num2." es: ".$resta; 
        }

	}

        ?>