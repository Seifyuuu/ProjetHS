@extends("backoffice.partials.html")

@section("content")
    

<form enctype="multipart/form-data" action="{{route("background.update", $background->id)}}" method="POST">
    @csrf
    @method("PUT")
    <br><br><br>
    <div class="w-100 h-50"  style="display: flex; justify-content: center;">
    <div class="w-75 h-50" style="display:flex; flex-direction:column">
    <label for="">Photo :</label>
    <input type="file" name="img" value="{{$background->img}}">
    <br>
    <label for="">Texte 1 :</label>
    <input type="text" name="text" value="{{$background->text}}">
    <br>
    </div>
    </div>

    <div class="mt-3" style="display: flex; justify-content:center;">
    <button class="btn btn-success" type="submit">Update</button>
    </div>
</form>

@endsection