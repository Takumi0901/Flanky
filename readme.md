# GuideLine

とりあえず使い方、約束事

## コーディング規約について

HTMLとCSSは人によって書き方がバラバラです。そのため最低限の品質を揃えるためにあります。ただし、規約は絶対に守らなければならないものではないではないです。どうしても理想とはいえない解決策をとる羽目になることもあると思うのでその時は要相談かな。

## 対応ブラウザについて

以下は概ね対応できているはず。

- Android OS 4.1以上

- iOS 6以上

- IE9以上

- Chrome最新

- FireFox最新

- Safari最新

※React.jsでやるとなるとIE9は捨てる？


# HTMLの概要

よほどなことがない限りはHTML5で書いてください。
以下テンプレートを貼り付けますが、おそらく必要ないものもあるので適宜、変更・削除お願いします。

## HTML5で書く
``` html
<!DOCTYPE html>
```

## 文字コード

UTF-8(BOMなし)

## UA偽装　(PCも対応する場合)
``` html
<meta http-equiv="X-UA-Compatible" content="IE=edge">
```

## viewport
``` html
<meta name="viewport" content="width=device-width, initial-scale=1">
```


<h3>スマホの文字サイズ調整</h3>
``` css
body {
	  -webkit-text-size-adjust: 100%;
	}
```

## OGP
``` html
<meta property="og:title" content="タイトル">
<meta property="og:type" content="website">
<meta property="og:url" content="http://任意のURL">
<meta property="og:image" content="http://任意のURL/og_image.png">
<meta property="og:site_name" content="">
<meta property="og:description" content="" />
<meta property="fb:app_id" content="任意のID">
```

## CSS
``` html
<link rel="stylesheet" href="css/app.css">
```


## jQuery対応
個人的にはCDNは使わずに次サーバーに落として使用するほうがいいと思います。

``` html
<script src="js/jquery-1.11.2.min.js"></script>
```


## role属性について
role属性(ランドマーク属性)とは、WEBページを構成する要素に対して役割を持たせるもので、文書構造に対し目印をつけることでWebアクセシビリティの向上を図ることができます。

役割っていうのがややこしいですが、例えばheader要素はページ内に何個あってもいいですよね。もっと具体的にいえばページのheaderとか、コンテンツ(sectionとか)内にあるheaderです。role属性である「banner」を付与することで、ページのheaderだよというように明示的に役割を付与することができます。


<h3>header</h3>
``` html
<header role="banner">
	<h1>ロゴ</h1>
</header>
```
bannerはヘッダーを表します。基本的にページ内で1個だけです。

<h3>nav</h3>
``` html
<nav role="navigation">
	グローバルナビ
</nav>
```
navigationはドキュメントや関連するドキュメントのナビゲーションを示します。ちなみに、navはリンク先が主要なページのときに使うのが適切なので、グローバルナビは当てはまりますね。

こちらを参考にするといいです
<a href="http://html-five.jp/163/" target="_blank">HTML5のマークアップ(2) navの使い方</a>



<h3>main</h3>
``` html
<main role="main">
	メインコンテンツ
</main>
```
mainはドキュメントのうち主要なコンテンツを示します。ページに 1 つのみ。
なので、ドキュメントやアプリケーションの body のメインコンテンツを表す、main要素に使うのが適切ですね。

<h3>aside</h3>
``` html
<aside role="complementary">
	サイドコンテンツ
</aside>
```
complementaryはドキュメントを補助する情報を示します。asideが適切だと思います。

<h3>footer</h3>
``` html
<footer role="contentinfo">
	フッター
</footer>
```

contentinfoは、コンテンツに関する著作権やプライバシー情報へのリンクを示す。ページに 1 つのみ。コピーライトなどを表示するフッターがいいでしょう。


## テンプレート
上記まとめると以下のようになります。とりあえず、今のところこんなかんじで良さそうなので、しばらくはこれで。多分、そのうち更新すると思います。

``` html
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta property="og:title" content="タイトル">
	<meta property="og:type" content="website">
	<meta property="og:url" content="http://任意のURL">
	<meta property="og:image" content="http://任意のURL/og_image.png">
	<meta property="og:site_name" content="">
	<meta property="og:description" content="" />
	<meta property="fb:app_id" content="任意のID">
	<title>Document</title>
	<link rel="stylesheet" href="css/app.css">
</head>
<body>
	<header role="banner">
		<h1>ロゴ</h1>
	</header>
	<nav role="navigation">
		グローバルナビ
	</nav>
	<main role="main">
		メインコンテンツ
	</main>
	<aside role="complementary">
		サイドコンテンツ
	</aside>
	<footer role="contentinfo">
		フッター
	</footer>

	<script src="js/jquery-1.11.2.min.js"></script>

</body>
</html>
```

``` css
body {
	-webkit-text-size-adjust: 100%;
}
```


# CSSの概要

## 大原則
- わかりやすい
- 探しやすい
- 再利用しやすい
- 拡張しやすい

## 制作環境について

Sass + gulp.jsでやります。

# コメントアウトについて

Sassのコメントアウトには二種類あります。コンパイル後も表示されるものと表示されないものです。
基本的な使い方はルナか菊理を見ていただくといいかなと思います。

## コンパイル後も表示されるもの

```
/* =========================================================
 Level 1
========================================================= */
 

/* ---------------------------------------------------------
 Level 2
--------------------------------------------------------- */
 

/* Level 3
--------------------------------------------------------- */
 

/* Level 4 */
```

## コンパイル後、表示されないもの

Level 5は変数を管理する「_variables.scss」内のみです、ほとんど。というのもコンパイル後に変数は表示されるものではないので、ここで見えるコメントアウトしても生成されるcssが見づらいものになってしまいます。

```
// ---------------------------------------------------------------
//  Level 5
// ---------------------------------------------------------------
 
// Level 6
// --------------------
 
// Level 7
```

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

## foundation
基本的なスタイルを定義しページの下地になる部分です。
他に_mixins.scssで使いまわせるmixinや、variablesによる変数の管理も行います。

基本的に変更、更新はしないでほしいところ。


## layout
ヘッダーやサイドバーフッターなどの基本的なレイアウトを定義します。

よほどのリニューアルがない限りはいじることはほとんどないはず。

接頭辞は

``` css
.l-
```


## object
基本的によく使われる、ページを横断的に使われるモジュールのスタイルを定義。

### componet
とくによく使われるモジュール単位のもの。

接頭辞は

``` css
.c-
```

### project
プロジェクト固有のパターン。componetにも属さないスタイル。

接頭辞は

``` css
.p-
```


### utility
細かいスタイルの変更したい場合に使う便利クラス。
基本的にこれ以上は増やさないように努力すること。

木村のGitHubです。自由に使ってくれていいです。[utility-style](https://github.com/Takumi0901/utility-style "utility-style")

プロパティを省略してクラス名にしてます。

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



接頭辞は

``` css
.u-
```


## 接頭辞について

なんの属性なのかHTMLのコードを見ただけですぐにわかるように接頭辞をつけることを義務付け

### layoutを表す接頭辞

``` css
.l-
```

### componetを表す接頭辞

``` css
.c-
```

### prijectを表す接頭辞

``` css
.p-
```

### utilityを表す接頭辞

``` css
.u-
```

### 状態を表す接頭辞

``` css
.is-
```

例えば、is-active、is-hiddenなど。


### JavaScriptを表す接頭辞

``` css
.js-
```
cssのスタイルが定義されたセレクタとJavaScriptで動的に動かすセレクタを混同させないこと。


# セレクタについて

## 単語のセパレータ

基本的な書き方として[MindBEMding](http://csswizardry.com/2013/01/mindbemding-getting-your-head-round-bem-syntax/ "MindBEMding")の考え方をそのまま採用しています。

### 単語の区切り
基本的に単語の区切りには[ - ハイフン]を使ってください。アンスコやキャメルケースは原則使用しない方針です。

``` css
.main-content
```

### BlockとElementの区切り

``` css
.block__element
```

### Block or ElementとModifierの区切り

``` css
.block--modefier{}
```

## 禁止事項

やむ得ない場合もあると思いますが、原則守ってほしい事項です。

- インラインCSSは基本なし（やむ得ない場合はよしとする）
- セレクタの長さは多少長くなってもいいのでわかりやすい命名に心がけること。
- 詳細度が深くしないようにすること。親 > 子まで
- マークアップが変わっても問題のないセレクタにする
- 余計なタイプセレクタは使わない


## BEMについて
[MindBEMding](http://csswizardry.com/2013/01/mindbemding-getting-your-head-round-bem-syntax/ "MindBEMding")は必読です。

### BEMで書かれたクラスを長くなりすぎないようにする

BEMにこだわりすぎて以下のような意味なく長ったらしいセレクタは極力さけましょう。

``` css
.menu{}
.menu__item{}
.menu__item__content{}
.menu__item__content__thumb{}
.menu__item__content__title{}
.menu__item__content__title--red{}
.menu__item__content__meta{}
.menu__item__content__meta__date{}
```

``` html
<ul class="menu">
    <li class="menu__item">
        <a class="menu__item__content" href="#">
            <h3 class="menu__item__content__title menu__item__content__title--red">タイトル</h3>
            <div class="menu__item__content__thumb"><img src="hoge.png" alt=""></div>
            <div class="menu__item__content__meta">
                <span class="menu__item__content__meta__date">2015/12/31</span>
            </div>
        </a>
    </li>
</ul>
```

モジュールごとに小分けしていくといいです。そうすると小さい単位のモジュールごとに各ページモジュールを組み合わせて使いまわすことが可能になります。

``` css
// _menu.scss
.menu{}
.menu__item{}
 
// _media.scss
.media{}
.media__title{}
.media__title--red{}
.media__thumb{}
 
// _meta.scss
.meta{}
.meta__date{}
```

``` html
<ul class="menu">
    <li class="menu__item">
        <a class="media" href="#">
            <h3 class="media__title media__title--red">タイトル</h3>
            <div class="media__thumb"><img src="hoge.png" alt=""></div>
            <div class="meta">
                <span class="meta__date">2015/12/31</span>
            </div>
        </a>
    </li>
</ul>
```


## Marginについて

基本的に8pxを最小単位でほぼすべてのmargin/paddingを管理。記述するさいも極力変数を使うようにすること。





