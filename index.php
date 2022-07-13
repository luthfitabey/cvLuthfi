<!DOCTYPE html>
<<<<<<< HEAD
<?Php>
=======
<?Php
>>>>>>> eb3bd47f126ed6590609012f9b2743c43dcffa9f
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luthfi Areta Anjilibey - Portfolio</title>
    <link rel="stylesheet" href="style/style.css">
    <script src="https://use.fontawesome.com/a71e5ce1d6.js"></script>
</head>

<body>
    <nav>
        <p>Luthfi Areta Anjilibey</p>

        <button class="burger" id="burger">
            &#9776
        </button>

        <ul>
            <li><a id="home-anchor" href="#">Home</a></li>
            <li><a id="stack-anchor" href="#tech-stack">Tech Stack</a></li>
            <li><a id="edu-anchor" href="#education">Education</a></li>
            <li><a id="exp-anchor" href="#experience">Experience</a></li>
            <li><a id="proj-anchor" href="#projects">Projects</a></li>
        </ul>
    </nav>

    <div class="toggle-bar">
        <button class="mode" onClick="toggleTheme()"><i id="icon" class="fa fa-moon-o" aria-hidden="true"></i></button>
    </div>

    <div class="profile">
        <img src="assets/img/portrait.jpg" alt="">
        <div class="bio-text">
            <h2>About Me</h2><span></span>
            <p> Backend Engineer | Android Developer | Civil Servant 
                | Currently live @East Java </p>
            <p> Currently, working as a Civil Servant in the Regional Development Planning Agency, Research and Development. 
                Holds a Bachelor's degree in Information Systems from Binus University Jakarta and Diploma's degree from Universitas Gadjah Mada Yogyakarta.
                Interested in software development and public relations. Person who like to learn new things and get new experiences. 
                Also has a great curiosity and interest in all things related to innovation and technology.
                Likes challenges and finds joy in working and collaborating with others who share the same ambition.
                Have projects on Web Backend, Android Applications, Natural Language Processing and Computer Vision.</p>

            <div class="social-media">
                <i class="fa fa-twitter" aria-hidden="true"><a href="https://twitter.com" target="_blank"
                        rel="noopener">Twitter</a></i>
                <i class="fa fa-linkedin" aria-hidden="true"><a href="https://www.linkedin.com/in/luthfi-areta-anjilibey/"
                        target="_blank" rel="noopener">LinkedIn</a></i>
                <i class="fa fa-github" aria-hidden="true"><a href="https://github.com/luthfitabey" target="_blank"
                        rel="noopener">GitHub</a></i>
                <i class="fa fa-facebook-official" aria-hidden="true"><a href="https://www.facebook.com/Luthfi9"
                        target="_blank" rel="noopener">Facebook</a></i>
                <i class="fa fa-envelope" aria-hidden="true"><a href="mailto:anjilibey@gmail.com" target="_blank"
                        rel="noopener">Email Me</a></i>
            </div>
        </div>
    </div>

    <div class="featured">
        <iframe style="border-radius: 5px;" width="560" height="315" src="https://youtu.be/3SWey0Cu2Lo/"
            frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>
    </div>

    <div class="tech-stack" id="tech-stack">
        <h2>Tech Stack</h2><span></span>

        <div class="stack-imgs">
            <img src="assets/img/html5.svg" alt="HTML 5">
            <img src="assets/img/css.svg" alt="CSS">
            <img src="assets/img/javascript.svg" alt="JavaScript">
            <img src="assets/img/php.svg" alt="PHP">
            <img src="assets/img/flutter.svg" alt="Flutter">
            <img src="assets/img/kotlin.svg" alt="Kotlin">
            <img src="assets/img/java.svg" alt="Java">
            <img src="assets/img/laravel.svg" alt="Laravel">
            <img src="assets/img/mysql.svg" alt="MySQL">
            <img src="assets/img/googlecloud.svg" alt="Google Cloud">
        </div>
    </div>

    <div class="education" id="education">
        <h2>Education</h2><span></span>
        <div class="edu">
            <span class="course"><i class="fa fa-book" aria-hidden="true"></i>
                S.Kom Information System</span>
            <span class="school"><i class="fa fa-graduation-cap" aria-hidden="true"></i>
                Binus University, Jakarta</span>
            <span class="date"><i class="fa fa-clock-o" aria-hidden="true"></i>
                September 2019 -  December 2021</span>
            <p class="description">Graduated from Bachelor of Information Systems with a GPA of 3.76. 
                during 2 years of college, I studied programming, database, business intelligence, user experience, security, and project management. 
                I was also active in participating in various international seminars that discuss data science.</p>
        </div>

        <div class="edu">
            <span class="course"><i class="fa fa-book" aria-hidden="true"></i>
                A.Md, Information System</span>
            <span class="school"><i class="fa fa-graduation-cap" aria-hidden="true"></i>
                Universitas Gadjah Mada, Yogyakarta</span>
            <span class="date"><i class="fa fa-clock-o" aria-hidden="true"></i>
                August 2016 - April 2019</span>
            <p class="description">Graduated from Diploma in Information Systems from Gadjah Mada University, Yogyakarta with a GPA of 3.68. During college I actively participated in various organizations that held national events.</p>
        </div>
    </div>

    <div class="experience" id="experience">
        <h2>Experience</h2><span></span>

        <div class="exp">
            <span class="role"><i class="fa fa-laptop" aria-hidden="true"></i>
                Civil Servant, Pranata Komputer</span>
            <span class="company"><i class="fa fa-building-o" aria-hidden="true"></i>
                Bappeda Litbang, Kota Mojokerto </span>
            <span class="date"><i class="fa fa-clock-o" aria-hidden="true"></i>
                January 2021 - Present</span>
            <span class="date">
                <i class="fa fa-stack-overflow" aria-hidden="true"></i>
                Network IT Infrastructure engineer, fullstack engineer
            </span>
          
        </div>
        <div class="exp">
            <span class="role"><i class="fa fa-laptop" aria-hidden="true"></i>
                Machine Learning Engineer</span>
            <span class="company"><i class="fa fa-building-o" aria-hidden="true"></i>
                PT Global Intermedia Nusantara Yogyakarta, Indonesia</span>
            <span class="date"><i class="fa fa-clock-o" aria-hidden="true"></i>
                June 2018 - Aug 2018</span>
            <span class="date">
                <i class="fa fa-stack-overflow" aria-hidden="true"></i>
                Computer Vision, Machine Learning, OpenCv
            </span>
            <p class="description">Create two machine learning projects using opencv. 
                The 2 projects are ALPR (Automatic License Plate Recognition) Indonesia and OpenCV Detection and Measuring Object.
                ALPR is an application written in python, opencv, openalpr and Tesseract. 
                This application can analyze images and videos in which there is a plate image which is then identified by the output string.<br>
        </div>

        <div class="exp">
            <span class="role"><i class="fa fa-laptop" aria-hidden="true"></i>
                Android Engineer</span>
            <span class="company"><i class="fa fa-building-o" aria-hidden="true"></i>
                Sekolah Vokasi UGM Yogyakarta, Indonesia</span>
            <span class="date"><i class="fa fa-clock-o" aria-hidden="true"></i>
                Sept 2018 - Apr 2019</span>
            <span class="date">
                <i class="fa fa-stack-overflow" aria-hidden="true"></i>
                Backend: Laravel, Android app: java, Database: mysql
            </span>
            <p class="description">Creating Presence Application with Mobile-based QR Code at UGM Vocational School<br>
        </div>

    <div class="projects" id="projects">
        <h2>Notable Projects</h2><span></span>
        <div class="project-section">
            <div class="content">
                <div class="first background">
                </div>
                <div class="footer">
                    <h3>ALPR-Project</h3>
                    <p>The application uses python, opencv, openalpr and Tesseract. 
                        The application serves to analyze images and videos in which there is a plate image which is then identified as an output string.</p>
                    <a href="https://github.com/luthfitabey/ALPR-Project/" target="_blank" rel="noopener">Check it out</a>
                </div>
            </div>
            <div class="content">
                <div class="second background">
                </div>
                <div class="footer">
                    <h3>OpenCv Measuring Object</h3>
                    <p>Software information : Reading the model and size of an object detected on the camera Library : OpenCV Language : Python </p>
                    <a href="https://youtu.be/7UpZzYBjXu8/" target="_blank" rel="noopener">Check it out</a>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <span class="footer_desc">Made with &#10084; Luthfi Areta A.</a></span>
    </footer>
</body>
<script src="js/index.js"></script>

?>
</html>