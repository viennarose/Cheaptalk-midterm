<div>
    <div class="container">
        <div class="row">
            @foreach ($users as $user)
                <div class="col-md-4 mb-1">
                    <div class="card p3 {{ $user->gender === 'female' ? 'female' : 'male' }}">

                        <a href="{{ url('authors', ['id' => $user->id]) }}">
                            <div class="card mx-auto" style="border-radius: 50%; width:150px;">
                                <div class="mx-auto">
                                    <img class="card" style="border-radius: 50%; width: 150px;"
                                        src="{{$user->gender === 'female' ? asset('img/woman.png') : asset('img/hacker.png') }}"
                                        alt="photo">
                                </div>
                            </div>
                        </a>
                        <div class="">
                            <h4 class="text-center p-2">{{ $user->name }}</h4>
                        </div>
                        <div class="card-footer bg-light text-dark text-center">
                            <p>Total Posts: {{ $user->posts()->count() }}</p>
                        </div>
                    </div>

                </div>
            @endforeach

        </div>
        <div class="offset-md-5 mt-3">
            {{ $users->links() }}
        </div>
    </div>

</div>
