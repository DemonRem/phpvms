<?php

use App\Interfaces\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSettingsTable extends Migration
{
    private $migrationSvc;

    public function __construct()
    {
        $this->migrationSvc = new \Modules\Installer\Services\MigrationService();
    }

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->string('id');
            $table->unsignedInteger('offset')->default(0);
            $table->unsignedInteger('order')->default(99);
            $table->string('key');
            $table->string('name');
            $table->string('value');
            $table->string('default')->nullable();
            $table->string('group')->nullable();
            $table->string('type')->nullable();
            $table->text('options')->nullable();
            $table->string('description')->nullable();

            $table->primary('id');
            $table->index('key');
            $table->timestamps();
        });

        $this->migrationSvc->updateAllSettings();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
}
