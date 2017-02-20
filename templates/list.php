<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="#">
<meta name="author" content="#">
<link rel="icon" type="image/png" sizes="16x16" href="<?=$this->baseUrl()?>img/hp-favicon.png">
<title><?=$title?></title>
<!-- Bootstrap Core CSS -->
<link href="<?=$this->baseUrl()?>bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Data table -->
<link href="<?=$this->baseUrl()?>plugins/bower_components/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
<!-- Date picker plugins css -->
<link href="<?=$this->baseUrl()?>plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
<!-- Daterange picker plugins css -->
<link href="<?=$this->baseUrl()?>plugins/bower_components/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
<link href="<?=$this->baseUrl()?>plugins/bower_components/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
<!-- Footable CSS -->
<link href="<?=$this->baseUrl()?>plugins/bower_components/footable/css/footable.core.css" rel="stylesheet">
<link href="<?=$this->baseUrl()?>plugins/bower_components/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />
<!-- Select 2 -->
<link href="<?=$this->baseUrl()?>plugins/bower_components/custom-select/custom-select.css" rel="stylesheet" type="text/css" />
<link href="<?=$this->baseUrl()?>plugins/bower_components/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />
<link href="<?=$this->baseUrl()?>plugins/bower_components/multiselect/css/multi-select.css"  rel="stylesheet" type="text/css" />
<!-- Menu CSS -->
<link href="<?=$this->baseUrl()?>plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
<!-- toast CSS -->
<link href="<?=$this->baseUrl()?>plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
<!-- morris CSS -->
<link href="<?=$this->baseUrl()?>plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
<!-- Clock CSS -->
<link href="<?=$this->baseUrl()?>/plugins/bower_components/clockpicker/dist/jquery-clockpicker.min.css" rel="stylesheet">
<!-- animation CSS -->
<link href="<?=$this->baseUrl()?>css/animate.css" rel="stylesheet">
<!-- Custom CSS -->
<link href="<?=$this->baseUrl()?>css/style.css" rel="stylesheet">
<!-- color CSS -->
<link href="<?=$this->baseUrl()?>css/colors/blue.css" id="theme"  rel="stylesheet">

<!-- jQuery -->
<script src="<?=$this->baseUrl()?>plugins/bower_components/jquery/dist/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>

<style type="text/css">
   ul.board {
      list-style: none;
      padding: 0;
      margin: 0;
   }
   ul.board li {
      margin: 5px;
      border-radius: 5px;
      height: 120px;
      font-size: 18px;
      background: #fcfcfc;
      padding: 10px;
   }
   ul.board li span {
      color: #fff;
   }
   span.create-board {
    color: #9d9d9d !important;
   }
   .bg-blue {
    background: #0085ff !important;
   }
   .myadmin-dd .dd-list .dd-item .dd-handle {
      margin: 5px 0;
   }
</style>
</head>
<body onload="shows_form_part(1)">
<!-- Preloader -->
<div class="preloader hidden-print">
  <div class="cssload-speeding-wheel"></div>
</div>
<div id="wrapper">
  <!-- HEADER -->

<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top m-b-0">
    <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
      <div class="top-left-part"><a class="logo" href="#"><b><img src="<?=$this->baseUrl()?>plugins/images/harmonipermana-logo.png" width="150" alt="home" /></b><span class="hidden-xs"></span></a></div>
      <ul class="nav navbar-top-links navbar-right pull-right">
        
        <!-- /.dropdown -->
        <li class="dropdown"> <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"><img src="<?=$this->baseUrl()?>plugins/images/users/avatar.png" alt="user-img" width="36" class="img-circle"> </a>
          <ul class="dropdown-menu dropdown-user animated flipInY">
            <li><a href="#"><i class="ti-user"></i> My Profile</a></li>
            <li><a href="#"><i class="fa fa-power-off"></i> Logout</a></li>
          </ul>
          <!-- /.dropdown-user -->
        </li>
      </ul>
    </div>
  </nav>
  <!-- Left navbar-header -->
  <div class="navbar-default sidebar hidden-print" role="navigation">
    <div class="sidebar-nav navbar-collapse slimscrollsidebar">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                    <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
                    </span>
                </div>
            </li> 
        <li><a href="/board/" class="waves-effect"><i class="icon-list fa-fw"></i> <span class="hide-menu">Personal Task Manager <span class="fa arrow"></span></span></a>
    </div>
  </div>

  <!-- Page Content -->
    <div id="page-wrapper" style="min-height: 601px;">
    <!-- content -->
    <div class="container-fluid">
    <!-- menu title -->
      <div class="row bg-title">
        <div class="col-sm-2 col-xs-9">
          <a class="btn btn-block btn-outline btn-rounded btn-info"><span><?php echo @$boards->boardname; ?></span></a>
        </div>
        <div class="col-sm-2 col-lg-1 col-xs-9">
          <a class="btn btn-block btn-outline btn-rounded btn-info"><span class="ti-lock"> Private</span></a>
        </div>
        <div class="col-lg-9 col-md-8 col-xs-12">
          <ol class="breadcrumb">
            <li><a href="#">Show Menu</a></li>
          </ol>
        </div>
      </div>
      <!-- isi content -->
      <?php foreach($lists as $list): ?>
        <div class="col-md-4">
            <div class="white-box">
              <label class="control-label"><?= $list->listname; ?></label>
               <div class="panel-action"><a href="#" data-perform="panel-collapse">
              <div class="myadmin-dd dd" id="nestable">
                <ol id="card-list" class="dd-list">
                  <li class="dd-item" data-id="1">
                      <?php foreach ($list->details as $card):
                        ?>
                          <div class="dd-handle" alt="default" data-toggle="modal" data-target="#myModal"><?= $card->cardname;?></div>
                          <script>
                            $(document).ready(function(){
                                $("a.show-<?= $list->id; ?>").click(function(){
                                    $(".lihat-<?= $list->id; ?>").toggle();
                                });
                            });
                          </script>
                      <?php endforeach; ?>
                  </li>
                    <a class="btn btn-block btn-default m-t-10 show-<?= $list->id; ?>">Add a Card ...</a>
                    <form action="<?= $this->pathFor('save-card'); ?>" method="POST">
                      <div class="m-t-15 lihat-<?= $list->id; ?> dn" style="display: none;">
                          <input type="text" name="board" value="<?php echo @$boards->id ?>" class="hidden">
                          <input type="text" name="idlist" class="hidden" value="<?= $list->id; ?>">
                          <textarea class="form-control form-control-line" name="cardname" rows="3"></textarea>
                          <button type="submit" class="btn btn-info m-t-20">Add</button> 
                        </div>
                    </form>
                </ol>
              </div>
              </div>
            </div>
          </div>
          <script>
            $(document).ready(function(){
                $("a.show-<?= $list->id; ?>").click(function(){
                    $(".lihat-<?= $list->id; ?>").toggle();
                });
            });
          </script>
        <?php endforeach; ?>
        <div class="col-sm-3 col-xs-12">
            <button type="button" class="btn btn-block btn-rounded btn-default showtop" data-target="#add-list" data-toggle="modal">Add a List ...</button>
            <!-- Start an Alert -->
        </div>
        <div id="add-list" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none; padding-right: 17px;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title" id="myModalLabel">Add a List</h4></div>
                    <div class="modal-body">
                        <form action="<?= $this->pathFor('save-list'); ?>" method="POST">
                            <div class="form-group">
                                <div class="col-md-12 m-b-20">
                                    <input type="text" name="idboard" value="<?php echo @$boards->id ?>" class="hidden">
                                    <input type="text" name="listname" class="form-control" placeholder="Add a List . . . "> 
                                </div>
                            </div>
                            <button type="submit" class="btn btn-info">Save</button>
                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
                        </form>
                    </div>
                </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>

        <div class="col-md-4">
          <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  <h3 class="modal-title" id="myModalLabel" style="font-weight: bold;" class="fa fa-list-alt"><?= $card->cardname;?></h3>
                </div>
                <div class="modal-body">
                  <h4>Overflowing text to show scroll behavior</h4>
                  <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                  <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                </div>
                <!-- <div class="modal-footer">
                  <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Close</button>
                </div> -->
              </div>
            </div>
          </div>
        </div>
      <div class="right-sidebar">
        <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 100%;"><div class="slimscrollright" style="overflow: hidden; width: auto; height: 100%;">
          <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>

        </div><div class="slimScrollBar" style="background: rgb(220, 220, 220); width: 5px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;"></div><div class="slimScrollRail" style="width: 5px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
      </div>
      <!-- /.right-sidebar -->
    </div>
    <!-- /.container-fluid -->
   <footer class="footer text-center"> <strong>Hospitality Platform</strong> &copy; <?=date('Y')?></footer>
  </div>
</div>

<!-- Bootstrap Core JavaScript -->
<script src="<?=$this->baseUrl()?>bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Menu Plugin JavaScript -->
<script src="<?=$this->baseUrl()?>plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
<!--slimscroll JavaScript -->
<script src="<?=$this->baseUrl()?>js/jquery.slimscroll.js"></script>
<!--Wave Effects -->
<script src="<?=$this->baseUrl()?>js/waves.js"></script>
<!--Counter js -->
<script src="<?=$this->baseUrl()?>plugins/bower_components/waypoints/lib/jquery.waypoints.js"></script>
<script src="<?=$this->baseUrl()?>plugins/bower_components/counterup/jquery.counterup.min.js"></script>
<!--Morris JavaScript -->
<script src="<?=$this->baseUrl()?>plugins/bower_components/raphael/raphael-min.js"></script>
<script src="<?=$this->baseUrl()?>plugins/bower_components/morrisjs/morris.js"></script>
<!-- Custom Theme JavaScript -->
<script src="<?=$this->baseUrl()?>js/custom.js"></script>
<script src="<?=$this->baseUrl()?>js/dashboard1.js"></script>
<!-- Sparkline chart JavaScript -->
<script src="<?=$this->baseUrl()?>plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
<script src="<?=$this->baseUrl()?>plugins/bower_components/jquery-sparkline/jquery.charts-sparkline.js"></script>
<script src="<?=$this->baseUrl()?>plugins/bower_components/toast-master/js/jquery.toast.js"></script>

<script src="<?=$this->baseUrl()?>plugins/bower_components/datatables/jquery.dataTables.min.js"></script>
<!-- React JS -->
<script src="https://fb.me/react-with-addons-15.2.1.js"></script>
<script src="https://fb.me/react-dom-15.2.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/babel-core/5.8.34/browser.min.js"></script>
<!-- Select2 -->
<script src="<?=$this->baseUrl()?>plugins/bower_components/custom-select/custom-select.min.js" type="text/javascript"></script>
<script src="<?=$this->baseUrl()?>plugins/bower_components/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>
<script src="<?=$this->baseUrl()?>plugins/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
<script src="<?=$this->baseUrl()?>plugins/bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?=$this->baseUrl()?>plugins/bower_components/multiselect/js/jquery.multi-select.js"></script>
<!-- Plugin JavaScript -->
<script src="<?=$this->baseUrl()?>plugins/bower_components/moment/moment.js"></script>
<!-- Date Picker Plugin JavaScript -->
<script src="<?=$this->baseUrl()?>plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
<!-- Date range Plugin JavaScript -->
<script src="<?=$this->baseUrl()?>plugins/bower_components/timepicker/bootstrap-timepicker.min.js"></script>
<script src="<?=$this->baseUrl()?>plugins/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="<?=$this->baseUrl()?>plugins/bower_components/clockpicker/dist/jquery-clockpicker.min.js"></script>

<script src="<?=$this->baseUrl()?>js/numeral.js"></script>
<script src="<?=$this->baseUrl()?>plugins/bower_components/nestable/jquery.nestable.js"></script>

<noscript>&lt;img src="https://d5nxst8fruw4z.cloudfront.net/atrk.gif?account=m/hBm1akKd60bm" style="display:none" height="1" width="1" alt=""&gt;</noscript>

<script type="text/javascript">
var isconfirming = false;
  // load a language
  //numeral setting
  numeral.language('id', {
      delimiters: {
          thousands: '.',
          decimal: ','
      },
      abbreviations: {
          thousand: 'k',
          million: 'm',
          billion: 'b',
          trillion: 't'
      },
      ordinal : function (number) {
          return number === 1 ? 'er' : 'ème';
      },
      currency: {
          symbol: 'Rp'
      }
  });
  // switch between languages
  numeral.language('id');
</script>
<!--Style Switcher -->
<!-- <script src="<?=$this->baseUrl()?>plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script> -->
<!-- Footable -->
<script src="<?=$this->baseUrl()?>plugins/bower_components/footable/js/footable.all.min.js"></script>
<script src="<?=$this->baseUrl()?>plugins/bower_components/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>

<!-- VUEJS -->
<script src="<?=$this->baseUrl()?>js/vue.min.js"></script>
<script src="<?=$this->baseUrl()?>js/vue-resource.min.js"></script>
<script src="<?=$this->baseUrl()?>js/app/vue.checkout-add.js"></script>
<script src="<?=$this->baseUrl()?>js/app/vue.periodic-rate.js"></script>
<script src="<?=$this->baseUrl()?>js/app/vue.currency.js"></script>
<script src="<?=$this->baseUrl()?>js/app/vue.roomchange.js"></script>
<script src="<?=$this->baseUrl()?>js/app/vue.costListBuild.js"></script>
<script src="<?=$this->baseUrl()?>js/app/vue.roomrates.js"></script>
<script src="<?=$this->baseUrl()?>js/app/reservation.js"></script>
<script src="<?=$this->baseUrl()?>js/app/logistic-purchase-request.js"></script>

</body>
</html>