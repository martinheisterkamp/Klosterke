<?php

namespace App\Category\Decaying;

use App\Category\AbstractProduct;

class DecayingProduct extends AbstractProduct
{
    public function tick(int $amount = 1): void
    {
        for ($i = 0; $i < $amount; $i++) {
            parent::tick();

            /* Quality decreases normally */
            $this->quality -= 1;
        }

        $this->assertQuality();
    }
}
