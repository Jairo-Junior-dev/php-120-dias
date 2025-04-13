<?php 
$array = [ 
    [
        "Nome"=>"Mathias", "Role"=>"USER"
        
    ]
];
$nome;
$role;
foreach($array as $key => $value){
    if($value == "USER"){
        echo  $key;
        
        //header("Location: user.php");
    }
}

?>