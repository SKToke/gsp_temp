<?php

namespace Database\Seeders\Admin\Settings;

use App\Models\Admin\Settings\Sponsor;
use Illuminate\Database\Seeder;

class SponsorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['id' => 1, 'name' => 'Rahim Group'],
            ['id' => 2, 'name' => 'Akij Group'],
            ['id' => 3, 'name' => 'Shanta Holdings Ltd'],
            ['id' => 4, 'name' => 'Kohinoor Chemical Company Limited'],
            ['id' => 5, 'name' => 'AK Khan Foundation']
        ];
        Sponsor::insert($data);
    }
}
