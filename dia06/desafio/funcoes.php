<?php
/** 
- `calculaIdade($anoNascimento)`
- `formataPreco($preco)` → ex: R$ 1.000,00
- `aprovadoOuReprovado($nota)`? */
$anoDeNascimento =$_GET["ano"];

?>
<?php $array = ["Mathias"=>5 , "Alucard"=>6 ,"Desmon"=>8 ]?>
<?php
    function calculaIdade($anoNascimento):int{
        //Date().now
        $idade = (2025 - $anoNascimento);
        return $idade;
    }
    function formataPreco($preco){
        return number_format($preco,2,",",".");
    }
    function aprovadoOuReprovado($nota){

        return ($nota >=6)?"Aprovado":"Reprovado";
    }
    function aprovadoOuReprovadoWithArray($array){
        foreach($array as $key => $value ){    
         echo ($value >=6)?" O Aluno $key foi  Aprovado <br>":" O Aluno $key foi Reprovado <br>";
        }
    }
    //echo calculaIdade($anoDeNascimento);
   // fui mlk 
   
?>