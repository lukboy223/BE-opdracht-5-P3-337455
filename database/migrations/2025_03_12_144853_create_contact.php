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
          drop table if exists contacts;
          create table contacts(
          Id int unsigned not null auto_increment
          ,Straat varchar(255) not null
            ,Huisnummer varchar(10) not null
            ,Postcode varchar(6) not null
            ,stad varchar(255) not null
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
        Schema::dropIfExists('_contact');
    }
};
