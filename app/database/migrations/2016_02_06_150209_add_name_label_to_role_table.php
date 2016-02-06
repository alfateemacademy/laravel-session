<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNameLabelToRoleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('role', function(Blueprint $table)
		{
			$table->string('name')->after('id');
			$table->string('label')->nullable()->after('name');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('role', function(Blueprint $table)
		{
			$table->dropColumn(array('name', 'label'));
		});
	}

}
