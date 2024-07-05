<?php
namespace Pippo;


include 'Image.php';
include 'MiaImmagine.php';

// use serve a recuperare una classe da un namespace e renderla disponibile nello spazio dei nomi in cui mi trovo
// as serve a rinominare la classe

use Pacchetto\Image;
use Mia\Image as MiaImmagine;

// mettere \ davanti fa si che php parta a cercare la classe dal namespace standard(vuoto),
// altrimenti parte dal namespace in cui mi trovo
$oggettoImmagine = new \Mia\Image;

$oggettoImmagine->salutaMio();