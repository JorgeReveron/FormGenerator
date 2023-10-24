<?php 
    require_once "Form.php";
    require_once "Field.php";
    require_once "SimpleField.php";
    require_once "MultipleField.php";

    $form1 = new Form("validate.php","Prueba formulario","POST");
    $simpleField1 = new SimpleField("nombre","text","Escribe el nombre");
    $form1->add($simpleField1);
    $form1->add(new SimpleField("edad","number","¿Que edad tienes?",18));
    $form1->add(new SimpleField("color", "color","¿Cual es tu color preferido?","#FF0000"));
    $form1->add(new SimpleField("suscripcion", "checkbox","¿Quieres suscribirte?","true"));
    $options = [
        "Desarrollo en entorno servidor" => "DSW",
        "Desarrollo en entorno cliente" => "DEW",
        "Despliegue de aplicaciones" => "DPL"
    ];
    $multipleField1 = new MultipleField("preferido","radio","¿Cual es tu modulo preferido?","Despliegue de aplicaciones", $options);
    $form1->add($multipleField1);
    $multipleField1->addOption("Diseño de interfaces web", "DOR");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>testForm</title>
    <style>
        form {
            border: 1px solid blue;
        }
    </style>
</head>
<body>
    <h1>Prueba con formulario.</h1>
    <?php $form1 -> render(); ?>
    
</body>
</html>