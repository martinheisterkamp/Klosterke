<?php

namespace App\Product\Beer\Abbey;

use App\Category\DecayingProduct;

class FranzisKaner extends DecayingProduct
{
    protected int $expired_decay_rate = 2;
    public function __construct(
        public int $expires_in,
        public int $quality
    ) {}
}
