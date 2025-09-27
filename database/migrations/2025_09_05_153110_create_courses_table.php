<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('ชื่อหลักสูตร');          // ชื่อหลักสูตร
            $table->integer('ระยะเวลาเรียน(ชมใ)');     // ระยะเวลาเรียน (ชั่วโมง)
            $table->enum('สถานะ', ['รับสมัคร', 'เต็ม', 'ปิด']); // สถานะ
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
