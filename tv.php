<!DOCTYPE html>
<html>
    <head>

        <meta charset="utf-8">

        <title>NET BUZZ IPTV</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
        <link href="https://unpkg.com/video.js/dist/video-js.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">

        <!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
                <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <script type="text/javascript" src="js/clappr.min.js"></script>
        <link href="css/custom.css" rel="stylesheet">
        <script type="text/javascript" src="js/clappr-chromecast-plugin.min.js"></script>
        <style class="clappr-style">
            @font-face{font-family:Roboto;font-style:normal;font-weight:400;src:local("Roboto"),local("Roboto-Regular"),url(https://cdn.jsdelivr.net/npm/clappr@latest/dist/38861cba61c66739c1452c3a71e39852.ttf) format("truetype")}
            body {
                background: #000 url(img/bgu.jpg) top center;
            }
        </style>
    </head>
    <body>

        <div class="container-fluid">
            <div class="row justify-content-center" style="margin-top: 50px;">

                <div class="col-12 col-lg-8">
                    <div class="embed-responsive embed-responsive-16by9">
                        <div id="player" class="embed-responsive-item">
                            <video id="vid1" class="video-js vjs-default-skin vjs-fluid" poster="http://i.imgur.com/xxqm7EE.png" width="640" height="360" controls autoplay preload="none" data-setup='{ "techOrder": ["html5", "flash", "youtube"], "sources": [{ "type": "application/x-mpegURL", "src": "http://103.107.79.87:8080/CH8106SD01/tracks-v1a1/mono.m3u8"}]}'></video>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="channel-list">
                        <ul class="nav nav-tabs nav-justified" style=" margin-bottom: 15px;">
                            <li class="nav-item">
                                <a class="nav-link active" href="#" data-type="Bangla">Bangla</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"  data-type="English">English</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"  data-type="Hindi">Hindi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"  data-type="Sports">Sports</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"  data-type="Music">Music</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"  data-type="Cartoon">Cartoon</a>
                            </li>
 
                        </ul>
                        <ul id="vidlink" class="thumbnail-slider d-flex flex-wrap">

                            <li class="Hindi"><a id="myLink" title="Click" href="javascript:;" class='channel' data-link="http://168.227.22.18:1935/live/mobile-048/playlist.m3u8"><img src="img/axn.jpg" alt=""></a></li>
                            <li class="Hindi"><a id="myLink" title="Click" href="javascript:;" class='channel' data-link="http://170.254.18.107/COLORS/index.m3u8"><img src="img/colors-tv-hd.jpg" alt=""></a></li>
                            <li class="Hindi"><a id="myLink" title="Click" href="javascript:;" class='channel' data-link="http://103.107.79.87:8080/CH8109HD02/tracks-v1a1/mono.m3u8"><img src="img/zeecinemahd.jpg" alt=""></a></li>
                            <li class="Hindi"><a id="myLink" title="Click" href="javascript:;" class='channel' data-link="http://103.107.79.87:8080/CH8109HD05/tracks-v1a1/mono.m3u8"><img src="img/UTV Movies HD.png" alt=""></a></li>
                            <li class="Hindi"><a id="myLink" title="Click" href="javascript:;" class='channel' data-link="http://103.107.79.87:8080/CH8108HD08/tracks-v1a1/mono.m3u8"><img src="img/Sony Max HD.jpg" alt=""></a></li>
                            <li class="Hindi"><a id="myLink" title="Click" href="javascript:;" class='channel' data-link="http://103.107.79.87:8080/CH8108HD07/tracks-v1a1/mono.m3u8"><img src="img/zeetv.png" alt=""></a></li>
                            <li class="Hindi"><a id="myLink" title="Click" href="javascript:;" class='channel' data-link="https://d35j504z0x2vu2.cloudfront.net/v1/master/0bc8e8376bd8417a1b6761138aa41c26c7309312/bollywood-classic/manifest.m3u8"><img src="img/Bollywood Classic.png" alt=""></a></li>
                            <li class="Hindi"><a id="myLink" title="Click" href="javascript:;" class='channel' data-link="https://d35j504z0x2vu2.cloudfront.net/v1/manifest/0bc8e8376bd8417a1b6761138aa41c26c7309312/bollywood-hd/43e99595-3ab3-4f82-a828-0d32dc308c98/0.m3u8"><img src="img/Bollywood HD.jpg" alt=""></a></li>
                            <li class="Hindi"><a id="myLink" title="Click" href="javascript:;" class='channel' data-link="http://103.199.161.254/Content/7smusic/Live/Channel(7smusic)/index.m3u8"><img src="img/MBC_2_HD_logo.png" alt=""></a></li>
                            <li class="Hindi"><a id="myLink" title="Click" href="javascript:;" class='channel' data-link="http://103.107.79.87:8080/CH8109HD01/tracks-v1a1/mono.m3u8"><img src="img/UTV Cinema HD.jpg" alt=""></a></li>
                            <li class="Hindi"><a id="myLink" title="Click" href="javascript:;" class='channel' data-link="https://sabliveyupp.akamaized.net/v1/manifest/611d79b11b77e2f571934fd80ca1413453772ac7/sablive_https/99b90c7d-7a0c-46e0-9d54-fdc9be35b0b4/1.m3u8"><img src="img/masti.jpg" alt=""></a></li>
                            <li class="Hindi"><a id="myLink" title="Click" href="javascript:;" class='channel' data-link="http://longstream-04.ajaah.com/PlayBoxTV/Enter10/playlist.m3u8"><img src="img/dhin.jpg" alt=""></a></li>
                            

                            <li class="English"><a id="myLink" title="Click" href="javascript:;" class='channel' data-link="https://food-dlvr-ott.akamaized.net:443/primary/3/def27b3dd6854290bc7f42daa93c65ea/index_15.m3u8"><img src="img/animalplanent.jpg" alt=""></a></li>
                            <li class="English"><a id="myLink" title="Click" href="javascript:;" class='channel' data-link="http://103.107.79.87:8080/CH8110HD08/tracks-v1a1/mono.m3u8"><img src="img/dis.png" alt=""></a></li>
                            <li class="English"><a id="myLink" title="Click" href="javascript:;" class='channel' data-link="http://103.107.79.87:8080/CH8110HD07/tracks-v1a1/mono.m3u8"><img src="img/Nat_Geo_HD.png" alt=""></a></li>
                            <li class="English"><a id="myLink" title="Click" href="javascript:;" class='channel' data-link="https://wildearth-roku.amagi.tv/masterR720P.m3u8"><img src="img/wild.png" alt=""></a></li>
                            <li class="English"><a id="myLink" title="Click" href="javascript:;" class='channel' data-link="http://103.199.161.254/Content/bbcworld/Live/Channel(BBCworld)/index.m3u8"><img src="img/bbcworld.jpg" alt=""></a></li>
                            <li class="English"><a id="myLink" title="Click" href="javascript:;" class='channel' data-link="http://103.107.79.87:8080/CH8109HD06/tracks-v1a1/mono.m3u8"><img src="img/axn.jpg" alt=""></a></li>



                            <li class="Sports"><a id="myLink" title="Click" href="javascript:;" class='channel' data-link="https://cdnamd-hls-globecast.akamaized.net/live/ramdisk/arriadia/hls_snrt/index.m3u8"><img src="img/star_sports3.jpg" alt=""></a></li>
                            <li class="Sports"><a id="myLink" title="Click" href="javascript:;" class='channel' data-link="https://es5.dramaticreadings.com:999/hls/star1in.m3u8?md5=EmHfxSSaH9kqBfLveJS49w&expires=1713435644"><img src="img/sony_ten_1.jpg" alt=""></a></li>
                            <li class="Sports"><a id="myLink" title="Click" href="javascript:;" class='channel' data-link="https://bunyhlsipla.bunycdn.com/live/1080pa.m3u8"><img src="img/IPL.jpg" alt=""></a></li>
                            <li class="Sports"><a id="myLink" title="Click" href="javascript:;" class='channel' data-link="https://live-cdn.tsports.com/live-02/master_1920.m3u8"><img src="img/tsport.jpg" alt=""></a></li>
                            
                            
                            
                            
                            

                            <li class="Bangla"><a id="myLink" title="Click" href="javascript:;" class='channel' data-link="http://103.107.79.87:8080/CH8110HD04/tracks-v1a1/mono.m3u8"><img src="img/sunbangla.jpg" alt=""></a></li>
                            <li class="Bangla"><a id="myLink" title="Click" href="javascript:;" class='channel' data-link="http://103.107.79.87:8080/CH8110HD08/tracks-v1a1/mono.m3u8"><img src="img/Discovery Bangla.jpg" alt=""></a></li>
                            <li class="Bangla"><a id="myLink" title="Click" href="javascript:;" class='channel' data-link="http://103.107.79.87:8080/CH8110HD06/tracks-v1a1/mono.m3u8"><img src="img/SonyAath.jpg" alt=""></a></li>
                            <li class="Bangla"><a id="myLink" title="Click" href="javascript:;" class='channel' data-link="http://103.107.79.87:8080/CH8106SD01/tracks-v1a1/mono.m3u8"><img src="img/gtv.jpg" alt=""></a></li>
                            <li class="Bangla"><a id="myLink" title="Click" href="javascript:;" class='channel' data-link="http://cdn01.palki.tv/live/EkattorTV-M/tracks-v1/index.m3u8"><img src="img/71.jpg" alt=""></a></li>
                            <li class="Bangla"><a id="myLink" title="Click" href="javascript:;" class='channel' data-link="https://livess.ncare.live/live-orgin/channeli-8-org.stream/chunks.m3u8"><img src="img/channeli.jpg" alt=""></a></li>
                            <li class="Bangla"><a id="myLink" title="Click" href="javascript:;" class='channel' data-link="https://mtv.sunplex.live/MAASRANGA-TV/tracks-v1a1/mono.m3u8"><img src="img/maasranga.jpg" alt=""></a></li>
                            <li class="Bangla"><a id="myLink" title="Click" href="javascript:;" class='channel' data-link="https://livess.ncare.live/live-orgin/somoyt000011226615544544.stream/chunks.m3u8"><img src="img/SOMOY TV.jpg" alt=""></a></li>
                            <li class="Bangla"><a id="myLink" title="Click" href="javascript:;" class='channel' data-link="http://103.107.79.87:8080/CH8109HD04/tracks-v1a1/mono.m3u8"><img src="img/Zee_Bangla_Cinema.jpg" alt=""></a></li> 
                            <li class="Bangla"><a id="myLink" title="Click" href="javascript:;" class='channel' data-link="https://catchup.yuppcdn.net/amazonv2/36/preview/colorsbanglahd/master/chunklist.m3u8"><img src="img/colore-bangla-cinema.jpg" alt=""></a></li> 
                            <li class="Bangla"><a id="myLink" title="Click" href="javascript:;" class='channel' data-link="http://103.107.79.87:8080/CH8110HD02/tracks-v1a1/mono.m3u8"><img src="img/jalsha_movies.jpg" alt=""></a></li>
                            <li class="Bangla"><a id="myLink" title="Click" href="javascript:;" class='channel' data-link="http://103.107.79.87:8080/CH8110HD05/tracks-v1a1/mono.m3u8"><img src="img/colorsbangla.jpg" alt=""></a></li> 
                            <li class="Bangla"><a id="myLink" title="Click" href="javascript:;" class='channel' data-link="http://103.107.79.87:8080/CH8110SD03/tracks-v1a1/mono.m3u8"><img src="img/zeebanglahd.jpg" alt=""></a></li>
                            <li class="Bangla"><a id="myLink" title="Click" href="javascript:;" class='channel' data-link="http://103.107.79.87:8080/CH8110SD01/tracks-v1a1/mono.m3u8"><img src="img/starjalsha.jpg" alt=""></a></li>
                            <li class="Bangla"><a id="myLink" title="Click" href="javascript:;" class='channel' data-link="https://d75dqofg5kmfk.cloudfront.net/bpk-tv/Sangeetbangla/default/sangeetbangla.m3u8"><img src="img/sangeet.png" alt=""></a></li>
                            <li class="Bangla"><a id="myLink" title="Click" href="javascript:;" class='channel' data-link="https://live-bangla.akamaized.net/liveabr/pub-iobanglakp3sff/live_720p/chunks.m3u8"><img src="img/Enterr 10 Bangla HD.jpg" alt=""></a></li>
                            <li class="Bangla"><a id="myLink" title="Click" href="javascript:;" class='channel' data-link="http://idvd.multitvsolution.com/idvo/khushboo.m3u8"><img src="img/khushboo.jpg" alt=""></a></li>                                                                                                                                                               
                            <li class="Bangla"><a id="myLink" title="Click" href="javascript:;" class='channel' data-link="https://livess.ncare.live/live-orgin/jamuna-test-sample-ok.stream/chunks.m3u8"><img src="img/Jamuna.jpg" alt=""></a></li>
                            <li class="Bangla"><a id="myLink" title="Click" href="javascript:;" class='channel' data-link="http://cdn01.palki.tv/live/GaanBangla-M/tracks-v2a1/mono.m3u8"><img src="img/gb.png" alt=""></a></li>
                            <li class="Bangla"><a id="myLink" title="Click" href="javascript:;" class='channel' data-link="http://103.107.79.87:8080/CH8108SD01/tracks-v1a1/mono.m3u8"><img src="img/duranta.jpg" alt=""></a></li>
                            <li class="Bangla"><a id="myLink" title="Click" href="javascript:;" class='channel' data-link="hls/nagoriktv.m3u8"><img src="img/nagorik.jpg" alt=""></a></li>
                            <li class="Bangla"><a id="myLink" title="Click" href="javascript:;" class='channel' data-link="https://livess.ncare.live/live-orgin/atnbd-8-org.stream/chunks.m3u8"><img src="img/ATN Bangla.jpg" alt=""></a></li>
                            <li class="Bangla"><a id="myLink" title="Click" href="javascript:;" class='channel' data-link="https://livess.ncare.live/live-orgin/banglav000.stream/chunks.m3u8"><img src="img/banglavision.jpg" alt=""></a></li>
                            <li class="Bangla"><a id="myLink" title="Click" href="javascript:;" class='channel' data-link="http://176.119.29.52/live.ts?channelId=83&uid=5060&deviceMac=00:1A:79:73:9C:A1"><img src="img/atn-news.png" alt=""></a></li>
                            <li class="Bangla"><a id="myLink" title="Click" href="javascript:;" class='channel' data-link="https://fr.tvanondo.online/sananda/video.m3u8"><img src="img/Sanonda TV.jpg" alt=""></a></li>
                            <li class="Bangla"><a id="myLink" title="Click" href="javascript:;" class='channel' data-link="https://yupptvcatchupire.yuppcdn.net/preview/rupashibangala/1800.m3u8?hdnts=st=1712228244~exp=1712228844~acl=!*/36/preview/rupashibangala/*!yuppTVCom_5_6098663_da15f6c240284079_BD_103.112.55.42/payload/yuppTVCom_5_6098663_da15f6c240284079_BD_103.112.55.42/*~hmac=3afb19b3302853c3e145580d09027e414f33449b996870949f0f4d06746ddddd"><img src="img/Rupashi Bangla.jpg" alt=""></a></li>
                            <li class="Bangla"><a id="myLink" title="Click" href="javascript:;" class='channel' data-link="https://livess.ncare.live/live-orgin/moviebanglalink2.stream/chunks.m3u8"><img src="img/MOVIE BANGLA.png" alt=""></a></li>
                            <li class="Bangla"><a id="myLink" title="Click" href="javascript:;" class='channel' data-link="https://www.btvlive.gov.bd/streams/b6a24e14-cc0f-420f-96de-1f1cf424555d/BD/d96eb7f4-83c2-4472-9597-3568390a8ebf/d96eb7f4-83c2-4472-9597-3568390a8ebf_3_playlist.m3u8"><img src="img/BTV TV.png" alt=""></a></li>
                            <li class="Bangla"><a id="myLink" title="Click" href="javascript:;" class='channel' data-link="https://livess.ncare.live/live-orgin/dbcnews.stream/chunks.m3u8"><img src="img/DBC News.png" alt=""></a></li>
                            <li class="Bangla"><a id="myLink" title="Click" href="javascript:;" class='channel' data-link="https://deshitv.deshitv24.net/live/myStream/playlist.m3u8"><img src="img/Deshi TV.png" alt=""></a></li>
                            <li class="Bangla"><a id="myLink" title="Click" href="javascript:;" class='channel' data-link="http://210.4.72.204/hls-live/livepkgr/_definst_/liveevent/livestream3.m3u8"><img src="img/Eekushey TV.png" alt=""></a></li>
                            <li class="Bangla"><a id="myLink" title="Click" href="javascript:;" class='channel' data-link="https://livess.ncare.live/live-orgin/globaltv.stream/chunks.m3u8"><img src="img/EKHON TV.jpg" alt=""></a></li>
                            <li class="Bangla"><a id="myLink" title="Click" href="javascript:;" class='channel' data-link="https://livess.ncare.live/live-orgin/ntvuk00332211.stream/chunks.m3u8"><img src="img/NTV.png" alt=""></a></li>
                            <li class="Bangla"><a id="myLink" title="Click" href="javascript:;" class='channel' data-link="https://livess.ncare.live/live-orgin/jagonews24.stream/chunks.m3u8"><img src="img/Jago News 24.jpg" alt=""></a></li>
                            <li class="Bangla"><a id="myLink" title="Click" href="javascript:;" class='channel' data-link="https://livess.ncare.live/live-orgin/jagoronitv.stream/chunks.m3u8"><img src="img/Jagoroni TV.jpg" alt=""></a></li>
                            <li class="Bangla"><a id="myLink" title="Click" href="javascript:;" class='channel' data-link="https://livess.ncare.live/live-orgin/rtv-sg.stream/chunks.m3u8"><img src="img/rtv.png" alt=""></a></li>
                            <li class="Bangla"><a id="myLink" title="Click" href="javascript:;" class='channel' data-link="https://livess.ncare.live/live-orgin/biswabanglatv.stream/chunks.m3u8"><img src="img/BISWA BANGLA TV.png" alt=""></a></li>
                            <li class="Bangla"><a id="myLink" title="Click" href="javascript:;" class='channel' data-link="https://livess.ncare.live/live-orgin/deeptotv.stream/chunks.m3u8"><img src="img/dipto.jpg" alt=""></a></li>
                            <li class="Bangla"><a id="myLink" title="Click" href="javascript:;" class='channel' data-link="https://livess.ncare.live/live-orgin/greentv.stream/chunks.m3u8"><img src="img/Green TV.jpg" alt=""></a></li>
                            <li class="Bangla"><a id="myLink" title="Click" href="javascript:;" class='channel' data-link="https://web.nandansyst.com/hls/nandan.m3u8"><img src="img/NANDAN Tv.png" alt=""></a></li>
                            <li class="Bangla"><a id="myLink" title="Click" href="javascript:;" class='channel' data-link="http://103.149.142.133/0.m3u8"><img src="img/Cumilla TV 24.jpg" alt=""></a></li>
                            <li class="Bangla"><a id="myLink" title="Click" href="javascript:;" class='channel' data-link="https://livess.ncare.live/live-orgin/nrb-eu.stream/chunks.m3u8"><img src="img/NRB HD Tv.png" alt=""></a></li>
                            <li class="Bangla"><a id="myLink" title="Click" href="javascript:;" class='channel' data-link="https://livess.ncare.live/live-orgin/bijoy00.stream/chunks.m3u8"><img src="img/Bijoy TV.jpg" alt=""></a></li>
                            <li class="Bangla"><a id="myLink" title="Click" href="javascript:;" class='channel' data-link="https://livess.ncare.live/live-orgin/mohonatv00000223232244556633.stream/chunks.m3u8"><img src="img/Mohona TV HD.jpg" alt=""></a></li>
                            <li class="Bangla"><a id="myLink" title="Click" href="javascript:;" class='channel' data-link="https://livess.ncare.live/live-orgin/boishakhitv-org.stream/chunks.m3u8"><img src="img/boishakhi.png" alt=""></a></li>
                            <li class="Bangla"><a id="myLink" title="Click" href="javascript:;" class='channel' data-link="https://livess.ncare.live/live-orgin/independent-8-org.stream/chunks.m3u8"><img src="img/independent.jpg" alt=""></a></li>
                            <li class="Bangla"><a id="myLink" title="Click" href="javascript:;" class='channel' data-link="https://livess.ncare.live/live-orgin/news24local.stream/chunks.m3u8"><img src="img/News 24.png" alt=""></a></li>
                            <li class="Bangla"><a id="myLink" title="Click" href="javascript:;" class='channel' data-link="https://d75dqofg5kmfk.cloudfront.net/bpk-tv/24ghanta/default/index.m3u8"><img src="img/Zee 24 Ghanta.png" alt=""></a></li>
                            <li class="Bangla"><a id="myLink" title="Click" href="javascript:;" class='channel' data-link="https://abplivetv.akamaized.net/hls/live/2043012/ananda/master.m3u8"><img src="img/ABP Ananda.png" alt=""></a></li>
                            <li class="Bangla"><a id="myLink" title="Click" href="javascript:;" class='channel' data-link="http://banglajagotv.livebox.co.in:80/banglajagohls/24x7.m3u8"><img src="img/Bangla Jago.jpg" alt=""></a></li>
                            <li class="Bangla"><a id="myLink" title="Click" href="javascript:;" class='channel' data-link="https://dyjmyiv3bp2ez.cloudfront.net/pub-iotv9banaen8yq/liveabr/playlist.m3u8"><img src="img/TV9 Bangla.png" alt=""></a></li>
                            <li class="Bangla"><a id="myLink" title="Click" href="javascript:;" class='channel' data-link="https://livess.ncare.live/live-orgin/satvoff5666.stream/chunks.m3u8"><img src="img/SATV.jpg" alt=""></a></li>
                            <li class="Bangla"><a id="myLink" title="Click" href="javascript:;" class='channel' data-link="https://mtlivestream.site/asian/ytlive/index.m3u8"><img src="img/Asian_TV.png" alt=""></a></li>
                            <li class="Bangla"><a id="myLink" title="Click" href="javascript:;" class='channel' data-link="https://livess.ncare.live/live-orgin/independent-8-org.stream/chunks.m3u8"><img src="img/independent.jpg" alt=""></a></li>
                             
                                                         
                            <li class="Music"><a id="myLink" title="Click" href="javascript:;" class='channel' data-link="https://d2q8p4pe5spbak.cloudfront.net/bpk-tv/9XM/9XM.isml/index.m3u8"><img src="img/9xm.png" alt=""></a></li>
                            <li class="Music"><a id="myLink" title="Click" href="javascript:;" class='channel' data-link="https://sabliveyupp.akamaized.net/v1/manifest/611d79b11b77e2f571934fd80ca1413453772ac7/sablive_https/99b90c7d-7a0c-46e0-9d54-fdc9be35b0b4/1.m3u8"><img src="img/masti.jpg" alt=""></a></li>
                            <li class="Music"><a id="myLink" title="Click" href="javascript:;" class='channel' data-link="https://d75dqofg5kmfk.cloudfront.net/bpk-tv/Musicindia/default/musicindia-audio_208482_und=208000-video=2137600.m3u8"><img src="img/MUSIC INDIA.jpg" alt=""></a></li>
                            <li class="Music"><a id="myLink" title="Click" href="javascript:;" class='channel' data-link="https://d75dqofg5kmfk.cloudfront.net/bpk-tv/Sangeetbangla/default/index.m3u8"><img src="img/sangeet.png" alt=""></a></li>
                            <li class="Music"><a id="myLink" title="Click" href="javascript:;" class='channel' data-link="https://d1g8wgjurz8via.cloudfront.net/bpk-tv/9Xjhakaas/default/9Xjhakaas.m3u8"><img src="img/9X JHAKAAS.jpg" alt=""></a></li>
                            <li class="Music"><a id="myLink" title="Click" href="javascript:;" class='channel' data-link="https://d1g8wgjurz8via.cloudfront.net/bpk-tv/Mtvbeats/default/mtvbeats.m3u8"><img src="img/MTV BEETS.jpg" alt=""></a></li>
                            <li class="Music"><a id="myLink" title="Click" href="javascript:;" class='channel' data-link="https://d1g8wgjurz8via.cloudfront.net/bpk-tv/9Xtashan/default/9Xtashan.m3u8"><img src="img/9X TASHAN.jpg" alt=""></a></li>
                            <li class="Music"><a id="myLink" title="Click" href="javascript:;" class='channel' data-link="http://103.199.161.254/Content/7smusic/Live/Channel(7smusic)/index.m3u8"><img src="img/7S Music.jpg" alt=""></a></li>
                            <li class="Music"><a id="myLink" title="Click" href="javascript:;" class='channel' data-link="https://d75dqofg5kmfk.cloudfront.net/bpk-tv/Zoom/default/zoom.m3u8"><img src="img/zoom.jpg" alt=""></a></li>
                            
                            
                            
                            
                            <li class="Cartoon"><a id="myLink" title="Click" href="javascript:;" class='channel' data-link="http://195.26.87.217/live.ts?channelId=187&uid=7435&deviceMac=00:1A:79:51:4B:3A"><img src="img/sonyyay.jpg" alt=""></a></li>
                            <li class="Cartoon"><a id="myLink" title="Click" href="javascript:;" class='channel' data-link="hls/nick.m3u8"><img src="img/nick.jpg" alt=""></a></li>
                            <li class="Cartoon"><a id="myLink" title="Click" href="javascript:;" class='channel' data-link="https://i.mjh.nz/SamsungTVPlus/INBD13000205L.m3u8"><img src="img/cn.png" alt=""></a></li>
                            <li class="Cartoon"><a id="myLink" title="Click" href="javascript:;" class='channel' data-link="https://i.mjh.nz/SamsungTVPlus/INBD1300021X3.m3u8"><img src="img/pogo.jpg" alt=""></a></li>



                        </ul>
                    </div>
                </div>

            </div>
        </div>

     
                                        

        <script src="https://unpkg.com/video.js@7.10.2/dist/video.js"></script>
        <script src="https://unpkg.com/@videojs/http-streaming@2.4.2/dist/videojs-http-streaming.min.js"></script>
        <script src="js/scripts.js"></script>

    </body>
</html>


