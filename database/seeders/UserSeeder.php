<?php

namespace Database\Seeders;

use App\Models\SellerProfile;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->name = 'Johns Enterpirces';
        $user->email = 'seller@gmail.com';
        $user->password = bcrypt('password');
        $user->user_type_id = 5;
        $user->save();

        $seller = new  SellerProfile();
        $seller->logo = "https://images.pexels.com/photos/269077/pexels-photo-269077.jpeg?auto=compress&cs=tinysrgb&w=600";
        $seller->user_id = $user->id;
        $seller->about = 'Long long text about the company';
        $seller->name = 'Gucci &  Gabbana';
        $seller->email = 'john@gmail.com';
        $seller->phone_no = '+1 265 6598';
        $seller->website_url = 'https://google.com';
        $seller->address = '371 7th Ave, New York, NY 10001';
        $seller->zipcode = 10001;
        $seller->city = 'New York';
        $seller->state = 'NY';
        $seller->country = 'USA';
        $seller->tax_id = 'AVG26565M';
        $seller->is_license = true;
        $seller->is_home_based = false;
        $seller->is_bonded = false;
        $seller->is_insured = true;
        $seller->save();


        $user = new User;
        $user->name = 'Wakeel Ahmed';
        $user->email = 'user@gmail.com';
        $user->password = bcrypt('password');
        $user->user_type_id = 4;
        $user->save();
    }
}
