<div class="header-holder">
    <header>
        <div id="header">
            <div class="container-fluid p-0">
                <div class="row no-gutters">
                    <div class="col-6 col-lg-2 d-flex align-items-center">
                        <div id="logo">
                            <a href="/">
                                <img src="{{ asset('/gfx/logo.svg') }}" alt="Logo Bliski Olechów" width="166" class="logo-v">
                                <img src="{{ asset('/gfx/logo-h.svg') }}" alt="Logo Bliski Olechów" width="100" height="41" class="logo-h">
                            </a>
                        </div>
                    </div>
                    <div class="col-6 col-lg-10">
                        <nav>
                            <ul class="mb-0 list-unstyled header-menu">
                                <li><a href="{{ route('front.investment.show') }}">Mieszkania</a></li>
                                <li><a href="{{ route('front.location.index') }}">Lokalizacja</a></li>
                                <li><a href="{{ route('front.gallery.index') }}">Galeria</a></li>
                                <li><a href="{{ route('howtobuy.index') }}">Jak kupić</a></li>
                                <li>
                                    <a href="#">Dla klienta</a>
                                    <ul class="submenu">
                                        <li><a href="{{ route('kredyty.index') }}">Kredyt</a></li>
                                        <li><a href="{{ route('pakiety.index') }}">Pakiety wykończeniowe</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ route('front.news.index') }}">Aktualności</a></li>
                                <li><a href="{{ route('land.index') }}">Kupimy grunty</a></li>
                                <li><a href="{{ route('contact.index') }}">Kontakt</a></li>
                                <li class="header-cta"><a href="tel:+48576117119"><i class="las la-phone"></i> +48 576 117 119</a></li>
                            </ul>
                            <div id="triggermenu">MENU</div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
</div>
<div id="megamenu-opacity"></div>
