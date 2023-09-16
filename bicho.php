<?php
$dia = date("d");
$dia = 13;
echo "<br>Dia: ".$dia;

$dia_dezena = intdiv($dia, 10);
$dia_unidade = $dia % 10;
echo "<br>Dezena: ".$dia_dezena;
echo "<br>Unidade: ".$dia_unidade;

$soma_digitos = $dia_dezena + $dia_unidade;
echo "<br>Soma Digitos: ".$soma_digitos;
$unidade_soma = $soma_digitos % 10;
echo "<br>Unidade Soma: ".$unidade_soma;
$linha1 = $dia_dezena.$dia_unidade.$unidade_soma;
echo "<br>linha1: ".$linha1;

$numero_do_alem = 3;

$linha3_unidade3_soma = $unidade_soma + $numero_do_alem;
$linha3_unidade3 = $linha3_unidade3_soma % 10;
echo "<br>linha3_unidade3: ".$linha3_unidade3;
$linha3_unidade2_soma = $linha3_unidade3 + $numero_do_alem;
$linha3_unidade2 = $linha3_unidade2_soma % 10;
echo "<br>linha3_unidade2: ".$linha3_unidade2;
$linha3_unidade1_soma = $linha3_unidade2 + $numero_do_alem;
$linha3_unidade1 = $linha3_unidade1_soma % 10;
echo "<br>linha3_unidade1: ".$linha3_unidade1;
$linha3 = $linha3_unidade1.$linha3_unidade2.$linha3_unidade3;
echo "<br>linha3: ".$linha3;



$linha2_unidade1_soma = $linha3_unidade1 + $numero_do_alem;
$linha2_unidade1 = $linha2_unidade1_soma % 10;
echo "<br>linha2_unidade1: ".$linha2_unidade1;
$linha2_unidade2_soma = $linha2_unidade1 + $numero_do_alem;
$linha2_unidade2 = $linha2_unidade2_soma % 10;
echo "<br>linha2_unidade2: ".$linha2_unidade2;
$linha2_unidade3_soma = $linha2_unidade2 + $numero_do_alem;
$linha2_unidade3 = $linha2_unidade3_soma % 10;
echo "<br>linha2_unidade3: ".$linha2_unidade3;
$linha2 = $linha2_unidade1.$linha2_unidade2.$linha2_unidade3;
echo "<br>linha2: ".$linha2;

echo "<br>----------------------------------------------";
echo "<br>linha1: ".$linha1;
echo "<br>linha2: ".$linha2;
echo "<br>linha3: ".$linha3;
echo "<br>----------------------------------------------";

$dezena1 =  $linha2[1].$linha1[0];
echo "<br>dezena1: ".$dezena1;

$dezena2 =  $linha2[1].$linha1[2];
echo "<br>dezena2: ".$dezena2;

$dezena3 =  $linha2[1].$linha3[2];
echo "<br>dezena3: ".$dezena3;

$dezena4 =  $linha2[1].$linha3[0];
echo "<br>dezena4: ".$dezena4;

echo "<br>----------------------------------------------";

$arr_bichos = array(

"01" => "Avestruz",
"02" => "Aguia",
"03" => "Burro",
"04" => "Borboleta",
"05" => "Cachorro",
"06" => "Cabra",
"07" => "Carneiro",
"08" => "Camelo",
"09" => "Cobra",
"10" => "Coelho",
"11" => "Cavalo",
"12" => "Elefante",
"13" => "Galo",
"14" => "Gato",
"15" => "Jacaré",
"16" => "Leão",
"17" => "Macaco",
"18" => "Porco",
"19" => "Pavão",
"20" => "Peru",
"21" => "Touro",
"22" => "Tigre",
"23" => "Urso",
"24" => "Veado",
"25" => "Vaca",
// Adicione outros valores aqui
);

//$arr_bichos[1] = "Avestruz";
//$arr_bichos[2] = "Aguia";
//$arr_bichos[3] = "Burro";
//$arr_bichos[4] = "Borboleta";
//$arr_bichos[5] = "Cachorro";
//$arr_bichos[6] = "Cabra";
//$arr_bichos[7] = "Carneiro";
//$arr_bichos[8] = "Camelo";
//$arr_bichos[9] = "Cobra";
//$arr_bichos[10] = "Coelho";
//$arr_bichos[11] = "Cavalo";
//$arr_bichos[12] = "Elefante";
//$arr_bichos[13] = "Galo";
//$arr_bichos[14] = "Gato";
//$arr_bichos[15] = "Jacare";
//$arr_bichos[16] = "Leao";
//$arr_bichos[17] = "Macaco";
//$arr_bichos[18] = "Porco";
//$arr_bichos[19] = "Pavao";
//$arr_bichos[20] = "Peru";
//$arr_bichos[21] = "Touro";
//$arr_bichos[22] = "Tigre";
//$arr_bichos[23] = "Urso";
//$arr_bichos[24] = "Veado";
//$arr_bichos[25] = "Vaca";

$arr_bichos_invertido = array_flip($arr_bichos);

echo "<pre>";
//print_r($arr_bichos_invertido);
echo "</pre>";


$i = 0;
$arr_tabela_bicho = array();

foreach ($arr_bichos as $indice => $valor) 
{
    for ($c=1; $c<=4; $c++)
    {
        $i++;
        $arr_tabela_bicho[$i] = $valor;
    }
}

echo "<pre>";
print_r($arr_tabela_bicho);
echo "</pre>";

$arr_resultado = array();

array_push($arr_resultado, $arr_tabela_bicho[$dezena1]);
array_push($arr_resultado, $arr_tabela_bicho[$dezena2]);
array_push($arr_resultado, $arr_tabela_bicho[$dezena3]);
array_push($arr_resultado, $arr_tabela_bicho[$dezena4]);


echo "<br>Dez: $dezena1 - Bicho: ".$arr_tabela_bicho[$dezena1]." - ".$arr_bichos_invertido[$arr_tabela_bicho[$dezena1]];
echo "<br>Dez: $dezena2 - Bicho: ".$arr_tabela_bicho[$dezena2]." - ".$arr_bichos_invertido[$arr_tabela_bicho[$dezena2]];
echo "<br>Dez: $dezena3 - Bicho: ".$arr_tabela_bicho[$dezena3]." - ".$arr_bichos_invertido[$arr_tabela_bicho[$dezena3]];
echo "<br>Dez: $dezena4 - Bicho: ".$arr_tabela_bicho[$dezena4]." - ".$arr_bichos_invertido[$arr_tabela_bicho[$dezena4]];

// Converter valores para strings antes de contar
$arr_resultado = array_map('strval', $arr_resultado);

// echo "<pre>";
// print_r($arr_resultado);
// echo "</pre>";
// echo "<pre>";
// print_r($arr_contagem);
// echo "</pre>";
$arr_contagem = array_count_values($arr_resultado);


echo "<br>----------------------------------------------";

foreach ($arr_contagem as $indice => $valor) 
{
    echo "<br>$indice: ".( ($valor/4) * 100 ."%" );
}

echo "<br>----------------------------------------------";
$centena1 = $linha1[0].$linha2[1].$linha3[2];
$centena2 = $linha1[2].$linha2[1].$linha3[0];
$centena3 = $linha3[2].$linha2[1].$linha1[0];
$centena4 = $linha3[0].$linha2[1].$linha1[2];

echo "<br>Centena1: $centena1";
echo "<br>Centena2: $centena2";
echo "<br>Centena3: $centena3";
echo "<br>Centena4: $centena4";

