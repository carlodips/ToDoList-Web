<!-- Sidebar -->
<div class="bg-light border-right" id="sidebar-wrapper">
    <div class="sidebar-heading">Dashboard</div>
	    <div class="list-group list-group-flush">
		    <a href="/tasks/all" class="list-group-item list-group-item-action bg-light">All Tasks</a>

		    @foreach($categories as $category)
		    	<a href="/#" class="list-group-item list-group-item-action bg-light">{{$category}}</a>
            @endforeach


		    <a href="/#" class="sidebar-heading">Add New List</a>

	    </div>
</div>
<!-- /#sidebar-wrapper -->

<!-- Menu Toggle Script -->
<script>
$("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
});
</script>
