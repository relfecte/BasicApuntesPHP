<?php

$cantidad1=12732.77;
$cantidad2=1931.81;

//number_format(cantidad,decimales,sep_decimales,sep_millar);
//se puede usar con cantiad
//cantidad + decimales
//cantidad + decimales + separador decimales + separador millar
echo "number_format($cantidad1)= ".
    number_format($cantidad1)."<br/>";//12,733

$resCantidad1= number_format($cantidad1);//12,733
echo "number_format($cantidad1)= $resCantidad1<br/>";

$resCantidad1= number_format($cantidad1,2);//12,732.77
echo "number_format($cantidad1,2)= $resCantidad1<br/>";

//Ejemplos de uso:
//1.931,81
$resCantidad2= number_format($cantidad2,2,",",".");//1.931,81
echo "number_format($cantidad2,2)= $resCantidad2<br/>";

//1931,81
$resCantidad2= number_format($cantidad2,2,",","");//1931,81
echo "number_format($cantidad2,2)= $resCantidad2<br/>";

//1 931,81
$resCantidad2= number_format($cantidad2,2,","," ");//1 931,81
echo "number_format($cantidad2,2)= $resCantidad2<br/>";

//1 932
$resCantidad2= number_format($cantidad2,0,""," ");//1 932
echo "number_format($cantidad2,2)= $resCantidad2<br/>";

//PARA GUARDAR NUMERO EN LA BASE DE DATOS SE USA
$resCantidad2= number_format($cantidad2,2,".","");//1931.81
echo "number_format($cantidad2,2)= $resCantidad2<br/>";
