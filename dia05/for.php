<?php
    
    echo "Incremento <br>";
    for( $index = 0 ; $index <= 5 ;$index ++){
        echo $index."<br>";
    }

    echo "Decremento <br>";
    for( $index = 5 ; $index >= 0 ;$index --){
        echo $index."<br>";
    }
?>

<?php for($i=0; $i < 5 ; $i++):  ?>
<a href= <?php echo $i ?> > <?php echo $i?></a>
<?php endfor;?>