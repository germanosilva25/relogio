<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
  	function increment(){
  		//alert('testye')
		$('table').find('tbody').append("<tr><td>Mark</td><td>Spencer</td><td>markspencer@gmail.com</td></tr>")
  	}

  	function deletar(){
  		$('table').find('tbody').find('tr:last').remove()
  	}


function parar(){

}
function iniciar(){
   let s = 0;
   let m = 0;
   let h = 0;
   let c = 0;

   

   let intervalCentesimos = setInterval(function(){
       c += 1; 
       if(c == 100){
           c = 0;
        
       }
      
       $(".centesimos").html(String(c).padStart(2, "0"));
       
    },1);

    let intervalSegundos = setInterval(function(){
       s += 1; 
       
       if (s == 60){
           s = 0;
           m += 1;
       }
       if(m == 60){
           m = 0;
           h += 1;
       }
       
       $(".segundos").html(String(s).padStart(2, "0"));
       $(".minutos").html(String(m).padStart(2, "0"));
       $(".horas").html(String(h).padStart(2, "0"));
    },1000);
    
    return function parcial(){
       alert('segundo: ' + s)
   }

    return function zerar(){
        alert('interval: ')
       //clearInterval(intervalCentesimos);
       //clearInterval(intervalSegundos); 
   }

   
   };
  </script>
</head>
<body>

<div class="container">
  <h1>Hora: </h1>
  <p>
 <span class = "horas colored digit text-nowrap font-digit">00</span>
  <span>:</span>
 <span class = "minutos colored digit text-nowrap font-digit">00</span>
 <span>:</span>
 <span class = "segundos colored digit text-nowrap font-digit">00</span>
 <span>:</span>
 <span class = "centesimos colored digit text-nowrap font-digit">00</span>
 <span></span>
</p>
<p>
 <button type="button" class="btn btn-primary" onclick = "iniciar()">Inicar</button>
 <span></span>
 
 <button type="button" class="btn btn-info" onclick = "iniciar()()">Parcial</button>
 <span></span>
 <button type="button" class="btn btn-danger" onclick = "iniciar()()">Zerar</button>

</p>
</div>

<div class="container">
  <h2>Basic Table</h2>
             
  <table class="table">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
    </tbody>
  </table>
</div>
<button type="button" class="btn btn-primary" onclick = "increment()">Primary</button>
<button type="button" class="btn btn-danger" onclick = "deletar()">Danger</button>
</body>
</html>

