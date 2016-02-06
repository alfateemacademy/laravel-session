<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignPostToCategoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('post', function(Blueprint $table)
		{
			$table->foreign('category_id')
				->references('id')
				->on('category')
				->onDelete('cascade')
				->onUpdate('cascade');
		});

		Schema::table('category', function(Blueprint $table)
		{
			$table->foreign('category_id')
				->references('id')
				->on('category')
				->onDelete('cascade')
				->onUpdate('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('post', function(Blueprint $table)
		{
			$table->dropForeign('post_category_id_foreign');
		});
	}

}
