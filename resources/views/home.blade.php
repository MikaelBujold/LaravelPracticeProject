@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <iframe width="100%" height="480px" src="//www.youtube.com/embed/ImtZ5yENzgE" frameborder="0" allowfullscreen></iframe>
        <div style="font-size:18px; padding-top: 20px"><strong>Laravel PHP Framework Tutorial - Full Course for Beginners (2019)</strong></div>
        <div class="d-flex" style="padding-top: 8px">
            <div style="font-size:14px;font-weight: bold">1,870,732 views  May 7, 2019</div>
            <div style="color:grey; padding-left: 6px">desc...</div>
        </div>

        <div class="d-flex" style="font-size:14px; padding-top: 8px">
            <div onclick="" title="I like this" class="info pe-4"><strong><img src="svg/likeButton.svg" style="height:24px;"> 26k</strong></div>
            <div onclick="" title="I dislike this" class="info pe-4"><strong><img src="svg/dislikeButton.svg" style="height:24px;"> Dislike</strong></div>
            <div onclick="" title="Share" class="info pe-4"><strong><img src="svg/shareButton.svg" style="height:24px;"> Share</strong></div>
            <div onclick="" title="Download" class="info pe-4"><strong><img src="svg/downloadButton.svg" style="height:24px;"> Download</strong></div>
            <div onclick="" title="Show support with Super Thanks" class="info pe-4"><strong><img src="svg/supportButton.svg" style="height:24px;"> Thanks</strong></div>
            <div onclick="" title="Clip" class="info pe-4"><strong><img src="svg/clipButton.svg" style="height:24px;"> Clip</strong></div>
            <div onclick="" title="Save" class="info pe-4"><strong><img src="svg/saveButton.svg" style="height:24px;"> Save</strong></div>
            <div onclick="" class="info pe-4"><strong><img src="svg/moreButton.svg" style="height:24px;"></strong></div>
        </div>
        <div class="col-2"></div>
    </div>
</div>
@endsection
