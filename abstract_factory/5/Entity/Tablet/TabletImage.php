<?php
/**
 * Created by PhpStorm.
 * User: alex3
 * Date: 07.01.2019
 * Time: 14:45
 */
namespace Entity\Tablet;

use Abstracts\ImageProduct;

class TabletImage extends ImageProduct {
    public function makeImage() {
        $this->image = "<img src='https://pbs.twimg.com/profile_images/779305023507271681/GJJhYpD2_400x400.jpg'>";
        return $this->image;
    }
}