<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>ろくまる農園</title>
</head>
<body>

<?php

$mbango=$_POST['mbango'];

$hoshi['M1']='かに星雲';
$hoshi['M31']='アンドロメダ星雲';
$hoshi['M42']='オリオン大星雲';
$hoshi['M45']='すばる';
$hoshi['M57']='ドーナツ星雲';

foreach($hoshi as $key => $val)
{
  print $key.'は'.$val;
  print '<br/>';
}
?>

</body>
</html>