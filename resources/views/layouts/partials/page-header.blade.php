<div id="page-header" style="background:#272b34 url('https://arkio-react.wpocean.com/static/media/page-title.8925afce.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex align-items-end justify-content-center">
                <div class="page-header-content">
                    <div>
                        <h1>{{($page->page_title) ? : $page->title}}</h1>
                        @include('layouts.partials.breadcrumbs', ['items' => $page->ancestors, 'title' => ($page->content_header) ?: $page->title])
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
