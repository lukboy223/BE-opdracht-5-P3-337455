<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
       DB::unprepared('
         Drop table if exists allergeens;
            create table allergeens(
            Id int unsigned not null auto_increment
            ,Naam varchar(255) not null
            ,Omschrijving varchar(255) not null
           ,updated_at timestamp default current_timestamp on update current_timestamp
        ,created_at timestamp default current_timestamp
            ,Primary key(Id)
            )engine=innoDB;
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_allergeen');
    }
};
