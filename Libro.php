<?php
class Libro{
    private $titulo;
    private $ISBN;
    private $autor;
    private $editor;

    public function __construct(string $titulo, string $ISBN, string $autor, string $editor)
    {
        $this->titulo = $titulo;
        $this->ISBN = $ISBN;
        $this->autor = $autor;
        $this->editor = $editor;
    }

    public function getLibroInfo(): string {
        return "Titulo: $this->titulo<br>
                ISBN: $this->ISBN<br>
                Autor: $this->autor<br>
                Editor: $this->editor";
    }

    public function __toString()
    {
        return "Titulo: $this->titulo<br>
                ISBN: $this->ISBN<br>
                Autor: $this->autor<br>
                Editor: $this->editor";
    }
}
