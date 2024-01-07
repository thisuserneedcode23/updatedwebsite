
const ctx = document.getElementById('BarChart').getContext('2d');
const BarChart = new Chart (ctx, {
    type: 'bar', 
    data: {
        labels: ['Americano', 'Caramel Latte', 'Black Coffee', 'Cappuccino', 'Choco Mocha', 'Coffee Jelly',
        'Choco Latte', 'Caramel', 'Dark Choco', 'Choco Macchiato', 'Vanilla', 'Hazelnut'],
        datasets: [{
            label: 'Beverages',
            data: [12, 19, 3, 5, 2, 3, 10, 16, 7, 4, 14, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(79, 159, 64, 0.2)',
                'rgba(255, 159, 65, 0.2)',
                'rgba(192, 159, 46, 0.2)',
                'rgba(202, 102, 80, 0.2)',
                'rgba(142, 151, 43, 0.2)',
                'rgba(252, 128, 55, 0.2)',
                'rgba(189, 194, 46, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 200, 1)',
                'rgba(202, 138, 25, 1)',
                'rgba(190, 141, 89, 1)',
                'rgba(132, 161, 57, 1)',
                'rgba(165, 149, 39, 1)',
                'rgba(178, 159, 50, 1)',
                'rgba(200, 111, 27, 1)'
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
function updateBarChart() {
    const newData = initialData.datasets[0].data.map(() => Math.floor(Math.random() * 20));
    barChart.data.datasets[0].data = newData;
    barChart.update();
  }

  setInterval(updateBarChart, 1000);