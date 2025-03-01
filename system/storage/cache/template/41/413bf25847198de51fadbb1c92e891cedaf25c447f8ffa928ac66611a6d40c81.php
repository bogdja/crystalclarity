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

/* oct_deals/template/common/cart.twig */
class __TwigTemplate_c40247a82b0015cefe548b2c702bb9a4e3b322135d46970ab4b60b95fd9fcbdf extends Template
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
        if ((array_key_exists("oct_popup_cart_status", $context) && ($context["oct_popup_cart_status"] ?? null))) {
            // line 2
            echo "<button title=\"";
            echo ($context["oct_cart"] ?? null);
            echo "\" id=\"cart\" class=\"ds-header-cart-button button button-transparent position-relative overflow-visible\" type=\"button\" onclick=\"octPopupCart();\">
";
        } else {
            // line 4
            echo "<button title=\"";
            echo ($context["oct_cart"] ?? null);
            echo "\" id=\"cart\" type=\"button\" class=\"ds-header-cart-button button button-transparent position-relative overflow-visible\" onclick=\"location = '";
            echo ($context["cart"] ?? null);
            echo "';\">
";
        }
        // line 6
        echo "    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"19\" height=\"20\" viewBox=\"0 0 19 20\" fill=\"none\">
        <path
            d=\"M16.4615 5.12821H14.1538V4.35897C14.1538 1.95487 12.199 0 9.79487 0C7.39077 0 5.4359 1.95487 5.4359 4.35897V5.12821H3.1282C1.85641 5.12821 0.820511 6.16308 0.820511 7.4359V16.1538C0.820511 18.6338 2.18666 20 4.66666 20H14.9231C17.4031 20 18.7692 18.6338 18.7692 16.1538V7.4359C18.7692 6.16308 17.7333 5.12821 16.4615 5.12821ZM6.97436 4.35897C6.97436 2.80308 8.23897 1.53846 9.79487 1.53846C11.3508 1.53846 12.6154 2.80308 12.6154 4.35897V5.12821H6.97436V4.35897ZM17.2308 16.1538C17.2308 17.7713 16.5405 18.4615 14.9231 18.4615H4.66666C3.04923 18.4615 2.35897 17.7713 2.35897 16.1538V7.4359C2.35897 7.01128 2.70461 6.66667 3.1282 6.66667H5.4359V8.97436C5.4359 9.39897 5.78051 9.74359 6.20513 9.74359C6.62974 9.74359 6.97436 9.39897 6.97436 8.97436V6.66667H12.6154V8.97436C12.6154 9.39897 12.96 9.74359 13.3846 9.74359C13.8092 9.74359 14.1538 9.39897 14.1538 8.97436V6.66667H16.4615C16.8851 6.66667 17.2308 7.01128 17.2308 7.4359V16.1538Z\"
            fill=\"#00171F\" />
    </svg>
    <span class=\"badge rounded-pill position-absolute ds-cart-qty";
        // line 11
        if ((($context["total_products"] ?? null) > 0)) {
            echo " active";
        }
        echo "\">";
        echo ($context["total_products"] ?? null);
        echo "</span>
</button>
<span class=\"d-none\" ";
        // line 13
        if (twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "isbuttoninteractive", [], "any", true, true, false, 13)) {
            echo "data-cart-ids=\"";
            echo ($context["cart_product_ids"] ?? null);
            echo "\"";
        }
        echo " data-cart-text=\"";
        echo ($context["cart_text"] ?? null);
        echo "\" data-cart-text-in=\"";
        echo ($context["cart_text_in"] ?? null);
        echo "\"></span>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "oct_deals/template/common/cart.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  69 => 13,  60 => 11,  53 => 6,  45 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oct_deals/template/common/cart.twig", "");
    }
}
