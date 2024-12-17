<?php

namespace Database\Seeders;

use App\Models\Supplier;
use Illuminate\Database\Seeder;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Supplier::factory()->create([
            "name" => "Franziskaner-Brauerei",
            "email"=> "info@franziskaner-weissbier.de",
            "city" => "München"
        ]);

        Supplier::factory()->create([
            "name" => "Brouwerij de Koningshoeven",
            "email"=> "info@latrappe.nl",
            "city" => "Berkel-Enschot"
        ]);

        Supplier::factory()->create([
            "name" => "La Bodega",
            "email"=> "info@labodega.nl",
            "city" => "Tilburg"
        ]);

        Supplier::factory()->create([
            "name" => "Heyde Hoeve",
            "email"=> "info@heydehoeve.nl",
            "city" => "Nuenen"
        ]);
    }
}
