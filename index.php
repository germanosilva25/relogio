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
  <style rel = "stylesheet">
      .horas{
          font-color: blue;
          font-size: 60px;
      }

      .minutos{
          font-color: blue;
          font-size: 60px;
      }
      .segundos{
          font-color: blue;
          font-size: 60px;
      }
      .centesimos{
          font-color: blue;
          font-size: 60px;
      }
      .pontos{
          font-color: blue;
          font-size: 60px;
      }

      @font-face {
    font-family: "Digital";
    src: local(Digital), url(fonts/DS-DIGI.ttf);
}



p {
    font-family: "digital"
}

#p2 {
    font-weight: 600;
}

#p3 {
    font-weight: 800;
}

      </style>

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script>
  	function increment(){
  		//alert('testye')
		$('table').find('tbody').append("<tr><td>Mark</td><td>Spencer</td><td>markspencer@gmail.com</td></tr>")
  	}

  	function deletar(){
  		$('table').find('tbody').find('tr').remove()
  	}


function parar(){

}
let intervalCentesimos = '';
let intervalSegundos = '';
let s = 0;
let m = 0;
let h = 0;
let c = 0;
let reniciar = 0;
let volta = 0;
function iniciar(){
  $('#parar').html('Parar')
   let zerar = 0;
    intervalCentesimos = setInterval(function(){
       c += 1; 
       if(c == 100){
           c = 0;
        
       }
      
       $(".centesimos").html(String(c).padStart(2, "0"));
       
    },1);

    intervalSegundos = setInterval(function(){
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

    };

    function zerar(){
       
        c = 0;
        s = 0;
        m = 0;
        h = 0;
        clearInterval(intervalSegundos);
        clearInterval(intervalCentesimos);
        $(".centesimos").html(String(c).padStart(2, "0"));
        $(".segundos").html(String(s).padStart(2, "0"));
        $(".minutos").html(String(m).padStart(2, "0"));
        $(".horas").html(String(h).padStart(2, "0"));
        $('table').find('tbody').find('tr').remove()
        $('#parar').html('Parar')
    }

    function parcial(){
        volta += 1
        console.log(h + ':' + m + ':' + s + ':' + c)
        $('table').find('tbody').append("<tr><td>" + volta + ": " + String(h).padStart(2, "0") + ":" + String(m).padStart(2, "0") + ":" + String(s).padStart(2, "0") + ":" + String(c).padStart(2, "0") + "</td></tr>")
    }

    function parar(){
        //reniciar = 1;
        //alert('volta: ' + volta)
        clearInterval(intervalSegundos)
        clearInterval(intervalCentesimos)
        if(reniciar == 0){
            $('#parar').html('Reiniciar')
            reniciar = 1;
        }else{
            reniciar = 0;
            $('#parar').html('Parar')
            iniciar()
        }
        

    }
  </script>
</head>
<body>

<div class="container">
  <h1>Cronômetro </h1>
  <p>
 <span class = "horas w3-text-blue">00</span>
  <span class = "pontos w3-text-blue">:</span>
 <span class = "minutos w3-text-blue">00</span>
 <span class = "pontos w3-text-blue">:</span>
 <span class = "segundos w3-text-blue">00</span>
 <span class = "pontos w3-text-blue">:</span>
 <span class = "centesimos w3-text-blue">00</span>
 <span></span>
</p>
<p align = "center">
 <button type="button" class="btn btn-primary" onclick = "iniciar()">Inicar</button>
 <span></span>
 <button type="button" class="btn btn-info" onclick = "parcial()">Parcial</button>
 <span></span>
 <button type="button" id = "parar" class="btn parar btn-warning" onclick = "parar()">Parar</button>
 <span></span>
 <button type="button" class="btn btn-danger" onclick = "zerar()">Zerar</button>

</p>
</div>

<div class="container">
  <h2>Tabela dos valores parciais</h2>
             
  <table class="table">
    <thead>
      <tr>
        <th>Parciais</th>
      </tr>
    </thead>
    <tbody>
      
    </tbody>
  </table>
</div>

</body>
</html>

