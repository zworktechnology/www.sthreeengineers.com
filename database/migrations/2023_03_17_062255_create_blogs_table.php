<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {

            // Auto-generate ID column
            $table->id();

            // Request columns
            $table->string('random_id')->unique();
            $table->string('blog_date');
            $table->unsignedBigInteger('master_blog_id')->nullable();
            $table->foreign('master_blog_id')->references('id')->on('blog_masters')->onDelete('cascade');
            $table->string('title');
            $table->string('slug_url');
            $table->longText('short_content');
            $table->string('meta_keywords');
            $table->longText('blog_content');
            $table->string('quotes')->nullable();
            $table->longText('blog_image');
            $table->longText('image_alt');
            $table->string('writer_name')->default('Zwork Technology - Admin');
            $table->string('writer_mail_address')->default('blog@zworktechnology.com');
            $table->string('writer_web_address_address')->default('www.zworktechnology.com')->nullable();
            $table->boolean('active_status')->default(1);
            $table->boolean('soft_delete')->default(0);
            $table->boolean('pined')->default(0);

            // CreatedAt & UpdatedAt columns
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
        Schema::dropIfExists('blogs');
    }
};
