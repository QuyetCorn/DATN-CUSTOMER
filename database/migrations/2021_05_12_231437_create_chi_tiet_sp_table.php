<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChiTietSPTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chi_tiet_sp', function (Blueprint $table) {
            $table->id();
            $table->foreignId('san_pham_id');
            $table->foreignId('loai_sp_id');
            $table->foreignId('nha_sx_id');
            $table->string('ten_sp', 255);
            $table->string('gia', 50);
            $table->string('thuong_hieu', 100)->nullable();
            $table->string('chat_lieu', 100)->nullable();
            $table->string('so_ngan', 100)->nullable();
            $table->string('mau_sac', 100)->nullable();
            $table->string('khoi_luong', 100)->nullable();
            $table->string('kich_thuoc', 100)->nullable();
            $table->string('tai_trong', 100)->nullable();
            $table->string('ngan_lap', 100)->nullable();
            $table->integer('so_luong')->default(0);
            $table->string('giam_gia',10)->default(0);
            // $table->integer('new',1)->default(0);
            $table->longText('hinh_anh')->nullable();
            $table->longText('mo_ta')->nullable();
            $table->boolean('tinh_trang')->nullable();
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
        Schema::dropIfExists('chi_tiet_sp');
    }
}
