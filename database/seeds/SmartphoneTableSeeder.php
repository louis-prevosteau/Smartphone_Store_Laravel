<?php

use Illuminate\Database\Seeder;

class SmartphoneTableSeeder extends Seeder{

    public function run(){
        factory(App\Smartphone::class,10)->create();
    }
}