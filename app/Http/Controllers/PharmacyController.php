<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class PharmacyController extends Controller
{
    public function index(){
        
        return view('pharmacy.index');
    }

    //Products
    public function products(){
        return view('pharmacy.products');
    }
    public function profile(){
        return view('pharmacy.profile');
    }
    public function settings(){
        return view('pharmacy.settings');
    }

    public function addProduct(){
        return view('pharmacy.add-product');
    }
    public function outStock(){
        return view('pharmacy.outstock');
    }
    public function expired(){
        return view('pharmacy.expired');
    }

    public function categories(){
        return view('pharmacy.categories');
    }
    public function purchases(){
        return view('pharmacy.purchase');
    }
    public function addPurchase(){
        return view('pharmacy.add-purchase');
    }
    public function orders(){
        return view('pharmacy.order');
    }

    public function sales(){
        return view('pharmacy.sales');
    }
    public function suppliers(){
        return view('pharmacy.supplier');
    }
    public function addSupplier(){
        return view('pharmacy.add-supplier');
    }
    public function transactions(){
        return view('pharmacy.transactions-list');
    }

    public function treatmentReport(){
        return view('pharmacy.invoice-report');
    }
    public function stockReport(){
        return view('pharmacy.invoice-report');
    }
    public function purchaseReport(){
        return view('pharmacy.invoice-report');
    }
}
