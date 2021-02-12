<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Inicio</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../css/style.css'>
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
        <div class="botonHeader">
            <h1>¡Gran premio numero 23!</h1>
            <a href="{{url('incripcionView')}}" class="button">INSCRIBETE</a>
        </div>  
    </div>  
    
    <div class="row">
        <div class="column">
            <img class="imgLeft" src="./images/image1.jpg" width="440px" height="250px"></img>
            <h2>Column</h2>
            <p class="parRight">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet pretium urna. Vivamus venenatis velit nec neque ultricies, eget elementum magna tristique. Quisque vehicula, risus eget aliquam placerat, purus leo tincidunt eros, eget luctus quam orci in velit. Praesent scelerisque tortor sed accumsan convallis.</p>
        </div>
    </div>
    <div class="row">
        <div class="column2">
            <h2 class="participantes">Participantes</h2>
            <button class="button2">Entra</button>
        </div>
    </div>
</body>
</html>