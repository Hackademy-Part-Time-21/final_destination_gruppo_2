<?php

use App\Models\Categories;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name',20)->unique();
            $table->text('description')->nullable();
            $table->timestamps();
        });

        $categories= [
            ['name'=>'motori','description'=>'Auto, camper, rimorchi e molto altro! Tutto quello che riguarda i motori puoi trovarlo qui.'],
            ['name'=>'arredamento','description'=>'Mobili, tappeti, elettrodomestici, nuovo e usato per la tua casa a un \'click\' di distanza.'],
            ['name'=>'bottiglie','description'=>'Etichette rare e bottiglie in edizione limitata... se non qui, dove?'],
            ['name'=>'utensileria','description'=>'Utensili per l\'edilizia, la cucina, il giardinaggio e chi più ne ha più ne metta. Scopri la nostra gamma di strumenti da lavoro'],
            ['name'=>'collezionismo','description'=>'Pezzi unici da ogni parte del mondo, non perderti l\'anello mancante della tua impeccabile collezione'],
            ['name'=>'tecnologia','description'=>'Prodotti, servizi e argomenti relativi alla tecnologia e all\'informatica.'],
            ['name'=>'sport','description'=>'Attività fisiche, competizioni e eventi sportivi'],
            ['name'=>'servizi','description'=>'Offerte di servizi professionali o commerciali.'],
            ['name'=>'promozioni','description'=>'Offerte speciali, sconti e promozioni.'],
            ['name'=>'altro','description'=>'Categoria generica per argomenti non inclusi nelle altre categorie specificate.'],
        ];
        foreach($categories as $category){
            Categories::create(['name'=>$category['name'],
                                'description'=>$category['description']
                            ]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
