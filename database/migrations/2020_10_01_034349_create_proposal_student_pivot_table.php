<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProposalStudentPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proposal_student', function (Blueprint $table) {
            $table->foreignId('proposal_id')->constrained();
            $table->foreignId('student_id')->constrained();
            $table->enum('jabatan', ['Ketua', 'Anggota 1', 'Anggota 2', 'Anggota 3', 'Anggota 4'])->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {   Schema::table('proposal_student', function (Blueprint $table) {
            $table->dropForeign('proposal_student_proposal_id');
            $table->dropForeign('proposal_student_student_id');
        });
        Schema::dropIfExists('proposal_student');
    }
}
