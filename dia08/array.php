<?php   
$array["nome"]['musicas'] = ["Mano1"=>"É nois","Mano2"=>"na fita"]  ;
$array2["nome"]['musicas']["Gostos"] =["Rock"=>"Bom demize","Forró"=>"Razoavél"];
$array["nome"]['musicas']["tempos"]=["Quente"=>"Ruim","Frio"=>"Bom"];
/**
 * []
 * 
 */
    foreach($array['nome']['musicas']["tempos"] as $key =>$values){
        echo "Chave : $key || Valor :  $values ";

}
    echo "<br>";

  $merge = array_merge($array,$array2);
  
  foreach($merge['nome']['musicas']["Gostos"]  as $key =>$values){
    echo "Chave : $key || Valor :  $values ";

}   
?>