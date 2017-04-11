<?php

// ver de guardar la foto con el nombre del cuadro de texto, 

// y una extension que yo le doy (carpeta backup, archivo.fecha.ext)



    //var_dump($_POST) ;

    
    var_dump($_FILES);

// poner nombre a todos los controles

// si el array de...

// la imagen aparece en un subdirectorio temporal

    $_lafoto = "fotos/" . $_FILES["archivo"]["name"];

    // move_uploaded_file($_FILES["archivo"]["tmp_name"],$_lafoto);

    // explode try

    $miestension = explode(".",$_FILES["archivo"]["name"]);

    var_dump($miestension);

    echo ($miestension[1]) . "<br> . <br>";

    var_dump($_POST) ;
    
     // $primernombre

    

    //move_uploaded_file($_FILES["archivo"][$miestension[1]],$_lafoto);


    // ver el file exists

?>