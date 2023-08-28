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

/* my-profile.html */
class __TwigTemplate_67c3ce1d664a866bbbe12deb8b454cec extends Template
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
        // line 1
        echo "    <!DOCTYPE html>
    <html lang=\"zxx\">

    <head>
        <!-- Required meta tags -->
        <meta charset=\"utf-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
        <title>My Profile</title>
        <link rel=\"icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/pane_logo.png"), "html", null, true);
        echo "\" type=\"image/png\">
        <!-- Bootstrap CSS -->
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\"/>
        <!-- animate CSS -->
        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/animate.css"), "html", null, true);
        echo "\"/>
        <!-- font awesome CSS -->
        <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/elegant_Icon/elegent_icon.css"), "html", null, true);
        echo "\"/>
        <!-- nice select CSS -->
        <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/niceselect/css/nice-select.css"), "html", null, true);
        echo "\"/>
        <!-- owl carousel CSS -->
        <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/owl_carousel/css/owl.carousel.css"), "html", null, true);
        echo "\"/>
        <!-- magnific popup CSS -->
        <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/magnify_popup/magnific-popup.css"), "html", null, true);
        echo "\"/>
        <!-- Countdown CSS -->
        <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/countdown/css/Countdown.css"), "html", null, true);
        echo "\"/>
        <!-- flaticon CSS -->
        <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/flaticon.css"), "html", null, true);
        echo "\"/>
        <!-- aos CSS -->
        <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/aos/aos.css"), "html", null, true);
        echo "\"/>
        <!-- course CSS -->
        <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/courses.css"), "html", null, true);
        echo "\"/>
        <!-- style CSS -->
        <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\"/>


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

        ";
        // line 46
        $this->loadTemplate("header.html", "my-profile.html", 46)->display($context);
        // line 47
        echo "
        <!-- breadcrumb part -->
        <section class=\"breadcrumb_part blog_grid_bg\">
            <div class=\"container\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-6\">
                        <div class=\"breadcrumb_iner\">
                            <h2 id=\"greeting-message\"></h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb part end -->

        <!-- my profile part here -->
        <div id=\"primary\" class=\"content-area section_padding\" bis_skin_checked=\"1\">
            <main id=\"main\" class=\"site-main\">
                <div class=\"container\" bis_skin_checked=\"1\">
                    <article id=\"post-47\" class=\"post-47 page type-page status-publish hentry\">
                        <div class=\"entry-content\" bis_skin_checked=\"1\">
                            <div class=\"learnpress\" bis_skin_checked=\"1\">
                                <div id=\"learn-press-profile\" class=\"lp-user-profile current-user\" bis_skin_checked=\"1\">
                                    <div class=\"main-content-area\" bis_skin_checked=\"1\">
                                        <aside id=\"profile-sidebar\">
                                            <div id=\"profile-nav\" bis_skin_checked=\"1\">
                                                <ul class=\"lp-profile-nav-tabs\">
                                                    <li class=\"settings has-child\">
                                                        <a href=\"#\" data-slug=\"#\">
                                                            <i class=\"fas fa-cog\"></i>Ρυθμίσεις
                                                        </a>
                                                        <ul class=\"profile-tab-sections\">
                                                            <li class=\"basic-information\">
                                                                <a href=\"#\" id=\"general-link\">Γενικά</a>
                                                            </li>
                                                            <li class=\"change-password\">
                                                                <a href=\"#\" id=\"password-link\">Κωδικός</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <style>
                                                        .user-info-heading {
                                                            font-size: 36px;
                                                            color: #333;
                                                            margin-bottom: 20px;
                                                        }

                                                        .user-info-details {
                                                            background-color: #f5f5f5;
                                                            padding: 20px;
                                                            border-radius: 10px;
                                                            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                                                        }

                                                        .user-info-item {
                                                            margin-bottom: 15px;
                                                        }

                                                        .info-label {
                                                            font-weight: bold;
                                                            margin-right: 10px;
                                                            color: #666;
                                                        }

                                                        .info-value {
                                                            font-size: 18px;
                                                            color: #333;
                                                        }

                                                    </style>

                                                    <li class=\"logout\">
                                                        <a href=";
        // line 119
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo " data-slug=\"index.html\">
                                                            <i class=\"fas fa-sign-out-alt\"></i>Αποσύνδεση
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </aside>
                                        <article id=\"profile-content\" class=\"lp-profile-content\">
                                            <div id=\"profile-content-courses\" bis_skin_checked=\"1\">
                                                <div class=\"learn-press-profile-course__statistic\" data-ajax=\"{&quot;userID&quot;:3}\" bis_skin_checked=\"1\">
                                                    <div id=\"dashboard-general-statistic\" bis_skin_checked=\"1\">
                                                        <div id=\"user-info-container\"></div>
                                                        <div id=\"password-tab\" style=\"display: none;\">
                                                            <h3>Αλλαγή Κωδικού</h3>
                                                            <form id=\"change-password-form\" method=\"POST\">
                                                                <div class=\"form-group\">
                                                                    <label for=\"old-password\">Παλιός Κωδικός:</label>
                                                                    <input type=\"password\" id=\"old-password\" name=\"old-password\" class=\"form-control\">
                                                                </div>

                                                                <div class=\"form-group\">
                                                                    <label for=\"new-password\">Νέος Κωδικός:</label>
                                                                    <input type=\"password\" id=\"new-password\" name=\"new-password\" class=\"form-control\">
                                                                </div>

                                                                <div class=\"form-group\">
                                                                    <label for=\"confirm-password\">Νέος Κωδικός:</label>
                                                                    <input type=\"password\" id=\"confirm-password\" name=\"confirm-password\" class=\"form-control\">
                                                                </div>

                                                                <button type=\"submit\" class=\"btn btn-primary\">Change Password</button>
                                                            </form>
                                                            <div id=\"password-change-success\" style=\"display: none; background-color: beige; padding: 10px;\">
                                                                Password changed successfully.
                                                            </div>
                                                            <div id=\"modernAlert\">
                                                                <h3 id=\"alertTitle\"></h3>
                                                                <p id=\"alertMessage\"></p>
                                                                <style>
                                                                    #modernAlert {
                                                                        display: none;
                                                                        position: absolute;
                                                                        top: 50%;
                                                                        left: 50%;
                                                                        transform: translate(-50%, -50%);
                                                                        width: 200px;
                                                                        height: 120px;
                                                                        padding: 10px;
                                                                        background-color: beige;
                                                                        text-align: center;
                                                                        border-radius: 5px;
                                                                    }

                                                                    #alertTitle {
                                                                        font-size: 16px;
                                                                        margin-bottom: 10px;
                                                                    }

                                                                    #alertMessage {
                                                                        font-size: 12px;

                                                                    }

                                                                    .shake {
                                                                        animation: shake 0.10s ease-in-out;
                                                                    }

                                                                    @keyframes shake {
                                                                        0% {
                                                                            transform: translateX(-5px);
                                                                        }
                                                                        25% {
                                                                            transform: translateX(5px);
                                                                        }
                                                                        50% {
                                                                            transform: translateX(-5px);
                                                                        }
                                                                        75% {
                                                                            transform: translateX(5px);
                                                                        }
                                                                        100% {
                                                                            transform: translateX(0);
                                                                        }
                                                                    }

                                                                </style>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .entry-content -->
                    </article>
                </div>
            </main><!-- #main -->
        </div>
        <!-- my profile part end -->

        <!-- footer part here -->
        <footer class=\"footer_section\">
            ";
        // line 225
        $this->loadTemplate("footer.html", "my-profile.html", 225)->display($context);
        // line 226
        echo "
        </footer>
        <div class=\"modal\" id=\"modernAlert\">
            <h2 id=\"alertTitle\"></h2>
            <p id=\"alertMessage\"></p>
            <button class=\"close-button\" onclick=\"hideModernAlert()\">Close</button>
        </div>

        <!-- footer part end -->
        <!-- Your HTML code remains the same -->

        <!-- Your HTML code remains the same -->

        <!-- Your HTML code remains the same -->

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                // Fetch user information using AJAX
                fetch('/account/general')
                    .then((response) => response.json())
                    .then((data) => {
                        // Update the user information in the container
                        var hashedPassword = data.hashedPassword;
                        var form = document.getElementById('change-password-form');
                        form.addEventListener('submit', function (event) {
                            event.preventDefault(); // Prevent form submission

                            var oldPassword = document.getElementById('old-password').value;
                            var newPassword = document.getElementById('new-password').value;
                            var confirmPassword = document.getElementById('confirm-password').value;

                            // Verify if the old password matches the hashed password fetched from the server
                            if (oldPassword !== hashedPassword) {
                                showModernAlert('Password Change Failed', 'Old password is incorrect.');
                            } else if (newPassword !== confirmPassword) {
                                showModernAlert('Password Change Failed', 'Passwords do not match.');
                            } else if (!/[A-Z]/.test(newPassword)) {
                                showModernAlert('Password Change Failed', 'New password must contain at least one uppercase letter.');
                            } else if (!/\\d/.test(newPassword)) {
                                showModernAlert('Password Change Failed', 'New password must contain at least one number.');
                            } else if (newPassword.length < 8) {
                                showModernAlert('Password Change Failed', 'New password must be at least 8 characters long.');
                            }  else {
                                // Submit the form
                                fetch('/account/change-password', {
                                    method: 'POST',
                                    body: new FormData(form),
                                })
                                    .then((response) => {
                                        if (response.ok) {
                                            // Password change was successful
                                            showModernAlert('Password Changed', 'Password changed successfully.');
                                            form.reset();
                                        } else {
                                            // Password change failed
                                            showModernAlert('Password Change Failed', 'Your password is not matching.');
                                        }
                                    })
                                    .catch((error) => {
                                        console.error('Error:', error);
                                    });
                            }
                        });

                        var userInfoContainer = document.getElementById('user-info-container');
                        userInfoContainer.innerHTML = `
          <h2 class=\"user-info-heading\">Πληροφορίες Λογαριασμού</h2>
          <div class=\"user-info-details\">
            <p class=\"user-info-item\"><span class=\"info-label\">Όνομα Χρήστη :</span> \${data.username}</p>
            <p class=\"user-info-item\"><span class=\"info-label\">Email:</span> \${data.email}</p>
            <p class=\"user-info-item\"><span class=\"info-label\">Πακέτο:</span> \${data.role}</p>
            <p class=\"user-info-item\">
                <span class=\"info-label\">Ενεργή έως :</span>
                \${data.subscription ? (new Date(data.subscription) <= new Date() ? 'Expired' : data.subscription) : 'There is no available subscription yet'}
            </p>
          </div>
        `;

                        // Set the \"General\" tab as active
                        var generalLink = document.getElementById('general-link');
                        generalLink.classList.add('active');
                    })
                    .catch((error) => {
                        console.error('Error:', error);
                    });
            });


            // Function to show the password tab
            function showPasswordTab() {
                var userInfoContainer = document.getElementById('user-info-container');
                var passwordTab = document.getElementById('password-tab');

                // Hide the user information container
                userInfoContainer.style.display = 'none';

                // Display the password tab
                passwordTab.style.display = 'block';

                // Set the \"Password\" tab as active
                var passwordLink = document.getElementById('password-link');
                passwordLink.classList.add('active');
            }

            // Add click event listener to the \"Password\" button
            var passwordButton = document.getElementById('password-link');
            passwordButton.addEventListener('click', showPasswordTab);
            function hideModernAlert() {
                var modernAlert = document.getElementById('modernAlert');
                modernAlert.style.display = 'none';
            }


            function showModernAlert(title, message) {
                var modernAlert = document.getElementById('modernAlert');
                var alertTitle = document.getElementById('alertTitle');
                var alertMessage = document.getElementById('alertMessage');

                alertTitle.innerHTML = title;
                alertMessage.innerHTML = message;

                modernAlert.style.display = 'block';

                if (message.includes('incorrect') || message.includes('do not match')) {
                    modernAlert.classList.add('shake');
                } else {
                    modernAlert.classList.remove('shake');
                }

                setTimeout(function () {
                    modernAlert.style.display = 'none';
                }, 2500); // Hide alert after 2.5 seconds
            }

            function showGeneralTab() {
                var userInfoContainer = document.getElementById('user-info-container');
                var passwordTab = document.getElementById('password-tab');
                var generalTab = document.getElementById('general-tab');

                // Display the user information container
                userInfoContainer.style.display = 'block';

                // Hide the password tab
                passwordTab.style.display = 'none';

                // Display the general tab
                generalTab.style.display = 'block';

                // Set the \"General\" tab as active
                var generalLink = document.getElementById('general-link');
                generalLink.classList.add('active');

                // Remove the \"active\" class from the \"Password\" tab
                var passwordLink = document.getElementById('password-link');
                passwordLink.classList.remove('active');
            }

            // Add click event listener to the \"General\" link
            var generalLink = document.getElementById('general-link');
            generalLink.addEventListener('click', showGeneralTab);


        </script>

        <!-- jquery slim -->
        <script src=\"";
        // line 391
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3.4.1.min.js"), "html", null, true);
        echo "\"></script>
        <!-- popper js -->
        <script src=\"";
        // line 393
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/popper.min.js"), "html", null, true);
        echo "\"></script>
        <!-- bootstrap js -->
        <script src=\"";
        // line 395
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <!-- nice select -->
        <script src=\"";
        // line 397
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/niceselect/js/jquery.nice-select.min.js"), "html", null, true);
        echo "\"></script>
        <!-- owl carousel js -->
        <script src=\"";
        // line 399
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/owl_carousel/js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
        <!-- magnify popup js -->
        <script src=\"";
        // line 401
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/magnify_popup/jquery.magnific-popup.js"), "html", null, true);
        echo "\"></script>
        <!-- simplyCountdown js -->
        <script src=\"";
        // line 403
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/countdown/js/simplyCountdown.min.js"), "html", null, true);
        echo "\"></script>
        <!-- counter js -->
        <script src=\"";
        // line 405
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/counter/jquery.countTo.js"), "html", null, true);
        echo "\"></script>
        <!-- aos js -->
        <script src=\"";
        // line 407
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/aos/aos.js"), "html", null, true);
        echo "\"></script>
        <!-- font awesome js -->
        <script src=\"https://kit.fontawesome.com/6ee3230338.js\"></script>
        <!-- custom js -->
        <script src=\"";
        // line 411
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"></script>

    </body>

    </html>
";
    }

    public function getTemplateName()
    {
        return "my-profile.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  521 => 411,  514 => 407,  509 => 405,  504 => 403,  499 => 401,  494 => 399,  489 => 397,  484 => 395,  479 => 393,  474 => 391,  307 => 226,  305 => 225,  196 => 119,  122 => 47,  120 => 46,  102 => 31,  97 => 29,  92 => 27,  87 => 25,  82 => 23,  77 => 21,  72 => 19,  67 => 17,  62 => 15,  57 => 13,  52 => 11,  47 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "my-profile.html", "/Users/admin/Desktop/panellhnies/panellhnies/templates/my-profile.html");
    }
}
