<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Photo;

class PhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $photos = [
            [
                'path' => 'values'
            ],
            [
                'path' => 'path2'
            ],
            [
                'path' => 'path3'
            ],
            [
                'path' => 'path4'
            ]
        ];

        foreach ($photos as $photo) {
            Photo::create(array(
                'path' => $photo['path'],
            ));
        }
    }
}
