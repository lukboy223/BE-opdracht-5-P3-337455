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
        Drop table if exists magazijns;
        create table magazijns(
         Id int unsigned not null auto_increment
         ,Product_Id int unsigned not null
         ,Verpakkings_eenheid decimal(5,2) not null
         ,Aantal_aanwezig mediumint unsigned null
           ,updated_at timestamp default current_timestamp on update current_timestamp
        ,created_at timestamp default current_timestamp
         ,Primary key(Id)
        ,Foreign key(Product_Id) references products(Id)
        )engine=innoDB;
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_magazijn');
    }
};
