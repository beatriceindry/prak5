<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Hello, CodeIgniter</title>
</head>
<body>

<div id="container">
	<h1>Hello, CodeIgniter</h1>
	<hr>
	<h2>Ini adalah program pertama saya yang dibuat dengan menggunakan PHP
			Framework CodeIgniter</h2>

			<h1>Links</h1>
			<a href="<?= base_url() ?>index.php/about/biodata">Biodata</a><br>
			<a href="<?= base_url() ?>index.php/tentangkharisma">Tentang STMIK Kharisma</a><br>
			<a href="<?= base_url() ?>index.php/about/desainweb">Tentang Desain Web</a><br>
			<a href="<?= base_url() ?>index.php/about/list">Lima Resep Kuliner</a>
</div>

</body>
</html>
