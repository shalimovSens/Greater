@extends('layouts.base')
@section('content')
                    <h2 class="mainTitle">Login</h2>
                    <div class="formWrap">
                        <form class='form' method='POST' action='{{ route("login") }}'>
                            @csrf
                            <label class='accFormLabel'>Your Email
                                <input type="email" name='email' class=' {{ $errors ->has("email") ? "hasErrorInput" : "" }} ' value=' {{ old("email") }} '>
                                @error('email')
                                    <p class='errorMsg'>{{ $message }}</p>
                                @enderror
                            </label>
                            <label class='accFormLabel'>Password
                                <input type="password" name='password' class=' {{ $errors ->has("password") ? "hasErrorInput" : "" }} '>
                                @error('password')
                                    <p class='errorMsg'>{{ $message }}</p>
                                @enderror
                            </label>
                            <label class='accFormLabel checkbox'>Remember me
                                <input type="checkbox" name="remember">
                            </label>
                            <button class="btn">Login</button>
                        </form>
                    </div>
@endsection