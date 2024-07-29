<?php

use App\Models\setting;
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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('key');
            $table->string('label');
            $table->string('value')->nullable();
            $table->string('type');
            $table->timestamps();
        });

        setting::create([
            'key' => '_site_name',
            'label' => 'judul situs',
            'value' => 'portofolio website',
            'type' => 'text',
        ]);
        setting::create([
            'key' => '_location',
            'label' => 'alamat rumah',
            'value' => 'Bogor, Jawa Barat, Indonesia',
            'type' => 'text',  
        ]);
        setting::create([
            'key' => '_youtube',
            'label' => 'youtube',
            'value' => 'https://youtube.com//@abdiifirdaus4276',
            'type' => 'text',  
        ]);
        setting::create([
            'key' => '_instagram',
            'label' => 'instagram',
            'value' => 'https://instagram.com//abdiifirdaus',
            'type' => 'text',  
        ]);
        setting::create([
            'key' => '_x',
            'label' => 'x',
            'value' => 'https://x.com//_aquariussssss_',
            'type' => 'text',  
        ]);
        setting::create([
            'key' => '_whatsapp',
            'label' => 'whatsapp',
            'value' => 'https://wa.link/af7d04',
            'type' => 'text',  
        ]);
        setting::create([
            'key' => '_site_description',
            'label' => 'Site Description',
            'value' => 'portofolio website dengan laravel dan admin filament.',
            'type' => 'text',  
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
