<?php

// o construtor ele é inicializado no momento que é feito o instanciamento
// o construtor nada mais que um metodo


class Loginn
{

    private $email;
    private $senha;
    private $nome;
    //construtor
    // quando vc passa parametros no construtor tem que passar valores no instanciamento
    public function __construct($email, $senha, $nome)
    {

        $this->nome = $nome;
        //peguei o metodo setSenha e passei a $senha 
        $this->setSenha($senha);
        //peguei o metodo setEmail e passei a $email 
        $this->setEmail($email);
    }

    public function getNome()
    {

        return $this->nome;
    }



    // pega a informação
    public function getEmail()
    {

        return $this->email;
    }
    // seta a informação pego uma informação de fora da classe
    public function setEmail($e)
    {
        // aqui eu coloquei um filtro antes da informação ser passado diretamente para o atributo assim irá ser filtrado o "()/" que eu setei la em baixo
        $email = filter_var($e, FILTER_SANITIZE_EMAIL);
        $this->email = $email;
    }


    // busca o valor, minha abstração foi: busca a informação gerada pela a classe
    public function getSenha()
    {

        return $this->senha;
    }
    // seta o valor(aponta o valor) minha abstração foi: pega a informação de fora da classe
    public function setSenha($s)
    {

        $this->senha = $s;
    }

    public function Logar()
    {

        if ($this->email == "teste@teste.com" and $this->senha == "123456") :

            echo "logado com sucesso";

        else :
            echo "dados invalidos";
        endif;
    }
}

// neste instanciamento estou passando valores para o construtor
$logar = new Loginn("teste@teste.com", "123456", "lucas");

$logar->Logar();
echo "<br>";
echo "<br>";
echo $logar->getNome();
echo "<br>";
echo $logar->getEmail();
echo "<br>";
echo $logar->getSenha();
echo "<br>";
