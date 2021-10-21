@extends("backoffice.partials.html")

@section("content")
<div class="mt-4">
<form enctype="multipart/form-data"  action="{{route("gallery.update", $gallery->id)}}" method="POST">
    @csrf
    @method("PUT")
    <div style="display: flex; justify-content:center;">
        <input type="file" name="img">
</div>
<br>
<div style="display: flex; justify-content:center;">
    <button class="btn btn-success text-white" type="submit">Update</button>
    </div>

</form>
@endsection