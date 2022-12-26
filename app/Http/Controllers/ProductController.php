<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //Création de la function index pour retourner nos produits. 
    public function index()
    {
        //Dans un order paginate en indiquant en paramètre le nombre d’enregistrement par page, où l'attribut Active est true, et pour le moment nous en prenons 16
        $products = Product::inRandomOrder()
            ->whereActive(1)
            ->take(16)
            ->get();
           
        return view('products.index', compact('products'));
    }
}
