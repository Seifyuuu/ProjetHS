@extends("backoffice.partials.html")

@section("content")
<div class="mt-4">
<form enctype="multipart/form-data"  action="{{route("event.update", $event->id)}}" method="POST">
    @csrf
    @method("PUT")
    <div style="display: flex; justify-content:center;">
        <input type="text" name="name" value="{{$event->name}}">
        <input type="text" name="date" value="{{$event->date}}">
        <input type="text" name="hour" value="{{$event->hour}}">
        <input type="text" name="text" value="{{$event->text}}">
</div>
<br>
<div style="display: flex; justify-content:center;">
    <button class="btn btn-success text-white" type="submit">Update</button>
    </div>

</form>
@endsection