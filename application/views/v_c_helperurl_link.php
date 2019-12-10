<?=doctype("html5");?>
<html>
<head>
    <title><?=$judulapp;?></title>
</head>
    <body>
        <h2><?=$judulapp;?></h2>
        <br />
        <?=anchor("c_helperhtml/pureci","Generate Dokumen Dengan Helper HTML","title='Contoh Dengan Helper HTML'");?>
        <br />
        <?=anchor("c_helperhtml/img",img("assets/images/logo-ci.png"),"title='Link dengan gambar'");?>
        <br />
        <?=anchor_popup("http://codeigniter.com/","Home of CodeIgniter","title='Popup to CodeIgniter Home'");?>
        <br />
    </body>
</html>