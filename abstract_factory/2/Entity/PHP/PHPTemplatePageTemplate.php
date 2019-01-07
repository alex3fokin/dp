<?php
/**
 * Created by PhpStorm.
 * User: alex3
 * Date: 07.01.2019
 * Time: 12:02
 */
namespace Entity\PHP;

use Abstracts\BasePageTemplate;

class PHPTemplatePageTemplate extends BasePageTemplate {
    public function getTemplateString() {
        $renderedTitle = $this->titleTemplate->getTemplateString();
        return "<div class='page'>".$renderedTitle."<article class='content'><?= $content; ?></article></div>";;
    }
}