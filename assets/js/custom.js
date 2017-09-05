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
    "text": "Vanessa Cuellar"
  }),
  
  Taggd.Tag.createFromObject({
    "position": {
      "x": 0.34277,
      "y": 0.42533
    },
    "text": "Zoraida Vaca"
  }),
  
  Taggd.Tag.createFromObject({
    "position": {
      "x": 0.50293,
      "y": 0.41079
    },
    "text": "Kendal Plaza"
  }),
  
  Taggd.Tag.createFromObject({
    "position": {
      "x": 0.63184,
      "y": 0.42823
    },
    "text": "Carla Muñoz"
  }),
  
  Taggd.Tag.createFromObject({
    "position": {
      "x": 0.77051,
      "y": 0.43696
    },
    "text": "Daybela Condori"
  }),
  
  Taggd.Tag.createFromObject({
    "position": {
      "x": 0.27441,
      "y": 0.24219
    },
    "text": "Miguel Torrico"
  }),
  
  Taggd.Tag.createFromObject({
    "position": {
      "x": 0.41895,
      "y": 0.23347
    },
    "text": "Alfredo Llanos"
  }),
  
  Taggd.Tag.createFromObject({
    "position": {
      "x": 0.55176,
      "y": 0.22765
    },
    "text": "Hugo Lopez"
  }),
  
  Taggd.Tag.createFromObject({
    "position": {
      "x": 0.68652,
      "y": 0.27998
    },
    "text": "Jose Polar"
  })
	];

	var taggd = new Taggd(image, options, data);
});