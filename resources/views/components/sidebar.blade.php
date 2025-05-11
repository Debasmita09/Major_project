<div>
    @if(auth()->check() && auth()->user()->is_employer)
        <!-- Employer Sidebar Options -->
        <form>
            <label><a href="{{url('/postJob')}}">Post a job</a></label><br><hr><br>
            <label><a href="{{url('/savedJob')}}">Jobs</a></label><br><hr><br>
        </form>
    @elseif(auth()->check())
        <!-- Regular User Sidebar Options -->
        <form>
            <label><a href="{{url('/profile')}}">My Profile</a></label><br><hr><br>
            <!-- <label><a href="{{url('/myJob')}}">My Jobs</a></label><br><hr><br> -->
            <label><a href="{{url('/appliedJob')}}">Applied jobs</a></label><br><hr><br>
        </form>
    @endif
</div>
