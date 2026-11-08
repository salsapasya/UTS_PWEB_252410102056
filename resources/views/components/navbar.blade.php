<nav class="navbar">
    <div class="nav-logo">
        <h2>ELORA <span>Healing Studio</span></h2>
        <small> A Little Time for Yourself, A Moment to Feel Better.</small>
    </div>

    <div class="nav-menu">
        <a href="{{ route('dashboard') }}">
            Dashboard
        </a>

        <a href="{{ route('pengelolaan') }}">
            Pengelolaan
        </a>

        <a href="{{ route('profile') }}">
            Profile
        </a>
    </div>

    @if(session()->has('username'))
        <details class="nav-user">
        <summary class="username">
            {{ $username }}
            <span class="arrow"></span>
        </summary>

        <div class="dropdown-menu">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit">
                    Logout
                </button>
            </form>
        </div>
    </details>
    @endif

</nav>
