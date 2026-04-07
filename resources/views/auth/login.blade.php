<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('images/favicon.ico') }}">
</head>
<body>
    
    <form action="{{ route('login') }}" method="post">
        @csrf 
        <dl class="form-list">
            <dt>メールアドレス</dt>
            <dd><input type="email" name="email" value="{{ old('email') }}"></dd>
            <dt>パスワード</dt>
            <dd><input type="password" name="password"></dd>
        </dl>
        <button type="submit">ログイン</button>
    </form>

</body>
</html>