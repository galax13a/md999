@extends('layouts.app')
@section('title', __('Welcome'))
@section('content')
<div class="container-fluid">
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header"><h5><span class="text-center fa fa-home"></span> @yield('title')</h5></div>
            <div class="card-body">
              <h5>  
            @guest
				
				{{ __('Welcome to') }} {{ config('app.name', 'Laravel') }} !!! </br>
				Dashboard Please contact admin to get your Login Credentials or click "Login" to go to your Dashboard.
                
			@else
				Sidebar	Hi {{ Auth::user()->name }}, Welcome back to {{ config('app.name', 'Laravel') }}.
            <h1>Home Page Autenticado</h1>
                @endif	
				</h5>
            </div>
        </div>
    </div>
</div>
</div>
@endsection