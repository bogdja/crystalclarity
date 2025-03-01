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

/* octemplates/module/oct_smart_register.twig */
class __TwigTemplate_ba111d2dc61e5f307a0059c0c3c55c8b91e1dc3ef81710957312c0bf1bba1c0f extends Template
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
\t\t\t\t<a href=\"";
        // line 9
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\">
\t\t\t\t\t<i class=\"fa fa-reply\"></i>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<h1>";
        // line 13
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 16
            echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
            // line 17
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 17);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 17);
            echo "</a>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "\t\t\t</ul>
\t\t</div>
\t</div>

\t<div class=\"container-fluid\">
\t\t";
        // line 25
        if (($context["error_warning"] ?? null)) {
            // line 26
            echo "\t\t\t<script>
\t\t\t\tusNotify('warning', '";
            // line 27
            echo ($context["error_warning"] ?? null);
            echo "');
\t\t\t</script>
\t\t";
        }
        // line 30
        echo "\t\t";
        if (($context["success"] ?? null)) {
            // line 31
            echo "\t\t\t<script>
\t\t\t\tusNotify('success', '";
            // line 32
            echo ($context["success"] ?? null);
            echo "');
\t\t\t</script>
\t\t";
        }
        // line 35
        echo "\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<h3 class=\"panel-title\">
\t\t\t\t\t<i class=\"fa fa-pencil\"></i>
\t\t\t\t\t";
        // line 39
        echo ($context["text_edit"] ?? null);
        echo "</h3>
\t\t\t</div>
\t\t\t<div class=\"panel-body\">
\t\t\t\t<form action=\"";
        // line 42
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-theme\" class=\"form-horizontal\">
\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t\t<a href=\"#setting-tab\" data-toggle=\"tab\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-cog\"></i>
\t\t\t\t\t\t\t\t";
        // line 47
        echo ($context["tab_setting"] ?? null);
        echo "</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"setting-tab\">

\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"status\">";
        // line 54
        echo ($context["entry_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"oct_smart_register_data[status]\" ";
        // line 57
        if (twig_get_attribute($this->env, $this->source, ($context["oct_smart_register_data"] ?? null), "status", [], "any", false, false, false, 57)) {
            echo " checked=\"checked\" ";
        }
        echo " id=\"status\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t<label for=\"status\"></label>
\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div id=\"fields_list\"";
        // line 69
        if ( !twig_get_attribute($this->env, $this->source, ($context["oct_smart_register_data"] ?? null), "status", [], "any", false, false, false, 69)) {
            echo " style=\"display: none;\"";
        }
        echo ">
\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"phone_mask\">";
        // line 71
        echo ($context["entry_mask"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"oct_smart_register_data[phone_mask]\" value=\"";
        // line 73
        echo twig_get_attribute($this->env, $this->source, ($context["oct_smart_register_data"] ?? null), "phone_mask", [], "any", false, false, false, 73);
        echo "\" id=\"phone_mask\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t\t\t<span class=\"help-block\">";
        // line 74
        echo ($context["help_phone_mask"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"newsletter\">";
        // line 79
        echo ($context["entry_newsletter"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"oct_smart_register_data[newsletter]\" ";
        // line 82
        if (twig_get_attribute($this->env, $this->source, ($context["oct_smart_register_data"] ?? null), "newsletter", [], "any", false, false, false, 82)) {
            echo " checked=\"checked\" ";
        }
        echo " id=\"newsletter\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"newsletter\"></label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<fieldset class=\"tabbable tabs-left row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\"><legend>";
        // line 95
        echo ($context["text_tab_fields"] ?? null);
        echo "</legend></div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 97
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_smart_register_data"] ?? null), "customer", [], "any", false, false, false, 97), "fields", [], "any", false, false, false, 97));
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
            // line 98
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"customer_";
            echo $context["section"];
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<fieldset class=\"sortable-fields-container\" id=\"customer-fields-container-";
            // line 99
            echo $context["section"];
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 100
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
                // line 101
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"settings-item";
                if ( !twig_get_attribute($this->env, $this->source, $context["details"], "status", [], "any", false, false, false, 101)) {
                    echo " opacity";
                }
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\" style=\"gap:12px;align-items:center;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 103
                $context["key"] = twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 103);
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex settings-item-buttons\" style=\"justify-content:space-between;align-items:center;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 style=\"width:150px;\"><b>";
                // line 105
                echo twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = ($context["custom_fields"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["details"], "custom_field_id", [], "any", false, false, false, 105)] ?? null) : null), "name", [], "any", false, false, false, 105);
                echo twig_get_attribute($this->env, $this->source, $context, ("field_" . $context["field"]), [], "any", false, false, false, 105);
                echo "</b><br><span class=\"badge badge-info\">";
                echo $context["field"];
                echo "</span></h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\" style=\"gap:12px;align-items:center;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info\" style=\"cursor:grab;\" title=\"";
                // line 107
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
                // line 117
                if ((twig_get_attribute($this->env, $this->source, $context["details"], "required", [], "any", false, false, false, 117) == "1")) {
                    echo " active ";
                }
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["text_required"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"oct_smart_register_data[customer][fields][";
                // line 118
                echo $context["section"];
                echo "][";
                echo $context["field"];
                echo "][required]\" value=\"1\" ";
                if ((twig_get_attribute($this->env, $this->source, $context["details"], "required", [], "any", false, false, false, 118) == "1")) {
                    echo " checked ";
                }
                echo ">";
                echo ($context["text_yes"] ?? null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
                // line 120
                if ((twig_get_attribute($this->env, $this->source, $context["details"], "required", [], "any", false, false, false, 120) == "0")) {
                    echo " active ";
                }
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["text_required"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"oct_smart_register_data[customer][fields][";
                // line 121
                echo $context["section"];
                echo "][";
                echo $context["field"];
                echo "][required]\" value=\"0\" ";
                if ((twig_get_attribute($this->env, $this->source, $context["details"], "required", [], "any", false, false, false, 121) == "0")) {
                    echo " checked ";
                }
                echo ">";
                echo ($context["text_no"] ?? null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"thumbnail d-flex\" style=\"display: none; gap:8px;margin-bottom:0;padding:8px;align-items:center;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-eye\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
                // line 129
                if ((twig_get_attribute($this->env, $this->source, $context["details"], "display", [], "any", false, false, false, 129) == "all")) {
                    echo " active ";
                }
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["text_display"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"oct_smart_register_data[customer][fields][";
                // line 130
                echo $context["section"];
                echo "][";
                echo $context["field"];
                echo "][display]\" value=\"all\" ";
                if ((twig_get_attribute($this->env, $this->source, $context["details"], "display", [], "any", false, false, false, 130) == "all")) {
                    echo " checked ";
                }
                echo ">";
                echo ($context["text_all"] ?? null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"oct_smart_register_data[customer][fields][";
                // line 135
                echo $context["section"];
                echo "][";
                echo $context["field"];
                echo "][sort_order]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["details"], "sort_order", [], "any", false, false, false, 135);
                echo "\">
\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"oct_smart_register_data[customer][fields][";
                // line 138
                echo $context["section"];
                echo "][";
                echo $context["field"];
                echo "][status]\" ";
                if (twig_get_attribute($this->env, $this->source, $context["details"], "status", [], "any", false, false, false, 138)) {
                    echo " checked=\"checked\" ";
                }
                echo " id=\"oct_smart_register_data[customer][fields][";
                echo $context["section"];
                echo "][";
                echo $context["field"];
                echo "][status]\" tabindex=\"1\" onclick=\"setStatus(this);\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"oct_smart_register_data[customer][fields][";
                // line 139
                echo $context["section"];
                echo "][";
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
\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div title=\"";
                // line 148
                echo ($context["text_edit_field"] ?? null);
                echo "\" data-toggle=\"tooltip\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-warning\" data-toggle=\"collapse\" data-target=\"#edit-local-";
                // line 149
                echo $context["section"];
                echo "-";
                echo $context["field"];
                echo "-";
                echo ($context["key"] ?? null);
                echo "\" aria-expanded=\"false\" aria-controls=\"edit-local";
                echo ($context["key"] ?? null);
                echo "\"><i class=\"fa fa-edit\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 152
                if (twig_get_attribute($this->env, $this->source, $context["details"], "custom_field", [], "any", false, false, false, 152)) {
                    // line 153
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-danger\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_remove"] ?? null);
                    echo "\" onclick=\"\$(this).closest('.settings-item').remove();\"><i class=\"fa fa-trash\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 155
                echo "\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"oct_smart_register_data[customer][fields][";
                // line 156
                echo $context["section"];
                echo "][";
                echo $context["field"];
                echo "][custom_field]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["details"], "custom_field", [], "any", false, false, false, 156);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"oct_smart_register_data[customer][fields][";
                // line 157
                echo $context["section"];
                echo "][";
                echo $context["field"];
                echo "][custom_field_id]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["details"], "custom_field_id", [], "any", false, false, false, 157);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"oct_smart_register_data[customer][fields][";
                // line 158
                echo $context["section"];
                echo "][";
                echo $context["field"];
                echo "][type]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["details"], "type", [], "any", false, false, false, 158);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"edit-local-";
                // line 163
                echo $context["section"];
                echo "-";
                echo $context["field"];
                echo "-";
                echo ($context["key"] ?? null);
                echo "\" class=\"collapse mb-3 pt-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 164
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 165
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><img src=\"language/";
                    // line 166
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 166);
                    echo "/";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 166);
                    echo ".png\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 166);
                    echo "\" /></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"oct_smart_register_data[customer][fields][";
                    // line 167
                    echo $context["section"];
                    echo "][";
                    echo $context["field"];
                    echo "][localization][";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 167);
                    echo "][name]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, $context["details"], "localization", [], "any", false, false, false, 167)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 167)] ?? null) : null), "name", [], "any", false, false, false, 167);
                    echo "\" placeholder=\"";
                    echo ($context["text_name"] ?? null);
                    echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"oct_smart_register_data[customer][fields][";
                    // line 168
                    echo $context["section"];
                    echo "][";
                    echo $context["field"];
                    echo "][localization][";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 168);
                    echo "][placeholder]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, $context["details"], "localization", [], "any", false, false, false, 168)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 168)] ?? null) : null), "placeholder", [], "any", false, false, false, 168);
                    echo "\" placeholder=\"";
                    echo ($context["text_placeholder"] ?? null);
                    echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"oct_smart_register_data[customer][fields][";
                    // line 169
                    echo $context["section"];
                    echo "][";
                    echo $context["field"];
                    echo "][localization][";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 169);
                    echo "][error_text]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, $context["details"], "localization", [], "any", false, false, false, 169)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 169)] ?? null) : null), "error_text", [], "any", false, false, false, 169);
                    echo "\" placeholder=\"";
                    echo ($context["text_error_text"] ?? null);
                    echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 172
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
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
            // line 175
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
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
        unset($context['_seq'], $context['_iterated'], $context['section'], $context['fields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 178
        echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<script>
\$('#status').change(function() {
\tvar \$input = \$(this);
\tif (\$input.is(\":checked\")) {
\t\t\$(\"#fields_list\").slideDown('slow');
\t} else {
\t\t\$(\"#fields_list\").slideUp('slow');
\t}
});

function toggleMobile() {
\tconst element = event.target,
\t\tparent = element.closest('.settings-item'),
\t\tcollapse = parent.querySelector('.settings-item-collapse'),
\t\ticon = element.querySelector('.fa');

\tcollapse.classList.toggle('show');
\ticon.classList.toggle('fa-angle-down');
\ticon.classList.toggle('fa-angle-up');
}

function setStatus(element) {
\telement.closest('.settings-item').classList.toggle('opacity');
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
initializeSortable('.sortable-fields-container');
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
        // line 318
        echo ($context["footer"] ?? null);
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "octemplates/module/oct_smart_register.twig";
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
        return array (  705 => 318,  563 => 178,  547 => 175,  531 => 172,  514 => 169,  502 => 168,  490 => 167,  482 => 166,  479 => 165,  475 => 164,  467 => 163,  455 => 158,  447 => 157,  439 => 156,  436 => 155,  430 => 153,  428 => 152,  416 => 149,  412 => 148,  396 => 139,  382 => 138,  372 => 135,  356 => 130,  348 => 129,  329 => 121,  321 => 120,  308 => 118,  300 => 117,  287 => 107,  279 => 105,  274 => 103,  266 => 101,  249 => 100,  245 => 99,  240 => 98,  223 => 97,  218 => 95,  200 => 82,  194 => 79,  186 => 74,  182 => 73,  177 => 71,  170 => 69,  153 => 57,  147 => 54,  137 => 47,  129 => 42,  123 => 39,  117 => 35,  111 => 32,  108 => 31,  105 => 30,  99 => 27,  96 => 26,  94 => 25,  87 => 20,  76 => 17,  73 => 16,  69 => 15,  64 => 13,  55 => 9,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "octemplates/module/oct_smart_register.twig", "");
    }
}
