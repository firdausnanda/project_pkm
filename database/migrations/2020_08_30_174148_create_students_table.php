<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('major_id')->constrained();
            $table->string('nim')->unique();
            $table->string('nama');
            $table->string('tempat_lahir')->nullable();
            $table->string('tgl_lahir')->nullable();
            $table->string('no_hp')->nullable();
            $table->string('jk')->nullable();
            $table->string('username_sim')->nullable();
            $table->string('password_sim')->nullable();
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
        Schema::table('students', function (Blueprint $table) {
          $table->dropForeign('students_user_id_foreign');
          $table->dropForeign('students_major_id_foreign');
        });
        Schema::dropIfExists('students');
    }
}
