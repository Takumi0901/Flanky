# README

[DEMO](https://flanky.herokuapp.com/ "DEMO")

## 対応ブラウザについて

- Android OS 4.1以上

- iOS 6以上

- IE10以上

- Chrome最新

- FireFox最新

- Safari最新

※React.jsでやるとなるとIE9は捨てる？

# Sassファイル(CSSファイル)のディレクトリ構成
ディレクトリ構成は、[FLOCSS](https://github.com/hiloki/flocss "FLOCSS")を参考にしています。

```
sass
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
```

※object/projectについては、使用するサイトに合わせたスタイルを書くのがいいと思います。

# 接頭辞について

なんの属性なのかHTMLのコードを見ただけですぐにわかるように接頭辞をつけることを義務付け

## layoutを表す接頭辞

``` css
.l-
```

## componetを表す接頭辞

``` css
.c-
```

## prijectを表す接頭辞

``` css
.p-
```

## utilityを表す接頭辞

``` css
.u-
```

## 状態を表す接頭辞

``` css
.is-
```

例えば、is-active、is-hiddenなど。


## JavaScriptを表す接頭辞

``` css
.js-
```
cssのスタイルが定義されたセレクタとJavaScriptで動的に動かすセレクタを混同させないこと。


# セレクタについて

## 単語のセパレータ

基本的な書き方として[MindBEMding](http://csswizardry.com/2013/01/mindbemding-getting-your-head-round-bem-syntax/ "MindBEMding")の考え方をそのまま採用しています。


# 使い方

```html
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
</head>
<body>
  内容  
  <script src="dist/js/jquery-2.1.1.min.js"></script>
  <script src="dist/js/jquery.simpledrawer.js"></script>
  <script src="dist/js/main.js"></script>

</body>
</html>
```

# alert
```html
<p class="c-alert">alert</p>
```

# avatar
``` html
<div class="c-avatar"><img src="dist/img/messi.jpg" width="100%" alt=""></div>
```

# bar
``` html
<div class="c-bar">
  <div class="c-bar__inner">
    bar
  </div>
</div>
```

# breadcrumb
``` html
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
```

# btn

``` html
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
```

# card

カードデザイン

containerと併用して使う

``` html
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
```

# container

``` html
<div class="c-container">
  コンテンツ
</div>
<div class="c-container--small">
  コンテンツ
</div>
<div class="c-container--x-small">
  コンテンツ
</div>
<div class="c-container--full">
  コンテンツ
</div>
```

# form-control

formデザイン

``` html
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

<div class="c-container">
  <form class="c-form">
    <table class="c-form__table">
      <tr>
        <th>テキスト</th>
        <td><input type="text"></td>
      </tr>
      <tr>
          <th>チェックボックス</th>
          <td>
            <input type="checkbox" name="checkbox" id="checkbox1"><label for="checkbox1">checkbox1</label>
            <input type="checkbox" name="checkbox" id="checkbox2"><label for="checkbox2">checkbox2</label>
          </td>
      </tr>
      <tr>
          <th>ラジオボタン</th>
          <td>
            <input type="radio" name="radio" id="radio1"><label for="radio1">radio1</label>
            <input type="radio" name="radio" id="radio2"><label for="radio2">radio2</label>
          </td>
      </tr>
      <tr>
          <th>セレクト</th>
          <td>
            <div class="c-form__select">
              <label><select> <option>1</option> <option>2</option> <option>3</option> <option>4</option> <option>5</option> </select></label>
            </div>
          </td>
      </tr>
      <tr>
        <th>テキストエリア</th>
        <td>
          <textarea name="" id="" cols="30" rows="10"></textarea>
        </td>
      </tr>
    </table>
  </form>
</div>
```
# grid
``` html
<div class="c-container">
  <h1 class="c-title c-title--primary">c-grid inline</h1>
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
```
``` html
<div class="c-container">
  <h1 class="c-title c-title--primary">c-grid Top</h1>
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
```
``` html
<div class="c-container">
  <h1 class="c-title c-title--primary">c-grid Middle</h1>
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
```
``` html
<div class="c-container">
  <h1 class="c-title c-title--primary">c-grid Bottom</h1>
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
```
``` html
<div class="c-container">
  <h1 class="c-title c-title--primary">c-grid Stretch</h1>
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
```
``` html
<div class="c-container">
  <h1 class="c-title c-title--primary">c-grid Baseline</h1>
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
```
``` html
<div class="c-container">
  <h1 class="c-title c-title--primary">c-grid Left</h1>
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
```
``` html
<div class="c-container">
  <h1 class="c-title c-title--primary">c-grid Center</h1>
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
```
``` html 
<div class="c-container">
  <h1 class="c-title c-title--primary">c-grid Right</h1>
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
```
``` html 
<div class="c-container">
  <h1 class="c-title c-title--primary">c-grid Between</h1>
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
```
``` html
<div class="c-container">
  <h1 class="c-title c-title--primary">c-grid full</h1>
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
```
``` html
<div class="c-container">
  <h1 class="c-title c-title--primary">c-grid Box</h1>
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
```
``` html
<div class="c-container">
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
```
``` html
<div class="c-container">
  <div class="c-grid">
    <div class="c-grid__col c-grid__col--3of12"><div class="box">3of12</div></div>
    <div class="c-grid__col c-grid__col--3of12"><div class="box">3of12</div></div>
    <div class="c-grid__col c-grid__col--3of12"><div class="box">3of12</div></div>
    <div class="c-grid__col c-grid__col--3of12"><div class="box">3of12</div></div>
  </div>
</div>
```
``` html
<div class="c-container">
  <div class="c-grid">
    <div class="c-grid__col c-grid__col--4of12"><div class="box">4of12</div></div>
    <div class="c-grid__col c-grid__col--4of12"><div class="box">4of12</div></div>
    <div class="c-grid__col c-grid__col--4of12"><div class="box">4of12</div></div>
  </div>
</div>
```
``` html
<div class="c-container">
  <div class="c-grid">
    <div class="c-grid__col c-grid__col--5of12"><div class="box">5of12</div></div>
    <div class="c-grid__col c-grid__col--2of12"><div class="box">2of12</div></div>
    <div class="c-grid__col c-grid__col--5of12"><div class="box">5of12</div></div>
  </div>
</div>
```
``` html
<div class="c-container">
  <div class="c-grid">
    <div class="c-grid__col c-grid__col--6of12"><div class="box">6of12</div></div>
    <div class="c-grid__col c-grid__col--6of12"><div class="box">6of12</div></div>
  </div>
</div>
```
``` html
<div class="c-container">
  <div class="c-grid">
    <div class="c-grid__col c-grid__col--7of12"><div class="box">7of12</div></div>
    <div class="c-grid__col c-grid__col--5of12"><div class="box">5of12</div></div>
  </div>
</div>
```
``` html
<div class="c-container">
  <div class="c-grid">
    <div class="c-grid__col c-grid__col--8of12"><div class="box">8of12</div></div>
    <div class="c-grid__col c-grid__col--4of12"><div class="box">4of12</div></div>
  </div>
</div>
```
``` html
<div class="c-container">
  <div class="c-grid">
    <div class="c-grid__col c-grid__col--9of12"><div class="box">9of12</div></div>
    <div class="c-grid__col c-grid__col--3of12"><div class="box">3of12</div></div>
  </div>
</div>
```
``` html
<div class="c-container">
  <div class="c-grid">
    <div class="c-grid__col c-grid__col--10of12"><div class="box">10of12</div></div>
    <div class="c-grid__col c-grid__col--2of12"><div class="box">2of12</div></div>
  </div>
</div>
```
``` html
<div class="c-container">
  <div class="c-grid">
    <div class="c-grid__col c-grid__col--11of12"><div class="box">11of12</div></div>
    <div class="c-grid__col c-grid__col--1of12"><div class="box">1of12</div></div>
  </div>
</div>
```
``` html
<div class="c-container">
  <div class="c-grid">
    <div class="c-grid__col c-grid__col--12of12"><div class="box">12of12</div></div>
  </div>
</div>
```
``` html
<div class="c-container">
  <h1 class="c-title c-title--primary">c-grid Query</h1>
  <div class="c-grid c-grid--query">
    <div class="c-grid__col c-grid__col--11of12"><div class="box">11of12</div></div>
    <div class="c-grid__col c-grid__col--1of12"><div class="box">1of12</div></div>
  </div>
</div>
```
``` html
<div class="c-container">
  <h1 class="c-title c-title--primary">c-grid Query</h1>
  <div class="c-grid c-grid--query">
    <div class="c-grid__col c-grid__col--3of12"><div class="box">3of12</div></div>
    <div class="c-grid__col c-grid__col--3of12"><div class="box">3of12</div></div>
    <div class="c-grid__col c-grid__col--3of12"><div class="box">3of12</div></div>
    <div class="c-grid__col c-grid__col--3of12"><div class="box">3of12</div></div>
  </div>
</div>
```

# Hero
``` html
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
```

#label

``` html
<span class="c-label">ラベル</span>
```

# loading

``` html
<div class="c-loading">
  <i class="c-loading__spinner fa fa-spinner"></i>
</div>
```

# media

card、containerと組み合わせて使う

``` html
<div class="c-container">
  <div class="c-media">
    <div class="c-media__left">
      <img src="http://wild-styles.com/wp-content/uploads/2014/06/wildstyles_messi02.jpg" width="100%" alt="">
    </div>
    <div class="c-media__text">
      right
    </div>
  </div>
</div>
```

# modal

``` html
<div class="c-container">
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
```

# nav

``` html
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
```

# tab

``` html
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
```

# table

``` html
<div class="c-container">
  <table class="c-table">
    <tr>
      <th>#</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Username</th>
    </tr>
    <tr>
      <th>1</th>
      <td>hoghoe</td>
      <td>fugafuga</td>
      <td>bakabka</td>
    </tr>
    <tr>
      <th>2</th>
      <td>hoghoe</td>
      <td>fugafuga</td>
      <td>bakabka</td>
    </tr>
  </table>
</div>
```

# text

``` html
<p class="c-text--primary">text--primary</p>
<p class="c-text--highlight">text--highlight</p>
<p class="c-text--secondary">text--secondary</p>
```

#thumb

``` html
<p class="c-thumb"><img src="dist/img/7560647B_8_D_500.jpg" width="100%" alt=""></p>
```

# title

``` html
<h1 class="c-title c-title--primary">タイトル</h1>
<h1 class="c-title c-title--secondary">タイトル</h1>
<h1 class="c-title c-title--primary">タイトル<span class="c-title__sub-text">テキストテキスト</span></h1>
<h1 class="c-title c-title--secondary">タイトル<span class="c-title__sub-text">テキストテキスト</span></h1>
```


# Utilityクラス

基本はプロパティを省略してクラス名にしてます。

| クラス名    | プロパティ    |
|:-----------|:------------   |
| va         | vertical-align |
| br         | border      |
| cf         | clearfix    |
| d          | display     |
| fl         | float       |
| fz         | font-size   |
| lc         | line-clamp  |
| m          | margin      |
| p          | padding     |
| pos        | position    |
| ta         | text-align  |
| fw         | font-weight |
| td         | text-decoration |
| tt         | text-truncate |
| w          | width       |



