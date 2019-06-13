<!-- Sidebar -->
<div class="bg-light border-right" id="sidebar-wrapper">
    <div class="sidebar-heading">Dashboard</div>
    <div class="list-group list-group-flush">
    <a href="/tasks/all" class="list-group-item list-group-item-action bg-light">All Tasks</a>
    <a href="/#" class="list-group-item list-group-item-action bg-light">Personal</a>
    <a href="/#" class="list-group-item list-group-item-action bg-light">Work</a>
    <a href="/#" class="list-group-item list-group-item-action bg-light">Shopping List</a>
    <a href="/#" class="list-group-item list-group-item-action bg-light">Add New List</a>d



    <a class="sidebar-heading" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
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
