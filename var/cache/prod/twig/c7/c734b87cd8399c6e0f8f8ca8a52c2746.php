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

/* admin_panel_exercise.html */
class __TwigTemplate_93db822501a869e6754faec3087635f6 extends Template
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
    #add-exercise-subcategory,
    #add-category,
    #add-description,
    #add-exercise-locked,
    #add-exercise-url,
    #add-exercise-image,
    #add-video-url {
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
    <div class=\"section-title\" id=\"add-video-toggle\"><button class=\"button-add\">Create exercise</button></div>

  </div>
</div>
<div id=\"sidebar\">
  <div class=\"dropdown\">
    <a class=\"menu-item\" href=\"";
        // line 282
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_video_admin");
        echo "\">Videos</a>
  </div>
  <a class=\"menu-item\" href=\"";
        // line 284
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_exercise_admin");
        echo "\">Exercises</a>
  <a class=\"menu-item\" href=\"";
        // line 285
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users");
        echo "\">Users</a>
  <a class=\"menu-item\" href=\"";
        // line 286
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_categories");
        echo "\">All Category</a>
  <a class=\"menu-item\" href=\"";
        // line 287
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
        <option value=\"Νεοελληνική Γλώσσα (+Λογοτεχνία)\">Νεοελληνική Γλώσσα (+Λογοτεχνία)</option>

      </select>
      <select id=\"add-exercise-subcategory\">
        <option value=\"paid_exercise\">paid_exercise</option>
        <option value=\"Θέματα 2000\">Θέματα 2000</option>
        <option value=\"Θέματα 2001\">Θέματα 2001</option>
        <option value=\"Θέματα 2002\">Θέματα 2002</option>
        <option value=\"Θέματα 2003\">Θέματα 2003</option>
        <option value=\"Θέματα 2004\">Θέματα 2004</option>
        <option value=\"Θέματα 2005\">Θέματα 2005</option>
        <option value=\"Θέματα 2006\">Θέματα 2006</option>
        <option value=\"Θέματα 2007\">Θέματα 2007</option>
        <option value=\"Θέματα 2008\">Θέματα 2008</option>
        <option value=\"Θέματα 2009\">Θέματα 2009</option>
        <option value=\"Θέματα 2010\">Θέματα 2010</option>
        <option value=\"Θέματα 2011\">Θέματα 2011</option>
        <option value=\"Θέματα 2012\">Θέματα 2012</option>
        <option value=\"Θέματα 2013\">Θέματα 2013</option>
        <option value=\"Θέματα 2014\">Θέματα 2014</option>
        <option value=\"Θέματα 2015\">Θέματα 2015</option>
        <option value=\"Θέματα 2016\">Θέματα 2016</option>
        <option value=\"Θέματα 2017\">Θέματα 2017</option>
        <option value=\"Θέματα 2018\">Θέματα 2018</option>
        <option value=\"Θέματα 2019\">Θέματα 2019</option>
        <option value=\"Θέματα 2020\">Θέματα 2020</option>
        <option value=\"Θέματα 2021\">Θέματα 2021</option>
        <option value=\"Θέματα 2022\">Θέματα 2022</option>
        <option value=\"Θέματα 2023\">Θέματα 2023</option>

      </select>
      <input type=\"text\" id=\"add-description\" placeholder=\"Description\">
      <input type=\"text\" id=\"add-exercise-url\" placeholder=\"File Path\">
      <input type=\"text\" id=\"add-exercise-image\" placeholder=\"Image Path\">
      <p>Is locked:</p>
      <select id=\"add-exercise-locked\">
        <option value=\"true\">true</option>
        <option value=\"false\">false</option>
      </select>
      <button type=\"button\" id=\"add-video\">Add Exercise</button>
    </form>
  </div>

  <div class=\"videos-list\">
    ";
        // line 343
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
            // line 344
            echo "    <div class=\"video-item\" data-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "id", [], "any", false, false, false, 344), "html", null, true);
            echo "\">
      <h3>";
            // line 345
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "title", [], "any", false, false, false, 345), "html", null, true);
            echo "</h3>
      <p>";
            // line 346
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "category", [], "any", false, false, false, 346), "html", null, true);
            echo "</p>
      <p>";
            // line 347
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "description", [], "any", false, false, false, 347), "html", null, true);
            echo "</p>
      <p>";
            // line 348
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "subcategory", [], "any", false, false, false, 348), "html", null, true);
            echo "</p>
      <p>";
            // line 349
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "filePath", [], "any", false, false, false, 349), "html", null, true);
            echo "</p>
      <p>";
            // line 350
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "imageUrl", [], "any", false, false, false, 350), "html", null, true);
            echo "</p>
      <div class=\"video-actions\">
        <span class=\"edit-video\">Edit</span>
        <span class=\"delete-video\">Delete</span>
      </div>
      <div class=\"edit-video-form\" style=\"display: none;\">
        <input type=\"text\" class=\"edit-title\" value=\"";
            // line 356
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "title", [], "any", false, false, false, 356), "html", null, true);
            echo "\" />
        <select class=\"edit-category\">
          <option value=\"Οικονομικά (ΑΟΘ)\">Οικονομικά (ΑΟΘ)</option>
          <option value=\"Πληροφορική (ΑΕΠΠ)\">Πληροφορική (ΑΕΠΠ)</option>
          <option value=\"Μαθηματικά\">Μαθηματικά</option>
          <option value=\"Νεοελληνική Γλώσσα (+Λογοτεχνία)\">Νεοελληνική Γλώσσα (+Λογοτεχνία)</option>
        </select>
        <select class=\"edit-subcategory\">
          <option value=\"paid_exercise\">paid_exercise</option>
          <option value=\"Θέματα 2000\">Θέματα 2000</option>
          <option value=\"Θέματα 2001\">Θέματα 2001</option>
          <option value=\"Θέματα 2002\">Θέματα 2002</option>
          <option value=\"Θέματα 2003\">Θέματα 2003</option>
          <option value=\"Θέματα 2004\">Θέματα 2004</option>
          <option value=\"Θέματα 2005\">Θέματα 2005</option>
          <option value=\"Θέματα 2006\">Θέματα 2006</option>
          <option value=\"Θέματα 2007\">Θέματα 2007</option>
          <option value=\"Θέματα 2008\">Θέματα 2008</option>
          <option value=\"Θέματα 2009\">Θέματα 2009</option>
          <option value=\"Θέματα 2010\">Θέματα 2010</option>
          <option value=\"Θέματα 2011\">Θέματα 2011</option>
          <option value=\"Θέματα 2012\">Θέματα 2012</option>
          <option value=\"Θέματα 2013\">Θέματα 2013</option>
          <option value=\"Θέματα 2014\">Θέματα 2014</option>
          <option value=\"Θέματα 2015\">Θέματα 2015</option>
          <option value=\"Θέματα 2016\">Θέματα 2016</option>
          <option value=\"Θέματα 2017\">Θέματα 2017</option>
          <option value=\"Θέματα 2018\">Θέματα 2018</option>
          <option value=\"Θέματα 2019\">Θέματα 2019</option>
          <option value=\"Θέματα 2020\">Θέματα 2020</option>
          <option value=\"Θέματα 2021\">Θέματα 2021</option>
          <option value=\"Θέματα 2022\">Θέματα 2022</option>
          <option value=\"Θέματα 2023\">Θέματα 2023</option>
        </select>
        <input type=\"text\" class=\"edit-description\" value=\"";
            // line 390
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "description", [], "any", false, false, false, 390), "html", null, true);
            echo "\" />
        <input type=\"text\" class=\"edit-file-path\" value=\"";
            // line 391
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "filePath", [], "any", false, false, false, 391), "html", null, true);
            echo "\" />
        <input type=\"text\" class=\"edit-image-url\" value=\"";
            // line 392
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "imageUrl", [], "any", false, false, false, 392), "html", null, true);
            echo "\" />

        <select class=\"edit-locked\">
          <option value=\"true\">true</option>
          <option value=\"false\">false</option>
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
        // line 404
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
        const videoSubCategory = videoItem.querySelector(\"p:nth-of-type(3)\");
        const editForm = videoItem.querySelector(\".edit-video-form\");

        videoDetails.style.display = \"none\";
        videoCategory.style.display = \"none\";
        videoDescription.style.display = \"none\";
        editForm.style.display = \"block\";

        const editTitle = editForm.querySelector(\".edit-title\");
        const editCategory = editForm.querySelector(\".edit-category\");
        const editSubCategory = editForm.querySelector('.edit-subcategory');
        const editDescription = editForm.querySelector(\".edit-description\");


        editTitle.value = videoDetails.textContent;
        editCategory.value = videoCategory.textContent.replace(\"Category: \", \"\");
        editSubCategory.value = videoSubCategory.textContent;
        editDescription.value = videoDescription.textContent.replace(\"Description: \", \"\");
      } else if (target.classList.contains(\"cancel-edit\")) {
        const videoDetails = videoItem.querySelector(\"h3\");
        const videoCategory = videoItem.querySelector(\"p:nth-of-type(1)\");
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
        const editFilePath = editForm.querySelector('.edit-file-path').value;
        const editSubcategory = editForm.querySelector('.edit-subcategory').value;
        const isLocked = editForm.querySelector('.edit-locked').value;
        const editImageUrl = editForm.querySelector('.edit-image-url').value;
        fetch(`/edit-exercise/\${videoId}/edit`, {
          method: \"PUT\",
          headers: {
            \"Content-Type\": \"application/json\",
          },
          body: JSON.stringify({
            title: editTitle,
            category: editCategory,
            subcategory: editSubcategory,
            description: editDescription,
            file_path: editFilePath,
            image_url: editImageUrl,
            is_locked: isLocked,
          })
        })
                .then(response => response.json())
                .then(data => {
                  console.log(data.message);
                  alert(\"Exercise updated successfully.\");
                  location.reload();
                });
      }
      else if (target.classList.contains(\"delete-video\")) {
        const confirmDelete = confirm(\"Are you sure you want to delete this video?\");
        if (confirmDelete) {
          fetch(`/admin-panel/exercise/delete/\${videoId}`, {
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
    const addVideoButton = document.getElementById(\"add-video\");

    addVideoButton.addEventListener(\"click\", function () {
      const title = document.getElementById(\"add-title\").value;
      const category = document.getElementById(\"add-category\").value;
      const subcategory = document.getElementById(\"add-exercise-subcategory\").value;
      const description = document.getElementById(\"add-description\").value;
      const fileUrl = document.getElementById(\"add-exercise-url\").value;
      const isLocked = document.getElementById(\"add-exercise-locked\").value;
      const imageUrl = document.getElementById('add-exercise-image').value;

      const exerciseData = {
        title: title,
        category: category,
        subcategory: subcategory,
        description: description,
        file_url: fileUrl,
        image_url: imageUrl,
        is_locked: isLocked,
      };

      fetch('/admin/exercise/create', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json'
        },
        body: JSON.stringify(exerciseData)
      })
              .then(response => response.json())
              .then(data => {
                console.log(data.message);
                alert(\"Exercise added successfully.\");
                location.reload();
              })
              .catch(error => {
                console.error('Error adding exercise:', error);
                alert(\"Error adding exercise. Please try again.\");
              });
    });
  });



</script>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "admin_panel_exercise.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  497 => 404,  479 => 392,  475 => 391,  471 => 390,  434 => 356,  425 => 350,  421 => 349,  417 => 348,  413 => 347,  409 => 346,  405 => 345,  400 => 344,  396 => 343,  337 => 287,  333 => 286,  329 => 285,  325 => 284,  320 => 282,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin_panel_exercise.html", "/Users/admin/Desktop/panellhnies/panellhnies/templates/admin_panel_exercise.html");
    }
}
