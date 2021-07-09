<?php

use Illuminate\Database\Seeder;


use App\Comic;

class ComicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //prendo i dati dentro a config->comics
        $comicsList = config("comics");

        foreach ($comicsList as $comic) {

            //Svuota la table comic 
            Comic::truncate();
            
            $newComic = new Comic();

            //$newComic->title = $comic["title"];
            $newComic->fill($comic);

            $newComic->save();

            
        }
    }
}
