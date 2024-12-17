<?php

namespace App\Product\Beer\Abbey;

use App\Category\Decaying\QuicklyDecayingProduct;

class FranzisKaner extends QuicklyDecayingProduct
{
    public function __construct(
        public int $expires_in,
        public int $quality
    ) {}
}
