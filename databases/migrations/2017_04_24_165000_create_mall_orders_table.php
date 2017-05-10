<?php
/**
 * This file is part of Notadd.
 *
 * @datetime 2017-04-25 16:23:00
 */

use Illuminate\Database\Schema\Blueprint;
use Notadd\Foundation\Database\Migrations\Migration;

/**
 * Class CreateMallOrdersTable.
 */
class CreateMallOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $this->schema->create('mall_orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('address_id')->unsigned()->nullable();
            $table->integer('shop_id')->unsigned()->nullable();
            $table->enum('status', array_keys(trans('globals.order_status')));
            $table->enum('type', ['cart', 'wishlist', 'order', 'later', 'freeproduct']);
            $table->string('description')->nullable();
            $table->dateTime('end_date')->nullable(); //cancelled or paid
            $table->integer('rate')->nullable();
            $table->string('rate_comment')->nullable();
            $table->boolean('rate_mail_sent')->default(false);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $this->schema->drop('mall_orders');
    }
}
