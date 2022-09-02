@extends('layouts.main')
@section('container')

<div class="row justify-content-center">
    <div class="col-lg-5">
        <main class="form-signin">
            <h1 class="h3 mb-3 fw-normal text-center">MiBlog Register</h1>
            <form action="/register" method="POST">
                @csrf
                <div class="form-floating">
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Name" value="{{ old('name') }}" required>
                    <label for="floatingInput">Name</label>
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>  
                <div class="form-floating">
                    <input type="text" class="form-control  @error('username') is-invalid @enderror" name="username" placeholder="Username" value="{{ old('username') }}" required>
                    <label for="floatingInput">Username</label>
                    @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>  
                <div class="form-floating">
                    <input type="email" class="form-control  @error('email') is-invalid @enderror" name="email" placeholder="name@example.com" value="{{ old('email') }}" required>
                    <label for="floatingInput">Email address</label>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control  @error('password') is-invalid @enderror" name="password" placeholder="Password" required>
                    <label for="floatingPassword">Password</label>
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            
                <button class="w-100 btn btn-lg btn-dark" type="submit">Register</button>
            </form>
            <small class="d-block text-center mt-3">Already registered? <a href="/login">Login</a></small>

        </main>
    </div>
</div>


    
@endsection