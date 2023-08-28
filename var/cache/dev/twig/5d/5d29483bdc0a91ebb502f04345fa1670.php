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

/* exercise-panel.html */
class __TwigTemplate_79d270dfd345315bf6b734897106a5ee extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "exercise-panel.html"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Πανελλήνιες - Μήνυμα</title>
    <link rel=\"icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/favicon.png"), "html", null, true);
        echo "\" type=\"image/png\">
    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\"/>
    <!-- animate CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/animate.css"), "html", null, true);
        echo "\"/>
    <!-- font awesome CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/elegant_Icon/elegent_icon.css"), "html", null, true);
        echo "\"/>
    <!-- nice select CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/niceselect/css/nice-select.css"), "html", null, true);
        echo "\"/>
    <!-- owl carousel CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/owl_carousel/css/owl.carousel.css"), "html", null, true);
        echo "\"/>
    <!-- magnific popup CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/magnify_popup/magnific-popup.css"), "html", null, true);
        echo "\"/>
    <!-- Countdown CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/countdown/css/Countdown.css"), "html", null, true);
        echo "\"/>
    <!-- flaticon CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/flaticon.css"), "html", null, true);
        echo "\"/>
    <!-- aos CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/aos/aos.css"), "html", null, true);
        echo "\"/>
    <!-- style CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style.css"), "html", null, true);
        echo "\"/>
    <style>
        <style>
        .video {
            flex-basis: 70%;
            display: flex;
            flex-direction: column;
            align-items: left;
        }

        .video-title {
            font-size: 24px;
            font-weight: bold;
            margin-top: 20px;
            margin-bottom: 60px;
        }

        .video-player {
            width: 100%;
            max-width: 700px;
        }

        .related-videos {
            position: relative;
            left: 850px;
            bottom: 510px;
            width: 400px;
            white-space: nowrap;
        }

        .related-video {
            display: flex;
            align-items: flex-start;
            background-color: #f9f9f9;
            border-radius: 4px;
            padding: 10px;
            transition: background-color 0.3s;
            height: 40px;
            color: #000000;
        }

        .related-video:hover {
            background-color: #f0f0f0;
        }

        .related-video a {
            display: flex;
            align-items: flex-start;
            text-decoration: none;
            color: #333;
        }

        .related-video-title {
            font-size: 16px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            max-width: 394px;
        }

        .related-video.current {
            background-color: beige;
        }

    </style>


</head>
<body>
<header>
    ";
        // line 97
        $this->loadTemplate("header.html", "exercise-panel.html", 97)->display($context);
        // line 98
        echo "</header>

<div class=\"container\">
    <div class=\"video\">
        <h1 class=\"video-title\" id=\"videoTitle\">";
        // line 102
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["video"]) || array_key_exists("video", $context) ? $context["video"] : (function () { throw new RuntimeError('Variable "video" does not exist.', 102, $this->source); })()), "getTitle", [], "method", false, false, false, 102), "html", null, true);
        echo "</h1>
        <div class=\"video-player\">
            <iframe id=\"videoPlayer\" width=\"1200\" height=\"700\" src=";
        // line 104
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["video"]) || array_key_exists("video", $context) ? $context["video"] : (function () { throw new RuntimeError('Variable "video" does not exist.', 104, $this->source); })()), "getFilePath", [], "method", false, false, false, 104), "html", null, true);
        echo " frameborder=\"0\" allowfullscreen></iframe>
            <div class=\"video-description\" id=\"videoDescription\">
                <!-- Replace with your video description -->
                <p id=\"parsedDescription\">";
        // line 107
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["video"]) || array_key_exists("video", $context) ? $context["video"] : (function () { throw new RuntimeError('Variable "video" does not exist.', 107, $this->source); })()), "getDescription", [], "method", false, false, false, 107), "html", null, true);
        echo "</p>
            </div>
        </div>

    </div>
</div>
</div>

";
        // line 115
        $this->loadTemplate("footer.html", "exercise-panel.html", 115)->display($context);
        // line 116
        echo "
<script>
    function parseDescriptionAndLinks() {
        const descriptionElement = document.getElementById('parsedDescription');
        if (descriptionElement) {
            const descriptionContent = descriptionElement.innerHTML;
            const urlRegex = /(https?:\\/\\/[^\\s]+)/g;
            const parsedContent = descriptionContent.replace(urlRegex, '<a href=\"\$&\" target=\"_blank\">\$&</a>');
            descriptionElement.innerHTML = parsedContent;
        }
    }

    parseDescriptionAndLinks();
    function highlightVideo(event, element, title, description, video) {
        event.preventDefault();
        const currentVideo = document.querySelector('.related-video.current');
        if (currentVideo) {
            currentVideo.classList.remove('current');
        }
        element.classList.add('current');
        changeVideo(element.getAttribute('href'), title, description, video);
    }

    function changeVideo(videoUrl, title, description, video) {
        document.getElementById(\"videoPlayer\").src = video;
        document.getElementById(\"videoTitle\").innerText = title;
        document.getElementById(\"videoDescription\").innerHTML = `<p>\${description}</p>`;

        // Get the clicked video ID
        const clickedVideoId = videoUrl.split('=').pop();
        const relatedVideos = document.querySelectorAll('.related-video');

        // Highlight the clicked video and show related videos based on the ID
        relatedVideos.forEach((relatedVideo) => {
            relatedVideo.classList.remove('current');
            const relatedVideoId = relatedVideo.getAttribute('href').split('=').pop();
            if (relatedVideoId === clickedVideoId) {
                relatedVideo.classList.add('current');
            }
        });
    }
</script>
<!-- jquery slim -->
<script src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3.4.1.min.js"), "html", null, true);
        echo "\"></script>
<!-- popper js -->
<script src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/popper.min.js"), "html", null, true);
        echo "\"></script>
<!-- bootstarp js -->
<script src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<!-- nice select -->
<script src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/niceselect/js/jquery.nice-select.min.js"), "html", null, true);
        echo "\"></script>
<!-- owl carousel js -->
<script src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/owl_carousel/js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
<!-- magnify popup js -->
<script src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/magnify_popup/jquery.magnific-popup.js"), "html", null, true);
        echo "\"></script>
<!-- simplyCountdown js -->
<script src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/countdown/js/simplyCountdown.min.js"), "html", null, true);
        echo "\"></script>
<!-- counter js -->
<script src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/counter/jquery.countTo.js"), "html", null, true);
        echo "\"></script>
<!-- aos js -->
<script src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/aos/aos.js"), "html", null, true);
        echo "\"></script>
<!-- custom js -->
<script src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"></script>
</body>
</html>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "exercise-panel.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  293 => 177,  288 => 175,  283 => 173,  278 => 171,  273 => 169,  268 => 167,  263 => 165,  258 => 163,  253 => 161,  248 => 159,  203 => 116,  201 => 115,  190 => 107,  184 => 104,  179 => 102,  173 => 98,  171 => 97,  98 => 27,  93 => 25,  88 => 23,  83 => 21,  78 => 19,  73 => 17,  68 => 15,  63 => 13,  58 => 11,  53 => 9,  48 => 7,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Πανελλήνιες - Μήνυμα</title>
    <link rel=\"icon\" href=\"{{ asset('img/favicon.png') }}\" type=\"image/png\">
    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css') }}\"/>
    <!-- animate CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('css/animate.css') }}\"/>
    <!-- font awesome CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('vendors/elegant_Icon/elegent_icon.css') }}\"/>
    <!-- nice select CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('vendors/niceselect/css/nice-select.css') }}\"/>
    <!-- owl carousel CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('vendors/owl_carousel/css/owl.carousel.css') }}\"/>
    <!-- magnific popup CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('vendors/magnify_popup/magnific-popup.css') }}\"/>
    <!-- Countdown CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('vendors/countdown/css/Countdown.css') }}\"/>
    <!-- flaticon CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('css/flaticon.css') }}\"/>
    <!-- aos CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('vendors/aos/aos.css') }}\"/>
    <!-- style CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('style.css') }}\"/>
    <style>
        <style>
        .video {
            flex-basis: 70%;
            display: flex;
            flex-direction: column;
            align-items: left;
        }

        .video-title {
            font-size: 24px;
            font-weight: bold;
            margin-top: 20px;
            margin-bottom: 60px;
        }

        .video-player {
            width: 100%;
            max-width: 700px;
        }

        .related-videos {
            position: relative;
            left: 850px;
            bottom: 510px;
            width: 400px;
            white-space: nowrap;
        }

        .related-video {
            display: flex;
            align-items: flex-start;
            background-color: #f9f9f9;
            border-radius: 4px;
            padding: 10px;
            transition: background-color 0.3s;
            height: 40px;
            color: #000000;
        }

        .related-video:hover {
            background-color: #f0f0f0;
        }

        .related-video a {
            display: flex;
            align-items: flex-start;
            text-decoration: none;
            color: #333;
        }

        .related-video-title {
            font-size: 16px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            max-width: 394px;
        }

        .related-video.current {
            background-color: beige;
        }

    </style>


</head>
<body>
<header>
    {% include 'header.html' %}
</header>

<div class=\"container\">
    <div class=\"video\">
        <h1 class=\"video-title\" id=\"videoTitle\">{{video.getTitle() }}</h1>
        <div class=\"video-player\">
            <iframe id=\"videoPlayer\" width=\"1200\" height=\"700\" src={{video.getFilePath()}} frameborder=\"0\" allowfullscreen></iframe>
            <div class=\"video-description\" id=\"videoDescription\">
                <!-- Replace with your video description -->
                <p id=\"parsedDescription\">{{video.getDescription() }}</p>
            </div>
        </div>

    </div>
</div>
</div>

{%include 'footer.html'%}

<script>
    function parseDescriptionAndLinks() {
        const descriptionElement = document.getElementById('parsedDescription');
        if (descriptionElement) {
            const descriptionContent = descriptionElement.innerHTML;
            const urlRegex = /(https?:\\/\\/[^\\s]+)/g;
            const parsedContent = descriptionContent.replace(urlRegex, '<a href=\"\$&\" target=\"_blank\">\$&</a>');
            descriptionElement.innerHTML = parsedContent;
        }
    }

    parseDescriptionAndLinks();
    function highlightVideo(event, element, title, description, video) {
        event.preventDefault();
        const currentVideo = document.querySelector('.related-video.current');
        if (currentVideo) {
            currentVideo.classList.remove('current');
        }
        element.classList.add('current');
        changeVideo(element.getAttribute('href'), title, description, video);
    }

    function changeVideo(videoUrl, title, description, video) {
        document.getElementById(\"videoPlayer\").src = video;
        document.getElementById(\"videoTitle\").innerText = title;
        document.getElementById(\"videoDescription\").innerHTML = `<p>\${description}</p>`;

        // Get the clicked video ID
        const clickedVideoId = videoUrl.split('=').pop();
        const relatedVideos = document.querySelectorAll('.related-video');

        // Highlight the clicked video and show related videos based on the ID
        relatedVideos.forEach((relatedVideo) => {
            relatedVideo.classList.remove('current');
            const relatedVideoId = relatedVideo.getAttribute('href').split('=').pop();
            if (relatedVideoId === clickedVideoId) {
                relatedVideo.classList.add('current');
            }
        });
    }
</script>
<!-- jquery slim -->
<script src=\"{{ asset('js/jquery-3.4.1.min.js') }}\"></script>
<!-- popper js -->
<script src=\"{{ asset('js/popper.min.js') }}\"></script>
<!-- bootstarp js -->
<script src=\"{{ asset('js/bootstrap.min.js') }}\"></script>
<!-- nice select -->
<script src=\"{{ asset('vendors/niceselect/js/jquery.nice-select.min.js') }}\"></script>
<!-- owl carousel js -->
<script src=\"{{ asset('vendors/owl_carousel/js/owl.carousel.min.js') }}\"></script>
<!-- magnify popup js -->
<script src=\"{{ asset('vendors/magnify_popup/jquery.magnific-popup.js') }}\"></script>
<!-- simplyCountdown js -->
<script src=\"{{ asset('vendors/countdown/js/simplyCountdown.min.js') }}\"></script>
<!-- counter js -->
<script src=\"{{ asset('vendors/counter/jquery.countTo.js') }}\"></script>
<!-- aos js -->
<script src=\"{{ asset('vendors/aos/aos.js') }}\"></script>
<!-- custom js -->
<script src=\"{{ asset('js/custom.js') }}\"></script>
</body>
</html>

", "exercise-panel.html", "/Users/admin/Desktop/panellhnies/panellhnies/templates/exercise-panel.html");
    }
}
