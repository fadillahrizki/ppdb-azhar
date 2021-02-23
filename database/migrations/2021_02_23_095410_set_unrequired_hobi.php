<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SetUnrequiredHobi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('siswa_mas', function (Blueprint $table) {
            //
            $table->string('siswa_hobi')->nullable()->change();
        });

        Schema::table('siswa_ras', function (Blueprint $table) {
            //
            $table->string('siswa_hobi')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('siswa_mas', function (Blueprint $table) {
            //
        });
    }
}
