<?php
    class aluno {
        public $nome;
        public $nota1;
        public $nota2;
        public $nota3;
        public $media;
    }
    function __construct($nome, $nota1, $nota2, $nota3, $media){
        $this->$nome= $nome;
        $this->$nota1= $nota1;
        $this->$nota2= $nota2;
        $this->$nota3= $nota3;
        $this->$media=($nota1+$nota2+$nota3)/3;
    }
?>