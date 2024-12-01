<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Portfolio Website</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://kit.fontawesome.com/865a18ef7a.js" crossorigin="anonymous"></script>
    <link id="favicon" rel="icon" type="image/png" href="Images/A.png">
</head>
<body>
    <div id="header">
        <div class="container">
            <nav>
                <img src="Images/A.png" class="logo">
                <ul id="sidemenu">
                    <li><a href="#header">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#skills1">Skills</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="login.php">Admin</a></li>

                    <i class="fa-solid fa-xmark" onclick="colsemenu()"></i>
                </ul>
                <i style="color: rgb(255, 5, 5);" class="fa-solid fa-bars" onclick="openmenu()"></i>
            </nav>
            <div class="header-text">
                <section class="home1">
                    <div class="home-content1">
                    <h3 style="color: rgb(95, 13, 202);">Hi, I'am </h3>
                    <h2> <span style="color: rgb(233, 3, 3);">Arafat Rahman</span></h2> <h2 style="color: rgb(95, 13, 202);">from Bangladesh</h2><br>
                      <h3 style="color: rgb(95, 13, 202);">And I'm a <span class="text1"></span></h3>
                    </div>
                </section>
               
            </div>
        </div>
    </div>
    <!---color: #eb8614--->
    <div id="about">
        <div class="container">
            <div class="row">
                <div class="about-col-1">
                    <img src="Images/ar1.jpeg" alt="">
                </div>
                <div class="about-col-2">
                    <h1 class="sub-title" style="color: #f15f5f;">About Me</h1>
                    <p>Hello, I'm Arafat Rahman, currently an undergraduate student of the Department of Computer Science and Engineering, Pundra University of Science & Technology, Bogura, Bangladesh. I have two years of hands-on experience in deep cybersecurity and one year of hands-on experience in full stack development and artificial intelligence. My expertise lies in the field of web development, cybersecurity, and artificial intelligence. I am also interested in learning Natural Language Processing by harnessing the power of Large Language Models as it is a growing trend now.</p>
                    <div class="tab-titles">
                        <p class="tab-links active-link" onclick="opentab('skills', event)">Skills</p>
                        <p class="tab-links" onclick="opentab('experience', event)">Experience</p>
                        <p class="tab-links" onclick="opentab('education', event)">Education</p>
                    </div>
                    <div class="tab-contents active-tab" id="skills">
                        <ul>
                            <li><span>Web Development</span><br> Web App Development</li>
                            <li><span>AI Development</span><br> AI Software Development</li>
                            <li><span>Cyber Security</span><br> Cyber Security Expert</li>
                        </ul>
                    </div>
                    <div class="tab-contents" id="experience">
                        <ul>
                            <li><span>2024-Current</span><br> Web App Development at Upwork</li>
                            <li><span>2023-Current</span><br> AI Software Development at Upwork</li>
                            <li><span>2022-2024</span><br> Cyber Security Expert at Bugcrowd</li>
                        </ul>
                    </div>
                    <div class="tab-contents" id="education">
                        <ul>
                            <li><span>2018</span><br> SSC Passed from Gabtali Pilot High School, Bogura</li>
                            <li><span>2020</span><br> HSC Passed from Govt. Shah Sultan College, Bogura</li>
                            <li><span>2023-Current</span><br> Undergraduate student of the Department of Computer Science and Engineering, Pundra University of Science & Technology, Bogura</li>
                        </ul>
                    </div>   
                </div>
            </div>
        </div>
    </div>
    <div id="services">
        <div class="container">
            <br> <br>
             <h3 style="color: #254670;" ></h3> 
            <h1 class="sub-title" style="color: #f15f5f;">My Services</h1>
            <div class="services-list">
                <div>
                    <i class="fa-solid fa-code"></i>
                    <h2>Web Development</h2>
                    <p>I have one year of hands-on experience in full stack development</p>
                    <a href="#">Learn More</a>
                </div>
                <div>
                    <i class="fa-solid fa-brain"></i>
                    <h2>AI Software Development</h2>
                    <p>I have one year of hands-on experience in AI software development</p>
                    <a href="https://www.udemy.com/certificate/UC-a2c153e5-5c82-4a6b-a8a6-73ebb33793dc">Learn More</a>
                </div>
                <div>
                    <i class="fa-solid fa-shield-halved"></i>
                    <h2>Cyber Security</h2>
                    <p>I have three years of hands-on experience in Cyber Security</p>
                    <a href="https://www.udemy.com/certificate/UC-74dc9405-8a43-4173-9332-0074035d7ec8">Learn More</a>
                </div>
            </div>
        </div>
      <br><br><br><br><br><br>
    </div>
    <section id="skills1" class="skills">
        <br><br>
        <div class="main-text">
            <h1 class="sub-title" style="color: #f15f5f;">My Skills</h1>

        </div>
        <div class="skill-main">
            <div class="skill-left">
                <br><br>
                <h3 style="color: #f1b75f;">Technical Skills</h3>
                <div class="skill-bar">
                    <div class="info">
                        <p>Python</p>
                        <p>80%</p>
                    </div>
                    <div class="bar">
                        <span class="python"></span>
                    </div>
                </div>
                <div class="skill-bar">
                    <div class="info">
                        <p>HTML</p>
                        <p>80%</p>
                    </div>
                    <div class="bar">
                        <span class="html"></span>
                    </div>
                </div>
                <div class="skill-bar">
                    <div class="info">
                        <p>Figma</p>
                        <p>75%</p>
                    </div>
                    <div class="bar">
                        <span class="figma"></span>
                    </div>
                </div>
                <div class="skill-bar">
                    <div class="info">
                        <p>CSS</p>
                        <p>70%</p>
                    </div>
                    <div class="bar">
                        <span class="css"></span>
                    </div>
                </div>
                <div class="skill-bar">
                    <div class="info">
                        <p>Java</p>
                        <p>70%</p>
                    </div>
                    <div class="bar">
                        <span class="java"></span>
                    </div>
                </div>
                <div class="skill-bar">
                    <div class="info">
                        <p>JavaScript</p>
                        <p>60%</p>
                    </div>
                    <div class="bar">
                        <span class="javascript"></span>
                    </div>
                </div>
                <div class="skill-bar">
                    <div class="info">
                        <p>CCNA</p>
                        <p>55%</p>
                    </div>
                    <div class="bar">
                        <span class="ccna"></span>
                    </div>
                </div>
            </div>
            <div class="skill-right">
                <h3 style="color: #f1b75f;">Professional Skills</h3>
                <div class="professional">
                    <div class="box">
                        <div class="circle" data-dots="92" data-percent="92"></div>
                     <div class="text">
                         <big>92%</big>
                         <small>Creativity</small>
                     </div>
                 </div>
                    <div class="box">
                       <div class="circle" data-dots="90" data-percent="90"></div>
                    <div class="text">
                        <big>90%</big>
                        <small>Team Work</small>
                    </div>
                </div>
                
             <div class="box">
                <div class="circle" data-dots="89" data-percent="89"></div>
             <div class="text">
                 <big>89%</big>
                 <small>Project Management</small>
             </div>
         </div>
         <div class="box">
            <div class="circle" data-dots="88" data-percent="88"></div>
         <div class="text">
             <big>88%</big>
             <small>Communication</small>
         </div>
     </div>
    </div>
        </div>
    </div>
    </section>
    <div id="portfolio">
        <div class="container">
            <br><br><br>
            <h1 class="sub-title" style="color: #f15f5f;">My Projects</h1>
            <div class="work-list">
                <div class="work">
                    <img src="Images/Web.jpg" >
                    <div class="layer">
                        <h3>Entertainment Website</h3>
                        <p>This is my Entertainment Website, where you'll find the latest news and trends in TV, movies, music</p>
                        <a href="https://netfilix-clone-alpha.vercel.app"><i class="fa-solid fa-up-right-from-square"></i></a>
                    </div>
                </div>
                <div class="work">
                    <img src="Images/Ai.jpg" >
                    <div class="layer">
                        <h3>AI Software</h3>
                        <p>This is my AI software, which allows machines to learn and act like humans</p>
                        <a href="Images/AI.pdf"><i class="fa-solid fa-up-right-from-square"></i></a>
                    </div>
                </div>
                <div class="work">
                    <img src="Images/cy.jpg" >
                    <div class="layer">
                        <h3>Cyber Security</h3>
                        <p>I have three years of hands-on experience in deep cybersecurity</p>
                        <a href="Images/cyber_security.pdf"><i class="fa-solid fa-up-right-from-square"></i></a>
                    </div>
                </div>
            </div>
            <a href="#" class="btn">See More</a>
        </div>
    </div>
    
    <div id="contact"> 
        <div class="container">
            <div class="row">
                <div class="contact-left">
                    <br><br><br>
                    <h1 class="sub-title" style="color: #f15f5f;">Contact Me</h1>
                    <p><i class="fa-solid fa-envelope"></i> arafatrahman174690@gmail.com</p>
                    <p><i class="fa-solid fa-phone"></i> +8801726847950</p>
                    <div class="social-icons">
                        <a href="https://www.facebook.com/arafat1746"><i class="fa-brands fa-facebook"></i></a>
                        <a href="https://www.linkedin.com/in/arafat1746"><i class="fa-brands fa-linkedin"></i></a>
                        <a href="https://github.com/arafat-rahman17"><i class="fa-brands fa-github"></i></i></a>
                        <a href="https://x.com/Arafat1746"><i class="fa-brands fa-twitter"></i></a>
                        <a href="https://hackerone.com/arafat1746"><i class="fa-brands fa-hackerrank"></i></i></a>
                    </div>
                    <a href="Images/Arafat_Rahman.pdf" download class="btn btn2">Download CV</a>
                </div>
                <div class="contact-right">
                    <br><br><br>
                    
                    <form name="submit-to-google-shee" action="connect.php" method="post" >
                        <input type="text" id="Name" name="Name" placeholder="Your Name" required>
                        <input type="email" id="Email" name="Email" placeholder="Your Email" required>
                        <textarea name="Message" id="Message" rows="6" placeholder="Your Message" required></textarea>
                        <button type="submit">Submit</button>
                    </form>
                    <span id="msg"></span>
                </div>
            </div>
        </div>
        <div class="copyright">
            <p>&copy;2024 Arafat Rahman All rights reserved.</p>
        </div>
    </div>
    <script>
        var tablinks = document.getElementsByClassName("tab-links");
        var tabcontents = document.getElementsByClassName("tab-contents");

        function opentab(tabname, event) {
            for (tablink of tablinks) {
                tablink.classList.remove("active-link");
            }
            for (tabcontent of tabcontents) {
                tabcontent.classList.remove("active-tab");
            }
            event.currentTarget.classList.add("active-link");
            document.getElementById(tabname).classList.add("active-tab");
        }
    </script>
    <script>
        var sidemenu = document.getElementById("sidemenu");
        function openmenu(){
            sidemenu.style.right = "0";
        }
        function colsemenu(){
            sidemenu.style.right = "-200px";
        }
    </script>

    <script>
        function changeFaviconColor() {
            const canvas = document.createElement('canvas');
            const context = canvas.getContext('2d');
            const img = new Image();

            img.onload = function() {
                canvas.width = img.width;
                canvas.height = img.height;

                context.drawImage(img, 0, 0);
                const imageData = context.getImageData(0, 0, canvas.width, canvas.height);
                const data = imageData.data;

                for (let i = 0; i < data.length; i += 4) {
                    data[i] = 255;
                    data[i + 1] = 0;
                    data[i + 2] = 0; 
                }

                context.putImageData(imageData, 0, 0);

                const favicon = document.getElementById('favicon');
                favicon.href = canvas.toDataURL('image/png');
            };

            img.src = 'Images/A.png';
        }

        changeFaviconColor();
    </script>
    <script>
        const circles = document.querySelectorAll('.circle');

        circles.forEach(elem => {
            var dots = parseInt(elem.getAttribute("data-dots"), 10);
            var marked = parseInt(elem.getAttribute("data-percent"), 10);
            var percent = Math.floor(dots * marked / 100);
            var points = "";
            var rotate = 360 / dots;

            for (let i = 0; i < dots; i++) {
                points += `<div class="points" style="--i:${i}; --rot:${rotate}deg"></div>`;
            }
            elem.innerHTML = points;
            const pointsMarked = elem.querySelectorAll('.points');
            for (let i = 0; i < percent; i++) {
                pointsMarked[i].classList.add('marked');
            }
        });
    </script>
    <script>
        var typed = new Typed(".text1", {
  strings: ["<span style='color: red;'>Web Developer</span>", 
    "<span style='color: red;'>Cyber Security Specialist</span>", 
    "<span style='color: red;'>AI Developer</span>"],
  typeSpeed: 100,
  backSpeed: 20,
  backDelay: 1000,
  loop: true
});

    </script>
     <script>
        const scriptURL = 'https://script.google.com/macros/s/AKfycbzXO5NEJTB8xLxh2Zirc2ZXSQZYml3RSYTiA9aKdCY4T0uKDTXi-xMRITO5YbIcvmh0KQ/exec'
        const form = document.forms['submit-to-google-sheet']
        const msg = document.getElementById("msg")
      
        form.addEventListener('submit', e => {
          e.preventDefault()
          fetch(scriptURL, { method: 'POST', body: new FormData(form)})
            .then(response => {
                msg.innerHTML = "Message Sent Successfully"
                setTimeout(function(){
                    msg.innerHTML = ""
                }, 5000)
                form.reset()
            })
            .catch(error => console.error('Error!', error.message))
        })
    </script>
</body>
</html>
<!----------------------------> 