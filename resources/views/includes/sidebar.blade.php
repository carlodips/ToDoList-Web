<!-- Sidebar -->
<div class="bg-light border-right" id="sidebar-wrapper">
    <div class="sidebar-heading">Dashboard</div>
	    <div class="list-group list-group-flush">
		    <a href="/tasks/all" class="list-group-item list-group-item-action bg-light">All Tasks</a>


            @foreach($categories as $category)
                <a href="/tasks/{{$category}}" class="list-group-item list-group-item-action bg-light">{{$category}}</a>
            @endforeach


		    <a href="/#" class="sidebar-heading" data-toggle="modal" data-target="#modalAddList">Add New List</a>

	    </div>
</div>
<!-- /#sidebar-wrapper -->


{{-- Add task modal start  --}}
<div class="modal fade" id="modalAddList" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Add New List</h4>
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
                        {{Form::label('task_list', 'List')}}
                        {{Form::select('task_list', $categories, null, ['class' => 'form-control'])}}

                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-center">
                    {{Form::submit('Add Task', ['class' => 'btn btn-primary'])}}
                </div>
            {!! Form::close() !!}
        </div>
    </div>

</div>



<!-- Menu Toggle Script -->
<script>
$("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
});
</script>
