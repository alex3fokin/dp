<?php
/**
 * Created by PhpStorm.
 * User: alex3
 * Date: 07.01.2019
 * Time: 11:43
 */
namespace Interfaces;

interface TemplateFactory {
    public function createTitleTemplate();
    public function createPageTemplate();
}