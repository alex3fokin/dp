<?php
/**
 * Created by PhpStorm.
 * User: alex3
 * Date: 07.01.2019
 * Time: 11:54
 */
namespace Entity\PHP;

use Interfaces\TitleTemplate;

class PHPTemplateTitleTemplate implements TitleTemplate {
    public function getTemplateString() {
        return "<h1><?= $title; ?></h1>";
    }
}