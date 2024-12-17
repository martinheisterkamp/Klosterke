<?php

namespace App\Category\Decaying;

use App\Category\AbstractProduct;

class QuicklyDecayingProduct extends AbstractProduct
{
    public function tick(int $amount = 1): void
    {
        for ($i = 0; $i < $amount; $i++) {
            parent::tick();

            /* Quality decreases faster after expiry date */
            if ($this->expires_in < 1) {
                $this->quality -= 2;
            } else {
                $this->quality -= 1;
            }
        }

        $this->assertQuality();
    }
}
