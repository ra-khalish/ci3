<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_hello extends CI_Controller {
	function index()
	{
        ?>
		<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Hello World!</title>
        </head>
        <body>
            <?php echo "Hello World!";?>
        </body>
        </html>
        <?php
	}
}
?>