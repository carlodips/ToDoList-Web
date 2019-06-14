@extends('layouts.app')

@section('content')
{{-- wrapper start --}}
<div class="d-flex" id="wrapper">
    
    @include('includes.sidebar')
   
    <div class="container-fluid">
        <div id="page-content-wrapper">
                <h1 class="mt-4">All Tasks <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#modalLoginForm">Add New Task</button></h1>

                @if(count($tasks) > 0)
                    @foreach($tasks as $task)
                        <div class="card">
        				  	<div class="card-body">
    	                        <p class="card-text">{{$task->task_name}}</p>
                                <p class="card-text">{{$task->task_category}}</p>
        				  	</div>
        				</div>
                    @endforeach
                @else
                    <div class="card">
                            <div class="card-body">
                                No tasks yet.
                            </div>
                    </div> 
                @endif
        </div>
    </div>

    {{-- Add task modal start  --}}
    <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Add task</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                {!! Form::open(['action' => 'Tasks\TasksController@store', 'method' => 'POST', 'class' => 'form']) !!}
                    <div class="modal-body mx-3">
                        <div class="form-group">
                            {{Form::label('task_name', 'Task')}}
                            {{Form::text('task_name', '', ['class' => 'form-control', 'placeholder' => 'Enter task here'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('task_due_date', 'Due Date')}}
                            {{Form::text('task_due_date', '', ['class' => 'form-control', 'id' => 'datetimepicker'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('task_category', 'Category')}}
                            {{Form::select('task_category', $categories, null, ['class' => 'form-control'])}}

                        </div>
                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                        {{Form::submit('Add Task', ['class' => 'btn btn-primary'])}}
                    </div>
                {!! Form::close() !!}
            </div>
        </div>

    </div>
    {{-- add task modal end--}}

    
    
</div>
<!-- /#wrapper end-->
@endsection
