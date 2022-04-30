@extends('layouts.app')

@section('jumbo')
    <div class="jumbotron text-center jumbo">
        <div class="container">
            <p><img src="{{ asset('icons/logo.png')}}" alt="DIVCCON LOGO" width="120" height="120"></p>
            <h1 class="display-5">DIVCCON 2021</h1>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="row">
                        <div class="col-sm-4 col-md-4 col-lg-4"></div>
                        <div class="col-sm-4 col-md-4 col-lg-4">
                            <h1 class="size-150 black-bg">Membership Panel</h1>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4"></div>
                    </div>
                    <p class="size-150">Welcome to the DIVCCON 2021 Membership Page.</p>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')

<div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12">
        <p class="reg1-red text-center">For Instructions on How to get a PIN or For assistance<br> <a class="btn btn-danger btn-sm" href="https://www.divccon.com/how-to-register-for-divccon/" target="_blank" role="button"><b>CLICK HERE</b></a> or CALL: +234-8063818592 or +234-9096105650 <br>ENTER YOUR DETAILS BELOW TO LOGIN:</p>
    </div>
</div>
<div class="row">
    <div class="col-sm-4 col-md-4 col-lg-4"></div>
    <div class="col-sm-4 col-md-4 col-lg-4">
        @include('inc.messages')

        <form method="POST" action="{{ route('membership') }}">
            @csrf
            <div class="form-group">
                <input type="password" class="form-control" id="pin" name="pin" aria-describedby="pin" placeholder="PIN...(Eg.: A12345)" required>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="lastname" name="lastname" aria-describedby="lastname" placeholder="LASTNAME...(Eg.: DOE)" value="{{ old('lastname') }}" required>
            </div>

            <p><button type="submit" class="btn btn-primary btn-block blue-button">LOGIN</button></p>
            <p><a class="btn btn-danger btn-block" href="/" role="button"><b>BACK TO HOME</b> &raquo;</a></p>
        </form>
    </div>
    <div class="col-sm-4 col-md-4 col-lg-4"></div>
</div>

@endsection


