<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/css/articlestyle.css')  }}" >
    <title>記事一覧</title>
</head>
<body>
<p><a href="/create" class="example">新規投稿</a></p>
<a href="/home" class="example">ホーム</a>
    <h2 class="title">投稿記事の一覧</h2>
    @foreach ($articles as $article)
    <article class="article-item">
        <div class="article-title"> {{ $article->title }} </div>
        <div class="article-body"> {{ $article->body }} </div>
    </article>
    @endforeach
</body>
</html>