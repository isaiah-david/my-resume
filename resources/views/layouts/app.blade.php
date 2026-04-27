<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>@yield('title', 'Isaiah David O. — Portfolio & Resume')</title>
  <meta name="description" content="@yield('description', 'Isaiah David Oghenefejro — Software Engineer, ML/AI & Web3 Specialist. Portfolio, projects, clients and hire me contact.')" />

 <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">


  <!-- Fonts & Icons -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&family=Space+Grotesk:wght@400;600&display=swap" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

  <style>
    :root {
      --bg: #0b1220;
      --card: #071029;
      --muted: #9aa4b2;
      --accent: #7c5cff;
      --accent-2: #6ee7b7;
      --glass: rgba(255,255,255,0.03);
      --radius: 14px;
      --text: #e6eef6;
      --shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
      --transition: all 0.3s ease;
    }

    :root.light {
      --bg: #f6f8fb;
      --card: #ffffff;
      --muted: #475569;
      --text: #1a202c;
      --glass: rgba(0, 0, 0, 0.03);
      --shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
      color-scheme: light;
    }

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    html, body {
      height: 100%;
      transition: var(--transition);
    }

    body {
      font-family: 'Inter', system-ui, Segoe UI, Roboto, sans-serif;
      background: radial-gradient(900px 450px at 10% 10%, rgba(124,92,255,0.04), transparent), var(--bg);
      color: var(--text);
      -webkit-font-smoothing: antialiased;
      line-height: 1.6;
    }

    .wrap {
      max-width: 1100px;
      margin: 0 auto;
      padding: 34px 20px;
    }

    /* Header & Navigation */
    header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 12px;
      position: relative;
      padding-bottom: 20px;
    }

    .brand {
      display: flex;
      align-items: center;
      gap: 12px;
      z-index: 1001;
    }

    .avatar {
      width: 68px;
      height: 68px;
      border-radius: 14px;
      background: linear-gradient(135deg, var(--accent), var(--accent-2));
      display: grid;
      place-items: center;
      font-weight: 800;
      color: #051019;
    }

    .name {
      font-weight: 800;
      font-size: 20px;
    }

    .small.muted {
      font-size: 0.875rem;
      color: var(--muted);
    }

    /* Desktop Navigation */
    .desktop-nav {
      display: flex;
      align-items: center;
    }

    .desktop-nav a {
      color: var(--muted);
      text-decoration: none;
      margin-left: 14px;
      font-weight: 600;
      transition: var(--transition);
    }

    .desktop-nav a:hover {
      color: var(--accent);
    }

    /* Mobile Navigation */
    .mobile-nav-toggle {
      display: none;
      background: none;
      border: none;
      cursor: pointer;
      width: 30px;
      height: 30px;
      flex-direction: column;
      justify-content: space-around;
      padding: 0;
      z-index: 1001;
    }

    .mobile-nav-toggle span {
      width: 100%;
      height: 2px;
      background-color: var(--text);
      border-radius: 2px;
      transition: var(--transition);
      transform-origin: center;
    }

    .mobile-nav {
      position: fixed;
      inset: 0;
      background: var(--card);
      z-index: 1000;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      gap: 2rem;
      opacity: 0;
      visibility: hidden;
      transition: var(--transition);
      padding: 80px 20px 40px;
    }

    .mobile-nav.active {
      opacity: 1;
      visibility: visible;
    }

    .mobile-nav a {
      color: var(--text);
      text-decoration: none;
      font-size: 1.5rem;
      font-weight: 600;
      padding: 10px 20px;
      border-radius: var(--radius);
      transition: var(--transition);
    }

    .mobile-nav a:hover {
      background: var(--glass);
      color: var(--accent);
    }

    .mobile-nav .btn {
      margin-top: 20px;
    }

    /* Buttons */
    .btn {
      background: linear-gradient(90deg, var(--accent), var(--accent-2));
      padding: 10px 14px;
      border-radius: 12px;
      color: #051019;
      font-weight: 700;
      border: none;
      cursor: pointer;
      transition: var(--transition);
      display: inline-block;
      text-align: center;
      text-decoration: none;
    }

    .btn:hover {
      opacity: 0.9;
      transform: translateY(-2px);
    }

    .btn.ghost {
      background: transparent;
      border: 1px solid rgba(255,255,255,0.05);
      color: var(--muted);
      font-weight: 700;
    }

    .btn.ghost:hover {
      border-color: var(--accent);
      color: var(--accent);
    }

    :root.light .btn.ghost {
      border: 1px solid rgba(0,0,0,0.1);
    }

    /* Hero Section */
    .hero {
      display: grid;
      grid-template-columns: 1fr 360px;
      gap: 22px;
      align-items: start;
      margin-top: 28px;
    }

    .eyebrow {
      color: var(--accent);
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 1px;
      font-size: 0.875rem;
    }

    h1 {
      font-size: 32px;
      margin: 8px 0;
      line-height: 1.3;
    }

    h2, h3 {
      margin-bottom: 1rem;
      color: var(--text);
    }

    p.lead {
      color: var(--muted);
      margin: 0 0 18px;
      font-size: 1.1rem;
    }

    .cta {
      display: flex;
      gap: 10px;
      flex-wrap: wrap;
    }

    .profile-card {
      background: linear-gradient(180deg, rgba(255,255,255,0.02), transparent);
      padding: 18px;
      border-radius: 14px;
      border: 1px solid rgba(255,255,255,0.03);
      box-shadow: var(--shadow);
    }

    .stat {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 8px 10px;
      background: var(--glass);
      border-radius: 10px;
      margin-bottom: 8px;
    }

    /* Projects */
    .projects {
      margin-top: 24px;
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 16px;
    }

    .project {
      background: linear-gradient(180deg, rgba(255,255,255,0.01), transparent);
      padding: 12px;
      border-radius: 12px;
      border: 1px solid rgba(255,255,255,0.03);
      box-shadow: var(--shadow);
      transition: var(--transition);
    }

    .project:hover {
      transform: translateY(-5px);
    }

    .project h4 {
      margin: 8px 0;
    }

    .tags {
      display: flex;
      gap: 8px;
      flex-wrap: wrap;
      margin-top: 10px;
    }

    .tag {
      padding: 6px 8px;
      border-radius: 8px;
      background: var(--glass);
      font-size: 13px;
    }

    /* Ratings */
    .stars {
      color: #ffd166;
    }

    /* Skills & Resume */
    section.resume {
      margin-top: 28px;
      display: grid;
      grid-template-columns: 1fr 380px;
      gap: 18px;
    }

    .timeline {
      display: grid;
      gap: 12px;
    }

    .entry {
      background: var(--card);
      padding: 12px;
      border-radius: 10px;
      border: 1px solid rgba(255,255,255,0.02);
      box-shadow: var(--shadow);
    }

    /* Testimonials */
    .testimonials {
      display: flex;
      gap: 12px;
      overflow: auto;
      padding-bottom: 6px;
    }

    .testimonial {
      min-width: 260px;
      background: var(--glass);
      padding: 12px;
      border-radius: 10px;
      box-shadow: var(--shadow);
    }

    footer {
      margin-top: 36px;
      padding: 18px;
      border-radius: 12px;
      background: linear-gradient(180deg, rgba(255,255,255,0.01), transparent);
      border: 1px solid rgba(255,255,255,0.03);
      box-shadow: var(--shadow);
    }

    /* Modal */
    .modal-backdrop {
      position: fixed;
      inset: 0;
      background: rgba(2,6,23,0.7);
      display: none;
      align-items: center;
      justify-content: center;
      padding: 18px;
      z-index: 1200;
    }

    .modal {
      background: linear-gradient(180deg, var(--card), var(--bg));
      padding: 20px;
      border-radius: 12px;
      max-width: 720px;
      width: 100%;
      border: 1px solid rgba(255,255,255,0.04);
      box-shadow: var(--shadow);
    }

    /* Web3 icons */
    .web3 {
      display: flex;
      gap: 8px;
    }

    .web3 svg {
      width: 34px;
      height: 34px;
      border-radius: 8px;
      padding: 6px;
      background: var(--glass);
    }

    /* Animations */
    .floaty {
      animation: float 6s ease-in-out infinite;
    }

    @keyframes float {
      0% { transform: translateY(0); }
      50% { transform: translateY(-6px); }
      100% { transform: translateY(0); }
    }

    .reveal {
      opacity: 0;
      transform: translateY(10px);
      animation: reveal 0.7s forwards;
    }

    @keyframes reveal {
      to { opacity: 1; transform: none; }
    }

    /* Responsive Design */
    @media (max-width: 1024px) {
      .hero {
        grid-template-columns: 1fr;
        gap: 30px;
      }
      
      .projects {
        grid-template-columns: repeat(2, 1fr);
      }
      
      section.resume {
        grid-template-columns: 1fr;
        gap: 30px;
      }
    }

    @media (max-width: 768px) {
      .desktop-nav {
        display: none;
      }
      
      .mobile-nav-toggle {
        display: flex;
      }
      
      .projects {
        grid-template-columns: 1fr;
      }
      
      .hero {
        margin-top: 20px;
      }
      
      h1 {
        font-size: 28px;
      }
      
      .profile-card {
        order: -1;
        max-width: 400px;
        margin: 0 auto;
      }
      
      .wrap {
        padding: 20px 15px;
      }
      
      .cta {
        flex-direction: column;
        align-items: stretch;
      }
      
      .btn {
        width: 100%;
        margin-bottom: 10px;
      }
    }

    @media (max-width: 480px) {
      .brand {
        flex-direction: column;
        align-items: flex-start;
        gap: 8px;
      }
      
      .avatar {
        width: 50px;
        height: 50px;
        font-size: 0.9rem;
      }
      
      .name {
        font-size: 18px;
      }
      
      h1 {
        font-size: 24px;
      }
      
      .testimonials {
        flex-direction: column;
      }
      
      .testimonial {
        min-width: auto;
      }
    }
  </style>
</head>
<body>
  <div class="wrap">
    @include('partials.nav')
    
    <main>
      @yield('content')
    </main>
  </div>

<!-- Modals -->
<div id="hireModal" class="modal-backdrop" onclick="closeIfBackdrop(event)">
  <div class="modal" role="dialog" aria-modal="true" aria-labelledby="hireTitle" style="position:relative">
    <div style="display:flex;justify-content:space-between;align-items:center">
      <h3 id="hireTitle">Hire Isaiah</h3>
      <button class="toggle" onclick="closeModal('hireModal')">✕</button>
    </div>
    <p class="small muted">Tell me about your project — I'll reply with a proposal and ETA.</p>

    <!-- Success Message (hidden by default) -->
    <div id="successMessage" style="display:none; padding:15px; margin-top:15px; border-radius:10px; background:#4CAF50; color:white; font-weight:bold; text-align:center;">
      ✅ Message sent! Thank you for reaching out.
    </div>

    <!-- Formspree Form -->
    <form id="hireForm" action="https://formspree.io/f/mwpnynwd" method="POST" style="margin-top:12px;display:grid;gap:10px">
      <input required name="name" placeholder="Your name" style="padding:10px;border-radius:8px;border:1px solid rgba(255,255,255,0.04);background:transparent;color:inherit" />
      <input required name="email" type="email" placeholder="Email" style="padding:10px;border-radius:8px;border:1px solid rgba(255,255,255,0.04);background:transparent;color:inherit" />
      <input name="company" placeholder="Company (optional)" style="padding:10px;border-radius:8px;border:1px solid rgba(255,255,255,0.04);background:transparent;color:inherit" />
      <textarea name="brief" rows="4" placeholder="Project brief & timeline" style="padding:10px;border-radius:8px;border:1px solid rgba(255,255,255,0.04);background:transparent;color:inherit"></textarea>
      
      <div style="display:flex;gap:8px;align-items:center">
        <button class="btn" type="submit">Request proposal</button>
        <button type="button" class="btn ghost" onclick="closeModal('hireModal')">Cancel</button>
      </div>
    </form>
  </div>
</div>



  <div id="projectModal" class="modal-backdrop" onclick="closeIfBackdrop(event)">
    <div class="modal">
      <div style="display:flex;justify-content:space-between;align-items:center"><h3 id="projectTitle">Project</h3><button class="toggle" onclick="closeModal('projectModal')">✕</button></div>
      <div id="projectBody" class="small muted">Project details will appear here.</div>
      <div style="margin-top:12px;display:flex;gap:8px"><a id="projectSource" class="btn ghost" href="#" target="_blank">Source</a><button class="btn" onclick="closeModal('projectModal')">Close</button></div>
    </div>
  </div>

  <script>

 const form = document.getElementById('hireForm');
  const successMessage = document.getElementById('successMessage');

  form.addEventListener('submit', function(e) {
    e.preventDefault();

    const formData = new FormData(form);

    fetch(form.action, {
      method: 'POST',
      body: formData,
      headers: { 'Accept': 'application/json' }
    })
    .then(response => {
      if (response.ok) {
        // Show success message
        successMessage.style.display = 'block';
        form.style.display = 'none';

        // Optionally, close modal after 3s
        setTimeout(() => {
          closeModal('hireModal');
          form.reset();
          form.style.display = 'grid';
          successMessage.style.display = 'none';
        }, 3000);
      } else {
        alert('Oops! There was a problem submitting your form.');
      }
    })
    .catch(error => {
      alert('Oops! There was a problem submitting your form.');
      console.error(error);
    });
  });










    // Theme functionality
    function toggleTheme() {
      const isLight = document.documentElement.classList.toggle('light');
      const themeIcon = document.getElementById('themeIcon');
      const mobileThemeIcon = document.getElementById('mobileThemeIcon');
      
      if (isLight) {
        themeIcon.className = 'fas fa-sun';
        mobileThemeIcon.className = 'fas fa-sun';
        localStorage.setItem('theme', 'light');
      } else {
        themeIcon.className = 'fas fa-moon';
        mobileThemeIcon.className = 'fas fa-moon';
        localStorage.setItem('theme', 'dark');
      }
    }
    
    // Check for saved theme preference or respect OS preference
    function initTheme() {
      const savedTheme = localStorage.getItem('theme');
      const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
      
      if (savedTheme === 'light' || (!savedTheme && !prefersDark)) {
        document.documentElement.classList.add('light');
        document.getElementById('themeIcon').className = 'fas fa-sun';
        document.getElementById('mobileThemeIcon').className = 'fas fa-sun';
      } else {
        document.getElementById('themeIcon').className = 'fas fa-moon';
        document.getElementById('mobileThemeIcon').className = 'fas fa-moon';
      }
    }
    
    // Mobile navigation
    function toggleMobileNav() {
      const nav = document.querySelector('.mobile-nav');
      const toggle = document.querySelector('.mobile-nav-toggle');
      const isExpanded = toggle.getAttribute('aria-expanded') === 'true';
      
      nav.classList.toggle('active');
      toggle.setAttribute('aria-expanded', !isExpanded);
      document.body.style.overflow = nav.classList.contains('active') ? 'hidden' : 'auto';
    }
    
    function closeMobileNav() {
      document.querySelector('.mobile-nav').classList.remove('active');
      document.querySelector('.mobile-nav-toggle').setAttribute('aria-expanded', 'false');
      document.body.style.overflow = 'auto';
    }
    
    // Modal functions
    function openModal(id) {
      document.getElementById(id).style.display = 'flex';
      document.body.style.overflow = 'hidden';
    }
    
    function closeModal(id) {
      document.getElementById(id).style.display = 'none';
      document.body.style.overflow = 'auto';
    }
    
    function closeIfBackdrop(e) {
      if (e.target.classList.contains('modal-backdrop')) {
        e.target.style.display = 'none';
        document.body.style.overflow = 'auto';
      }
    }
    
    function handleHire(e) {
      e.preventDefault();
      const f = new FormData(e.target);
      console.log('hire', Object.fromEntries(f));
      alert('Thanks — proposal request received (demo).');
      closeModal('hireModal');
    }
    
    function openProject(e, title, desc, src) {
      e.preventDefault();
      openModal('projectModal');
      document.getElementById('projectTitle').innerText = title;
      document.getElementById('projectBody').innerText = desc;
      document.getElementById('projectSource').href = src;
    }
    
    // Initialize
    document.addEventListener('DOMContentLoaded', function() {
      initTheme();
      
      // Set up event listeners
      document.getElementById('themeToggle').addEventListener('click', toggleTheme);
      document.querySelector('.mobile-nav-toggle').addEventListener('click', toggleMobileNav);
      
      // Accessibility: escape to close modals and mobile nav
      document.addEventListener('keydown', (ev) => {
        if (ev.key === 'Escape') {
          document.querySelectorAll('.modal-backdrop').forEach(m => {
            m.style.display = 'none';
          });
          closeMobileNav();
          document.body.style.overflow = 'auto';
        }
      });
      
      // Close mobile nav when clicking outside
      document.querySelector('.mobile-nav').addEventListener('click', (e) => {
        if (e.target === document.querySelector('.mobile-nav')) {
          closeMobileNav();
        }
      });
    });
  </script>
</body>
</html>