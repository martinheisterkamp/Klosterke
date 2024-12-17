<?php

namespace App\Product\Beer\Blonde;

use App\Category\DecayingProduct;

class LaTrappeBlond extends DecayingProduct
{
    public function __construct(
        public int $expires_in,
        public int $quality
    ) {}
}
