<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->increments('id');
            $table->string('library_name', 150);
            $table->text('library_address');
            $table->integer('area_id')->unsigned();
            $table->timestamp('establishment_date')->nullable();
            $table->string('registrar_office_name', 150);
            $table->string('registration_no', 150);
            $table->timestamp('registration_date')->nullable();
            $table->boolean('library_has_own_room');
            $table->string('alternate_library_room')->nullable();
            $table->string('library_president_name');
            $table->string('library_president_addr');
            $table->string('library_president_mobile');
            $table->string('library_gs_name');
            $table->string('library_gs_addr');
            $table->string('library_gs_mobile');
            $table->string('librarian_name');
            $table->string('librarian_addr');
            $table->string('librarian_mobile');
            $table->string('library_bank_account_title');
            $table->string('library_bank_account_no');
            $table->string('library_bank_branch');
            $table->string('library_bank_name');
            $table->string('bank_branch_upozilla');
            $table->string('bank_branch_district');
            $table->boolean('has_constitution');
            $table->string('grant_year');
            $table->string('grant_amount');
            $table->string('grant_source');
            $table->string('last_year_reading_content')->nullable();
            $table->string('last_year_other_activities')->nullable();
            $table->string('library_book_qty')->nullable();
            $table->string('last_year_collected_books_qty')->nullable();
            $table->string('last_year_collected_books_price')->nullable();
            $table->string('daily_newspaper_name')->nullable();
            $table->string('daily_readers_qty');
            $table->string('current_year_expected_govt_grant')->nullable();
            $table->string('current_year_expected_private_grant')->nullable();
            $table->string('current_year_expected_own_income')->nullable();
            $table->string('current_year_expected_membership_fee')->nullable();
            $table->string('library_staff_salary')->nullable();
            $table->string('library_furniture_exp')->nullable();
            $table->string('library_electricity_bill')->nullable();
            $table->string('library_newspaper_buy')->nullable();
            $table->float('library_book_buy')->nullable();
            $table->string('library_other_buy')->nullable();
            $table->string('issuer_name')->nullable();
            $table->string('issuer_designation')->nullable();
            $table->string('issuer_addr')->nullable();
            $table->string('issuer_mobile')->nullable();
            $table->string('inspector_name')->nullable();
            $table->string('inspector_designation')->nullable();
            $table->string('inspector_addr')->nullable();
            $table->string('inspector_mobile')->nullable();
            $table->string('library_picture')->nullable();
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
        Schema::dropIfExists('applications');
    }
}
