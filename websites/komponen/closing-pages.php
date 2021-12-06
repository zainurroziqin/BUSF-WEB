<script src="../assets/js/vendor-all.min.js"></script>
<script src="../assets/js/plugins/bootstrap.min.js"></script>
<script src="../assets/js/ripple.js"></script>
<script src="../assets/js/pcoded.min.js"></script>
<script src="../assets/js/menu-setting.min.js"></script>

<script src="../assets/js/plugins/jquery.dataTables.min.js"></script>
<script src="../assets/js/plugins/dataTables.bootstrap4.min.js"></script>
<script src="../assets/js/pages/data-basic-custom.js"></script>
<!-- Apex Chart -->
<script src="../assets/js/plugins/apexcharts.min.js"></script>
<script src="../assets/js/pages/todo.js"></script>
<script src="../assets/alert/sweetalert2.all.min.js" ></script>

<script>
	$(document).ready(function() {
		$('.animation-toggle').hover(function() {
			var anim = $(this).attr('data-animate');
			$(this).addClass('animated');
			$(this).addClass(anim);
			setTimeout(function() {
				$('.animation-toggle').removeClass(anim);
			}, 3000);
		});
	});
</script>

<script>
// [ revenue-map ] start
$(function() {
    var options = {
        chart: {
            height: 200,
            type: 'line',
            toolbar: {
                show: false,
            },
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            width: 3,
            curve: 'smooth'
        },
        series: [{
            name: 'Sales',
            data: [20, 50, 30, 60, 30, 50, 40]
        }, {
            name: 'Amount',
            data: [40, 20, 50, 15, 40, 65, 20]
        }],
        xaxis: {
            type: 'datetime',
            categories: ['1/11/2019', '2/11/2019', '3/11/2019', '4/11/2019', '5/11/2019', '6/11/2019', '7/11/2019'],
        },
        colors: ['#448aff', '#9ccc65'],
        fill: {
            type: 'solid',
        },
        markers: {
            size: 5,
            colors: ['#448aff', '#9ccc65'],
            opacity: 0.9,
            strokeWidth: 2,
            hover: {
                size: 7,
            }
        },
        grid: {
            borderColor: '#e2e5e885',
        },
        yaxis: {
            min: 10,
            max: 70,
        }
    };
    var chart = new ApexCharts(document.querySelector("#collected-chart"), options);
    chart.render();
});
// [ revenue-map ] end
// [ sales-chart ] start
$(function() {
    var options = {
        chart: {
            height: 250,
            type: 'line',
            toolbar: {
                show: false,
            },
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            width: 2,
            curve: 'smooth'
        },
        series: [{
            name: 'Trial',
            data: [20, 50, 30, 60, 30, 50, 40]
        }, {
            name: 'Bronze',
            data: [40, 20, 50, 15, 40, 65, 20]
        }, {
            name: 'Gold',
            data: [64, 40, 20, 30, 20, 40, 65]
        }, {
            name: 'Platinum',
            data: [30, 25, 40, 15, 20, 15, 30]
        }],
        xaxis: {
            type: 'datetime',
            categories: ['1/11/2019', '2/11/2019', '3/11/2019', '4/11/2019', '5/11/2019', '6/11/2019', '7/11/2019'],
        },
        colors: ['#4680ff', '#9ccc65', "#ffba57", "#ff5252"],
        fill: {
            type: 'solid',
        },
        markers: {
            size: 5,
            colors: ['#4680ff', '#9ccc65', "#ffba57", "#ff5252"],
            opacity: 0.9,
            strokeWidth: 2,
            hover: {
                size: 7,
            }
        },
        grid: {
            borderColor: '#e2e5e885',
        },
        yaxis: {
            min: 10,
            max: 70,
        }
    };
    var chart = new ApexCharts(document.querySelector("#sales-chart"), options);
    chart.render();
});
// [ sales-chart ] end
// [ Transection ] start
$(function() {
    var options1 = {
        chart: {
            type: 'bar',
            height: 100,
            sparkline: {
                enabled: true
            }
        },
        colors: ["#4680ff"],
        plotOptions: {
            bar: {
                columnWidth: '80%'
            }
        },
        series: [{
            data: [25, 66, 41, 89, 63, 25, 44, 12, 36, 9, 54]
        }],
        labels: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11],
        xaxis: {
            crosshairs: {
                width: 1
            },
        },
        tooltip: {
            fixed: {
                enabled: false
            },
            x: {
                show: false
            },
            y: {
                title: {
                    formatter: function(seriesName) {
                        return 'Amount'
                    }
                }
            },
            marker: {
                show: false
            }
        }
    }
    new ApexCharts(document.querySelector("#transactions1"), options1).render();
    var options2 = {
        chart: {
            type: 'bar',
            height: 100,
            sparkline: {
                enabled: true
            }
        },
        colors: ["#ff5252"],
        plotOptions: {
            bar: {
                columnWidth: '80%'
            }
        },
        series: [{
            data: [25, 66, 41, 89, 63, 25, 44, 12, 36, 9, 54]
        }],
        labels: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11],
        xaxis: {
            crosshairs: {
                width: 1
            },
        },
        tooltip: {
            fixed: {
                enabled: false
            },
            x: {
                show: false
            },
            y: {
                title: {
                    formatter: function(seriesName) {
                        return 'Sales'
                    }
                }
            },
            marker: {
                show: false
            }
        }
    }
    new ApexCharts(document.querySelector("#transactions2"), options2).render();
});
// [ Transection ] end
</script>


</body>


<!-- Mirrored from ableproadmin.com/bootstrap/default/member-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Nov 2021 19:00:18 GMT -->
</html>