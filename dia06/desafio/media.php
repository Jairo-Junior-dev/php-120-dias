<?php $array = ["Nota1"=>5 , "Nota2"=>6 ,"Nota3"=>8 ]?>


<?php
     function mediaAluno($nota1, $nota2, $nota3):float{
        return ($nota1 + $nota2 + $nota3)/3;
     }
   
     function mediaAlunoWithArray($array):float{
        $media =0;
        $total = 0 ;
        foreach($array as $value)
        {
            $total += $value;
            $media = ($total)/count($array);
        }
        return $media;
    }
     print mediaAluno(5,6,5)."<br>";
   
     print mediaAlunoWithArray($array)."<br>";

?>