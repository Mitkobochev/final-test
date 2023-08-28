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

/* admin_panel_live_stream.html */
class __TwigTemplate_4ef688c9a7a3394e994c8ec46ee8a510 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_panel_live_stream.html"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Admin Panel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        #header {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 1rem;
        }

        #sidebar {
            background-color: #222;
            color: white;
            width: 200px;
            padding: 1rem;
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
        }

        #content {
            margin-left: 250px;
            padding: 1rem;
        }

        .section {
            margin-bottom: 2rem;
        }

        .section-title {
            font-size: 1.2rem;
            margin-bottom: 1rem;
        }

        .menu-item {
            color: #ccc;
            text-decoration: none;
            display: block;
            padding: 0.5rem;
            transition: background-color 0.3s;
        }

        .menu-item:hover {
            background-color: #444;
        }

        .video-item {
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 20px;
        }

        h3 {
            margin-top: 0;
        }

        p {
            margin: 5px 0;
        }

        .video-actions {
            margin-top: 10px;
        }

        .video-actions span {
            margin-right: 10px;
            cursor: pointer;
            color: #007bff;
        }
        .dropdown {
            position: relative;
            display: inline-block;
        }

        /* Style for the dropdown content */
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: white;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        /* Show the dropdown content when hovering over the dropdown container */
        .dropdown:hover .dropdown-content {
            display: block;
        }

        /* Style for the dropdown options */
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        /* Style for the dropdown options on hover */
        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }
        /* Add new styles for user items */


        .user-details h3 {
            font-size: 1.2rem;
            margin-bottom: 5px;
        }

        #user-form input {
            margin: 5px 0;
            padding: 5px;
            width: 100%;
        }

        /* ... Your existing styles ... */

        /* Updated styles for video items */
        .video-item {
            border: 1px solid #ccc;
            margin-bottom: 20px;
            padding: 20px;
            border-radius: 5px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .video-item h3 {
            margin: 0;
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        .video-item p {
            margin: 5px 0;
            font-size: 1rem;
            color: #666;
        }

        .video-actions {
            margin-top: 15px;
            display: flex;
            gap: 10px;
        }

        .edit-video,
        .delete-video {
            cursor: pointer;
            color: #007bff;
            font-weight: bold;
            transition: color 0.3s;
        }

        .edit-video:hover,
        .delete-video:hover {
            color: #0056b3;
        }

        /* Updated styles for the edit form */
        .edit-video-form {
            margin-top: 10px;
            display: none;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f7f7f7;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .edit-video-subcategory,
        .edit-video-form input,
        .edit-video-form textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .edit-video-form button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            border-radius: 3px;
            transition: background-color 0.3s;
        }

        .edit-video-form button:hover {
            background-color: #0056b3;
        }
        #add-video-form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        #add-title,
        #add-category,
        #add-description,
        #add-video-url,
        #add-image-url,
        #add-topic,
        #add-duration,
        #add-start-time,
        #add-description,
        #add-stream-link,
        #add-stream-date,
        #add-subcategory{
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 3px;
        }
        #add-video-text{
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 3px;
        }

        #add-video-button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 3px;
            transition: background-color 0.3s;
        }

        #add-video-button:hover {
            background-color: #0056b3;
        }
        .section-title {
            margin-left: -800px;
        }
        .edit-category {
            width: 100%;
            padding: 12px;
            font-size: 16px; /* Increase the font size */
            border: 1px solid #ccc;
            border-radius: 3px;
            margin-bottom: 10px;
        }
        #add-category {
            width: 100%;
            padding: 12px;
            font-size: 16px; /* Increase the font size */
            border: 1px solid #ccc;
            border-radius: 3px;
            margin-bottom: 10px;
        }




    </style>
</head>
<body>
<div id=\"header\">
    <h1>Admin Panel</h1>
    <div id=\"search-bar\">
        <input type=\"text\" id=\"search-input\" name=\"searchTitle\" placeholder=\"Search by video title\">
        <button id=\"search-button\">Search</button>
        <div class=\"section-title\" id=\"add-video-toggle\"><button class=\"button-add\">Create category</button></div>

    </div>
</div>
<div id=\"sidebar\">
    <div class=\"dropdown\">
        <a class=\"menu-item\" href=\"";
        // line 287
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_video_admin");
        echo "\">Videos</a>
    </div>
    <a class=\"menu-item\" href=\"";
        // line 289
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_exercise_admin");
        echo "\">Exercises</a>
    <a class=\"menu-item\" href=\"";
        // line 290
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users");
        echo "\">Users</a>
    <a class=\"menu-item\" href=\"";
        // line 291
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_categories");
        echo "\">All Category</a>
    <a class=\"menu-item\" href=\"";
        // line 292
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_live");
        echo "\">Livestream</a>


</div>
<div id=\"content\">
    <div class=\"section\">
        <form id=\"add-video-form\">
            <input type=\"text\" id=\"add-topic\" placeholder=\"Add topic\">
            <input type=\"text\" id=\"add-start-time\" placeholder=\"Start time\">
            <input type=\"text\" id=\"add-duration\" placeholder=\"Duration\">
            <input type=\"text\" id=\"add-description\" placeholder=\"Description\">
            <input type=\"text\" id=\"add-stream-link\" placeholder=\"Stream link\">
            <input type=\"text\" id=\"add-stream-date\" placeholder=\"Stream date\">

            <button type=\"button\" id=\"add-video\">Add Livestream</button>
        </form>
    </div>

    <div class=\"videos-list\">
        ";
        // line 311
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["videos"]) || array_key_exists("videos", $context) ? $context["videos"] : (function () { throw new RuntimeError('Variable "videos" does not exist.', 311, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
            // line 312
            echo "        <div class=\"video-item\" data-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "id", [], "any", false, false, false, 312), "html", null, true);
            echo "\">
            <p>";
            // line 313
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "topic", [], "any", false, false, false, 313), "html", null, true);
            echo "</p>
            <p>";
            // line 314
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "startTime", [], "any", false, false, false, 314), "html", null, true);
            echo "</p>
            <p>";
            // line 315
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "duration", [], "any", false, false, false, 315), "html", null, true);
            echo "</p>
            <p>";
            // line 316
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "description", [], "any", false, false, false, 316), "html", null, true);
            echo "</p>
            <p>";
            // line 317
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "streamLink", [], "any", false, false, false, 317), "html", null, true);
            echo "</p>
            <p>";
            // line 318
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "streamDate", [], "any", false, false, false, 318), "html", null, true);
            echo "</p>

            <div class=\"video-actions\">
                <span class=\"edit-video\">Edit</span>
                <span class=\"delete-video\">Delete</span>
            </div>
            <div class=\"edit-video-form\" style=\"display: none;\">
                <input type=\"text\" class=\"edit-video-category\" value=\"";
            // line 325
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "topic", [], "any", false, false, false, 325), "html", null, true);
            echo "\" />
                <input type=\"text\" class=\"edit-video-subcategory\" value=\"";
            // line 326
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "startTime", [], "any", false, false, false, 326), "html", null, true);
            echo "\" />
                <input type=\"text\" class=\"edit-category\" value=\"";
            // line 327
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "duration", [], "any", false, false, false, 327), "html", null, true);
            echo "\" />
                <input type=\"text\" class=\"edit-image-url\" value=\"";
            // line 328
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "streamLink", [], "any", false, false, false, 328), "html", null, true);
            echo "\" />

                <button class=\"save-video\">Save Changes</button>
                <button class=\"cancel-edit\">Cancel</button>
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 335
        echo "
    </div>
</div>

<script>
    const addVideoToggle = document.getElementById(\"add-video-toggle\");
    const addVideoForm = document.getElementById(\"add-video-form\");

    addVideoToggle.addEventListener(\"click\", function () {
        if (addVideoForm.style.display === \"none\" || addVideoForm.style.display === \"\") {
            addVideoForm.style.display = \"block\";
        } else {
            addVideoForm.style.display = \"none\";
        }
    });

    const searchButton = document.getElementById(\"search-button\");
    const searchInput = document.getElementById(\"search-input\");
    const videosList = document.querySelector(\".videos-list\");

    searchButton.addEventListener(\"click\", function () {
        const searchTerm = searchInput.value.toLowerCase();

        const videoItems = videosList.querySelectorAll(\".video-item\");
        videoItems.forEach(function (videoItem) {
            const videoTitle = videoItem.querySelector(\"h3\").textContent.toLowerCase();
            if (videoTitle.includes(searchTerm)) {
                videoItem.style.display = \"block\";
            } else {
                videoItem.style.display = \"none\";
            }
        });
    });
    document.addEventListener(\"DOMContentLoaded\", function () {
        const videosList = document.querySelector(\".videos-list\");

        videosList.addEventListener(\"click\", function (event) {
            const target = event.target;
            const videoItem = target.closest(\".video-item\");
            const videoId = videoItem.dataset.id;

            if (target.classList.contains(\"edit-video\")) {
                const videoCategory = videoItem.querySelector(\".edit-video-category\").value;
                const videoSubcategory = videoItem.querySelector('.edit-video-subcategory').value;
                const videoType = videoItem.querySelector(\".edit-category\").value;
                const videoImageUrl = videoItem.querySelector(\".edit-image-url\").value;

                const editForm = videoItem.querySelector(\".edit-video-form\");
                const editCategory = editForm.querySelector(\".edit-video-category\");
                const editSbucategory = editForm.querySelector('.edit-video-subcategory');
                const editType = editForm.querySelector(\".edit-category\");
                const editImageUrl = editForm.querySelector(\".edit-image-url\");


                editCategory.value = videoCategory;
                editSbucategory.value = videoSubcategory;
                editType.value = videoType;
                editImageUrl.value = videoImageUrl;

                // Show the edit form
                editForm.style.display = \"block\";
            } else if (target.classList.contains(\"cancel-edit\")) {
                const videoDetails = videoItem.querySelector('.edit-video-category');
                const videoCategory = videoItem.querySelector(\".edit-video-subcategory\");
                const videoDescription = videoItem.querySelector(\".edit-video-category\");
                const editForm = videoItem.querySelector(\".edit-image-url\");

                videoDetails.style.display = \"block\";
                videoCategory.style.display = \"block\";
                videoDescription.style.display = \"block\";
                editForm.style.display = \"none\";
            } else if (target.classList.contains(\"save-video\")) {
                const editForm = videoItem.querySelector(\".edit-video-form\");
                const editType = editForm.querySelector(\".edit-category\");
                const editCategory = editForm.querySelector('.edit-video-category');
                const editSubcategory = editForm.querySelector(\".edit-video-subcategory\");
                const editImageUrl = editForm.querySelector(\".edit-image-url\");

                const requestData = {
                    category: editCategory.value,
                    subcategory: editSubcategory.value,
                    image_url: editImageUrl.value,
                    type: editType.value
                };
                console.log(requestData);
                fetch(`/admin/category-update/\${videoId}`, {
                    method: \"PUT\",
                    headers: {
                        \"Content-Type\": \"application/json\",
                    },
                    body: JSON.stringify(requestData)
                })
                    .then(response => response.json())
                    .then(data => {
                        console.log(data.message);
                        alert(\"Video updated successfully.\");
                        location.reload();
                    });

                const videoDetails = videoItem.querySelector('.video-details');
                const videoCategory = videoItem.querySelector('.video-category');
                const videoDescription = videoItem.querySelector('.video-description');

                videoDetails.style.display = \"block\";
                videoCategory.style.display = \"block\";
                videoDescription.style.display = \"block\";
            } else if (target.classList.contains(\"delete-video\")) {
                const confirmDelete = confirm(\"Are you sure you want to delete this video?\");
                if (confirmDelete) {
                    fetch(`/delete-live/\${videoId}`, {
                        method: \"DELETE\"
                    })
                        .then(response => response.json())
                        .then(data => {
                            console.log(data.message);
                            alert(\"Livestream deleted successfully.\");
                            location.reload();
                        });
                }
            }
        });
    });
    document.addEventListener(\"DOMContentLoaded\", function () {
        const addTopic = document.getElementById(\"add-topic\");
        const addStreamTime = document.getElementById(\"add-start-time\");
        const addDuration = document.getElementById('add-duration');
        const addDescription = document.getElementById(\"add-description\");
        const addStreamLink = document.getElementById(\"add-stream-link\");
        const addStreamDate = document.getElementById('add-stream-date');
        const addVideoButton = document.getElementById(\"add-video\");


        // Event listener for Add Video button
        addVideoButton.addEventListener(\"click\", function () {
            const topic = addTopic.value;
            const streamtime = addStreamTime.value;
            const duration = addDuration.value;
            const description = addDescription.value;
            const streamlink = addStreamLink.value;
            const streamdate = addStreamDate.value;

            // Create the video data object
            const videoData = {
                topic: topic,
                stream_time: streamtime,
                description: description,
                stream_link: streamlink,
                duration: duration,
                stream_date: streamdate,
            };
            console.log(videoData);
            // Perform the POST request to create a new video
            fetch('/create-live', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(videoData)
            })
                .then(response => response.json())
                .then(data => {
                    console.log(data.message);
                    alert(\"Livestream added successfully.\"); // Show pop-up message
                    location.reload(); // Refresh the page or update the video list as needed
                })
                .catch(error => {
                    console.error('Error adding category:', error);
                    alert(\"Error adding category. Please try again.\"); // Show error message
                });


        });


    });


</script>
</body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "admin_panel_live_stream.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  431 => 335,  418 => 328,  414 => 327,  410 => 326,  406 => 325,  396 => 318,  392 => 317,  388 => 316,  384 => 315,  380 => 314,  376 => 313,  371 => 312,  367 => 311,  345 => 292,  341 => 291,  337 => 290,  333 => 289,  328 => 287,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Admin Panel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        #header {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 1rem;
        }

        #sidebar {
            background-color: #222;
            color: white;
            width: 200px;
            padding: 1rem;
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
        }

        #content {
            margin-left: 250px;
            padding: 1rem;
        }

        .section {
            margin-bottom: 2rem;
        }

        .section-title {
            font-size: 1.2rem;
            margin-bottom: 1rem;
        }

        .menu-item {
            color: #ccc;
            text-decoration: none;
            display: block;
            padding: 0.5rem;
            transition: background-color 0.3s;
        }

        .menu-item:hover {
            background-color: #444;
        }

        .video-item {
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 20px;
        }

        h3 {
            margin-top: 0;
        }

        p {
            margin: 5px 0;
        }

        .video-actions {
            margin-top: 10px;
        }

        .video-actions span {
            margin-right: 10px;
            cursor: pointer;
            color: #007bff;
        }
        .dropdown {
            position: relative;
            display: inline-block;
        }

        /* Style for the dropdown content */
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: white;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        /* Show the dropdown content when hovering over the dropdown container */
        .dropdown:hover .dropdown-content {
            display: block;
        }

        /* Style for the dropdown options */
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        /* Style for the dropdown options on hover */
        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }
        /* Add new styles for user items */


        .user-details h3 {
            font-size: 1.2rem;
            margin-bottom: 5px;
        }

        #user-form input {
            margin: 5px 0;
            padding: 5px;
            width: 100%;
        }

        /* ... Your existing styles ... */

        /* Updated styles for video items */
        .video-item {
            border: 1px solid #ccc;
            margin-bottom: 20px;
            padding: 20px;
            border-radius: 5px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .video-item h3 {
            margin: 0;
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        .video-item p {
            margin: 5px 0;
            font-size: 1rem;
            color: #666;
        }

        .video-actions {
            margin-top: 15px;
            display: flex;
            gap: 10px;
        }

        .edit-video,
        .delete-video {
            cursor: pointer;
            color: #007bff;
            font-weight: bold;
            transition: color 0.3s;
        }

        .edit-video:hover,
        .delete-video:hover {
            color: #0056b3;
        }

        /* Updated styles for the edit form */
        .edit-video-form {
            margin-top: 10px;
            display: none;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f7f7f7;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .edit-video-subcategory,
        .edit-video-form input,
        .edit-video-form textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .edit-video-form button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            border-radius: 3px;
            transition: background-color 0.3s;
        }

        .edit-video-form button:hover {
            background-color: #0056b3;
        }
        #add-video-form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        #add-title,
        #add-category,
        #add-description,
        #add-video-url,
        #add-image-url,
        #add-topic,
        #add-duration,
        #add-start-time,
        #add-description,
        #add-stream-link,
        #add-stream-date,
        #add-subcategory{
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 3px;
        }
        #add-video-text{
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 3px;
        }

        #add-video-button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 3px;
            transition: background-color 0.3s;
        }

        #add-video-button:hover {
            background-color: #0056b3;
        }
        .section-title {
            margin-left: -800px;
        }
        .edit-category {
            width: 100%;
            padding: 12px;
            font-size: 16px; /* Increase the font size */
            border: 1px solid #ccc;
            border-radius: 3px;
            margin-bottom: 10px;
        }
        #add-category {
            width: 100%;
            padding: 12px;
            font-size: 16px; /* Increase the font size */
            border: 1px solid #ccc;
            border-radius: 3px;
            margin-bottom: 10px;
        }




    </style>
</head>
<body>
<div id=\"header\">
    <h1>Admin Panel</h1>
    <div id=\"search-bar\">
        <input type=\"text\" id=\"search-input\" name=\"searchTitle\" placeholder=\"Search by video title\">
        <button id=\"search-button\">Search</button>
        <div class=\"section-title\" id=\"add-video-toggle\"><button class=\"button-add\">Create category</button></div>

    </div>
</div>
<div id=\"sidebar\">
    <div class=\"dropdown\">
        <a class=\"menu-item\" href=\"{{path('app_video_admin')}}\">Videos</a>
    </div>
    <a class=\"menu-item\" href=\"{{ path('app_exercise_admin')}}\">Exercises</a>
    <a class=\"menu-item\" href=\"{{ path('app_admin_users') }}\">Users</a>
    <a class=\"menu-item\" href=\"{{ path('app_admin_categories') }}\">All Category</a>
    <a class=\"menu-item\" href=\"{{ path('app_admin_live') }}\">Livestream</a>


</div>
<div id=\"content\">
    <div class=\"section\">
        <form id=\"add-video-form\">
            <input type=\"text\" id=\"add-topic\" placeholder=\"Add topic\">
            <input type=\"text\" id=\"add-start-time\" placeholder=\"Start time\">
            <input type=\"text\" id=\"add-duration\" placeholder=\"Duration\">
            <input type=\"text\" id=\"add-description\" placeholder=\"Description\">
            <input type=\"text\" id=\"add-stream-link\" placeholder=\"Stream link\">
            <input type=\"text\" id=\"add-stream-date\" placeholder=\"Stream date\">

            <button type=\"button\" id=\"add-video\">Add Livestream</button>
        </form>
    </div>

    <div class=\"videos-list\">
        {% for video in videos %}
        <div class=\"video-item\" data-id=\"{{ video.id }}\">
            <p>{{ video.topic }}</p>
            <p>{{ video.startTime }}</p>
            <p>{{ video.duration }}</p>
            <p>{{ video.description }}</p>
            <p>{{ video.streamLink }}</p>
            <p>{{ video.streamDate }}</p>

            <div class=\"video-actions\">
                <span class=\"edit-video\">Edit</span>
                <span class=\"delete-video\">Delete</span>
            </div>
            <div class=\"edit-video-form\" style=\"display: none;\">
                <input type=\"text\" class=\"edit-video-category\" value=\"{{ video.topic }}\" />
                <input type=\"text\" class=\"edit-video-subcategory\" value=\"{{ video.startTime }}\" />
                <input type=\"text\" class=\"edit-category\" value=\"{{ video.duration }}\" />
                <input type=\"text\" class=\"edit-image-url\" value=\"{{ video.streamLink }}\" />

                <button class=\"save-video\">Save Changes</button>
                <button class=\"cancel-edit\">Cancel</button>
            </div>
        </div>
        {% endfor %}

    </div>
</div>

<script>
    const addVideoToggle = document.getElementById(\"add-video-toggle\");
    const addVideoForm = document.getElementById(\"add-video-form\");

    addVideoToggle.addEventListener(\"click\", function () {
        if (addVideoForm.style.display === \"none\" || addVideoForm.style.display === \"\") {
            addVideoForm.style.display = \"block\";
        } else {
            addVideoForm.style.display = \"none\";
        }
    });

    const searchButton = document.getElementById(\"search-button\");
    const searchInput = document.getElementById(\"search-input\");
    const videosList = document.querySelector(\".videos-list\");

    searchButton.addEventListener(\"click\", function () {
        const searchTerm = searchInput.value.toLowerCase();

        const videoItems = videosList.querySelectorAll(\".video-item\");
        videoItems.forEach(function (videoItem) {
            const videoTitle = videoItem.querySelector(\"h3\").textContent.toLowerCase();
            if (videoTitle.includes(searchTerm)) {
                videoItem.style.display = \"block\";
            } else {
                videoItem.style.display = \"none\";
            }
        });
    });
    document.addEventListener(\"DOMContentLoaded\", function () {
        const videosList = document.querySelector(\".videos-list\");

        videosList.addEventListener(\"click\", function (event) {
            const target = event.target;
            const videoItem = target.closest(\".video-item\");
            const videoId = videoItem.dataset.id;

            if (target.classList.contains(\"edit-video\")) {
                const videoCategory = videoItem.querySelector(\".edit-video-category\").value;
                const videoSubcategory = videoItem.querySelector('.edit-video-subcategory').value;
                const videoType = videoItem.querySelector(\".edit-category\").value;
                const videoImageUrl = videoItem.querySelector(\".edit-image-url\").value;

                const editForm = videoItem.querySelector(\".edit-video-form\");
                const editCategory = editForm.querySelector(\".edit-video-category\");
                const editSbucategory = editForm.querySelector('.edit-video-subcategory');
                const editType = editForm.querySelector(\".edit-category\");
                const editImageUrl = editForm.querySelector(\".edit-image-url\");


                editCategory.value = videoCategory;
                editSbucategory.value = videoSubcategory;
                editType.value = videoType;
                editImageUrl.value = videoImageUrl;

                // Show the edit form
                editForm.style.display = \"block\";
            } else if (target.classList.contains(\"cancel-edit\")) {
                const videoDetails = videoItem.querySelector('.edit-video-category');
                const videoCategory = videoItem.querySelector(\".edit-video-subcategory\");
                const videoDescription = videoItem.querySelector(\".edit-video-category\");
                const editForm = videoItem.querySelector(\".edit-image-url\");

                videoDetails.style.display = \"block\";
                videoCategory.style.display = \"block\";
                videoDescription.style.display = \"block\";
                editForm.style.display = \"none\";
            } else if (target.classList.contains(\"save-video\")) {
                const editForm = videoItem.querySelector(\".edit-video-form\");
                const editType = editForm.querySelector(\".edit-category\");
                const editCategory = editForm.querySelector('.edit-video-category');
                const editSubcategory = editForm.querySelector(\".edit-video-subcategory\");
                const editImageUrl = editForm.querySelector(\".edit-image-url\");

                const requestData = {
                    category: editCategory.value,
                    subcategory: editSubcategory.value,
                    image_url: editImageUrl.value,
                    type: editType.value
                };
                console.log(requestData);
                fetch(`/admin/category-update/\${videoId}`, {
                    method: \"PUT\",
                    headers: {
                        \"Content-Type\": \"application/json\",
                    },
                    body: JSON.stringify(requestData)
                })
                    .then(response => response.json())
                    .then(data => {
                        console.log(data.message);
                        alert(\"Video updated successfully.\");
                        location.reload();
                    });

                const videoDetails = videoItem.querySelector('.video-details');
                const videoCategory = videoItem.querySelector('.video-category');
                const videoDescription = videoItem.querySelector('.video-description');

                videoDetails.style.display = \"block\";
                videoCategory.style.display = \"block\";
                videoDescription.style.display = \"block\";
            } else if (target.classList.contains(\"delete-video\")) {
                const confirmDelete = confirm(\"Are you sure you want to delete this video?\");
                if (confirmDelete) {
                    fetch(`/delete-live/\${videoId}`, {
                        method: \"DELETE\"
                    })
                        .then(response => response.json())
                        .then(data => {
                            console.log(data.message);
                            alert(\"Livestream deleted successfully.\");
                            location.reload();
                        });
                }
            }
        });
    });
    document.addEventListener(\"DOMContentLoaded\", function () {
        const addTopic = document.getElementById(\"add-topic\");
        const addStreamTime = document.getElementById(\"add-start-time\");
        const addDuration = document.getElementById('add-duration');
        const addDescription = document.getElementById(\"add-description\");
        const addStreamLink = document.getElementById(\"add-stream-link\");
        const addStreamDate = document.getElementById('add-stream-date');
        const addVideoButton = document.getElementById(\"add-video\");


        // Event listener for Add Video button
        addVideoButton.addEventListener(\"click\", function () {
            const topic = addTopic.value;
            const streamtime = addStreamTime.value;
            const duration = addDuration.value;
            const description = addDescription.value;
            const streamlink = addStreamLink.value;
            const streamdate = addStreamDate.value;

            // Create the video data object
            const videoData = {
                topic: topic,
                stream_time: streamtime,
                description: description,
                stream_link: streamlink,
                duration: duration,
                stream_date: streamdate,
            };
            console.log(videoData);
            // Perform the POST request to create a new video
            fetch('/create-live', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(videoData)
            })
                .then(response => response.json())
                .then(data => {
                    console.log(data.message);
                    alert(\"Livestream added successfully.\"); // Show pop-up message
                    location.reload(); // Refresh the page or update the video list as needed
                })
                .catch(error => {
                    console.error('Error adding category:', error);
                    alert(\"Error adding category. Please try again.\"); // Show error message
                });


        });


    });


</script>
</body>
</html>
", "admin_panel_live_stream.html", "/Users/admin/Desktop/panellhnies/panellhnies/templates/admin_panel_live_stream.html");
    }
}
