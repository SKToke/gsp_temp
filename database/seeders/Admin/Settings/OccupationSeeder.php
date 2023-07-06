<?php

namespace Database\Seeders\Admin\Settings;

use App\Models\Admin\Settings\Occupation;
use Illuminate\Database\Seeder;

class OccupationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
//            INSERT INTO `occupations` (`id`, `name`, `en_name`, `bn_name`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
            array(1, 'Unemployment (বেকার)', 'Unemployment', 'বেকার', 'Active', 1, NULL, '2023-04-11 00:37:47', '2023-04-11 12:54:07', NULL),
            array(2, 'Farmer/Crop Cultivation (কৃষক)', 'Farmer/Crop Cultivation', 'কৃষক', 'Active', 1, NULL, '2023-04-11 00:37:47', NULL, NULL),
            array(3, 'Agriculture Labor (কৃষি শ্রম)', 'Agriculture Labor ', 'কৃষি শ্রম', 'Active', 1, NULL, '2023-04-11 00:37:47', NULL, NULL),
            array(4, 'Fish Farming (মৎস চাষ)', 'Fish Farming', 'মৎস চাষ', 'Active', 1, NULL, '2023-04-11 00:37:47', NULL, NULL),
            array(5, 'Fisherman (জেলে)', 'Fisherman ', 'জেলে', 'Active', 1, NULL, '2023-04-11 00:37:47', NULL, NULL),
            array(6, 'Housewife (গৃহিণী)', 'Housewife ', 'গৃহিণী', 'Active', 1, NULL, '2023-04-11 00:37:47', NULL, NULL),
            array(7, 'Handicrafts (হস্তশিল্প)', 'Handicrafts ', 'হস্তশিল্প', 'Active', 1, NULL, '2023-04-11 00:37:47', NULL, NULL),
            array(8, 'Housemaid (গৃহপরিচারিকা)', 'Housemaid ', 'গৃহপরিচারিকা', 'Active', 1, NULL, '2023-04-11 00:37:47', NULL, NULL),
            array(9, 'Small Business (ছোট ব্যবসা)', 'Small Business', 'ছোট ব্যবসা', 'Active', 1, NULL, '2023-04-11 00:37:47', NULL, NULL),
            array(10, 'Cow Rearing (গরু পালন)', 'Cow Rearing', 'গরু পালন', 'Active', 1, NULL, '2023-04-11 00:37:47', NULL, NULL),
            array(11, 'Goat Rearing (ছাগল পালন)', 'Goat Rearing', 'ছাগল পালন', 'Active', 1, NULL, '2023-04-11 00:37:47', NULL, NULL),
            array(12, 'Poultry Rearing (হাঁস-মুরগি পালন)', 'Poultry Rearing', '(হাঁস-মুরগি পালন', 'Active', 1, NULL, '2023-04-11 00:37:47', NULL, NULL),
            array(13, 'Tailoring (দর্জি)', 'Tailoring ', 'দর্জি', 'Active', 1, NULL, '2023-04-11 00:37:47', NULL, NULL),
            array(14, 'Government Service (সরকারী চাকরি)', 'Government Service', 'সরকারী চাকরি', 'Active', 1, NULL, '2023-04-11 00:37:47', NULL, NULL),
            array(15, 'Private Service (বেসরকারী চাকরি)', 'Private Service', 'বেসরকারী চাকরি', 'Active', 1, NULL, '2023-04-11 00:37:47', NULL, NULL),
            array(16, 'Student (ছাত্র)', 'Student', 'ছাত্র', 'Active', 1, NULL, '2023-04-11 00:37:47', NULL, NULL),
            array(17, 'Mason/Rajmistri (রাজমিস্ত্রি)', 'Mason/Rajmistri', 'রাজমিস্ত্রি', 'Active', 1, NULL, '2023-04-11 00:37:47', NULL, NULL),
            array(18, 'Carpenter (কাঠমিস্ত্রি)', 'Carpenter', 'কাঠমিস্ত্রি', 'Active', 1, NULL, '2023-04-11 00:37:47', NULL, NULL),
            array(19, 'Mechanic (মেকানিক)', 'Mechanic ', 'মেকানিক', 'Active', 1, NULL, '2023-04-11 00:37:47', NULL, NULL),
            array(20, 'Rickshaw/Van Puller (রিকশাচালক)', 'Rickshaw/Van Puller', 'রিকশাচালক', 'Active', 1, NULL, '2023-04-11 00:37:47', NULL, NULL),
            array(21, 'Auto Driver (অটো চালক)', 'Auto Driver', 'অটো চালক', 'Active', 1, NULL, '2023-04-11 00:37:47', NULL, NULL),
            array(22, 'CNG Driver (সিএনজি চালক)', 'CNG Driver', 'সিএনজি চালক', 'Active', 1, NULL, '2023-04-11 00:37:47', NULL, NULL),
            array(23, 'Driver:Car/Truck/Bus/Pickup etc(ড্রাইভার :কার/ট্রাক/বাস/পিকআপ ইত্যাদি)', 'Driver:Car/Truck/Bus/Pickup etc', 'ড্রাইভার :কার/ট্রাক/বাস/পিকআপ ইত্যাদি', 'Active', 1, NULL, '2023-04-11 00:37:47', NULL, NULL),
            array(24, 'Government Allowance (সরকারী ভাতা)', 'Government Allowance', 'সরকারী ভাতা', 'Active', 1, NULL, '2023-04-11 00:37:47', NULL, NULL),
            array(25, 'Day Labour (দিনমজুর)', 'Day Labour', 'দিনমজুর', 'Active', 1, NULL, '2023-04-11 00:37:47', NULL, NULL),
            array(26, 'Others (অন্যান্য)', 'Others ', 'অন্যান্য', 'Active', 1, NULL, '2023-04-11 00:37:47', NULL, NULL),
            array(27, 'Tuition (টিউশন)', 'Tuition ', 'টিউশন', 'Active', 1, NULL, '2023-04-11 00:37:47', NULL, NULL),
            array(28, 'Others Donation/Aid (অনুদান/সহায়তা)', 'Others Donation/Aid', 'অনুদান/সহায়তা', 'Active', 1, NULL, '2023-04-11 00:37:47', NULL, NULL),
            array(29, 'Marriage Media (ম্যারেজ মিডিয়া)', 'Marriage Media', 'ম্যারেজ মিডিয়া', 'Active', 1, NULL, '2023-04-11 00:37:47', NULL, NULL),
            array(30, 'Street Vendor/Hawker (হকার)', 'Street Vendor/Hawker', 'হকার', 'Active', 1, NULL, '2023-04-11 00:37:47', NULL, NULL),
            array(31, 'Dustman (ডাস্টম্যান)', 'Dustman', 'ডাস্টম্যান', 'Active', 1, 1, '2023-04-11 00:37:47', '2023-04-11 11:12:04', NULL),
            array(32, 'Cook (বাবুর্চি)', 'Cook', 'বাবুর্চি', 'Active', 1, NULL, '2023-04-11 00:37:47', NULL, NULL),
            array(33, 'Beggar (ভিখারি)', 'Beggar', 'ভিখারি', 'Active', 1, NULL, '2023-04-11 00:37:47', NULL, NULL),
            array(34, 'Not Applicable (প্রজোয্য নয়)', 'Not Applicable', 'প্রজোয্য নয়', 'Active', 4631, NULL, '2023-05-15 07:42:34', '2023-05-15 07:42:34', NULL)
        ];
        foreach ($data as $item) {
            Occupation::create([
                'id' => $item[0],
                'name' => $item[1]
            ]);
        }
    }
}
