document.querySelector(".showResults").addEventListener("click",showResults);

var parametros = [];
var valores = [];

function showResults(){
    for (var i = 0; i < document.querySelectorAll('.parametro').length ; i++) {
      parametros.push(document.querySelectorAll('.parametro')[i].value);
      valores.push(parseInt(document.querySelectorAll(".valor")[i].value));
    }
    var data = [{
      x: parametros,
      y: valores,
      type: "bar"
    }];
    Plotly.newPlot("grafico",data);
}
