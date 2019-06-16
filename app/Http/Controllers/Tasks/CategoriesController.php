<?php

namespace App\Http\Controllers\Tasks;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Category;

use App\Task;

class CategoriesController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'category_name' => 'required'
        ]);
        $category = new Category();
        $category->category_name = $request->input('category_name');
        $category->user_id = auth()->id();
        $category->save();
        return redirect('/')->with('success', 'Task Added');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($category)
    {
        $user = auth()->id();

        $tasks = Task::where('user_id', $user)->where('task_category', $category)->get();

        $cats = Category::where('user_id', $user)->get();

        //default lists
        $cat_list = array("Default", "Personal", "Work", "Wish List");

        foreach ($cats as $cat) {
            array_push($cat_list, $cat->category_name);
        }

        $categories = [];
        foreach($cat_list as $c){
            $categories[$c] = $c;
        }

        return view('pages.category')->with('tasks', $tasks)->with('task_category', $category)->with('categories', $categories);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
