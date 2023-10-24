<?php 
    require_once "Form.php";
    require_once "Field.php";

    $form1 = new Form("validate.php","Prueba formulario","POST");
    $field1 = new Field("campo 1","text");
    $form1->add($field1);
    $form1->add(new Field("campo 2","number"));
    $form1->add(new Field("campo 3", "color"));
    $form1->add(new Field("check 4", "color"));
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