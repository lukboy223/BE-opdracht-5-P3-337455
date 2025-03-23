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
          drop table if exists product_per_leveranciers;
          create table product_per_leveranciers(
          Id int unsigned not null auto_increment
          ,Product_Id int unsigned not null
          ,Leverancier_Id int unsigned not null
          ,Datum_levering date not null
            ,Aantal int not null
            ,Datum_eerst_volgende_levering date null
           ,updated_at timestamp default current_timestamp on update current_timestamp
        ,created_at timestamp default current_timestamp
          ,Primary key(Id)
          ,Foreign key(Product_Id) references products(Id)
          ,Foreign key(Leverancier_Id) references leveranciers(Id)
          )engine=innoDB;
          ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_product_per_leverancier');
    }
};
