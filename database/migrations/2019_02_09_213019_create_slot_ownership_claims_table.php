<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlotOwnershipClaimsTable extends Migration
{
    public function up()
    {
        Schema::create('slot_ownership_claims', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('slot_id');
            $table->unsignedInteger('user_id');
            $table->timestamps();
        });
    }
}
