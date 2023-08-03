<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Http\Requests\StorePortfolioRequest;
use App\Http\Requests\UpdatePortfolioRequest;
use App\Models\Award;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function home()
    {
        $dataPortfolio = Portfolio::all();
        $dataAward = Award::all();
        return view('index', compact('dataPortfolio','dataAward'));
    }

    public function index()
    {
        $dataFaqs = Portfolio::all();
        return view('dashboard.faq.index', compact('dataFaqs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.faq.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePortfolioRequest $request)
    {
        $request->validate([
            'pertanyaan' => 'required',
            'jawaban' => 'required',
        ]);
  
        Portfolio::create($request->all());
        return redirect()->route('faq.index')->with('success','FAQ berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Portfolio $portfolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Portfolio $portfolio)
    {
        return view('dashboard.faq.edit',compact('faq'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePortfolioRequest $request, Portfolio $portfolio)
    {
        $request->validate([
            'pertanyaan' => 'required',
            'jawaban' => 'required',
        ]);
  
        $portfolio->update($request->all());
        return redirect()->route('faq.index')->with('success','FAQ berhasil di edit.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Portfolio $portfolio)
    {
        $portfolio->delete();
        return redirect()->route('faq.index')->with('success','FAQ berhasil dihapus.');
    }
}
