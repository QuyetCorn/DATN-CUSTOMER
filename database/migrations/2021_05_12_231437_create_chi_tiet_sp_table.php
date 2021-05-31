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
            $table->string('mo_ta')->nullable();
            $table->string('mau_sac')->nullable();
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
