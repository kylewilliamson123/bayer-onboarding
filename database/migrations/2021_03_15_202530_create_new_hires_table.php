<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewHiresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('new_hires', function (Blueprint $table)
        {
            //standard ID of the newHire in the db
            $table->id();

            //The ID assigned to the New Hire
            $table->char('CWID', 100);

            //The region the New Hire is onbaorded at
            $table->char('Region', 100);

            //First name of the New Hire
            $table->char('FirstName', 255);

            //Last name of the New Hire
            $table->char('LastName', 255);

            $table->bigInteger('SeatNum');

            //used longText instead of varchar ude to size constrictions
            $table->longText('ManagerComments');

            //The onborading partner to assist with helping the new hire
            $table->char('OnBoardingBuddy', 255); 

            //What type of hire it is, new hire or returning employee
            $table->char('HireType', 100);

            //what is their status in the Onboarding process
            $table->char('HireStatus', 100);


            $table->char('Platform', 255);

            //Name of the team they are on
            $table->char('TeamName', 255);

            //leader of their OB process
            $table->char('Leader', 255);

            //below are timestamps of completion for the New Hire
            $table->timestamp('OBEmail')->nullable();
            $table->timestamp('DIPd')->nullable();
            $table->timestamp('ProdPlatformsStartDate')->nullable();

            //2 Foreign Keys from Managers and one from Role
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('new_hires');
    }
}
