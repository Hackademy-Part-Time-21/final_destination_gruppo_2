<?php

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('role')->default(1);
            $table->foreign('role')->references('id')->on('roles');
        });
        $defaultUsers=[
            ['name'=>'Guest',       'email'=>'guest@guest.it',  'birth'=>'1990/01/01',  'password'=>Hash::make('abcd1234'), 'role'=>1],
            ['name'=>'Checker',     'email'=>'check@check.it',  'birth'=>'1990/01/01',  'password'=>Hash::make('abcd1234'), 'role'=>2],
            ['name'=>'Admin',       'email'=>'admin@admin.it',  'birth'=>'1990/01/01',  'password'=>Hash::make('abcd1234'), 'role'=>3],
            ['name'=>'Developer',   'email'=>'dev@dev.it',      'birth'=>'1990/01/01',  'password'=>Hash::make('abcd1234'), 'role'=>4]
        ];
        foreach($defaultUsers as $user)
        User::create(
            ['name'=>$user['name'],
            'email'=>$user['email'],
            'birth'=>$user['birth'],
            'password'=>$user['password'],
            'role'=>$user['role']
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table ->dropForeign(['role']);
            $table ->dropColumn('role');
        });
    }
};
