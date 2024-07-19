document.addEventListener("DOMContentLoaded", function() {
    var monthlyTransactions = window.monthlyTransactions;

    var transactionData = Array(12).fill(0);

    monthlyTransactions.forEach(function(transaction) {
        transactionData[transaction.month - 1] = transaction.count; 
    });

    var options = {
        chart: {
            height: 317,
            type: 'area',
            toolbar: {
                show: false,
            },
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            curve: 'smooth',
            width: 3
        },
        series: [{
            name: 'Transactions',
            data: transactionData
        }],
        grid: {
            borderColor: '#e0e6ed',
            strokeDashArray: 5,
            xaxis: {
                lines: {
                    show: true
                }
            },
            yaxis: {
                lines: {
                    show: false,
                }
            },
            padding: {
                top: 0,
                right: 0,
                bottom: 10,
                left: 0
            },
        },
        xaxis: {
            categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        },
        yaxis: {
            labels: {
                show: false,
            }
        },
        colors: ['#4267cd'],
        markers: {
            size: 0,
            opacity: 0.1,
            colors: ['#4267cd'],
            strokeColor: "#ffffff",
            strokeWidth: 2,
            hover: {
                size: 7,
            }
        },
    };

    var chart = new ApexCharts(
        document.querySelector("#revenueGraph"),
        options
    );

    chart.render();
});
