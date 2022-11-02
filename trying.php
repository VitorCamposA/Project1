<?php
date_default_timezone_set('America/Sao_Paulo');
echo "Eu escrevo algo <br/> ";
print "Eu também escrevo algo<br/>";

$var = "Eu decido meu tipo <br?> ";
$varn = 3;
echo gettype($var); //mostra o tipo de variavel
echo "<br/>";
if ($varn == 3) {
    echo "certo<br/>";
} else {
    echo "errado<br/>";
}

switch ($varn) {
    case 1:
        echo "1 <br/>";
        break;
    case 2:
        echo "2 <br/>";
        break;
    case 3:
        echo "3 <br/>";
        break;
    default:
        echo "valor inexistente";
}
$count = 1;
while ($count <= 5) {
    echo $count . " <br/> ";
    $count++;
}
for ($i = 0; $i < 5; $i++) {
    echo "Número" . $i;
}

$i = 1;
do {
    echo "Número {$i}<br/>";
    $i++;
} while ($i <= 5);
echo "<br/> ";
$nomes = array("Vitor", "Joao", "Pedro", "Eduardo");
for ($i = 0; $i < count($nomes); $i++) {
    echo $nomes[$i] . " ";
    echo "<br/> ";
}
echo "<br/> ";
$nomes = array("Ana", "Julia", "Caio", "Gabi", "Felipi");
foreach ($nomes as $valor) {
    echo "Nome atual: {$valor} <br/>";
}


echo date(" <b> d/M/Y </b> ");

$nome = "Vitor";

function lala($uau, &$nome, &$ola){
    $ola = 2;
    
    return "O usúario " . $nome . " ganha " .  $uau . " dólares por hora <br/>" . $ola . "uau";
    
    
       
}


echo lala(2, $nome, $ola);
echo $ola;
function gravar($texto){
    //Variável arquivo armazena o nome e extensão do arquivo.
    $arquivo = "meu_arquivo.txt";
    //Variável $fp armazena a conexão com o arquivo e o tipo de ação.
    $fp = fopen($arquivo, "a+");
    //Escreve no arquivo aberto.
    fwrite($fp, "{$texto} " . date("d/M/Y  H:i:s ") . "<br/> \n" );
    //Fecha o arquivo.
    fclose($fp);
    
}
gravar("LOGIN");
gravar("LOGOUT");