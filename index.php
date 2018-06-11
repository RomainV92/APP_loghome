<?php

if(isset($_GET['cible']) && !empty($_GET['cible']))
{
    $url = $_GET['cible'];

}
else
{
    $url = 'accueil';
}

if(isset($_GET['info']) && !empty($_GET['info']))
{
  $info=$_GET['info'];
  header("Refresh:0; url=/../APP_loghome/controleur/". $url . '.php?modif='.$info);
}
else
{
  header("Refresh:0; url=/../APP_loghome/controleur/". $url . '.php');
}
