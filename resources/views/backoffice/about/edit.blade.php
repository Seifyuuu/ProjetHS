@extends('backoffice.partials.html')

@section('content')

<form enctype="multipart/form-data" action="{{route("about.update", $about->id)}}" method="POST">
    @csrf
    @method("PUT")
    <br><br><br>
    <div class="w-100 h-50"  style="display: flex; justify-content: center;">
    <div class="w-75 h-50" style="display:flex; flex-direction:column">
    <label for="">Title :</label>
    <input type="text" name="title" value="{{$about->title}}">
    <br>
    <label for="">Texte 1 :</label>
    <input type="text" name="text" value="{{$about->text}}">
    <br>
    <label for="">Texte 2 :</label>
    <input type="text" name="text2" value="{{$about->text2}}">
    <br>
    <label for="">Vidéo :</label>
    <input type="text" name="video" value="{{$about->video}}">
    </div>
    </div>

    <div class="mt-3" style="display: flex; justify-content:center;">
    <button class="btn btn-success" type="submit">Update</button>
    </div>
</form>

@endsection