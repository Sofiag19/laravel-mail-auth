<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('patients', function (Blueprint $table) {

            $table->bigInteger('Doctor_id')->unsigned()->index();
            $table->foreign('Doctor_id', 'Doctor_patient')
                -> references('id')
                -> on('doctors');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('patients', function (Blueprint $table) {

            $table-> dropForeign('Doctor_patient');
            $table-> dropColumn('Doctor_id');
        });
    }
}
