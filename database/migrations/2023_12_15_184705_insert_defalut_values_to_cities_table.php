<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::table('cities')->insert($this->data());
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        foreach ($this->data() as $record) {
            DB::table('cities')->where($record)->delete();
        }
    }

    private function data(): array
    {
        return [
            [
                'id' => 1,
                'name' => 'Астана',
                'longitude' => '51.1694',
                'latitude' => '71.4491',
            ],
            [
                'id' => 2,
                'name' => 'Алматы',
                'longitude' => '43.2220',
                'latitude' => '76.8512',
            ],
            [
                'id' => 3,
                'name' => 'Атырау',
                'longitude' => '47.1164',
                'latitude' => '51.9207',
            ]
        ];
    }
};
