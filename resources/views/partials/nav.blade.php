<header>
  <div class="brand">
    <div class="avatar">ID</div>
    <div>
      <div class="name">Isaiah David Oghenefejiro</div>
      <div class="small muted">Software Engineer • ML/AI • Web3 • Cloud</div>
    </div>
  </div>
  
  <nav class="desktop-nav">
    <a href="{{ route('home') }}">Home</a>
    <a href="{{ route('projects') }}">Projects</a>
    <a href="{{ route('resume') }}">Resume</a>
    <a href="{{ route('hire') }}" class="btn ghost">Hire Me</a>
    <button class="btn" id="themeToggle">
      <i class="fas fa-moon" id="themeIcon"></i>
    </button>
  </nav>
  
  <button class="mobile-nav-toggle" aria-label="Toggle navigation" aria-expanded="false">
    <span></span>
    <span></span>
    <span></span>
  </button>
  
  <nav class="mobile-nav" aria-hidden="true">
    <a href="{{ route('home') }}" onclick="closeMobileNav()">Home</a>
    <a href="{{ route('projects') }}" onclick="closeMobileNav()">Projects</a>
    <a href="{{ route('resume') }}" onclick="closeMobileNav()">Resume</a>
    <a href="{{ route('hire') }}" class="btn" onclick="closeMobileNav()">Hire Me</a>
    <button class="btn" onclick="toggleTheme(); closeMobileNav();">
      <i class="fas fa-moon" id="mobileThemeIcon"></i> Toggle Theme
    </button>
  </nav>
</header>