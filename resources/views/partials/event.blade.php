<section class="event-area pt-95 pb-100 bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-xs-12">
                <div class="section-title text-center">
                    <h2>awesome <span class="span">event</span></h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum issss has been the industry's standard dummy text ever since the 1500s, when an unknown lorem </p>
                </div>
                <div class="event-wrapper">
                    <div class="event-content text-center">
                        @foreach ($events as $item)
                        <h3>{{$item->name}}</h3>
                        <p>{{$item->text}}</p>
                        <h4>{{$item->date}}</h4>
                        <h5>{{$item->hour}}</h5>
                        @endforeach
                    </div> 
                </div>
            </div>
        </div>
    </div>
</section>