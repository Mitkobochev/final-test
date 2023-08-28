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

/* checkout.html */
class __TwigTemplate_eed5a05a0452d50ebd78874b9272697d extends Template
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
<html lang=\"zxx\">

<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
    <title>Checkout - Educational and Online Course HTML Website Template</title>
    <link rel=\"icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/pane_logo.png"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style.css"), "html", null, true);
        echo "\" />
    <style>
        #promo-code {
            margin-top: 20px;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 10px;
        }

        #promo-code h4 {
            font-size: 20px;
            margin-bottom: 10px;
            color: #333;
        }

        .promo-code-field {
            display: flex;
            align-items: center;
        }

        #promo-code-input {
            flex: 1;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        #apply-promo-code {
            padding: 10px 20px;
            background-color: #EFC078;
            color: #1A1B25;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        #apply-promo-code:hover {
            background-color: #FDD6A0;
        }

        .promo-code-message {
            margin-top: 10px;
            font-size: 14px;
            color: #888;
        }
        #stripe-submit-button{
            display: none;
        }
        .order-summary {
            font-family: Arial, sans-serif;
            padding: 20px;
            margin-bottom: 20px;
        }

        .order-summary .summary-title {
            font-size: 24px;
            margin-bottom: 10px;
            color: #333;
        }

        .order-summary table {
            width: 100%;
        }

        .order-summary th,
        .order-summary td {
            padding: 10px;
            text-align: left;
        }

        .order-summary .item-name {
            font-weight: bold;
            color: #333;
        }

        .order-summary .item-price,
        .order-summary .total-price {
            font-weight: bold;
            color: #333;
        }

        .order-summary tfoot th {
            text-align: right;
        }

        .order-summary tfoot td {
            font-size: 18px;
            color: #333;
            padding-top: 10px;
        }

        .debit-card-info {
            display: none;
            margin-top: 20px;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 10px;
            font-family: Arial, sans-serif;
            font-size: 40px;
            color: #333;
        }

        .debit-card-info.show {
            display: block;
        }

        .debit-card-info label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        .debit-card-info input[type=\"text\"],
        .debit-card-info input[type=\"number\"],
        .debit-card-info input[type=\"date\"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 18px;
        }

        .debit-card-info button {
            margin-top: 10px;
            padding: 10px 20px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .debit-card-info button:hover {
            background-color: #555;
        }
        #card-element {
            background-color: transparent;
            border: 1.5px solid #EFC078;
            border-radius: 8px;
        }

        #stripe-submit-button {
            background-color: #EFC078;
            color: #1A1B25;
            font-family: Sohne, system-ui, sans-serif;
            font-weight: 500;
            border-radius: 8px;
            padding: 12px 24px;
        }

        #stripe-submit-button:hover {
            background-color: #FDD6A0;
            cursor: pointer;
        }


    </style>

</head>

<body>

";
        // line 195
        $this->loadTemplate("header.html", "checkout.html", 195)->display($context);
        // line 196
        echo "
<!-- breadcrumb part -->
<section class=\"breadcrumb_part blog_grid_bg\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-6 \">
                <div class=\"breadcrumb_iner\">
                    <h2>Checkout</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb part end -->

<!-- checkout part here -->
<div id=\"content\" class=\"site-content section_padding\" bis_skin_checked=\"1\">
    <div class=\"lp-archive-courses\" bis_skin_checked=\"1\">
        <div id=\"learn-press-checkout\" class=\"lp-content-wrap\" bis_skin_checked=\"1\">
            <h2>Checkout</h2>
            <div class=\"learnpress\" bis_skin_checked=\"1\">
                <form method=\"post\" action=\"";
        // line 217
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_charge");
        echo "\" id=\"learn-press-checkout-form\" name=\"learn-press-checkout-form\" class=\"lp-checkout-form\" tabindex=\"0\" enctype=\"multipart/form-data\">
                    <div class=\"lp-checkout-form__before\" bis_skin_checked=\"1\">
                        <input type=\"hidden\" name=\"amount\" value=\"";
        // line 219
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pricing"] ?? null), "price", [], "any", false, false, false, 219), "html", null, true);
        echo "\">

                        <div id=\"checkout-order\" class=\"lp-checkout-block right\" bis_skin_checked=\"1\">
                            <div class=\"lp-checkout-order__inner\" bis_skin_checked=\"1\">
                                <div class=\"order-summary\">
                                    <h2 class=\"summary-title\">Order Summary</h2>
                                    <table>
                                        <tbody>
                                        <tr>
                                            <td class=\"item-name\">";
        // line 228
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pricing"] ?? null), "name", [], "any", false, false, false, 228), "html", null, true);
        echo "</td>
                                            <input type=\"hidden\" name=\"pricing_name\" value=\"";
        // line 229
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pricing"] ?? null), "name", [], "any", false, false, false, 229), "html", null, true);
        echo "\">
                                            <td class=\"item-price\">";
        // line 230
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pricing"] ?? null), "price", [], "any", false, false, false, 230), "html", null, true);
        echo "€</td>
                                        </tr>
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th>Total</th>
                                            <td class=\"total-price\" id=\"total-price\">";
        // line 236
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pricing"] ?? null), "price", [], "any", false, false, false, 236), "html", null, true);
        echo "€</td>
                                        </tr>
                                        </tfoot>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"lp-checkout-form__after\" bis_skin_checked=\"1\">
                        <div id=\"checkout-payment\" class=\"lp-checkout-block left\" bis_skin_checked=\"1\">
                            <h4>Payment<span class=\"secure-connection\">
                                    <i class=\"fas fa-lock\"></i>Secure Connection</span>
                            </h4>
                            <ul class=\"payment-methods\">
                                <li id=\"learn-press-payment-method-paypal\" class=\"lp-payment-method lp-payment-method-paypal selected\">
                                    <label for=\"payment_method_paypal\">
                                        <input type=\"radio\" class=\"gateway-input\" name=\"payment_method\" id=\"payment_method_paypal\" value=\"paypal\" checked=\"checked\" data-order_button_text=\"\" onclick=\"showPayPalButton()\">
                                        <img class=\"gateway-icon\" src=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/paypal-logo-preview.png"), "html", null, true);
        echo "\" alt=\"PayPal\" style=\"\">
                                    </label>
                                </li>

                                <li id=\"learn-press-payment-method-debit-card\" class=\"lp-payment-method lp-payment-method-debit-card\">
                                    <label for=\"payment_method_debit_card\">
                                        <input type=\"radio\" class=\"gateway-input\" name=\"payment_method\" id=\"payment_method_debit_card\" value=\"debit_card\" data-order_button_text=\"\" onclick=\"showDebitCardButton()\">
                                        <img class=\"gateway-icon\" src=\"";
        // line 261
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/debit_card.png"), "html", null, true);
        echo "\" alt=\"Debit Card\" style=\"\">
                                    </label>
                                </li>
                            </ul>

                        </div>
                        <div id=\"promo-code\" class=\"lp-promo-code\" bis_skin_checked=\"1\">
                            <h4>Promo Code</h4>
                            <div class=\"promo-code-field\">
                                <input type=\"text\" id=\"promo-code-input\" name=\"promo_code\" placeholder=\"Enter promo code\">
                                <button type=\"button\" id=\"apply-promo-code\">Apply</button>
                            </div>
                            <p id=\"promo-code-message\" class=\"promo-code-message\"></p>
                        </div>
                        <div id=\"card-element\" class=\"debit-card-info\">
                        </div>

                        <input type=\"hidden\" name=\"stripeToken\" id=\"stripeToken\" value=\"\">
                        <input type=\"hidden\" name=\"amount\" id=\"amount\" value=\"";
        // line 279
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["pricing"] ?? null), "price", [], "any", false, false, false, 279) * 100), "html", null, true);
        echo "\">

                        <div id=\"card-errors\" role=\"alert\"></div>
                        <button type=\"button\" class=\"lp-button button alt\" id=\"stripe-submit-button\">Place order</button>
                        <div id=\"paypal-button-container\"></div>

                        <p class=\"lp-terms-and-conditions\">
                            By completing your purchase you agree to those <a href=\"#\" target=\"_blank\" bis_skin_checked=\"1\">Terms &amp; Conditions</a>.
                        </p>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<!-- checkout part end -->


<!-- footer part here -->
<footer class=\"footer_section\">
    ";
        // line 300
        $this->loadTemplate("footer.html", "checkout.html", 300)->display($context);
        // line 301
        echo "</footer>
<script src=\"https://js.stripe.com/v3/\"></script>
<script src=\"https://www.paypal.com/sdk/js?client-id=";
        // line 303
        echo twig_escape_filter($this->env, ($context["paypal_client_id"] ?? null), "html", null, true);
        echo "&currency=EUR&disable-funding=credit,card\"></script>

<script>
    document.addEventListener(\"DOMContentLoaded\", function () {
        const applyPromoCodeButton = document.getElementById(\"apply-promo-code\");
        const promoCodeInput = document.getElementById(\"promo-code-input\");
        const promoCodeMessage = document.getElementById(\"promo-code-message\");
        const originalPrice = parseFloat(\"";
        // line 310
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pricing"] ?? null), "price", [], "any", false, false, false, 310), "html", null, true);
        echo "\");
        let currentPrice = originalPrice; // Initialize with the original price

        applyPromoCodeButton.addEventListener(\"click\", function () {
            const enteredPromoCode = promoCodeInput.value.trim();

            // Send an AJAX request to fetch the discount percentage
            fetch(`/get-promo-code-discount/\${enteredPromoCode}`)
                .then(response => response.json())
                .then(data => {
                    if (data.discount !== null) {
                        const discountPercentage = data.discount;
                        const discountedAmount = originalPrice * (discountPercentage / 100);
                        currentPrice = originalPrice - discountedAmount; // Update the current price
                        document.getElementById(\"amount\").value = currentPrice * 100; // Convert to cents
                        // Update the displayed prices in the table
                        const itemPriceCell = document.querySelector(\".item-price\");
                        const totalPriceCell = document.getElementById(\"total-price\");
                        itemPriceCell.textContent = `\${currentPrice.toFixed(2)}€`; // Update item price
                        totalPriceCell.textContent = `\${currentPrice.toFixed(2)}€`; // Update total price

                        promoCodeMessage.textContent = `Promo code applied: \${discountPercentage}% discount`;
                    } else {
                        promoCodeMessage.textContent = \"Invalid promo code!\";
                    }
                })
                .catch(error => {
                    console.error(\"Error fetching discount:\", error);
                    promoCodeMessage.textContent = \"Invalid promo code!\";
                });
        });

    });
    function showPayPalButton() {
        var debitCardInfo = document.querySelector('.debit-card-info');
        var placeOrderButton = document.getElementById('stripe-submit-button');
        var payPalButtonContainer = document.getElementById('paypal-button-container');

        if (debitCardInfo) {
            debitCardInfo.style.display = 'none';
        }
        if (placeOrderButton) {
            placeOrderButton.style.display = 'none';
        }
        if (payPalButtonContainer) {
            payPalButtonContainer.style.display = 'block';
        }
    }

    function showDebitCardButton() {
        var debitCardInfo = document.querySelector('.debit-card-info');
        var placeOrderButton = document.getElementById('stripe-submit-button');
        var payPalButtonContainer = document.getElementById('paypal-button-container');

        if (debitCardInfo) {
            debitCardInfo.style.display = 'block';
        }
        if (placeOrderButton) {
            placeOrderButton.style.display = 'block';
        }
        if (payPalButtonContainer) {
            payPalButtonContainer.style.display = 'none';
        }
    }
    document.addEventListener(\"DOMContentLoaded\", function() {
        const stripe = Stripe(\"";
        // line 375
        echo twig_escape_filter($this->env, ($context["stripe_key"] ?? null), "html", null, true);
        echo "\");
        const appearance = {
            theme: 'night',
            labels: 'floating'
        };

        const elements = stripe.elements({appearance});
        const cardElement = elements.create(\"card\", { hidePostalCode: true, style: {
                base: {
                    iconColor: '#c4f0ff',
                    color: '#333',
                    fontWeight: '800',
                    fontFamily: 'Roboto, Open Sans, Segoe UI, sans-serif',
                    fontSize: '18px',
                    fontSmoothing: 'antialiased',
                    ':-webkit-autofill': {
                        color: '#fce883',
                    },
                    '::placeholder': {
                        color: '#87BBFD',
                    },
                },
                invalid: {
                    iconColor: '#FFC7EE',
                    color: '#FFC7EE',
                },
            }});
        cardElement.mount(\"#card-element\");

        const stripeSubmitButton = document.getElementById(\"stripe-submit-button\");
        stripeSubmitButton.addEventListener(\"click\", handleStripeSubmit);

        async function handleStripeSubmit() {
            try {
                const { token, error } = await stripe.createToken(cardElement);
                handleTokenResult(token, error);
            } catch (error) {
                console.error(\"Error creating token:\", error);
            }
        }

        function handleTokenResult(token, error) {
            if (error) {
                // Display error message if token creation fails
                const errorElement = document.getElementById(\"card-errors\");
                errorElement.textContent = error.message;
            } else {
                // Set the token value and submit the form
                document.getElementById(\"stripeToken\").value = token.id;
                document.getElementById(\"learn-press-checkout-form\").submit();
            }
        }
    });

    paypal.Buttons({
        createOrder: function (data, actions) {
            // Set up the transaction
            return actions.order.create({
                purchase_units: [{
                    amount: {
                        currency_code: 'EUR',
                        value: '";
        // line 436
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pricing"] ?? null), "price", [], "any", false, false, false, 436), "html", null, true);
        echo "'
                    }
                }]
            });
        },
        fundingSource: paypal.FUNDING.PAYPAL, // Only show PayPal login option
        onApprove: function (data, actions) {
            // Capture the funds from the transaction
            return actions.order.capture().then(function (details) {
                // Send the details to your server for further processing
                document.getElementById('learn-press-checkout-form').submit();
            });
        }
    }).render('#paypal-button-container');


</script>

<!-- jquery slim -->
<script src=\"";
        // line 455
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3.4.1.min.js"), "html", null, true);
        echo "\"></script>
<!-- popper js -->
<script src=\"";
        // line 457
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/popper.min.js"), "html", null, true);
        echo "\"></script>
<!-- bootstrap js -->
<script src=\"";
        // line 459
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<!-- nice select -->
<script src=\"";
        // line 461
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/niceselect/js/jquery.nice-select.min.js"), "html", null, true);
        echo "\"></script>
<!-- owl carousel js -->
<script src=\"";
        // line 463
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/owl_carousel/js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
<!-- magnify popup js -->
<script src=\"";
        // line 465
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/magnify_popup/jquery.magnific-popup.js"), "html", null, true);
        echo "\"></script>
<!-- simplyCountdown js -->
<script src=\"";
        // line 467
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/countdown/js/simplyCountdown.min.js"), "html", null, true);
        echo "\"></script>
<!-- counter js -->
<script src=\"";
        // line 469
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/counter/jquery.countTo.js"), "html", null, true);
        echo "\"></script>
<!-- aos js -->
<script src=\"";
        // line 471
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/aos/aos.js"), "html", null, true);
        echo "\"></script>
<!-- font awesome js -->
<script src=\"https://kit.fontawesome.com/6ee3230338.js\"></script>
<!-- custom js -->
<script src=\"";
        // line 475
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"></script>

</body>

</html>
";
    }

    public function getTemplateName()
    {
        return "checkout.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  621 => 475,  614 => 471,  609 => 469,  604 => 467,  599 => 465,  594 => 463,  589 => 461,  584 => 459,  579 => 457,  574 => 455,  552 => 436,  488 => 375,  420 => 310,  410 => 303,  406 => 301,  404 => 300,  380 => 279,  359 => 261,  349 => 254,  328 => 236,  319 => 230,  315 => 229,  311 => 228,  299 => 219,  294 => 217,  271 => 196,  269 => 195,  102 => 31,  97 => 29,  92 => 27,  87 => 25,  82 => 23,  77 => 21,  72 => 19,  67 => 17,  62 => 15,  57 => 13,  52 => 11,  47 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "checkout.html", "/Users/admin/Desktop/panellhnies/panellhnies/templates/checkout.html");
    }
}
