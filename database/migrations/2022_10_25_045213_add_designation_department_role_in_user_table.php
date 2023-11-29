<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('role', 64)
                ->default('employee')
                ->after('password');

            $table->foreignId('department_id')
                ->nullable()
                ->after('role')
                ->constrained()
                ->cascadeOnUpdate()
                ->nullOnDelete();

            $table->foreignId('designation_id')
                ->nullable()
                ->after('department_id')
                ->constrained()
                ->cascadeOnUpdate()
                ->nullOnDelete();

            $table->char('status', 1)->default(1)->after('designation_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('status');
            $table->dropForeign('users_designation_id_foreign');
            $table->dropForeign('users_department_id_foreign');
            $table->dropColumn('role');
        });
    }
};
