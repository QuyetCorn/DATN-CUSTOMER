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
            $table->string('ten_sp');
            $table->string('gia');
            $table->string('chat_lieu')->nullable();
            $table->string('so_ngan')->nullable();
            $table->string('mau_sac')->nullable();
            $table->string('khoi_luong')->nullable();
            $table->string('kich_thuoc')->nullable();
            $table->string('tai_trong')->nullable();
            $table->string('ngan')->nullable();
            $table->integer('so_luong')->default(0);
            $table->string('giam_gia', 5, 2)->nullable();
            $table->longText('hinh_anh')->nullable();
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
