<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CoronaTracker </title>
    <link rel="stylesheet" href="jquery.coronatracker/css/coronatracker.css">
    <link rel="stylesheet" href="jquery.coronatracker/jquery-jvectormap-2.0.5/jquery-jvectormap-2.0.5.css"> 
    <script src="jquery-3.4.1.min.js" charset="utf-8"></script>
    <script src="jquery.coronatracker/js/jquery.coronatracker.js" charset="utf-8"></script>
    <script src="jquery.coronatracker/jquery-jvectormap-2.0.5/jquery-jvectormap-2.0.5.min.js" charset="utf-8"></script>
    <script src="jquery.coronatracker/jquery-jvectormap-2.0.5/jquery-jvectormap-world-mill-en.js" charset="utf-8"></script>
     <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
  </head>
  <body>
   <div class='container'>
    <h3 class="text-center"><strong><span class="glyphicon glyphicon-globe" style="color:#74acdf"></span> World Corona Virus Realtime Update</strong></h3>
    <div id="corona_container"></div>
    <div class='row'>
    <div class="col-sm-3">Countries </div>
    <div class="col-sm-3"><span style="margin-left:5px">Cases</span> </div>
    <div class="col-sm-3">Deaths</div>
    <div class="col-sm-3">Recovered </div>
    </div>
    <hr>
    <p class="text-center"><strong>Powered by Nobytechy <?php echo date('Y');?></strong></p>
    </div> 
    <a id="back2Top" title="Back to top" href="#">&#10148;</a>

    <script type="text/javascript">
      $("#corona_container").coronaTracker({
        area:"all", // country/countries acceptable are all, summary, or iso2 code, default is summary
        loop:2, // number of minutes per update, insert 0 to deactivate update
        theme:"dark", // theme dark/light,  default is light
        title:"Countries", // title to show on table, default is Coronavirus World Statistics
        type:"table" // type of data, map or table, default is table
      }).initialize();
      
     /*Scroll to top when arrow up clicked BEGIN*/
    $(window).scroll(function() {
    var height = $(window).scrollTop();
    if (height > 100) {
        $('#back2Top').fadeIn();
    } else {
        $('#back2Top').fadeOut();
    }
        });
        $(document).ready(function() {
            $("#back2Top").click(function(event) {
                event.preventDefault();
                $("html, body").animate({ scrollTop: 0 }, "slow");
                return false;
            });
        
        });
 /*Scroll to top when arrow up clicked END*/

    </script>
  <style>
 #back2Top {
    width: 40px;
    line-height: 40px;
    overflow: hidden;
    z-index: 999;
    display: none;
    cursor: pointer;
    -moz-transform: rotate(270deg);
    -webkit-transform: rotate(270deg);
    -o-transform: rotate(270deg);
    -ms-transform: rotate(270deg);
    transform: rotate(270deg);
    position: fixed;
    bottom: 50px;
    right: 0;
    background-color: #DDD;
    color: #555;
    text-align: center;
    font-size: 30px;
    text-decoration: none;
}
#back2Top:hover {
    background-color: #DDF;
    color: #000;
}

  </style>  
  </body>
</html>