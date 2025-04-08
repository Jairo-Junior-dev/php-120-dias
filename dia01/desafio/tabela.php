<!--
    <table>
  <caption>
    Front-end web developer course 2021
  </caption>
  <thead>
    <tr>
      <th scope="col">Person</th>
      <th scope="col">Most interest in</th>
      <th scope="col">Age</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Chris</th>
      <td>HTML tables</td>
      <td>22</td>
    </tr>
    <tr>
      <th scope="row">Dennis</th>
      <td>Web accessibility</td>
      <td>45</td>
    </tr>
    <tr>
      <th scope="row">Sarah</th>
      <td>JavaScript frameworks</td>
      <td>29</td>
    </tr>
    <tr>
      <th scope="row">Karen</th>
      <td>Web performance</td>
      <td>36</td>
    </tr>
  </tbody>
  <tfoot>
    <tr>
      <th scope="row" colspan="2">Average age</th>
      <td>33</td>
    </tr>
  </tfoot>
</table>


-->

<?php 
$nome ="Jairo";
$idade = 27;
$peso = 120;
$array=["Nome"=>$nome , "Idade"=>$idade,"Peso"=>$peso];

?>

<html>
    <head>
        
    </head>

    <body>
    <table>
    <caption>
    Front-end web developer course 2021
    </caption>
    
    <?php foreach($array as $linha =>$coluna):?>
    <thead>
    </thead>
    <tr>
        <th escope="col"><?php print $linha?></th>
    </tr>

    <tr>
      <th scope="row"><?php print $coluna?></th>
      <td><?php print $coluna?></td>
      <td><?php print $coluna?></td>
    </tr> 
    
  </tbody>
    </table>
    <?php endforeach;?>

    </body>
</html>