# README

[DEMO](https://flanky.herokuapp.com/ "DEMO")

## 対応ブラウザについて

- Android OS 4.1以上

- iOS 6以上

- IE9以上

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




