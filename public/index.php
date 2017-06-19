<?php

/**
 * CV - Curriculum Vitae Pessoal
 *
 * @package  cv-joaorca
 * @author   João R C Almeida <joaorca@gmail.com>
 */

require '../vendor/autoload.php';

$init = new App\Controller\IndexController();
echo $init->index();
