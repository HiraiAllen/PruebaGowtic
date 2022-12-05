<?php

namespace Database\Seeders;

use App\Models\Colaborador;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ColaboradorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $colaborador1 = new Colaborador();
        $colaborador1->nombre = "Felipe Gutierrez Romero";
        $colaborador1->codigo = "109233";

        $colaborador1->save();

        $colaborador2 = new Colaborador();
        $colaborador2->nombre = "Diego Felipe León Cifuentes";
        $colaborador2->codigo = "124327";

        $colaborador2->save();

        $colaborador3 = new Colaborador();
        $colaborador3->nombre = "Maria Paula Rodriguez Serna";
        $colaborador3->codigo = "323410";

        $colaborador3->save();
    }
}
