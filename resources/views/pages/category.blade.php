@extends('layouts.app')

@section('content')
{{-- wrapper start --}}
<div class="d-flex" id="wrapper">
    
    @include('includes.sidebar')
   
    <div class="container-fluid">
        <div id="page-content-wrapper">
                <h1 class="mt-4">{{ $task_category }}<button type="button" class="btn btn-dark float-right" data-toggle="modal" data-target="#modalAddTask">Add New Task</button></h1>

                @if(count($tasks) > 0)
                    @foreach($tasks as $task)
                        <div class="card">
                            <div class="card-body">
                                <h3>{{ $task->task_name }}</h3>
                                <h5>{{ $task->task_category }} </h5>
                                <h6>Posted at: {{ $task->created_at }} • Due Date: {{ $task->task_due_date }} </h6>
                    
                                

                                
                                {!!Form::open(['action' => ['Tasks\TasksController@destroy', $task->id], 'method' => 'POST', 'class' => 'delete'])!!}
                                    {{-- EDIT BUTTON --}}
                                    <a href="/tasks/edit/{{$task->id }}" class="btn btn-primary" >Edit</a>
                                    {{-- DELETE BUTTON --}}
                                    {{Form::hidden('_method', 'DELETE')}}
                                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}

                                {!!Form::close()!!}


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
                <!-- Pagination -->
                <ul class="pagination justify-content-center mb-4">
                    {{$tasks->links()}}
                </ul>
        </div>
    </div>

    
    @include('includes.add_modal')



    
    
</div>
<!-- /#wrapper end-->
@endsection
