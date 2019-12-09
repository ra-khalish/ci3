<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $judulapp;?></title>
</head>
<body>
    <?php
        echo heading($judulapp,2);
        echo br();
        echo "var1 : ".$var1;
        echo br();
        echo 'dengan print_r($ekstrakvar)';
        echo br();
        print_r($ekstrakvar);
        echo heading("Isi dari var ekstrakvar dijadikan variabel: ",3);
        extract($ekstrakvar);
        echo "Framework : ".$frm;
        echo br();
        echo "versi : ".$versi;
        echo br();
        echo "no : ".$no;
        echo br();
    ?>
</body>
</html>