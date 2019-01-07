<?php
/**
 * Created by PhpStorm.
 * User: alex3
 * Date: 07.01.2019
 * Time: 11:42
 * https://refactoring.guru/design-patterns/abstract-factory/php/example
 */
require_once '../../autoload.php';

use Factory\PHPTemplateFactory;
use Factory\TwigTemplateFactory;
use Interfaces\TemplateFactory;

function templateRenderer(TemplateFactory $factory)
{
    $pageTemplate = $factory->createPageTemplate();

    echo $pageTemplate->getTemplateString();
}

echo "Testing rendering with the Twig factory:\n";
templateRenderer(new TwigTemplateFactory);
echo "\n\n";

echo "Testing rendering with the PHPTemplate factory:\n";
templateRenderer(new PHPTemplateFactory);