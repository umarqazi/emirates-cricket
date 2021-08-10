@if(!empty($yearly_news))
    @foreach($yearly_news as $new)
        <div class="news-inner-content">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <div class="international-news-image">
                        @if(file_exists(public_path('storage/uploads/news/'.$new->image)))
                            <img src="{{ URL::asset('storage/uploads/news/'.$new->image) }}" alt="">
                        @else
                            <img src="{{URL::asset('frontend/assets/images/default-news-image.jpg')}}">
                        @endif
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="international-news-content international-content-news">
                        <h4>{{$new->headline}}</h4>
                        <p> {!! $new->summary !!} </p>
                        <p class="read-more">
                            <a href="{{route('news-detail',[encodeData($new->id)])}}"
                               tabindex="0">Read more</a>
                        </p>
                        <div>
                            <p>
                                {{\Carbon\Carbon::parse($new->date)->format('F d Y')}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endif
<div class="paginated_results">
    {{ $yearly_news->appends(array('year' => $year))->links() }}
</div>
