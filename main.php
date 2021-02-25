<?php $theme=(isset($_COOKIE['theme']) && $_COOKIE['theme']==="1"?"b":"w");?><!DOCTYPE html>
<html lang="<?=$langhtml?>" prefix="og: https://ogp.me/ns#">
 <head>
<!--
  *****
  <?=$lang=="ru"?include $_SERVER['DOCUMENT_ROOT'].'/common/metrica.php':''?>
-->
  <meta charset="utf-8">
  <title id="title"><?=$langs[$lang][0]?></title>
  <meta property="og:site_name" content="MathDF" />
  <meta property="og:title" content="<?=$nameOg?>" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://example.com<?=($lang==$defaultLang?"":"/".$lang."/")?>" />
  <meta property="og:image" content="https://example.com/logo/og_image_<?=$lang?>.png" />
  <meta property="og:image:width" content="500" />
  <meta property="og:image:height" content="230" />
  <meta property="og:description" content="<?=$desc?>" />
  <meta name="Description" content="<?=$desc?>" />
  <meta name="keywords" content="<?=$keywords?>" />
  <meta name="robots" content="index, follow" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="theme-color" content="#3c3c3c" />
  <link rel="alternate" hreflang="zh-CN" href="https://example.com/cn/" />
  <link rel="alternate" hreflang="de" href="https://example.com/de/" />
  <link rel="alternate" hreflang="en" href="https://example.com" />
  <link rel="alternate" hreflang="es-ES" href="https://example.com/es/" />
  <link rel="alternate" hreflang="fr-FR" href="https://example.com/fr/" />
  <link rel="alternate" hreflang="it" href="https://example.com/it/" />
  <link rel="alternate" hreflang="ko" href="https://example.com/kr/" />
  <link rel="alternate" hreflang="lt" href="https://example.com/lt/" />
  <link rel="alternate" hreflang="pl" href="https://example.com/pl/" />
  <link rel="alternate" hreflang="pt-PT" href="https://example.com/pt/" />
  <link rel="alternate" hreflang="ru" href="https://example.com/ru/" />
  <link rel="canonical" href="https://example.com<?=$defaultLang!=$lang?"/".$lang."/":""?>" />
  <link type="image/x-icon" rel="shortcut icon" href="https://example.com/favicon.ico" />
  <link type="image/png" sizes="16x16" rel="icon" href="https://example.com/favicon-16x16.png" />
  <link type="image/png" sizes="32x32" rel="icon" href="https://example.com/favicon-32x32.png" />
  <link type="image/png" sizes="96x96" rel="icon" href="https://example.com/favicon-96x96.png" />
  <link type="image/png" sizes="120x120" rel="icon" href="https://example.com/favicon-120x120.png" />
  <link rel="stylesheet" type="text/css" href="/sheets.css?<?=filemtime($_SERVER['DOCUMENT_ROOT']."/sheets.css")?>" />
  <link rel="stylesheet" type="text/css" href="/normalize.css" />
 </head>
 <body class="site-body t<?=$theme?> scroll-theme start-render">
  <header id="header">
    <div id="settings">
    <select id="globlang" class="outline-off trans-05 letter-space-1">
		<option value='cn' <?=($lang=='cn'?"selected":"")?>>中文 (cn)</option>
		<option value='de' <?=($lang=='de'?"selected":"")?>>Deutsche (de)</option>
		<option value='en' <?=($lang=='en'?"selected":"")?>>English (en)</option>
		<option value='es' <?=($lang=='es'?"selected":"")?>>Español (es)</option>
		<option value='fr' <?=($lang=='fr'?"selected":"")?>>Français (fr)</option>
		<option value='it' <?=($lang=='it'?"selected":"")?>>Italiano (it)</option>
		<option value='kr' <?=($lang=='kr'?"selected":"")?>>한국어 (kr)</option>
		<option value='lt' <?=($lang=='lt'?"selected":"")?>>Lietuvis (lt)</option>
		<option value='pl' <?=($lang=='pl'?"selected":"")?>>Polskie (pl)</option>
		<option value='pt' <?=($lang=='pt'?"selected":"")?>>Português (pt)</option>
		<option value='ru' <?=($lang=='ru'?"selected":"")?>>Русский (ru)</option>
    </select>
    <span id="lightnight" class="trans-1 letter-space-1">
    <span id="illuminate-theme"><?=$langs[$lang][7]?></span>: <span id="sunmoon"></span>
    </span>
    </div>
    <div class="head-content">
    	<div class="logo">
			<img class="non-select logo-offset" src="/logo/logo.svg" width="296" height="55" alt="<?=$logo?>">
   		</div>
		<nav class="head-links">
	  	 <div>
		  <ul class="topmenu non-select letter-space-1">
			  <li class="menu-move trans-menu-05"><div id="calcs"><div id="icon-calcs"></div><span id=tocalc><?=$langs[$lang][12]?></span><div class="fa"></div></div>
			  <ul class="submenu trans-menu-05">
				<li><a id="tomat" href="https://example.com/mat/<?=$lang!=$defaultLang?$lang."/":""?>"><?=$langs[$lang][11]?></a></li>
				<li><a id="toint" href="https://example.com/int/<?=$lang!=$defaultLang?$lang."/":""?>"><?=$langs[$lang][8]?></a></li>
				<li><a id="toder" href="https://example.com/der/<?=$lang!=$defaultLang?$lang."/":""?>"><?=$langs[$lang][10]?></a></li>
				<li><a id="todif" href="https://example.com/dif/<?=$lang!=$defaultLang?$lang."/":""?>"><?=$langs[$lang][9]?></a></li>
				<li><a id="tocal" href="https://example.com/calc/<?=$lang!=$defaultLang?$lang."/":""?>"><?=$langs[$lang][13]?></a></li>
			  </ul>
			</li>
		  </ul>
		 </div>
		</nav>
    </div>
  </header>
  <main class="site-content">
  <div id="content">
   <h1 class="h1 letter-space-1"><span id="kind" class="font-mid-size"><?=$langs[$lang][1]?></span></h1>
   <div class="ul list-types letter-space-1">
	   <div class="li"><h2 class="h2"><a href="https://example.com/dif/<?=$lang!=$defaultLang?$lang."/":""?>"><span class="round-squad r-s-color-4"></span><span class="calc-type"><?=$langs[$lang][9]?></span><span class="calc-math calc-math-4 non-select"><script type="math/tex" id="MathJax-Element-1004">y''=\cos\left(x\right)</script></span></a></h2><div class="a-gap"></div></div><?=include $_SERVER['DOCUMENT_ROOT'].'/common/description_dif.php';?>
   	   <div class="li"><h2 class="h2"><a href="https://example.com/int/<?=$lang!=$defaultLang?$lang."/":""?>"><span class="round-squad r-s-color-2"></span><span class="calc-type"><?=$langs[$lang][8]?></span><span class="calc-math calc-math-2 non-select"><span class="draw-pen"></span><script type="math/tex; mode=display" id="MathJax-Element-1002">\int{\sin^2\left(x\right)}{\;\mathrm{d}x}</script></span></a></h2><div class="a-gap"></div></div><?=include $_SERVER['DOCUMENT_ROOT'].'/common/description_int.php';?>
	   <div class="li"><h2 class="h2"><a href="https://example.com/der/<?=$lang!=$defaultLang?$lang."/":""?>"><span class="round-squad r-s-color-3"></span><span class="calc-type"><?=$langs[$lang][10]?></span><span class="calc-math calc-math-3 non-select"><script type="math/tex" id="MathJax-Element-1003">\left(\ln\left(x^2\right)\right)'_x</script></span></a></h2><div class="a-gap"></div></div><?=include $_SERVER['DOCUMENT_ROOT'].'/common/description_der.php';?>
	   <div class="li"><h2 class="h2"><a href="https://example.com/mat/<?=$lang!=$defaultLang?$lang."/":""?>"><span class="round-squad r-s-color-1"></span><span class="calc-type"><?=$langs[$lang][11]?></span><span class="calc-math calc-math-1 non-select"><script type="math/tex" id="MathJax-Element-1001">\mathrm{A}^{-1}\,\mathrm{B}</script></span></a></h2><div class="a-gap"></div></div><?=include $_SERVER['DOCUMENT_ROOT'].'/common/description_mat.php';?>
	</div>
	<div id="arrow-top" class="hide hidden non-select">
        <svg class="arrow-icon" xmlns="http://www.w3.org/2000/svg" width="55" height="55" viewBox="0 0 40 42">
            <g fill="none" stroke="#770000" stroke-width="3" stroke-linejoin="round" stroke-miterlimit="10">
                <circle class="arrow-iconcircle" cx="20" cy="20" r="18"></circle>
                <path class="arrow-icon--arrow" d="M27.5 20L20 12.5L12.5 20M20 12.5v16"></path>
            </g>
        </svg>
    </div>
  </div>
  <div class="content-to-footer-gap"></div>
  </main>
<div id="share">
<div class="top-right">
<?=include $_SERVER['DOCUMENT_ROOT'].'/common/share_vk.php';?>
<?=include $_SERVER['DOCUMENT_ROOT'].'/common/share_fb.php';?>
<?=include $_SERVER['DOCUMENT_ROOT'].'/common/share_tw.php';?>
</div>
</div>
   <footer id="footer"><div class="in-footer"><span id="rights"><?=$langs[$lang][2]?></span><span class="oversize"> &copy; </span><span id="owner" class="oversize"><?=$langs[$lang][3]?></span><span class="right-side"><span class="oversize hide"><span id="last-modified"><?=$langs[$lang][5]?></span>: </span><span id="last-date">2020-2021</span></span></div><span id="contact"><?=$langs[$lang][4]?></span>:<span class="notranslate"> math.gorecki<span id="fake-email-service" class="mail">moc.liamg@</span><span id="email-service" class="hide">@gmail.com</span></span></footer>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.7/MathJax.js"></script>
  <script>
  MathJax.Hub.Config({showProcessingMessages:!1,messageStyle:"none","fast-preview":{disabled:!1},jax:["input/TeX","output/CommonHTML"],extensions:["tex2jax.js"],tex2jax:{inlineMath:[["\\(","\\)"]],processEscapes:true, skipTags: ["span"]},TeX:{extensions:["AMSmath.js","AMSsymbols.js","noErrors.js","noUndefined.js"]},showMathMenu:!1});
  </script>
  <script>var defaultLang="<?=$defaultLang?>";</script>
  <script src="/script-min.js?<?=filemtime($_SERVER['DOCUMENT_ROOT']."/script-min.js")?>"></script>
 </body>
</html>