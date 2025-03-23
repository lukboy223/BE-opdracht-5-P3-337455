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
       DROP PROCEDURE IF EXISTS sp_read_product;
        CREATE PROCEDURE sp_read_product(
            IN product_name VARCHAR(255)
        )
        BEGIN
        
        declare Aantal_allergenen int;

        select count(DISTINCT ALLER.Naam) into Aantal_allergenen
        from product_per_allergeens as PPA
        inner join allergeens as ALLER
        on ALLER.Id = PPA.Allergeen_Id
        where PPA.Product_Id = (select Id from products where Naam = product_name);

        SELECT
         PROD.Naam
        ,SUM(PPL.Aantal) as Aantal
        ,MIN(PPL.Datum_levering) as Eerste_levering
        ,MAX(PPL.Datum_levering) as Laatste_levering
        ,GROUP_CONCAT(DISTINCT ALLER.Naam SEPARATOR ", ") as Allergeen
        ,PPL.Datum_levering as Levering_Datum
        ,floor(SUM(PPL.Aantal) / Aantal_allergenen) as Aantal_per_Datum

        FROM product_per_leveranciers as PPL

        INNER JOIN products as PROD
        ON PROD.Id = PPL.Product_Id

        LEFT JOIN product_per_allergeens as PPA
        ON PPA.Product_Id = PROD.Id

        LEFT JOIN allergeens as ALLER
        ON ALLER.Id = PPA.Allergeen_Id
        
        WHERE PROD.Naam = product_name
        GROUP BY PROD.Naam, PPL.Datum_levering;

        END
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
