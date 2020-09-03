  <!doctype html>
  <html lang="es">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <!-- Custom -->
    <link rel="stylesheet" href="assets/style.css">

    <title>Calculadora PHP</title>

  </head>

  <body>

   <div class="container h-100">
    <div class="row h-100">
      <div class="col-md-5 mx-auto my-auto text-center bg-white shadow-lg rounded-lg py-2">

        <!-- points -->
        <div class="d-flex p-3">
          <div class="bg-light rounded-circle point"></div>
          <div class="bg-light rounded-circle point mx-1"></div>
          <div class="bg-light rounded-circle point"></div>
        </div>


        <form action="index.php" method="post" >

          <?php 
          if (isset($_POST["num1"])) {

            $num1 = intval($_POST["num1"]);
            $op = $_POST["op"];
            $num2 = intval($_POST["num2"]);
            $result = 0;

            switch ($op) {
              case "+":
              $result = $num1 + $num2;
              break;

              case "-":
              $result = $num1 - $num2;
              break;

              case "*":
              $result = $num1 * $num2;

              break;

              case "/":
              $result = "no se puede dividir";

              if ($num2 != 0) {

                $result = $num1 / $num2;

              }

              

              break;
              
              default:

              $result = "operador inválido";

              break;
            }

          }else{

            $result = 0;

          }

          ?>

          <!-- outputs -->
          <div class="text-left ml-3">
            <h5 class="text-muted">Resultado:</h5>
            <h1> <?php echo $result; ?> </h1>
          </div>

          <!-- inputs -->

          <div class="d-flex justify-content-end">
            <p class="text-muted mt-2 mr-3">Operación</p>
            <div class="btn-group btn-group-toggle" data-toggle="buttons">
              <label class="btn btn-op rounded-circle mr-3">
                <input type="radio" name="op" id="option1" autocomplete="off" value="+"  required> +
              </label>
              <label class="btn btn-op rounded-circle mr-3">
                <input type="radio" name="op" id="option2" autocomplete="off" value="-" required> -
              </label>
              <label class="btn btn-op rounded-circle mr-3">
                <input type="radio" name="op" id="option3" autocomplete="off" value="*" required> x
              </label>
              <label class="btn btn-op rounded-circle mr-3">
                <input type="radio" name="op" id="option3" autocomplete="off" value="/" required> /
              </label>
            </div>  
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Número</span>
            </div>
            <input type="number" class="form-control" placeholder="0" name="num1" required>
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Número</span>
            </div>
            <input type="number" class="form-control" placeholder="0" name="num2" required>
          </div>

          <!-- submit -->
          <button type="submit" class="btn btn-primary btn-block">Calcular</button>

        </form>

      </div>
    </div>
  </div>

  <!-- jQuery, Popper, Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <script src="assets/script.js"></script>
</body>
</html>