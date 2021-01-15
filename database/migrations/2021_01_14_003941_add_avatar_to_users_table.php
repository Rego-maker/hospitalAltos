<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAvatarToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /* Para crear y agregar columnas via terminal, se utiliza el comando
        php artisan make:migration add_avatar_to_users_table, para poder tener un control
        en caso de que sea un proyecto en conjunto.
        Ese comando crea esta migracion, configurando ya los Schema, pero con la palabra
        table.
        Dentro del mismo, llamamos a la variable table, le damos el atributo,
        si usamos la palabra after o before, seria para colocarlos "antes de" o "despues de"*/
        Schema::table('users', function (Blueprint $table) {
            $table->string('avatar')->nullable()->after('email');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('avatar');
        });
    }
}
