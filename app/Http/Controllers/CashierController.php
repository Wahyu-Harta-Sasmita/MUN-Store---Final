<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class CashierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function dashboard()
    {
        return view('pages.home');
    }

    public function transaction()
    {
        return view('pages.transaction');
    }

    public function products()
    {
        $title="Daftar Produk";
        $produk=new Produk;
        $produk=Produk::paginate(2);
        return view('pages.products', compact('title', 'produk'));
    }

    public function history()
    {
        return view('pages.history');
    }

    public function addProducts()
    {
        return view('pages.addProducts');
    }

    public function receipt()
    {
        return view('pages.receipt');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
