<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Package;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Package::insert([
            [
                'name' => 'Privéles 2,5 uur',
                'price' => '€ 175,- inclusief alle materialen',
                'personCount' => 'Eén persoon per les',
                'dayPart' => '1 dagdeel',
                'isActief' => 1,
                'opmerkingen' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Losse Duo Kiteles 3,5 uur',
                'price' => '€ 135,- per persoon inclusief alle materialen',
                'personCount' => 'Maximaal 2 personen per les',
                'dayPart' => '1 dagdeel',
                'isActief' => 1,
                'opmerkingen' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Kitesurf Duo lespakket 3 lessen 10,5 uur',
                'price' => '€ 375,- per persoon inclusief materialen',
                'personCount' => 'Maximaal 2 personen per les',
                'dayPart' => '3 dagdelen',
                'isActief' => 1,
                'opmerkingen' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Kitesurf Duo lespakket 5 lessen 17,5 uur',
                'price' => '€ 675,- per persoon inclusief materialen',
                'personCount' => 'Maximaal 2 personen per les',
                'dayPart' => '5 dagdelen',
                'isActief' => 1,
                'opmerkingen' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
