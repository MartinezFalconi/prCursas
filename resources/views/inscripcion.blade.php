<!DOCTYPE html>
<html>
<head>
<title>Inscripcion</title>
<link rel="stylesheet" href="css/style.css">
<script src="js/code.js"></script>
</head>

<body>
<div class="header">
    <div class="topnav">
        <a href="./index.html">Inici</a>
        <a href="#">Classificacions</a>
        <a href="./inscripcion.php">Inscripcions</a>
        <a href="#">Noticies</a>
        <a href="#">Galeria</a>
        <div class="idioma">
            <select aria-placeholder="Idioma">
                <option>Español</option>
                <option>Ingles</option>
            </select>
            <button>Enviar</button>
        </div>
    </div>
    <div class="inscribete">
        <form action="{{url('inscripcionUser')}}" method="POST" onsubmit="return validacionForm()" enctype="multipart/form-data">
        @csrf
            <p>Nombre: </p> 
            <input type="text" name="name" size="40" id="validado1">
            <p>Apellido: </p>
            <input type="text" name="apellido" size="40" id="validado2">
            <p>DNI: </p>
            <input type="text" name="dni" size="40" id="validado3" onfocusout="validaDNI()">
            <p>Fecha de nacimiento: </p>
            <input type="date" name="nacido" id="validado4" onfocusout="validaCategoria()"><br>
            <div id="mensaje" class="mensaje">

            </div>  
            <p>Sexo:<br><br>
                <input type="radio" name="sexo" value="Masculino"> Masculino
                <input type="radio" name="sexo" value="Femenino"> Femenino
            </p>
            <p>
                <input type="submit" value="Enviar">
            </p>
            <div id="mensaje1" class="mensaje1">

            </div> 
        </form>
    </div>
    <h2><a href="{{url('volverHome')}}">Volver al inicio</a></h2>

</div>
</body>

</html>