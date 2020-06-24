// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

let positif = $("#divPositif").text().replace(/,/g, "")
let sembuh = $("#divSembuh").text().replace(/,/g, "")
let meninggal = $("#divMeninggal").text().replace(/,/g, "")
let dirawat = $("#divDirawat").text().replace(/,/g, "")

// Pie Chart Example
var ctx = document.getElementById("myPieChart");
var myPieChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: ["Positif", "Sembuh", "Meninggal", "Dirawat"],
    datasets: [{
      data: [positif, sembuh, meninggal, dirawat],
      backgroundColor: ['#F7C23E', '#1CC88A', '#E74A3B', '#4E73DF'],
      hoverBackgroundColor: ['#d6a833', '#1bb37c', '#ba3e32', '#3a57ab'],
      hoverBorderColor: "rgba(234, 236, 244, 1)",
    }],
  },
  options: {
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
    },
    legend: {
      display: false
    },
    cutoutPercentage: 80,
  },
});
