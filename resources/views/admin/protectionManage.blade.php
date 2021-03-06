@extends("layout")
@section("main-content")
    <!-- Basic datatable -->
    <div class="panel panel-flat" id="data-table">
        <div class="panel-heading">
            <h5 class="panel-title">Quản lý đượt bảo vệ</h5>
            <div class="heading-elements">
                <ul class="icons-list">
                    <li><a data-action="collapse"></a></li>
                    <li><a data-action="reload"></a></li>
                    {{--<li><a data-action="close"></a></li>--}}
                </ul>
            </div>
        </div>

        <div class="panel-body">
            ID Đợt bảo vệ,
            Thời gian bắt đầu, thời gian kết thúc
        </div>
        <data-table ></data-table>


    </div>
    <div id="action">

    </div>
    <!-- /basic datatable -->
@endsection
@section("script")
    <script type="text/javascript" src="{{asset("assets/js/plugins/tables/datatables/datatables.min.js")}}"></script>
    <script type="text/javascript" src="{{asset("assets/js/plugins/tables/datatables/extensions/buttons.min.js")}}"></script>
    <script src="{{asset("assets/js/plugins/notifications/sweet_alert.min.js")}}"></script>
    <script type="text/javascript" src="{{asset("assets/js/plugins/forms/selects/select2.min.js")}}"></script>
    <script type="text/javascript" src="{{asset("assets/js/core/app.js")}}"></script>
    <script src="{{asset("js/protectionManage.js")}}"></script>
    <script src="{{asset("js/buildstudentManage.js")}}"></script>
    {{--<script src="{{asset("js/build_lecturersManage.js")}}"></script>--}}
@endsection