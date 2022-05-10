<?php


//-------------------------------------------------------------------- A PARTIR DAQUI FALA DOBRE ARRAYS ------------------------------------------------------------------------------------------

//Arrays

$carros = array("bmw", "Hilux");
echo $carros[1];

echo "<hr>";
echo "<hr>";
//---------------------------------------------- a variavel count conta
//abaixo ela está contando um array

echo count($carros);

echo "<hr>";
echo "<br>";

//-----------------------------------------------------foreach
//carros é apelidado de valor e assim repetido
foreach ($carros as $valor) {
  echo $valor . "<br>";
}
//arrays associativos
// os arrays associativos são arrays de string
$pessoa = array("nome" => "lucas", "idade" => "23", "altura" => 1.78);
echo $pessoa["cidade"] = "itabuna";
echo "<br>";

foreach ($pessoa as $indice => $valor) {

  echo $indice . ":" . $valor . "<br>";
}

//------------------------------------------------------------------------------arrays multidimencionais
/*quando coloca esta seta =>, você está nomeando o indice.
 ex: indice 0 tem jose ; "irmão"=> jose...agora o indice irmão tem jose*/
$hehe = array(
  "cariocas" => array("ha" => "nois", "he" => "vois", "hi" => "elas", "ho" => "tu"),
  "nordestinos" => array("doce" => "rapadura", "azedo" => "cachaça", "salgado" => "chinelo")
);



echo "<br>";
echo "<br>";
echo "<br>";

foreach ($hehe["nordestinos"] as $indice => $valor) {

  echo $indice . ":" . $valor . "<br>";
}

// ----------------------essa função verifica se é um array ou não
echo "<br>";

echo "<br>";

echo is_array($hehe);

echo "<br>";

// -----------------------------------------------essa função verifica se algum valor existe em uma determinada função do array


//valor e depois nome do array
/*quando coloca esta seta =>, você está nomeando o indice.
 ex: indice 0 tem jose ; "irmão"=> jose...agora o indice irmão tem jose */
$musica = array("tel" => "alo", "opa" => "ex", "oin" => "amor");
echo in_array("alo", $musica);
echo "<br>";
echo "<br>";

//------------------------------------- retorna um novo array com o indices do array selecionado 


//ou seja foi criado um array com os indices do array $musica
$arr = array("nome" => "lucas", "idade" => "21", "pais" => "brasil");
$keys = array_keys($arr);
print_r($keys);
echo "<br>";
echo "<br>";
echo "<br>";
//---------------------------------------------------retorna um  novo array com o valores do array selecionado 


// ou seja, fez uma cópia dos valores do array $musica e colocou no array values
$values = array_values($musica);
print_r($values);
echo "asdsdsdsdsdsdsdsdsdsdsdsdsdsd";
echo "<br>";

//--------------------------------------------------Agrega o conteúdo de dois arrays

// ou seja , junta o conteúdo dos dois arrays
$motos =  array("factor", "fan", "pop");
$carros = array("fox", "celta", "uno");

$veiculos = array_merge($carros, $motos);

print_r($veiculos);
echo "<br>";
echo "<br>";
// ------------------------------------------------essa função exclui a ultima posição do array (array_pop)
$sw = array("evo", "cj", "rice");
$hw = array("mouse", "tecled", "tela");
print_r($sw);
echo "<br>";
echo "<br>";
//se vc colocar echo no array_pop ele irá mostrar o elemento que você excluiu
echo array_pop($sw);
echo "<br>";
print_r($sw);


//--------------------------------------------------essa função excluí a preimreira posição do array (array shift)


//se vc colocar echo na frente do array_shift ele irá mostrar o elemento que você excluiu
echo "<br>";
echo "<br>";
print_r($hw);
echo "<br>";
echo array_shift($hw);
echo "<br>";
echo "<br>";
echo "<br>";
print_r($hw);
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
//------------------------------------------ADICIONA UM OU MAIS ELEMENTOS NO INICIO DO ARRAY

$frutas = array("uva", "banana", "goiaba");
print_r($frutas);
echo "<br>";
//primeiro coloca o nome do array e depois os valores que vc quer adicionar
// se colocar echo na frente do array_unshift ele mostrará a quantidade de indices do array
echo array_unshift($frutas, "abacate", "laranja");
echo "<br>";
echo "<br>";
print_r($frutas);
echo "<br>";
echo "<br>";


//------------------------------------------ ADICIONA UM OU MAIS ELEMENTOS NO FINAL DO ARRAY


$vegeta = array("cebola", "tomate", "batata");

print_r($vegeta);
echo "<br>";
echo "<br>";
// se colocar echo na frente do array_push ele mostrará a quantidade de indices do array
echo array_push($vegeta, "alface", "brocolis");
echo "<br>";
echo "<br>";
print_r($vegeta);

echo "<br>";
echo "<br>00000000000000000000000000000000000000000000000000000000000";


//------------------------------------------- TEM A FUNÇÃO DE MESCLAR DOIS ARRAYS
$indice = array("ar", "agua", "terra");

$valor = array("jato", "barco", "carro");

// primeiro colocaste o array que vai virar indice depois o array que se transformará em valores

$veiculos = array_combine($indice, $valor);

print_r($veiculos);


//-------------------------------------------- SOMA TODOS OS VALORES DO ARRAY

echo "<br>";
echo "<br>";
$soma = array(1, 2, 3, 4, 5);

echo array_sum($soma);

//-------------------------------------------TRANSFORMA UMA STRING EM ARRAY
echo "<br>";
echo "<br>";

$novadata = "01/02/03";
// primeiro colocaste o divisor da string depois a variavel.
// nota-se que o que esta dividindo a string é "/" pois ela é algo que tem em comum para dividir
$data = explode('/', $novadata);

print_r($data);

echo "<br>";
echo "<br>";

// nota-se que agora o que esta dividindo é o espaço " "

$humbertoEronaldo = "alô ex amor";

$cantor = explode(" ", $humbertoEronaldo);

print_r($cantor);


//----------------------------------------TRANSFORMA UM ARRAY EM STRING

$cantores = array("gustavo lima", "safadão", "xand");

$palco = implode(",", $cantores);
echo "<br>";
echo "<br>";
echo $palco;

// testa se o valor existe no array

if (in_array("xand", $cantores)) :

  echo "existe no array";
else :
  echo "Não existe no array";

endif;
