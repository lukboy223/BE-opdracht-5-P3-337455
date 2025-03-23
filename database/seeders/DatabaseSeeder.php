<?php

namespace Database\Seeders;

use App\Models\Allergeen;
use App\Models\Contact;
use App\Models\Leverancier;
use App\Models\Magazijn;
use App\Models\Product;
use App\Models\ProductPerAllergeen;
use App\Models\ProductPerLeverancier;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        Product::factory()->create([
            'naam' => 'Mintnopjes',
            'barcode' => '8719587231278',
        ]);

        Product::factory()->create([
            'naam' => 'Schoolkrijt',
            'barcode' => '8719587326713',
        ]);

        Product::factory()->create([
            'naam' => 'Honingdrop',
            'barcode' => '8719587327836',
        ]);

        Product::factory()->create([
            'naam' => 'Zure Beren',
            'barcode' => '8719587321441',
        ]);

        Product::factory()->create([
            'naam' => 'Cola Flesjes',
            'barcode' => '8719587321237',
        ]);

        Product::factory()->create([
            'naam' => 'Turtles',
            'barcode' => '8719587322245',
        ]);

        Product::factory()->create([
            'naam' => 'Witte Muizen',
            'barcode' => '8719587328256',
        ]);

        Product::factory()->create([
            'naam' => 'Reuzen Slangen',
            'barcode' => '8719587325641',
        ]);

        Product::factory()->create([
            'naam' => 'Zoute Rijen',
            'barcode' => '8719587322739',
        ]);

        Product::factory()->create([
            'naam' => 'Winegums',
            'barcode' => '8719587327527',
        ]);

        Product::factory()->create([
            'naam' => 'Drop Munten',
            'barcode' => '8719587322345',
        ]);

        Product::factory()->create([
            'naam' => 'Kruis Drop',
            'barcode' => '8719587322265',
        ]);

        Product::factory()->create([
            'naam' => 'Zoute Ruitjes',
            'barcode' => '8719587323256',
        ]);

        Product::factory()->create([
            'naam' => 'Drop ninja’s',
            'barcode' => '8719587323277',
        ]);
        Magazijn::factory()->create(['product_id' => 1, 'verpakkings_eenheid' => 5, 'aantal_aanwezig' => 453]);
        Magazijn::factory()->create(['product_id' => 2, 'verpakkings_eenheid' => 2.5, 'aantal_aanwezig' => 400]);
        Magazijn::factory()->create(['product_id' => 3, 'verpakkings_eenheid' => 5, 'aantal_aanwezig' => 1]);
        Magazijn::factory()->create(['product_id' => 4, 'verpakkings_eenheid' => 1, 'aantal_aanwezig' => 800]);
        Magazijn::factory()->create(['product_id' => 5, 'verpakkings_eenheid' => 3, 'aantal_aanwezig' => 234]);
        Magazijn::factory()->create(['product_id' => 6, 'verpakkings_eenheid' => 2, 'aantal_aanwezig' => 345]);
        Magazijn::factory()->create(['product_id' => 7, 'verpakkings_eenheid' => 1, 'aantal_aanwezig' => 795]);
        Magazijn::factory()->create(['product_id' => 8, 'verpakkings_eenheid' => 10, 'aantal_aanwezig' => 233]);
        Magazijn::factory()->create(['product_id' => 9, 'verpakkings_eenheid' => 2.5, 'aantal_aanwezig' => 123]);
        Magazijn::factory()->create(['product_id' => 10, 'verpakkings_eenheid' => 3, 'aantal_aanwezig' => null]);
        Magazijn::factory()->create(['product_id' => 11, 'verpakkings_eenheid' => 2, 'aantal_aanwezig' => 367]);
        Magazijn::factory()->create(['product_id' => 12, 'verpakkings_eenheid' => 1, 'aantal_aanwezig' => 467]);
        Magazijn::factory()->create(['product_id' => 13, 'verpakkings_eenheid' => 5, 'aantal_aanwezig' => 20]);

        Allergeen::factory()->create(['naam' => 'Gluten', 'omschrijving' => 'Dit product bevat gluten']);
        Allergeen::factory()->create(['naam' => 'Gelatine', 'omschrijving' => 'Dit product bevat gelatine']);
        Allergeen::factory()->create(['naam' => 'AZO-Kleurstof', 'omschrijving' => 'Dit product bevat AZO-kleurstoffen']);
        Allergeen::factory()->create(['naam' => 'Lactose', 'omschrijving' => 'Dit product bevat lactose']);
        Allergeen::factory()->create(['naam' => 'Soja', 'omschrijving' => 'Dit product bevat soja']);

        ProductPerAllergeen::factory()->create(['product_id' => 1, 'allergeen_id' => 2]);
        ProductPerAllergeen::factory()->create(['product_id' => 1, 'allergeen_id' => 1]);
        ProductPerAllergeen::factory()->create(['product_id' => 1, 'allergeen_id' => 3]);
        ProductPerAllergeen::factory()->create(['product_id' => 3, 'allergeen_id' => 4]);
        ProductPerAllergeen::factory()->create(['product_id' => 6, 'allergeen_id' => 5]);
        ProductPerAllergeen::factory()->create(['product_id' => 9, 'allergeen_id' => 2]);
        ProductPerAllergeen::factory()->create(['product_id' => 9, 'allergeen_id' => 5]);
        ProductPerAllergeen::factory()->create(['product_id' => 10, 'allergeen_id' => 2]);
        ProductPerAllergeen::factory()->create(['product_id' => 12, 'allergeen_id' => 4]);
        ProductPerAllergeen::factory()->create(['product_id' => 13, 'allergeen_id' => 1]);
        ProductPerAllergeen::factory()->create(['product_id' => 13, 'allergeen_id' => 4]);
        ProductPerAllergeen::factory()->create(['product_id' => 13, 'allergeen_id' => 5]);
        ProductPerAllergeen::factory()->create(['product_id' => 14, 'allergeen_id' => 5]);

        Contact::factory()->create(['straat' => 'Van Gilslaan', 'huisnummer' => 34, 'postcode' => '1045CB', 'stad' => 'Hilvarenbeek']);
        Contact::factory()->create(['straat' => 'Den Dolderpad', 'huisnummer' => 2, 'postcode' => '1067RC', 'stad' => 'Utrecht']);
        Contact::factory()->create(['straat' => 'Fredo Raalteweg', 'huisnummer' => 257, 'postcode' => '1236OP', 'stad' => 'Nijmegen']);
        Contact::factory()->create(['straat' => 'Bertrand Russellhof', 'huisnummer' => 21, 'postcode' => '2034AP', 'stad' => 'Den Haag']);
        Contact::factory()->create(['straat' => 'Leon van Bonstraat', 'huisnummer' => 213, 'postcode' => '145XC', 'stad' => 'Lunteren']);
        Contact::factory()->create(['straat' => 'Bea van Lingenlaan', 'huisnummer' => 234, 'postcode' => '2197FG', 'stad' => 'Sint Pancras']);

        Leverancier::factory()->create(['naam' => 'Venco', 'contact_persoon' => 'Bert van Linge', 'leverancier_nummer' => 'L1029384719', 'mobiel' => '0628493827', 'contact_id' => 1]);
        Leverancier::factory()->create(['naam' => 'Astra Sweets', 'contact_persoon' => 'Jasper del Monte', 'leverancier_nummer' => 'L1029284315', 'mobiel' => '0639398734', 'contact_id' => 2]);
        Leverancier::factory()->create(['naam' => 'Haribo', 'contact_persoon' => 'Sven Stalman', 'leverancier_nummer' => 'L1029324748', 'mobiel' => '0624383291 ', 'contact_id' => 3]);
        Leverancier::factory()->create(['naam' => 'Basset', 'contact_persoon' => 'Joyce Stelterberg', 'leverancier_nummer' => 'L1023845773', 'mobiel' => '0648293823 ', 'contact_id' => 4]);
        Leverancier::factory()->create(['naam' => 'De Bron', 'contact_persoon' => 'Remco Veenstra', 'leverancier_nummer' => 'L1023857736', 'mobiel' => '0634291234 ', 'contact_id' => 5]);
        Leverancier::factory()->create(['naam' => 'Quality Street', 'contact_persoon' => 'Johan Nooij', 'leverancier_nummer' => 'L1029234586', 'mobiel' => '0623458456 ', 'contact_id' => 6]);
        Leverancier::factory()->create(['naam' => 'Hom Ken Food', 'contact_persoon' => 'Hom Ken', 'leverancier_nummer' => 'L1029234599', 'mobiel' => '0623458477 ', 'contact_id' => null]);

        ProductPerLeverancier::factory()->create(['leverancier_id' => 1, 'product_id' => 1, 'datum_levering' => '2023-04-09', 'aantal' => 23, 'datum_eerst_volgende_levering' => '2023-04-16']);
        ProductPerLeverancier::factory()->create(['leverancier_id' => 1, 'product_id' => 1, 'datum_levering' => '2023-04-18', 'aantal' => 21, 'datum_eerst_volgende_levering' => '2023-04-25']);
        ProductPerLeverancier::factory()->create(['leverancier_id' => 1, 'product_id' => 2, 'datum_levering' => '2023-04-09', 'aantal' => 12, 'datum_eerst_volgende_levering' => '2023-04-16']);
        ProductPerLeverancier::factory()->create(['leverancier_id' => 1, 'product_id' => 3, 'datum_levering' => '2023-04-10', 'aantal' => 11, 'datum_eerst_volgende_levering' => '2023-04-17']);
        ProductPerLeverancier::factory()->create(['leverancier_id' => 2, 'product_id' => 4, 'datum_levering' => '2023-04-14', 'aantal' => 16, 'datum_eerst_volgende_levering' => '2023-04-21']);
        ProductPerLeverancier::factory()->create(['leverancier_id' => 2, 'product_id' => 4, 'datum_levering' => '2023-04-21', 'aantal' => 23, 'datum_eerst_volgende_levering' => '2023-04-28']);
        ProductPerLeverancier::factory()->create(['leverancier_id' => 2, 'product_id' => 5, 'datum_levering' => '2023-04-14', 'aantal' => 45, 'datum_eerst_volgende_levering' => '2023-04-21']);
        ProductPerLeverancier::factory()->create(['leverancier_id' => 2, 'product_id' => 6, 'datum_levering' => '2023-04-12', 'aantal' => 30, 'datum_eerst_volgende_levering' => '2023-04-19']);
        ProductPerLeverancier::factory()->create(['leverancier_id' => 3, 'product_id' => 7, 'datum_levering' => '2023-04-19', 'aantal' => 12, 'datum_eerst_volgende_levering' => '2023-04-26']);
        ProductPerLeverancier::factory()->create(['leverancier_id' => 3, 'product_id' => 7, 'datum_levering' => '2023-04-10', 'aantal' => 23, 'datum_eerst_volgende_levering' => '2023-04-17']);
        ProductPerLeverancier::factory()->create(['leverancier_id' => 3, 'product_id' => 8, 'datum_levering' => '2023-04-11', 'aantal' => 12, 'datum_eerst_volgende_levering' => '2023-04-18']);
        ProductPerLeverancier::factory()->create(['leverancier_id' => 3, 'product_id' => 9, 'datum_levering' => '2023-04-16', 'aantal' => 1, 'datum_eerst_volgende_levering' => '2023-04-30']);
        ProductPerLeverancier::factory()->create(['leverancier_id' => 4, 'product_id' => 10, 'datum_levering' => '2023-04-16', 'aantal' => 24, 'datum_eerst_volgende_levering' => '2023-04-17']);
        ProductPerLeverancier::factory()->create(['leverancier_id' => 5, 'product_id' => 11, 'datum_levering' => '2023-04-10', 'aantal' => 47, 'datum_eerst_volgende_levering' => '2023-04-26']);
        ProductPerLeverancier::factory()->create(['leverancier_id' => 5, 'product_id' => 11, 'datum_levering' => '2023-04-19', 'aantal' => 60, 'datum_eerst_volgende_levering' => null]);
        ProductPerLeverancier::factory()->create(['leverancier_id' => 5, 'product_id' => 12, 'datum_levering' => '2023-04-11', 'aantal' => 45, 'datum_eerst_volgende_levering' => null]);
        ProductPerLeverancier::factory()->create(['leverancier_id' => 5, 'product_id' => 13, 'datum_levering' => '2023-04-12', 'aantal' => 20, 'datum_eerst_volgende_levering' => null]);
        ProductPerLeverancier::factory()->create(['leverancier_id' => 7, 'product_id' => 14, 'datum_levering' => '2023-04-14', 'aantal' => 20, 'datum_eerst_volgende_levering' => null]);
    }
}
