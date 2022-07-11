<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        DB::table('setores')->insert([
            'setor' => "Diretoria",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('menu_itens')->insert([
            'item' => 'Comercial',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('menu_itens')->insert([
            'item' => 'Marketing',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('menu_itens')->insert([
            'item' => 'Financeiro',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);


        DB::table('menu_subitens')->insert([
            'subitem' => 'Vendas',
            'iframe' => 'https://app.powerbi.com/view?r=eyJrIjoiMGE2MWMzNmYtMWFhMC00YzY4LWI3YTAtY2ZmMmRmOGU5NTI0IiwidCI6ImNlYWFmNTNlLTM3YzEtNDBjMy04YjNiLTE1ZmU3YjZhMmJmNCJ9&pageName=ReportSection841ffc60b0dedb0ae410',
            'item_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('menu_subitens')->insert([
            'subitem' => 'Leads',
            'iframe' => 'https://app.powerbi.com/view?r=eyJrIjoiMGE2MWMzNmYtMWFhMC00YzY4LWI3YTAtY2ZmMmRmOGU5NTI0IiwidCI6ImNlYWFmNTNlLTM3YzEtNDBjMy04YjNiLTE1ZmU3YjZhMmJmNCJ9&pageName=ReportSection841ffc60b0dedb0ae410',
            'item_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('menu_subitens')->insert([
            'subitem' => 'Churn',
            'iframe' => 'https://app.powerbi.com/view?r=eyJrIjoiMGE2MWMzNmYtMWFhMC00YzY4LWI3YTAtY2ZmMmRmOGU5NTI0IiwidCI6ImNlYWFmNTNlLTM3YzEtNDBjMy04YjNiLTE1ZmU3YjZhMmJmNCJ9&pageName=ReportSection841ffc60b0dedb0ae410',
            'item_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('menu_subitens')->insert([
            'subitem' => 'Outdoors',
            'iframe' => 'https://app.powerbi.com/view?r=eyJrIjoiMGE2MWMzNmYtMWFhMC00YzY4LWI3YTAtY2ZmMmRmOGU5NTI0IiwidCI6ImNlYWFmNTNlLTM3YzEtNDBjMy04YjNiLTE1ZmU3YjZhMmJmNCJ9&pageName=ReportSection841ffc60b0dedb0ae410',
            'item_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('menu_subitens')->insert([
            'subitem' => 'Banners',
            'iframe' => 'https://app.powerbi.com/view?r=eyJrIjoiMGE2MWMzNmYtMWFhMC00YzY4LWI3YTAtY2ZmMmRmOGU5NTI0IiwidCI6ImNlYWFmNTNlLTM3YzEtNDBjMy04YjNiLTE1ZmU3YjZhMmJmNCJ9&pageName=ReportSection841ffc60b0dedb0ae410',
            'item_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('usuarios')->insert([
            'nome' => 'Carlos',
            'sobrenome' => 'Neto',
            'email' => 'a@a',
            'setor_id' => 1,
            'privilegio' => 1
        ]);

    }
}
