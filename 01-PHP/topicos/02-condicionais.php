<?php




//-----------------------IF E ELSE
$numero = 10;

if ($numero == 10) {

    echo "É igual a 10";
} else {

    echo "no é 10";
}

echo "<br>";
echo "<br>";
echo "<br>";

$cor = "azul";


// o if tambem pode ser usado asssim

if ($numero == 11) :

    echo "opá";


else :

    echo "e o else pode ser colocado assim";

endif;


$media = 7;


// primeira formar de elseif
if ($media >= 7) {

    echo "aprovado";
} elseif ($media < 7 && $media > 5) {

    echo "recuperação";
} else {

    echo "reprovado";
}


// Segunda formar de elseif
if ($media >= 7) : echo "aprovado";
elseif ($media < 7 && $media > 5) : echo "recuperação";
else : echo "recu";
endif;

// ou a segunda forma de elseif pode ser assim, obs: mudei so a posição da reposta lkkkkk
if ($media >= 7) :

    echo "aprovado";

elseif ($media < 7 && $media > 5) :

    echo "recuperação";

else :

    echo "recu";

endif;
echo "<br>";
echo "<br>";

//OPERADOR TERNÁRIO DE  IF E ELSE COM UMA LINHA DE CÓDIGO

// se a condição for verdadeira aprovado  representa o if "?"
// os ":" representa o else
echo ($media >= 7) ? "aprovado" : "reprovado";

echo "<br>";


// TESTES QUE PODEM SER FEITOS

// se for int
$idade = 10;

var_dump($idade);

if (is_int($idade)) :

    echo "é inteiro";

else :

    echo "não é inteiro";

endif;
echo "<br>";
echo "<br>";

// se for float
$altura = 1.78;
var_dump($altura);
if (is_float($altura)) :
    echo "é Float";
else :
    echo "não é Float";

endif;
echo "<br>";
echo "<br>";

// se for string  
$nome = "lucas";
var_dump($nome);
if (is_string($nome)) :
    echo " é styyring";
else :
    echo "não é string";
endif;
echo "<br>";
echo "<br>";

// se for boolean  
$dimensao4 = true;
var_dump($dimensao4);
if (is_bool($dimensao4)) :
    echo " é boolean";
else :
    echo "não é boolean";
endif;
echo "<br>";
echo "<br>";


// se for array


$aves = array("gaivota", "tucano");
var_dump($aves);
if (is_array($aves)) :
    echo " é array";
else :
    echo "não é array";
endif;

echo "<br>";
echo "<br>";



// se for um objeto
class passaro
{

    public $raca;
    public function atribuirNome($raca)
    {

        $this->$raca =  $raca;
    }
}

$passaro = new Passaro();
$passaro->atribuirNome("aguia");

var_dump($passaro);
if (is_object($passaro)) :
    echo " é um objeto";
else :
    echo "não é UM OBJETO";
endif;
echo "<br>";
echo "<br>";
//--------------------------SWITCH CASE



switch ($cor):

    case "vermelho":
        echo "sua cor preferida é vermelho";
        /*
        BREAK da um (stop). EX: CASO A COR FOSSE VERDE E TIRASSE O O BREAK DO VERDE
        O AZUL IRIA SER EXECULTADO JUNTO
        */
        break;
    case "verde":
        echo "sua cor preferida é verde ";
        break;

    case "azul":
        echo "sua cor preferida é azul ";

        // DEFAULT É TIPO O ELSE, MAS ELE NÃO É OBRIGATÓRIO
    default:
        echo " sua cor preferida não está armazenada aqui ";
endswitch;


switch (file_exists($op)) {
    case 0:
        echo "i equals 0";
        break;
    case 1:
        echo "i equals 1";
        break;
    case 2:
        echo "i equals 2";
        break;
    default:
        echo " sua cor preferida não está armazenada aqui ";
        break;
}

$nome = basename(__DIR__);
$array = [
    "topicos" => "topicos",
    "bar" => "foo",
];
if (in_array($nome, $arr)) {
}
