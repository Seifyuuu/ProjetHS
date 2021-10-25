@extends("backoffice.partials.html")

@section("content")
<div class="mt-5" style="display: flex; justify-content: center; flex-direction:column; align-items:center;">
    <form class="d-flex justify-content-center flex-column align-items-center" action="{{route("background.store")}}" method="post" enctype="multipart/form-data">
        @csrf
    <label for="">Text : </label>
    <input type="text" name="text" placeholder="text">
    <br>
    <label for="">Image : </label>
    <input type="file" name="img" placeholder="img">
    <br>
    <button class="mx-auto btn btn-success" type="submit">Créer</button>
    </form>    
</div>
@endsection