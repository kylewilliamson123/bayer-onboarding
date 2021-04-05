<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CompletionAndAssignment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('new_hires', function($table) {
            $table->char('AssignedTo', 255);
            $table->char('CompletionStatus', 255)->default('Open');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('new_hires', function($table) {
            $table->dropColumn('AssignedTo');
            $table->dropColumn('CompletionStatus');
        });
    }
}
