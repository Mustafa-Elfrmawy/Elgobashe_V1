<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        // إنشاء جدول employees
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('phone_number')->nullable();
            $table->string('address')->nullable();
            $table->timestamps();
        });

        // إنشاء جدول users
     
        // إنشاء جدول clients
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->tinyInteger('status')->default(1);
            $table->string('address' , 255)->nullable();
            $table->string('phone' , 50)->nullable();
            $table->timestamps();
        });

        // إنشاء جدول items
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('item_number');
            $table->string('item_name');
            $table->decimal('price', 8, 4)->default(0);
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
        });

        // إنشاء جدول orders
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('gloss')->nullable();
            $table->string('carton_type')->nullable();
            $table->string('additions')->nullable();
            $table->string('printing')->nullable();
            $table->string('paper_type')->nullable();
            $table->string('sheet_size')->nullable();
            $table->string('unfolding')->nullable();
            $table->string('knife')->nullable();
            $table->string('die')->nullable();
            $table->string('net_knife')->nullable();
            $table->string('quantity_sheets')->nullable();
            $table->string('quantity_boxes')->nullable();
            $table->string('order_code')->nullable();
            $table->string('date')->nullable();
            $table->foreignId('client_id')->nullable()->constrained('clients');
            $table->foreignId('item_id')->nullable()->constrained('items');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('orders');
        Schema::dropIfExists('items');
        Schema::dropIfExists('clients');
        Schema::dropIfExists('users');
        Schema::dropIfExists('employees');
    }
};
