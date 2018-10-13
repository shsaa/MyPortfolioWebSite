<?php

use App\Admin;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAdminData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Admin::create([
            'name' => 'AdminName1',
            'email' => 'Admin1@example.com',
            'password' => Hash::make('123456'),
            'job_title' => 'Admin'
        ]);

        Admin::create([
            'name' => 'AdminName2',
            'email' => 'Admin2@example.com',
            'password' => Hash::make('123456'),
            'job_title' => 'Super Admin'
        ]);


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
