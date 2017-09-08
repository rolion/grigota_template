$(document).ready(function(){

	var transparentDemo = true;
	var fixedTop = false;

	$(window).scroll(function(e) {
	    oVal = ($(window).scrollTop() / 170);
	    $(".blur").css("opacity", oVal);
	    
	});


	var image = document.getElementById('img-directory');

	var options = {};
	var data = [
	  Taggd.Tag.createFromObject({
    "position": {
      "x": 0.23535,
      "y": 0.4137
    },
    "text": "Cmte de Protocolo Vanessa Cuellar"
  }),
  
  Taggd.Tag.createFromObject({
    "position": {
      "x": 0.34277,
      "y": 0.42533
    },
    "text": "Cmte Servicio Internacional Zoraida Vaca"
  }),
  
  Taggd.Tag.createFromObject({
    "position": {
      "x": 0.50293,
      "y": 0.41079
    },
    "text": "Presidente Kendal Plaza"
  }),
  
  Taggd.Tag.createFromObject({
    "position": {
      "x": 0.63184,
      "y": 0.42823
    },
    "text": "Secretaria Carla Muñoz"
  }),
  
  Taggd.Tag.createFromObject({
    "position": {
      "x": 0.77051,
      "y": 0.43696
    },
    "text": "Cmte Servicio a la Comunida Daybela Condori"
  }),
  
  Taggd.Tag.createFromObject({
    "position": {
      "x": 0.27441,
      "y": 0.24219
    },
    "text": "Cmte Desarrollo Profecional Miguel Torrico"
  }),
  
  Taggd.Tag.createFromObject({
    "position": {
      "x": 0.41895,
      "y": 0.23347
    },
    "text": "Vicepresidente Alfredo Llanos"
  }),
  
  Taggd.Tag.createFromObject({
    "position": {
      "x": 0.55176,
      "y": 0.22765
    },
    "text": "Tesorero Hugo Lopez"
  }),
  
  Taggd.Tag.createFromObject({
    "position": {
      "x": 0.68652,
      "y": 0.27998
    },
    "text": "Macero Jose Polar"
  })
	];

	var taggd = new Taggd(image, options, data);
});