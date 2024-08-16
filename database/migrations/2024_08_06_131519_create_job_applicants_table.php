<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobApplicantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_applicants', function (Blueprint $table) {
            $table->id();
            $table->string('registration_number');
            $table->integer('job_id');
            $table->string('position')->nullable();
            $table->string('prefered_location_1')->nullable();
            $table->string('prefered_location_2')->nullable();
            $table->string('prefered_location_3')->nullable();
            $table->string('applicant_name')->nullable();
            $table->bigInteger('aadhaar_card_no');
            $table->string('pan_card_no')->nullable();
            $table->date('dob');
            $table->string('birth_place')->nullable();
            $table->string('birth_state')->nullable();
            $table->enum('physically_challenged', ['Yes', 'No']);
            $table->string('physically_challenged_details')->nullable();
            $table->string('religion')->nullable();
            $table->string('religion_details')->nullable();
            $table->string('caste_category')->nullable();
            $table->string('caste_category_other')->nullable();
            $table->string('nationality')->nullable();
            $table->text('address');
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('father_name')->nullable();
            $table->string('husband_wife')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('contact_number1')->nullable();
            $table->string('contact_number2')->nullable();
            $table->string('email')->nullable();
            $table->string('uan_number')->nullable();
            $table->string('esi_number')->nullable();
            $table->string('name_of_registered_faculty')->nullable();
            $table->string('degree')->nullable();
            $table->string('registration_certificate')->nullable();
            $table->string('main_qualification_year')->nullable();
            $table->string('main_qualification_branch')->nullable();
            $table->string('main_qualification_percentage')->nullable();
            $table->string('main_qualification_date')->nullable();
            $table->string('main_qualification_college')->nullable();
            $table->string('main_qualification_univercity')->nullable();
            $table->string('additiional_qualification_year')->nullable();
            $table->string('additiional_qualification_branch')->nullable();
            $table->string('additiional_qualification_percentage')->nullable();
            $table->string('additiional_qualification_date')->nullable();
            $table->string('additiional_qualification_college')->nullable();
            $table->string('additiional_qualification_univercity')->nullable();
            $table->string('additiional1_qualification_year')->nullable();
            $table->string('additiional1_qualification_branch')->nullable();
            $table->string('additiional1_qualification_percentage')->nullable();
            $table->string('additiional1_qualification_date')->nullable();
            $table->string('additiional1_qualification_college')->nullable();
            $table->string('additiional1_qualification_univercity')->nullable();
            $table->string('exp1_start_date')->nullable();
            $table->string('exp1_end_date')->nullable();
            $table->string('exp1_company_name')->nullable();
            $table->string('exp1_location')->nullable();
            $table->string('exp1_post_hold')->nullable();
            $table->string('exp1_job_discription')->nullable();
            $table->string('exp1_relevant')->nullable();
            $table->string('exp2_start_date')->nullable();
            $table->string('exp2_end_date')->nullable();
            $table->string('exp2_company_name')->nullable();
            $table->string('exp2_location')->nullable();
            $table->string('exp2_post_hold')->nullable();
            $table->string('exp2_job_discription')->nullable();
            $table->string('exp2_relevant')->nullable();
            $table->text('upload_photo')->nullable();
            $table->text('signature')->nullable();
            $table->text('resume')->nullable();
            $table->text('HighestQualificationMarksheet')->nullable();
            $table->text('aadhar_card')->nullable();
            $table->text('pan_card')->nullable();
            $table->text('exp_latter')->nullable();
            $table->text('applicent_remark')->nullable();
            $table->enum('status', ['0', '1', '2']);
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
        Schema::dropIfExists('job_applicants');
    }
}
