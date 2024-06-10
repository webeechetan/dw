<?php

namespace App\Http\Controllers;

use App\Models\CaseStudy;
use Illuminate\Http\Request;
use App\Models\SubCategory;
use App\Models\Category;

class CaseStudyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caseStudies = CaseStudy::all();
        return view('admin.case-study.index',compact('caseStudies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $subCategories = SubCategory::all();
        return view('admin.case-study.create',compact('categories','subCategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $caseStudy = new CaseStudy();
        $caseStudy->create($request->all());
        $this->alert('success','Case Study Created successfully','success');
        return redirect()->route('caseStudy.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CaseStudy  $caseStudy
     * @return \Illuminate\Http\Response
     */
    public function show(CaseStudy $caseStudy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CaseStudy  $caseStudy
     * @return \Illuminate\Http\Response
     */
    public function edit(CaseStudy $caseStudy)
    {
        $categories = Category::all();
        $subCategories = SubCategory::all();
        return view('admin.case-study.edit',compact('caseStudy','categories','subCategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CaseStudy  $caseStudy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaseStudy $caseStudy)
    {
        $caseStudy->update($request->all());
        $this->alert('success','Case Study Updated successfully','success');
        return redirect()->route('caseStudy.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CaseStudy  $caseStudy
     * @return \Illuminate\Http\Response
     */
    public function destroy(CaseStudy $caseStudy)
    {
        $caseStudy->delete();
        $this->alert('success','Case Study Deleted successfully','success');
        return redirect()->route('caseStudy.index');
    }

    public function getSubCategories($id){
        $subCategories = SubCategory::where('category_id',$id)->get();
        return response()->json($subCategories);
    }
}
