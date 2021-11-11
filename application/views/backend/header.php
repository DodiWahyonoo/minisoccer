<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>assets/img/fav.png">
    <title>Indosoccernesia</title>
    <!-- This page CSS -->
    <!-- chartist CSS -->
    <!-- Custom CSS -->
    <link href="<?= base_url() ?>assets/dist/css/style.css" rel="stylesheet">
    <!-- Dashboard 1 Page CSS -->
    <link href="<?= base_url() ?>assets/dist/css/pages/dashboard1.css" rel="stylesheet">
      <!-- datatables -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/datatables/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/datatables/rowReorder.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/datatables/colReorder.bootstrap.css">

    <!-- alertify -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/plugins/alert/css/alertify.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/plugins/alert/css/themes/bootstrap.min.css">
                   
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link href="<?php echo base_url() ?>assets/node_modules/summernote/dist/summernote.css" rel="stylesheet" />
  
</head>
<style type="text/css">
    .form-control:read-only { 
      background-color: white !important;
    }
    .form-control:disabled{ 
      background-color: white !important;
    }
</style>
       <style type="text/css">
     .txt_edit{
        display: none;
        width: 98%;
     }
     </style>
<body class="skin-default-dark fixed-layout" >
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Loading...</p>
        </div>
    </div>
    <!-- Main wrapper - style you can find in pages.scss -->
    <div id="main-wrapper">
        <!-- Topbar header - style you can find in pages.scss -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <!-- Logo -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">
                        <!-- Logo icon --><b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <h3 style="color: #404040; font-family: serif;"><strong>Indosoccernesia</strong></h3></span> 
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text --><span>
                                         </div>
                <!-- End Logo -->
                <div class="navbar-collapse">
                    <!-- toggle and nav items -->
                    <ul class="navbar-nav mr-auto">
                        <!-- This is  -->
                        <li class="nav-item hidden-sm-up"> <a class="nav-link nav-toggler waves-effect waves-light" href="javascript:void(0)"><i class="ti-menu"></i></a></li>
                        <!-- Search -->
                        <li class="nav-item search-box"> <a class="nav-link waves-effect waves-dark" href="javascript:void(0)"><i class="fa fa-search"></i></a>
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search &amp; enter"> <a class="srh-btn"><i class="fa fa-times"></i></a>
                            </form>
                        </li>
                    </ul>
                    <ul class="navbar-nav my-lg-0">
                        <!-- User profile and search -->
                         <li class="nav-item dropdown">
                            <a  href="<?= site_url('login/logout') ?>" class="nav-link dropdown-toggle text-muted waves-effect waves-dark" >Logout <i class=" fa-sign-out fa pl-2 "></i></a>
                        </li>
                        <!-- User profile and search -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- End Topbar header -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <aside class="left-sidebar">
            <div class="d-flex no-block nav-text-box align-items-center">
                <span> <span><h6 style="margin-top: 10px; color: #b8c7ce; "  >Main Menu</h6></span></span>
                <a class="waves-effect waves-dark ml-auto hidden-sm-down" href="javascript:void(0)"><i class="ti-menu"></i></a>
                <a class="nav-toggler waves-effect waves-dark ml-auto hidden-sm-up" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
            </div>
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li> 
                            <a class="waves-effect waves-dark" href="<?= site_url('administrator/admin') ?>" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Dashboard</span></a>
                        </li>

                        <li> 
                            <a class="waves-effect waves-dark" href="<?= site_url('administrator/admin/tampil_admin') ?>" aria-expanded="false"><i class="fa fa-user-circle"></i><span class="hide-menu">Admin</span></a>
                        </li>

                        <li> 
                            <a class="waves-effect waves-dark" href="<?= site_url('administrator/pertandingan') ?>" aria-expanded="false"><i class="fa fa-list-alt"></i><span class="hide-menu">Jadwal Pertandingan</span></a>
                        </li>

                        <!-- <li> 
                            <a class="waves-effect waves-dark" href="<?= site_url('administrator/hasil') ?>" aria-expanded="false"><i class="fa fa-bell"></i><span class="hide-menu">Hasil Pertandingan</span></a>
                        </li> -->

                        <li> 
                            <a class="waves-effect waves-dark" href="<?= site_url('administrator/galeri') ?>" aria-expanded="false"><i class="fa fa-clone"></i><span class="hide-menu">Galeri</span></a>
                        </li>

                        <li> 
                            <a class="waves-effect waves-dark" href="<?= site_url('administrator/artikel') ?>" aria-expanded="false"><i class="fa fa-list-alt"></i><span class="hide-menu">Artikel</span></a>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <style type="text/css">

            .label{
                border-radius: 0px;
            }
            .btn{
                border-radius: 0px;

            }
            .form-control{
                border-radius: 0px;
                border-top: none;
                border-right: none;
                border-left: none;
            }

            .pagination{
                border-radius: 0px !important;
            }
            .alert{
                border-radius: 0px;
            }
          .modal-content  {
                -webkit-border-radius: 0px !important;
                -moz-border-radius: 0px !important;
                border-radius: 0px !important; 
            }
            .btn-secondary{
                background-color: white;
                border: none;
            }
           
            .dropdown-menu{
                border-radius: 0px;
            }
         .select2-container--default .select2-selection .select2-selection__choice {
            background-color: white !important;
            color: #212529 !important;
            border: 1px solid #aaa;
            border-radius: 4px;
            cursor: default;
            float: left;
            margin-right: 5px;
            margin-top: 5px;
            padding: 0 5px;
        }
        .select2-container--default.select2-container--focus .select2-selection {
            border: solid #eee 1px;
            border-top: none !important;
            border-left: none !important;
            border-right: none !important;
            border-radius: 0px;
            outline: 0;
        }
        .select2-container--default .select2-selection {
             border: solid #eee 1px;
            border-top: none !important;
            border-left: none !important;
            border-right: none !important;
            border-radius: 0px;
            outline: 0;
            cursor: text;
        }
        .pdfobject-container {
            height: 30rem;
            border: 3px solid black; 
        }

        .select2-container--default .select2-selection .select2-selection__choice {
            background-color: white !important;
            color: #212529 !important;
            border: 1px solid #ddd !important;
            border-radius: 0px;
            cursor: default;
            float: left;
            margin-right: 5px;
            margin-top: 5px;
            padding: 0 5px;
        }
        .select2-dropdown {
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 0px;
            box-sizing: border-box;
            display: block;
            position: absolute;
            left: -100000px;
            width: 100%;
            z-index: 1051;
        }
        input[type="file"] {
            display: none;
        }
        .custom-file-upload {
            display: inline-block;
            padding: 6px 12px;
            cursor: pointer;
            color: #212529;
        }
        .select2-container--default .select2-search--dropdown .select2-search__field {
            border: 1px solid #ddd;
        }

        
        .select2-container .select2-selection--single .select2-selection__rendered {
            display: block;
            padding-left: 8px;
            padding-right: 20px;
            margin-top: 10px !important;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }
        
        input[type="date"] {
            position: relative;
        }

        /* create a new arrow, because we are going to mess up the native one
        see "List of symbols" below if you want another, you could also try to add a font-awesome icon.. */
        input[type="date"]:after {
            content: "\25BC"; 
            color: #555;
            padding: 0 5px;
        }

        /* change color of symbol on hover */
        input[type="date"]:hover:after {
            color: #bf1400;
        }

        /* make the native arrow invisible and stretch it over the whole field so you can click anywhere in the input field to trigger the native datepicker*/
        input[type="date"]::-webkit-calendar-picker-indicator {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            width: auto;
            height: auto;
            color: transparent;
            background: transparent;
        }

        /* adjust increase/decrease button */
        input[type="date"]::-webkit-inner-spin-button {
            z-index: 1;
        }

         /* adjust clear button */
         input[type="date"]::-webkit-clear-button {
             z-index: 1;
         }
         .breadcrumb{
            opacity: 0;
         }

         .btn-circle{
            border-radius: 100%;
            width: 40px;
            height: 40px;
            padding: 10px;
         }

        </style>