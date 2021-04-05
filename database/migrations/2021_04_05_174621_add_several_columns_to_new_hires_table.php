<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSeveralColumnsToNewHiresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //add gender, middle name, anmd vendor to new hire
        Schema::table('new_hires', function ($table)
        {
            // add the optional middle name field
            $table->char('middle name', 255)->nullable();

            // add the optional gender field
            $table->char('Gender', 50)->nullable();

            //add the vendor field
            $table->string('Vendor',255);

            //The OB timestamp was added in a previous migration

            //Adding the foreign keys to the db

            //adding role id foreign key
            $table->unsignedBigInteger('role_id');
            $table->foreign('role_id')->references('id')->on('roles');

            //adding manager id foreign key
            $table->unsignedBigInteger('manager_id');
            $table->foreign('manager_id')->references('id')->on('managers');

            //adding a user for hte new hire to be associated with
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('new_hires', function ($table)
        {
            //no need to drop any columns
        });
    }
}
