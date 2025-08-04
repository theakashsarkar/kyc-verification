<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Enums\Status;


return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('kycs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('full_name');
            $table->string('nid_number');
            $table->date('dob');
            $table->text('address');
            $table->string('nid_front');
            $table->string('nid_back');
            $table->string('selfie');
            $table->enum('status',Status::values())->default(Status::Pending->value);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kycs');
    }
};
