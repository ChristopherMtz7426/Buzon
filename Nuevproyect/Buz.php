<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/estilo1.css">
</head>

<body>

<header>
  
<section id="conpri">

     <section id="contHeader">
     <div class="escudo"></div>
    <div class="derecha"></div>
    </section>

<br><br><br><br><br><br><br>
    <h1 >BUZÓN HRAEI</h1>

        <h4> El Hospital Regional de Alta Especialidad de Ixtapaluca pone  a su disposición el buzón electrónico para poder recibir sus quejas, sugerencias y/o felicitaciones.</h4>
      
    <br>

        <h5>Si cuenta con alguna duda para el llenado del cuestionario por favor comuníquese
        con el personal de atención al usuario el cual con gusto lo apoyará. Se le comunica que la información requerida es con la finalidad de mejor la atención del
    hospital y esta sera protegida en términos de lo dispuesto por la ley federal de transparencia y acceso a la información.</h5>

<div class= "container-fluid" id="contenedor2">
        <div class= "confiar"></div> 
        <div class="megafono"></div>
        <div class=" idea"></div>
</div>

<div class= "container-fluid" style ="background-color: Pink;" id="confor">
    <form method= "post"   form action="enviar.php" id="formularioRadioButtom">
  
 <div class="form-check form-check-inline" id="radio1">
  <input class="radiobox" type = "radio" id="opcion1" name="opcion"  value="Felicitaciones"  required>
  <label class="form-check-label" >Felicitación</label>
  </div>

 <div class="form-check form-check-inline"  id="radio2">
 <input class="radiobox" type="radio" id="opcion2" name="opcion"  value="Quejas"  required>
 <label class="form-check-label">Queja</label>
 </div>
 
<div class="form-check form-check-inline" id="radio3" >
<input class="radiobox" type = "radio"  id= "opcion3" name="opcion" value="Sugerencias"  required>
<label class="form-check-label" >Sugerencia</label>
</div>

</div>


<br>
<style>
input:invalid{
  border : 1px dashed red;
}
textarea:invalid{
  border : 1px dashed red;
}
select:invalid{
  border : 1px dashed red;
}
  </style>
<div class="row g-2 needs-validation"  method= "post"   form action="enviar.php" >

<hi align="center"><strong>FORMULARIO</strong></hi>
    <hr>
<p align="center"> Datos personales del usuario, familiar o representante. </p> 
    <hr>
    
            <div class="col-md-4 mb-3">
                <label for="nombre" class="form-label">Nombre (s): </label>
                <input type="text" autocomplete="off"  class="form-control" id="nombre" name=" nombre" required="" pattern="[a-zA-Z]+">
            </div>

                <div class="col-md-4 mb-3">
                <label for="apellidopaterno" class="form-label">Apellido Paterno: </label>
                <input type="text" autocomplete="off" class="form-control" name="apellidopaterno" required="" pattern="[a-zA-Z]+">
            </div>
       
            <div class="col-md-4 mb-3">
                <label for="apellidomaterno" class="form-label">Apellido Materno: </label>
                <input type="text" autocomplete="off" class="form-control"  name="apellidomaterno" required="" pattern="[a-zA-Z]+">
            </div>

            <div class="col-md-4 mb-3">
                <label for="telefono" class="form-label">Teléfono: </label>
                <input type="number" autocomplete="off" class="form-control"  name= "telefono" aria-activedescendant="telefonoHelp" required>
                <div id="telefono" class="form-text"> Tu número telefónico sera confidencial.</div> 
            </div>

            <div class="col-md-4 mb-3">
                <label for="direccion" class="form-label">Dirección: </label>
                <input type="text" autocomplete="off" class="form-control" name="direccion" required>
            </div>

            <div class="col-md-4 mb-3">
                <label for="correo" class="form-label">Correo Electrónico: </label>
                <input type="email" autocomplete="off" class="form-control" aria-describedby="correohelp" name="correo" required>
                <div id="correohelp" class="form-text">Tu correo electrónico sera confidencial.</div>
            </div>
    <hr>
<p align="center">La información solicitada es para hacerle llegar la notificación o resolución de su solicitud. </p> 
     <hr>
     <script>
            window.addEventListener('DOMContentLoaded', (evento) =>{  
              const hoy_fecha = new Date().toISOString().substring(0,10);
              document.querySelector("input[name='fechas']").max = hoy_fecha;

            });
      </script>
     <div class="col-md-4 mb-3">
                <label for="fechas" class="form-textarea">Fecha del suceso: </label> 
                <input type="date"  class="form-control" id="fechas" name="fechas"  required>
            </div>

            <div class="col-md-4 mb-3">
                <label for="servicio" >Servicio: </label>
                <select name="servicio" id="servicio" class="form-select" required>
                <option selected disabled >*seleccione una opción*</option>
                <?php
                      require 'conexion.php';

                      $sql = $conexion->query("SELECT * From servicio where estado = 'activo'");
                        while ($row = mysqli_fetch_array($sql)){
                          $id = $row['id_servicio'];
                          $nombre = $row['nombre_servicio'];

                ?>

                <option value="<?php echo $id; ?>"><?php echo $nombre; ?></option>
              <?php

                        }

              ?>
              </select>
              </div>

            <div class="col-md-4 mb-3">
            <label for="personal">Personal involucrado: </label>
            <select name="personal" id="personal" class="form-select" required>
              <option selected disabled >*seleccione una opción*</option> 
              <?php

                      $sql = $conexion->query("SELECT * From personal where estado = 'activo'");
                        while ($row = mysqli_fetch_array($sql)){
                          $id = $row['id_personal'];
                          $nombre = $row['nombre_personal'];

                ?>
                
                   <option value="<?php echo $id; ?>"><?php echo $nombre; ?></option>
              <?php

                        }

              ?>
              </select>
              </div>

              <center><div class="col-md-4 mb-3"></center>
                <center><label for="contenido" class="form-textarea">Contenido: </label></center>
                <textarea class="form-control"  id="contenido" rows="4"  name="contenido" required></textarea>
                <div id="contenidoHelp" class="form-text">Añade una breve descripción de lo ocurrido.</div>
          
            </div>     

<center><input type="submit" name="guarda" class="btn btn-success" value="Enviar" >
&nbsp &nbsp &nbsp &nbsp
<input type="reset" class="btn btn-secondary" value="Borrar"><center>

                      
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
</script> 

        </form> 
        </div>
        </main> 
</section>
</section>
        </header>

</body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</html> 