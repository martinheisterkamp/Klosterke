<?php

namespace App\Product;

use App\Category\Decaying\QuicklyDecayingProduct;

class LaTrappePuur extends QuicklyDecayingProduct
{
    public function __construct(
        public int $expires_in,
        public int $quality
    ) {}
}
