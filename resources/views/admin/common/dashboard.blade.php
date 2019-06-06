@extends('admin.layout.main')

@section('header')
    {!! $header !!}
@endsection

@section('aside')
    {!! $aside !!}
@endsection

@section('content')

    <div>
        <div class="p-3 light lt box-shadow-0 d-flex">
            <div class="flex">
                <h1 class="text-md mb-1 _400">Welcome back, John.</h1>
                <small class="text-muted">Last logged in: 03:00 21, July</small>
            </div>
            <div>
                <small class="text-muted d-block">Status</small>
                <div class="mb-1 peity" data-plugin="peity" data-title="Status" data-option="
	          'bar',
	          {
	            height: 20,
	            width: 60,
	            fill: [app.color.primary]
	          }">56,32,21,16,25,23,42,24,6,10,44,27,34,52,54,59,61,68,78
                </div>
            </div>
        </div>
        <div class="padding">
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="box list-item">
                                        <span class="avatar w-40 text-center rounded primary">
	            <span class="fa fa-dollar"></span>
                                        </span>
                        <div class="list-body">
                            <h4 class="m-0 text-md">
                                <a href="#">75 <span class="text-sm">Sales</span></a>
                            </h4>
                            <small class="text-muted">6 waiting payment.</small>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="box list-item">
                                        <span class="avatar w-40 text-center rounded info theme">
	            <span class="fa fa-female"></span>
                                        </span>
                        <div class="list-body">
                            <h4 class="m-0 text-md">
                                <a href="#">40 <span class="text-sm">Orders</span></a>
                            </h4>
                            <small class="text-muted">38 Shipped.</small>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="box list-item">
                                        <span class="avatar w-40 text-center rounded success">
	            <span class="fa fa-bookmark"></span>
                                        </span>
                        <div class="list-body">
                            <h4 class="m-0 text-md">
                                <a href="#">6k <span class="text-sm">Members</span></a>
                            </h4>
                            <small class="text-muted">632 VIP.</small>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="box list-item">
                                        <span class="avatar w-40 text-center rounded warning">
	            <span class="fa fa-comment"></span>
                                        </span>
                        <div class="list-body">
                            <h4 class="m-0 text-md">
                                <a href="#">69 <span class="text-sm">Comments</span></a>
                            </h4>
                            <small class="text-muted">5 approved.</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row no-gutters box">
                <div class="col-sm-4">
                    <div class="padding">
                        <h6>Sales Statistical Overview</h6>
                        <p class="text-muted my-3">Sale information on advertising, exhibitions, market research, online media, customer desires, PR and much more</p>
                        <p>
                            <i class="fa fa-arrow-circle-o-up text-success mr-1"></i><span class="text-success">15%</span> more than last week</p>
                        <a href="#" class="btn btn-sm btn-rounded success theme">Update</a>
                        <a href="#" class="btn btn-sm btn-rounded white">See detail</a>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="padding light lt">
                        <canvas id="chart-line-line" data-plugin="chart" height="120"></canvas>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="box">
                        <div class="box-header">
                            <h3>Messages</h3>
                        </div>
                        <div class="list inset">
                            <div class="list-item " data-id="item-13">
                                                <span class="w-40 avatar circle pink">
						            AS
						      </span>
                                <div class="list-body">
                                    <a href="" class="item-title _500">Airi Satou</a>
                                    <div class="item-except text-sm text-muted h-1x">
                                        Looking for some client-work
                                    </div>
                                    <div class="item-tag tag hide">
                                    </div>
                                </div>
                                <div>
                                    <span class="item-date text-xs text-muted">12:30</span>
                                </div>
                            </div>
                            <div class="list-item " data-id="item-14">
                                                <span class="w-40 avatar circle brown">
						            BW
						      </span>
                                <div class="list-body">
                                    <a href="" class="item-title _500">Brielle Williamson</a>
                                    <div class="item-except text-sm text-muted h-1x">
                                        Looking for some client-work
                                    </div>
                                    <div class="item-tag tag hide">
                                    </div>
                                </div>
                                <div>
                                    <span class="item-date text-xs text-muted">08:00</span>
                                </div>
                            </div>
                            <div class="list-item " data-id="item-5">
                                                <span class="w-40 avatar circle blue-grey">
						          <img src="../assets/images/a5.jpg" alt=".">
						      </span>
                                <div class="list-body">
                                    <a href="" class="item-title _500">Radionomy</a>
                                    <div class="item-except text-sm text-muted h-1x">
                                        Competitive gaming ladders
                                    </div>
                                    <div class="item-tag tag hide">
                                    </div>
                                </div>
                                <div>
                                    <span class="item-date text-xs text-muted">09:50</span>
                                </div>
                            </div>
                            <div class="list-item " data-id="item-1">
                                                <span class="w-40 avatar circle grey">
						          <img src="../assets/images/a1.jpg" alt=".">
						      </span>
                                <div class="list-body">
                                    <a href="" class="item-title _500">Summerella</a>
                                    <div class="item-except text-sm text-muted h-1x">
                                        Send you a message
                                    </div>
                                    <div class="item-tag tag hide">
                                    </div>
                                </div>
                                <div>
                                    <span class="item-date text-xs text-muted">July 21</span>
                                </div>
                            </div>
                            <div class="list-item " data-id="item-15">
                                                <span class="w-40 avatar circle indigo">
						            GW
						      </span>
                                <div class="list-body">
                                    <a href="" class="item-title _500">Garrett Winters</a>
                                    <div class="item-except text-sm text-muted h-1x">
                                        Looking for some client-work
                                    </div>
                                    <div class="item-tag tag hide">
                                    </div>
                                </div>
                                <div>
                                    <span class="item-date text-xs text-muted">13:00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="box">
                        <div class="box-header">
                            <h3>Members</h3>
                        </div>
                        <div class="list inset">
                            <div class="list-item " data-id="item-1">
                                                <span class="w-40 avatar circle grey">
		                      <i class="on b-white avatar-right"></i>
		                        S
		                    </span>
                                <div class="list-body">
                                    <a href="" class="item-title _500">Summerella</a>
                                    <div class="item-except text-sm text-muted h-1x">
                                        summerella@gmail.com
                                    </div>
                                    <div class="item-tag tag hide">
                                    </div>
                                </div>
                                <div>
                                    <div class="item-action dropdown">
                                        <a href="#" data-toggle="dropdown" class="text-muted">
                                            <i class="fa fa-fw fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right text-color" role="menu">
                                            <a class="dropdown-item">
                                                <i class="fa fa-tag"></i>
                                                Action
                                            </a>
                                            <a class="dropdown-item">
                                                <i class="fa fa-pencil"></i>
                                                Another action
                                            </a>
                                            <a class="dropdown-item">
                                                <i class="fa fa-reply"></i>
                                                Something else here
                                            </a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item">
                                                <i class="fa fa-ellipsis-h"></i>
                                                Separated link
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="list-item " data-id="item-6">
                                                <span class="w-40 avatar circle brown">
		                      <i class="on b-white avatar-right"></i>
		                        RO
		                    </span>
                                <div class="list-body">
                                    <a href="" class="item-title _500">Rita Ora</a>
                                    <div class="item-except text-sm text-muted h-1x">
                                        rita-ora@gmail.com
                                    </div>
                                    <div class="item-tag tag hide">
                                    </div>
                                </div>
                                <div>
                                    <div class="item-action dropdown">
                                        <a href="#" data-toggle="dropdown" class="text-muted">
                                            <i class="fa fa-fw fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right text-color" role="menu">
                                            <a class="dropdown-item">
                                                <i class="fa fa-tag"></i>
                                                Action
                                            </a>
                                            <a class="dropdown-item">
                                                <i class="fa fa-pencil"></i>
                                                Another action
                                            </a>
                                            <a class="dropdown-item">
                                                <i class="fa fa-reply"></i>
                                                Something else here
                                            </a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item">
                                                <i class="fa fa-ellipsis-h"></i>
                                                Separated link
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="list-item " data-id="item-14">
                                                <span class="w-40 avatar circle brown">
		                      <i class="off b-white avatar-right"></i>
		                        BW
		                    </span>
                                <div class="list-body">
                                    <a href="" class="item-title _500">Brielle Williamson</a>
                                    <div class="item-except text-sm text-muted h-1x">
                                        brielle-williamson@gmail.com
                                    </div>
                                    <div class="item-tag tag hide">
                                    </div>
                                </div>
                                <div>
                                    <div class="item-action dropdown">
                                        <a href="#" data-toggle="dropdown" class="text-muted">
                                            <i class="fa fa-fw fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right text-color" role="menu">
                                            <a class="dropdown-item">
                                                <i class="fa fa-tag"></i>
                                                Action
                                            </a>
                                            <a class="dropdown-item">
                                                <i class="fa fa-pencil"></i>
                                                Another action
                                            </a>
                                            <a class="dropdown-item">
                                                <i class="fa fa-reply"></i>
                                                Something else here
                                            </a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item">
                                                <i class="fa fa-ellipsis-h"></i>
                                                Separated link
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="list-item " data-id="item-7">
                                                <span class="w-40 avatar circle indigo">
		                      <i class="on b-white avatar-right"></i>
		                        FH
		                    </span>
                                <div class="list-body">
                                    <a href="" class="item-title _500">Fifth Harmony</a>
                                    <div class="item-except text-sm text-muted h-1x">
                                        fifth-harmony@gmail.com
                                    </div>
                                    <div class="item-tag tag hide">
                                    </div>
                                </div>
                                <div>
                                    <div class="item-action dropdown">
                                        <a href="#" data-toggle="dropdown" class="text-muted">
                                            <i class="fa fa-fw fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right text-color" role="menu">
                                            <a class="dropdown-item">
                                                <i class="fa fa-tag"></i>
                                                Action
                                            </a>
                                            <a class="dropdown-item">
                                                <i class="fa fa-pencil"></i>
                                                Another action
                                            </a>
                                            <a class="dropdown-item">
                                                <i class="fa fa-reply"></i>
                                                Something else here
                                            </a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item">
                                                <i class="fa fa-ellipsis-h"></i>
                                                Separated link
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="list-item " data-id="item-4">
                                                <span class="w-40 avatar circle pink">
		                      <i class="busy b-white avatar-right"></i>
		                        JG
		                    </span>
                                <div class="list-body">
                                    <a href="" class="item-title _500">Judith Garcia</a>
                                    <div class="item-except text-sm text-muted h-1x">
                                        judith-garcia@gmail.com
                                    </div>
                                    <div class="item-tag tag hide">
                                    </div>
                                </div>
                                <div>
                                    <div class="item-action dropdown">
                                        <a href="#" data-toggle="dropdown" class="text-muted">
                                            <i class="fa fa-fw fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right text-color" role="menu">
                                            <a class="dropdown-item">
                                                <i class="fa fa-tag"></i>
                                                Action
                                            </a>
                                            <a class="dropdown-item">
                                                <i class="fa fa-pencil"></i>
                                                Another action
                                            </a>
                                            <a class="dropdown-item">
                                                <i class="fa fa-reply"></i>
                                                Something else here
                                            </a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item">
                                                <i class="fa fa-ellipsis-h"></i>
                                                Separated link
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row no-gutters box">
                <div class="col-md-6 light lt p-3">
                    <div id="jqvmap-world" data-plugin="vectorMap" style="height:280px"></div>
                </div>
                <div class="col-md-6">
                    <div class="padding">
                        <h6 class="mb-2">Global sales</h6>
                        <p class="text-sm">
                            <i class="fa fa-caret-down text-warn"></i> <span class="text-muted">Min:</span> $39,050
                            <i class="fa fa-caret-up text-success ml-2"></i> <span class="text-muted">Max:</span> $78,560
                        </p>
                        <div>
                            <div class="p-1">
                                <small>
                                    <span class="float-right text-muted">45%</span> USA
                                </small>
                                <div class="progress my-1" style="height:6px;">
                                    <div class="progress-bar primary" style="width: 45%"></div>
                                </div>
                            </div>
                            <div class="p-1">
                                <small>
                                    <span class="float-right text-muted">25%</span> Germany
                                </small>
                                <div class="progress my-1" style="height:6px;">
                                    <div class="progress-bar primary" style="width: 25%"></div>
                                </div>
                            </div>
                            <div class="p-1">
                                <small>
                                    <span class="float-right text-muted">15%</span> France
                                </small>
                                <div class="progress my-1" style="height:6px;">
                                    <div class="progress-bar primary" style="width: 15%"></div>
                                </div>
                            </div>
                            <div class="p-1">
                                <small>
                                    <span class="float-right text-muted">5%</span> Other
                                </small>
                                <div class="progress my-1" style="height:6px;">
                                    <div class="progress-bar grey lt" style="width: 5%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="padding box">
                        <span class="badge success float-right">5</span>
                        <h6 class="mb-3">Activity</h6>
                        <div class="streamline ">
                            <div class="sl-item  b- ">
                                <div class="sl-left">
                                    <img src="../assets/images/a8.jpg" class="circle" alt=".">
                                </div>
                                <div class="sl-content">
                                    <span class="sl-date text-muted">14:00</span>
                                    <div>
                                        <a href="#" class="text-primary">RYD</a>
                                        Add inline SVG icon
                                    </div>
                                </div>
                            </div>
                            <div class="sl-item  b- ">
                                <div class="sl-content">
                                    <span class="sl-date text-muted">11:30</span>
                                    <div>
                                        <a href="#" class="text-primary">Ashton Cox</a>
                                        New feedback from John
                                    </div>
                                </div>
                            </div>
                            <div class="sl-item  b- ">
                                <div class="sl-content">
                                    <span class="sl-date text-muted">13:00</span>
                                    <div>
                                        <a href="#" class="text-primary">Garrett Winters</a>
                                        Followed by Jessic
                                    </div>
                                </div>
                            </div>
                            <div class="sl-item  b- ">
                                <div class="sl-left">
                                    <img src="../assets/images/a3.jpg" class="circle" alt=".">
                                </div>
                                <div class="sl-content">
                                    <span class="sl-date text-muted">09:05</span>
                                    <div>
                                        <a href="#" class="text-primary">Jeremy Scott</a>
                                        Assign you a task
                                    </div>
                                </div>
                            </div>
                            <div class="sl-item  b- ">
                                <div class="sl-left">
                                    <img src="../assets/images/a6.jpg" class="circle" alt=".">
                                </div>
                                <div class="sl-content">
                                    <span class="sl-date text-muted">13:23</span>
                                    <div>
                                        <a href="#" class="text-primary">Rita Ora</a>
                                        Sent you an email
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="padding box">
                        <h6 class="mb-3">Tasks</h6>
                        <div class="streamline streamline-xs">
                            <div class="sl-item  b-primary ">
                                <div class="sl-content">
                                    <span class="sl-date text-muted">14:00</span>
                                    <div>
                                        <a href="#" class="text-primary">RYD</a>
                                        Add inline SVG icon
                                    </div>
                                </div>
                            </div>
                            <div class="sl-item  b-success ">
                                <div class="sl-content">
                                    <span class="sl-date text-muted">08:00</span>
                                    <div>
                                        <a href="#" class="text-primary">Postiljonen</a>
                                        Add Google Cast support
                                    </div>
                                </div>
                            </div>
                            <div class="sl-item  b- ">
                                <div class="sl-content">
                                    <span class="sl-date text-muted">July 21</span>
                                    <div>
                                        <a href="#" class="text-primary">Summerella</a>
                                        Submit a support ticket
                                    </div>
                                </div>
                            </div>
                            <div class="sl-item  b-primary ">
                                <div class="sl-content">
                                    <span class="sl-date text-muted">11:30</span>
                                    <div>
                                        <a href="#" class="text-primary">Ashton Cox</a>
                                        New feedback from John
                                    </div>
                                </div>
                            </div>
                            <div class="sl-item  b-success ">
                                <div class="sl-content">
                                    <span class="sl-date text-muted">08:00</span>
                                    <div>
                                        <a href="#" class="text-primary">Brielle Williamson</a>
                                        User experience improvements
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="padding box">
                        <h6>Friends</h6>
                        <div class="list inset">
                            <div class="list-item " data-id="item-15">
                                                <span class="w-24 avatar circle indigo">
		                        GW
		                    </span>
                                <div class="list-body">
                                    <a href="" class="item-title _500">Garrett Winters</a>
                                    <div class="item-tag tag hide">
                                    </div>
                                </div>
                                <div>
                                    <div class="item-action dropdown">
                                        <a href="#" data-toggle="dropdown" class="text-muted">
                                            <i class="fa fa-fw fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right text-color" role="menu">
                                            <a class="dropdown-item">
                                                <i class="fa fa-tag"></i>
                                                Action
                                            </a>
                                            <a class="dropdown-item">
                                                <i class="fa fa-pencil"></i>
                                                Another action
                                            </a>
                                            <a class="dropdown-item">
                                                <i class="fa fa-reply"></i>
                                                Something else here
                                            </a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item">
                                                <i class="fa fa-ellipsis-h"></i>
                                                Separated link
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="list-item " data-id="item-11">
                                                <span class="w-24 avatar circle blue">
		                        TN
		                    </span>
                                <div class="list-body">
                                    <a href="" class="item-title _500">Tiger Nixon</a>
                                    <div class="item-tag tag hide">
                                    </div>
                                </div>
                                <div>
                                    <div class="item-action dropdown">
                                        <a href="#" data-toggle="dropdown" class="text-muted">
                                            <i class="fa fa-fw fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right text-color" role="menu">
                                            <a class="dropdown-item">
                                                <i class="fa fa-tag"></i>
                                                Action
                                            </a>
                                            <a class="dropdown-item">
                                                <i class="fa fa-pencil"></i>
                                                Another action
                                            </a>
                                            <a class="dropdown-item">
                                                <i class="fa fa-reply"></i>
                                                Something else here
                                            </a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item">
                                                <i class="fa fa-ellipsis-h"></i>
                                                Separated link
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="list-item " data-id="item-9">
                                                <span class="w-24 avatar circle cyan">
		                        PN
		                    </span>
                                <div class="list-body">
                                    <a href="" class="item-title _500">Pablo Nouvelle</a>
                                    <div class="item-tag tag hide">
                                    </div>
                                </div>
                                <div>
                                    <div class="item-action dropdown">
                                        <a href="#" data-toggle="dropdown" class="text-muted">
                                            <i class="fa fa-fw fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right text-color" role="menu">
                                            <a class="dropdown-item">
                                                <i class="fa fa-tag"></i>
                                                Action
                                            </a>
                                            <a class="dropdown-item">
                                                <i class="fa fa-pencil"></i>
                                                Another action
                                            </a>
                                            <a class="dropdown-item">
                                                <i class="fa fa-reply"></i>
                                                Something else here
                                            </a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item">
                                                <i class="fa fa-ellipsis-h"></i>
                                                Separated link
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="list-item " data-id="item-2">
                                                <span class="w-24 avatar circle light-blue">
		                        K
		                    </span>
                                <div class="list-body">
                                    <a href="" class="item-title _500">Kygo</a>
                                    <div class="item-tag tag hide">
                                    </div>
                                </div>
                                <div>
                                    <div class="item-action dropdown">
                                        <a href="#" data-toggle="dropdown" class="text-muted">
                                            <i class="fa fa-fw fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right text-color" role="menu">
                                            <a class="dropdown-item">
                                                <i class="fa fa-tag"></i>
                                                Action
                                            </a>
                                            <a class="dropdown-item">
                                                <i class="fa fa-pencil"></i>
                                                Another action
                                            </a>
                                            <a class="dropdown-item">
                                                <i class="fa fa-reply"></i>
                                                Something else here
                                            </a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item">
                                                <i class="fa fa-ellipsis-h"></i>
                                                Separated link
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="list-item " data-id="item-1">
                                                <span class="w-24 avatar circle grey">
		                        S
		                    </span>
                                <div class="list-body">
                                    <a href="" class="item-title _500">Summerella</a>
                                    <div class="item-tag tag hide">
                                    </div>
                                </div>
                                <div>
                                    <div class="item-action dropdown">
                                        <a href="#" data-toggle="dropdown" class="text-muted">
                                            <i class="fa fa-fw fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right text-color" role="menu">
                                            <a class="dropdown-item">
                                                <i class="fa fa-tag"></i>
                                                Action
                                            </a>
                                            <a class="dropdown-item">
                                                <i class="fa fa-pencil"></i>
                                                Another action
                                            </a>
                                            <a class="dropdown-item">
                                                <i class="fa fa-reply"></i>
                                                Something else here
                                            </a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item">
                                                <i class="fa fa-ellipsis-h"></i>
                                                Separated link
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="list-item " data-id="item-10">
                                                <span class="w-24 avatar circle blue">
		                        P
		                    </span>
                                <div class="list-body">
                                    <a href="" class="item-title _500">Postiljonen</a>
                                    <div class="item-tag tag hide">
                                    </div>
                                </div>
                                <div>
                                    <div class="item-action dropdown">
                                        <a href="#" data-toggle="dropdown" class="text-muted">
                                            <i class="fa fa-fw fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right text-color" role="menu">
                                            <a class="dropdown-item">
                                                <i class="fa fa-tag"></i>
                                                Action
                                            </a>
                                            <a class="dropdown-item">
                                                <i class="fa fa-pencil"></i>
                                                Another action
                                            </a>
                                            <a class="dropdown-item">
                                                <i class="fa fa-reply"></i>
                                                Something else here
                                            </a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item">
                                                <i class="fa fa-ellipsis-h"></i>
                                                Separated link
                                            </a>
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
