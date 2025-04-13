<?php $arr = [
    'v1' => 'First release',
    'v2' => 'Second release',
    'v3' => 'Third release',
];?>

<?php
      function vvv ($a){
    return[$a];
};
  function vvvv($a,$b){
    return[$a,$b];
};
var_dump(array_map('vvv', $arr));
echo "<br>";
var_dump(array_map('vvvv', $arr,$arr));


?>
