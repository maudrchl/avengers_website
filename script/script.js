// smoke canvas
const smoke = new Image();
smoke.src = 'http://s4.postimg.org/atxdou6u1/smoke.png';

$.fn.emitter = function(opts){
  const particles = [];
  const canvases = [];

  const particle = function(canvas){
    let x, y, size, speedX, speedY, opacity;
    reset();
    
    this.update = function(){
      if(opacity > 0){
        opacity -= (Math.random() / opts.speed.fade);
      }

      if(opacity <= 0){
        reset();
      }
      
      speedX -= Math.random() / opts.speed.acceleration;
      speedY -= Math.random() / opts.speed.acceleration;
      x += speedX;
      y += speedY;
      size += Math.random();
      drawParticle(x, y, size, opacity);
    };

    function drawParticle(x, y, size, opacity){
      canvas.globalAlpha = opacity;
      canvas.drawImage(smoke, 0, 0, opts.size, opts.size, x, y, size, size);
    }

    function reset(){
      x = opts.x;
      y = opts.y;
      size = opts.size;
      speedX = Math.random() * opts.speed.x;
      speedY = Math.random() * opts.speed.y;
      opacity = Math.random();
    }
  };

  const canvas = function(el){
    const canvas = el[0].getContext('2d');

    canvas.width = el.width();
    canvas.height = el.height();

    for(let c = 0; c < opts.particles; c++){
      particles.push(new particle(canvas));
    }

    this.clear = function(){
      canvas.clearRect(0, 0, canvas.width, canvas.height);
    };
  };

  $(this).each(function(){
    canvases.push(new canvas($(this)));
  });

  function render(){
    canvases.forEach(function(canvas){
      canvas.clear();
    });

    particles.forEach(function(particle){
      particle.update();
    });
    
    window.requestAnimationFrame(render);
  }
  return {
    render: render
  }
};

$('canvas').emitter({
  x: 600,
  y: 0,
  size: 70,
  particles: 200,
  speed: {
    x: -2,
    y: 2.5,
    fade: 150,
    acceleration: 200
  }
}).render();

(function() {
  function scrollHorizontally(e) {
    e = window.event || e;
    const delta = Math.max(-1, Math.min(1, (e.wheelDelta || -e.detail)));
    document.documentElement.scrollLeft -= (delta*40)
    document.body.scrollLeft -= (delta*40)
    e.preventDefault();
  }
  if (window.addEventListener) {
    // IE9, Chrome, Safari, Opera
    window.addEventListener("mousewheel", scrollHorizontally, false);
    // Firefox
    window.addEventListener("DOMMouseScroll", scrollHorizontally, false);
  } else {
    // IE 6/7/8
    window.attachEvent("onmousewheel", scrollHorizontally);
  }
})();