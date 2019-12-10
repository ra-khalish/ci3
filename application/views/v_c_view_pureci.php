<?=doctype($doctype);?>
<html>
<head>
    <title><?=$judulapp;?></title>
    <?=meta($metaauthor);?>
    <?=meta($metarobot);?>
    <?=meta($metadesc);?>
    <?=meta($metakeyword);?>
    <?=meta($metacontent);?>
</head>
<body>
    <?
    echo heading($judulapp,2);
    echo br();
    echo heading("demo tanpa nbs()",3);
    echo "ini tanpa nbs()                         --jarak tetap 1 spasi!";
    echo br();
    echo heading("demo dengan nbs()",3);
    echo "ini dengan nbs()".nbs(20)."jarak 20 spasi!";
    ?>
</body>
</html>