<?php 
$pageTitle = "Schedule | ISNCON 2026 — 55th Annual Conference";
$currentPage = 'schedule';
include 'header.php';
?>

	<section class="page-hero">
		<div class="page-hero-bg">
			<svg class="kidney-bg kidney-bg-1" viewBox="0 0 200 200">
				<path fill="#1a2a6c"
					d="M100 20c-40 0-70 30-80 70-10 45 10 100 60 100 20 0 40-10 50-30 10-20 10-40 0-60-10-20-20-40-30-80z" />
			</svg>
			<svg class="kidney-bg kidney-bg-2" viewBox="0 0 200 200">
				<path fill="#c0523a"
					d="M100 20c-40 0-70 30-80 70-10 45 10 100 60 100 20 0 40-10 50-30 10-20 10-40 0-60-10-20-20-40-30-80z" />
			</svg>
		</div>
		<div class="page-hero-content">
			<div class="page-hero-label">Program</div>
			<h1 class="page-hero-title">Conference <span>Schedule</span></h1>
		</div>
	</section>

	<section>
		<div class="container">
			<div class="day-tabs">
				<button class="day-tab active" onclick="showDay(1)">Day 1 - Dec 17</button>
				<button class="day-tab" onclick="showDay(2)">Day 2 - Dec 18</button>
				<button class="day-tab" onclick="showDay(3)">Day 3 - Dec 19</button>
				<button class="day-tab" onclick="showDay(4)">Day 4 - Dec 20</button>
			</div>

			<div id="day1" class="schedule-grid">
				<div class="schedule-item reveal">
					<div class="schedule-time">08:00 - 09:00</div>
					<div class="schedule-content">
						<h3>Registration & Welcome Coffee</h3>
						<p>Pick up your delegate kit and network with fellow attendees</p><span class="schedule-tag break">Registration</span>
					</div>
				</div>
				<div class="schedule-item reveal">
					<div class="schedule-time">09:00 - 09:30</div>
					<div class="schedule-content">
						<h3>Inaugural Ceremony</h3>
						<p>Opening address by Conference Chair and Chief Guests</p><span class="schedule-tag keynote">Keynote</span>
					</div>
				</div>
				<div class="schedule-item reveal">
					<div class="schedule-time">09:30 - 10:30</div>
					<div class="schedule-content">
						<h3>Plenary Lecture: Future of Nephrology</h3>
						<p>Dr. Michael Chen - Johns Hopkins University, USA</p><span class="schedule-tag keynote">Keynote</span>
					</div>
				</div>
				<div class="schedule-item reveal">
					<div class="schedule-time">10:30 - 11:00</div>
					<div class="schedule-content">
						<h3>Tea Break & Poster Viewing</h3>
						<p>Networking opportunity</p><span class="schedule-tag break">Break</span>
					</div>
				</div>
				<div class="schedule-item reveal">
					<div class="schedule-time">11:00 - 12:30</div>
					<div class="schedule-content">
						<h3>Symposium: CKD Management Updates</h3>
						<p>Latest guidelines and treatment strategies</p><span class="schedule-tag session">Session</span>
					</div>
				</div>
				<div class="schedule-item reveal">
					<div class="schedule-time">12:30 - 14:00</div>
					<div class="schedule-content">
						<h3>Lunch Break</h3>
						<p>Networking lunch with exhibition</p><span class="schedule-tag break">Break</span>
					</div>
				</div>
				<div class="schedule-item reveal">
					<div class="schedule-time">14:00 - 16:00</div>
					<div class="schedule-content">
						<h3>Workshop: Renal Ultrasound Techniques</h3>
						<p>Hands-on training session</p><span class="schedule-tag workshop">Workshop</span>
					</div>
				</div>
				<div class="schedule-item reveal">
					<div class="schedule-time">16:00 - 17:30</div>
					<div class="schedule-content">
						<h3>Oral Paper Presentations</h3>
						<p>Research presentations by young investigators</p><span class="schedule-tag session">Session</span>
					</div>
				</div>
				<div class="schedule-item reveal">
					<div class="schedule-time">19:00 - 21:00</div>
					<div class="schedule-content">
						<h3>Welcome Reception</h3>
						<p>Cultural evening and dinner</p><span class="schedule-tag break">Social</span>
					</div>
				</div>
			</div>

			<div id="day2" class="schedule-grid" style="display:none">
				<div class="schedule-item reveal">
					<div class="schedule-time">08:30 - 09:00</div>
					<div class="schedule-content">
						<h3>Morning Coffee</h3>
						<p>Networking</p><span class="schedule-tag break">Break</span>
					</div>
				</div>
				<div class="schedule-item reveal">
					<div class="schedule-time">09:00 - 10:30</div>
					<div class="schedule-content">
						<h3>Plenary: Transplant Immunology</h3>
						<p>Dr. Hans Mueller - Charité Berlin, Germany</p><span class="schedule-tag keynote">Keynote</span>
					</div>
				</div>
				<div class="schedule-item reveal">
					<div class="schedule-time">10:30 - 12:00</div>
					<div class="schedule-content">
						<h3>Parallel Sessions: Dialysis & ICU Nephrology</h3>
						<p>Multiple tracks available</p><span class="schedule-tag session">Session</span>
					</div>
				</div>
				<div class="schedule-item reveal">
					<div class="schedule-time">12:00 - 13:30</div>
					<div class="schedule-content">
						<h3>Lunch & Industry Symposia</h3>
						<p>Sponsored sessions by pharmaceutical partners</p><span class="schedule-tag break">Break</span>
					</div>
				</div>
				<div class="schedule-item reveal">
					<div class="schedule-time">13:30 - 15:30</div>
					<div class="schedule-content">
						<h3>Workshop: Kidney Biopsy Techniques</h3>
						<p>Expert-led hands-on session</p><span class="schedule-tag workshop">Workshop</span>
					</div>
				</div>
				<div class="schedule-item reveal">
					<div class="schedule-time">15:30 - 17:00</div>
					<div class="schedule-content">
						<h3>Panel Discussion: AI in Nephrology</h3>
						<p>Future of diagnostic and treatment technologies</p><span class="schedule-tag session">Session</span>
					</div>
				</div>
				<div class="schedule-item reveal">
					<div class="schedule-time">17:00 - 18:30</div>
					<div class="schedule-content">
						<h3>Poster Session & Networking</h3>
						<p>Interactive poster presentations</p><span class="schedule-tag session">Session</span>
					</div>
				</div>
			</div>

			<div id="day3" class="schedule-grid" style="display:none">
				<div class="schedule-item reveal">
					<div class="schedule-time">08:30 - 09:00</div>
					<div class="schedule-content">
						<h3>Morning Coffee</h3>
						<p>Networking</p><span class="schedule-tag break">Break</span>
					</div>
				</div>
				<div class="schedule-item reveal">
					<div class="schedule-time">09:00 - 10:30</div>
					<div class="schedule-content">
						<h3>Plenary: Glomerular Diseases</h3>
						<p>Dr. Sarah Thompson - Oxford, UK</p><span class="schedule-tag keynote">Keynote</span>
					</div>
				</div>
				<div class="schedule-item reveal">
					<div class="schedule-time">10:30 - 12:00</div>
					<div class="schedule-content">
						<h3>Symposium: Pediatric Nephrology</h3>
						<p>Updates on childhood kidney diseases</p><span class="schedule-tag session">Session</span>
					</div>
				</div>
				<div class="schedule-item reveal">
					<div class="schedule-time">12:00 - 13:30</div>
					<div class="schedule-content">
						<h3>Lunch & Awards Ceremony</h3>
						<p>Best paper and poster awards</p><span class="schedule-tag break">Break</span>
					</div>
				</div>
				<div class="schedule-item reveal">
					<div class="schedule-time">13:30 - 15:30</div>
					<div class="schedule-content">
						<h3>Workshop: Peritoneal Dialysis</h3>
						<p>Hands-on PD training</p><span class="schedule-tag workshop">Workshop</span>
					</div>
				</div>
				<div class="schedule-item reveal">
					<div class="schedule-time">15:30 - 17:00</div>
					<div class="schedule-content">
						<h3>ISN General Body Meeting</h3>
						<p>Society updates and elections</p><span class="schedule-tag session">Session</span>
					</div>
				</div>
				<div class="schedule-item reveal">
					<div class="schedule-time">19:00 - 23:00</div>
					<div class="schedule-content">
						<h3>Gala Dinner</h3>
						<p>Grand finale dinner with entertainment</p><span class="schedule-tag break">Social</span>
					</div>
				</div>
			</div>

			<div id="day4" class="schedule-grid" style="display:none">
				<div class="schedule-item reveal">
					<div class="schedule-time">08:30 - 09:00</div>
					<div class="schedule-content">
						<h3>Morning Coffee</h3>
						<p>Final networking opportunity</p><span class="schedule-tag break">Break</span>
					</div>
				</div>
				<div class="schedule-item reveal">
					<div class="schedule-time">09:00 - 10:30</div>
					<div class="schedule-content">
						<h3>Plenary: Hypertension & Kidney</h3>
						<p>Dr. Yuki Tanaka - Tokyo, Japan</p><span class="schedule-tag keynote">Keynote</span>
					</div>
				</div>
				<div class="schedule-item reveal">
					<div class="schedule-time">10:30 - 12:00</div>
					<div class="schedule-content">
						<h3>Case Discussions</h3>
						<p>Complex case presentations</p><span class="schedule-tag session">Session</span>
					</div>
				</div>
				<div class="schedule-item reveal">
					<div class="schedule-time">12:00 - 13:30</div>
					<div class="schedule-content">
						<h3>Lunch & Closing Ceremony</h3>
						<p>Valedictory function and ISNCON 2027 announcement</p><span class="schedule-tag break">Break</span>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="highlights">
		<div class="section-bg">
			<svg class="section-kidney section-kidney-1" viewBox="0 0 200 200">
				<circle cx="100" cy="100" r="80" stroke="#1a2a6c" stroke-width="1" fill="none" stroke-dasharray="4 8" />
			</svg>
		</div>
		<div class="container">
			<div class="section-header reveal">
				<div class="section-label">What to Expect</div>
				<h2 class="section-title">Conference Highlights</h2>
				<div class="section-divider"></div>
			</div>
			<div class="highlights-grid">
				<div class="highlight-card reveal">
					<div class="highlight-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
							<path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5" />
						</svg></div>
					<h3>100+ Scientific Sessions</h3>
					<p>Plenary lectures, symposia, workshops, and poster presentations</p>
				</div>
				<div class="highlight-card reveal" style="transition-delay:0.1s">
					<div class="highlight-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
							<path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
							<circle cx="9" cy="7" r="4" />
							<path d="M23 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75" />
						</svg></div>
					<h3>Networking</h3>
					<p>Connect with 2000+ nephrology professionals from 50+ countries</p>
				</div>
				<div class="highlight-card reveal" style="transition-delay:0.2s">
					<div class="highlight-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
							<path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />
							<polyline points="22 4 12 14.01 9 11.01" />
						</svg></div>
					<h3>CME Credits</h3>
					<p>Earn continuing medical education credits for participation</p>
				</div>
			</div>
		</div>
	</section>

<?php include 'footer.php'; ?>
