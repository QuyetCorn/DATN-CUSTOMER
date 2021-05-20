<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldVaiTroIdOfTableKhachHang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('khach_hang', function (Blueprint $table) {
            if (!Schema::hasColumn('khach_hang', 'vai_tro_id')) {
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
        Schema::table('khach_hang', function (Blueprint $table) {
            if (!Schema::hasColumn('khach_hang', 'vai_tro_id')) {
                $table->dropColumn('vai_tro_id');
            }
        });
    }
}
