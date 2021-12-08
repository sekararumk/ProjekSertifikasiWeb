@extends('templates.main')

@section('navbar')
    @include('templates.partials.navbar')
@endsection

@section('content')

<header class="masthead" id="page-top">
    <div class="container d-flex h-100 align-items-center">
        <div class="mx-auto text-center">
            <h1 class="mx-auto my-0 text-uppercase">Clipper Vacations</h1><br><br>
            <h2 class="text-white mx-auto mt-5 mb-5">It's Time to Start Your Own Journey!</h2>
            <a class="btn btn-light js-scroll-trigger" href="#home">Get Started</a>
        <div class="fixed-bottom p-3 mb-9" style="text-align: right !important;">
              <a href="{{ url('cvapp/create') }}" class="btn" style="background-color: black; color: white;"><i class="bi bi-plus-lg"></i> Add Your Review</a>
        </div>
    </div>
</header>


<a name="home">
    <div class="mx-auto text-center p-3 mb-2">
    @if(session('success'))
        <div class="alert alert-success" role="alert">
        <h4><i class="icon fa fa-check"></i>Success!</h4>
            {{session('success')}}
        </div>
        @endif
    <div>   
    @foreach($data_datauser as $datauser)
    <div class="container">
        <div class="row justify-content-center mt-2">
            <div class="col-7 p-4">
              <div class="card radius-15 shadow">
                  <img src="{{asset('storage/'.$datauser->media)}}" class="card-img-top rounded-image" alt="Image">
                    <h2 class="card-title text-center">{{$datauser->nama_tempat}}</h2>
                    <h5 class="card-text text-center">{{$datauser->nama_penulis}}</h5>
                    <p class="card-text text-center">{{$datauser->review}}</p>         
                    <div class="gap-2 mt-4 p-3 d-md-flex justify-content-md-end">
                        <a href="/cvapp/{{$datauser->id}}/edit" class="btn btn-sm" style="background-color:black; color: white;">Edit</a> 
                        <a href="/cvapp/{{$datauser->id}}/destroy" class="btn btn-sm" style="background-color:red; color: white;" onclick="return confirm('Are you sure you want to delete this?')">Delete</a>     
                    </div>
                </div>
               </div>
            </div>
        </div>
    </div>
</a>
@endforeach
@endsection

