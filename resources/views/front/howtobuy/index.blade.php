@extends('layouts.page')

@section('meta_title', $page->title)

@section('pageheader')
    @include('layouts.partials.page-header', ['page' => $page])
@stop

@section('content')
    <div id="howtobuy">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="section-title">Kilka kroków do Bliskiego Olechowa</h2>
                    <div class="timeline-block">
                        <div class="format-container">
                            <div class="js-timeline timeline">
                                <div class="js-timeline_line timeline_line">
                                    <div class="js-timeline_line-progress timeline_line-progress"></div>
                                </div>
                                <div class="timeline_list">
                                    <div class="timeline_item js-active">
                                        <div class="timeline-card_box">
                                            <div class="js-timeline-card_point-box timeline-card_point-box">
                                                <div class="timeline-card_point">1</div>
                                            </div>
                                        </div>
                                        <div class="timeline-card_item">
                                            <div class="timeline-card_inner">
                                                <div class="timeline-card_img-box">
                                                    <img src="https://raw.githubusercontent.com/SochavaAG/example-mycode/master/pens/timeline/images/img-13.png" class="timeline-card_img" width="640" height="360" />
                                                </div>
                                                <div class="timeline-card_info">
                                                    <div class="timeline-card_desc"><p>Spotkajmy się! Zapraszamy do naszego biura, gdzie pokażemy Państwu wszystkie zalety inwestycji.</p></div>
                                                </div>
                                            </div>
                                            <div class="timeline-card_arrow"></div>
                                        </div>
                                    </div>

                                    <div class="js-timeline_item timeline_item">
                                        <div class="timeline-card_box">
                                            <div class="js-timeline-card_point-box timeline-card_point-box">
                                                <div class="timeline-card_point">2</div>
                                            </div>
                                        </div>
                                        <div class="timeline-card_item">
                                            <div class="timeline-card_inner">
                                                <div class="timeline-card_img-box">
                                                    <img src="https://raw.githubusercontent.com/SochavaAG/example-mycode/master/pens/timeline/images/img-12.png" class="timeline-card_img" width="640" height="360" alt="" />
                                                </div>
                                                <div class="timeline-card_info">
                                                    <div class="timeline-card_desc"><p>Jak możemy pomóc? Nasi sprzedawcy postarają się jak najlepiej zrozumieć Państwa potrzeby i zaproponować mieszkania, które idealnie na nie odpowiadają.</p></div>
                                                </div>
                                            </div>
                                            <div class="timeline-card_arrow"></div>
                                        </div>
                                    </div>

                                    <div class="js-timeline_item timeline_item">
                                        <div class="timeline-card_box">
                                            <div class="js-timeline-card_point-box timeline-card_point-box">
                                                <div class="timeline-card_point">3</div>
                                            </div>
                                        </div>
                                        <div class="timeline-card_item">
                                            <div class="timeline-card_inner">
                                                <div class="timeline-card_img-box">
                                                    <img src="https://raw.githubusercontent.com/SochavaAG/example-mycode/master/pens/timeline/images/img-11.png" class="timeline-card_img" width="640" height="360" alt="" />
                                                </div>
                                                <div class="timeline-card_info">
                                                    <div class="timeline-card_desc"><p>Czas na konkrety: terminy realizacji inwestycji, harmonogram płatności, treść umowy rezerwacyjnej i deweloperskiej – to wszystko wyjaśniamy w jasny i zrozumiały sposób.</p></div>
                                                </div>
                                            </div>
                                            <div class="timeline-card_arrow"></div>
                                        </div>
                                    </div>

                                    <div class="js-timeline_item timeline_item">
                                        <div class="timeline-card_box">
                                            <div class="js-timeline-card_point-box timeline-card_point-box">
                                                <div class="timeline-card_point">4</div>
                                            </div>
                                        </div>
                                        <div class="timeline-card_item">
                                            <div class="timeline-card_inner">
                                                <div class="timeline-card_img-box">
                                                    <img src="https://raw.githubusercontent.com/SochavaAG/example-mycode/master/pens/timeline/images/img-10.png" class="timeline-card_img" width="640" height="360" alt="" />
                                                </div>
                                                <div class="timeline-card_info">
                                                    <div class="timeline-card_desc"><p>Umowa rezerwacyjna</p></div>
                                                </div>
                                            </div>
                                            <div class="timeline-card_arrow"></div>
                                        </div>
                                    </div>

                                    <div class="js-timeline_item timeline_item">
                                        <div class="timeline-card_box">
                                            <div class="js-timeline-card_point-box timeline-card_point-box">
                                                <div class="timeline-card_point">5</div>
                                            </div>
                                        </div>
                                        <div class="timeline-card_item">
                                            <div class="timeline-card_inner">
                                                <div class="timeline-card_img-box">
                                                    <img src="https://raw.githubusercontent.com/SochavaAG/example-mycode/master/pens/timeline/images/img-9.png" class="timeline-card_img" width="640" height="360" alt="" />
                                                </div>
                                                <div class="timeline-card_info">
                                                    <div class="timeline-card_desc"><p>Wsparcie w uzyskaniu finansowania</p></div>
                                                </div>
                                            </div>
                                            <div class="timeline-card_arrow"></div>
                                        </div>
                                    </div>

                                    <div class="js-timeline_item timeline_item">
                                        <div class="timeline-card_box">
                                            <div class="js-timeline-card_point-box timeline-card_point-box">
                                                <div class="timeline-card_point">6</div>
                                            </div>
                                        </div>
                                        <div class="timeline-card_item">
                                            <div class="timeline-card_inner">
                                                <div class="timeline-card_img-box">
                                                    <img src="https://raw.githubusercontent.com/SochavaAG/example-mycode/master/pens/timeline/images/img-8.png" class="timeline-card_img" width="640" height="360" alt="" />
                                                </div>
                                                <div class="timeline-card_info">
                                                    <div class="timeline-card_desc"><p>Podpisanie umowy deweloperskiej u notariusza</p></div>
                                                </div>
                                            </div>
                                            <div class="timeline-card_arrow"></div>
                                        </div>
                                    </div>

                                    <div class="js-timeline_item timeline_item">
                                        <div class="timeline-card_box">
                                            <div class="js-timeline-card_point-box timeline-card_point-box">
                                                <div class="timeline-card_point">7</div>
                                            </div>
                                        </div>
                                        <div class="timeline-card_item">
                                            <div class="timeline-card_inner">
                                                <div class="timeline-card_img-box">
                                                    <img src="https://raw.githubusercontent.com/SochavaAG/example-mycode/master/pens/timeline/images/img-7.png" class="timeline-card_img" width="640" height="360" alt="" />
                                                </div>
                                                <div class="timeline-card_info">
                                                    <div class="timeline-card_desc"><p>Zmiany lokatorskie i formalny odbiór mieszkania</p></div>
                                                </div>
                                            </div>
                                            <div class="timeline-card_arrow"></div>
                                        </div>
                                    </div>

                                    <div class="js-timeline_item timeline_item">
                                        <div class="timeline-card_box">
                                            <div class="js-timeline-card_point-box timeline-card_point-box">
                                                <div class="timeline-card_point">8</div>
                                            </div>
                                        </div>
                                        <div class="timeline-card_item">
                                            <div class="timeline-card_inner">
                                                <div class="timeline-card_img-box">
                                                    <img src="https://raw.githubusercontent.com/SochavaAG/example-mycode/master/pens/timeline/images/img-6.png" class="timeline-card_img" width="640" height="360" alt="" />
                                                </div>
                                                <div class="timeline-card_info">
                                                    <div class="timeline-card_desc"><p>Finalna umowa notarialna przenosząca własność mieszkania</p></div>
                                                </div>
                                            </div>
                                            <div class="timeline-card_arrow"></div>
                                        </div>
                                    </div>

                                    <div class="js-timeline_item timeline_item">
                                        <div class="timeline-card_box">
                                            <div class="js-timeline-card_point-box timeline-card_point-box">
                                                <div class="timeline-card_point">9</div>
                                            </div>
                                        </div>
                                        <div class="timeline-card_item">
                                            <div class="timeline-card_inner">
                                                <div class="timeline-card_img-box">
                                                    <img src="https://raw.githubusercontent.com/SochavaAG/example-mycode/master/pens/timeline/images/img-5.png" class="timeline-card_img" width="640" height="360" alt="" />
                                                </div>
                                                <div class="timeline-card_info">
                                                    <div class="timeline-card_desc"><p>Komfortowe życie na osiedlu Bliski Olechów </p></div>
                                                </div>
                                            </div>
                                            <div class="timeline-card_arrow"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script type="text/javascript">
        (function ($) {
            $(function () {
                $(window).on('scroll', function () {
                    fnOnScroll();
                });

                $(window).on('resize', function () {
                    fnOnResize();
                });

                let agTimeline = $('.js-timeline'),
                    agTimelineLine = $('.js-timeline_line'),
                    agTimelineLineProgress = $('.js-timeline_line-progress'),
                    agTimelinePoint = $('.js-timeline-card_point-box'),
                    agTimelineItem = $('.js-timeline_item'),
                    agOuterHeight = $(window).outerHeight(),
                    agHeight = $(window).height(),
                    f = -1,
                    agFlag = false;

                function fnOnScroll() {
                    agPosY = $(window).scrollTop();
                    fnUpdateFrame();
                }

                function fnOnResize() {
                    agPosY = $(window).scrollTop();
                    agHeight = $(window).height();
                    fnUpdateFrame();
                }

                function fnUpdateWindow() {
                    agFlag = false;
                    agTimelineLine.css({
                        top: agTimelineItem.first().find(agTimelinePoint).offset().top - agTimelineItem.first().offset().top,
                        bottom: agTimeline.offset().top + agTimeline.outerHeight() - agTimelineItem.last().find(agTimelinePoint).offset().top
                    });
                    f !== agPosY && (f = agPosY, agHeight, fnUpdateProgress());
                }

                function fnUpdateProgress() {
                    const agTop = agTimelineItem.last().find(agTimelinePoint).offset().top;

                    i = agTop + agPosY - $(window).scrollTop();
                    a = agTimelineLineProgress.offset().top + agPosY - $(window).scrollTop();
                    n = agPosY - a + agOuterHeight / 2;
                    i <= agPosY + agOuterHeight / 2 && (n = i - a);
                    agTimelineLineProgress.css({height: n + "px"});
                    agTimelineItem.each(function () {
                        const agTop = $(this).find(agTimelinePoint).offset().top;
                        (agTop + agPosY - $(window).scrollTop()) < agPosY + .5 * agOuterHeight ? $(this).addClass('js-active') : $(this).removeClass('js-active');
                    })
                }

                function fnUpdateFrame() {
                    agFlag || requestAnimationFrame(fnUpdateWindow);
                    agFlag = true;
                }
            });
        })(jQuery);
    </script>
@endpush
