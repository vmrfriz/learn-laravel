<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class WorkerAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workers_accounts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('worker_id')->references('id')->on('workers')->onDelete('cascade');
            $table->bigInteger('account_id')->references('id')->on('accounts')->onDelete('cascade');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('workers_accounts');
    }
}
