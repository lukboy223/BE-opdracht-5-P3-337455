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
         DROP PROCEDURE IF EXISTS sp_read_products_per_period;
        CREATE PROCEDURE sp_read_products_per_period(
         IN start_date DATE
        ,IN end_date DATE
        )
        BEGIN

        SELECT
         PROD.Naam
        ,SUM(PPL.Aantal) as Aantal
        ,LEV.Naam as Leverancier
        ,LEV.contact_persoon

        FROM product_per_leveranciers as PPL

        INNER JOIN products as PROD
        ON PROD.Id = PPL.Product_Id

        INNER JOIN leveranciers as LEV
        ON PPL.Leverancier_Id = LEV.Id

        WHERE PPL.Datum_levering BETWEEN start_date AND end_date
        GROUP BY PROD.Naam, LEV.Naam, LEV.contact_persoon;
        ORDER BY LEV.Naam
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
