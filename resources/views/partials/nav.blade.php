<div class="navbar bg-base-100">
    <div>
        <a href="{{ route('home') }}" class="btn btn-ghost text-xl">{{ config('app.name') }}</a>
    </div>
    <div class="flex-1">
        <ul class="menu menu-horizontal px-1">
            <li><a href="{{ route('page1') }}">Page 1</a></li>
            <li><a href="{{ route('page2') }}">Page 2</a></li>
            @auth


            <li class="z-10">
                <details>
                    <summary>Admin</summary>
                    <ul class="bg-base-100 rounded-t-none p-2">
                        <li><a href="{{ route('posts.index') }}">Posts</a></li>
                        <li><a href="{{ route('tags.index')}}">Tags</a></li>
                    </ul>
                </details>
            </li>
            @endauth
        </ul>
    </div>
    <div class="gap-2">
        @guest
            <a href="{{ route('register') }}" class="btn btn-primary">Register</a>
            <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
        @else
            <ul class="menu menu-horizontal px-1">
                <li class="z-10">
                    <details>
                        <summary>{{ auth()->user()->name }}</summary>
                        <ul class="bg-base-100 rounded-t-none p-2">
                            <li><a href="{{ route('profile.edit') }}">Profile</a></li>
                            <li><button form="logout"> Logout </button></li>
                        </ul>
                    </details>
                </li>
            </ul>
            <form id="logout" action="{{ route('logout') }}" method="POST">
                @csrf
            </form>
        @endguest
    </div>
</div>
