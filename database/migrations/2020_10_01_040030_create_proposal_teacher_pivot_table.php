<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProposalTeacherPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proposal_teacher', function (Blueprint $table) {
            $table->foreignId('proposal_id')->constrained();
            $table->foreignId('teacher_id')->constrained();
            $table->enum('jabatan', ['Pembimbing', 'Reviewer 1', 'Reviewer 2'])->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {   
        Schema::dropIfExists('proposal_teacher');
    }
}
