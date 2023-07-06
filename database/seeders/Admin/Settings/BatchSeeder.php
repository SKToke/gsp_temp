<?php

namespace Database\Seeders\Admin\Settings;

use App\Models\Admin\Settings\Batch;
use Illuminate\Database\Seeder;

class BatchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
//            INSERT INTO `batches` (`id`, `name`, `deleted_at`, `created_at`, `updated_at`) VALUES
            array(1, 'Dhaka 10th Batch 2019', NULL, '2023-06-30 07:12:06', '2023-06-30 07:12:06'),
            array(2, 'Dhaka 12th Batch 2021', NULL, '2023-06-30 07:12:06', '2023-06-30 07:12:06'),
            array(3, 'Barishal 6th Batch 2021', NULL, '2023-06-30 07:12:06', '2023-06-30 07:12:06'),
            array(4, 'Chattogram 12th Batch 2021', NULL, '2023-06-30 07:12:06', '2023-06-30 07:12:06'),
            array(5, 'Rangpur 7th Batch 2021', NULL, '2023-06-30 07:12:06', '2023-06-30 07:12:06'),
            array(6, 'Kushtia 4th Batch 2021', NULL, '2023-06-30 07:12:06', '2023-06-30 07:12:06'),
            array(7, 'Rajshahi 8th Batch 2021', NULL, '2023-06-30 07:12:06', '2023-06-30 07:12:06'),
            array(8, 'Khulna 6th Batch 2021', NULL, '2023-06-30 07:12:06', '2023-06-30 07:12:06'),
            array(9, 'Cumilla 5th Batch 2021', NULL, '2023-06-30 07:12:06', '2023-06-30 07:12:06'),
            array(10, 'Mymensingh 6ht Batch 2021', NULL, '2023-06-30 07:12:06', '2023-06-30 07:12:06'),
            array(11, 'Sylhet 6th Batch 2021', NULL, '2023-06-30 07:12:06', '2023-06-30 07:12:06'),
        ];
        foreach ($data as $item) {
            Batch::create([
                'id' => $item[0],
                'name' => $item[1]
            ]);
        }
    }
}
