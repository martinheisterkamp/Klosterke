<?php
namespace App\Product;

abstract class DecayingProduct extends AbstractProduct {

    public function tick(int $amount = 1): void {
        for($i = 0; $i < $amount; $i++) {
            $this->expires_in -= 1;

            if($this->expires_in === 0) {
                $this->quality -= 2;
            } else {
                $this->quality -= 1;
            }
        }
    }
}