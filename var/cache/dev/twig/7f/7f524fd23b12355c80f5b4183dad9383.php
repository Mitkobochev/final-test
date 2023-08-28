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

/* admin_panel.html */
class __TwigTemplate_3aa35cfe101542a1d62cbf253bc577ff extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_panel.html"));

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
        .user-item {
            border: 1px solid #ccc;
            margin-bottom: 20px;
            padding: 10px;
            border-radius: 5px;
            background-color: #f7f7f7;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .user-card {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .user-details h3 {
            font-size: 1.2rem;
            margin-bottom: 5px;
        }

        .user-actions {
            display: flex;
            gap: 10px;
        }

        .edit-user,
        .delete-user {
            cursor: pointer;
            color: #007bff;
            font-weight: bold;
        }

        /* Styles for the edit form */
        .edit-user-form {
            margin-top: 10px;
            display: none;
        }

        .edit-username,
        .edit-email {
            width: 100%;
            padding: 5px;
            margin-bottom: 5px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .save-user {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            border-radius: 3px;
        }
        .save-user:hover {
            background-color: #0056b3;
        }

        #user-form {
            margin-top: 10px;
        }

        #user-form input {
            margin: 5px 0;
            padding: 5px;
            width: 100%;
        }

        #submit-user {
            padding: 5px 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        #submit-user:hover {
            background-color: #0056b3;
        }



    </style>
</head>
<body>
<div id=\"header\">
    <h1>Admin Panel</h1>
    <div id=\"search-bar\">
        <input type=\"text\" id=\"search-input\" placeholder=\"Search by username\">
        <button id=\"search-button\">Search</button>
        <button id=\"create-user-button\">Create User</button>
    </div>
</div>
<div id=\"sidebar\">
    <div class=\"dropdown\">
        <a class=\"menu-item\" href=\"";
        // line 209
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_video_admin");
        echo "\">Videos</a>
    </div>
    <a class=\"menu-item\" href=\"";
        // line 211
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_exercise_admin");
        echo "\">Exercises</a>
    <a class=\"menu-item\" href=\"";
        // line 212
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users");
        echo "\">Users</a>
    <a class=\"menu-item\" href=\"";
        // line 213
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_categories");
        echo "\">All Category</a>
    <a class=\"menu-item\" href=\"";
        // line 214
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_live");
        echo "\">Livestream</a>

</div>
<div id=\"content\">
    <div id=\"user-form\" hidden>
        <input type=\"text\" id=\"username-input\" placeholder=\"Username\">
        <input type=\"password\" id=\"password-input\" placeholder=\"Password\">
        <input type=\"email\" id=\"email-input\" placeholder=\"Email\">
        <input type=\"text\" id=\"role-input\" placeholder=\"User Role\">
        <input type=\"text\" id=\"subscription-input\" placeholder=\"Subscription End\">
        <button id=\"submit-user\">Create</button>
    </div>

    <div class=\"users-list\">
        ";
        // line 228
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 228, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 229
            echo "        <div class=\"user-item\" data-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 229), "html", null, true);
            echo "\">
            <div class=\"user-card\">
                <div class=\"user-details\">
                    <p class=\"username\">";
            // line 232
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 232), "html", null, true);
            echo "</p>
                    <p class=\"email\">";
            // line 233
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 233), "html", null, true);
            echo "</p>
                    <p class=\"email\">";
            // line 234
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "role", [], "any", false, false, false, 234), "html", null, true);
            echo "</p>
                    <p class=\"email\">";
            // line 235
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "subscription", [], "any", false, false, false, 235), "html", null, true);
            echo "</p>
                </div>
                <div class=\"user-actions\">
                    <span class=\"edit-user\">Edit</span>
                    <span class=\"delete-user\">Delete</span>
                </div>
            </div>
            <div class=\"edit-user-form hidden\">
                <input type=\"text\" class=\"edit-username\" value=\"";
            // line 243
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 243), "html", null, true);
            echo "\" />
                <input type=\"text\" class=\"edit-email\" value=\"";
            // line 244
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 244), "html", null, true);
            echo "\" />
                <input type=\"text\" class=\"edit-role\" value=\"";
            // line 245
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "role", [], "any", false, false, false, 245), "html", null, true);
            echo "\" />
                <input type=\"text\" class=\"edit-subs\" value=\"";
            // line 246
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "subscription", [], "any", false, false, false, 246), "html", null, true);
            echo "\" />

                <button class=\"save-user\">Save Changes</button>
                <button class=\"cancel-edit\">Cancel</button>
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 253
        echo "    </div>
</div>
<!-- ... Your HTML code ... -->
<script>
    document.addEventListener(\"DOMContentLoaded\", function () {
        const usersList = document.querySelector(\".users-list\");
        const searchInput = document.getElementById(\"search-input\");
        const searchButton = document.getElementById(\"search-button\");

        // Function to filter users based on search query
        function filterUsers(query) {
            const userItems = usersList.querySelectorAll(\".user-item\");
            userItems.forEach(userItem => {
                const username = userItem.querySelector(\".username\").textContent.toLowerCase();
                const email = userItem.querySelector(\".email\").textContent.toLowerCase();

                if (username.includes(query) || email.includes(query)) {
                    userItem.style.display = \"block\";
                } else {
                    userItem.style.display = \"none\";
                }
            });
        }

        // Search button click event
        searchButton.addEventListener(\"click\", function () {
            const searchQuery = searchInput.value.toLowerCase();
            filterUsers(searchQuery);
        });

        // Initialize user list display
        filterUsers(\"\"); // Initially show all users

        // Rest of your code...
    });
    document.addEventListener(\"DOMContentLoaded\", function () {
        const usersList = document.querySelector(\".users-list\");

        usersList.addEventListener(\"click\", function (event) {
            const target = event.target;
            const userItem = target.closest(\".user-item\");
            const userId = userItem.dataset.id;

            if (target.classList.contains(\"edit-user\")) {
                const userDetails = userItem.querySelector(\".user-details\");
                const editForm = userItem.querySelector(\".edit-user-form\");

                userDetails.style.display = \"none\";
                editForm.style.display = \"block\";
            } else if (target.classList.contains(\"cancel-edit\")) {
                const userDetails = userItem.querySelector(\".user-details\");
                const editForm = userItem.querySelector(\".edit-user-form\");

                userDetails.style.display = \"block\";
                editForm.style.display = \"none\";
            } else if (target.classList.contains(\"save-user\")) {
                const editForm = userItem.querySelector(\".edit-user-form\");
                const editUsername = editForm.querySelector(\".edit-username\").value;
                const editEmail = editForm.querySelector(\".edit-email\").value;
                const editRole = editForm.querySelector(\".edit-role\").value;
                const editSubs = editForm.querySelector(\".edit-subs\").value;



                fetch(`/admin/users/\${userId}`, {
                    method: \"PUT\",
                    headers: {
                        \"Content-Type\": \"application/json\",
                    },
                    body: JSON.stringify({
                        username: editUsername,
                        email: editEmail,
                        role: editRole,
                        subscription: editSubs,
                    })
                })
                    .then(response => response.json())
                    .then(data => {
                        console.log(data.message);
                        alert(\"User updated successfully.\"); // Show pop-up message
                        location.reload(); // Refresh the page
                    });

                const userDetails = userItem.querySelector(\".user-details\");
                userDetails.style.display = \"block\";
                editForm.style.display = \"none\";
            } else if (target.classList.contains(\"delete-user\")) {
                const confirmDelete = confirm(\"Are you sure you want to delete this user?\");
                if (confirmDelete) {
                    fetch(`/admin/users/\${userId}/delete`, {
                        method: \"DELETE\"
                    })
                        .then(response => response.json())
                        .then(data => {
                            console.log(data.message);
                            alert(\"User deleted successfully.\"); // Show pop-up message
                            location.reload(); // Refresh the page
                        });
                }
            }
        });
    });

    document.addEventListener(\"DOMContentLoaded\", function () {
        const createUserButton = document.getElementById(\"create-user-button\");
        const userForm = document.getElementById(\"user-form\");
        const submitUserButton = document.getElementById(\"submit-user\");

        createUserButton.addEventListener(\"click\", function () {
            userForm.hidden = false;
        });

        submitUserButton.addEventListener(\"click\", function () {
            const username = document.getElementById(\"username-input\").value;
            const password = document.getElementById(\"password-input\").value;
            const email = document.getElementById(\"email-input\").value;
            const role = document.getElementById(\"role-input\").value;
            const subs_end = document.getElementById('subscription-input').value;
            // Perform the fetch request to create the user
            fetch('/admin/users/create/new', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    username: username,
                    password: password,
                    email: email,
                    role: role,
                    end: subs_end,
                }),
            })
                .then(async response => {
                    const data = await response.json();
                    if (!response.ok) {
                        throw new Error(data.message || `HTTP error! Status: \${response.status}`);
                    }
                    return data;
                })
                .then(data => {
                    console.log(data.message);
                    alert(\"User created successfully.\");
                    location.reload();
                })
                .catch(error => {
                    console.error('Error creating user:', error);

                    if (error.message.includes('Status: 500')) {
                        alert('An internal server error occurred. Please try again later.');
                    } else {
                        alert(`An error occurred while creating the user: \${error.message}`);
                    }
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
        return "admin_panel.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  343 => 253,  330 => 246,  326 => 245,  322 => 244,  318 => 243,  307 => 235,  303 => 234,  299 => 233,  295 => 232,  288 => 229,  284 => 228,  267 => 214,  263 => 213,  259 => 212,  255 => 211,  250 => 209,  40 => 1,);
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
        .user-item {
            border: 1px solid #ccc;
            margin-bottom: 20px;
            padding: 10px;
            border-radius: 5px;
            background-color: #f7f7f7;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .user-card {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .user-details h3 {
            font-size: 1.2rem;
            margin-bottom: 5px;
        }

        .user-actions {
            display: flex;
            gap: 10px;
        }

        .edit-user,
        .delete-user {
            cursor: pointer;
            color: #007bff;
            font-weight: bold;
        }

        /* Styles for the edit form */
        .edit-user-form {
            margin-top: 10px;
            display: none;
        }

        .edit-username,
        .edit-email {
            width: 100%;
            padding: 5px;
            margin-bottom: 5px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .save-user {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            border-radius: 3px;
        }
        .save-user:hover {
            background-color: #0056b3;
        }

        #user-form {
            margin-top: 10px;
        }

        #user-form input {
            margin: 5px 0;
            padding: 5px;
            width: 100%;
        }

        #submit-user {
            padding: 5px 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        #submit-user:hover {
            background-color: #0056b3;
        }



    </style>
</head>
<body>
<div id=\"header\">
    <h1>Admin Panel</h1>
    <div id=\"search-bar\">
        <input type=\"text\" id=\"search-input\" placeholder=\"Search by username\">
        <button id=\"search-button\">Search</button>
        <button id=\"create-user-button\">Create User</button>
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
    <div id=\"user-form\" hidden>
        <input type=\"text\" id=\"username-input\" placeholder=\"Username\">
        <input type=\"password\" id=\"password-input\" placeholder=\"Password\">
        <input type=\"email\" id=\"email-input\" placeholder=\"Email\">
        <input type=\"text\" id=\"role-input\" placeholder=\"User Role\">
        <input type=\"text\" id=\"subscription-input\" placeholder=\"Subscription End\">
        <button id=\"submit-user\">Create</button>
    </div>

    <div class=\"users-list\">
        {% for user in users %}
        <div class=\"user-item\" data-id=\"{{ user.id }}\">
            <div class=\"user-card\">
                <div class=\"user-details\">
                    <p class=\"username\">{{ user.username }}</p>
                    <p class=\"email\">{{ user.email }}</p>
                    <p class=\"email\">{{ user.role }}</p>
                    <p class=\"email\">{{ user.subscription }}</p>
                </div>
                <div class=\"user-actions\">
                    <span class=\"edit-user\">Edit</span>
                    <span class=\"delete-user\">Delete</span>
                </div>
            </div>
            <div class=\"edit-user-form hidden\">
                <input type=\"text\" class=\"edit-username\" value=\"{{ user.username }}\" />
                <input type=\"text\" class=\"edit-email\" value=\"{{ user.email }}\" />
                <input type=\"text\" class=\"edit-role\" value=\"{{ user.role }}\" />
                <input type=\"text\" class=\"edit-subs\" value=\"{{ user.subscription }}\" />

                <button class=\"save-user\">Save Changes</button>
                <button class=\"cancel-edit\">Cancel</button>
            </div>
        </div>
        {% endfor %}
    </div>
</div>
<!-- ... Your HTML code ... -->
<script>
    document.addEventListener(\"DOMContentLoaded\", function () {
        const usersList = document.querySelector(\".users-list\");
        const searchInput = document.getElementById(\"search-input\");
        const searchButton = document.getElementById(\"search-button\");

        // Function to filter users based on search query
        function filterUsers(query) {
            const userItems = usersList.querySelectorAll(\".user-item\");
            userItems.forEach(userItem => {
                const username = userItem.querySelector(\".username\").textContent.toLowerCase();
                const email = userItem.querySelector(\".email\").textContent.toLowerCase();

                if (username.includes(query) || email.includes(query)) {
                    userItem.style.display = \"block\";
                } else {
                    userItem.style.display = \"none\";
                }
            });
        }

        // Search button click event
        searchButton.addEventListener(\"click\", function () {
            const searchQuery = searchInput.value.toLowerCase();
            filterUsers(searchQuery);
        });

        // Initialize user list display
        filterUsers(\"\"); // Initially show all users

        // Rest of your code...
    });
    document.addEventListener(\"DOMContentLoaded\", function () {
        const usersList = document.querySelector(\".users-list\");

        usersList.addEventListener(\"click\", function (event) {
            const target = event.target;
            const userItem = target.closest(\".user-item\");
            const userId = userItem.dataset.id;

            if (target.classList.contains(\"edit-user\")) {
                const userDetails = userItem.querySelector(\".user-details\");
                const editForm = userItem.querySelector(\".edit-user-form\");

                userDetails.style.display = \"none\";
                editForm.style.display = \"block\";
            } else if (target.classList.contains(\"cancel-edit\")) {
                const userDetails = userItem.querySelector(\".user-details\");
                const editForm = userItem.querySelector(\".edit-user-form\");

                userDetails.style.display = \"block\";
                editForm.style.display = \"none\";
            } else if (target.classList.contains(\"save-user\")) {
                const editForm = userItem.querySelector(\".edit-user-form\");
                const editUsername = editForm.querySelector(\".edit-username\").value;
                const editEmail = editForm.querySelector(\".edit-email\").value;
                const editRole = editForm.querySelector(\".edit-role\").value;
                const editSubs = editForm.querySelector(\".edit-subs\").value;



                fetch(`/admin/users/\${userId}`, {
                    method: \"PUT\",
                    headers: {
                        \"Content-Type\": \"application/json\",
                    },
                    body: JSON.stringify({
                        username: editUsername,
                        email: editEmail,
                        role: editRole,
                        subscription: editSubs,
                    })
                })
                    .then(response => response.json())
                    .then(data => {
                        console.log(data.message);
                        alert(\"User updated successfully.\"); // Show pop-up message
                        location.reload(); // Refresh the page
                    });

                const userDetails = userItem.querySelector(\".user-details\");
                userDetails.style.display = \"block\";
                editForm.style.display = \"none\";
            } else if (target.classList.contains(\"delete-user\")) {
                const confirmDelete = confirm(\"Are you sure you want to delete this user?\");
                if (confirmDelete) {
                    fetch(`/admin/users/\${userId}/delete`, {
                        method: \"DELETE\"
                    })
                        .then(response => response.json())
                        .then(data => {
                            console.log(data.message);
                            alert(\"User deleted successfully.\"); // Show pop-up message
                            location.reload(); // Refresh the page
                        });
                }
            }
        });
    });

    document.addEventListener(\"DOMContentLoaded\", function () {
        const createUserButton = document.getElementById(\"create-user-button\");
        const userForm = document.getElementById(\"user-form\");
        const submitUserButton = document.getElementById(\"submit-user\");

        createUserButton.addEventListener(\"click\", function () {
            userForm.hidden = false;
        });

        submitUserButton.addEventListener(\"click\", function () {
            const username = document.getElementById(\"username-input\").value;
            const password = document.getElementById(\"password-input\").value;
            const email = document.getElementById(\"email-input\").value;
            const role = document.getElementById(\"role-input\").value;
            const subs_end = document.getElementById('subscription-input').value;
            // Perform the fetch request to create the user
            fetch('/admin/users/create/new', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    username: username,
                    password: password,
                    email: email,
                    role: role,
                    end: subs_end,
                }),
            })
                .then(async response => {
                    const data = await response.json();
                    if (!response.ok) {
                        throw new Error(data.message || `HTTP error! Status: \${response.status}`);
                    }
                    return data;
                })
                .then(data => {
                    console.log(data.message);
                    alert(\"User created successfully.\");
                    location.reload();
                })
                .catch(error => {
                    console.error('Error creating user:', error);

                    if (error.message.includes('Status: 500')) {
                        alert('An internal server error occurred. Please try again later.');
                    } else {
                        alert(`An error occurred while creating the user: \${error.message}`);
                    }
                });
        });

    });





</script>
</body>
</html>
", "admin_panel.html", "/Users/admin/Desktop/panellhnies/panellhnies/templates/admin_panel.html");
    }
}
