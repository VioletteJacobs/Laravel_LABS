<!-- Single widget -->
<div class="widget-item">
    <h2 class="widget-title">Categories</h2>
    <ul>
        @foreach ($category->shuffle() as $item)
        <li><a href="#">{{$item->category}}</a></li>
        @endforeach
    </ul>
</div>