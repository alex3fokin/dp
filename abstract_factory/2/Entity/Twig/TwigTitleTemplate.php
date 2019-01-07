<?php
/**
 * Created by PhpStorm.
 * User: alex3
 * Date: 07.01.2019
 * Time: 11:51
 */
namespace Entity\Twig;

use Interfaces\TitleTemplate;

class TwigTitleTemplate implements TitleTemplate {
    public function getTemplateString() {
        return "<h1>{{ title }}</h1>";
    }
}