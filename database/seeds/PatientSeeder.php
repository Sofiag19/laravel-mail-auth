<?php

use Illuminate\Database\Seeder;
use App\Patient;
use App\Doctor;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Patient::class, 25)
                ->make()
                ->each( function ( $patient )  {
        $doc = Doctor::inRandomOrder() -> first();
            $patient -> doctor() -> associate($doc);
            $patient -> save();
        });

    }
}
