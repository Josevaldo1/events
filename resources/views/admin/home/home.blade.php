@extends('layouts.admin.main')
@section('title','Home')
@section('title-dash','Admin Dashboard')
@section('sub-dash','Painel Administrativo')
@section('content')
 <!-- Dashboard summery Start Here -->
 <div class="row gutters-20">
    <div class="col-xl-3 col-sm-6 col-12">
        <div class="dashboard-summery-one mg-b-20">
            <div class="row align-items-center">
                <div class="col-6">
                    <div class="item-icon bg-light-green ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-gear-fill text-green" viewBox="0 0 16 16">
                            <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/>
                          </svg>
                    </div>
                </div>
                <div class="col-6">
                    <div class="item-content">
                        <div class="item-title">Serviços</div>
                        <div class="item-number"><span class="counter" data-num="150000">1,50,000</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 col-12">
        <div class="dashboard-summery-one mg-b-20">
            <div class="row align-items-center">
                <div class="col-6">
                    <div class="item-icon bg-light-blue">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-images text-blue" viewBox="0 0 16 16">
                            <path d="M4.502 9a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                            <path d="M14.002 13a2 2 0 0 1-2 2h-10a2 2 0 0 1-2-2V5A2 2 0 0 1 2 3a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v8a2 2 0 0 1-1.998 2zM14 2H4a1 1 0 0 0-1 1h9.002a2 2 0 0 1 2 2v7A1 1 0 0 0 15 11V3a1 1 0 0 0-1-1zM2.002 4a1 1 0 0 0-1 1v8l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71a.5.5 0 0 1 .577-.094l1.777 1.947V5a1 1 0 0 0-1-1h-10z"/>
                          </svg>
                    </div>
                </div>
                <div class="col-6">
                    <div class="item-content">
                        <div class="item-title">Projectos</div>
                        <div class="item-number"><span class="counter" data-num="2250">2,250</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 col-12">
        <div class="dashboard-summery-one mg-b-20">
            <div class="row align-items-center">
                <div class="col-6">
                    <div class="item-icon bg-light-yellow">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-newspaper text-orange" viewBox="0 0 16 16">
                            <path d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5v-11zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5H12z"/>
                            <path d="M2 3h10v2H2V3zm0 3h4v3H2V6zm0 4h4v1H2v-1zm0 2h4v1H2v-1zm5-6h2v1H7V6zm3 0h2v1h-2V6zM7 8h2v1H7V8zm3 0h2v1h-2V8zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1z"/>
                          </svg>
                    </div>
                </div>
                <div class="col-6">
                    <div class="item-content">
                        <div class="item-title">Notícias</div>
                        <div class="item-number"><span class="counter" data-num="5690">5,690</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 col-12">
        <div class="dashboard-summery-one mg-b-20">
            <div class="row align-items-center">
                <div class="col-6">
                    <div class="item-icon bg-light-red">
                        <i class="flaticon-multiple-users-silhouette text-red"></i>
                    </div>
                </div>
                 <div class="col-6">
                    <div class="item-content">
                        <div class="item-title">Usuários</div>
                        <div class="item-number"><span class="counter" data-num="5690">5,690</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Dashboard summery End Here -->
<!-- Dashboard Content Start Here -->
<div class="row gutters-20">
    <div class="col-12 col-xl-8 col-6-xxxl">
        <div class="card dashboard-card-one pd-b-20">
            <div class="card-body">
                <div class="heading-layout1">
                    <div class="item-title">
                        <h3>Earnings</h3>
                    </div>
                    <div class="dropdown">
                        <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                            aria-expanded="false">...</a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#"><i
                                    class="fas fa-times text-orange-red"></i>Close</a>
                            <a class="dropdown-item" href="#"><i
                                    class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                            <a class="dropdown-item" href="#"><i
                                    class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                        </div>
                    </div>
                </div>
                <div class="earning-report">
                    <div class="item-content">
                        <div class="single-item pseudo-bg-blue">
                            <h4>Total Collections</h4>
                            <span>75,000</span>
                        </div>
                        <div class="single-item pseudo-bg-red">
                            <h4>Fees Collection</h4>
                            <span>15,000</span>
                        </div>
                    </div>
                    <div class="dropdown">
                        <a class="date-dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                            aria-expanded="false">Jan 20, 2019</a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">Jan 20, 2019</a>
                            <a class="dropdown-item" href="#">Jan 20, 2021</a>
                            <a class="dropdown-item" href="#">Jan 20, 2020</a>
                        </div>
                    </div>
                </div>
                <div class="earning-chart-wrap">
                    <canvas id="earning-line-chart" width="660" height="320"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-xl-4 col-3-xxxl">
        <div class="card dashboard-card-two pd-b-20">
            <div class="card-body">
                <div class="heading-layout1">
                    <div class="item-title">
                        <h3>Expenses</h3>
                    </div>
                    <div class="dropdown">
                        <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                            aria-expanded="false">...</a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#"><i
                                    class="fas fa-times text-orange-red"></i>Close</a>
                            <a class="dropdown-item" href="#"><i
                                    class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                            <a class="dropdown-item" href="#"><i
                                    class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                        </div>
                    </div>
                </div>
                <div class="expense-report">
                    <div class="monthly-expense pseudo-bg-Aquamarine">
                        <div class="expense-date">Jan 2019</div>
                        <div class="expense-amount"><span>$</span> 15,000</div>
                    </div>
                    <div class="monthly-expense pseudo-bg-blue">
                        <div class="expense-date">Feb 2019</div>
                        <div class="expense-amount"><span>$</span> 10,000</div>
                    </div>
                    <div class="monthly-expense pseudo-bg-yellow">
                        <div class="expense-date">Mar 2019</div>
                        <div class="expense-amount"><span>$</span> 8,000</div>
                    </div>
                </div>
                <div class="expense-chart-wrap">
                    <canvas id="expense-bar-chart" width="100" height="300"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-xl-6 col-3-xxxl">
        <div class="card dashboard-card-three pd-b-20">
            <div class="card-body">
                <div class="heading-layout1">
                    <div class="item-title">
                        <h3>Students</h3>
                    </div>
                    <div class="dropdown">
                        <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                            aria-expanded="false">...</a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#"><i
                                    class="fas fa-times text-orange-red"></i>Close</a>
                            <a class="dropdown-item" href="#"><i
                                    class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                            <a class="dropdown-item" href="#"><i
                                    class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                        </div>
                    </div>
                </div>
                <div class="doughnut-chart-wrap">
                    <canvas id="student-doughnut-chart" width="100" height="300"></canvas>
                </div>
                <div class="student-report">
                    <div class="student-count pseudo-bg-blue">
                        <h4 class="item-title">Female Students</h4>
                        <div class="item-number">45,000</div>
                    </div>
                    <div class="student-count pseudo-bg-yellow">
                        <h4 class="item-title">Male Students</h4>
                        <div class="item-number">1,05,000</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-xl-6 col-4-xxxl">
        <div class="card dashboard-card-four pd-b-20">
            <div class="card-body">
                <div class="heading-layout1">
                    <div class="item-title">
                        <h3>Event Calender</h3>
                    </div>
                    <div class="dropdown">
                        <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                            aria-expanded="false">...</a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#"><i
                                    class="fas fa-times text-orange-red"></i>Close</a>
                            <a class="dropdown-item" href="#"><i
                                    class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                            <a class="dropdown-item" href="#"><i
                                    class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                        </div>
                    </div>
                </div>
                <div class="calender-wrap">
                    <div id="fc-calender" class="fc-calender"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-xl-6 col-4-xxxl">
        <div class="card dashboard-card-five pd-b-20">
            <div class="card-body pd-b-14">
                <div class="heading-layout1">
                    <div class="item-title">
                        <h3>Website Traffic</h3>
                    </div>
                    <div class="dropdown">
                        <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                            aria-expanded="false">...</a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#"><i
                                    class="fas fa-times text-orange-red"></i>Close</a>
                            <a class="dropdown-item" href="#"><i
                                    class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                            <a class="dropdown-item" href="#"><i
                                    class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                        </div>
                    </div>
                </div>
                <h6 class="traffic-title">Unique Visitors</h6>
                <div class="traffic-number">2,590</div>
                <div class="traffic-bar">
                    <div class="direct" data-toggle="tooltip" data-placement="top" title="Direct">
                    </div>
                    <div class="search" data-toggle="tooltip" data-placement="top" title="Search">
                    </div>
                    <div class="referrals" data-toggle="tooltip" data-placement="top" title="Referrals">
                    </div>
                    <div class="social" data-toggle="tooltip" data-placement="top" title="Social">
                    </div>
                </div>
                <div class="traffic-table table-responsive">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td class="t-title pseudo-bg-Aquamarine">Direct</td>
                                <td>12,890</td>
                                <td>50%</td>
                            </tr>
                            <tr>
                                <td class="t-title pseudo-bg-blue">Search</td>
                                <td>7,245</td>
                                <td>27%</td>
                            </tr>
                            <tr>
                                <td class="t-title pseudo-bg-yellow">Referrals</td>
                                <td>4,256</td>
                                <td>8%</td>
                            </tr>
                            <tr>
                                <td class="t-title pseudo-bg-red">Social</td>
                                <td>500</td>
                                <td>7%</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-xl-6 col-4-xxxl">
        <div class="card dashboard-card-six pd-b-20">
            <div class="card-body">
                <div class="heading-layout1 mg-b-17">
                    <div class="item-title">
                        <h3>Notice Board</h3>
                    </div>
                    <div class="dropdown">
                        <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                            aria-expanded="false">...</a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#"><i
                                    class="fas fa-times text-orange-red"></i>Close</a>
                            <a class="dropdown-item" href="#"><i
                                    class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                            <a class="dropdown-item" href="#"><i
                                    class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                        </div>
                    </div>
                </div>
                <div class="notice-box-wrap">
                    <div class="notice-list">
                        <div class="post-date bg-skyblue">16 June, 2019</div>
                        <h6 class="notice-title"><a href="#">Great School manag mene esom text of the
                                printing.</a></h6>
                        <div class="entry-meta"> Jennyfar Lopez / <span>5 min ago</span></div>
                    </div>
                    <div class="notice-list">
                        <div class="post-date bg-yellow">16 June, 2019</div>
                        <h6 class="notice-title"><a href="#">Great School manag printing.</a></h6>
                        <div class="entry-meta"> Jennyfar Lopez / <span>5 min ago</span></div>
                    </div>
                    <div class="notice-list">
                        <div class="post-date bg-pink">16 June, 2019</div>
                        <h6 class="notice-title"><a href="#">Great School manag meneesom.</a></h6>
                        <div class="entry-meta"> Jennyfar Lopez / <span>5 min ago</span></div>
                    </div>
                    <div class="notice-list">
                        <div class="post-date bg-skyblue">16 June, 2019</div>
                        <h6 class="notice-title"><a href="#">Great School manag mene esom text of the
                                printing.</a></h6>
                        <div class="entry-meta"> Jennyfar Lopez / <span>5 min ago</span></div>
                    </div>
                    <div class="notice-list">
                        <div class="post-date bg-yellow">16 June, 2019</div>
                        <h6 class="notice-title"><a href="#">Great School manag printing.</a></h6>
                        <div class="entry-meta"> Jennyfar Lopez / <span>5 min ago</span></div>
                    </div>
                    <div class="notice-list">
                        <div class="post-date bg-pink">16 June, 2019</div>
                        <h6 class="notice-title"><a href="#">Great School manag meneesom.</a></h6>
                        <div class="entry-meta"> Jennyfar Lopez / <span>5 min ago</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Dashboard Content End Here -->
<!-- Social Media Start Here -->
<div class="row gutters-20">
    <div class="col-lg-3 col-sm-6 col-12">
        <div class="card dashboard-card-seven">
            <div class="social-media bg-fb hover-fb">
                <div class="media media-none--lg">
                    <div class="social-icon">
                        <i class="fab fa-facebook-f"></i>
                    </div>
                    <div class="media-body space-sm">
                        <h6 class="item-title">Like us on facebook</h6>
                    </div>
                </div>
                <div class="social-like">30,000</div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6 col-12">
        <div class="card dashboard-card-seven">
            <div class="social-media bg-twitter hover-twitter">
                <div class="media media-none--lg">
                        <div class="social-icon">
                        <i class="fab fa-twitter"></i>
                        </div>
                        <div class="media-body space-sm">
                            <h6 class="item-title">Follow us on twitter</h6>
                        </div>
                </div>
                <div class="social-like">1,11,000</div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6 col-12">
        <div class="card dashboard-card-seven">
            <div class="social-media bg-gplus hover-gplus">
                <div class="media media-none--lg">
                    <div class="social-icon">
                        <i class="fab fa-google-plus-g"></i>
                    </div>
                    <div class="media-body space-sm">
                        <h6 class="item-title">Follow us on googleplus</h6>
                    </div>
                </div>
                <div class="social-like">19,000</div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6 col-12">
        <div class="card dashboard-card-seven">
            <div class="social-media bg-linkedin hover-linked">
                <div class="media media-none--lg">
                    <div class="social-icon">
                    <i class="fab fa-linkedin-in"></i>
                    </div>
                    <div class="media-body space-sm">
                        <h6 class="item-title">Follow us on linked</h6>
                    </div>
                </div>
                <div class="social-like">45,000</div>
            </div>
        </div>
    </div>
</div>
<!-- Social Media End Here -->
@endsection
