<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('subject_student', function (Blueprint $table) {
            $table->bigInteger('subject_id')->unsigned()->index();
            $table->foreign('subject_id', 'sub_stu_sub')->references('id')->on('subjects');

            $table->bigInteger('student_id')->unsigned()->index();
            $table->foreign('student_id', 'stu_sub_stu')->references('id')->on('students');
        });

        Schema::table('professor_student', function (Blueprint $table) {
            $table->bigInteger('professor_id')->unsigned()->index();
            $table->foreign('professor_id', 'prof_stu_prof')->references('id')->on('professors');

            $table->bigInteger('student_id')->unsigned()->index();
            $table->foreign('student_id', 'stu_prof_stu')->references('id')->on('students');
        });

        Schema::table('professor_subject', function (Blueprint $table) {
            $table->bigInteger('professor_id')->unsigned()->index();
            $table->foreign('professor_id', 'prof_sub_prof')->references('id')->on('professors');

            $table->bigInteger('subject_id')->unsigned()->index();
            $table->foreign('subject_id', 'sub_prof_sub')->references('id')->on('subjects');
        });

        Schema::table('files_prof', function (Blueprint $table) {
            $table->bigInteger('professor_id')->unsigned()->index();
            $table->foreign('professor_id', 'file_professor_id')->references('id')->on('professors');
        });

        Schema::table('articles', function (Blueprint $table) {
            $table->bigInteger('professor_id')->unsigned()->index();
            $table->foreign('professor_id', 'article_professor_id')->references('id')->on('professors');
        });

        Schema::table('lecture_notes', function (Blueprint $table) {
            $table->bigInteger('professor_id')->unsigned()->index();
            $table->foreign('professor_id', 'lecture_note_professor_id')->references('id')->on('professors');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('subject_student', function (Blueprint $table) {
            $table->dropForeign('sub_stu_sub');
            $table->dropForeign('stu_sub_stu');

            $table->dropColumn('subject_id');
            $table->dropColumn('student_id');
        });

        Schema::table('professor_student', function (Blueprint $table) {
            $table->dropForeign('prof_stu_prof');
            $table->dropForeign('stu_prof_stu');

            $table->dropColumn('professor_id');
            $table->dropColumn('student_id');
        });

        Schema::table('professor_subject', function (Blueprint $table) {
            $table->dropForeign('prof_sub_prof');
            $table->dropForeign('sub_prof_sub');

            $table->dropColumn('professor_id');
            $table->dropColumn('subject_id');
        });

        Schema::table('files_prof', function (Blueprint $table) {
            $table->dropForeign('file_professor_id');
            $table->dropColumn('professor_id');
        });

        Schema::table('articles', function (Blueprint $table) {
            $table->dropForeign('article_professor_id');
            $table->dropColumn('professor_id');
        });

        Schema::table('lecture_notes', function (Blueprint $table) {
            $table->dropForeign('lecture_note_professor_id');
            $table->dropColumn('professor_id');
        });
    }
}
