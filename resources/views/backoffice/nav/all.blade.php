@extends("backoffice.partials.html")

@section("content")
    
<section class="d-flex justify-content-center">
    <div class="w-25 d-flex flex-col mt-3">
        <table class="table w-100">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($nav as $item)
                <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td>{{$item->name}}</td>
                    <td class="d-flex"> 
                        <div class="d-flex">
                        <a class="btn btn-success" href="{{route("nav.edit", $item->id)}}">Edit</a>&nbsp;&nbsp;
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>

@endsection