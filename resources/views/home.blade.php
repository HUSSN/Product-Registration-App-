@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <!---->
                    <div class="links">
                        @auth
                            <a  href="{{ url('/home') }}" class=" boss btn btn-primary" >Home</a>
                            <a  href="http://localhost:8000/products" class=" boss btn btn-primary" >Products</a>
                            <a  href="http://localhost:8000/products/create" class=" boss btn btn-primary" >Create Product</a>
                        @else
                          
    
                            
                        @endauth
                     
                    </div>
                    <!---->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
