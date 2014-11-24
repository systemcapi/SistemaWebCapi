<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">	
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
<title><?=$title?></title>
<meta name="keywords" content=""/>
<meta name="description" content=""/>
<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/template/style.css"/>
<script type="text/javascript" src="<?=base_url();?>assets/js/jquery-1.9.1.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/js/functions.js"></script>
</head>
<body>
	<div id="container">
<div id="header">
	<h1>Sistema Web CAPI</h1>
</div><!-- End Header -->
<div id="menu">
	<ul>
		
		<li><a href="<?= base_url().'matriculas';?>">Matriculas</a></li>
                <li><?echo base_url();?></li>
                <li><a href="<?= base_url().'eventos';?>">Eventos</a></li>
                <li><?echo base_url();?></li>
                <li><a href="<?= base_url().'filiales';?>">Filiales</a></li>
                <li><?echo base_url();?></li>
                <li><a href="<?= base_url().'empleados';?>">Empleados</a></li>
                <li><?echo base_url();?></li>
                <li class="cart_menu"><?=anchor('login/logout', 'Cerrar Sesión');?></li>
		
		
	</ul>
</div><!-- End Menu -->
<div id="content">