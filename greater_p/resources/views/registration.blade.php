@extends('layouts.base')
@section('content')
                    <h2 class="mainTitle">Registration</h2>
                    <div class="formWrap">
                        <form method='POST' action='{{ route("storeUser") }}' class='form'>
                            @csrf
                            <label class='accFormLabel'>Your Name
                                <input type="text" name='name' class=' {{ $errors ->has("name") ? "hasErrorInput" : "" }} ' placeholder='min 8 char' value=' {{ old("name") }} '>
                                @error('name')
                                    <p class='errorMsg'>{{ $message }}</p>
                                @enderror
                            </label>
                            <label class='accFormLabel'>Your Email
                                <input type="email" name='email' class=' {{ $errors ->has("email") ? "hasErrorInput" : "" }} ' value=' {{ old("email") }} '>
                                @error('email')
                                    <p class='errorMsg'>{{ $message }}</p>
                                @enderror
                            </label>
                            <label class='accFormLabel'>Password
                                <input type="password" name='password' class=' {{ $errors ->has("password") ? "hasErrorInput" : "" }} ' placeholder='min 8 char'>
                                @error('password')
                                    <p class='errorMsg'>{{ $message }}</p>
                                @enderror
                            </label>
                            <label class='accFormLabel'>Password repeat
                                <input type="password" name='password_confirmation' class=' {{ $errors ->has("password") ? "hasErrorInput" : "" }} ' placeholder='min 8 char'>
                            </label>
                            <button type='submit' class="btn">Registration</button>
                        </form>
                        <ul>
                            <!-- @foreach ($errors->all() as $message) 
                                <li>{{ $message }}</li>
                            @endforeach -->
                        </ul>
                    </div>
@endsection