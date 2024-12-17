<?php

namespace App\Product;

use App\Category\Decaying\DecayingProduct;

class LaTrappeBlond extends DecayingProduct
{
    public function __construct(
        public int $expires_in,
        public int $quality
    ) {}
}
