@extends('layouts.default')

@section('title', 'team.com   テストページ')

@section('content')
  <!-- <p class="text-center"><img src="/logo.png" class="logo"></p> -->
  <div class="jumbotron">
    <!-- <div class="container"> -->
     <h1>Team.com</h1>
     <h2 class="about-h2">映像制作情報共有サイト</h2>
     <a class="btn btn-primary" href="{{ url('/about') }}" role="button">詳しくはこちら »</a>
    <!-- </div> -->
  </div>

  <div class="container">
    <div class="about">
    <div class="about-title">
      Team.comについて
    </div>
      <br>
      日々映像制作に関わられるみなさん、お疲れ様です。このサイトの管理人です。<br>
      映像制作には大変なことがたくさんあるかと思います。私も経験者の一人です。<br>
      それを少しでも軽くできないかと思い、映像制作に関わる情報をみんなで共有するサイトを作りました。<br>
      たくさんある映像制作チームが情報を共有して、一つのチームの様になれる様にとTeam.comと名付けました。<br>
      まだコンテンツはほとんど準備中ですが、役に立つ機能を思いつく限り、作成していく予定です。<br>
      みなさんがこのサイトを活用して、制作にかかる労力を少しでも減らして頂き、<br>
      その分映像のクオリティが上がることに繋がれば嬉しいです。
      <br>

    </div>
      <br>
    <div class="about-title">
      準備中コンテンツ...
    </div>

      <div class="row o-3column">
        <div class="col-md-4">
          <h2 class="about-website">お役立ちサイトまとめ</h2>
          <p class="about-image"><img src="/images/webpage.jpeg" class="column-image"></p>
            撮影スタジオ、オーディション会場、レンタカー屋さんなど、制作者がよく使うサイトをまとめます。
        </div>
        <div class="col-md-4">
          <h2>ロケ地情報掲示板</h2>
          <p class="about-image"><img src="/images/city.jpeg" class="column-image"></p>
            一般にはあまり公開していないが、ロケ地に利用された実績がある場所など、
            できる限り共有する掲示板を作ります。
        </div>
        <div class="col-md-4">
          <h2>制作便利グッズ紹介</h2>
          <p class="about-image"><img src="/images/toolbox.jpeg" class="column-image"></p>
            定番のものからあると便利な珍しいグッズの情報を紹介していきます。
        </div>
        <div class="col-md-4">
          <h2>連絡・共有ツール</h2>
          <p class="about-image"><img src="/images/cloud.jpeg" class="column-image"></p>
            制作者はスタッフ・キャストへたくさんの情報を共有する必要があります。
            情報共有に便利な最新のツールを紹介していきます。
        </div>
        <div class="col-md-4">
          <h2>スタジオ情報</h2>
          <p class="about-image"><img src="/images/eisyaki.jpeg" class="column-image"></p>
            映像でよく使われる定番のスタジオ情報をまとめます。
        </div>
        <div class="col-md-4">
          <h2 class="about-database">制作ファイルデータベース</h2>
          <p class="about-image"><img src="images/database.jpeg" class="column-image database-image"></p>
            制作マニュアルや、香盤表、ロケ地一覧、宿泊表などの様々なテンプレートを用意します。
        </div>

      </div>
  </div>

    <script src="/js/main.js"></script>


@endsection