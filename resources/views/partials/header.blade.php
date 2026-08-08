<!-- ===== HEADER START ===== -->
<header class="site-header">
    <h1>فروشگاه تکنولوژی</h1>
    <p>جدیدترین محصولات دیجیتال</p>
    <nav class="header-nav">
        @auth
            <a href="{{ route('profile.edit') }}" class="nav-link">پروفایل من</a>

            <form method="POST" action="{{ route('logout') }}" style="display:inline">
                @csrf
                <button type="submit" class="nav-btn">خروج</button>
            </form>
        @else
            <a href="{{ route('login') }}" class="nav-link">ورود</a>
            <a href="{{ route('register') }}" class="nav-link nav-link-primary">ثبت‌نام</a>
        @endauth
    </nav>
</header>
<!-- ===== HEADER END ===== -->
