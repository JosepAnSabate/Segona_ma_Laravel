<div class="row my-3">
    <div class="col-12 col-md-4 offset-md-4">

        <div class="card-header d-flex justify-content-between">
            <h3>{{$announcement->title}}</h3>
            <em>{{$announcement->created_at->format('d/m/Y')}}</em>

        </div>
        <div class="card-body ">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @foreach ($announcement->images as $image)
                    <div class="carousel-item @if($loop->first)active @endif">
                        <img src="{{$image->getUrl(300,150)}}" class="d-block w-100" alt="...">
                    </div>
                </div>
                @endforeach
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>

            </div>
        <div class="mt-2">

            <p class="stylep"> {{$announcement->body}} </p>

            <p><strong> {{$announcement->price}} €</strong></p>

        </div>
        </div>
        <div class="card-footer d-flex justify-content-between">
                <strong>{{__('ui.detailscategory')}} <a href="{{route('category.announcements',
                ['name'=>$announcement->category->name,'id'=>$announcement->category->id])}}">
                {{$announcement->category->name}}</a></strong>
                <strong>{{__('ui.detailsautor')}} {{$announcement->user->name}} </strong>
        </div>                
                <a class="d-flex justify-content-center mt-2" href="{{route("announcement.details", ['id'=>$announcement->id])}}"><button type="button" class="btn btn-success">{{__('ui.readmore')}}</button></a>
</div>
</div>
