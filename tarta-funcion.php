<?php
	 function tartapie($datos,$id,$ancho,$alto){
    print <<<DELANTE_DEL_FOR
    <div id="$id" style="width: $ancho; height: $alto;"></div>  
    <script type="text/javascript">
    var chart;
    var legend;

    var chartData$id = [
DELANTE_DEL_FOR;
        foreach($datos as $clave => $valor){
            print "\t{\"clave\":\"$clave\",\"valor\":$valor },\n";
        }
    print<<<DETRAS_DEL_FOR
    ];

    AmCharts.ready(function () {
        // PIE CHART
        chart = new AmCharts.AmPieChart();
        chart.dataProvider = chartData$id;
        chart.titleField = "clave";
        chart.valueField = "valor";
        chart.outlineColor = "#FFFFFF";
        chart.outlineAlpha = 0.8;
        chart.outlineThickness = 2;
        chart.balloonText = "[[title]]<br><span style='font-size:14px'><b>[[value]]</b> ([[percents]]%)</span>";
        
        // WRITE
        chart.write("$id");
    });
    </script>
DETRAS_DEL_FOR;
    }
    #############################################################################################################################
     function tartapie3d($datos,$id,$ancho,$alto){
    print <<<DELANTE_DEL_FOR
    <div id="$id" style="width: $ancho; height: $alto;"></div>  
    <script type="text/javascript">
   var chart;
var legend;

var chartData =[
DELANTE_DEL_FOR;
        foreach($datos as $clave => $valor){
            print "\t{\"clave\":\"$clave\",\"valor\":$valor },\n";
        }
    print<<<DETRAS_DEL_FOR
    ];

    AmCharts.ready(function () {
    // PIE CHART
    chart = new AmCharts.AmPieChart();
    chart.dataProvider = chartData;
    chart.titleField = "clave";
    chart.valueField = "valor";
    chart.outlineColor = "#FFFFFF";
    chart.outlineAlpha = 0.8;
    chart.outlineThickness = 2;
    chart.balloonText = "[[title]]<br><span style='font-size:14px'><b>[[value]]</b> ([[percents]]%)</span>";
     this makes the chart 3D
    chart.depth3D = 15;
    chart.angle = 30;
    
    // WRITE
    chart.write($id);
});
    </script>
DETRAS_DEL_FOR;
    }
    ######################################################################################################################
     function serial($datos,$id,$ancho,$alto){
    print <<<DELANTE_DEL_FOR
    <div id="$id" style="width: $ancho; height: $alto;"></div>  
    <script type="text/javascript">
   var chart;


var chartData =[
DELANTE_DEL_FOR;
        foreach($datos as $clave => $valor){
            print "\t{\"clave\":\"$clave\",\"valor\":$valor },\n";
        }
    print<<<DETRAS_DEL_FOR
    ];

  AmCharts.ready(function () {
    // SERIAL CHART
    chart = new AmCharts.AmSerialChart();
    chart.dataProvider = chartData;
    chart.categoryField = "clave";
    // this single line makes the chart a bar chart, 
    // try to set it to false - your bars will turn to columns                
    chart.rotate = true;
    // the following two lines makes chart 3D
    chart.depth3D = 20;
    chart.angle = 30;

    // AXES
    // Category
    var categoryAxis = chart.categoryAxis;
    categoryAxis.gridPosition = "start";
    categoryAxis.axisColor = "#DADADA";
    categoryAxis.fillAlpha = 1;
    categoryAxis.gridAlpha = 0;
    categoryAxis.fillColor = "#FAFAFA";

    // value
    var valueAxis = new AmCharts.ValueAxis();
    valueAxis.axisColor = "#DADADA";
    valueAxis.title = "valor";
    valueAxis.gridAlpha = 0.1;
    chart.addValueAxis(valueAxis);

    // GRAPH
    var graph = new AmCharts.AmGraph();
    graph.title = "valor";
    graph.valueField = "valor";
    graph.type = "column";
    graph.balloonText = "valor in [[category]]:[[value]]";
    graph.lineAlpha = 0;
    graph.fillColors = "#bf1c25";
    graph.fillAlphas = 1;
    chart.addGraph(graph);

    // WRITE
    
    chart.write($id);
});
    </script>
DETRAS_DEL_FOR;
    }
    #############################################################################################################33
    function funnel($datos,$id,$ancho,$alto){
    print <<<DELANTE_DEL_FOR
    <div id="$id" style="width: $ancho; height: $alto;"></div>  
    <script type="text/javascript">
   var chart;


var data =[
DELANTE_DEL_FOR;
        foreach($datos as $clave => $valor){
            print "\t{\"clave\":\"$clave\",\"valor\":$valor },\n";
        }
    print<<<DETRAS_DEL_FOR
    ];

  AmCharts.ready(function () {
    
    chart = new AmCharts.AmFunnelChart();
    chart.rotate = true;
    chart.titleField = "clave";
    chart.balloon.fixedPosition = true;
    chart.marginRight = 230;
    chart.marginLeft = 15;
    chart.labelPosition = "right";
    chart.funnelAlpha = 0.9;
    chart.valueField = "valor";
    chart.startX = -500;
    chart.dataProvider = data;
    chart.startAlpha = 0;
    
    // WRITE
    
    chart.write($id);
});
    </script>
DETRAS_DEL_FOR;
    }
    #############################################################################################################################
    function donot($datos,$id,$ancho,$alto){
    print <<<DELANTE_DEL_FOR
    <div id="$id" style="width: $ancho; height: $alto;"></div>  
    <script type="text/javascript">
   var chart;


var data =[
DELANTE_DEL_FOR;
        foreach($datos as $clave => $valor){
            print "\t{\"clave\":\"$clave\",\"valor\":$valor },\n";
        }
    print<<<DETRAS_DEL_FOR
    ];

 AmCharts.ready(function () {
    // PIE CHART
    chart = new AmCharts.AmPieChart();
   
    chart.dataProvider = chartData;
    chart.titleField = "clave";
    chart.valueField = "valor";
    chart.sequencedAnimation = true;
    chart.startEffect = "elastic";
    chart.innerRadius = "30%";
    chart.startDuration = 2;
    chart.labelRadius = 15;
    chart.balloonText = "[[title]]<br><span style='font-size:14px'><b>[[value]]</b> ([[percents]]%)</span>";
    // the following two lines makes the chart 3D
    chart.depth3D = 10;
    chart.angle = 15;
    
    // WRITE
    
    chart.write($id);
});
    </script>
DETRAS_DEL_FOR;
    }
?>		
    
