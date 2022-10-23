@extends('base')

@section('content')
    <div class="container">
        <div class="card bg-dark">
            <div class="card bg-dark ">
                <h1 class="text-light text-center" style="font-size:30px; font-weight:500;">
                    {{ __($category->category . ' Posts') }}</h1>
            </div>

            <div class="row">
                @foreach ($posts as $post)
                    <div class="col-md-4 mt-1">
                        <div class="card {{ $post->user->gender === 'female' ? 'female' : 'male' }}">
                            <div class="card m-3" style="height: 25vh;">
                                <div class="card-body bg-dark rounded text-light">
                                    <div class="container-fluid">
                                        <div class="navbar-brand d-flex" href="">
                                            <img class="card m-2" style="border-radius: 50%; width: 30px;" id="pf1"
                                                src="{{ $post->user->gender === 'female' ? asset('img/woman.png') : asset('img/hacker.png') }}"
                                                alt="photo"><h6 class="mt-3"> {{ $post->user->name }}</h6>
                                                <div class="navbar-nav ms-auto mt-0">
                                                    <li class="nav-item dropdown">
                                                        <a class="nav-link dropdown-toggle fs-6" href="#" role="button"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            {{ $post->category->category }}
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                            @foreach (App\Models\User::byCategory($post->category_id) as $user)
                                                                <li><a class="dropdown-item"
                                                                        href="{{ url('authors', ['id' => $user->id]) }}">{{ $user->name }}</a>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </li>
                                                </div>
                                        </div>

                                    </div>
                                    <h4 style="font-weight:400; font-size:16px;">{{ $post->post }}</h4>
                                </div>


                                <div class="ms-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-suit-heart" viewBox="0 0 16 16">
                                    <path d="m8 6.236-.894-1.789c-.222-.443-.607-1.08-1.152-1.595C5.418 2.345 4.776 2 4 2 2.324 2 1 3.326 1 4.92c0 1.211.554 2.066 1.868 3.37.337.334.721.695 1.146 1.093C5.122 10.423 6.5 11.717 8 13.447c1.5-1.73 2.878-3.024 3.986-4.064.425-.398.81-.76 1.146-1.093C14.446 6.986 15 6.131 15 4.92 15 3.326 13.676 2 12 2c-.777 0-1.418.345-1.954.852-.545.515-.93 1.152-1.152 1.595L8 6.236zm.392 8.292a.513.513 0 0 1-.784 0c-1.601-1.902-3.05-3.262-4.243-4.381C1.3 8.208 0 6.989 0 4.92 0 2.755 1.79 1 4 1c1.6 0 2.719 1.05 3.404 2.008.26.365.458.716.596.992a7.55 7.55 0 0 1 .596-.992C9.281 2.049 10.4 1 12 1c2.21 0 4 1.755 4 3.92 0 2.069-1.3 3.288-3.365 5.227-1.193 1.12-2.642 2.48-4.243 4.38z"/>
                                  </svg>
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat" viewBox="0 0 16 16">
                                    <path d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z"/>
                                  </svg>
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send" viewBox="0 0 16 16">
                                    <path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576 6.636 10.07Zm6.787-8.201L1.591 6.602l4.339 2.76 7.494-7.493Z"/>
                                  </svg>
                                </div>
                            </div>

                        </div>

                    </div>
                @endforeach
            </div>
            <div class="mt-2 m-auto">
                {{ $posts->links() }}
            </div>


        </div>
    </div>
    <style>
        .female {
            background-color: lightpink;
        }

        .male {
            background-color: lightblue;
        }
    </style>
@endsection
