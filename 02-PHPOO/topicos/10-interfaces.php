<?php

//serve para definir o modelo a ser usado por outras classes

// ao inves de "class" coloco "interface" no lugar
// todos os metodos que estão dentro da interface é obrigatório para as outras classes que herdando do mesmo
interface Crud{
    // se o metodo herdado tem parametro, quando esse mesmo metodo for declarado na class filha tem que ter parametro tambem
    // ex: se o metodo create($c) na interface for assim, na class "Noticia" o metodo tem que ser exatamente igual, ou seja assim "create($c)" isso vale para
    //os metodos que estão declarados como abstratado dentro de uma class abstrata.
    public function create();
    public function update();
    public function delete();
    //não pode ser privada

}

// ao inves de extends, usamos implements
// percebe que agora eu sou obrigado a declarar os metodos da herdada aqui?
class Noticias implements Crud{

    public function create(){
                //lógica para criar uma noticia
    }
    public function read(){
                //lógica para ler uma noticia
    }
    public function update(){
                //lógica para atualizar uma noticia
    }
    public function delete(){
                //lógica para deletar uma noticia
    }


}



?>