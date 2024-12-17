<?php

namespace App\Product\Wine\White;

use App\Category\FlourishingProduct;

class Chardonnay extends FlourishingProduct
{
    public function __construct(
        public int $expires_in,
        public int $quality
    ) {}
}
