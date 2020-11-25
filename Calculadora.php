<?php
class Calculadora{
    private $nro1;
    private $nro2;

    public function __construct(int $nro1, int $nro2)
    {
        $this->nro1 = $nro1;
        $this->nro2 = $nro2;
    }

    public function sumar(): int{
        return $this->nro1+$this->nro2;
    }

    public function restar(): int{
        return $this->nro1-$this->nro2;
    }

    public function multiplicar(): int {
        return $this->nro1*$this->nro2;
    }

    public function dividir(): float{
        return (float)$this->nro1/(float)$this->nro2;
    }
}
