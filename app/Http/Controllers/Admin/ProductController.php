<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\ProductRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\News;

class ProductController extends Controller
{
	protected $news;

    public function __construct(News $news)
    {
        $this->news = $news;
    }
    
    public function getCreate(){
    	return view('admin.products.create');
    }

    public function postCreate(ProductRequest $request){
    	$input = new News;
    	$file_name=$request->file('image')->getClientOriginalName();
        $input->title=$request->title;
        if($request->slug != ''){
            $input->slug=$request->slug;
        }else{
            $input->slug=changeTitle($request->title);
        }
        $input->summary=$request->summary;
        $input->content=$request->content;
        $input->user_id=1;
        $input->cate_id=1;
        $input->image=$file_name;
        $request->file('image')->move('resources/upload/',$file_name);
        $input->save();   	
    	return redirect()->route('admin.product.list');
    }

    public function getList(){
        $news=News::all();
    	return view('admin.products.index',compact('news'));
    }

    public function edit($id){
        $new = News::find($id);
        return view('admin.products.edit',compact('new'));
    }

    public function postEdit($id, Request $request){
        $new = News::find($id);
        $new->title=$request->title;
        if($request->slug!= ''){
            $new['slug'] = $request->slug;
        }else{
            $new['slug'] = changeTitle($request->title);
        }
        $new->summary=$request->summary;
        $new->content=$request->content;
        $new->user_id=1;
        $new->cate_id=1;
        $img_current = 'resources/upload/'.$request->img_current;
        if(\Request::hasfile('image')){
            $file_name= \Request::file('image')->getClientOriginalName();
            $new->image=$file_name;
            \Request::file('image')->move('resources/upload/',$file_name);
            if(File::exists($img_current)){
                File::delete($img_current);
            }
        }else{
            echo "khog co file";
        }
        $new->save();
        return redirect()->route('admin.product.list');
    }

    public function getDelete($id){
        $new = News::find($id);
        File::delete('resources/upload/'.$new['image']);
        $new->delete($id);
        return redirect()->route('admin.product.list');
    }
}
