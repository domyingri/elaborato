<!DOCTYPE html>
<html lang="it">
<?php
  @session_start();
  $User="";
  if(isset($_SESSION["UserIn"])) $User=$_SESSION["UserIn"];
  else header ("location: index.php");
?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title> Area ADMIN</title>

  <!-- Bootstrap CSS -->
  <link href="css1/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css1/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css1/elegant-icons-style.css" rel="stylesheet" />
  <link href="css1/font-awesome.min.css" rel="stylesheet" />
  <!-- full calendar css-->
  <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
  <link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
  <!-- easy pie chart-->
  <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" />
  <!-- owl carousel -->
  <link rel="stylesheet" href="css1/owl.carousel.css" type="text/css">
  <link href="css1/jquery-jvectormap-1.2.2.css" rel="stylesheet">
  <!-- Custom styles -->
  <link rel="stylesheet" href="css1/fullcalendar.css">
  <link href="css1/widgets.css" rel="stylesheet">
  <link href="css1/style.css" rel="stylesheet">
  <link href="css1/style-responsive.css" rel="stylesheet" />
  <link href="css1/xcharts.min.css" rel=" stylesheet">
  <link href="css1/jquery-ui-1.10.4.min.css" rel="stylesheet">
  <link href="css/jquery-confirm.min.css" rel='stylesheet' type='text/css'/>
  <!-- =======================================================
    Theme Name: NiceAdmin
    Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <!-- container section start -->
  <section id="container" class="">


    <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <a href="admin.php" class="logo">Area <span class="lite">Admin</span></a>
      <!--logo end-->

      <div class="nav search-row" id="top_menu">
        <!--  search form start -->
        <ul class="nav top-menu">
          <li>
            <form class="navbar-form">
              <input class="form-control" placeholder="Search" type="text">
            </form>
          </li>
        </ul>
        <!--  search form end -->
      </div>

      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">
          <!-- inbox notificatoin start-->
          <li id="mail_notificatoin_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="icon-envelope-l"></i>
                            <span class="badge bg-important">5</span>
                        </a>
            <ul class="dropdown-menu extended inbox">
              <div class="notify-arrow notify-arrow-blue"></div>
              <li>
                <p class="blue">You have 5 new messages</p>
              </li>
              <li>
                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/avatar-mini.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Greg  Martin</span>
                                    <span class="time">1 min</span>
                                    </span>
                                    <span class="message">
                                        I really like this admin panel.
                                    </span>
                                </a>
              </li>
              <li>
                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/avatar-mini2.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Bob   Mckenzie</span>
                                    <span class="time">5 mins</span>
                                    </span>
                                    <span class="message">
                                     Hi, What is next project plan?
                                    </span>
                                </a>
              </li>
              <li>
                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/avatar-mini3.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Phillip   Park</span>
                                    <span class="time">2 hrs</span>
                                    </span>
                                    <span class="message">
                                        I am like to buy this Admin Template.
                                    </span>
                                </a>
              </li>
              <li>
                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/avatar-mini4.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Ray   Munoz</span>
                                    <span class="time">1 day</span>
                                    </span>
                                    <span class="message">
                                        Icon fonts are great.
                                    </span>
                                </a>
              </li>
              <li>
                <a href="#">See all messages</a>
              </li>
            </ul>
          </li>
          <!-- inbox notificatoin end -->
          <!-- alert notification start-->
          <li id="alert_notificatoin_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                            <i class="icon-bell-l"></i>
                            <span class="badge bg-important">7</span>
                        </a>
            <ul class="dropdown-menu extended notification">
              <div class="notify-arrow notify-arrow-blue"></div>
              <li>
                <p class="blue">You have 4 new notifications</p>
              </li>
              <li>
                <a href="#">
                                    <span class="label label-primary"><i class="icon_profile"></i></span>
                                    Friend Request
                                    <span class="small italic pull-right">5 mins</span>
                                </a>
              </li>
              <li>
                <a href="#">
                                    <span class="label label-warning"><i class="icon_pin"></i></span>
                                    John location.
                                    <span class="small italic pull-right">50 mins</span>
                                </a>
              </li>
              <li>
                <a href="#">
                                    <span class="label label-danger"><i class="icon_book_alt"></i></span>
                                    Project 3 Completed.
                                    <span class="small italic pull-right">1 hr</span>
                                </a>
              </li>
              <li>
                <a href="#">
                                    <span class="label label-success"><i class="icon_like"></i></span>
                                    Mick appreciated your work.
                                    <span class="small italic pull-right"> Today</span>
                                </a>
              </li>
              <li>
                <a href="#">See all notifications</a>
              </li>
            </ul>
          </li>
          <!-- alert notification end-->
          <!-- user login dropdown start-->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="img/avatar1_small.jpg">
                            </span>
                            <span class="username"><?php
                                                     echo $User;
                                                   ?></span>
                            <b class="caret"></b>
                        </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              <li class="eborder-top">
                <a href="#"><i class="icon_profile"></i> My Profile</a>
              </li>
              <li>
                <a href="#"><i class="icon_mail_alt"></i> Messaggi</a>
              </li>
              <li>
                <a href="javascript: LogOut();"><i class="icon_key_alt"></i> Log Out</a>
              </li>
            </ul>
          </li>
          <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
      </div>
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="active">
            <a class="" href="admin.php">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="">Home</a></li>
              <li><i class="fa fa-laptop"></i>Dashboard</li>
            </ol>
          </div>
        </div>
        <!-- Today status end -->
        <div class="row">
          </div>
        <!-- statics end -->
        <!-- project team & activity start -->
        <div class="row">
          <div class="col-md-4 portlets">
            <!-- Widget -->
            <div class="panel panel-default">
              <div class="panel-heading">
                <div class="pull-left">Messaggi</div>
                <div class="widget-icons pull-right">
                  <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a>
                  <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                </div>
                <div class="clearfix"></div>
              </div>

              <div class="panel-body">
                <!-- Widget content -->
                <div class="padd sscroll">

                  <ul class="chats">

                    <!-- Chat by us. Use the class "by-me". -->
                    <li class="by-me">
                      <!-- Use the class "pull-left" in avatar -->
                      <div class="avatar pull-left">
                        <img src="img/user.jpg" alt="" />
                      </div>

                      <div class="chat-content">
                        <!-- In meta area, first include "name" and then "time" -->
                        <div class="chat-meta">John Smith <span class="pull-right">3 hours ago</span></div>
                        Vivamus diam elit diam, consectetur dapibus adipiscing elit.
                        <div class="clearfix"></div>
                      </div>
                    </li>

                    <!-- Chat by other. Use the class "by-other". -->
                    <li class="by-other">
                      <!-- Use the class "pull-right" in avatar -->
                      <div class="avatar pull-right">
                        <img src="img/user22.png" alt="" />
                      </div>

                      <div class="chat-content">
                        <!-- In the chat meta, first include "time" then "name" -->
                        <div class="chat-meta">3 hours ago <span class="pull-right">Jenifer Smith</span></div>
                        Vivamus diam elit diam, consectetur fconsectetur dapibus adipiscing elit.
                        <div class="clearfix"></div>
                      </div>
                    </li>

                    <li class="by-me">
                      <div class="avatar pull-left">
                        <img src="img/user.jpg" alt="" />
                      </div>

                      <div class="chat-content">
                        <div class="chat-meta">John Smith <span class="pull-right">4 hours ago</span></div>
                        Vivamus diam elit diam, consectetur fermentum sed dapibus eget, Vivamus consectetur dapibus adipiscing elit.
                        <div class="clearfix"></div>
                      </div>
                    </li>

                    <li class="by-other">
                      <!-- Use the class "pull-right" in avatar -->
                      <div class="avatar pull-right">
                        <img src="img/user22.png" alt="" />
                      </div>

                      <div class="chat-content">
                        <!-- In the chat meta, first include "time" then "name" -->
                        <div class="chat-meta">3 hours ago <span class="pull-right">Jenifer Smith</span></div>
                        Vivamus diam elit diam, consectetur fermentum sed dapibus eget, Vivamus consectetur dapibus adipiscing elit.
                        <div class="clearfix"></div>
                      </div>
                    </li>

                  </ul>

                </div>
                <!-- Widget footer -->
                <div class="widget-foot">

                  <form class="form-inline">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Type your message here...">
                    </div>
                    <button type="submit" class="btn btn-info">Invia</button>
                  </form>


                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-8">
            <!--Project Activity start-->
            <section class="panel">
              <div class="panel-body progress-panel">
                <div class="row">
                  <div class="col-lg-8 task-progress pull-left">
                    <h1>To Do Everyday</h1>
                  </div>
                  <div class="col-lg-4">
                    <span class="profile-ava pull-right">
                                        <img alt="" class="simple" src="img/avatar1_small.jpg">
                                        Jenifer smith
                                </span>
                  </div>
                </div>
              </div>
              <table class="table table-hover personal-task">
                <tbody>
                  <tr>
                    <td>Today</td>
                    <td>
                      web design
                    </td>
                    <td>
                      <span class="badge bg-important">Upload</span>
                    </td>
                    <td>
                      <span class="profile-ava">
                                        <img alt="" class="simple" src="img/avatar1_small.jpg">
                                    </span>
                    </td>
                  </tr>
                  <tr>
                    <td>Yesterday</td>
                    <td>
                      Project Design Task
                    </td>
                    <td>
                      <span class="badge bg-success">Task</span>
                    </td>
                    <td>
                      <div id="work-progress2"></div>
                    </td>
                  </tr>
                  <tr>
                    <td>21-10-14</td>
                    <td>
                      Generate Invoice
                    </td>
                    <td>
                      <span class="badge bg-success">Task</span>
                    </td>
                    <td>
                      <div id="work-progress3"></div>
                    </td>
                  </tr>
                  <tr>
                    <td>22-10-14</td>
                    <td>
                      Project Testing
                    </td>
                    <td>
                      <span class="badge bg-primary">To-Do</span>
                    </td>
                    <td>
                      <span class="profile-ava">
                                        <img alt="" class="simple" src="img/avatar1_small.jpg">
                                      </span>
                    </td>
                  </tr>
                  <tr>
                    <td>24-10-14</td>
                    <td>
                      Project Release Date
                    </td>
                    <td>
                      <span class="badge bg-info">Milestone</span>
                    </td>
                    <td>
                      <div id="work-progress4"></div>
                    </td>
                  </tr>
                  <tr>
                    <td>28-10-14</td>
                    <td>
                      Project Release Date
                    </td>
                    <td>
                      <span class="badge bg-primary">To-Do</span>
                    </td>
                    <td>
                      <div id="work-progress5"></div>
                    </td>
                  </tr>
                  <tr>
                    <td>Last week</td>
                    <td>
                      Project Release Date
                    </td>
                    <td>
                      <span class="badge bg-primary">To-Do</span>
                    </td>
                    <td>
                      <div id="work-progress1"></div>
                    </td>
                  </tr>
                  <tr>
                    <td>last month</td>
                    <td>
                      Project Release Date
                    </td>
                    <td>
                      <span class="badge bg-success">To-Do</span>
                    </td>
                    <td>
                      <span class="profile-ava">
                                        <img alt="" class="simple" src="img/avatar1_small.jpg">
                                      </span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </section>
            <!--Project Activity end-->
          </div>
        </div><br><br>

        <div class="row">
          <div class="col-md-6 portlets">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h2><strong>Calendar</strong></h2>
                <div class="panel-actions">
                  <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a>
                  <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                </div>

              </div><br><br><br>
              <div class="panel-body">
                <!-- Widget content -->

                <!-- Below line produces calendar. I am using FullCalendar plugin. -->
                <div id="calendar"></div>

              </div>
            </div>

          </div>
        <!-- project team & activity end -->

      </section>
      <div class="text-center">
        <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
          -->
          <br>
          Designed by <a href="https://www.facebook.com/domenico.ingriselli/">DELUXEDESIGN</a>
        </div>
      </div>
    </section>
    <!--main content end-->
  </section>
  <!-- container section start -->

  <!-- javascripts -->
  <script src="js1/jquery.js"></script>
  <script src="js1/jquery-ui-1.10.4.min.js"></script>
  <script src="js1/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="js1/jquery-ui-1.9.2.custom.min.js"></script>
  <!-- bootstrap -->
  <script src="js1/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="js1/jquery.scrollTo.min.js"></script>
  <script src="js1/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- charts scripts -->
  <script src="assets/jquery-knob/js/jquery.knob.js"></script>
  <script src="js1/jquery.sparkline.js" type="text/javascript"></script>
  <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
  <script src="js1/owl.carousel.js"></script>
  <!-- jQuery full calendar -->
  <<script src="js1/fullcalendar.min.js"></script>
    <!-- Full Google Calendar - Calendar -->
    <script src="assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="js1/calendar-custom.js"></script>
    <script src="js1/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="js1/jquery.customSelect.min.js"></script>
    <script src="assets/chart-master/Chart.js"></script>

    <!--custome script for all page-->
    <script src="js1/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="js1/sparkline-chart.js"></script>
    <script src="js1/easy-pie-chart.js"></script>
    <script src="js1/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="js1/jquery-jvectormap-world-mill-en.js"></script>
    <script src="js1/xcharts.min.js"></script>
    <script src="js1/jquery.autosize.min.js"></script>
    <script src="js1/jquery.placeholder.min.js"></script>
    <script src="js1/gdp-data.js"></script>
    <script src="js1/morris.min.js"></script>
    <script src="js1/sparklines.js"></script>
    <script src="js1/charts.js"></script>
    <script src="js1/jquery.slimscroll.min.js"></script>
    <script>
      //knob
      $(function() {
        $(".knob").knob({
          'draw': function() {
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
        $("#owl-slider").owlCarousel({
          navigation: true,
          slideSpeed: 300,
          paginationSpeed: 400,
          singleItem: true

        });
      });

      //custom select box

      $(function() {
        $('select.styled').customSelect();
      });

      /* ---------- Map ---------- */
      $(function() {
        $('#map').vectorMap({
          map: 'world_mill_en',
          series: {
            regions: [{
              values: gdpData,
              scale: ['#000', '#000'],
              normalizeFunction: 'polynomial'
            }]
          },
          backgroundColor: '#eef3f7',
          onLabelShow: function(e, el, code) {
            el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
          }
        });
      });
    </script>
    <script src="js/jquery-ui.min.js"></script>
            <script src="js/jquery-confirm.min.js"></script>
            <script type="text/javascript">

                function LogOut()
                {
                  $.ajax({
                    type:"POST",
                    url: "logout.php",
                    async:false,
                    data:{},
                    success: function(ret)
                    {
                      $.alert ({
                          title:"ATTENZIONE", content:'Disconnessione effettuata...', type:'red',
                          autoClose: 'ok|1500',
                          onClose: function(){window.location.href="index.php";},
                        });
                    },
                    error:function(e){}
                  });
                }
    </script>
</body>
</html>