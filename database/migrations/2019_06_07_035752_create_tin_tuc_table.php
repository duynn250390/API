<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTinTucTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_tintuc', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tieu_de');
            $table->string('alias');
            $table->mediumText('noi_dung');
            $table->string('hinh_anh')->nullable();
            $table->integer('id_loaitin');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_tintuc');
    }
}
