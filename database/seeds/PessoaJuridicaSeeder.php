<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use database\factories\PessoaJuridicaFactory;

class PessoaJuridicaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Pessoa::class, 500)->states('PJ')->create();
    }
}
