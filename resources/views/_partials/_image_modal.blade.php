<!-- Wrapper for slides -->
<div class="carousel-inner">
    <div class="item active">
        <img class="img-responsive" src="{{ isset($image['asset_src']) ? asset($image['asset_src']) : $image['src'] }}" alt="{{ $image['name'] }}">
        <div class="carousel-caption">
            {{ $image['name'] }}
        </div>
    </div>
</div>