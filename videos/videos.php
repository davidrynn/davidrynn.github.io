<div id="blueimp-gallery" class="blueimp-gallery">
    <!-- The container for the modal slides -->
    <div class="slides"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->
    <div class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body next"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left prev">
                        <i class="glyphicon glyphicon-chevron-left"></i>
                        Previous
                    </button>
                    <button type="button" class="btn btn-primary next">
                        Next
                        <i class="glyphicon glyphicon-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
var gallery = blueimp.Gallery([
    {
        title: 'Law & Order, episode "Bogeyman"',
        href: 'videos/LnO.mp4',
        type: 'video/mp4',
        poster: 'images/loscreencap.jpg'
    },
        {
        title: '"The Canadian" Spoof of "The American" trailer',
        href: 'http://youtu.be/FIUo-yr1FqE',
        type: 'text/html',
        youtube: 'FIUo-yr1FqE',
        poster: 'https://img.youtube.com/vi/FIUo-yr1FqE/maxresdefault.jpg'
    },
    {
        title: 'The Wig Project Comedy Series- Eat, Pray, Love vs. Predators',
        href: 'http://www.youtube.com/embed/jUfvkvf9qrI',
        type: 'text/html',
        youtube: 'jUfvkvf9qrI',
        poster: 'https://img.youtube.com/vi/jUfvkvf9qrI/maxresdefault.jpg'
    },
     {  title: '"Trapped" - Short film',
        href: 'http://youtu.be/i6fTgHmZYy8',
        youtube: 'i6fTgHmZYy8',
        poster: 'https://img.youtube.com/vi/i6fTgHmZYy8/maxresdefault.jpg'
    },
     {
        title: 'The Engagement',
        href: 'videos/The Engagement.mp4',
        type: 'video/mp4',
        poster: 'images/engagescreencap1.jpg'
    },     
    {
        title: 'The Night Doorman',
        href: 'videos/NightDoorman.mp4',
        type: 'video/mp4',
        poster: 'images/ntdrmn603.jpg'
    },
   {
        title: 'Clips from "The Maiden Voyage of Jimmy Swash"  -  Short film',
        href: 'videos/jimmyedit.mp4',
        type: 'video/mp4',
        poster: 'images/jimmyeditpic.jpg'
    },


]);

</script>
<div class="row" height=auto><p></p></div>
<p></p>
