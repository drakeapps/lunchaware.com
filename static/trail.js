function getOrCreateCanvas() {
  let c = document.querySelector('canvas');
  if (c) {
    return c;
  }
  c = document.createElement('canvas');
  c.id = 'trail-canvas';
  c.width = window.innerWidth;
  c.height = window.innerHeight
  c.style.zIndex = '-99';
  c.style.position = 'fixed';
  c.style.top = '0';
  c.style.left = '0';
  document.querySelector('body').appendChild(c);
  return c;
}

class Point {
  constructor(x, y) {
    this.x = x;
    this.y = y;
    this.lifetime = 0;
  }
}

function mouseTrail() {
  const canvas = getOrCreateCanvas();
  const ctx = canvas.getContext('2d');

  // resize properly
  window.addEventListener(
    "resize",
    ({ target: { innerWidth, innerHeight } }) => {
      canvas.width = innerWidth;
      canvas.height = innerHeight;
    },
    false
  );

  const points = [];
  const addPoint = (x, y) => {
    points.push(new Point(x, y))
  }
  document.addEventListener('mousemove', ({clientX, clientY}) => {
    addPoint(clientX - canvas.offsetLeft, clientY - canvas.offsetTop);
  }, false);

  const update = () => {
    ctx.clearRect(0, 0, ctx.canvas.width, ctx.canvas.height);
    const duration = 0.8 * 1000 / 60;

    points.forEach((point, i) => {
      let lastPoint;
      if (points[i-1] !== undefined) {
        lastPoint = points[i-1];
      } else {
        lastPoint = point;
      }
      point.lifetime += 1;

      if (point.lifetime > duration) {
        points.shift(); // dead point
      } else {
        // progress lifetime from 0% to 100%
        const lifePercent = point.lifetime / duration;
        const spreadRate = 7 * (1 - lifePercent);

        ctx.lineJoin = 'round';
        ctx.lineWidth = spreadRate;

        // progress from purple to green over lifetime
        const red = Math.floor(190 - (190 * lifePercent));
        const blue = Math.floor(210 + (210 * lifePercent));
        ctx.strokeStyle = `rgb(${red}, 0, ${blue})`;
        ctx.beginPath();
        ctx.moveTo(lastPoint.x, lastPoint.y);
        ctx.lineTo(point.x, point.y);
        ctx.stroke();
        ctx.closePath();
      }
    });

    requestAnimationFrame(update);
  };

  update();
}

// If the device supports cursors, start animation.
if (matchMedia('(pointer:fine)').matches) {
  mouseTrail();
}
