<?php

namespace Database\Seeders;

use App\Models\Recurso;
use Illuminate\Container\Attributes\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RecursosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $recurso = new Recurso();
        $recurso->nombre_recurso='Microfono';
        $recurso->tipo_recurso='Tecnológico';
        $recurso->costo_recurso=85.68;
        $recurso->save();

        $recurso1 = new Recurso();
        $recurso1->nombre_recurso='Pantalla';
        $recurso1->tipo_recurso='Tecnológico';
        $recurso1->costo_recurso=2879.99;
        $recurso1->save();

        $recurso2 = new Recurso();
        $recurso2->nombre_recurso='Proyector';
        $recurso2->tipo_recurso='Tecnológico';
        $recurso2->costo_recurso=1200.50;
        $recurso2->save();

        $recurso3 = new Recurso();
        $recurso3->nombre_recurso='Amplificador';
        $recurso3->tipo_recurso='Tecnológico';
        $recurso3->costo_recurso=987.99;
        $recurso3->save();

        $recurso4 = new Recurso();
        $recurso4->nombre_recurso='Sonido';
        $recurso4->tipo_recurso='Tecnológico';
        $recurso4->costo_recurso=3200.78;
        $recurso4->save();

        $recurso5 = new Recurso();
        $recurso5->nombre_recurso='Mesa';
        $recurso5->tipo_recurso='Físico';
        $recurso5->costo_recurso=28.50;
        $recurso5->save();

        $recurso6 = new Recurso();
        $recurso6->nombre_recurso='Silla';
        $recurso6->tipo_recurso='Físico';
        $recurso6->costo_recurso=11.50;
        $recurso6->save();

        $recurso7 = new Recurso();
        $recurso7->nombre_recurso='Lona';
        $recurso7->tipo_recurso='Físico';
        $recurso7->costo_recurso=389.99;
        $recurso7->save();

        $recurso8 = new Recurso();
        $recurso8->nombre_recurso='Ayudante general';
        $recurso8->tipo_recurso='Humano';
        $recurso8->costo_recurso=2550.99;
        $recurso8->save();
    }
}
