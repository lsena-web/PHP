<?php


class Login
{

    private $email;
    private $senha;

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


$logar = new Login();
// o metodo get and set serve para ter acesso a atributos e metodos privados
// o metodo get and set serve também para você colocar filtros dentro desse metodo, ao inves de ter acesso direto na variavel, sacaste?
$logar->setEmail("teste()/@teste.com");
$logar->setSenha("123456");
$logar->Logar();
echo "<br>";
echo $logar->getEmail();
echo "<br>";
echo $logar->getSenha();
echo "<br>";
