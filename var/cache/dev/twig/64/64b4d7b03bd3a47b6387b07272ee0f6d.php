<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* blog-details-no-sidebar.html */
class __TwigTemplate_6774e661eb4733a3fedf2cfe0d997070 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog-details-no-sidebar.html"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"zxx\">

<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
    <title>Blog Details No Sidebar - Educational and Online Course HTML Website Template</title>  
    <link rel=\"icon\" href=\"../public/img/favicon.png\" type=\"image/png\">
    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\"../public/css/bootstrap.min.css\"/>
    <!-- animate CSS -->
    <link rel=\"stylesheet\" href=\"../public/css/animate.css\"/>
    <!-- font awesome CSS -->
    <link rel=\"stylesheet\" href=\"../public/vendors/elegant_Icon/elegent_icon.css\"/>
    <!-- nice select CSS -->
    <link rel=\"stylesheet\" href=\"../public/vendors/niceselect/css/nice-select.css\"/>
    <!-- owl carousel CSS -->
    <link rel=\"stylesheet\" href=\"../public/vendors/owl_carousel/css/owl.carousel.css\"/>
    <!-- magnific popup CSS -->
    <link rel=\"stylesheet\" href=\"../public/vendors/magnify_popup/magnific-popup.css\"/>
    <!-- Countdown CSS -->
    <link rel=\"stylesheet\" href=\"../public/vendors/countdown/css/Countdown.css\"/>
    <!-- flaticon CSS -->
    <link rel=\"stylesheet\" href=\"../public/css/flaticon.css\"/>
    <!-- aos CSS -->
    <link rel=\"stylesheet\" href=\"../public/vendors/aos/aos.css\"/>
    <!-- style CSS -->
    <link rel=\"stylesheet\" href=\"style.css\"/>
</head>

<body>
    <!-- start Preloader  -->
    <div class=\"preloder_part\">
        <div class=\"spinner\">
            <div class=\"dot1\"></div>
            <div class=\"dot2\"></div>
        </div>
    </div>
    <!-- End Preloader  -->

    <!-- header part here -->
    <header class=\"header_part\">
        <div class=\"sub_header section_bg\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xl-6 col-lg-7 col-md-7\">
                        <div class=\"header_contact_info\">
                            <a href=\"tel:+4641468425\"><i class=\"icon_phone\"></i>+464 145 684 325</a>
                            <a href=\"mailto:admin@example.com\"><i class=\"icon_mail_alt\"></i>admin@example.com</a>
                        </div>
                    </div>
                    <div class=\"col-xl-6 col-lg-5 col-md-5\">
                        <div class=\"header_login_info\">
                            <a href=\"teacher.html\">Become A Teacher</a>
                            <a href=\"my-profile.html\">My Profile</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"main_nav\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"header_iner d-flex justify-content-between align-items-center\">
                            <div class=\"sidebar_icon troggle_icon d-lg-none\">
                                <i class=\"icon_menu\"></i>
                            </div>
                            <div class=\"logo\">
                                <a href=\"index.html\"><img src=\"../public/img/logo.png\" alt=\"#\"></a>
                            </div>

                            <nav class=\"navbar_bar\">
                                <ul>
                                    <li class=\"mega_menu_dropdown\">
                                        <a class=\"mega_menu_dropdown-toggle nav-link active\" href=\"#\">Home</a>
                                        <ul>
                                            <li><a class=\"active\" href=\"index.html\">Homepage Style One</a></li>
                                            <li><a href=\"index-two.html\">Homepage Style Two</a>
                                            </li>
                                            <li><a href=\"index.html\">One Page Home</a>
                                            </li>
                                            <li><a href=\"index-four.html\">Dark Homepage</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class=\"mega_menu_dropdown\">
                                        <a class=\"mega_menu_dropdown-toggle nav-link\" href=\"#\">All Courses</a>
                                        <ul>
                                            <li><a href=\"course-list.html\">Course List</a></li>
                                            <li><a href=\"course-grid.html\">Course Grid</a></li>
                                            <li><a href=\"course-slider.html\">Course Slider</a></li>
                                            <li><a href=\"course-details.html\">Course Details</a></li>
                                            <li><a href=\"course-category.html\">Course Category</a></li>
                                            <li><a href=\"lessons.html\">Lessons</a></li>
                                            <li><a href=\"quizzes.html\">Quizzes</a></li>
                                            <li><a href=\"checkout.html\">Checkout</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"mega_menu_dropdown\">
                                        <a class=\"mega_menu_dropdown-toggle nav-link\" href=\"#\">Blog Classic</a>
                                        <ul>
                                            <li><a href=\"blog-grid.html\">Blog Grid</a></li>
                                            <li><a href=\"blog-slider.html\">Blog Slider</a></li>
                                            <li><a href=\"blog-left-sidebar.html\">Blog Left Sidebar</a></li>
                                            <li><a href=\"blog-right-sidebar.html\">Blog Right Sidebar</a></li>
                                            <li><a href=\"blog-details-no-sidebar.html\">Blog Details No Sidebar</a></li>
                                            <li><a href=\"blog-details-left-sidebar.html\">Blog Details Left Sidebar</a></li>
                                            <li><a href=\"blog-details-right-sidebar.html\">Blog Details Right Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"mega_menu_dropdown\">
                                        <a class=\"mega_menu_dropdown-toggle nav-link\" href=\"#\">Pages</a>
                                        <ul>
                                            <li><a href=\"about.html\">About Us</a></li>
                                            <li><a href=\"events.html\">Events</a></li>
                                            <li><a href=\"instructor.html\">Instructor</a></li>
                                            <li><a href=\"testimonial.html\">Testimonial</a></li>
                                            <li><a href=\"sample-page.html\">Sample Page</a></li>
                                            <li><a href=\"page-left-sidebar.html\">Page Left Sidebar</a></li>
                                            <li><a href=\"page-right-sidebar.html\">Page Right Sidebar</a></li>
                                            <li><a href=\"404.html\">404 Page</a></li>
                                        </ul>
                                    </li>
                                    <li><a href=\"contact.html\">Contact Us</a></li>
                                </ul>
                            </nav>
                            <div class=\"navbar_btn\">
                                <a href=\"live-class.html\" class=\"btn_1\">Join Live Class</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </header>
    <!-- header part end -->

    <!-- breadcrumb part -->
    <section class=\"breadcrumb_part blog_breadcrumb\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8\">
                    <div class=\"breadcrumb_iner\">
                        <span>Education</span>
                        <h2>Best products for fitness
                            nutrition and muscles</h2>
                        <div class=\"breadcrumb_post_author\">
                            <p><i class=\"icon_profile\"></i>Jim Séchen</p>
                            <p><i class=\"icon_clock_alt\"></i>October 14, 2023</p>
                            <p><i class=\"icon_chat_alt\"></i>2 Comments</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb part end -->

    <!-- blog details part here -->
    <section class=\"blog_page section_padding\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"single_blog_details\">
                        <div data-aos=\"fade-up\"
            data-aos-duration=\"1000\" class=\"blog_details_content\">
                            <img src=\"../public/img/blog/blog_5.png\" alt=\"#\" class=\"img-fluid\">
                            <h2>How to Become Master in CSS within a Week.</h2>
                            <p>He nicked it starkers lost the plot argy-bargy pear shaped 
                            faff about give us a bell chancer young delinquent at public 
                            school, cockup matie boy sloshed cheeky bugger tomfoolery arse 
                            over tit morish. Show off show off pick your nose and blow off 
                            cobblers lavatory hanky panky squiffy bloke Elizabeth say, my good 
                            sir lurgy what a plonker up the duff only a quid blag blower, pardon 
                            you bleeder spend a penny chip shop excuse my French Eaton. Bubble 
                            and squeak geeza bobby chimney pot bleeder spiffing brilliant down 
                            the pub butty a, spend a penny it's all gone to pot barney cup of 
                            tea no biggie hotpot zonked cracking goal, Richard bodge give us a 
                            bell only a quid baking cakes grub that what a plonker. James Bond 
                            arse over tit don't get shirty with me lurgy say it's your round what 
                            a load of rubbish horse play, Harry tomfoolery bubble and squeak at 
                            public school the bee's knees knees up, grub cup of tea tosser chap 
                            blatant the full monty. Car boot matie boy up the kyver pear shaped 
                            bum bag fanny around blow off say what a plonker hunky-dory, a load 
                            of old tosh quaint sloshed bugger dropped a clanger lavatory skive 
                            off lurgy naff, bonnet James Bond boot the wireless.</p>
                            <p>Cack crikey lurgy Queen's English quaint gosh victoria sponge super 
                            I don't want no agro my lady, chinwag Richard zonked bugger bubble 
                            and squeak the bee's knees my good sir me old mucker cup of char, 
                            spiffing tosse.!</p>
                        </div>
                        <div data-aos=\"fade-up\"
            data-aos-duration=\"1200\" class=\"single_page_blog_post quote_post\">
                            <div class=\"single_blog_content\">
                                <div class=\"post_author\">
                                    <p><i class=\"icon_clock_alt\"></i>icon_clock_alt</p>
                                </div>
                                <p> <a href=\"#\"> My lady the bee's knees cack bog-standard mush A bit of 
                                how's your father, bits and bobs off his nut Oxford crikey the BBC, chinwag 
                                a blinding shot pardon me bleeding.</a></p>
                                <a href=\"#\" class=\"read_more_btn\">Read More </a>
                                <img src=\"../public/img/icon/quote_1.png\" alt=\"#\" class=\"quote_icon_1\">
                                <img src=\"../public/img/icon/quote_2.png\" alt=\"#\" class=\"quote_icon_2\">
                            </div>
                        </div>
                        <div data-aos=\"fade-up\"
            data-aos-duration=\"1400\" class=\"blog_details_content\">
                            <h2>How to Become Master in CSS within a Week.</h2>
                            <p>Bloke mush bum bag cheesed off at public school victoria sponge barney 
                            blimey, excuse my French bubble and squeak show off show off pick your 
                            nose and blow off me old mucker Elizabeth crikey mush, I A bit of how's 
                            your father quaint arse over tit jolly good cobblers Eaton, car boot 
                            cheeky bugger morish horse play cockup bugger all mate. It's your round 
                            Queen's English cracking goal off his nut chip shop excuse my French 
                            cheeky bugger is cobblers butty burke up the kyver, bonnet vagabond bum 
                            bag daft bugger bleeding starkers hotpot what a plonker that.!</p>
                        </div>
                        <div data-aos=\"fade-up\"
            data-aos-duration=\"1600\" class=\"single_blog_list\">
                            <p><i class=\"icon_check_alt2\"></i>Quisque sit amet</p>
                            <p><i class=\"icon_check_alt2\"></i>Proin in Semper Turpis</p>
                            <p><i class=\"icon_check_alt2\"></i>Carbohydrates: 3.0g</p>
                            <p><i class=\"icon_check_alt2\"></i>Proin Dapibus</p>
                            <p><i class=\"icon_check_alt2\"></i>Protein: 3.4g</p>
                            <p><i class=\"icon_check_alt2\"></i>Confectionery</p>
                            <p><i class=\"icon_check_alt2\"></i>Sodium: 240mg</p>
                            <p><i class=\"icon_check_alt2\"></i>Thanksgiving Images</p>
                            <p><i class=\"icon_check_alt2\"></i>2/4 Suspendisse</p>
                        </div>
                        <p data-aos=\"fade-up\"
            data-aos-duration=\"1800\">Super bog-standard Why bevvy tinkety tonk old fruit twit it's 
                        all gone to pot David geeza ruddy spiffing, bobby barney a 
                        brolly tomfoolery hunky-dory codswallop horse play cuppa hotpot, 
                        bamboozled mufty happy days cheesed.</p>
                        <img data-aos=\"fade-up\"
                             data-aos-duration=\"2000\" src=\"../public/img/blog/blog_2.png\" alt=\"#\" class=\"img-fluid\">
                        <p data-aos=\"fade-up\"
            data-aos-duration=\"2200\">Baking cakes down the pub crikey cracking goal mufty he legged 
                        it arse over tit brolly, old boot happy days my lady me old mucker 
                        gormless lemon squeezy butty, the wireless bleeding cor blimey 
                        guvnor some dodgy chav Charles Jeffrey. Hotpot me old mucker I 
                        cup of tea he legged it my lady twit give us a bell happy days 
                        he nicked it cheesed off blimey lurgy gutted mate knees up car 
                        boot, ruddy pardon me quaint show off show off pick your nose 
                        and blow off brolly chinwag absolutely bladdered owt to do.</p>
                        <div data-aos=\"fade-up\"
            data-aos-duration=\"2400\" class=\"tag_share_list blog_page_single_item\">
                            <div class=\"post_tag d-flex align-items-center\">
                                <h4 class=\"tag-title\">Tags:</h4>
                                <a href=\"#\" class=\"btn_4\">Life Style</a>
                                <a href=\"#\" class=\"btn_4\">Education</a>
                                <a href=\"#\" class=\"btn_4\">Sport</a>
                            </div>
                            <div class=\"share_icon_list d-flex align-items-center\">
                                <h4>Share:</h4>
                                <a href=\"#\"><i class=\"social_facebook\"></i></a>
                                <a href=\"#\"><i class=\"social_twitter\"></i></a>
                                <a href=\"#\"><i class=\"social_pinterest\"></i></a>
                                <a href=\"#\"><i class=\"social_linkedin\"></i></a>
                            </div>
                        </div>
                        <div data-aos=\"fade-up\"
            data-aos-duration=\"2600\" class=\"post_author section_bg blog_page_single_item\">
                            <img src=\"../public/img/author_5.jpg\" alt=\"#\">
                            <div class=\"author_details\">
                                <h5>Jim Séchen <span>Editor</span></h5>
                                <p>Show off show off pick your nose and blow off 
                                chancer naff spend a penny he lost his bottle Jeffrey wellies cup of char I don't want no agro.!</p>
                            </div>
                        </div>
                        <div data-aos=\"fade-up\"
            data-aos-duration=\"2800\" class=\"single_review_part blog_page_single_item\">
                            <div class=\"comment_part\">
                                <h3>3 Comment</h3>
                                <div class=\"media\">
                                    <img src=\"../public/img/student.png\" class=\"admin_img\" alt=\"#\">
                                    <div class=\"media-body\">
                                        <div class=\"admin_tittle\">
                                            <h5>Gunther Beard <span>Just Now</span></h5>
                                        </div>
                                        <p>The bee's knees he nicked it gosh Queen's English don't get
                                            shirty with me cuppa ruddy horse play amongst knackered,
                                            what a plonker chap.!</p>
                                        <a href=\"#\" class=\"reply_btn\"><i class=\"arrow_back\"></i>Reply</a>
                                        <div class=\"media\">
                                            <img src=\"../public/img/student.png\" class=\"admin_img\" alt=\"#\">
                                            <div class=\"media-body\">
                                                <div class=\"admin_tittle\">
                                                    <h5>Gunther Beard <span>44 mins ago</span></h5>
                                                </div>
                                                <p>The bee's knees he nicked it gosh Queen's English don't get
                                                    shirty with me cuppa ruddy horse play amongst knackered,
                                                    what a plonker chap.!</p>
                                                <a href=\"#\" class=\"reply_btn\"><i class=\"arrow_back\"></i>Reply</a>
                                            </div>
                                        </div>
                                        <div class=\"media\">
                                            <img src=\"../public/img/student.png\" class=\"admin_img\" alt=\"#\">
                                            <div class=\"media-body\">
                                                <div class=\"admin_tittle\">
                                                    <h5>Gunther Beard <span>44 mins ago</span></h5>
                                                </div>
                                                <p>The bee's knees he nicked it gosh Queen's English don't get
                                                    shirty with me cuppa ruddy horse play amongst knackered,
                                                    what a plonker chap.!</p>
                                                <a href=\"#\" class=\"reply_btn\"><i class=\"arrow_back\"></i>Reply</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-aos=\"fade-up\"
            data-aos-duration=\"3000\" class=\"review_form blog_page_single_item\">
                            <h3>Leave a Reply</h3>
                            <form action=\"#\">
                                <div class=\"row\">
                                    <div class=\"col-lg-6\">
                                        <div class=\"form_single_item\">
                                            <input type=\"text\" name=\"#\" placeholder=\"Name\">
                                        </div>
                                    </div>
                                    <div class=\"col-lg-6\">
                                        <div class=\"form_single_item\">
                                            <input type=\"email\" name=\"#\" placeholder=\"email\">
                                        </div>
                                    </div>
                                    <div class=\"col-lg-12\">
                                        <div class=\"form_single_item\">
                                            <textarea name=\"#\" placeholder=\"Review Content\"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <a href=\"#\" class=\"btn_3\">Submit Review</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog details part end -->

    <!-- cta part here -->
    <section class=\"cta_part section_padding\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-lg-8\">
                    <div class=\"cta_part_iner\">
                        <h2>Best teachers in every subject. <br>
                            Let’s get started</h2>
                        <p>We can teach you anything</p>
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"cta_btn\">
                        <a href=\"course-list.html\" class=\"btn_3\">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"circle_shape_1\"></div>
        <div class=\"circle_shape_2\"></div>
    </section>
    <!-- cta part end -->

    <!-- Start LTR & RTL Button -->
\t<div class=\"ltr-rtl-button\">
\t\t<a class=\"default-btn active ltr\">
\t\t    LTR
\t\t</a>
\t\t<a class=\"default-btn rtl\">
\t\t    RTL
\t\t</a>
\t</div>
\t<!-- End LTR & RTL Button -->
\t\t
\t<!-- footer part here -->
    <footer class=\"footer_section\">
        <div class=\"container\">
            <div class=\"row justify-content-between\">
                <div class=\"col-lg-3 col-sm-6\">
                    <div class=\"single_feature_footer\">
                        <a href=\"index.html\"><img src=\"../public/img/logo.png\" alt=\"#\"></a>
                        <p>Loo faff about cockup Harry baking cakes hunky dory mush happy 
                        days on your bike mate.</p>
                        <div class=\"footer_contact_info\">
                            <a href=\"tel:+464145684325\"><i class=\"icon_phone\"></i>+464 145 684 325</a>
                            <a href=\"mailto:education@example.com\"><i class=\"icon_mail_alt\"></i>education@example.com</a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-sm-6\">
                    <div class=\"single_feature_footer footer_nav\">
                        <h4>Popular Courses</h4>
                        <ul>
                            <li><a href=\"course-details.html\">Algebra & Calculus</a></li>
                            <li><a href=\"course-details.html\">Business Strategy</a></li>
                            <li><a href=\"course-details.html\">Computer Security & Network</a></li>
                            <li><a href=\"course-details.html\">Data Analysis</a></li>
                            <li><a href=\"course-details.html\">English Learning</a></li>
                            <li><a href=\"course-details.html\">Music & Art</a></li>
                        </ul>
                    </div>
                </div>         
                <div class=\"col-lg-3 col-sm-6\">
                    <div class=\"single_feature_footer footer_nav\">
                        <h4>COURSE CATEGORIES</h4>
                        <ul>
                            <li><a href=\"course-category.html\">Arts & Humanities</a></li>
                            <li><a href=\"course-category.html\">Business</a></li>
                            <li><a href=\"course-category.html\">Computer Science</a></li>
                            <li><a href=\"course-category.html\">Data Science</a></li>
                            <li><a href=\"course-category.html\">Language Learning</a></li>
                            <li><a href=\"course-category.html\">Math & Logic</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-lg-2 col-sm-6\">
                    <div class=\"single_feature_footer footer_nav\">
                        <h4>Quick Links</h4>
                        <ul>
                            <li><a href=\"#\">Live Class</a></li>
                            <li><a href=\"#\">Tuition Fees</a></li>
                            <li><a href=\"#\">Terms & Conditions</a></li>
                            <li><a href=\"#\">Privacy Policy</a></li>
                            <li><a href=\"#\">Support</a></li>
                            <li><a href=\"#\">Career</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-lg-12\">
                    <div class=\"copyright_part\">
                        <div class=\"row align-items-center\">
                            <div class=\"col-lg-6 col-md-8\">
                                <p>© Copyright 2023 Design by <a href=\"#\" class=\"text_underline\">MhrTheme.</a> All rights reserved.</p>
                            </div> 
                            <div class=\"col-lg-6 col-md-4\">
                                <div class=\"social_icon\">
                                    <a href=\"#\"><i class=\"social_facebook\"></i></a>
                                    <a href=\"#\"><i class=\"social_twitter\"></i></a>
                                    <a href=\"#\"><i class=\"social_youtube\"></i></a>
                                    <a href=\"#\"><i class=\"social_linkedin\"></i></a>
                                    <a href=\"#\"><i class=\"social_skype\"></i></a>
                                    <a href=\"#\"><i class=\"social_instagram\"></i></a>
                                    <a href=\"#\"><i class=\"social_pinterest\"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img src=\"../public/img/icon/shape_01.png\" alt=\"#\" class=\"footer_sharp_1\">
        <img src=\"../public/img/icon/about_shape_02.png\" alt=\"#\" class=\"footer_sharp_2 custom-animation2\">
        <img src=\"../public/img/icon/about_shape_03.png\" alt=\"#\" class=\"footer_sharp_3 custom-animation3\">
    </footer>
    <!-- footer part end -->

    <!-- jquery slim -->
    <script src=\"../public/js/jquery-3.4.1.min.js\"></script>
    <!-- popper js -->
    <script src=\"../public/js/popper.min.js\"></script>
    <!-- bootstarp js -->
    <script src=\"../public/js/bootstrap.min.js\"></script>
    <!-- nice select -->
    <script src=\"../public/vendors/niceselect/js/jquery.nice-select.min.js\"></script>
    <!-- owl carousel js -->
    <script src=\"../public/vendors/owl_carousel/js/owl.carousel.min.js\"></script>
    <!-- magnify popup js -->
    <script src=\"../public/vendors/magnify_popup/jquery.magnific-popup.js\"></script>
    <!-- simplyCountdown js -->
    <script src=\"../public/vendors/countdown/js/simplyCountdown.min.js\"></script>
    <!-- counter js -->
    <script src=\"../public/vendors/counter/jquery.countTo.js\"></script>
    <!-- aos js -->
    <script src=\"../public/vendors/aos/aos.js\"></script>
    <!-- custom js -->
    <script src=\"../public/js/custom.js\"></script>
</body>

</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "blog-details-no-sidebar.html";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"zxx\">

<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
    <title>Blog Details No Sidebar - Educational and Online Course HTML Website Template</title>  
    <link rel=\"icon\" href=\"../public/img/favicon.png\" type=\"image/png\">
    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\"../public/css/bootstrap.min.css\"/>
    <!-- animate CSS -->
    <link rel=\"stylesheet\" href=\"../public/css/animate.css\"/>
    <!-- font awesome CSS -->
    <link rel=\"stylesheet\" href=\"../public/vendors/elegant_Icon/elegent_icon.css\"/>
    <!-- nice select CSS -->
    <link rel=\"stylesheet\" href=\"../public/vendors/niceselect/css/nice-select.css\"/>
    <!-- owl carousel CSS -->
    <link rel=\"stylesheet\" href=\"../public/vendors/owl_carousel/css/owl.carousel.css\"/>
    <!-- magnific popup CSS -->
    <link rel=\"stylesheet\" href=\"../public/vendors/magnify_popup/magnific-popup.css\"/>
    <!-- Countdown CSS -->
    <link rel=\"stylesheet\" href=\"../public/vendors/countdown/css/Countdown.css\"/>
    <!-- flaticon CSS -->
    <link rel=\"stylesheet\" href=\"../public/css/flaticon.css\"/>
    <!-- aos CSS -->
    <link rel=\"stylesheet\" href=\"../public/vendors/aos/aos.css\"/>
    <!-- style CSS -->
    <link rel=\"stylesheet\" href=\"style.css\"/>
</head>

<body>
    <!-- start Preloader  -->
    <div class=\"preloder_part\">
        <div class=\"spinner\">
            <div class=\"dot1\"></div>
            <div class=\"dot2\"></div>
        </div>
    </div>
    <!-- End Preloader  -->

    <!-- header part here -->
    <header class=\"header_part\">
        <div class=\"sub_header section_bg\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xl-6 col-lg-7 col-md-7\">
                        <div class=\"header_contact_info\">
                            <a href=\"tel:+4641468425\"><i class=\"icon_phone\"></i>+464 145 684 325</a>
                            <a href=\"mailto:admin@example.com\"><i class=\"icon_mail_alt\"></i>admin@example.com</a>
                        </div>
                    </div>
                    <div class=\"col-xl-6 col-lg-5 col-md-5\">
                        <div class=\"header_login_info\">
                            <a href=\"teacher.html\">Become A Teacher</a>
                            <a href=\"my-profile.html\">My Profile</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"main_nav\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"header_iner d-flex justify-content-between align-items-center\">
                            <div class=\"sidebar_icon troggle_icon d-lg-none\">
                                <i class=\"icon_menu\"></i>
                            </div>
                            <div class=\"logo\">
                                <a href=\"index.html\"><img src=\"../public/img/logo.png\" alt=\"#\"></a>
                            </div>

                            <nav class=\"navbar_bar\">
                                <ul>
                                    <li class=\"mega_menu_dropdown\">
                                        <a class=\"mega_menu_dropdown-toggle nav-link active\" href=\"#\">Home</a>
                                        <ul>
                                            <li><a class=\"active\" href=\"index.html\">Homepage Style One</a></li>
                                            <li><a href=\"index-two.html\">Homepage Style Two</a>
                                            </li>
                                            <li><a href=\"index.html\">One Page Home</a>
                                            </li>
                                            <li><a href=\"index-four.html\">Dark Homepage</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class=\"mega_menu_dropdown\">
                                        <a class=\"mega_menu_dropdown-toggle nav-link\" href=\"#\">All Courses</a>
                                        <ul>
                                            <li><a href=\"course-list.html\">Course List</a></li>
                                            <li><a href=\"course-grid.html\">Course Grid</a></li>
                                            <li><a href=\"course-slider.html\">Course Slider</a></li>
                                            <li><a href=\"course-details.html\">Course Details</a></li>
                                            <li><a href=\"course-category.html\">Course Category</a></li>
                                            <li><a href=\"lessons.html\">Lessons</a></li>
                                            <li><a href=\"quizzes.html\">Quizzes</a></li>
                                            <li><a href=\"checkout.html\">Checkout</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"mega_menu_dropdown\">
                                        <a class=\"mega_menu_dropdown-toggle nav-link\" href=\"#\">Blog Classic</a>
                                        <ul>
                                            <li><a href=\"blog-grid.html\">Blog Grid</a></li>
                                            <li><a href=\"blog-slider.html\">Blog Slider</a></li>
                                            <li><a href=\"blog-left-sidebar.html\">Blog Left Sidebar</a></li>
                                            <li><a href=\"blog-right-sidebar.html\">Blog Right Sidebar</a></li>
                                            <li><a href=\"blog-details-no-sidebar.html\">Blog Details No Sidebar</a></li>
                                            <li><a href=\"blog-details-left-sidebar.html\">Blog Details Left Sidebar</a></li>
                                            <li><a href=\"blog-details-right-sidebar.html\">Blog Details Right Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"mega_menu_dropdown\">
                                        <a class=\"mega_menu_dropdown-toggle nav-link\" href=\"#\">Pages</a>
                                        <ul>
                                            <li><a href=\"about.html\">About Us</a></li>
                                            <li><a href=\"events.html\">Events</a></li>
                                            <li><a href=\"instructor.html\">Instructor</a></li>
                                            <li><a href=\"testimonial.html\">Testimonial</a></li>
                                            <li><a href=\"sample-page.html\">Sample Page</a></li>
                                            <li><a href=\"page-left-sidebar.html\">Page Left Sidebar</a></li>
                                            <li><a href=\"page-right-sidebar.html\">Page Right Sidebar</a></li>
                                            <li><a href=\"404.html\">404 Page</a></li>
                                        </ul>
                                    </li>
                                    <li><a href=\"contact.html\">Contact Us</a></li>
                                </ul>
                            </nav>
                            <div class=\"navbar_btn\">
                                <a href=\"live-class.html\" class=\"btn_1\">Join Live Class</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </header>
    <!-- header part end -->

    <!-- breadcrumb part -->
    <section class=\"breadcrumb_part blog_breadcrumb\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8\">
                    <div class=\"breadcrumb_iner\">
                        <span>Education</span>
                        <h2>Best products for fitness
                            nutrition and muscles</h2>
                        <div class=\"breadcrumb_post_author\">
                            <p><i class=\"icon_profile\"></i>Jim Séchen</p>
                            <p><i class=\"icon_clock_alt\"></i>October 14, 2023</p>
                            <p><i class=\"icon_chat_alt\"></i>2 Comments</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb part end -->

    <!-- blog details part here -->
    <section class=\"blog_page section_padding\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"single_blog_details\">
                        <div data-aos=\"fade-up\"
            data-aos-duration=\"1000\" class=\"blog_details_content\">
                            <img src=\"../public/img/blog/blog_5.png\" alt=\"#\" class=\"img-fluid\">
                            <h2>How to Become Master in CSS within a Week.</h2>
                            <p>He nicked it starkers lost the plot argy-bargy pear shaped 
                            faff about give us a bell chancer young delinquent at public 
                            school, cockup matie boy sloshed cheeky bugger tomfoolery arse 
                            over tit morish. Show off show off pick your nose and blow off 
                            cobblers lavatory hanky panky squiffy bloke Elizabeth say, my good 
                            sir lurgy what a plonker up the duff only a quid blag blower, pardon 
                            you bleeder spend a penny chip shop excuse my French Eaton. Bubble 
                            and squeak geeza bobby chimney pot bleeder spiffing brilliant down 
                            the pub butty a, spend a penny it's all gone to pot barney cup of 
                            tea no biggie hotpot zonked cracking goal, Richard bodge give us a 
                            bell only a quid baking cakes grub that what a plonker. James Bond 
                            arse over tit don't get shirty with me lurgy say it's your round what 
                            a load of rubbish horse play, Harry tomfoolery bubble and squeak at 
                            public school the bee's knees knees up, grub cup of tea tosser chap 
                            blatant the full monty. Car boot matie boy up the kyver pear shaped 
                            bum bag fanny around blow off say what a plonker hunky-dory, a load 
                            of old tosh quaint sloshed bugger dropped a clanger lavatory skive 
                            off lurgy naff, bonnet James Bond boot the wireless.</p>
                            <p>Cack crikey lurgy Queen's English quaint gosh victoria sponge super 
                            I don't want no agro my lady, chinwag Richard zonked bugger bubble 
                            and squeak the bee's knees my good sir me old mucker cup of char, 
                            spiffing tosse.!</p>
                        </div>
                        <div data-aos=\"fade-up\"
            data-aos-duration=\"1200\" class=\"single_page_blog_post quote_post\">
                            <div class=\"single_blog_content\">
                                <div class=\"post_author\">
                                    <p><i class=\"icon_clock_alt\"></i>icon_clock_alt</p>
                                </div>
                                <p> <a href=\"#\"> My lady the bee's knees cack bog-standard mush A bit of 
                                how's your father, bits and bobs off his nut Oxford crikey the BBC, chinwag 
                                a blinding shot pardon me bleeding.</a></p>
                                <a href=\"#\" class=\"read_more_btn\">Read More </a>
                                <img src=\"../public/img/icon/quote_1.png\" alt=\"#\" class=\"quote_icon_1\">
                                <img src=\"../public/img/icon/quote_2.png\" alt=\"#\" class=\"quote_icon_2\">
                            </div>
                        </div>
                        <div data-aos=\"fade-up\"
            data-aos-duration=\"1400\" class=\"blog_details_content\">
                            <h2>How to Become Master in CSS within a Week.</h2>
                            <p>Bloke mush bum bag cheesed off at public school victoria sponge barney 
                            blimey, excuse my French bubble and squeak show off show off pick your 
                            nose and blow off me old mucker Elizabeth crikey mush, I A bit of how's 
                            your father quaint arse over tit jolly good cobblers Eaton, car boot 
                            cheeky bugger morish horse play cockup bugger all mate. It's your round 
                            Queen's English cracking goal off his nut chip shop excuse my French 
                            cheeky bugger is cobblers butty burke up the kyver, bonnet vagabond bum 
                            bag daft bugger bleeding starkers hotpot what a plonker that.!</p>
                        </div>
                        <div data-aos=\"fade-up\"
            data-aos-duration=\"1600\" class=\"single_blog_list\">
                            <p><i class=\"icon_check_alt2\"></i>Quisque sit amet</p>
                            <p><i class=\"icon_check_alt2\"></i>Proin in Semper Turpis</p>
                            <p><i class=\"icon_check_alt2\"></i>Carbohydrates: 3.0g</p>
                            <p><i class=\"icon_check_alt2\"></i>Proin Dapibus</p>
                            <p><i class=\"icon_check_alt2\"></i>Protein: 3.4g</p>
                            <p><i class=\"icon_check_alt2\"></i>Confectionery</p>
                            <p><i class=\"icon_check_alt2\"></i>Sodium: 240mg</p>
                            <p><i class=\"icon_check_alt2\"></i>Thanksgiving Images</p>
                            <p><i class=\"icon_check_alt2\"></i>2/4 Suspendisse</p>
                        </div>
                        <p data-aos=\"fade-up\"
            data-aos-duration=\"1800\">Super bog-standard Why bevvy tinkety tonk old fruit twit it's 
                        all gone to pot David geeza ruddy spiffing, bobby barney a 
                        brolly tomfoolery hunky-dory codswallop horse play cuppa hotpot, 
                        bamboozled mufty happy days cheesed.</p>
                        <img data-aos=\"fade-up\"
                             data-aos-duration=\"2000\" src=\"../public/img/blog/blog_2.png\" alt=\"#\" class=\"img-fluid\">
                        <p data-aos=\"fade-up\"
            data-aos-duration=\"2200\">Baking cakes down the pub crikey cracking goal mufty he legged 
                        it arse over tit brolly, old boot happy days my lady me old mucker 
                        gormless lemon squeezy butty, the wireless bleeding cor blimey 
                        guvnor some dodgy chav Charles Jeffrey. Hotpot me old mucker I 
                        cup of tea he legged it my lady twit give us a bell happy days 
                        he nicked it cheesed off blimey lurgy gutted mate knees up car 
                        boot, ruddy pardon me quaint show off show off pick your nose 
                        and blow off brolly chinwag absolutely bladdered owt to do.</p>
                        <div data-aos=\"fade-up\"
            data-aos-duration=\"2400\" class=\"tag_share_list blog_page_single_item\">
                            <div class=\"post_tag d-flex align-items-center\">
                                <h4 class=\"tag-title\">Tags:</h4>
                                <a href=\"#\" class=\"btn_4\">Life Style</a>
                                <a href=\"#\" class=\"btn_4\">Education</a>
                                <a href=\"#\" class=\"btn_4\">Sport</a>
                            </div>
                            <div class=\"share_icon_list d-flex align-items-center\">
                                <h4>Share:</h4>
                                <a href=\"#\"><i class=\"social_facebook\"></i></a>
                                <a href=\"#\"><i class=\"social_twitter\"></i></a>
                                <a href=\"#\"><i class=\"social_pinterest\"></i></a>
                                <a href=\"#\"><i class=\"social_linkedin\"></i></a>
                            </div>
                        </div>
                        <div data-aos=\"fade-up\"
            data-aos-duration=\"2600\" class=\"post_author section_bg blog_page_single_item\">
                            <img src=\"../public/img/author_5.jpg\" alt=\"#\">
                            <div class=\"author_details\">
                                <h5>Jim Séchen <span>Editor</span></h5>
                                <p>Show off show off pick your nose and blow off 
                                chancer naff spend a penny he lost his bottle Jeffrey wellies cup of char I don't want no agro.!</p>
                            </div>
                        </div>
                        <div data-aos=\"fade-up\"
            data-aos-duration=\"2800\" class=\"single_review_part blog_page_single_item\">
                            <div class=\"comment_part\">
                                <h3>3 Comment</h3>
                                <div class=\"media\">
                                    <img src=\"../public/img/student.png\" class=\"admin_img\" alt=\"#\">
                                    <div class=\"media-body\">
                                        <div class=\"admin_tittle\">
                                            <h5>Gunther Beard <span>Just Now</span></h5>
                                        </div>
                                        <p>The bee's knees he nicked it gosh Queen's English don't get
                                            shirty with me cuppa ruddy horse play amongst knackered,
                                            what a plonker chap.!</p>
                                        <a href=\"#\" class=\"reply_btn\"><i class=\"arrow_back\"></i>Reply</a>
                                        <div class=\"media\">
                                            <img src=\"../public/img/student.png\" class=\"admin_img\" alt=\"#\">
                                            <div class=\"media-body\">
                                                <div class=\"admin_tittle\">
                                                    <h5>Gunther Beard <span>44 mins ago</span></h5>
                                                </div>
                                                <p>The bee's knees he nicked it gosh Queen's English don't get
                                                    shirty with me cuppa ruddy horse play amongst knackered,
                                                    what a plonker chap.!</p>
                                                <a href=\"#\" class=\"reply_btn\"><i class=\"arrow_back\"></i>Reply</a>
                                            </div>
                                        </div>
                                        <div class=\"media\">
                                            <img src=\"../public/img/student.png\" class=\"admin_img\" alt=\"#\">
                                            <div class=\"media-body\">
                                                <div class=\"admin_tittle\">
                                                    <h5>Gunther Beard <span>44 mins ago</span></h5>
                                                </div>
                                                <p>The bee's knees he nicked it gosh Queen's English don't get
                                                    shirty with me cuppa ruddy horse play amongst knackered,
                                                    what a plonker chap.!</p>
                                                <a href=\"#\" class=\"reply_btn\"><i class=\"arrow_back\"></i>Reply</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-aos=\"fade-up\"
            data-aos-duration=\"3000\" class=\"review_form blog_page_single_item\">
                            <h3>Leave a Reply</h3>
                            <form action=\"#\">
                                <div class=\"row\">
                                    <div class=\"col-lg-6\">
                                        <div class=\"form_single_item\">
                                            <input type=\"text\" name=\"#\" placeholder=\"Name\">
                                        </div>
                                    </div>
                                    <div class=\"col-lg-6\">
                                        <div class=\"form_single_item\">
                                            <input type=\"email\" name=\"#\" placeholder=\"email\">
                                        </div>
                                    </div>
                                    <div class=\"col-lg-12\">
                                        <div class=\"form_single_item\">
                                            <textarea name=\"#\" placeholder=\"Review Content\"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <a href=\"#\" class=\"btn_3\">Submit Review</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog details part end -->

    <!-- cta part here -->
    <section class=\"cta_part section_padding\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-lg-8\">
                    <div class=\"cta_part_iner\">
                        <h2>Best teachers in every subject. <br>
                            Let’s get started</h2>
                        <p>We can teach you anything</p>
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"cta_btn\">
                        <a href=\"course-list.html\" class=\"btn_3\">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"circle_shape_1\"></div>
        <div class=\"circle_shape_2\"></div>
    </section>
    <!-- cta part end -->

    <!-- Start LTR & RTL Button -->
\t<div class=\"ltr-rtl-button\">
\t\t<a class=\"default-btn active ltr\">
\t\t    LTR
\t\t</a>
\t\t<a class=\"default-btn rtl\">
\t\t    RTL
\t\t</a>
\t</div>
\t<!-- End LTR & RTL Button -->
\t\t
\t<!-- footer part here -->
    <footer class=\"footer_section\">
        <div class=\"container\">
            <div class=\"row justify-content-between\">
                <div class=\"col-lg-3 col-sm-6\">
                    <div class=\"single_feature_footer\">
                        <a href=\"index.html\"><img src=\"../public/img/logo.png\" alt=\"#\"></a>
                        <p>Loo faff about cockup Harry baking cakes hunky dory mush happy 
                        days on your bike mate.</p>
                        <div class=\"footer_contact_info\">
                            <a href=\"tel:+464145684325\"><i class=\"icon_phone\"></i>+464 145 684 325</a>
                            <a href=\"mailto:education@example.com\"><i class=\"icon_mail_alt\"></i>education@example.com</a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-sm-6\">
                    <div class=\"single_feature_footer footer_nav\">
                        <h4>Popular Courses</h4>
                        <ul>
                            <li><a href=\"course-details.html\">Algebra & Calculus</a></li>
                            <li><a href=\"course-details.html\">Business Strategy</a></li>
                            <li><a href=\"course-details.html\">Computer Security & Network</a></li>
                            <li><a href=\"course-details.html\">Data Analysis</a></li>
                            <li><a href=\"course-details.html\">English Learning</a></li>
                            <li><a href=\"course-details.html\">Music & Art</a></li>
                        </ul>
                    </div>
                </div>         
                <div class=\"col-lg-3 col-sm-6\">
                    <div class=\"single_feature_footer footer_nav\">
                        <h4>COURSE CATEGORIES</h4>
                        <ul>
                            <li><a href=\"course-category.html\">Arts & Humanities</a></li>
                            <li><a href=\"course-category.html\">Business</a></li>
                            <li><a href=\"course-category.html\">Computer Science</a></li>
                            <li><a href=\"course-category.html\">Data Science</a></li>
                            <li><a href=\"course-category.html\">Language Learning</a></li>
                            <li><a href=\"course-category.html\">Math & Logic</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-lg-2 col-sm-6\">
                    <div class=\"single_feature_footer footer_nav\">
                        <h4>Quick Links</h4>
                        <ul>
                            <li><a href=\"#\">Live Class</a></li>
                            <li><a href=\"#\">Tuition Fees</a></li>
                            <li><a href=\"#\">Terms & Conditions</a></li>
                            <li><a href=\"#\">Privacy Policy</a></li>
                            <li><a href=\"#\">Support</a></li>
                            <li><a href=\"#\">Career</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-lg-12\">
                    <div class=\"copyright_part\">
                        <div class=\"row align-items-center\">
                            <div class=\"col-lg-6 col-md-8\">
                                <p>© Copyright 2023 Design by <a href=\"#\" class=\"text_underline\">MhrTheme.</a> All rights reserved.</p>
                            </div> 
                            <div class=\"col-lg-6 col-md-4\">
                                <div class=\"social_icon\">
                                    <a href=\"#\"><i class=\"social_facebook\"></i></a>
                                    <a href=\"#\"><i class=\"social_twitter\"></i></a>
                                    <a href=\"#\"><i class=\"social_youtube\"></i></a>
                                    <a href=\"#\"><i class=\"social_linkedin\"></i></a>
                                    <a href=\"#\"><i class=\"social_skype\"></i></a>
                                    <a href=\"#\"><i class=\"social_instagram\"></i></a>
                                    <a href=\"#\"><i class=\"social_pinterest\"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img src=\"../public/img/icon/shape_01.png\" alt=\"#\" class=\"footer_sharp_1\">
        <img src=\"../public/img/icon/about_shape_02.png\" alt=\"#\" class=\"footer_sharp_2 custom-animation2\">
        <img src=\"../public/img/icon/about_shape_03.png\" alt=\"#\" class=\"footer_sharp_3 custom-animation3\">
    </footer>
    <!-- footer part end -->

    <!-- jquery slim -->
    <script src=\"../public/js/jquery-3.4.1.min.js\"></script>
    <!-- popper js -->
    <script src=\"../public/js/popper.min.js\"></script>
    <!-- bootstarp js -->
    <script src=\"../public/js/bootstrap.min.js\"></script>
    <!-- nice select -->
    <script src=\"../public/vendors/niceselect/js/jquery.nice-select.min.js\"></script>
    <!-- owl carousel js -->
    <script src=\"../public/vendors/owl_carousel/js/owl.carousel.min.js\"></script>
    <!-- magnify popup js -->
    <script src=\"../public/vendors/magnify_popup/jquery.magnific-popup.js\"></script>
    <!-- simplyCountdown js -->
    <script src=\"../public/vendors/countdown/js/simplyCountdown.min.js\"></script>
    <!-- counter js -->
    <script src=\"../public/vendors/counter/jquery.countTo.js\"></script>
    <!-- aos js -->
    <script src=\"../public/vendors/aos/aos.js\"></script>
    <!-- custom js -->
    <script src=\"../public/js/custom.js\"></script>
</body>

</html>
", "blog-details-no-sidebar.html", "/Users/admin/Desktop/panellhnies/panellhnies/templates/blog-details-no-sidebar.html");
    }
}
