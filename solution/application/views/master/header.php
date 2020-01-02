<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Atelier-Th&eacute;&acirc;tre de Marion</title>

	<style type="text/css">
		::selection { background-color: #E13300; color: white; }
		::-moz-selection { background-color: #E13300; color: white; }
	</style>

	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
		  rel="stylesheet"
		  integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
		  crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous" defer></script>

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
			integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
			crossorigin="anonymous" defer></script>
</head>
<body>

<div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item active">
                <?= anchor('', 'Home', [ 'class' => 'nav-link' ]) ?>
            </li>
            <li class="nav-item">
                <?= anchor('kids-workshops', 'Kids\' Workshops', [ 'class' => 'nav-link' ]) ?>
            </li>
            <li>
                <a class="navbar-brand" href="#">[LOGO]</a>
            </li>
            <li>
                <?= anchor('contact-us', 'Contact us', [ 'class' => 'nav-link' ]) ?>
            </li>
            <li class="nav-item">
                <?= anchor('masterclasses', 'Masterclasses', [ 'class' => 'nav-link' ]) ?>
            </li>
            <li class="nav-item">
                <?= anchor('mission', 'Mission', [ 'class' => 'nav-link' ]) ?>
            </li>
            </ul>
        </div>
    </nav>

	<div>