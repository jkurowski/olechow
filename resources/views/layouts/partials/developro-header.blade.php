<div id="page-header" style="background:#272b34 url('https://arkio-react.wpocean.com/static/media/page-title.8925afce.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex align-items-end justify-content-center">
                <div class="page-header-content">
                    <div>
                        <h1>{{ $title }}</h1>
                        @include('layouts.partials.breadcrumbs', ['items' => $items, 'title' => $title])
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
