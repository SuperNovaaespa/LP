<?php

namespace Database\Seeders;
use App\Models\categoria;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriaSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        categoria::insert(['nome'=>'HortiFruti', 
        'descricao'=>'Verduras, Vegetais e Frutas']);
        categoria::insert(['nome'=>'Açougue', 
        'descricao'=>'Carnes']);
        categoria::insert(['nome'=>'Bebidas', 
        'descricao'=>'Refrigerantes, Água, Bebidas Alcólicas e Sucos']);
    }
}
