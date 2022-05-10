<?php

    class Login2{
        // criando atributo estatico
        public static $user;
        
        // criando metodo estatico
        public static function verificaLogin(){
            // quando usamos atributos estaticos não usamos o "$this->" para ser referenciado no escopo local, e sim o "self".
            echo "usuario \"".self::$user."\" Logado";
        }

        public function sairSistema(){

            echo "usuário deslogou";
            // mesmo a classe possuindo metodos e atributos estaticos podemos instanciar a classe para chamar os metodos não estaticos
            //eu não instanciei aqui pois pode ficar confuso para vc entender caso venha rever essa parte
        }

    }



    //quando trabalhamos com atributos estaticos, não precisamos instanciar a classe
    // acessando a variavel
    Login2::$user = "admin";
    //quando trabalhamos com metodos estaticos, não precisamos instanciar a classe
    //chamando a função
    Login2::verificaLogin();
    
?>