<div class="top-bar">
    <img class="pacific-logo" src="{{ URL::asset('frontend/assets/images/pacificLogo.png') }} " alt="">
    <div class="marquee">
        <div class="marquee-content">
            @foreach($marqueeUpdates as $key=>$update)
                <span class="item-collection">
                    <span class="item">{{$update->title}}.</span>
                </span>
            @endforeach
        </div>
    </div>
</div>
