<?php
    //Requiero los archivos de clase para incluirlos en este script
    require("Autobus.php");
    require("Furgoneta.php");
    require("Coche.php");
    //Instancio y configuro los vehículos
    $autobus = new Autobus("Volvo","9800 2017","gris","Mario","Desfufor");
    $furgoneta = new Furgoneta("Wolkswagen","Caravelle","blanco","Rebeca");
    $coche = new Coche("Toyota","Corolla","verde","Marcos");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        ¿Puedo aparcar el coche en la superficie?:
        <strong><?php echo ($coche->puedeAparcar("superficie")) ? "si" : "no" ?></strong>
    </div>
    <div>
        ¿Puedo aparcar el coche en el subterráneo 2?:
        <strong><?php echo ($coche->puedeAparcar("subterraneo2")) ? "si" : "no" ?></strong>
    </div>
    <div>
        ¿Puedo aparcar la furgoneta en la superficie?:
    <strong><?php echo ($furgoneta->puedeAparcar("superficie")) ? "si" : "no" ?></strong>
    </div>
    <div>
        ¿Puedo aparcar la furgoneta el subterráneo 2?:
        <strong><?php echo ($furgoneta->puedeAparcar("subterraneo2")) ? "si" : "no" ?></strong>
    </div>
    <div>
        ¿Puedo aparcar el autobús en la superficie?:
        <strong><?php echo ($autobus->puedeAparcar("superficie")) ? "si" : "no" ?></strong>
    </div>
    <div>
        ¿Puedo aparcar el autobús el subterráneo 1?:
        <strong><?php echo ($autobus->puedeAparcar("subterraneo1")) ? "si" : "no" ?></strong>
    </div>
    <div>
        ¿A qué empresa pertenece el autobús?:
        <strong><?php echo $autobus->getEmpresa() ?></strong>
    </div>
</body>
</html>