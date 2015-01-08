<html>
  <head>
    <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript">
    
    // Load the Visualization API and the piechart package.
    google.load('visualization', '1', {'packages':['corechart']});
      
    // Set a callback to run when the Google Visualization API is loaded.
    google.setOnLoadCallback(drawChart);
      
    function drawChart() {
      var jsonData = $.ajax({
          url: "getData.php",
          dataType:"json",
          async: false
          }).responseText;
          
      // Create our data table out of JSON data loaded from server.
      var data = new google.visualization.DataTable(jsonData);

      // Instantiate and draw our chart, passing in some options.
      var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
      chart.draw(data, {width: 800, height: 600});
    }

    </script>
  </head>

  <body>
    <!--Div that will hold the pie chart-->
    <div id="values"> 
        <?php 
    
$str = file_get_contents('test1.json');
$json = json_decode($str, true);

$temperatureMin = $json['daily']['data'][0]["weight"] ;
$temperatureMax = $json['daily']['data'][0]["BMR"];



echo $temperatureMax;



?> </div>
      <div id="results">
      <?php
echo $temperatureMin;
?>
     
      </div>
    <div id="chart_div"></div>
   

  </body>
</html>