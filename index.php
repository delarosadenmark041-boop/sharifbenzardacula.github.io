<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" href="/assets/img/favicon_edited.png" type="image/png">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sharif benzar Dacula | Portfolio</title>
<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
  }

  body {
    background-color: #0d0d0d;
    color: #fff;
    line-height: 1.6;
    overflow-x: hidden;
  }

  header {
    width: 100%;
    padding: 20px 8%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    position: fixed;
    top: 0;
    left: 0;
    background: rgba(0, 0, 0, 0.8);
    backdrop-filter: blur(10px);
    z-index: 100;
  }

  header h1 {
    font-size: 1rem;
    letter-spacing: 1px;
    color: #fff;
  }

  nav a {
    color: #aaa;
    margin-left: 25px;
    text-decoration: none;
    transition: color 0.3s;
  }

  nav a:hover {
    color: #b8ff5e;
  }

  section {
    padding: 100px 8% 80px;
    min-height: 100vh;
  }

  /* ---------- HERO ---------- */
  .hero {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between;
  }

  .hero-text {
    flex: 1;
    min-width: 300px;
  }

  .hero-text h2 {
    font-size: 3rem;
    margin-bottom: 10px;
  }

  .hero-text p {
    font-size: 1rem;
    margin-bottom: 25px;
    color: #ccc;
  }

  .hero-text .btn {
    display: inline-block;
    background: #b8ff5e;
    color: #000;
    padding: 10px 22px;
    border-radius: 25px;
    text-decoration: none;
    font-weight: 600;
    transition: background 0.3s;
  }

  .hero-text .btn:hover {
    background: #9be64e;
  }

  .hero-img {
    flex: 1;
    min-width: 250px;
    text-align: center;
  }

  .hero-img img {
    width: 300px;
    border-radius: 12px;
  }

  /* ---------- PROJECTS ---------- */
  .projects h2 {
    font-size: 1.8rem;
    margin-bottom: 10px;
  }

  .projects p {
    color: #aaa;
    margin-bottom: 40px;
  }

  .project-list {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
    gap: 40px;
  }

  .project {
    background: #141414;
    border-radius: 16px;
    overflow: hidden;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .project:hover {
    transform: translateY(-8px);
    box-shadow: 0 10px 20px rgba(184, 255, 94, 0.1);
  }

  .project img {
    width: 100%;
    display: block;
  }

  .project-content {
    padding: 20px;
  }

  .project-content h3 {
    font-size: 1.2rem;
    margin-bottom: 8px;
  }

  .project-content p {
    color: #aaa;
    font-size: 0.9rem;
    margin-bottom: 10px;
  }

  .project-content a {
    color: #b8ff5e;
    text-decoration: none;
    font-size: 0.9rem;
    font-weight: 600;
  }

  .project-content a:hover {
    text-decoration: underline;
  }

  /* ---------- ABOUT ---------- */
  .about h2 {
    font-size: 1.8rem;
    margin-bottom: 10px;
  }

  .about p {
    color: #aaa;
    max-width: 700px;
    margin-bottom: 20px;
  }

  .about a {
    color: #b8ff5e;
    font-weight: 600;
    text-decoration: none;
  }

  .about a:hover {
    text-decoration: underline;
  }

  /* ---------- CONTACT ---------- */
  .contact {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    gap: 40px;
  }

  .contact-left {
    flex: 1;
    min-width: 250px;
  }

  .contact-left h2 {
    font-size: 1.8rem;
    margin-bottom: 10px;
  }

  .contact-left p {
    color: #aaa;
    margin-bottom: 10px;
  }

  .contact-left a {
    color: #b8ff5e;
    text-decoration: none;
  }

  .contact-left a:hover {
    text-decoration: underline;
  }

  .contact-icons {
    margin-top: 15px;
  }

  .contact-icons a {
    display: inline-block;
    color: #b8ff5e;
    font-size: 1.3rem;
    margin-right: 15px;
    transition: color 0.3s;
  }

  .contact-icons a:hover {
    color: #9be64e;
  }

  .contact-form {
    flex: 1;
    min-width: 280px;
  }

  .contact-form form {
    display: flex;
    flex-direction: column;
  }

  .contact-form input,
  .contact-form textarea {
    background: #1a1a1a;
    border: none;
    color: #fff;
    padding: 12px;
    margin-bottom: 15px;
    border-radius: 5px;
    font-size: 0.95rem;
  }

  .contact-form textarea {
    resize: none;
    height: 120px;
  }

  .contact-form button {
    background: #b8ff5e;
    color: #000;
    font-weight: 600;
    border: none;
    padding: 10px 20px;
    border-radius: 25px;
    cursor: pointer;
    transition: background 0.3s;
  }

  .contact-form button:hover {
    background: #9be64e;
  }

  footer {
    background: #000;
    text-align: center;
    padding: 20px 0;
    color: #555;
    font-size: 0.85rem;
  }

  /* ---------- ANIMATIONS ---------- */
  [data-animate] {
    opacity: 0;
    transform: translateY(30px);
    transition: all 0.7s ease;
  }

  [data-animate].visible {
    opacity: 1;
    transform: translateY(0);
  }

  html {
    scroll-behavior: smooth;
  }
</style>
</head>
<body>
  <header>
    <h1>SHARIF BENZAR DACULA</h1>
    <nav>
      <a href="#projects">Projects</a>
      <a href="#about">About</a>
      <a href="#contact">Contact</a>
    </nav>
  </header>

  <section class="hero" id="home">
    <div class="hero-text" data-animate>
      <h2>Hi, I am <br>SHARIF BENZAR M. DACULA</h2>
      <p>A front-end developer based in Sydney. Passionate about building dynamic, visually appealing websites and apps.</p>
      <a href="#projects" class="btn">View my work</a>
    </div>
    <div class="hero-img" data-animate>
      <img src="assets/img/pics.jpg" alt="Profile Photo">
    </div>
  </section>

  <section class="projects" id="projects">
    <h2 data-animate>FEATURED PROJECTS</h2>
    <p data-animate>Here are some of my recent design and development projects.</p>

    <div class="project-list">
      <div class="project" data-animate>
        <img src="assets/img/pic2.jpg" alt="Project 1">
        <div class="project-content">
          <h3>Promotional Landing Page</h3>
          <p>A responsive, visually rich landing page for a fictional show or product.</p>
          <a href="#">View project →</a>
        </div>
      </div>

      <div class="project" data-animate>
        <img src="assets/img/pic3.jpg" alt="Project 2">
        <div class="project-content">
          <h3>Blog Site for World News</h3>
          <p>A clean and minimal blog interface for reading and sharing articles.</p>
          <a href="#">View project →</a>
        </div>
      </div>

      <div class="project" data-animate>
        <img src="assets/img/pic1.jpg" alt="Project 3">
        <div class="project-content">
          <h3>E-commerce Product Page</h3>
          <p>Modern shopping page designed for product showcase and conversions.</p>
          <a href="#">View project →</a>
        </div>
      </div>
    </div>
  </section>

  <section class="about" id="about">
    <h2 data-animate>ABOUT ME</h2>
    <p data-animate>I am a front-end developer based in Sydney with a background in Mechanical Engineering. I enjoy building clean, responsive, and efficient web interfaces that provide meaningful user experiences.</p>
    <p data-animate> <a href="about.php">More about me →</a></p>
  </section>

  <section class="contact" id="contact">
    <div class="contact-left" data-animate>
      <h2>LET’S CONNECT</h2>
      <p>Say hello at <a href="mailto:delarosadenmark014@gmail.com">sharif6789@gmail.com</a></p>
      <p>For more info, here’s my <a href="#">resume</a></p>
      <div class="contact-icons">
        <a href="#"><i class="fa-brands fa-linkedin"></i></a>
        <a href="#"><i class="fa-brands fa-github"></i></a>
        <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
        <a href="#"><i class="fa-brands fa-instagram"></i></a>
      </div>
    </div>

    <div class="contact-form" data-animate>
      <form>
        <input type="text" placeholder="Name" required>
        <input type="email" placeholder="Email" required>
        <input type="text" placeholder="Subject">
        <textarea placeholder="Message"></textarea>
        <button type="submit">SUBMIT</button>
      </form>
    </div>
  </section>

  <footer>
    © 2025 SHARIF BENZAR DACULA
  </footer>

<script src="https://kit.fontawesome.com/a2e0e6a72d.js" crossorigin="anonymous"></script>
<script>
  // Reveal on scroll
  const items = document.querySelectorAll('[data-animate]');
  const revealOnScroll = () => {
    const trigger = window.innerHeight * 0.85;
    items.forEach(item => {
      const rect = item.getBoundingClientRect();
      if (rect.top < trigger) item.classList.add('visible');
    });
  };
  window.addEventListener('scroll', revealOnScroll);
  revealOnScroll();
</script>
</body>
</html>
