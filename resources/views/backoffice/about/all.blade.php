@extends("backoffice.partials.html")

@section("content")
    
<div class="mt-2 d-flex justify-content-center align-items-center h-25">

    <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">{{$about->title}}</h5>
          <p class="card-text">{{$about->text}}</p>
          <p class="card-text">{{$about->text2}}</p>
          <p class="card-text"><i>{{$about->video}}</i></p>

          <a href="{{route("about.edit", $about->id)}}" class="btn btn-success">Edit</a>
        </div>
      </div>

</div>

@endsection