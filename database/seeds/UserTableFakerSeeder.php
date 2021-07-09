<?php
//Da importare per il faker
use Faker\Generator as Faker;

//importa comic
use App\Comic;

use Illuminate\Database\Seeder;


class UserTableFakerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i<10; $i++) {
           factory(Comic::class)->create();
        }
    }
}
