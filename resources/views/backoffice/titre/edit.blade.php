@extends("backoffice.partials.html")

@section("content")
<div class="mt-4">
<form enctype="multipart/form-data"  action="{{route("titre.update", $titre->id)}}" method="POST">
    @csrf
    @method("PUT")
<div class=" w-100 d-flex flex-column justify-content-center align-items-center">
        <label for="">Titre</label>
        <input class="w-50" type="text" name="title" value="{{$titre->title}}">
        <label for="">Sous-titre</label>
        <input  class="w-50" type="text" name="subtitle" value="{{$titre->subtitle}}">
</div>
<br>
<div style="display: flex; justify-content:center;">
    <button class="btn btn-success text-white" type="submit">Update</button>
</div>

</form>
@endsection