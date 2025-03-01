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

/* octemplates/module/oct_smart_checkout.twig */
class __TwigTemplate_209c39ad24d6d09df2dda64674697a81e6be6589c49aaf1e50b4c52ef3c33845 extends Template
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
        echo ($context["header"] ?? null);
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
\t<div class=\"page-header\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"pull-right\">
\t\t\t\t<button type=\"submit\" form=\"form\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\">
\t\t\t\t\t<i class=\"fa fa-save\"></i>&nbsp;&nbsp;";
        // line 7
        echo ($context["button_save"] ?? null);
        echo "
\t\t\t\t</button>
\t\t\t\t<button id=\"reinstall\" data-toggle=\"tooltip\" title=\"";
        // line 9
        echo ($context["button_reinstall"] ?? null);
        echo "\" class=\"btn btn-danger\">
\t\t\t\t\t<i class=\"fa fa-repeat\"></i>
\t\t\t\t</button>
\t\t\t\t<button id=\"export\" data-toggle=\"tooltip\" title=\"";
        // line 12
        echo ($context["button_export"] ?? null);
        echo "\" class=\"btn btn-success\">
\t\t\t\t\t<i class=\"fa fa-download\"></i>
\t\t\t\t</button>\t\t\t\t
\t\t\t\t<button id=\"import\" data-toggle=\"tooltip\" title=\"";
        // line 15
        echo ($context["button_import"] ?? null);
        echo "\" class=\"btn btn-success\">
\t\t\t\t\t<i class=\"fa fa-upload\"></i>
\t\t\t\t</button>
\t\t\t\t<div class=\"btn-group\" id=\"import-group\" style=\"display: none;\">
\t\t\t\t\t<input type=\"file\" id=\"import-file\" accept=\".json\">
\t\t\t\t</div>
\t\t\t\t<a href=\"";
        // line 21
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\">
\t\t\t\t\t<i class=\"fa fa-reply\"></i>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<h1>";
        // line 25
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 28
            echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
            // line 29
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 29);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 29);
            echo "</a>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "\t\t\t</ul>
\t\t</div>
\t</div>

\t<div class=\"container-fluid\">
\t\t";
        // line 37
        if (($context["error_warning"] ?? null)) {
            // line 38
            echo "\t\t\t<script>
\t\t\t\tusNotify('warning', '";
            // line 39
            echo ($context["error_warning"] ?? null);
            echo "');
\t\t\t</script>
\t\t";
        }
        // line 42
        echo "\t\t";
        if (($context["success"] ?? null)) {
            // line 43
            echo "\t\t\t<script>
\t\t\t\tusNotify('success', '";
            // line 44
            echo ($context["success"] ?? null);
            echo "');
\t\t\t</script>
\t\t";
        }
        // line 47
        echo "\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<h3 class=\"panel-title\">
\t\t\t\t\t<i class=\"fa fa-pencil\"></i>
\t\t\t\t\t";
        // line 51
        echo ($context["text_edit"] ?? null);
        echo "</h3>
\t\t\t</div>
\t\t\t<div class=\"panel-body\">
\t\t\t\t<form action=\"";
        // line 54
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-theme\" class=\"form-horizontal\">
\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t\t<a href=\"#setting-tab\" data-toggle=\"tab\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-cog\"></i>
\t\t\t\t\t\t\t\t";
        // line 59
        echo ($context["tab_setting"] ?? null);
        echo "</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#user-settings-tab\" data-toggle=\"tab\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-user\"></i>
\t\t\t\t\t\t\t\t";
        // line 64
        echo ($context["tab_user"] ?? null);
        echo "</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#delivery-settings-tab\" data-toggle=\"tab\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-cog\"></i>
\t\t\t\t\t\t\t\t";
        // line 69
        echo ($context["tab_delivery_settings"] ?? null);
        echo "</a>
\t\t\t\t\t\t</li>\t\t\t\t\t\t
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#delivery-methods-tab\" data-toggle=\"tab\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-truck\"></i>
\t\t\t\t\t\t\t\t";
        // line 74
        echo ($context["tab_delivery_methods"] ?? null);
        echo "</a>
\t\t\t\t\t\t</li>\t\t\t\t\t\t
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#payment-methods-tab\" data-toggle=\"tab\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-credit-card\"></i>
\t\t\t\t\t\t\t\t";
        // line 79
        echo ($context["tab_payment_settings"] ?? null);
        echo "</a>
\t\t\t\t\t\t</li>\t\t\t\t\t\t
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#custom-fields\" data-toggle=\"tab\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-bars\"></i>
\t\t\t\t\t\t\t\t";
        // line 84
        echo ($context["tab_custom_fields"] ?? null);
        echo "</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#recommended-products\" data-toggle=\"tab\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-thumbs-up\"></i>
\t\t\t\t\t\t\t\t";
        // line 89
        echo ($context["entry_recommended_products"] ?? null);
        echo "</a>
\t\t\t\t\t\t</li>\t\t\t\t\t\t
\t\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#sorting_blocks\" data-toggle=\"tab\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-sort\"></i>
\t\t\t\t\t\t\t\t";
        // line 94
        echo ($context["entry_sorting_blocks"] ?? null);
        echo "</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#comment\" data-toggle=\"tab\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-comment\"></i>
\t\t\t\t\t\t\t\t";
        // line 99
        echo ($context["entry_comment"] ?? null);
        echo "</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"setting-tab\">
\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"status\">";
        // line 106
        echo ($context["entry_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"oct_smart_checkout_data[status]\" ";
        // line 109
        if (twig_get_attribute($this->env, $this->source, ($context["oct_smart_checkout_data"] ?? null), "status", [], "any", false, false, false, 109)) {
            echo " checked=\"checked\" ";
        }
        echo " id=\"status\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"status\"></label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"cart-status\">";
        // line 121
        echo ($context["entry_cart_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"oct_smart_checkout_data[cart_status]\" ";
        // line 124
        if (twig_get_attribute($this->env, $this->source, ($context["oct_smart_checkout_data"] ?? null), "cart_status", [], "any", false, false, false, 124)) {
            echo " checked=\"checked\" ";
        }
        echo " id=\"cart-status\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"cart-status\"></label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"no-call\">";
        // line 136
        echo ($context["entry_no_call"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"oct_smart_checkout_data[no_call]\" ";
        // line 139
        if (twig_get_attribute($this->env, $this->source, ($context["oct_smart_checkout_data"] ?? null), "no_call", [], "any", false, false, false, 139)) {
            echo " checked=\"checked\" ";
        }
        echo " id=\"no-call\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"no-call\"></label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"oct_smart_checkout_data[telegram_viber_contact]\">";
        // line 151
        echo ($context["text_telegram_viber_contact"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"oct_smart_checkout_data[telegram_viber_contact]\" ";
        // line 154
        if (twig_get_attribute($this->env, $this->source, ($context["oct_smart_checkout_data"] ?? null), "telegram_viber_contact", [], "any", false, false, false, 154)) {
            echo " checked=\"checked\" ";
        }
        echo " id=\"oct_smart_checkout_data[telegram_viber_contact]\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"oct_smart_checkout_data[telegram_viber_contact]\"></label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>\t\t
\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"oct_smart_checkout_data[authorization]\">";
        // line 166
        echo ($context["text_authorization_options"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"oct_smart_checkout_data[authorization]\" ";
        // line 169
        if (twig_get_attribute($this->env, $this->source, ($context["oct_smart_checkout_data"] ?? null), "authorization", [], "any", false, false, false, 169)) {
            echo " checked=\"checked\" ";
        }
        echo " id=\"oct_smart_checkout_data[authorization]\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"oct_smart_checkout_data[authorization]\"></label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"oct_smart_checkout_data[registration]\">";
        // line 181
        echo ($context["text_registration_options"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"oct_smart_checkout_data[registration]\" ";
        // line 184
        if (twig_get_attribute($this->env, $this->source, ($context["oct_smart_checkout_data"] ?? null), "registration", [], "any", false, false, false, 184)) {
            echo " checked=\"checked\" ";
        }
        echo " id=\"oct_smart_checkout_data[registration]\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"oct_smart_checkout_data[registration]\"></label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"oct_smart_checkout_data[cost_in_shipping_block]\">";
        // line 196
        echo ($context["text_cost_in_shipping_block_options"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"oct_smart_checkout_data[cost_in_shipping_block]\" ";
        // line 199
        if (twig_get_attribute($this->env, $this->source, ($context["oct_smart_checkout_data"] ?? null), "cost_in_shipping_block", [], "any", false, false, false, 199)) {
            echo " checked=\"checked\" ";
        }
        echo " id=\"oct_smart_checkout_data[cost_in_shipping_block]\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"oct_smart_checkout_data[cost_in_shipping_block]\"></label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"oct_smart_checkout_data[autoselect_first_shipping]\">";
        // line 211
        echo ($context["text_autoselect_first_ship_method"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"oct_smart_checkout_data[autoselect_first_shipping]\" ";
        // line 214
        if (twig_get_attribute($this->env, $this->source, ($context["oct_smart_checkout_data"] ?? null), "autoselect_first_shipping", [], "any", false, false, false, 214)) {
            echo " checked=\"checked\" ";
        }
        echo " id=\"oct_smart_checkout_data[autoselect_first_shipping]\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"oct_smart_checkout_data[autoselect_first_shipping]\"></label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"oct_smart_checkout_data[cart_weight]\">";
        // line 226
        echo ($context["text_cart_weight_options"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"oct_smart_checkout_data[cart_weight]\" ";
        // line 229
        if (twig_get_attribute($this->env, $this->source, ($context["oct_smart_checkout_data"] ?? null), "cart_weight", [], "any", false, false, false, 229)) {
            echo " checked=\"checked\" ";
        }
        echo " id=\"oct_smart_checkout_data[cart_weight]\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"oct_smart_checkout_data[cart_weight]\"></label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"oct_smart_checkout_data[coupon_status]\">";
        // line 241
        echo ($context["text_coupon_status_options"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"oct_smart_checkout_data[coupon_status]\" ";
        // line 244
        if (twig_get_attribute($this->env, $this->source, ($context["oct_smart_checkout_data"] ?? null), "coupon_status", [], "any", false, false, false, 244)) {
            echo " checked=\"checked\" ";
        }
        echo " id=\"oct_smart_checkout_data[coupon_status]\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"oct_smart_checkout_data[coupon_status]\"></label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"oct_smart_checkout_data[voucher_status]\">";
        // line 256
        echo ($context["text_voucher_status_options"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"oct_smart_checkout_data[voucher_status]\" ";
        // line 259
        if (twig_get_attribute($this->env, $this->source, ($context["oct_smart_checkout_data"] ?? null), "voucher_status", [], "any", false, false, false, 259)) {
            echo " checked=\"checked\" ";
        }
        echo " id=\"oct_smart_checkout_data[voucher_status]\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"oct_smart_checkout_data[voucher_status]\"></label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"oct_smart_checkout_data[autosubmit_payment]\">";
        // line 271
        echo ($context["text_autosubmit_payment"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"oct_smart_checkout_data[autosubmit_payment]\" ";
        // line 274
        if (twig_get_attribute($this->env, $this->source, ($context["oct_smart_checkout_data"] ?? null), "autosubmit_payment", [], "any", false, false, false, 274)) {
            echo " checked=\"checked\" ";
        }
        echo " id=\"oct_smart_checkout_data[autosubmit_payment]\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"oct_smart_checkout_data[autosubmit_payment]\"></label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"minimum_order_amount\">";
        // line 286
        echo ($context["entry_minimum_order_amount"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t<input type=\"number\" name=\"oct_smart_checkout_data[minimum_order_amount]\" value=\"";
        // line 288
        echo twig_get_attribute($this->env, $this->source, ($context["oct_smart_checkout_data"] ?? null), "minimum_order_amount", [], "any", false, false, false, 288);
        echo "\" id=\"minimum_order_amount\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>\t\t
\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"free_shipping_from\">";
        // line 292
        echo ($context["entry_free_shipping_from"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t<input type=\"number\" name=\"oct_smart_checkout_data[free_shipping_from]\" value=\"";
        // line 294
        echo twig_get_attribute($this->env, $this->source, ($context["oct_smart_checkout_data"] ?? null), "free_shipping_from", [], "any", false, false, false, 294);
        echo "\" id=\"free_shipping_from\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"when-empty-email\">";
        // line 298
        echo ($context["entry_when_empty_email"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"oct_smart_checkout_data[when_empty_email]\" value=\"";
        // line 300
        echo twig_get_attribute($this->env, $this->source, ($context["oct_smart_checkout_data"] ?? null), "when_empty_email", [], "any", false, false, false, 300);
        echo "\" id=\"when-empty-email\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"phone_mask\">";
        // line 304
        echo ($context["entry_mask"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" data-toggle=\"tooltip\" title=\"";
        // line 305
        echo ($context["entry_mask_info"] ?? null);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-question-circle\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"oct_smart_checkout_data[phone_mask]\" value=\"";
        // line 310
        echo twig_get_attribute($this->env, $this->source, ($context["oct_smart_checkout_data"] ?? null), "phone_mask", [], "any", false, false, false, 310);
        echo "\" id=\"phone_mask\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"user-settings-tab\">
\t\t\t\t\t\t\t<fieldset class=\"tabbable tabs-left row\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-12\"><legend>";
        // line 317
        echo ($context["text_tab_fields"] ?? null);
        echo "</legend></div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t\t\t\t\t<ul id=\"customer-tabs\" class=\"nav nav-pills nav-stacked mb-3\">
\t\t\t\t\t\t\t\t\t\t";
        // line 320
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_smart_checkout_data"] ?? null), "customer", [], "any", false, false, false, 320), "fields", [], "any", false, false, false, 320));
        foreach ($context['_seq'] as $context["field"] => $context["details"]) {
            // line 321
            echo "\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#customer_";
            // line 322
            echo $context["field"];
            echo "\" data-toggle=\"tab\" style=\"justify-content:space-between;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 323
            echo twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = ($context["shipping_methods"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[(($__internal_compile_1 = twig_split_filter($this->env, $context["field"], "-")) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[0] ?? null) : null)] ?? null) : null), "name", [], "any", false, false, false, 323);
            echo " ";
            echo twig_get_attribute($this->env, $this->source, $context, ("customer_tab_" . $context["field"]), [], "any", false, false, false, 323);
            echo " (";
            echo $context["field"];
            echo ")
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 324
            if (($context["field"] != "default")) {
                // line 325
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm btn-danger\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" onclick=\"deleteTab('customer', 'customer_";
                echo $context["field"];
                echo "')\"><i class=\"fa fa-trash\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 327
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['details'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 330
        echo "\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t<div class=\"well\">
\t\t\t\t\t\t\t\t\t\t<select id=\"customer-shipping-method-selector\" class=\"form-control mb-3\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">";
        // line 333
        echo ($context["text_chose_delivery_method"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t</select>
\t
\t\t\t\t\t\t\t\t\t\t<button id=\"add-customer-shipping-method\" class=\"btn btn-primary w-100\">+ ";
        // line 336
        echo ($context["text_add_delivery_method"] ?? null);
        echo "</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-9\">
\t\t\t\t\t\t\t\t\t<div id=\"customer-tabs-content\" class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t";
        // line 341
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_smart_checkout_data"] ?? null), "customer", [], "any", false, false, false, 341), "fields", [], "any", false, false, false, 341));
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
        foreach ($context['_seq'] as $context["section"] => $context["fields"]) {
            // line 342
            echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"customer_";
            echo $context["section"];
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<fieldset class=\"sortable-fields-container\" id=\"customer-fields-container-";
            // line 343
            echo $context["section"];
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
            // line 344
            echo twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = ($context["shipping_methods"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[(($__internal_compile_3 = twig_split_filter($this->env, $context["section"], "-")) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[0] ?? null) : null)] ?? null) : null), "name", [], "any", false, false, false, 344);
            echo " (";
            echo twig_capitalize_string_filter($this->env, $context["section"]);
            echo ")</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 345
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["fields"]);
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
            foreach ($context['_seq'] as $context["field"] => $context["details"]) {
                // line 346
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"settings-item";
                if ( !twig_get_attribute($this->env, $this->source, $context["details"], "status", [], "any", false, false, false, 346)) {
                    echo " opacity";
                }
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\" style=\"gap:12px;align-items:center;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 348
                $context["key"] = twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 348);
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex settings-item-buttons\" style=\"justify-content:space-between;align-items:center;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 style=\"width:150px;\"><b>";
                // line 350
                echo twig_get_attribute($this->env, $this->source, (($__internal_compile_4 = ($context["custom_fields"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[twig_get_attribute($this->env, $this->source, $context["details"], "custom_field_id", [], "any", false, false, false, 350)] ?? null) : null), "name", [], "any", false, false, false, 350);
                echo twig_get_attribute($this->env, $this->source, $context, ("field_" . $context["field"]), [], "any", false, false, false, 350);
                echo "</b><br><span class=\"badge badge-info\">";
                echo $context["field"];
                echo "</span></h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\" style=\"gap:12px;align-items:center;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info\" style=\"cursor:grab;\" title=\"";
                // line 352
                echo ($context["text_move"] ?? null);
                echo "\"><i class=\"fa fa-hand-grab-o\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"settings-item-toggle btn btn-default\" onclick=\"toggleMobile();\"><i class=\"fa fa-angle-down\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"settings-item-collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"thumbnail d-flex\" style=\"gap:2px;margin-bottom:0;padding:8px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"required\" style=\"color:red;\">*</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
                // line 362
                if ((twig_get_attribute($this->env, $this->source, $context["details"], "required", [], "any", false, false, false, 362) == "1")) {
                    echo " active ";
                }
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["text_required"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"oct_smart_checkout_data[customer][fields][";
                // line 363
                echo $context["section"];
                echo "][";
                echo $context["field"];
                echo "][required]\" value=\"1\" ";
                if ((twig_get_attribute($this->env, $this->source, $context["details"], "required", [], "any", false, false, false, 363) == "1")) {
                    echo " checked ";
                }
                echo ">";
                echo ($context["text_yes"] ?? null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
                // line 365
                if ((twig_get_attribute($this->env, $this->source, $context["details"], "required", [], "any", false, false, false, 365) == "0")) {
                    echo " active ";
                }
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["text_required"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"oct_smart_checkout_data[customer][fields][";
                // line 366
                echo $context["section"];
                echo "][";
                echo $context["field"];
                echo "][required]\" value=\"0\" ";
                if ((twig_get_attribute($this->env, $this->source, $context["details"], "required", [], "any", false, false, false, 366) == "0")) {
                    echo " checked ";
                }
                echo ">";
                echo ($context["text_no"] ?? null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"thumbnail d-flex\" style=\"gap:8px;margin-bottom:0;padding:8px;align-items:center;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-eye\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
                // line 374
                if ((twig_get_attribute($this->env, $this->source, $context["details"], "display", [], "any", false, false, false, 374) == "all")) {
                    echo " active ";
                }
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["text_display"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"oct_smart_checkout_data[customer][fields][";
                // line 375
                echo $context["section"];
                echo "][";
                echo $context["field"];
                echo "][display]\" value=\"all\" ";
                if ((twig_get_attribute($this->env, $this->source, $context["details"], "display", [], "any", false, false, false, 375) == "all")) {
                    echo " checked ";
                }
                echo ">";
                echo ($context["text_all"] ?? null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
                // line 377
                if ((twig_get_attribute($this->env, $this->source, $context["details"], "display", [], "any", false, false, false, 377) == "guests")) {
                    echo " active ";
                }
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["text_display"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"oct_smart_checkout_data[customer][fields][";
                // line 378
                echo $context["section"];
                echo "][";
                echo $context["field"];
                echo "][display]\" value=\"guests\" ";
                if ((twig_get_attribute($this->env, $this->source, $context["details"], "display", [], "any", false, false, false, 378) == "guests")) {
                    echo " checked ";
                }
                echo ">";
                echo ($context["text_guests"] ?? null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
                // line 380
                if ((twig_get_attribute($this->env, $this->source, $context["details"], "display", [], "any", false, false, false, 380) == "registered")) {
                    echo " active ";
                }
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["text_display"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"oct_smart_checkout_data[customer][fields][";
                // line 381
                echo $context["section"];
                echo "][";
                echo $context["field"];
                echo "][display]\" value=\"registered\" ";
                if ((twig_get_attribute($this->env, $this->source, $context["details"], "display", [], "any", false, false, false, 381) == "registered")) {
                    echo " checked ";
                }
                echo ">";
                echo ($context["text_registered"] ?? null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"oct_smart_checkout_data[customer][fields][";
                // line 386
                echo $context["section"];
                echo "][";
                echo $context["field"];
                echo "][sort_order]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["details"], "sort_order", [], "any", false, false, false, 386);
                echo "\">
\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"oct_smart_checkout_data[customer][fields][";
                // line 389
                echo $context["section"];
                echo "][";
                echo $context["field"];
                echo "][status]\" ";
                if (twig_get_attribute($this->env, $this->source, $context["details"], "status", [], "any", false, false, false, 389)) {
                    echo " checked=\"checked\" ";
                }
                echo " id=\"oct_smart_checkout_data[customer][fields][";
                echo $context["section"];
                echo "][";
                echo $context["field"];
                echo "][status]\" tabindex=\"1\" onclick=\"setStatus(this);\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"oct_smart_checkout_data[customer][fields][";
                // line 390
                echo $context["section"];
                echo "][";
                echo $context["field"];
                echo "][status]\" data-toggle=\"tooltip\" title=\"";
                echo ($context["text_status_field"] ?? null);
                echo "\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div title=\"";
                // line 399
                echo ($context["text_edit_field"] ?? null);
                echo "\" data-toggle=\"tooltip\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-warning\" data-toggle=\"collapse\" data-target=\"#edit-local-";
                // line 400
                echo $context["section"];
                echo "-";
                echo $context["field"];
                echo "-";
                echo ($context["key"] ?? null);
                echo "\" aria-expanded=\"false\" aria-controls=\"edit-local";
                echo ($context["key"] ?? null);
                echo "\"><i class=\"fa fa-edit\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 403
                if (twig_get_attribute($this->env, $this->source, $context["details"], "custom_field", [], "any", false, false, false, 403)) {
                    // line 404
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-danger\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_remove"] ?? null);
                    echo "\" onclick=\"\$(this).closest('.settings-item').remove();\"><i class=\"fa fa-trash\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 406
                echo "\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"oct_smart_checkout_data[customer][fields][";
                // line 407
                echo $context["section"];
                echo "][";
                echo $context["field"];
                echo "][custom_field]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["details"], "custom_field", [], "any", false, false, false, 407);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"oct_smart_checkout_data[customer][fields][";
                // line 408
                echo $context["section"];
                echo "][";
                echo $context["field"];
                echo "][custom_field_id]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["details"], "custom_field_id", [], "any", false, false, false, 408);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"oct_smart_checkout_data[customer][fields][";
                // line 409
                echo $context["section"];
                echo "][";
                echo $context["field"];
                echo "][type]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["details"], "type", [], "any", false, false, false, 409);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"edit-local-";
                // line 414
                echo $context["section"];
                echo "-";
                echo $context["field"];
                echo "-";
                echo ($context["key"] ?? null);
                echo "\" class=\"collapse mb-3 pt-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 415
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 416
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><img src=\"language/";
                    // line 417
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 417);
                    echo "/";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 417);
                    echo ".png\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 417);
                    echo "\" /></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"oct_smart_checkout_data[customer][fields][";
                    // line 418
                    echo $context["section"];
                    echo "][";
                    echo $context["field"];
                    echo "][localization][";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 418);
                    echo "][name]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_compile_5 = twig_get_attribute($this->env, $this->source, $context["details"], "localization", [], "any", false, false, false, 418)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 418)] ?? null) : null), "name", [], "any", false, false, false, 418);
                    echo "\" placeholder=\"";
                    echo ($context["text_name"] ?? null);
                    echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"oct_smart_checkout_data[customer][fields][";
                    // line 419
                    echo $context["section"];
                    echo "][";
                    echo $context["field"];
                    echo "][localization][";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 419);
                    echo "][placeholder]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_compile_6 = twig_get_attribute($this->env, $this->source, $context["details"], "localization", [], "any", false, false, false, 419)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 419)] ?? null) : null), "placeholder", [], "any", false, false, false, 419);
                    echo "\" placeholder=\"";
                    echo ($context["text_placeholder"] ?? null);
                    echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"oct_smart_checkout_data[customer][fields][";
                    // line 420
                    echo $context["section"];
                    echo "][";
                    echo $context["field"];
                    echo "][localization][";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 420);
                    echo "][error_text]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_compile_7 = twig_get_attribute($this->env, $this->source, $context["details"], "localization", [], "any", false, false, false, 420)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 420)] ?? null) : null), "error_text", [], "any", false, false, false, 420);
                    echo "\" placeholder=\"";
                    echo ($context["text_error_text"] ?? null);
                    echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 423
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
                // line 424
                echo ($context["text_merge"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"oct_smart_checkout_data[customer][fields][";
                // line 427
                echo $context["section"];
                echo "][";
                echo $context["field"];
                echo "][merge]\" ";
                if (twig_get_attribute($this->env, $this->source, $context["details"], "merge", [], "any", false, false, false, 427)) {
                    echo " checked=\"checked\" ";
                }
                echo " id=\"oct_smart_checkout_data[customer][fields][";
                echo $context["section"];
                echo "][";
                echo $context["field"];
                echo "][merge]\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"oct_smart_checkout_data[customer][fields][";
                // line 428
                echo $context["section"];
                echo "][";
                echo $context["field"];
                echo "][merge]\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
                // line 439
                echo ($context["merge_field"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"oct_smart_checkout_data[customer][fields][";
                // line 441
                echo $context["section"];
                echo "][";
                echo $context["field"];
                echo "][merge_field]\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">";
                // line 442
                echo ($context["text_none"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"firstname\"";
                // line 443
                if ((twig_get_attribute($this->env, $this->source, $context["details"], "merge_field", [], "any", false, false, false, 443) == "firstname")) {
                    echo " selected ";
                }
                echo ">";
                echo ($context["field_firstname"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"lastname\"";
                // line 444
                if ((twig_get_attribute($this->env, $this->source, $context["details"], "merge_field", [], "any", false, false, false, 444) == "lastname")) {
                    echo " selected ";
                }
                echo ">";
                echo ($context["field_lastname"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"comment\"";
                // line 445
                if ((twig_get_attribute($this->env, $this->source, $context["details"], "merge_field", [], "any", false, false, false, 445) == "comment")) {
                    echo " selected ";
                }
                echo ">";
                echo ($context["field_comment"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"shipping_address_2\"";
                // line 446
                if ((twig_get_attribute($this->env, $this->source, $context["details"], "merge_field", [], "any", false, false, false, 446) == "shipping_address_2")) {
                    echo " selected ";
                }
                echo ">";
                echo ($context["field_delivery"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"payment_address_2\"";
                // line 447
                if ((twig_get_attribute($this->env, $this->source, $context["details"], "merge_field", [], "any", false, false, false, 447) == "payment_address_2")) {
                    echo " selected ";
                }
                echo ">";
                echo ($context["field_payment"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['field'], $context['details'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 454
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 455
            if (($context["custom_fields"] ?? null)) {
                // line 456
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"well col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select id=\"customer-custom-field-";
                // line 457
                echo $context["section"];
                echo "\" class=\"form-control mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">";
                // line 458
                echo ($context["text_chose_custom_field"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 459
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
                    // line 460
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 460);
                    echo "\" data-name=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 460);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 460);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 462
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span id=\"add-";
                // line 464
                echo $context["section"];
                echo "-custom-field\" class=\"btn btn-primary w-100\">+ ";
                echo ($context["text_add_custom_field"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tdocument.addEventListener(\"DOMContentLoaded\", function() {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\taddCustomField('customer', 'customer-fields-container-";
                // line 468
                echo $context["section"];
                echo "', 'customer-custom-field-";
                echo $context["section"];
                echo "', '";
                echo $context["section"];
                echo "', 'add-";
                echo $context["section"];
                echo "-custom-field');
\t\t\t\t\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 472
            echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['section'], $context['fields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 474
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"delivery-settings-tab\">
\t\t\t\t\t\t\t<fieldset class=\"tabbable tabs-left row\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-12\"><legend>";
        // line 480
        echo ($context["text_tab_fields"] ?? null);
        echo "</legend></div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t\t\t\t\t<ul id=\"delivery-tabs\" class=\"nav nav-pills nav-stacked mb-3\">
\t\t\t\t\t\t\t\t\t\t";
        // line 483
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_smart_checkout_data"] ?? null), "delivery", [], "any", false, false, false, 483), "fields", [], "any", false, false, false, 483));
        foreach ($context['_seq'] as $context["field"] => $context["details"]) {
            // line 484
            echo "\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#delivery_";
            // line 485
            echo $context["field"];
            echo "\" data-toggle=\"tab\" style=\"justify-content:space-between;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 486
            echo twig_get_attribute($this->env, $this->source, (($__internal_compile_8 = ($context["shipping_methods"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[(($__internal_compile_9 = twig_split_filter($this->env, $context["field"], "-")) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[0] ?? null) : null)] ?? null) : null), "name", [], "any", false, false, false, 486);
            echo " ";
            echo twig_get_attribute($this->env, $this->source, $context, ("customer_tab_" . $context["field"]), [], "any", false, false, false, 486);
            echo " (";
            echo $context["field"];
            echo ")
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 487
            if (($context["field"] != "default")) {
                // line 488
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm btn-danger\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" onclick=\"deleteTab('delivery', 'delivery_";
                echo $context["field"];
                echo "')\"><i class=\"fa fa-trash\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 490
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['details'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 493
        echo "\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t<div class=\"well\">
\t\t\t\t\t\t\t\t\t\t<select id=\"delivery-shipping-method-selector\" class=\"form-control mb-3\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">";
        // line 496
        echo ($context["text_chose_delivery_method"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t</select>
\t
\t\t\t\t\t\t\t\t\t\t<button id=\"add-delivery-shipping-method\" class=\"btn btn-primary w-100\">+ ";
        // line 499
        echo ($context["text_add_delivery_method"] ?? null);
        echo "</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-9\">
\t\t\t\t\t\t\t\t\t<div id=\"delivery-tabs-content\" class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t";
        // line 504
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_smart_checkout_data"] ?? null), "delivery", [], "any", false, false, false, 504), "fields", [], "any", false, false, false, 504));
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
        foreach ($context['_seq'] as $context["section"] => $context["fields"]) {
            // line 505
            echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"delivery_";
            echo $context["section"];
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<fieldset class=\"sortable-fields-container\" id=\"delivery-fields-container-";
            // line 506
            echo $context["section"];
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
            // line 507
            echo twig_get_attribute($this->env, $this->source, (($__internal_compile_10 = ($context["shipping_methods"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[(($__internal_compile_11 = twig_split_filter($this->env, $context["section"], "-")) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[0] ?? null) : null)] ?? null) : null), "name", [], "any", false, false, false, 507);
            echo " (";
            echo twig_capitalize_string_filter($this->env, $context["section"]);
            echo ")</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 508
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["fields"]);
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
            foreach ($context['_seq'] as $context["field"] => $context["details"]) {
                // line 509
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"settings-item";
                if ( !twig_get_attribute($this->env, $this->source, $context["details"], "status", [], "any", false, false, false, 509)) {
                    echo " opacity";
                }
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\" style=\"gap:12px;align-items:center;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 511
                $context["key"] = twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 511);
                // line 512
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex settings-item-buttons\" style=\"justify-content:space-between;align-items:center;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 style=\"width:150px;\"><b>";
                // line 513
                echo twig_get_attribute($this->env, $this->source, (($__internal_compile_12 = ($context["custom_fields"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[twig_get_attribute($this->env, $this->source, $context["details"], "custom_field_id", [], "any", false, false, false, 513)] ?? null) : null), "name", [], "any", false, false, false, 513);
                echo twig_get_attribute($this->env, $this->source, $context, ("field_" . $context["field"]), [], "any", false, false, false, 513);
                echo "</b><br><span class=\"badge badge-info\">";
                echo $context["field"];
                echo "</span></h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\" style=\"gap:12px;align-items:center;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info\" style=\"cursor:grab;\" title=\"";
                // line 515
                echo ($context["text_move"] ?? null);
                echo "\"><i class=\"fa fa-hand-grab-o\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"settings-item-toggle btn btn-default\" onclick=\"toggleMobile();\"><i class=\"fa fa-angle-down\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"settings-item-collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"thumbnail d-flex\" style=\"gap:2px;margin-bottom:0;padding:8px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"required\" style=\"color:red;\">*</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
                // line 525
                if ((twig_get_attribute($this->env, $this->source, $context["details"], "required", [], "any", false, false, false, 525) == "1")) {
                    echo " active ";
                }
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["text_required"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"oct_smart_checkout_data[delivery][fields][";
                // line 526
                echo $context["section"];
                echo "][";
                echo $context["field"];
                echo "][required]\" value=\"1\" ";
                if ((twig_get_attribute($this->env, $this->source, $context["details"], "required", [], "any", false, false, false, 526) == "1")) {
                    echo " checked ";
                }
                echo ">";
                echo ($context["text_yes"] ?? null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
                // line 528
                if ((twig_get_attribute($this->env, $this->source, $context["details"], "required", [], "any", false, false, false, 528) == "0")) {
                    echo " active ";
                }
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["text_required"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"oct_smart_checkout_data[delivery][fields][";
                // line 529
                echo $context["section"];
                echo "][";
                echo $context["field"];
                echo "][required]\" value=\"0\" ";
                if ((twig_get_attribute($this->env, $this->source, $context["details"], "required", [], "any", false, false, false, 529) == "0")) {
                    echo " checked ";
                }
                echo ">";
                echo ($context["text_no"] ?? null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"thumbnail d-flex\" style=\"gap:8px;margin-bottom:0;padding:8px;align-items:center;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-eye\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
                // line 537
                if ((twig_get_attribute($this->env, $this->source, $context["details"], "display", [], "any", false, false, false, 537) == "all")) {
                    echo " active ";
                }
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["text_display"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"oct_smart_checkout_data[delivery][fields][";
                // line 538
                echo $context["section"];
                echo "][";
                echo $context["field"];
                echo "][display]\" value=\"all\" ";
                if ((twig_get_attribute($this->env, $this->source, $context["details"], "display", [], "any", false, false, false, 538) == "all")) {
                    echo " checked ";
                }
                echo ">";
                echo ($context["text_all"] ?? null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
                // line 540
                if ((twig_get_attribute($this->env, $this->source, $context["details"], "display", [], "any", false, false, false, 540) == "guests")) {
                    echo " active ";
                }
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["text_display"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"oct_smart_checkout_data[delivery][fields][";
                // line 541
                echo $context["section"];
                echo "][";
                echo $context["field"];
                echo "][display]\" value=\"guests\" ";
                if ((twig_get_attribute($this->env, $this->source, $context["details"], "display", [], "any", false, false, false, 541) == "guests")) {
                    echo " checked ";
                }
                echo ">";
                echo ($context["text_guests"] ?? null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
                // line 543
                if ((twig_get_attribute($this->env, $this->source, $context["details"], "display", [], "any", false, false, false, 543) == "registered")) {
                    echo " active ";
                }
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["text_display"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"oct_smart_checkout_data[delivery][fields][";
                // line 544
                echo $context["section"];
                echo "][";
                echo $context["field"];
                echo "][display]\" value=\"registered\" ";
                if ((twig_get_attribute($this->env, $this->source, $context["details"], "display", [], "any", false, false, false, 544) == "registered")) {
                    echo " checked ";
                }
                echo ">";
                echo ($context["text_registered"] ?? null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"oct_smart_checkout_data[delivery][fields][";
                // line 549
                echo $context["section"];
                echo "][";
                echo $context["field"];
                echo "][sort_order]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["details"], "sort_order", [], "any", false, false, false, 549);
                echo "\">
\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"oct_smart_checkout_data[delivery][fields][";
                // line 552
                echo $context["section"];
                echo "][";
                echo $context["field"];
                echo "][status]\" ";
                if (twig_get_attribute($this->env, $this->source, $context["details"], "status", [], "any", false, false, false, 552)) {
                    echo " checked=\"checked\" ";
                }
                echo " id=\"oct_smart_checkout_data[delivery][fields][";
                echo $context["section"];
                echo "][";
                echo $context["field"];
                echo "][status]\" tabindex=\"1\" onclick=\"setStatus(this);\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"oct_smart_checkout_data[delivery][fields][";
                // line 553
                echo $context["section"];
                echo "][";
                echo $context["field"];
                echo "][status]\" data-toggle=\"tooltip\" title=\"";
                echo ($context["text_status_field"] ?? null);
                echo "\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div title=\"";
                // line 562
                echo ($context["text_edit_field"] ?? null);
                echo "\" data-toggle=\"tooltip\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-warning\" data-toggle=\"collapse\" data-target=\"#edit-local-";
                // line 563
                echo $context["section"];
                echo "-";
                echo $context["field"];
                echo "-";
                echo ($context["key"] ?? null);
                echo "\" aria-expanded=\"false\" aria-controls=\"edit-local";
                echo ($context["key"] ?? null);
                echo "\"><i class=\"fa fa-edit\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 566
                if (twig_get_attribute($this->env, $this->source, $context["details"], "custom_field", [], "any", false, false, false, 566)) {
                    // line 567
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-danger\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_remove"] ?? null);
                    echo "\" onclick=\"\$(this).closest('.settings-item').remove();\"><i class=\"fa fa-trash\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 569
                echo "\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"oct_smart_checkout_data[delivery][fields][";
                // line 570
                echo $context["section"];
                echo "][";
                echo $context["field"];
                echo "][custom_field]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["details"], "custom_field", [], "any", false, false, false, 570);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"oct_smart_checkout_data[delivery][fields][";
                // line 571
                echo $context["section"];
                echo "][";
                echo $context["field"];
                echo "][custom_field_id]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["details"], "custom_field_id", [], "any", false, false, false, 571);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"oct_smart_checkout_data[delivery][fields][";
                // line 572
                echo $context["section"];
                echo "][";
                echo $context["field"];
                echo "][type]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["details"], "type", [], "any", false, false, false, 572);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"edit-local-";
                // line 577
                echo $context["section"];
                echo "-";
                echo $context["field"];
                echo "-";
                echo ($context["key"] ?? null);
                echo "\" class=\"collapse mb-3 pt-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 578
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 579
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><img src=\"language/";
                    // line 580
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 580);
                    echo "/";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 580);
                    echo ".png\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 580);
                    echo "\" /></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"oct_smart_checkout_data[delivery][fields][";
                    // line 581
                    echo $context["section"];
                    echo "][";
                    echo $context["field"];
                    echo "][localization][";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 581);
                    echo "][name]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_compile_13 = twig_get_attribute($this->env, $this->source, $context["details"], "localization", [], "any", false, false, false, 581)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 581)] ?? null) : null), "name", [], "any", false, false, false, 581);
                    echo "\" placeholder=\"";
                    echo ($context["text_name"] ?? null);
                    echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"oct_smart_checkout_data[delivery][fields][";
                    // line 582
                    echo $context["section"];
                    echo "][";
                    echo $context["field"];
                    echo "][localization][";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 582);
                    echo "][placeholder]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_compile_14 = twig_get_attribute($this->env, $this->source, $context["details"], "localization", [], "any", false, false, false, 582)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 582)] ?? null) : null), "placeholder", [], "any", false, false, false, 582);
                    echo "\" placeholder=\"";
                    echo ($context["text_placeholder"] ?? null);
                    echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"oct_smart_checkout_data[delivery][fields][";
                    // line 583
                    echo $context["section"];
                    echo "][";
                    echo $context["field"];
                    echo "][localization][";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 583);
                    echo "][error_text]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_compile_15 = twig_get_attribute($this->env, $this->source, $context["details"], "localization", [], "any", false, false, false, 583)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 583)] ?? null) : null), "error_text", [], "any", false, false, false, 583);
                    echo "\" placeholder=\"";
                    echo ($context["text_error_text"] ?? null);
                    echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 586
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
                // line 587
                echo ($context["text_merge"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"oct_smart_checkout_data[delivery][fields][";
                // line 590
                echo $context["section"];
                echo "][";
                echo $context["field"];
                echo "][merge]\" ";
                if (twig_get_attribute($this->env, $this->source, $context["details"], "merge", [], "any", false, false, false, 590)) {
                    echo " checked=\"checked\" ";
                }
                echo " id=\"oct_smart_checkout_data[delivery][fields][";
                echo $context["section"];
                echo "][";
                echo $context["field"];
                echo "][merge]\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"oct_smart_checkout_data[delivery][fields][";
                // line 591
                echo $context["section"];
                echo "][";
                echo $context["field"];
                echo "][merge]\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
                // line 602
                echo ($context["merge_field"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"oct_smart_checkout_data[delivery][fields][";
                // line 604
                echo $context["section"];
                echo "][";
                echo $context["field"];
                echo "][merge_field]\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">";
                // line 605
                echo ($context["text_none"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"firstname\"";
                // line 606
                if ((twig_get_attribute($this->env, $this->source, $context["details"], "merge_field", [], "any", false, false, false, 606) == "firstname")) {
                    echo " selected ";
                }
                echo ">";
                echo ($context["field_firstname"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"lastname\"";
                // line 607
                if ((twig_get_attribute($this->env, $this->source, $context["details"], "merge_field", [], "any", false, false, false, 607) == "lastname")) {
                    echo " selected ";
                }
                echo ">";
                echo ($context["field_lastname"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"comment\"";
                // line 608
                if ((twig_get_attribute($this->env, $this->source, $context["details"], "merge_field", [], "any", false, false, false, 608) == "comment")) {
                    echo " selected ";
                }
                echo ">";
                echo ($context["field_comment"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"shipping_address_2\"";
                // line 609
                if ((twig_get_attribute($this->env, $this->source, $context["details"], "merge_field", [], "any", false, false, false, 609) == "shipping_address_2")) {
                    echo " selected ";
                }
                echo ">";
                echo ($context["field_delivery"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"payment_address_2\"";
                // line 610
                if ((twig_get_attribute($this->env, $this->source, $context["details"], "merge_field", [], "any", false, false, false, 610) == "payment_address_2")) {
                    echo " selected ";
                }
                echo ">";
                echo ($context["field_payment"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['field'], $context['details'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 617
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 618
            if (($context["custom_fields"] ?? null)) {
                // line 619
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"well col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select id=\"delivery-custom-field-";
                // line 620
                echo $context["section"];
                echo "\" class=\"form-control mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">";
                // line 621
                echo ($context["text_chose_custom_field"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 622
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
                    // line 623
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 623);
                    echo "\" data-name=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 623);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 623);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 625
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span id=\"add-";
                // line 627
                echo $context["section"];
                echo "-";
                echo ($context["field"] ?? null);
                echo "-";
                echo ($context["key"] ?? null);
                echo "-custom-field\" class=\"btn btn-primary w-100\">+ ";
                echo ($context["text_add_custom_field"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tdocument.addEventListener(\"DOMContentLoaded\", function() {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\taddCustomField('delivery', 'delivery-fields-container-";
                // line 631
                echo $context["section"];
                echo "', 'delivery-custom-field-";
                echo $context["section"];
                echo "', '";
                echo $context["section"];
                echo "', 'add-";
                echo $context["section"];
                echo "-";
                echo ($context["field"] ?? null);
                echo "-";
                echo ($context["key"] ?? null);
                echo "-custom-field');
\t\t\t\t\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 635
            echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['section'], $context['fields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 637
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</fieldset>\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"delivery-methods-tab\">

\t\t\t\t\t\t\t<fieldset class=\"tabbable tabs-left row\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-12\"><legend>";
        // line 644
        echo ($context["tab_delivery_methods"] ?? null);
        echo "</legend></div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t\t\t\t\t<ul id=\"delivery-methods-tabs\" class=\"nav nav-pills nav-stacked mb-3\">
\t\t\t\t\t\t\t\t\t\t";
        // line 647
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_smart_checkout_data"] ?? null), "delivery", [], "any", false, false, false, 647), "methods", [], "any", false, false, false, 647));
        foreach ($context['_seq'] as $context["method"] => $context["details"]) {
            // line 648
            echo "\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#delivery-methods-";
            // line 649
            echo $context["method"];
            echo "\" data-toggle=\"tab\" style=\"justify-content:space-between;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 650
            echo twig_get_attribute($this->env, $this->source, (($__internal_compile_16 = ($context["shipping_methods"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[(($__internal_compile_17 = twig_split_filter($this->env, $context["method"], "-")) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17[0] ?? null) : null)] ?? null) : null), "name", [], "any", false, false, false, 650);
            echo " ";
            echo twig_get_attribute($this->env, $this->source, $context, ("customer_tab_" . $context["method"]), [], "any", false, false, false, 650);
            echo " (";
            echo $context["method"];
            echo ")
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 651
            if (($context["method"] != "default")) {
                // line 652
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm btn-danger\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" onclick=\"deleteTab('delivery-methods', 'delivery-methods-";
                echo $context["method"];
                echo "')\"><i class=\"fa fa-trash\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 654
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['method'], $context['details'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 657
        echo "\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t<div class=\"well\">
\t\t\t\t\t\t\t\t\t\t<select id=\"delivery-methods-selector\" class=\"form-control mb-3\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">";
        // line 660
        echo ($context["text_chose_delivery_method"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t</select>

\t\t\t\t\t\t\t\t\t\t<button id=\"add-delivery-methods\" class=\"btn btn-primary w-100\">+ ";
        // line 663
        echo ($context["text_add_delivery_method"] ?? null);
        echo "</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-9\">
\t\t\t\t\t\t\t\t\t<div id=\"delivery-methods-tabs-content\" class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t";
        // line 668
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_smart_checkout_data"] ?? null), "delivery", [], "any", false, false, false, 668), "methods", [], "any", false, false, false, 668));
        foreach ($context['_seq'] as $context["method"] => $context["details"]) {
            // line 669
            echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"delivery-methods-";
            echo $context["method"];
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<fieldset class=\"sortable-fields-container\" id=\"delivery-methods-fields-container-";
            // line 670
            echo $context["method"];
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
            // line 671
            echo twig_get_attribute($this->env, $this->source, (($__internal_compile_18 = ($context["shipping_methods"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18[(($__internal_compile_19 = twig_split_filter($this->env, $context["method"], "-")) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19[0] ?? null) : null)] ?? null) : null), "name", [], "any", false, false, false, 671);
            echo " (";
            echo twig_capitalize_string_filter($this->env, $context["method"]);
            echo ")</legend>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
            // line 674
            echo ($context["text_status"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"oct_smart_checkout_data[delivery][methods][";
            // line 677
            echo $context["method"];
            echo "][status]\" ";
            if (twig_get_attribute($this->env, $this->source, $context["details"], "status", [], "any", false, false, false, 677)) {
                echo " checked=\"checked\" ";
            }
            echo " id=\"oct_smart_checkout_data[delivery][methods][";
            echo $context["method"];
            echo "][status]\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"oct_smart_checkout_data[delivery][methods][";
            // line 678
            echo $context["method"];
            echo "][status]\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
            // line 690
            echo ($context["text_entry_image"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" id=\"thumb-image-";
            // line 692
            echo $context["method"];
            echo "\" data-toggle=\"image\" class=\"img-thumbnail\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img width=\"60\" height=\"60\" src=\"";
            // line 693
            if (twig_get_attribute($this->env, $this->source, $context["details"], "image_cached", [], "any", false, false, false, 693)) {
                echo twig_get_attribute($this->env, $this->source, $context["details"], "image_cached", [], "any", false, false, false, 693);
            } else {
                echo ($context["thumb"] ?? null);
            }
            echo "\" alt=\"\" title=\"\" data-placeholder=\"";
            echo ($context["thumb"] ?? null);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"oct_smart_checkout_data[delivery][methods][";
            // line 695
            echo $context["method"];
            echo "][image]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["details"], "image", [], "any", false, false, false, 695);
            echo "\" id=\"input-image-";
            echo $context["method"];
            echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
            // line 700
            echo ($context["text_display"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
            // line 703
            if ((twig_get_attribute($this->env, $this->source, $context["details"], "display", [], "any", false, false, false, 703) == "all")) {
                echo " active ";
            }
            echo "\" data-toggle=\"tooltip\" title=\"";
            echo ($context["text_display"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"oct_smart_checkout_data[delivery][methods][";
            // line 704
            echo $context["method"];
            echo "][display]\" value=\"all\" ";
            if ((twig_get_attribute($this->env, $this->source, $context["details"], "display", [], "any", false, false, false, 704) == "all")) {
                echo " checked ";
            }
            echo ">";
            echo ($context["text_all"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
            // line 706
            if ((twig_get_attribute($this->env, $this->source, $context["details"], "display", [], "any", false, false, false, 706) == "guests")) {
                echo " active ";
            }
            echo "\" data-toggle=\"tooltip\" title=\"";
            echo ($context["text_display"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"oct_smart_checkout_data[delivery][methods][";
            // line 707
            echo $context["method"];
            echo "][display]\" value=\"guests\" ";
            if ((twig_get_attribute($this->env, $this->source, $context["details"], "display", [], "any", false, false, false, 707) == "guests")) {
                echo " checked ";
            }
            echo ">";
            echo ($context["text_guests"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
            // line 709
            if ((twig_get_attribute($this->env, $this->source, $context["details"], "display", [], "any", false, false, false, 709) == "registered")) {
                echo " active ";
            }
            echo "\" data-toggle=\"tooltip\" title=\"";
            echo ($context["text_display"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"oct_smart_checkout_data[delivery][methods][";
            // line 710
            echo $context["method"];
            echo "][display]\" value=\"registered\" ";
            if ((twig_get_attribute($this->env, $this->source, $context["details"], "display", [], "any", false, false, false, 710) == "registered")) {
                echo " checked ";
            }
            echo ">";
            echo ($context["text_registered"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"";
            // line 717
            echo $context["method"];
            echo "_free_shipping_from\">";
            echo ($context["entry_free_shipping_from"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"number\" name=\"oct_smart_checkout_data[delivery][methods][";
            // line 719
            echo $context["method"];
            echo "][free_shipping_from]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["details"], "free_shipping_from", [], "any", false, false, false, 719);
            echo "\" id=\"";
            echo $context["method"];
            echo "_free_shipping_from\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"delivery-local-methods-";
            // line 724
            echo $context["method"];
            echo "\">";
            echo ($context["text_edit_local"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"oct_smart_checkout_data[delivery][methods][";
            // line 727
            echo $context["method"];
            echo "][local_edit]\" ";
            if (twig_get_attribute($this->env, $this->source, $context["details"], "local_edit", [], "any", false, false, false, 727)) {
                echo " checked=\"checked\" ";
            }
            echo " id=\"delivery-local-methods-";
            echo $context["method"];
            echo "\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"delivery-local-methods-";
            // line 728
            echo $context["method"];
            echo "\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"local-";
            // line 739
            echo $context["method"];
            echo "\" class=\"localization\" style=\"display: ";
            if (twig_get_attribute($this->env, $this->source, $context["details"], "local_edit", [], "any", false, false, false, 739)) {
                echo "block";
            } else {
                echo "none";
            }
            echo ";\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
            // line 741
            echo ($context["entry_title"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 743
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 744
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"language/";
                // line 746
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 746);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 746);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 746);
                echo "\" /></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"oct_smart_checkout_data[delivery][methods][";
                // line 747
                echo $context["method"];
                echo "][localization][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 747);
                echo "][title]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, (($__internal_compile_20 = twig_get_attribute($this->env, $this->source, $context["details"], "localization", [], "any", false, false, false, 747)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 747)] ?? null) : null), "title", [], "any", false, false, false, 747);
                echo "\" placeholder=\"";
                echo ($context["entry_title"] ?? null);
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 750
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
            // line 754
            echo ($context["text_entry_title"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 756
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 757
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"language/";
                // line 759
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 759);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 759);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 759);
                echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"oct_smart_checkout_data[delivery][methods][";
                // line 761
                echo $context["method"];
                echo "][localization][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 761);
                echo "][description]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, (($__internal_compile_21 = twig_get_attribute($this->env, $this->source, $context["details"], "localization", [], "any", false, false, false, 761)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 761)] ?? null) : null), "description", [], "any", false, false, false, 761);
                echo "\" placeholder=\"";
                echo ($context["text_entry_title"] ?? null);
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 764
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$(document).ready(function() {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#delivery-local-methods-";
            // line 770
            echo $context["method"];
            echo "').change(function() {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tif(this.checked) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#local-";
            // line 772
            echo $context["method"];
            echo "').show();
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#local-";
            // line 774
            echo $context["method"];
            echo "').hide();
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['method'], $context['details'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 783
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"payment-methods-tab\">
\t\t\t\t\t\t\t<fieldset class=\"tabbable tabs-left row\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-12\"><legend>";
        // line 789
        echo ($context["tab_payment_settings"] ?? null);
        echo "</legend></div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t\t\t\t\t<ul id=\"payment-methods-tabs\" class=\"nav nav-pills nav-stacked mb-3\">
\t\t\t\t\t\t\t\t\t\t";
        // line 792
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_smart_checkout_data"] ?? null), "payment", [], "any", false, false, false, 792), "methods", [], "any", false, false, false, 792));
        foreach ($context['_seq'] as $context["method"] => $context["details"]) {
            // line 793
            echo "\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#payment-methods-";
            // line 794
            echo $context["method"];
            echo "\" data-toggle=\"tab\" style=\"justify-content:space-between;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 795
            echo twig_get_attribute($this->env, $this->source, (($__internal_compile_22 = ($context["payment_methods"] ?? null)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22[$context["method"]] ?? null) : null), "name", [], "any", false, false, false, 795);
            echo " ";
            echo twig_get_attribute($this->env, $this->source, $context, ("customer_tab_" . $context["method"]), [], "any", false, false, false, 795);
            echo " (";
            echo $context["method"];
            echo ")
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 796
            if (($context["method"] != "default")) {
                // line 797
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm btn-danger\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" onclick=\"deleteTab('payment-methods', 'payment-methods-";
                echo $context["method"];
                echo "')\"><i class=\"fa fa-trash\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 799
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['method'], $context['details'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 802
        echo "\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t<div class=\"well\">
\t\t\t\t\t\t\t\t\t\t<select id=\"payment-methods-selector\" class=\"form-control mb-3\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">";
        // line 805
        echo ($context["text_chose_payment_method"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 806
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["payment_methods"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["method"]) {
            // line 807
            echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["method"], "code", [], "any", false, false, false, 807);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["method"], "name", [], "any", false, false, false, 807);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['method'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 809
        echo "\t\t\t\t\t\t\t\t\t\t</select>

\t\t\t\t\t\t\t\t\t\t<button id=\"add-payment-methods\" class=\"btn btn-primary w-100\">+ ";
        // line 811
        echo ($context["text_add_payment_method"] ?? null);
        echo "</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-9\">
\t\t\t\t\t\t\t\t\t<div id=\"payment-methods-tabs-content\" class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t";
        // line 816
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_smart_checkout_data"] ?? null), "payment", [], "any", false, false, false, 816), "methods", [], "any", false, false, false, 816));
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
        foreach ($context['_seq'] as $context["method"] => $context["details"]) {
            // line 817
            echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"payment-methods-";
            echo $context["method"];
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<fieldset class=\"sortable-fields-container\" id=\"payment-methods-fields-container-";
            // line 818
            echo $context["method"];
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
            // line 819
            echo twig_get_attribute($this->env, $this->source, (($__internal_compile_23 = ($context["payment_methods"] ?? null)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23[$context["method"]] ?? null) : null), "name", [], "any", false, false, false, 819);
            echo " (";
            echo twig_capitalize_string_filter($this->env, $context["method"]);
            echo ")</legend>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
            // line 822
            echo ($context["text_status"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"oct_smart_checkout_data[payment][methods][";
            // line 825
            echo $context["method"];
            echo "][status]\" ";
            if (twig_get_attribute($this->env, $this->source, $context["details"], "status", [], "any", false, false, false, 825)) {
                echo " checked=\"checked\" ";
            }
            echo " id=\"oct_smart_checkout_data[payment][methods][";
            echo $context["method"];
            echo "][status]\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"oct_smart_checkout_data[payment][methods][";
            // line 826
            echo $context["method"];
            echo "][status]\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
            // line 838
            echo ($context["text_entry_image"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" id=\"thumb-image-";
            // line 840
            echo $context["method"];
            echo "\" data-toggle=\"image\" class=\"img-thumbnail\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img width=\"60\" height=\"60\" src=\"";
            // line 841
            if (twig_get_attribute($this->env, $this->source, $context["details"], "image_cached", [], "any", false, false, false, 841)) {
                echo twig_get_attribute($this->env, $this->source, $context["details"], "image_cached", [], "any", false, false, false, 841);
            } else {
                echo ($context["thumb"] ?? null);
            }
            echo "\" alt=\"\" title=\"\" data-placeholder=\"";
            echo ($context["thumb"] ?? null);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"oct_smart_checkout_data[payment][methods][";
            // line 843
            echo $context["method"];
            echo "][image]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["details"], "image", [], "any", false, false, false, 843);
            echo "\" id=\"input-image-";
            echo $context["method"];
            echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\t

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
            // line 848
            echo ($context["text_display"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
            // line 851
            if ((twig_get_attribute($this->env, $this->source, $context["details"], "display", [], "any", false, false, false, 851) == "all")) {
                echo " active ";
            }
            echo "\" data-toggle=\"tooltip\" title=\"";
            echo ($context["text_display"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"oct_smart_checkout_data[payment][methods][";
            // line 852
            echo $context["method"];
            echo "][display]\" value=\"all\" ";
            if ((twig_get_attribute($this->env, $this->source, $context["details"], "display", [], "any", false, false, false, 852) == "all")) {
                echo " checked ";
            }
            echo ">";
            echo ($context["text_all"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
            // line 854
            if ((twig_get_attribute($this->env, $this->source, $context["details"], "display", [], "any", false, false, false, 854) == "guests")) {
                echo " active ";
            }
            echo "\" data-toggle=\"tooltip\" title=\"";
            echo ($context["text_display"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"oct_smart_checkout_data[payment][methods][";
            // line 855
            echo $context["method"];
            echo "][display]\" value=\"guests\" ";
            if ((twig_get_attribute($this->env, $this->source, $context["details"], "display", [], "any", false, false, false, 855) == "guests")) {
                echo " checked ";
            }
            echo ">";
            echo ($context["text_guests"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
            // line 857
            if ((twig_get_attribute($this->env, $this->source, $context["details"], "display", [], "any", false, false, false, 857) == "registered")) {
                echo " active ";
            }
            echo "\" data-toggle=\"tooltip\" title=\"";
            echo ($context["text_display"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"oct_smart_checkout_data[payment][methods][";
            // line 858
            echo $context["method"];
            echo "][display]\" value=\"registered\" ";
            if ((twig_get_attribute($this->env, $this->source, $context["details"], "display", [], "any", false, false, false, 858) == "registered")) {
                echo " checked ";
            }
            echo ">";
            echo ($context["text_registered"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\t\t

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
            // line 865
            echo ($context["text_entry_delivery_payment"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"well well-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 868
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["shipping_methods"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["shipping_method"]) {
                // line 869
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"oct_smart_checkout_data[payment][methods][";
                // line 871
                echo $context["method"];
                echo "][disable_in_shipping_methods][]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["shipping_method"], "code", [], "any", false, false, false, 871);
                echo "\"";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["shipping_method"], "code", [], "any", false, false, false, 871), twig_get_attribute($this->env, $this->source, (($__internal_compile_24 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_smart_checkout_data"] ?? null), "payment", [], "any", false, false, false, 871), "methods", [], "any", false, false, false, 871)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24[$context["method"]] ?? null) : null), "disable_in_shipping_methods", [], "any", false, false, false, 871))) {
                    echo " checked ";
                }
                echo ">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 872
                echo twig_get_attribute($this->env, $this->source, $context["shipping_method"], "name", [], "any", false, false, false, 872);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shipping_method'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 876
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"payment-local-methods-";
            // line 881
            echo $context["method"];
            echo "\">";
            echo ($context["text_edit_local"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"oct_smart_checkout_data[payment][methods][";
            // line 884
            echo $context["method"];
            echo "][local_edit]\" ";
            if (twig_get_attribute($this->env, $this->source, $context["details"], "local_edit", [], "any", false, false, false, 884)) {
                echo " checked=\"checked\" ";
            }
            echo " id=\"payment-local-methods-";
            echo $context["method"];
            echo "\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"payment-local-methods-";
            // line 885
            echo $context["method"];
            echo "\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"payment-local-";
            // line 896
            echo $context["method"];
            echo "\" class=\"localization\" style=\"display: ";
            if (twig_get_attribute($this->env, $this->source, $context["details"], "local_edit", [], "any", false, false, false, 896)) {
                echo "block";
            } else {
                echo "none";
            }
            echo ";\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
            // line 898
            echo ($context["text_entry_title"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 900
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 901
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"language/";
                // line 903
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 903);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 903);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 903);
                echo "\" /></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"oct_smart_checkout_data[payment][methods][";
                // line 904
                echo $context["method"];
                echo "][localization][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 904);
                echo "][title]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, (($__internal_compile_25 = twig_get_attribute($this->env, $this->source, $context["details"], "localization", [], "any", false, false, false, 904)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 904)] ?? null) : null), "title", [], "any", false, false, false, 904);
                echo "\" placeholder=\"";
                echo ($context["entry_title"] ?? null);
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 907
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
            // line 911
            echo ($context["text_entry_description"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 913
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 914
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"language/";
                // line 916
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 916);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 916);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 916);
                echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"oct_smart_checkout_data[payment][methods][";
                // line 918
                echo $context["method"];
                echo "][localization][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 918);
                echo "][description]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, (($__internal_compile_26 = twig_get_attribute($this->env, $this->source, $context["details"], "localization", [], "any", false, false, false, 918)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 918)] ?? null) : null), "description", [], "any", false, false, false, 918);
                echo "\" placeholder=\"";
                echo ($context["text_entry_description"] ?? null);
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 921
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$(document).ready(function() {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#payment-local-methods-";
            // line 925
            echo $context["method"];
            echo "').change(function() {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tif(this.checked) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#payment-local-";
            // line 927
            echo $context["method"];
            echo "').show();
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#payment-local-";
            // line 929
            echo $context["method"];
            echo "').hide();
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t<fieldset class=\"sortable-fields-container\" id=\"payment-fields-container-";
            // line 936
            echo $context["method"];
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
            // line 937
            echo ($context["text_tab_fields"] ?? null);
            echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 938
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["details"], "fields", [], "any", false, false, false, 938));
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
            foreach ($context['_seq'] as $context["field"] => $context["details"]) {
                // line 939
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"settings-item";
                if ( !twig_get_attribute($this->env, $this->source, $context["details"], "status", [], "any", false, false, false, 939)) {
                    echo " opacity";
                }
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\" style=\"gap:12px;align-items:center;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 941
                $context["key"] = twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 941);
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex settings-item-buttons\" style=\"justify-content:space-between;align-items:center;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 style=\"width:150px;\"><b>";
                // line 943
                echo twig_get_attribute($this->env, $this->source, (($__internal_compile_27 = ($context["custom_fields"] ?? null)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27[twig_get_attribute($this->env, $this->source, $context["details"], "custom_field_id", [], "any", false, false, false, 943)] ?? null) : null), "name", [], "any", false, false, false, 943);
                echo twig_get_attribute($this->env, $this->source, $context, ("field_" . $context["field"]), [], "any", false, false, false, 943);
                echo "</b><br><span class=\"badge badge-info\">";
                echo $context["field"];
                echo "</span></h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\" style=\"gap:12px;align-items:center;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info\" style=\"cursor:grab;\" title=\"";
                // line 945
                echo ($context["text_move"] ?? null);
                echo "\"><i class=\"fa fa-hand-grab-o\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"settings-item-toggle btn btn-default\" onclick=\"toggleMobile();\"><i class=\"fa fa-angle-down\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"settings-item-collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"thumbnail d-flex\" style=\"gap:2px;margin-bottom:0;padding:8px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"required\" style=\"color:red;\">*</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
                // line 955
                if ((twig_get_attribute($this->env, $this->source, $context["details"], "required", [], "any", false, false, false, 955) == "1")) {
                    echo " active ";
                }
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["text_required"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"oct_smart_checkout_data[payment][methods][";
                // line 956
                echo $context["method"];
                echo "][fields][";
                echo $context["field"];
                echo "][required]\" value=\"1\" ";
                if ((twig_get_attribute($this->env, $this->source, $context["details"], "required", [], "any", false, false, false, 956) == "1")) {
                    echo " checked ";
                }
                echo ">";
                echo ($context["text_yes"] ?? null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
                // line 958
                if ((twig_get_attribute($this->env, $this->source, $context["details"], "required", [], "any", false, false, false, 958) == "0")) {
                    echo " active ";
                }
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["text_required"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"oct_smart_checkout_data[payment][methods][";
                // line 959
                echo $context["method"];
                echo "][fields][";
                echo $context["field"];
                echo "][required]\" value=\"0\" ";
                if ((twig_get_attribute($this->env, $this->source, $context["details"], "required", [], "any", false, false, false, 959) == "0")) {
                    echo " checked ";
                }
                echo ">";
                echo ($context["text_no"] ?? null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"thumbnail d-flex\" style=\"gap:8px;margin-bottom:0;padding:8px;align-items:center;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-eye\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
                // line 967
                if ((twig_get_attribute($this->env, $this->source, $context["details"], "display", [], "any", false, false, false, 967) == "all")) {
                    echo " active ";
                }
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["text_display"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"oct_smart_checkout_data[payment][methods][";
                // line 968
                echo $context["method"];
                echo "][fields][";
                echo $context["field"];
                echo "][display]\" value=\"all\" ";
                if ((twig_get_attribute($this->env, $this->source, $context["details"], "display", [], "any", false, false, false, 968) == "all")) {
                    echo " checked ";
                }
                echo ">";
                echo ($context["text_all"] ?? null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
                // line 970
                if ((twig_get_attribute($this->env, $this->source, $context["details"], "display", [], "any", false, false, false, 970) == "guests")) {
                    echo " active ";
                }
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["text_display"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"oct_smart_checkout_data[payment][methods][";
                // line 971
                echo $context["method"];
                echo "][fields][";
                echo $context["field"];
                echo "][display]\" value=\"guests\" ";
                if ((twig_get_attribute($this->env, $this->source, $context["details"], "display", [], "any", false, false, false, 971) == "guests")) {
                    echo " checked ";
                }
                echo ">";
                echo ($context["text_guests"] ?? null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
                // line 973
                if ((twig_get_attribute($this->env, $this->source, $context["details"], "display", [], "any", false, false, false, 973) == "registered")) {
                    echo " active ";
                }
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["text_display"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"oct_smart_checkout_data[payment][methods][";
                // line 974
                echo $context["method"];
                echo "][fields][";
                echo $context["field"];
                echo "][display]\" value=\"registered\" ";
                if ((twig_get_attribute($this->env, $this->source, $context["details"], "display", [], "any", false, false, false, 974) == "registered")) {
                    echo " checked ";
                }
                echo ">";
                echo ($context["text_registered"] ?? null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"oct_smart_checkout_data[payment][methods][";
                // line 979
                echo $context["method"];
                echo "][fields][";
                echo $context["field"];
                echo "][sort_order]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["details"], "sort_order", [], "any", false, false, false, 979);
                echo "\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"oct_smart_checkout_data[payment][methods][";
                // line 982
                echo $context["method"];
                echo "][fields][";
                echo $context["field"];
                echo "][status]\" ";
                if (twig_get_attribute($this->env, $this->source, $context["details"], "status", [], "any", false, false, false, 982)) {
                    echo " checked=\"checked\" ";
                }
                echo " id=\"oct_smart_checkout_data[payment][methods][";
                echo $context["method"];
                echo "][fields][";
                echo $context["field"];
                echo "][status]\" tabindex=\"1\" onclick=\"setStatus(this);\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"oct_smart_checkout_data[payment][methods][";
                // line 983
                echo $context["method"];
                echo "][fields][";
                echo $context["field"];
                echo "][status]\" data-toggle=\"tooltip\" title=\"";
                echo ($context["text_status_field"] ?? null);
                echo "\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div title=\"";
                // line 992
                echo ($context["text_edit_field"] ?? null);
                echo "\" data-toggle=\"tooltip\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-warning\" data-toggle=\"collapse\" data-target=\"#edit-local-";
                // line 993
                echo $context["method"];
                echo "-";
                echo $context["field"];
                echo "-";
                echo ($context["key"] ?? null);
                echo "\" aria-expanded=\"false\" aria-controls=\"edit-local";
                echo ($context["key"] ?? null);
                echo "\"><i class=\"fa fa-edit\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 996
                if (twig_get_attribute($this->env, $this->source, $context["details"], "custom_field", [], "any", false, false, false, 996)) {
                    // line 997
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-danger\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_remove"] ?? null);
                    echo "\" onclick=\"\$(this).closest('.settings-item').remove();\"><i class=\"fa fa-trash\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 999
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"oct_smart_checkout_data[payment][methods][";
                // line 1000
                echo $context["method"];
                echo "][fields][";
                echo $context["field"];
                echo "][custom_field]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["details"], "custom_field", [], "any", false, false, false, 1000);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"oct_smart_checkout_data[payment][methods][";
                // line 1001
                echo $context["method"];
                echo "][fields][";
                echo $context["field"];
                echo "][custom_field_id]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["details"], "custom_field_id", [], "any", false, false, false, 1001);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"oct_smart_checkout_data[payment][methods][";
                // line 1002
                echo $context["method"];
                echo "][fields][";
                echo $context["field"];
                echo "][type]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["details"], "type", [], "any", false, false, false, 1002);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"edit-local-";
                // line 1007
                echo $context["method"];
                echo "-";
                echo $context["field"];
                echo "-";
                echo ($context["key"] ?? null);
                echo "\" class=\"collapse mb-3 pt-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 1008
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 1009
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><img src=\"language/";
                    // line 1010
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1010);
                    echo "/";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1010);
                    echo ".png\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1010);
                    echo "\" /></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"oct_smart_checkout_data[payment][methods][";
                    // line 1011
                    echo $context["method"];
                    echo "][fields][";
                    echo $context["field"];
                    echo "][localization][";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1011);
                    echo "][name]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_compile_28 = twig_get_attribute($this->env, $this->source, $context["details"], "localization", [], "any", false, false, false, 1011)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1011)] ?? null) : null), "name", [], "any", false, false, false, 1011);
                    echo "\" placeholder=\"";
                    echo ($context["text_name"] ?? null);
                    echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"oct_smart_checkout_data[payment][methods][";
                    // line 1012
                    echo $context["method"];
                    echo "][fields][";
                    echo $context["field"];
                    echo "][localization][";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1012);
                    echo "][placeholder]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_compile_29 = twig_get_attribute($this->env, $this->source, $context["details"], "localization", [], "any", false, false, false, 1012)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1012)] ?? null) : null), "placeholder", [], "any", false, false, false, 1012);
                    echo "\" placeholder=\"";
                    echo ($context["text_placeholder"] ?? null);
                    echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"oct_smart_checkout_data[payment][methods][";
                    // line 1013
                    echo $context["method"];
                    echo "][fields][";
                    echo $context["field"];
                    echo "][localization][";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1013);
                    echo "][error_text]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_compile_30 = twig_get_attribute($this->env, $this->source, $context["details"], "localization", [], "any", false, false, false, 1013)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1013)] ?? null) : null), "error_text", [], "any", false, false, false, 1013);
                    echo "\" placeholder=\"";
                    echo ($context["text_error_text"] ?? null);
                    echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1016
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
                // line 1017
                echo ($context["text_merge"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"oct_smart_checkout_data[payment][methods][";
                // line 1020
                echo $context["method"];
                echo "][fields][";
                echo $context["field"];
                echo "][merge]\" ";
                if (twig_get_attribute($this->env, $this->source, $context["details"], "merge", [], "any", false, false, false, 1020)) {
                    echo " checked=\"checked\" ";
                }
                echo " id=\"oct_smart_checkout_data[payment][methods][";
                echo $context["method"];
                echo "][fields][";
                echo $context["field"];
                echo "][merge]\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"oct_smart_checkout_data[payment][methods][";
                // line 1021
                echo $context["method"];
                echo "][fields][";
                echo $context["field"];
                echo "][merge]\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
                // line 1032
                echo ($context["merge_field"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"oct_smart_checkout_data[payment][methods][";
                // line 1034
                echo $context["method"];
                echo "][fields][";
                echo $context["field"];
                echo "][merge_field]\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">";
                // line 1035
                echo ($context["text_none"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"firstname\"";
                // line 1036
                if ((twig_get_attribute($this->env, $this->source, $context["details"], "merge_field", [], "any", false, false, false, 1036) == "firstname")) {
                    echo " selected ";
                }
                echo ">";
                echo ($context["field_firstname"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"lastname\"";
                // line 1037
                if ((twig_get_attribute($this->env, $this->source, $context["details"], "merge_field", [], "any", false, false, false, 1037) == "lastname")) {
                    echo " selected ";
                }
                echo ">";
                echo ($context["field_lastname"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"comment\"";
                // line 1038
                if ((twig_get_attribute($this->env, $this->source, $context["details"], "merge_field", [], "any", false, false, false, 1038) == "comment")) {
                    echo " selected ";
                }
                echo ">";
                echo ($context["field_comment"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"shipping_address_2\"";
                // line 1039
                if ((twig_get_attribute($this->env, $this->source, $context["details"], "merge_field", [], "any", false, false, false, 1039) == "shipping_address_2")) {
                    echo " selected ";
                }
                echo ">";
                echo ($context["field_delivery"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"payment_address_2\"";
                // line 1040
                if ((twig_get_attribute($this->env, $this->source, $context["details"], "merge_field", [], "any", false, false, false, 1040) == "payment_address_2")) {
                    echo " selected ";
                }
                echo ">";
                echo ($context["field_payment"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['field'], $context['details'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1047
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1048
            if (($context["custom_fields"] ?? null)) {
                // line 1049
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"well col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select id=\"payment-custom-field-";
                // line 1050
                echo $context["method"];
                echo "\" class=\"form-control mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">";
                // line 1051
                echo ($context["text_chose_custom_field"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 1052
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
                    // line 1053
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1053);
                    echo "\" data-name=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1053);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1053);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1055
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span id=\"add-";
                // line 1057
                echo $context["method"];
                echo "-custom-field\" class=\"btn btn-primary w-100\">+ ";
                echo ($context["text_add_custom_field"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdocument.addEventListener(\"DOMContentLoaded\", function() {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\taddCustomField('payment', 'payment-fields-container-";
                // line 1061
                echo $context["method"];
                echo "', 'payment-custom-field-";
                echo $context["method"];
                echo "', '";
                echo $context["method"];
                echo "', 'add-";
                echo $context["method"];
                echo "-custom-field', 1);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 1065
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['method'], $context['details'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1068
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"custom-fields\">
\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t<legend>";
        // line 1075
        echo ($context["tab_custom_fields"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t\t\t";
        // line 1077
        if (($context["custom_fields"] ?? null)) {
            // line 1078
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group mb-3\">
\t\t\t\t\t\t\t\t\t\t\t<button onclick=\"deleteAllSelected();\" type=\"button\" class=\"btn btn-danger dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\" disabled id=\"deleteButton\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-trash-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1081
            echo ($context["button_delete_selected"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        }
        // line 1085
        echo "\t\t\t\t\t\t\t\t\t<table class=\"table table-bordered table-hover\" id=\"custom_fields_table\">
\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);checkCheckBoxes();\"/></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
        // line 1089
        echo ($context["column_name"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
        // line 1090
        echo ($context["column_location"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
        // line 1091
        echo ($context["column_type"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\">";
        // line 1092
        echo ($context["column_sort_order"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\">";
        // line 1093
        echo ($context["column_action"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 1097
        if (($context["custom_fields"] ?? null)) {
            // line 1098
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
                // line 1099
                echo "\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"text-align: center;\"><input type=\"checkbox\" name=\"selected[]\" value=\"";
                // line 1100
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1100);
                echo "\"/></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
                // line 1101
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1101);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
                // line 1102
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 1102);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
                // line 1103
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 1103);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\">";
                // line 1104
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 1104);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" onclick=\"editCustomField(";
                // line 1106
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1106);
                echo ");\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-warning\"><i class=\"fa fa-pencil\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1110
            echo "\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1111
            echo "\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\" colspan=\"6\">";
            // line 1112
            echo ($context["text_no_results"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1115
        echo "\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"5\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span data-toggle=\"modal\" data-target=\"#add-fields-modal\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a id=\"add_fields\" href=\"javascript:;\" data-toggle=\"tooltip\" title=\"";
        // line 1121
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t</tfoot>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"recommended-products\">
\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t<legend>";
        // line 1132
        echo ($context["entry_recommended_products"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"recommended-poducts-status\">";
        // line 1133
        echo ($context["entry_recommended_poducts_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"oct_smart_checkout_data[recommended_poducts][status]\" ";
        // line 1136
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_smart_checkout_data"] ?? null), "recommended_poducts", [], "any", false, false, false, 1136), "status", [], "any", false, false, false, 1136)) {
            echo " checked=\"checked\" ";
        }
        echo " id=\"recommended-poducts-status\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t<label for=\"recommended-poducts-status\"></label>
\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"recomended_hidden\" ";
        // line 1147
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_smart_checkout_data"] ?? null), "recommended_poducts", [], "any", false, false, false, 1147), "status", [], "any", false, false, false, 1147)) {
            echo " style=\"display:none;\" ";
        }
        echo ">
\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"recommended-poducts-autorelated\">";
        // line 1149
        echo ($context["entry_autorelated_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"oct_smart_checkout_data[recommended_poducts][autorelated]\" ";
        // line 1152
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_smart_checkout_data"] ?? null), "recommended_poducts", [], "any", false, false, false, 1152), "autorelated", [], "any", false, false, false, 1152)) {
            echo " checked=\"checked\" ";
        }
        echo " id=\"recommended-poducts-autorelated\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"recommended-poducts-autorelated\"></label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"recommended-poducts-status\">";
        // line 1164
        echo ($context["entry_relatedbysales_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"oct_smart_checkout_data[recommended_poducts][relatedbysales]\" ";
        // line 1167
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_smart_checkout_data"] ?? null), "recommended_poducts", [], "any", false, false, false, 1167), "relatedbysales", [], "any", false, false, false, 1167)) {
            echo " checked=\"checked\" ";
        }
        echo " id=\"recommended-poducts-relatedbysales\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"recommended-poducts-relatedbysales\"></label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-related\">
\t\t\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
        // line 1180
        echo ($context["help_related"] ?? null);
        echo "\">";
        echo ($context["entry_recommended_products"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"oct_smart_checkout_data[recommended_poducts][products]\" value=\"\" placeholder=\"";
        // line 1183
        echo ($context["entry_recommended_products"] ?? null);
        echo "\" id=\"input-related\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t\t\t<div id=\"product-related\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 1185
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_relateds"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_related"]) {
            // line 1186
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"product-related";
            echo twig_get_attribute($this->env, $this->source, $context["product_related"], "product_id", [], "any", false, false, false, 1186);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i onclick=\"deleteProduct(";
            // line 1187
            echo twig_get_attribute($this->env, $this->source, $context["product_related"], "product_id", [], "any", false, false, false, 1187);
            echo ");\" class=\"fa fa-minus-circle\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1188
            echo twig_get_attribute($this->env, $this->source, $context["product_related"], "name", [], "any", false, false, false, 1188);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"oct_smart_checkout_data[recommended_poducts][products][]\" value=\"";
            // line 1189
            echo twig_get_attribute($this->env, $this->source, $context["product_related"], "product_id", [], "any", false, false, false, 1189);
            echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_related'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1192
        echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"recommended_image_size\">";
        // line 1196
        echo ($context["entry_recommended_image_size"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"oct_smart_checkout_data[recommended_poducts][image_size][width]\" value=\"";
        // line 1200
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_smart_checkout_data"] ?? null), "recommended_poducts", [], "any", false, false, false, 1200), "image_size", [], "any", false, false, false, 1200), "width", [], "any", false, false, false, 1200);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"recommended_image_width\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"oct_smart_checkout_data[recommended_poducts][image_size][height]\" value=\"";
        // line 1203
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_smart_checkout_data"] ?? null), "recommended_poducts", [], "any", false, false, false, 1203), "image_size", [], "any", false, false, false, 1203), "height", [], "any", false, false, false, 1203);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" id=\"recommended_image_height\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"recommended_poducts_texts\">
\t\t\t\t\t\t\t\t\t";
        // line 1210
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1211
            echo "\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#recommended-block-tab-";
            // line 1212
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1212);
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1212);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1212);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1212);
            echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1213
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1213);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1216
        echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t";
        // line 1218
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1219
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 1219)) {
                echo "active";
            }
            echo "\" id=\"recommended-block-tab-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1219);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"recommended_title";
            // line 1221
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1221);
            echo "\">";
            echo ($context["entry_recommended_title"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"oct_smart_checkout_data[recommended_poducts][title][";
            // line 1223
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1223);
            echo "]\" value=\"";
            echo (($__internal_compile_31 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_smart_checkout_data"] ?? null), "recommended_poducts", [], "any", false, false, false, 1223), "title", [], "any", false, false, false, 1223)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1223)] ?? null) : null);
            echo "\" placeholder=\"";
            echo ($context["entry_recommended_title"] ?? null);
            echo "\" id=\"recommended_title";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1223);
            echo "\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"recommended_description";
            // line 1227
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1227);
            echo "\">";
            echo ($context["entry_recommended_description"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"oct_smart_checkout_data[recommended_poducts][description][";
            // line 1229
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1229);
            echo "]\" rows=\"5\" placeholder=\"";
            echo ($context["entry_recommended_description"] ?? null);
            echo "\" id=\"recommended_description";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1229);
            echo "\" class=\"form-control\">";
            echo (($__internal_compile_32 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_smart_checkout_data"] ?? null), "recommended_poducts", [], "any", false, false, false, 1229), "description", [], "any", false, false, false, 1229)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1229)] ?? null) : null);
            echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1234
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"sorting_blocks\">
\t\t\t\t\t\t\t<fieldset class=\"sortable-fields-container\" id=\"sorting-blocks-fields-container\">
\t\t\t\t\t\t\t\t<legend>";
        // line 1239
        echo ($context["tab_sorting_blocks"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t";
        // line 1240
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["sorting_blocks"] ?? null));
        foreach ($context['_seq'] as $context["blocktype"] => $context["sort_order"]) {
            // line 1241
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"settings-item d-flex\" style=\"gap:12px;align-items:center;\">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info\" style=\"cursor:grab;\" title=\"";
            // line 1242
            echo ($context["text_move"] ?? null);
            echo "\"><i class=\"fa fa-hand-grab-o\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t <input type=\"hidden\" name=\"oct_smart_checkout_data[sorting_blocks][";
            // line 1243
            echo $context["blocktype"];
            echo "]\">
\t\t\t\t\t\t\t\t\t\t\t<b>";
            // line 1244
            echo twig_get_attribute($this->env, $this->source, $context, ("block_" . $context["blocktype"]), [], "any", false, false, false, 1244);
            echo "</b>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['blocktype'], $context['sort_order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1247
        echo "\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"comment\">
\t\t\t\t\t\t\t<fieldset class=\"sortable-fields-container\" id=\"sorting-blocks-fields-container\">
\t\t\t\t\t\t\t\t<legend>";
        // line 1251
        echo ($context["tab_comment"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"recommended-comment-status\">";
        // line 1253
        echo ($context["entry_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"oct_smart_checkout_data[comment][status]\" ";
        // line 1256
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_smart_checkout_data"] ?? null), "comment", [], "any", false, false, false, 1256), "status", [], "any", false, false, false, 1256)) {
            echo " checked=\"checked\" ";
        }
        echo " id=\"recommended-comment-status\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"recommended-comment-status\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"comment_hidden\" ";
        // line 1267
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_smart_checkout_data"] ?? null), "comment", [], "any", false, false, false, 1267), "status", [], "any", false, false, false, 1267)) {
            echo " style=\"display:none;\" ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"comment_texts\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 1269
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1270
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#recommended-comment-block-tab-";
            // line 1271
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1271);
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1271);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1271);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1271);
            echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1272
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1272);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1275
        echo "\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 1277
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1278
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 1278)) {
                echo "active";
            }
            echo "\" id=\"recommended-comment-block-tab-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1278);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"recommended_comment_title";
            // line 1280
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1280);
            echo "\">";
            echo ($context["entry_recommended_title"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"oct_smart_checkout_data[comment][title][";
            // line 1282
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1282);
            echo "]\" value=\"";
            echo (($__internal_compile_33 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_smart_checkout_data"] ?? null), "comment", [], "any", false, false, false, 1282), "title", [], "any", false, false, false, 1282)) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1282)] ?? null) : null);
            echo "\" placeholder=\"";
            echo ($context["entry_recommended_title"] ?? null);
            echo "\" id=\"recommended_comment_title";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1282);
            echo "\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"recommended_comment_placeholder";
            // line 1286
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1286);
            echo "\">";
            echo ($context["entry_recommended_placeholder"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"oct_smart_checkout_data[comment][placeholder][";
            // line 1288
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1288);
            echo "]\" value=\"";
            echo (($__internal_compile_34 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_smart_checkout_data"] ?? null), "comment", [], "any", false, false, false, 1288), "placeholder", [], "any", false, false, false, 1288)) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1288)] ?? null) : null);
            echo "\" placeholder=\"";
            echo ($context["entry_recommended_placeholder"] ?? null);
            echo "\" id=\"recommended_comment_placeholder";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1288);
            echo "\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1293
        echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<div class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" id=\"add-fields-modal\">
\t<div class=\"modal-dialog\">
\t\t<div class=\"modal-content\">
\t\t\t<form class=\"form-horizontal\" method=\"POST\" action=\"javascript:;\" id=\"add-fields-form\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t\t\t<h4 class=\"modal-title\">";
        // line 1310
        echo ($context["tab_custom_fields"] ?? null);
        echo "</h4>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 1314
        echo ($context["entry_name"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t";
        // line 1316
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1317
            echo "\t\t\t\t\t\t\t\t<div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1317);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1317);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1317);
            echo "\" /></span>
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"custom_field_description[";
            // line 1318
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1318);
            echo "][name]\" value=\"\" placeholder=\"";
            echo ($context["entry_name"] ?? null);
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1321
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-location\">";
        // line 1324
        echo ($context["entry_location"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t<select name=\"location\" id=\"input-location\" class=\"form-control\">
\t\t\t\t\t\t\t\t<option value=\"account\">";
        // line 1327
        echo ($context["text_account"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"address\">";
        // line 1328
        echo ($context["text_address"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-type\">";
        // line 1333
        echo ($context["entry_type"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t<select name=\"type\" id=\"input-type\" class=\"form-control\">
\t\t\t\t\t\t\t\t<optgroup label=\"";
        // line 1336
        echo ($context["text_input"] ?? null);
        echo "\">
\t\t\t\t\t\t\t\t\t<option value=\"text\">";
        // line 1337
        echo ($context["text_text"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t<option value=\"textarea\">";
        // line 1338
        echo ($context["text_textarea"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t<optgroup label=\"";
        // line 1340
        echo ($context["text_choose"] ?? null);
        echo "\">
\t\t\t\t\t\t\t\t\t<option value=\"select\">";
        // line 1341
        echo ($context["text_select"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t<option value=\"radio\">";
        // line 1342
        echo ($context["text_radio"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t<option value=\"checkbox\">";
        // line 1343
        echo ($context["text_checkbox"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t<optgroup label=\"";
        // line 1345
        echo ($context["text_file"] ?? null);
        echo "\">
\t\t\t\t\t\t\t\t\t<option value=\"file\">";
        // line 1346
        echo ($context["text_file"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t<optgroup label=\"";
        // line 1348
        echo ($context["text_date"] ?? null);
        echo "\">
\t\t\t\t\t\t\t\t\t<option value=\"date\">";
        // line 1349
        echo ($context["text_date"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t<option value=\"time\">";
        // line 1350
        echo ($context["text_time"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t<option value=\"datetime\">";
        // line 1351
        echo ($context["text_datetime"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\" id=\"display-value\">
\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-value\">";
        // line 1357
        echo ($context["entry_value"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"value\" value=\"\" placeholder=\"";
        // line 1359
        echo ($context["entry_value"] ?? null);
        echo "\" id=\"input-value\" class=\"form-control\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\" id=\"display-validation\">
\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-validation\"><span data-toggle=\"tooltip\" title=\"";
        // line 1363
        echo ($context["help_regex"] ?? null);
        echo "\">";
        echo ($context["entry_validation"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"validation\" id=\"input-validation\" value=\"\" placeholder=\"";
        // line 1365
        echo ($context["text_regex"] ?? null);
        echo "\"  class=\"form-control\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 1369
        echo ($context["entry_customer_group"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-9\">
                            ";
        // line 1371
        $context["customer_group_row"] = 0;
        // line 1372
        echo "\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1373
            echo "\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"custom_field_customer_group[";
            // line 1375
            echo ($context["customer_group_row"] ?? null);
            echo "][customer_group_id]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1375);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t";
            // line 1376
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1376);
            echo "
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            // line 1379
            $context["customer_group_row"] = (($context["customer_group_row"] ?? null) + 1);
            // line 1380
            echo "\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1381
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 1384
        echo ($context["entry_required"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t";
        // line 1386
        $context["customer_group_row"] = 0;
        // line 1387
        echo "\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1388
            echo "\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"custom_field_customer_group[";
            // line 1390
            echo ($context["customer_group_row"] ?? null);
            echo "][required]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1390);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t";
            // line 1391
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1391);
            echo "
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            // line 1394
            $context["customer_group_row"] = (($context["customer_group_row"] ?? null) + 1);
            // line 1395
            echo "\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1396
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-status\">";
        // line 1399
        echo ($context["entry_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t<select name=\"status\" id=\"input-status\" class=\"form-control\">
\t\t\t\t\t\t\t\t<option value=\"1\">";
        // line 1402
        echo ($context["text_enabled"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"0\">";
        // line 1403
        echo ($context["text_disabled"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-sort-order\"><span data-toggle=\"tooltip\" title=\"";
        // line 1408
        echo ($context["help_sort_order"] ?? null);
        echo "\">";
        echo ($context["entry_sort_order"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"sort_order\" value=\"\" placeholder=\"";
        // line 1410
        echo ($context["entry_sort_order"] ?? null);
        echo "\" id=\"input-sort-order\" class=\"form-control\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<table id=\"custom-field-value\" class=\"table table-striped table-bordered table-hover\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td class=\"text-left required\">";
        // line 1416
        echo ($context["entry_custom_value"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-right\">";
        // line 1417
        echo ($context["entry_sort_order"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody></tbody>
\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td colspan=\"2\"></td>
\t\t\t\t\t\t\t\t<td class=\"text-left\"><button id=\"addCustomFieldValue\" type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 1425
        echo ($context["button_custom_field_value_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</tfoot>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<i class=\"fa fa-circle-o-notch fa-spin add-redirect-loading hidden\"></i>
\t\t\t\t\t<button type=\"button\" class=\"btn btn-warning\" data-dismiss=\"modal\">";
        // line 1432
        echo ($context["button_cancel"] ?? null);
        echo "</button>
\t\t\t\t\t<button type=\"button\" id=\"addCustomerField\" class=\"btn btn-primary\">";
        // line 1433
        echo ($context["button_create"] ?? null);
        echo "</button>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t</div>
</div>

<script>

function addCustomField(tabsGroup, containerId, selectorId, fieldGroup, buttonId, paymentMethod) {
    const container = document.getElementById(containerId);
    const selector = document.getElementById(selectorId);
\tconst button = document.getElementById(buttonId);
\tlet arrayStructure = paymentMethod ? `[\${tabsGroup}][methods][\${fieldGroup}][fields]` : `[\${tabsGroup}][fields][\${fieldGroup}]`;

\tpaymentMethod = paymentMethod || 0;

    if (!container || !selector) {
        console.error('Container or selector not found');
        return;
    }

    button.addEventListener('click', (e) => {
        e.preventDefault();

        const selectedOption = selector.options[selector.selectedIndex];
        const fieldId = selectedOption.value;
        const fieldName = selectedOption.getAttribute('data-name');

        if (selector.value == '') {
            return;
        }

        let fieldsCount = document.querySelectorAll(`#\${containerId} .settings-item`).length + 1;
        const nameToCheck = `oct_smart_checkout_data\${arrayStructure}[custom_\${fieldId}][custom_field_id]`;
        const existingInputs = Array.from(document.querySelectorAll(`input[name='\${nameToCheck}']`));

        if (existingInputs.length > 0) {
            if (!confirm('";
        // line 1471
        echo ($context["text_confirm_rewrite"] ?? null);
        echo "')) {
                return;
            } else {
                existingInputs.forEach(input => {
                    let parent = input.closest('.settings-item'); 
                    if (parent) {
                        parent.remove();
                    }
                });
            }
        }

        const newItemHtml = generateSettingsItem(tabsGroup, fieldGroup, `custom_\${fieldId}`, fieldName, fieldsCount, customField = true, fieldType = 'text', fieldText = '', 1, paymentMethod);

        container.insertAdjacentHTML('beforeend', newItemHtml);

        \$('[data-toggle=\"tooltip\"]').tooltip();
    });
}

function toggleMobile() {
\tconst element = event.target,
\t\tparent = element.closest('.settings-item'),
\t\tcollapse = parent.querySelector('.settings-item-collapse'),
\t\ticon = element.querySelector('.fa');

\tcollapse.classList.toggle('show');
\ticon.classList.toggle('fa-angle-down');
\ticon.classList.toggle('fa-angle-up');
}

function generateSettingsItem(tabsGroup, group, fieldId, fieldName, fieldsCount = 0, customField = false, fieldType = 'text', fieldText, fieldStatus = 1, paymentMethod = 0) {

\tlet fieldIdInt = parseInt(fieldId.replace('custom_', ''));
\tlet dataCustomFiled = customField ? 1 : 0;
\tlet fieldIdIntVal = isNaN(fieldIdInt) ? 0 : fieldIdInt;
\tlet deleteButton = customField ? `<button type=\"button\" class=\"btn btn-danger\" data-toggle=\"tooltip\" title=\"Remove\" onclick=\"this.closest('.settings-item').remove();\"><i class=\"fa fa-trash\"></i></button>` : '';
\tlet fieldNameText = fieldText ? fieldText : fieldName;
\tlet opacityClass = fieldStatus ? '' : ' opacity';
\tlet checkedStatus = fieldStatus ? ' checked' : '';
\tlet arrayStructure = paymentMethod ? `[\${tabsGroup}][methods][\${group}][fields]` : `[\${tabsGroup}][fields][\${group}]`;

\treturn `
\t\t<div class=\"settings-item\${opacityClass}\">
\t\t\t<div class=\"d-flex\" style=\"gap:12px;align-items:center;\">
\t\t\t\t<div class=\"d-flex settings-item-buttons\" style=\"justify-content:space-between;align-items:center;\">
\t\t\t\t\t<h5 style=\"width:150px;\"><b>\${fieldNameText}</b><br><span class=\"badge badge-info\">\${fieldId}</span></h5>
\t\t\t\t\t<div class=\"d-flex\" style=\"gap:12px;align-items:center;\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info\" style=\"cursor:grab;\" title=\"";
        // line 1519
        echo ($context["text_move"] ?? null);
        echo "\"><i class=\"fa fa-hand-grab-o\"></i></button>
\t\t\t\t\t\t<span class=\"settings-item-toggle btn btn-default\" onclick=\"toggleMobile();\"><i class=\"fa fa-angle-down\"></i></span>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"settings-item-collapse\">
\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t<div class=\"thumbnail d-flex\" style=\"gap:2px;margin-bottom:0;padding:8px;\">
\t\t\t\t\t\t\t<span class=\"required\" style=\"color:red;\">*</span>
\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t<label class=\"btn btn-default active\" data-toggle=\"tooltip\" title=\"";
        // line 1529
        echo ($context["text_required"] ?? null);
        echo "\">
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"oct_smart_checkout_data\${arrayStructure}[\${fieldId}][required]\" value=\"1\" checked>";
        // line 1530
        echo ($context["text_yes"] ?? null);
        echo "
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<label class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
        // line 1532
        echo ($context["text_required"] ?? null);
        echo "\">
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"oct_smart_checkout_data\${arrayStructure}[\${fieldId}][required]\" value=\"0\">";
        // line 1533
        echo ($context["text_no"] ?? null);
        echo "
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t
\t\t\t\t\t\t<div class=\"thumbnail d-flex\" style=\"gap:8px;margin-bottom:0;padding:8px;align-items:center;\">
\t\t\t\t\t\t\t<i class=\"fa fa-eye\"></i>
\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t<label class=\"btn btn-default active\" data-toggle=\"tooltip\" title=\"";
        // line 1541
        echo ($context["text_display"] ?? null);
        echo "\">
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"oct_smart_checkout_data\${arrayStructure}[\${fieldId}][display]\" value=\"all\" checked>";
        // line 1542
        echo ($context["text_all"] ?? null);
        echo "
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<label class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
        // line 1544
        echo ($context["text_display"] ?? null);
        echo "\">
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"oct_smart_checkout_data\${arrayStructure}[\${fieldId}][display]\" value=\"guests\">";
        // line 1545
        echo ($context["text_guests"] ?? null);
        echo "
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<label class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
        // line 1547
        echo ($context["text_display"] ?? null);
        echo "\">
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"oct_smart_checkout_data\${arrayStructure}[\${fieldId}][display]\" value=\"registered\">";
        // line 1548
        echo ($context["text_registered"] ?? null);
        echo "
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t
\t\t\t\t\t\t<input type=\"hidden\" name=\"oct_smart_checkout_data\${arrayStructure}[\${fieldId}][sort_order]\" value=\"1\">
\t\t
\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"oct_smart_checkout_data\${arrayStructure}[\${fieldId}][status]\" id=\"status_\${tabsGroup}_\${group}_\${fieldId}\" \${checkedStatus} tabindex=\"1\" onclick=\"setStatus(this);\">
\t\t\t\t\t\t\t<label for=\"status_\${tabsGroup}_\${group}_\${fieldId}\" data-toggle=\"tooltip\" title=\"";
        // line 1557
        echo ($context["text_status_field"] ?? null);
        echo "\"></label>
\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div title=\"";
        // line 1566
        echo ($context["text_edit_field"] ?? null);
        echo "\" data-toggle=\"tooltip\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-warning\" data-toggle=\"collapse\" data-target=\"#edit-local-\${group}-\${fieldsCount}\" aria-expanded=\"false\"><i class=\"fa fa-edit\"></i></button>
\t\t\t\t\t\t</div>
\t\t
\t\t\t\t\t\t\${deleteButton}
\t\t
\t\t\t\t\t\t<input type=\"hidden\" name=\"oct_smart_checkout_data\${arrayStructure}[\${fieldId}][custom_field]\" value=\"\${dataCustomFiled}\">
\t\t\t\t\t\t<input type=\"hidden\" name=\"oct_smart_checkout_data\${arrayStructure}[\${fieldId}][custom_field_id]\" value=\"\${fieldIdIntVal}\">
\t\t\t\t\t\t<input type=\"hidden\" name=\"oct_smart_checkout_data\${arrayStructure}[\${fieldId}][type]\" value=\"\${fieldType}\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div id=\"edit-local-\${group}-\${fieldsCount}\" class=\"collapse mb-3 pt-3\">
\t\t\t\t";
        // line 1580
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1581
            echo "\t\t\t\t\t<div class=\"input-group mb-3\">
\t\t\t\t\t\t<span class=\"input-group-addon\"><img src=\"language/";
            // line 1582
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1582);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1582);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1582);
            echo "\"/></span>
\t\t\t\t\t\t<input type=\"text\" name=\"oct_smart_checkout_data\${arrayStructure}[\${fieldId}][localization][";
            // line 1583
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1583);
            echo "][name]\" value=\"\" placeholder=\"";
            echo ($context["text_name"] ?? null);
            echo "\" class=\"form-control\"/>
\t\t\t\t\t\t<input type=\"text\" name=\"oct_smart_checkout_data\${arrayStructure}[\${fieldId}][localization][";
            // line 1584
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1584);
            echo "][placeholder]\" value=\"\" placeholder=\"";
            echo ($context["text_placeholder"] ?? null);
            echo "\" class=\"form-control\"/>
\t\t\t\t\t\t<input type=\"text\" name=\"oct_smart_checkout_data\${arrayStructure}[\${fieldId}][localization][";
            // line 1585
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1585);
            echo "][error_text]\" value=\"\" placeholder=\"";
            echo ($context["text_error_text"] ?? null);
            echo "\" class=\"form-control\"/>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1588
        echo "\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 1589
        echo ($context["text_merge"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"oct_smart_checkout_data\${arrayStructure}[\${fieldId}][merge]\" id=\"merge_\${fieldId}_\${group}_\${fieldsCount}\" tabindex=\"1\">
\t\t\t\t\t\t\t<label for=\"merge_\${fieldId}_\${group}_\${fieldsCount}\"></label>
\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 1604
        echo ($context["merge_field"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<select name=\"oct_smart_checkout_data\${arrayStructure}[\${fieldId}][merge_field]\" class=\"form-control\">
\t\t\t\t\t\t\t<option value=\"\">";
        // line 1607
        echo ($context["text_none"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t<option value=\"firstname\">";
        // line 1608
        echo ($context["field_firstname"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t<option value=\"lastname\">";
        // line 1609
        echo ($context["field_lastname"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t<option value=\"comment\">";
        // line 1610
        echo ($context["entry_comment"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t<option value=\"shipping_address_2\">";
        // line 1611
        echo ($context["field_delivery"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t<option value=\"payment_address_2\">";
        // line 1612
        echo ($context["field_payment"] ?? null);
        echo "</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t`;
}

function initializeSortable(container) {
\t\$(`\${container}`).sortable({
\t\titems: '.settings-item',
\t\tcursor: 'move',
\t\topacity: 0.9,
\t\taxis: 'y',
\t\thandle: 'button',
\t\tupdate: function(event, ui) {
\t\t\tvar sort_order = 0;
\t\t\t\$(this).find('.settings-item').each(function() {
\t\t\t\t\$(this).find('input[name*=\"[sort_order]\"]').val(sort_order);
\t\t\t\tsort_order++;
\t\t\t});

\t\t\t\$('[data-toggle=\"tooltip\"]').tooltip('hide');
\t\t}
\t});

}

function deleteTab(tabGroup, tabId) {
\t\$(`#\${tabGroup}-tabs a[href=\"#\${tabId}\"]`).parent().remove();
\t\$(`#\${tabId}`).remove();
\tconsole.log(tabGroup, tabId);
\t\$(`#\${tabGroup}-tabs a:first`).tab('show');
}

function setStatus(element) {
\telement.closest('.settings-item').classList.toggle('opacity');
}

\$(document).ready(function() {
\tconst activeTabs = document.querySelectorAll('.nav-stacked li:first-child a');

\tactiveTabs.forEach(tab => {
\t\ttab.click();
\t});

\t\$('body').on('click', '#reinstall', function() {
\t\tif (confirm('";
        // line 1660
        echo ($context["text_confirm_reinstall"] ?? null);
        echo "')) {
\t\t\tlocation = 'index.php?route=octemplates/module/oct_smart_checkout/reinstall&user_token=";
        // line 1661
        echo ($context["user_token"] ?? null);
        echo "';
\t\t}
\t});

\t\$('body').on('click', '#export', function() {
\t\tlocation = 'index.php?route=octemplates/module/oct_smart_checkout/exportSettings&user_token=";
        // line 1666
        echo ($context["user_token"] ?? null);
        echo "';
\t});

\t\$('body').on('click', '#import', function() {
\t\t\$('#import-file').trigger('click');
\t});

\t\$('#import-file').on('change', function(event) {
\t\t
\t\tif (confirm('";
        // line 1675
        echo ($context["text_confirm_import_message"] ?? null);
        echo "')) {
\t\t\tlet fileInput = \$('#import-file')[0];

\t\t\tif (fileInput.files.length > 0) {
\t\t\t\tlet file = fileInput.files[0];
\t\t\t\tlet reader = new FileReader();
\t\t\t\t
\t\t\t\treader.onload = function(e) {
\t\t\t\t\tlet contents = e.target.result;

\t\t\t\t\ttry {
\t\t\t\t\t\tJSON.parse(contents);

\t\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\turl: 'index.php?route=octemplates/module/oct_smart_checkout/importSettings&user_token=";
        // line 1689
        echo ($context["user_token"] ?? null);
        echo "',
\t\t\t\t\t\t\ttype: 'POST',
\t\t\t\t\t\t\tdataType: 'json',
\t\t\t\t\t\t\tdata: {json_data: contents},
\t\t\t\t\t\t\tsuccess: function(response) {
\t\t\t\t\t\t\t\tif (response.success) {
\t\t\t\t\t\t\t\t\talert('";
        // line 1695
        echo ($context["text_success_import"] ?? null);
        echo "');
\t\t\t\t\t\t\t\t\tlocation.reload();
\t\t\t\t\t\t\t\t} else if (response.error) {
\t\t\t\t\t\t\t\t\talert('Error: ' + response.error);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\terror: function(xhr, status, error) {
\t\t\t\t\t\t\t\tconsole.error('Error importing settings:', status, error);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t} catch (error) {
\t\t\t\t\t\talert('Invalid JSON file: ' + error.message);
\t\t\t\t\t}
\t\t\t\t};
\t\t\t\treader.readAsText(file);
\t\t\t} else {
\t\t\t\talert('Please select a file to import.');
\t\t\t}
\t\t}
\t});

\tinitializeSortable('.sortable-fields-container');

    \$('#add-customer-shipping-method').on('click', function(e) {
\t\te.preventDefault();
        let methodCode = \$('#customer-shipping-method-selector').val();
        let methodName = \$('#customer-shipping-method-selector option:selected').text();
\t\tlet settingsItem = '';
\t\t
\t\tconst fields = [
\t\t\t{name: 'firstname', type: 'text', translation: '";
        // line 1725
        echo ($context["field_firstname"] ?? null);
        echo "', status: 1},
\t\t\t{name: 'lastname', type: 'text', translation: '";
        // line 1726
        echo ($context["field_lastname"] ?? null);
        echo "', status: 1},
\t\t\t{name: 'telephone', type: 'text', translation: '";
        // line 1727
        echo ($context["field_telephone"] ?? null);
        echo "', status: 1},
\t\t\t{name: 'email', type: 'text', translation: '";
        // line 1728
        echo ($context["field_email"] ?? null);
        echo "', status: 1},
\t\t\t{name: 'fax', type: 'text', translation: '";
        // line 1729
        echo ($context["field_fax"] ?? null);
        echo "', status: 0},
\t\t];

\t\tfields.forEach((field, i) => {
\t\t\tsettingsItem += generateSettingsItem('customer', methodCode, field.name, field.name, i, customField = false, field.type, field.translation, field.status);
\t\t});


        if (methodCode) {
            const tabId = `customer_\${methodCode}`;

            if (!\$('#' + tabId).length) {
\t\t\t\t\$('#customer-tabs').append(`
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#\${tabId}\" data-toggle=\"tab\" style=\"justify-content:space-between;\">
\t\t\t\t\t\t\t\${methodName}
\t\t\t\t\t\t\t<button class=\"btn btn-sm btn-danger\" onclick=\"deleteTab('customer', '\${tabId}')\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-trash\"></i>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t`);
\t\t\t\t\$('#customer-tabs-content').append(`<div class=\"tab-pane\" id=\"\${tabId}\">
\t\t\t\t\t<fieldset class=\"sortable-fields-container\" id=\"customer-fields-container-\${tabId}\">
\t\t\t\t\t\t<legend>\${methodName}</legend>
\t\t\t\t\t\t\${settingsItem}
\t\t\t\t\t</fieldset>
\t\t\t\t\t";
        // line 1756
        if (($context["custom_fields"] ?? null)) {
            // line 1757
            echo "\t\t\t\t\t\t<div class=\"well col-sm-6\">
\t\t\t\t\t\t\t<select id=\"customer-custom-field-\${tabId}\" class=\"form-control mb-3\">
\t\t\t\t\t\t\t\t<option value=\"\">";
            // line 1759
            echo ($context["text_chose_custom_field"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t";
            // line 1760
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
                // line 1761
                echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1761);
                echo "\" data-name=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1761);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1761);
                echo "</option>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1763
            echo "\t\t\t\t\t\t\t</select>

\t\t\t\t\t\t\t<span id=\"add-\${methodCode}-custom-field\" class=\"btn btn-primary w-100\">+ ";
            // line 1765
            echo ($context["text_add_custom_field"] ?? null);
            echo "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<script>
\t\t\t\t\t\t\taddCustomField('customer', 'customer-fields-container-\${tabId}', 'customer-custom-field-\${tabId}', '\${methodCode}', 'add-\${methodCode}-custom-field');
\t\t\t\t\t\t<` + `/script>
\t\t\t\t\t";
        }
        // line 1771
        echo "\t\t\t\t</div>`);

                \$('#customer-tabs a:last').tab('show');

\t\t\t\tinitializeSortable('.sortable-fields-container');
            } else {
\t\t\t\talert('";
        // line 1777
        echo ($context["text_method_exists"] ?? null);
        echo "');
\t\t\t}
        }
    });

\t\$('#add-delivery-shipping-method').on('click', function(e) {
\t\te.preventDefault();
\t\tlet methodCode = \$('#delivery-shipping-method-selector').val();
\t\tlet methodName = \$('#delivery-shipping-method-selector option:selected').text();
\t\tlet settingsItem = '';
\t\t
\t\tconst fields = [
\t\t\t{name: 'country_id', type: 'select', translation: '";
        // line 1789
        echo ($context["field_country_id"] ?? null);
        echo "', status: 1},
\t\t\t{name: 'zone_id', type: 'select', translation: '";
        // line 1790
        echo ($context["field_zone_id"] ?? null);
        echo "', status: 1},
\t\t\t{name: 'city', type: 'text', translation: '";
        // line 1791
        echo ($context["field_city"] ?? null);
        echo "', status: 1},
\t\t\t{name: 'address_1', type: 'text', translation: '";
        // line 1792
        echo ($context["field_address_1"] ?? null);
        echo "', status: 1},
\t\t\t{name: 'address_2', type: 'text', translation: '";
        // line 1793
        echo ($context["field_address_2"] ?? null);
        echo "', status: 0},
\t\t\t{name: 'postcode', type: 'text', translation: '";
        // line 1794
        echo ($context["field_postcode"] ?? null);
        echo "', status: 0},
\t\t\t{name: 'company', type: 'text', translation: '";
        // line 1795
        echo ($context["field_company"] ?? null);
        echo "', status: 0},
\t\t];

\t\tfields.forEach((field, i) => {
\t\t\tsettingsItem += generateSettingsItem('delivery', methodCode, field.name, field.name, i, customField = false, field.type, field.translation, field.status);
\t\t});


\t\tif (methodCode) {
\t\t\tconst tabId = `delivery_\${methodCode}`;

\t\t\tif (!\$('#' + tabId).length) {
\t\t\t\t\$('#delivery-tabs').append(`
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#\${tabId}\" data-toggle=\"tab\" style=\"justify-content:space-between;\">
\t\t\t\t\t\t\t\${methodName}
\t\t\t\t\t\t\t<button class=\"btn btn-sm btn-danger\" onclick=\"deleteTab('delivery', '\${tabId}')\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-trash\"></i>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t`);
\t\t\t\t\$('#delivery-tabs-content').append(`<div class=\"tab-pane\" id=\"\${tabId}\">
\t\t\t\t\t<fieldset class=\"sortable-fields-container\" id=\"delivery-fields-container-\${tabId}\">
\t\t\t\t\t\t<legend>\${methodName}</legend>
\t\t\t\t\t\t\${settingsItem}
\t\t\t\t\t</fieldset>
\t\t\t\t\t";
        // line 1822
        if (($context["custom_fields"] ?? null)) {
            // line 1823
            echo "\t\t\t\t\t\t<div class=\"well col-sm-6\">
\t\t\t\t\t\t\t<select id=\"delivery-custom-field-\${tabId}\" class=\"form-control mb-3\">
\t\t\t\t\t\t\t\t<option value=\"\">";
            // line 1825
            echo ($context["text_chose_custom_field"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t";
            // line 1826
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
                // line 1827
                echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1827);
                echo "\" data-name=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1827);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1827);
                echo "</option>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1829
            echo "\t\t\t\t\t\t\t</select>

\t\t\t\t\t\t\t<span id=\"add-delivery-\${methodCode}-custom-field\" class=\"btn btn-primary w-100\">+ ";
            // line 1831
            echo ($context["text_add_custom_field"] ?? null);
            echo "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<script>
\t\t\t\t\t\t\taddCustomField('delivery', 'delivery-fields-container-\${tabId}', 'delivery-custom-field-\${tabId}', '\${methodCode}', 'add-delivery-\${methodCode}-custom-field');
\t\t\t\t\t\t<` + `/script>
\t\t\t\t\t";
        }
        // line 1837
        echo "\t\t\t\t</div>`);

\t\t\t\t\$('#delivery-tabs a:last').tab('show');

\t\t\t\tinitializeSortable('.sortable-fields-container');
\t\t\t} else {
\t\t\t\talert('";
        // line 1843
        echo ($context["text_method_exists"] ?? null);
        echo "');
\t\t\t}
\t\t}
\t});

\t\$('#add-delivery-methods').on('click', function(e) {
\t\te.preventDefault();
\t\tlet methodCode = \$('#delivery-methods-selector').val();
\t\tlet methodName = \$('#delivery-methods-selector option:selected').text();
\t\t
\t\tif (methodCode) {
\t\t\tconst tabId = `delivery-methods-\${methodCode}`;

\t\t\tif (!\$('#' + tabId).length) {
\t\t\t\t\$('#delivery-methods-tabs').append(`
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#\${tabId}\" data-toggle=\"tab\" style=\"justify-content:space-between;\">
\t\t\t\t\t\t\t\${methodName}
\t\t\t\t\t\t\t<button class=\"btn btn-sm btn-danger\" onclick=\"deleteTab('delivery-methods', '\${tabId}')\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-trash\"></i>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t`);
\t\t\t\t\$('#delivery-methods-tabs-content').append(`<div class=\"tab-pane\" id=\"\${tabId}\">
\t\t\t\t\t<fieldset class=\"sortable-fields-container\" id=\"delivery-methods-fields-container-\${tabId}\">
\t\t\t\t\t\t<legend>\${methodName}</legend>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">\${methodName}</label>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"oct_smart_checkout_data[delivery][methods][\${methodCode}][status]\" checked id=\"oct_smart_checkout_data[delivery][methods][\${methodCode}][status]\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t<label for=\"oct_smart_checkout_data[delivery][methods][\${methodCode}][status]\"></label>
\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 1888
        echo ($context["text_entry_image"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t<a href=\"\" id=\"thumb-image-\${methodCode}\" data-toggle=\"image\" class=\"img-thumbnail\">
\t\t\t\t\t\t\t\t\t<img width=\"60\" height=\"60\" src=\"";
        // line 1891
        echo ($context["thumb"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["thumb"] ?? null);
        echo "\" />
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"oct_smart_checkout_data[delivery][methods][\${methodCode}][image]\" value=\"";
        // line 1893
        echo twig_get_attribute($this->env, $this->source, ($context["details"] ?? null), "image", [], "any", false, false, false, 1893);
        echo "\" id=\"input-image-\${methodCode}\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 1898
        echo ($context["text_display"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default active\" data-toggle=\"tooltip\" title=\"";
        // line 1901
        echo ($context["text_display"] ?? null);
        echo "\">
\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"oct_smart_checkout_data[delivery][methods][\${methodCode}][display]\" value=\"all\" checked>";
        // line 1902
        echo ($context["text_all"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default data-toggle=\"tooltip\" title=\"";
        // line 1904
        echo ($context["text_display"] ?? null);
        echo "\">
\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"oct_smart_checkout_data[delivery][methods][\${methodCode}][display]\" value=\"guests\">";
        // line 1905
        echo ($context["text_guests"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
        // line 1907
        echo ($context["text_display"] ?? null);
        echo "\">
\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"oct_smart_checkout_data[delivery][methods][\${methodCode}][display]\" value=\"registered\">";
        // line 1908
        echo ($context["text_registered"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"\${methodCode}_free_shipping_from\">";
        // line 1915
        echo ($context["entry_free_shipping_from"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t<input type=\"number\" name=\"oct_smart_checkout_data[delivery][methods][\${methodCode}][free_shipping_from]\" value=\"0\" id=\"\${methodCode}_free_shipping_from\" class=\"form-control\"/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"delivery-local-methods-\${methodCode}\">";
        // line 1922
        echo ($context["text_edit_local"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"oct_smart_checkout_data[delivery][methods][\${methodCode}][local_edit]\" id=\"delivery-local-methods-\${methodCode}\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t<label for=\"delivery-local-methods-\${methodCode}\"></label>
\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div id=\"local-\${methodCode}\" class=\"localization\" style=\"display:none;\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 1939
        echo ($context["entry_title"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t";
        // line 1941
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1942
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"language/";
            // line 1944
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1944);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1944);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1944);
            echo "\" /></span>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"oct_smart_checkout_data[delivery][methods][\${methodCode}][localization][";
            // line 1945
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1945);
            echo "][title]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, (($__internal_compile_35 = twig_get_attribute($this->env, $this->source, ($context["details"] ?? null), "localization", [], "any", false, false, false, 1945)) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1945)] ?? null) : null), "title", [], "any", false, false, false, 1945);
            echo "\" placeholder=\"";
            echo ($context["entry_title"] ?? null);
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1948
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 1952
        echo ($context["text_entry_title"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t";
        // line 1954
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1955
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"language/";
            // line 1957
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1957);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1957);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1957);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"oct_smart_checkout_data[delivery][methods][\${methodCode}][localization][";
            // line 1959
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1959);
            echo "][description]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, (($__internal_compile_36 = twig_get_attribute($this->env, $this->source, ($context["details"] ?? null), "localization", [], "any", false, false, false, 1959)) && is_array($__internal_compile_36) || $__internal_compile_36 instanceof ArrayAccess ? ($__internal_compile_36[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1959)] ?? null) : null), "description", [], "any", false, false, false, 1959);
            echo "\" placeholder=\"";
            echo ($context["text_entry_title"] ?? null);
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1962
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\$(document).ready(function() {
\t\t\t\t\t\t\t\t\t\$('#delivery-local-methods-\${methodCode}').change(function() {
\t\t\t\t\t\t\t\t\t\tif(this.checked) {
\t\t\t\t\t\t\t\t\t\t\t\$('#local-\${methodCode}').show();
\t\t\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\t\t\t\$('#local-\${methodCode}').hide();
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t<` + `/script>


\t\t\t\t\t</fieldset>
\t\t\t\t</div>`);

\t\t\t\t\$('#delivery-methods-tabs a:last').tab('show');
\t\t\t} else {
\t\t\t\talert('";
        // line 1984
        echo ($context["text_method_exists"] ?? null);
        echo "');
\t\t\t}
\t\t
\t\t}
\t});

\t\$('#add-payment-methods').on('click', function(e) {
\t\te.preventDefault();
\t\tlet methodCode = \$('#payment-methods-selector').val();
\t\tlet methodName = \$('#payment-methods-selector option:selected').text();
\t\t
\t\tif (methodCode) {
\t\t\tconst tabId = `payment-methods-\${methodCode}`;

\t\t\tif (!\$('#' + tabId).length) { 
\t\t\t\t\$('#payment-methods-tabs').append(`
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#\${tabId}\" data-toggle=\"tab\" style=\"justify-content:space-between;\">
\t\t\t\t\t\t\t\${methodName} (\${methodCode})
\t\t\t\t\t\t\t<button class=\"btn btn-sm btn-danger\" onclick=\"deleteTab('payment-methods', '\${tabId}')\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-trash\"></i>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t`);
\t\t\t\t\$('#payment-methods-tabs-content').append(`
\t\t\t\t<div class=\"tab-pane\" id=\"\${tabId}\">
\t\t\t\t\t<fieldset class=\"sortable-fields-container\" id=\"payment-methods-fields-container-\${tabId}\">
\t\t\t\t\t\t<legend>\${methodName} (\${methodCode})</legend>

\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 2015
        echo ($context["text_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"oct_smart_checkout_data[payment][methods][\${methodCode}][status]\" checked id=\"oct_smart_checkout_data[payment][methods][\${methodCode}][status]\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t<label for=\"oct_smart_checkout_data[payment][methods][\${methodCode}][status]\"></label>
\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 2031
        echo ($context["text_entry_image"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t<a href=\"\" id=\"thumb-image-\${methodCode}\" data-toggle=\"image\" class=\"img-thumbnail\">
\t\t\t\t\t\t\t\t\t<img width=\"60\" height=\"60\" src=\"";
        // line 2034
        echo ($context["thumb"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["thumb"] ?? null);
        echo "\" />
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"oct_smart_checkout_data[payment][methods][\${methodCode}][image]\" value=\"";
        // line 2036
        echo twig_get_attribute($this->env, $this->source, ($context["details"] ?? null), "image", [], "any", false, false, false, 2036);
        echo "\" id=\"input-image-\${methodCode}\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 2041
        echo ($context["text_display"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default active\" data-toggle=\"tooltip\" title=\"";
        // line 2044
        echo ($context["text_display"] ?? null);
        echo "\">
\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"oct_smart_checkout_data[payment][methods][\${methodCode}][display]\" value=\"all\" checked>";
        // line 2045
        echo ($context["text_all"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default data-toggle=\"tooltip\" title=\"";
        // line 2047
        echo ($context["text_display"] ?? null);
        echo "\">
\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"oct_smart_checkout_data[payment][methods][\${methodCode}][display]\" value=\"guests\">";
        // line 2048
        echo ($context["text_guests"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
        // line 2050
        echo ($context["text_display"] ?? null);
        echo "\">
\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"oct_smart_checkout_data[payment][methods][\${methodCode}][display]\" value=\"registered\">";
        // line 2051
        echo ($context["text_registered"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 2058
        echo ($context["text_entry_delivery_payment"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t<div class=\"well well-sm\">
\t\t\t\t\t\t\t\t\t";
        // line 2061
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["shipping_methods"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["shipping_method"]) {
            // line 2062
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"oct_smart_checkout_data[payment][methods][\${methodCode}][disable_in_shipping_methods][]\" value=\"";
            // line 2064
            echo twig_get_attribute($this->env, $this->source, $context["shipping_method"], "code", [], "any", false, false, false, 2064);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2065
            echo twig_get_attribute($this->env, $this->source, $context["shipping_method"], "name", [], "any", false, false, false, 2065);
            echo "
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shipping_method'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2069
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"payment-local-methods-\${methodCode}\">";
        // line 2074
        echo ($context["text_edit_local"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"oct_smart_checkout_data[payment][methods][\${methodCode}][local_edit]\" id=\"payment-local-methods-\${methodCode}\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t<label for=\"payment-local-methods-\${methodCode}\"></label>
\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div id=\"local-\${methodCode}\" class=\"localization\" class=\"localization\" style=\"display:none;\">
\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 2091
        echo ($context["text_entry_title"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t";
        // line 2093
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 2094
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"language/";
            // line 2096
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 2096);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 2096);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 2096);
            echo "\" /></span>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"oct_smart_checkout_data[payment][methods][\${methodCode}][localization][";
            // line 2097
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2097);
            echo "][title]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, (($__internal_compile_37 = twig_get_attribute($this->env, $this->source, ($context["details"] ?? null), "localization", [], "any", false, false, false, 2097)) && is_array($__internal_compile_37) || $__internal_compile_37 instanceof ArrayAccess ? ($__internal_compile_37[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2097)] ?? null) : null), "title", [], "any", false, false, false, 2097);
            echo "\" placeholder=\"";
            echo ($context["entry_title"] ?? null);
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2100
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 2104
        echo ($context["text_entry_description"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t";
        // line 2106
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 2107
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"language/";
            // line 2109
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 2109);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 2109);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 2109);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"oct_smart_checkout_data[payment][methods][\${methodCode}][localization][";
            // line 2111
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2111);
            echo "][description]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, (($__internal_compile_38 = twig_get_attribute($this->env, $this->source, ($context["details"] ?? null), "localization", [], "any", false, false, false, 2111)) && is_array($__internal_compile_38) || $__internal_compile_38 instanceof ArrayAccess ? ($__internal_compile_38[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2111)] ?? null) : null), "description", [], "any", false, false, false, 2111);
            echo "\" placeholder=\"";
            echo ($context["text_entry_description"] ?? null);
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2114
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\$(document).ready(function() {
\t\t\t\t\t\t\t\t\t\$('#payment-local-methods-\${methodCode}').change(function() {
\t\t\t\t\t\t\t\t\t\tif(this.checked) {
\t\t\t\t\t\t\t\t\t\t\t\$('#local-\${methodCode}').show();
\t\t\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\t\t\t\$('#local-\${methodCode}').hide();
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t<` + `/script>
\t\t\t\t\t\t</div>
\t\t\t\t\t</fieldset>
\t\t\t\t\t";
        // line 2130
        if (($context["custom_fields"] ?? null)) {
            // line 2131
            echo "\t\t\t\t\t\t<div class=\"well col-sm-6\">
\t\t\t\t\t\t\t<select id=\"payment-custom-field-\${methodCode}\" class=\"form-control mb-3\">
\t\t\t\t\t\t\t\t<option value=\"\">";
            // line 2133
            echo ($context["text_chose_custom_field"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t";
            // line 2134
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
                // line 2135
                echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 2135);
                echo "\" data-name=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 2135);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 2135);
                echo "</option>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2137
            echo "\t\t\t\t\t\t\t</select>

\t\t\t\t\t\t\t<span id=\"add-payment-\${methodCode}-custom-field\" class=\"btn btn-primary w-100\">+ ";
            // line 2139
            echo ($context["text_add_custom_field"] ?? null);
            echo "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<script>
\t\t\t\t\t\t\taddCustomField('payment', 'payment-methods-fields-container-\${tabId}', 'payment-custom-field-\${methodCode}', '\${methodCode}', 'add-payment-\${methodCode}-custom-field', 1);
\t\t\t\t\t\t<` + `/script>
\t\t\t\t\t";
        }
        // line 2145
        echo "\t\t\t\t</div>`);

\t\t\t\t\$('#payment-methods-tabs a:last').tab('show');

\t\t\t\tinitializeSortable('.sortable-fields-container');
\t\t\t} else {
\t\t\t\talert('";
        // line 2151
        echo ($context["text_method_exists"] ?? null);
        echo "');
\t\t\t}
\t\t}
\t});
});
</script>

<script>
const baseUrl = 'index.php?route=octemplates/module/oct_smart_checkout/';
const userToken = '";
        // line 2160
        echo ($context["user_token"] ?? null);
        echo "';

\$(function(){
\t\$('select[name=\\'type\\']').on('change', function() {
\t\tif (this.value == 'select' || this.value == 'radio' || this.value == 'checkbox') {
\t\t\t\$('#custom-field-value').show();
\t\t\t\$('#display-value, #display-validation').hide();
\t\t} else {
\t\t\t\$('#custom-field-value').hide();
\t\t\t\$('#display-value, #display-validation').show();
\t\t}
\t\t
\t\tif (this.value == 'date') {
\t\t\t\$('#display-value > div').html('<div class=\"input-group date\"><input type=\"text\" name=\"value\" value=\"' + \$('#input-value').val() + '\" placeholder=\"";
        // line 2173
        echo ($context["entry_value"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-value\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div>');
\t\t} else if (this.value == 'time') {
\t\t\t\$('#display-value > div').html('<div class=\"input-group time\"><input type=\"text\" name=\"value\" value=\"' + \$('#input-value').val() + '\" placeholder=\"";
        // line 2175
        echo ($context["entry_value"] ?? null);
        echo "\" data-date-format=\"HH:mm\" id=\"input-value\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div>');
\t\t} else if (this.value == 'datetime') {
\t\t\t\$('#display-value > div').html('<div class=\"input-group datetime\"><input type=\"text\" name=\"value\" value=\"' + \$('#input-value').val() + '\" placeholder=\"";
        // line 2177
        echo ($context["entry_value"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-value\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div>');
\t\t} else if (this.value == 'textarea') {
\t\t\t\$('#display-value > div').html('<textarea name=\"value\" placeholder=\"";
        // line 2179
        echo ($context["entry_value"] ?? null);
        echo "\" id=\"input-value\" class=\"form-control\">' + \$('#input-value').val() + '</textarea>');
\t\t} else {
\t\t\t\$('#display-value > div').html('<input type=\"text\" name=\"value\" value=\"' + \$('#input-value').val() + '\" placeholder=\"";
        // line 2181
        echo ($context["entry_value"] ?? null);
        echo "\" id=\"input-value\" class=\"form-control\" />');
\t\t}
\t\t
\t\t\$('.date').datetimepicker({
\t\t\tpickTime: false
\t\t});
\t\t
\t\t\$('.time').datetimepicker({
\t\t\tpickDate: false
\t\t});\t
\t\t\t
\t\t\$('.datetime').datetimepicker({
\t\t\tpickDate: true,
\t\t\tpickTime: true
\t\t});
\t});

\t\$('select[name=\\'type\\']').trigger('change');
});

function editCustomField(custom_field_id) {
\t\$.ajax({
\t\turl: 'index.php?route=octemplates/module/oct_smart_checkout/editCustomFieldForm&user_token=";
        // line 2203
        echo ($context["user_token"] ?? null);
        echo "',
\t\ttype: 'post',
\t\tdata: 'custom_field_id=' + custom_field_id,
\t\tdataType: 'html',
\t\tbeforeSend: function() {
\t\t\t\$('#button-customer-field').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-customer-field').button('reset');
\t\t},
\t\tsuccess: function(html) {
\t\t\tconst box = document.createElement('div');
\t\t\tbox.innerHTML = html;
\t\t\tconst form = box.querySelector('#custom-fields-form');

\t\t\tconst modal = document.createElement('div');
\t\t\tmodal.classList.add('modal');
\t\t\tmodal.classList.add('fade');
\t\t\tmodal.id = 'custom-field-modal';

\t\t\tconst modalContent = document.createElement('div');
\t\t\tmodalContent.classList.add('modal-content');
\t\t\tmodalContent.appendChild(form);
\t\t\t
\t\t\tconst modalDialog = document.createElement('div');
\t\t\tmodalDialog.classList.add('modal-dialog');
\t\t\tmodalDialog.appendChild(modalContent);

\t\t\tmodal.appendChild(modalDialog);

\t\t\tdocument.body.appendChild(modal);

\t\t\t\$('#custom-field-modal').modal('show');
\t\t\t\$('#input-edit-type').trigger('change');

\t\t\t\$('#input-edit-type').on('change', function() {

                if (this.value == 'select' || this.value == 'radio' || this.value == 'checkbox') {
                    \$('#custom-field-edit-value').show();
                    \$('#display-edit-value, #display-edit-validation').hide();
                } else {
                    \$('#custom-field-edit-value').hide();
                    \$('#display-edit-value, #display-edit-validation').show();
                }

                if (this.value == 'date') {
                    \$('#display-edit-value > div').html('<div class=\"input-group date\"><input type=\"text\" name=\"value\" value=\"' + \$('#input-value').val() + '\" placeholder=\"";
        // line 2249
        echo ($context["entry_value"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-value\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div>');
                } else if (this.value == 'time') {
                    \$('#display-edit-value > div').html('<div class=\"input-group time\"><input type=\"text\" name=\"value\" value=\"' + \$('#input-value').val() + '\" placeholder=\"";
        // line 2251
        echo ($context["entry_value"] ?? null);
        echo "\" data-date-format=\"HH:mm\" id=\"input-value\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div>');
                } else if (this.value == 'datetime') {
                    \$('#display-edit-value > div').html('<div class=\"input-group datetime\"><input type=\"text\" name=\"value\" value=\"' + \$('#input-value').val() + '\" placeholder=\"";
        // line 2253
        echo ($context["entry_value"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-value\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div>');
                } else if (this.value == 'textarea') {
                    \$('#display-edit-value > div').html('<textarea name=\"value\" placeholder=\"";
        // line 2255
        echo ($context["entry_value"] ?? null);
        echo "\" id=\"input-value\" class=\"form-control\">' + \$('#input-value').val() + '</textarea>');
                } else {
                    \$('#display-edit-value > div').html('<input type=\"text\" name=\"value\" value=\"' + \$('#input-value').val() + '\" placeholder=\"";
        // line 2257
        echo ($context["entry_value"] ?? null);
        echo "\" id=\"input-value\" class=\"form-control\" />');
                }

                \$('.date').datetimepicker({
                    pickTime: false
                });

                \$('.time').datetimepicker({
                    pickDate: false
                });

                \$('.datetime').datetimepicker({
                    pickDate: true,
                    pickTime: true
                });
            });

\t\t\tlet custom_field_value_row = \$('#custom-field-edit-value tbody tr').length;
\t
\t\t\t\$(\"#addEditCustomFieldValue\").click(function(){
\t\t\t\tconsole.log(1);
\t\t\t\thtml  = '<tr id=\"custom-field-value-row' + custom_field_value_row + '\">';\t
\t\t\t\thtml += '  <td class=\"text-left\" style=\"width: 70%;\"><input type=\"hidden\" name=\"custom_field_value[' + custom_field_value_row + '][custom_field_value_id]\" value=\"\" />';
\t\t\t\t";
        // line 2280
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 2281
            echo "\t\t\t\thtml += '    <div class=\"input-group\">';
\t\t\t\thtml += '      <span class=\"input-group-addon\"><img src=\"language/";
            // line 2282
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 2282);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 2282);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 2282);
            echo "\" /></span><input type=\"text\" name=\"custom_field_value[' + custom_field_value_row + '][custom_field_value_description][";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2282);
            echo "][name]\" value=\"\" placeholder=\"";
            echo ($context["entry_custom_value"] ?? null);
            echo "\" class=\"form-control\" />';
\t\t\t\thtml += '    </div>';
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2285
        echo "\t\t\t\thtml += '  </td>';
\t\t\t\thtml += '  <td class=\"text-right\"><input type=\"text\" name=\"custom_field_value[' + custom_field_value_row + '][sort_order]\" value=\"\" placeholder=\"";
        // line 2286
        echo ($context["entry_sort_order"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\t\t\t\thtml += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#custom-field-value-row' + custom_field_value_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 2287
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\t\t\t\thtml += '</tr>';\t
\t\t\t\t
\t\t\t\t\$('#custom-field-edit-value tbody').append(html);
\t\t\t\t
\t\t\t\tcustom_field_value_row++;
\t\t\t});

\t\t\t\$('#EditCustomFieldSend').click(function(){
\t\t\t\tconst baseUrl = 'index.php?route=octemplates/module/oct_smart_checkout/';
\t\t\t\tconst userToken = '";
        // line 2297
        echo ($context["user_token"] ?? null);
        echo "';

\t\t\t\t\$.ajax({
\t\t\t\t\turl: 'index.php?route=octemplates/module/oct_smart_checkout/editCustomField&user_token=";
        // line 2300
        echo ($context["user_token"] ?? null);
        echo "',
\t\t\t\t\ttype: 'post',
\t\t\t\t\tdata: \$(\"#custom-fields-form\").serialize(),
\t\t\t\t\tdataType: 'json',
\t\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\t\$('#EditCustomerField').attr('disabled', 'disabled');
\t\t\t\t\t\t\$('#EditCustomerField').button('loading');
\t\t\t\t\t},
\t\t\t\t\tcomplete: function() {
\t\t\t\t\t\t\$('#EditCustomerField').button('reset');
\t\t\t\t\t\t\$('#EditCustomerField').removeAttr('disabled');
\t\t\t\t\t},
\t\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\tif(json['success']) {
\t\t\t\t\t\t\twindow.location.href = `index.php?route=octemplates/module/oct_smart_checkout&tab=custom-fields&user_token=\${userToken}`;
\t\t\t\t\t\t}
\t\t\t\t\t\t
\t\t\t\t\t\tif(json['error']) {\t\t\t\t\t
\t\t\t\t\t\t\tif (json['error']['name']) {
\t\t\t\t\t\t\t\t\$.each(json['error']['name'], function(i, val) {
\t\t\t\t\t\t\t\t\t\$(\"#custom-fields-form\").find('[name=\"custom_field_description[' + i + '][name]\"]').parent().parent().parent().addClass('has-error');
\t\t\t\t\t\t\t\t\t\$(\"#custom-fields-form\").find('[name=\"custom_field_description[' + i + '][name]\"]').parent().parent().append('<div class=\"text-danger\">'+ val +'</div>');
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t
\t\t\t\t\t\t\tif (json['error']['custom_field_value']) {
\t\t\t\t\t\t\t\t\$.each(json['error']['custom_field_value'], function(i, val) {
\t\t\t\t\t\t\t\t\t\$(\"#custom-fields-form\").find('[name=\"custom_field_value[' + i + '][custom_field_value_description]['+ val +'][name]\"]').parent().addClass('has-error');
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t},
\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t});

\t\t\t\$('#custom-field-modal').on('hidden.bs.modal', function (e) {
\t\t\t\t\$(this).remove();
\t\t\t});
\t\t},
\t\terror: function(xhr, status, error) {
\t\t\tconsole.error('AJAX Error:', status, error);
\t\t}
\t});
}
\t\t\t
\t\t\t
function sendRequest(type, action, data = {}) {
\t\$.ajax({
\t\ttype: type,
\t\turl: `\${baseUrl}\${action}&user_token=\${userToken}`,
\t\tdata: data,
\t\tdataType: 'json',
\t\tcache: false,
\t\tsuccess: function(json) {
\t\twindow.location.href = `index.php?route=octemplates/module/oct_smart_checkout&tab=custom-fields&user_token=\${userToken}`;
\t\t},
\t\terror: function(xhr, status, error) {
\t\t\tconsole.error('AJAX Error:', status, error);
\t\t}
\t});
}

function deleteSelected(subscription_id) {
\tif (confirm('";
        // line 2366
        echo ($context["text_confirm"] ?? null);
        echo "')) {
\t\tsendRequest('post', `deleteSelected&delete=\${subscription_id}`);
\t}
}

function deleteAllSelected() {
\tif (confirm('";
        // line 2372
        echo ($context["text_confirm"] ?? null);
        echo "')) {
\t\tconst checkedInputs = \$('#custom_fields_table input[type=\\'checkbox\\']:checked');
\t\tsendRequest('post', 'deleteAllSelected', checkedInputs);
\t}
}

function checkCheckBoxes() {
\tif (\$('input[name=\"selected[]\"]:checked').length > 0) {
\t\t\$('#deleteButton').removeAttr('disabled');
\t} else {
\t\t\$('#deleteButton').attr('disabled', 'disabled');
\t}
}

function deleteProduct(product_id) {
\t\$('#product-related' + product_id).remove();
}

\$(document).ready(function() {

\tlet formButton = document.querySelector('button[form=\"form\"]');
\tlet form = document.getElementById('form-theme');

\tform.addEventListener('submit', function(e) {
\t\te.preventDefault();
\t});

\tformButton.addEventListener('click', function() {
\t\tform.submit();
\t});

    \$('#recommended_poducts_texts a:first').tab('show');
    
    \$('#recommended-poducts-status').change(function() {
        var \$input = \$(this);
        if (\$input.is(\":checked\")) {
            \$(\".recomended_hidden\").slideDown('slow');
        } else {
            \$(\".recomended_hidden\").slideUp('slow');
        }
    });

\t\$('#comment_texts a:first').tab('show');
    
    \$('#recommended-comment-status').change(function() {
        var \$input = \$(this);
        if (\$input.is(\":checked\")) {
            \$(\".comment_hidden\").slideDown('slow');
        } else {
            \$(\".comment_hidden\").slideUp('slow');
        }
    });


\t\$.ajax({
\t\turl: '";
        // line 2427
        echo ($context["store_url"] ?? null);
        echo "index.php?route=checkout/oct_smartcheckout/shippingMethodsFront',
\t\ttype: 'GET',
\t\tdataType: 'json',
\t\tsuccess: function(data) {
\t\t\tlet methodTitle;

\t\t\tfor (let key in data) {
\t\t\t\tif (data.hasOwnProperty(key)) {
\t\t\t\t\tlet method = data[key];
\t\t\t\t\tmethodTitle = method.title;

\t\t\t\t\tfor (let quote_key in method.quote) {
\t\t\t\t\t\tif (method.quote.hasOwnProperty(quote_key)) {
\t\t\t\t\t\t\tlet quote = method.quote[quote_key];
\t\t\t\t\t\t\tlet methodQuoteCode = quote.code.replace(/\\./g, '-');

\t\t\t\t\t\t\t\$('#customer-shipping-method-selector, #delivery-shipping-method-selector, #delivery-methods-selector').each(function() {
\t\t\t\t\t\t\t\t\$(this).append(new Option(methodTitle + ' (' + methodQuoteCode + ')', methodQuoteCode));
\t\t\t\t\t\t\t});
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t},
\t\terror: function(jqXHR, textStatus, errorThrown) {
\t\t\tconsole.error(textStatus, errorThrown);
\t\t}
\t});

\t\$('input[name=\\'oct_smart_checkout_data[recommended_poducts][products]\\']').autocomplete({
\t\t'source': function(request, response) {
\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 2460
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\t\tdataType: 'json',
\t\t\t\tsuccess: function(json) {
\t\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\t\treturn {
\t\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\t\tvalue: item['product_id']
\t\t\t\t\t\t}
\t\t\t\t\t}));
\t\t\t\t}
\t\t\t});
\t\t},
\t\t'select': function(item) {
\t\t\t\$('input[name=\\'related\\']').val('');

\t\t\t\$('#product-related' + item['value']).remove();

\t\t\t\$('#product-related').append('<div id=\"product-related' + item['value'] + '\"><i onclick=\"deleteProduct(' + item['value'] + ');\" class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"oct_smart_checkout_data[recommended_poducts][products][]\" value=\"' + item['value'] + '\" /></div>');
\t\t}
\t});

\tvar custom_field_value_row = 0;
\t
\t\$(\"#addCustomFieldValue\").click(function(){
\t\thtml  = '<tr id=\"custom-field-value-row' + custom_field_value_row + '\">';\t
\t\thtml += '  <td class=\"text-left\" style=\"width: 70%;\"><input type=\"hidden\" name=\"custom_field_value[' + custom_field_value_row + '][custom_field_value_id]\" value=\"\" />';
\t\t";
        // line 2486
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 2487
            echo "\t\thtml += '    <div class=\"input-group\">';
\t\thtml += '      <span class=\"input-group-addon\"><img src=\"language/";
            // line 2488
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 2488);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 2488);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 2488);
            echo "\" /></span><input type=\"text\" name=\"custom_field_value[' + custom_field_value_row + '][custom_field_value_description][";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2488);
            echo "][name]\" value=\"\" placeholder=\"";
            echo ($context["entry_custom_value"] ?? null);
            echo "\" class=\"form-control\" />';
\t\thtml += '    </div>';
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2491
        echo "\t\thtml += '  </td>';
\t\thtml += '  <td class=\"text-right\"><input type=\"text\" name=\"custom_field_value[' + custom_field_value_row + '][sort_order]\" value=\"\" placeholder=\"";
        // line 2492
        echo ($context["entry_sort_order"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\t\thtml += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#custom-field-value-row' + custom_field_value_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 2493
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\t\thtml += '</tr>';\t
\t\t
\t\t\$('#custom-field-value tbody').append(html);
\t\t
\t\tcustom_field_value_row++;
\t});

\tlet urlParams = new URLSearchParams(window.location.search);
    
    if(urlParams.get('tab') === 'custom-fields') {
        \$('.nav-tabs li:eq(5) a').click();
    }

\t\$('input[name=\"selected[]\"]').change(function() {
\t\tcheckCheckBoxes();
\t});
\t
\t\$('#addCustomerField').click(function(){
\t\tconst baseUrl = 'index.php?route=octemplates/module/oct_smart_checkout/';
\t\tconst userToken = '";
        // line 2513
        echo ($context["user_token"] ?? null);
        echo "';

\t\t\$.ajax({
\t\t\turl: 'index.php?route=octemplates/module/oct_smart_checkout/addCustomerField&user_token=";
        // line 2516
        echo ($context["user_token"] ?? null);
        echo "',
\t\t\ttype: 'post',
\t\t\tdata: \$(\"#add-fields-form\").serialize(),
\t\t\tdataType: 'json',
\t\t\tbeforeSend: function() {
\t\t\t\t\$('#addCustomerField').attr('disabled', 'disabled');
\t\t\t\t\$('#addCustomerField').button('loading');
\t\t\t},
\t\t\tcomplete: function() {
\t\t\t\t\$('#addCustomerField').button('reset');
\t\t\t\t\$('#addCustomerField').removeAttr('disabled');
\t\t\t},
\t\t\tsuccess: function(json) {
\t\t\t\tif(json['success']) {
\t\t\t\t\twindow.location.href = `index.php?route=octemplates/module/oct_smart_checkout&tab=custom-fields&user_token=\${userToken}`;
\t\t\t\t}
\t\t\t\t
\t\t\t\tif(json['error']) {\t\t\t\t\t
\t\t\t\t\tif (json['error']['name']) {
\t\t\t\t\t\t\$.each(json['error']['name'], function(i, val) {
\t\t\t\t\t\t\t\$(\"#add-fields-modal\").find('[name=\"custom_field_description[' + i + '][name]\"]').parent().parent().parent().addClass('has-error');
\t\t\t\t\t\t\t\$(\"#add-fields-modal\").find('[name=\"custom_field_description[' + i + '][name]\"]').parent().parent().append('<div class=\"text-danger\">'+ val +'</div>');
\t\t\t\t\t\t});
\t\t\t\t\t}
\t\t\t\t\t
\t\t\t\t\tif (json['error']['custom_field_value']) {
\t\t\t\t\t\t\$.each(json['error']['custom_field_value'], function(i, val) {
\t\t\t\t\t\t\t\$(\"#add-fields-modal\").find('[name=\"custom_field_value[' + i + '][custom_field_value_description]['+ val +'][name]\"]').parent().addClass('has-error');
\t\t\t\t\t\t});
\t\t\t\t\t}
\t\t\t\t}
\t\t\t},
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t});
\t});
});
</script>

<script>
\$('select[name*=\\'default_country\\']').on('change', function() {
  \$.ajax({
    url: 'index.php?route=octemplates/module/oct_smart_checkout/country&user_token=";
        // line 2559
        echo ($context["user_token"] ?? null);
        echo "&country_id=' + this.value,
    dataType: 'json',
    beforeSend: function() {
      \$('select[name*=\\'default_country\\']').after(' <i class=\"fa fa-circle-o-notch fa-spin\"></i>');
    },
    complete: function() {
      \$('.fa-spin').remove();
    },
    success: function(json) {
      html = '<option value=\"\">";
        // line 2568
        echo ($context["text_select"] ?? null);
        echo "</option>';

      if (json['zone'] && json['zone'] != '') {
        for (i = 0; i < json['zone'].length; i++) {
                html += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

          if (json['zone'][i]['zone_id'] == \"";
        // line 2574
        echo twig_get_attribute($this->env, $this->source, ($context["oct_smart_checkout_data"] ?? null), "default_region", [], "any", false, false, false, 2574);
        echo "\") {
                  html += ' selected=\"selected\"';
          }

          html += '>' + json['zone'][i]['name'] + '</option>';
        }
      } else {
        html += '<option value=\"0\" selected=\"selected\">";
        // line 2581
        echo ($context["text_none"] ?? null);
        echo "</option>';
      }

      \$('select[name*=\\'default_region\\']').html(html);
    },
    error: function(xhr, ajaxOptions, thrownError) {
      alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
    }
  });
});

\$('select[name*=\\'default_country\\']').trigger('change');
</script>

<style>
\t@media (max-width: 768px) {
\t\t.settings-item > .d-flex {
\t\t\tflex-direction: column;
\t\t\talign-items: flex-start !important;
\t\t}

\t\t.settings-item h5 {
\t\t\twidth: auto !important;
\t\t}

\t\t.settings-item-buttons {
\t\t\twidth: 100%;
\t\t}

\t\t.settings-item-buttons .fa {
\t\t\tfont-size: 16px;
\t\t}

\t\t.settings-item-collapse {
\t\t\tdisplay: grid; 
\t\t\tgrid-template-rows: 0fr;
\t\t\ttransition: 250ms grid-template-rows ease;
\t\t}

\t\t.settings-item-collapse.show {
\t\t\tgrid-template-rows: 1fr;
\t\t}

\t\t.settings-item-collapse > div {
\t\t\tflex-direction: column;
\t\t\talign-items: flex-start;
\t\t\toverflow: hidden;
\t\t}
\t}

\t@media (min-width: 768px) {
\t\t.modal-dialog{width:70%;}

\t\t.settings-item-buttons .btn-default {
\t\t\tdisplay: none;
\t\t}

\t\t.settings-item-collapse > div {
\t\t\tflex-direction: row;
\t\t\talign-items: center;
\t\t}
\t}

\t.settings-item {
\t\tbackground: #f9f9f9;
\t\tborder-radius: 10px;
\t\tpadding: 12px
\t}
\t.settings-item + .settings-item {
\t\tmargin-top: 16px
\t}

\t.settings-item-buttons .btn-default > * {
\t\tpointer-events: none;
\t}

\t.settings-item-collapse > div {
\t\tgap: 12px;
\t}

\t.sortable-fields-container {
\t\tmargin-bottom: 16px;
\t}

\t.nav-stacked .btn-danger i {
\t\tfont-size: 12px !important;
\t}

\t.badge-info {
\t\tbackground-color: #4bc78e;
\t\tfont-weight: 400;
\t\tdisplay: inline-block;
\t\tmargin-top: 4px;
\t}
</style>
";
        // line 2676
        echo ($context["footer"] ?? null);
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "octemplates/module/oct_smart_checkout.twig";
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
        return array (  5858 => 2676,  5760 => 2581,  5750 => 2574,  5741 => 2568,  5729 => 2559,  5683 => 2516,  5677 => 2513,  5654 => 2493,  5650 => 2492,  5647 => 2491,  5630 => 2488,  5627 => 2487,  5623 => 2486,  5594 => 2460,  5558 => 2427,  5500 => 2372,  5491 => 2366,  5422 => 2300,  5416 => 2297,  5403 => 2287,  5399 => 2286,  5396 => 2285,  5379 => 2282,  5376 => 2281,  5372 => 2280,  5346 => 2257,  5341 => 2255,  5336 => 2253,  5331 => 2251,  5326 => 2249,  5277 => 2203,  5252 => 2181,  5247 => 2179,  5242 => 2177,  5237 => 2175,  5232 => 2173,  5216 => 2160,  5204 => 2151,  5196 => 2145,  5187 => 2139,  5183 => 2137,  5170 => 2135,  5166 => 2134,  5162 => 2133,  5158 => 2131,  5156 => 2130,  5138 => 2114,  5125 => 2111,  5116 => 2109,  5112 => 2107,  5108 => 2106,  5103 => 2104,  5097 => 2100,  5084 => 2097,  5076 => 2096,  5072 => 2094,  5068 => 2093,  5063 => 2091,  5043 => 2074,  5036 => 2069,  5026 => 2065,  5022 => 2064,  5018 => 2062,  5014 => 2061,  5008 => 2058,  4998 => 2051,  4994 => 2050,  4989 => 2048,  4985 => 2047,  4980 => 2045,  4976 => 2044,  4970 => 2041,  4962 => 2036,  4955 => 2034,  4949 => 2031,  4930 => 2015,  4896 => 1984,  4872 => 1962,  4859 => 1959,  4850 => 1957,  4846 => 1955,  4842 => 1954,  4837 => 1952,  4831 => 1948,  4818 => 1945,  4810 => 1944,  4806 => 1942,  4802 => 1941,  4797 => 1939,  4777 => 1922,  4767 => 1915,  4757 => 1908,  4753 => 1907,  4748 => 1905,  4744 => 1904,  4739 => 1902,  4735 => 1901,  4729 => 1898,  4721 => 1893,  4714 => 1891,  4708 => 1888,  4660 => 1843,  4652 => 1837,  4643 => 1831,  4639 => 1829,  4626 => 1827,  4622 => 1826,  4618 => 1825,  4614 => 1823,  4612 => 1822,  4582 => 1795,  4578 => 1794,  4574 => 1793,  4570 => 1792,  4566 => 1791,  4562 => 1790,  4558 => 1789,  4543 => 1777,  4535 => 1771,  4526 => 1765,  4522 => 1763,  4509 => 1761,  4505 => 1760,  4501 => 1759,  4497 => 1757,  4495 => 1756,  4465 => 1729,  4461 => 1728,  4457 => 1727,  4453 => 1726,  4449 => 1725,  4416 => 1695,  4407 => 1689,  4390 => 1675,  4378 => 1666,  4370 => 1661,  4366 => 1660,  4315 => 1612,  4311 => 1611,  4307 => 1610,  4303 => 1609,  4299 => 1608,  4295 => 1607,  4289 => 1604,  4271 => 1589,  4268 => 1588,  4257 => 1585,  4251 => 1584,  4245 => 1583,  4237 => 1582,  4234 => 1581,  4230 => 1580,  4213 => 1566,  4201 => 1557,  4189 => 1548,  4185 => 1547,  4180 => 1545,  4176 => 1544,  4171 => 1542,  4167 => 1541,  4156 => 1533,  4152 => 1532,  4147 => 1530,  4143 => 1529,  4130 => 1519,  4079 => 1471,  4038 => 1433,  4034 => 1432,  4024 => 1425,  4013 => 1417,  4009 => 1416,  4000 => 1410,  3993 => 1408,  3985 => 1403,  3981 => 1402,  3975 => 1399,  3970 => 1396,  3964 => 1395,  3962 => 1394,  3956 => 1391,  3950 => 1390,  3946 => 1388,  3941 => 1387,  3939 => 1386,  3934 => 1384,  3929 => 1381,  3923 => 1380,  3921 => 1379,  3915 => 1376,  3909 => 1375,  3905 => 1373,  3900 => 1372,  3898 => 1371,  3893 => 1369,  3886 => 1365,  3879 => 1363,  3872 => 1359,  3867 => 1357,  3858 => 1351,  3854 => 1350,  3850 => 1349,  3846 => 1348,  3841 => 1346,  3837 => 1345,  3832 => 1343,  3828 => 1342,  3824 => 1341,  3820 => 1340,  3815 => 1338,  3811 => 1337,  3807 => 1336,  3801 => 1333,  3793 => 1328,  3789 => 1327,  3783 => 1324,  3778 => 1321,  3767 => 1318,  3758 => 1317,  3754 => 1316,  3749 => 1314,  3742 => 1310,  3723 => 1293,  3698 => 1288,  3691 => 1286,  3678 => 1282,  3671 => 1280,  3661 => 1278,  3644 => 1277,  3640 => 1275,  3631 => 1272,  3621 => 1271,  3618 => 1270,  3614 => 1269,  3607 => 1267,  3591 => 1256,  3585 => 1253,  3580 => 1251,  3574 => 1247,  3565 => 1244,  3561 => 1243,  3557 => 1242,  3554 => 1241,  3550 => 1240,  3546 => 1239,  3539 => 1234,  3514 => 1229,  3507 => 1227,  3494 => 1223,  3487 => 1221,  3477 => 1219,  3460 => 1218,  3456 => 1216,  3447 => 1213,  3437 => 1212,  3434 => 1211,  3430 => 1210,  3418 => 1203,  3410 => 1200,  3403 => 1196,  3397 => 1192,  3388 => 1189,  3384 => 1188,  3380 => 1187,  3375 => 1186,  3371 => 1185,  3366 => 1183,  3358 => 1180,  3340 => 1167,  3334 => 1164,  3317 => 1152,  3311 => 1149,  3304 => 1147,  3288 => 1136,  3282 => 1133,  3278 => 1132,  3264 => 1121,  3256 => 1115,  3250 => 1112,  3247 => 1111,  3244 => 1110,  3232 => 1106,  3227 => 1104,  3223 => 1103,  3219 => 1102,  3215 => 1101,  3211 => 1100,  3208 => 1099,  3203 => 1098,  3201 => 1097,  3194 => 1093,  3190 => 1092,  3186 => 1091,  3182 => 1090,  3178 => 1089,  3172 => 1085,  3165 => 1081,  3160 => 1078,  3158 => 1077,  3153 => 1075,  3144 => 1068,  3128 => 1065,  3115 => 1061,  3106 => 1057,  3102 => 1055,  3089 => 1053,  3085 => 1052,  3081 => 1051,  3077 => 1050,  3074 => 1049,  3072 => 1048,  3069 => 1047,  3044 => 1040,  3036 => 1039,  3028 => 1038,  3020 => 1037,  3012 => 1036,  3008 => 1035,  3002 => 1034,  2997 => 1032,  2981 => 1021,  2967 => 1020,  2961 => 1017,  2958 => 1016,  2941 => 1013,  2929 => 1012,  2917 => 1011,  2909 => 1010,  2906 => 1009,  2902 => 1008,  2894 => 1007,  2882 => 1002,  2874 => 1001,  2866 => 1000,  2863 => 999,  2857 => 997,  2855 => 996,  2843 => 993,  2839 => 992,  2823 => 983,  2809 => 982,  2799 => 979,  2783 => 974,  2775 => 973,  2762 => 971,  2754 => 970,  2741 => 968,  2733 => 967,  2714 => 959,  2706 => 958,  2693 => 956,  2685 => 955,  2672 => 945,  2664 => 943,  2659 => 941,  2651 => 939,  2634 => 938,  2630 => 937,  2626 => 936,  2616 => 929,  2611 => 927,  2606 => 925,  2600 => 921,  2585 => 918,  2576 => 916,  2572 => 914,  2568 => 913,  2563 => 911,  2557 => 907,  2542 => 904,  2534 => 903,  2530 => 901,  2526 => 900,  2521 => 898,  2510 => 896,  2496 => 885,  2486 => 884,  2478 => 881,  2471 => 876,  2461 => 872,  2451 => 871,  2447 => 869,  2443 => 868,  2437 => 865,  2421 => 858,  2413 => 857,  2402 => 855,  2394 => 854,  2383 => 852,  2375 => 851,  2369 => 848,  2357 => 843,  2346 => 841,  2342 => 840,  2337 => 838,  2322 => 826,  2312 => 825,  2306 => 822,  2298 => 819,  2294 => 818,  2289 => 817,  2272 => 816,  2264 => 811,  2260 => 809,  2249 => 807,  2245 => 806,  2241 => 805,  2236 => 802,  2228 => 799,  2220 => 797,  2218 => 796,  2210 => 795,  2206 => 794,  2203 => 793,  2199 => 792,  2193 => 789,  2185 => 783,  2170 => 774,  2165 => 772,  2160 => 770,  2152 => 764,  2137 => 761,  2128 => 759,  2124 => 757,  2120 => 756,  2115 => 754,  2109 => 750,  2094 => 747,  2086 => 746,  2082 => 744,  2078 => 743,  2073 => 741,  2062 => 739,  2048 => 728,  2038 => 727,  2030 => 724,  2018 => 719,  2011 => 717,  1995 => 710,  1987 => 709,  1976 => 707,  1968 => 706,  1957 => 704,  1949 => 703,  1943 => 700,  1931 => 695,  1920 => 693,  1916 => 692,  1911 => 690,  1896 => 678,  1886 => 677,  1880 => 674,  1872 => 671,  1868 => 670,  1863 => 669,  1859 => 668,  1851 => 663,  1845 => 660,  1840 => 657,  1832 => 654,  1824 => 652,  1822 => 651,  1814 => 650,  1810 => 649,  1807 => 648,  1803 => 647,  1797 => 644,  1788 => 637,  1773 => 635,  1756 => 631,  1743 => 627,  1739 => 625,  1726 => 623,  1722 => 622,  1718 => 621,  1714 => 620,  1711 => 619,  1709 => 618,  1706 => 617,  1681 => 610,  1673 => 609,  1665 => 608,  1657 => 607,  1649 => 606,  1645 => 605,  1639 => 604,  1634 => 602,  1618 => 591,  1604 => 590,  1598 => 587,  1595 => 586,  1578 => 583,  1566 => 582,  1554 => 581,  1546 => 580,  1543 => 579,  1539 => 578,  1531 => 577,  1519 => 572,  1511 => 571,  1503 => 570,  1500 => 569,  1494 => 567,  1492 => 566,  1480 => 563,  1476 => 562,  1460 => 553,  1446 => 552,  1436 => 549,  1420 => 544,  1412 => 543,  1399 => 541,  1391 => 540,  1378 => 538,  1370 => 537,  1351 => 529,  1343 => 528,  1330 => 526,  1322 => 525,  1309 => 515,  1301 => 513,  1298 => 512,  1296 => 511,  1288 => 509,  1271 => 508,  1265 => 507,  1261 => 506,  1256 => 505,  1239 => 504,  1231 => 499,  1225 => 496,  1220 => 493,  1212 => 490,  1204 => 488,  1202 => 487,  1194 => 486,  1190 => 485,  1187 => 484,  1183 => 483,  1177 => 480,  1169 => 474,  1154 => 472,  1141 => 468,  1132 => 464,  1128 => 462,  1115 => 460,  1111 => 459,  1107 => 458,  1103 => 457,  1100 => 456,  1098 => 455,  1095 => 454,  1070 => 447,  1062 => 446,  1054 => 445,  1046 => 444,  1038 => 443,  1034 => 442,  1028 => 441,  1023 => 439,  1007 => 428,  993 => 427,  987 => 424,  984 => 423,  967 => 420,  955 => 419,  943 => 418,  935 => 417,  932 => 416,  928 => 415,  920 => 414,  908 => 409,  900 => 408,  892 => 407,  889 => 406,  883 => 404,  881 => 403,  869 => 400,  865 => 399,  849 => 390,  835 => 389,  825 => 386,  809 => 381,  801 => 380,  788 => 378,  780 => 377,  767 => 375,  759 => 374,  740 => 366,  732 => 365,  719 => 363,  711 => 362,  698 => 352,  690 => 350,  685 => 348,  677 => 346,  660 => 345,  654 => 344,  650 => 343,  645 => 342,  628 => 341,  620 => 336,  614 => 333,  609 => 330,  601 => 327,  593 => 325,  591 => 324,  583 => 323,  579 => 322,  576 => 321,  572 => 320,  566 => 317,  556 => 310,  548 => 305,  544 => 304,  537 => 300,  532 => 298,  525 => 294,  520 => 292,  513 => 288,  508 => 286,  491 => 274,  485 => 271,  468 => 259,  462 => 256,  445 => 244,  439 => 241,  422 => 229,  416 => 226,  399 => 214,  393 => 211,  376 => 199,  370 => 196,  353 => 184,  347 => 181,  330 => 169,  324 => 166,  307 => 154,  301 => 151,  284 => 139,  278 => 136,  261 => 124,  255 => 121,  238 => 109,  232 => 106,  222 => 99,  214 => 94,  206 => 89,  198 => 84,  190 => 79,  182 => 74,  174 => 69,  166 => 64,  158 => 59,  150 => 54,  144 => 51,  138 => 47,  132 => 44,  129 => 43,  126 => 42,  120 => 39,  117 => 38,  115 => 37,  108 => 32,  97 => 29,  94 => 28,  90 => 27,  85 => 25,  76 => 21,  67 => 15,  61 => 12,  55 => 9,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "octemplates/module/oct_smart_checkout.twig", "");
    }
}
