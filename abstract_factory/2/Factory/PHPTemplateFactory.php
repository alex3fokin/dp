<?php
/**
 * Created by PhpStorm.
 * User: alex3
 * Date: 07.01.2019
 * Time: 11:46
 */
namespace Factory;

use Entity\PHP\PHPTemplatePageTemplate;
use Entity\PHP\PHPTemplateTitleTemplate;
use Interfaces\TemplateFactory;

class PHPTemplateFactory implements TemplateFactory {

    public function createTitleTemplate()
    {
        return new PHPTemplateTitleTemplate;
    }

    public function createPageTemplate()
    {
        return new PHPTemplatePageTemplate($this->createTitleTemplate());
    }
}