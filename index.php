<?php
use RalfHortt\TranslatorService\Translator;

include('vendor/ralfhortt/service-contracts/src/ServiceContract.php');
include('src/Translator.php');

$translator = (new Translator('asdads', 'blablubb'))->register();
