<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\CaseStudy;

class DashboardController extends Controller
{
    public  function index(){
        $blogsCount = CaseStudy::count();
        $categoriesCount = Category::count();
        $subCategoriesCount = SubCategory::count();

        return view('admin.dashboard',compact('blogsCount','categoriesCount','subCategoriesCount'));
    }
}
