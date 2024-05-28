<?php

namespace App\Http\Controllers;

use App\Models\Meta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\CaseStudy;
use App\Models\Category;
use App\Models\SubCategory;

class WebSiteController extends Controller
{
    public $meta;

    public function __construct()
    {
        $url = Route::current()->uri();
        $meta = Meta::where('url',$url)->first();
        if($meta){
            $this->meta = $meta;
        }else{
            $this->meta = new Meta();
        }
    }

    public function viewIndex(Request $request){
        if($request->catId){
            $recentBlogs = CaseStudy::where('category_id',$request->catId)->orderBy('id','desc')->paginate(9);
        }elseif($request->subCatId){
            $recentBlogs = CaseStudy::where('sub_category_id',$request->subCatId)->orderBy('id','desc')->paginate(9);
        }else{
            $recentBlogs = CaseStudy::orderBy('id','desc')->paginate(9);
        }
        $categories = Category::all();
        $subCategories = SubCategory::all();

        return view('frontend.index',['meta'=>$this->meta,'recentBlogs'=>$recentBlogs,'categories'=>$categories,'subCategories'=>$subCategories]);
    }

    public function viewBlog($slug){
        $blog = CaseStudy::where('slug',$slug)->first();
        if(!$blog){
            return redirect()->route('index');
        }
        $relatedBlogs = CaseStudy::where('category_id',$blog->category_id)->where('id','!=',$blog->id)->orderBy('id','desc')->take(4)->get();
        return view('frontend.blog',['meta'=>$this->meta,'blog'=>$blog,'relatedBlogs'=>$relatedBlogs]);
    }

    public function viewAbout(){
        dd($this->meta);
    }
    

}
