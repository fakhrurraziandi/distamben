<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Category;

class CategoryController extends Controller
{

    public function json(Request $request)
    {
        $result = [
			'total' => 0,
			'rows' => []
		];

        $limit = $request->has('limit') ? $request->get('limit') : 10;
        $offset = $request->has('offset') ? $request->get('offset') : 0;
        $search = $request->has('search') ? $request->get('search') : '';
        $sort = $request->has('sort') ? $request->get('sort') : '';
        $order = $request->has('order') ? $request->get('order') : '';

        if($request->has('search')){
            $category = Category::where([
                ['title', 'LIKE', '%'. $search .'%'],
                ['slug', 'LIKE', '%'. $search .'%'],
            ]);

            if($request->has('sort')){
                $category->orderBy($request->get('sort'), $request->get('order'));
    		}else{
                $category->orderBy('created_at', 'ASC');
    		}

            if($request->has('offset')){
                $category->offset($request->get('offset'));
            }

            if($request->has('limit')){
                $category->limit($request->get('limit'));
            }

        }else{

            if($request->has('sort')){
                $category = Category::orderBy($request->get('sort'), $request->get('order'));
    		}else{
                $category = Category::orderBy('created_at', 'ASC');
    		}

            if($request->has('offset')){
                $category->offset($request->get('offset'));
            }

            if($request->has('limit')){
                $category->limit($request->get('limit'));
            }
        }


		$result['total'] = Category::all()->count();
        $result['rows'] = $category->get();
        return $result;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.category');
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
        //
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
