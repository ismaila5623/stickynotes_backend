<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return auth()->user()->categories;
    }


    public function getLastVisitedCategory(){
        return Categories::where('id', auth()->user()->lastVisitedCategory->categories_id)->first()->name;
    }
    public function lastVisitedCategory(Categories $category){

        return auth()->user()->lastVisitedCategory->update([
            'categories_id' => $category->id,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $lastVisitedCategory = auth()->user()->lastVisitedCategory;
        $categoriesEmpty = auth()->user()->categories->count() <= 0;

        $category = Categories::create([
            'name' => $request->input('name'),
            'user_id' => auth()->user()->id,
        ]);

        if($categoriesEmpty){
            $lastVisitedCategory->update([
                'categories_id' => $category->id,
            ]);
        }

        return $category;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categories $category)
    {
        return $category->update([
                'name' => $request->input('name'),
            ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categories $category)
    {
        $result = $category->delete();

        $lastVisitedCategory = auth()->user()->lastVisitedCategory;

        if($lastVisitedCategory->categories_id == $category->id){
            if(auth()->user()->categories->count() <= 0){
                $lastVisitedCategory->update([
                    'categories_id' => null,
                ]);
            }else{
                $result = 0;
                $lastVisitedCategory->update([
                    'categories_id' => auth()->user()->categories->first()->id,
                ]);
            }
        }

        return $result;
    }
}
