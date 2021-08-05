<div class="top-bar">
    <a href="https://pacificventures.co/About-Pacific-Ventures.aspx">
        <img class="pacific-logo" src="{{ URL::asset('frontend/assets/images/pacificLogo.png') }} " alt="">
    </a>
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
