<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$judulapp;?></title>
</head>
<body>
    <h2><?=$judulapp;?></h2>
    <br />
    var1 : <?=$var1;?>
    <br />
    dengan print_r($ekstrakvar);
    <br />
    <? print_r($ekstrakvar);?>
    <h3>Isi dari var ekstrakvar dijadikan variabel : </h3>
    <? extract($ekstrakvar);?>
    Framework : <?=$frm;?>
    <br />
    versi : <?=$versi;?>
    <br />
    no : <?=$no;?>
</body>
</html>