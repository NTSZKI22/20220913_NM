<?php
    include_once 'classes/Student.php';
    include_once 'classes/CodingStudent.php';
    include_once 'classes/EconomicsStudent.php';
    
    $codestudent = new CodingStudent([
        "name" => "Németh Marcell", 
        "age" => 18, 
        "gender" => "male", 
        "classNumber" => 3
    ]);

    $ecostudent = new EconomicsStudent([
        "name" => "Pénzügy Lajos", 
        "age" => 17, 
        "gender" => "male", 
        "taxNumber" => 524396728
    ]);

    echo "<pre>";
    var_dump($codestudent);
    echo "<br>";
    $codestudent->setage(19);
    echo $codestudent->age();
    echo "<br>";
    echo "<pre>";
    var_dump($ecostudent);
    echo "<br>";
    $ecostudent->settaxNumber(999922228);
    echo $ecostudent->taxNumber();
    echo "<br>";    
    
