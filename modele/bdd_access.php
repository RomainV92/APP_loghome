<?php

function appel_bdd()
{
  try
  {
    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
    return $bdd;
  }
  catch (Exception $e)
  {
    die('Erreur : ' . $e->getMessage());
  }
}
