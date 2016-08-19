<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumToArticles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->string('name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('articles', function (Blueprint $table) {
			$table->renameColumn('name');//要使用这个方法需要用composer require doctrine/dbal指令引入这个包
            $table->dropColumn('name');//要使用这个方法需要用composer require doctrine/dbal指令引入这个包
        });
    }
}
