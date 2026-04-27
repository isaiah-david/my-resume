@extends('layouts.app')

@section('title', 'Projects - Isaiah David O.')
@section('description', 'Explore Isaiah David Oghenefejro portfolio projects in AI, Web3, and software engineering.')

@section('content')
<section id="projects">
  <h1>Projects</h1>
  <p class="lead">A selection of my work in AI, Web3, and software engineering.</p>
  
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
          Designed and developed the official corporate website for Fahol Engineering, a leading construction and civil engineering firm.
          Built with PHP, MySQL, and modern JavaScript for interactivity.<br>
          Implemented responsive design for seamless experience across devices.
          Added dynamic project portfolio, services overview, and contact forms.
          <strong>Impact:</strong><br>
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
        Designed and developed <strong>Pelvin AI</strong>, an intelligent assistant capable of chat interaction, medical support, retrieval-augmented search, and contextual routing.
        Built a hybrid RAG pipeline with embeddings, vector database, and fine-tuned models.<br>
        Integrated Flutter front-end for mobile/web cross-platform access.<br>
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
       I Designed and deployed GreenEdge, a smart energy optimization platform combining edge AI with IoT connectivity.
        Built the official website and integrated a real-time dashboard for monitoring energy usage.
        Developed a low-latency edge inference pipeline with <em>over-the-air (OTA) updates</em> to continuously improve performance.
        Optimized Rust-based microservices for efficient data collection and prediction at the edge.
        Impact:
        Helped organizations reduce power consumption and improve sustainability with modern energy intelligence tools.
      `, 'https://greenlitehost.com.ng')">
      Details
    </a>
    <a class="btn" href="#" onclick="window.open('https://greenlitehost.com.ng','_blank')">Source</a>
  </div>
</div>


<div class="project">
  <h4>Pelvin Shield Lite — Real-time Security Scanner</h4>
  <div class="small muted">Desktop app for cybersecurity + Web3 protection.</div>
  <div style="margin-top:10px" class="stars">★★★★☆</div>

  <div style="margin-top:10px">
    <div class="tags">
      <div class="tag">Electron</div>
      <div class="tag">Node.js</div>
      <div class="tag">Web3</div>
      <div class="tag">Cybersecurity</div>
    </div>
  </div>

  <div style="margin-top:10px;display:flex;gap:8px">
    <a class="btn ghost" href="#"
      onclick="openProject(event, 'Pelvin Shield Lite', `
       I Designed and developed a desktop security application capable of scanning files, monitoring internet connections, and providing live threat detection logs.
        Integrated real-time system updates using WebSockets for instant alerts and activity tracking.
        Implemented blockchain/Web3-specific security features to detect suspicious smart contracts and wallet interactions.
        Built a modern Electron-based UI with live status indicators, secure connection tracking, and threat severity visualization.
        Packaged the application with electron-builder for cross-platform distribution (Windows/Mac/Linux).
        Impact:
        Enhanced user security against both traditional cyber threats and emerging blockchain risks, making Pelvin Shield Lite an innovative tool at the intersection of cybersecurity and Web3.
      `, 'https://www.linkedin.com/posts/pelvinnero_cybersecurity-web3-ai-activity-7376249189455794176-XaCM?utm_source=share&utm_medium=member_desktop&rcm=ACoAAEd3AVABYnuaj_ifhcHlsxXhYe3frd-ePaM')">
      Details
    </a>

    <a class="btn" href="#"
      onclick="window.open('https://www.linkedin.com/posts/pelvinnero_cybersecurity-web3-ai-activity-7376249189455794176-XaCM?utm_source=share&utm_medium=member_desktop&rcm=ACoAAEd3AVABYnuaj_ifhcHlsxXhYe3frd-ePaM','_blank')">
      Source
    </a>
  </div>
</div>


<div class="project">
  <h4>WiseGlobalPay — Fintech Payments Platform</h4>
  <div class="small muted">Cross-border payments & digital banking solution.</div>
  <div style="margin-top:10px" class="stars">★★★★★</div>

  <div style="margin-top:10px">
    <div class="tags">
      <div class="tag">PHP</div>
      <div class="tag">MySQL</div>
      <div class="tag">Fintech</div>
            <div class="tag">Laravel</div>

    </div>
  </div>

  <div style="margin-top:10px;display:flex;gap:8px">
    <a class="btn ghost" href="#"
      onclick="openProject(event,'WiseGlobalPay',`
        WiseGlobalPay is a next-gen fintech and digital banking platform.
        ✅ Features: multi-currency transfers, deposits, withdrawals, loans, forex, AI-powered support, IRS refund integration, and more.<br>
        ✅ Built with <em>secure PHP + MySQL architecture</em> and responsive dashboards for both admins and users.
        ✅ Includes full KYC onboarding, transaction history, cards, and support system.
        Impact:
        Delivered a scalable cross-border payment solution for businesses and individuals, with modern UI and enterprise-grade security.
      `, 'https://wiseglobalpay.faholengineering.com/')">
      Details
    </a>

    <a class="btn" href="#" onclick="window.open('https://wiseglobalpay.faholengineering.com/','_blank')">Source</a>
  </div>
</div>

    <div class="project">
      <h4>OpenSource — Misc</h4>
      <div class="small muted">Various OSS tools and helpers.</div>
      <div style="margin-top:10px" class="stars">★★★★☆</div>
      <div style="margin-top:10px"><div class="tags"><div class="tag">Tools</div><div class="tag">CLI</div></div>
      <div style="margin-top:10px;display:flex;gap:8px"><a class="btn ghost" href="https://github.com/isaiah-david/oss-tools-helpers" onclick="window.open('https://github.com/isaiah-david/oss-tools-helpers','_blank')">GitHub</a></div></div>
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