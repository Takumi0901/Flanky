<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <title>Document</title>
  <link rel="stylesheet" href="dist/css/font-awesome.min.css">
  <link rel="stylesheet" href="dist/css/app.min.css">
  <style>
    .box {
      padding: 8px 16px;
      text-align: center;
      background: #f4f4f4;
      border: solid 1px #ccc;
      font-size: 14px;
    }
  </style>
  <style type="text/css">
    html{font-family: sans-serif;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%}body{margin: 0}article,aside,details,figcaption,figure,footer,header,hgroup,main,nav,section,summary{display: block}audio,canvas,progress,video{display: inline-block;vertical-align: baseline}audio:not([controls]){display: none;height: 0}[hidden],template{display: none}a{background: transparent}a:active,a:hover{outline: 0}abbr[title]{border-bottom: 1px dotted}b,strong{font-weight: bold}dfn{font-style: italic}mark{background: #ff0;color: #000}small{font-size: 80%}sub,sup{font-size: 75%;line-height: 0;position: relative;vertical-align: baseline}sup{top: -0.5em}sub{bottom: -0.25em}img{border: 0}svg:not(:root){overflow: hidden}figure{margin: 1em 40px}hr{box-sizing: content-box;height: 0}pre{overflow: auto}code,kbd,pre,samp{font-family: monospace, monospace;font-size: 1em}button,input,optgroup,select,textarea{color: inherit;font: inherit;margin: 0}button{overflow: visible}button,select{text-transform: none}button,html input[type="button"],input[type="reset"],input[type="submit"]{-webkit-appearance: button;cursor: pointer}button[disabled],html input[disabled]{cursor: default}button::-moz-focus-inner,input::-moz-focus-inner{border: 0;padding: 0}input{line-height: normal}input[type="checkbox"],input[type="radio"]{box-sizing: border-box;padding: 0}input[type="number"]::-webkit-inner-spin-button,input[type="number"]::-webkit-outer-spin-button{height: auto}input[type="search"]{-webkit-appearance: textfield;box-sizing: content-box}input[type="search"]::-webkit-search-cancel-button,input[type="search"]::-webkit-search-decoration{-webkit-appearance: none}fieldset{border: 1px solid #c0c0c0;margin: 0 2px;padding: 0.35em 0.625em 0.75em}legend{border: 0;padding: 0}textarea{overflow: auto}optgroup{font-weight: bold}table{border-collapse: collapse;border-spacing: 0}td,th{padding: 0}*{box-sizing: border-box}input,select,textarea,button{font: 13px/1.4 Helvetica, arial, freesans, clean, sans-serif, "Segoe UI Emoji", "Segoe UI Symbol"}body{min-width: 1020px;font: 13px/1.4 Helvetica, arial, freesans, clean, sans-serif, "Segoe UI Emoji", "Segoe UI Symbol";color: #333;background-color: #fff}a{color: #4183c4;text-decoration: none}a:hover,a:active{text-decoration: underline}hr,.rule{height: 0;margin: 15px 0;overflow: hidden;background: transparent;border: 0;border-bottom: 1px solid #ddd}hr:before,.rule:before{display: table;content: ""}hr:after,.rule:after{display: table;clear: both;content: ""}small{font-size: 90%}blockquote{margin: 0}.lead{margin-bottom: 30px;font-size: 20px;font-weight: 300;color: #555}.text-muted{color: #999}.text-danger{color: #bd2c00}.text-emphasized{font-weight: bold;color: #333}ul,ol{padding: 0;margin-top: 0;margin-bottom: 0}ol ol,ul ol{list-style-type: lower-roman}ul ul ol,ul ol ol,ol ul ol,ol ol ol{list-style-type: lower-alpha}dd{margin-left: 0}tt,code{font-family: Consolas, "Liberation Mono", Menlo, Courier, monospace;font-size: 12px}pre{margin-top: 0;margin-bottom: 0;font: 12px Consolas, "Liberation Mono", Menlo, Courier, monospace}#realtime .status{overflow: visible;position: absolute;top: -5px;left: 0;background: url("/public/images/github-status.png");width: 26px;height: 26px;display: block;margin: 0 5px 0 0}#realtime .up{background-position: 0 0}#realtime .problem{background-position: 0 -53px}#realtime .down{background-position: 0 -26px}.container{max-width: 920px;margin: 0 auto 20px auto}#header{background: #FAFAFA;background: -moz-linear-gradient(#FAFAFA, #EAEAEA);background: -webkit-linear-gradient(#FAFAFA, #EAEAEA);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr='#fafafa', endColorstr='#eaeaea')";border-bottom: 1px solid #CACACA;box-shadow: 0 1px 0 rgba(255, 255, 255, 0.4),0 0 10px rgba(0, 0, 0, 0.1)}#markup{padding: 3px}#markup article{padding-top: 30px}.markdown-body{overflow: hidden;font-family: "Helvetica Neue", Helvetica, "Segoe UI", Arial, freesans, sans-serif;font-size: 16px;line-height: 1.6;word-wrap: break-word}.markdown-body>*:first-child{margin-top: 0 !important}.markdown-body>*:last-child{margin-bottom: 0 !important}.markdown-body .absent{color: #c00}.markdown-body .anchor{position: absolute;top: 0;left: 0;display: block;padding-right: 6px;padding-left: 30px;margin-left: -30px}.markdown-body .anchor:focus{outline: none},,,.markdown-body h4,.markdown-body h5,.markdown-body h6{position: relative;margin-top: 1em;margin-bottom: 16px;font-weight: bold;line-height: 1.4} .octicon-link, .octicon-link, .octicon-link,.markdown-body h4 .octicon-link,.markdown-body h5 .octicon-link,.markdown-body h6 .octicon-link{display: none;color: #000;vertical-align: middle}:hover .anchor,:hover .anchor,:hover .anchor,.markdown-body h4:hover .anchor,.markdown-body h5:hover .anchor,.markdown-body h6:hover .anchor{padding-left: 8px;margin-left: -30px;text-decoration: none}:hover .anchor .octicon-link,:hover .anchor .octicon-link,:hover .anchor .octicon-link,.markdown-body h4:hover .anchor .octicon-link,.markdown-body h5:hover .anchor .octicon-link,.markdown-body h6:hover .anchor .octicon-link{display: inline-block} tt, code, tt, code, tt, code,.markdown-body h4 tt,.markdown-body h4 code,.markdown-body h5 tt,.markdown-body h5 code,.markdown-body h6 tt,.markdown-body h6 code{font-size: inherit}{padding-bottom: 0.3em;font-size: 2.25em;line-height: 1.2;border-bottom: 1px solid #eee} .anchor{line-height: 1}{padding-bottom: 0.3em;font-size: 1.75em;line-height: 1.225;border-bottom: 1px solid #eee} .anchor{line-height: 1}{font-size: 1.5em;line-height: 1.43} .anchor{line-height: 1.2}.markdown-body h4{font-size: 1.25em}.markdown-body h4 .anchor{line-height: 1.2}.markdown-body h5{font-size: 1em}.markdown-body h5 .anchor{line-height: 1.1}.markdown-body h6{font-size: 1em;color: #777}.markdown-body h6 .anchor{line-height: 1.1}.markdown-body p,.markdown-body blockquote,.markdown-body ul,.markdown-body ol,.markdown-body dl,.markdown-body table,.markdown-body pre{margin-top: 0;margin-bottom: 16px}.markdown-body hr{height: 4px;padding: 0;margin: 16px 0;background-color: #e7e7e7;border: 0 none}.markdown-body ul,.markdown-body ol{padding-left: 2em}.markdown-body ul.no-list,.markdown-body ol.no-list{padding: 0;list-style-type: none}.markdown-body ul ul,.markdown-body ul ol,.markdown-body ol ol,.markdown-body ol ul{margin-top: 0;margin-bottom: 0}.markdown-body li>p{margin-top: 16px}.markdown-body dl{padding: 0}.markdown-body dl dt{padding: 0;margin-top: 16px;font-size: 1em;font-style: italic;font-weight: bold}.markdown-body dl dd{padding: 0 16px;margin-bottom: 16px}.markdown-body blockquote{padding: 0 15px;color: #777;border-left: 4px solid #ddd}.markdown-body blockquote>:first-child{margin-top: 0}.markdown-body blockquote>:last-child{margin-bottom: 0}.markdown-body table{display: block;width: 100%;overflow: auto;word-break: normal;word-break: keep-all}.markdown-body table th{font-weight: bold}.markdown-body table th,.markdown-body table td{padding: 6px 13px;border: 1px solid #ddd}.markdown-body table tr{background-color: #fff;border-top: 1px solid #ccc}.markdown-body table tr:nth-child(2n){background-color: #f8f8f8}.markdown-body span.frame{display: block;overflow: hidden}.markdown-body span.frame>span{display: block;float: left;width: auto;padding: 7px;margin: 13px 0 0;overflow: hidden;border: 1px solid #ddd}.markdown-body span.frame span img{display: block;float: left}.markdown-body span.frame span span{display: block;padding: 5px 0 0;clear: both;color: #333}.markdown-body span.align-center{display: block;overflow: hidden;clear: both}.markdown-body span.align-center>span{display: block;margin: 13px auto 0;overflow: hidden;text-align: center}.markdown-body span.align-center span img{margin: 0 auto;text-align: center}.markdown-body span.align-right{display: block;overflow: hidden;clear: both}.markdown-body span.align-right>span{display: block;margin: 13px 0 0;overflow: hidden;text-align: right}.markdown-body span.align-right span img{margin: 0;text-align: right}.markdown-body span.float-left{display: block;float: left;margin-right: 13px;overflow: hidden}.markdown-body span.float-left span{margin: 13px 0 0}.markdown-body span.float-right{display: block;float: right;margin-left: 13px;overflow: hidden}.markdown-body span.float-right>span{display: block;margin: 13px auto 0;overflow: hidden;text-align: right}.markdown-body code,.markdown-body tt{padding: 0;padding-top: 0.2em;padding-bottom: 0.2em;margin: 0;font-size: 85%;background-color: rgba(0,0,0,0.04);border-radius: 3px}.markdown-body code:before,.markdown-body code:after,.markdown-body tt:before,.markdown-body tt:after{letter-spacing: -0.2em;content: "\00a0"}.markdown-body code br,.markdown-body tt br{display: none}.markdown-body del code{text-decoration: inherit}.markdown-body pre>code{padding: 0;margin: 0;font-size: 100%;word-break: normal;white-space: pre;background: transparent;border: 0}.markdown-body .highlight{margin-bottom: 16px}.markdown-body .highlight pre,.markdown-body pre{padding: 16px;overflow: auto;font-size: 85%;line-height: 1.45;background-color: #f7f7f7;border-radius: 3px}.markdown-body .highlight pre{margin-bottom: 0;word-break: normal}.markdown-body pre{word-wrap: normal}.markdown-body pre code,.markdown-body pre tt{display: inline;max-width: initial;padding: 0;margin: 0;overflow: initial;line-height: inherit;word-wrap: normal;background-color: transparent;border: 0}.markdown-body pre code:before,.markdown-body pre code:after,.markdown-body pre tt:before,.markdown-body pre tt:after{content: normal}.markdown-body kbd{display: inline-block;padding: 3px 5px;font-size: 11px;line-height: 10px;color: #555;vertical-align: middle;background-color: #fcfcfc;border: solid 1px #ccc;border-bottom-color: #bbb;border-radius: 3px;box-shadow: inset 0 -1px 0 #bbb}.codehilite{background: #ffffff}.codehilite .c{color: #999988;font-style: italic}.codehilite .err{color: #a61717;background-color: #e3d2d2}.codehilite .k{color: #000000;font-weight: bold}.codehilite .o{color: #000000;font-weight: bold}.codehilite .cm{color: #999988;font-style: italic}.codehilite .cp{color: #999999;font-weight: bold}.codehilite .c1{color: #999988;font-style: italic}.codehilite .cs{color: #999999;font-weight: bold;font-style: italic}.codehilite .gd{color: #000000;background-color: #ffdddd}.codehilite .gd .x{color: #000000;background-color: #ffaaaa}.codehilite .ge{color: #000000;font-style: italic}.codehilite .gr{color: #aa0000}.codehilite .gh{color: #999999}.codehilite .gi{color: #000000;background-color: #ddffdd}.codehilite .gi .x{color: #000000;background-color: #aaffaa}.codehilite .go{color: #888888}.codehilite .gp{color: #555555}.codehilite .gs{font-weight: bold}.codehilite .gu{color: #aaaaaa}.codehilite .gt{color: #aa0000}.codehilite .kc{color: #000000;font-weight: bold}.codehilite .kd{color: #000000;font-weight: bold}.codehilite .kp{color: #000000;font-weight: bold}.codehilite .kr{color: #000000;font-weight: bold}.codehilite .kt{color: #445588;font-weight: bold}.codehilite .m{color: #009999}.codehilite .s{color: #d14}.codehilite .na{color: #008080}.codehilite .nb{color: #0086B3}.codehilite .nc{color: #445588;font-weight: bold}.codehilite .no{color: #008080}.codehilite .ni{color: #800080}.codehilite .ne{color: #990000;font-weight: bold}.codehilite .nf{color: #990000;font-weight: bold}.codehilite .nn{color: #555555}.codehilite .nt{color: #000080}.codehilite .nv{color: #008080}.codehilite .ow{color: #000000;font-weight: bold}.codehilite .w{color: #bbbbbb}.codehilite .mf{color: #009999}.codehilite .mh{color: #009999}.codehilite .mi{color: #009999}.codehilite .mo{color: #009999}.codehilite .sb{color: #d14}.codehilite .sc{color: #d14}.codehilite .sd{color: #d14}.codehilite .s2{color: #d14}.codehilite .se{color: #d14}.codehilite .sh{color: #d14}.codehilite .si{color: #d14}.codehilite .sx{color: #d14}.codehilite .sr{color: #009926}.codehilite .s1{color: #d14}.codehilite .ss{color: #990073}.codehilite .bp{color: #999999}.codehilite .vc{color: #008080}.codehilite .vg{color: #008080}.codehilite .vi{color: #008080}.codehilite .il{color: #009999}
    </style>
    <style type="text/css">
      .markdown-body hr{background:url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAYAAAAECAYAAACtBE5DAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEzNDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNSBNYWNpbnRvc2giIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6OENDRjNBN0E2NTZBMTFFMEI3QjRBODM4NzJDMjlGNDgiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6OENDRjNBN0I2NTZBMTFFMEI3QjRBODM4NzJDMjlGNDgiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo4Q0NGM0E3ODY1NkExMUUwQjdCNEE4Mzg3MkMyOUY0OCIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo4Q0NGM0E3OTY1NkExMUUwQjdCNEE4Mzg3MkMyOUY0OCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PqqezsUAAAAfSURBVHjaYmRABcYwBiM2QSA4y4hNEKYDQxAEAAIMAHNGAzhkPOlYAAAAAElFTkSuQmCC")}
    </style>
</head>
<body>
  <div class="c-drawer-fixed-bar c-bar">
    <header role="banner" class="l-header c-bar__inner">
      <h1 class="l-header__logo">c-drawer</h1>
      <span class="c-drawer-btn">
        <i class="c-drawer-btn__icon"></i>
      </span>
    </header>
  </div>
  <div class="c-drawer js-drawer">
    <div class="c-drawer-inner">
      ドロワー
    </div>
  </div>
  <div class="c-hero c-hero--anim" style="margin-top: 44px;">
    <div class="c-hero__inner">
      <h2 class="c-hero__inner__title">Flanky</h2>
      <p class="c-hero__inner__text">
        自作CSSフレームワーク<br>
        Sass + Flocss でFlexレイアウト、レスポンシブ対応のフレームワークです。
      </p>
      <div>
        <a href="#" class="c-btn c-btn-default--ghost c-btn--large">ゴーストボタン</a>
      </div>
    </div>
  </div>
  <main role="main" style="max-width: 1200px; margin: 0 auto;">
    <div class="c-container">
      <div id="markup">
        <article id="content" class="markdown-body">
          <h1>概要</h1>
<h2>対応ブラウザについて</h2>
<ul>
<li>
<p>Android OS 4.1以上</p>
</li>
<li>
<p>iOS 6以上</p>
</li>
<li>
<p>IE10以上</p>
</li>
<li>
<p>Chrome最新</p>
</li>
<li>
<p>FireFox最新</p>
</li>
<li>
<p>Safari最新</p>
</li>
</ul>
<h1>Sassファイル(CSSファイル)のディレクトリ構成</h1>
<p>ディレクトリ構成は、<a href="https://github.com/hiloki/flocss" title="FLOCSS">FLOCSS</a>を参考にしています。</p>
<div class="codehilite"><pre>sass
  ├─ foundation
  |     ├─ mixins
  |     ├─ _base.scss
  |     ├─ _mixins.scss
  |     ├─ _sanitize.scss
  |     └─ _variables.scss
  ├─ layout
  |     ├─ _header.scss
  |     └─ _footer.scss
  ├─ object
  |     ├─ componet
  |     ├─ project
  |     └─ utility
  └─ app.scss
</pre></div>


<p>※object/projectについては、使用するサイトに合わせたスタイルを書くのがいいと思います。</p>
<h1>接頭辞について</h1>
<p>なんの属性なのかHTMLのコードを見ただけですぐにわかるように接頭辞をつけることを義務付け</p>
<h2>layoutを表す接頭辞</h2>
<div class="codehilite"><pre><span class="nc">.l-</span>
</pre></div>


<h2>componetを表す接頭辞</h2>
<div class="codehilite"><pre><span class="nc">.c-</span>
</pre></div>


<h2>projectを表す接頭辞</h2>
<div class="codehilite"><pre><span class="nc">.p-</span>
</pre></div>


<h2>utilityを表す接頭辞</h2>
<div class="codehilite"><pre><span class="nc">.u-</span>
</pre></div>


<h2>状態を表す接頭辞</h2>
<div class="codehilite"><pre><span class="nc">.is-</span>
</pre></div>


<p>例えば、is-active、is-hiddenなど。</p>
<h2>JavaScriptを表す接頭辞</h2>
<div class="codehilite"><pre><span class="nc">.js-</span>
</pre></div>


<p>cssのスタイルが定義されたセレクタとJavaScriptで動的に動かすセレクタを混同させないこと。</p>
<h1>セレクタについて</h1>
<h2>単語のセパレータ</h2>
<p>基本的な書き方として<a href="http://csswizardry.com/2013/01/mindbemding-getting-your-head-round-bem-syntax/" title="MindBEMding">MindBEMding</a>の考え方をそのまま採用しています。</p>
<h1>使い方</h1>
<div class="codehilite"><pre><span class="cp">&lt;!DOCTYPE html&gt;</span>
<span class="nt">&lt;html</span> <span class="na">lang=</span><span class="s">&quot;ja&quot;</span><span class="nt">&gt;</span>
<span class="nt">&lt;head&gt;</span>
  <span class="nt">&lt;meta</span> <span class="na">charset=</span><span class="s">&quot;utf-8&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;meta</span> <span class="na">http-equiv=</span><span class="s">&quot;X-UA-Compatible&quot;</span> <span class="na">content=</span><span class="s">&quot;IE=edge&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;meta</span> <span class="na">name=</span><span class="s">&quot;viewport&quot;</span> <span class="na">content=</span><span class="s">&quot;width=device-width, initial-scale=1&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;meta</span> <span class="na">name=</span><span class="s">&quot;description&quot;</span> <span class="na">content=</span><span class="s">&quot;&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;meta</span> <span class="na">name=</span><span class="s">&quot;keywords&quot;</span> <span class="na">content=</span><span class="s">&quot;&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;title&gt;</span>Document<span class="nt">&lt;/title&gt;</span>
  <span class="nt">&lt;link</span> <span class="na">rel=</span><span class="s">&quot;stylesheet&quot;</span> <span class="na">href=</span><span class="s">&quot;dist/css/font-awesome.min.css&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;link</span> <span class="na">rel=</span><span class="s">&quot;stylesheet&quot;</span> <span class="na">href=</span><span class="s">&quot;dist/css/app.min.css&quot;</span><span class="nt">&gt;</span>
<span class="nt">&lt;/head&gt;</span>
<span class="nt">&lt;body&gt;</span>
  内容  
  <span class="nt">&lt;script </span><span class="na">src=</span><span class="s">&quot;dist/js/jquery-2.1.1.min.js&quot;</span><span class="nt">&gt;&lt;/script&gt;</span>
  <span class="nt">&lt;script </span><span class="na">src=</span><span class="s">&quot;dist/js/jquery.simpledrawer.js&quot;</span><span class="nt">&gt;&lt;/script&gt;</span>
  <span class="nt">&lt;script </span><span class="na">src=</span><span class="s">&quot;dist/js/main.js&quot;</span><span class="nt">&gt;&lt;/script&gt;</span>

<span class="nt">&lt;/body&gt;</span>
<span class="nt">&lt;/html&gt;</span>
</pre></div>


<h1>alert</h1>
<div class="c-container">
  <p class="c-alert">alert</p>
<div class="codehilite"><pre><span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">&quot;c-alert&quot;</span><span class="nt">&gt;</span>alert<span class="nt">&lt;/p&gt;</span>
</pre></div>
</div>


<h1>avatar</h1>
<div class="c-container">
  <div class="c-card">
    <div class="c-card__content">
      <div class="c-avatar"><img src="dist/img/messi.jpg" width="100%" alt=""></div>
    </div>
  </div>
<div class="codehilite"><pre><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-avatar&quot;</span><span class="nt">&gt;&lt;img</span> <span class="na">src=</span><span class="s">&quot;dist/img/messi.jpg&quot;</span> <span class="na">width=</span><span class="s">&quot;100%&quot;</span> <span class="na">alt=</span><span class="s">&quot;&quot;</span><span class="nt">&gt;&lt;/div&gt;</span>
</pre></div>
</div>


<h1>bar</h1>
<div class="c-container">
  <div class="c-card">
    <div class="c-card__content">
      <div class="c-bar">
        <div class="c-bar__inner">
          bar
        </div>
      </div>
    </div>
  </div>
<div class="codehilite"><pre><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-bar&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-bar__inner&quot;</span><span class="nt">&gt;</span>
    bar
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</pre></div>
</div>


<h1>breadcrumb</h1>
<div class="c-container">
  <div class="c-card">
    <div class="c-card__content">
      <div class="c-breadcrumb">
        <ul class="c-inline c-breadcrumb__inner">
          <li class="c-inline__cell">
           <a href="#">Home</a> <i class="fa fa-angle-right"></i>
         </li>
         <li class="c-inline__cell">
           <a href="#">hogehoge</a>
         </li>
       </ul>
      </div>
    </div>
  </div>
<div class="codehilite"><pre><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-breadcrumb&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">&quot;c-inline c-breadcrumb__inner&quot;</span><span class="nt">&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">&quot;c-inline__cell&quot;</span><span class="nt">&gt;</span>
     <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;</span>Home<span class="nt">&lt;/a&gt;</span> <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">&quot;fa fa-angle-right&quot;</span><span class="nt">&gt;&lt;/i&gt;</span>
   <span class="nt">&lt;/li&gt;</span>
   <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">&quot;c-inline__cell&quot;</span><span class="nt">&gt;</span>
     <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;</span>hogehoge<span class="nt">&lt;/a&gt;</span>
   <span class="nt">&lt;/li&gt;</span>
 <span class="nt">&lt;/ul&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</pre></div>
</div>


<h1>btn</h1>
<div class="c-container">
  <div class="c-card">
    <div class="c-card__content">
      <p>
        <a class="c-btn c-btn-default--border" href="#">ボタン</a>
        <a class="c-btn c-btn-primary--border" href="#">ボタン</a>
        <a class="c-btn c-btn-highlight--border" href="#">ボタン</a>
        <a class="c-btn c-btn-default--ghost" href="#">ボタン</a>
      </p>
      <p>
        <a class="c-btn c-btn-default--flat" href="#">ボタン</a>
        <a class="c-btn c-btn-primary--flat" href="#">ボタン</a>
        <a class="c-btn c-btn-highlight--flat" href="#">ボタン</a>
      </p>

      <p>
        <a class="c-btn c-btn-primary--flat c-btn--jumbo" href="#">ボタン</a>
        <a class="c-btn c-btn-primary--flat c-btn--large" href="#">ボタン</a>
        <a class="c-btn c-btn-primary--flat" href="#">ボタン</a>
        <a class="c-btn c-btn-primary--flat c-btn--small" href="#">ボタン</a>
        <a class="c-btn c-btn-primary--flat c-btn--tiny" href="#">ボタン</a>
      </p>
      <p>
        <a class="c-btn c-btn-primary--flat c-btn--block" href="#">ボタン</a>
      </p>
    </div>
  </div>
<div class="codehilite"><pre><span class="nt">&lt;p&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">&quot;c-btn c-btn-default--border&quot;</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;</span>ボタン<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">&quot;c-btn c-btn-primary--border&quot;</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;</span>ボタン<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">&quot;c-btn c-btn-highlight--border&quot;</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;</span>ボタン<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">&quot;c-btn c-btn-default--ghost&quot;</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;</span>ボタン<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">&quot;c-btn c-btn-default--flat&quot;</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;</span>ボタン<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">&quot;c-btn c-btn-primary--flat&quot;</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;</span>ボタン<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">&quot;c-btn c-btn-highlight--flat&quot;</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;</span>ボタン<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/p&gt;</span>

<span class="nt">&lt;p&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">&quot;c-btn c-btn-primary--flat c-btn--jumbo&quot;</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;</span>ボタン<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">&quot;c-btn c-btn-primary--flat c-btn--large&quot;</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;</span>ボタン<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">&quot;c-btn c-btn-primary--flat&quot;</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;</span>ボタン<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">&quot;c-btn c-btn-primary--flat c-btn--small&quot;</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;</span>ボタン<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">&quot;c-btn c-btn-primary--flat c-btn--tiny&quot;</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;</span>ボタン<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">&quot;c-btn c-btn-primary--flat c-btn--block&quot;</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;</span>ボタン<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/p&gt;</span>
</pre></div>
</div>


<h1>card</h1>
<div class="c-container">
  <div class="c-card">
    <div class="c-card__content">
      <div class="c-container">
        <div class="c-card">
          <div class="c-card__header">
            <h3>Header</h3>
          </div>
          <div class="c-card__content">
              コンテンツ
          </div>
          <div class="c-card__bottom">
            Bottom
          </div>
        </div>
      </div>
    </div>
  </div>
<p>カードデザイン</p>
<p>containerと併用して使う</p>
<div class="codehilite"><pre><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-container&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-card&quot;</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-card__header&quot;</span><span class="nt">&gt;</span>
      <span class="nt">&lt;h3&gt;</span>Header<span class="nt">&lt;/h3&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-card__content&quot;</span><span class="nt">&gt;</span>
        コンテンツ
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-card__bottom&quot;</span><span class="nt">&gt;</span>
      Bottom
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</pre></div>
</div>


<h1>container</h1>
<div class="c-container">
  <div class="c-card">
    <div class="c-card__content">
      <div class="c-container">
        <div class="box">c-container</div>
      </div>
      <div class="c-container--small">
        <div class="box">c-container--small</div>
      </div>
      <div class="c-container--x-small">
        <div class="box">c-container--x-small</div>
      </div>
      <div class="c-container--full">
        <div class="box">c-container--full</div>
      </div>
    </div>
  </div>
<div class="codehilite"><pre><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-container&quot;</span><span class="nt">&gt;</span>
  コンテンツ
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-container--small&quot;</span><span class="nt">&gt;</span>
  コンテンツ
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-container--x-small&quot;</span><span class="nt">&gt;</span>
  コンテンツ
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-container--full&quot;</span><span class="nt">&gt;</span>
  コンテンツ
<span class="nt">&lt;/div&gt;</span>
</pre></div>
</div>

<h1>form-control</h1>
<div class="c-container">
  <div class="c-card">
    <div class="c-card__content">
      <div class="c-container">
        <form class="c-form">
          <h3 class="c-form__title">テキスト<span class="c-form__reqiured">必須</span></h3>
          <p><input type="text"></p>
          <h3 class="c-form__title">URL<span class="c-form__reqiured">必須</span></h3>
          <p><input type="url"></p>
          <h3 class="c-form__title">パスワード<span class="c-form__reqiured">必須</span></h3>
          <p><input type="password"></p>
          <h3 class="c-form__title">メール<span class="c-form__reqiured">必須</span></h3>
          <p><input type="email"></p>
          <h3 class="c-form__title">テキストエリア<span class="c-form__reqiured">必須</span></h3>
          <p>
            <textarea name="" id="" cols="30" rows="10"></textarea>
          </p>
          <h3 class="c-form__title">チェックボックス</h3>
          <p>
            <input type="checkbox" name="checkbox" id="checkbox1"><label for="checkbox1">checkbox1</label>
            <input type="checkbox" name="checkbox" id="checkbox2"><label for="checkbox2">checkbox2</label>
          </p>
          <h3 class="c-form__title">ラジオボタン</h3>
          <p>
            <input type="radio" name="radio" id="radio1"><label for="radio1">radio1</label>
            <input type="radio" name="radio" id="radio2"><label for="radio2">radio2</label>
          </p>
          <h3 class="c-form__title">セレクト</h3>
          <p>
            <div class="c-form__select">
              <label><select> <option>1</option> <option>2</option> <option>3</option> <option>4</option> <option>5</option> </select></label>
            </div>
          </p>
          <button type="submit" class="c-btn c-btn-default--flat">Submit</button>
        </form>
      </div>
    </div>
  </div>
<p>formデザイン</p>
<div class="codehilite"><pre><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-container&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;form</span> <span class="na">class=</span><span class="s">&quot;c-form&quot;</span><span class="nt">&gt;</span>
    <span class="nt">&lt;h3</span> <span class="na">class=</span><span class="s">&quot;c-form__title&quot;</span><span class="nt">&gt;</span>テキスト<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">&quot;c-form__reqiured&quot;</span><span class="nt">&gt;</span>必須<span class="nt">&lt;/span&gt;&lt;/h3&gt;</span>
    <span class="nt">&lt;p&gt;&lt;input</span> <span class="na">type=</span><span class="s">&quot;text&quot;</span><span class="nt">&gt;&lt;/p&gt;</span>
    <span class="nt">&lt;h3</span> <span class="na">class=</span><span class="s">&quot;c-form__title&quot;</span><span class="nt">&gt;</span>URL<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">&quot;c-form__reqiured&quot;</span><span class="nt">&gt;</span>必須<span class="nt">&lt;/span&gt;&lt;/h3&gt;</span>
    <span class="nt">&lt;p&gt;&lt;input</span> <span class="na">type=</span><span class="s">&quot;url&quot;</span><span class="nt">&gt;&lt;/p&gt;</span>
    <span class="nt">&lt;h3</span> <span class="na">class=</span><span class="s">&quot;c-form__title&quot;</span><span class="nt">&gt;</span>パスワード<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">&quot;c-form__reqiured&quot;</span><span class="nt">&gt;</span>必須<span class="nt">&lt;/span&gt;&lt;/h3&gt;</span>
    <span class="nt">&lt;p&gt;&lt;input</span> <span class="na">type=</span><span class="s">&quot;password&quot;</span><span class="nt">&gt;&lt;/p&gt;</span>
    <span class="nt">&lt;h3</span> <span class="na">class=</span><span class="s">&quot;c-form__title&quot;</span><span class="nt">&gt;</span>メール<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">&quot;c-form__reqiured&quot;</span><span class="nt">&gt;</span>必須<span class="nt">&lt;/span&gt;&lt;/h3&gt;</span>
    <span class="nt">&lt;p&gt;&lt;input</span> <span class="na">type=</span><span class="s">&quot;email&quot;</span><span class="nt">&gt;&lt;/p&gt;</span>
    <span class="nt">&lt;h3</span> <span class="na">class=</span><span class="s">&quot;c-form__title&quot;</span><span class="nt">&gt;</span>テキストエリア<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">&quot;c-form__reqiured&quot;</span><span class="nt">&gt;</span>必須<span class="nt">&lt;/span&gt;&lt;/h3&gt;</span>
    <span class="nt">&lt;p&gt;</span>
      <span class="nt">&lt;textarea</span> <span class="na">name=</span><span class="s">&quot;&quot;</span> <span class="na">id=</span><span class="s">&quot;&quot;</span> <span class="na">cols=</span><span class="s">&quot;30&quot;</span> <span class="na">rows=</span><span class="s">&quot;10&quot;</span><span class="nt">&gt;&lt;/textarea&gt;</span>
    <span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;h3</span> <span class="na">class=</span><span class="s">&quot;c-form__title&quot;</span><span class="nt">&gt;</span>チェックボックス<span class="nt">&lt;/h3&gt;</span>
    <span class="nt">&lt;p&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">&quot;checkbox&quot;</span> <span class="na">name=</span><span class="s">&quot;checkbox&quot;</span> <span class="na">id=</span><span class="s">&quot;checkbox1&quot;</span><span class="nt">&gt;&lt;label</span> <span class="na">for=</span><span class="s">&quot;checkbox1&quot;</span><span class="nt">&gt;</span>checkbox1<span class="nt">&lt;/label&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">&quot;checkbox&quot;</span> <span class="na">name=</span><span class="s">&quot;checkbox&quot;</span> <span class="na">id=</span><span class="s">&quot;checkbox2&quot;</span><span class="nt">&gt;&lt;label</span> <span class="na">for=</span><span class="s">&quot;checkbox2&quot;</span><span class="nt">&gt;</span>checkbox2<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;h3</span> <span class="na">class=</span><span class="s">&quot;c-form__title&quot;</span><span class="nt">&gt;</span>ラジオボタン<span class="nt">&lt;/h3&gt;</span>
    <span class="nt">&lt;p&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">&quot;radio&quot;</span> <span class="na">name=</span><span class="s">&quot;radio&quot;</span> <span class="na">id=</span><span class="s">&quot;radio1&quot;</span><span class="nt">&gt;&lt;label</span> <span class="na">for=</span><span class="s">&quot;radio1&quot;</span><span class="nt">&gt;</span>radio1<span class="nt">&lt;/label&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">&quot;radio&quot;</span> <span class="na">name=</span><span class="s">&quot;radio&quot;</span> <span class="na">id=</span><span class="s">&quot;radio2&quot;</span><span class="nt">&gt;&lt;label</span> <span class="na">for=</span><span class="s">&quot;radio2&quot;</span><span class="nt">&gt;</span>radio2<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;h3</span> <span class="na">class=</span><span class="s">&quot;c-form__title&quot;</span><span class="nt">&gt;</span>セレクト<span class="nt">&lt;/h3&gt;</span>
    <span class="nt">&lt;p&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-form__select&quot;</span><span class="nt">&gt;</span>
        <span class="nt">&lt;label&gt;&lt;select&gt;</span> <span class="nt">&lt;option&gt;</span>1<span class="nt">&lt;/option&gt;</span> <span class="nt">&lt;option&gt;</span>2<span class="nt">&lt;/option&gt;</span> <span class="nt">&lt;option&gt;</span>3<span class="nt">&lt;/option&gt;</span> <span class="nt">&lt;option&gt;</span>4<span class="nt">&lt;/option&gt;</span> <span class="nt">&lt;option&gt;</span>5<span class="nt">&lt;/option&gt;</span> <span class="nt">&lt;/select&gt;&lt;/label&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">&quot;submit&quot;</span> <span class="na">class=</span><span class="s">&quot;c-btn c-btn-default--flat&quot;</span><span class="nt">&gt;</span>Submit<span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;/form&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-container&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;form</span> <span class="na">class=</span><span class="s">&quot;c-form&quot;</span><span class="nt">&gt;</span>
    <span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">&quot;c-form__table&quot;</span><span class="nt">&gt;</span>
      <span class="nt">&lt;tr&gt;</span>
        <span class="nt">&lt;th&gt;</span>テキスト<span class="nt">&lt;/th&gt;</span>
        <span class="nt">&lt;td&gt;&lt;input</span> <span class="na">type=</span><span class="s">&quot;text&quot;</span><span class="nt">&gt;&lt;/td&gt;</span>
      <span class="nt">&lt;/tr&gt;</span>
      <span class="nt">&lt;tr&gt;</span>
          <span class="nt">&lt;th&gt;</span>チェックボックス<span class="nt">&lt;/th&gt;</span>
          <span class="nt">&lt;td&gt;</span>
            <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">&quot;checkbox&quot;</span> <span class="na">name=</span><span class="s">&quot;checkbox&quot;</span> <span class="na">id=</span><span class="s">&quot;checkbox1&quot;</span><span class="nt">&gt;&lt;label</span> <span class="na">for=</span><span class="s">&quot;checkbox1&quot;</span><span class="nt">&gt;</span>checkbox1<span class="nt">&lt;/label&gt;</span>
            <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">&quot;checkbox&quot;</span> <span class="na">name=</span><span class="s">&quot;checkbox&quot;</span> <span class="na">id=</span><span class="s">&quot;checkbox2&quot;</span><span class="nt">&gt;&lt;label</span> <span class="na">for=</span><span class="s">&quot;checkbox2&quot;</span><span class="nt">&gt;</span>checkbox2<span class="nt">&lt;/label&gt;</span>
          <span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;/tr&gt;</span>
      <span class="nt">&lt;tr&gt;</span>
          <span class="nt">&lt;th&gt;</span>ラジオボタン<span class="nt">&lt;/th&gt;</span>
          <span class="nt">&lt;td&gt;</span>
            <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">&quot;radio&quot;</span> <span class="na">name=</span><span class="s">&quot;radio&quot;</span> <span class="na">id=</span><span class="s">&quot;radio1&quot;</span><span class="nt">&gt;&lt;label</span> <span class="na">for=</span><span class="s">&quot;radio1&quot;</span><span class="nt">&gt;</span>radio1<span class="nt">&lt;/label&gt;</span>
            <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">&quot;radio&quot;</span> <span class="na">name=</span><span class="s">&quot;radio&quot;</span> <span class="na">id=</span><span class="s">&quot;radio2&quot;</span><span class="nt">&gt;&lt;label</span> <span class="na">for=</span><span class="s">&quot;radio2&quot;</span><span class="nt">&gt;</span>radio2<span class="nt">&lt;/label&gt;</span>
          <span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;/tr&gt;</span>
      <span class="nt">&lt;tr&gt;</span>
          <span class="nt">&lt;th&gt;</span>セレクト<span class="nt">&lt;/th&gt;</span>
          <span class="nt">&lt;td&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-form__select&quot;</span><span class="nt">&gt;</span>
              <span class="nt">&lt;label&gt;&lt;select&gt;</span> <span class="nt">&lt;option&gt;</span>1<span class="nt">&lt;/option&gt;</span> <span class="nt">&lt;option&gt;</span>2<span class="nt">&lt;/option&gt;</span> <span class="nt">&lt;option&gt;</span>3<span class="nt">&lt;/option&gt;</span> <span class="nt">&lt;option&gt;</span>4<span class="nt">&lt;/option&gt;</span> <span class="nt">&lt;option&gt;</span>5<span class="nt">&lt;/option&gt;</span> <span class="nt">&lt;/select&gt;&lt;/label&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
          <span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;/tr&gt;</span>
      <span class="nt">&lt;tr&gt;</span>
        <span class="nt">&lt;th&gt;</span>テキストエリア<span class="nt">&lt;/th&gt;</span>
        <span class="nt">&lt;td&gt;</span>
          <span class="nt">&lt;textarea</span> <span class="na">name=</span><span class="s">&quot;&quot;</span> <span class="na">id=</span><span class="s">&quot;&quot;</span> <span class="na">cols=</span><span class="s">&quot;30&quot;</span> <span class="na">rows=</span><span class="s">&quot;10&quot;</span><span class="nt">&gt;&lt;/textarea&gt;</span>
        <span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;/table&gt;</span>
  <span class="nt">&lt;/form&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</pre></div>
</div>


<h1>grid</h1>
<h2>inline</h2>
<div class="c-container">
  <div class="c-card">
    <div class="c-card__content">
      <div class="c-grid c-grid--grow">
        <div class="c-grid__col">
          <div class="box">hoge</div>
        </div>
        <div class="c-grid__col">
          <div class="box">hoge</div>
        </div>
        <div class="c-grid__col">
          <div class="box">hoge</div>
        </div>
        <div class="c-grid__col">
          <div class="box">hoge</div>
        </div>
      </div>
    </div>
  </div>
<div class="codehilite"><pre><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-container&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;h1</span> <span class="na">class=</span><span class="s">&quot;c-title c-title--primary&quot;</span><span class="nt">&gt;</span>c-grid inline<span class="nt">&lt;/h1&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid c-grid--grow&quot;</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid__col&quot;</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;box&quot;</span><span class="nt">&gt;</span>hoge<span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid__col&quot;</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;box&quot;</span><span class="nt">&gt;</span>hoge<span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid__col&quot;</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;box&quot;</span><span class="nt">&gt;</span>hoge<span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid__col&quot;</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;box&quot;</span><span class="nt">&gt;</span>hoge<span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</pre></div>
</div>

<div class="c-container">
  <h2>Top</h2>
  <div class="c-card">
    <div class="c-card__content">
      <div class="c-grid c-grid--top">
        <div class="c-grid__col">
          <div class="box">hoge<br>hogheoge</div>
        </div>
        <div class="c-grid__col">
          <div class="box">hoge<br>hogheoge<br>hogehoge</div>
        </div>
        <div class="c-grid__col">
          <div class="box">hoge</div>
        </div>
      </div>
    </div>
  </div>
<div class="codehilite"><pre><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-container&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;h1</span> <span class="na">class=</span><span class="s">&quot;c-title c-title--primary&quot;</span><span class="nt">&gt;</span>c-grid Top<span class="nt">&lt;/h1&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid c-grid--top&quot;</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid__col&quot;</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;box&quot;</span><span class="nt">&gt;</span>hoge<span class="nt">&lt;br&gt;</span>hogheoge<span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid__col&quot;</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;box&quot;</span><span class="nt">&gt;</span>hoge<span class="nt">&lt;br&gt;</span>hogheoge<span class="nt">&lt;br&gt;</span>hogehoge<span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid__col&quot;</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;box&quot;</span><span class="nt">&gt;</span>hoge<span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</pre></div>
</div>

<div class="c-container">
  <h2>Middle</h2>
  <div class="c-card">
    <div class="c-card__content">
      <div class="c-grid c-grid--middle">
        <div class="c-grid__col">
          <div class="box">hoge<br>hogheoge</div>
        </div>
        <div class="c-grid__col">
          <div class="box">hoge<br>hogheoge<br>hogehoge</div>
        </div>
        <div class="c-grid__col">
          <div class="box">hoge</div>
        </div>
      </div>
    </div>
  </div>
<div class="codehilite"><pre><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-container&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;h1</span> <span class="na">class=</span><span class="s">&quot;c-title c-title--primary&quot;</span><span class="nt">&gt;</span>c-grid Middle<span class="nt">&lt;/h1&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid c-grid--middle&quot;</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid__col&quot;</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;box&quot;</span><span class="nt">&gt;</span>hoge<span class="nt">&lt;br&gt;</span>hogheoge<span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid__col&quot;</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;box&quot;</span><span class="nt">&gt;</span>hoge<span class="nt">&lt;br&gt;</span>hogheoge<span class="nt">&lt;br&gt;</span>hogehoge<span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid__col&quot;</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;box&quot;</span><span class="nt">&gt;</span>hoge<span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</pre></div>
</div>

<div class="c-container">
  <h2>Bottom</h2>
  <div class="c-card">
    <div class="c-card__content">
      <div class="c-grid c-grid--bottom">
        <div class="c-grid__col">
          <div class="box">hoge<br>hogheoge</div>
        </div>
        <div class="c-grid__col">
          <div class="box">hoge<br>hogheoge<br>hogehoge</div>
        </div>
        <div class="c-grid__col">
          <div class="box">hoge</div>
        </div>
      </div>
    </div>
  </div>
<div class="codehilite"><pre><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-container&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;h1</span> <span class="na">class=</span><span class="s">&quot;c-title c-title--primary&quot;</span><span class="nt">&gt;</span>c-grid Bottom<span class="nt">&lt;/h1&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid c-grid--bottom&quot;</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid__col&quot;</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;box&quot;</span><span class="nt">&gt;</span>hoge<span class="nt">&lt;br&gt;</span>hogheoge<span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid__col&quot;</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;box&quot;</span><span class="nt">&gt;</span>hoge<span class="nt">&lt;br&gt;</span>hogheoge<span class="nt">&lt;br&gt;</span>hogehoge<span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid__col&quot;</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;box&quot;</span><span class="nt">&gt;</span>hoge<span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</pre></div>
</div>

<div class="c-container">
  <h2>Stretch</h2>
  <div class="c-card">
    <div class="c-card__content">
      <div class="c-grid c-grid--stretch">
        <div class="c-grid__col">
          <div class="box">hoge<br>hogheoge</div>
        </div>
        <div class="c-grid__col">
          <div class="box">hoge<br>hogheoge<br>hogehoge</div>
        </div>
        <div class="c-grid__col">
          <div class="box">hoge</div>
        </div>
      </div>
    </div>
  </div>
<div class="codehilite"><pre><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-container&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;h1</span> <span class="na">class=</span><span class="s">&quot;c-title c-title--primary&quot;</span><span class="nt">&gt;</span>c-grid Stretch<span class="nt">&lt;/h1&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid c-grid--stretch&quot;</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid__col&quot;</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;box&quot;</span><span class="nt">&gt;</span>hoge<span class="nt">&lt;br&gt;</span>hogheoge<span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid__col&quot;</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;box&quot;</span><span class="nt">&gt;</span>hoge<span class="nt">&lt;br&gt;</span>hogheoge<span class="nt">&lt;br&gt;</span>hogehoge<span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid__col&quot;</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;box&quot;</span><span class="nt">&gt;</span>hoge<span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</pre></div>
</div>

<div class="c-container">
  <h2>baseline</h2>
  <div class="c-card">
    <div class="c-card__content">
      <div class="c-grid c-grid--baseline">
        <div class="c-grid__col">
          <div class="box">hoge<br>hogheoge</div>
        </div>
        <div class="c-grid__col">
          <div class="box">hoge<br>hogheoge<br>hogehoge</div>
        </div>
        <div class="c-grid__col">
          <div class="box" style="padding-top: 100px;">hoge</div>
        </div>
      </div>
    </div>
  </div>
<div class="codehilite"><pre><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-container&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;h1</span> <span class="na">class=</span><span class="s">&quot;c-title c-title--primary&quot;</span><span class="nt">&gt;</span>c-grid Baseline<span class="nt">&lt;/h1&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid c-grid--baseline&quot;</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid__col&quot;</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;box&quot;</span><span class="nt">&gt;</span>hoge<span class="nt">&lt;br&gt;</span>hogheoge<span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid__col&quot;</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;box&quot;</span><span class="nt">&gt;</span>hoge<span class="nt">&lt;br&gt;</span>hogheoge<span class="nt">&lt;br&gt;</span>hogehoge<span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid__col&quot;</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;box&quot;</span> <span class="na">style=</span><span class="s">&quot;padding-top: 100px;&quot;</span><span class="nt">&gt;</span>hoge<span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</pre></div>
</div>

<div class="c-container">
  <h2>Left</h2>
  <div class="c-card">
    <div class="c-card__content">
      <div class="c-grid c-grid--left">
        <div class="c-grid__col">
          <div class="box">hoge<br>hogheoge</div>
        </div>
        <div class="c-grid__col">
          <div class="box">hoge<br>hogheoge<br>hogehoge</div>
        </div>
        <div class="c-grid__col">
          <div class="box">hoge</div>
        </div>
      </div>
    </div>
  </div>
<div class="codehilite"><pre><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-container&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;h1</span> <span class="na">class=</span><span class="s">&quot;c-title c-title--primary&quot;</span><span class="nt">&gt;</span>c-grid Left<span class="nt">&lt;/h1&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid c-grid--left&quot;</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid__col&quot;</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;box&quot;</span><span class="nt">&gt;</span>hoge<span class="nt">&lt;br&gt;</span>hogheoge<span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid__col&quot;</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;box&quot;</span><span class="nt">&gt;</span>hoge<span class="nt">&lt;br&gt;</span>hogheoge<span class="nt">&lt;br&gt;</span>hogehoge<span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid__col&quot;</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;box&quot;</span><span class="nt">&gt;</span>hoge<span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</pre></div>
</div>

<div class="c-container">
  <h2>Center</h2>
  <div class="c-card">
    <div class="c-card__content">
      <div class="c-grid c-grid--center">
        <div class="c-grid__col">
          <div class="box">hoge<br>hogheoge</div>
        </div>
        <div class="c-grid__col">
          <div class="box">hoge<br>hogheoge<br>hogehoge</div>
        </div>
        <div class="c-grid__col">
          <div class="box">hoge</div>
        </div>
      </div>
    </div>
  </div>
<div class="codehilite"><pre><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-container&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;h1</span> <span class="na">class=</span><span class="s">&quot;c-title c-title--primary&quot;</span><span class="nt">&gt;</span>c-grid Center<span class="nt">&lt;/h1&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid c-grid--center&quot;</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid__col&quot;</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;box&quot;</span><span class="nt">&gt;</span>hoge<span class="nt">&lt;br&gt;</span>hogheoge<span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid__col&quot;</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;box&quot;</span><span class="nt">&gt;</span>hoge<span class="nt">&lt;br&gt;</span>hogheoge<span class="nt">&lt;br&gt;</span>hogehoge<span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid__col&quot;</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;box&quot;</span><span class="nt">&gt;</span>hoge<span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</pre></div>
</div>

<div class="c-container">
  <h2>Right</h2>
  <div class="c-card">
    <div class="c-card__content">
      <div class="c-grid c-grid--right">
        <div class="c-grid__col">
          <div class="box">hoge<br>hogheoge</div>
        </div>
        <div class="c-grid__col">
          <div class="box">hoge<br>hogheoge<br>hogehoge</div>
        </div>
        <div class="c-grid__col">
          <div class="box">hoge</div>
        </div>
      </div>
    </div>
  </div>
<div class="codehilite"><pre><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-container&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;h1</span> <span class="na">class=</span><span class="s">&quot;c-title c-title--primary&quot;</span><span class="nt">&gt;</span>c-grid Right<span class="nt">&lt;/h1&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid c-grid--right&quot;</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid__col&quot;</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;box&quot;</span><span class="nt">&gt;</span>hoge<span class="nt">&lt;br&gt;</span>hogheoge<span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid__col&quot;</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;box&quot;</span><span class="nt">&gt;</span>hoge<span class="nt">&lt;br&gt;</span>hogheoge<span class="nt">&lt;br&gt;</span>hogehoge<span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid__col&quot;</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;box&quot;</span><span class="nt">&gt;</span>hoge<span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</pre></div>
</div>

<div class="c-container">
  <h2>Between</h2>
  <div class="c-card">
    <div class="c-card__content">
      <div class="c-grid c-grid--between">
        <div class="c-grid__col">
          <div class="box">hoge<br>hogheoge</div>
        </div>
        <div class="c-grid__col">
          <div class="box">hoge<br>hogheoge<br>hogehoge</div>
        </div>
        <div class="c-grid__col">
          <div class="box">hoge</div>
        </div>
      </div>
    </div>
  </div>
<div class="codehilite"><pre><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-container&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;h1</span> <span class="na">class=</span><span class="s">&quot;c-title c-title--primary&quot;</span><span class="nt">&gt;</span>c-grid Between<span class="nt">&lt;/h1&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid c-grid--between&quot;</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid__col&quot;</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;box&quot;</span><span class="nt">&gt;</span>hoge<span class="nt">&lt;br&gt;</span>hogheoge<span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid__col&quot;</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;box&quot;</span><span class="nt">&gt;</span>hoge<span class="nt">&lt;br&gt;</span>hogheoge<span class="nt">&lt;br&gt;</span>hogehoge<span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid__col&quot;</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;box&quot;</span><span class="nt">&gt;</span>hoge<span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</pre></div>
</div>

<div class="c-container">
  <h2>Full</h2>
  <div class="c-card">
    <div class="c-card__content">
      <div class="c-grid">
        <div class="c-grid__col c-grid__col--full">
          <div class="box">c-grid__col--full</div>
        </div>
        <div class="c-grid__col c-grid__col--full">
          <div class="box">c-grid__col--full</div>
        </div>
        <div class="c-grid__col c-grid__col--full">
          <div class="box">c-grid__col--full</div>
        </div>
      </div>
    </div>
  </div>
<div class="codehilite"><pre><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-container&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;h1</span> <span class="na">class=</span><span class="s">&quot;c-title c-title--primary&quot;</span><span class="nt">&gt;</span>c-grid full<span class="nt">&lt;/h1&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid&quot;</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid__col c-grid__col--full&quot;</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;box&quot;</span><span class="nt">&gt;</span>c-grid__col--full<span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid__col c-grid__col--full&quot;</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;box&quot;</span><span class="nt">&gt;</span>c-grid__col--full<span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid__col c-grid__col--full&quot;</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;box&quot;</span><span class="nt">&gt;</span>c-grid__col--full<span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</pre></div>
</div>

<div class="c-container">
  <h2>Layout & gutters</h2>
  <div class="c-card">
    <div class="c-card__content">
      <div class="c-grid">
        <div class="c-grid__col c-grid__col--1of12"><div class="box">1of12</div></div>
        <div class="c-grid__col c-grid__col--1of12"><div class="box">1of12</div></div>
        <div class="c-grid__col c-grid__col--1of12"><div class="box">1of12</div></div>
        <div class="c-grid__col c-grid__col--1of12"><div class="box">1of12</div></div>
        <div class="c-grid__col c-grid__col--1of12"><div class="box">1of12</div></div>
        <div class="c-grid__col c-grid__col--1of12"><div class="box">1of12</div></div>
        <div class="c-grid__col c-grid__col--1of12"><div class="box">1of12</div></div>
        <div class="c-grid__col c-grid__col--1of12"><div class="box">1of12</div></div>
        <div class="c-grid__col c-grid__col--1of12"><div class="box">1of12</div></div>
        <div class="c-grid__col c-grid__col--1of12"><div class="box">1of12</div></div>
        <div class="c-grid__col c-grid__col--1of12"><div class="box">1of12</div></div>
        <div class="c-grid__col c-grid__col--1of12"><div class="box">1of12</div></div>
      </div>
      <div class="c-grid c-grid--gutters">
        <div class="c-grid__col c-grid__col--1of12"><div class="box">1of12</div></div>
        <div class="c-grid__col c-grid__col--1of12"><div class="box">1of12</div></div>
        <div class="c-grid__col c-grid__col--1of12"><div class="box">1of12</div></div>
        <div class="c-grid__col c-grid__col--1of12"><div class="box">1of12</div></div>
        <div class="c-grid__col c-grid__col--1of12"><div class="box">1of12</div></div>
        <div class="c-grid__col c-grid__col--1of12"><div class="box">1of12</div></div>
        <div class="c-grid__col c-grid__col--1of12"><div class="box">1of12</div></div>
        <div class="c-grid__col c-grid__col--1of12"><div class="box">1of12</div></div>
        <div class="c-grid__col c-grid__col--1of12"><div class="box">1of12</div></div>
        <div class="c-grid__col c-grid__col--1of12"><div class="box">1of12</div></div>
        <div class="c-grid__col c-grid__col--1of12"><div class="box">1of12</div></div>
        <div class="c-grid__col c-grid__col--1of12"><div class="box">1of12</div></div>
      </div>
    </div>
  </div>
<div class="codehilite"><pre><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-container&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;h1</span> <span class="na">class=</span><span class="s">&quot;c-title c-title--primary&quot;</span><span class="nt">&gt;</span>c-grid Box<span class="nt">&lt;/h1&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid&quot;</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid__col c-grid__col--1of12&quot;</span><span class="nt">&gt;&lt;div</span> <span class="na">class=</span><span class="s">&quot;box&quot;</span><span class="nt">&gt;</span>1of12<span class="nt">&lt;/div&gt;&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid__col c-grid__col--1of12&quot;</span><span class="nt">&gt;&lt;div</span> <span class="na">class=</span><span class="s">&quot;box&quot;</span><span class="nt">&gt;</span>1of12<span class="nt">&lt;/div&gt;&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid__col c-grid__col--1of12&quot;</span><span class="nt">&gt;&lt;div</span> <span class="na">class=</span><span class="s">&quot;box&quot;</span><span class="nt">&gt;</span>1of12<span class="nt">&lt;/div&gt;&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid__col c-grid__col--1of12&quot;</span><span class="nt">&gt;&lt;div</span> <span class="na">class=</span><span class="s">&quot;box&quot;</span><span class="nt">&gt;</span>1of12<span class="nt">&lt;/div&gt;&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid__col c-grid__col--1of12&quot;</span><span class="nt">&gt;&lt;div</span> <span class="na">class=</span><span class="s">&quot;box&quot;</span><span class="nt">&gt;</span>1of12<span class="nt">&lt;/div&gt;&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid__col c-grid__col--1of12&quot;</span><span class="nt">&gt;&lt;div</span> <span class="na">class=</span><span class="s">&quot;box&quot;</span><span class="nt">&gt;</span>1of12<span class="nt">&lt;/div&gt;&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid__col c-grid__col--1of12&quot;</span><span class="nt">&gt;&lt;div</span> <span class="na">class=</span><span class="s">&quot;box&quot;</span><span class="nt">&gt;</span>1of12<span class="nt">&lt;/div&gt;&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid__col c-grid__col--1of12&quot;</span><span class="nt">&gt;&lt;div</span> <span class="na">class=</span><span class="s">&quot;box&quot;</span><span class="nt">&gt;</span>1of12<span class="nt">&lt;/div&gt;&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid__col c-grid__col--1of12&quot;</span><span class="nt">&gt;&lt;div</span> <span class="na">class=</span><span class="s">&quot;box&quot;</span><span class="nt">&gt;</span>1of12<span class="nt">&lt;/div&gt;&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid__col c-grid__col--1of12&quot;</span><span class="nt">&gt;&lt;div</span> <span class="na">class=</span><span class="s">&quot;box&quot;</span><span class="nt">&gt;</span>1of12<span class="nt">&lt;/div&gt;&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid__col c-grid__col--1of12&quot;</span><span class="nt">&gt;&lt;div</span> <span class="na">class=</span><span class="s">&quot;box&quot;</span><span class="nt">&gt;</span>1of12<span class="nt">&lt;/div&gt;&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid__col c-grid__col--1of12&quot;</span><span class="nt">&gt;&lt;div</span> <span class="na">class=</span><span class="s">&quot;box&quot;</span><span class="nt">&gt;</span>1of12<span class="nt">&lt;/div&gt;&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid c-grid--gutters&quot;</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid__col c-grid__col--1of12&quot;</span><span class="nt">&gt;&lt;div</span> <span class="na">class=</span><span class="s">&quot;box&quot;</span><span class="nt">&gt;</span>1of12<span class="nt">&lt;/div&gt;&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid__col c-grid__col--1of12&quot;</span><span class="nt">&gt;&lt;div</span> <span class="na">class=</span><span class="s">&quot;box&quot;</span><span class="nt">&gt;</span>1of12<span class="nt">&lt;/div&gt;&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid__col c-grid__col--1of12&quot;</span><span class="nt">&gt;&lt;div</span> <span class="na">class=</span><span class="s">&quot;box&quot;</span><span class="nt">&gt;</span>1of12<span class="nt">&lt;/div&gt;&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid__col c-grid__col--1of12&quot;</span><span class="nt">&gt;&lt;div</span> <span class="na">class=</span><span class="s">&quot;box&quot;</span><span class="nt">&gt;</span>1of12<span class="nt">&lt;/div&gt;&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid__col c-grid__col--1of12&quot;</span><span class="nt">&gt;&lt;div</span> <span class="na">class=</span><span class="s">&quot;box&quot;</span><span class="nt">&gt;</span>1of12<span class="nt">&lt;/div&gt;&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid__col c-grid__col--1of12&quot;</span><span class="nt">&gt;&lt;div</span> <span class="na">class=</span><span class="s">&quot;box&quot;</span><span class="nt">&gt;</span>1of12<span class="nt">&lt;/div&gt;&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid__col c-grid__col--1of12&quot;</span><span class="nt">&gt;&lt;div</span> <span class="na">class=</span><span class="s">&quot;box&quot;</span><span class="nt">&gt;</span>1of12<span class="nt">&lt;/div&gt;&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid__col c-grid__col--1of12&quot;</span><span class="nt">&gt;&lt;div</span> <span class="na">class=</span><span class="s">&quot;box&quot;</span><span class="nt">&gt;</span>1of12<span class="nt">&lt;/div&gt;&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid__col c-grid__col--1of12&quot;</span><span class="nt">&gt;&lt;div</span> <span class="na">class=</span><span class="s">&quot;box&quot;</span><span class="nt">&gt;</span>1of12<span class="nt">&lt;/div&gt;&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid__col c-grid__col--1of12&quot;</span><span class="nt">&gt;&lt;div</span> <span class="na">class=</span><span class="s">&quot;box&quot;</span><span class="nt">&gt;</span>1of12<span class="nt">&lt;/div&gt;&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid__col c-grid__col--1of12&quot;</span><span class="nt">&gt;&lt;div</span> <span class="na">class=</span><span class="s">&quot;box&quot;</span><span class="nt">&gt;</span>1of12<span class="nt">&lt;/div&gt;&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid__col c-grid__col--1of12&quot;</span><span class="nt">&gt;&lt;div</span> <span class="na">class=</span><span class="s">&quot;box&quot;</span><span class="nt">&gt;</span>1of12<span class="nt">&lt;/div&gt;&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</pre></div>
</div>

<div class="c-container">
  <div class="c-card">
    <div class="c-card__content">
      <div class="c-grid">
        <div class="c-grid__col c-grid__col--2of12"><div class="box">2of12</div></div>
        <div class="c-grid__col c-grid__col--2of12"><div class="box">2of12</div></div>
        <div class="c-grid__col c-grid__col--2of12"><div class="box">2of12</div></div>
        <div class="c-grid__col c-grid__col--2of12"><div class="box">2of12</div></div>
        <div class="c-grid__col c-grid__col--2of12"><div class="box">2of12</div></div>
        <div class="c-grid__col c-grid__col--2of12"><div class="box">2of12</div></div>
      </div>
      <div class="c-grid c-grid--gutters c-grid--query">
        <div class="c-grid__col c-grid__col--2of12"><div class="box">2of12</div></div>
        <div class="c-grid__col c-grid__col--2of12"><div class="box">2of12</div></div>
        <div class="c-grid__col c-grid__col--2of12"><div class="box">2of12</div></div>
        <div class="c-grid__col c-grid__col--2of12"><div class="box">2of12</div></div>
        <div class="c-grid__col c-grid__col--2of12"><div class="box">2of12</div></div>
        <div class="c-grid__col c-grid__col--2of12"><div class="box">2of12</div></div>
      </div>
    </div>
  </div>
<div class="codehilite"><pre><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-container&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid&quot;</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid__col c-grid__col--2of12&quot;</span><span class="nt">&gt;&lt;div</span> <span class="na">class=</span><span class="s">&quot;box&quot;</span><span class="nt">&gt;</span>2of12<span class="nt">&lt;/div&gt;&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid__col c-grid__col--2of12&quot;</span><span class="nt">&gt;&lt;div</span> <span class="na">class=</span><span class="s">&quot;box&quot;</span><span class="nt">&gt;</span>2of12<span class="nt">&lt;/div&gt;&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid__col c-grid__col--2of12&quot;</span><span class="nt">&gt;&lt;div</span> <span class="na">class=</span><span class="s">&quot;box&quot;</span><span class="nt">&gt;</span>2of12<span class="nt">&lt;/div&gt;&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid__col c-grid__col--2of12&quot;</span><span class="nt">&gt;&lt;div</span> <span class="na">class=</span><span class="s">&quot;box&quot;</span><span class="nt">&gt;</span>2of12<span class="nt">&lt;/div&gt;&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid__col c-grid__col--2of12&quot;</span><span class="nt">&gt;&lt;div</span> <span class="na">class=</span><span class="s">&quot;box&quot;</span><span class="nt">&gt;</span>2of12<span class="nt">&lt;/div&gt;&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid__col c-grid__col--2of12&quot;</span><span class="nt">&gt;&lt;div</span> <span class="na">class=</span><span class="s">&quot;box&quot;</span><span class="nt">&gt;</span>2of12<span class="nt">&lt;/div&gt;&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid c-grid--gutters c-grid--query&quot;</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid__col c-grid__col--2of12&quot;</span><span class="nt">&gt;&lt;div</span> <span class="na">class=</span><span class="s">&quot;box&quot;</span><span class="nt">&gt;</span>2of12<span class="nt">&lt;/div&gt;&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid__col c-grid__col--2of12&quot;</span><span class="nt">&gt;&lt;div</span> <span class="na">class=</span><span class="s">&quot;box&quot;</span><span class="nt">&gt;</span>2of12<span class="nt">&lt;/div&gt;&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid__col c-grid__col--2of12&quot;</span><span class="nt">&gt;&lt;div</span> <span class="na">class=</span><span class="s">&quot;box&quot;</span><span class="nt">&gt;</span>2of12<span class="nt">&lt;/div&gt;&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid__col c-grid__col--2of12&quot;</span><span class="nt">&gt;&lt;div</span> <span class="na">class=</span><span class="s">&quot;box&quot;</span><span class="nt">&gt;</span>2of12<span class="nt">&lt;/div&gt;&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid__col c-grid__col--2of12&quot;</span><span class="nt">&gt;&lt;div</span> <span class="na">class=</span><span class="s">&quot;box&quot;</span><span class="nt">&gt;</span>2of12<span class="nt">&lt;/div&gt;&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid__col c-grid__col--2of12&quot;</span><span class="nt">&gt;&lt;div</span> <span class="na">class=</span><span class="s">&quot;box&quot;</span><span class="nt">&gt;</span>2of12<span class="nt">&lt;/div&gt;&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</pre></div>
</div>

<div class="c-container">
  <div class="c-card">
    <div class="c-card__content">
      <div class="c-grid">
        <div class="c-grid__col c-grid__col--3of12"><div class="box">3of12</div></div>
        <div class="c-grid__col c-grid__col--3of12"><div class="box">3of12</div></div>
        <div class="c-grid__col c-grid__col--3of12"><div class="box">3of12</div></div>
        <div class="c-grid__col c-grid__col--3of12"><div class="box">3of12</div></div>
      </div>
    </div>
  </div>
<div class="codehilite"><pre><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-container&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid&quot;</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid__col c-grid__col--3of12&quot;</span><span class="nt">&gt;&lt;div</span> <span class="na">class=</span><span class="s">&quot;box&quot;</span><span class="nt">&gt;</span>3of12<span class="nt">&lt;/div&gt;&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid__col c-grid__col--3of12&quot;</span><span class="nt">&gt;&lt;div</span> <span class="na">class=</span><span class="s">&quot;box&quot;</span><span class="nt">&gt;</span>3of12<span class="nt">&lt;/div&gt;&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid__col c-grid__col--3of12&quot;</span><span class="nt">&gt;&lt;div</span> <span class="na">class=</span><span class="s">&quot;box&quot;</span><span class="nt">&gt;</span>3of12<span class="nt">&lt;/div&gt;&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid__col c-grid__col--3of12&quot;</span><span class="nt">&gt;&lt;div</span> <span class="na">class=</span><span class="s">&quot;box&quot;</span><span class="nt">&gt;</span>3of12<span class="nt">&lt;/div&gt;&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</pre></div>
</div>

<div class="c-container">
  <div class="c-card">
    <div class="c-card__content">
      <div class="c-grid">
        <div class="c-grid__col c-grid__col--4of12"><div class="box">4of12</div></div>
        <div class="c-grid__col c-grid__col--4of12"><div class="box">4of12</div></div>
        <div class="c-grid__col c-grid__col--4of12"><div class="box">4of12</div></div>
      </div>
    </div>
  </div>
<div class="codehilite"><pre><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-container&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid&quot;</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid__col c-grid__col--4of12&quot;</span><span class="nt">&gt;&lt;div</span> <span class="na">class=</span><span class="s">&quot;box&quot;</span><span class="nt">&gt;</span>4of12<span class="nt">&lt;/div&gt;&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid__col c-grid__col--4of12&quot;</span><span class="nt">&gt;&lt;div</span> <span class="na">class=</span><span class="s">&quot;box&quot;</span><span class="nt">&gt;</span>4of12<span class="nt">&lt;/div&gt;&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid__col c-grid__col--4of12&quot;</span><span class="nt">&gt;&lt;div</span> <span class="na">class=</span><span class="s">&quot;box&quot;</span><span class="nt">&gt;</span>4of12<span class="nt">&lt;/div&gt;&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</pre></div>
</div>

<div class="c-container">
  <div class="c-card">
    <div class="c-card__content">
      <div class="c-grid">
        <div class="c-grid__col c-grid__col--5of12"><div class="box">5of12</div></div>
        <div class="c-grid__col c-grid__col--2of12"><div class="box">2of12</div></div>
        <div class="c-grid__col c-grid__col--5of12"><div class="box">5of12</div></div>
      </div>
    </div>
  </div>
<div class="codehilite"><pre><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-container&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid&quot;</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid__col c-grid__col--5of12&quot;</span><span class="nt">&gt;&lt;div</span> <span class="na">class=</span><span class="s">&quot;box&quot;</span><span class="nt">&gt;</span>5of12<span class="nt">&lt;/div&gt;&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid__col c-grid__col--2of12&quot;</span><span class="nt">&gt;&lt;div</span> <span class="na">class=</span><span class="s">&quot;box&quot;</span><span class="nt">&gt;</span>2of12<span class="nt">&lt;/div&gt;&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid__col c-grid__col--5of12&quot;</span><span class="nt">&gt;&lt;div</span> <span class="na">class=</span><span class="s">&quot;box&quot;</span><span class="nt">&gt;</span>5of12<span class="nt">&lt;/div&gt;&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</pre></div>
</div>

<div class="c-container">
  <div class="c-card">
    <div class="c-card__content">
      <div class="c-grid">
        <div class="c-grid__col c-grid__col--6of12"><div class="box">6of12</div></div>
        <div class="c-grid__col c-grid__col--6of12"><div class="box">6of12</div></div>
      </div>
    </div>
  </div>
<div class="codehilite"><pre><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-container&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid&quot;</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid__col c-grid__col--6of12&quot;</span><span class="nt">&gt;&lt;div</span> <span class="na">class=</span><span class="s">&quot;box&quot;</span><span class="nt">&gt;</span>6of12<span class="nt">&lt;/div&gt;&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid__col c-grid__col--6of12&quot;</span><span class="nt">&gt;&lt;div</span> <span class="na">class=</span><span class="s">&quot;box&quot;</span><span class="nt">&gt;</span>6of12<span class="nt">&lt;/div&gt;&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</pre></div>
</div>

<div class="c-container">
  <div class="c-card">
    <div class="c-card__content">
      <div class="c-grid">
        <div class="c-grid__col c-grid__col--7of12"><div class="box">7of12</div></div>
        <div class="c-grid__col c-grid__col--5of12"><div class="box">5of12</div></div>
      </div>
    </div>
  </div>
<div class="codehilite"><pre><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-container&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid&quot;</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid__col c-grid__col--7of12&quot;</span><span class="nt">&gt;&lt;div</span> <span class="na">class=</span><span class="s">&quot;box&quot;</span><span class="nt">&gt;</span>7of12<span class="nt">&lt;/div&gt;&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid__col c-grid__col--5of12&quot;</span><span class="nt">&gt;&lt;div</span> <span class="na">class=</span><span class="s">&quot;box&quot;</span><span class="nt">&gt;</span>5of12<span class="nt">&lt;/div&gt;&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</pre></div>
</div>

<div class="c-container">
  <div class="c-card">
    <div class="c-card__content">
      <div class="c-grid">
        <div class="c-grid__col c-grid__col--8of12"><div class="box">8of12</div></div>
        <div class="c-grid__col c-grid__col--4of12"><div class="box">4of12</div></div>
      </div>
    </div>
  </div>
<div class="codehilite"><pre><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-container&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid&quot;</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid__col c-grid__col--8of12&quot;</span><span class="nt">&gt;&lt;div</span> <span class="na">class=</span><span class="s">&quot;box&quot;</span><span class="nt">&gt;</span>8of12<span class="nt">&lt;/div&gt;&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid__col c-grid__col--4of12&quot;</span><span class="nt">&gt;&lt;div</span> <span class="na">class=</span><span class="s">&quot;box&quot;</span><span class="nt">&gt;</span>4of12<span class="nt">&lt;/div&gt;&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</pre></div>
</div>

<div class="c-container">
  <div class="c-card">
    <div class="c-card__content">
      <div class="c-grid">
        <div class="c-grid__col c-grid__col--9of12"><div class="box">9of12</div></div>
        <div class="c-grid__col c-grid__col--3of12"><div class="box">3of12</div></div>
      </div>
    </div>
  </div>
<div class="codehilite"><pre><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-container&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid&quot;</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid__col c-grid__col--9of12&quot;</span><span class="nt">&gt;&lt;div</span> <span class="na">class=</span><span class="s">&quot;box&quot;</span><span class="nt">&gt;</span>9of12<span class="nt">&lt;/div&gt;&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid__col c-grid__col--3of12&quot;</span><span class="nt">&gt;&lt;div</span> <span class="na">class=</span><span class="s">&quot;box&quot;</span><span class="nt">&gt;</span>3of12<span class="nt">&lt;/div&gt;&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</pre></div>
</div>

<div class="c-container">
  <div class="c-card">
    <div class="c-card__content">
      <div class="c-grid">
        <div class="c-grid__col c-grid__col--10of12"><div class="box">10of12</div></div>
        <div class="c-grid__col c-grid__col--2of12"><div class="box">2of12</div></div>
      </div>
    </div>
  </div>
<div class="codehilite"><pre><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-container&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid&quot;</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid__col c-grid__col--10of12&quot;</span><span class="nt">&gt;&lt;div</span> <span class="na">class=</span><span class="s">&quot;box&quot;</span><span class="nt">&gt;</span>10of12<span class="nt">&lt;/div&gt;&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid__col c-grid__col--2of12&quot;</span><span class="nt">&gt;&lt;div</span> <span class="na">class=</span><span class="s">&quot;box&quot;</span><span class="nt">&gt;</span>2of12<span class="nt">&lt;/div&gt;&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</pre></div>
</div>

<div class="c-container">
  <div class="c-card">
    <div class="c-card__content">
      <div class="c-grid">
        <div class="c-grid__col c-grid__col--11of12"><div class="box">11of12</div></div>
        <div class="c-grid__col c-grid__col--1of12"><div class="box">1of12</div></div>
      </div>
    </div>
  </div>
<div class="codehilite"><pre><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-container&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid&quot;</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid__col c-grid__col--11of12&quot;</span><span class="nt">&gt;&lt;div</span> <span class="na">class=</span><span class="s">&quot;box&quot;</span><span class="nt">&gt;</span>11of12<span class="nt">&lt;/div&gt;&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid__col c-grid__col--1of12&quot;</span><span class="nt">&gt;&lt;div</span> <span class="na">class=</span><span class="s">&quot;box&quot;</span><span class="nt">&gt;</span>1of12<span class="nt">&lt;/div&gt;&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</pre></div>
</div>

<div class="c-container">
  <div class="c-card">
    <div class="c-card__content">
      <div class="c-grid">
        <div class="c-grid__col c-grid__col--12of12"><div class="box">12of12</div></div>
      </div>
    </div>
  </div>
<div class="codehilite"><pre><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-container&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid&quot;</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid__col c-grid__col--12of12&quot;</span><span class="nt">&gt;&lt;div</span> <span class="na">class=</span><span class="s">&quot;box&quot;</span><span class="nt">&gt;</span>12of12<span class="nt">&lt;/div&gt;&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</pre></div>
</div>

<div class="c-container">
  <h2>Query</h2>
  <p>レスポンシブ対応</p>
  <div class="c-card">
    <div class="c-card__content">
      <div class="c-grid c-grid--query">
        <div class="c-grid__col c-grid__col--3of12"><div class="box">3of12</div></div>
        <div class="c-grid__col c-grid__col--3of12"><div class="box">3of12</div></div>
        <div class="c-grid__col c-grid__col--3of12"><div class="box">3of12</div></div>
        <div class="c-grid__col c-grid__col--3of12"><div class="box">3of12</div></div>
      </div>
    </div>
  </div>
<div class="codehilite"><pre><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-container&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;h1</span> <span class="na">class=</span><span class="s">&quot;c-title c-title--primary&quot;</span><span class="nt">&gt;</span>c-grid Query<span class="nt">&lt;/h1&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid c-grid--query&quot;</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid__col c-grid__col--3of12&quot;</span><span class="nt">&gt;&lt;div</span> <span class="na">class=</span><span class="s">&quot;box&quot;</span><span class="nt">&gt;</span>3of12<span class="nt">&lt;/div&gt;&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid__col c-grid__col--3of12&quot;</span><span class="nt">&gt;&lt;div</span> <span class="na">class=</span><span class="s">&quot;box&quot;</span><span class="nt">&gt;</span>3of12<span class="nt">&lt;/div&gt;&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid__col c-grid__col--3of12&quot;</span><span class="nt">&gt;&lt;div</span> <span class="na">class=</span><span class="s">&quot;box&quot;</span><span class="nt">&gt;</span>3of12<span class="nt">&lt;/div&gt;&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-grid__col c-grid__col--3of12&quot;</span><span class="nt">&gt;&lt;div</span> <span class="na">class=</span><span class="s">&quot;box&quot;</span><span class="nt">&gt;</span>3of12<span class="nt">&lt;/div&gt;&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</pre></div>
</div>


<h1>Hero</h1>
<div class="c-container">
  <div class="c-card">
    <div class="c-card__content">
      <div class="c-hero c-hero--anim">
        <div class="c-hero__inner">
          <h2 class="c-hero__inner__title">Hero</h2>
          <p class="c-hero__inner__text">
            13歳でFCバルセロナに入団し、17歳でトップチームデビューして以降、7度のリーガ・エスパニョーラ優勝、<br>
            4度のUEFAチャンピオンズリーグ優勝に貢献。自身も5回の世界最優秀選手賞FIFAバロンドールを受賞し[注 2]、<br>
            2008-09シーズンから2011-12シーズンまで4季連続のチャンピオンズリーグ得点王を獲得。
          </p>
        </div>
      </div>
    </div>
  </div>
<div class="codehilite"><pre><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-hero c-hero--anim&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-hero__inner&quot;</span><span class="nt">&gt;</span>
    <span class="nt">&lt;h2</span> <span class="na">class=</span><span class="s">&quot;c-hero__inner__title&quot;</span><span class="nt">&gt;</span>Hero<span class="nt">&lt;/h2&gt;</span>
    <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">&quot;c-hero__inner__text&quot;</span><span class="nt">&gt;</span>
      13歳でFCバルセロナに入団し、17歳でトップチームデビューして以降、7度のリーガ・エスパニョーラ優勝、<span class="nt">&lt;br&gt;</span>
      4度のUEFAチャンピオンズリーグ優勝に貢献。自身も5回の世界最優秀選手賞FIFAバロンドールを受賞し[注 2]、<span class="nt">&lt;br&gt;</span>
      2008-09シーズンから2011-12シーズンまで4季連続のチャンピオンズリーグ得点王を獲得。
    <span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</pre></div>
</div>


<h1>label</h1>
<div class="c-container">
  <div class="c-card">
    <div class="c-card__content">
      <span class="c-label">ラベル</span>
    </div>
  </div>
<div class="codehilite"><pre><span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">&quot;c-label&quot;</span><span class="nt">&gt;</span>ラベル<span class="nt">&lt;/span&gt;</span>
</pre></div>
</div>


<h1>loading</h1>
<div class="c-container">
  <div class="c-card">
    <div class="c-card__content">
      <div class="c-loading">
        <i class="c-loading__spinner fa fa-spinner"></i>
      </div>
    </div>
  </div>
<div class="codehilite"><pre><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-loading&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">&quot;c-loading__spinner fa fa-spinner&quot;</span><span class="nt">&gt;&lt;/i&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</pre></div>
</div>


<h1>modal</h1>
<div class="c-container">
  <div class="c-card">
    <div class="c-card__content">
      <p>
        <a href="#groupSuccesModal" class="c-btn c-btn-primary--flat js-modal-btn">modal</a>
      </p>
      <div id="groupSuccesModal" class="js-modal c-modal">
        <div class="c-modal__panel">
          <div class="c-modal__header">
            モーダルタイトル
          </div>
          <div class="c-modal__content">
            modal
          </div>
          <div class="c-modal__bottom">
            <button class="c-btn c-btn-default--flat js-modal-close-btn">閉じる</button>
          </div>
          <i class="js-modal-close-btn c-modal__close fa fa-times-circle"></i>
        </div>
        <div class="c-modal__overlay js-modal-overlay"></div>
      </div>
    </div>
  </div>
<div class="codehilite"><pre><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-container&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;p&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">&quot;#groupSuccesModal&quot;</span> <span class="na">class=</span><span class="s">&quot;c-btn c-btn-primary--flat js-modal-btn&quot;</span><span class="nt">&gt;</span>modal<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">id=</span><span class="s">&quot;groupSuccesModal&quot;</span> <span class="na">class=</span><span class="s">&quot;js-modal c-modal&quot;</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-modal__panel&quot;</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-modal__header&quot;</span><span class="nt">&gt;</span>
        モーダルタイトル
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-modal__content&quot;</span><span class="nt">&gt;</span>
        modal
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-modal__bottom&quot;</span><span class="nt">&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">&quot;c-btn c-btn-default--flat js-modal-close-btn&quot;</span><span class="nt">&gt;</span>閉じる<span class="nt">&lt;/button&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">&quot;js-modal-close-btn c-modal__close fa fa-times-circle&quot;</span><span class="nt">&gt;&lt;/i&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-modal__overlay js-modal-overlay&quot;</span><span class="nt">&gt;&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</pre></div>
</div>


<h1>nav</h1>
<div class="c-container">
  <div class="c-card">
    <div class="c-card__content">
      <ul class="c-nav c-nav--right">
        <li class="c-nav__item">
          <a href="#">メニュー1</a>
        </li>
        <li class="c-nav__item">
          <a href="#">メニュー2</a>
        </li>
        <li class="c-nav__item">
          <a href="#">メニュー3</a>
        </li>
        <li class="c-nav__item">
          <a href="#">メニュー4</a>
        </li>
      </ul>
    </div>
  </div>
<div class="codehilite"><pre><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">&quot;c-nav c-nav--right&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">&quot;c-nav__item&quot;</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;</span>メニュー1<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">&quot;c-nav__item&quot;</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;</span>メニュー2<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">&quot;c-nav__item&quot;</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;</span>メニュー3<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">&quot;c-nav__item&quot;</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;</span>メニュー4<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span>
</pre></div>
</div>


<h1>tab</h1>
<div class="c-container">
  <div class="c-card">
    <div class="c-card__content">
      <div class="c-container">
        <div class="c-tab js-tab">
          <ul class="c-tab__menu">
            <li class="c-tab__menu__item is-active">
              <a href="#" class="c-tab-btn c-tab-btn--sp js-tab-btn" data-tabid="1">
                tab1
              </a>
            </li>
            <li class="c-tab__menu__item">
              <a href="#" class="c-tab-btn c-tab-btn--basic js-tab-btn" data-tabid="2">
                tab2
              </a>
            </li>
          </ul>
          <div class="c-tab__body js-tab-body" data-contentid="1">
            コンテンツ1
          </div>
          <div class="c-tab__body js-tab-body is-hidden" data-contentid="2">
            コンテンツ2
          </div>
        </div>
      </div>
    </div>
  </div>
<div class="codehilite"><pre><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-container&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-tab js-tab&quot;</span><span class="nt">&gt;</span>
    <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">&quot;c-tab__menu&quot;</span><span class="nt">&gt;</span>
      <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">&quot;c-tab__menu__item is-active&quot;</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span> <span class="na">class=</span><span class="s">&quot;c-tab-btn c-tab-btn--sp js-tab-btn&quot;</span> <span class="na">data-tabid=</span><span class="s">&quot;1&quot;</span><span class="nt">&gt;</span>
          tab1
        <span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;/li&gt;</span>
      <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">&quot;c-tab__menu__item&quot;</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span> <span class="na">class=</span><span class="s">&quot;c-tab-btn c-tab-btn--basic js-tab-btn&quot;</span> <span class="na">data-tabid=</span><span class="s">&quot;2&quot;</span><span class="nt">&gt;</span>
          tab2
        <span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;/ul&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-tab__body js-tab-body&quot;</span> <span class="na">data-contentid=</span><span class="s">&quot;1&quot;</span><span class="nt">&gt;</span>
      コンテンツ1
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-tab__body js-tab-body is-hidden&quot;</span> <span class="na">data-contentid=</span><span class="s">&quot;2&quot;</span><span class="nt">&gt;</span>
      コンテンツ2
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</pre></div>
</div>


<h1>table</h1>
<div class="c-container">
<div class="codehilite"><pre><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;c-container&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">&quot;c-table&quot;</span><span class="nt">&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th&gt;</span>#<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th&gt;</span>First Name<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th&gt;</span>Last Name<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th&gt;</span>Username<span class="nt">&lt;/th&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th&gt;</span>1<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>hoghoe<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>fugafuga<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>bakabka<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th&gt;</span>2<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>hoghoe<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>fugafuga<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>bakabka<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
  <span class="nt">&lt;/table&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</pre></div>
</div>


<h1>text</h1>
<div class="c-container">
  <div class="c-card">
    <div class="c-card__content">
      <p class="c-text--primary">text--primary</p>
      <p class="c-text--highlight">text--highlight</p>
      <p class="c-text--secondary">text--secondary</p>
    </div>
  </div>
<div class="codehilite"><pre><span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">&quot;c-text--primary&quot;</span><span class="nt">&gt;</span>text--primary<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">&quot;c-text--highlight&quot;</span><span class="nt">&gt;</span>text--highlight<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">&quot;c-text--secondary&quot;</span><span class="nt">&gt;</span>text--secondary<span class="nt">&lt;/p&gt;</span>
</pre></div>
</div>


<h1>thumb</h1>
<div class="c-container">
  <div class="c-card">
    <div class="c-card__content">
      <p class="c-thumb"><img src="http://wild-styles.com/wp-content/uploads/2014/06/wildstyles_messi02.jpg" width="100%" alt=""></p>
    </div>
  </div>
<div class="codehilite"><pre><span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">&quot;c-thumb&quot;</span><span class="nt">&gt;&lt;img</span> <span class="na">src=</span><span class="s">&quot;dist/img/hoge.jpg&quot;</span> <span class="na">width=</span><span class="s">&quot;100%&quot;</span> <span class="na">alt=</span><span class="s">&quot;&quot;</span><span class="nt">&gt;&lt;/p&gt;</span>
</pre></div>
</div>


<h1>title</h1>
<div class="c-container">
  <div class="c-card">
    <div class="c-card__content">
      <h1 class="c-title c-title--primary">タイトル</h1>
      <h1 class="c-title c-title--secondary">タイトル</h1>
      <h1 class="c-title c-title--primary">タイトル<span class="c-title__sub-text">テキストテキスト</span></h1>
      <h1 class="c-title c-title--secondary">タイトル<span class="c-title__sub-text">テキストテキスト</span></h1>
    </div>
  </div>
<div class="codehilite"><pre><span class="nt">&lt;h1</span> <span class="na">class=</span><span class="s">&quot;c-title c-title--primary&quot;</span><span class="nt">&gt;</span>タイトル<span class="nt">&lt;/h1&gt;</span>
<span class="nt">&lt;h1</span> <span class="na">class=</span><span class="s">&quot;c-title c-title--secondary&quot;</span><span class="nt">&gt;</span>タイトル<span class="nt">&lt;/h1&gt;</span>
<span class="nt">&lt;h1</span> <span class="na">class=</span><span class="s">&quot;c-title c-title--primary&quot;</span><span class="nt">&gt;</span>タイトル<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">&quot;c-title__sub-text&quot;</span><span class="nt">&gt;</span>テキストテキスト<span class="nt">&lt;/span&gt;&lt;/h1&gt;</span>
<span class="nt">&lt;h1</span> <span class="na">class=</span><span class="s">&quot;c-title c-title--secondary&quot;</span><span class="nt">&gt;</span>タイトル<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">&quot;c-title__sub-text&quot;</span><span class="nt">&gt;</span>テキストテキスト<span class="nt">&lt;/span&gt;&lt;/h1&gt;</span>
</pre></div>
</div>


<h1>Utilityクラス</h1>
<p>基本はプロパティを省略してクラス名にしてます。</p>
<table>
<thead>
<tr>
<th align="left">クラス名</th>
<th align="left">プロパティ</th>
</tr>
</thead>
<tbody>
<tr>
<td align="left">va</td>
<td align="left">vertical-align</td>
</tr>
<tr>
<td align="left">br</td>
<td align="left">border</td>
</tr>
<tr>
<td align="left">cf</td>
<td align="left">clearfix</td>
</tr>
<tr>
<td align="left">d</td>
<td align="left">display</td>
</tr>
<tr>
<td align="left">fl</td>
<td align="left">float</td>
</tr>
<tr>
<td align="left">fz</td>
<td align="left">font-size</td>
</tr>
<tr>
<td align="left">lc</td>
<td align="left">line-clamp</td>
</tr>
<tr>
<td align="left">m</td>
<td align="left">margin</td>
</tr>
<tr>
<td align="left">p</td>
<td align="left">padding</td>
</tr>
<tr>
<td align="left">pos</td>
<td align="left">position</td>
</tr>
<tr>
<td align="left">ta</td>
<td align="left">text-align</td>
</tr>
<tr>
<td align="left">fw</td>
<td align="left">font-weight</td>
</tr>
<tr>
<td align="left">td</td>
<td align="left">text-decoration</td>
</tr>
<tr>
<td align="left">tt</td>
<td align="left">text-truncate</td>
</tr>
<tr>
<td align="left">w</td>
<td align="left">width</td>
</tr>
</tbody>
</table>
        </article>

      </div>
    </div>
  </main>
  <footer class="l-footer" role="contentinfo">
    フッター
  </footer>

  <script src="dist/js/jquery-2.1.1.min.js"></script>
  <script src="dist/js/jquery.simpledrawer.js"></script>
  <script src="dist/js/main.js"></script>

</body>
</html>