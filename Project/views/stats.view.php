<div class="container-fluid" id="mainBox">
    <?php include_once 'includes/header.php';?>
    <canvas id="chart1"></canvas>
    <canvas id="chart2"></canvas>
    <canvas id="chart3"></canvas>
    <canvas id="chart4"></canvas>
</div>
<?php include_once 'includes/footer.php';?>
<script>
    let trainings = <?= $js_result;?>;
    let names = [],
        dates = [],
        moyennes = [],
        distances = [],
        pct10s = [],
        pct9s = [],
        nbrSeries = [],
        nbrVolees = [],
        nbrTirs = [];

    for(let i = 0; i < trainings.length; i++) {
        let dateObjet = new Date(trainings[i]['DATE_ENT']);
        names.push(trainings[i]['NOM_ENT']);
        dates.push(dateObjet.getDate() + "/" + dateObjet.getMonth() + "/" + dateObjet.getFullYear());
        moyennes.push(trainings[i]['MOY_ENT']);
        distances.push(trainings[i]['DIST_ENT']);
        pct10s.push(trainings[i]['PCT_DIX']);
        pct9s.push(trainings[i]['PCT_NEUF']);
        nbrSeries.push(trainings[i]['NBR_SERIE']);
        nbrVolees.push(trainings[i]['NBR_VOLEE']);
        nbrTirs.push(trainings[i]['NBR_FLECHES']);
    }

    let namesReversed = names.reverse(),
        datesReversed = dates.reverse(),
        moyennesReversed = moyennes.reverse(),
        distancesReversed = distances.reverse(),
        pct10sReversed = pct10s.reverse(),
        pct9sReversed = pct9s.reverse();

    let nbrTirsTotal = [];

    for(let j = 0; j < nbrTirs.length; j++) {
        let total = nbrSeries[j] * nbrVolees[j] * nbrTirs[j];
        nbrTirsTotal.push(total);
    }

    console.log(dates);
    console.log(datesReversed);
    let ctx1 = document.getElementById("chart1").getContext('2d');
    let chart1 = new Chart(ctx1, {
        type: 'line',
        data: {
            labels: distances,
            datasets: [{
                label: '% de 10',
                data: pct10s,
                backgroundColor: [
                    'rgba(130, 127, 254, .2)',
                ],
                borderColor: [
                    'rgba(130, 127, 254, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            legend: {
                labels: {
                    fontSize: 15
                }
            },
            responsive: true,
            title: {
                display: true,
                text: '% de 10 en fonction de la distance'
            },
            events: ["touchstart"],
            scales: {
                xAxes: [{
                    display: true,
                    scaleLabel: {
                        display: true,
                        labelString: 'Distances(m)'
                    }
                }],
                yAxes: [{
                    display: true,
                    scaleLabel: {
                        display: true,
                        labelString: '% de 10'
                    }
                }]
            }
        }
    });

    let ctx2 = document.getElementById("chart2").getContext('2d');
    let chart2 = new Chart(ctx2, {
        type: 'line',
        data: {
            labels: distances,
            datasets: [{
                label: '% de 9',
                data: pct9s,
                backgroundColor: [
                    'rgba(130, 127, 254, .2)',
                ],
                borderColor: [
                    'rgba(130, 127, 254, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            legend: {
                labels: {
                    fontSize: 15
                }
            },
            responsive: true,
            title: {
                display: true,
                text: '% de 9 en fonction de la distance'
            },
            events: ["touchstart"],
            scales: {
                xAxes: [{
                    display: true,
                    scaleLabel: {
                        display: true,
                        labelString: 'Distances(m)'
                    }
                }],
                yAxes: [{
                    display: true,
                    scaleLabel: {
                        display: true,
                        labelString: '% de 9'
                    }
                }]
            }
        }
    });

    let ctx3 = document.getElementById("chart3").getContext('2d');
    let chart3 = new Chart(ctx3, {
        type: 'line',
        data: {
            labels: nbrTirsTotal,
            datasets: [{
                label: '% de 10',
                data: pct10s,
                backgroundColor: [
                    'rgba(130, 127, 254, .2)',
                ],
                borderColor: [
                    'rgba(130, 127, 254, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            legend: {
                labels: {
                    fontSize: 15
                }
            },
            responsive: true,
            title: {
                display: true,
                text: '% de 9 en fonction du nombre de tirs total'
            },
            events: ["touchstart"],
            scales: {
                xAxes: [{
                    display: true,
                    scaleLabel: {
                        display: true,
                        labelString: 'Nombre de tirs total'
                    }
                }],
                yAxes: [{
                    display: true,
                    scaleLabel: {
                        display: true,
                        labelString: '% de 10'
                    }
                }]
            }
        }
    });

    let ctx4 = document.getElementById("chart4").getContext('2d');
    let chart4 = new Chart(ctx4, {
        type: 'line',
        data: {
            labels: datesReversed,
            datasets: [{
                label: 'Moyennes',
                data: moyennesReversed,
                backgroundColor: [
                    'rgba(130, 127, 254, .2)',
                ],
                borderColor: [
                    'rgba(130, 127, 254, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            legend: {
                labels: {
                    fontSize: 15
                }
            },
            responsive: true,
            title: {
                display: true,
                text: 'Moyennes en fonction de la date'
            },
            events: ["touchstart"],
            scales: {
                xAxes: [{
                    display: true,
                    scaleLabel: {
                        display: true,
                        labelString: 'Dates d\'entrainement'
                    }
                }],
                yAxes: [{
                    display: true,
                    scaleLabel: {
                        display: true,
                        labelString: 'Moyennes'
                    }
                }]
            }
        }
    });
</script>
