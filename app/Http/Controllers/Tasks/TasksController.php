<?php

namespace App\Http\Controllers\Tasks;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Task;

class TasksController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dashboard()
    {
        $user = auth()->id();
        $tasks = Task::where('user_id', $user)->get();

        $cat = array("Default", "Personal", "Work", "Shopping List");

        $categories = [];
        foreach($cat as $category){
            $categories[$category] = $category;
        }
        
        return view('pages.dashboard')->with('tasks', $tasks)->with('categories', $categories);
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //rules
        $this->validate($request, [
            'task_name' => 'required'

        ]);
        // Create Task
        $task = new Task;
        $task->task_name = $request->input('task_name');
        $task->task_due_date = $request->input('task_due_date');
        $task->task_category = $request->input('task_category');
        $task->user_id = auth()->id();
        $task->save();
        return redirect('/')->with('success', 'Task Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
