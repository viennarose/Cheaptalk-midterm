<nav class="navbar navbar-expand-lg mb-2 p-1 bg-info">
        <a class="navbar-brand" href="/">
            <h1 class="text-dark" style="font-size:30px; font-weight:500;">CheapTalk.com</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav mx-auto">
                @if (auth()->check())
                    <a class="nav-link text-dark" href="/posts">Posts</a>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-dark" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Categories
                        </a>
                        <ul class="dropdown-menu">
                            @foreach (App\Models\Category::whereHas('posts')->get()->sortBy('category') as $category)
                                <li><a class="dropdown-item"
                                        href="{{ url('categories', ['id' => $category->id]) }}">{{ $category->category }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <a class="nav-link text-dark" href="/authors">Authors</a>
                    </div>
                    <div class="ms-auto">
                        <li class="nav-item dropdown btn btn-sm">
                            <a class="nav-link dropdown-toggle text-dark d-flex" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <img class="card" style="border-radius: 50%; width: 30px;" id="pf1"
                                                src="{{  auth()->user()->gender === 'female' ? asset('img/woman.png') : asset('img/hacker.png') }}"
                                                alt="photo">
                                {{ auth()->user()->name }}
                            </a>
                            <ul class="dropdown-menu">

                                <li><a class="dropdown-item"
                                        href="{{ url('/user/create-post') }}">{{ __('Create Post') }}</a></li>
                                <li><a class="dropdown-item"
                                        href="{{ url('authors', ['id' => auth()->user()->id]) }}">{{ __('My Posts') }}</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ '/logout' }}">{{ __('Logout') }}</a></li>
                            </ul>
                        </li>
                    </div>
                </div>
                @else
                    <a class="nav-link text-dark " style="margin-left:1100px;" href="/login">Login</a>
                    <a class="nav-link text-dark p-2" href="/register">Register</a>
                @endif
            </div>
        </div>
</nav>
