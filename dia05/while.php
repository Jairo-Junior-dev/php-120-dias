<?php $num = 20;  $num2 = 20;?>

<?php 
    while($num >= 0){
        echo $num."\t";
        $num --;
    }?>
    <?php while($num2 >= 0):?>
    <?php if($num2 % 2 == 0 && ($num2 ==16 || $num2 ==14)):?>
    <h1><?php echo $num2;$num2 -- ?></h1>
    <?php endif; ?>
    <h3 ><?php echo $num2;$num2 --  ?></h3>
    <?php endwhile; ?>