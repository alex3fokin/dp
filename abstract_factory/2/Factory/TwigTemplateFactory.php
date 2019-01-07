<?php
/**
 * Created by PhpStorm.
 * User: alex3
 * Date: 07.01.2019
 * Time: 11:44
 */
namespace Factory;

use Entity\Twig\TwigPageTemplate;
use Entity\Twig\TwigTitleTemplate;
use Interfaces\TemplateFactory;

class TwigTemplateFactory implements TemplateFactory {
    public function createTitleTemplate() {
        return new TwigTitleTemplate;
    }

    public function createPageTemplate()
    {
        return new TwigPageTemplate($this->createTitleTemplate());
    }
}