<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Invoice;
use App\Models\Recipient;
use App\Models\Sender;
use App\Models\User;
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
        DB::table('cities')->insert([
            [
                'name' => 'Бишкек'
            ],[
                'name' => 'Москва'
            ],[
                'name' => 'Астана'
            ],[
                'name' => 'Пекин'
            ],[
                'name' => 'Париж'
            ],[
                'name' => 'Рим'
            ],[
                'name' => 'Ташкент'
            ],[
                'name' => 'Анкара'
            ],[
                'name' => 'Варшава'
            ],[
                'name' => 'Берлин'
            ]
        ]);

        User::factory(100)->create();
        Recipient::factory(100)->create();
        Sender::factory(100)->create();
        Invoice::factory(1000)->create();
    }
}
