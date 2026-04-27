@extends('layouts.app')

@section('title', 'Isaiah David O. — Portfolio & Resume')
@section('description', 'Isaiah David Oghenefejiro — Software Engineer, ML/AI & Web3 Specialist. Portfolio, projects, clients and hire me contact.')

@section('content')
<section class="hero">
  <div>
    <div class="eyebrow reveal" style="animation-delay:.05s">Hi, I'm Isaiah</div>
    <h1 class="reveal" style="animation-delay:.12s">I build scalable AI & Web3 products — engineering for production, privacy, and impact.</h1>
    <p class="lead reveal" style="animation-delay:.18s">Engineer & founder experienced in delivering ML systems, blockchain integrations, and secure cloud infrastructure for startups and enterprises. Currently open to freelance & full-time opportunities.</p>

    <div class="cta reveal" style="animation-delay:.24s">
      <button class="btn" onclick="openModal('hireModal')">Hire me</button>
      <a class="btn ghost" href="{{ route('projects') }}">See projects</a>
    </div>

    <div style="margin-top:18px;display:flex;gap:10px;align-items:center;flex-wrap:wrap">
      <div class="badge small muted">Location: Lagos, NG</div>
      <div class="badge small muted">Availability: Open for hire</div>
      <div class="web3">
        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path fill="currentColor" d="M12 2L2 8l10 6 10-6-10-6z" opacity="0.9"/></svg>
        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><circle cx="12" cy="12" r="9" fill="currentColor" opacity="0.06"/><path fill="currentColor" d="M12 7v10M7 12h10"/></svg>
      </div>
    </div>

    <div style="margin-top:22px">
      <h3 style="margin:0 0 8px">Clients & Ratings</h3>
      <div style="display:flex;gap:12px;align-items:center;flex-wrap:wrap">
        <div class="stat"><div><strong>Acme FinTech</strong><div class="small muted">Payment routing</div></div><div class="stars">★★★★★</div></div>
        <div class="stat"><div><strong>GreenEnergy</strong><div class="small muted">Edge ML</div></div><div class="stars">★★★★☆</div></div>
      </div>
    </div>
  </div>

  <aside class="profile-card floaty reveal" style="animation-delay:.4s">
    <img src="{{ asset('me.jpg') }}" alt="Isaiah" style="width:100%;border-radius:10px;object-fit:cover"/>
    <div style="margin-top:12px">
      <div style="display:flex;justify-content:space-between;gap:12px">
        <div>
          <div style="font-weight:800">Isaiah David .O.</div>
          <div class="small muted">Founder • Engineer</div>
        </div>
        <div style="text-align:right">
          <div class="small muted">Rate</div>
          <div style="font-weight:800">$50–$120/hr</div>
        </div>
      </div>

      <div style="margin-top:12px;display:grid;gap:8px">
        <div class="stat"><div class="small muted">Years</div><div style="font-weight:800">8+</div></div>
        <div class="stat"><div class="small muted">Projects</div><div style="font-weight:800">34</div></div>
      </div>

      <div style="margin-top:12px;display:flex;gap:8px">
        <a class="btn ghost" href="{{ route('projects') }}">View work</a>
        <button class="btn" onclick="openModal('hireModal')">Hire me</button>
      </div>
    </div>
  </aside>
</section>

<section id="projects-preview">
  <h2 style="margin-top:26px">Selected Projects</h2>
  <div class="projects">
     <div class="project">
    <div style="display:flex;justify-content:space-between;align-items:center">
      <div>
        <h4>Fahol Engineering — Construction Company</h4>
        <div class="small muted">Corporate website showcasing projects, services, and brand identity.</div>
      </div>
      <div class="stars">★★★★★</div>
    </div>

    <div class="tags" style="margin-top:10px">
      <div class="tag">PHP</div>
      <div class="tag">MySQL</div>
      <div class="tag">JavaScript</div>
      <div class="tag">Responsive Design</div>
    </div>

    <div style="margin-top:10px;display:flex;gap:8px;align-items:center">
      <a class="btn ghost" href="#"
        onclick="openProject(event, 'Fahol Engineering Website', `
         I Designed and developed the official corporate website for Fahol Engineering, a leading construction and civil engineering firm.
          Built with PHP, MySQL, and modern JavaScript for interactivity.<br>
          Implemented responsive design for seamless experience across devices.
          Added dynamic project portfolio, services overview, and contact forms.
          Impact:
          Strengthened Fahol Engineering’s digital presence, improved client engagement, and provided a professional platform to showcase their work.
        `, 'https://faholengineering.com/')">
        Details
      </a>

      <a class="btn" href="#"
        onclick="window.open('https://faholengineering.com','_blank')">
        Live Site
      </a>
    </div>
  </div>



<div class="project">
  <div style="display:flex;justify-content:space-between;align-items:center">
    <div>
      <h4>Pelvin AI — Intelligent Assistant</h4>
      <div class="small muted">
        Cross-platform AI system for chat, retrieval, and healthcare support.
      </div>
    </div>
    <div class="stars">★★★★☆</div>
  </div>

  <div class="tags" style="margin-top:10px">
    <div class="tag">Python</div>
    <div class="tag">TensorFlow</div>
    <div class="tag">Vector DB</div>
    <div class="tag">MLOps</div>
    <div class="tag">Flutter</div>
  </div>

  <div style="margin-top:10px;display:flex;gap:8px">
    <a class="btn ghost" href="#"
      onclick="openProject(event, 'Pelvin AI', `
      I  Designed and developed Pelvin AI, an intelligent assistant capable of chat interaction, medical support, retrieval-augmented search, and contextual routing.
        Built a hybrid RAG pipeline with embeddings, vector database, and fine-tuned models.<br>
        Integrated Flutter front-end for mobile/web cross-platform access.
        Implemented MLOps workflows for training, monitoring, and scaling models.
        Impact:
        Pelvin AI improves patient interaction, enables medical knowledge access, and serves as a foundation for broader Pelvin Intelligence products.
      `, '')">
      Details
    </a>
    <a class="btn" href="#" onclick="window.open('','_blank')">Source</a>
  </div>
</div>


<div class="project">
  <div style="display:flex;justify-content:space-between;align-items:center">
    <div>
      <h4>GreenEdge — Smart Energy Platform</h4>
      <div class="small muted">
        Website + Edge ML system for energy optimization and monitoring.
      </div>
    </div>
    <div class="stars">★★★★★</div>
  </div>

  <div class="tags" style="margin-top:10px">
    <div class="tag">Rust</div>
    <div class="tag">IoT</div>
    <div class="tag">Edge</div>
    <div class="tag">Web</div>
  </div>

  <div style="margin-top:10px;display:flex;gap:8px">
    <a class="btn ghost" href="#"
      onclick="openProject(event, 'GreenEdge', `
      I  Designed and deployed GreenEdge, a smart energy optimization platform combining edge AI with IoT connectivity.
        Built the official website and integrated a real-time dashboard for monitoring energy usage.<br>
        Developed a low-latency edge inference pipeline with <em>over-the-air (OTA) updates</em> to continuously improve performance.<br>
        Optimized Rust-based microservices for efficient data collection and prediction at the edge.
        Impact:
        Helped organizations reduce power consumption and improve sustainability with modern energy intelligence tools.
      `, 'https://greenlitehost.com.ng')">
      Details
    </a>
    <a class="btn" href="#" onclick="window.open('https://greenlitehost.com.ng','_blank')">Source</a>
  </div>
</div>
</div>
  
  <div style="text-align: center; margin-top: 30px;">
    <a href="{{ route('projects') }}" class="btn">View All Projects</a>
  </div>
</section>

<footer>
  <div style="display:flex;justify-content:space-between;align-items:center">
    <div>
      <div style="font-weight:800">Isaiah David O.</div>
      <div class="small muted">© Isaiah David Oghenefejro — All rights reserved</div>
    </div>
    <div style="display:flex;gap:12px;align-items:center">
      <a class="small muted" href="{{ route('privacy') }}">Privacy</a>
      <a class="small muted" href="{{ route('terms') }}">Terms</a>
    </div>
  </div>
</footer>
@endsection