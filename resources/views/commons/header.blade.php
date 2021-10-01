<header class="navbar navbar-dark bg-warning">
    <a class="navbar-brand text-dark" href="/">
        探求学園Laravel専攻
    </a>
    <ul class="list-inline navbar-brand-01 text-dark">
        @if (Auth::check())
            <p class="text-center offset-9 pt-1">{{ Auth::user()->last_name}}さん</p>
            <li class="nav-item list-inline-item">
                <a href="{{ route('search.products') }}" class="nav-link">商品検索</a>
            </li>
            <li class="nav-item list-inline-item">
                <a href="#" class="nav-link">カート</a>
            </li>
            <li class="nav-item list-inline-item">
                <a href="#" class="nav-link">注文履歴</a>
            </li>
            <li class="nav-item list-inline-item">
                <a href="#" class="nav-link">ユーザー情報</a>
            </li>
            <li class="nav-item list-inline-item">
                <a href="{{ route('logout') }}" class="nav-link">ログアウト</a>
            </li>
        @else
        <li class="nav-item list-inline-item">
            <a href="{{ route('login') }}" class="nav-link">ログイン</a>
        </li>
        <li class="nav-item list-inline-item">
            <a href="{{ route('signup') }}" class="nav-link">新規登録</a>
        </li>
        @endif
    </ul>
    <script>
        @if (session('flash_message'))
            $(function ()
            {
                toastr.warning('{{ session('flash_message') }}');
            });
        @endif
    </script>
</header>
