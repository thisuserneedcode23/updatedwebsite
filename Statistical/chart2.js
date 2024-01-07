const ctx2 = document.getElementById('Doughnut').getContext('2d');
const Doughnut = new Chart (ctx2, {
    type: 'doughnut',
    data: {
        labels: ['Cinamonroll',
         'Crinkles',
             'Donuts',
                 'Croissants',
                    'Ensaymada',
                        'Garlicbread',
                            'Muffins',
                                'Scones',
                                    'Ubeensaymada'],
        datasets: [{
            label: 'Bread and Pastries',
            data: [10, 16, 7, 4, 14, 3, 4, 14, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(252, 139, 64, 0.2)',
                'rgba(254, 174, 64, 0.2)',
                'rgba(119, 143, 64, 0.2)',
                'rgba(172, 131, 64, 0.2)',
                'rgba(189, 182, 64, 0.2)',
                'rgba(255, 143, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(255, 110, 69, 1)',
                'rgba(255, 186, 240, 1)',
                'rgba(255, 123, 75, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
       scales: {
            y: {
                beginAtZero: true
            }
       }

       
        
    }
});

function updateDoughnutChart() {
    const newData = initialData.datasets[0].data.map(() => Math.floor(Math.random() * 20));
    doughnutChart.data.datasets[0].data = newData;
    doughnutChart.update();
  }

  setInterval(updateDoughnutChart, 1000);