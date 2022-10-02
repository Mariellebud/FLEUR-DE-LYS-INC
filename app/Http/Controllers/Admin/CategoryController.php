<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Clothe;
use App\Models\category;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;
//use App\Models\category;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function admin()
    {
        $produit = Clothe :: all();
        $cat= category :: all();
        //Alert:: success('Bravo','bienvenu');
        return view('boutique',compact('produit','cat')); 
    }
    public function add(){
        $cat= category :: all();
        return view('product',compact('cat'));
        
    }
    public function insert(Request $request)
    {
        try {
            //code...
            $produit=new Clothe();
        //$cat=new category();
        if($request->hasfile('photo'))
        {
            $file=$request->file('photo');
            $ext=$file->getClientOriginalExtension();
            $filename= time().'.'.$ext;
            $file->move('asset/upload/category/',$filename);
            $produit->photo=$filename;
        } 
        //$cat->libelle=$request->input('libc');
        //$cat->slug=$request->input('slugc');
        $produit->libellep=$request->input('libp');
        $produit->description=$request->input('desc');
        $produit->prix=$request->input('prix');
        $produit ->qte=$request->input('qte');
        $produit ->categori_id=$request->input('cat');
 
        $produit->save();
        //Alert:: success('Bravo','Produit enregistré avec succes');
        return redirect()->back()->with('insert','Le produit a bien été ajouté');

        } catch (\Exception $e) {
            //throw $th;
        // dump($th->errorInfo);
         return redirect()->back()->with('error','Remplissez le formulaire correctement');;
        }
        
    }
   public function edit($id)
    {
        $produit = Clothe :: find($id);
        $cat= category :: all();

        return view('edition',compact('produit','cat'));
    }

    public function update(Request $request, $id)
    {

        try {
            $produit = Clothe :: find($id); 
        
            if($request->hasfile('photo'))
                {
                    $path='asset/upload/category/'.$produit->photo;
                        if(File::exists($path))
                        {
                             File::delete($path);
                        }
                    $file=$request->file('photo');
                    $ext=$file->getClientOriginalExtension();
                    $filename= time().'.'.$ext;
                    $file->move('asset/upload/category/',$filename);
                    $produit->photo=$filename;
                }
            $produit->libellep=$request->input('libp');
            $produit->description=$request->input('desc');
            $produit->prix=$request->input('prix');
            $produit ->qte=$request->input('qte');
            $produit ->categori_id=$request->input('cat');

            $produit ->update();
            return redirect()->back()->with('insert','modification effectué avec succes');

        } catch (\Exception $e) {
            //throw $th;
           return redirect()->back()->with('erreur','Remplissez le formulaire correctement');;

        }
    }
    public function destroy($id)
    {
        $produit = Clothe :: find($id);
        if($produit->photo)
        {
            $path='asset/upload/category/'.$produit->photo;
            if(File::exists($path))
            {
                File::delete($path);
            } 
        }
        $produit ->delete();
        Alert:: success('Supprimé','Le produit a été supprimé avec success');
        return redirect('clothes')->with('status','suppression effectué avec succes');

    }
   
}
