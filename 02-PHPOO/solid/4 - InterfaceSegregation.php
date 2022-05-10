<?php


/**
 * Aqui estamos usando o princípio ** I ** também conhecido como: isp
 * 
 * Detalhes:
 * - Uma classe não deve ser forçada a implementar interfaces e métodos que não irão usar.
 * - É melhor criar interfaces mais específicas ao invés de termos uma única interface genérica.
 */

/**
 * -------------
 * JEITO ERRADO |
 * -------------
 * POIS ACABOU FORÇANDO A CLASSE PINGUIM A IMPLEMENTAR UM MÉTODO QUE NÃO UTILIZARÁ
 */
interface ExAves
{

    public function setLocalizacao($longitude, $latitude);
    public function setAltitude($altitude);
    public function renderizar();
}

class ExPapagaio implements ExAves
{

    public function setLocalizacao($longitude, $latitude)
    {
        /*... */
    }
    public function setAltitude($altitude)
    {
        /*... */
    }
    public function renderizar()
    {
        /*... */
    }
}

class ExPinguim implements ExAves
{

    public function setLocalizacao($longitude, $latitude)
    {
        /*... */
    }
    public function setAltitude($altitude)
    {
        // Não faz nada... Pinguins não voam!
    }
    public function renderizar()
    {
        /*... */
    }
}


/**
 * -------------
 * JEITO CERTO |
 * -------------
 * POIS AS CLASSES POSSUÍ APENAS OS MÉTODOS QUE IRÃO UTILIZAR
 */
interface Aves
{

    public function setLocalizacao($longitude, $latitude);

    public function renderizar();
}

interface AvesQueVoam extends Aves
{

    public function setAltitude($altitude);
}

class Papagaio implements AvesQueVoam
{

    public function setLocalizacao($longitude, $latitude)
    {
        /*... */
    }
    public function setAltitude($altitude)
    {
        /*... */
    }
    public function renderizar()
    {
        /*... */
    }
}

class Pinguim implements Aves
{

    public function setLocalizacao($longitude, $latitude)
    {
        /*... */
    }
    public function renderizar()
    {
        /*... */
    }
}
