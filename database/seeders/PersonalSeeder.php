<?php

namespace Database\Seeders;

use App\Models\Personal;
use Illuminate\Database\Seeder;

class PersonalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Agregando seeders
        //php artisan db:seed
        $personal = new Personal();

        $personal->nombre = "Frans";
        $personal->apellido = "Vilcahuamán Rojas";
        $personal->cargo = "Administrador";
        $personal->condicion = "Contratado";
        $personal->tipo_plaza = "Organica";
        $personal->dni = "48547813";
        $personal->jor_lab = "24";
        $personal->estado = "Activo";

        $personal->save();

        $personal2 = new Personal();

        $personal2->nombre = "Angel";
        $personal2->apellido = "Tito Añaños";
        $personal2->cargo = "Director";
        $personal2->condicion = "Designado";
        $personal2->tipo_plaza = "Prevista";
        $personal2->dni = "09412119";
        $personal2->jor_lab = "40";
        $personal2->estado = "Activo";

        $personal2->save();

        $personal3 = new Personal();

        $personal3->nombre = "Frine";
        $personal3->apellido = "Castro Morales";
        $personal3->cargo = "Profesora";
        $personal3->condicion = "Nombrada";
        $personal3->tipo_plaza = "Organica";
        $personal3->dni = "28215051";
        $personal3->jor_lab = "30";
        $personal3->estado = "Activo";

        $personal3->save();
    }
}
