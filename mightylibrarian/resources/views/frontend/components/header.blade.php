<div class="image-wrap">
    <div class="img-content">
        <img src="{{asset('images/banner.jpg')}}" alt="BANNER">
    </div>
        <div class="overlay"></div>
</div>
<div class="banner-content">
    <h1>{{env('APP_NAME')}}</h1>
    <h2>{{env('APP_SLOGAN')}}</h2>
</div>

<style>
    @import url("{{asset('css/font-montserrat-oswald.css')}}");
    @import url("{{asset('css/banner.css')}}");
</style>
