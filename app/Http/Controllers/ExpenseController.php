<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Expense;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $expenses = [
            [
                'description' => fake()->word(),
                'payment_date' => date("Y/m/d"),
                'due_date' => date("Y/m/d"),
                'amount' => '100',
                'category' => 'Transporte',
            ],
            [
                'description' => fake()->word(),
                'payment_date' => date("Y/m/d"),
                'due_date' => date("Y/m/d"),
                'amount' => '100',
                'category' => 'Transporte',
            ],
            [
                'description' => fake()->word(),
                'payment_date' => date("Y/m/d"),
                'due_date' => date("Y/m/d"),
                'amount' => '100',
                'category' => 'Transporte',
            ],
            [
                'description' => fake()->word(),
                'payment_date' => date("Y/m/d"),
                'due_date' => date("Y/m/d"),
                'amount' => '100',
                'category' => 'Transporte',
            ],
        ];
        $expenses = Expense::all();
        return view('expenses.index', compact('expenses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::get(['id as value', 'name as label'])->toArray();
        return view('expenses.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required',
            'payment_date' => 'required|date',
            'due_date' => 'required|date',
            'amount' => 'required|numeric',
            'category_id' => 'required'
        ]);
        $expense = Expense::create($request->all());
        return redirect()->route('expenses.index')->with('status', 'Conta nova criada!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Expense $expense)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Expense $expense)
    {
        $categories = Category::get(['id as value', 'name as label'])->toArray();
        return view('expenses.edit', compact('categories', 'expense'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Expense $expense)
    {
        $request->validate([
            'description' => 'required',
            'payment_date' => 'required|date',
            'due_date' => 'required|date',
            'amount' => 'required|numeric',
            'category_id' => 'required'
        ]);
        $expense->update($request->all());
        return redirect()->route('expenses.index')->with('status', 'Conta atualizada!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Expense $expense)
    {
        //
    }
}
