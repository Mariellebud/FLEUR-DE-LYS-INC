<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\category;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $cate= category :: all();
        return view('addcat',compact('cate'));
    }
    public function admin()
    {
        $cat= category :: all();
       // $cat= category :: all();
        return view('boutik',compact('cat')); 
    }
    /*public function add()
    {
        $cate= category :: all();
        return view('addcat',compact('cate'));
    }*/
    public function insert(Request $request)
    {
        $cat=new category();
        if($request->hasfile('photo'))
        {
            $file=$request->file('photo');
            $ext=$file->getClientOriginalExtension();
            $filename= time().'.'.$ext;
            $file->move('asset/upload/categori/',$filename);
            $cat->photo=$filename;
        }

        $cat->libelle=$request->input('libelle');
        $cat->save();
        return redirect('categ')->with('status','Categorie ajouté avec succes');
    }
    public function edit($id)
    {
        $cat = category :: find($id);
        return view('editcat',compact('cat'));
    }
    public function update(Request $request, $id)
    {
        $cat = category :: find($id);
        if($request->hasfile('photo'))
        {
            $path='asset/upload/categori/'.$cat->photo;
            if(File::exists($path))
            {
                File::delete($path);
            }
            $file=$request->file('photo');
            $ext=$file->getClientOriginalExtension();
            $filename= time().'.'.$ext;
            $file->move('asset/upload/categori/',$filename);
            $cat->photo=$filename;
        }
        $cat->libelle=$request->input('libelle');
        $cat ->update();
        return redirect('categ')->with('status','modification effectué avec succes');

    }
    public function destroy($id)
    {
        $cat = category :: find($id);

        if($cat->photo)
        {
            $path='asset/upload/categori/'.$cat->photo;
            if(File::exists($path))
            {
                File::delete($path);
            } 
        }
        $cat ->delete(); 
        return redirect('categ')->with('status','suppression effectué avec succes');

    }

}
