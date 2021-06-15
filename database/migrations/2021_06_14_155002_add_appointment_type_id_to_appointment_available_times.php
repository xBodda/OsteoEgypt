<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAppointmentTypeIdToAppointmentAvailableTimes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('appointment_available_times', function (Blueprint $table) {
            $table->foreignId('appointment_type_id')->nullable()->constrained('appointment_types')->cascadeOnUpdate()->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('appointment_available_times', function (Blueprint $table) {
            $table->dropForeign('appointment_available_times_appointment_type_id_foreign');
            $table->dropColumn('appointment_type_id');
        });
    }
}
