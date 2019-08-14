<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\IncomeExpense;
use DB;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $transactions = IncomeExpense::all();
        // $transactions = IncomeExpense::paginate(3);
        $transactions = IncomeExpense::Paginate(10);
       return view('pages.index', compact('transactions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.home');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $transaction = new IncomeExpense;
       $transaction->title = $request->title;
       $transaction->description = $request->description;
       $transaction->amount = $request->amount;
       $transaction->type = $request->type;

       $transaction->save();
       
       // // $transactions = IncomeExpense::all();
       // $transactions = IncomeExpense::all();
       // return view('pages.index', compact('transactions'));

       return redirect('/');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $transaction = IncomeExpense::find($id);
        return view('pages.details',compact('transaction'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $transaction = IncomeExpense::find($id);
        return view('pages.edit',compact('transaction'));
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
        $transaction = IncomeExpense::find($id);
        $transaction->title = $request->title;
        $transaction->description = $request->description;
        $transaction->amount = $request->amount;
        $transaction->type = $request->type;

        $transaction->save();
         return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $transaction = IncomeExpense::find($id);
        $transaction->delete();
         return redirect('/');
    
    }

    public function incomes(){
        //$transactions = IncomeExpense::all();
        //$transactions = IncomeExpense::select('select * from income_expenses where type = "income"');
        // $transactions = IncomeExpense::table('income_expenses')
        //     ->where('type', '=', 'income');
        //     ->get();


        // $transactions = DB::table('income_expenses')->where('type', '=', 'income')->get


        // $transactions = IncomeExpense::where('type','income')->get();
        $transactions = IncomeExpense::whereType('income')->paginate(3);
        //$transactions = $transactions::Paginate(3);
        // return $transactions;

       return view('pages.index', compact('transactions'));
    }

    public function expenses(){
       $transactions = IncomeExpense::whereType('expense')->paginate(3);
       return view('pages.index', compact('transactions'));
   }
}
