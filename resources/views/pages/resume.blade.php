@extends('layouts.app')

@section('title', 'Resume - Isaiah David O.')
@section('description', 'Isaiah David Oghenefejro resume, experience, education, and skills in software engineering, AI, and Web3.')

@section('content')
<section id="resume" class="resume">
  <div>
    <h1>Profile</h1>
    <div class="profile-summary">
      <p>I am a highly skilled Full-Stack Developer and Software Engineer with a proven track record of delivering robust, scalable, and innovative digital solutions. Over the years, I have gained extensive expertise across web development, backend engineering, Web3 blockchain integration, and SEO optimization, making me a versatile and results-driven professional.</p>
      
      <p>My core strengths include building secure, high-performance applications using both traditional and modern stacks. I am proficient in JavaScript (MERN), PHP, Python, Rust, and Laravel, with strong hands-on experience in designing and implementing clean, maintainable, and efficient code.</p>
      
      <p>I am deeply passionate about cutting-edge technologies such as AI-powered systems, blockchain/Web3 applications, and scalable SaaS platforms, and I continuously strive to push boundaries in software engineering.</p>
      
      <p>With my blend of technical expertise, problem-solving mindset, and product-driven focus, I am confident in my ability to build world-class applications that drive impact.</p>
    </div>

    <h1>Experience</h1>
    <div class="timeline">
      <div class="entry">
        <strong>Web Developer • REGENIX HMO</strong>
        <div class="small muted">2023 — Present</div>
        <ul class="responsibilities">
          <li>Designed, developed, and maintained responsive web applications using PHP, Laravel, React, and JavaScript frameworks.</li>
          <li>Built and optimized user-friendly UI/UX interfaces to improve client experience and engagement.</li>
          <li>Implemented bug fixes, security patches, and version updates to ensure smooth application performance.</li>
          <li>Collaborated with cross-functional teams to integrate APIs, automate workflows, and streamline digital processes.</li>
          <li>Contributed to SEO and performance optimization, increasing site traffic and overall user retention.</li>
        </ul>
      </div>
      
      <div class="entry">
        <strong>Data Analyst • NERO GAMES</strong>
        <div class="small muted">2022 — 2023</div>
        <ul class="responsibilities">
          <li>Collected, cleaned, and analyzed large datasets to provide insights into player behavior and product performance.</li>
          <li>Applied statistical techniques and quantitative analysis to support data-driven business decisions.</li>
          <li>Built dashboards and visualization reports that improved decision-making across teams.</li>
          <li>Conducted A/B testing and predictive modeling to enhance product development and marketing strategies.</li>
          <li>Ensured brand consistency across digital platforms by aligning analytics with design and marketing goals.</li>
        </ul>
      </div>
      
      <div class="entry">
        <strong>Data Analyst • Sefammp</strong>
        <div class="small muted">2021 — 2022</div>
        <ul class="responsibilities">
          <li>Developed and maintained data processing pipelines to extract, transform, and analyze structured and unstructured data.</li>
          <li>Conducted advanced analytics using Python, SQL, and visualization tools for actionable insights.</li>
          <li>Assisted in software development projects, including the creation of tools and prototypes using Python.</li>
          <li>Supported marketing and branding teams by monitoring consistency across channels and providing analytical reports.</li>
          <li>Enhanced operational efficiency by leveraging data-driven strategies and predictive analysis.</li>
        </ul>
      </div>
      
      <div class="entry">
        <strong>Founder • Pelvin Nero Company</strong>
        <div class="small muted">2022</div>
        <div class="small muted">Building AI and Web3 products, leading a small remote team, delivering POCs and production systems.</div>
      </div>
      
      <div class="entry">
        <strong>Senior Engineer • GlobalPay</strong>
        <div class="small muted">2019</div>
        <div class="small muted">Led payments and infra teams, improved throughput and reliability for payment services.</div>
      </div>
      
      <div class="entry">
        <strong>ML Researcher • FinLab</strong>
        <div class="small muted">2016 — 2019</div>
        <div class="small muted">Research and prototyping for time-series and forecasting models.</div>
      </div>
    </div>

    <h2 style="margin-top:18px">Education</h2>
    <div class="timeline">
      <div class="entry"><strong>BSc Computer Science</strong><div class="small muted">Ambrose Alli University</div><div class="small muted">2010 — 2014</div></div>
    </div>

    <h2 style="margin-top:18px">Skills</h2>
    <div style="display:flex;gap:8px;flex-wrap:wrap;margin-top:8px">
      <div class="tag">PHP</div><div class="tag">Laravel</div><div class="tag">Python</div><div class="tag">Rust</div><div class="tag">Go</div>
      <div class="tag">JavaScript</div><div class="tag">TypeScript</div><div class="tag">React</div><div class="tag">Next.js</div><div class="tag">Vue.js</div>
      <div class="tag">Node.js</div><div class="tag">Express.js</div><div class="tag">Django</div><div class="tag">Flask</div><div class="tag">jQuery</div>
      <div class="tag">HTML5</div><div class="tag">CSS3</div><div class="tag">Bootstrap</div><div class="tag">Tailwind CSS</div><div class="tag">SASS</div>
      <div class="tag">Solidity</div><div class="tag">Web3</div><div class="tag">Blockchain</div><div class="tag">Ethereum</div><div class="tag">Polygon</div>
      <div class="tag">Kubernetes</div><div class="tag">Docker</div><div class="tag">MLOps</div><div class="tag">MySQL</div><div class="tag">PostgreSQL</div>
      <div class="tag">MongoDB</div><div class="tag">Firebase</div><div class="tag">AWS</div><div class="tag">Google Cloud</div><div class="tag">WordPress</div>
      <div class="tag">SEO</div>
    </div>
  </div>

  <aside>
    <h2>Testimonials</h2>
    <div class="testimonials">
      <div class="testimonial"><strong>Jane — Acme</strong><div class="small muted">"Delivered beyond expectations; extremely reliable."</div><div class="stars">★★★★★</div></div>
      <div class="testimonial"><strong>Olu — GreenEnergy</strong><div class="small muted">"Great communication and technical depth."</div><div class="stars">★★★★☆</div></div>
      <div class="testimonial"><strong>Martin — Fintech</strong><div class="small muted">"Helped us scale to production quickly."</div><div class="stars">★★★★☆</div></div>
    </div>

    <h2 style="margin-top:12px">Contact</h2>
    <div class="small muted">davidoghenefejiroisaiah@gmail.com</div>
    <div style="margin-top:10px;display:flex;gap:8px"><a class="btn ghost" href="https://www.linkedin.com/in/isaiahdavidoghenefejiro">LinkedIn</a><a class="btn ghost" href="https://github.com/isaiah-david">GitHub</a></div>
    
    <div style="margin-top:20px;">
      <a href="#" class="btn" onclick="openModal('hireModal')">Hire Me</a>
    </div>
  </aside>
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

<style>


  body.light {
    --bg: #ffffff;
    --text: #111827;
    --muted: #6b7280;
    --card: #f9fafb;
    --border: #e5e7eb;
    --tag-bg: #f3f4f6;
  }

  body {
    background: var(--bg);
    color: var(--text);
    transition: background 0.3s, color 0.3s;
  }

  .resume {
    display: grid;
    grid-template-columns: 2fr 1fr;
    gap: 2rem;
    padding: 2rem;
    max-width: 1200px;
    margin: 0 auto;
  }
  
  .profile-summary p { margin-bottom: 1rem; line-height: 1.6; }

  .timeline {
    border-left: 2px solid var(--border);
    padding-left: 1.5rem;
    margin-left: 0.5rem;
  }
  
  .entry { margin-bottom: 1.5rem; position: relative; }
  .entry:before {
    content: '';
    position: absolute;
    left: -1.7rem;
    top: 0.5rem;
    width: 12px; height: 12px;
    border-radius: 50%;
    background: #3b82f6;
  }

  .responsibilities li { margin-bottom: 0.4rem; font-size: 0.9rem; color: var(--muted); }

  .tag {
    background: var(--tag-bg);
    padding: 0.4rem 0.8rem;
    border-radius: 9999px;
    font-size: 0.85rem;
    color: var(--text);
  }
  
  .testimonials { display: flex; flex-direction: column; gap: 1rem; }
  .testimonial { background: var(--card); padding: 1rem; border-radius: 0.5rem; }

  .stars { color: #f59e0b; margin-top: 0.25rem; }

  .btn {
    display: inline-block;
    padding: 0.5rem 1rem;
    background: #3b82f6;
    color: #fff;
    border-radius: 0.375rem;
    text-decoration: none;
    font-weight: 500;
  }
  .btn.ghost {
    background: transparent;
    border: 1px solid var(--border);
    color: var(--text);
  }

  .small.muted { font-size: 0.875rem; color: var(--muted); margin-top: 0.25rem; }

  footer {
    padding: 2rem;
    border-top: 1px solid var(--border);
    margin-top: 3rem;
  }
  
  @media (max-width: 768px) {
    .resume { grid-template-columns: 1fr; }
  }
</style>
@endsection
