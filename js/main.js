const ctx1 = document.getElementById('myChart1').getContext('2d');
let liniowy1 = new Chart(ctx1, {
    type: ['line'],
    data: {
        datasets:[{
            data: [{x: 0,y: 0}],
            backgroundColor: 'white',
            borderColor:'black',
            borderWidth: 2,
            fill: false,
            label: 'Wartość od czasu',
            pointBackgroundColor: 'purple',
            lineTension : 0.0,
            pointBorderColor:'green'
        }]
    },
    options: {
        legend:{
            display:true,
            position: 'right',
            labels:{
                fontColor:'red'
            }
        },
        scales: {
            xAxes: [{
                type: 'linear',
            }],
        }
    }
});
const ctx2 = document.getElementById('myChart2').getContext('2d');
let liniowy2 = new Chart(ctx2, {
    type: ['line'],
    data: {
        datasets:[{
            data: [{x: 0,y: 0}],
            backgroundColor: 'white',
            borderColor:'black',
            borderWidth: 2,
            fill: false,
            label: 'Wartość od czasu',
            pointBackgroundColor: 'purple',
            lineTension : 0.0,
            pointBorderColor:'green'
        }]
    },
    options: {
        legend:{
            display:true,
            position: 'right',
            labels:{
                fontColor:'red'
            }
        },
        scales: {
            xAxes: [{
                type: 'linear',
            }],
        }
    }
});
const ctx3 = document.getElementById('myChart3').getContext('2d');
let liniowy3 = new Chart(ctx3, {
    type: ['line'],
    data: {
        datasets:[{
            data: [{x: 0,y: 0}],
            backgroundColor: 'white',
            borderColor:'black',
            borderWidth: 2,
            fill: false,
            label: 'Wartość od czasu',
            pointBackgroundColor: 'purple',
            lineTension : 0.0,
            pointBorderColor:'green'
        }]
    },
    options: {
        legend:{
            display:true,
            position: 'right',
            labels:{
                fontColor:'red'
            }
        },
        scales: {
            xAxes: [{
                type: 'linear',
            }],
        }
    }
});
const ctx4 = document.getElementById('myChart4').getContext('2d');
let liniowy4 = new Chart(ctx4, {
    type: ['line'],
    data: {
        datasets:[{
            data: [{x: 0,y: 0}],
            backgroundColor: 'white',
            borderColor:'black',
            borderWidth: 2,
            fill: false,
            label: 'Wartość od czasu',
            pointBackgroundColor: 'purple',
            lineTension : 0.0,
            pointBorderColor:'green'
        }]
    },
    options: {
        legend:{
            display:true,
            position: 'right',
            labels:{
                fontColor:'red'
            }
        },
        scales: {
            xAxes: [{
                type: 'linear',
            }],
        }
    }
});
const ctx5 = document.getElementById('myChart5').getContext('2d');
let liniowy5 = new Chart(ctx5, {
    type: ['line'],
    data: {
        datasets:[{
            data: [{x: 0,y: 0}],
            backgroundColor: 'white',
            borderColor:'black',
            borderWidth: 2,
            fill: false,
            label: 'Wartość od czasu',
            pointBackgroundColor: 'purple',
            lineTension : 0.0,
            pointBorderColor:'green'
        }]
    },
    options: {
        legend:{
            display:true,
            position: 'right',
            labels:{
                fontColor:'red'
            }
        },
        scales: {
            xAxes: [{
                type: 'linear',
            }],
        }
    }
});
const ctx6 = document.getElementById('myChart6').getContext('2d');
let liniowy6 = new Chart(ctx6, {
    type: ['line'],
    data: {
        datasets:[{
            data: [{x: 0,y: 0}],
            backgroundColor: 'white',
            borderColor:'black',
            borderWidth: 2,
            fill: false,
            label: 'Wartość od czasu',
            pointBackgroundColor: 'purple',
            lineTension : 0.0,
            pointBorderColor:'green'
        }]
    },
    options: {
        legend:{
            display:true,
            position: 'right',
            labels:{
                fontColor:'red'
            }
        },
        scales: {
            xAxes: [{
                type: 'linear',
            }],
        }
    }
});
function addData(chart, data) {
    chart.data.datasets.forEach((dataset) => {
        dataset.data.push(data);
    });
    chart.update();
}
function removeData(chart) {
    chart.data.datasets.forEach((dataset) => {
        dataset.data.shift();
    });
    chart.update();
}
function get_avr(chart){
    let avry = 0;
    let x=chart.data.datasets[0].data.length;
    for(let i=0;i<x;i++){
        avry+=chart.data.datasets[0].data[i].y;
    }
    return avry/x;
}