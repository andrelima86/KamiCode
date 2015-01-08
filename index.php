<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>Web Application Using Json. Zaka</title>
		<link type="text/css" href="css/jquery-ui.css" rel="stylesheet" />	
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js" type="text/javascript"></script>	
    	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js" type="text/javascript"></script>

		<script type="text/javascript">
		    $(function () {

		        // Accordion
		        $("#accordion").accordion({ header: "h3" });

		        // Tabs
		        $('#tabs').tabs();

		        // Button
		        $("#button").button();
		        $("#button-disabled").button().addClass("ui-state-disabled").attr("disabled", true);
		        $("#radioset").buttonset();
		        
		        // Dialog			
		        $('#dialog').dialog({
		            autoOpen: false,
		            width: 600,modal:true,
		            buttons: {
		                "Ok": function () {
		                    $(this).dialog("close");
		                },
		                "Cancel": function () {
		                    $(this).dialog("close");
		                }
		            }
		        });

		        // Dialog Link
		        $('#dialog_link').click(function () {
		            $('#dialog').dialog('open');
		            return false;
		        });

		        // Autocomplete
		        $("#autocomplete").autocomplete({
		            source: ["c++", "java", "php", "coldfusion", "javascript", "asp", "ruby", "python", "c", "scala", "groovy", "haskell", "perl"]
		        });

		        // Datepicker
		        $('#datepicker').datepicker({
		            inline: true
		        });

		        // Slider
		        $('#slider').slider({
		            range: true,
		            values: [17, 67]
		        });
		        var values = [50, 80, 20, 40, 70];
		        $("#verticalSliders > div").each(function (i, item) {
		            $(item).slider({ orientation: "vertical", range: "min", min: 0, max: 100, value: values[i] });
		        });

		        // Progressbar
		        $("#progressbar").progressbar({
		            value: 20
		        });

		        //hover states on the static widgets
		        $('#dialog_link, ul#icons li').hover(
					function () { $(this).addClass('ui-state-hover'); },
					function () { $(this).removeClass('ui-state-hover'); }
				);

		    });
		</script>
		<style type="text/css">
			body{ font-family:"Segoe UI", Helvetica, Verdana;font-size: 11px; margin: 50px; }
			#wrapper{width:700px;  border-color: #000 ; border-top: inherit}
			h1{font-weight:normal;}
			.header { margin-top: 2em;font-weight:normal; }
			#dialog_link {padding: .4em 1em .4em 20px;text-decoration: none;position: relative;}
			#dialog_link span.ui-icon {margin: 0 5px 0 0;position: absolute;left: .2em;top: 50%;margin-top: -8px;}
			ul#icons {margin: 0; padding: 0;}
			ul#icons li {margin: 2px; position: relative; padding: 4px 0; cursor: pointer; float: left;  list-style: none;}
			ul#icons span.ui-icon {float: left; margin: 0 4px;}
			#verticalSliders{height:140px;padding-top:20px;}
            #verticalSliders > div{float:left;margin:20px;}
		</style>

            <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>

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
      var chart = new google.visualization.PieChart(document.getElementById('tabs-2'));
      chart.draw(data, {width: 600, height: 400});
    }

    </script>

	</head>
	<body   >
    <div id="wrapper" >
	<h1>Web Application Task</h1>
	<p style="font-size: 1.3em; line-height: 1.5; margin: 1em 0;">Using JSON to show data from the Json FIle</p>
			
	
		<!-- Tabs -->
		<h2 class="header">INFO</h2>
		<div id="tabs"  >
			<ul>
				<li><a href="#tabs-1">Your Health Information</a></li>
				<li><a href="#tabs-2">Pie Chart </a></li>
                
				
			</ul>
			<div id="tabs-1">
             <?php 
    
$str = file_get_contents('test1.json');
$json = json_decode($str, true);

$name = $json['daily']['data'][0]["name"] ;
$age = $json['daily']['data'][0]["age"];
$height = $json['daily']['data'][0]["height"];
$waistline = $json['daily']['data'][0]["waistline"];
$hipline = $json['daily']['data'][0]["hipline"];
$weight = $json['daily']['data'][0]["weight"];
$weightAssess = $json['daily']['data'][0]["weightAssess"];
$BMI = $json['daily']['data'][0]["BMI"];
$BMIAssess = $json['daily']['data'][0]["BMIAssess"];
$fat = $json['daily']['data'][0]["fat"];
$fatAssess = $json['daily']['data'][0]["fatAssess"];
$fatAssessPercentage = $json['daily']['data'][0]["fatAssessPercentage"];
$water = $json['daily']['data'][0]["water"];
$waterAssess = $json['daily']['data'][0]["waterAssess"];
$waterPercentage = $json['daily']['data'][0]["waterPercentage"];
$muscle = $json['daily']['data'][0]["muscle"];
$muscleAssess = $json['daily']['data'][0]["muscleAssess"];
$musclePercentage = $json['daily']['data'][0]["musclePercentage"];
$protien = $json['daily']['data'][0]["protien"];
$proteinAssess = $json['daily']['data'][0]["proteinAssess"];
$inorganicSalts = $json['daily']['data'][0]["inorganicSalts"];
$inorganicSaltsPercentage = $json['daily']['data'][0]["inorganicSaltsPercentage"];
$bone = $json['daily']['data'][0]["bone"];
$FFM = $json['daily']['data'][0]["FFM"];
$fatAssessPercentage = $json['daily']['data'][0]["FFMAssess"];
$bodyTyoeAssess = $json['daily']['data'][0]["bodyTyoeAssess"];
$bodyType = $json['daily']['data'][0]["bodyType"];
$BMR = $json['daily']['data'][0]["BMR"];




echo $temperatureMax;



?>

                <table border="0">
                <tr>
                <td> <b>Name</b>  </td>
                    <td><?php     


echo $name;

?></td>
</tr>
                    <tr>
                             <td> <b>Age</b>  </td>
                    <td><?php     


echo $age;

?></td>
                </tr>
                    <tr>
                             <td> <b>height</b>  </td>
                    <td><?php     


echo $height;

?></td>
                </tr>

                                   </tr>
                    <tr>
                             <td> <b>waistline</b>  </td>
                    <td><?php     


echo $waistline;

?></td>
                </tr>

                                   
                    <tr>
                             <td> <b>hipline</b>  </td>
                    <td><?php     


echo $hipline;

?></td>
                </tr>

                    
                    <tr>
                             <td> <b>weight</b>  </td>
                    <td><?php     


echo $weight;

?></td>
                </tr>

                    
                    <tr>
                             <td> <b>weightAssess</b>  </td>
                    <td><?php     


echo $weightAssess;

?></td>
                </tr>
                    
                    <tr>
                             <td> <b>BMI</b>  </td>
                    <td><?php     


echo $BMI;

?></td>
                </tr>

                    
                    <tr>
                             <td> <b>BMIAssess</b>  </td>
                    <td><?php     


echo $BMIAssess;

?></td>
                </tr>

                    
                    <tr>
                             <td> <b>fat</b>  </td>
                    <td><?php     


echo $fatAssess;

?></td>
                </tr>

                    
                    <tr>
                             <td> <b>water</b>  </td>
                    <td><?php     


echo $water;

?></td>
                </tr>

                    
                    <tr>
                             <td> <b>Water Assess</b>  </td>
                    <td><?php     


echo $waterAssess;

?></td>
                </tr>
                    
                    <tr>
                             <td> <b>Water Pecentage </b>  </td>
                    <td><?php     


echo $waterPercentage;

?></td>
                </tr>

                    
                    <tr>
                             <td> <b>Muscle</b>  </td>
                    <td><?php     


echo $muscle;

?></td>

                        
                    <tr>
                             <td> <b>Muscle Assess</b>  </td>
                    <td><?php     


echo $muscleAssess;

?></td>
                
                </tr>

                    
                    <tr>
                             <td> <b>musclePercentage </b>  </td>
                    <td><?php     


echo $musclePercentage;

?></td>
                </tr>

                      <tr>
                             <td> <b>Protien </b>  </td>
                    <td><?php     


echo $protien;

?></td>
                </tr>

                      <tr>
                             <td> <b>Protien Assess </b>  </td>
                    <td><?php     


echo $proteinAssess;

?></td>
                </tr>

                      <tr>
                             <td> <b>ingorganicSalts </b>  </td>
                    <td><?php     


echo $inorganicSalts;

?></td>
                </tr>

                      <tr>
                             <td> <b>bone </b>  </td>
                    <td><?php     


echo $bone;

?></td>
                </tr>

                      <tr>
                             <td> <b>FFM </b>  </td>
                    <td><?php     


echo $FFM;

?></td>

                </tr>
                      <tr>
                             <td> <b>BMR </b>  </td>
                    <td><?php     


echo $BMR;

?></td>
                </tr>

                </table>
            </div>
			<div id="tabs-2"></div>
			
		</div>
			
	</div>
	</body>
</html>


