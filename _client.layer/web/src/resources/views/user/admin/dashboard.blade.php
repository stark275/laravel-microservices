@extends('layouts.admin.master')

@section('title')Tableau de bord
@endsection

@push('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/date-picker.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/owlcarousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/prism.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/whether-icon.css')}}">
@endpush
    @section('content')
        @component('components.breadcrumb')
            @slot('breadcrumb_title')
                <h3>Tableau de bord</h3>
            @endslot

        @endcomponent

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 col-xl-3 col-lg-6">
                    <div class="card o-hidden border-0">
                        <div class="bg-info b-r-4 card-body" style="background-color: #ad3f71 !important">
                            <div class="media static-top-widget">
                                <div class="align-self-center text-center"><i data-feather="shopping-cart"></i></div>
                                <div class="media-body">
                                    <span class="m-0">Boutiques</span>
                                    <h4 class="mb-0 counter">8</h4>
                                    <i class="icon-bg" data-feather="shopping-cart"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3 col-lg-6">
                    <div class="card o-hidden border-0">
                        <div class="bg-secondary b-r-4 card-body" style="background-color:  #673ab7 !important">
                            <div class="media static-top-widget">
                                <div class="align-self-center text-center"><i data-feather="users"></i></div>
                                <div class="media-body">
                                    <span class="m-0">Agents</span>
                                    <h4 class="mb-0 counter">16</h4>
                                    <i class="icon-bg" data-feather="users"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3 col-lg-6">
                    <div class="card o-hidden border-0">
                        <div class="bg-primary b-r-4 card-body" style="background-color: #03a9f4  !important">
                            <div class="media static-top-widget">
                                <div class="align-self-center text-center"><i data-feather="database"></i></div>
                                <div class="media-body">
                                    <span class="m-0">Produit</span>
                                    <h4 class="mb-0 counter">15</h4>
                                    <i class="icon-bg" data-feather="database"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3 col-lg-6">
                    <div class="card o-hidden border-0">
                        <div class="bg-primary b-r-4 card-body" style="background-color: #ad3f71 !important">
                            <div class="media static-top-widget">
                                <div class="align-self-center text-center"><i data-feather="layers"></i></div>
                                <div class="media-body">
                                    <span class="m-0">Operations</span>
                                    <h4 class="mb-0 counter">23111</h4>
                                    <i class="icon-bg" data-feather="layers"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-12 box-col-12 des-xl-100 dashboard-sec">
                    <div class="card income-card">
                      <div class="card-header">
                        <div class="header-top d-sm-flex align-items-center">
                          <h5>Vue globale des recettes</h5>
                          <div class="center-content">
                            <p class="d-sm-flex align-items-center"><span class="font-primary m-r-10 f-w-700">+ 49.000 Fc</span><i class="toprightarrow-primary fa fa-arrow-up m-r-10"></i> + 15% </p>
                          </div>
                          <div class="setting-list">
                            <ul class="list-unstyled setting-option">
                              <li>
                                <div class="setting-primary"><i class="icon-settings"></i></div>
                              </li>
                              <li><i class="view-html fa fa-code font-primary"></i></li>
                              <li><i class="icofont icofont-maximize full-card font-primary"></i></li>
                              <li><i class="icofont icofont-minus minimize-card font-primary"></i></li>
                              <li><i class="icofont icofont-refresh reload-card font-primary"></i></li>
                              <li><i class="icofont icofont-error close-card font-primary"></i></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="card-body p-0">
                        <div id="chart-timeline-dashbord"></div>
                        <div class="code-box-copy">
                          <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#yearly-overview" title="Copy"><i class="icofont icofont-copy-alt"></i></button>


                        </div>
                      </div>
                    </div>
                  </div>

                <div class="col-xl-12 xl-100 box-col-12">
                    <div class="card o-hidden">
                      <div class="card-header pb-0">
                        <h5>Statistques des présences</h5>
                      </div>
                      <div class="bar-chart-widget">
                        <div class="bottom-content card-body">
                          <div class="row">
                            <div class="col-12">
                              <div id="chart-widget4"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>

                <div class="col-xl-6 xl-100 box-col-12">
                    <div class="widget-joins card widget-arrow">
                        <div class="row">
                            <div class="col-sm-6 pe-0">
                                <div class="media border-after-xs">
                                    <div class="align-self-center me-3 text-start">
                                        <span class="widget-t mb-1">Participation</span>
                                        <h5 class="mb-0">Aujourd'hui</h5>
                                    </div>
                                    <div class="media-body align-self-center"><i class="font-danger" data-feather="arrow-down"></i></div>
                                    <div class="media-body">
                                        <h5 class="mb-0"><span class="counter">207</span></h5>
                                        <span class="mb-1">-16%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 ps-0">
                                <div class="media">
                                    <div class="align-self-center me-3 text-start">
                                        <span class="widget-t mb-1">Participation</span>
                                        <h5 class="mb-0">Ce Mois</h5>
                                    </div>
                                    <div class="media-body align-self-center"><i class="font-primary" data-feather="arrow-up"></i></div>
                                    <div class="media-body ps-2">
                                        <h5 class="mb-0"><span class="counter">654</span></h5>
                                        <span class="mb-1">+7%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 pe-0">
                                <div class="media border-after-xs">
                                    <div class="align-self-center me-3 text-start">
                                        <span class="widget-t mb-1">Participation</span>
                                        <h5 class="mb-0">La Semaine dernière</h5>
                                    </div>
                                    <div class="media-body align-self-center"><i class="font-primary" data-feather="arrow-up"></i></div>
                                    <div class="media-body">
                                        <h5 class="mb-0"><span class="counter">227</span></h5>
                                        <span class="mb-1">+2</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 ps-0">
                                <div class="media">
                                    <div class="align-self-center me-3 text-start">
                                        <span class="widget-t mb-1">Participation</span>
                                        <h5 class="mb-0">Year</h5>
                                    </div>
                                    <div class="media-body align-self-center ps-3"><i class="font-danger" data-feather="arrow-down"></i></div>
                                    <div class="media-body ps-2">
                                        <h5 class="mb-0"><span class="counter">3198</span></h5>
                                        <span class="mb-1">-1% </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 xl-100 box-col-12">
                    <div class="card">
                        <div class="cal-date-widget card-body">
                            <div class="row">
                                <div class="col-xl-6 col-xs-12 col-md-6 col-sm-6">
                                    <div class="cal-info text-center">
                                        <div>
                                            <h2>24</h2>
                                            <div class="d-inline-block"><span class="b-r-dark pe-3">Novembre</span><span class="ps-3">2022</span></div>
                                            <p class="f-16">Collation de la 11<sup>ème</sup>  promotion avec rémise des certificats</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-xs-12 col-md-6 col-sm-6">
                                    <div class="cal-datepicker">
                                        <div class="datepicker-here float-sm-end" data-language="en">    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>




            </div>
        </div>

    @push('scripts')
        <script src="{{asset('assets/js/prism/prism.min.js')}}"></script>
        <script src="{{asset('assets/js/clipboard/clipboard.min.js')}}"></script>
        <script src="{{asset('assets/js/counter/jquery.waypoints.min.js')}}"></script>
        <script src="{{asset('assets/js/counter/jquery.counterup.min.js')}}"></script>
        <script src="{{asset('assets/js/counter/counter-custom.js')}}"></script>
        <script src="{{asset('assets/js/custom-card/custom-card.js')}}"></script>
        <script src="{{asset('assets/js/datepicker/date-picker/datepicker.js')}}"></script>
        <script src="{{asset('assets/js/datepicker/date-picker/datepicker.en.js')}}"></script>
        <script src="{{asset('assets/js/datepicker/date-picker/datepicker.custom.js')}}"></script>
        <script src="{{asset('assets/js/owlcarousel/owl.carousel.js')}}"></script>
        <script src="{{asset('assets/js/general-widget.js')}}"></script>
        <script src="{{asset('assets/js/height-equal.js')}}"></script>
        <script src="{{asset('assets/js/tooltip-init.js')}}"></script>

        <script src="{{asset('assets/js/chart/apex-chart/moment.min.js')}}"></script>
        <script src="{{asset('assets/js/chart/apex-chart/apex-chart.js')}}"></script>
        <script src="{{asset('assets/js/chart/apex-chart/stock-prices.js')}}"></script>
        <script src="{{asset('assets/js/dashboard/default.js')}}"></script>


        <script src="{{asset('assets/js/chart-widget.js')}}"></script>

    @endpush
@endsection
