<?php

    abstract class Automovel {

        protected string $marca;
        protected string $modelo;
        protected int $ano;

        public function __construct($marca , $modelo ,$ano)
        {
            $this->marca = $marca;
            $this->modelo = $modelo;
            $this->ano = $ano;
        }
        //Setter
        public function setMarca(string $marca):void{$this->marca = $marca;}
        public function setModelo(string $modelo ):void{$this->modelo = $modelo;}
        public function setAno(int $ano ):void{$this->ano = $ano;}
        //Getter
        public function getMarca():string{return $this->marca;}
        public function getModelo():string{return $this->modelo;}
        public function getAno():int{return $this->ano;}


        public function exibirInfor(){
            print "<h1> Marca: ". $this->getModelo(). "</h1>";
            print "<h1>Modelo: ". $this->getMarca()." </h1>";
            print "<h1> Ano: ". $this->getAno() ."</h1> ";
        }
    }

?>