<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldVaiTroIdOfTableQuanTriVien extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('quan_tri_vien', function (Blueprint $table) {
            if (!Schema::hasColumn('quan_tri_vien', 'vai_tro_id')) {
                $table->unsignedInteger('vai_tro_id')->after('password');
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('quan_tri_vien', function (Blueprint $table) {
            if (Schema::hasColumn('quan_tri_vien', 'vai_tro_id')) {
                $table->dropColumn('vai_tro_id');
            }
        });
    }
}
