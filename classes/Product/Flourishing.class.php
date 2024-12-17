<?php
namespace App\Product;

abstract class FlourishingProduct extends AbstractProduct {
    
    public function tick(int $amount = 1): void {
        for($i = 0; $i < $amount; $i++) {
            $this->expires_in -= 1;

            if($this->expires_in === 0) {
                $this->quality = 0;
                return;
            }

            if($this->expires_in <= 10 && $this->expires_in > 5) {
                $this->quality += 2;
                return;
            }

            if($this->expires_in <= 5 && $this->expires_in > 0) {
                $this->quality += 3;
                return;
            }

            $this->quality += 1;
        }
    }
}