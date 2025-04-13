<!DOCTYPE html>
<html>
<head>
    <style>
        #canvas {
            position: fixed;
            top: 0;
            left: 0;
        }
        body {
            margin: 0;
            overflow: hidden;
        }
    </style>
</head>
<body>
    <canvas id="canvas"></canvas>
    <script>
        const canvas = document.getElementById('canvas');
        const ctx = canvas.getContext('2d');
        let letters = [];

       
        function initCanvas() {
            canvas.width = window.innerWidth;
            canvas.height = window.innerHeight;
        }
        initCanvas();
        window.addEventListener('resize', initCanvas);

      
        const physicsConfig = {
            gravity: 0.5,        
            bounce: 1,         
            friction: 1       
        };

        
        class Letter {
            constructor(x, y) {
                this.char = String.fromCharCode(97 + Math.floor(Math.random() * 26));
                this.x = x;
                this.y = y;
                this.radius = 15; 
                this.vx = (Math.random() - 0.5) * 10; 
                this.vy = 0;
            }

            update() {
                
                this.vy += physicsConfig.gravity;
                
                
                this.vx *= physicsConfig.friction;
                this.vy *= physicsConfig.friction;

                
                this.x += this.vx;
                this.y += this.vy;

                
                if (this.x + this.radius > canvas.width) {
                    this.x = canvas.width - this.radius;
                    this.vx *= -physicsConfig.bounce;
                } else if (this.x - this.radius < 0) {
                    this.x = this.radius;
                    this.vx *= -physicsConfig.bounce;
                }

                if (this.y + this.radius > canvas.height) {
                    this.y = canvas.height - this.radius;
                    this.vy *= -physicsConfig.bounce;
                }
            }

            draw() {
                ctx.fillStyle = '#ff0000';
                ctx.font = '100px Arial';
                ctx.textAlign = 'center';
                ctx.textBaseline = 'middle';
                ctx.fillText(this.char, this.x, this.y);
            }
        }

        
        function checkCollisions() {
            for (let i = 0; i < letters.length; i++) {
                for (let j = i + 1; j < letters.length; j++) {
                    const a = letters[i];
                    const b = letters[j];
                    const dx = a.x - b.x;
                    const dy = a.y - b.y;
                    const distance = Math.sqrt(dx * dx + dy * dy);

                    if (distance < a.radius + b.radius) {
                        
                        const angle = Math.atan2(dy, dx);
                        const speedA = Math.sqrt(a.vx * a.vx + a.vy * a.vy);
                        const speedB = Math.sqrt(b.vx * b.vx + b.vy * b.vy);
                        const direction = Math.atan2(a.vy, a.vx);
                        
                        a.vx = Math.cos(angle) * speedA * physicsConfig.bounce;
                        a.vy = Math.sin(angle) * speedA * physicsConfig.bounce;
                        b.vx = Math.cos(angle + Math.PI) * speedB * physicsConfig.bounce;
                        b.vy = Math.sin(angle + Math.PI) * speedB * physicsConfig.bounce;
                    }
                }
            }
        }

        
        function animate() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            
            letters.forEach(letter => {
                letter.update();
                letter.draw();
            });
            
            checkCollisions();
            requestAnimationFrame(animate);
        }
        animate();

        
        document.addEventListener('click', (e) => {
            letters.push(new Letter(e.clientX, e.clientY));
            
            
            if (letters.length > 100) letters.shift(); 
        });
    </script>
</body>
</html>
