@extends('base')

@section('content')
    <div class="">
        <div class="col-md-4 offset-md-4 mt-5">

            @if (session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            <div class="card mt-3">

                <div class="card-header text-white text-center bg-info">
                    <h3 class="card-title" style="font-weight:400;">Login</h3>

                </div>
                <div class="card-body">
                    <form action="{{ url('/login') }}" method="post" class="form-control shadow-lg">
                        {{ csrf_field() }}

                        <div class="mb-3 d-flex">
                            <label for="email" class="m-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
                              </svg></label>
                            <input type="email" name="email" id="email" class="form-control"
                                placeholder="Enter email">
                            @error('email')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3 d-flex">
                            <label for="password" class="m-2"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-key-fill" viewBox="0 0 16 16">
                                <path d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2zM2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                              </svg></label>
                            <input type="password" name="password" id="password"
                                class="form-control"placeholder="Enter password">
                            @error('password')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <a href="/register">No Account? Register here.</a>
                            </div>
                            <button class="btn text-light" style="background-color: #2c70b1;" type="submit">Login</button>

                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
