@extends('user.layouts')

@section('title', '控制面板')
@section('content')
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE BREADCRUMB -->
        <ul class="page-breadcrumb breadcrumb">
            <li>
                <a href="{{url('user')}}">用户中心</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <a href="javascript:;">系统公告</a>
            </li>
        </ul>
        <!-- END PAGE BREADCRUMB -->
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN PORTLET -->
                <div class="portlet light bordered">
                    <div class="portlet-title tabbable-line">
                        <div class="caption caption-md">
                            <i class="icon-globe theme-font hide"></i>
                            <span class="caption-subject font-blue-madison bold uppercase">系统公告</span>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <!--BEGIN TABS-->
                        <div class="tab-content">
                            {{$info->content}}
                        </div>
                        <!--END TABS-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END CONTENT BODY -->
@endsection
@section('script')
    <script src="/assets/global/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
    <script src="/assets/global/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
    <script src="/assets/global/plugins/jquery-knob/js/jquery.knob.js" type="text/javascript"></script>

    <script>
        $(function() {
            $(".knob").knob({
                'readOnly':true,
                'angleoffset':0,
                'width':150,
                'height':150,
            });
        });
    </script>
@endsection
