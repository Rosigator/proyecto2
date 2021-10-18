<?php

//Un simple comentario

//Otro simple comentario

//Comentario para probar la rama development y ver cómo funciona Git Graph
//Otro más para ver el flujo de la rama

abstract class Uno
{

    protected $a;
    protected $b;

    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    protected abstract function a();
}

class Dos extends Uno
{
    private $c;

    public function __construct($a, $b, $c)
    {
        parent::__construct($a, $b);
        $this->c = $c;
    }

    public function mostrar_atr()
    {
        echo $this->a . ', ' . $this->b . ', ' . $this->c;
    }

    public function a()
    {

        echo "a";
    }
}

$dos = new Dos(2, 3, 4);

$dos->mostrar_atr();

$tres = 3;
