<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
        <title>Simon Musmos - Your Programmer Next Door</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <link rel="icon" href="img/favicon.ico">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/aos.css">
        <link rel="stylesheet" href="css/style1.css">
        <style>
            .progress {
                margin: 0 20% 0 20%;
            }
            @media (min-width: 0px) and (max-width: 575px){
                /* .proj-desc, .projttl, .cta-live,{
                    text-align: center;
                } */
                #hero-img-div{
                    display: none !important;
                }
            }
            @media (max-width: 770px){
                #about {
                    height: auto !important;
                }
            }
            @media (min-width: 1201px){
                #skills {
                    padding-bottom: 150px
                }
                #awards {
                    padding-bottom: 100px
                }
            }
            @media (max-width: 991px) and (min-width: 771px){
                #about {
                    height: 750px !important;
                }
                #hero-img-div{
                    margin-top: -300px;
                }
                #title-hero{
                    text-align: center !important;
                }
                #hero-btn{
                    justify-content: center !important;
                }
            }
            @media (max-width: 767px){
                #hero-img-div{
                    margin-top: -50%;
                }
                #title-hero{
                    text-align: center !important;
                }
                
            }
            /* @media (max-width: 900px) and (min-width: 768px){
                #title-hero{
                    text-align: left;
                }
                #hero-btn{
                    float:left;
                }
            } */
            @media (max-width: 992px){
                /* .proj-desc, .projttl, .cta-live,{
                    text-align: center;
                } */
                .cta-btn-live, .cta-btn-view{
                    float: right;
                    margin-bottom: 15px;
                }
            }
        </style>
    </head>
    <body style=" width: 100%;overflow: hidden;">
        <div id="hero" class="jumbotron" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="100" style='width: 100%;'>
        <!-- <div class="container"> -->
            <div class="row align-items-center h-100" style="margin-left: 0; margin-right: 0; width: 100%">
                <div class="col-lg-4 col-md-12 col-sm-12 order-1" style="padding:0">
                    <h1 class="hero-title" id="title-hero" data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="200" style="text-align: left;">Hi! My name is <span class="text-color-main">Simon Musmos</span>,<br>I love turning ideas into reality.</h1>
                    <!-- <p class="hero-cta" id="hero-btn" data-aos="fade-right"data-aos-easing="ease-in-out" data-aos-delay="300">
                        <a class="cta-btn cta-btn--hero">
                            Know More
                        </a>
                    </p> -->
                </div>
                <div class="col-lg-8 col-md-12 order-2" style="margin-left: 0; padding: 0" id="hero-img-div">
                    <img src="img/bg-hero.jpg" style="width: 100%">
                </div>
            </div>
        </div>
        <!-- </div> -->
        <div style="position: absolute; bottom:-650px; background-color: #333; width: 100%; height: 20%; z-index: -200; margin-bottom: -20px;" data-aos="fade-up" data-aos-easing="ease-in-out" style="height: 650px"></div>
        <section id="about" data-aos="fade-up" data-aos-easing="ease-in-out" style="height: 650px">
            <div class="container">
                <h2 class="section-title" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="200">About me</h2>
                <div class="row about-wrapper">
                    <div class="col-md-6 col-sm-12">
                        <div class="about-wrapper__image" data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="400">
                            <img class="img-fluid rounded shadow-lg" height="auto" width="300px" src="img/profile1.jpg" alt="Profile Image">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="about-wrapper__info">
                            <p class="about-wrapper__info-text" data-aos="fade-left" data-aos-easing="ease-in-out" data-aos-delay="400" style="font-weight: 600;">A dependable and hardworking Back-end Developer with a Bachelor’s
Degree in the course of Information Technology. A good knowledge in
software and web development. Flexible and can easily adjust on any
given task or job
.</p>
                            <p class="about-wrapper__info-text" data-aos="fade-left" data-aos-easing="ease-in-out" data-aos-delay="550" style="font-weight: 600;">Currently working as a Web Developer at Dynamic Markups IT Solutions. Most of the task
revolves around economical transactions, meaning it is about money. The job is very
crucial, because there must be no line of error since it is about money. Also
doing Frontend little by little because I want to be a Full-stack Developer
soon. Most of the projects were made using Native PHP and sometimes Laravel,
though I am still beginner.</p>
                            <span class="d-flex mt-3" data-aos="fade-left" data-aos-easing="ease-in-out" data-aos-delay="650"> 
                                <a target="_blank" class="cta-btn cta-btn--resume" href="resume/SimonMusmos.pdf" target="_blank">View Resume</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section id="awards" style="background-color: #333; padding-bottom: 50px;" data-aos="fade-up" data-aos-easing="ease-in-out">
            <div class="container">
                <div class="project-wrapper">
                    <h2 class="section-title text-white" data-aos="zoom-in" data-aos-easing="ease-in-out">Awards</h2>
                    <div class="row">
                        <div class="col-lg-4 col-md-12">
                            <h1 class="text-white" style="font-weight: 600" data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="400">2018</h1>
                            <h3 class="text-white" data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="400">2018 FICT Fastest Programmer</h3><br>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <h1 class="text-white" style="font-weight: 600" data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="400">2018</h1>
                            <h3 class="text-white" data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="400">Clash of Codes Coding Wizard</h3><br>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <h2 class="text-white" style="font-weight: 600" data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="400">2019</h2>
                            <h3 class="text-white" data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="400">2019 FICT Fastest Programmer</h3><br>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="projects">
            <div class="container">
                <div class="project-wrapper">
                    <h2 class="section-title dark-blue-text" data-aos="zoom-in" data-aos-easing="ease-in-out">Projects</h2>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="project-wrapper__text">
                                <h3 class="project-wrapper__text-title projttl" data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="100">Personal Portfolio Website</h3>
                                <div data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="200">
                                    <p class="mb-4 proj-desc">A minimal website that will act as my own personal portfolio. This website is hardcoded by me.</p>
                                </div>
                                <a target="_blank" class="cta-btn cta-btn--hero cta-btn-live" href="#!" data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="200">See Live </a>
                                <a target="_blank" class="cta-btn text-color-main cta-btn-view" href="https://github.com/simonmusmos/portfolio" data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="200">Source Code</a>
                            </div>
                        </div>
                        <div class="col-lg-8" data-aos="fade-left" data-aos-easing="ease-in-out" data-aos-delay="200" style="margin-bottom: 20px;">
                            <div class="react-reveal project-wrapper__image border">
                                <img src="img/project1.jpg"style="width: 80%">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="project-wrapper__text">
                                <h3 class="project-wrapper__text-title projttl" data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="100">Metamorphosis API</h3>
                                <div data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="200">
                                    <p class="mb-4 proj-desc">An API made from Laravel. This is for the students that need a quick API for their websites. Currently have basic Login, Signup and Get Details. Other functions are currently under development.</p>
                                </div>
                                <!-- <a target="_blank" class="cta-btn cta-btn--hero cta-btn-live" href="#!" data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="200" disabled>See Live </a> -->
                                <a target="_blank" class="cta-btn text-color-main cta-btn-view" href="https://github.com/simonmusmos/portfolio" data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="200">Source Code</a>
                            </div>
                        </div>
                        <div class="col-lg-8" data-aos="fade-left" data-aos-easing="ease-in-out" data-aos-delay="200" style="margin-bottom: 20px;">
                            <div class="react-reveal project-wrapper__image border">
                                <img src="img/nopreview.jpg"style="width: 80%">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="project-wrapper__text">
                                <h3 class="project-wrapper__text-title projttl" data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="100">Visual</h3>
                                <div data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="200">
                                    <p class="mb-4 proj-desc">A software made for SM Rosario. Made using Visual Studio. This was used by the pageant judges to tally the score and get the winner of the pageant.</p>
                                </div>
                                <!-- <a target="_blank" class="cta-btn cta-btn--hero cta-btn-live" href="#!" data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="200" disabled>See Live </a> -->
                                <a target="_blank" class="cta-btn text-color-main cta-btn-view" href="https://github.com/simonmusmos/Visual-Second" data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="200">Source Code</a>
                            </div>
                        </div>
                        <div class="col-lg-8" data-aos="fade-left" data-aos-easing="ease-in-out" data-aos-delay="200" style="margin-bottom: 20px;">
                            <div class="react-reveal project-wrapper__image border">
                                <img src="img/nopreview.jpg"style="width: 80%">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="project-wrapper__text">
                                <h3 class="project-wrapper__text-title projttl" data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="100">MLM Websites</h3>
                                <div data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="200">
                                    <p class="mb-4 proj-desc">In my current company, we develop MLM/Network Websites. Unfortunately, I cannot show you anything because everything is so confidential. I already developed 5 MLM/Networking Websites under my current company, in the span of 1 year.</p>
                                </div>
                                <!-- <a target="_blank" class="cta-btn cta-btn--hero cta-btn-live" href="#!" data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="200" disabled>See Live </a> -->
                                <!-- <a target="_blank" class="cta-btn text-color-main cta-btn-view" href="https://github.com/simonmusmos/Visual-Second" data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="200">Source Code</a> -->
                            </div>
                        </div>
                        <div class="col-lg-8" data-aos="fade-left" data-aos-easing="ease-in-out" data-aos-delay="200" style="margin-bottom: 20px;">
                            <div class="react-reveal project-wrapper__image border">
                                <img src="img/nopreview.jpg"style="width: 80%">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="project-wrapper__text">
                                <h3 class="project-wrapper__text-title projttl" data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="100">ColorTrans</h3>
                                <div data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="200">
                                    <p class="mb-4 proj-desc">This software is made using Visual Studio. This is not just a simple "Hello World". It is one of my experiment about timer and colors. Click download to see it on actual.</p>
                                </div>
                                <a target="_blank" class="cta-btn cta-btn--hero cta-btn-live" href="project_files/ColorTrans.zip" data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="200" download>Download Software </a>
                                <a target="_blank" class="cta-btn text-color-main cta-btn-view" href="https://github.com/simonmusmos/ColorTrans" data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="200">Source Code</a>
                            </div>
                        </div>
                        <div class="col-lg-8" data-aos="fade-left" data-aos-easing="ease-in-out" data-aos-delay="200" style="margin-bottom: 20px;">
                            <div class="react-reveal project-wrapper__image border">
                                <img src="img/color_trans.jpg"style="width: 80%">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="project-wrapper__text">
                                <h3 class="project-wrapper__text-title projttl" data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="100">D.A.T.A.</h3>
                                <div data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="200">
                                    <p class="mb-4 proj-desc">This commissioned software is made using Visual Studio. This is software is used to search in the archive of all studies from the organization that commissioned this project. It is also a confidential project.</p>
                                </div>
                                <!-- <a target="_blank" class="cta-btn cta-btn--hero cta-btn-live" href="project_files/ColorTrans.zip" data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="200" download>Download Software </a> -->
                                <!-- <a target="_blank" class="cta-btn text-color-main cta-btn-view" href="https://github.com/simonmusmos/ColorTrans" data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="200">Source Code</a> -->
                            </div>
                        </div>
                        <div class="col-lg-8" data-aos="fade-left" data-aos-easing="ease-in-out" data-aos-delay="200" style="margin-bottom: 20px;">
                            <div class="react-reveal project-wrapper__image border">
                                <img src="img/cnhs.jpg"style="width: 80%">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="project-wrapper__text">
                                <h3 class="project-wrapper__text-title projttl" data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="100">Xeres</h3>
                                <div data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="200">
                                    <p class="mb-4 proj-desc">This is a homemade OS made using Visual Studio. This is a simple OS I used to comply on my school project. It currently have simple functionalities like creating files and folders, and Calculator. Other function is still under development.</p>
                                </div>
                                <a target="_blank" class="cta-btn cta-btn--hero cta-btn-live" href="project_files/Xeres.zip" data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="200" download>Download Software </a>
                                <a target="_blank" class="cta-btn text-color-main cta-btn-view" href="https://github.com/simonmusmos/Xeres" data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="200">Source Code</a>
                            </div>
                        </div>
                        <div class="col-lg-8" data-aos="fade-left" data-aos-easing="ease-in-out" data-aos-delay="200" style="margin-bottom: 20px;">
                            <div class="react-reveal project-wrapper__image border">
                                <img src="img/os.jpg"style="width: 80%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section id="skills" style="background-color: #333;" data-aos="fade-up" data-aos-easing="ease-in-out">
            <div class="container">
                <div class="project-wrapper">
                    <h2 class="section-title text-white" data-aos="zoom-in" data-aos-easing="ease-in-out">Skills</h2>
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <h2 class="text-white" style="font-weight: 600" data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="400">PHP</h2>
                            <div class="progress" data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="200">
                                
                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"></div>
                            </div><br>
                            <h2 class="text-white" style="font-weight: 600" data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="400">Javascript/JQuery</h2>
                            <div class="progress" data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="200">
                                
                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                            </div><br>
                            <h2 class="text-white" style="font-weight: 600" data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="400">Photoshop</h2>
                            <div class="progress" data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="200">
                                
                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                            </div><br>
                            <h2 class="text-white" style="font-weight: 600" data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="400">MySQL</h2>
                            <div class="progress" data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="200">
                                
                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                            </div><br>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <h2 class="text-white" style="font-weight: 600" data-aos="fade-left" data-aos-easing="ease-in-out" data-aos-delay="400">CSS</h2>
                            <div class="progress" data-aos="fade-left" data-aos-easing="ease-in-out" data-aos-delay="200">
                                
                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%"></div>
                            </div><br>
                            <h2 class="text-white" style="font-weight: 600" data-aos="fade-left" data-aos-easing="ease-in-out" data-aos-delay="400">Bootstrap</h2>
                            <div class="progress" data-aos="fade-left" data-aos-easing="ease-in-out" data-aos-delay="200">
                                
                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"></div>
                            </div><br>
                            <h2 class="text-white" style="font-weight: 600" data-aos="fade-left" data-aos-easing="ease-in-out" data-aos-delay="400">Visual Basic</h2>
                            <div class="progress" data-aos="fade-left" data-aos-easing="ease-in-out" data-aos-delay="200">
                                
                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%"></div>
                            </div><br>
                            <h2 class="text-white" style="font-weight: 600" data-aos="fade-left" data-aos-easing="ease-in-out" data-aos-delay="400">Laravel</h2>
                            <div class="progress" data-aos="fade-left" data-aos-easing="ease-in-out" data-aos-delay="200">
                                
                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%"></div>
                            </div><br>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div style="position: absolute; bottom=0; background-color: #333; width: 100%; height: 20%; z-index: -200"></div>
        <section id="contact"  data-aos="fade-up" data-aos-easing="ease-in-out">
            <div class="container">
                <h2 class="section-title" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="200">Contact</h2>
                <div class="contact-wrapper">
                    <p class="contact-wrapper__text" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="400">Want to turn your ideas in to reality?</p>
                    <a target="_blank" class="cta-btn cta-btn--resume" href="mailto:simonmusmos@gmail.com" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="500">Let's Go!</a>
                </div>
            </div>
        </section>
        
        <footer class="footer navbar-static-bottom" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="100">
            <div class="container">
                <a href="#top" aria-label="Back To Top" class="back-to-top">
                    <i class="fa fa-angle-up fa-2x" aria-hidden="true">

                    </i>
                </a>
                <div class="social-links">
                    <a href="https://instagram.com/simonmusmos" rel="noopener noreferrer" target="_blank" aria-label="instagram">
                        <i class="fa fa-instagram fa-inverse">

                        </i>
                    </a>
                    <a href="https://www.facebook.com/MusmosSimon" rel="noopener noreferrer" target="_blank" aria-label="facebook">
                        <i class="fa fa-facebook fa-inverse">

                        </i>
                    </a>
                    <a href="https://www.linkedin.com/in/simon-musmos-34324517b/" rel="noopener noreferrer" target="_blank" aria-label="linkedin">
                        <i class="fa fa-linkedin fa-inverse">

                        </i>
                    </a>
                    <a href="https://github.com/simonmusmos" rel="noopener noreferrer" target="_blank" aria-label="github">
                        <i class="fa fa-github fa-inverse">

                        </i>
                    </a>
                </div>
            <hr>
            <p class="footer__text">© 2020 - Template developed by <a href="https://github.com/cobidev" target="_blank" rel="noopener noreferrer">Jacobo Martínez</a> and edited by <a href="https://github.com/simonmusmos" target="_blank" rel="noopener noreferrer">Simon Musmos</a></p>
            </div>
        </footer>
        
        <script src="js/main.js"></script>
        <!-- <script src="js/vendor.js"></script> -->
        <script type="text/javascript" src="js/aos.js"></script>
        <script type="text/javascript">
            AOS.init();
        </script>
        <!-- <span>Hardcoded by yours truly.</span> -->
    </body>
</html>