<?php

    // arrays escalares
    $estudiantes = ['Carlos', 'Nicole', 'Jose', 'Antonio', 'Katy'];
    $estudiantes[3] = "Claudia";

    // echo $estudiantes[3];

    // arrays asociativo
    $tutor = ['nombre'=>'Nicole', 'apellido'=>'Palomino', 'edad'=>22];
    $tutor['edad']=23;

    // echo $tutor['edad'];

    // arrays multidimensionales
    $tutor_2 = [
        'nombre'=>'Nicole', 
        'apellido'=>'Palomino', 
        'edad'=>22,
        'cursos'=>[
            'PHP', 'Python', 'Flutter'
        ]
    ];
    $tutor_2['cursos'][1]='JavaScript';
    $tutor_2['pais']='Perú';

    // echo $tutor_2['pais'];


    // contar los valores de un array 
    // echo count($tutor);
    echo count($tutor_2, COUNT_RECURSIVE);





