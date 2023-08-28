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

/* admin_panel_videos.html */
class __TwigTemplate_b80dbd087597a5434cb74bb64aea9084 extends Template
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
        #add-image-url{
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
        <div class=\"section-title\" id=\"add-video-toggle\"><button class=\"button-add\">Create video</button></div>

    </div>
</div>
<div id=\"sidebar\">
    <div class=\"dropdown\">
        <a class=\"menu-item\" href=\"";
        // line 280
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_video_admin");
        echo "\">Videos</a>
    </div>
    <a class=\"menu-item\" href=\"";
        // line 282
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_exercise_admin");
        echo "\">Exercises</a>
    <a class=\"menu-item\" href=\"";
        // line 283
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users");
        echo "\">Users</a>
    <a class=\"menu-item\" href=\"";
        // line 284
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_categories");
        echo "\">All Category</a>
    <a class=\"menu-item\" href=\"";
        // line 285
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_live");
        echo "\">Livestream</a>


</div>
<div id=\"content\">
    <div class=\"section\">
        <form id=\"add-video-form\">
            <input type=\"text\" id=\"add-title\" placeholder=\"Title\">
            <select id=\"add-category\">
                <option value=\"Οικονομικά (ΑΟΘ)\">Οικονομικά (ΑΟΘ)</option>
                <option value=\"Πληροφορική (ΑΕΠΠ)\">Πληροφορική (ΑΕΠΠ)</option>
                <option value=\"Μαθηματικά\">Μαθηματικά</option>
            </select>
            <textarea id=\"add-description\" placeholder=\"Description\"></textarea>
            <input type=\"text\" id=\"add-video-url\" placeholder=\"Video URL\">
            <input type=\"text\" id=\"add-image-url\" placeholder=\"Image URL\">
            <select id=\"add-video-text\">
                <option value=\"Κεφάλαιο 1\">Κεφάλαιο 1</option>
                <option value=\"Κεφάλαιο 2\">Κεφάλαιο 2</option>
                <option value=\"Κεφάλαιο 3\">Κεφάλαιο 3</option>
                <option value=\"Κεφάλαιο 4\">Κεφάλαιο 4</option>
                <option value=\"Κεφάλαιο 5\">Κεφάλαιο 5</option>
                <option value=\"Κεφάλαιο 6\">Κεφάλαιο 6</option>
                <option value=\"Κεφάλαιο 7\">Κεφάλαιο 7</option>
                <option value=\"Κεφάλαιο 8\">Κεφάλαιο 8</option>
                <option value=\"Κεφάλαιο 9\">Κεφάλαιο 9</option>
                <option value=\"Κεφάλαιο 10\">Κεφάλαιο 10</option>
                <option value=\"1. Εισαγωγή\">1. Εισαγωγή</option>
                <option value=\"2. Δομή Επιλογής\">2. Δομή Επιλογής</option>
                <option value=\"3. Δομές Επανάληψης\">3. Δομές Επανάληψης</option>
                <option value=\"4. Έλεγχος Εγκυρότητας\">4. Έλεγχος Εγκυρότητας</option>
                <option value=\"5. Αρχικές Ασκήσεις με Δ. Επανάληψης\">5. Αρχικές Ασκήσεις με Δ. Επανάληψης</option>
                <option value=\"6. Όλα για τα ΜΑΧ / ΜΙΝ\">6. Όλα για τα ΜΑΧ / ΜΙΝ</option>
                <option value=\"7. Δύσκολες Ασκήσεις με Δ. Επανάληψης\">7. Δύσκολες Ασκήσεις με Δ. Επανάληψης</option>
                <option value=\"8. ΘΕΜΑΤΑ : Δ. Επανάληψης\">8. ΘΕΜΑΤΑ : Δ. Επανάληψης</option>
                <option value=\"9. Μετατροπές Δ. Επανάληψης\">9. Μετατροπές Δ. Επανάληψης</option>
                <option value=\"10. Διάγραμμα Ροής <=> Πρόγραμμα\">10. Διάγραμμα Ροής <=> Πρόγραμμα</option>
                <option value=\"11. Μονοδιάστατοι Πίνακες\">11. Μονοδιάστατοι Πίνακες</option>
                <option value=\"12. ΘΕΜΑΤΑ : Μονοδιάστατοι Πίνακες\">12. ΘΕΜΑΤΑ : Μονοδιάστατοι Πίνακες</option>
                <option value=\"13. Δισδιάστατοι Πίνακες\">13. Δισδιάστατοι Πίνακες</option>
                <option value=\"14. ΘΕΜΑΤΑ : Δισδιάστατοι Πίνακες\">14. ΘΕΜΑΤΑ : Δισδιάστατοι Πίνακες</option>
                <option value=\"15. Υποπρογράμματα\">15. Υποπρογράμματα</option>
                <option value=\"16. ΘΕΜΑΤΑ : Εφ' όλης\">16. ΘΕΜΑΤΑ : Εφ' όλης</option>
                <option value=\"17. Εξηγήσεις Θεωρίας ΑΕΠΠ\">17. Εξηγήσεις Θεωρίας ΑΕΠΠ</option>
                <option value=\"18. Συμπλήρωση Κενών + Πίνακες Τιμών\">18. Συμπλήρωση Κενών + Πίνακες Τιμών</option>
                <option value=\"19. Στοίβες & Ουρές\">19. Στοίβες & Ουρές</option>
                <option value=\"20. Συνδυαστικά Θέματα\">20. Συνδυαστικά Θέματα</option>

            </select>
            <button type=\"button\" id=\"add-video\">Add Video</button>
        </form>
    </div>

    <div class=\"videos-list\">
        ";
        // line 339
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["videos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
            // line 340
            echo "        <div class=\"video-item\" data-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "id", [], "any", false, false, false, 340), "html", null, true);
            echo "\">
            <h3>";
            // line 341
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "title", [], "any", false, false, false, 341), "html", null, true);
            echo "</h3>
            <p>";
            // line 342
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "category", [], "any", false, false, false, 342), "html", null, true);
            echo "</p>
            <p>";
            // line 343
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "description", [], "any", false, false, false, 343), "html", null, true);
            echo "</p>
            <p>";
            // line 344
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "videoUrl", [], "any", false, false, false, 344), "html", null, true);
            echo "</p>
            <p>";
            // line 345
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "text", [], "any", false, false, false, 345), "html", null, true);
            echo "</p>
            <p>";
            // line 346
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "imageUrl", [], "any", false, false, false, 346), "html", null, true);
            echo "</p>

            <div class=\"video-actions\">
                <span class=\"edit-video\">Edit</span>
                <span class=\"delete-video\">Delete</span>
            </div>
            <div class=\"edit-video-form\" style=\"display: none;\">
                <input type=\"text\" class=\"edit-title\" value=\"";
            // line 353
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "title", [], "any", false, false, false, 353), "html", null, true);
            echo "\" />
                <select class=\"edit-category\">
                    <option value=\"Οικονομικά (ΑΟΘ)\">Οικονομικά (ΑΟΘ)</option>
                    <option value=\"Πληροφορική (ΑΕΠΠ)\">Πληροφορική (ΑΕΠΠ)</option>
                    <option value=\"Μαθηματικά\">Μαθηματικά</option>
                </select>
                <textarea class=\"edit-description\">";
            // line 359
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "description", [], "any", false, false, false, 359), "html", null, true);
            echo "</textarea>
                <input type=\"text\" class=\"edit-video-url\" value=\"";
            // line 360
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "videoUrl", [], "any", false, false, false, 360), "html", null, true);
            echo "\" />
                <input type=\"text\" class=\"edit-image-url\" value=\"";
            // line 361
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "imageUrl", [], "any", false, false, false, 361), "html", null, true);
            echo "\" />
                <select class=\"edit-video-subcategory\">
                    <option value=\"Δωρεάν Βίντεο\">Δωρεάν Βίντεο</option>
                    <option value=\"Κεφάλαιο 1\">Κεφάλαιο 1</option>
                    <option value=\"Κεφάλαιο 2\">Κεφάλαιο 2</option>
                    <option value=\"Κεφάλαιο 3\">Κεφάλαιο 3</option>
                    <option value=\"Κεφάλαιο 4\">Κεφάλαιο 4</option>
                    <option value=\"Κεφάλαιο 5\">Κεφάλαιο 5</option>
                    <option value=\"Κεφάλαιο 6\">Κεφάλαιο 6</option>
                    <option value=\"Κεφάλαιο 7\">Κεφάλαιο 7</option>
                    <option value=\"Κεφάλαιο 8\">Κεφάλαιο 8</option>
                    <option value=\"Κεφάλαιο 9\">Κεφάλαιο 9</option>
                    <option value=\"Κεφάλαιο 10\">Κεφάλαιο 10</option>
                    <option value=\"Κεφάλαιο 11\">Κεφάλαιο 11</option>
                    <option value=\"1. Εισαγωγή\">1. Εισαγωγή</option>
                    <option value=\"2. Δομή Επιλογής\">2. Δομή Επιλογής</option>
                    <option value=\"3. Δομές Επανάληψης\">3. Δομές Επανάληψης</option>
                    <option value=\"4. Έλεγχος Εγκυρότητας\">4. Έλεγχος Εγκυρότητας</option>
                    <option value=\"5. Αρχικές Ασκήσεις με Δ. Επανάληψης\">5. Αρχικές Ασκήσεις με Δ. Επανάληψης</option>
                    <option value=\"6. Όλα για τα ΜΑΧ / ΜΙΝ\">6. Όλα για τα ΜΑΧ / ΜΙΝ</option>
                    <option value=\"7. Δύσκολες Ασκήσεις με Δ. Επανάληψης\">7. Δύσκολες Ασκήσεις με Δ. Επανάληψης</option>
                    <option value=\"8. ΘΕΜΑΤΑ : Δ. Επανάληψης\">8. ΘΕΜΑΤΑ : Δ. Επανάληψης</option>
                    <option value=\"9. Μετατροπές Δ. Επανάληψης\">9. Μετατροπές Δ. Επανάληψης</option>
                    <option value=\"10. Διάγραμμα Ροής <=> Πρόγραμμα\">10. Διάγραμμα Ροής <=> Πρόγραμμα</option>
                    <option value=\"11. Μονοδιάστατοι Πίνακες\">11. Μονοδιάστατοι Πίνακες</option>
                    <option value=\"12. ΘΕΜΑΤΑ : Μονοδιάστατοι Πίνακες\">12. ΘΕΜΑΤΑ : Μονοδιάστατοι Πίνακες</option>
                    <option value=\"13. Δισδιάστατοι Πίνακες\">13. Δισδιάστατοι Πίνακες</option>
                    <option value=\"14. ΘΕΜΑΤΑ : Δισδιάστατοι Πίνακες\">14. ΘΕΜΑΤΑ : Δισδιάστατοι Πίνακες</option>
                    <option value=\"15. Υποπρογράμματα\">15. Υποπρογράμματα</option>
                    <option value=\"16. ΘΕΜΑΤΑ : Εφ' όλης\">16. ΘΕΜΑΤΑ : Εφ' όλης</option>
                    <option value=\"17. Εξηγήσεις Θεωρίας ΑΕΠΠ\">17. Εξηγήσεις Θεωρίας ΑΕΠΠ</option>
                    <option value=\"18. Συμπλήρωση Κενών + Πίνακες Τιμών\">18. Συμπλήρωση Κενών + Πίνακες Τιμών</option>
                    <option value=\"19. Στοίβες & Ουρές\">19. Στοίβες & Ουρές</option>
                    <option value=\"20. Συνδυαστικά Θέματα\">20. Συνδυαστικά Θέματα</option>
                    <option value=\"Ολοκληρώματα\">Ολοκληρώματα</option>
                    <option value=\"Β' Θέματα\">Β' Θέματα</option>
                    <option value=\"Γ' Θέματα\">Γ' Θέματα</option>
                    <option value=\"Δ' Θέματα\">Δ' Θέματα</option>

                </select>

                <button class=\"save-video\">Save Changes</button>
                <button class=\"cancel-edit\">Cancel</button>
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 407
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
                const videoDetails = videoItem.querySelector(\"h3\");
                const videoCategory = videoItem.querySelector(\"p:nth-of-type(1)\");
                const videoDescription = videoItem.querySelector(\"p:nth-of-type(2)\");
                const videoSubcategory = videoItem.querySelector(\".edit-video-subcategory\");

                const editForm = videoItem.querySelector(\".edit-video-form\");

                videoDetails.style.display = \"none\";
                videoCategory.style.display = \"none\";
                videoDescription.style.display = \"none\";
                editForm.style.display = \"block\";

                const editTitle = editForm.querySelector(\".edit-title\");
                const editCategory = editForm.querySelector(\".edit-category\");
                const editSubCategory = editForm.querySelector('.edit-video-subcategory');
                const editDescription = editForm.querySelector(\".edit-description\");

                editTitle.value = videoDetails.textContent;
                editCategory.value = videoCategory.textContent.replace(\"Category: \", \"\");
                editDescription.value = videoDescription.textContent.replace(\"Description: \", \"\");
            } else if (target.classList.contains(\"cancel-edit\")) {
                const videoDetails = videoItem.querySelector(\"h3\");
                const videoCategory = videoItem.querySelector(\"p:nth-of-type(1)\");
                const videoDescription = videoItem.querySelector(\"p:nth-of-type(2)\");
                const editForm = videoItem.querySelector(\".edit-video-form\");

                videoDetails.style.display = \"block\";
                videoCategory.style.display = \"block\";
                videoDescription.style.display = \"block\";
                editForm.style.display = \"none\";
            } else if (target.classList.contains(\"save-video\")) {
                const editForm = videoItem.querySelector(\".edit-video-form\");
                const editTitle = editForm.querySelector(\".edit-title\").value;
                const editCategory = editForm.querySelector(\".edit-category\").value;
                const editDescription = editForm.querySelector(\".edit-description\").value;
                const editVideoUrl = editForm.querySelector('.edit-video-url').value;
                const editImageUrl = editForm.querySelector('.edit-image-url').value;
                const editSubcategory = editForm.querySelector('.edit-video-subcategory').value;


                fetch(`/edit-video/\${videoId}/edit`, {
                    method: \"PUT\",
                    headers: {
                        \"Content-Type\": \"application/json\",
                    },
                    body: JSON.stringify({
                        title: editTitle,
                        description: editDescription,
                        video_url: editVideoUrl,
                        image_url: editImageUrl,
                        category: editCategory,
                        text: editSubcategory,

                    })
                })
                    .then(response => response.json())
                    .then(data => {
                        console.log(data.message);
                        alert(\"Video updated successfully.\"); // Show pop-up message
                        location.reload(); // Refresh the page
                    });

                const videoDetails = videoItem.querySelector(\"h3\");
                const videoCategory = videoItem.querySelector(\"p:nth-of-type(1)\");
                const videoDescription = videoItem.querySelector(\"p:nth-of-type(2)\");
                videoDetails.style.display = \"block\";
                videoCategory.style.display = \"block\";
                videoDescription.style.display = \"block\";
                editForm.style.display = \"none\";
            } else if (target.classList.contains(\"delete-video\")) {
                const confirmDelete = confirm(\"Are you sure you want to delete this video?\");
                if (confirmDelete) {
                    fetch(`/delete-video/\${videoId}`, {
                        method: \"DELETE\"
                    })
                        .then(response => response.json())
                        .then(data => {
                            console.log(data.message);
                            alert(\"Video deleted successfully.\");
                            location.reload();
                        });
                }
            }
        });
    });
    document.addEventListener(\"DOMContentLoaded\", function () {
        const videosList = document.querySelector(\".videos-list\");
        const addVideoForm = document.getElementById(\"add-video-form\");
        const addTitleInput = document.getElementById(\"add-title\");
        const addCategoryInput = document.getElementById(\"add-category\");
        const addDescriptionTextarea = document.getElementById(\"add-description\");
        const addVideoUrlInput = document.getElementById(\"add-video-url\");
        const addImageUrlInput = document.getElementById('add-image-url');
        const addVideoTextInput = document.getElementById(\"add-video-text\");
        const addVideoButton = document.getElementById(\"add-video\");


        // Event listener for Add Video button
        addVideoButton.addEventListener(\"click\", function () {
            const title = addTitleInput.value;
            const category = addCategoryInput.value;
            const description = addDescriptionTextarea.value;
            const videoUrl = addVideoUrlInput.value;
            const imageUrl = addImageUrlInput.value;
            const videoText = addVideoTextInput.value;

            // Create the video data object
            const videoData = {
                title: title,
                category: category,
                description: description,
                video_url: videoUrl,
                image_url: imageUrl,
                text: videoText,
            };

            // Perform the POST request to create a new video
            fetch('/admin-video/create', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(videoData)
            })
                .then(response => response.json())
                .then(data => {
                    console.log(data.message);
                    alert(\"Video added successfully.\"); // Show pop-up message
                    location.reload(); // Refresh the page or update the video list as needed
                })
                .catch(error => {
                    console.error('Error adding video:', error);
                    alert(\"Error adding video. Please try again.\"); // Show error message
                });

            // Clear input fields
            addTitleInput.value = '';
            addCategoryInput.value = '';
            addDescriptionTextarea.value = '';
            addVideoUrlInput.value = '';
        });


    });


</script>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "admin_panel_videos.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  500 => 407,  448 => 361,  444 => 360,  440 => 359,  431 => 353,  421 => 346,  417 => 345,  413 => 344,  409 => 343,  405 => 342,  401 => 341,  396 => 340,  392 => 339,  335 => 285,  331 => 284,  327 => 283,  323 => 282,  318 => 280,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin_panel_videos.html", "/Users/admin/Desktop/panellhnies/panellhnies/templates/admin_panel_videos.html");
    }
}
