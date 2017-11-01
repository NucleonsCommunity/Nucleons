<li class="dropdown btn btn-default btn-default_2 pull-left">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="font-weight: bold">{{ Auth::user()->name }}
        <b class="caret"></b></a>
    <ul class="dropdown-menu">
        <li>
            <div class="navbar-content">
                <div class="row">
                    <div class="col-md-5">
                        <img src="http://placehold.it/120x120"
                             alt="Alternate Text" class="img-responsive" />
                        <br>
                    </div>
                    <div class="col-md-7">
                        <span class="highlight">{{ Auth::user()->name }}</span>
                        <p class="text-muted small">
                            {{ Auth::user()->email }}</p>
                        <div class="divider">
                        </div>
                        <a href="#" class="btn btn-primary btn-sm active">View Profile</a>
                    </div>
                </div>
            </div>
            <div class="navbar-footer">
                <div class="navbar-footer-content">
                    <div class="row">
                        <div class="col-md-6">
                            <a href="{{ route('get_change_password') }}" class="btn btn-default btn-sm">Change Passowrd</a>
                        </div>
                        <div class="col-md-6">
                            <form action="{{ route('logout') }}" method="POST">
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger btn-sm pull-right">Sign Out</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</li>