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
        Schema::create('case_studies', function (Blueprint $table) {
            $table->id();
            $table->date('published_at')->nullable();
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
            $table->foreignId('sub_category_id')->constrained('sub_categories')->onDelete('cascade');
            $table->mediumText('thumbnail_title')->nullable();
            $table->mediumText('thumbnail_image')->nullable();
            $table->mediumText('title');
            $table->mediumText('slug');
            $table->mediumText('banner');
            $table->mediumText('overview_industry')->nullable();
            $table->mediumText('overview_location')->nullable();
            $table->mediumText('overview_solutions')->nullable();
            $table->mediumText('overview_results')->nullable();
            $table->mediumText('background_title')->nullable();
            $table->mediumText('background_description')->nullable();
            $table->mediumText('background_image')->nullable();
            $table->mediumText('objective_title')->nullable();
            $table->mediumText('objective_description')->nullable();
            $table->mediumText('solution_title')->nullable();
            $table->mediumText('solution_description')->nullable();
            $table->mediumText('case_study_image')->nullable();
            $table->mediumText('case_study_title')->nullable();
            $table->mediumText('result_title')->nullable();
            $table->mediumText('result_description')->nullable();
            $table->mediumText('user_pofile_name')->nullable();
            $table->mediumText('user_pofile_designation')->nullable();
            $table->mediumText('user_pofile_image')->nullable();
            $table->mediumText('user_pofile_description')->nullable();
            $table->mediumText('counter_numbers')->nullable();
            $table->mediumText('counter_text')->nullable();
            $table->mediumText('meta_title')->nullable();
            $table->mediumText('meta_description')->nullable();
            $table->mediumText('og_title')->nullable();
            $table->mediumText('og_image')->nullable();
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
        Schema::dropIfExists('case_studies');
    }
};
