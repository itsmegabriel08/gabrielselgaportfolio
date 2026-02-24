<?php 
$projects = [

["MISLAR Science Learning AR Mobile Application",
"Augmented Reality science learning app with immersive 3D interaction.",
"images/mislar.jpg"],

["STEM Solar Powered Monitoring System",
"IoT-based solar monitoring and analytics system.",
"images/stem.jpg"],

["Resort Booking Management System",
"Reservation system with admin scheduling and booking tools.",
"images/resort.jpg"],

["Travel Booking System",
"Full booking platform with dashboard and payments.",
"images/travel.jpg"],

["AgriMarket",
"Agricultural eCommerce marketplace.",
"images/agrimarket.jpg"],

["ClickBuddy",
"Study partner matching platform.",
"images/clickbuddy.jpg"],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Gabriel Selga Portfolio</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

<style>
:root{
--bg:#f4f6f8;
--text:#111;
--card:#ffffff;
--input:#ffffff;
--border:#dee2e6;
--shadow:rgba(0,0,0,.1);
}
.dark-mode{
--bg:#0f172a;
--text:#e5e7eb;
--card:#1e293b;
--input:#0f172a;
--border:#334155;
--shadow:rgba(0,0,0,.6);
}
body{background:var(--bg);color:var(--text);font-family:system-ui;transition:.3s;}

.animate{opacity:0;transform:translateY(20px);transition:.6s;}
.animate.visible{opacity:1;transform:none;}

.hero{
min-height:100vh;
background:linear-gradient(120deg,#0f2027,#203a43,#2c5364);
color:white;
display:flex;align-items:center;text-align:center;
}

.profile-img{
width:180px;height:180px;object-fit:cover;
border-radius:50%;border:5px solid white;
box-shadow:0 10px 30px rgba(0,0,0,.4);
}

.glass{
background:var(--card);
border-radius:16px;
box-shadow:0 10px 35px var(--shadow);
padding:40px;margin-bottom:40px;
}

.project-card{
background:var(--card);
border:none;border-radius:16px;
overflow:hidden;
box-shadow:0 8px 25px var(--shadow);
transition:.3s;
}
.project-card:hover{transform:translateY(-10px);}

.contact-box{
background:var(--card);
padding:35px;border-radius:16px;
box-shadow:0 10px 30px var(--shadow);
}

footer{background:#111;color:white;}
section{padding:90px 0;}
.form-control{
background:var(--input);
color:var(--text);
border:1px solid var(--border);
}

/* STACKED FLOATING BUTTONS LEFT */
.floating-left{
position:fixed;
bottom:25px;
right:25px;
display:flex;
flex-direction:column;
gap:15px;
z-index:999;
}

.floating-left button,
.floating-left a{
width:60px;
height:60px;
border-radius:50%;
border:none;
font-size:24px;
display:flex;
align-items:center;
justify-content:center;
cursor:pointer;
box-shadow:0 10px 25px rgba(0,0,0,.3);
transition:.3s;
}

.floating-left a{
background:#0d6efd;
color:white;
text-decoration:none;
}

.floating-left a:hover{
transform:scale(1.1) rotate(-10deg);
}

.floating-left button{
background:#111;
color:white;
}

.floating-left button:hover{
transform:scale(1.1) rotate(15deg);
}

.dark-mode .floating-left button{
background:#e5e7eb;
color:#111;
}

.dark-mode .floating-left a{
background:#2563eb;
color:white;
}

.dark-mode body,
.dark-mode .glass,
.dark-mode .project-card,
.dark-mode .contact-box{
color:white !important;
}


/* Floating Thin Sidebar */
.floating-sidebar {
  position: fixed;
  top: 30%;
  left: 20px; /* space from the left */
  transform: translateY(-50%);
  display: flex;
  flex-direction: column;
  gap: 15px;
  background: var(--card);
  padding: 12px 8px;
  border-radius: 12px;
  box-shadow: 0 8px 25px rgba(0,0,0,.2);
  z-index: 999;
}

.floating-sidebar a {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 44px;
  height: 44px;
  color: var(--text);
  font-size: 20px;
  background: transparent;
  border-radius: 8px;
  transition: 0.25s;
  text-decoration: none;
}

.floating-sidebar a:hover {
  background: #2c525f;
  color: white;
  transform: translateX(4px);
}

/* Dark mode */
.dark-mode .floating-sidebar {
  background: var(--card);
}
.dark-mode .floating-sidebar a:hover {
  background: #3a7081;
  color: white;
}

/* MENU TOGGLE BUTTON */
.menu-toggle {
  position: fixed;
  top: 20px;
  right: 20px;
  width: 50px;
  height: 50px;
  background: var(--card);
  border: none;
  border-radius: 50%;
  box-shadow: 0 5px 20px rgba(0,0,0,.2);
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  z-index: 1001;
  transition: 0.3s;
}

.menu-toggle i {
  font-size: 24px;
  color: var(--text);
}

.menu-toggle:hover {
  background: #89a2aa;
  color: white;
}

/* FLOATING RIGHT BUTTONS */
.floating-right {
  position: fixed;
  top: 90px;
  right: 20px;
  display: flex;
  flex-direction: column;
  gap: 15px;
  z-index: 999;
}

.floating-right a,
.floating-right button {
  width: 50px;
  height: 50px;
  border-radius: 50%;
  border: none;
  font-size: 20px;
  display: flex;
  align-items: center;
  justify-content: center;
  background: #0d6efd;
  color: white;
  box-shadow: 0 8px 20px rgba(0,0,0,.3);
  cursor: pointer;
  transition: 0.25s;
}

.floating-right a:hover,
.floating-right button:hover {
  transform: scale(1.1) rotate(-10deg);
}

/* Sidebar Hidden */
.floating-sidebar.hide {
  transform: translate(-100%, -50%);
  opacity: 0;
}
</style>
</head>

<body>

<!-- SIDE NAV (Floating Thin Vertical) -->
<div class="floating-sidebar">
  <a href="#home" title="Home"><i class="bi bi-house-door-fill"></i></a>
  <a href="#about" title="About"><i class="bi bi-person-fill"></i></a>
  <a href="#skills" title="Skills"><i class="bi bi-lightning-fill"></i></a>
  <a href="#projects" title="Projects"><i class="bi bi-kanban-fill"></i></a>
</div>


<!-- HERO -->
<section id="home" class="hero animate">
<div class="container">
<img src="images/profile.jpg" class="profile-img mb-4">
<h1 class="fw-bold display-5">Gabriel Selga</h1>
<p class="lead mb-4">Full-Stack Developer • UI Designer • System Builder</p>
<a href="#projects" class="btn btn-light btn-lg px-4">View My Work</a>
</div>
</section>

<!-- ABOUT -->
<section id="about" class="animate">
<div class="container">
<div class="glass">
<h2 class="fw-bold mb-3">About Me</h2>
<p>I develop modern web applications, booking systems, and digital solutions combining technical engineering and visual design.</p>
</div>
</div>
</section>

<!-- SKILLS -->
<section id="skills" class="animate">
<div class="container">
<div class="glass">
<h2 class="fw-bold mb-4">Skills</h2>
<label>PHP / MySQL</label>
<div class="progress mb-3"><div class="progress-bar" style="width:90%"></div></div>
<label>Bootstrap / UI Design</label>
<div class="progress mb-3"><div class="progress-bar bg-success" style="width:85%"></div></div>
<label>JavaScript</label>
<div class="progress mb-3"><div class="progress-bar bg-warning" style="width:75%"></div></div>
<label>System Architecture</label>
<div class="progress"><div class="progress-bar bg-danger" style="width:80%"></div></div>
</div>
</div>
</section>

<!-- PROJECTS -->
<section id="projects">
<div class="container">
<h2 class="text-center fw-bold mb-5 animate">Projects</h2>
<div class="row">
<?php foreach($projects as $p){ ?>
<div class="col-md-4 mb-4 animate">
<div class="card project-card">
<img src="<?php echo $p[2]; ?>">
<div class="card-body">
<h5 class="fw-bold"><?php echo $p[0]; ?></h5>
<p><?php echo $p[1]; ?></p>
</div>
</div>
</div>
<?php } ?>
</div>
</div>
</section>

<footer class="text-center p-4 animate">
© <?php echo date("Y"); ?> Gabriel Selga
</footer>

<!-- FLOAT BUTTONS -->

<!-- MENU BUTTON (Top Right) -->
<button id="menuToggle" class="menu-toggle" title="Toggle Menu">
  <i class="bi bi-list"></i>
</button>


<div class="floating-left">
<a href="#contact"><i class="bi bi-envelope-fill"></i></a>
<button onclick="toggleDark()" id="darkBtn">
<i class="bi bi-moon-fill" id="themeIcon"></i>
</button>
<button onclick="window.scrollTo({top:0,behavior:'smooth'})">
<i class="bi bi-arrow-up"></i>
</button>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>

// Sidebar toggle
const sidebar = document.querySelector('.floating-sidebar');
const menuToggle = document.getElementById('menuToggle');

menuToggle.addEventListener('click', () => {
  sidebar.classList.toggle('hide');
});

// DARK MODE
const icon=document.getElementById("themeIcon");
if(localStorage.getItem("theme")==="dark"){
document.body.classList.add("dark-mode");
icon.className="bi bi-sun-fill";
}
function toggleDark(){
document.body.classList.toggle("dark-mode");
localStorage.setItem("theme",
document.body.classList.contains("dark-mode")?"dark":"light");
icon.className=document.body.classList.contains("dark-mode")
?"bi bi-sun-fill":"bi bi-moon-fill";
}

// SCROLL ANIMATION
const observer=new IntersectionObserver(entries=>{
entries.forEach(entry=>{
if(entry.isIntersecting){
entry.target.classList.add('visible');
observer.unobserve(entry.target);
}});
},{threshold:0.2});
document.querySelectorAll('.animate').forEach(el=>observer.observe(el));
</script>

</body>
</html>
