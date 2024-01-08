<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://aiui-admin.wordpressthemeshub.com/images/favicon.ico">

    <title>Report</title>

    <!-- Bootstrap 4.0-->
    <link rel="stylesheet" href="./assets/vendor_components/bootstrap/dist/css/bootstrap.min.css">

    <!-- Bootstrap extend-->

    <link rel="stylesheet" href="./css/bootstrap-extend.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="./css/master_style.css">

    <!-- AIUI Admin skins -->
    <link rel="stylesheet" href="./css/skins/_all-skins.css">



</head>
<style>
    .beside {
        margin-bottom: 20px;
    }

    #reasonTextarea1 {
        display: none;
    }

    #reasonTextarea2 {
        display: none;
    }

    #reasonTextarea3 {
        display: none;
    }

    #reasonTextarea4 {
        display: none;
    }

    #reasonTextarea5 {
        display: none;
    }

    #reasonTextarea6 {
        display: none;
    }

    textarea {
        width: 100%;
    }

    textarea {
        border: none;
        border-bottom: 1px solid #277c8d;
        background: #ffffff00;
        outline: none;
        margin: 8px 0;
        padding: 5px 0;
        width: 100%;
        color: #277c8d;
    }

    ::placeholder {
        color: #277c8d;
        opacity: 1;
        /* Firefox */
    }

    ::-ms-input-placeholder {
        /* Edge 12 -18 */
        color: rgb(104, 185, 255);
    }

    .take_pic {
        background-color: none !important;
        border: none;
        background: none;


    }

    .imageThumb {
        max-height: 75px;
        border: 2px solid;
        padding: 1px;
        cursor: pointer;
        position: relative;
    }

    .pip {
        display: inline-block;
        margin: 10px 10px 0 0;
        position: relative;


    }

    .remove {
        position: absolute;
        top: 0;
        right: 0;
        display: block;
        background: #fed000;
        /* border: 1px solid black; */
        color: #000080;
        text-align: center;
        cursor: pointer;
        padding: 1px 6px;
        font-size: 12px;
        font-weight: 700;
        border-radius: 10px;
    }

    .remove:hover {
        background: white;
        color: black;
    }

    input {
        border: none;
        border-bottom: 1px solid #266776;
        background: #ffffff00;
        outline: none;
        margin: 8px 0;
        padding: 5px 0;
        width: 100%;
        color: #277c8d;


    }

    input:hover {
        background: #ffffff3d;
        cursor: pointer;
    }

    .form-control-2 {
        background: none !important;
        border: none !important;
        border-bottom: 1px solid #266776 !important;
        border-radius: 0px !important;
        margin-top: 6px;
    }

    .take_pic {
        background-color: none !important;
        border: none;
        background: none;


    }

 
</style>

<body class="hold-transition skin-black light-sidebar sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">

        <header class="main-header">
            <div class="p-10 clearfix float-left logo-block">
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <!-- <i class="ti-align-left"  style="background-color: red; color: yellow">></i> -->
                    <svg style="color: black;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
                    </svg>
                </a>
                <!-- Logo -->
                <a href="index.html" class="logo">
                    <!-- logo-->
                    <span class="logo-lg">
                        <!-- <img src="./images/logo-light-text.png" alt="logo" class="light-logo">
                        <img src="./images/logo-dark-text.png" alt="logo" class="dark-logo"> -->
                    </span>
                </a>
            </div>
            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <div class="ml-10 app-menu">
                    <ul class="header-megamenu nav">

                        <li class="dropdown nav-item">
                            <a href="#" aria-haspopup="true" data-toggle="dropdown" class="nav-link rounded" aria-expanded="false">
                                <i class="nav-link-icon fa fa-cogs mx-5 text-white"></i>
                                Projects
                                <i class="fa fa-angle-down ml-2"></i>
                            </a>
                            <div class="dropdown-menu">
                                <div class="dropdown-menu-header-inner bg-img" style="background-image: url('images/gallery/landscape1.jpg');" data-overlay="5">
                                    <div class="p-30 text-left w-250">
                                        <h5 class="text-white">Overview</h5>
                                        <h6 class="text-white">Unlimited options</h6>
                                        <div class="menu-header-btn-pane">
                                            <button class="mr-2 btn btn-success btn-sm">Settings</button>
                                            <button class="btn-icon btn-icon-only btn btn-info btn-sm">
                                                <i class="fa fa-cog"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-10">
                                    <button type="button" class="btn btn-outline btn-flat btn-primary w-p100 text-left"><i class="fa fa-folder mr-10"> </i>Graphic Design</button>
                                    <button type="button" class="btn btn-outline btn-flat btn-primary w-p100 text-left"><i class="fa fa-folder mr-10"> </i>App Development</button>
                                    <button type="button" class="btn btn-outline btn-flat btn-primary w-p100 text-left"><i class="fa fa-folder mr-10"> </i>Icon Design</button>
                                    <div tabindex="-1" class="dropdown-divider"></div>
                                    <button type="button" class="btn btn-outline btn-flat btn-primary w-p100 text-left"><i class="fa fa-folder mr-10"> </i>Miscellaneous</button>
                                    <button type="button" class="btn btn-outline btn-flat btn-primary w-p100 text-left"><i class="fa fa-folder mr-10"> </i>Frontend Dev</button>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- Messages -->
                        <li class="dropdown messages-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="mdi mdi-email"></i>
                            </a>
                            <ul class="dropdown-menu scale-up">
                                <li class="header">You have 5 messages</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu inner-content-div">
                                        <li>
                                            <!-- start message -->
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="./images/user2-160x160.jpg" class="rounded-circle" alt="User Image">
                                                </div>
                                                <div class="mail-contnet">
                                                    <h4>
                                                        Lorem Ipsum
                                                        <small><i class="fa fa-clock-o"></i> 15 mins</small>
                                                    </h4>
                                                    <span>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                        elit.</span>
                                                </div>
                                            </a>
                                        </li>
                                        <!-- end message -->
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="./images/user3-128x128.jpg" class="rounded-circle" alt="User Image">
                                                </div>
                                                <div class="mail-contnet">
                                                    <h4>
                                                        Nullam tempor
                                                        <small><i class="fa fa-clock-o"></i> 4 hours</small>
                                                    </h4>
                                                    <span>Curabitur facilisis erat quis metus congue viverra.</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="./images/user4-128x128.jpg" class="rounded-circle" alt="User Image">
                                                </div>
                                                <div class="mail-contnet">
                                                    <h4>
                                                        Proin venenatis
                                                        <small><i class="fa fa-clock-o"></i> Today</small>
                                                    </h4>
                                                    <span>Vestibulum nec ligula nec quam sodales rutrum sed
                                                        luctus.</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="./images/user3-128x128.jpg" class="rounded-circle" alt="User Image">
                                                </div>
                                                <div class="mail-contnet">
                                                    <h4>
                                                        Praesent suscipit
                                                        <small><i class="fa fa-clock-o"></i> Yesterday</small>
                                                    </h4>
                                                    <span>Curabitur quis risus aliquet, luctus arcu nec, venenatis
                                                        neque.</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="./images/user4-128x128.jpg" class="rounded-circle" alt="User Image">
                                                </div>
                                                <div class="mail-contnet">
                                                    <h4>
                                                        Donec tempor
                                                        <small><i class="fa fa-clock-o"></i> 2 days</small>
                                                    </h4>
                                                    <span>Praesent vitae tellus eget nibh lacinia pretium.</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">See all e-Mails</a></li>
                            </ul>
                        </li>
                        <!-- User Account-->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="./images/avatar/avatar.png" class="img-fluid" alt="" />
                            </a>
                            <ul class="dropdown-menu scale-up">
                                <!-- Menu Body -->
                                <li class="user-body">
                                    <a class="dropdown-item" href="javascript:void(0)"><i class="ion ion-person"></i> My
                                        Profile</a>
                                    <a class="dropdown-item" href="javascript:void(0)"><i class="ion ion-bag"></i> My
                                        Balance</a>
                                    <a class="dropdown-item" href="javascript:void(0)"><i class="ion ion-email-unread"></i> Inbox</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="javascript:void(0)"><i class="ion ion-settings"></i>
                                        Account Setting</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="javascript:void(0)"><i class="ion-log-out"></i>
                                        Logout</a>
                                    <div class="dropdown-divider"></div>
                                    <div class="p-10"><a href="javascript:void(0)" class="btn btn-sm btn-success">View
                                            Profile</a></div>
                                </li>
                            </ul>
                        </li>
                        <!-- Control Sidebar Toggle Button -->
                        <li>
                            <a href="#" data-toggle="control-sidebar"><i class="fa fa-ellipsis-h"></i></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <!-- Left side column. contains the sidebar -->
        <?php require "sidebar.php"; ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">


            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-12">
                        <div class="box">






                            <form role="form" class="form-element">
                                <div class="box-body">
                                    <div class="row">

                                        <div class="col-sm-12 col-md-6">

                                            <div class="form-group beside">
                                                <label for="power1">Power Issue</label>
                                                <select id="power1" class="form-control" onchange="toggleTextarea1('power1')">
                                                    <option hidden>Select</option>
                                                    <option value="available">Available</option>
                                                    <option value="Not Available">Not Available</option>

                                                </select>
                                            </div>
                                            <div id="reasonTextarea1" class="beside">
                                                <textarea style="resize: none;" id="reason" placeholder="Reason"></textarea>
                                            </div>
                                        </div>






                                        <div class="col-sm-12 col-md-6">
                                            <div class="form-group beside">
                                                <label for="exampleInputEmail1">Network Issue</label>
                                                <select id="power2" class="form-control" onchange="toggleTextarea2('power2')">
                                                    <option hidden>Select</option>
                                                    <option value="available">Available</option>
                                                    <option value="Not Available">Not Available</option>

                                                </select>
                                            </div>
                                            <div id="reasonTextarea2" class="beside">
                                                <textarea style="resize: none;" id="reason" placeholder="Reason"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <div class="form-group beside">
                                                <label for="exampleInputEmail1">IoT 1 Issue</label>
                                                <select id="power3" class="form-control" onchange="toggleTextarea3('power3')">
                                                    <option hidden>Select</option>
                                                    <option value="working">Working</option>
                                                    <option value="Not working">Not working</option>

                                                </select>
                                            </div>
                                            <div id="reasonTextarea3" class="beside">
                                                <textarea style="resize: none;" id="reason" placeholder="Reason"></textarea>
                                            </div>
                                        </div>




                                        <div class="col-sm-12 col-md-6">
                                            <div class="form-group beside">
                                                <label for="exampleInputEmail1">IoT 2 Issue</label>
                                                <select id="power4" class="form-control" onchange="toggleTextarea4('power4')">
                                                    <option hidden>Select</option>
                                                    <option value="working">Working</option>
                                                    <option value="Not working">Not working</option>

                                                </select>
                                            </div>
                                            <div id="reasonTextarea4" class="beside">
                                                <textarea style="resize: none;" id="reason" placeholder="Reason"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-12 ">



                                            <div class="col-sm d-flex align-items-center justify-content-center image_container">
                                                <div class="field">
                                                    <label for="files" style="cursor: pointer">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cloud-arrow-up-fill" viewBox="0 0 16 16">
                                                            <path d="M8 2a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 6.095 0 7.555 0 9.318 0 11.366 1.708 13 3.781 13h8.906C14.502 13 16 11.57 16 9.773c0-1.636-1.242-2.969-2.834-3.194C12.923 3.999 10.69 2 8 2m2.354 5.146a.5.5 0 0 1-.708.708L8.5 6.707V10.5a.5.5 0 0 1-1 0V6.707L6.354 7.854a.5.5 0 1 1-.708-.708l2-2a.5.5 0 0 1 .708 0z" />
                                                        </svg>
                                                        Upload Files
                                                    </label>

                                                </div>


                                            </div>
                                            <input style="display: none" type="file" id="files" multiple />

                                        </div>


                                    </div>



                                </div>
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-danger">Submit</button>
                                </div>
                            </form>

                            <!-- /.box-body -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <footer class="main-footer">
            <div class="pull-right d-none d-sm-inline-block">
                <ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Purchase Now</a>
                    </li>
                </ul>
            </div> &copy; 2019 <a href="https://www.multipurposethemes.com/">Multi-Purpose Themes</a>. All Rights
            Reserved.
        </footer>
        <!-- Control Sidebar -->

        <!-- /.control-sidebar -->

        <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
        <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->


    <!-- jQuery 3 -->
    <script src="./assets/vendor_components/jquery-3.3.1/jquery-3.3.1.min.js"></script>

    <!-- popper -->
    <script src="./assets/vendor_components/popper/dist/popper.min.js"></script>

    <!-- Bootstrap 4.0-->
    <script src="./assets/vendor_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- SlimScroll -->
    <script src="./assets/vendor_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>

    <!-- FastClick -->
    <script src="./assets/vendor_components/fastclick/lib/fastclick.js"></script>

    <!-- Sparkline -->
    <script src="./assets/vendor_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>

    <!-- fullscreen -->
    <script src="./assets/vendor_components/screenfull/screenfull.js"></script>

    <!-- AIUI Admin App -->
    <!-- <script src="js/template.js"></script> -->
    <script src="./main/js/template.js"></script>

    <!-- <script src="js/pages/fullscreen.js"></script> -->
    <script src="./main/js/formReason.js"></script>
    <!-- <script src="D:\xampp\htdocs\git_report\main\js\formReason.js"></script> -->
    <script>
        function toggleTextarea1(powerId) {
            const selectedOption = document.getElementById(powerId).value;
            const reasonTextarea = document.getElementById('reasonTextarea1');

            if (selectedOption === 'Not Available') {
                reasonTextarea.style.display = 'block';
            } else {
                reasonTextarea.style.display = 'none';
            }
        }


        function toggleTextarea2(powerId) {
            const selectedOption = document.getElementById(powerId).value;
            const reasonTextarea = document.getElementById('reasonTextarea2');

            if (selectedOption === 'Not Available') {
                reasonTextarea.style.display = 'block';
            } else {
                reasonTextarea.style.display = 'none';
            }
        }

        function toggleTextarea3(powerId) {
            const selectedOption = document.getElementById(powerId).value;
            const reasonTextarea = document.getElementById('reasonTextarea3');

            if (selectedOption === 'Not working') {
                reasonTextarea.style.display = 'block';
            } else {
                reasonTextarea.style.display = 'none';
            }
        }


        function toggleTextarea4(powerId) {
            const selectedOption = document.getElementById(powerId).value;
            const reasonTextarea = document.getElementById('reasonTextarea4');

            if (selectedOption === 'Not working') {
                reasonTextarea.style.display = 'block';
            } else {
                reasonTextarea.style.display = 'none';
            }
        }
        $(document).ready(function() {
            if (window.File && window.FileList && window.FileReader) {
                $("#files").on("change", function(e) {
                    var files = e.target.files,
                        filesLength = files.length;
                    for (var i = 0; i < filesLength; i++) {
                        var f = files[i];
                        var fileReader = new FileReader();
                        fileReader.onload = (function(e) {
                            var file = e.target;
                            $("<span class=\"pip\">" +
                                "<img class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
                                "<span class=\"remove\">X</span>" +
                                "</span>").insertAfter("#files");

                            $(".remove").click(function() {
                                $(this).parent(".pip").remove();
                                $('#files').val("");
                            });

                        });
                        fileReader.readAsDataURL(f);
                    }
                });
            } else {
                alert("Your browser doesn't support the File API");
            }
        });

        var myInput = document.getElementById('myFileInput');
    </script>


</body>


</html>