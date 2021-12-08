@extends('templates.main')
@section('navbar')
    @include('templates.partials.navbar')
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9 mt-5">
                <form action="/cvapp/{{$data_all->id}}/update" method="POST" class="mt-5" enctype="multipart/form-data">
                @csrf
                  <div class="mb-3">
                    <label for="exampleFormControlInput2" class="form-label">Author</label>
                    <input required type="text" name="nama_penulis" class="form-control" id="exampleFormControlInput2" value="{{$data_all->nama_penulis}}">
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Place</label>
                    <input required type="text" name="nama_tempat" class="form-control" id="exampleFormControlInput3" value="{{$data_all->nama_tempat}}">
                  </div>
                  <div class="mb-3">
                    <label for="formFile" class="form-label">Image</label>
                    <input required class="form-control" type="file" id="media" name='media'>
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Your Review</label>
                    <textarea class="form-control" name="review" id="exampleFormControlTextarea1" rows="3">{{$data_all->review}}</textarea>
                  </div>
                  <div class="gap-2 d-md-flex justify-content-md-end" style="text-align: right !important;">
                      <button class="btn" type="submit" style="background-color: blue; color: white;">Save Update</button>
                  </div>
                </div>
                </form>

            </div>
        </div>
    </div>
@endsection