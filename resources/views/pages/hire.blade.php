@extends('layouts.app')

@section('title', 'Hire Me - Isaiah David O.')
@section('description', 'Hire Isaiah David Oghenefejiro for your next AI, Web3, or software engineering project.')

@section('content')
<section class="hero">
  <div>
    <div class="eyebrow">Let's Work Together</div>
    <h1>Ready to bring your project to life?</h1>
    <p class="lead">I specialize in building scalable AI & Web3 products with a focus on production readiness, privacy, and impact.</p>

    <div style="margin-top:22px">
      <h3 style="margin:0 0 8px">What I Offer</h3>
      <div style="display:grid;gap:12px;">
        <div class="stat"><div><strong>AI/ML Solutions</strong><div class="small muted">Machine learning models, data pipelines, and MLOps</div></div></div>
        <div class="stat"><div><strong>Web3 Development</strong><div class="small muted">Smart contracts, dApps, and blockchain integrations</div></div></div>
        <div class="stat"><div><strong>Cloud Infrastructure</strong><div class="small muted">Scalable, secure cloud architecture and DevOps</div></div></div>
        <div class="stat"><div><strong>Full-Stack Development</strong><div class="small muted">End-to-end web application development</div></div></div>
      </div>
    </div>
  </div>

  <aside class="profile-card floaty">
    <div style="padding:20px;">
      <div style="text-align:center; margin-bottom:20px;">
        <div style="font-weight:800; font-size:24px;">Isaiah D. O.</div>
        <div class="small muted">Founder • Senior Engineer</div>
      </div>
      
      <div style="display:grid;gap:12px;margin-bottom:20px;">
        <div class="stat"><div class="small muted">Hourly Rate</div><div style="font-weight:800">$50–$120/hr</div></div>
        <div class="stat"><div class="small muted">Experience</div><div style="font-weight:800">8+ Years</div></div>
        <div class="stat"><div class="small muted">Projects Completed</div><div style="font-weight:800">34+</div></div>
        <div class="stat"><div class="small muted">Availability</div><div style="font-weight:800;color:var(--accent);">Open for new projects</div></div>
      </div>
      
      <button class="btn" style="width:100%;" onclick="openModal('hireModal')">Get in Touch</button>
    </div>
  </aside>
</section>

<section style="margin-top:40px;">
  <h2>Client Testimonials</h2>
  <div class="testimonials">
    <div class="testimonial"><strong>Jane — Acme FinTech</strong><div class="small muted">"Isaiah delivered beyond our expectations; extremely reliable and technically proficient. The payment system he built handles our high-throughput needs perfectly."</div><div class="stars">★★★★★</div></div>
    <div class="testimonial"><strong>Olu — GreenEnergy</strong><div class="small muted">"Great communication and technical depth. Isaiah understood our edge computing requirements and delivered a robust solution ahead of schedule."</div><div class="stars">★★★★☆</div></div>
    <div class="testimonial"><strong>Martin — Fintech Startup</strong><div class="small muted">"Helped us scale to production quickly. His expertise in cloud infrastructure saved us months of development time."</div><div class="stars">★★★★☆</div></div>
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