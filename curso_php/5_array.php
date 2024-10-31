<?php
    //ARRAY ESCALARES: acceder desde el indice 0,1,2..
    $alumnos=array("alum1", "alum2", "alum3");
    echo $alumnos[0]. "<br>";
    echo $alumnos[1]. "<br>";
    echo $alumnos[2]. "<br><br>";

    //Cambiamos el varlor de $alumnos[2]
    $alumnos[2]= "alumno nuevo";
    echo $alumnos[2]. "<br>";

    $estudiantes=["alum1", "alum2", "alum3"];
    echo $estudiantes[0]. "<br>";
    echo $estudiantes[1]. "<br>";
    echo $estudiantes[2]. "<br><br>";

    //ARRAY TIPO ASOCIATIVO
    $tutor=[
        "nombre"=>"Aleix", 
        "apellido"=>"Busquets", 
        "edad"=>28
    ];
    echo $tutor["nombre"]. "<br>";
    echo $tutor["apellido"]. "<br>";
    echo $tutor["edad"]. "<br><br>";
    
    //Cambiamos la edad
    $tutor["edad"]=19;
    echo $tutor["edad"]. "<br><br>";

    //ARRAY MULIDIMENSIONALES
    $tutor_2=[
        "nombre"=>"Anna", 
        "apellido"=>"Busquets", 
        "edad"=>34,
        "cursos"=>["PHP","Python", "CSS"]
    ];

    echo $tutor_2["cursos"][1]. "<br>";
    //Cambiamos el valor de cursos 1 a HTML
    $tutor_2["cursos"][1]="HTML";
    echo $tutor_2["cursos"][1]. "<br><br>";

    $tutor_3=[
        "nombre"=>"Anna", 
        "apellido"=>"Busquets", 
        "edad"=>34,
        "cursos"=>[
            "nombre"=>"Aleix", 
            "apellido"=>"Busquets", 
            "edad"=>28
        ]
    ];

    echo $tutor_3["cursos"]["nombre"]."<br>";
    echo $tutor_3["cursos"]["apellido"]."<br>";
    echo $tutor_3["cursos"]["edad"]."<br>";

    //Creamos una nueva clave dentro del array
    $tutor_3["pais"]="Barcelona";
    echo $tutor_3["pais"];

    //Creamos nueva clase en array asociativo cursos
    $tutor_3["cursos"]["pais"]="Barcelona";
    echo $tutor_3["cursos"]["pais"];

    // Contar los elementos con la funcion count()
    //Tambien se puede usar sizeof()
    echo sizeof($alumnos);//3
    echo count($alumnos);//3
    echo count($tutor);//3
    echo count($tutor_2);//4
    //COUNT_RECURSIVE: cuanta los elementos dentro de otros elementos
    echo count($tutor_2, COUNT_RECURSIVE); //7--> 4 + 3 de cursos
    echo count($tutor_3);//5 --> 4 + pais
    echo count($tutor_3, COUNT_RECURSIVE);//9--> (4 + pais)+ (3 de cursos+pais)

    //OTRO EJEMPLO: ARRAY MUTLTIDIMENSIONAL
    $productos= [
        ["codigo"=> "A0001", "descipcion"=>"Mouse"],
        ["codigo"=> "A0002", "descipcion"=>"Teclado"],
        ["codigo"=> "A0003", "descipcion"=>"Monitor"],
        ["codigo"=> "A0004", "descipcion"=>"Impresor"]
    ];

    foreach ($productos as $prod) {
        echo $prod["codigo"]." - ".$prod["descipcion"]."<br>";
    }

    var_dump($productos);