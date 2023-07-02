<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvent;
use Illuminate\Support\Facades\DB;
use App\Models\Outlet;

class OutletSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Outlets = [
            [
                'address' => '123 Main St, Sydney NSW 2000',
                'phone' => '+61 2 1234 5678'
            ],
            [
                'address' => '456 George St, Melbourne VIC 3000',
                'phone' => '+61 3 2345 6789'
            ],
            [
                'address' => '789 King St, Brisbane QLD 4000',
                'phone' => '+61 7 3456 7890'
            ],
            [
                'address' => '23 Hamilton Rd, Western Sydney NSW 2170',
                'phone' => '+61 2 8765 4321'
            ],
            [
                'address' => '12 Flinders St, Adelaide SA 5000',
                'phone' => '+61 8 7654 3210'
            ],
            [
                'address' => '43 Elizabeth St, Hobart TAS 7000',
                'phone' => '+61 3 6234 5678',
            ],  

            [
                'address' => '102 High St, Northcote VIC 3070',
                'phone' => '+61 3 9482 5376'
            ],
        ];

        foreach ($Outlets as $Outlet) {
            Outlet::create($Outlet);
        }
    }
}
