@extends("layout")
@section("main-content")
    <!-- Main content -->
    <div class="">


        <!-- Profile info -->
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h6 class="panel-title">Thông tin cá nhân</h6>
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li><a data-action="collapse"></a></li>
                        <li><a data-action="reload"></a></li>
                        <li><a data-action="close"></a></li>
                    </ul>
                </div>
            </div>

            <div class="panel-body">
                <form action="#">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Họ</label>
                                <input type="text" value="Eugene" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label>Tên</label>
                                <input type="text" value="Kopyov" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Address line 1</label>
                                <input type="text" value="Ring street 12" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label>Address line 2</label>
                                <input type="text" value="building D, flat #67" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4">
                                <label>City</label>
                                <input type="text" value="Munich" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label>State/Province</label>
                                <input type="text" value="Bayern" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label>ZIP code</label>
                                <input type="text" value="1031" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Email</label>
                                <input type="text" readonly="readonly" value="eugene@kopyov.com" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label>Your country</label>
                                <select class="select">
                                    <option value="germany" selected="selected">Germany</option>
                                    <option value="france">France</option>
                                    <option value="spain">Spain</option>
                                    <option value="netherlands">Netherlands</option>
                                    <option value="other">...</option>
                                    <option value="uk">United Kingdom</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Phone #</label>
                                <input type="text" value="+99-99-9999-9999" class="form-control">
                                <span class="help-block">+99-99-9999-9999</span>
                            </div>

                            <div class="col-md-6">
                                <label class="display-block">Upload profile image</label>
                                <input type="file" class="file-styled">
                                <span class="help-block">Accepted formats: gif, png, jpg. Max file size 2Mb</span>
                            </div>
                        </div>
                    </div>

                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Save <i class="icon-arrow-right14 position-right"></i></button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /profile info -->


        <!-- Account settings -->
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h6 class="panel-title">Account settings</h6>
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li><a data-action="collapse"></a></li>
                        <li><a data-action="reload"></a></li>
                        <li><a data-action="close"></a></li>
                    </ul>
                </div>
            </div>

            <div class="panel-body">
                <form action="#">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Username</label>
                                <input type="text" value="Kopyov" readonly="readonly" class="form-control">
                            </div>

                            <div class="col-md-6">
                                <label>Current password</label>
                                <input type="password" value="password" readonly="readonly" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label>New password</label>
                                <input type="password" placeholder="Enter new password" class="form-control">
                            </div>

                            <div class="col-md-6">
                                <label>Repeat password</label>
                                <input type="password" placeholder="Repeat new password" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Profile visibility</label>

                                <div class="radio">
                                    <label>
                                        <input type="radio" name="visibility" class="styled" checked="checked">
                                        Visible to everyone
                                    </label>
                                </div>

                                <div class="radio">
                                    <label>
                                        <input type="radio" name="visibility" class="styled">
                                        Visible to friends only
                                    </label>
                                </div>

                                <div class="radio">
                                    <label>
                                        <input type="radio" name="visibility" class="styled">
                                        Visible to my connections only
                                    </label>
                                </div>

                                <div class="radio">
                                    <label>
                                        <input type="radio" name="visibility" class="styled">
                                        Visible to my colleagues only
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label>Notifications</label>

                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" class="styled" checked="checked">
                                        Password expiration notification
                                    </label>
                                </div>

                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" class="styled" checked="checked">
                                        New message notification
                                    </label>
                                </div>

                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" class="styled" checked="checked">
                                        New task notification
                                    </label>
                                </div>

                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" class="styled">
                                        New contact request notification
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Save <i class="icon-arrow-right14 position-right"></i></button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /account settings -->
    </div>
    <!-- /main content -->
@endsection
@section("script")

    <script src="{{asset("assets/js/plugins/notifications/sweet_alert.min.js")}}"></script>
    <script type="text/javascript" src="{{asset("assets/js/core/app.js")}}"></script>

@endsection