@extends("backoffice.partials.html")

@section("content")
    
<div class="mt-2 d-flex justify-content-center align-items-center">
    @foreach ($background as $item)
    <div class="card ml-3" style="width: 18rem;">
        <div class="card-body">
          @if (Storage::disk('public')->exists('img/' . $item->img)) 
          <img src="{{asset('img/' . $item->img)}}" alt="" style="width: 200px">  
          @else
          <img src="{{ asset($item->img) }}" style="width: 200px" alt="">
          @endif
        <p class="card-text mt-1">{{$item->text}}</p>
          <a href="{{route("background.edit", $item->id)}}" class="btn btn-success">Edit</a>
        </div>
      </div>
      @endforeach

</div>
    

@endsection