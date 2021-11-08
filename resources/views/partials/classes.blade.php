<section class="class-area fix bg-gray pb-100 pt-95">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-xs-12">
                <div class="section-title text-center">
                    <h2>{{$titres[0]->title}}</h2>
                    <p>{{$titres[0]->subtitle}}</p>
                </div>  
            </div>
        </div>
        <div class="row"> 
            @foreach ($classes as $item) 
            <div class="col-md-4 col-sm-6 col-xs-12">     
                <div class="single-class">
                    <div class="single-img">
                        <a href="class.html">
                            @if (Storage::disk('public')->exists('img/' . $item->img))
                            <img src="{{ asset('img/' . $item->img) }}" alt=""></td>
                              @else
                            <img src="{{ asset($item->img) }}" alt=""></td>
                              @endif
                        </a>
                        <div class="gallery-icon">
                            <a class="image-popup" href="{{$item->img}}">
                                <i class="zmdi zmdi-zoom-in"></i>
                            </a>   
                        </div>
                    </div>
                    <div class="single-content">
                        <h3><a href="class.html">{{$item->name}} <span>({{$item->categorie}})</span></h3></a>
                        <ul>
                            <li><i class="zmdi zmdi-face"></i>{{$item->trainer->name}}</li>
                            <li><i class="zmdi zmdi-alarm"></i>{{$item->schedule}}</li>
                        </ul>
                        <form class="d-flex justify-content-center flex-column" action="{{route("inscription.store")}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <button type="submit" class="btn btn-success">Sign in</button> Participants : ??? / 15
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>  
    </div>
</section>