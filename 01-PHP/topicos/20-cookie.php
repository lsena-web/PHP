<?php

// cookie é um arquivo criado pelo servidor para armazenar informações no computador do usuário

// PARAMETRO 1 NOME DO COOKIE
// PARAMETRO 2 VALOR DESSE COOKIE
// PARAMETRO 3 VALIDADE DO COOKIE usa a função "time" e neste caso eu coloquei 3600 segundos que equivale a 1hr 
// A FUNÇÃO USADA PARA CRIAR COOKIE => "setcookie"
setcookie('user','Lucas', time()+3600);
setcookie('email','lucas@gmail.com', time()+3600);
setcookie('ultima_pesquisa','tenis adidas', time()+3600);


?>