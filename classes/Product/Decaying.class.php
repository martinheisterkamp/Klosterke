<?php

namespace App\Product;

abstract class DecayingProduct extends AbstractProduct
{
    protected int $quality_ceiling = 50;

    public function tick(int $amount = 1): void
    {
        for ($i = 0; $i < $amount; $i++) {
            $this->expires_in -= 1;

            /* Quality decreases faster after expiry date */
            if ($this->expires_in < 1) {
                $this->quality -= 2;
            } else {
                $this->quality -= 1;
            }

            /* Quality cannot decrease below certain amount, so set it to that amount every tick instead */
            if($this->quality < $this->quality_floor) {
                $this->quality = $this->quality_floor;
            }
        }
    }
}
