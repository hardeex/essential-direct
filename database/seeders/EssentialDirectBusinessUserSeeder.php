<?php

namespace Database\Seeders;

use App\Models\EssentialDirectBusinessModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EssentialDirectBusinessUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // creating seeders rows to geerate play-around data into the database
       
        $posts = [
            [
                'image_path' => '',
                'businessID' => 'RC12356',
                'is_Opened' => false,
                'last_visited' => now(),
                'total_visited' => 1,
                'category'=>'Telecomunication, Direcotry, Data hub',
                'full_name'=> 'Jamiu Adewale Yusuf',
                'phone_number'=> 07060005000,
                'email'=>'webmasterjdd@gmail.com',
                'address'=>'oke-odan, Apete, Ibadan, Oyo State',
                'bank_details'=>'8148413982, Opay',
                'is_verified'=>true,
            ],

            [
                'image_path' => '',
                'businessID' => 'RC98765',
                'is_Opened' => true,
                'last_visited' => now(),
                'total_visited' => 2,
                'category'=>'sales and digital marketing',
                'full_name'=> 'Ashley James',
                'phone_number'=> 809764234,
                'email'=>'example@essential.com',
                'address'=>'24, Iyana street, Alausa, Ikeja, Lagos',
                'bank_details'=>'789524409, Zenith',
                'is_verified'=>false,
            ]
        ];

        foreach($posts as $key => $value){
           EssentialDirectBusinessModel::create($value);
        }
    }
}
