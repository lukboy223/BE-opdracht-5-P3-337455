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
          drop table if exists leveranciers;
          create table leveranciers(
          Id int unsigned not null auto_increment
          ,Contact_id int unsigned null
            ,Naam varchar(255) not null
            ,contact_persoon varchar(255) not null
            ,Leverancier_nummer varchar(255) not null
            ,Mobiel varchar(10) not null
           ,updated_at timestamp default current_timestamp on update current_timestamp
        ,created_at timestamp default current_timestamp
            ,primary key(Id)
            ,foreign key(Contact_id) references contacts(Id)
          )engine=innoDB;
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_leverancier');
    }
};
