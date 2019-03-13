@extends('partials.layout')

@section('content')
    <div class="sidebar_layout">

        <div class="page_contain">
            <div class="contain">
                <aside class="sidebar">
                    <a href="#" class="logo">
                        <img class="mark" src="/img/logomark.min.svg" alt="Laravel">
                        <img class="type" src="/img/logotype.min.svg" alt="Laravel">
                    </a>
                    <nav>
                        <div class="navigation_contain">
                            <div class="docs_sidebar">
                                {!! $index !!}
                            </div>

                            <div id="carbonads"><span><span class="carbon-wrap"><a href="//srv.carbonads.net/ads/click/x/GTND42QWFTSDE2QUCA74YKQMCEADKKJWCWSDEZ3JCWBDE2Q7CVYI523KC6BIV53UCTAI6K3EHJNCLSIZ?segment=placement:laravelcom;" class="carbon-img" target="_blank" rel="noopener"><img src="https://cdn4.buysellads.net/uu/1/41312/1547165213-HS1.png" alt="" border="0" height="100" width="130" style="max-width: 130px;"></a><a href="//srv.carbonads.net/ads/click/x/GTND42QWFTSDE2QUCA74YKQMCEADKKJWCWSDEZ3JCWBDE2Q7CVYI523KC6BIV53UCTAI6K3EHJNCLSIZ?segment=placement:laravelcom;" class="carbon-text" target="_blank" rel="noopener">HelloSign: The Simple, Secure, Send in Seconds eSignature. Try it free today.</a></span><a href="http://carbonads.net/?utm_source=laravelcom&amp;utm_medium=ad_via_link&amp;utm_campaign=in_unit&amp;utm_term=carbon" class="carbon-poweredby" target="_blank" rel="noopener">ads via Carbon</a></span></div>

                        </div>
                    </nav>
                    <div class="trigger_contain">
                        <a href="#" class="nav_trigger"><div class="bar"></div></a>
                    </div>
                </aside>

                <section class="body_content">
                    <header class="docs_actions">
                        <div class="version_drop">
                            <div class="input_group">
                                <label>Version</label>
                                <div class="custom_select">
                                    <select>
                                        <option>Master</option>
                                        <option>5.7</option>
                                        <option>5.6</option>
                                        <option>5.5</option>
                                        <option>5.4</option>
                                        <option>5.3</option>
                                        <option>5.2</option>
                                        <option>5.1</option>
                                        <option>5.0</option>
                                        <option>4.2</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="search_contain">
                            <div class="input_group search icon">
                                <input type="text" placeholder="Search Docs">
                                <input type="submit" class="search_submit icon_display">
                            </div>
                        </div>
                    </header>
                    <section class="docs_body">
                        <nav class="docs_nav">
                            <h1 class="page_title">Installation</h1>
                        </nav>
                        <section class="docs_main">
                            {!! $content !!}

                            {{--<div class="pagination_links">--}}
                                {{--<a href="#" class="btn prev_link"><span><img src="/img/icons/arrow.min.svg" alt="Previous Section"><span class="text">Configuration</span></span></a>--}}

                                {{--<a href="#" class="btn next_link"><span><span class="text">Configuration</span><img src="/img/icons/arrow.min.svg" alt="Next Section"></span></a>--}}
                            {{--</div>--}}
                        </section>
                    </section>
                </section>
            </div>
        </div>

    </div>
@stop