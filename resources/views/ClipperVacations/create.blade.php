@extends('templates.main')
@section('navbar')
    @include('templates.partials.navbar')
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9 mt-5">
                <form action="/cvapp/store" method="POST" class="mt-5" enctype="multipart/form-data">
                @csrf
                  <div class="mb-3">
                    <label for="exampleFormControlInput2" class="form-label">Author</label>
                    <input required type="text" name="nama_penulis" class="form-control" id="exampleFormControlInput2" placeholder="Author">
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Place</label>
                    <input required type="text" name="nama_tempat" class="form-control" id="exampleFormControlInput3" placeholder="Place">
                  </div>
                  <div class="mb-3">
                    <label for="formFile" class="form-label">Image</label>
                    <input required class="form-control" type="file" id="media" name="media">
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Your Review</label>
                    <textarea class="form-control" name="review" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>
                  <div class="gap-2 d-md-flex justify-content-md-end" style="text-align: right !important;">
                      <button href="" class="btn me-md-2" style="background-color:red; color: white;">Cancel</button>
                      <button class="btn" type="submit" style="background-color: blue; color: white;">Save</button>
                  </div>
                </div>
                </form>

            </div>
        </div>
    </div>
@endsection