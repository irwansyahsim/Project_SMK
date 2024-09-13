<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * Run this migration to create the `menus` table in the database.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->id(); // ID primary key
            $table->string('name'); // Nama menu
            $table->string('category'); // Kategori (makanan, minuman, dll)
            $table->decimal('price', 10, 2); // Harga menu
            $table->integer('stock'); // Jumlah stok menu
            $table->timestamps(); // Kolom created_at dan updated_at otomatis
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menus'); // Menghapus tabel jika rollback
    }
}
