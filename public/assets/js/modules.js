//
// Modules
//

/* ------------------------------------------------------------------
 * Name         : Mintaka - HTML Template
 * File         : modules.js
 * Author       : ScanThemes
 * Author URI   : scanthemes@gmail.com
 *
 * All Rights Reserved.
 * --------------------------------------------------------------------- */
/* ---------------------------------------------------------------------

  File for working with charts and other plugins.

  [Table of contents]

	- Charts
	-- ChartJS
	-- Apexchart
	- RangeJS
	- Preloader
	- Shop-Range-Slider
	- JQVMAP

------------------------------------------------------------------------ */

"use strict";

/* Styling */
const	glowLineLightColor = "#ffffff",
		glowLineWarningColor = "#2af270",
		glowLinePrimaryColor = "#2e6ee2";

/* [ charts ] */
function chartJSInit() {

	/* ChartJS */
	if ($('#_chartJS_min').length > 0) {

		/* chart-sm-01 (line-chart) */
		if($("#chart-sm-01").length) {
			let chart_sm_01 = document.querySelector("#chart-sm-01"), // chart ID
				chart_sm_01_chartLineLG = chart_sm_01.getContext("2d"),
				chart_sm_01_gradientFill = chart_sm_01_chartLineLG.createLinearGradient(0, 0, 0, 50);
				chart_sm_01_gradientFill.addColorStop(0, "rgba(255, 255, 255, 1)");
				chart_sm_01_gradientFill.addColorStop(.5, "rgba(198, 210, 253, 1)");
				chart_sm_01_gradientFill.addColorStop(1, "rgba(162, 255, 194, 1)");
			new Chart(chart_sm_01_chartLineLG, {
				type: 'glowLineLight',
				data: {
					labels: ['M', 'T', 'W', 'T', 'F', 'S', 'S', 'M', 'T', 'W'],
					datasets: [{
						borderColor: chart_sm_01_gradientFill,
						borderWidth: "2",
						data: [6,22,-5,21,21.5,29,23,25,16,6],
						label: 'Dataset',
						fill: false,
						radius: 0
					}]
				},
				options: {
					spanGaps: false,
					maintainAspectRatio: false,
					elements: {
						line: {
							tension: 0
						}
					},
					animation: {
						duration: 0
					},
					legend: {
						display: false
					},
					plugins: {
						filler: {
							propagate: false
						}
					},
					tooltips: {
						callbacks: {
							label: function(tooltipItem) {
								return tooltipItem.yLabel;
							}
						}
					},
					scales: {
						xAxes: [{
							display: false,
							ticks: {
								display: false
							},
							gridLines: {
								display: false
							}
						}],
						yAxes: [{
							display: false,
							ticks: {
								display: false,
								min: -10,
								max: 30
							},
							gridLines: {
								display: false
							}
						}]
					},
					title: {
						display: false
					}
				}
			});
		}

		/* chart-sm-02 (line-chart) */
		if($("#chart-sm-02").length) {
			let chart_sm_02 = document.querySelector("#chart-sm-02"), // chart ID
				chart_sm_02_chartLineLG = chart_sm_02.getContext("2d"),
				chart_sm_02_gradientFill = chart_sm_02_chartLineLG.createLinearGradient(0, 0, 0, 50);
				chart_sm_02_gradientFill.addColorStop(0, "rgba(255, 255, 255, 1)");
				chart_sm_02_gradientFill.addColorStop(.5, "rgba(198, 210, 253, 1)");
				chart_sm_02_gradientFill.addColorStop(1, "rgba(162, 255, 194, 1)");
			new Chart(chart_sm_02_chartLineLG, {
				type: 'glowLineLight',
				data: {
				labels: ['M', 'T', 'W', 'T', 'F', 'S', 'S', 'M', 'T', 'W'],
				datasets: [{
					borderColor: chart_sm_02_gradientFill,
					borderWidth: "2",
					data: [30,27,24,29,22,24,28,23,27,30],
					label: 'Dataset',
					fill: false,
					radius: 0
				}]
				},
				options: {
				spanGaps: false,
				maintainAspectRatio: false,
				elements: {
					line: {
					tension: 0.000001
					}
				},
				animation: {
					duration: 0
				},
				legend: {
					display: false
				},
				tooltips: {
					callbacks: {
					label: function(tooltipItem) {
						return tooltipItem.yLabel;
					}
					}
				},
				scales: {
					xAxes: [{
					display: false,
					ticks: {
						display: false
					},
					gridLines: {
						display:false
					}
					}],
					yAxes: [{
					display: false,
					ticks: {
						display: false
					},
					gridLines: {
						display:false
					}   
					}]
				},
				title: {
					display: true
				}
				}
			});
		}

		/* chart-sm-03 (line-chart) */
		if($("#chart-sm-03").length) {
			let chart_sm_03 = document.querySelector("#chart-sm-03"), // chart ID
				chart_sm_03_chartLineLG = chart_sm_03.getContext("2d"),
				chart_sm_03_gradientFill = chart_sm_03_chartLineLG.createLinearGradient(0, 0, 0, 50);
				chart_sm_03_gradientFill.addColorStop(0, "rgba(255, 255, 255, 1)");
				chart_sm_03_gradientFill.addColorStop(.5, "rgba(198, 210, 253, 1)");
				chart_sm_03_gradientFill.addColorStop(1, "rgba(162, 255, 194, 1)");
			new Chart(chart_sm_03_chartLineLG, {
				type: 'glowLineLight',
				data: {
				labels: ['M', 'T', 'W', 'T', 'F', 'S', 'S', 'M', 'T', 'W'],
				datasets: [{
					borderColor: chart_sm_03_gradientFill,
					borderWidth: "2",
					data: [35,25,22,27,29,21,25,25,21,35],
					label: 'Dataset',
					fill: false,
					radius: 0
				}]
				},
				options: {
				spanGaps: false,
				maintainAspectRatio: false,
				elements: {
					line: {
					tension: 0.000001
					}
				},
				animation: {
					duration: 0
				},
				legend: {
					display: false
				},
				tooltips: {
					callbacks: {
					label: function(tooltipItem) {
						return tooltipItem.yLabel;
					}
					}
				},
				scales: {
					xAxes: [{
					display: false,
					ticks: {
						display: false
					},
					gridLines: {
						display:false
					}
					}],
					yAxes: [{
					display: false,
					ticks: {
						display: false
					},
					gridLines: {
						display:false
					}   
					}]
				},
				title: {
					display: true
				}
				}
			});
		}

		/* chart-sm-04 (line-chart) */
		if($("#chart-sm-04").length) {
			let chart_sm_04 = document.querySelector("#chart-sm-04"), // chart ID
				chart_sm_04_chartLineLG = chart_sm_04.getContext("2d"),
				chart_sm_04_gradientFill = chart_sm_04_chartLineLG.createLinearGradient(0, 0, 0, 50);
				chart_sm_04_gradientFill.addColorStop(0, "rgba(255, 255, 255, 1)");
				chart_sm_04_gradientFill.addColorStop(.5, "rgba(198, 210, 253, 1)");
				chart_sm_04_gradientFill.addColorStop(1, "rgba(162, 255, 194, 1)");
			new Chart(chart_sm_04_chartLineLG, {
				type: 'glowLineLight',
				data: {
				labels: ['M', 'T', 'W', 'T', 'F', 'S', 'S', 'M', 'T', 'W'],
				datasets: [{
					borderColor: chart_sm_04_gradientFill,
					borderWidth: "2",
					data: [40,31,34,36,39,32,31,36,32,40],
					label: 'Dataset',
					fill: false,
					radius: 0
				}]
				},
				options: {
				spanGaps: false,
				maintainAspectRatio: false,
				elements: {
					line: {
					tension: 0.000001
					}
				},
				animation: {
					duration: 0
				},
				legend: {
					display: false
				},
				tooltips: {
					callbacks: {
					label: function(tooltipItem) {
						return tooltipItem.yLabel;
					}
					}
				},
				scales: {
					xAxes: [{
					display: false,
					ticks: {
						display: false
					},
					gridLines: {
						display:false
					}
					}],
					yAxes: [{
					display: false,
					ticks: {
						display: false
					},
					gridLines: {
						display:false
					}   
					}]
				},
				title: {
					display: true
				}
				}
			});
		}

		/* chart-sm-05 (line-chart) */
		if($("#chart-sm-05").length) {
			let chart_sm_01 = document.querySelector("#chart-sm-05"), // chart ID
				chart_sm_01_chartLineLG = chart_sm_01.getContext("2d"),
				chart_sm_01_gradientFill = chart_sm_01_chartLineLG.createLinearGradient(0, 0, 0, 50);
				chart_sm_01_gradientFill.addColorStop(0, "rgba(255, 255, 255, 1)");
				chart_sm_01_gradientFill.addColorStop(.5, "rgba(198, 210, 253, 1)");
				chart_sm_01_gradientFill.addColorStop(1, "rgba(162, 255, 194, 1)");
			new Chart(chart_sm_01_chartLineLG, {
				type: 'glowLineLight',
				data: {
					labels: ['M', 'T', 'W', 'T', 'F', 'S', 'S', 'M', 'T', 'W'],
					datasets: [{
						borderColor: chart_sm_01_gradientFill,
						borderWidth: "2",
						data: [-6,12,-3,28,11.5,24,29,25,19,21],
						label: 'Dataset',
						fill: false,
						radius: 0
					}]
				},
				options: {
					spanGaps: false,
					maintainAspectRatio: false,
					elements: {
						line: {
							tension: 0
						}
					},
					animation: {
						duration: 0
					},
					legend: {
						display: false
					},
					plugins: {
						filler: {
							propagate: false
						}
					},
					tooltips: {
						callbacks: {
							label: function(tooltipItem) {
								return tooltipItem.yLabel;
							}
						}
					},
					scales: {
						xAxes: [{
							display: false,
							ticks: {
								display: false
							},
							gridLines: {
								display: false
							}
						}],
						yAxes: [{
							display: false,
							ticks: {
								display: false,
								min: -10,
								max: 30
							},
							gridLines: {
								display: false
							}
						}]
					},
					title: {
						display: false
					}
				}
			});
		}

		/* chart-sm-06 (line-chart) */
		if($("#chart-sm-06").length) {
			let chart_sm_02 = document.querySelector("#chart-sm-06"), // chart ID
				chart_sm_02_chartLineLG = chart_sm_02.getContext("2d"),
				chart_sm_02_gradientFill = chart_sm_02_chartLineLG.createLinearGradient(0, 0, 0, 50);
				chart_sm_02_gradientFill.addColorStop(0, "rgba(255, 255, 255, 1)");
				chart_sm_02_gradientFill.addColorStop(.5, "rgba(198, 210, 253, 1)");
				chart_sm_02_gradientFill.addColorStop(1, "rgba(162, 255, 194, 1)");
			new Chart(chart_sm_02_chartLineLG, {
				type: 'glowLineLight',
				data: {
				labels: ['M', 'T', 'W', 'T', 'F', 'S', 'S', 'M', 'T', 'W'],
				datasets: [{
					borderColor: chart_sm_02_gradientFill,
					borderWidth: "2",
					data: [25,17,24,27,25,35,18,25,22,18],
					label: 'Dataset',
					fill: false,
					radius: 0
				}]
				},
				options: {
				spanGaps: false,
				maintainAspectRatio: false,
				elements: {
					line: {
					tension: 0.000001
					}
				},
				animation: {
					duration: 0
				},
				legend: {
					display: false
				},
				tooltips: {
					callbacks: {
					label: function(tooltipItem) {
						return tooltipItem.yLabel;
					}
					}
				},
				scales: {
					xAxes: [{
					display: false,
					ticks: {
						display: false
					},
					gridLines: {
						display:false
					}
					}],
					yAxes: [{
					display: false,
					ticks: {
						display: false
					},
					gridLines: {
						display:false
					}   
					}]
				},
				title: {
					display: true
				}
				}
			});
		}

		/* chart-sm-07 (line-chart) */
		if($("#chart-sm-07").length) {
			let chart_sm_03 = document.querySelector("#chart-sm-07"), // chart ID
				chart_sm_03_chartLineLG = chart_sm_03.getContext("2d"),
				chart_sm_03_gradientFill = chart_sm_03_chartLineLG.createLinearGradient(0, 0, 0, 50);
				chart_sm_03_gradientFill.addColorStop(0, "rgba(255, 255, 255, 1)");
				chart_sm_03_gradientFill.addColorStop(.5, "rgba(198, 210, 253, 1)");
				chart_sm_03_gradientFill.addColorStop(1, "rgba(162, 255, 194, 1)");
			new Chart(chart_sm_03_chartLineLG, {
				type: 'glowLineLight',
				data: {
				labels: ['M', 'T', 'W', 'T', 'F', 'S', 'S', 'M', 'T', 'W'],
				datasets: [{
					borderColor: chart_sm_03_gradientFill,
					borderWidth: "2",
					data: [5,28,14,19,34,26,21,15,26,30],
					label: 'Dataset',
					fill: false,
					radius: 0
				}]
				},
				options: {
				spanGaps: false,
				maintainAspectRatio: false,
				elements: {
					line: {
					tension: 0.000001
					}
				},
				animation: {
					duration: 0
				},
				legend: {
					display: false
				},
				tooltips: {
					callbacks: {
					label: function(tooltipItem) {
						return tooltipItem.yLabel;
					}
					}
				},
				scales: {
					xAxes: [{
					display: false,
					ticks: {
						display: false
					},
					gridLines: {
						display:false
					}
					}],
					yAxes: [{
					display: false,
					ticks: {
						display: false
					},
					gridLines: {
						display:false
					}   
					}]
				},
				title: {
					display: true
				}
				}
			});
		}

		/* chart-sm-08 (line-chart) */
		if($("#chart-sm-08").length) {
			let chart_sm_04 = document.querySelector("#chart-sm-08"), // chart ID
				chart_sm_04_chartLineLG = chart_sm_04.getContext("2d"),
				chart_sm_04_gradientFill = chart_sm_04_chartLineLG.createLinearGradient(0, 0, 0, 50);
				chart_sm_04_gradientFill.addColorStop(0, "rgba(255, 255, 255, 1)");
				chart_sm_04_gradientFill.addColorStop(.5, "rgba(198, 210, 253, 1)");
				chart_sm_04_gradientFill.addColorStop(1, "rgba(162, 255, 194, 1)");
			new Chart(chart_sm_04_chartLineLG, {
				type: 'glowLineLight',
				data: {
				labels: ['M', 'T', 'W', 'T', 'F', 'S', 'S', 'M', 'T', 'W'],
				datasets: [{
					borderColor: chart_sm_04_gradientFill,
					borderWidth: "2",
					data: [10,25,14,26,19,27,28,36,12,46],
					label: 'Dataset',
					fill: false,
					radius: 0
				}]
				},
				options: {
				spanGaps: false,
				maintainAspectRatio: false,
				elements: {
					line: {
					tension: 0.000001
					}
				},
				animation: {
					duration: 0
				},
				legend: {
					display: false
				},
				tooltips: {
					callbacks: {
					label: function(tooltipItem) {
						return tooltipItem.yLabel;
					}
					}
				},
				scales: {
					xAxes: [{
					display: false,
					ticks: {
						display: false
					},
					gridLines: {
						display:false
					}
					}],
					yAxes: [{
					display: false,
					ticks: {
						display: false
					},
					gridLines: {
						display:false
					}   
					}]
				},
				title: {
					display: true
				}
				}
			});
		}

		/* chart-sm-09 (line-chart) */
		if($("#chart-sm-09").length) {
			let chart_sm_01 = document.querySelector("#chart-sm-09"), // chart ID
				chart_sm_01_chartLineLG = chart_sm_01.getContext("2d"),
				chart_sm_01_gradientFill = chart_sm_01_chartLineLG.createLinearGradient(0, 0, 0, 50);
				chart_sm_01_gradientFill.addColorStop(0, "rgba(255, 255, 255, 1)");
				chart_sm_01_gradientFill.addColorStop(.5, "rgba(198, 210, 253, 1)");
				chart_sm_01_gradientFill.addColorStop(1, "rgba(162, 255, 194, 1)");
			new Chart(chart_sm_01_chartLineLG, {
				type: 'glowLineLight',
				data: {
					labels: ['M', 'T', 'W', 'T', 'F', 'S', 'S', 'M', 'T', 'W'],
					datasets: [{
						borderColor: chart_sm_01_gradientFill,
						borderWidth: "2",
						data: [16,18,-2,24,11.5,22,28,18,12,4],
						label: 'Dataset',
						fill: false,
						radius: 0
					}]
				},
				options: {
					spanGaps: false,
					maintainAspectRatio: false,
					elements: {
						line: {
							tension: 0
						}
					},
					animation: {
						duration: 0
					},
					legend: {
						display: false
					},
					plugins: {
						filler: {
							propagate: false
						}
					},
					tooltips: {
						callbacks: {
							label: function(tooltipItem) {
								return tooltipItem.yLabel;
							}
						}
					},
					scales: {
						xAxes: [{
							display: false,
							ticks: {
								display: false
							},
							gridLines: {
								display: false
							}
						}],
						yAxes: [{
							display: false,
							ticks: {
								display: false,
								min: -10,
								max: 30
							},
							gridLines: {
								display: false
							}
						}]
					},
					title: {
						display: false
					}
				}
			});
		}

		/* chart-sm-10 (line-chart) */
		if($("#chart-sm-10").length) {
			let chart_sm_02 = document.querySelector("#chart-sm-10"), // chart ID
				chart_sm_02_chartLineLG = chart_sm_02.getContext("2d"),
				chart_sm_02_gradientFill = chart_sm_02_chartLineLG.createLinearGradient(0, 0, 0, 50);
				chart_sm_02_gradientFill.addColorStop(0, "rgba(255, 255, 255, 1)");
				chart_sm_02_gradientFill.addColorStop(.5, "rgba(198, 210, 253, 1)");
				chart_sm_02_gradientFill.addColorStop(1, "rgba(162, 255, 194, 1)");
			new Chart(chart_sm_02_chartLineLG, {
				type: 'glowLineLight',
				data: {
				labels: ['M', 'T', 'W', 'T', 'F', 'S', 'S', 'M', 'T', 'W'],
				datasets: [{
					borderColor: chart_sm_02_gradientFill,
					borderWidth: "2",
					data: [20,37,26,31,22,22,28,28,27,35],
					label: 'Dataset',
					fill: false,
					radius: 0
				}]
				},
				options: {
				spanGaps: false,
				maintainAspectRatio: false,
				elements: {
					line: {
					tension: 0.000001
					}
				},
				animation: {
					duration: 0
				},
				legend: {
					display: false
				},
				tooltips: {
					callbacks: {
					label: function(tooltipItem) {
						return tooltipItem.yLabel;
					}
					}
				},
				scales: {
					xAxes: [{
					display: false,
					ticks: {
						display: false
					},
					gridLines: {
						display:false
					}
					}],
					yAxes: [{
					display: false,
					ticks: {
						display: false
					},
					gridLines: {
						display:false
					}   
					}]
				},
				title: {
					display: true
				}
				}
			});
		}

		/* chart-sm-11 (line-chart) */
		if($("#chart-sm-11").length) {
			let chart_sm_03 = document.querySelector("#chart-sm-11"), // chart ID
				chart_sm_03_chartLineLG = chart_sm_03.getContext("2d"),
				chart_sm_03_gradientFill = chart_sm_03_chartLineLG.createLinearGradient(0, 0, 0, 50);
				chart_sm_03_gradientFill.addColorStop(0, "rgba(255, 255, 255, 1)");
				chart_sm_03_gradientFill.addColorStop(.5, "rgba(198, 210, 253, 1)");
				chart_sm_03_gradientFill.addColorStop(1, "rgba(162, 255, 194, 1)");
			new Chart(chart_sm_03_chartLineLG, {
				type: 'glowLineLight',
				data: {
				labels: ['M', 'T', 'W', 'T', 'F', 'S', 'S', 'M', 'T', 'W'],
				datasets: [{
					borderColor: chart_sm_03_gradientFill,
					borderWidth: "2",
					data: [25,33,28,31,29,26,21,32,24,35],
					label: 'Dataset',
					fill: false,
					radius: 0
				}]
				},
				options: {
				spanGaps: false,
				maintainAspectRatio: false,
				elements: {
					line: {
					tension: 0.000001
					}
				},
				animation: {
					duration: 0
				},
				legend: {
					display: false
				},
				tooltips: {
					callbacks: {
					label: function(tooltipItem) {
						return tooltipItem.yLabel;
					}
					}
				},
				scales: {
					xAxes: [{
					display: false,
					ticks: {
						display: false
					},
					gridLines: {
						display:false
					}
					}],
					yAxes: [{
					display: false,
					ticks: {
						display: false
					},
					gridLines: {
						display:false
					}   
					}]
				},
				title: {
					display: true
				}
				}
			});
		}

		/* chart-sm-12 (line-chart) */
		if($("#chart-sm-12").length) {
			let chart_sm_04 = document.querySelector("#chart-sm-12"), // chart ID
				chart_sm_04_chartLineLG = chart_sm_04.getContext("2d"),
				chart_sm_04_gradientFill = chart_sm_04_chartLineLG.createLinearGradient(0, 0, 0, 50);
				chart_sm_04_gradientFill.addColorStop(0, "rgba(255, 255, 255, 1)");
				chart_sm_04_gradientFill.addColorStop(.5, "rgba(198, 210, 253, 1)");
				chart_sm_04_gradientFill.addColorStop(1, "rgba(162, 255, 194, 1)");
			new Chart(chart_sm_04_chartLineLG, {
				type: 'glowLineLight',
				data: {
				labels: ['M', 'T', 'W', 'T', 'F', 'S', 'S', 'M', 'T', 'W'],
				datasets: [{
					borderColor: chart_sm_04_gradientFill,
					borderWidth: "2",
					data: [25,33,31,32,29,31,33,36,36,40],
					label: 'Dataset',
					fill: false,
					radius: 0
				}]
				},
				options: {
				spanGaps: false,
				maintainAspectRatio: false,
				elements: {
					line: {
					tension: 0.000001
					}
				},
				animation: {
					duration: 0
				},
				legend: {
					display: false
				},
				tooltips: {
					callbacks: {
					label: function(tooltipItem) {
						return tooltipItem.yLabel;
					}
					}
				},
				scales: {
					xAxes: [{
					display: false,
					ticks: {
						display: false
					},
					gridLines: {
						display:false
					}
					}],
					yAxes: [{
					display: false,
					ticks: {
						display: false
					},
					gridLines: {
						display:false
					}   
					}]
				},
				title: {
					display: true
				}
				}
			});
		}

		/* [ Bar-chart-sm ] */
		var barChartSm_Options = {
			spanGaps: false,
			maintainAspectRatio: false,
			elements: {
				line: {
					tension: 0.000001
				}
			},
			animation: {
				duration: 0
			},
			legend: {
				display: false
			},
			tooltips: {
				display: false
			},
			scales: {
				xAxes: [{
					display: false,
					categoryPercentage: .1,
					barPercentage: 1,
					ticks: {
						display: false
					},
					gridLines: {
						display: false
					}
				}],
				yAxes: [{
					display: false,
					ticks: {
						display: false
					},
					gridLines: {
						display: false
					}
				}]
			},
			title: {
				display: false
			},
			plugins: {
				labels: {
					fontSize: 0
				}
			}
		},
		barChartSm_Labels = ['M', 'T', 'W', 'T', 'F', 'S', 'Q', 'M', 'T', 'W', 'M', 'T', 'F', 'S', 'X', 'F', 'S', 'Q', 'T', 'F', 'S', 'Q', 'S', 'Q', 'M', 'T'],
		barChartSm_Color = '#ffffff',
		barChartSm_Border = '0';

		/* bar-chart-sm-01 (bar-chart) */
		if($("#bar-chart-sm-01").length) {
			let bar_chart_sm_01 = document.querySelector("#bar-chart-sm-01").getContext("2d");
			new Chart(bar_chart_sm_01, {
				type: 'bar',
				data: {
					labels: barChartSm_Labels,
					datasets: [{
						borderColor: barChartSm_Color,
						borderWidth: barChartSm_Border,
						data: [23,25,27,28,29,22,21,26,22,20,29,24,22,25,24,22,25,24,22,21,26,22,29,24,22,25]
					}]
				},
				options: barChartSm_Options
			});
		}

		/* bar-chart-sm-02 (bar-chart) */
		if($("#bar-chart-sm-02").length) {
			let bar_chart_sm_02 = document.querySelector("#bar-chart-sm-02").getContext("2d");
			new Chart(bar_chart_sm_02, {
				type: 'bar',
				data: {
					labels: barChartSm_Labels,
					datasets: [{
						borderColor: barChartSm_Color,
						borderWidth: barChartSm_Border,
						data: [23,25,27,28,29,22,21,26,22,20,29,24,22,25,24,22,25,24,22,21,26,22,29,24,22,25]
					}]
				},
				options: barChartSm_Options
			});
		}

		/* bar-chart-sm-03 (bar-chart) */
		if($("#bar-chart-sm-03").length) {
			let bar_chart_sm_03 = document.querySelector("#bar-chart-sm-03").getContext("2d");
			new Chart(bar_chart_sm_03, {
				type: 'bar',
				data: {
					labels: barChartSm_Labels,
					datasets: [{
						borderColor: barChartSm_Color,
						borderWidth: barChartSm_Border,
						data: [23,25,27,28,29,22,21,26,22,20,29,24,22,25,24,22,25,24,22,21,26,22,29,24,22,25]
					}]
				},
				options: barChartSm_Options
			});
		}

		/* bar-chart-sm-04 (bar-chart) */
		if($("#bar-chart-sm-04").length) {
			let bar_chart_sm_04 = document.querySelector("#bar-chart-sm-04").getContext("2d");
			new Chart(bar_chart_sm_04, {
				type: 'bar',
				data: {
					labels: barChartSm_Labels,
					datasets: [{
						borderColor: barChartSm_Color,
						borderWidth: barChartSm_Border,
						data: [23,25,27,28,29,22,21,26,22,20,29,24,22,25,24,22,25,24,22,21,26,22,29,24,22,25]
					}]
				},
				options: barChartSm_Options
			});
		}

		/* area-chart-sm */
		if($("#area-chart-sm-01").length) {
			new ApexCharts(
				document.querySelector("#area-chart-sm-01"),
				{
					chart: {
						height: 80,
						type: 'area',
						zoom: {
							enabled: false
						},
						toolbar: {
							show: false
						}
					},
					dataLabels: {
						enabled: false
					},
					stroke: {
						curve: "smooth",
						colors: ["#846cc1"],
						width: 1
					},
					series: [{
						name: "",
						data: [0, 2, 1, 3]
					}],
					title: {
						show: false
					},
					fill: {
						type: 'solid',
						opacity: 0.3,
						colors: ["#5627d0"],
					},
					tooltip: {
						enabled: true,
						theme: false,
						style: {
							fontSize: 8,
							fontFamily: 0
						},
						x: {
							show: false
						},
					},
					xaxis: {
						show: false,
						categories: ["Jan", "Feb", "Mar", "Apr"],
						labels: {
							show: false,
							offsetX: 0,
            				offsetY: 0,
						},
						tooltip: {
							enabled: false,
							offsetY: 0,
						},
						axisBorder: {
							show: false,
						},
						axisTicks: {
							show: false
						},
						crosshairs: {
							show: false
						},
						title: {
							offsetX: 0,
							offsetY: 0,
							style: {
								fontSize: 0,
							}
						}
						
					},
					yaxis: {
						show: false,
						showAlways: false,
						tickAmount: 3,
						labels: {
							show: false
						},
						crosshairs: {
							show: false
						}
					},
					legend: {
						show: false,
						width: 0,
						height: 0,
					},
					markers: {
						size: 0,
						strokeWidth: 0,
						hover: {
							size: 3,
						}
					},
					grid: {
						yaxis: {
							lines: {
							  show: false,
							  offsetX: 0,
							  offsetY: 0
							}
						},
						padding: {
							top: 0,
							right: 0,
							bottom: 0,
							left: 0
						},
					}
				
				}
			).render();
		}

		if($("#area-chart-sm-02").length) {
			new ApexCharts(
				document.querySelector("#area-chart-sm-02"),
				{
					chart: {
						height: 80,
						type: 'area',
						zoom: {
							enabled: false
						},
						toolbar: {
							show: false
						}
					},
					dataLabels: {
						enabled: false
					},
					stroke: {
						curve: "smooth",
						colors: ["#846cc1"],
						width: 1
					},
					series: [{
						name: "",
						data: [3, 1, 2, 3]
					}],
					title: {
						show: false
					},
					fill: {
						type: 'solid',
						opacity: 0.3,
						colors: ["#5627d0"],
					},
					tooltip: {
						enabled: true,
						theme: false,
						style: {
							fontSize: 8,
							fontFamily: 0
						},
						x: {
							show: false
						},
					},
					xaxis: {
						show: false,
						categories: ["Jan", "Feb", "Mar", "Apr"],
						labels: {
							show: false,
							offsetX: 0,
            				offsetY: 0,
						},
						tooltip: {
							enabled: false,
							offsetY: 0,
						},
						axisBorder: {
							show: false,
						},
						axisTicks: {
							show: false
						},
						crosshairs: {
							show: false
						},
						title: {
							offsetX: 0,
							offsetY: 0,
							style: {
								fontSize: 0,
							}
						}
						
					},
					yaxis: {
						show: false,
						showAlways: false,
						tickAmount: 3,
						labels: {
							show: false
						},
						crosshairs: {
							show: false
						}
					},
					legend: {
						show: false,
						width: 0,
						height: 0,
					},
					markers: {
						size: 0,
						strokeWidth: 0,
						hover: {
							size: 3,
						}
					},
					grid: {
						yaxis: {
							lines: {
							  show: false,
							  offsetX: 0,
							  offsetY: 0
							}
						},
						padding: {
							top: 0,
							right: 0,
							bottom: 0,
							left: 0
						},
					}
				
				}
			).render();
		}

		if($("#area-chart-sm-03").length) {
			new ApexCharts(
				document.querySelector("#area-chart-sm-03"),
				{
					chart: {
						height: 80,
						type: 'area',
						zoom: {
							enabled: false
						},
						toolbar: {
							show: false
						}
					},
					dataLabels: {
						enabled: false
					},
					stroke: {
						curve: "smooth",
						colors: ["#846cc1"],
						width: 1
					},
					series: [{
						name: "",
						data: [2, 1, 3, 3]
					}],
					title: {
						show: false
					},
					fill: {
						type: 'solid',
						opacity: 0.3,
						colors: ["#5627d0"],
					},
					tooltip: {
						enabled: true,
						theme: false,
						style: {
							fontSize: 8,
							fontFamily: 0
						},
						x: {
							show: false
						},
					},
					xaxis: {
						show: false,
						categories: ["Jan", "Feb", "Mar", "Apr"],
						labels: {
							show: false,
							offsetX: 0,
            				offsetY: 0,
						},
						tooltip: {
							enabled: false,
							offsetY: 0,
						},
						axisBorder: {
							show: false,
						},
						axisTicks: {
							show: false
						},
						crosshairs: {
							show: false
						},
						title: {
							offsetX: 0,
							offsetY: 0,
							style: {
								fontSize: 0,
							}
						}
						
					},
					yaxis: {
						show: false,
						showAlways: false,
						tickAmount: 3,
						labels: {
							show: false
						},
						crosshairs: {
							show: false
						}
					},
					legend: {
						show: false,
						width: 0,
						height: 0,
					},
					markers: {
						size: 0,
						strokeWidth: 0,
						hover: {
							size: 3,
						}
					},
					grid: {
						yaxis: {
							lines: {
							  show: false,
							  offsetX: 0,
							  offsetY: 0
							}
						},
						padding: {
							top: 0,
							right: 0,
							bottom: 0,
							left: 0
						},
					}
				
				}
			).render();
		}

		if($("#area-chart-sm-04").length) {
			new ApexCharts(
				document.querySelector("#area-chart-sm-04"),
				{
					chart: {
						height: 80,
						type: 'area',
						zoom: {
							enabled: false
						},
						toolbar: {
							show: false
						}
					},
					dataLabels: {
						enabled: false
					},
					stroke: {
						curve: "smooth",
						colors: ["#846cc1"],
						width: 1
					},
					series: [{
						name: "",
						data: [3, 1, 3, 2]
					}],
					title: {
						show: false
					},
					fill: {
						type: 'solid',
						opacity: 0.3,
						colors: ["#5627d0"],
					},
					tooltip: {
						enabled: true,
						theme: false,
						style: {
							fontSize: 8,
							fontFamily: 0
						},
						x: {
							show: false
						},
					},
					xaxis: {
						show: false,
						categories: ["Jan", "Feb", "Mar", "Apr"],
						labels: {
							show: false,
							offsetX: 0,
            				offsetY: 0,
						},
						tooltip: {
							enabled: false,
							offsetY: 0,
						},
						axisBorder: {
							show: false,
						},
						axisTicks: {
							show: false
						},
						crosshairs: {
							show: false
						},
						title: {
							offsetX: 0,
							offsetY: 0,
							style: {
								fontSize: 0,
							}
						}
						
					},
					yaxis: {
						show: false,
						showAlways: false,
						tickAmount: 3,
						labels: {
							show: false
						},
						crosshairs: {
							show: false
						}
					},
					legend: {
						show: false,
						width: 0,
						height: 0,
					},
					markers: {
						size: 0,
						strokeWidth: 0,
						hover: {
							size: 3,
						}
					},
					grid: {
						yaxis: {
							lines: {
							  show: false,
							  offsetX: 0,
							  offsetY: 0
							}
						},
						padding: {
							top: 0,
							right: 0,
							bottom: 0,
							left: 0
						},
					}
				
				}
			).render();
		}

		if($("#area-chart-sm-05").length) {
			new ApexCharts(
				document.querySelector("#area-chart-sm-05"),
				{
					chart: {
						height: 80,
						type: 'area',
						zoom: {
							enabled: false
						},
						toolbar: {
							show: false
						}
					},
					dataLabels: {
						enabled: false
					},
					stroke: {
						curve: "smooth",
						colors: ["#846cc1"],
						width: 1
					},
					series: [{
						name: "",
						data: [3, 2, 1, 3]
					}],
					title: {
						show: false
					},
					fill: {
						type: 'solid',
						opacity: 0.3,
						colors: ["#5627d0"],
					},
					tooltip: {
						enabled: true,
						theme: false,
						style: {
							fontSize: 8,
							fontFamily: 0
						},
						x: {
							show: false
						},
					},
					xaxis: {
						show: false,
						categories: ["Jan", "Feb", "Mar", "Apr"],
						labels: {
							show: false,
							offsetX: 0,
            				offsetY: 0,
						},
						tooltip: {
							enabled: false,
							offsetY: 0,
						},
						axisBorder: {
							show: false,
						},
						axisTicks: {
							show: false
						},
						crosshairs: {
							show: false
						},
						title: {
							offsetX: 0,
							offsetY: 0,
							style: {
								fontSize: 0,
							}
						}
						
					},
					yaxis: {
						show: false,
						showAlways: false,
						tickAmount: 3,
						labels: {
							show: false
						},
						crosshairs: {
							show: false
						}
					},
					legend: {
						show: false,
						width: 0,
						height: 0,
					},
					markers: {
						size: 0,
						strokeWidth: 0,
						hover: {
							size: 3,
						}
					},
					grid: {
						yaxis: {
							lines: {
							  show: false,
							  offsetX: 0,
							  offsetY: 0
							}
						},
						padding: {
							top: 0,
							right: 0,
							bottom: 0,
							left: 0
						},
					}
				
				}
			).render();
		}

		if($("#area-chart-sm-06").length) {
			new ApexCharts(
				document.querySelector("#area-chart-sm-06"),
				{
					chart: {
						height: 80,
						type: 'area',
						zoom: {
							enabled: false
						},
						toolbar: {
							show: false
						}
					},
					dataLabels: {
						enabled: false
					},
					stroke: {
						curve: "smooth",
						colors: ["#846cc1"],
						width: 1
					},
					series: [{
						name: "",
						data: [2, 1, 2, 1]
					}],
					title: {
						show: false
					},
					fill: {
						type: 'solid',
						opacity: 0.3,
						colors: ["#5627d0"],
					},
					tooltip: {
						enabled: true,
						theme: false,
						style: {
							fontSize: 8,
							fontFamily: 0
						},
						x: {
							show: false
						},
					},
					xaxis: {
						show: false,
						categories: ["Jan", "Feb", "Mar", "Apr"],
						labels: {
							show: false,
							offsetX: 0,
            				offsetY: 0,
						},
						tooltip: {
							enabled: false,
							offsetY: 0,
						},
						axisBorder: {
							show: false,
						},
						axisTicks: {
							show: false
						},
						crosshairs: {
							show: false
						},
						title: {
							offsetX: 0,
							offsetY: 0,
							style: {
								fontSize: 0,
							}
						}
						
					},
					yaxis: {
						show: false,
						showAlways: false,
						tickAmount: 3,
						labels: {
							show: false
						},
						crosshairs: {
							show: false
						}
					},
					legend: {
						show: false,
						width: 0,
						height: 0,
					},
					markers: {
						size: 0,
						strokeWidth: 0,
						hover: {
							size: 3,
						}
					},
					grid: {
						yaxis: {
							lines: {
							  show: false,
							  offsetX: 0,
							  offsetY: 0
							}
						},
						padding: {
							top: 0,
							right: 0,
							bottom: 0,
							left: 0
						},
					}
				
				}
			).render();
		}

		/* Apexcharts */
		window.Apex = {
			chart: {
				toolbar: {
					show: false
				}
			},
			colors: ["#FCCF31", "#17ead9", "#f02fc2"],
			legend: {
				labels: {
					colors: '#fff'
				},
			},
			stroke: {
				width: 3
			},
			dataLabels: {
				enabled: false
			},
			grid: {
				borderColor: "rgba(42, 242, 112, 1)",
				xaxis: {
					lines: {
							show: false
					}
				},   
				yaxis: {
						lines: {
								show: false
						}
				}
			},
			xaxis: {
				axisTicks: {
					color: "#333"
				},
				axisBorder: {
					color: "#333"
				}
			},
			yaxis: {
				axisTicks: {
					show: true,
					color: "rgba(255, 255, 255, .5)",
					borderType: 'dotted',
				},
				axisBorder: {
					color: "rgba(255, 255, 255, .5)",
					borderType: 'dotted',
				}
			},
			tooltip: {
				theme: "dark",
				x: {
					formatter: function(val) {
						return moment(new Date(val)).format("HH:mm:ss");
					}
				}
			},
		};
		
		/* apexCharts */
		if($("#chart-radialBar_A").length) {
			new ApexCharts(
				document.querySelector("#chart-radialBar_A"),
				{
					chart: {
						height: 382,
						type: 'radialBar'
					},
					plotOptions: {
							radialBar: {
									offsetX: 0,
									offsetY: -10,
									track: {
										background: 'rgba(17, 26, 70, 1)',
										margin: 15,
										strokeWidth: '100%',
									},
									hollow: {
										margin: 5,
										size: '25%',
										image: 'assets/img/icons/radialIcon.png',
										imageWidth: 45,
										imageHeight: 45,
										imageClipped: false
									},
									dataLabels: {
										name: {
											show: false,
										},
										value: {
											fontSize: '.7rem',
											color: 'rgba(255,255,255, .8)',
											offsetY: 40,
										},
										total: {
											show: true,
											label: '',
											color: 'rgba(255,255,255, .98)',
											formatter: function (w) {
												return 249 + '%'
											}
										}
									}
							}
					},
					colors: [ '#ff39a6','#ffffff', '#146abf'],
					legend: {
						show: true,
						showForSingleSeries: false,
						showForNullSeries: true,
						showForZeroSeries: true,
						position: 'right',
						horizontalAlign: 'left', 
						floating: false,
						fontSize: '14px',
						fontFamily: 'Inter, sans-serif',
						width: 'undefined',
						height: undefined,
						formatter: undefined,
						offsetX: 0,
						offsetY: 100,
						labels: {
							colors: '#fff',
							useSeriesColors: false
						},
						markers: {
							width: 12,
							height: 12,
							strokeWidth: 0,
							strokeColor: '#fff',
							radius: 12,
							customHTML: undefined,
							onClick: undefined,
							offsetX: 0,
							offsetY: 0
						},
						itemMargin: {
							horizontal: 10,
							vertical: 20
						},
						onItemClick: {
							toggleDataSeries: true
						},
						onItemHover: {
							highlightDataSeries: true
						},
					},
					fill: {
						type: 'gradient',
						gradient: {
							shade: 'light',
							type: 'horizontal',
							shadeIntensity: 0.5,
							gradientToColors: [ '#fe44aa','#f8e4f1', '#1373d1'],
							inverseColors: false,
							opacityFrom: 1,
							opacityTo: 1,
							stops: [0, 100]
						}
					},
					series: [76,67,61],
					stroke: {
						lineCap: 'round'
					},
					labels: ['Vimeo', 'Messenger', 'Facebook'],
					responsive: [
						{
							breakpoint: 1300,
							options: {
								legend: {
									position: 'bottom',
									offsetY: 0,
									horizontalAlign: 'center',
								}
							}
						},
						{
							breakpoint: 450,
							options: {
								plotOptions: {
									radialBar: {
											offsetX: 0,
											offsetY: -10,
											hollow: {
												margin: 5,
												size: '25%',
												image: 'assets/img/icons/radialIcon.png',
												imageWidth: 30,
												imageHeight: 30,
												imageClipped: false
											},
											dataLabels: {
												value: {
													fontSize: '.7rem',
													color: 'rgba(255,255,255, .8)',
													offsetY: 30,
												}
											}
									}
								},
								legend: {
									fontSize: '10px',
									itemMargin: {
										horizontal: 5,
										vertical: 10
									},
								}
							}
						}
					]
				}
			).render();
		}

		/* apexCharts */
		if($("#chart-radialBar_B").length) {
			new ApexCharts(
				document.querySelector("#chart-radialBar_B"),
				{
					chart: {
						height: 340,
						type: 'radialBar'
					},
					plotOptions: {
						radialBar: {
							offsetX: 0,
							offsetY: -10,
							track: {
								background: 'rgba(17, 26, 70, 1)',
								margin: 20,
								strokeWidth: '100%',
							},
							hollow: {
								margin: 0,
								size: '25%',
								background: 'transparent'
							},
							dataLabels: {
								name: {
									show: false,
								},
								value: {
									fontSize: '.7rem',
									color: 'rgba(255,255,255, .8)',
									offsetY: 0,
								},
								total: {
									show: false
								}
							}
						}
					},
					colors: [ '#ff39a6','#ffffff', '#146abf'],
					legend: {
						show: false,
						showForSingleSeries: false,
						showForNullSeries: true,
						showForZeroSeries: true,
						position: 'left',
						horizontalAlign: 'left', 
						floating: false,
						fontSize: '14px',
						fontFamily: 'Inter, sans-serif',
						width: 'undefined',
						height: undefined,
						formatter: undefined,
						offsetX: 0,
						offsetY: 80,
						labels: {
							colors: '#fff',
							useSeriesColors: false
						},
						markers: {
							width: 12,
							height: 12,
							strokeWidth: 0,
							strokeColor: '#fff',
							radius: 12,
							customHTML: undefined,
							onClick: undefined,
							offsetX: 0,
							offsetY: 0
						},
						itemMargin: {
							horizontal: 5,
							vertical: 0
						},
						onItemClick: {
							toggleDataSeries: true
						},
						onItemHover: {
							highlightDataSeries: true
						},
					},
					fill: {
						type: 'gradient',
						gradient: {
							shade: 'light',
							type: 'horizontal',
							shadeIntensity: 0.5,
							gradientToColors: [ '#fe44aa','#f8e4f1', '#1373d1'],
							inverseColors: false,
							opacityFrom: 1,
							opacityTo: 1,
							stops: [0, 100]
						}
					},
					series: [76,67,61],
					stroke: {
						lineCap: 'round'
					},
					labels: ['Total', 'Messenger', 'Facebook'],
					responsive: [{
							breakpoint: 480,
							options: {
									legend: {
										show: false
									}
							}
					}]
				}
			).render();
		}

		/* apexCharts */
		if($("#chart-radar").length) {
			new ApexCharts(
				document.querySelector("#chart-radar"),
				{
					chart: {
						height: 420,
						type: 'radar',
						dropShadow: {
							enabled: true,
							blur: 12,
							left: 1,
							top: 1,
							opacity: .15
						}
					},
					plotOptions: {
						radar: {
						  polygons: {
							strokeColors: 'rgba(255,255,255, .1)',
							connectorColors: 'transparent',
							fill: {
								colors: ['transparent']
							}
						  }
						}
					  },
					series: [{
						name: 'Sales',
						data: [50, 100, 80, 50, 100, 50],
					}, {
						name: 'Views',
						data: [20, 30, 40, 80, 20, 80],
					}, {
						name: 'Users',
						data: [100, 60, 100, 35, 90, 20],
					}],
					stroke: {
						width: 0
					},
					colors: [ '#ff39a6','#ffffff', '#1370cd'],
					fill: {
						opacity: .75,
						type: 'gradient',
						gradient: {
							type: 'horizontal',
							shadeIntensity: 0.5,
							gradientToColors: ['#fe41a9','#faedf6','#6bacef'],
							inverseColors: false,
							opacityFrom: 1,
							opacityTo: 1,
							stops: [0, 100]
						}
					},
					markers: {
						size: 0
					},
					yaxis: {
						labels: {
							style: {
								color: 'transparent'
							}
						},
					},
					labels: ['USA', 'China', 'Singapore', 'France', 'Japan', 'Germany'],
					legend: {
						show: true,
						position: 'top',
						horizontalAlign: 'left',
						offsetX: -35,
						labels: {
							colors: '#fff',
							useSeriesColors: false
						},
						itemMargin: {
							horizontal: 0,
							vertical: 10
						},
						markers: {
							offsetX: 0,
        					offsetY: 0
						},
					},
					dataLabels: {
						enabled: true,
						enabledOnSeries: undefined,
						formatter: function (val, opts) {
							return val
						},
						textAnchor: 'middle',
						offsetX: 0,
						offsetY: 0,
						style: {
							fontSize: '11px',
							fontFamily: 'Inter, sans-serif',
							colors: ['rgba(255, 255, 255, 0.6)', 'rgba(255, 255, 255, 0.6)', 'rgba(255, 255, 255, 0.6)', 'rgba(255, 255, 255, 0.6)', 'rgba(255, 255, 255, 0.6)', 'rgba(255, 255, 255, 0.6)']
						},
						dropShadow: {
							enabled: false,
							top: 1,
							left: 1,
							blur: 1,
							opacity: 0.45
						}
					}
				}
			).render();
		}

		/* apexCharts */
		if($("#chart-rb").length) {
			new ApexCharts(
				document.querySelector("#chart-rb"),
				{
					chart: {
						height: 355,
						type: 'radialBar',
					},
					plotOptions: {
						radialBar: {
							startAngle: -135,
							endAngle: 135,
							hollow: {
								size: '60%',
								margin: 55,
								image: 'assets/img/icons/rb-icon.png',
								imageWidth: 52,
								imageHeight: 52,
								imageClipped: false
							},
							track: {
								show: true,
								startAngle: undefined,
								endAngle: undefined,
								background: 'rgba(5, 16, 58, 0.5)',
								strokeWidth: '100%',
								opacity: 1,
								margin: 5,
								dropShadow: {
									enabled: false,
									top: 0,
									left: 0,
									blur: 3,
									opacity: 0.5
								}
							},
							dataLabels: {
								showOn: 'always',
								name: {
									show: true,
									fontSize: '16px',
									color: '#6bacef',
									fontFamily: 'Inter, sans-serif',
									offsetY: 120
								},
								value: {
									show: true,
									offsetY: 76,
									color: 'rgba(255,255,255, .8)',
									fontSize: '22px',
									formatter: function (val) {
										return val + "%";
									}
								}
							}
						}
					},
					colors: ['#6bacef'],
					fill: {
						type: 'gradient',
						gradient: {
							shade: 'dark',
							shadeIntensity: 1,
							inverseColors: false,
							gradientToColors: ['#fe44aa'],
							opacityFrom: 1,
							opacityTo: 1,
							stops: [0, 40]
						},
					},
					stroke: {
						dashArray: 9
					},
					series: [97],
					labels: ['Median Ratio'],
				}
			).render();
		}

		/* Income-apexChart */
		if($("#achart-income").length) {
			new ApexCharts(
				document.querySelector("#achart-income"),
				{
					annotations: {
						points: [{
							x: new Date("18 Nov 2019").getTime(),
							y: 8665,
							marker: {
								size: 8,
								fillColor: '#FF39A6',
								strokeColor: '#ffffff',
								radius: 2,
								cssClass: 'apexcharts-custom-class'
							},
						  	label: {
								borderColor: 'transpert',
								offsetY: -5,
								style: {
									color: '#fff',
									background: '#FD369E',
									fontSize: '12px',
									cssClass: 'apexcharts-point-annotation-label',
									padding: {
										left: 8,
										right: 8,
										top: 8,
										bottom: 8
									}
								},
								textAnchor: 'middle',
								text: '8,665',
						  	}
						}]
					},
					chart: {
						height: 350,
						type: 'line',
						id: 'areachart-2'
					},
					  colors: ['#fff'],
					  fill: {
						type: 'gradient',
						gradient: {
						shade: 'dark',
						shadeIntensity: 1,
						type: 'horizontal',
						opacityFrom: 1,
						opacityTo: 1,
						colorStops: [
							[
								{
									offset: 0,
									color: '#F8E4F1',
									opacity: 0
								},
								{
									offset: 30,
									color: '#F8E4F1',
									opacity: 1
								},
								{
									offset: 70,
									color: '#F8E4F1',
									opacity: 1
								},
								{
									offset: 100,
									color: '#F8E4F1',
									opacity: 0
								}
							],	[
								{
									offset: 0,
									color: '#FF39A6',
									opacity: 0
								},
								{
									offset: 30,
									color: '#FF39A6',
									opacity: 1
								},
								{
									offset: 70,
									color: '#FF39A6',
									opacity: 1
								},
								{
									offset: 100,
									color: '#FF39A6',
									opacity: 0
								}
							], [
								{
									offset: 0,
									color: '#1373D1',
									opacity: 0
								},
								{
									offset: 30,
									color: '#1373D1',
									opacity: 1
								},
								{
									offset: 70,
									color: '#1373D1',
									opacity: 1
								},
								{
									offset: 100,
									color: '#1373D1',
									opacity: 0
								}
							]
						]
						},
					},
					dataLabels: {
						enabled: false
					},
					stroke: {
						width: 8,
            			curve: 'smooth'
					},
					grid: {
						padding: {
							right: 0,
							left: 20,
							bottom: -20	
						}
					},
					series: [
						{
							name: "Apps",
							data: [
								8122,
								8665,
								8240,
								9123
							]
						}, {
							name: "Servers",
							data: [
								8722,
								8565,
								8840,
								8523
							]
						}, {
							name: "Activity",
							data: [
								8922,
								9265,
								9040,
								9323
							]
						}
					],
					labels: [
						"17 Nov 2019",
						"18 Nov 2019",
						"19 Nov 2019",
						"20 Nov 2019"
					],
					colors: ['#F8E4F1', '#FF39A6', '#1373D1'],
					legend: {
						show: true,
						showForSingleSeries: false,
						showForNullSeries: true,
						showForZeroSeries: true,
						position: 'bottom',
						horizontalAlign: 'center', 
						floating: false,
						fontSize: '14px',
						fontFamily: 'Inter, sans-serif',
						width: 'undefined',
						height: undefined,
						formatter: undefined,
						offsetX: 0,
						offsetY: 0,
						labels: {
							colors: '#fff',
							useSeriesColors: false
						},
						markers: {
							width: 12,
							height: 12,
							strokeWidth: 0,
							strokeColor: '#fff',
							radius: 12,
							customHTML: undefined,
							onClick: undefined,
							offsetX: 0,
							offsetY: 0
						},
						itemMargin: {
							horizontal: 8,
							vertical: 30
						},
						onItemClick: {
							toggleDataSeries: true
						},
						onItemHover: {
							highlightDataSeries: true
						},
					},
					tooltip: {
						theme: false,
						x: {
							show: false
						}
					},			
					yaxis: {
						type: 'datetime',
						labels: {
							show: true,
							style: {
								color: '#fff',
								fontSize: '14px',
								fontFamily: 'Open Sans, sans-serif',
								cssClass: 'apexcharts-xaxis-label',
							},
							offsetX: -20,
							offsetY: 0,
						},
						axisBorder: {
							show: false
						},
						axisTicks: {
							show: false
						}
					},
					xaxis: {
						type: "datetime",
						labels: {
							show: true,
							style: {
								colors: 'transparent'
							},
							offsetX: 0,
							offsetY: 0,
						},
						axisBorder: {
							show: false
						},
						axisTicks: {
							show: false
						}
					},
					responsive: [{
						breakpoint: 450,
						options: {
							yaxis: {
								labels: {
									show: true,
									style: {
										color: '#fff',
										fontSize: '10px',
										fontFamily: 'Open Sans, sans-serif'
									},
									offsetX: -15,
									offsetY: 0,
								}
							},
							legend: {
								fontSize: '12px',
								itemMargin: {
									horizontal: 6,
									vertical: 10
								},
								markers: {
									width: 12,
									height: 12,
									strokeWidth: 0,
									radius: 12,
									customHTML: undefined,
									onClick: undefined,
									offsetX: 0,
									offsetY: 0
								},
							},
						}
					}],
				}
			).render();
		}

		/* pie-apexChart */
		if($("#achart-pie").length) {
			new ApexCharts(
				document.querySelector("#achart-pie"),
				{
					chart: {
						height: 380,
						type: 'donut',
					},
					plotOptions: {
						pie: {
						  size: 150,
						  customScale: 1,
						  offsetX: 0,
						  offsetY: 10,
						  expandOnClick: true,
						  dataLabels: {
							  offset: 0,
							  minAngleToShowLabel: 10
						  }, 
						  donut: {
							size: '65%',
							background: 'transparent',
							labels: {
							  show: false,
							  name: {
								show: true,
								fontSize: '22px',
								fontFamily: 'Helvetica, Arial, sans-serif',
								color: undefined,
								offsetY: -10
							  },
							  value: {
								show: true,
								fontSize: '16px',
								fontFamily: 'Helvetica, Arial, sans-serif',
								color: undefined,
								offsetY: 16,
								formatter: function (val) {
								  return val
								}
							  },
							  total: {
								show: false,
								label: 'Total',
								color: '#373d3f',
								formatter: function (w) {
								  return w.globals.seriesTotals.reduce((a, b) => {
									return a + b
								  }, 0)
								}
							  }
							}
						  },      
						}
					},
					dataLabels: {
						enabled: false
					},
					series: [44, 55, 41],
					colors: [ '#ff39a6','#ffffff', '#1370cd'],
					labels: ['USA', 'China', 'Singapore'],
					fill: {
						type: 'gradient',
					},
					tooltip: {
						y: {
						  formatter: function(value) {
							return value + "your text";
						  }
						},
						fillSeriesColor: false,
					},
					legend: {
						show: true,
						showForSingleSeries: false,
						showForNullSeries: true,
						showForZeroSeries: true,
						position: 'bottom',
						horizontalAlign: 'center', 
						floating: false,
						fontSize: '14px',
						fontFamily: 'Inter, sans-serif',
						width: 'undefined',
						height: undefined,
						formatter: undefined,
						offsetX: 0,
						offsetY: -20,
						labels: {
							colors: '#fff',
							useSeriesColors: false
						},
						itemMargin: {
							horizontal: 10,
							vertical: 10
						},
						formatter: function(val, opts) {
							return val + " - " + opts.w.globals.series[opts.seriesIndex]
						},
					},
					stroke: {
						show: true,
						curve: 'smooth',
						lineCap: 'butt',
						colors: undefined,
						width: 0,
						dashArray: 0,      
					},
					responsive: [{
						breakpoint: 450,
						options: {
							plotOptions: {
								pie: {
								  size: 100,
								  customScale: 1,
								  offsetX: 0,
								  offsetY: 10,
								  expandOnClick: true,
								  dataLabels: {
									  offset: 0,
									  minAngleToShowLabel: 10
								  }, 
								  donut: {
									size: '65%',
									background: 'transparent',
									labels: {
									  show: false,
									  name: {
										show: true,
										fontSize: '22px',
										fontFamily: 'Helvetica, Arial, sans-serif',
										color: undefined,
										offsetY: -10
									  },
									  value: {
										show: true,
										fontSize: '16px',
										fontFamily: 'Helvetica, Arial, sans-serif',
										color: undefined,
										offsetY: 16,
										formatter: function (val) {
										  return val
										}
									  },
									  total: {
										show: false,
										label: 'Total',
										color: '#373d3f',
										formatter: function (w) {
										  return w.globals.seriesTotals.reduce((a, b) => {
											return a + b
										  }, 0)
										}
									  }
									}
								  },      
								}
							},
							legend: {
								show: true,
								showForSingleSeries: false,
								showForNullSeries: true,
								showForZeroSeries: true,
								position: 'bottom',
								horizontalAlign: 'center', 
								floating: false,
								fontSize: '11px',
								fontFamily: 'Inter, sans-serif',
								width: 'undefined',
								height: undefined,
								formatter: undefined,
								offsetX: 0,
								offsetY: -20,
								labels: {
									colors: '#fff',
									useSeriesColors: false
								},
								itemMargin: {
									horizontal: 10,
									vertical: 10
								},
								formatter: function(val, opts) {
									return val + " - " + opts.w.globals.series[opts.seriesIndex]
								},
							},
						}
					}],
				}
			).render();
		}

		/* column-apexChart */
		if($("#achart-columnSt").length) {
			new ApexCharts(
				document.querySelector("#achart-columnSt"),
				{
					chart: {
						height: 350,
						type: 'bar',
						stacked: true,
						zoom: {
							enabled: true
						},
						toolbar: {
							show: false,
						},
					},
					responsive: [{
						breakpoint: 450,
						options: {
							xaxis: {
								type: 'datetime',
								labels: {
									show: true,
									style: {
										colors: '#fff',
										fontSize: '10px',
										fontFamily: 'Open Sans, sans-serif'
									},
									offsetX: 10,
									offsetY: 0,
								},
								axisBorder: {
									show: false
								},
								axisTicks: {
									show: false,
								},
							},
							yaxis: {
								type: 'datetime',
								labels: {
									show: true,
									style: {
										color: '#fff',
										fontSize: '10px',
										fontFamily: 'Open Sans, sans-serif'
									},
									offsetX: -15,
									offsetY: 0,
								},
								axisBorder: {
									show: false
								},
								axisTicks: {
									show: false
								}
							},
							legend: {
								position: 'top',
								fontSize: '12px',
								offsetY: -10,
								offsetX: -40,
								horizontalAlign: 'left',
								itemMargin: {
									horizontal: 2,
									vertical: 10
								},
								markers: {
									width: 12,
									height: 12,
									strokeWidth: 0,
									radius: 12,
									customHTML: undefined,
									onClick: undefined,
									offsetX: 0,
									offsetY: 0
								},
							},
						}
					}],
					plotOptions: {
						bar: {
							horizontal: false,
							columnWidth: '8%',
						},
					},
					series: [{
						name: 'In Stoke',
						data: [-44, -15, -41, -37, -22, -10, -24, -39, -46, -10, -40]
					},{
						name: 'Orders',
						data: [13, 23, 20, 8, 13, 27, 27, 27, 27, 27, 27, 27, 27]
					},{
						name: 'Sales',
						data: [11, 17, 15, 15, 21, 14, 27, 27, 27, 27, 27, 27, 27]
					}],
					xaxis: {
						type: 'datetime',
						labels: {
							show: true,
							style: {
								colors: '#fff',
								fontSize: '13px',
								fontFamily: 'Open Sans, sans-serif'
							},
							offsetX: 10,
							offsetY: 0,
						},
						axisBorder: {
							show: false
						},
						axisTicks: {
							show: false,
						},
						categories: ['01/01/2020 GMT', '01/02/2020 GMT', '01/03/2020 GMT', '01/04/2020 GMT', '01/05/2020 GMT', '01/06/2020 GMT', '01/07/2020 GMT', '01/08/2020 GMT', '01/9/2020 GMT', '01/10/2020 GMT'],
					},
					yaxis: {
						type: 'datetime',
						labels: {
							show: true,
							style: {
								color: '#fff',
								fontSize: '14px',
								fontFamily: 'Open Sans, sans-serif'
							},
							offsetX: -15,
							offsetY: 0,
						},
						axisBorder: {
							show: false
						},
						axisTicks: {
							show: false
						}
					},
					grid: {
						show: true,
						borderColor: 'rgba(42, 242, 112, 0.2)',
						strokeDashArray: 0,
						position: 'back',
						xaxis: {
							lines: {
								show: false
							}
						},   
						yaxis: {
							lines: {
								show: true
							}
						},
						row: {
							colors: undefined,
							opacity: 0.5
						},  
						column: {
							colors: undefined,
							opacity: 0.5
						},  
						padding: {
							top: 0,
							right: 0,
							bottom: 0,
							left: 0
						},  
					},
					colors: ['#FF39A6', '#F8E4F1', '#1373D1'],
					legend: {
						position: 'top',
						offsetY: -10,
						offsetX: -40,
						horizontalAlign: 'left',
						itemMargin: {
							horizontal: 10,
							vertical: 10
						},
						markers: {
							width: 12,
							height: 12,
							strokeWidth: 0,
							radius: 12,
							customHTML: undefined,
							onClick: undefined,
							offsetX: 0,
							offsetY: 0
						},
					},
					fill: {
						opacity: 1
					}
				}
			).render();
		}

	}

	/* rangeJS */
	if ($('#_rangeJS_min').length > 0) {
		/* range-slider */
		$('input[type="range"]:not(.range-label)').rangeslider({
			polyfill: false,
			// Default CSS classes
			rangeClass: 'rangeslider',
			disabledClass: 'rangeslider--disabled',
			horizontalClass: 'rangeslider--horizontal',
			verticalClass: 'rangeslider--vertical',
			fillClass: 'rangeslider__fill',
			handleClass: 'rangeslider__handle',
		
			onInit : function() {
				this.output = $( '<div class="range-output" />' ).insertAfter( this.$range ).html( this.$element.val() );
			},
			onSlide : function( position, value ) {
				this.output.html( value );
			}
		});

		$('input[type="range"].range-label').rangeslider({
				polyfill: false,
			
				// Default CSS classes
				rangeClass: 'rangeslider',
				disabledClass: 'rangeslider--disabled',
				horizontalClass: 'rangeslider--horizontal',
				fillClass: 'rangeslider__fill',
				handleClass: 'rangeslider__handle',
			
				// Callback function
				onInit: function() {
				var $rangeEl = this.$range;
				
				// get range index labels 
				var rangeLabels = this.$element.attr('data-labels');
				rangeLabels = rangeLabels.split(', ');
				
				// add labels
				$rangeEl.append('<div class="rangeslider__labels"></div>');
				$(rangeLabels).each(function(index, value) {
					$rangeEl.find('.rangeslider__labels').append('<span class="rangeslider__labels__label">' + value + '</span>');
				})
				},
			
				// Callback function
				onSlide: function(position, value) {
				var $handle = this.$range.find('.rangeslider__handle__value');
				$handle.text(this.value);
				},
			
				// Callback function
				onSlideEnd: function(position, value) {}
		});
	}

	/* Preloader */
	let preloader = document.getElementsByClassName('preloaderWrapper');
	if (preloader.length > 0) {
    	document.querySelector('.preloaderWrapper').classList.add('preloaderOut');
	}

	/* Shop-Range-Slider */
	if ($('.shop-js-range-slider').length > 0) {
		$('.shop-js-range-slider').ionRangeSlider({
			skin: "big",
			type: "double",
			grid: true,
			min: 0,
			max: 1000,
			from: 200,
			to: 800,
			prefix: "$"
		});
	}

	/* dateRangePicker */
	if ($('#_DateRangeJS_min').length > 0) {
		let start = moment().subtract(29, 'days'),
				end = moment();

		function cb(start, end) {
			$('#reportrange span').html(start.format('DD/M/YYYY') + ' - ' + end.format('DD/M/YYYY'));
		}

		$('#reportrange').daterangepicker({
			opens: "left"
		}, cb);
		cb(start, end);
	}

	/* JQVMAP */
	if ($('#_JQVMAP').length > 0) {	
		var sample_data={"af":"16.63","al":"11.58","dz":"158.97","ao":"85.81","ag":"1.1","ar":"351.02","am":"8.83","au":"1219.72","at":"366.26","az":"52.17","bs":"7.54","bh":"21.73","bd":"105.4","bb":"3.96","by":"52.89","be":"461.33","bz":"1.43","bj":"6.49","bt":"1.4","bo":"19.18","ba":"16.2","bw":"12.5","br":"2023.53","bn":"11.96","bg":"44.84","bf":"8.67","bi":"1.47","kh":"11.36","cm":"21.88","ca":"1563.66","cv":"1.57","cf":"2.11","td":"7.59","cl":"199.18","cn":"5745.13","co":"283.11","km":"0.56","cd":"12.6","cg":"11.88","cr":"35.02","ci":"22.38","hr":"59.92","cy":"22.75","cz":"195.23","dk":"304.56","dj":"1.14","dm":"0.38","do":"50.87","ec":"61.49","eg":"216.83","sv":"21.8","gq":"14.55","er":"2.25","ee":"19.22","et":"30.94","fj":"3.15","fi":"231.98","fr":"2555.44","ga":"12.56","gm":"1.04","ge":"11.23","de":"3305.9","gh":"18.06","gr":"305.01","gd":"0.65","gt":"40.77","gn":"4.34","gw":"0.83","gy":"2.2","ht":"6.5","hn":"15.34","hk":"226.49","hu":"132.28","is":"12.77","in":"1430.02","id":"695.06","ir":"337.9","iq":"84.14","ie":"204.14","il":"201.25","it":"2036.69","jm":"13.74","jp":"5390.9","jo":"27.13","kz":"129.76","ke":"32.42","ki":"0.15","kr":"986.26","undefined":"5.73","kw":"117.32","kg":"4.44","la":"6.34","lv":"23.39","lb":"39.15","ls":"1.8","lr":"0.98","ly":"77.91","lt":"35.73","lu":"52.43","mk":"9.58","mg":"8.33","mw":"5.04","my":"218.95","mv":"1.43","ml":"9.08","mt":"7.8","mr":"3.49","mu":"9.43","mx":"1004.04","md":"5.36","mn":"5.81","me":"3.88","ma":"91.7","mz":"10.21","mm":"35.65","na":"11.45","np":"15.11","nl":"770.31","nz":"138","ni":"6.38","ne":"5.6","ng":"206.66","no":"413.51","om":"53.78","pk":"174.79","pa":"27.2","pg":"8.81","py":"17.17","pe":"153.55","ph":"189.06","pl":"438.88","pt":"223.7","qa":"126.52","ro":"158.39","ru":"1476.91","rw":"5.69","ws":"0.55","st":"0.19","sa":"434.44","sn":"12.66","rs":"38.92","sc":"0.92","sl":"1.9","sg":"217.38","sk":"86.26","si":"46.44","sb":"0.67","za":"354.41","es":"1374.78","lk":"48.24","kn":"0.56","lc":"1","vc":"0.58","sd":"65.93","sr":"3.3","sz":"3.17","se":"444.59","ch":"522.44","sy":"59.63","tw":"426.98","tj":"5.58","tz":"22.43","th":"312.61","tl":"0.62","tg":"3.07","to":"0.3","tt":"21.2","tn":"43.86","tr":"729.05","tm":0,"ug":"17.12","ua":"136.56","ae":"239.65","gb":"2258.57","us":"14624.18","uy":"40.71","uz":"37.72","vu":"0.72","ve":"285.21","vn":"101.99","ye":"30.02","zm":"15.69","zw":"5.57"};
		jQuery('#vmap').vectorMap({
			map: 'world_en',
			backgroundColor: 'transparent',
			color: '#17245a',
			borderColor: '#0b1644',
			hoverOpacity: 0.7,
			selectedColor: '#ffffff',
			enableZoom: true,
			showTooltip: true,
			scaleColors: ['#848db7', '#4d588c'],
			values: sample_data,
			normalizeFunction: 'polynomial'
		});
	}
	
}
window.onload = chartJSInit;



