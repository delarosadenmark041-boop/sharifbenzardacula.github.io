<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sharif Benzar Dacula | Portfolio</title>
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
  }

  /* ABOUT */
  .about {
    text-align: left;
  }

  .about h2 {
    font-size: 2rem;
    margin-bottom: 15px;
  }

  .about p {
    color: #ccc;
    max-width: 700px;
    margin-bottom: 20px;
  }

  .about .btn {
    display: inline-block;
    background: #b8ff5e;
    color: #000;
    padding: 10px 22px;
    border-radius: 25px;
    text-decoration: none;
    font-weight: 600;
    transition: background 0.3s;
  }

  .about .btn:hover {
    background: #9be64e;
  }

  .about-img {
    margin-top: 30px;
  }

  .about-img img {
    width: 300px;
    border-radius: 12px;
  }

  /* CAPABILITIES */
  .capabilities {
    padding-top: 60px;
  }

  .capabilities h3 {
    font-size: 1.5rem;
    margin-bottom: 15px;
  }

  .capabilities p {
    color: #aaa;
    max-width: 700px;
    margin-bottom: 20px;
  }

  .skill-tags {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
  }

  .skill-tags span {
    background: #141414;
    color: #b8ff5e;
    padding: 8px 14px;
    border-radius: 25px;
    font-size: 0.9rem;
    font-weight: 500;
  }

  /* EXPERIENCE */
  .experience {
    padding-top: 60px;
  }

  .experience h3 {
    font-size: 1.5rem;
    margin-bottom: 20px;
  }

  .exp-item {
    margin-bottom: 25px;
  }

  .exp-item h4 {
    font-size: 1rem;
    color: #fff;
  }

  .exp-item span {
    font-size: 0.85rem;
    color: #b8ff5e;
  }

  .exp-item p {
    color: #aaa;
    margin-top: 8px;
    max-width: 700px;
  }

  /* CONTACT */
  .contact {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    gap: 40px;
    padding-top: 60px;
  }

  .contact-left {
    flex: 1;
    min-width: 250px;
  }

  .contact-left h3 {
    font-size: 1.5rem;
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
      <a href="index.php">Home</a>
      <a href="#about">About</a>
      <a href="#contact">Contact</a>
    </nav>
  </header>

  <section class="about" id="about">
    <h2 data-animate>ABOUT ME</h2>
    <p data-animate>I am a front-end developer based in Sydney. Has Mechanical Engineering background.<br><br>
      I specialize in designing and developing clean, modern, and responsive web experiences that blend aesthetics and functionality. My mission is to create digital interfaces that are both beautiful and intuitive for users.</p>
    <a href="#" class="btn" data-animate>DOWNLOAD RESUME</a>

    <div class="about-img" data-animate>
      <img src="assets/img/pics.jpg" alt="Sharif">
    </div>

    <div class="capabilities" data-animate>
      <h3>MY CAPABILITIES</h3>
      <p>I am always looking to expand my skill set while working on new and challenging projects. These are some of the tools and technologies I use:</p>
      <div class="skill-tags">
        <span>HTML</span>
        <span>CSS</span>
        <span>JavaScript</span>
        <span>React</span>
        <span>Accessibility</span>
        <span>Figma</span>
        <span>Tailwind CSS</span>
      </div>
    </div>

    <div class="experience" data-animate>
      <h3>MY EXPERIENCE</h3>
      <div class="exp-item">
        <h4>Freelance Developer <span>Nov 2023 – Present</span></h4>
        <p>Developing custom websites for clients with responsive designs and optimized performance using HTML, CSS, JavaScript, and React. Focused on creating modern, user-friendly interfaces.</p>
      </div>
      <div class="exp-item">
        <h4>Front-End Intern <span>Sept 2023 – Nov 2023</span></h4>
        <p>Collaborated with design and back-end teams to create interactive UI components. Gained hands-on experience in responsive design, version control, and project collaboration tools.</p>
      </div>
    </div>
  </section>

  <section class="contact" id="contact">
    <div class="contact-left" data-animate>
      <h3>LET’S CONNECT</h3>
      <p>Say hello at <a href="mailto:delarosadenmark014@gmail.com">sharif6769@gmail.com</a></p>
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
