<?php

class Animal
{
    public function Andar()
    {
        echo "o animal andou";
    }
}

class Cavalo extends Animal
{
    //polimorfismo significa reescrever o metodo herdado ex: herdei o metodo andar e o (editei)alterei
    public function Andar()
    {
        echo "O cavalo andou";
    }
}

$animal = new Cavalo();
$animal->Andar();
