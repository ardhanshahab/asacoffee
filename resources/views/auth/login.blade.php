@extends('layouts.loginregist')

@section('content')
<div class="container screen">
    <div class="row">
        <div class="col-md-8">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="wrap d-md-flex justify-content-center">
                        {{-- <div class="img"></div> --}}
                        <div class="">
                            <form method="POST" action="{{ route('login') }}" class="form">
                                @csrf
                                <div class="title">Welcome,<br><span>Log In to continue</span></div>
                                <input class="input" name="email" placeholder="Email" type="email">
                                <input class="input" name="password" placeholder="Password" type="password">
                                <button class="button-confirm">Let`s go →</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .screen{
        height: 80vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .img {
    background-image: url('{{ asset('css/test.jpg') }}');
    background-size: cover;
    background-position: center;
    width: 70%;
    }
    .form {
    --input-focus: #2d8cf0;
    --font-color: #323232;
    --font-color-sub: #666;
    --bg-color: beige;
    --main-color: black;
    padding: 20px;
    background: lightblue;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: center;
    gap: 20px;
    border-radius: 5px;
    border: 2px solid var(--main-color);
    box-shadow: 4px 4px var(--main-color);
    }

    .title {
    color: var(--font-color);
    font-weight: 900;
    font-size: 20px;
    margin-bottom: 25px;
    }

    .title span {
    color: var(--font-color-sub);
    font-weight: 600;
    font-size: 17px;
    }

    .input {
    width: 250px;
    height: 40px;
    border-radius: 5px;
    border: 2px solid var(--main-color);
    background-color: var(--bg-color);
    box-shadow: 4px 4px var(--main-color);
    font-size: 15px;
    font-weight: 600;
    color: var(--font-color);
    padding: 5px 10px;
    outline: none;
    }

    .input::placeholder {
    color: var(--font-color-sub);
    opacity: 0.8;
    }

    .input:focus {
    border: 2px solid var(--input-focus);
    }

    .login-with {
    display: flex;
    gap: 20px;
    }

    .button-log {
    cursor: pointer;
    width: 40px;
    height: 40px;
    border-radius: 100%;
    border: 2px solid var(--main-color);
    background-color: var(--bg-color);
    box-shadow: 4px 4px var(--main-color);
    color: var(--font-color);
    font-size: 25px;
    display: flex;
    justify-content: center;
    align-items: center;
    }

    .icon {
    width: 24px;
    height: 24px;
    fill: var(--main-color);
    }

    .button-log:active, .button-confirm:active {
    box-shadow: 0px 0px var(--main-color);
    transform: translate(3px, 3px);
    }

    .button-confirm {
    margin: 50px auto 0 auto;
    width: 120px;
    height: 40px;
    border-radius: 5px;
    border: 2px solid var(--main-color);
    background-color: var(--bg-color);
    box-shadow: 4px 4px var(--main-color);
    font-size: 17px;
    font-weight: 600;
    color: var(--font-color);
    cursor: pointer;
    }

</style>
@endsection
