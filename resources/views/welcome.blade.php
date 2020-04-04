@extends('layouts.app', ['class' => 'bg-default'])

@section('content')
<style type="text/css">
    .bg-image{
        background-image: url('../argon/img/theme/bisnis-restoran-sunda.png');
        background-repeat:no-repeat;
        background-size: 100%;

    }
</style>
    <div class="jumbotron bg-image" >
        <div class="container">
            <div class="header-body text-center mt-7 mb-7">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-6">
                        <h1 class="text-white">{{ __('Welcome to Kantin Sehat.') }}</h1><br><br><br><br><br><br><br>
                    </div>
                </div>
            </div>
        </div>
  
</div>
@endsection
