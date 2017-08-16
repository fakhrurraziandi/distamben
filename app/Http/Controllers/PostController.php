<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Post;
use Validator;

class PostController extends Controller
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
            $post = Post::where([
                ['title', 'LIKE', '%'. $search .'%'],
                ['slug', 'LIKE', '%'. $search .'%'],
                ['content', 'LIKE', '%'. $search .'%'],
            ]);

            if($request->has('sort')){
                $post->orderBy($request->get('sort'), $request->get('order'));
    		}else{
                $post->orderBy('created_at', 'ASC');
    		}

            if($request->has('offset')){
                $post->offset($request->get('offset'));
            }

            if($request->has('limit')){
                $post->limit($request->get('limit'));
            }

        }else{

            if($request->has('sort')){
                $post = Post::orderBy($request->get('sort'), $request->get('order'));
    		}else{
                $post = Post::orderBy('created_at', 'ASC');
    		}

            if($request->has('offset')){
                $post->offset($request->get('offset'));
            }

            if($request->has('limit')){
                $post->limit($request->get('limit'));
            }
        }


		$result['total'] = Post::all()->count();
        $result['rows'] = $post->get();
        return $result;
    }

    public function find(Request $request)
    {
        $post = Post::find($request->id);
        return $post;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.post');
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

        $result = [];

        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'slug' => 'required',
            'category_id' => 'required',
            // 'content' => 'required',
        ]);

        if($validator->fails()){
            $result['status'] = 'error';
			$result['messages'] = $validator->getMessageBag()->getMessages();
        }else{
            $post = new Post();
            $post->title = $request->title;
            $post->slug = $request->slug;
            $post->category_id = $request->category_id;
            $post->content = $request->content;

            if($post->save()){
                $result['status'] = 'success';
            }else{
                $result['status'] = 'error';
            }
        }

        return $result;
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
        $result = [];

        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'slug' => 'required',
            'category_id' => 'required',
            // 'content' => 'required',
        ]);

        if($validator->fails()){
            $result['status'] = 'error';
			$result['messages'] = $validator->getMessageBag()->getMessages();
        }else{

            $post = Post::find($id);
            $post->title = $request->title;
            $post->slug = $request->slug;
            $post->category_id = $request->category_id;
            $post->content = $request->content;

            if($post->save()){
                $result['status'] = 'success';
            }else{
                $result['status'] = 'error';
            }
        }

        return $result;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = [];
        $post = Post::find($id);
        if($post->delete()){
            $result['status'] = 'success';
        }else{
            $result['status'] = 'error';
        }

        return $result;
    }
}
