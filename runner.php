<?php

require_once "vendor/autoload.php";

$windowFactory = new \App\PlasticWindowFactory(new \App\Color\WhiteColor());
echo $windowFactory->makeWindow();
echo $windowFactory->makeExpert();

$windowFactory = new \App\PlasticWindowFactory(new \App\Color\RedColor());
echo $windowFactory->makeWindow();
echo $windowFactory->makeExpert();