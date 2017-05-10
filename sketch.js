//acá tiene que ponerse creativxs
//revisen lo que hicimos en la clase 7
//https://github.com/profesorfaco/dno037-2017-07

function preload() {
   data = loadTable("data/pokemon.csv", "true", "header");
}

function setup() {
   canvas = createCanvas(windowWidth, windowHeight * 0.8);
   canvas.parent('top');
   canvas.position(0, 0);
   canvas.style('z-index', '-1');
   noLoop();
   noStroke();
}

function windowResized() {  //ajuste tamaño pantalla
   resizeCanvas(windowWidth, windowHeight * 0.8);
}

function gotData(data) {
   console.log(data);
   var japo = data.pokemon[10].name_jp;  //nombre en japonés del pokemon
   var nombre = data.pokemon[10].name;  //ingresar un número para obtener el nombre de un pokemon
   var num = data.pokemon[1].pokemon_order;   //obtener el número de pokemon

   textSize(100);
   text (nombre, width / 2, 200);
   textSize(60);
   text (japo, width / 2, 300);
   textSize(100);
   text (num, width / 2, 420);
 }

function draw() {
   background(237, 34, 93);
   fill(255);
   textAlign(CENTER);
}
