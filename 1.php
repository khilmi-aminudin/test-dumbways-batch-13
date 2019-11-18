

<?php
    // membuat array
    $arr    = [1,2,3,4,5];

    //melakukan operasi pada array
    $hasil  = array_sum($arr);
    $max    = max($arr);
    $min    = min($arr);
    $p      = count($arr);

    //Array dikurangi Index array ke-n
    $arr_1 = $hasil-$arr[0];
    $arr_2 = $hasil-$arr[1];
    $arr_3 = $hasil-$arr[2];
    $arr_4 = $hasil-$arr[3];
    $arr_5 = $hasil-$arr[4];

    
    $array  = [1=>$arr_1,$arr_2,$arr_3,$arr_4,$arr_5];
    $hasil1  = array_sum($array);
    $max1    = max($array);
    $min1    = min($array);
    $p1      = count($array);

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

<ul>
  <li>Angka 1 : 2 + 3 + 4 + 5 = <?= $arr_1?></li>
  <li>Angka 2 : 1 + 3 + 4 + 5 = <?= $arr_2?></li>
  <li>Angka 3 : 1 + 2 + 4 + 5 = <?= $arr_3?></li>
  <li>Angka 4 : 1 + 2 + 3 + 5 = <?= $arr_4?></li>
  <li>Angka 5 : 1 + 2 + 3 + 4 = <?= $arr_5?></li>
  <li>Nilai tertinggi : <?= $arr_1?></li>
  <li>Nilai terendah  : <?= $arr_5?></li>
</ul>
  
</body>
</html>