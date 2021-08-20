@if(!empty($yearly_news))
    <div class="news-inner-content">
        <div class="row no-gutters">
            @foreach($yearly_news as $news)
                <div class="col-md-4 p-2">
                    <a href="{{route('news-detail',[encodeData($news->id)])}}"
                       tabindex="0">
                        <div class="inner-news-img-container">
                            @if(file_exists(public_path('storage/uploads/news/'.$news->image)))
                                <div class="inner-news-uploaded-img">
                                    <img
                                        src="{{ URL::asset('storage/uploads/news/'.$news->image) }}"
                                        alt="">
                                </div>
                            @else
                                <div class="inner-news-default-img">
                                    <img
                                        src="{{URL::asset('frontend/assets/images/default-news-image.jpg')}}">
                                </div>

                            @endif
                            <div class="inner-news-content">
                                <h4>{{ \Illuminate\Support\Str::limit($news->headline, 50)}}</h4>
                                <div>
                                    <p>
                                        {{\Carbon\Carbon::parse($news->date)->format('F d Y')}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endif
<div class="paginated_results">
    {{ $yearly_news->appends(array('year' => $year))->links() }}
</div>
