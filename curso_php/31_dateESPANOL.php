<?php

date_default_timezone_set("Europe/Madrid");

function fechaEspanolLarga(){
    $fecha_dia=date("d");
    $fecha_mes=date("m");
    $fecha_year=date("Y");

    $dia_semana=[
        "Monday"=>"Lunes",
        "Tuesday"=>"Martes",
        "Wednesday"=>"Miércoles",
        "Thursday"=>"Jueves",
        "Friday"=>"Viernes",
        "Saturday"=>"Sabado",
        "Sunday"=>"Domingo"
    ];

    $meses_year=[
        "01"=>"Enero",
        "02"=>"Febrero",
        "03"=>"Marzo",
        "04"=>"Abril",
        "05"=>"Mayo",
        "06"=>"Junio",
        "07"=>"Julio",
        "08"=>"Agosto",
        "09"=>"Septiembre",
        "10"=>"Octubre",
        "11"=>"Noviembre",
        "12"=>"Diciembre"
    ];

    $fecha_final=$dia_semana[date("l")]." ".
        $fecha_dia." de ".$meses_year[$fecha_mes]
        ." de ".$fecha_year;

    return $fecha_final;
}

echo fechaEspanolLarga();

echo "<br/>";

function fechaEspanolCorta($fecha=""){

    if($fecha==""){
        $fecha=date("d-m-Y");
    }else{
        $fecha=date("d-m-Y",strtotime($fecha));
    }

    $fecha=explode("-",$fecha);

    $fecha_dia=$fecha[0];
    $fecha_mes=$fecha[1];
    $fecha_year=$fecha[2];

    $meses_year=[
        "01"=>"Enero",
        "02"=>"Febrero",
        "03"=>"Marzo",
        "04"=>"Abril",
        "05"=>"Mayo",
        "06"=>"Junio",
        "07"=>"Julio",
        "08"=>"Agosto",
        "09"=>"Septiembre",
        "10"=>"Octubre",
        "11"=>"Noviembre",
        "12"=>"Diciembre"
    ];

    $fecha_final=$fecha_dia." de "
        .$meses_year[$fecha_mes]
        ." de ".$fecha_year;

    return $fecha_final;
}

echo fechaEspanolCorta();
echo "<br/>";
echo fechaEspanolCorta("01-01-2025");
echo "<br/>";
echo fechaEspanolCorta("01/01/2025");
echo "<br/>";
echo fechaEspanolCorta("2025/01/01");
echo "<br/>";
echo fechaEspanolCorta(date("Y-m-d"));
echo "<br/>";
$fecha_prueba=date("Y-m-d");
echo fechaEspanolCorta($fecha_prueba);
echo "<br/>";
$fecha_prueba="2025/01/01";
echo fechaEspanolCorta($fecha_prueba);