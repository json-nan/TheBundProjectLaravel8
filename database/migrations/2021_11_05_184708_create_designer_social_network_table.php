<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDesignerSocialNetworkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('designer_social_network', function (Blueprint $table) {
            $table->foreignId('designer_id')->constrained();
            $table->foreignId('social_network_id')->constrained();
            $table->text('url')->nullable();

            $table->primary(['designer_id', 'social_network_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('designer_social_network');
    }
}
