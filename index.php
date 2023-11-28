<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>INF402_DW_2023_MIELE_TP4 - Formulario para generar y mostrar JSON</title>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js" ></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    
    <script>
        function buscarID(Id) {
            $.ajax({
                url: 'servidor.php',
                type:'GET',
                data: {"id":Id},
                beforeSend: function () {
                    $("#textAreaMostrarJSON").html("Buscando producto, espere por favor...");
                },
                success:  function (data) {
                    $("#textAreaMostrarJSON").html(data);
                }
            }); 
        }
    </script>
</head>
<body>
    <h1>Productos desde MySQL a JSON</h1>
    <br>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header">
                <h2>Consulta de Producto por ID</h3>
            </div>
            <div class="card-body">
                <form method="GET">
                    <div class="form-group">
                        <label for="nombre"><strong>Ingrese Id de Producto: </strong></label>
                        <input type="number" name="id" id="id" />
                    </div>
                    <div class="form-group">
                        <input class="btn btn-primary btn-block mb-4" type="button" href="javascript:;" onclick=" buscarID($('#id').val(),);return false;" value="Obtener JSON"/>
                    </div>
                    <textarea name="textAreaMostrarJSON" id="textAreaMostrarJSON" cols="50" rows="8"></textarea>
                </form>
            </div>
        </div>
    </div>
</body>

</html>