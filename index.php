<?php
/**
 * Created by PhpStorm.
 * User: janjaap
 * Date: 30-01-18
 * Time: 18:02
 */
include_once("lib/Autoloader.php");


Autoloader::register();

$merk = 'Volkswagen';

$db = new Db();
$pdo  =  $db->getCon();
$stmt = $pdo->prepare('SELECT * FROM autos WHERE Merk = :merk');
$stmt->bindParam(':merk', $merk, PDO::PARAM_STR);
$stmt->execute();
$autos = $stmt->fetchAll(PDO::FETCH_CLASS, "Auto");


include("header.php"); ?>


<h1>Autoverhuur</h1>
<?php foreach ($autos as $auto) { ?>
    <div class="row">
        <div class="col-sm">
            <?= $auto->getMerk() ?>
        </div>
        <div class="col-sm">
            <?= $auto->getType() ?>
        </div>
        <div class="col-sm">
            <?= $auto->getDatumAPK() ?>
        </div>
        <div class="col-sm">
            <?= $auto->getKilometerstand() ?>
        </div>
    </div>
<?php } ?>
<br><br>
        <h3>Overzicht van alle Polo's</h3>

<?php

$stmt = $pdo->prepare('SELECT * FROM autos WHERE Type="Polo"');
$stmt->execute();
$autos = $stmt->fetchAll(PDO::FETCH_CLASS, "Auto");

foreach ($autos as $auto) { ?>
    <div class="row">
        <div class="col-sm">
            <?= $auto->getMerk() ?>
        </div>
        <div class="col-sm">
            <?= $auto->getType() ?>
        </div>
        <div class="col-sm">
            <?= $auto->getDatumAPK() ?>
        </div>
        <div class="col-sm">
            <?= $auto->getKilometerstand() ?>
        </div>
    </div>
<?php } ?>
    <br><br>
    <h3>Overzicht van alle Citroëns</h3>
    <p>Schrijf de code om dit overzicht weer te geven!</p>
    <br><br>
    <h3>Overzicht van alle Auto's met een APK van voor 1999-07-22</h3>
    <p>Schrijf de code om dit overzicht weer te geven!</p>

<?php include("footer.php"); ?>