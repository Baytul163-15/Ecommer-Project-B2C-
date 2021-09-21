<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' =>'Sumsung',
                'price'=>'80,000',
                'description'=>"Snapdragon X60 5G Modem-RF System brings you its 3rd generation 5G solution built to allow more networks",
                'category'=>'Mobile',
                'gallary'=>'https://www.bajajfinserv.in/10_Best_8GB_RAM_Mobile_Phones_in_India_Banner_Best_Phone_with_8GB_RAM_790x345.jpg'
            ],
            [
                'name' =>'vivo',
                'price'=>'35000',
                'description'=>"manufacturer warranty for in-box accessories including batteries from the date of purchase",
                'category'=>'Mobile',
                'gallary'=>'https://www.bajajfinserv.in/10_Best_Mobile_Phones_Under_Rs.12_000_banner_BlogBanners_Phones-under-12K_790x345px_V2_(1).jpg'
            ],
            [
                'name' =>'LG',
                'price'=>'60000',
                'description'=>"manufacturer warranty for in-box accessories including batteries from the date of purchase",
                'category'=>'Mobile',
                'gallary'=>'https://www.bajajfinserv.in/Check_out_these_best_phones_under_Rs._25,000_L_img_Blog-banners_CLUSTER_790-x-345-Best_phones_under_Rs._25K.jpg'
            ],
            [
                'name' =>'Apple',
                'price'=>'95000',
                'description'=>"manufacturer warranty for in-box accessories including batteries from the date of purchase",
                'category'=>'Mobile',
                'gallary'=>'https://www.bajajfinserv.in/5_top_smartphones_under_Rs.10,000_to_buy_on_EMI_banner_REDMI-8_CP-top-banner_Desktop_790x345.jpg'
            ]
            
        ]);
    }
}
