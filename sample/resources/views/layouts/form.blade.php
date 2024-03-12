<div class="cp_iptxt">
        <input type="text" name="name" size="30" class="ef" value="{{ old('name') }}">
        <label>名前</label>
        <span class="err_message"> {{ $errors->first('name') }}</span>
        <span class="focus_line"><i></i></span>
    </div>
    <div class="cp_iptxt">
        <input type="text" name="email" size="30" class="ef" value="{{ old('email') }}">
        <label>メールアドレス</label>
        <span class="err_message"> {{ $errors->first('email') }}</span>
        <span class="focus_line"><i></i></span>
    </div>
    <div class="cp_iptxt">
        <input type="password" name="password" size="30" class="ef">
        <label>パスワード</label>
        <span class="err_message"> {{ $errors->first('password') }}</span>
        <span class="focus_line"><i></i></span>
    </div>
    <div class="cp_iptxt">
        <input type="password" name="password_confirmation" size="30" class="ef">
        <label>パスワード(確認)</label>
        <span class="err_message"> {{ $errors->first('password_confirmation') }}</span>
        <span class="focus_line"><i></i></span>
    </div>
    <div class="cp_iptxt">
    <button type="submit" name="action" value="send">送信</button>
</div>