<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Job extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Job', function (Blueprint $table) {            
            $table->increments('Id');
            $table->integer('Priority')->unsigned();
            $table->date('DateCreated');
            $table->date('PlannedStartDate')->nullable();
            $table->date('PlannedCompletionDate')->nullable();
            $table->integer('PlannedHours')->unsigned()->nullable();
            $table->decimal('EstimatedCost', 6, 2)->nullable();
            $table->text('Comments')->nullable();
            $table->integer('ActualHours')->unsigned()->nullable();
            $table->decimal('ActualCost', 6, 2)->nullable();
            $table->string('JobDetails', 255);
            $table->integer('ToolId')->unsigned();
            $table->integer('MachineId')->unsigned();
            $table->integer('AreaId')->unsigned();
            $table->integer('CompanyId')->unsigned();
            $table->integer('CreatedBy')->unsigned();
            $table->integer('AssignedBy')->unsigned()->nullable();
            $table->integer('AssignedTo')->unsigned()->nullable();
            $table->integer('TypeId')->unsigned()->nullable();
            $table->integer('TemplateId')->unsigned()->nullable();
            $table->integer('FocusAreaId')->unsigned()->nullable();
            $table->integer('StatusId')->unsigned();

            $table->foreign('ToolId')->references('Id')->on('Tool')->onDelete('cascade');
            $table->foreign('MachineId')->references('Id')->on('Machine')->onDelete('no action');
            $table->foreign('AreaId')->references('Id')->on('Area')->onDelete('no action');
            $table->foreign('CreatedBy')->references('Id')->on('User')->onDelete('no action');
            $table->foreign('AssignedBy')->references('Id')->on('User')->onDelete('no action');
            $table->foreign('AssignedTo')->references('Id')->on('User')->onDelete('no action');
            $table->foreign('TypeId')->references('Id')->on('Type')->onDelete('cascade');
            $table->foreign('TemplateId')->references('Id')->on('Template')->onDelete('no action');
            $table->foreign('FocusAreaId')->references('Id')->on('FocusArea')->onDelete('cascade');
            $table->foreign('StatusId')->references('Id')->on('Status')->onDelete('cascade');
            $table->foreign('CompanyId')->references('Id')->on('Company')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Job');
    }
}
