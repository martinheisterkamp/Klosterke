<?php

namespace App\Product\Beer\Abbey;

use App\Category\Decaying\QuicklyDecayingProduct;

class LaTrappePuur extends QuicklyDecayingProduct
{
    public function __construct(
        public int $expires_in,
        public int $quality
    ) {}
}
