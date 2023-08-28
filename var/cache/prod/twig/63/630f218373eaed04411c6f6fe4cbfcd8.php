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

/* course-details.html */
class __TwigTemplate_d1cbf44cd777d1304ab508ea82869eb4 extends Template
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
        echo "<!DOCTYPE html>
<html lang=\"zxx\" xmlns=\"http://www.w3.org/1999/html\">

<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
    <title>Panellhnies - Βίντεο</title>
    <link rel=\"icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/pane_logo.jpg"), "html", null, true);
        echo "\" type=\"image/png\">
    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" />
    <!-- animate CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/animate.css"), "html", null, true);
        echo "\" />
    <!-- font awesome CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/elegant_Icon/elegent_icon.css"), "html", null, true);
        echo "\" />
    <!-- nice select CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/niceselect/css/nice-select.css"), "html", null, true);
        echo "\" />
    <!-- owl carousel CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/owl_carousel/css/owl.carousel.css"), "html", null, true);
        echo "\" />
    <!-- magnific popup CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/magnify_popup/magnific-popup.css"), "html", null, true);
        echo "\" />
    <!-- Countdown CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/countdown/css/Countdown.css"), "html", null, true);
        echo "\" />
    <!-- flaticon CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/flaticon.css"), "html", null, true);
        echo "\" />
    <!-- aos CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/aos/aos.css"), "html", null, true);
        echo "\" />
    <!-- course CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/courses.css"), "html", null, true);
        echo "\" />
    <!-- style CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" />

    <style>
        .hidden {
            display: none;
        }
        .page-numbers {
            list-style: none;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
        }

        .page-numbers li {
            margin: 0 5px;
        }

        .page-numbers a {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 40px;
            height: 40px;
            background-color: #f2f2f2;
            color: #333;
            font-size: 18px;
            text-decoration: none;
            border-radius: 50%;
            transition: background-color 0.3s ease;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
        }

        .page-numbers a[style=\"background-color: transparent;\"] {
            background-color: transparent;
        }

        .page-numbers a:hover {
            background-color: #66c0f4;
        }

        .page-numbers .active a {
            background-color: #ff7f50;
        }
    </style>
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
        // line 88
        $this->loadTemplate("header.html", "course-details.html", 88)->display($context);
        // line 89
        echo "
<!-- courses part here -->
<div id=\"content\" class=\"site-content\" bis_skin_checked=\"1\">
    <div class=\"lp-archive-courses\" bis_skin_checked=\"1\">

        <div class=\"lp-content-area\" bis_skin_checked=\"1\">
            <div class=\"lp-courses-bar list\" bis_skin_checked=\"1\">
                <form class=\"search-courses\">
                    <input type=\"hidden\" name=\"post_type\" value=\"lp_course\">
                    <input type=\"hidden\" name=\"taxonomy\" value=\"\">
                    <input type=\"hidden\" name=\"term_id\" value=\"\">
                    <input type=\"hidden\" name=\"term\" value=\"\">
                    <input type=\"text\" placeholder=\"Search courses...\" name=\"s\" value=\"\" id=\"search-input\">
                </form>
                <div class=\"switch-layout\" bis_skin_checked=\"1\">
                    <input type=\"radio\" name=\"lp-switch-layout-btn\" value=\"grid\" id=\"lp-switch-layout-btn-grid\" checked=\"checked\">
                    <label class=\"switch-btn grid\" title=\"Switch to grid\" for=\"lp-switch-layout-btn-grid\"></label>
                    <input type=\"radio\" name=\"lp-switch-layout-btn\" value=\"list\" id=\"lp-switch-layout-btn-list\">
                    <label class=\"switch-btn list\" title=\"Switch to list\" for=\"lp-switch-layout-btn-list\"></label>
                </div>
            </div>
            <ul class=\"learn-press-courses\" data-layout=\"grid\">
                ";
        // line 111
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["videos"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
            // line 112
            echo "                <li id=\"post-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "getId", [], "method", false, false, false, 112), "html", null, true);
            echo "\"
                    class=\"post-";
            // line 113
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "getId", [], "method", false, false, false, 113), "html", null, true);
            echo " lp_course type-lp_course status-publish has-post-thumbnail hentry course ";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 113) > 12)) {
                echo "hidden";
            }
            echo "\">
                    <div class=\"course-item\" bis_skin_checked=\"1\">
                        <div class=\"course-wrap-thumbnail\" bis_skin_checked=\"1\">
                            <div class=\"course-thumbnail\" bis_skin_checked=\"1\">
                                <a href=\"";
            // line 117
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_video_id", ["id" => twig_get_attribute($this->env, $this->source, $context["video"], "getId", [], "method", false, false, false, 117)]), "html", null, true);
            echo "\" bis_skin_checked=\"1\">
                                    <div class=\"thumbnail-preview\" bis_skin_checked=\"1\">
                                        <div class=\"thumbnail\" bis_skin_checked=\"1\">
                                            <div class=\"centered\" bis_skin_checked=\"1\">
                                                <img width=\"370\" height=\"280\"
                                                     id=\"imageElement-";
            // line 122
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "getId", [], "method", false, false, false, 122), "html", null, true);
            echo "\"
                                                     src=\"fixGoogleDriveUrl(";
            // line 123
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "getImageUrl", [], "method", false, false, false, 123), "html", null, true);
            echo ")\"
                                                     class=\"attachment-500x300 size-500x300 wp-post-image\"
                                                     alt=\"Software Development\" loading=\"lazy\">
                                            </div>

                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- START .course-content -->
                        <div class=\"course-content\" bis_skin_checked=\"1\">
                            <div class=\"course-categories\" bis_skin_checked=\"1\">
                                <a href=\"";
            // line 136
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_video_id", ["id" => twig_get_attribute($this->env, $this->source, $context["video"], "getId", [], "method", false, false, false, 136)]), "html", null, true);
            echo "\" rel=\"tag\"
                                   bis_skin_checked=\"1\">";
            // line 137
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "getCategory", [], "method", false, false, false, 137), "html", null, true);
            echo "</a>
                            </div>
                            <a href=\"";
            // line 139
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_video_id", ["id" => twig_get_attribute($this->env, $this->source, $context["video"], "getId", [], "method", false, false, false, 139)]), "html", null, true);
            echo "\" class=\"course-permalink\" bis_skin_checked=\"1\">
                                <h3 class=\"course-title\">";
            // line 140
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "getTitle", [], "method", false, false, false, 140), "html", null, true);
            echo "</h3>
                            </a>
                        </div>
                        <!-- END .course-content -->
                    </div>
                </li>
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 147
        echo "            </ul>

            <nav class=\"learn-press-pagination navigation pagination\">
                <ul class=\"page-numbers\">
                    <li class=\"prev\" id=\"prev-page\"><a href=\"#\" onclick=\"previousPage()\">&laquo; Previous</a></li>
                    <li class=\"next\" id=\"next-page\"><a href=\"#\" onclick=\"nextPage()\">Next &raquo;</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- courses part end -->

    ";
        // line 159
        $this->loadTemplate("footer.html", "course-details.html", 159)->display($context);
        // line 160
        echo "    <!-- jquery slim -->
    <script src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3.4.1.min.js"), "html", null, true);
        echo "\"></script>
    <!-- popper js -->
    <script src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/popper.min.js"), "html", null, true);
        echo "\"></script>
    <!-- boots  tarp js -->
    <script src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- nice select -->
    <script src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/niceselect/js/jquery.nice-select.min.js"), "html", null, true);
        echo "\"></script>
    <!-- owl carousel js -->
    <script src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/owl_carousel/js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <!-- magnify popup js -->
    <script src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/magnify_popup/jquery.magnific-popup.js"), "html", null, true);
        echo "\"></script>
    <!-- simplyCountdown js -->
    <script src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/countdown/js/simplyCountdown.min.js"), "html", null, true);
        echo "\"></script>
    <!-- counter js -->
    <script src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/counter/jquery.countTo.js"), "html", null, true);
        echo "\"></script>
    <!-- aos js -->
    <script src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/aos/aos.js"), "html", null, true);
        echo "\"></script>
    <!-- courses js -->
    <script src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/courses.js"), "html", null, true);
        echo "\"></script>
    <!-- font awesome js -->
    <script src=\"https://kit.fontawesome.com/6ee3230338.js\"></script>
    <!-- custom js -->
    <script src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"></script>

    <script>
        // Function to modify the Google Drive URL to embed properly
        function fixGoogleDriveUrl(url) {
            const fileId = url.match(/\\/d\\/(.+?)\\//)[1];
            const fixedUrl = `https://drive.google.com/uc?id=\${fileId}`;
            return fixedUrl;
        }
        var imageElements = document.querySelectorAll(\"[id^='imageElement-']\");
        imageElements.forEach(function(imageElement) {
            var imageUrl = imageElement.getAttribute('src');
            var fixedImageUrl = fixGoogleDriveUrl(imageUrl);
            imageElement.setAttribute('src', fixedImageUrl);
        });
        // JavaScript for pagination
        var currentPage = 1;
        var itemsPerPage = 12;
        var items = document.querySelectorAll('.learn-press-courses > li');
        var totalPages = Math.ceil(items.length / itemsPerPage);
        var paginationList = document.querySelector('.page-numbers');
        var currentLayout = 'grid';

        function showPage(page) {
            var startIndex = (page - 1) * itemsPerPage;
            var endIndex = startIndex + itemsPerPage;

            for (var i = 0; i < items.length; i++) {
                if (i >= startIndex && i < endIndex) {
                    items[i].classList.remove('hidden');
                } else {
                    items[i].classList.add('hidden');
                }
            }
        }

        function sortVideosByTitle() {
            var videosList = Array.from(document.querySelectorAll('.learn-press-courses > li'));
            videosList.sort(function(a, b) {
                var titleA = a.querySelector('.course-title').textContent;
                var titleB = b.querySelector('.course-title').textContent;

                // Extract and parse number from title
                var numberA = parseFloat(titleA.split(' ')[0]);
                var numberB = parseFloat(titleB.split(' ')[0]);

                return numberA - numberB;
            });

            var parent = document.querySelector('.learn-press-courses');
            videosList.forEach(function(video) {
                parent.appendChild(video);
            });
        }
        function goToPage(page) {
            if (page >= 1 && page <= totalPages && page !== currentPage) {
                currentPage = page;
                showPage(currentPage);
                updatePagination();
            }
        }


        function updatePagination() {
            // Clear existing page links
            paginationList.innerHTML = '';

            // Add numbered page links
            for (var i = 1; i <= totalPages; i++) {
                var pageItem = document.createElement('li');
                if (i === currentPage) {
                    pageItem.setAttribute('class', 'active');
                }
                var pageLink = document.createElement('a');
                pageLink.setAttribute('href', '#    ');
                pageLink.innerHTML = i;
                pageLink.addEventListener('click', function(page) {
                    return function() {
                        goToPage(page);
                    };
                }(i));
                pageItem.appendChild(pageLink);
                paginationList.appendChild(pageItem);
            }
        }

        // Show the first page initially
        sortVideosByTitle();
        showPage(currentPage);
        updatePagination();

        var searchInput = document.getElementById('search-input');
        var items = document.querySelectorAll('.learn-press-courses > li');

        searchInput.addEventListener('keydown', function(event) {
            if (event.keyCode === 13) {
                event.preventDefault();
                return false;
            }
        });

        searchInput.addEventListener('input', function() {
            var query = searchInput.value.toLowerCase();

            for (var i = 0; i < items.length; i++) {
                var title = items[i].querySelector('.course-title').textContent.toLowerCase();
                if (title.includes(query)) {
                    items[i].classList.remove('hidden');
                } else {
                    items[i].classList.add('hidden');
                }
            }
        });
    </script>

</body>

</html>

";
    }

    public function getTemplateName()
    {
        return "course-details.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  354 => 183,  347 => 179,  342 => 177,  337 => 175,  332 => 173,  327 => 171,  322 => 169,  317 => 167,  312 => 165,  307 => 163,  302 => 161,  299 => 160,  297 => 159,  283 => 147,  262 => 140,  258 => 139,  253 => 137,  249 => 136,  233 => 123,  229 => 122,  221 => 117,  210 => 113,  205 => 112,  188 => 111,  164 => 89,  162 => 88,  102 => 31,  97 => 29,  92 => 27,  87 => 25,  82 => 23,  77 => 21,  72 => 19,  67 => 17,  62 => 15,  57 => 13,  52 => 11,  47 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "course-details.html", "/Users/admin/Desktop/panellhnies/panellhnies/templates/course-details.html");
    }
}
