<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Expense;

class ExpenseController extends Controller
{
    public function add(Request $request){
        $expense = new Expense();

        $request->validate([
            'expense_name' => 'required',
            'expense_category' => 'required',
            'expense_amount' => 'required',            
        ]);

        $expense->expense_name = $request->expense_name;
        $expense->expense_category = $request->expense_category;
        $expense->expense_amount = $request->expense_amount;
        
        $expense->save();

        return redirect('/')->with('success','Added expense successfully');
    }


    public function allexpenses(){
        $expenses = Expense::all();
        return view('allexpenses')->with('expenses',$expenses);
    }
}
