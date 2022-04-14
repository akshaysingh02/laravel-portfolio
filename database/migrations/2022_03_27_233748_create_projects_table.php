<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('excerpt');
            $table->mediumText('body');
            $table->text('technologies');
            $table->text('image_url')->nullable();
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
        Schema::dropIfExists('projects');
    }
}
// 2021_02_27_233748_create_projects_table.php
// <a href="https://ibb.co/mB50C2F"><img src="https://i.ibb.co/DbfYDvg/tours.png" alt="tours" border="0"></a>
// <a href="https://ibb.co/ry5hjVd"><img src="https://i.ibb.co/9Yy0D7Z/kind-market.png" alt="kind-market" border="0"></a>
// <a href="https://imgbb.com/"><img src="https://i.ibb.co/0YL9d4w/art-gallery.png" alt="art-gallery" border="0"></a>
// <a href="https://ibb.co/QXj3s9q"><img src="https://i.ibb.co/rvfRnkL/portfolio-design.png" alt="portfolio-design" border="0"></a>
// <a href="https://ibb.co/XWNBZwf"><img src="https://i.ibb.co/GdBwvhf/image-reco.png" alt="image-reco" border="0"></a>
// <a href="https://ibb.co/bFj4vjs"><img src="https://i.ibb.co/HCLcPLt/bodhi.jpg" alt="bodhi" border="0"></a>
// <a href="https://ibb.co/6PKTrGb"><img src="https://i.ibb.co/QNWTphn/team-app.png" alt="team-app" border="0"></a>