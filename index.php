<!DOCTYPE HTML>
<html>
    <head>
        <title>Bootstrap Validation</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="http://freetuts.net/public/component/bootstrap3/css/bootstrap.min.css" rel="stylesheet"/>
        <script language="javascript" src="http://freetuts.net/public/component/bootstrap3/js/jquery.min.js"></script>
        <script language="javascript" src="http://freetuts.net/public/component/bootstrap3/js/bootstrap.min.js"></script>
 
        <style>
            .row{
                margin-bottom: 10px;
            }
        </style>
    </head>
    <body>
        <div class="container">
 
            <!-- Button -->
            <button class="btn" data-toggle="modal" data-target="#myModal">Popup</button>
 
            <!-- Modal -->
            <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog">
 
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">ĐĂNG KÝ THÀNH VIÊN</h4>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-5">Username</div>
                                <div class="col-md-7">
                                    <input type="text" id="username" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">Password</div>
                                <div class="col-md-7">
                                    <input type="text" id="password" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">Email</div>
                                <div class="col-md-7">
                                    <input type="text" id="email" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">Fullname</div>
                                <div class="col-md-7">
                                    <input type="text" id="fullname" />
                                </div>
                            </div>
                        </div>
                        <div class="alert alert-danger hide">
 
                        </div>
                        <div class="alert alert-success hide">
 
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" id="register-btn">Đăng ký</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>