<?php

namespace App\Product\BBQ;

use App\Category\HistoricalProduct;

class Burger extends HistoricalProduct
{
    public function __construct(
        public int $expires_in
    ) {}
}
