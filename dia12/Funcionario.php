<?php
abstract class Funcionario{
    protected $nome,$cargo,$salário;
    public function __construct($nome, $cargo, $salario) {
        $this->nome = $nome;
        $this->cargo = $cargo;
        $this->salário = $salario;
    }
    public function getNome() {
        return $this->nome;
    }
    
    public function setNome($nome) {
        $this->nome = $nome;
    }
    
    public function getCargo() {
        return $this->cargo;
    }
    
    public function setCargo($cargo) {
        $this->cargo = $cargo;
    }
    
    public function getSalario() {
        return $this->salário;
    }
    
    public function setSalario($salario) {
        if ($salario <= 0) {
            throw new InvalidArgumentException("O salário deve ser maior que zero.");
        }
        $this->salário = $salario;
    }
    
        
    abstract public function calcularBonus(): float;

}
        class Gerente extends Funcionario {
            public function calcularBonus(): float {
                return $this->salário * 0.5;
            }
        }
        class Vendedor extends Funcionario {
            public function calcularBonus(): float {
                return $this->salário * 0.15;
            }
        }       

?>