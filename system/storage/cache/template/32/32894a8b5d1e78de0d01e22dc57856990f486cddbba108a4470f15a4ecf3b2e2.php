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

/* octemplates/module/oct_popup_purchase.twig */
class __TwigTemplate_fdeb9138bf644bbe833a0f7fa50bb56b8d5d658c0b815b6d0852342b7669349b extends Template
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
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
\t\t\t\t<a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a>
\t\t\t</div>
\t\t\t<h1>";
        // line 9
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
            echo "\t\t\t\t<li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 12);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 12);
            echo "</a></li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "\t\t\t</ul>
\t\t</div>
\t</div>
\t<div class=\"container-fluid\">
\t\t";
        // line 18
        if (($context["error_warning"] ?? null)) {
            // line 19
            echo "\t\t<script>
\t\t\tusNotify('warning', '";
            // line 20
            echo ($context["error_warning"] ?? null);
            echo "');
\t\t</script>
\t\t";
        }
        // line 23
        echo "\t\t";
        if (($context["success"] ?? null)) {
            // line 24
            echo "\t    <script>
\t\t\tusNotify('success', '";
            // line 25
            echo ($context["success"] ?? null);
            echo "');
\t\t</script>
\t    ";
        }
        // line 28
        echo "\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 30
        echo ($context["text_edit"] ?? null);
        echo "</h3>
\t\t\t</div>
\t\t\t<div class=\"panel-body\">
\t\t\t\t<form action=\"";
        // line 33
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form\" class=\"form-horizontal\">
\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t<li class=\"active\"><a href=\"#tab-settings\" data-toggle=\"tab\">";
        // line 35
        echo ($context["tab_settings"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t<li><a href=\"#tab-byoneclick\" data-toggle=\"tab\">";
        // line 36
        echo ($context["tab_by_one_click"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t<li style=\"display:none;\"><a href=\"#tab-template\" data-toggle=\"tab\">";
        // line 37
        echo ($context["tab_template"] ?? null);
        echo "</a></li>
\t\t\t\t\t</ul>
\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"tab-settings\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 42
        echo ($context["entry_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"oct_popup_purchase_status\" ";
        // line 45
        if (($context["oct_popup_purchase_status"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-status\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t<label for=\"input-status\"></label>
\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div id=\"all_settings\" ";
        // line 56
        if (( !array_key_exists("oct_popup_purchase_status", $context) || (array_key_exists("oct_popup_purchase_status", $context) &&  !($context["oct_popup_purchase_status"] ?? null)))) {
            echo "style=\"display:none\"";
        }
        echo ">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-order-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 59
        echo ($context["help_order_status"] ?? null);
        echo "\">";
        echo ($context["entry_order_status"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t<select name=\"oct_popup_purchase_data[order_status_id]\" id=\"input-order-status\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 63
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 63) == twig_get_attribute($this->env, $this->source, ($context["oct_popup_purchase_data"] ?? null), "order_status_id", [], "any", false, false, false, 63))) {
                // line 64
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 64);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 64);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 66
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 66);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 66);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 68
            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-firstname\">";
        // line 73
        echo ($context["entry_firstname"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t<select name=\"oct_popup_purchase_data[firstname]\" id=\"input-firstname\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 76
        if ((twig_get_attribute($this->env, $this->source, ($context["oct_popup_purchase_data"] ?? null), "firstname", [], "any", false, false, false, 76) == 1)) {
            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            // line 77
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">";
            // line 78
            echo ($context["text_enabled_required"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
            // line 79
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 80
($context["oct_popup_purchase_data"] ?? null), "firstname", [], "any", false, false, false, 80) == 2)) {
            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
            // line 81
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\" selected=\"selected\">";
            // line 82
            echo ($context["text_enabled_required"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
            // line 83
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 84
            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
            // line 85
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">";
            // line 86
            echo ($context["text_enabled_required"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 87
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 88
        echo " 
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-email\">";
        // line 95
        echo ($context["entry_email"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t<select name=\"oct_popup_purchase_data[email]\" id=\"input-email\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 98
        if ((twig_get_attribute($this->env, $this->source, ($context["oct_popup_purchase_data"] ?? null), "email", [], "any", false, false, false, 98) == 1)) {
            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            // line 99
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">";
            // line 100
            echo ($context["text_enabled_required"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
            // line 101
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 102
($context["oct_popup_purchase_data"] ?? null), "email", [], "any", false, false, false, 102) == 2)) {
            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
            // line 103
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\" selected=\"selected\">";
            // line 104
            echo ($context["text_enabled_required"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
            // line 105
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 106
            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
            // line 107
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">";
            // line 108
            echo ($context["text_enabled_required"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 109
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 110
        echo " 
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-notify_email\"><span data-toggle=\"tooltip\" title=\"";
        // line 115
        echo ($context["entry_email_helper"] ?? null);
        echo "\">";
        echo ($context["entry_notify_email"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"oct_popup_purchase_data[notify_email]\" value=\"";
        // line 117
        echo ((twig_get_attribute($this->env, $this->source, ($context["oct_popup_purchase_data"] ?? null), "notify_email", [], "any", true, true, false, 117)) ? (twig_get_attribute($this->env, $this->source, ($context["oct_popup_purchase_data"] ?? null), "notify_email", [], "any", false, false, false, 117)) : (""));
        echo "\" id=\"input-notify_email\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t";
        // line 118
        if (($context["error_notify_email"] ?? null)) {
            echo " 
\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t\t\t\tusNotify('warning', '";
            // line 121
            echo ($context["error_notify_email"] ?? null);
            echo "');
\t\t\t\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 124
        echo " 
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-telephone\">";
        // line 130
        echo ($context["entry_telephone"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t<select name=\"oct_popup_purchase_data[telephone]\" id=\"input-telephone\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 133
        if ((twig_get_attribute($this->env, $this->source, ($context["oct_popup_purchase_data"] ?? null), "telephone", [], "any", false, false, false, 133) == 1)) {
            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            // line 134
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">";
            // line 135
            echo ($context["text_enabled_required"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
            // line 136
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 137
($context["oct_popup_purchase_data"] ?? null), "telephone", [], "any", false, false, false, 137) == 2)) {
            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
            // line 138
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\" selected=\"selected\">";
            // line 139
            echo ($context["text_enabled_required"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
            // line 140
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 141
            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
            // line 142
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">";
            // line 143
            echo ($context["text_enabled_required"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 144
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 145
        echo " 
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-mask\">";
        // line 150
        echo ($context["entry_mask"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"oct_popup_purchase_data[mask]\" value=\"";
        // line 152
        echo twig_get_attribute($this->env, $this->source, ($context["oct_popup_purchase_data"] ?? null), "mask", [], "any", false, false, false, 152);
        echo "\" placeholder=\"";
        echo ($context["entry_mask_info"] ?? null);
        echo "\" id=\"input-mask\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-quantity\">";
        // line 158
        echo ($context["entry_quantity"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"oct_popup_purchase_data[quantity]\" ";
        // line 161
        if (twig_get_attribute($this->env, $this->source, ($context["oct_popup_purchase_data"] ?? null), "quantity", [], "any", false, false, false, 161)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-quantity\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-quantity\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-stock-check\">";
        // line 173
        echo ($context["text_allow_stock_check"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"oct_popup_purchase_data[stock_check]\" ";
        // line 176
        if (twig_get_attribute($this->env, $this->source, ($context["oct_popup_purchase_data"] ?? null), "stock_check", [], "any", false, false, false, 176)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-stock_check\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-stock_check\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-image\">";
        // line 190
        echo ($context["entry_image"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"oct_popup_purchase_data[image]\" ";
        // line 193
        if (twig_get_attribute($this->env, $this->source, ($context["oct_popup_purchase_data"] ?? null), "image", [], "any", false, false, false, 193)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-image\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-image\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-comment\">";
        // line 205
        echo ($context["entry_comment"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"oct_popup_purchase_data[comment]\" ";
        // line 208
        if (twig_get_attribute($this->env, $this->source, ($context["oct_popup_purchase_data"] ?? null), "comment", [], "any", false, false, false, 208)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-comment\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-comment\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-minimum_order_amount\">";
        // line 221
        echo ($context["text_minimum_order_amount"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"oct_popup_purchase_data[minimum_order_amount]\" value=\"";
        // line 223
        echo ((twig_get_attribute($this->env, $this->source, ($context["oct_popup_purchase_data"] ?? null), "minimum_order_amount", [], "any", true, true, false, 223)) ? (twig_get_attribute($this->env, $this->source, ($context["oct_popup_purchase_data"] ?? null), "minimum_order_amount", [], "any", false, false, false, 223)) : (0));
        echo "\" placeholder=\"";
        echo ($context["text_minimum_order_amount"] ?? null);
        echo "\" id=\"input-limit_price\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div id=\"image_sizes\" ";
        // line 226
        if (( !twig_get_attribute($this->env, $this->source, ($context["oct_popup_purchase_data"] ?? null), "image", [], "any", true, true, false, 226) || (twig_get_attribute($this->env, $this->source, ($context["oct_popup_purchase_data"] ?? null), "image", [], "any", true, true, false, 226) &&  !twig_get_attribute($this->env, $this->source, ($context["oct_popup_purchase_data"] ?? null), "image", [], "any", false, false, false, 226)))) {
            echo "style=\"display:none\"";
        }
        echo ">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-width\">";
        // line 228
        echo ($context["entry_width"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"oct_popup_purchase_data[image_width]\" value=\"";
        // line 230
        echo twig_get_attribute($this->env, $this->source, ($context["oct_popup_purchase_data"] ?? null), "image_width", [], "any", false, false, false, 230);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-width\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-height\">";
        // line 234
        echo ($context["entry_height"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"oct_popup_purchase_data[image_height]\" value=\"";
        // line 236
        echo twig_get_attribute($this->env, $this->source, ($context["oct_popup_purchase_data"] ?? null), "image_height", [], "any", false, false, false, 236);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" id=\"input-height\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 241
        echo ($context["text_options"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"well well-sm\" style=\"min-height:150px;max-height:300px;overflow: auto;\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 244
        $context["row"] = 0;
        // line 245
        echo "\t\t\t\t\t\t\t\t\t\t\t<table class=\"table table-striped\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 246
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 247
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"oct_popup_purchase_data[allowed_options][";
            // line 250
            echo ($context["row"] ?? null);
            echo "]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["option"], "option_id", [], "any", false, false, false, 250);
            echo "\" ";
            echo (( !twig_test_empty((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["oct_popup_purchase_data"] ?? null), "allowed_options", [], "any", false, false, false, 250)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[($context["row"] ?? null)] ?? null) : null))) ? ("checked") : (""));
            echo " /> ";
            echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 250);
            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 254
            $context["row"] = (($context["row"] ?? null) + 1);
            // line 255
            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " 
\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" onclick=\"\$(this).parent().find(':checkbox').attr('checked', true);\">";
        // line 258
        echo ($context["text_select_all"] ?? null);
        echo "</a> / <a href=\"javascript:;\" onclick=\"\$(this).parent().find(':checkbox').attr('checked', false);\">";
        echo ($context["text_unselect_all"] ?? null);
        echo "</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-byoneclick\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-status-byoneclick\">";
        // line 265
        echo ($context["entry_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"oct_popup_purchase_byoneclick_status\" ";
        // line 268
        if (($context["oct_popup_purchase_byoneclick_status"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-status-byoneclick\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t<label for=\"input-status-byoneclick\"></label>
\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div id=\"all_settings_byoneclick\" ";
        // line 279
        if (( !array_key_exists("oct_popup_purchase_byoneclick_status", $context) || (array_key_exists("oct_popup_purchase_byoneclick_status", $context) &&  !($context["oct_popup_purchase_byoneclick_status"] ?? null)))) {
            echo "style=\"display:none\"";
        }
        echo ">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-order-status-byoneclick\"><span data-toggle=\"tooltip\" title=\"";
        // line 282
        echo ($context["help_order_status"] ?? null);
        echo "\">";
        echo ($context["entry_order_status"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t<select name=\"oct_popup_purchase_byoneclick_data[order_status_id]\" id=\"input-order-status-byoneclick\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 285
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 286
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 286) == twig_get_attribute($this->env, $this->source, ($context["oct_popup_purchase_byoneclick_data"] ?? null), "order_status_id", [], "any", false, false, false, 286))) {
                // line 287
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 287);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 287);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 289
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 289);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 289);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 291
            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 292
        echo "\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-mask\">";
        // line 296
        echo ($context["entry_mask"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"oct_popup_purchase_byoneclick_data[mask]\" value=\"";
        // line 298
        echo twig_get_attribute($this->env, $this->source, ($context["oct_popup_purchase_byoneclick_data"] ?? null), "mask", [], "any", false, false, false, 298);
        echo "\" placeholder=\"";
        echo ($context["entry_mask_info"] ?? null);
        echo "\" id=\"input-mask\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-notify_email\"><span data-toggle=\"tooltip\" title=\"";
        // line 303
        echo ($context["entry_email_helper"] ?? null);
        echo "\">";
        echo ($context["entry_notify_email"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"oct_popup_purchase_byoneclick_data[notify_email]\" value=\"";
        // line 305
        echo ((twig_get_attribute($this->env, $this->source, ($context["oct_popup_purchase_byoneclick_data"] ?? null), "notify_email", [], "any", true, true, false, 305)) ? (twig_get_attribute($this->env, $this->source, ($context["oct_popup_purchase_byoneclick_data"] ?? null), "notify_email", [], "any", false, false, false, 305)) : (""));
        echo "\" id=\"input-notify_email\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t";
        // line 306
        if (($context["error_notify_byoneclick_email"] ?? null)) {
            echo " 
\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t\t\tusNotify('warning', '";
            // line 309
            echo ($context["error_notify_byoneclick_email"] ?? null);
            echo "');
\t\t\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 312
        echo " 
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<legend>";
        // line 315
        echo ($context["entry_display_on_pages"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-status-product\">";
        // line 318
        echo ($context["entry_product_page"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"oct_popup_purchase_byoneclick_data[product]\" ";
        // line 321
        if (twig_get_attribute($this->env, $this->source, ($context["oct_popup_purchase_byoneclick_data"] ?? null), "product", [], "any", false, false, false, 321)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-status-product\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-status-product\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-status-product_view\">";
        // line 333
        echo ($context["entry_product_view"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"oct_popup_purchase_byoneclick_data[product_view]\" ";
        // line 336
        if (twig_get_attribute($this->env, $this->source, ($context["oct_popup_purchase_byoneclick_data"] ?? null), "product_view", [], "any", false, false, false, 336)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-status-product_view\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-status-product_view\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-status-popup_cart\">";
        // line 350
        echo ($context["entry_popup_cart"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"oct_popup_purchase_byoneclick_data[popup_cart]\" ";
        // line 353
        if (twig_get_attribute($this->env, $this->source, ($context["oct_popup_purchase_byoneclick_data"] ?? null), "popup_cart", [], "any", false, false, false, 353)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-status-popup_cart\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-status-popup_cart\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-status-cart\">";
        // line 365
        echo ($context["entry_cart_page"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"oct_popup_purchase_byoneclick_data[cart]\" ";
        // line 368
        if (twig_get_attribute($this->env, $this->source, ($context["oct_popup_purchase_byoneclick_data"] ?? null), "cart", [], "any", false, false, false, 368)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-status-cart\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-status-cart\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-template\" style=\"display:none;\">
\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t<legend>";
        // line 384
        echo ($context["tab_settings"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-email_template\">";
        // line 386
        echo ($context["entry_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"oct_popup_purchase_data[template_status]\" ";
        // line 389
        if (twig_get_attribute($this->env, $this->source, ($context["oct_popup_purchase_data"] ?? null), "template_status", [], "any", false, false, false, 389)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-email_template\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-email_template\"></label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\" id=\"email_templates\" ";
        // line 400
        if (( !twig_get_attribute($this->env, $this->source, ($context["oct_popup_purchase_data"] ?? null), "template_status", [], "any", true, true, false, 400) || (twig_get_attribute($this->env, $this->source, ($context["oct_popup_purchase_data"] ?? null), "template_status", [], "any", true, true, false, 400) &&  !twig_get_attribute($this->env, $this->source, ($context["oct_popup_purchase_data"] ?? null), "template_status", [], "any", false, false, false, 400)))) {
            echo "style=\"display:none\"";
        }
        echo ">
\t\t\t\t\t\t\t\t\t<legend class=\"col-sm-12\">";
        // line 401
        echo ($context["tab_template"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t<span class=\"help-block\"><strong>";
        // line 403
        echo ($context["entry_title_email_template"] ?? null);
        echo "</strong></span>
\t\t\t\t\t\t\t\t\t\t<div class=\"help-block\">
\t\t\t\t\t\t\t\t\t\t\t<table class=\"table table-bordered table-hover table-striped\">
\t\t\t\t\t\t\t\t\t\t\t  <tbody>
\t\t\t\t\t\t\t\t\t\t\t\t  <tr class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>{order_id}</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
        // line 409
        echo ($context["entry_title_email_template_order_id"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t\t\t  <tr class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>{store_name}</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
        // line 413
        echo ($context["entry_title_email_template_store_name"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t\t\t  <tr class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>{logo}</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
        // line 417
        echo ($context["entry_title_email_template_logo"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t\t\t  <tr class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>{product}</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
        // line 421
        echo ($context["entry_title_email_template_product"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t\t\t  <tr class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>{total}</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
        // line 425
        echo ($context["entry_title_email_template_total"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t\t\t  <tr class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>{firstname}</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
        // line 429
        echo ($context["entry_title_email_template_firstname"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t\t\t  <tr class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>{comment}</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
        // line 433
        echo ($context["entry_title_email_template_comment"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t\t\t  <tr class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>{phone}</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
        // line 437
        echo ($context["entry_title_email_template_phone"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t\t  </tbody>
\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"email-template\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 445
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            echo "\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#tab-email_template";
            // line 447
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 447);
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 447);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 447);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 447);
            echo "\" /> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 447);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 449
        echo "\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 452
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            echo "\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-email_template";
            // line 453
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 453);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">";
            // line 455
            echo ($context["entry_subscribes_email"] ?? null);
            echo "</span> <input value=\"";
            echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_popup_purchase_template"] ?? null), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 455), [], "array", false, true, false, 455), "subject", [], "any", true, true, false, 455) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = ($context["oct_popup_purchase_template"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 455)] ?? null) : null), "subject", [], "any", false, false, false, 455)))) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = ($context["oct_popup_purchase_template"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 455)] ?? null) : null), "subject", [], "any", false, false, false, 455)) : (""));
            echo "\" type=\"text\" name=\"oct_popup_purchase_template[";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 455);
            echo "][subject]\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"email_template";
            // line 458
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 458);
            echo "\">";
            echo ($context["entry_title_email_template_textarea"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<textarea id=\"email_template";
            // line 459
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 459);
            echo "\" class=\"form-control\" data-toggle=\"summernote\" data-lang=\"";
            echo ($context["summernote"] ?? null);
            echo "\" name=\"oct_popup_purchase_template[";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 459);
            echo "][text]\">";
            echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_popup_purchase_template"] ?? null), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 459), [], "array", false, true, false, 459), "text", [], "any", true, true, false, 459) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = ($context["oct_popup_purchase_template"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 459)] ?? null) : null), "text", [], "any", false, false, false, 459)))) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_4 = ($context["oct_popup_purchase_template"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 459)] ?? null) : null), "text", [], "any", false, false, false, 459)) : (""));
            echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 461
        echo "\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<script>
\$('#email-template a:first').tab('show');
\$('#input-status').change(function() {
\tvar \$input = \$(this);
\t
\tif (\$input.is(\":checked\")) {
       \$(\"#all_settings\").slideDown('slow');
    } else {
       \$(\"#all_settings\").slideUp('slow');
\t}
});

\$('#input-status-byoneclick').change(function() {
\tvar \$input = \$(this);
\t
\tif (\$input.is(\":checked\")) {
       \$(\"#all_settings_byoneclick\").slideDown('slow');
    } else {
       \$(\"#all_settings_byoneclick\").slideUp('slow');
\t}
});

\$('#input-image').change(function() {
\tvar \$input = \$(this);
\t
\tif (\$input.is(\":checked\")) {
       \$(\"#image_sizes\").slideDown('slow');
    } else {
       \$(\"#image_sizes\").slideUp('slow');
\t}
});

\$('#input-email_template').change(function() {
\tvar \$input = \$(this);
\t
\tif (\$input.is(\":checked\")) {
       \$(\"#email_templates\").slideDown('slow');
    } else {
       \$(\"#email_templates\").slideUp('slow');
\t}
});
</script>
";
        // line 515
        echo ($context["footer"] ?? null);
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "octemplates/module/oct_popup_purchase.twig";
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
        return array (  1102 => 515,  1046 => 461,  1031 => 459,  1025 => 458,  1015 => 455,  1010 => 453,  1004 => 452,  999 => 449,  982 => 447,  975 => 445,  964 => 437,  957 => 433,  950 => 429,  943 => 425,  936 => 421,  929 => 417,  922 => 413,  915 => 409,  906 => 403,  901 => 401,  895 => 400,  879 => 389,  873 => 386,  868 => 384,  847 => 368,  841 => 365,  824 => 353,  818 => 350,  799 => 336,  793 => 333,  776 => 321,  770 => 318,  764 => 315,  759 => 312,  752 => 309,  746 => 306,  742 => 305,  735 => 303,  725 => 298,  720 => 296,  714 => 292,  708 => 291,  700 => 289,  692 => 287,  689 => 286,  685 => 285,  677 => 282,  669 => 279,  653 => 268,  647 => 265,  635 => 258,  625 => 255,  623 => 254,  610 => 250,  605 => 247,  601 => 246,  598 => 245,  596 => 244,  590 => 241,  580 => 236,  575 => 234,  566 => 230,  561 => 228,  554 => 226,  546 => 223,  541 => 221,  523 => 208,  517 => 205,  500 => 193,  494 => 190,  475 => 176,  469 => 173,  452 => 161,  446 => 158,  435 => 152,  430 => 150,  423 => 145,  418 => 144,  414 => 143,  410 => 142,  407 => 141,  402 => 140,  398 => 139,  394 => 138,  390 => 137,  386 => 136,  382 => 135,  378 => 134,  374 => 133,  368 => 130,  360 => 124,  353 => 121,  347 => 118,  343 => 117,  336 => 115,  329 => 110,  324 => 109,  320 => 108,  316 => 107,  313 => 106,  308 => 105,  304 => 104,  300 => 103,  296 => 102,  292 => 101,  288 => 100,  284 => 99,  280 => 98,  274 => 95,  265 => 88,  260 => 87,  256 => 86,  252 => 85,  249 => 84,  244 => 83,  240 => 82,  236 => 81,  232 => 80,  228 => 79,  224 => 78,  220 => 77,  216 => 76,  210 => 73,  204 => 69,  198 => 68,  190 => 66,  182 => 64,  179 => 63,  175 => 62,  167 => 59,  159 => 56,  143 => 45,  137 => 42,  129 => 37,  125 => 36,  121 => 35,  116 => 33,  110 => 30,  106 => 28,  100 => 25,  97 => 24,  94 => 23,  88 => 20,  85 => 19,  83 => 18,  77 => 14,  66 => 12,  62 => 11,  57 => 9,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "octemplates/module/oct_popup_purchase.twig", "");
    }
}
