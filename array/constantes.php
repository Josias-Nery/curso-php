<div class="titulo">Array Constantes</div>

<?php
const FRUTAS = ['Laranja', 'Abacaxi'];
//FRUTAS[0] = 'banana';
//FRUTAS[] = 'banana';
echo FRUTAS[0];

const CARROS = array("Fiat" => "Uno", "Ford" => "Fiesta");
//CARROS["BMW"] = '325i';
echo '<br>' . CARROS["Fiat"];

define('CIDADES', array('Belo Horizonte', 'Recife'));
//CIDADES[] = 'Rio de Janeiro';
echo '<br>' .   CIDADES[1];