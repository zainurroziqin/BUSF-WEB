<?php
error_reporting(0);
// kandang A
    $GetMingguSatu = mysqli_query($conn, "SELECT SUM(pakan_total) AS JumlahPakan, SUM(berat_telur) AS JumlahBT FROM kandang_a WHERE id BETWEEN '1' AND '7'");
    $GetFCRM1 = mysqli_fetch_array($GetMingguSatu);
    $FCR1 = $GetFCRM1['JumlahPakan']/$GetFCRM1['JumlahBT'];

    $GetMingguDua = mysqli_query($conn, "SELECT SUM(pakan_total) AS JumlahPakan, SUM(berat_telur) AS JumlahBT FROM kandang_a WHERE id BETWEEN '8' AND '15'");
    $GetFCRM2 = mysqli_fetch_array($GetMingguDua);
    $FCR2 = $GetFCRM2['JumlahPakan']/$GetFCRM2['JumlahBT'];

    $GetMingguTiga = mysqli_query($conn, "SELECT SUM(pakan_total) AS JumlahPakan, SUM(berat_telur) AS JumlahBT FROM kandang_a WHERE id BETWEEN '16' AND '23'");
    $GetFCRM3 = mysqli_fetch_array($GetMingguTiga);
    $FCR3 = $GetFCRM3['JumlahPakan']/$GetFCRM3['JumlahBT'];

    $GetMingguEmpat = mysqli_query($conn, "SELECT SUM(pakan_total) AS JumlahPakan, SUM(berat_telur) AS JumlahBT FROM kandang_a WHERE id BETWEEN '24' AND '31'");
    $GetFCRM4 = mysqli_fetch_array($GetMingguEmpat);
    $FCR4 = $GetFCRM4['JumlahPakan']/$GetFCRM4['JumlahBT'];

// Kandang B
      $GetMingguSatuB = mysqli_query($conn, "SELECT SUM(pakan_total) AS JumlahPakan, SUM(berat_telur) AS JumlahBT FROM kandang_b WHERE id BETWEEN '1' AND '7'");
    $GetFCRM1 = mysqli_fetch_array($GetMingguSatuB);
    $FCRB1 = $GetFCRM1['JumlahPakan']/$GetFCRM1['JumlahBT'];

    $GetMingguDuaB = mysqli_query($conn, "SELECT SUM(pakan_total) AS JumlahPakan, SUM(berat_telur) AS JumlahBT FROM kandang_b WHERE id BETWEEN '8' AND '15'");
    $GetFCRM2 = mysqli_fetch_array($GetMingguDuaB);
    $FCRB2 = $GetFCRM2['JumlahPakan']/$GetFCRM2['JumlahBT'];

     $GetMingguTigaB = mysqli_query($conn, "SELECT SUM(pakan_total) AS JumlahPakan, SUM(berat_telur) AS JumlahBT FROM kandang_b WHERE id BETWEEN '16' AND '23'");
    $GetFCRM3 = mysqli_fetch_array($GetMingguTigaB);
    $FCRB3 = $GetFCRM3['JumlahPakan']/$GetFCRM3['JumlahBT'];

    $GetMingguEmpatB = mysqli_query($conn, "SELECT SUM(pakan_total) AS JumlahPakan, SUM(berat_telur) AS JumlahBT FROM kandang_b WHERE id BETWEEN '24' AND '31'");
    $GetFCRM4 = mysqli_fetch_array($GetMingguEmpatB);
    $FCRB4 = $GetFCRM4['JumlahPakan']/$GetFCRM4['JumlahBT'];

// kandang C
      $GetMingguSatuC = mysqli_query($conn, "SELECT SUM(pakan_total) AS JumlahPakan, SUM(berat_telur) AS JumlahBT FROM kandang_c WHERE id BETWEEN '1' AND '7'");
    $GetFCRM1 = mysqli_fetch_array($GetMingguSatuC);
    $FCRC1 = $GetFCRM1['JumlahPakan']/$GetFCRM1['JumlahBT'];

    $GetMingguDuaC= mysqli_query($conn, "SELECT SUM(pakan_total) AS JumlahPakan, SUM(berat_telur) AS JumlahBT FROM kandang_c WHERE id BETWEEN '8' AND '15'");
    $GetFCRM2 = mysqli_fetch_array($GetMingguDuaC);
    $FCRC2 = $GetFCRM2['JumlahPakan']/$GetFCRM2['JumlahBT'];

    $GetMingguTigaC = mysqli_query($conn, "SELECT SUM(pakan_total) AS JumlahPakan, SUM(berat_telur) AS JumlahBT FROM kandang_c WHERE id BETWEEN '16' AND '23'");
    $GetFCRM3 = mysqli_fetch_array($GetMingguTigaC);
    $FCRC3 = $GetFCRM3['JumlahPakan']/$GetFCRM3['JumlahBT'];

    $GetMingguEmpatC = mysqli_query($conn, "SELECT SUM(pakan_total) AS JumlahPakan, SUM(berat_telur) AS JumlahBT FROM kandang_c WHERE id BETWEEN '24' AND '31'");
    $GetFCRM4 = mysqli_fetch_array($GetMingguEmpatC);
    $FCRC4 = $GetFCRM4['JumlahPakan']/$GetFCRM4['JumlahBT'];

// kandang D
      $GetMingguSatuD = mysqli_query($conn, "SELECT SUM(pakan_total) AS JumlahPakan, SUM(berat_telur) AS JumlahBT FROM kandang_d WHERE id BETWEEN '1' AND '7'");
    $GetFCRM1 = mysqli_fetch_array($GetMingguSatuD);
    $FCRD1 = $GetFCRM1['JumlahPakan']/$GetFCRM1['JumlahBT'];

    $GetMingguDuaD = mysqli_query($conn, "SELECT SUM(pakan_total) AS JumlahPakan, SUM(berat_telur) AS JumlahBT FROM kandang_d WHERE id BETWEEN '8' AND '15'");
    $GetFCRM2 = mysqli_fetch_array($GetMingguDuaD);
    $FCRD2 = $GetFCRM2['JumlahPakan']/$GetFCRM2['JumlahBT'];

    $GetMingguTigaD = mysqli_query($conn, "SELECT SUM(pakan_total) AS JumlahPakan, SUM(berat_telur) AS JumlahBT FROM kandang_d WHERE id BETWEEN '16' AND '23'");
    $GetFCRM3 = mysqli_fetch_array($GetMingguTigaD);
    $FCRD3 = $GetFCRM3['JumlahPakan']/$GetFCRM3['JumlahBT'];

    $GetMingguEmpatD = mysqli_query($conn, "SELECT SUM(pakan_total) AS JumlahPakan, SUM(berat_telur) AS JumlahBT FROM kandang_d WHERE id BETWEEN '24' AND '31'");
    $GetFCRM4 = mysqli_fetch_array($GetMingguEmpatD);
    $FCRD4 = $GetFCRM4['JumlahPakan']/$GetFCRM4['JumlahBT'];
?>

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
            data: [20, 50, 30, 60, 30, 20, 50, 30, 60, 30, 50, 40]
        }, {
            name: 'Amount',
            data: [40, 20, 50, 15, 40, 40, 20, 50, 15, 40, 65, 20]
        }],
        xaxis: {
            type: 'datetime',
            categories: ['1/11/2022', '2/11/2022', '3/11/2022', '4/11/2022', '5/11/2022', '6/11/2022', '7/11/2022', '8/11/2022', '9/11/2022', '10/11/2022', '11/11/2022', '12/11/2022'],
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
            name: 'FCR',
            data: [<?php echo round($FCR1) ?>, <?php echo round($FCR2) ?>, <?php echo round($FCR3) ?>, <?php echo round($FCR4) ?>]
        }, {
            name: 'Hen Day',
            data: [40, 20, 50, 15]
        }, {
            name: 'Egg Mass',
            data: [30, 25, 40, 15]
        }],
        xaxis: {
            type: 'date',
            categories: ['Minggu 1', 'Minggu 2', 'Minggu 3', 'Minggu 4'],
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
    var chart = new ApexCharts(document.querySelector("#sales-chart-kandang-a"), options);
    chart.render();
});
// [ sales-chart ] end
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
            name: 'FCR',
            data: [<?php echo round($FCRB1) ?>, <?php echo round($FCRB2) ?>, <?php echo round($FCRB3) ?>, <?php echo round($FCRB4) ?>]
        }, {
            name: 'Hen Day',
            data: [40, 20, 50, 15]
        }, {
            name: 'Egg Mass',
            data: [30, 25, 40, 15]
        }],
        xaxis: {
            type: 'date',
            categories: ['Minggu 1', 'Minggu 2', 'Minggu 3', 'Minggu 4'],
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
    var chart = new ApexCharts(document.querySelector("#sales-chart-kandang-b"), options);
    chart.render();
});
// [ sales-chart ] end
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
            name: 'FCR',
            data: [<?php echo round($FCRC1) ?>, <?php echo round($FCRC2) ?>, <?php echo round($FCRC3) ?>, <?php echo round($FCRC4) ?>]
        }, {
            name: 'Hen Day',
            data: [40, 20, 50, 15]
        }, {
            name: 'Egg Mass',
            data: [30, 25, 40, 15]
        }],
        xaxis: {
            type: 'date',
            categories: ['Minggu 1', 'Minggu 2', 'Minggu 3', 'Minggu 4'],
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
    var chart = new ApexCharts(document.querySelector("#sales-chart-kandang-c"), options);
    chart.render();
});
// [ sales-chart ] end
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
            name: 'FCR',
            data: [<?php echo round($FCRD1) ?>, <?php echo round($FCRD2) ?>, <?php echo round($FCRD3) ?>, <?php echo round($FCRD4) ?>]
        }, {
            name: 'Hen Day',
            data: [40, 20, 50, 15]
        }, {
            name: 'Egg Mass',
            data: [30, 25, 40, 15]
        }],
        xaxis: {
            type: 'date',
            categories: ['Minggu 1', 'Minggu 2', 'Minggu 3', 'Minggu 4'],
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
    var chart = new ApexCharts(document.querySelector("#sales-chart-kandang-d"), options);
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