<header class="header">

    <div class="flex">

        <a href="{{ route('dashboard') }}" class="logo">Assalam<span>Hypermarket</span></a>

        <nav class="navbar">
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ url('https://assalaammarket.com/shop/') }}">Belanja</a>
            <a href="saldopoin.php">Saldo Poin</a>
            <a href="{{ route('addmember') }}">Membership</a>
            <a href="about.php">About</a>
        </nav>

        <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <a href="{{ route('userprofile') }}" class="fas fa-user"></a>
        </div>

    </div>

</header>
