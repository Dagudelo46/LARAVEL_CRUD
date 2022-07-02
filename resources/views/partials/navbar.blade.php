<div class="navbar navbar-dark bg-success" style= "display:block;">
    @if (Route::has('login'))
        <div class="nav-item" style=" padding:0px;">
            @auth
                <a href="{{ url('/') }}" class="navbar-brand">Home</a>
                 
                <form action="login" method="post" class="navbar-brand " >
                    @method('put')
                    @csrf
                    <button class="btn btn-danger" >Cerrar sesion</button>
                </form>

            @else
                <a href="{{ route('login') }}" class="navbar-brand">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="navbar-brand ">crear nuevo usuario</a>
                @endif
            @endauth
        </div>
    @endif
</div>