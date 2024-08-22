<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Camp;

class CampTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $camp =[
        [         
        'title' => 'Jago Laravel Sehari',
        'slug' => 'Jago Laravel-Sehari',
        'price' => '200',
        'created_at' => date('Y-m-d H:i:s', time()),
        'updated_at' => date('Y-m-d H:i:s', time()),
       ]
    ];
    
    foreach ($camps as $key => $camp) {
        Camp::create($camp);
    }
    
    }
}
