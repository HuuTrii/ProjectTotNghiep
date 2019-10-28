//[Dashboard Javascript]

//Project:	Lion Admin - Responsive Admin Template
//Primary use:   Used only for the main dashboard (index.html)


$(function () {

  'use strict';

  // Make the dashboard widgets sortable Using jquery UI
  $('.connectedSortable').sortable({
    placeholder         : 'sort-highlight',
    connectWith         : '.connectedSortable',
    handle              : '.box-header, .nav-tabs',
    forcePlaceholderSize: true,
    zIndex              : 999999
  });
  $('.connectedSortable .box-header, .connectedSortable .nav-tabs-custom').css('cursor', 'move');

// chart
		$("#baralc").sparkline([2,4,3,7,6,4,8,9,6,8,12,6,7,9,4,8,5,7,9,13,10,9,9,8], {
			type: 'bar',
			height: '80',
			barWidth: 6,
			barSpacing: 4,
			barColor: '#e9ab2e',
		});
	    $("#lineIncrease").sparkline([1,8,6,5,6,8,7,9,7,8,10,16,14,10], {
			type: 'line',
			width: '99%',
			height: '140',
			lineWidth: 2,
			lineColor: '#ffffff',
			fillColor: "#398bf7",
			spotColor: '#ffffff',
			minSpotColor: '#ffffff',
			maxSpotColor: '#ffffff',
			spotRadius: 3,
		});
		$("#linearea").sparkline([1,3,5,4,6,8,7,9,7,8,10,16,14,10], {
			type: 'line',
			width: '100%',
			height: '80',
			lineColor: '#06d79c',
			fillColor: '#06d79c',
			lineWidth: 2,
		});
	
	// Morris-chart

Morris.Area({
        element: 'morris-area-chart',
        data: [{
            period: '2010',
            iphone: 50,
            ipad: 80,
            itouch: 20
        }, {
            period: '2011',
            iphone: 130,
            ipad: 100,
            itouch: 80
        }, {
            period: '2012',
            iphone: 80,
            ipad: 60,
            itouch: 70
        }, {
            period: '2013',
            iphone: 70,
            ipad: 200,
            itouch: 140
        }, {
            period: '2014',
            iphone: 180,
            ipad: 150,
            itouch: 140
        }, {
            period: '2015',
            iphone: 105,
            ipad: 100,
            itouch: 80
        },
         {
            period: '2016',
            iphone: 250,
            ipad: 150,
            itouch: 200
        }],
        xkey: 'period',
        ykeys: ['iphone', 'ipad', 'itouch'],
        labels: ['iPhone', 'iPad', 'iPod Touch'],
        pointSize: 3,
        fillOpacity: 0,
        pointStrokeColors:['#00bfc7', '#fb9678', '#9675ce'],
        behaveLikeLine: true,
        gridLineColor: '#e0e0e0',
        lineWidth: 3,
        hideHover: 'auto',
        lineColors: ['#00bfc7', '#fb9678', '#9675ce'],
        resize: true
        
    });
	
//---nvd3 chart
	nv.addGraph(function() {
		var chart = nv.models.multiBarChart()
		  .transitionDuration(350)
		  .reduceXTicks(true)   //If 'false', every single x-axis tick label will be rendered.
		  .rotateLabels(0)      //Angle to rotate x-axis labels.
		  .showControls(true)   //Allow user to switch between 'Grouped' and 'Stacked' mode.
		  .groupSpacing(0.1)    //Distance between each group of bars.
		  .color(['#ab8ce4', '#03a9f3', '#00c292']);
		;

		chart.xAxis
			.tickFormat(d3.format(',f'));

		chart.yAxis
			.tickFormat(d3.format(',.1f'));

		d3.select('#nvd3-bar svg')
			.datum(exampleData())
			.call(chart);

		nv.utils.windowResize(chart.update);

		return chart;
	});

	//Generate some nice data.
	function exampleData() {
	  return stream_layers(3,10+Math.random()*100,.1).map(function(data, i) {
		return {
		  key: 'Stream #' + i,
		  values: data
		};
	  });
	}
//--------------
		//- bar CHART -
		//--------------

 	if( $('#chart_2').length > 0 ){
		var ctx2 = document.getElementById("chart_2").getContext("2d");
		var data2 = {
			labels: ["January", "February", "March", "April", "May", "June", "July"],
			datasets: [
				{
					label: "My First dataset",
					backgroundColor: "rgba(3, 169, 243, 0.6)",
					borderColor: "rgba(3, 169, 243, 0.6)",
					data: [10, 30, 80, 61, 26, 75, 40]
				},
				{
					label: "My Second dataset",
					backgroundColor: "rgba(251, 150, 120, 0.6)",
					borderColor: "rgba(251, 150, 120, 0.6)",
					data: [28, 48, 40, 19, 86, 27, 90]
				}
			]
		};
		
		var hBar = new Chart(ctx2, {
			type:"horizontalBar",
			data:data2,
			
			options: {
				tooltips: {
					mode:"label"
				},
				scales: {
					yAxes: [{
						stacked: true,
						gridLines: {
							color: "rgba(135,135,135,0)",
						},
						ticks: {
							fontFamily: "Poppins",
							fontColor:"#878787"
						}
					}],
					xAxes: [{
						stacked: true,
						gridLines: {
							color: "rgba(135,135,135,0)",
						},
						ticks: {
							fontFamily: "Poppins",
							fontColor:"#878787"
						}
					}],
					
				},
				elements:{
					point: {
						hitRadius:40
					}
				},
				animation: {
					duration:	3000
				},
				responsive: true,
				legend: {
					display: false,
				},
				tooltip: {
					backgroundColor:'rgba(33,33,33,1)',
					cornerRadius:0,
					footerFontFamily:"'Poppins'"
				}
				
			}
		});
	}


}); // End of use strict