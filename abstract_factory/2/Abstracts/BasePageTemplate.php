<?php
/**
 * Created by PhpStorm.
 * User: alex3
 * Date: 07.01.2019
 * Time: 11:57
 */
namespace Abstracts;

use Interfaces\PageTemplate;
use Interfaces\TitleTemplate;

abstract class BasePageTemplate implements PageTemplate {
    protected $titleTemplate;

    public function __construct(TitleTemplate $titleTemplate)
    {
        $this->titleTemplate = $titleTemplate;
    }
}