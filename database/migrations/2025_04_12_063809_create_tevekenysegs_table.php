<?php

use App\Models\Tevekenyseg;
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
        Schema::create('tevekenysegs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kat_id')->references('id')->on('kategorias');
            $table->string('tev_nev');
            $table->boolean('allapot')->default(false);
            $table->timestamps();
        });

        Tevekenyseg::create([
            'kat_id' => '1',
            'tev_nev' => 'első házimunka tevékenység'
        ]);
        
        Tevekenyseg::create([
            'kat_id' => '1',
            'tev_nev' => 'második házimunka tevékenység'
        ]);

        Tevekenyseg::create([
            'kat_id' => '2',
            'tev_nev' => 'első iskola tevékenység'
        ]);

        Tevekenyseg::create([
            'kat_id' => '2',
            'tev_nev' => 'második iskolai tevékenység'
        ]);

        Tevekenyseg::create([
            'kat_id' => '3',
            'tev_nev' => 'első egyéb tevékenység'
        ]);

        Tevekenyseg::create([
            'kat_id' => '3',
            'tev_nev' => 'második egyéb tevékenység'
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tevekenysegs');
    }
};
