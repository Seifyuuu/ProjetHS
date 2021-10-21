@extends("backoffice.partials.html")

@section("content")
    
<div class="mt-2 d-flex justify-content-center align-items-center">
    @foreach ($background as $item)
    <div class="card ml-3" style="width: 18rem;">
        <div class="card-body">
       
        <p class="card-text mt-1">{{$item->text}}</p>
          <a href="{{route("background.edit", $item->id)}}" class="btn btn-success">Edit</a>
        </div>
      </div>
      @endforeach

</div>
    

@endsection