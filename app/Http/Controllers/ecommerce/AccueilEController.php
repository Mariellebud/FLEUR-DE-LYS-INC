<?php

namespace App\Http\Controllers\ecommerce;

use App\Http\Controllers\Controller;
use App\Models\Clothe;
use App\Models\category;
use Illuminate\Http\Request;

class AccueilEController extends Controller
{
    public function search_list(Request $request)
    {
        $data= Clothe :: select('libellep')->where('libellep','LIKE',"%{$request->terms}%")->get();
       
        return response()->json($data);
    }

    public function index(Request $request)
    {
        $search=$request['search'] ?? "";
        $cat= category ::  all();//where('qte','1')->take(15)->get();
        if($search !=""){
            $afficheP= Clothe ::  where('libellep','LIKE',"%$search%")->orwhere('prix','LIKE',"%$search%")->get();
            //$afficheP= Clothe ::  where('libellep','=',$search)->get();
        }
        else {
            # code...
            
            $afficheP= Clothe :: all();

        }
        return view('commerce',compact('afficheP','cat','search'));
    }
    public function cat()
    {
        $cat= category ::  all();//where('libelle','1')->take(15)->get();
        return view('edit',compact('cat'));
    }
    public function view_cat($libelle)
    {
        if(category ::where('libelle',$libelle)->exists())
        {
            $cate= category ::  all();
        $cat= category ::where('libelle',$libelle)->first();
        $produit= Clothe :: where('categori_id',$cat->id)->get();
        return view('afiche',compact('cat','produit','cate'));
        }
        else{
            return redirect('ecommerce')->with('status','cette catégorie nexiste pas');
        }
    }

    public function detailp($libelle,$libellep)
    {
        
        if(category ::where('libelle',$libelle)->exists())
        {
            if(Clothe ::where('libellep',$libellep)->exists())
            {
                $cat= category ::  all();
                
                $produit= Clothe :: where('libellep',$libellep)->first();
                return view('details',compact('produit','cat'));

            }
            else{
                return redirect('ecommerce')->with('status','cette catégorie nexiste pas');
            }

        }
        else{
            return redirect('ecommerce')->with('status','cette catégorie nexiste pas');
        }

    }
    public function detail($libellep)
    {
        
            if(Clothe ::where('libellep',$libellep)->exists())
            {
                $cat= category ::  all();

                $produit= Clothe :: where('libellep',$libellep)->first();
                return view('details',compact('produit','cat'));

            }
            /*else{
                return redirect('details')->with('status','cette catégorie nexiste pas');
            }*/

        
        

    }
    

}
