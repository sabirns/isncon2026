	<footer class="footer">
		<svg class="footer-kidney" viewBox="0 0 200 200">
			<circle cx="100" cy="100" r="80" stroke="#fff" stroke-width="1" fill="none" stroke-dasharray="4 8" />
			<circle cx="100" cy="100" r="60" stroke="#00b8c8" stroke-width="0.5" fill="none" stroke-dasharray="2 6" />
		</svg>
		<div class="footer-grid">
			<div class="footer-brand">
				<img src="images/logo.svg" alt="55th Annual Conference of the Indian Society of Nephrology.">
				<p>55th Annual Conference of the Indian Society of Nephrology.</p>
			</div>
			<div class="footer-col">
				<h4>Quick Links</h4>
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="schedule.php">Schedule</a></li>
					<li><a href="faculty.php">Faculty</a></li>
				</ul>
			</div>
			<div class="footer-col">
				<h4>Information</h4>
				<ul>
					<li><a href="registration.php">Registration</a></li>
					<li><a href="contact.php">Contact Us</a></li>
					<li><a href="#">Abstract</a></li>
					<li><a href="#">Sponsorship</a></li>
				</ul>
			</div>
			<div class="footer-col">
				<h4>Contact</h4>
				<ul>
					<li><a href="mailto:info@isncon2026.com">info@isncon2026.com</a></li>
					<li><a href="#">+91 98765 43210</a></li>
					<li><a href="#">Kochi, Kerala</a></li>
				</ul>
			</div>
		</div>
		<div class="footer-bottom">
			<p>&copy; 2026 Indian Society of Nephrology. All rights reserved.</p>
			<p>Developed by <a href="https://www.sprdh.com">SPRDH</a></p>
		</div>
	</footer>

	<script>
		function toggleMenu() { 
			const navMenu = document.querySelector('.nav-menu');
			const navToggle = document.querySelector('.nav-toggle');
			if (navMenu) navMenu.classList.toggle('active'); 
			if (navToggle) navToggle.classList.toggle('active');
			document.body.style.overflow = document.body.style.overflow === 'hidden' ? '' : 'hidden';
		}
		const cursorEl = document.getElementById('cursor'), ringEl = document.getElementById('cursorRing'); 
		if (cursorEl && ringEl) {
			let mx = 0, my = 0, rx = 0, ry = 0; 
			document.addEventListener('mousemove', e => { mx = e.clientX; my = e.clientY }); 
			(function tick() { 
				cursorEl.style.left = mx + 'px'; cursorEl.style.top = my + 'px'; 
				rx += (mx - rx) * .12; ry += (my - ry) * .12; 
				ringEl.style.left = rx + 'px'; ringEl.style.top = ry + 'px'; 
				requestAnimationFrame(tick) 
			})();
		}
		const slides = document.querySelectorAll('.hero-slide'); 
		const dots = document.querySelectorAll('.hero-slider-dots .dot'); 
		if (slides.length > 0) {
			let currentSlide = 0; 
			function goToSlide(n) { 
				slides.forEach(s => s.classList.remove('active')); 
				dots.forEach(d => d.classList.remove('active')); 
				currentSlide = n; 
				slides[currentSlide].classList.add('active'); 
				dots[currentSlide].classList.add('active') 
			} 
			setInterval(() => { goToSlide((currentSlide + 1) % slides.length) }, 5000);
		}
		if (window.matchMedia('(hover: hover)').matches) { 
			const heroContent = document.querySelector('.hero-content'), cx = innerWidth / 2, cy = innerHeight / 2; 
			document.addEventListener('mousemove', e => { 
				const dx = (e.clientX - cx) / cx, dy = (e.clientY - cy) / cy; 
				if (heroContent) heroContent.style.transform = `translate(${dx * 5}px,${dy * 3}px)` 
			}) 
		}
		const pc = document.getElementById('particles');
		if (pc) {
			const colors = ['#1a2a6c', '#00b8c8', '#c0523a', '#e8a020']; 
			for (let i = 0; i < 20; i++) { 
				const p = document.createElement('div'); 
				p.className = 'particle'; 
				const sz = Math.random() * 5 + 2; 
				p.style.cssText = `width:${sz}px;height:${sz}px;background:${colors[Math.floor(Math.random() * 4)]};left:${Math.random() * 100}%;bottom:-20px;animation-duration:${Math.random() * 12 + 8}s;animation-delay:${Math.random() * 10}s`; 
				pc.appendChild(p) 
			}
		}
		const revealElements = document.querySelectorAll('.reveal'); 
		function checkReveal() { 
			const wh = window.innerHeight; 
			revealElements.forEach(el => { 
				const et = el.getBoundingClientRect().top; 
				if (et < wh - 100) el.classList.add('active') 
			}) 
		} 
		window.addEventListener('scroll', checkReveal); 
		checkReveal();
		function showDay(day) { document.querySelectorAll('.schedule-grid').forEach(g => g.style.display = 'none'); document.getElementById('day' + day).style.display = 'grid'; document.querySelectorAll('.day-tab').forEach(t => t.classList.remove('active')); event.target.classList.add('active') }
	</script>
</body>

</html>
