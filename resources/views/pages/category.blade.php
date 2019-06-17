@extends('layouts.app')

@section('content')
{{-- wrapper start --}}
<div class="d-flex" id="wrapper">
    
    @include('includes.sidebar')
   
    <div class="container-fluid">
        <div id="page-content-wrapper">
                <h1 class="mt-4">{{ $task_category }}<button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#modalAddTask">Add New Task</button></h1>

                @if(count($tasks) > 0)
                    @foreach($tasks as $task)
                        <div class="card">
        				  	<div class="card-body">
                                {!! Form::open() !!}
                                    <input type="checkbox" name="item" id="item_checkbox" value="{{ $task->id }}">
                                    <label for="item_checkbox"></label>{{ $task->task_name }} {{ $task->task_category }} </label>
                                    <a href="/tasks/delete/{{$task->id }}" class="btn btn-danger float-right" >Delete</a>
                                    <a href="/tasks/edit/{{$task->id }}" class="btn btn-primary float-right" >Edit</a>
                                {!! Form::close() !!}

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

    
    @include('includes.add_modal')



    
    
</div>
<!-- /#wrapper end-->
@endsection
