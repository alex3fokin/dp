<?php
/**
 * Created by PhpStorm.
 * User: alex3
 * Date: 07.01.2019
 * Time: 11:59
 */
namespace Entity\Twig;

use Abstracts\BasePageTemplate;

class TwigPageTemplate extends BasePageTemplate {
    public function getTemplateString()
    {
        $renderedTitle = $this->titleTemplate->getTemplateString();

        return "<div class='page'>".$renderedTitle."<article class='content'>{{ content }}</article></div>";
    }
}