<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();

        

        $this->call(UserAdminSeeder::class);
        $this->call(PastoralSeeder::class);
        $this->call(CitypeSeeder::class);
        $this->call(PescolarSeeder::class);
        $this->call(CurriculumSeeder::class);
        
        $this->call(CountrySeeder::class);
        $this->call(StateSeeder::class);
        $this->call(CitySeeder::class);
        
        $this->call(TauthoritySeeder::class);
        $this->call(AuthoritySeeder::class);
        $this->call(LapseSeeder::class);
        $this->call(LevelSeeder::class);
        $this->call(SectionSeeder::class);
        $this->call(CourseSeeder::class);
        $this->call(PensumSeeder::class);
        $this->call(TinscriptionSeeder::class);

        $this->call(RepresentantSeeder::class);       
        //$this->call(EstudiantSeeder::class); 
        
        $this->call(TiTeacherSeeder::class);       
               

    }
}
