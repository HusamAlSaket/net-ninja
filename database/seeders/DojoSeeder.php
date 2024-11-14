<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Dojo;
use App\Models\Ninja;

class DojoSeeder extends Seeder
{
    public function run()
    {
        // Create 10 Dojos
        Dojo::factory(10)->create()->each(function ($dojo) {
            // For each dojo, create 5 ninjas and associate them with the dojo
            Ninja::factory(5)->create(['dojo_id' => $dojo->id]);
        });
    }
}
