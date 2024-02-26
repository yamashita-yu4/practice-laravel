<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/css/articlestyle.css')  }}" >
    <title>記事投稿</title>
</head>
<body>
<h2 class="title">記事の投稿</h2>
<p><a href=" {{ route('edit.index') }}" class="example">一覧に戻る</a></p>
    <form action="{{ route('edit.store') }}" method="post">
        @csrf
        <div class="form-list">
        @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li class="err_message">{{ $error }}</li>
            @endforeach
        </ul>
        @endif
            <p><span class="article-title">タイトル</span></p>
            <input type="text" name="title" class="article-item" value="{{ old('title') }}">
            <p><span class="article-title">本文</span></p>
            <textarea name="body" rows="5" class="article-item">{{ old('body') }}</textarea>
        </div>
        <button type="submit">投稿する</button>
    </form>
</body>
</html>