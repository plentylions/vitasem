<?php

namespace Vitasem\Containers;

use Plenty\Plugin\Templates\Twig;

class VitasemContainer
{
    public function call(Twig $twig):string
    {
        return $twig->render('Vitasem::Stylesheet');
    }
}