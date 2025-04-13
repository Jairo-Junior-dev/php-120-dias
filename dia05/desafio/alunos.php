<?php 
$alunos = [
    "Ana" => 8,
    "Carlos" => 5.5,
    "João" => 6.5,
    "Maria" => 4
];
$TOTAL_MEDIA_TURMA = 0;
$Total = 0;
?>
<?php  
    foreach($alunos as $nome => $nota):
?>
<?php if($nota <= 5.5):?>
    <h1><?php echo "Aluno $nome com sua nota $nota: esta reprovado "?></h1>
<?php elseif($nota >= 5.5 && $nota <= 7):?>
    <h1><?php echo "Aluno $nome com sua nota $nota: esta de recuperação "?></h1>
<?php else: ?>
<h1><?php echo "Aluno $nome com sua nota $nota: esta APROVADOOOO !!!!! "?></h1>
<?php endif;?>
<?php 
$Total += $nota; 
$TOTAL_MEDIA_TURMA = ($Total)/count($alunos)?>
<?php endforeach;?>
<?php echo "Media Total da turma:  ".$TOTAL_MEDIA_TURMA ?>