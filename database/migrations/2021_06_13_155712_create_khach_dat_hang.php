<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKhachDatHang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khach_dat_hang', function (Blueprint $table) {
            $table->id();
            $table->string('email', 30)->nullable();
            $table->string('ho_ten', 50);
            $table->string('sdt', 10)->nullable();
            $table->string('dia_chi', 100)->nullable();
            $table->string('gioi_tinh', 100)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('khach_dat_hang');
    }
}
