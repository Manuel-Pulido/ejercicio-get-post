<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>

<div class="container">
 <form action="respuestapost.php" method="POST">
   <div class="form-group">
     <label for="">Nombres</label>
     <input name="nombres" type="text" class="form-control" id="exampleInputEmail1" >
   </div>
   <div class="form-group">
     <label for="">Apellidos</label>
     <input name="apellidos" type="text" class="form-control" id="exampleInputPassword1">
   </div>
   <div class="form-group">
     <label for="">Edad</label>
     <input name="edad" type="number" class="form-control" id="exampleInputPassword1">
   </div>
   <div class="form-group">
     <label for="">Correo</label>
     <input name="correo" type="email" class="form-control" id="exampleInputPassword1">
   </div>
   <div class="form-group">
     <label for="">Direccion</label>
     <input name="dirrecion" type="text" class="form-control" id="exampleInputPassword1">
   </div>
   <div class="form-group">
     <label for="">Curso</label>
     <input name="curso" type="text" class="form-control" id="exampleInputPassword1">
   </div>
   <button type="submit" class="btn btn-primary">Submit</button>
 </form>
</div>
</body>
</html>