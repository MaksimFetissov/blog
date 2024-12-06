<div class="navbar bg-base-100">
    <div>
        <a href="{{ route('home') }}" class="btn btn-ghost text-xl">{{ config('app.name') }}</a>
    </div>
    <div class="flex-1">
        <ul class="menu menu-horizontal px-1">
            <li><a href="{{ route ('page1') }}">Page 1</a></li>
            <li><a href="{{ route ('page2') }}">Page 2</a></li>
            <li>
                <details>
                    <summary>Admin</summary>
                    <ul class="bg-base-100 rounded-t-none p-2">
                        <li><a href="{{ route ('posts.index') }}">Posts</a></li>
                        <li><a>Link 2</a></li>
                    </ul>
                </details>
            </li>
        </ul>
    </div>
    <div class="gap-2">
        <a href="{{route('register')}}" class="btn btn-primary">Register</a>
        <a href="{{route('login')}}" class="btn btn-primary">Login</a>
    </div>
</div>
