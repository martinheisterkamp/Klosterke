<?php

namespace App\Product\Wine\Red;

use App\Category\FlourishingProduct;

class Merlot extends FlourishingProduct
{
    public function __construct(
        public int $expires_in,
        public int $quality
    ) {}
}
