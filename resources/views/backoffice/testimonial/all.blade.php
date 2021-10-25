@extends("backoffice.partials.html")

@section("content")
    
<div class="mt-4 d-flex justify-content-center">
    <a class="btn btn-success" href="{{route("testimonial.create")}}">Add + </a>
</div>

<section class="d-flex justify-content-center">
    <div class="w-50 d-flex flex-col mt-3">
        <table class="table w-100 table table-dark table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Job</th>
                <th scope="col">Text</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($testimonial as $item)
                <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td>{{$item->name}}</td>
                    <td>{{$item->job}}</td>
                    <td>{{$item->text}}</td>
                    <td class=""> 
                        <div class="d-flex">
                            
                            <a class="btn btn-success" href="{{route("testimonial.edit", $item->id)}}">Edit</a>&nbsp;&nbsp;
                            <form action="{{route("testimonial.destroy", $item->id)}}" method="POST">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger" type="submit">Delete</button>
                              </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>

@endsection