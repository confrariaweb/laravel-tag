<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->string('slug');
            $table->string('name');
            $table->string('color')->default('#ffffff');
            $table->timestamps();
            $table->softDeletes();
        });

        if(hasAccount())
        {
            Schema::table('tags', function (Blueprint $table) {
                $table->after('id', function ($table) {
                    $table->foreignId('account_id')
                        ->constrained('accounts')
                        ->onUpdate('cascade')
                        ->onDelete('cascade');
                });
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tags');

    }
}
