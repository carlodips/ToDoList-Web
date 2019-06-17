@extends('layouts.app')

@section('content')
<div class="d-flex" id="wrapper">

    @include('includes.sidebar')

	<div class="container-fluid">
		<div id="page">
	        <h1 class="mt-4">Edit Task</h1>
	        <div class="card">
	        	<div class="card-body">
	        		{!! Form::open(['action' => ['Tasks\TasksController@update', $task->id], 'method' => 'PUT', 'class' => 'form']) !!}
	                    <div class="form-group">
	                        {{Form::label('task_name', 'Task')}}
	                        {{Form::text('task_name', $task->task_name, ['class' => 'form-control', 'placeholder' => 'Enter task here'])}}
	                    </div>
	                    <div class="form-group">
	                        {{Form::label('task_due_date', 'Due Date')}}
	                        {{Form::text('task_due_date', $task->task_due_date, ['class' => 'form-control', 'id' => 'datetimepicker'])}}
	                    </div>
	                    <div class="form-group">
	                        {{Form::label('task_category', 'Lists')}}
	                        {{Form::select('task_category', $categories, $task->task_category, ['class' => 'form-control'])}}

	                    </div>
		                <div class="d-flex justify-content-center">
		                    {{Form::submit('Edit Task', ['class' => 'btn btn-primary'])}}
		                </div>
		            {!! Form::close() !!}
	        		
	        	</div>
	        	
	        </div>

			
		</div>
		
	</div>


    
</div>
<!-- /#wrapper end-->

@endsection