@extends("backoffice.partials.html")

@section("content")
<div class="mt-4">
<form enctype="multipart/form-data"  action="{{route("testimonial.update", $testimonial->id)}}" method="POST">
    @csrf
    @method("PUT")
    <div style="display: flex; justify-content:center;">
        <input type="text" name="name" value="{{$testimonial->name}}">
        <input type="text" name="job" value="{{$testimonial->job}}">
        <input type="text" name="text" value="{{$testimonial->text}}">
</div>
<br>
<div style="display: flex; justify-content:center;">
    <button class="btn btn-success text-white" type="submit">Update</button>
    </div>

</form>
@endsection