<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Product;
use App\Http\Requests;

class TaskController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('tasks.index',compact('products',$products));
    }

    public function create()
    {
    return view('tasks.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, ['name' => 'required','description' =>'required','photo' => 'required','price' => 'required']);
        $product = Product::create(['name' => $request->name,'description' => $request->description,'photo'=>$request->photo,'price' =>$request->price]);
         return redirect('/tasks/'.$product->id);
 // create new task
 //Task::create($request->all());
 //return redirect()->route('tasks.index')->with('success', 'Your task added successfully!');
    }

    public function show(Product $product)
    {
        return view('tasks.show',compact('product',$product));
    //$task = Task::find($id);
    //return view('tasks.show',compact('task'));
    }

    public function edit(Product $product)
    {
        return view('tasks.edit',compact('product',$product));
    //$task = Task::find($id);
    //return view('tasks.edit', compact('task'));
    }
 //public function update(Request $request, $id)
// {
// $this->validate($request, ['name' => 'required','description' => 'required']);
// Task::find($id)->update($request->all());
// return redirect()->route('tasks.index')->with('success','Task updated successfully');
// }
    public function destroy(Request $request, Product $product)
    {
        $product->delete();
        $request->session()->flash('message', 'Successfully deleted the product!');
        return redirect('products');
    //Task::find($id)->delete();
    //return redirect()->route('tasks.index')->with('success','Task removed successfully');
    }
}
