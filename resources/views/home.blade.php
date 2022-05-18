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

        <div class="d-flex" style="font-size:14px; padding-top: 8px; ">
            <div onclick="" style="cursor: pointer; padding-right: 20px" title="I like this" class="info"><strong><img src="svg/likeButton.svg" style="height:24px;"> 26k</strong></div>
            <div onclick="" style="cursor: pointer; padding-right: 20px" title="I dislike this" class="info"><strong><img src="svg/dislikeButton.svg" style="height:24px;"> Dislike</strong></div>
            <div onclick="" style="cursor: pointer; padding-right: 20px" title="Share" class="info"><strong><img src="svg/shareButton.svg" style="height:24px;"> Share</strong></div>
            <div onclick="" style="cursor: pointer; padding-right: 20px" title="Download" class="info"><strong><img src="svg/downloadButton.svg" style="height:24px;"> Download</strong></div>
            <div onclick="" style="cursor: pointer; padding-right: 20px" title="Show support with Super Thanks" class="info"><strong><img src="svg/supportButton.svg" style="height:24px;"> Thanks</strong></div>
            <div onclick="" style="cursor: pointer; padding-right: 20px" title="Clip" class="info"><strong><img src="svg/clipButton.svg" style="height:24px;"> Clip</strong></div>
            <div onclick="" style="cursor: pointer; padding-right: 20px" title="Save" class="info"><strong><img src="svg/saveButton.svg" style="height:24px;"> Save</strong></div>
            <div onclick="" style="cursor: pointer; padding-right: 20px" class="info"><strong><img src="svg/moreButton.svg" style="height:24px;"></strong></div>
        </div>
        <div class="d-flex" style="font-size:14px; padding-top: 8px">
            <div class="d-flex" style="font-size:14px; padding-top: 8px">
                <div><img style="border-radius: 50%" src="https://yt3.ggpht.com/ytc/AKedOLRR2uNiXJiFH-XRmtGgkdICxTuDJxCPJidKFRNCNg=s48-c-k-c0x00ffffff-no-rj" alt=""></div>
                <div style="padding-left: 8px">
                    <div>Channel</div>
                    <div>5.59M subscribers</div>
                </div>
                <div>Verified icon</div>
                <p>JOIN button</p>
                <p style="text-align:right;">SUBSCRIBE button</p>
            </div>
            <div class="d-flex" style="font-size:14px; padding-top: 8px;">
                <div>Comments</div>
                <div>2.5k</div>
                <div>|</div>
                <div>Icon</div>
                <div>Comment</div>
            </div>
        </div>
    </div>
</div>
@endsection
