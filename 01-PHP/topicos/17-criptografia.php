<?php

//---------------------------------------------------CRIPTOGRAFIAS NÃO MUITO SEGURAS

$senha = 123456;

// É UMA CRIPTOGRAFIA DE MÃO DUPLA
// OU SEJA, DA PARA CODIFICAR E DESCODIFICAR
//codificando
$novasenha = base64_encode($senha);

echo "base64: $novasenha<br>";

//descodificando
echo "sua senha é:" . base64_decode($novasenha);


echo "<hr>";

// CRIPTOGRAFIAS DE MÃO UNICA
// OU SEJA, NÃ DA PARA DESCODIFICAR
/* 

então como faz a autenticação?.
simples!!! quando o usuário for se cadastrar no sistema,
antes de inserir a senha no banco de dados
vc passa o md5 "md5($senha)" e cadastra senha criptografada

*/
echo "MD5: " . md5($senha);
echo "<hr>";

// para fazer a autenticação é do mesmo jeito do md5 so que vc passa o sha1 "sha1($senha)" no lugar

echo "sha1" . sha1($senha);

echo "<hr>";




//------------------------------------SENHAS SEGURAS

//poque seguras?
// porque a cada refresh a criptografia muda

$password = 123;

//usa o algoritmo bcrypt, ou seja, muito seguro

/* SE FOR CADASTRAR ESSA SENHA NO BANCO DE DADOS COLOQE NO ESPAÇO 255 POIS 
A SENHA FICA SE ATUALIZANDO E ASSIM PODENDO GERAR MAIS DE 60 CARACTERES*/


// PARAMETRO 1 SENHA "$password"
// PARAMETRO 2 É O ALGORITIMO QUE VAI GERAR O ENCRIPTAMENTO "PASSWORD_DEFAUL"
// PARAMETRO 3 É UM ARRAY DE OPÇÕES

$options = [
    /* QUANTO MAIOR O COST MAIS SEGURA SERÁ SUA SENHA, MAS EM CONTRA PARTIDA CONSUMIRÁ MAIS RECURSOS DO HARDWARE...
 O PADRÃO É 10, CASO VC QUEIRA MAIS QUE 10... É SÓ VC COLOCAR O TERCEIRO PARAMETRO E AUMENTA O COST
 MAS CASO QUEIRA O PADRÃO MESMO, NÃO PRECISA COLOCAR O TERCEIRO PARAMETRO "$options"
 */
    //OBS: 'cost'=>10 já é muito bom 
    'cost' => 10

];
$passwordseguro = password_hash($password, PASSWORD_DEFAULT, $options);

echo 'HASH   ' . $passwordseguro;

echo "<hr>";

//AUTENTICANDO SENHA
//COLEI UMA SENHA ALEATORIA QUE FOI GERADA PELO HASH
$passwordseguronew = '$2y$10$be14Q3Hk0JqFwDL07P9n4.p3n63RXMHp/tJDzHDw.N/9YeGjBlzeK';

// PARAMETRO 1 SENHA DO USUÁRIO
// PARAMETRO 2 SENHA CRIPTOGRAFADA/CADASTRADA NO BANCO DE DADOS
if (password_verify($password, $passwordseguronew)) :

    echo "senha valida";

else : echo "senha invalida";

endif;
