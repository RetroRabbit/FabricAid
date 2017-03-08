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
            $table->integer('priority')->unsigned();
            $table->date('DateCreated');
            $table->date('PlannedStartDate');
            $table->date('PlannedCompletionDate');
            $table->integer('PlannedHours')->unsigned();
            $table->decimal('EstimatedCost', 6, 2);
            $table->text('Comments');
            $table->integer('ActualHours')->unsigned();
            $table->decimal('ActualCost', 6, 2);
            $table->string('JobDetails', 255);
            $table->integer('ToolId')->unsigned();
            $table->integer('MachineId')->unsigned();
            $table->integer('AreaId')->unsigned();
            $table->integer('CreatedBy')->unsigned();
            $table->integer('AssignedBy')->unsigned();
            $table->integer('AssignedTo')->unsigned();
            $table->integer('TypeId')->unsigned();
            $table->integer('TemplateId')->unsigned();
            $table->integer('FocusAreaId')->unsigned();
            $table->integer('StatusId')->unsigned();
            $table->integer('CompanyId')->unsigned();

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
