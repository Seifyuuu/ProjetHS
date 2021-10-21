<div class="trainer-area pt-90 pb-100 bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-xs-12">
                <div class="section-title text-center">
                    <h2>our trainer</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum issss has been the industry's standard dummy text ever since the 1500s, when an unknown lorem </p>
                </div>
            </div>
            @foreach ($trainers as $item)
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="single-trainer text-center">
                    <img src="{{$item->img}}" alt="trainer">
                    <div class="trainer-hover">
                        <h3>{{$item->name}}</h3>
                        <ul>
                            <li><a href="{{$item->url1}}"><i class="fa fa-facebook"></i></a></li>  
                            <li><a href="{{$item->url2}}"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="{{$item->url3}}"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="{{$item->url4}}"><i class="fa fa-pinterest"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
           
        </div>
    </div>
</div>