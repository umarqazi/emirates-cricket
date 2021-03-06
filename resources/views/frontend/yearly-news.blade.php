@if(!empty($yearly_news))
    <div class="news-inner-content">
        <div>
            <ul>
                @foreach($yearly_news as $new)
                    <li class="news-inner-list">
                        <div class="inner-news-content-main">
                            <div class="row  align-items-center">
                                <div class="col-md-6">
                                    <a href="{{route('news-detail',[encodeData($new->id)])}}">
                                        <h4>{{ \Illuminate\Support\Str::limit($new->headline, 150)}}</h4></a>
                                </div>
                                <div class="col-md-3">
                                    <p>{{\Carbon\Carbon::parse($new->date)->format('F d Y')}}</p>
                                </div>
                                <div class="col-md-3"><a href="{{route('news-detail',[encodeData($new->id)])}}"
                                                         class="btn">View Detail</a></div>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endif
<div class="paginated_results">
    @if(request()->get('year'))
        {{ $yearly_news->appends(array('year' => request()->get('year')))->links() }}
    @else
        {{ $yearly_news->links() }}
    @endif
</div>
