@extends('layout.master')
@section('header')
  
  <!-- Bootstrap core CSS -->
  <link href="{{asset('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <!--external css-->
  <link href="{{asset('lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="{{asset('css/zabuto_calendar.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('lib/gritter/css/jquery.gritter.css')}}" />
  <!-- Custom styles for this template -->
  <link href="{{asset('css/style.css')}}" rel="stylesheet">
  <link href="{{asset('css/style-responsive.css')}}" rel="stylesheet">
  <script src="{{asset('lib/chart-master/Chart.js')}}"></script>

@endsection

@section('title')
	DSA Staff - Profile
@endsection

@section('navbar')
  <div class="sidebar-toggle-box">
    <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
  </div>
  <!--logo start-->
  <a href="{{\route('staff.user.dashboard')}}" class="logo"><b><span>MSU</span>Shifting Program</b></a>
  <!--logo end-->

  <div class="top-menu">
    <ul class="nav pull-right top-menu">
      <li>
        <form method="post" action="{{\route('staff.logout')}}">
          {{ csrf_field() }}
          <button type="submit" class="logout" >Logout</button>
        </form>
      </li>
    </ul>
  </div>
@endsection

@section('sidebar')
<ul class="sidebar-menu" id="nav-accordion">
  <h5 class="centered">MSU-MAIN STAFF</h5>
  <p class="centered"><img class="img-circle" class="img-circle"  height= "80" width="80" src="{{$staff->picture()}}"></p>
  <h4 class="centered">{{$staff->fullName}}</h4>  
  <li class="mt">
    <a href="{{\route('staff.user.dashboard')}}">
      <i class="fa fa-dashboard"></i>
      <span>Dashboard</span>
    </a>
  </li>
  <li>
    <a href="{{\route('staff.student')}}">
      <i class="fa fa-sitemap"></i>
      <span>Student Data</span>
    </a>
  </li>
  <li>
    <a class="active" href="">
      <i class="fa fa-user"></i>
      <span>Profile</span>
    </a>
  </li>
</ul>
@endsection

@section('contents')
	<h5>PROFILE</h5>
@endsection

@section('scripts')
  <script src="{{asset('lib/jquery/jquery.min.js')}}"></script>

  <script src="{{asset('lib/bootstrap/js/bootstrap.min.js')}}"></script>
  <script class="include" type="text/javascript" src="{{asset('lib/jquery.dcjqaccordion.2.7.js')}}"></script>
  <script src="{{asset('lib/jquery.scrollTo.min.js')}}"></script>
  <script src="{{asset('lib/jquery.nicescroll.js')}}" type="text/javascript"></script>
  <script src="{{asset('lib/jquery.sparkline.js')}}"></script>
  <!--common script for all pages-->
  <script src="{{asset('lib/common-scripts.js')}}"></script>
  <script type="text/javascript" src="{{asset('lib/gritter/js/jquery.gritter.js')}}"></script>
  <script type="text/javascript" src="{{asset('lib/gritter-conf.js')}}"></script>
  <!--script for this page-->
  <script src="{{asset('lib/sparkline-chart.js')}}"></script>
  <script src="{{asset('lib/zabuto_calendar.js')}}"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      var unique_id = $.gritter.add({
        // (string | mandatory) the heading of the notification
        title: 'Welcome to MSUOVCAA Shifting Program!',
        // (string | mandatory) the text inside the notification
        text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo.',
        // (string | optional) the image to display on the left
        image: 'img/ui-sam.jpg',
        // (bool | optional) if you want it to fade out on its own or just sit there
        sticky: false,
        // (int | optional) the time you want it to be alive for before fading out
        time: 8000,
        // (string | optional) the class name you want to apply to that specific message
        class_name: 'my-sticky-class'
      });

      return false;
    });
  </script>
  <script type="application/javascript">
    $(document).ready(function() {
      $("#date-popover").popover({
        html: true,
        trigger: "manual"
      });
      $("#date-popover").hide();
      $("#date-popover").click(function(e) {
        $(this).hide();
      });

      $("#my-calendar").zabuto_calendar({
        action: function() {
          return myDateFunction(this.id, false);
        },
        action_nav: function() {
          return myNavFunction(this.id);
        },
        ajax: {
          url: "show_data.php?action=1",
          modal: true
        },
        legend: [{
            type: "text",
            label: "Special event",
            badge: "00"
          },
          {
            type: "block",
            label: "Regular event",
          }
        ]
      });
    });

    function myNavFunction(id) {
      $("#date-popover").hide();
      var nav = $("#" + id).data("navigation");
      var to = $("#" + id).data("to");
      console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
  </script>

@endsection