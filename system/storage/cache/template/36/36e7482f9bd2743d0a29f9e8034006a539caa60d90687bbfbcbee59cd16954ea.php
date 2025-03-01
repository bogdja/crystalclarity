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

/* octemplates/theme/oct_deals.twig */
class __TwigTemplate_7cd1040f3b4df074c0ab0799f12082179836152d0fffd48979ecb76668cc1fde extends Template
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
\t\t\t\t";
        // line 6
        if (($context["update"] ?? null)) {
            // line 7
            echo "\t\t\t\t<a href=\"";
            echo ($context["update"] ?? null);
            echo "\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_update"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-refresh\"></i></a>
\t\t\t\t";
        } else {
            // line 9
            echo "\t\t\t\t";
            if ((array_key_exists("quick_start", $context) && ($context["quick_start"] ?? null))) {
                // line 10
                echo "\t\t\t\t<a href=\"";
                echo ($context["quick_start"] ?? null);
                echo "\" data-toggle=\"tooltip\" title=\"Quick Start\" class=\"btn btn-danger\"><i class=\"fa fa-quora\"></i></a>
\t\t\t\t";
            }
            // line 12
            echo "\t\t\t\t<a href=\"";
            echo ($context["clear_modification"] ?? null);
            echo "\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_refresh"] ?? null);
            echo "\" class=\"btn btn-info\"><i class=\"fa fa-refresh\"></i></a>
\t\t\t\t<button type=\"submit\" form=\"form-theme\" data-toggle=\"tooltip\" title=\"";
            // line 13
            echo ($context["button_save"] ?? null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
\t\t\t\t<a href=\"";
            // line 14
            echo ($context["cache_delete"] ?? null);
            echo "\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_clear_cache"] ?? null);
            echo "\" class=\"btn btn-warning\"><i class=\"fa fa-trash-o\"></i></a>
\t\t\t\t";
            // line 15
            if ((twig_length_filter($this->env, ($context["stores"] ?? null)) > 1)) {
                // line 16
                echo "\t\t\t\t<div class=\"dropdown\" style=\"display:inline-block;\">
\t\t\t\t\t<a href=\"javascript:;\" data-toggle=\"dropdown\" title=\"";
                // line 17
                echo ($context["button_multistore"] ?? null);
                echo "\" class=\"dropdown-toggle btn btn-info\"><i class=\"fas fa-store\"></i></a>
\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-right\">
\t\t\t\t\t\t";
                // line 19
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
                    // line 20
                    echo "\t\t\t\t\t\t<li><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["store"], "href", [], "any", false, false, false, 20);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 20);
                    echo "</li>
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 22
                echo "\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t";
            }
            // line 25
            echo "\t\t\t\t";
        }
        // line 26
        echo "\t\t\t\t<a href=\"";
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a>
\t\t\t</div>
\t\t\t<h1>";
        // line 28
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 31
            echo "\t\t\t\t<li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 31);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 31);
            echo "</a></li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "\t\t\t</ul>
\t\t</div>
\t</div>
\t<div class=\"container-fluid\">
\t\t";
        // line 37
        if (($context["error_warning"] ?? null)) {
            // line 38
            echo "\t\t<script>
\t\t\tusNotify('warning', '";
            // line 39
            echo ($context["error_warning"] ?? null);
            echo "');
\t\t</script>
\t\t";
        }
        // line 42
        echo "\t\t";
        if (($context["success"] ?? null)) {
            // line 43
            echo "\t    <script>
\t\t\tusNotify('success', '";
            // line 44
            echo ($context["success"] ?? null);
            echo "');
\t\t</script>
\t    ";
        }
        // line 47
        echo "\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 49
        echo ($context["text_edit"] ?? null);
        echo "</h3>
\t\t\t\t<div class=\"pull-right oct-version\">v.<span>";
        // line 50
        echo ($context["theme_oct_deals_version"] ?? null);
        echo "</span></div>
\t\t\t</div>
\t\t\t<div class=\"panel-body\">
\t\t\t\t<form action=\"";
        // line 53
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-theme\" class=\"form-horizontal\">
\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t<li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\"><i class=\"fa fa-cog fw\"></i> ";
        // line 55
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t<li><a href=\"#tab-image\" data-toggle=\"tab\"><i class=\"fa fa-picture-o fw\"></i> ";
        // line 56
        echo ($context["tab_image"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t<li><a href=\"#tab-widgets\" data-toggle=\"tab\"><i class=\"fa fa-cog fw\"></i> ";
        // line 57
        echo ($context["tab_widgets"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t<li><a href=\"#tab-seo_title\" data-toggle=\"tab\"><i class=\"fa fa-info fw\"></i> ";
        // line 58
        echo ($context["text_seo_title"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t<li><a href=\"#tab-help\" data-toggle=\"tab\"><i class=\"fas fa-info-circle\"></i> ";
        // line 59
        echo ($context["tab_help"] ?? null);
        echo "</a></li>
\t\t            </ul>
\t\t            <div class=\"tab-content\">
\t\t\t\t\t\t<div class=\"tab-pane active row\" id=\"tab-general\">
\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t<ul class=\"nav nav-pills nav-stacked\" id=\"settings\">
\t\t\t\t\t\t\t\t\t<li class=\"active\"><a href=\"#tab-settings\" data-toggle=\"tab\" aria-expanded=\"true\"><i class=\"fa fa-cog fw\"></i> ";
        // line 65
        echo ($context["text_general"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-header\" data-toggle=\"tab\" aria-expanded=\"true\"><i class=\"fa fa-arrow-up fw\"></i> ";
        // line 66
        echo ($context["tab_header"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-footer\" data-toggle=\"tab\" aria-expanded=\"true\"><i class=\"fa fa-arrow-down fw\"></i> ";
        // line 67
        echo ($context["tab_footer"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-contacts\" data-toggle=\"tab\" aria-expanded=\"true\"><i class=\"fa fa-users fw\"></i> ";
        // line 68
        echo ($context["tab_contacts"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-menu\" data-toggle=\"tab\" aria-expanded=\"true\"><i class=\"fa fa-bars fw\"></i> ";
        // line 69
        echo ($context["tab_menu"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-category\" data-toggle=\"tab\" aria-expanded=\"true\"><i class=\"fa fa-folder-open fw\"></i> ";
        // line 70
        echo ($context["tab_category"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-product\" data-toggle=\"tab\" aria-expanded=\"true\"><i class=\"fa fa-tv fw\"></i> ";
        // line 71
        echo ($context["tab_product"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-orders\" data-toggle=\"tab\" aria-expanded=\"true\"><i class=\"far fa-check-circle fw\"></i> ";
        // line 72
        echo ($context["tab_order"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a id=\"code_mir\" href=\"#tab-css_js\" data-toggle=\"tab\" aria-expanded=\"true\"><i class=\"fa fa-cog fw\"></i> ";
        // line 73
        echo ($context["tab_css_js"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"tab-settings\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"active\"><a href=\"#tab-settings-main\" data-toggle=\"tab\">";
        // line 80
        echo ($context["tab_main_settings"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-optimization\" data-toggle=\"tab\" aria-expanded=\"true\">";
        // line 81
        echo ($context["text_optimization"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-settings-colors\" data-toggle=\"tab\">";
        // line 82
        echo ($context["text_main_color_settings"] ?? null);
        echo "</a></li>
\t\t\t\t\t                    </ul>
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"tab-settings-main\">
\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 87
        echo ($context["text_general"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"theme_oct_deals_directory\" value=\"";
        // line 88
        echo ($context["theme_oct_deals_directory"] ?? null);
        echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"theme_oct_deals_status\">";
        // line 90
        echo ($context["entry_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_status\" ";
        // line 93
        if (($context["theme_oct_deals_status"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"theme_oct_deals_status\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"theme_oct_deals_status\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group required mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-license\">";
        // line 105
        echo ($context["entry_license"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"input-license\" name=\"theme_oct_deals_license\" value=\"";
        // line 107
        echo ($context["theme_oct_deals_license"] ?? null);
        echo "\" class=\"form-control\" placeholder=\"XXXXX-XXXXX-XXXXX-XXXXX-XXXXX-XXXXX-XXXXX-XXXXX\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 108
        if (($context["error_license"] ?? null)) {
            // line 109
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tusNotify('warning', '";
            // line 111
            echo ($context["error_license"] ?? null);
            echo "');
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 115
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"theme_oct_deals_font\">";
        // line 118
        echo ($context["entry_font"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_oct_deals_data[font]\" id=\"theme_oct_deals_font\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\"";
        // line 121
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "font", [], "any", false, false, false, 121) == 0)) {
            echo " selected=\"selected\"";
        }
        echo ">Ubuntu</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\"";
        // line 122
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "font", [], "any", false, false, false, 122) == 1)) {
            echo " selected=\"selected\"";
        }
        echo ">Roboto</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\"";
        // line 123
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "font", [], "any", false, false, false, 123) == 2)) {
            echo " selected=\"selected\"";
        }
        echo ">Open Sans</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\"";
        // line 124
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "font", [], "any", false, false, false, 124) == 3)) {
            echo " selected=\"selected\"";
        }
        echo ">Montserrat</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\"";
        // line 125
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "font", [], "any", false, false, false, 125) == 4)) {
            echo " selected=\"selected\"";
        }
        echo ">Inter</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"5\"";
        // line 126
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "font", [], "any", false, false, false, 126) == 5)) {
            echo " selected=\"selected\"";
        }
        echo ">Fira Sans</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"6\"";
        // line 127
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "font", [], "any", false, false, false, 127) == 6)) {
            echo " selected=\"selected\"";
        }
        echo ">Rubik</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"7\"";
        // line 128
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "font", [], "any", false, false, false, 128) == 7)) {
            echo " selected=\"selected\"";
        }
        echo ">Noto Sans</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"8\"";
        // line 129
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "font", [], "any", false, false, false, 129) == 8)) {
            echo " selected=\"selected\"";
        }
        echo ">Raleway</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"9\"";
        // line 130
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "font", [], "any", false, false, false, 130) == 9)) {
            echo " selected=\"selected\"";
        }
        echo ">Nunito</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"theme_oct_deals_width\">";
        // line 135
        echo ($context["entry_width_front"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_oct_deals_data[width]\" id=\"theme_oct_deals_width\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\"";
        // line 138
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "width", [], "any", false, false, false, 138) == 0)) {
            echo " selected=\"selected\"";
        }
        echo ">";
        echo ($context["entry_width_0"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\"";
        // line 139
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "width", [], "any", false, false, false, 139) == 1)) {
            echo " selected=\"selected\"";
        }
        echo ">";
        echo ($context["entry_width_1"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\"";
        // line 140
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "width", [], "any", false, false, false, 140) == 2)) {
            echo " selected=\"selected\"";
        }
        echo ">";
        echo ($context["entry_width_2"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-dark-theme\">";
        // line 145
        echo ($context["entry_dark_theme"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[dark_theme]\" ";
        // line 148
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "dark_theme", [], "any", false, false, false, 148)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-dark-theme\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-dark-theme\"></label>
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-micro\">";
        // line 160
        echo ($context["entry_micro"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[micro]\" ";
        // line 163
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "micro", [], "any", false, false, false, 163)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-micro\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-micro\"></label>
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-open_graph\">";
        // line 175
        echo ($context["entry_open_graph"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[open_graph]\" ";
        // line 178
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "open_graph", [], "any", false, false, false, 178)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-open_graph\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-open_graph\"></label>
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-no_quantity_grayscale\">";
        // line 190
        echo ($context["entry_no_quantity_grayscale"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_no_quantity_grayscale\" ";
        // line 193
        if (($context["theme_oct_deals_no_quantity_grayscale"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-no_quantity_grayscale\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-no_quantity_grayscale\"></label>
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-compare\">";
        // line 205
        echo ($context["entry_header_compare"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data_colors[compare]\" ";
        // line 208
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data_colors"] ?? null), "compare", [], "any", false, false, false, 208)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-compare\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-compare\"></label>
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-wishlist\">";
        // line 220
        echo ($context["entry_header_wishlist"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data_colors[wishlist]\" ";
        // line 223
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data_colors"] ?? null), "wishlist", [], "any", false, false, false, 223)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-wishlist\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-wishlist\"></label>
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-oct-popup-options\">";
        // line 235
        echo ($context["entry_oct_popup_options"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[oct_popup_options]\" ";
        // line 238
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "oct_popup_options", [], "any", false, false, false, 238)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-oct-popup-options\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-oct-popup-options\"></label>
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-isbuttoninteractive\">";
        // line 250
        echo ($context["entry_isbuttoninteractive"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[isbuttoninteractive]\" ";
        // line 253
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "isbuttoninteractive", [], "any", false, false, false, 253)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-isbuttoninteractive\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-isbuttoninteractive\"></label>
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-phone-regex\">";
        // line 265
        echo ($context["entry_phone_regex"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"input-phone-regex\" name=\"theme_oct_deals_data[phone_regex]\" value=\"";
        // line 267
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "phone_regex", [], "any", false, false, false, 267);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9 col-sm-offset-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"help-block\">";
        // line 270
        echo ($context["help_phone_regex"] ?? null);
        echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-optimization\">
\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 277
        echo ($context["text_optimization"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-minify\">";
        // line 279
        echo ($context["entry_minify"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[minify]\" ";
        // line 282
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "minify", [], "any", false, false, false, 282)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-minify\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-minify\"></label>
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-webp\">";
        // line 294
        echo ($context["entry_webp"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_webp\" ";
        // line 297
        if (($context["theme_oct_deals_webp"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-webp\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-webp\"></label>
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-footer-scripts\">";
        // line 309
        echo ($context["entry_footer_scripts"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[footer_scripts]\" ";
        // line 312
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "footer_scripts", [], "any", false, false, false, 312)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-footer-scripts\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-footer-scripts\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 324
        echo ($context["entry_preload_settings"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-preload_images\">";
        // line 326
        echo ($context["entry_preload_images"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[preload_images]\" ";
        // line 329
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "preload_images", [], "any", false, false, false, 329)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-preload_images\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-preload_images\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-settings-colors\">
\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 345
        echo ($context["text_main_colors"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"color_content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-main_color\">";
        // line 348
        echo ($context["entry_main_color"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_data_colors[main_color]\" value=\"";
        // line 350
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data_colors"] ?? null), "main_color", [], "any", false, false, false, 350);
        echo "\" placeholder=\"";
        echo ($context["entry_main_color"] ?? null);
        echo "\" id=\"input-main_color\" class=\"form-control spectrum\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-background_color\">";
        // line 354
        echo ($context["entry_background_color"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_data_colors[background_color]\" value=\"";
        // line 356
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data_colors"] ?? null), "background_color", [], "any", false, false, false, 356);
        echo "\" placeholder=\"";
        echo ($context["entry_background_color"] ?? null);
        echo "\" id=\"input-background_color\" class=\"form-control spectrum\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-main_link_color\">";
        // line 360
        echo ($context["entry_main_link_color"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_data_colors[main_link_color]\" value=\"";
        // line 362
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data_colors"] ?? null), "main_link_color", [], "any", true, true, false, 362) && twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data_colors"] ?? null), "main_link_color", [], "any", false, false, false, 362))) {
            echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data_colors"] ?? null), "main_link_color", [], "any", false, false, false, 362);
        } else {
            echo "rgb(24, 164, 225)";
        }
        echo "\" placeholder=\"";
        echo ($context["entry_main_link_color"] ?? null);
        echo "\" id=\"input-main_link_color\" class=\"form-control spectrum\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-special_price_color\">";
        // line 366
        echo ($context["entry_special_price_color"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_data_colors[special_price_color]\" value=\"";
        // line 368
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data_colors"] ?? null), "special_price_color", [], "any", true, true, false, 368) && twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data_colors"] ?? null), "special_price_color", [], "any", false, false, false, 368))) {
            echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data_colors"] ?? null), "special_price_color", [], "any", false, false, false, 368);
        } else {
            echo "rgb(24, 164, 225)";
        }
        echo "\" placeholder=\"";
        echo ($context["entry_special_price_color"] ?? null);
        echo "\" id=\"input-special_price_color\" class=\"form-control spectrum\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-interactive_color\">";
        // line 372
        echo ($context["entry_interactive_color"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_data_colors[interactive_color]\" value=\"";
        // line 374
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data_colors"] ?? null), "interactive_color", [], "any", true, true, false, 374) && twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data_colors"] ?? null), "interactive_color", [], "any", false, false, false, 374))) {
            echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data_colors"] ?? null), "interactive_color", [], "any", false, false, false, 374);
        } else {
            echo "rgb(24, 164, 225)";
        }
        echo "\" placeholder=\"";
        echo ($context["entry_interactive_color"] ?? null);
        echo "\" id=\"input-interactive_color\" class=\"form-control spectrum\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 380
        echo ($context["tab_header"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"color_content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-top_background_color\">";
        // line 383
        echo ($context["entry_top_background_color"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_data_colors[top_background_color]\" value=\"";
        // line 385
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data_colors"] ?? null), "top_background_color", [], "any", false, false, false, 385);
        echo "\" placeholder=\"";
        echo ($context["entry_top_background_color"] ?? null);
        echo "\" id=\"input-top_background_color\" class=\"form-control spectrum\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-top_link_color\">";
        // line 389
        echo ($context["entry_top_link_color"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_data_colors[top_link_color]\" value=\"";
        // line 391
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data_colors"] ?? null), "top_link_color", [], "any", false, false, false, 391);
        echo "\" placeholder=\"";
        echo ($context["entry_top_link_color"] ?? null);
        echo "\" id=\"input-top_link_color\" class=\"form-control spectrum\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-top_link_color_hover\">";
        // line 395
        echo ($context["entry_top_link_color_hover"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_data_colors[top_link_color_hover]\" value=\"";
        // line 397
        echo ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data_colors"] ?? null), "top_link_color_hover", [], "any", false, false, false, 397)) ? (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data_colors"] ?? null), "top_link_color_hover", [], "any", false, false, false, 397)) : ("#e5e5e5"));
        echo "\" placeholder=\"";
        echo ($context["entry_top_link_color_hover"] ?? null);
        echo "\" id=\"input-top_link_color_hover\" class=\"form-control spectrum\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 403
        echo ($context["tab_footer"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"color_content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-footer_background_color\">";
        // line 406
        echo ($context["entry_footer_background_color"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_data_colors[footer_background_color]\" value=\"";
        // line 408
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data_colors"] ?? null), "footer_background_color", [], "any", false, false, false, 408);
        echo "\" placeholder=\"";
        echo ($context["entry_footer_background_color"] ?? null);
        echo "\" id=\"input-footer_background_color\" class=\"form-control spectrum\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-footer_text_color\">";
        // line 412
        echo ($context["entry_footer_text_color"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_data_colors[footer_text_color]\" value=\"";
        // line 414
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data_colors"] ?? null), "footer_text_color", [], "any", false, false, false, 414);
        echo "\" placeholder=\"";
        echo ($context["entry_footer_text_color"] ?? null);
        echo "\" id=\"input-footer_text_color\" class=\"form-control spectrum\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-footer_link_color\">";
        // line 418
        echo ($context["entry_footer_link_color"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_data_colors[footer_link_color]\" value=\"";
        // line 420
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data_colors"] ?? null), "footer_link_color", [], "any", false, false, false, 420);
        echo "\" placeholder=\"";
        echo ($context["entry_footer_link_color"] ?? null);
        echo "\" id=\"input-footer_link_color\" class=\"form-control spectrum\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-footer_link_hover_color\">";
        // line 424
        echo ($context["entry_footer_link_hover_color"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_data_colors[footer_link_hover_color]\" value=\"";
        // line 426
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data_colors"] ?? null), "footer_link_hover_color", [], "any", false, false, false, 426);
        echo "\" placeholder=\"";
        echo ($context["entry_footer_link_hover_color"] ?? null);
        echo "\" id=\"input-footer_link_hover_color\" class=\"form-control spectrum\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-footer-contact-link-color\">";
        // line 430
        echo ($context["entry_footer_contact_link_color"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_data_colors[footer_contact_link_color]\" value=\"";
        // line 432
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data_colors"] ?? null), "footer_contact_link_color", [], "any", false, false, false, 432);
        echo "\" placeholder=\"";
        echo ($context["entry_footer_contact_link_color"] ?? null);
        echo "\" id=\"input-footer-contact-link-color\" class=\"form-control spectrum\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-footer-contact-link-hover-color\">";
        // line 436
        echo ($context["entry_footer_contact_link_hover_color"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_data_colors[footer_contact_link_hover_color]\" value=\"";
        // line 438
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data_colors"] ?? null), "footer_contact_link_hover_color", [], "any", false, false, false, 438);
        echo "\" placeholder=\"";
        echo ($context["entry_footer_contact_link_hover_color"] ?? null);
        echo "\" id=\"input-footer-contact-link-hover-color\" class=\"form-control spectrum\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-footer-contact-link-color\">";
        // line 442
        echo ($context["entry_footer_title_color"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_data_colors[footer_title_color]\" value=\"";
        // line 444
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data_colors"] ?? null), "footer_title_color", [], "any", false, false, false, 444);
        echo "\" placeholder=\"";
        echo ($context["entry_footer_title_color"] ?? null);
        echo "\" id=\"input-footer-contact-link-color\" class=\"form-control spectrum\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-header\">
\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 454
        echo ($context["tab_header"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-header_account\">";
        // line 456
        echo ($context["entry_header_account"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[header_account]\" ";
        // line 459
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "header_account", [], "any", false, false, false, 459)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-header_account\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-header_account\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-header_lang\">";
        // line 471
        echo ($context["entry_header_lang"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[header_lang]\" ";
        // line 474
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "header_lang", [], "any", false, false, false, 474)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-header_lang\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-header_lang\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-header_cur\">";
        // line 486
        echo ($context["entry_header_cur"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[header_cur]\" ";
        // line 489
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "header_cur", [], "any", false, false, false, 489)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-header_cur\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-header_cur\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-footer\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"active\"><a href=\"#tab-footer-settings\" data-toggle=\"tab\">";
        // line 504
        echo ($context["tab_main_settings"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-payments-settings\" data-toggle=\"tab\">";
        // line 505
        echo ($context["text_paymant_systems"] ?? null);
        echo "</a></li>
\t\t\t\t\t                    </ul>
\t\t\t\t\t                    <div class=\"tab-content\">
\t\t\t\t\t                    \t<div class=\"tab-pane active\" id=\"tab-footer-settings\">
\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-footer_totop\">";
        // line 511
        echo ($context["entry_footer_totop"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[footer_totop]\" ";
        // line 514
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "footer_totop", [], "any", false, false, false, 514)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-footer_totop\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-footer_totop\"></label>
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-footer_subscribe\">";
        // line 526
        echo ($context["entry_footer_subscribe"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[footer_subscribe]\" ";
        // line 529
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "footer_subscribe", [], "any", false, false, false, 529)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-footer_subscribe\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-footer_subscribe\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-payments-settings\">
\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 544
        echo ($context["text_paymant_systems"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"payments_block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2 payments\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-12 control-label\" for=\"input-payments_privat24\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-thumbnail\" src=\"view/image/pay/privat24.svg\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[payments][privat24]\" ";
        // line 552
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "payments", [], "any", false, false, false, 552), "privat24", [], "any", false, false, false, 552)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-payments_privat24\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-payments_privat24\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2 payments\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-12 control-label\" for=\"input-payments_monoplata\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-thumbnail\" src=\"view/image/pay/monoplata.svg\" width=\"80\" height=\"50\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[payments][monoplata]\" ";
        // line 569
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "payments", [], "any", false, false, false, 569), "monoplata", [], "any", false, false, false, 569)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-payments_monoplata\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-payments_monoplata\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2 payments\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-12 control-label\" for=\"input-payments_wayforpay\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-thumbnail\" src=\"view/image/pay/wayforpay.svg\" width=\"80\" height=\"50\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[payments][wayforpay]\" ";
        // line 586
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "payments", [], "any", false, false, false, 586), "wayforpay", [], "any", false, false, false, 586)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-payments_wayforpay\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-payments_wayforpay\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2 payments\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-12 control-label\" for=\"input-payments_lp\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-thumbnail\" src=\"view/image/pay/liqpay.svg\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[payments][lp]\" ";
        // line 603
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "payments", [], "any", false, false, false, 603), "lp", [], "any", false, false, false, 603)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-payments_lp\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-payments_lp\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2 payments\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-12 control-label\" for=\"input-payments_visa\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-thumbnail\" src=\"view/image/pay/visa.svg\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[payments][visa]\" ";
        // line 620
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "payments", [], "any", false, false, false, 620), "visa", [], "any", false, false, false, 620)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-payments_visa\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-payments_visa\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2 payments\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-12 control-label\" for=\"input-payments_mc\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-thumbnail\" src=\"view/image/pay/mastercard.svg\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[payments][mc]\" ";
        // line 637
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "payments", [], "any", false, false, false, 637), "mc", [], "any", false, false, false, 637)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-payments_mc\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-payments_mc\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2 payments\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-12 control-label\" for=\"input-payments_maestro\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-thumbnail\" src=\"view/image/pay/maestro.svg\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[payments][maestro]\" ";
        // line 654
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "payments", [], "any", false, false, false, 654), "maestro", [], "any", false, false, false, 654)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-payments_maestro\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-payments_maestro\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2 payments\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-12 control-label\" for=\"input-payments_pp\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-thumbnail\" src=\"view/image/pay/paypal.svg\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[payments][pp]\" ";
        // line 671
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "payments", [], "any", false, false, false, 671), "pp", [], "any", false, false, false, 671)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-payments_pp\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-payments_pp\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2 payments\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-12 control-label\" for=\"input-payments_skrill\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-thumbnail\" src=\"view/image/pay/skrill.svg\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[payments][skrill]\" ";
        // line 688
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "payments", [], "any", false, false, false, 688), "skrill", [], "any", false, false, false, 688)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-payments_skrill\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-payments_skrill\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2 payments\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-12 control-label\" for=\"input-payments_interkassa\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-thumbnail\" src=\"view/image/pay/interkassa.svg\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[payments][interkassa]\" ";
        // line 705
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "payments", [], "any", false, false, false, 705), "interkassa", [], "any", false, false, false, 705)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-payments_interkassa\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-payments_interkassa\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 716
        $context["payment_row"] = 0;
        // line 717
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "payments", [], "any", false, false, false, 717), "customers", [], "any", false, false, false, 717));
        foreach ($context['_seq'] as $context["_key"] => $context["payment"]) {
            // line 718
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"payments-row-";
            echo ($context["payment_row"] ?? null);
            echo "\" class=\"col-sm-2 payments\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btnr\" href=\"javascript:;\" onclick=\"\$('#payments-row-";
            // line 719
            echo ($context["payment_row"] ?? null);
            echo "').remove()\"><i class=\"fa fa-minus-circle\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-12 control-label\" for=\"input-payments_customers_";
            // line 720
            echo ($context["payment_row"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-thumbnail\" src=\"";
            // line 721
            echo twig_get_attribute($this->env, $this->source, $context["payment"], "thumb_image", [], "any", false, false, false, 721);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" value=\"";
            // line 722
            echo twig_get_attribute($this->env, $this->source, $context["payment"], "image", [], "any", false, false, false, 722);
            echo "\" name=\"theme_oct_deals_data[payments][customers][";
            echo ($context["payment_row"] ?? null);
            echo "][image]\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[payments][customers][";
            // line 726
            echo ($context["payment_row"] ?? null);
            echo "][status]\" ";
            if (twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "payments", [], "any", false, false, false, 726), "customers", [], "any", false, false, false, 726)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[($context["payment_row"] ?? null)] ?? null) : null), "status", [], "any", false, false, false, 726)) {
                echo "checked=\"checked\"";
            }
            echo " id=\"input-payments_customers_";
            echo ($context["payment_row"] ?? null);
            echo "\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-payments_customers_";
            // line 727
            echo ($context["payment_row"] ?? null);
            echo "\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 737
            $context["payment_row"] = (($context["payment_row"] ?? null) + 1);
            // line 738
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 739
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"add_new_block\" class=\"col-sm-2 payments\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"add_block_in\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" onclick=\"addPayment();\" data-toggle=\"tooltip\" title=\"";
        // line 741
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t                    \t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-contacts\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"active\"><a href=\"#tab-contacts-settings\" data-toggle=\"tab\">";
        // line 751
        echo ($context["tab_contacts"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-contacts-page\" data-toggle=\"tab\">";
        // line 752
        echo ($context["tab_contacts_page"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-locations-settings\" data-toggle=\"tab\">";
        // line 753
        echo ($context["text_locations"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-socials-settings\" data-toggle=\"tab\">";
        // line 754
        echo ($context["text_socials"] ?? null);
        echo "</a></li>
\t\t\t\t\t                    </ul>
\t\t\t\t\t                    <div class=\"tab-content\">
\t\t\t\t\t                    \t<div class=\"tab-pane active\" id=\"tab-contacts-settings\">
\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 759
        echo ($context["tab_contacts"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-contact_address\">";
        // line 761
        echo ($context["entry_contact_address"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"address-language\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 764
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 765
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#address-language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 765);
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 765);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 765);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 765);
            echo "\" /> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 765);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 767
        echo "\t\t\t\t\t\t\t\t\t\t                    </ul>
\t\t\t\t\t\t\t\t\t\t                    <div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t                        \t";
        // line 769
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 770
            echo "\t\t\t\t\t\t\t\t\t                            <div class=\"tab-pane\" id=\"address-language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 770);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea id=\"contact_address\" name=\"theme_oct_deals_data[contact_address][";
            // line 771
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 771);
            echo "]\" rows=\"5\" class=\"form-control\">";
            echo (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "contact_address", [], "any", false, false, false, 771)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 771)] ?? null) : null);
            echo "</textarea>
\t\t\t\t\t\t\t\t\t                            </div>
\t\t\t\t\t\t\t\t\t                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 774
        echo "\t\t\t\t\t\t\t\t\t\t                    </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-contact_telephone\">";
        // line 778
        echo ($context["entry_contact_telephone"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea id=\"contact_telephone\" name=\"theme_oct_deals_data[contact_telephone]\" rows=\"5\" class=\"form-control\">";
        // line 780
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "contact_telephone", [], "any", false, false, false, 780);
        echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-contact_open\">";
        // line 784
        echo ($context["entry_contact_open"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"open-language\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 787
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 788
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#open-language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 788);
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 788);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 788);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 788);
            echo "\" /> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 788);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 790
        echo "\t\t\t\t\t\t\t\t\t\t                    </ul>
\t\t\t\t\t\t\t\t\t\t                    <div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t                        \t";
        // line 792
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 793
            echo "\t\t\t\t\t\t\t\t\t                            <div class=\"tab-pane\" id=\"open-language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 793);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea id=\"contact_address\" name=\"theme_oct_deals_data[contact_open][";
            // line 794
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 794);
            echo "]\" rows=\"5\" class=\"form-control\">";
            echo (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "contact_open", [], "any", false, false, false, 794)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 794)] ?? null) : null);
            echo "</textarea>
\t\t\t\t\t\t\t\t\t                            </div>
\t\t\t\t\t\t\t\t\t                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 797
        echo "\t\t\t\t\t\t\t\t\t\t                    </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-contact_map\">";
        // line 801
        echo ($context["entry_contact_map"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea id=\"contact_map\" name=\"theme_oct_deals_data[contact_map]\" rows=\"5\" class=\"form-control\">";
        // line 803
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "contact_map", [], "any", false, false, false, 803);
        echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-contact_image\">";
        // line 807
        echo ($context["entry_location_image"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" id=\"thumb-contact_image\" data-toggle=\"image\" class=\"img-thumbnail\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 810
        echo ($context["contact_image_thumb"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["contact_placeholder"] ?? null);
        echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
                  \t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"theme_oct_deals_data[contact_image]\" value=\"";
        // line 812
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "contact_image", [], "any", false, false, false, 812);
        echo "\" id=\"input-contact_image\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-contact_email\">";
        // line 816
        echo ($context["entry_contact_email"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"email\" id=\"contact_email\" name=\"theme_oct_deals_data[contact_email]\" value=\"";
        // line 818
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "contact_email", [], "any", false, false, false, 818);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-contact_skype\">";
        // line 822
        echo ($context["entry_contact_skype"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"contact_skype\" name=\"theme_oct_deals_data[contact_skype]\" value=\"";
        // line 824
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "contact_skype", [], "any", false, false, false, 824);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-contact_whatsapp\">";
        // line 828
        echo ($context["entry_contact_whatsapp"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"contact_whatsapp\" name=\"theme_oct_deals_data[contact_whatsapp]\" value=\"";
        // line 830
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "contact_whatsapp", [], "any", false, false, false, 830);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-contact_viber\">";
        // line 834
        echo ($context["entry_contact_viber"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"contact_viber\" name=\"theme_oct_deals_data[contact_viber]\" value=\"";
        // line 836
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "contact_viber", [], "any", false, false, false, 836);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-contact_telegram\">";
        // line 840
        echo ($context["entry_contact_telegram"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"contact_telegram\" name=\"theme_oct_deals_data[contact_telegram]\" value=\"";
        // line 842
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "contact_telegram", [], "any", false, false, false, 842);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-contact_messenger\">";
        // line 846
        echo ($context["entry_contact_messenger"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"contact_messenger\" name=\"theme_oct_deals_data[contact_messenger]\" value=\"";
        // line 848
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "contact_messenger", [], "any", false, false, false, 848);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t                    \t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-contacts-page\">
\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 855
        echo ($context["tab_contacts_page"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-contact_view_address\">";
        // line 857
        echo ($context["entry_contact_view_address"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[contact_view_address]\" ";
        // line 860
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "contact_view_address", [], "any", false, false, false, 860)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-contact_view_address\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-contact_view_address\"></label>
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-contact_view_phone\">";
        // line 872
        echo ($context["entry_contact_view_phone"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[contact_view_phone]\" ";
        // line 875
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "contact_view_phone", [], "any", false, false, false, 875)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-contact_view_phone\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-contact_view_phone\"></label>
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-contact_view_time\">";
        // line 887
        echo ($context["entry_contact_view_time"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[contact_view_time]\" ";
        // line 890
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "contact_view_time", [], "any", false, false, false, 890)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-contact_view_time\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-contact_view_time\"></label>
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-contact_view_map\">";
        // line 902
        echo ($context["entry_contact_view_map"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[contact_view_map]\" ";
        // line 905
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "contact_view_map", [], "any", false, false, false, 905)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-contact_view_map\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-contact_view_map\"></label>
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-contact_view_socials\">";
        // line 917
        echo ($context["entry_contact_view_socials"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[contact_view_socials]\" ";
        // line 920
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "contact_view_socials", [], "any", false, false, false, 920)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-contact_view_socials\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-contact_view_socials\"></label>
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-contact_view_locations\">";
        // line 932
        echo ($context["entry_contact_view_locations"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[contact_view_locations]\" ";
        // line 935
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "contact_view_locations", [], "any", false, false, false, 935)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-contact_view_locations\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-contact_view_locations\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-locations-settings\">
\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 950
        echo ($context["text_locations"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"site_locations\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 953
        $context["location_id"] = 1;
        // line 954
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
        if (($context["oct_locations"] ?? null)) {
            // line 955
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["oct_locations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["oct_location"]) {
                // line 956
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel panel-default\" id=\"locations-";
                echo ($context["location_id"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span><i class=\"fa fa-address-card\" aria-hidden=\"true\"></i> ";
                // line 958
                echo twig_get_attribute($this->env, $this->source, $context["oct_location"], "title", [], "any", false, false, false, 958);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"btn btn-danger pull-right\" onclick=\"\$('#locations-";
                // line 959
                echo ($context["location_id"] ?? null);
                echo "').remove();return false;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-trash-o\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
                // line 965
                echo ($context["text_locations_descr"] ?? null);
                echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs location-block\" id=\"locations-language-";
                // line 966
                echo ($context["location_id"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 967
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 968
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#locations-language";
                    echo ($context["location_id"] ?? null);
                    echo "-";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 968);
                    echo "\" data-toggle=\"tab\"><img src=\"language/";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 968);
                    echo "/";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 968);
                    echo ".png\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 968);
                    echo "\" /> ";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 968);
                    echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 970
                echo "\t\t\t\t\t\t\t\t\t\t\t\t                    </ul>
\t\t\t\t\t\t\t\t\t\t\t\t                    <div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t                        \t";
                // line 972
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 973
                    echo "\t\t\t\t\t\t\t\t\t\t\t                            <div class=\"tab-pane\" id=\"locations-language";
                    echo ($context["location_id"] ?? null);
                    echo "-";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 973);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"descr_title";
                    // line 975
                    echo ($context["location_id"] ?? null);
                    echo "-";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 975);
                    echo "\">";
                    echo ($context["entry_location_title"] ?? null);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"descr_title";
                    // line 977
                    echo ($context["location_id"] ?? null);
                    echo "-";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 977);
                    echo "\" name=\"oct_locations[";
                    echo ($context["location_id"] ?? null);
                    echo "][description][";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 977);
                    echo "][title]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, $context["oct_location"], "description", [], "any", false, false, false, 977)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 977)] ?? null) : null), "title", [], "any", false, false, false, 977);
                    echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"descr_address";
                    // line 981
                    echo ($context["location_id"] ?? null);
                    echo "-";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 981);
                    echo "\">";
                    echo ($context["entry_location_address"] ?? null);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea id=\"descr_address";
                    // line 983
                    echo ($context["location_id"] ?? null);
                    echo "-";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 983);
                    echo "\" name=\"oct_locations[";
                    echo ($context["location_id"] ?? null);
                    echo "][description][";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 983);
                    echo "][address]\" rows=\"5\" class=\"form-control\">";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_compile_4 = twig_get_attribute($this->env, $this->source, $context["oct_location"], "description", [], "any", false, false, false, 983)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 983)] ?? null) : null), "address", [], "any", false, false, false, 983);
                    echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"descr_open";
                    // line 987
                    echo ($context["location_id"] ?? null);
                    echo "-";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 987);
                    echo "\">";
                    echo ($context["entry_contact_open"] ?? null);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea id=\"descr_open";
                    // line 989
                    echo ($context["location_id"] ?? null);
                    echo "-";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 989);
                    echo "\" name=\"oct_locations[";
                    echo ($context["location_id"] ?? null);
                    echo "][description][";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 989);
                    echo "][open]\" rows=\"5\" class=\"form-control\">";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_compile_5 = twig_get_attribute($this->env, $this->source, $context["oct_location"], "description", [], "any", false, false, false, 989)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 989)] ?? null) : null), "open", [], "any", false, false, false, 989);
                    echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t                            </div>
\t\t\t\t\t\t\t\t\t\t\t                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 994
                echo "\t\t\t\t\t\t\t\t\t\t\t\t                    </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
                // line 997
                echo ($context["text_locations_info"] ?? null);
                echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"location_phone";
                // line 999
                echo ($context["location_id"] ?? null);
                echo "\">";
                echo ($context["entry_contact_telephone"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea id=\"location_phone";
                // line 1001
                echo ($context["location_id"] ?? null);
                echo "\" name=\"oct_locations[";
                echo ($context["location_id"] ?? null);
                echo "][phone]\" rows=\"5\" class=\"form-control\">";
                echo twig_get_attribute($this->env, $this->source, $context["oct_location"], "phone", [], "any", false, false, false, 1001);
                echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"location_map";
                // line 1005
                echo ($context["location_id"] ?? null);
                echo "\">";
                echo ($context["entry_contact_map"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea id=\"location_map";
                // line 1007
                echo ($context["location_id"] ?? null);
                echo "\" name=\"oct_locations[";
                echo ($context["location_id"] ?? null);
                echo "][map]\" rows=\"5\" class=\"form-control\">";
                echo twig_get_attribute($this->env, $this->source, $context["oct_location"], "map", [], "any", false, false, false, 1007);
                echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"location_link";
                // line 1011
                echo ($context["location_id"] ?? null);
                echo "\">";
                echo ($context["entry_location_link"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"location_link";
                // line 1013
                echo ($context["location_id"] ?? null);
                echo "\" name=\"oct_locations[";
                echo ($context["location_id"] ?? null);
                echo "][link]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["oct_location"], "link", [], "any", false, false, false, 1013);
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"location_image";
                // line 1017
                echo ($context["location_id"] ?? null);
                echo "\">";
                echo ($context["entry_location_image"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" id=\"thumb-contact_location_image";
                // line 1019
                echo ($context["location_id"] ?? null);
                echo "\" data-toggle=\"image\" class=\"img-thumbnail\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 1020
                echo twig_get_attribute($this->env, $this->source, $context["oct_location"], "thumb", [], "any", false, false, false, 1020);
                echo "\" alt=\"\" title=\"\" data-placeholder=\"";
                echo ($context["contact_placeholder"] ?? null);
                echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t                  \t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"oct_locations[";
                // line 1022
                echo ($context["location_id"] ?? null);
                echo "][image]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["oct_location"], "image", [], "any", false, false, false, 1022);
                echo "\" id=\"input-contact_location_image";
                echo ($context["location_id"] ?? null);
                echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"location_sort";
                // line 1026
                echo ($context["location_id"] ?? null);
                echo "\">";
                echo ($context["entry_location_sort"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"number\" id=\"location_sort";
                // line 1028
                echo ($context["location_id"] ?? null);
                echo "\" name=\"oct_locations[";
                echo ($context["location_id"] ?? null);
                echo "][sort]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["oct_location"], "sort", [], "any", false, false, false, 1028);
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 1034
                $context["location_id"] = (($context["location_id"] ?? null) + 1);
                // line 1035
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_location'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1036
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1037
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"empty_locations\">";
            echo ($context["text_locations_empty"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1039
        echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"btn btn-primary\" id=\"locations_add\" onclick=\"addNewLocation();\">";
        // line 1041
        echo ($context["text_add_location"] ?? null);
        echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t                    <div class=\"tab-pane\" id=\"tab-socials-settings\">
\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 1046
        echo ($context["text_socials"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"table table-striped table-bordered table-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1050
        $context["social_row"] = 0;
        // line 1051
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "socials", [], "any", false, false, false, 1051));
        foreach ($context['_seq'] as $context["_key"] => $context["social"]) {
            // line 1052
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr id=\"social-row";
            echo ($context["social_row"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t                        <span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t                        \t<button onClick=\"fontIcons('social_icone-";
            // line 1056
            echo ($context["social_row"] ?? null);
            echo "', 'social_input_icone-";
            echo ($context["social_row"] ?? null);
            echo "');\" class=\"btn btn-default social_icone\" type=\"button\"><i id=\"social_icone-";
            echo ($context["social_row"] ?? null);
            echo "\" class=\"";
            echo twig_get_attribute($this->env, $this->source, $context["social"], "icone", [], "any", false, false, false, 1056);
            echo "\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t                        \t<input type=\"hidden\" name=\"theme_oct_deals_data[socials][";
            // line 1057
            echo ($context["social_row"] ?? null);
            echo "][icone]\" id=\"social_input_icone-";
            echo ($context["social_row"] ?? null);
            echo "\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["social"], "icone", [], "any", false, false, false, 1057);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t                        </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t                        <input type=\"text\" name=\"theme_oct_deals_data[socials][";
            // line 1059
            echo ($context["social_row"] ?? null);
            echo "][title]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["social"], "title", [], "any", false, false, false, 1059);
            echo "\" placeholder=\"";
            echo ($context["entry_social_title"] ?? null);
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t                        </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_data[socials][";
            // line 1063
            echo ($context["social_row"] ?? null);
            echo "][link]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["social"], "link", [], "any", false, false, false, 1063);
            echo "\" placeholder=\"";
            echo ($context["entry_social_link"] ?? null);
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\"><button type=\"button\" onclick=\"\$('#social-row";
            // line 1065
            echo ($context["social_row"] ?? null);
            echo "').remove()\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1067
            $context["social_row"] = (($context["social_row"] ?? null) + 1);
            // line 1068
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['social'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1069
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"2\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\" style=\"width:5%;\"><button type=\"button\" onclick=\"addSocial();\" data-toggle=\"tooltip\" title=\"";
        // line 1073
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tfoot>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t                    \t</div>
\t\t\t\t\t                    </div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-menu\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"active\"><a href=\"#tab-main-menu\" data-toggle=\"tab\">";
        // line 1084
        echo ($context["text_megamenu_settings"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-header-menu\" data-toggle=\"tab\">";
        // line 1085
        echo ($context["tab_header"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-footer-menu\" data-toggle=\"tab\">";
        // line 1086
        echo ($context["tab_footer"] ?? null);
        echo "</a></li>
\t\t\t\t\t                    </ul>
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"tab-main-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 1091
        echo ($context["text_megamenu_settings"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-megamenu_status\">";
        // line 1093
        echo ($context["text_megamenu_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[megamenu][status]\" ";
        // line 1096
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "megamenu", [], "any", false, false, false, 1096), "status", [], "any", false, false, false, 1096)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-megamenu_status\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-megamenu_status\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"language-megamenu\">
\t\t\t\t\t\t\t\t                      ";
        // line 1108
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1109
            echo "\t\t\t\t\t\t\t\t                      <li><a href=\"#language-megamenu";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1109);
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1109);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1109);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1109);
            echo "\" /> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1109);
            echo "</a></li>
\t\t\t\t\t\t\t\t                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1111
        echo "\t\t\t\t\t\t\t\t                    </ul>
\t\t\t\t\t\t\t\t                    <div class=\"tab-content\">
\t\t\t\t\t\t\t\t                        ";
        // line 1113
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1114
            echo "\t\t\t\t\t\t\t\t                            <div class=\"tab-pane\" id=\"language-megamenu";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1114);
            echo "\">
\t\t\t\t\t\t\t\t                                <div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-dtitle";
            // line 1116
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1116);
            echo "\">";
            echo ($context["entry_oct_megamenu_title"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_data[megamenu][dtitle][";
            // line 1118
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1118);
            echo "]\" value=\"";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "megamenu", [], "any", false, true, false, 1118), "dtitle", [], "any", false, true, false, 1118), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1118), [], "array", true, true, false, 1118)) ? ((($__internal_compile_6 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "megamenu", [], "any", false, false, false, 1118), "dtitle", [], "any", false, false, false, 1118)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1118)] ?? null) : null)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_oct_megamenu_title"] ?? null);
            echo "\" id=\"input-dtitle";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1118);
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t                                </div>
\t\t\t\t\t\t\t\t                            </div>
\t\t\t\t\t\t\t\t                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1123
        echo "\t\t\t\t\t\t\t\t                    </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"oct_megamenu_categories\">";
        // line 1125
        echo ($context["entry_megamenu_categories"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[megamenu][dcategories]\" ";
        // line 1128
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "megamenu", [], "any", false, false, false, 1128), "dcategories", [], "any", false, false, false, 1128)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"oct_megamenu_categories\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"oct_megamenu_categories\"></label>
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"oct_megamenu_categories_limit\"><span data-toggle=\"tooltip\" title=\"\" data-original-title=\"";
        // line 1140
        echo ($context["help_megamenu_categories_limit"] ?? null);
        echo "\">";
        echo ($context["entry_megamenu_categories_limit"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_data[megamenu][limit]\" value=\"";
        // line 1142
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "megamenu", [], "any", false, false, false, 1142), "limit", [], "any", false, false, false, 1142);
        echo "\" placeholder=\"";
        echo ($context["entry_megamenu_categories_limit"] ?? null);
        echo "\" id=\"oct_megamenu_categories_limit\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 1146
        echo ($context["entry_menu_cat_view"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_oct_deals_data[megamenu][view]\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" ";
        // line 1149
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "megamenu", [], "any", false, false, false, 1149), "view", [], "any", false, false, false, 1149) == "1")) ? ("selected=\"selected\"") : (""));
        echo ">";
        echo ($context["entry_menu_cat_view_1"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\" ";
        // line 1150
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "megamenu", [], "any", false, false, false, 1150), "view", [], "any", false, false, false, 1150) == "2")) ? ("selected=\"selected\"") : (""));
        echo ">";
        echo ($context["entry_menu_cat_view_2"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 1155
        echo ($context["entry_menu_sort_view"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_oct_deals_data[megamenu][sort]\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" ";
        // line 1158
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "megamenu", [], "any", false, false, false, 1158), "sort", [], "any", false, false, false, 1158) == "1")) ? ("selected=\"selected\"") : (""));
        echo ">";
        echo ($context["entry_menu_sort_view_1"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\" ";
        // line 1159
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "megamenu", [], "any", false, false, false, 1159), "sort", [], "any", false, false, false, 1159) == "2")) ? ("selected=\"selected\"") : (""));
        echo ">";
        echo ($context["entry_menu_sort_view_2"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\" ";
        // line 1160
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "megamenu", [], "any", false, false, false, 1160), "sort", [], "any", false, false, false, 1160) == "3")) ? ("selected=\"selected\"") : (""));
        echo ">";
        echo ($context["entry_menu_sort_view_3"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\" ";
        // line 1161
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "megamenu", [], "any", false, false, false, 1161), "sort", [], "any", false, false, false, 1161) == "4")) ? ("selected=\"selected\"") : (""));
        echo ">";
        echo ($context["entry_menu_sort_view_4"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"oct_megamenu_categories_icon\">";
        // line 1166
        echo ($context["entry_megamenu_categories_icon"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[megamenu][icon]\" ";
        // line 1169
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "megamenu", [], "any", false, false, false, 1169), "icon", [], "any", false, false, false, 1169)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"oct_megamenu_categories_icon\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"oct_megamenu_categories_icon\"></label>
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"oct_megamenu_categories_page\">";
        // line 1181
        echo ($context["entry_megamenu_categories_page"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[megamenu][page]\" ";
        // line 1184
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "megamenu", [], "any", false, false, false, 1184), "page", [], "any", false, false, false, 1184)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"oct_megamenu_categories_page\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"oct_megamenu_categories_page\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 1197
        echo ($context["text_megamenu_items"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"megamenu_block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1199
        $context["menu_id"] = 1000;
        // line 1200
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        if (($context["oct_megamenu"] ?? null)) {
            // line 1201
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["oct_megamenu"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["oct_menu"]) {
                // line 1202
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel panel-default\" id=\"megamenu-";
                echo twig_get_attribute($this->env, $this->source, $context["oct_menu"], "oct_menu_id", [], "any", false, false, false, 1202);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    <div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        <span><i class=\"fa fa-bars\" aria-hidden=\"true\"></i> ";
                // line 1204
                echo twig_get_attribute($this->env, $this->source, $context["oct_menu"], "title", [], "any", false, false, false, 1204);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        <a href=\"javascript:;\" class=\"btn btn-danger pull-right\" onclick=\"\$('#megamenu-";
                // line 1205
                echo twig_get_attribute($this->env, $this->source, $context["oct_menu"], "oct_menu_id", [], "any", false, false, false, 1205);
                echo "').remove();return false;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            <i class=\"fa fa-trash-o\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        </a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    <div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs main_menu_block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-menu_general";
                // line 1211
                echo twig_get_attribute($this->env, $this->source, $context["oct_menu"], "oct_menu_id", [], "any", false, false, false, 1211);
                echo "\" data-toggle=\"tab\">";
                echo ($context["tab_menu_general"] ?? null);
                echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-menu_language";
                // line 1212
                echo twig_get_attribute($this->env, $this->source, $context["oct_menu"], "oct_menu_id", [], "any", false, false, false, 1212);
                echo "\" data-toggle=\"tab\">";
                echo ($context["tab_menu_language"] ?? null);
                echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-menu_links";
                // line 1213
                echo twig_get_attribute($this->env, $this->source, $context["oct_menu"], "oct_menu_id", [], "any", false, false, false, 1213);
                echo "\" data-toggle=\"tab\">";
                echo ($context["tab_menu_links"] ?? null);
                echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-menu_general";
                // line 1216
                echo twig_get_attribute($this->env, $this->source, $context["oct_menu"], "oct_menu_id", [], "any", false, false, false, 1216);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
                // line 1218
                echo ($context["text_menu_type"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"oct_megamenu[";
                // line 1220
                echo twig_get_attribute($this->env, $this->source, $context["oct_menu"], "oct_menu_id", [], "any", false, false, false, 1220);
                echo "][type]\" class=\"form-control menu_type\" id=\"menu_type-";
                echo twig_get_attribute($this->env, $this->source, $context["oct_menu"], "oct_menu_id", [], "any", false, false, false, 1220);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\" ";
                // line 1221
                echo (((twig_get_attribute($this->env, $this->source, $context["oct_menu"], "type", [], "any", false, false, false, 1221) == "")) ? ("selected=\"selected\"") : (""));
                echo ">";
                echo ($context["text_menu_select"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"category\" ";
                // line 1222
                echo (((twig_get_attribute($this->env, $this->source, $context["oct_menu"], "type", [], "any", false, false, false, 1222) == "category")) ? ("selected=\"selected\"") : (""));
                echo ">";
                echo ($context["text_menu_type_1"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"manufacturer\" ";
                // line 1223
                echo (((twig_get_attribute($this->env, $this->source, $context["oct_menu"], "type", [], "any", false, false, false, 1223) == "manufacturer")) ? ("selected=\"selected\"") : (""));
                echo ">";
                echo ($context["text_menu_type_2"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"oct_blogcategory\" ";
                // line 1224
                echo (((twig_get_attribute($this->env, $this->source, $context["oct_menu"], "type", [], "any", false, false, false, 1224) == "oct_blogcategory")) ? ("selected=\"selected\"") : (""));
                echo ">";
                echo ($context["text_menu_type_3"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"link\" ";
                // line 1225
                echo (((twig_get_attribute($this->env, $this->source, $context["oct_menu"], "type", [], "any", false, false, false, 1225) == "link")) ? ("selected=\"selected\"") : (""));
                echo ">";
                echo ($context["text_menu_type_4"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"oct_megamenu[";
                // line 1229
                echo twig_get_attribute($this->env, $this->source, $context["oct_menu"], "oct_menu_id", [], "any", false, false, false, 1229);
                echo "][setting]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["oct_menu"], "oct_menu_id", [], "any", false, false, false, 1229);
                echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
                // line 1231
                echo ($context["text_menu_display_option"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"oct_megamenu[";
                // line 1233
                echo twig_get_attribute($this->env, $this->source, $context["oct_menu"], "oct_menu_id", [], "any", false, false, false, 1233);
                echo "][display_option]\" class=\"form-control menu_display_option\" id=\"menu_display_option-";
                echo twig_get_attribute($this->env, $this->source, $context["oct_menu"], "oct_menu_id", [], "any", false, false, false, 1233);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\" ";
                // line 1234
                echo (((twig_get_attribute($this->env, $this->source, $context["oct_menu"], "display_option", [], "any", false, false, false, 1234) == "")) ? ("selected=\"selected\"") : (""));
                echo ">";
                echo ($context["text_menu_display_option_select"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"vertical\" ";
                // line 1235
                echo (((twig_get_attribute($this->env, $this->source, $context["oct_menu"], "display_option", [], "any", false, false, false, 1235) == "vertical")) ? ("selected=\"selected\"") : (""));
                echo ">";
                echo ($context["text_menu_display_option_1"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"horizontal\" ";
                // line 1236
                echo (((twig_get_attribute($this->env, $this->source, $context["oct_menu"], "display_option", [], "any", false, false, false, 1236) == "horizontal")) ? ("selected=\"selected\"") : (""));
                echo ">";
                echo ($context["text_menu_display_option_2"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"menu_settings-";
                // line 1240
                echo twig_get_attribute($this->env, $this->source, $context["oct_menu"], "oct_menu_id", [], "any", false, false, false, 1240);
                echo "\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-menu_language";
                // line 1242
                echo twig_get_attribute($this->env, $this->source, $context["oct_menu"], "oct_menu_id", [], "any", false, false, false, 1242);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
                // line 1243
                echo ($context["tab_menu_language"] ?? null);
                echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs menu_lang_block\" id=\"menu_item_language";
                // line 1244
                echo twig_get_attribute($this->env, $this->source, $context["oct_menu"], "oct_menu_id", [], "any", false, false, false, 1244);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 1245
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 1246
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#menu_item_language";
                    echo twig_get_attribute($this->env, $this->source, $context["oct_menu"], "oct_menu_id", [], "any", false, false, false, 1246);
                    echo "_";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1246);
                    echo "\" data-toggle=\"tab\"><img src=\"language/";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1246);
                    echo "/";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1246);
                    echo ".png\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1246);
                    echo "\" />  ";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1246);
                    echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1248
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 1250
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 1251
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"menu_item_language";
                    echo twig_get_attribute($this->env, $this->source, $context["oct_menu"], "oct_menu_id", [], "any", false, false, false, 1251);
                    echo "_";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1251);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-title";
                    // line 1253
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1253);
                    echo "\">";
                    echo ($context["entry_menu_title"] ?? null);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"oct_megamenu[";
                    // line 1255
                    echo twig_get_attribute($this->env, $this->source, $context["oct_menu"], "oct_menu_id", [], "any", false, false, false, 1255);
                    echo "][description][";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1255);
                    echo "][title]\" value=\"";
                    echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["oct_menu"], "description", [], "any", false, true, false, 1255), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1255), [], "array", true, true, false, 1255)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_7 = twig_get_attribute($this->env, $this->source, $context["oct_menu"], "description", [], "any", false, false, false, 1255)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1255)] ?? null) : null), "title", [], "any", false, false, false, 1255)) : (""));
                    echo "\" placeholder=\"";
                    echo ($context["entry_menu_title"] ?? null);
                    echo "\" id=\"input-title";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1255);
                    echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-link";
                    // line 1259
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1259);
                    echo "\">";
                    echo ($context["entry_menu_link"] ?? null);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"oct_megamenu[";
                    // line 1261
                    echo twig_get_attribute($this->env, $this->source, $context["oct_menu"], "oct_menu_id", [], "any", false, false, false, 1261);
                    echo "][description][";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1261);
                    echo "][link]\" value=\"";
                    echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["oct_menu"], "description", [], "any", false, true, false, 1261), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1261), [], "array", true, true, false, 1261)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_8 = twig_get_attribute($this->env, $this->source, $context["oct_menu"], "description", [], "any", false, false, false, 1261)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1261)] ?? null) : null), "link", [], "any", false, false, false, 1261)) : (""));
                    echo "\" placeholder=\"";
                    echo ($context["entry_menu_link"] ?? null);
                    echo "\" id=\"input-link";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1261);
                    echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1266
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-menu_links";
                // line 1268
                echo twig_get_attribute($this->env, $this->source, $context["oct_menu"], "oct_menu_id", [], "any", false, false, false, 1268);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
                // line 1270
                echo ($context["entry_menu_store"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 1273
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
                    // line 1274
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 1276
                    if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1276), twig_get_attribute($this->env, $this->source, $context["oct_menu"], "stories", [], "any", false, false, false, 1276))) {
                        // line 1277
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"oct_megamenu[";
                        echo twig_get_attribute($this->env, $this->source, $context["oct_menu"], "oct_menu_id", [], "any", false, false, false, 1277);
                        echo "][stories][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1277);
                        echo "\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 1278
                        echo (($__internal_compile_9 = $context["store"]) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["name"] ?? null) : null);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 1280
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"oct_megamenu[";
                        echo twig_get_attribute($this->env, $this->source, $context["oct_menu"], "oct_menu_id", [], "any", false, false, false, 1280);
                        echo "][stories][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1280);
                        echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 1281
                        echo (($__internal_compile_10 = $context["store"]) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["name"] ?? null) : null);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 1283
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1286
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-priority\">";
                // line 1290
                echo ($context["entry_menu_customers"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 1293
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                    // line 1294
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 1296
                    if (twig_in_filter(0, twig_get_attribute($this->env, $this->source, $context["oct_menu"], "customers", [], "any", false, false, false, 1296))) {
                        // line 1297
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"oct_megamenu[";
                        echo twig_get_attribute($this->env, $this->source, $context["oct_menu"], "oct_menu_id", [], "any", false, false, false, 1297);
                        echo "][customers][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1297);
                        echo "\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 1298
                        echo (($__internal_compile_11 = $context["customer_group"]) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["name"] ?? null) : null);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 1300
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1300), twig_get_attribute($this->env, $this->source, $context["oct_menu"], "customers", [], "any", false, false, false, 1300))) {
                            // line 1301
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"oct_megamenu[";
                            echo twig_get_attribute($this->env, $this->source, $context["oct_menu"], "oct_menu_id", [], "any", false, false, false, 1301);
                            echo "][customers][]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1301);
                            echo "\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 1302
                            echo (($__internal_compile_12 = $context["customer_group"]) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["name"] ?? null) : null);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 1304
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"oct_megamenu[";
                            echo twig_get_attribute($this->env, $this->source, $context["oct_menu"], "oct_menu_id", [], "any", false, false, false, 1304);
                            echo "][customers][]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1304);
                            echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 1305
                            echo (($__internal_compile_13 = $context["customer_group"]) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["name"] ?? null) : null);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 1307
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 1308
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1311
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 1318
                $context["menu_id"] = (($context["menu_id"] ?? null) + 1);
                // line 1319
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_menu'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1320
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1321
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"empty_locations\">";
            echo ($context["text_menuitems_empty"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1323
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"btn btn-primary\" id=\"menuitem_add\" onclick=\"addNewMenuItem();\">";
        // line 1325
        echo ($context["text_add_menuitem"] ?? null);
        echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-header-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 1331
        echo ($context["tab_header"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label mb-3\" for=\"input-header_information_links\"><span data-toggle=\"tooltip\" title=\"";
        // line 1333
        echo ($context["help_links"] ?? null);
        echo "\">";
        echo ($context["entry_footer_information_links"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"header_advantages\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"table table-striped table-bordered table-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>";
        // line 1339
        echo ($context["column_name_link"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>";
        // line 1340
        echo ($context["column_action"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1344
        $context["header_advantages_row"] = 0;
        // line 1345
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "header_links", [], "any", false, false, false, 1345));
        foreach ($context['_seq'] as $context["_key"] => $context["header_link"]) {
            // line 1346
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr id=\"header_advantage-row";
            echo ($context["header_advantages_row"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"header_advantage_link\" value=\"\" placeholder=\"";
            // line 1349
            echo ($context["entry_footer_information_links"] ?? null);
            echo "\" id=\"header_advantage-";
            echo ($context["header_advantages_row"] ?? null);
            echo "\" class=\"form-control\" autocomplete=\"off\" /><hr />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1352
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 1353
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"language/";
                // line 1355
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1355);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1355);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1355);
                echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\"Title\" name=\"theme_oct_deals_data[header_links][";
                // line 1357
                echo ($context["header_advantages_row"] ?? null);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1357);
                echo "][title]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, (($__internal_compile_14 = $context["header_link"]) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1357)] ?? null) : null), "title", [], "any", false, false, false, 1357);
                echo "\" id=\"header_advantages_row-title-";
                echo ($context["header_advantages_row"] ?? null);
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1357);
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1360
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1362
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 1363
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"language/";
                // line 1365
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1365);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1365);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1365);
                echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\"Link\" name=\"theme_oct_deals_data[header_links][";
                // line 1367
                echo ($context["header_advantages_row"] ?? null);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1367);
                echo "][link]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, (($__internal_compile_15 = $context["header_link"]) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1367)] ?? null) : null), "link", [], "any", false, false, false, 1367);
                echo "\" id=\"header_advantages_row-href-";
                echo ($context["header_advantages_row"] ?? null);
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1367);
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1370
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\" style=\"width:5%;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" onclick=\"\$('#header_advantage-row";
            // line 1373
            echo ($context["header_advantages_row"] ?? null);
            echo "').remove()\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1376
            $context["header_advantages_row"] = (($context["header_advantages_row"] ?? null) + 1);
            // line 1377
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['header_link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1378
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\" style=\"width:5%;\"><button type=\"button\" onclick=\"addHeaderAdvantage();\" data-toggle=\"tooltip\" title=\"";
        // line 1382
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tfoot>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-footer-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 1393
        echo ($context["tab_footer"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label mb-3\" for=\"input-footer_information_links\"><span data-toggle=\"tooltip\" title=\"";
        // line 1394
        echo ($context["help_links"] ?? null);
        echo "\">";
        echo ($context["entry_footer_information_links"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"footer_advantages\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"table table-striped table-bordered table-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>";
        // line 1400
        echo ($context["column_name_link"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>";
        // line 1401
        echo ($context["column_action"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1405
        $context["footer_advantages_row"] = 0;
        // line 1406
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "footer_links", [], "any", false, false, false, 1406));
        foreach ($context['_seq'] as $context["_key"] => $context["footer_link"]) {
            // line 1407
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr id=\"footer_advantage-row";
            echo ($context["footer_advantages_row"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"footer_advantage_link\" value=\"\" placeholder=\"";
            // line 1410
            echo ($context["entry_footer_information_links"] ?? null);
            echo "\" id=\"footer_advantage-";
            echo ($context["footer_advantages_row"] ?? null);
            echo "\" class=\"form-control\" autocomplete=\"off\" /><hr />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1413
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 1414
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"language/";
                // line 1416
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1416);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1416);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1416);
                echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\"Title\" name=\"theme_oct_deals_data[footer_links][";
                // line 1418
                echo ($context["footer_advantages_row"] ?? null);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1418);
                echo "][title]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, (($__internal_compile_16 = $context["footer_link"]) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1418)] ?? null) : null), "title", [], "any", false, false, false, 1418);
                echo "\" id=\"footer_advantages_row-title-";
                echo ($context["footer_advantages_row"] ?? null);
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1418);
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1421
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1423
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 1424
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"language/";
                // line 1426
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1426);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1426);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1426);
                echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\"Link\" name=\"theme_oct_deals_data[footer_links][";
                // line 1428
                echo ($context["footer_advantages_row"] ?? null);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1428);
                echo "][link]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, (($__internal_compile_17 = $context["footer_link"]) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1428)] ?? null) : null), "link", [], "any", false, false, false, 1428);
                echo "\" id=\"footer_advantages_row-href-";
                echo ($context["footer_advantages_row"] ?? null);
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1428);
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1431
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\" style=\"width:5%;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" onclick=\"\$('#footer_advantage-row";
            // line 1434
            echo ($context["footer_advantages_row"] ?? null);
            echo "').remove()\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1437
            $context["footer_advantages_row"] = (($context["footer_advantages_row"] ?? null) + 1);
            // line 1438
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['footer_link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1439
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\" style=\"width:5%;\"><button type=\"button\" onclick=\"addFooterAdvantage();\" data-toggle=\"tooltip\" title=\"";
        // line 1443
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tfoot>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-footer_link_contact\">";
        // line 1450
        echo ($context["entry_footer_link_contact"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[footer_link_contact]\" ";
        // line 1453
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "footer_link_contact", [], "any", false, false, false, 1453)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-footer_link_contact\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-footer_link_contact\"></label>
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-footer_link_return\">";
        // line 1465
        echo ($context["entry_footer_link_return"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[footer_link_return]\" ";
        // line 1468
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "footer_link_return", [], "any", false, false, false, 1468)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-footer_link_return\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-footer_link_return\"></label>
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-footer_link_sitemap\">";
        // line 1480
        echo ($context["entry_footer_link_sitemap"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[footer_link_sitemap]\" ";
        // line 1483
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "footer_link_sitemap", [], "any", false, false, false, 1483)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-footer_link_sitemap\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-footer_link_sitemap\"></label>
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-footer_link_man\">";
        // line 1495
        echo ($context["entry_footer_link_man"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[footer_link_man]\" ";
        // line 1498
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "footer_link_man", [], "any", false, false, false, 1498)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-footer_link_man\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-footer_link_man\"></label>
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-footer_link_cert\">";
        // line 1510
        echo ($context["entry_footer_link_cert"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[footer_link_cert]\" ";
        // line 1513
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "footer_link_cert", [], "any", false, false, false, 1513)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-footer_link_cert\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-footer_link_cert\"></label>
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-footer_link_specials\">";
        // line 1525
        echo ($context["entry_footer_link_specials"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[footer_link_specials]\" ";
        // line 1528
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "footer_link_specials", [], "any", false, false, false, 1528)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-footer_link_specials\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-footer_link_specials\"></label>
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-category\"><span data-toggle=\"tooltip\" title=\"";
        // line 1540
        echo ($context["help_links"] ?? null);
        echo "\">";
        echo ($context["entry_footer_category_links"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"category\" value=\"\" placeholder=\"";
        // line 1542
        echo ($context["entry_footer_category_links"] ?? null);
        echo "\" id=\"input-category\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"product-category\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1544
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links_categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 1545
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"product-category";
            echo twig_get_attribute($this->env, $this->source, ($context["product_category"] ?? null), "category_id", [], "any", false, false, false, 1545);
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 1545);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"theme_oct_deals_data[footer_category_links][]\" value=\"";
            // line 1546
            echo twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 1546);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1549
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-category\">
\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 1558
        echo ($context["text_general"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-category_subcategory_photo\">";
        // line 1560
        echo ($context["entry_category_subcategory_photo"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[category_subcategory_photo]\" ";
        // line 1563
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "category_subcategory_photo", [], "any", false, false, false, 1563)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-category_subcategory_photo\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-category_subcategory_photo\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-no_quantity_last\">";
        // line 1575
        echo ($context["entry_no_quantity_last"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_no_quantity_last\" ";
        // line 1578
        if (($context["theme_oct_deals_no_quantity_last"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-no_quantity_last\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-no_quantity_last\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-category_model\">";
        // line 1590
        echo ($context["entry_product_model"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data_model\" ";
        // line 1593
        if (($context["theme_oct_deals_data_model"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-category_model\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-category_model\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-atributes_category\">";
        // line 1605
        echo ($context["text_atributes"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data_atributes\" ";
        // line 1608
        if (($context["theme_oct_deals_data_atributes"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-atributes_category\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-atributes_category\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-atributes_category_limit\">";
        // line 1620
        echo ($context["text_atributes_limit"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"input-atributes_category_limit\" name=\"theme_oct_deals_data_cat_atr_limit\" value=\"";
        // line 1622
        echo ($context["theme_oct_deals_data_cat_atr_limit"] ?? null);
        echo "\" class=\"form-control\" placeholder=\"";
        echo ($context["text_atributes_limit"] ?? null);
        echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-category_view_sort_oder\">";
        // line 1626
        echo ($context["entry_category_view_sort_oder"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[category_view_sort_oder]\" ";
        // line 1629
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "category_view_sort_oder", [], "any", false, false, false, 1629)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-category_view_sort_oder\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-category_view_sort_oder\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-category_view_quantity\">";
        // line 1641
        echo ($context["entry_category_view_quantity"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[category_view_quantity]\" ";
        // line 1644
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "category_view_quantity", [], "any", false, false, false, 1644)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-category_view_quantity\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-category_view_quantity\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-category_show_more\">";
        // line 1656
        echo ($context["entry_category_show_more"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[category_show_more]\" ";
        // line 1659
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "category_show_more", [], "any", false, false, false, 1659)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-category_show_more\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-category_show_more\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-category_infinite_scroll\">";
        // line 1671
        echo ($context["entry_category_infinite_scroll"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[category_infinite_scroll]\" ";
        // line 1674
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "category_infinite_scroll", [], "any", false, false, false, 1674)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-category_infinite_scroll\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-category_infinite_scroll\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"select-category_show_type\">";
        // line 1686
        echo ($context["entry_category_show_type"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<select id=\"select-category_show_type\" name=\"theme_oct_deals_data[category_show_type]\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\" ";
        // line 1689
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "category_show_type", [], "any", false, false, false, 1689) == "")) {
            echo "selected=\"selected\"";
        }
        echo ">";
        echo ($context["entry_category_show_type_deff"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"width-100\" ";
        // line 1690
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "category_show_type", [], "any", false, false, false, 1690) == "width-100")) {
            echo "selected=\"selected\"";
        }
        echo ">";
        echo ($context["entry_category_show_type_100"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"width-50\" ";
        // line 1691
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "category_show_type", [], "any", false, false, false, 1691) == "width-50")) {
            echo "selected=\"selected\"";
        }
        echo ">";
        echo ($context["entry_category_show_type_50"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label mb-3\" for=\"input-category_view_sort_oder\">";
        // line 1696
        echo ($context["entry_category_sorts"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"table table-bordered\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 1701
        echo ($context["col_status_sort_order"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
        // line 1702
        echo ($context["col_status_name"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 1703
        echo ($context["col_status_deff"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_sort_data[sort][]\" value=\"p.sort_order-ASC\" ";
        // line 1709
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "sort", [], "any", true, true, false, 1709) && twig_in_filter("p.sort_order-ASC", twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "sort", [], "any", false, false, false, 1709)))) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-p_sort_order-ASC\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1712
        echo ($context["text_p_sort_order_ASC"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_oct_deals_sort_data[deff_sort]\" value=\"p.sort_order-ASC\" ";
        // line 1715
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "deff_sort", [], "any", true, true, false, 1715) && (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "deff_sort", [], "any", false, false, false, 1715) == "p.sort_order-ASC"))) {
            echo "checked=\"checked\"";
        }
        echo " />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_sort_data[sort][]\" value=\"p.sort_order-DESC\" ";
        // line 1720
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "sort", [], "any", true, true, false, 1720) && twig_in_filter("p.sort_order-DESC", twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "sort", [], "any", false, false, false, 1720)))) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-p_sort_order-DESC\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1723
        echo ($context["text_p_sort_order_DESC"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_oct_deals_sort_data[deff_sort]\" value=\"p.sort_order-DESC\" ";
        // line 1726
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "deff_sort", [], "any", true, true, false, 1726) && (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "deff_sort", [], "any", false, false, false, 1726) == "p.sort_order-DESC"))) {
            echo "checked=\"checked\"";
        }
        echo " />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_sort_data[sort][]\" value=\"pd.name-ASC\" ";
        // line 1731
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "sort", [], "any", true, true, false, 1731) && twig_in_filter("pd.name-ASC", twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "sort", [], "any", false, false, false, 1731)))) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-pd_name-ASC\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1734
        echo ($context["text_pd_name_ASC"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_oct_deals_sort_data[deff_sort]\" value=\"pd.name-ASC\" ";
        // line 1737
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "deff_sort", [], "any", true, true, false, 1737) && (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "deff_sort", [], "any", false, false, false, 1737) == "pd.name-ASC"))) {
            echo "checked=\"checked\"";
        }
        echo " />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_sort_data[sort][]\" value=\"pd.name-DESC\" ";
        // line 1742
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "sort", [], "any", true, true, false, 1742) && twig_in_filter("pd.name-DESC", twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "sort", [], "any", false, false, false, 1742)))) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-pd_name-DESC\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1745
        echo ($context["text_pd_name_DESC"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_oct_deals_sort_data[deff_sort]\" value=\"pd.name-DESC\" ";
        // line 1748
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "deff_sort", [], "any", true, true, false, 1748) && (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "deff_sort", [], "any", false, false, false, 1748) == "pd.name-DESC"))) {
            echo "checked=\"checked\"";
        }
        echo " />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_sort_data[sort][]\" value=\"p.price-ASC\" ";
        // line 1753
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "sort", [], "any", true, true, false, 1753) && twig_in_filter("p.price-ASC", twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "sort", [], "any", false, false, false, 1753)))) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-p_price-ASC\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1756
        echo ($context["text_p_price_ASC"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_oct_deals_sort_data[deff_sort]\" value=\"p.price-ASC\" ";
        // line 1759
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "deff_sort", [], "any", true, true, false, 1759) && (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "deff_sort", [], "any", false, false, false, 1759) == "p.price-ASC"))) {
            echo "checked=\"checked\"";
        }
        echo " />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_sort_data[sort][]\" value=\"p.price-DESC\" ";
        // line 1764
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "sort", [], "any", true, true, false, 1764) && twig_in_filter("p.price-DESC", twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "sort", [], "any", false, false, false, 1764)))) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-p_price-DESC\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1767
        echo ($context["text_p_price_DESC"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_oct_deals_sort_data[deff_sort]\" value=\"p.price-DESC\" ";
        // line 1770
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "deff_sort", [], "any", true, true, false, 1770) && (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "deff_sort", [], "any", false, false, false, 1770) == "p.price-DESC"))) {
            echo "checked=\"checked\"";
        }
        echo " />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_sort_data[sort][]\" value=\"p.model-ASC\" ";
        // line 1775
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "sort", [], "any", true, true, false, 1775) && twig_in_filter("p.model-ASC", twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "sort", [], "any", false, false, false, 1775)))) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-p_model-ASC\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1778
        echo ($context["text_p_model_ASC"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_oct_deals_sort_data[deff_sort]\" value=\"p.model-ASC\" ";
        // line 1781
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "deff_sort", [], "any", true, true, false, 1781) && (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "deff_sort", [], "any", false, false, false, 1781) == "p.model-ASC"))) {
            echo "checked=\"checked\"";
        }
        echo " />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_sort_data[sort][]\" value=\"p.model-DESC\" ";
        // line 1786
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "sort", [], "any", true, true, false, 1786) && twig_in_filter("p.model-DESC", twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "sort", [], "any", false, false, false, 1786)))) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-p_model-DESC\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1789
        echo ($context["text_p_model_DESC"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_oct_deals_sort_data[deff_sort]\" value=\"p.model-DESC\" ";
        // line 1792
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "deff_sort", [], "any", true, true, false, 1792) && (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "deff_sort", [], "any", false, false, false, 1792) == "p.model-DESC"))) {
            echo "checked=\"checked\"";
        }
        echo " />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_sort_data[sort][]\" value=\"p.quantity-ASC\" ";
        // line 1797
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "sort", [], "any", true, true, false, 1797) && twig_in_filter("p.quantity-ASC", twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "sort", [], "any", false, false, false, 1797)))) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-p_quantity-ASC\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1800
        echo ($context["text_p_quantity_ASC"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_oct_deals_sort_data[deff_sort]\" value=\"p.quantity-ASC\" ";
        // line 1803
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "deff_sort", [], "any", true, true, false, 1803) && (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "deff_sort", [], "any", false, false, false, 1803) == "p.quantity-ASC"))) {
            echo "checked=\"checked\"";
        }
        echo " />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_sort_data[sort][]\" value=\"p.quantity-DESC\" ";
        // line 1808
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "sort", [], "any", true, true, false, 1808) && twig_in_filter("p.quantity-DESC", twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "sort", [], "any", false, false, false, 1808)))) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-p_quantity-DESC\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1811
        echo ($context["text_p_quantity_DESC"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_oct_deals_sort_data[deff_sort]\" value=\"p.quantity-DESC\" ";
        // line 1814
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "deff_sort", [], "any", true, true, false, 1814) && (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "deff_sort", [], "any", false, false, false, 1814) == "p.quantity-DESC"))) {
            echo "checked=\"checked\"";
        }
        echo " />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_sort_data[sort][]\" value=\"p.viewed-ASC\" ";
        // line 1819
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "sort", [], "any", true, true, false, 1819) && twig_in_filter("p.viewed-ASC", twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "sort", [], "any", false, false, false, 1819)))) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-p_viewed-ASC\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1822
        echo ($context["text_p_viewed_ASC"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_oct_deals_sort_data[deff_sort]\" value=\"p.viewed-ASC\" ";
        // line 1825
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "deff_sort", [], "any", true, true, false, 1825) && (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "deff_sort", [], "any", false, false, false, 1825) == "p.viewed-ASC"))) {
            echo "checked=\"checked\"";
        }
        echo " />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_sort_data[sort][]\" value=\"p.viewed-DESC\" ";
        // line 1830
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "sort", [], "any", true, true, false, 1830) && twig_in_filter("p.viewed-DESC", twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "sort", [], "any", false, false, false, 1830)))) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-p_viewed-DESC\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1833
        echo ($context["text_p_viewed_DESC"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_oct_deals_sort_data[deff_sort]\" value=\"p.viewed-DESC\" ";
        // line 1836
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "deff_sort", [], "any", true, true, false, 1836) && (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "deff_sort", [], "any", false, false, false, 1836) == "p.viewed-DESC"))) {
            echo "checked=\"checked\"";
        }
        echo " />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_sort_data[sort][]\" value=\"p.date_added-ASC\" ";
        // line 1841
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "sort", [], "any", true, true, false, 1841) && twig_in_filter("p.date_added-ASC", twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "sort", [], "any", false, false, false, 1841)))) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-p_date_added-ASC\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1844
        echo ($context["text_p_date_added_ASC"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_oct_deals_sort_data[deff_sort]\" value=\"p.date_added-ASC\" ";
        // line 1847
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "deff_sort", [], "any", true, true, false, 1847) && (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "deff_sort", [], "any", false, false, false, 1847) == "p.date_added-ASC"))) {
            echo "checked=\"checked\"";
        }
        echo " />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_sort_data[sort][]\" value=\"p.date_added-DESC\" ";
        // line 1852
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "sort", [], "any", true, true, false, 1852) && twig_in_filter("p.date_added-DESC", twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "sort", [], "any", false, false, false, 1852)))) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-p_date_added-DESC\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1855
        echo ($context["text_p_date_added_DESC"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_oct_deals_sort_data[deff_sort]\" value=\"p.date_added-DESC\" ";
        // line 1858
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "deff_sort", [], "any", true, true, false, 1858) && (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "deff_sort", [], "any", false, false, false, 1858) == "p.date_added-DESC"))) {
            echo "checked=\"checked\"";
        }
        echo " />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_sort_data[sort][]\" value=\"rating-ASC\" ";
        // line 1863
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "sort", [], "any", true, true, false, 1863) && twig_in_filter("rating-ASC", twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "sort", [], "any", false, false, false, 1863)))) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-rating-ASC\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1866
        echo ($context["text_rating_ASC"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_oct_deals_sort_data[deff_sort]\" value=\"rating-ASC\" ";
        // line 1869
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "deff_sort", [], "any", true, true, false, 1869) && (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "deff_sort", [], "any", false, false, false, 1869) == "rating-ASC"))) {
            echo "checked=\"checked\"";
        }
        echo " />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_sort_data[sort][]\" value=\"rating-DESC\" ";
        // line 1874
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "sort", [], "any", true, true, false, 1874) && twig_in_filter("rating-DESC", twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "sort", [], "any", false, false, false, 1874)))) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-rating-DESC\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1877
        echo ($context["text_rating_DESC"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_oct_deals_sort_data[deff_sort]\" value=\"rating-DESC\" ";
        // line 1880
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "deff_sort", [], "any", true, true, false, 1880) && (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_sort_data"] ?? null), "deff_sort", [], "any", false, false, false, 1880) == "rating-DESC"))) {
            echo "checked=\"checked\"";
        }
        echo " />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" onclick=\"\$(this).prev().find(':checkbox').attr('checked', true);\">";
        // line 1885
        echo ($context["text_all_select"] ?? null);
        echo "</a> / <a href=\"javascript:;\" onclick=\"\$(this).prev().prev().find(':checkbox').attr('checked', false);\">";
        echo ($context["text_remove_select"] ?? null);
        echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t    <legend>";
        // line 1890
        echo ($context["text_product_limits"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0 required\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-catalog-limit\"><span data-toggle=\"tooltip\" title=\"";
        // line 1892
        echo ($context["help_product_limit"] ?? null);
        echo "\">";
        echo ($context["entry_product_limit"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_product_limit\" value=\"";
        // line 1894
        echo ($context["theme_oct_deals_product_limit"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_product_limit"] ?? null);
        echo "\" id=\"input-catalog-limit\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1895
        if (($context["error_product_limit"] ?? null)) {
            // line 1896
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tusNotify('warning', '";
            // line 1898
            echo ($context["error_product_limit"] ?? null);
            echo "');
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1902
        echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0 required\" style=\"display: none;\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-description-limit\"><span data-toggle=\"tooltip\" title=\"";
        // line 1905
        echo ($context["help_product_description_length"] ?? null);
        echo "\">";
        echo ($context["entry_product_description_length"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_product_description_length\" value=\"";
        // line 1907
        echo ($context["theme_oct_deals_product_description_length"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_product_description_length"] ?? null);
        echo "\" id=\"input-description-limit\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1908
        if (($context["error_product_description_length"] ?? null)) {
            // line 1909
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tusNotify('warning', '";
            // line 1911
            echo ($context["error_product_description_length"] ?? null);
            echo "');
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1915
        echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 1919
        echo ($context["text_categoty_page"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-category_desc_in_page\">";
        // line 1921
        echo ($context["entry_category_desc_in_page"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[category_desc_in_page]\" ";
        // line 1924
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "category_desc_in_page", [], "any", false, false, false, 1924)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-category_desc_in_page\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-category_desc_in_page\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"select-category_desc_position\">";
        // line 1936
        echo ($context["entry_category_desc_position"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<select id=\"select-category_desc_position\" name=\"theme_oct_deals_data[category_desc_position]\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"top\" ";
        // line 1939
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "category_desc_position", [], "any", false, false, false, 1939) == "top")) {
            echo "selected=\"selected\"";
        }
        echo ">";
        echo ($context["entry_category_desc_position_top"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"bottom\" ";
        // line 1940
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "category_desc_position", [], "any", false, false, false, 1940) == "bottom")) {
            echo "selected=\"selected\"";
        }
        echo ">";
        echo ($context["entry_category_desc_position_bottom"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-category_desc_up\">";
        // line 1945
        echo ($context["entry_category_desc_up"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[category_desc_up]\" ";
        // line 1948
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "category_desc_up", [], "any", false, false, false, 1948)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-category_desc_up\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-category_desc_up\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-category_view_subcats\">";
        // line 1960
        echo ($context["entry_category_view_subcats"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[category_view_subcats]\" ";
        // line 1963
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "category_view_subcats", [], "any", false, false, false, 1963)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-category_view_subcats\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-category_view_subcats\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-category_subcat_products\">";
        // line 1975
        echo ($context["entry_category_subcat_products"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[category_subcat_products]\" ";
        // line 1978
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "category_subcat_products", [], "any", false, false, false, 1978)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-category_subcat_products\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-category_subcat_products\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-category_cat_image\">";
        // line 1990
        echo ($context["entry_category_cat_image"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[category_cat_image]\" ";
        // line 1993
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "category_cat_image", [], "any", false, false, false, 1993)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-category_cat_image\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-category_cat_image\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-category_cat_image\">";
        // line 2005
        echo ($context["entry_category_page"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[category_page]\" ";
        // line 2008
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "category_page", [], "any", false, false, false, 2008)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-category_page\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-category_page\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 2021
        echo ($context["text_manufacture_page"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-man_logo\">";
        // line 2023
        echo ($context["entry_man_logo"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[man_logo]\" ";
        // line 2026
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "man_logo", [], "any", false, false, false, 2026)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-man_logo\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-man_logo\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-product\">
\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 2041
        echo ($context["tab_product"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-product_model\">";
        // line 2043
        echo ($context["entry_product_model"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[product_model]\" ";
        // line 2046
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "product_model", [], "any", false, false, false, 2046)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-product_model\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-product_model\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 2057
        if (($context["hasblog"] ?? null)) {
            // line 2058
            echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-product_blog_related\">";
            // line 2059
            echo ($context["entry_product_blog_related"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[product_blog_related]\" ";
            // line 2062
            if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "product_blog_related", [], "any", false, false, false, 2062)) {
                echo "checked=\"checked\"";
            }
            echo " id=\"input-product_blog_related\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-product_blog_related\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 2074
        echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-product_atributes\">";
        // line 2075
        echo ($context["entry_product_atributes"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[product_atributes]\" ";
        // line 2078
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "product_atributes", [], "any", false, false, false, 2078)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-product_atributes\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-product_atributes\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-atributes_product_limit\">";
        // line 2090
        echo ($context["text_atributes_limit"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"input-atributes_product_limit\" name=\"theme_oct_deals_data_pr_atr_limit\" value=\"";
        // line 2092
        echo ($context["theme_oct_deals_data_pr_atr_limit"] ?? null);
        echo "\" class=\"form-control\" placeholder=\"";
        echo ($context["text_atributes_limit"] ?? null);
        echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-theme_oct_deals_data_pr_reviews_limit\">";
        // line 2096
        echo ($context["text_reviews_limit"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"input-theme_oct_deals_data_pr_reviews_limit\" name=\"theme_oct_deals_data_pr_reviews_limit\" value=\"";
        // line 2098
        echo ((array_key_exists("theme_oct_deals_data_pr_reviews_limit", $context)) ? (($context["theme_oct_deals_data_pr_reviews_limit"] ?? null)) : (20));
        echo "\" class=\"form-control\" placeholder=\"";
        echo ($context["text_reviews_limit"] ?? null);
        echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-product_zoom\">";
        // line 2102
        echo ($context["entry_product_zoom"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[product_zoom]\" ";
        // line 2105
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "product_zoom", [], "any", false, false, false, 2105)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-product_zoom\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-product_zoom\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-product_faq\">";
        // line 2117
        echo ($context["entry_product_faq"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[product_faq]\" ";
        // line 2120
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "product_faq", [], "any", false, false, false, 2120)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-product_faq\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-product_faq\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-product_timer\">";
        // line 2132
        echo ($context["entry_product_timer"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[product_timer]\" ";
        // line 2135
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "product_timer", [], "any", false, false, false, 2135)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-product_timer\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-product_timer\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-product-sets\">";
        // line 2147
        echo ($context["entry_product_sets"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[product_sets]\" ";
        // line 2150
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "product_sets", [], "any", false, false, false, 2150)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-product-sets\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-product-sets\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-product_quantity_show\">";
        // line 2162
        echo ($context["entry_product_quantity_show"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[product_quantity_show]\" ";
        // line 2165
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "product_quantity_show", [], "any", false, false, false, 2165)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-product_quantity_show\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-product_quantity_show\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-product_sku_show\">";
        // line 2177
        echo ($context["entry_product_sku_show"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[product_sku_show]\" ";
        // line 2180
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "product_sku_show", [], "any", false, false, false, 2180)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-product_sku_show\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-product_sku_show\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-product_upc_show\">";
        // line 2192
        echo ($context["entry_product_upc_show"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[product_upc_show]\" ";
        // line 2195
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "product_upc_show", [], "any", false, false, false, 2195)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-product_upc_show\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-product_upc_show\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-product_ean_show\">";
        // line 2207
        echo ($context["entry_product_ean_show"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[product_ean_show]\" ";
        // line 2210
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "product_ean_show", [], "any", false, false, false, 2210)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-product_ean_show\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-product_ean_show\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-product_jan_show\">";
        // line 2222
        echo ($context["entry_product_jan_show"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[product_jan_show]\" ";
        // line 2225
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "product_jan_show", [], "any", false, false, false, 2225)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-product_jan_show\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-product_jan_show\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-product_isbn_show\">";
        // line 2237
        echo ($context["entry_product_isbn_show"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[product_isbn_show]\" ";
        // line 2240
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "product_isbn_show", [], "any", false, false, false, 2240)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-product_isbn_show\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-product_isbn_show\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-product_mpn_show\">";
        // line 2252
        echo ($context["entry_product_mpn_show"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[product_mpn_show]\" ";
        // line 2255
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "product_mpn_show", [], "any", false, false, false, 2255)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-product_mpn_show\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-product_mpn_show\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-product_dop_tab\">";
        // line 2267
        echo ($context["entry_product_dop_tab"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[product_dop_tab]\" ";
        // line 2270
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "product_dop_tab", [], "any", false, false, false, 2270)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-product_dop_tab\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-product_dop_tab\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div id=\"product_dop_tabs_text\" class=\"form-group mx-0\"";
        // line 2281
        if (( !twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "product_dop_tab", [], "any", true, true, false, 2281) || (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "product_dop_tab", [], "any", true, true, false, 2281) &&  !twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "product_dop_tab", [], "any", false, false, false, 2281)))) {
            echo "style=\"display:none\"";
        }
        echo ">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label mb-3\" for=\"input-product_dop_tab_ttt\">";
        // line 2282
        echo ($context["entry_product_dop_tab_ttt"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"product_dop_tab-language\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 2285
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 2286
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#product_dop_tab-language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2286);
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 2286);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 2286);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 2286);
            echo "\" /> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 2286);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2288
        echo "\t\t\t\t\t\t\t\t                    </ul>
\t\t\t\t\t\t\t\t                    <div class=\"tab-content\">
\t\t\t\t\t\t\t                        \t";
        // line 2290
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 2291
            echo "\t\t\t\t\t\t\t                            <div class=\"tab-pane\" id=\"product_dop_tab-language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2291);
            echo "\">
\t\t\t\t\t\t\t                            \t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t                            \t\t<input type=\"text\" name=\"theme_oct_deals_data[product_dop_tab_title][";
            // line 2293
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2293);
            echo "]\" value=\"";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "product_dop_tab_title", [], "any", false, true, false, 2293), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2293), [], "array", true, true, false, 2293)) ? ((($__internal_compile_18 = twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "product_dop_tab_title", [], "any", false, false, false, 2293)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2293)] ?? null) : null)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_product_dop_tab_title"] ?? null);
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t                            \t</div>
\t\t\t\t\t\t\t                            \t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea id=\"product_dop_tab";
            // line 2296
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2296);
            echo "\" data-toggle=\"summernote\" data-lang=\"";
            echo ($context["summernote"] ?? null);
            echo "\" name=\"theme_oct_deals_data[product_dop_tab_text][";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2296);
            echo "]\" rows=\"5\" placeholder=\"";
            echo ($context["entry_product_dop_tab_text"] ?? null);
            echo "\" class=\"form-control\">";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "product_dop_tab_text", [], "any", false, true, false, 2296), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2296), [], "array", true, true, false, 2296)) ? ((($__internal_compile_19 = twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "product_dop_tab_text", [], "any", false, false, false, 2296)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2296)] ?? null) : null)) : (""));
            echo "</textarea>
\t\t\t\t\t\t\t                            \t</div>
\t\t\t\t\t\t\t                            </div>
\t\t\t\t\t\t\t                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2300
        echo "\t\t\t\t\t\t\t\t                    </div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-product_js_button\"><span data-toggle=\"tooltip\" title=\"\" data-original-title=\"";
        // line 2304
        echo ($context["help_product_js_button"] ?? null);
        echo "\">";
        echo ($context["entry_product_js_button"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea rows=\"5\" name=\"theme_oct_deals_data[product_js_button]\" placeholder=\"";
        // line 2306
        echo ($context["entry_product_js_button"] ?? null);
        echo "\" id=\"input-product_js_button\" class=\"form-control\">";
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "product_js_button", [], "any", false, false, false, 2306);
        echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- delivery_section -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 2312
        echo ($context["text_delivery_section"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"delivery-blocks\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 2314
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "product_delivery", [], "any", false, false, false, 2314));
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
        foreach ($context['_seq'] as $context["_key"] => $context["product_delivery"]) {
            // line 2315
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            $context["delivery_row"] = twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 2315);
            // line 2316
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"delivery-block\" style=\"background: #f9f9f9; border-radius: 10px;\" id=\"delivery-block-";
            echo ($context["delivery_row"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-product-delivery-image";
            // line 2319
            echo ($context["delivery_row"] ?? null);
            echo "\">";
            echo ($context["text_image"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" id=\"delivery-block-thumb-image";
            // line 2321
            echo ($context["delivery_row"] ?? null);
            echo "\" data-toggle=\"image\" class=\"img-thumbnail\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 2322
            echo twig_get_attribute($this->env, $this->source, $context["product_delivery"], "image_cached", [], "any", false, false, false, 2322);
            echo "\" alt=\"\" title=\"\" data-placeholder=\"";
            echo ($context["placeholder"] ?? null);
            echo "\" width=\"50\" height=\"50\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"theme_oct_deals_data[product_delivery][";
            // line 2324
            echo ($context["delivery_row"] ?? null);
            echo "][image]\" id=\"input-product-delivery-image";
            echo ($context["delivery_row"] ?? null);
            echo "\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_delivery"], "image", [], "any", false, false, false, 2324);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"delivery-language-tabs-";
            // line 2327
            echo ($context["delivery_row"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2328
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
                // line 2329
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li ";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 2329)) {
                    echo " class=\"active\" ";
                }
                echo ">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#delivery-language-";
                // line 2330
                echo ($context["delivery_row"] ?? null);
                echo "-";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2330);
                echo "\" data-toggle=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"language/";
                // line 2331
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 2331);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 2331);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 2331);
                echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 2332
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 2332);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
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
            // line 2336
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2338
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
                // line 2339
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 2339)) {
                    echo " active";
                }
                echo "\" id=\"delivery-language-";
                echo ($context["delivery_row"] ?? null);
                echo "-";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2339);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-title";
                // line 2341
                echo ($context["delivery_row"] ?? null);
                echo "\">";
                echo ($context["text_title"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\"><input type=\"text\" name=\"theme_oct_deals_data[product_delivery][";
                // line 2342
                echo ($context["delivery_row"] ?? null);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2342);
                echo "][title]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, (($__internal_compile_20 = $context["product_delivery"]) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2342)] ?? null) : null), "title", [], "any", false, false, false, 2342);
                echo "\" placeholder=\"";
                echo ($context["text_title"] ?? null);
                echo "\" id=\"input-title";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2342);
                echo ($context["delivery_row"] ?? null);
                echo "\" class=\"form-control\"/></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-price";
                // line 2345
                echo ($context["delivery_row"] ?? null);
                echo "\">";
                echo ($context["text_price"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\"><input type=\"text\" name=\"theme_oct_deals_data[product_delivery][";
                // line 2346
                echo ($context["delivery_row"] ?? null);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2346);
                echo "][price]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, (($__internal_compile_21 = $context["product_delivery"]) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2346)] ?? null) : null), "price", [], "any", false, false, false, 2346);
                echo "\" placeholder=\"";
                echo ($context["text_price"] ?? null);
                echo "\" id=\"input-price";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2346);
                echo ($context["delivery_row"] ?? null);
                echo "\" class=\"form-control\"/></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-link";
                // line 2349
                echo ($context["delivery_row"] ?? null);
                echo "\">";
                echo ($context["text_link"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\"><input type=\"text\" name=\"theme_oct_deals_data[product_delivery][";
                // line 2350
                echo ($context["delivery_row"] ?? null);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2350);
                echo "][link]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, (($__internal_compile_22 = $context["product_delivery"]) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2350)] ?? null) : null), "link", [], "any", false, false, false, 2350);
                echo "\" placeholder=\"";
                echo ($context["text_link"] ?? null);
                echo "\" id=\"input-link";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2350);
                echo ($context["delivery_row"] ?? null);
                echo "\" class=\"form-control\"/></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
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
            // line 2354
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-sort-order";
            // line 2356
            echo ($context["delivery_row"] ?? null);
            echo "\">";
            echo ($context["text_sort_order"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\"><input type=\"number\" name=\"theme_oct_deals_data[product_delivery][";
            // line 2357
            echo ($context["delivery_row"] ?? null);
            echo "][sort_order]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_delivery"], "sort_order", [], "any", false, false, false, 2357);
            echo "\" placeholder=\"";
            echo ($context["text_sort_order"] ?? null);
            echo "\" id=\"input-sort-order";
            echo ($context["delivery_row"] ?? null);
            echo "\" class=\"form-control\"/></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-right pt-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" onclick=\"\$('#delivery-block-";
            // line 2362
            echo ($context["delivery_row"] ?? null);
            echo "').remove();\" class=\"btn btn-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-trash\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<hr style=\"border: 0;\">
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_delivery'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2371
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"add-delivery\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i> ";
        // line 2373
        echo ($context["button_add_delivery"] ?? null);
        echo "</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- payment_section -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 2378
        echo ($context["text_payment_section"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"payment-blocks\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 2380
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "product_payment", [], "any", false, false, false, 2380));
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
        foreach ($context['_seq'] as $context["_key"] => $context["product_payment"]) {
            // line 2381
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            $context["payment_row"] = twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 2381);
            // line 2382
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"payment-block\" style=\"background: #f9f9f9; border-radius: 10px;\" id=\"payment-block-";
            echo ($context["payment_row"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-product-payment-image";
            // line 2385
            echo ($context["payment_row"] ?? null);
            echo "\">";
            echo ($context["text_image"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" id=\"payment-block-thumb-image";
            // line 2387
            echo ($context["payment_row"] ?? null);
            echo "\" data-toggle=\"image\" class=\"img-thumbnail\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 2388
            echo twig_get_attribute($this->env, $this->source, $context["product_payment"], "image_cached", [], "any", false, false, false, 2388);
            echo "\" alt=\"\" title=\"\" data-placeholder=\"";
            echo ($context["placeholder"] ?? null);
            echo "\" width=\"50\" height=\"50\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"theme_oct_deals_data[product_payment][";
            // line 2390
            echo ($context["payment_row"] ?? null);
            echo "][image]\" id=\"input-product-payment-image";
            echo ($context["payment_row"] ?? null);
            echo "\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_payment"], "image", [], "any", false, false, false, 2390);
            echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"payment-language-tabs-";
            // line 2393
            echo ($context["payment_row"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2394
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
                // line 2395
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li ";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 2395)) {
                    echo " class=\"active\" ";
                }
                echo ">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#payment-language-";
                // line 2396
                echo ($context["payment_row"] ?? null);
                echo "-";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2396);
                echo "\" data-toggle=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"language/";
                // line 2397
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 2397);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 2397);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 2397);
                echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 2398
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 2398);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
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
            // line 2402
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2404
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
                // line 2405
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 2405)) {
                    echo " active";
                }
                echo "\" id=\"payment-language-";
                echo ($context["payment_row"] ?? null);
                echo "-";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2405);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-title";
                // line 2407
                echo ($context["payment_row"] ?? null);
                echo "\">";
                echo ($context["text_title"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\"><input type=\"text\" name=\"theme_oct_deals_data[product_payment][";
                // line 2408
                echo ($context["payment_row"] ?? null);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2408);
                echo "][title]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, (($__internal_compile_23 = $context["product_payment"]) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2408)] ?? null) : null), "title", [], "any", false, false, false, 2408);
                echo "\" placeholder=\"";
                echo ($context["text_title"] ?? null);
                echo "\" id=\"input-title";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2408);
                echo ($context["payment_row"] ?? null);
                echo "\" class=\"form-control\"/></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
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
            // line 2412
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-sort-order";
            // line 2414
            echo ($context["payment_row"] ?? null);
            echo "\">";
            echo ($context["text_sort_order"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\"><input type=\"number\" name=\"theme_oct_deals_data[product_payment][";
            // line 2415
            echo ($context["payment_row"] ?? null);
            echo "][sort_order]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_payment"], "sort_order", [], "any", false, false, false, 2415);
            echo "\" placeholder=\"";
            echo ($context["text_sort_order"] ?? null);
            echo "\" id=\"input-sort-order";
            echo ($context["payment_row"] ?? null);
            echo "\" class=\"form-control\"/></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-right pt-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" onclick=\"\$('#payment-block-";
            // line 2420
            echo ($context["payment_row"] ?? null);
            echo "').remove();\" class=\"btn btn-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-trash\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<hr style=\"border: 0;\">
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_payment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2429
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"add-payment\" class=\"btn btn-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-plus-circle\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 2433
        echo ($context["button_add_payment"] ?? null);
        echo "</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 2435
        echo ($context["entry_product_garantii"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-product_advantage\">";
        // line 2437
        echo ($context["entry_product_advantages"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[product_advantage]\" ";
        // line 2440
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "product_advantage", [], "any", false, false, false, 2440)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-product_advantage\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-product_advantage\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div id=\"product_advantages\" class=\"form-group mx-0\"";
        // line 2451
        if (( !twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "product_advantage", [], "any", true, true, false, 2451) || (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "product_advantage", [], "any", true, true, false, 2451) &&  !twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "product_advantage", [], "any", false, false, false, 2451)))) {
            echo "style=\"display:none\"";
        }
        echo ">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\" style=\"padding-bottom: 16px;\"><b>";
        // line 2452
        echo ($context["advantage_help_text"] ?? null);
        echo "</b></div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"table table-striped table-bordered table-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>";
        // line 2458
        echo ($context["column_name_link"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>";
        // line 2459
        echo ($context["column_action"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 2465
        $context["advantages_row"] = 0;
        // line 2466
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "product_advantages", [], "any", false, false, false, 2466));
        foreach ($context['_seq'] as $context["_key"] => $context["advantage"]) {
            // line 2467
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr id=\"advantage-row";
            echo ($context["advantages_row"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\" style=\"width:5%;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t                        <span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" id=\"advantages_icone-";
            // line 2471
            echo ($context["advantages_row"] ?? null);
            echo "\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"/image/";
            echo twig_get_attribute($this->env, $this->source, $context["advantage"], "icone", [], "any", false, false, false, 2471);
            echo "\" alt=\"\" title=\"\" data-placeholder=\"Select Icon\" /></a>
\t\t\t\t\t\t\t\t\t\t\t\t                        \t<input type=\"hidden\" name=\"theme_oct_deals_data[product_advantages][";
            // line 2472
            echo ($context["advantages_row"] ?? null);
            echo "][icone]\" id=\"advantages_input_icone-";
            echo ($context["advantages_row"] ?? null);
            echo "\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["advantage"], "icone", [], "any", false, false, false, 2472);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t                        \t<input type=\"hidden\" name=\"theme_oct_deals_data[product_advantages][";
            // line 2473
            echo ($context["advantages_row"] ?? null);
            echo "][information_id]\" id=\"advantages_id-";
            echo ($context["advantages_row"] ?? null);
            echo "\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["advantage"], "information_id", [], "any", false, false, false, 2473);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t                        </span>
\t\t\t\t\t\t\t\t\t\t\t                        </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"advantage_link\" value=\"\" placeholder=\"";
            // line 2479
            echo ($context["entry_footer_information_links"] ?? null);
            echo "\" id=\"advantage_link-";
            echo ($context["advantages_row"] ?? null);
            echo "\" class=\"form-control\" autocomplete=\"off\" /><hr />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2482
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 2483
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t                        <span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t                        \t<img src=\"language/";
                // line 2485
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 2485);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 2485);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 2485);
                echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t                        </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_data[product_advantages][";
                // line 2487
                echo ($context["advantages_row"] ?? null);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2487);
                echo "][title]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, (($__internal_compile_24 = $context["advantage"]) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2487)] ?? null) : null), "title", [], "any", false, false, false, 2487);
                echo "\" id=\"advantage-title-";
                echo ($context["advantages_row"] ?? null);
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2487);
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2490
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2492
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 2493
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t                        <span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t                        \t<img src=\"language/";
                // line 2495
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 2495);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 2495);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 2495);
                echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t                        </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_data[product_advantages][";
                // line 2497
                echo ($context["advantages_row"] ?? null);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2497);
                echo "][link]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, (($__internal_compile_25 = $context["advantage"]) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2497)] ?? null) : null), "link", [], "any", false, false, false, 2497);
                echo "\" id=\"advantage-href-";
                echo ($context["advantages_row"] ?? null);
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2497);
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2500
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2503
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 2504
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t                        <span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t\t\t                        \t<img src=\"language/";
                // line 2506
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 2506);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 2506);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 2506);
                echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t                        </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"theme_oct_deals_data[product_advantages][";
                // line 2508
                echo ($context["advantages_row"] ?? null);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2508);
                echo "][text]\" class=\"form-control\">";
                echo twig_get_attribute($this->env, $this->source, (($__internal_compile_26 = $context["advantage"]) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2508)] ?? null) : null), "text", [], "any", false, false, false, 2508);
                echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2511
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\" style=\"width:10%;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-12\" for=\"input-product_advantage_popup-";
            // line 2513
            echo ($context["advantages_row"] ?? null);
            echo "\">";
            echo ($context["entry_product_advantage_popup"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[product_advantages][";
            // line 2516
            echo ($context["advantages_row"] ?? null);
            echo "][popup]\" ";
            if (twig_get_attribute($this->env, $this->source, (($__internal_compile_27 = twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data"] ?? null), "product_advantages", [], "any", false, false, false, 2516)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27[($context["advantages_row"] ?? null)] ?? null) : null), "popup", [], "any", false, false, false, 2516)) {
                echo "checked=\"checked\"";
            }
            echo " id=\"input-product_advantage_popup-";
            echo ($context["advantages_row"] ?? null);
            echo "\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-product_advantage_popup-";
            // line 2517
            echo ($context["advantages_row"] ?? null);
            echo "\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\" style=\"width:5%;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" onclick=\"\$('#advantage-row";
            // line 2528
            echo ($context["advantages_row"] ?? null);
            echo "').remove()\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2531
            $context["advantages_row"] = (($context["advantages_row"] ?? null) + 1);
            // line 2532
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advantage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2533
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"4\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\" style=\"width:5%;\"><button type=\"button\" onclick=\"addAdvantage();\" data-toggle=\"tooltip\" title=\"";
        // line 2537
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tfoot>
\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-orders\">
\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 2547
        echo ($context["tab_order"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"theme_oct_deals_data_osucsess_status\">";
        // line 2549
        echo ($context["entry_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data_osucsess[status]\" ";
        // line 2552
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data_osucsess"] ?? null), "status", [], "any", false, false, false, 2552)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"theme_oct_deals_data_osucsess_status\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"theme_oct_deals_data_osucsess_status\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 2565
        echo ($context["text_order_register_account"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" style=\"padding-top:80px;text-align:left;\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 2567
        echo ($context["entry_order_register_dop"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\" style=\"padding-top:0;padding-bottom:0;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"order_register_account-language\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 2572
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 2573
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#order_register_account-language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2573);
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 2573);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 2573);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 2573);
            echo "\" /> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 2573);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2575
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 2578
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 2579
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"order_register_account-language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2579);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">";
            // line 2582
            echo ($context["entry_order_register_account_title"] ?? null);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_data_osucsess[reg][title][";
            // line 2583
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2583);
            echo "]\" value=\"";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data_osucsess"] ?? null), "reg", [], "any", false, true, false, 2583), "title", [], "any", false, true, false, 2583), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2583), [], "array", true, true, false, 2583)) ? ((($__internal_compile_28 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data_osucsess"] ?? null), "reg", [], "any", false, false, false, 2583), "title", [], "any", false, false, false, 2583)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2583)] ?? null) : null)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_order_register_account_title"] ?? null);
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea id=\"order_register_account";
            // line 2587
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2587);
            echo "\" data-toggle=\"summernote\" data-lang=\"";
            echo ($context["summernote"] ?? null);
            echo "\" name=\"theme_oct_deals_data_osucsess[reg][text][";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2587);
            echo "]\" rows=\"5\" placeholder=\"";
            echo ($context["entry_product_dop_tab_text"] ?? null);
            echo "\" class=\"form-control\">";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data_osucsess"] ?? null), "reg", [], "any", false, true, false, 2587), "text", [], "any", false, true, false, 2587), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2587), [], "array", true, true, false, 2587)) ? ((($__internal_compile_29 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data_osucsess"] ?? null), "reg", [], "any", false, false, false, 2587), "text", [], "any", false, false, false, 2587)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2587)] ?? null) : null)) : (""));
            echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2591
        echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 2595
        echo ($context["text_order_no_register_account"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" style=\"padding-top:80px;text-align:left;\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 2597
        echo ($context["entry_order_no_register_dop"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\" style=\"padding-top:0;padding-bottom:0;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"order_no_register_account-language\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 2602
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 2603
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#order_no_register_account-language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2603);
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 2603);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 2603);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 2603);
            echo "\" /> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 2603);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2605
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 2608
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 2609
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"order_no_register_account-language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2609);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">";
            // line 2612
            echo ($context["entry_order_register_account_title"] ?? null);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_data_osucsess[noreg][title][";
            // line 2613
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2613);
            echo "]\" value=\"";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data_osucsess"] ?? null), "noreg", [], "any", false, true, false, 2613), "title", [], "any", false, true, false, 2613), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2613), [], "array", true, true, false, 2613)) ? ((($__internal_compile_30 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data_osucsess"] ?? null), "noreg", [], "any", false, false, false, 2613), "title", [], "any", false, false, false, 2613)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2613)] ?? null) : null)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_order_register_account_title"] ?? null);
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea id=\"order_no_register_account";
            // line 2617
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2617);
            echo "\" data-toggle=\"summernote\" data-lang=\"";
            echo ($context["summernote"] ?? null);
            echo "\" name=\"theme_oct_deals_data_osucsess[noreg][text][";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2617);
            echo "]\" rows=\"5\" placeholder=\"";
            echo ($context["entry_product_dop_tab_text"] ?? null);
            echo "\" class=\"form-control\">";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data_osucsess"] ?? null), "noreg", [], "any", false, true, false, 2617), "text", [], "any", false, true, false, 2617), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2617), [], "array", true, true, false, 2617)) ? ((($__internal_compile_31 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_data_osucsess"] ?? null), "noreg", [], "any", false, false, false, 2617), "text", [], "any", false, false, false, 2617)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2617)] ?? null) : null)) : (""));
            echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2621
        echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-css_js\">
\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 2627
        echo ($context["tab_css_js"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-css_code\">";
        // line 2629
        echo ($context["entry_css_code"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea id=\"css_code\" name=\"theme_oct_deals_css_code\" rows=\"15\" class=\"form-control\">";
        // line 2631
        echo ($context["theme_oct_deals_css_code"] ?? null);
        echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-js_code\">";
        // line 2635
        echo ($context["entry_js_code"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea id=\"js_code\" name=\"theme_oct_deals_js_code\" rows=\"15\" class=\"form-control\">";
        // line 2637
        echo ($context["theme_oct_deals_js_code"] ?? null);
        echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-image\">
\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t<legend>";
        // line 2647
        echo ($context["text_image"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image-logo-width\">";
        // line 2649
        echo ($context["entry_image_logo"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_image_logo_width\" value=\"";
        // line 2654
        echo ($context["theme_oct_deals_image_logo_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-logo-width\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">px</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_image_logo_height\" value=\"";
        // line 2660
        echo ($context["theme_oct_deals_image_logo_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">px</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        // line 2665
        if (($context["error_image_category"] ?? null)) {
            // line 2666
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t\t\tusNotify('warning', '";
            // line 2668
            echo ($context["error_image_category"] ?? null);
            echo "');
\t\t\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 2672
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image-category-width\">";
        // line 2675
        echo ($context["entry_image_sub_category"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_image_sub_category_width\" value=\"";
        // line 2680
        echo ($context["theme_oct_deals_image_sub_category_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-category-width\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">px</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_image_sub_category_height\" value=\"";
        // line 2686
        echo ($context["theme_oct_deals_image_sub_category_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">px</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        // line 2691
        if (($context["error_image_category"] ?? null)) {
            // line 2692
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t\t\tusNotify('warning', '";
            // line 2694
            echo ($context["error_image_sub_category"] ?? null);
            echo "');
\t\t\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 2698
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image-category-width\">";
        // line 2701
        echo ($context["entry_image_category"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_image_category_width\" value=\"";
        // line 2706
        echo ($context["theme_oct_deals_image_category_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-category-width\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">px</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_image_category_height\" value=\"";
        // line 2712
        echo ($context["theme_oct_deals_image_category_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">px</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        // line 2717
        if (($context["error_image_category"] ?? null)) {
            // line 2718
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t\t\tusNotify('warning', '";
            // line 2720
            echo ($context["error_image_category"] ?? null);
            echo "');
\t\t\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 2724
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image-category-width\">";
        // line 2727
        echo ($context["entry_image_manufacturer"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_image_manufacturer_width\" value=\"";
        // line 2732
        echo ($context["theme_oct_deals_image_manufacturer_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-category-width\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">px</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_image_manufacturer_height\" value=\"";
        // line 2738
        echo ($context["theme_oct_deals_image_manufacturer_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">px</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        // line 2743
        if (($context["error_image_category"] ?? null)) {
            // line 2744
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t\t\tusNotify('warning', '";
            // line 2746
            echo ($context["error_image_manufacturer"] ?? null);
            echo "');
\t\t\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 2750
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image-thumb-width\">";
        // line 2753
        echo ($context["entry_image_thumb"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_image_thumb_width\" value=\"";
        // line 2758
        echo ($context["theme_oct_deals_image_thumb_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-thumb-width\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"theme_oct_deals_image_popup_width\" value=\"";
        // line 2759
        echo ($context["theme_oct_deals_image_popup_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-popup-width\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">px</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_image_thumb_height\" value=\"";
        // line 2765
        echo ($context["theme_oct_deals_image_thumb_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"theme_oct_deals_image_popup_height\" value=\"";
        // line 2766
        echo ($context["theme_oct_deals_image_popup_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">px</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        // line 2771
        if (($context["error_image_thumb"] ?? null)) {
            // line 2772
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t\t\tusNotify('warning', '";
            // line 2774
            echo ($context["error_image_thumb"] ?? null);
            echo "');
\t\t\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 2778
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image-thumb-width\">";
        // line 2781
        echo ($context["entry_image_popup"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_image_popup_width\" value=\"";
        // line 2786
        echo ($context["theme_oct_deals_image_popup_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-popup-width\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">px</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_image_popup_height\" value=\"";
        // line 2792
        echo ($context["theme_oct_deals_image_popup_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">px</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        // line 2797
        if (($context["error_image_popup"] ?? null)) {
            // line 2798
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t\t\tusNotify('warning', '";
            // line 2800
            echo ($context["error_image_thumb"] ?? null);
            echo "');
\t\t\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 2804
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image-product-width\">";
        // line 2807
        echo ($context["entry_image_product"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_image_product_width\" value=\"";
        // line 2812
        echo ($context["theme_oct_deals_image_product_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-product-width\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">px</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_image_product_height\" value=\"";
        // line 2818
        echo ($context["theme_oct_deals_image_product_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">px</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        // line 2823
        if (($context["error_image_product"] ?? null)) {
            // line 2824
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t\t\tusNotify('warning', '";
            // line 2826
            echo ($context["error_image_product"] ?? null);
            echo "');
\t\t\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 2830
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image-additional-width\">";
        // line 2833
        echo ($context["entry_image_additional"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_image_additional_width\" value=\"";
        // line 2838
        echo ($context["theme_oct_deals_image_additional_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-additional-width\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">px</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_image_additional_height\" value=\"";
        // line 2844
        echo ($context["theme_oct_deals_image_additional_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">px</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        // line 2849
        if (($context["error_image_additional"] ?? null)) {
            // line 2850
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t\t\tusNotify('warning', '";
            // line 2852
            echo ($context["error_image_additional"] ?? null);
            echo "');
\t\t\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 2856
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image-related\">";
        // line 2859
        echo ($context["entry_image_related"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_image_related_width\" value=\"";
        // line 2864
        echo ($context["theme_oct_deals_image_related_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-related\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">px</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_image_related_height\" value=\"";
        // line 2870
        echo ($context["theme_oct_deals_image_related_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">px</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        // line 2875
        if (($context["error_image_related"] ?? null)) {
            // line 2876
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t\t\tusNotify('warning', '";
            // line 2878
            echo ($context["error_image_related"] ?? null);
            echo "');
\t\t\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 2882
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image-compare\">";
        // line 2885
        echo ($context["entry_image_compare"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_image_compare_width\" value=\"";
        // line 2890
        echo ($context["theme_oct_deals_image_compare_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-compare\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">px</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_image_compare_height\" value=\"";
        // line 2896
        echo ($context["theme_oct_deals_image_compare_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">px</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        // line 2901
        if (($context["error_image_compare"] ?? null)) {
            // line 2902
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t\t\tusNotify('warning', '";
            // line 2904
            echo ($context["error_image_compare"] ?? null);
            echo "');
\t\t\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 2908
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image-wishlist\">";
        // line 2911
        echo ($context["entry_image_wishlist"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_image_wishlist_width\" value=\"";
        // line 2916
        echo ($context["theme_oct_deals_image_wishlist_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-wishlist\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">px</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_image_wishlist_height\" value=\"";
        // line 2922
        echo ($context["theme_oct_deals_image_wishlist_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">px</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        // line 2927
        if (($context["error_image_wishlist"] ?? null)) {
            // line 2928
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t\t\tusNotify('warning', '";
            // line 2930
            echo ($context["error_image_wishlist"] ?? null);
            echo "');
\t\t\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 2934
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image-cart\">";
        // line 2937
        echo ($context["entry_image_cart"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_image_cart_width\" value=\"";
        // line 2942
        echo ($context["theme_oct_deals_image_cart_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-cart\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">px</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_image_cart_height\" value=\"";
        // line 2948
        echo ($context["theme_oct_deals_image_cart_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">px</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        // line 2953
        if (($context["error_image_cart"] ?? null)) {
            // line 2954
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t\t\tusNotify('warning', '";
            // line 2956
            echo ($context["error_image_cart"] ?? null);
            echo "');
\t\t\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 2960
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image-location\">";
        // line 2963
        echo ($context["entry_image_location"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_image_location_width\" value=\"";
        // line 2968
        echo ($context["theme_oct_deals_image_location_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-location\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">px</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_image_location_height\" value=\"";
        // line 2974
        echo ($context["theme_oct_deals_image_location_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">px</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        // line 2979
        if (($context["error_image_location"] ?? null)) {
            // line 2980
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t\t\tusNotify('warning', '";
            // line 2982
            echo ($context["error_image_location"] ?? null);
            echo "');
\t\t\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 2986
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-widgets\">
\t\t\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t\t\t<ul class=\"nav nav-pills nav-stacked\" id=\"widgets\">
\t\t\t\t\t\t\t\t\t<li class=\"active\"><a href=\"#tab-popup_cart\" data-toggle=\"tab\" aria-expanded=\"true\"><i class=\"fa fa-arrow-up fw\"></i> ";
        // line 2993
        echo ($context["text_popup_cart"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-live_search\" data-toggle=\"tab\" aria-expanded=\"true\"><i class=\"fa fa-search fw\"></i> ";
        // line 2994
        echo ($context["text_live_search"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-feedback\" data-toggle=\"tab\" aria-expanded=\"true\"><i class=\"fa fa-phone-square fw\"></i> ";
        // line 2995
        echo ($context["text_feedback"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-alert\" data-toggle=\"tab\" aria-expanded=\"true\"><i class=\"fa fa-bell fw\"></i> ";
        // line 2996
        echo ($context["text_alert"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"tab-popup_cart\">
\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 3003
        echo ($context["text_popup_cart"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-popupcart-status\">";
        // line 3005
        echo ($context["entry_show_widget_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_popup_cart_status\" ";
        // line 3008
        if (($context["theme_oct_deals_popup_cart_status"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-popupcart-status\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-popupcart-status\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-popupcart-is\">";
        // line 3020
        echo ($context["entry_popup_is"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_isPopup\" ";
        // line 3023
        if (($context["theme_oct_deals_isPopup"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-popupcart-is\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-popupcart-is\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-alert_status\">";
        // line 3035
        echo ($context["entry_free_shipping_from"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_popup_free_shipping_from\" value=\"";
        // line 3037
        echo ($context["theme_oct_deals_popup_free_shipping_from"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_free_shipping_from"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-alert_status\">";
        // line 3041
        echo ($context["entry_minimum_order_amount"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_popup_minimum_order_amount\" value=\"";
        // line 3043
        echo ($context["theme_oct_deals_popup_minimum_order_amount"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_minimum_order_amount"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 3046
        echo ($context["entry_recommend_cart"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-popupcart-recommend\">";
        // line 3048
        echo ($context["entry_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_popup_cart_recommend_status\" ";
        // line 3051
        if (($context["theme_oct_deals_popup_cart_recommend_status"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-popupcart-recommend\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-popupcart-recommend\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"recomended_hidden\" ";
        // line 3062
        if ( !($context["theme_oct_deals_popup_cart_recommend_status"] ?? null)) {
            echo " style=\"display:none;\" ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-popupcart-recommend\">";
        // line 3064
        echo ($context["entry_autorelated_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_popup_cart_autorelated_status\" ";
        // line 3067
        if (($context["theme_oct_deals_popup_cart_autorelated_status"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-popupcart-autorelated-status\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-popupcart-autorelated-status\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-popupcart-recommend\">";
        // line 3079
        echo ($context["entry_relatedbysales_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_popup_cart_relatedbysales_status\" ";
        // line 3082
        if (($context["theme_oct_deals_popup_cart_relatedbysales_status"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-popupcart-relatedbysales-status\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-popupcart-relatedbysales-status\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-related\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
        // line 3095
        echo ($context["help_related"] ?? null);
        echo "\">";
        echo ($context["entry_recommended_products"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_popup_cart_recommend_products\" value=\"\" placeholder=\"";
        // line 3098
        echo ($context["entry_recommended_products"] ?? null);
        echo "\" id=\"input-related\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"product-related\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 3100
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_relateds"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_related"]) {
            // line 3101
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"product-related";
            echo twig_get_attribute($this->env, $this->source, $context["product_related"], "product_id", [], "any", false, false, false, 3101);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i onclick=\"deleteProduct(";
            // line 3102
            echo twig_get_attribute($this->env, $this->source, $context["product_related"], "product_id", [], "any", false, false, false, 3102);
            echo ");\" class=\"fa fa-minus-circle\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 3103
            echo twig_get_attribute($this->env, $this->source, $context["product_related"], "name", [], "any", false, false, false, 3103);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"theme_oct_deals_popup_cart_recommend_products[]\" value=\"";
            // line 3104
            echo twig_get_attribute($this->env, $this->source, $context["product_related"], "product_id", [], "any", false, false, false, 3104);
            echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_related'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 3107
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"recommended_image_size\">";
        // line 3111
        echo ($context["entry_recommended_image_size"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_popup_cart_recommend_width\" value=\"";
        // line 3115
        echo ($context["theme_oct_deals_popup_cart_recommend_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"recommended_image_width\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_popup_cart_recommend_height\" value=\"";
        // line 3118
        echo ($context["theme_oct_deals_popup_cart_recommend_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" id=\"recommended_image_height\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"recommended_poducts_texts\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 3125
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 3126
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#recommended-block-tab-";
            // line 3127
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 3127);
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 3127);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 3127);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 3127);
            echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 3128
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 3128);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 3131
        echo "\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 3133
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
            // line 3134
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 3134)) {
                echo "active";
            }
            echo "\" id=\"recommended-block-tab-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 3134);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"recommended_title";
            // line 3136
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 3136);
            echo "\">";
            echo ($context["entry_recommended_title"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_popup_cart_data[recommended_poducts][title][";
            // line 3138
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 3138);
            echo "]\" value=\"";
            echo (($__internal_compile_32 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_popup_cart_data"] ?? null), "recommended_poducts", [], "any", false, false, false, 3138), "title", [], "any", false, false, false, 3138)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 3138)] ?? null) : null);
            echo "\" placeholder=\"";
            echo ($context["entry_recommended_title"] ?? null);
            echo "\" id=\"recommended_title";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 3138);
            echo "\" class=\"form-control\"/>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 3143
        echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-alert\">
\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 3149
        echo ($context["text_alert"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-alert_status\">";
        // line 3151
        echo ($context["entry_show_widget_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_alert_status\" ";
        // line 3154
        if (($context["theme_oct_deals_alert_status"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-alert_status\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-alert_status\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-alert_products\">";
        // line 3166
        echo ($context["entry_show_alert_products"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_alert_data[products]\" ";
        // line 3169
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_alert_data"] ?? null), "products", [], "any", false, false, false, 3169)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-alert_products\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-alert_products\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-alert_orders\">";
        // line 3181
        echo ($context["entry_show_alert_orders"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_alert_data[orders]\" ";
        // line 3184
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_alert_data"] ?? null), "orders", [], "any", false, false, false, 3184)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-alert_orders\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-alert_orders\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-alert_oct_modules\">";
        // line 3196
        echo ($context["entry_show_alert_octemplates"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_alert_data[oct_modules]\" ";
        // line 3199
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_alert_data"] ?? null), "oct_modules", [], "any", false, false, false, 3199)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-alert_oct_modules\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-alert_oct_modules\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-feedback\">
\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 3214
        echo ($context["text_feedback"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-feedback-status\">";
        // line 3216
        echo ($context["entry_show_widget_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_feedback_status\" ";
        // line 3219
        if (($context["theme_oct_deals_feedback_status"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-feedback-status\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-feedback-status\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-feedback_messenger\">";
        // line 3231
        echo ($context["entry_show_feedback_messenger"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_feedback_data[feedback_messenger]\" ";
        // line 3234
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_feedback_data"] ?? null), "feedback_messenger", [], "any", false, false, false, 3234)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-feedback_messenger\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-feedback_messenger\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-feedback_viber\">";
        // line 3246
        echo ($context["entry_show_feedback_viber"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_feedback_data[feedback_viber]\" ";
        // line 3249
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_feedback_data"] ?? null), "feedback_viber", [], "any", false, false, false, 3249)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-feedback_viber\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-feedback_viber\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-feedback_telegram\">";
        // line 3261
        echo ($context["entry_show_feedback_telegram"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_feedback_data[feedback_telegram]\" ";
        // line 3264
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_feedback_data"] ?? null), "feedback_telegram", [], "any", false, false, false, 3264)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-feedback_telegram\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-feedback_telegram\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-feedback_skype\">";
        // line 3276
        echo ($context["entry_show_feedback_skype"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_feedback_data[feedback_skype]\" ";
        // line 3279
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_feedback_data"] ?? null), "feedback_skype", [], "any", false, false, false, 3279)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-feedback_skype\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-feedback_skype\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-feedback_whatsapp\">";
        // line 3291
        echo ($context["entry_show_feedback_whatsapp"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_feedback_data[feedback_whatsapp]\" ";
        // line 3294
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_feedback_data"] ?? null), "feedback_whatsapp", [], "any", false, false, false, 3294)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-feedback_whatsapp\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-feedback_whatsapp\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-feedback_email\">";
        // line 3306
        echo ($context["entry_show_feedback_email"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_feedback_data[feedback_email]\" ";
        // line 3309
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_feedback_data"] ?? null), "feedback_email", [], "any", false, false, false, 3309)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-feedback_email\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-feedback_email\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-feedback_callback\">";
        // line 3321
        echo ($context["entry_show_feedback_callback"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_feedback_data[feedback_callback]\" ";
        // line 3324
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_feedback_data"] ?? null), "feedback_callback", [], "any", false, false, false, 3324)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-feedback_callback\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-feedback_callback\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-feedback_contact_link\">";
        // line 3336
        echo ($context["entry_show_feedback_contact_link"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_feedback_data[feedback_contact_link]\" ";
        // line 3339
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_feedback_data"] ?? null), "feedback_contact_link", [], "any", false, false, false, 3339)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-feedback_contact_link\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-feedback_contact_link\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-live_search\">
\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 3354
        echo ($context["text_live_search"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-live_search_status\">";
        // line 3356
        echo ($context["entry_show_widget_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_live_search_status\" ";
        // line 3359
        if (($context["theme_oct_deals_live_search_status"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-live_search_status\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-live_search_status\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block\">";
        // line 3368
        echo ($context["entry_show_live_search_status"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-live_search_fallback\">";
        // line 3372
        echo ($context["entry_show_live_search_fallback"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_live_search_data[search_fallback]\" ";
        // line 3375
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_live_search_data"] ?? null), "search_fallback", [], "any", false, false, false, 3375)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-live_search_fallback\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-live_search_fallback\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block\">";
        // line 3384
        echo ($context["entry_show_live_search_fallback_help"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-live_search_category\">";
        // line 3388
        echo ($context["entry_live_search_category"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_live_search_data[category]\" ";
        // line 3391
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_live_search_data"] ?? null), "category", [], "any", false, false, false, 3391)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-live_search_category\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-live_search_category\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block\">";
        // line 3400
        echo ($context["entry_show_live_search_category"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-live_search_found_in_categories\">";
        // line 3404
        echo ($context["entry_live_search_found_in_categories"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_live_search_data[found_in_categories]\" ";
        // line 3407
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_live_search_data"] ?? null), "found_in_categories", [], "any", false, false, false, 3407)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-live_search_found_in_categories\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-live_search_found_in_categories\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block\">";
        // line 3416
        echo ($context["entry_show_live_search_found_in_categories"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-live_search_category_image\">";
        // line 3420
        echo ($context["entry_live_search_category_image"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_live_search_data[category_images]\" ";
        // line 3423
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_live_search_data"] ?? null), "category_images", [], "any", false, false, false, 3423)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-live_search_category_image\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-live_search_category_image\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block\">";
        // line 3432
        echo ($context["entry_show_live_search_category_images"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-live_search_manufacturer\">";
        // line 3436
        echo ($context["entry_live_search_manufacturer"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_live_search_data[manufacturer]\" ";
        // line 3439
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_live_search_data"] ?? null), "manufacturer", [], "any", false, false, false, 3439)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-live_search_manufacturer\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-live_search_manufacturer\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block\">";
        // line 3448
        echo ($context["entry_show_live_search_manufacturer"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-live_search_manufacturer_image\">";
        // line 3452
        echo ($context["entry_live_search_manufacturer_image"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_live_search_data[manufacturer_images]\" ";
        // line 3455
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_live_search_data"] ?? null), "manufacturer_images", [], "any", false, false, false, 3455)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-live_search_manufacturer_image\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-live_search_manufacturer_image\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block\">";
        // line 3464
        echo ($context["entry_show_live_search_manufacturer_images"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-live_search_price\">";
        // line 3468
        echo ($context["entry_show_live_price"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_live_search_data[price]\" ";
        // line 3471
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_live_search_data"] ?? null), "price", [], "any", false, false, false, 3471)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-live_search_price\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-live_search_price\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block\">";
        // line 3480
        echo ($context["entry_show_live_search_price"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-live_search_model\">";
        // line 3484
        echo ($context["entry_show_live_model"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_live_search_data[model]\" ";
        // line 3487
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_live_search_data"] ?? null), "model", [], "any", false, false, false, 3487)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-live_search_model\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-live_search_model\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block\">";
        // line 3496
        echo ($context["entry_show_live_search_model"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-live_search_sku\">";
        // line 3500
        echo ($context["entry_show_live_sku"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_live_search_data[sku]\" ";
        // line 3503
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_live_search_data"] ?? null), "sku", [], "any", false, false, false, 3503)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-live_search_sku\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-live_search_sku\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block\">";
        // line 3512
        echo ($context["entry_show_live_search_sku"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-show_live_descr\">";
        // line 3516
        echo ($context["entry_show_live_descr"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_live_search_data[description]\" ";
        // line 3519
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_live_search_data"] ?? null), "description", [], "any", false, false, false, 3519)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-show_live_descr\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-show_live_descr\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block\">";
        // line 3528
        echo ($context["entry_show_live_search_description"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-live_search_tags\">";
        // line 3532
        echo ($context["entry_show_live_tags"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_live_search_data[tags]\" ";
        // line 3535
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_live_search_data"] ?? null), "tags", [], "any", false, false, false, 3535)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-live_search_tags\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-live_search_tags\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block\">";
        // line 3544
        echo ($context["entry_show_live_search_tags"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-live_search_delay\">";
        // line 3548
        echo ($context["entry_live_search_delay"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_live_search_data[delay]\" value=\"";
        // line 3550
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_live_search_data"] ?? null), "delay", [], "any", false, false, false, 3550);
        echo "\" placeholder=\"";
        echo ($context["entry_live_search_delay"] ?? null);
        echo "\" id=\"input-live_search_delay\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block\">";
        // line 3551
        echo ($context["entry_show_live_search_delay"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-live_search_count_symbol\">";
        // line 3555
        echo ($context["entry_live_search_symbols"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_live_search_data[count_symbol]\" value=\"";
        // line 3557
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_live_search_data"] ?? null), "count_symbol", [], "any", false, false, false, 3557);
        echo "\" placeholder=\"";
        echo ($context["entry_live_search_symbols"] ?? null);
        echo "\" id=\"input-live_search_count_symbol\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block\">";
        // line 3558
        echo ($context["entry_show_live_search_count_symbol"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-live_search_count_subresults\">";
        // line 3562
        echo ($context["entry_live_search_results"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_live_search_data[count_subresults]\" value=\"";
        // line 3564
        echo (((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_live_search_data"] ?? null), "count_subresults", [], "any", true, true, false, 3564) && twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_live_search_data"] ?? null), "count_subresults", [], "any", false, false, false, 3564))) ? (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_live_search_data"] ?? null), "count_subresults", [], "any", false, false, false, 3564)) : (4));
        echo "\" placeholder=\"";
        echo ($context["entry_live_search_results"] ?? null);
        echo "\" id=\"input-live_search_count_subresults\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block\">";
        // line 3565
        echo ($context["entry_show_live_search_count_subresults"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-live_search_search_fallback_start\">";
        // line 3569
        echo ($context["entry_live_search_fallback_start"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_live_search_data[search_fallback_start]\" value=\"";
        // line 3571
        echo (((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_live_search_data"] ?? null), "search_fallback_start", [], "any", true, true, false, 3571) && twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_live_search_data"] ?? null), "search_fallback_start", [], "any", false, false, false, 3571))) ? (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_live_search_data"] ?? null), "search_fallback_start", [], "any", false, false, false, 3571)) : (4));
        echo "\" placeholder=\"";
        echo ($context["entry_live_search_fallback_start"] ?? null);
        echo "\" id=\"input-live_search_search_fallback_start\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block\">";
        // line 3572
        echo ($context["entry_show_live_search_search_fallback_start"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-live_search_limit_products\">";
        // line 3576
        echo ($context["entry_live_search_limit_products"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_live_search_data[limit_products]\" value=\"";
        // line 3578
        echo (((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_live_search_data"] ?? null), "limit_products", [], "any", true, true, false, 3578) && twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_live_search_data"] ?? null), "limit_products", [], "any", false, false, false, 3578))) ? (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_live_search_data"] ?? null), "limit_products", [], "any", false, false, false, 3578)) : (8));
        echo "\" placeholder=\"";
        echo ($context["entry_live_search_limit_products"] ?? null);
        echo "\" id=\"input-live_search_limit_products\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block\">";
        // line 3579
        echo ($context["entry_show_live_search_limit_products"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-live_search_limit_entities\">";
        // line 3583
        echo ($context["entry_live_search_limit_entities"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_live_search_data[limit_entities]\" value=\"";
        // line 3585
        echo (((twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_live_search_data"] ?? null), "limit_entities", [], "any", true, true, false, 3585) && twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_live_search_data"] ?? null), "limit_entities", [], "any", false, false, false, 3585))) ? (twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_live_search_data"] ?? null), "limit_entities", [], "any", false, false, false, 3585)) : (12));
        echo "\" placeholder=\"";
        echo ($context["entry_live_search_limit_entities"] ?? null);
        echo "\" id=\"input-live_search_limit_entities\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block\">";
        // line 3586
        echo ($context["entry_show_live_search_limit_entities"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-seo_title\">
\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t<ul class=\"nav nav-pills nav-stacked\" id=\"settings\">
\t\t\t\t\t\t\t\t\t<li class=\"active\"><a href=\"#tab-seo_titles\" data-toggle=\"tab\"  aria-expanded=\"true\">SEO Titles</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-seo_urls\" data-toggle=\"tab\"  aria-expanded=\"true\">";
        // line 3598
        echo ($context["text_seo_url"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-seo_home\" data-toggle=\"tab\"  aria-expanded=\"true\">Home page (title/description/OG-image)</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"tab-seo_titles\">
\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t<legend>SEO Titles</legend>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-seo_title_status\">";
        // line 3608
        echo ($context["entry_show_widget_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_seo_title_status\" ";
        // line 3611
        if (($context["theme_oct_deals_seo_title_status"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-seo_title_status\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-seo_title_status\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\" style=\"margin-left:0;margin-right:0;\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"seo_title-block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"active\"><a href=\"#tab-seo_title-product\" data-toggle=\"tab\">";
        // line 3624
        echo ($context["text_seo_title_product"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-seo_title-category\" data-toggle=\"tab\">";
        // line 3625
        echo ($context["text_seo_title_category"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-seo_title-manufacturer\" data-toggle=\"tab\">";
        // line 3626
        echo ($context["text_seo_title_manufacturer"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"tab-seo_title-product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-seo_product_title_status\">";
        // line 3633
        echo ($context["entry_seo_title_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_seo_title_data[product][title_status]\" ";
        // line 3636
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_seo_title_data"] ?? null), "product", [], "any", false, false, false, 3636), "title_status", [], "any", false, false, false, 3636)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-seo_product_title_status\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-seo_product_title_status\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-seo_product_title_empty\"><span data-toggle=\"tooltip\" title=\"\" data-original-title=\"";
        // line 3650
        echo ($context["help_seo_title_empty"] ?? null);
        echo "\">";
        echo ($context["entry_seo_title_empty"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_seo_title_data[product][title_empty]\" ";
        // line 3653
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_seo_title_data"] ?? null), "product", [], "any", false, false, false, 3653), "title_empty", [], "any", false, false, false, 3653)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-seo_product_title_empty\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-seo_product_title_empty\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 3666
        echo ($context["entry_seo_title"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t                    ";
        // line 3668
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 3669
            echo "\t\t\t\t\t\t\t\t                            <div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t                        <span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t                        \t<img src=\"language/";
            // line 3671
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 3671);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 3671);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 3671);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t                        </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input name=\"theme_oct_deals_seo_title_data[product][title][";
            // line 3673
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 3673);
            echo "]\" value=\"";
            echo (($__internal_compile_33 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_seo_title_data"] ?? null), "product", [], "any", false, false, false, 3673), "title", [], "any", false, false, false, 3673)) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 3673)] ?? null) : null);
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t                            </div>
\t\t\t\t\t\t\t\t                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 3676
        echo "\t\t\t\t\t\t\t\t                            <div class=\"seo-variant\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 3677
        echo ($context["entry_seo_variants"] ?? null);
        echo ":<br />[name]<br />[price]<br />[model]<br />[sku]<br />[store]<br />[category]<br />[manufacturer]<br />[address]<br />[phone]<br />[time]
\t\t\t\t\t\t\t\t                            </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-seo_product_description_status\">";
        // line 3683
        echo ($context["entry_seo_description_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_seo_title_data[product][description_status]\" ";
        // line 3686
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_seo_title_data"] ?? null), "product", [], "any", false, false, false, 3686), "description_status", [], "any", false, false, false, 3686)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-seo_product_description_status\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-seo_product_description_status\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-seo_product_description_empty\">";
        // line 3700
        echo ($context["entry_seo_title_empty"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_seo_title_data[product][description_empty]\" ";
        // line 3703
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_seo_title_data"] ?? null), "product", [], "any", false, false, false, 3703), "description_empty", [], "any", false, false, false, 3703)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-seo_product_description_empty\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-seo_product_description_empty\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 3716
        echo ($context["entry_seo_description"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t                        \t";
        // line 3718
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 3719
            echo "\t\t\t\t\t\t\t\t                        \t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t                        <span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t                        \t<img src=\"language/";
            // line 3721
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 3721);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 3721);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 3721);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t                        </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input name=\"theme_oct_deals_seo_title_data[product][description][";
            // line 3723
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 3723);
            echo "]\" value=\"";
            echo (($__internal_compile_34 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_seo_title_data"] ?? null), "product", [], "any", false, false, false, 3723), "description", [], "any", false, false, false, 3723)) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 3723)] ?? null) : null);
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t                            </div>
\t\t\t\t\t\t\t\t                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 3726
        echo "\t\t\t\t\t\t\t\t                            <div class=\"seo-variant\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 3727
        echo ($context["entry_seo_variants"] ?? null);
        echo ":<br />[name]<br />[price]<br />[model]<br />[sku]<br />[store]<br />[category]<br />[manufacturer]<br />[address]<br />[phone]<br />[time]
\t\t\t\t\t\t\t\t                            </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-seo_title-category\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-seo_category_title_status\">";
        // line 3735
        echo ($context["entry_seo_title_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_seo_title_data[category][title_status]\" ";
        // line 3738
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_seo_title_data"] ?? null), "category", [], "any", false, false, false, 3738), "title_status", [], "any", false, false, false, 3738)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-seo_category_title_status\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-seo_category_title_status\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-seo_category_title_empty\"><span data-toggle=\"tooltip\" title=\"\" data-original-title=\"";
        // line 3752
        echo ($context["help_seo_title_empty"] ?? null);
        echo "\">";
        echo ($context["entry_seo_title_empty"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_seo_title_data[category][title_empty]\" ";
        // line 3755
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_seo_title_data"] ?? null), "category", [], "any", false, false, false, 3755), "title_empty", [], "any", false, false, false, 3755)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-seo_category_title_empty\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-seo_category_title_empty\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 3768
        echo ($context["entry_seo_title"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t                    ";
        // line 3770
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 3771
            echo "\t\t\t\t\t\t\t\t                            <div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t                        <span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t                        \t<img src=\"language/";
            // line 3773
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 3773);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 3773);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 3773);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t                        </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input name=\"theme_oct_deals_seo_title_data[category][title][";
            // line 3775
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 3775);
            echo "]\" value=\"";
            echo (($__internal_compile_35 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_seo_title_data"] ?? null), "category", [], "any", false, false, false, 3775), "title", [], "any", false, false, false, 3775)) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 3775)] ?? null) : null);
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t                            </div>
\t\t\t\t\t\t\t\t                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 3778
        echo "\t\t\t\t\t\t\t\t                            <div class=\"seo-variant\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 3779
        echo ($context["entry_seo_variants"] ?? null);
        echo ":<br />[name]<br />[store]<br />[address]<br />[phone]<br />[time]
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-seo_category_description_status\">";
        // line 3785
        echo ($context["entry_seo_description_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_seo_title_data[category][description_status]\" ";
        // line 3788
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_seo_title_data"] ?? null), "category", [], "any", false, false, false, 3788), "description_status", [], "any", false, false, false, 3788)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-seo_category_description_status\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-seo_category_description_status\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-seo_category_description_empty\">";
        // line 3802
        echo ($context["entry_seo_title_empty"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_seo_title_data[category][description_empty]\" ";
        // line 3805
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_seo_title_data"] ?? null), "category", [], "any", false, false, false, 3805), "description_empty", [], "any", false, false, false, 3805)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-seo_category_description_empty\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-seo_category_description_empty\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 3818
        echo ($context["entry_seo_description"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t                        \t";
        // line 3820
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 3821
            echo "\t\t\t\t\t\t\t\t                        \t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t                        <span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t                        \t<img src=\"language/";
            // line 3823
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 3823);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 3823);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 3823);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t                        </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input name=\"theme_oct_deals_seo_title_data[category][description][";
            // line 3825
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 3825);
            echo "]\" value=\"";
            echo (($__internal_compile_36 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_seo_title_data"] ?? null), "category", [], "any", false, false, false, 3825), "description", [], "any", false, false, false, 3825)) && is_array($__internal_compile_36) || $__internal_compile_36 instanceof ArrayAccess ? ($__internal_compile_36[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 3825)] ?? null) : null);
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t                            </div>
\t\t\t\t\t\t\t\t                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 3828
        echo "\t\t\t\t\t\t\t\t                            <div class=\"seo-variant\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 3829
        echo ($context["entry_seo_variants"] ?? null);
        echo ":<br />[name]<br />[store]<br />[address]<br />[phone]<br />[time]
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-seo_title-manufacturer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-seo_manufacturer_title_status\">";
        // line 3836
        echo ($context["entry_seo_title_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_seo_title_data[manufacturer][title_status]\" ";
        // line 3839
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_seo_title_data"] ?? null), "manufacturer", [], "any", false, false, false, 3839), "title_status", [], "any", false, false, false, 3839)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-seo_manufacturer_title_status\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-seo_manufacturer_title_status\"></label>
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 3851
        echo ($context["entry_seo_title"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t                    ";
        // line 3853
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 3854
            echo "\t\t\t\t\t\t\t\t                            <div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t                        <span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t                        \t<img src=\"language/";
            // line 3856
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 3856);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 3856);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 3856);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t                        </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input name=\"theme_oct_deals_seo_title_data[manufacturer][title][";
            // line 3858
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 3858);
            echo "]\" value=\"";
            echo (($__internal_compile_37 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_seo_title_data"] ?? null), "manufacturer", [], "any", false, false, false, 3858), "title", [], "any", false, false, false, 3858)) && is_array($__internal_compile_37) || $__internal_compile_37 instanceof ArrayAccess ? ($__internal_compile_37[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 3858)] ?? null) : null);
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t                            </div>
\t\t\t\t\t\t\t\t                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 3861
        echo "\t\t\t\t\t\t\t\t                            <div class=\"seo-variant\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 3862
        echo ($context["entry_seo_variants"] ?? null);
        echo ":<br />[name]<br />[store]<br />[address]<br />[phone]<br />[time]
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-seo_manufacturer_description_status\">";
        // line 3867
        echo ($context["entry_seo_description_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_seo_title_data[manufacturer][description_status]\" ";
        // line 3870
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_seo_title_data"] ?? null), "manufacturer", [], "any", false, false, false, 3870), "description_status", [], "any", false, false, false, 3870)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-seo_manufacturer_description_status\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-seo_manufacturer_description_status\"></label>
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 3882
        echo ($context["entry_seo_description"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t                        \t";
        // line 3884
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 3885
            echo "\t\t\t\t\t\t\t\t                        \t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t                        <span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t                        \t<img src=\"language/";
            // line 3887
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 3887);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 3887);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 3887);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t                        </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input name=\"theme_oct_deals_seo_title_data[manufacturer][description][";
            // line 3889
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 3889);
            echo "]\" value=\"";
            echo (($__internal_compile_38 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_seo_title_data"] ?? null), "manufacturer", [], "any", false, false, false, 3889), "description", [], "any", false, false, false, 3889)) && is_array($__internal_compile_38) || $__internal_compile_38 instanceof ArrayAccess ? ($__internal_compile_38[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 3889)] ?? null) : null);
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t                            </div>
\t\t\t\t\t\t\t\t                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 3892
        echo "\t\t\t\t\t\t\t\t                            <div class=\"seo-variant\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 3893
        echo ($context["entry_seo_variants"] ?? null);
        echo ":<br />[name]<br />[store]<br />[address]<br />[phone]<br />[time]
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-seo_urls\">
\t\t\t\t\t\t\t\t\t\t<fildset>
\t\t\t\t\t\t\t\t\t\t\t<legend>SEO URL</legend>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group text_seo_url_danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 3907
        echo ($context["text_seo_url_danger"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-seo_url_status\">";
        // line 3912
        echo ($context["entry_show_widget_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_seo_url_status\" ";
        // line 3915
        if (($context["theme_oct_deals_seo_url_status"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-seo_url_status\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-seo_url_status\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-seo_url_status\">";
        // line 3927
        echo ($context["entry_seo_url_lang_prefix"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 3929
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 3930
            echo "\t\t\t\t\t\t\t                    \t<div class=\"input-group\">
\t\t\t\t\t\t\t\t                        <span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t                        \t<img src=\"language/";
            // line 3932
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 3932);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 3932);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 3932);
            echo "\" />
\t\t\t\t\t\t\t\t                        </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input name=\"theme_oct_deals_seo_url_data[lang_prefix][";
            // line 3934
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 3934);
            echo "]\" value=\"";
            echo (($__internal_compile_39 = twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_seo_url_data"] ?? null), "lang_prefix", [], "any", false, false, false, 3934)) && is_array($__internal_compile_39) || $__internal_compile_39 instanceof ArrayAccess ? ($__internal_compile_39[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 3934)] ?? null) : null);
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t                        </div>
\t\t\t\t\t\t\t                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 3937
        echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</fildset>
\t\t\t\t\t\t\t\t\t\t<fildset>
\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 3941
        echo ($context["entry_seo_url_product"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-seo_url_product\">";
        // line 3943
        echo ($context["entry_seo_url_product"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input name=\"theme_oct_deals_seo_url_data[product]\" value=\"";
        // line 3945
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_seo_url_data"] ?? null), "product", [], "any", false, false, false, 3945);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"seo-variant\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 3947
        echo ($context["entry_seo_variants"] ?? null);
        echo ":<br />[name]<br />[model]<br />[sku]<br />[brand]<br />[lang_prefix]
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-seo_url_category\">";
        // line 3952
        echo ($context["entry_seo_url_category"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input name=\"theme_oct_deals_seo_url_data[category]\" value=\"";
        // line 3954
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_seo_url_data"] ?? null), "category", [], "any", false, false, false, 3954);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"seo-variant\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 3956
        echo ($context["entry_seo_variants"] ?? null);
        echo ":<br />[name]<br />[lang_prefix]
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-seo_url_manufacturer\">";
        // line 3961
        echo ($context["entry_seo_url_manufacturer"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input name=\"theme_oct_deals_seo_url_data[manufacturer]\" value=\"";
        // line 3963
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_seo_url_data"] ?? null), "manufacturer", [], "any", false, false, false, 3963);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"seo-variant\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 3965
        echo ($context["entry_seo_variants"] ?? null);
        echo ":<br />[name]<br />[lang_prefix]
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-seo_url_information\">";
        // line 3970
        echo ($context["entry_seo_url_information"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input name=\"theme_oct_deals_seo_url_data[information]\" value=\"";
        // line 3972
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_seo_url_data"] ?? null), "information", [], "any", false, false, false, 3972);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"seo-variant\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 3974
        echo ($context["entry_seo_variants"] ?? null);
        echo ":<br />[name]<br />[lang_prefix]
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-seo_url_blog_category\">";
        // line 3979
        echo ($context["entry_seo_url_blog_category"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input name=\"theme_oct_deals_seo_url_data[blog_category]\" value=\"";
        // line 3981
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_seo_url_data"] ?? null), "blog_category", [], "any", false, false, false, 3981);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"seo-variant\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 3983
        echo ($context["entry_seo_variants"] ?? null);
        echo ":<br />[name]<br />[lang_prefix]
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-seo_url_blog_article\">";
        // line 3988
        echo ($context["entry_seo_url_blog_article"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input name=\"theme_oct_deals_seo_url_data[blog_article]\" value=\"";
        // line 3990
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_seo_url_data"] ?? null), "blog_article", [], "any", false, false, false, 3990);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"seo-variant\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 3992
        echo ($context["entry_seo_variants"] ?? null);
        echo ":<br />[name]<br />[lang_prefix]
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</fildset>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-seo_home\">
\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t<legend>SEO Home page (title/description)</legend>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-seo_home_status\">";
        // line 4002
        echo ($context["entry_show_widget_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_seo_home_status\" ";
        // line 4005
        if (($context["theme_oct_deals_seo_home_status"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-seo_home_status\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-seo_home_status\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 4019
        echo ($context["entry_seo_title"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t                    ";
        // line 4021
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 4022
            echo "\t\t\t\t\t\t\t\t                            <div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t                        <span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t                        \t<img src=\"language/";
            // line 4024
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 4024);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 4024);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 4024);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t                        </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input name=\"theme_oct_deals_seo_home_data[title][";
            // line 4026
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4026);
            echo "]\" value=\"";
            echo (($__internal_compile_40 = twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_seo_home_data"] ?? null), "title", [], "any", false, false, false, 4026)) && is_array($__internal_compile_40) || $__internal_compile_40 instanceof ArrayAccess ? ($__internal_compile_40[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4026)] ?? null) : null);
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t                            </div>
\t\t\t\t\t\t\t\t                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 4029
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 4033
        echo ($context["entry_seo_description"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t                        \t";
        // line 4035
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 4036
            echo "\t\t\t\t\t\t\t\t                        \t<div class=\"input-group\" style=\"margin-bottom: 12px;\" >
\t\t\t\t\t\t\t\t\t\t                        <span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t                        \t<img src=\"language/";
            // line 4038
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 4038);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 4038);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 4038);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t                        </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"theme_oct_deals_seo_home_data[description][";
            // line 4040
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4040);
            echo "]\" class=\"form-control\" />";
            echo (($__internal_compile_41 = twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_seo_home_data"] ?? null), "description", [], "any", false, false, false, 4040)) && is_array($__internal_compile_41) || $__internal_compile_41 instanceof ArrayAccess ? ($__internal_compile_41[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4040)] ?? null) : null);
            echo "</textarea>
\t\t\t\t\t\t\t\t                            </div>
\t\t\t\t\t\t\t\t                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 4043
        echo "\t\t\t\t\t\t\t\t                            
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<legend>Home page Open Graph main image</legend>
\t\t\t\t\t\t\t\t\t\t\t<div id=\"oct_abandoned_cart\"></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-seo_home_image_status\">";
        // line 4052
        echo ($context["entry_show_widget_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_seo_home_image_status\" ";
        // line 4055
        if (($context["theme_oct_deals_seo_home_image_status"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-seo_home_image_status\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-seo_home_image_status\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 4069
        echo ($context["entry_og_image"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t                    ";
        // line 4071
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 4072
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 4072);
            echo "
\t\t\t\t\t\t\t\t                            <div class=\"input-group\" style=\"margin-bottom: 12px;\">
\t\t\t\t\t\t\t\t\t\t                        <span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t                        \t<img src=\"language/";
            // line 4075
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 4075);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 4075);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 4075);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t                        </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" id=\"home-images-data-";
            // line 4077
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4077);
            echo "\" data-toggle=\"image\" class=\"img-thumbnail\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img data-placeholder=\"";
            // line 4078
            echo ($context["thumb"] ?? null);
            echo "\" src=\"";
            if ((($__internal_compile_42 = twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_seo_home_image_data"] ?? null), "image", [], "any", false, false, false, 4078)) && is_array($__internal_compile_42) || $__internal_compile_42 instanceof ArrayAccess ? ($__internal_compile_42[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4078)] ?? null) : null)) {
                echo "/image/";
                echo (($__internal_compile_43 = twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_seo_home_image_data"] ?? null), "image", [], "any", false, false, false, 4078)) && is_array($__internal_compile_43) || $__internal_compile_43 instanceof ArrayAccess ? ($__internal_compile_43[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4078)] ?? null) : null);
            } else {
                echo ($context["thumb"] ?? null);
            }
            echo "\" alt=\"\" title=\"\" width=\"100\" height=\"100\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input id=\"home-image-data-";
            // line 4080
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4080);
            echo "\" type=\"hidden\" name=\"theme_oct_deals_seo_home_image_data[image][";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4080);
            echo "]\" value=\"";
            if ((($__internal_compile_44 = twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_seo_home_image_data"] ?? null), "image", [], "any", false, false, false, 4080)) && is_array($__internal_compile_44) || $__internal_compile_44 instanceof ArrayAccess ? ($__internal_compile_44[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4080)] ?? null) : null)) {
                echo (($__internal_compile_45 = twig_get_attribute($this->env, $this->source, ($context["theme_oct_deals_seo_home_image_data"] ?? null), "image", [], "any", false, false, false, 4080)) && is_array($__internal_compile_45) || $__internal_compile_45 instanceof ArrayAccess ? ($__internal_compile_45[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4080)] ?? null) : null);
            }
            echo "\" />
\t\t\t\t\t\t\t\t                            </div>
\t\t\t\t\t\t\t\t                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 4083
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-help\">
\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t<legend>";
        // line 4095
        echo ($context["tab_help"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t";
        // line 4097
        echo ($context["entry_help_text"] ?? null);
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<input type=\"hidden\" name=\"theme_oct_deals_version\" value=\"";
        // line 4100
        echo ($context["theme_oct_deals_version"] ?? null);
        echo "\" />
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<script>
\$('input[name=\\'advantage_link\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/information/octAutocomplete&user_token=";
        // line 4110
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tcache: false,
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['information_id'],
\t\t\t\t\t\tdescr: item['description'],
\t\t\t\t\t\thref: item['href'],
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\tlet in_id = \$(this).attr('id').split('-');

\t\t\$('input[name=\\'advantage_link\\']').val('');
\t\t\$('#advantages_id-' + in_id[1]).val(item.value);

\t\t\$.each(item.descr, function(i, val) {
\t\t\t\$('#advantage-title-' + in_id[1] + i).val(val['title']);
\t\t});

\t\t\$.each(item.href[";
        // line 4135
        echo ($context["store_id"] ?? null);
        echo "], function(i, val) {
\t\t\t\$('#advantage-href-' + in_id[1] + i).val('/'+ val);
\t\t});
\t}
});

\$('input[name=\\'header_advantage_link\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/information/octAutocomplete&user_token=";
        // line 4144
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tcache: false,
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\thref: item['href'],
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\tlet in_id = \$(this).attr('id').split('-');

\t\t\$('input[name=\\'header_advantage_link\\']').val('');

\t\t\$.each(item.descr, function(i, val) {
\t\t\t\$('#header_advantage-title-' + in_id[1] + i).val(val['title']);
\t\t});

\t\t\$.each(item.href[";
        // line 4166
        echo ($context["store_id"] ?? null);
        echo "], function(i, val) {
\t\t\t\$('#header_advantage-href-' + in_id[1] + i).val('/'+ val);
\t\t});
\t}
});

\$('input[name=\\'footer_advantage_link\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/information/octAutocomplete&user_token=";
        // line 4175
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tcache: false,
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\thref: item['href'],
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\tlet in_id = \$(this).attr('id').split('-');

\t\t\$('input[name=\\'footer_advantage_link\\']').val('');

\t\t\$.each(item.descr, function(i, val) {
\t\t\t\$('#footer_advantage-title-' + in_id[1] + i).val(val['title']);
\t\t});

\t\t\$.each(item.href[";
        // line 4197
        echo ($context["store_id"] ?? null);
        echo "], function(i, val) {
\t\t\t\$('#footer_advantage-href-' + in_id[1] + i).val('/'+ val);
\t\t});
\t}
});

\$('input[name=\\'mobile_advantage_link\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/information/octAutocomplete&user_token=";
        // line 4206
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tcache: false,
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\thref: item['href'],
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\tlet in_id = \$(this).attr('id').split('-');

\t\t\$('input[name=\\'mobile_advantage_link\\']').val('');

\t\t\$.each(item.descr, function(i, val) {
\t\t\t\$('#mobile_advantage-title-' + in_id[1] + i).val(val['title']);
\t\t});

\t\t\$.each(item.href[";
        // line 4228
        echo ($context["store_id"] ?? null);
        echo "], function(i, val) {
\t\t\t\$('#mobile_advantage-href-' + in_id[1] + i).val('/'+ val);
\t\t});
\t}
});

// Category
\$('input[name=\\'category\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/category/autocomplete&user_token=";
        // line 4238
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tcache: false,
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['category_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'category\\']').val('');

\t\t\$('#product-category' + item['value']).remove();

\t\t\$('#product-category').append(`<div id=\"product-category\${ item['value'] }\"><i class=\"fa fa-minus-circle\"></i> \${ item['label'] }<input type=\"hidden\" name=\"theme_oct_deals_data[footer_category_links][]\" value=\"\${ item['value'] }\" /></div>`);
\t}
});

\$('#product-category').delegate('.fa-minus-circle', 'click', function() {
\t\$(this).parent().remove();
});

\$(\".spectrum\").spectrum({
\tpreferredFormat: \"rgb\",
\tshowInitial: true,
\tshowInput: true,
\tshowAlpha: true,
\tshowPalette: true,
\tpalette: [[\"red\", \"rgba(0, 255, 0, .5)\", \"rgb(0, 0, 255)\"]]
});
</script>
<script>
const codemirror = CodeMirror.fromTextArea(document.getElementById('css_code'), {
\tmode : 'css',
\theight: '100%',
\tlineNumbers: true,
\tautofocus: true,
\tlineWrapping: true
});

const codemirror2 = CodeMirror.fromTextArea(document.getElementById('js_code'), {
\tmode : 'javascript',
\theight: '100%',
\tlineNumbers: true,
\tautofocus: true,
\tlineWrapping: true
});

\$('a#code_mir').on('shown.bs.tab', function () {
\t\$('.CodeMirror').each(function(i, el){
\t\tel.CodeMirror.refresh();
\t});
});

\$('#input-product_dop_tab').change(function() {
    let \$input = \$(this);

    if (\$input.is(\":checked\")) {
        \$(\"#product_dop_tabs_text\").slideDown('slow');
    } else {
        \$(\"#product_dop_tabs_text\").slideUp('slow');
    }
});

\$('#input-product_advantage').change(function() {
    let \$input = \$(this);

    if (\$input.is(\":checked\")) {
        \$(\"#product_advantages\").slideDown('slow');
    } else {
        \$(\"#product_advantages\").slideUp('slow');
    }
});

\$('#address-language a:first,#language-megamenu a:first,#language_mobile a:first,#open-language a:first,#contact_view_html-language a:first,#product_dop_tab-language a:first,#order_register_account-language a:first,#order_no_register_account-language a:first').tab('show');
</script>
<script>
let social_row = ";
        // line 4319
        echo ($context["social_row"] ?? null);
        echo ";

function addSocial() {
\tconst html = `
\t<tr id=\"social-row\${ social_row }\">
\t\t<td class=\"left\">
\t\t\t<div class=\"input-group\">
\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t<button onClick=\"fontIcons('social_icone-\${ social_row }', 'social_input_icone-\${ social_row }');\" class=\"btn btn-default\" type=\"button\"><i id=\"social_icone-\${ social_row }\" class=\"fas fa-asterisk\"></i></button>
\t\t\t\t<input type=\"hidden\" name=\"theme_oct_deals_data[socials][\${ social_row }][icone]\" id=\"social_input_icone-\${ social_row }\" value=\"\" />
\t\t\t\t</span>
\t\t\t\t<input type=\"text\" name=\"theme_oct_deals_data[socials][\${ social_row }][title]\" value=\"\" placeholder=\"";
        // line 4330
        echo ($context["entry_social_title"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t</div>
\t\t</td>
\t\t<td class=\"left\">
\t\t\t<input type=\"text\" name=\"theme_oct_deals_data[socials][\${ social_row }][link]\" value=\"\" placeholder=\"";
        // line 4334
        echo ($context["entry_social_link"] ?? null);
        echo "\" class=\"form-control\" />
\t\t</td>
\t\t<td class=\"left\">
\t\t\t<a onclick=\"\$('#social-row\${ social_row }').remove()\" data-toggle=\"tooltip\" title=\"";
        // line 4337
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></a>
\t\t</td>
\t</tr>
\t`;

\t\$('#tab-socials-settings table tbody').append(html);

\tsocial_row++;
}
</script>
<script>
let header_advantages_row = ";
        // line 4348
        echo ($context["header_advantages_row"] ?? null);
        echo ";

function addHeaderAdvantage() {
\tconst html = `
\t<tr id=\"header_advantage-row\${ header_advantages_row }\">
\t\t<td class=\"text-left\">
\t\t\t<div class=\"col-sm-12\">
\t\t\t\t<input type=\"text\" name=\"header_advantage_link\" value=\"\" placeholder=\"";
        // line 4355
        echo ($context["entry_footer_information_links"] ?? null);
        echo "\" id=\"advantage_link-\${ header_advantages_row }\" class=\"form-control\" autocomplete=\"off\" /><hr />
\t\t\t</div>
\t\t\t<div class=\"col-sm-6\">
\t\t\t\t";
        // line 4358
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 4359
            echo "\t\t\t\t<div class=\"input-group\">
\t                <span class=\"input-group-addon\">
\t                \t<img src=\"language/";
            // line 4361
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 4361);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 4361);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 4361);
            echo "\" />
\t                </span>
\t\t\t\t\t<input type=\"text\" placeholder=\"Title\" name=\"theme_oct_deals_data[header_links][\${ header_advantages_row }][";
            // line 4363
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4363);
            echo "][title]\" value=\"\" id=\"header_advantage-title-\${ header_advantages_row }";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4363);
            echo "\" class=\"form-control\" />
\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 4366
        echo "\t\t\t</div>
\t\t\t<div class=\"col-sm-6\">
\t\t\t\t";
        // line 4368
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 4369
            echo "\t\t\t\t<div class=\"input-group\">
\t                <span class=\"input-group-addon\">
\t                \t<img src=\"language/";
            // line 4371
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 4371);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 4371);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 4371);
            echo "\" />
\t                </span>
\t\t\t\t\t<input type=\"text\" placeholder=\"Link\" name=\"theme_oct_deals_data[header_links][\${ header_advantages_row }][";
            // line 4373
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4373);
            echo "][link]\" value=\"\" id=\"header_advantage-href-\${ header_advantages_row }";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4373);
            echo "\" class=\"form-control\" />
\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 4376
        echo "\t\t\t</div>
\t\t</td>
\t\t<td class=\"text-left\" style=\"width:5%;\">
\t\t\t<button type=\"button\" onclick=\"\$('#header_advantage-row\${ header_advantages_row }').remove()\" data-toggle=\"tooltip\" title=\"";
        // line 4379
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button>
\t\t</td>
\t</tr>
\t`;

\t\$('#header_advantages table tbody').append(html);

\theader_advantages_row++;

\t\$('input[name=\\'header_advantage_link\\']').autocomplete({
\t\t'source': function(request, response) {
\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=catalog/information/octAutocomplete&user_token=";
        // line 4391
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\t\tdataType: 'json',
\t\t\t\tcache: false,
\t\t\t\tsuccess: function(json) {
\t\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\t\treturn {
\t\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\t\tvalue: item['information_id'],
\t\t\t\t\t\t\tdescr: item['description'],
\t\t\t\t\t\t\thref: item['href'],
\t\t\t\t\t\t}
\t\t\t\t\t}));
\t\t\t\t}
\t\t\t});
\t\t},
\t\t'select': function(item) {
\t\t\tlet in_id = \$(this).attr('id').split('-');

\t\t\t\$('input[name=\\'header_advantage_link\\']').val('');

\t\t\t\$.each(item.descr, function(i, val) {
\t\t\t\t\$('#header_advantage-title-' + in_id[1] + i).val(val['title']);
\t\t\t});

\t\t\t\$.each(item.href[";
        // line 4415
        echo ($context["store_id"] ?? null);
        echo "], function(i, val) {
\t\t\t\t\$('#header_advantage-href-' + in_id[1] + i).val('/'+ val);
\t\t\t});
\t\t}
\t});
}
</script>
<script>
let footer_advantages_row = ";
        // line 4423
        echo ($context["footer_advantages_row"] ?? null);
        echo ";

function addFooterAdvantage() {
\tconst html = `
\t<tr id=\"footer_advantage-row\${ footer_advantages_row }\">
\t\t<td class=\"text-left\">
\t\t\t<div class=\"col-sm-12\">
\t\t\t\t<input type=\"text\" name=\"footer_advantage_link\" value=\"\" placeholder=\"";
        // line 4430
        echo ($context["entry_footer_information_links"] ?? null);
        echo "\" id=\"advantage_link-\${ footer_advantages_row }\" class=\"form-control\" autocomplete=\"off\" /><hr />
\t\t\t</div>
\t\t\t<div class=\"col-sm-6\">
\t\t\t\t";
        // line 4433
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 4434
            echo "\t\t\t\t<div class=\"input-group\">
\t                <span class=\"input-group-addon\">
\t                \t<img src=\"language/";
            // line 4436
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 4436);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 4436);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 4436);
            echo "\" />
\t                </span>
\t\t\t\t\t<input type=\"text\" placeholder=\"Title\" name=\"theme_oct_deals_data[footer_links][\${ footer_advantages_row }][";
            // line 4438
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4438);
            echo "][title]\" value=\"\" id=\"footer_advantage-title-\${ footer_advantages_row }";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4438);
            echo "\" class=\"form-control\" />
\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 4441
        echo "\t\t\t</div>
\t\t\t<div class=\"col-sm-6\">
\t\t\t\t";
        // line 4443
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 4444
            echo "\t\t\t\t<div class=\"input-group\">
\t                <span class=\"input-group-addon\">
\t                \t<img src=\"language/";
            // line 4446
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 4446);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 4446);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 4446);
            echo "\" />
\t                </span>
\t\t\t\t\t<input type=\"text\" placeholder=\"Link\" name=\"theme_oct_deals_data[footer_links][\${ footer_advantages_row }][";
            // line 4448
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4448);
            echo "][link]\" value=\"\" id=\"footer_advantage-href-\${ footer_advantages_row }";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4448);
            echo "\" class=\"form-control\" />
\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 4451
        echo "\t\t\t</div>
\t\t</td>
\t\t<td class=\"text-left\" style=\"width:5%;\">
\t\t\t<button type=\"button\" onclick=\"\$('#footer_advantage-row\${ footer_advantages_row }').remove()\" data-toggle=\"tooltip\" title=\"";
        // line 4454
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button>
\t\t</td>
\t</tr>
\t`;

\t\$('#footer_advantages table tbody').append(html);

\tfooter_advantages_row++;

\t\$('input[name=\\'footer_advantage_link\\']').autocomplete({
\t\t'source': function(request, response) {
\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=catalog/information/octAutocomplete&user_token=";
        // line 4466
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\t\tdataType: 'json',
\t\t\t\tcache: false,
\t\t\t\tsuccess: function(json) {
\t\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\t\treturn {
\t\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\t\tvalue: item['information_id'],
\t\t\t\t\t\t\tdescr: item['description'],
\t\t\t\t\t\t\thref: item['href'],
\t\t\t\t\t\t}
\t\t\t\t\t}));
\t\t\t\t}
\t\t\t});
\t\t},
\t\t'select': function(item) {
\t\t\tlet in_id = \$(this).attr('id').split('-');

\t\t\t\$('input[name=\\'footer_advantage_link\\']').val('');

\t\t\t\$.each(item.descr, function(i, val) {
\t\t\t\t\$('#footer_advantage-title-' + in_id[1] + i).val(val['title']);
\t\t\t});

\t\t\t\$.each(item.href[";
        // line 4490
        echo ($context["store_id"] ?? null);
        echo "], function(i, val) {
\t\t\t\t\$('#footer_advantage-href-' + in_id[1] + i).val('/'+ val);
\t\t\t});
\t\t}
\t});
}
</script>
<script>
let advantages_row = ";
        // line 4498
        echo ($context["advantages_row"] ?? null);
        echo ";

function addAdvantage() {
\tconst html = `
\t<tr id=\"advantage-row\${ advantages_row }\">
\t\t<td class=\"text-left\" style=\"width:5%;\">
\t\t\t<div class=\"input-group\">
\t            <span class=\"input-group-btn\">
\t\t\t\t\t<a href=\"\" id=\"advantages_icone-\${ advantages_row }\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 4506
        echo ($context["thumb"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"Select Icon\" /></a>
\t            \t<input type=\"hidden\" name=\"theme_oct_deals_data[product_advantages][\${ advantages_row }][icone]\" id=\"advantages_input_icone-\${ advantages_row }\" value=\"\" />
\t            \t<input type=\"hidden\" name=\"theme_oct_deals_data[product_advantages][\${ advantages_row }][information_id]\" id=\"advantages_id-\${ advantages_row }\" value=\"\" />
\t            </span>
\t       </div>
\t\t</td>
\t\t<td class=\"text-left\">
\t\t\t<div class=\"col-sm-12\">
\t\t\t\t<input type=\"text\" name=\"advantage_link\" value=\"\" placeholder=\"";
        // line 4514
        echo ($context["entry_footer_information_links"] ?? null);
        echo "\" id=\"advantage_link-\${ advantages_row }\" class=\"form-control\" autocomplete=\"off\" /><hr />
\t\t\t</div>
\t\t\t<div class=\"col-sm-6\">
\t\t\t\t";
        // line 4517
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 4518
            echo "\t\t\t\t<div class=\"input-group\">
\t                <span class=\"input-group-addon\">
\t                \t<img src=\"language/";
            // line 4520
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 4520);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 4520);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 4520);
            echo "\" />
\t                </span>
\t\t\t\t\t<input type=\"text\" placeholder=\"Title\" name=\"theme_oct_deals_data[product_advantages][\${ advantages_row }][";
            // line 4522
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4522);
            echo "][title]\" value=\"\" id=\"advantage-title-\${ advantages_row }";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4522);
            echo "\" class=\"form-control\" />
\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 4525
        echo "\t\t\t</div>
\t\t\t<div class=\"col-sm-6\">
\t\t\t\t";
        // line 4527
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 4528
            echo "\t\t\t\t<div class=\"input-group\">
\t                <span class=\"input-group-addon\">
\t                \t<img src=\"language/";
            // line 4530
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 4530);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 4530);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 4530);
            echo "\" />
\t                </span>
\t\t\t\t\t<input type=\"text\" placeholder=\"Link\" name=\"theme_oct_deals_data[product_advantages][\${ advantages_row }][";
            // line 4532
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4532);
            echo "][link]\" value=\"\" id=\"advantage-href-\${ advantages_row }";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4532);
            echo "\" class=\"form-control\" />
\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 4535
        echo "\t\t\t</div>
\t\t</td>
\t\t<td class=\"text-left\">
\t\t\t";
        // line 4538
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 4539
            echo "\t\t\t<div class=\"input-group\">
\t            <span class=\"input-group-addon\">
\t            \t<img src=\"language/";
            // line 4541
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 4541);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 4541);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 4541);
            echo "\" />
\t            </span>
\t\t\t\t<textarea name=\"theme_oct_deals_data[product_advantages][\${ advantages_row }][";
            // line 4543
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4543);
            echo "][text]\" class=\"form-control\"></textarea>
\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 4546
        echo "\t\t</td>
\t\t<td class=\"text-left\" style=\"width:10%;\">
\t\t\t<label class=\"col-sm-12\" for=\"input-product_advantage_popup-\${ advantages_row }\">";
        // line 4548
        echo ($context["entry_product_advantage_popup"] ?? null);
        echo "</label>
\t\t\t<div class=\"col-sm-12\">
\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[product_advantages][\${ advantages_row }][popup]\" id=\"input-product_advantage_popup-\${ advantages_row }\" tabindex=\"1\">
\t\t\t\t\t<label for=\"input-product_advantage_popup-\${ advantages_row }\"></label>
\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</td>
\t\t<td class=\"text-left\" style=\"width:5%;\">
\t\t\t<button type=\"button\" onclick=\"\$('#advantage-row\${ advantages_row }').remove()\" data-toggle=\"tooltip\" title=\"";
        // line 4563
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button>
\t\t</td>
\t</tr>
\t`;

\t\$('#product_advantages table tbody').append(html);

\tadvantages_row++;

\t\$('input[name=\\'advantage_link\\']').autocomplete({
\t\t'source': function(request, response) {
\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=catalog/information/octAutocomplete&user_token=";
        // line 4575
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\t\tdataType: 'json',
\t\t\t\tcache: false,
\t\t\t\tsuccess: function(json) {
\t\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\t\treturn {
\t\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\t\tvalue: item['information_id'],
\t\t\t\t\t\t\tdescr: item['description'],
\t\t\t\t\t\t\thref: item['href'],
\t\t\t\t\t\t}
\t\t\t\t\t}));
\t\t\t\t}
\t\t\t});
\t\t},
\t\t'select': function(item) {
\t\t\tlet in_id = \$(this).attr('id').split('-');

\t\t\t\$('input[name=\\'advantage_link\\']').val('');

\t\t\t\$('#advantages_id-' + in_id[1]).val(item.value);

\t\t\t\$.each(item.descr, function(i, val) {
\t\t\t\t\$('#advantage-title-' + in_id[1] + i).val(val['title']);
\t\t\t});

\t\t\t\$.each(item.href[";
        // line 4601
        echo ($context["store_id"] ?? null);
        echo "], function(i, val) {
\t\t\t\t\$('#advantage-href-' + in_id[1] + i).val('/'+ val);
\t\t\t});
\t\t}
\t});
}
</script>
<script>
let payment_row = ";
        // line 4609
        echo ($context["payment_row"] ?? null);
        echo ";

function addPayment(){
\tconst html = `
\t<div id=\"payments-row-\${ payment_row }\" class=\"col-sm-2 payments\">
\t\t<a href=\"javascript:;\" onclick=\"\$('#payments-row-\${ payment_row }').remove()\" data-toggle=\"tooltip\" title=\"";
        // line 4614
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btnr\"><i class=\"fa fa-minus-circle\"></i></a>
\t\t<label class=\"col-sm-12 control-label\" for=\"input-payments_customers_\${ payment_row }\">
\t\t\t<a href=\"\" id=\"thumb-image\${ payment_row }\" data-toggle=\"image\">
\t\t\t\t<img class=\"img-thumbnail\" src=\"";
        // line 4617
        echo ($context["placeholder"] ?? null);
        echo "\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" />
\t\t\t</a>
\t\t\t<input type=\"hidden\" value=\"\" name=\"theme_oct_deals_data[payments][customers][\${ payment_row }][image]\" id=\"input-image\${ payment_row }\" />
\t\t</label>
\t\t<div class=\"col-sm-6\">
\t\t\t<div class=\"toggle-group\">
\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_deals_data[payments][customers][\${ payment_row }][status]\" id=\"input-payments_customers_\${ payment_row }\" tabindex=\"1\">
\t\t\t\t<label for=\"input-payments_customers_\${ payment_row }\"></label>
\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t`;

\t\$(\"#add_new_block\").before(html);

\tpayment_row++;
}
</script>

<script>
\$(document).delegate('[id^=megamenu-] .panel-heading', 'click', function() {
\tlet id_menu = \$(this).parent().attr('id');
\tlet m_id = id_menu.split('-');

\t\$.ajax({
\t\turl: 'index.php?route=octemplates/menu/oct_menu/getMenu&user_token=";
        // line 4648
        echo ($context["user_token"] ?? null);
        echo "&menu_id=' + m_id[1],
\t\ttype: 'get',
\t\tcache: false,
\t\tdataType: 'html',
\t\tsuccess: function(data) {
\t\t\tif (data.length > 1) {
\t\t\t\t\$('#menu_settings-'+ m_id[1]).html(data);
\t\t\t}
\t\t}
\t});

\t\$(this).siblings('.panel-body').find('.main_menu_block a:first').tab('show');
\t\$(this).siblings('.panel-body').find('.menu_lang_block a:first').tab('show');
\t\$(this).siblings('.panel-body').toggle();
});

\$(document).delegate('.menu_type', 'change', function() {
\tlet m_id = \$(this).attr(\"id\").split('-');
\tlet val = \$(this).val();

\t\$.ajax({
\t\turl: 'index.php?route=octemplates/menu/oct_menu/getMenu&user_token=";
        // line 4669
        echo ($context["user_token"] ?? null);
        echo "&type='+ val +'&menu_id=' + m_id[1],
\t\ttype: 'get',
\t\tcache: false,
\t\tdataType: 'html',
\t\tsuccess: function(data) {
\t\t\tif (data.length > 1) {
\t\t\t\t\$('#menu_settings-'+ m_id[1]).html(data);
\t\t\t}
\t\t}
\t});
});

let menu_id = ";
        // line 4681
        echo ($context["menu_id"] ?? null);
        echo ";

function addNewMenuItem() {
\tconst html = `
\t<div class=\"panel panel-default\" id=\"megamenu-\${ menu_id }\">
\t\t<div class=\"panel-heading\">
\t\t\t<span><i class=\"fa fa-bars\" aria-hidden=\"true\"></i> New Menu Item</span>
\t\t\t<a href=\"javascript:;\" class=\"btn btn-danger pull-right\" onclick=\"\$('#megamenu-\${ menu_id }').remove();return false;\">
\t\t\t\t<i class=\"fa fa-trash-o\" aria-hidden=\"true\"></i>
\t\t\t</a>
\t\t</div>
\t\t<div class=\"panel-body\">
\t\t\t<ul class=\"nav nav-tabs main_menu_block\">
\t\t\t\t<li><a href=\"#tab-menu_general\${ menu_id }\" data-toggle=\"tab\">";
        // line 4694
        echo ($context["tab_menu_general"] ?? null);
        echo "</a></li>
\t\t\t\t<li><a href=\"#tab-menu_language\${ menu_id }\" data-toggle=\"tab\">";
        // line 4695
        echo ($context["tab_menu_language"] ?? null);
        echo "</a></li>
\t\t\t\t<li><a href=\"#tab-menu_links\${ menu_id }\" data-toggle=\"tab\">";
        // line 4696
        echo ($context["tab_menu_links"] ?? null);
        echo "</a></li>
\t\t\t</ul>
\t\t\t<div class=\"tab-content\">
\t\t\t\t<div class=\"tab-pane\" id=\"tab-menu_general\${ menu_id }\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 4701
        echo ($context["text_menu_type"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<select name=\"oct_megamenu[\${ menu_id }][type]\" class=\"form-control menu_type\" id=\"menu_type-\${ menu_id }\">
\t\t\t\t\t\t\t\t<option value=\"\" selected=\"selected\">";
        // line 4704
        echo ($context["text_menu_select"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"category\">";
        // line 4705
        echo ($context["text_menu_type_1"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"manufacturer\">";
        // line 4706
        echo ($context["text_menu_type_2"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"oct_blogcategory\">";
        // line 4707
        echo ($context["text_menu_type_3"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"link\">";
        // line 4708
        echo ($context["text_menu_type_4"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 4713
        echo ($context["text_menu_display_option"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<select name=\"oct_megamenu[\${ menu_id }][display_option]\" class=\"form-control menu_display_option\" id=\"menu_display_option-\${ menu_id }\">
\t\t\t\t\t\t\t\t<option value=\"\" ";
        // line 4716
        echo (((twig_get_attribute($this->env, $this->source, ($context["oct_menu"] ?? null), "display_option", [], "any", false, false, false, 4716) == "")) ? ("selected=\"selected\"") : (""));
        echo ">";
        echo ($context["text_menu_display_option_select"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"vertical\" ";
        // line 4717
        echo (((twig_get_attribute($this->env, $this->source, ($context["oct_menu"] ?? null), "display_option", [], "any", false, false, false, 4717) == "vertical")) ? ("selected=\"selected\"") : (""));
        echo ">";
        echo ($context["text_menu_display_option_1"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"horizontal\" ";
        // line 4718
        echo (((twig_get_attribute($this->env, $this->source, ($context["oct_menu"] ?? null), "display_option", [], "any", false, false, false, 4718) == "horizontal")) ? ("selected=\"selected\"") : (""));
        echo ">";
        echo ($context["text_menu_display_option_2"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"menu_settings-\${ menu_id }\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"tab-pane\" id=\"tab-menu_language\${ menu_id }\">
\t\t\t\t\t<legend>";
        // line 4725
        echo ($context["tab_menu_language"] ?? null);
        echo "</legend>
\t\t\t\t\t<ul class=\"nav nav-tabs menu_lang_block\" id=\"menu_item_language\${ menu_id }\">
\t\t\t\t\t\t";
        // line 4727
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 4728
            echo "\t\t\t\t\t\t<li><a href=\"#menu_item_language\${ menu_id }_";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4728);
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 4728);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 4728);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 4728);
            echo "\" />  ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 4728);
            echo "</a></li>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 4730
        echo "\t\t\t\t\t</ul>
\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t";
        // line 4732
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 4733
            echo "\t\t\t\t\t\t<div class=\"tab-pane\" id=\"menu_item_language\${ menu_id }_";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4733);
            echo "\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-title";
            // line 4735
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4735);
            echo "\">";
            echo ($context["entry_menu_title"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"oct_megamenu[\${ menu_id }][description][";
            // line 4737
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4737);
            echo "][title]\" value=\"\" placeholder=\"";
            echo ($context["entry_menu_title"] ?? null);
            echo "\" id=\"input-title";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4737);
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-link";
            // line 4741
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4741);
            echo "\">";
            echo ($context["entry_menu_link"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"oct_megamenu[\${ menu_id }][description][";
            // line 4743
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4743);
            echo "][link]\" value=\"\" placeholder=\"";
            echo ($context["entry_menu_link"] ?? null);
            echo "\" id=\"input-link";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4743);
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 4748
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"tab-pane\" id=\"tab-menu_links\${ menu_id }\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 4752
        echo ($context["entry_menu_store"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
\t\t\t\t\t\t\t\t";
        // line 4755
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 4756
            echo "\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" checked=\"checked\" name=\"oct_megamenu[\${ menu_id }][stories][]\" value=\"";
            // line 4758
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 4758);
            echo "\" />
\t\t\t\t\t\t\t\t\t";
            // line 4759
            echo (($__internal_compile_46 = $context["store"]) && is_array($__internal_compile_46) || $__internal_compile_46 instanceof ArrayAccess ? ($__internal_compile_46["name"] ?? null) : null);
            echo "
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 4763
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-priority\">";
        // line 4767
        echo ($context["entry_menu_customers"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
\t\t\t\t\t\t\t\t";
        // line 4770
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 4771
            echo "\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"oct_megamenu[\${ menu_id }][customers][]\" value=\"";
            // line 4773
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 4773);
            echo "\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t";
            // line 4774
            echo (($__internal_compile_47 = $context["customer_group"]) && is_array($__internal_compile_47) || $__internal_compile_47 instanceof ArrayAccess ? ($__internal_compile_47["name"] ?? null) : null);
            echo "
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 4778
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t`;

\t\$('#megamenu_block .empty_locations').hide();
\t\$(\"#megamenu_block\").append(html);

\tmenu_id++;
\t}\t

\t\$('#add-payment').on('click', function () {
\t\tlet paymentIndex = \$('#payment-blocks .payment-block').length;
\t\tlet html = '';

\t\tif (!paymentIndex) paymentIndex = 0;

\t\tlet paymentBlockHtml = `
\t\t<div class=\"payment-block\" style=\"background: #f9f9f9; border-radius: 10px;\" id=\"payment-block-\${paymentIndex}\">
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-product-payment-image\${paymentIndex}\">";
        // line 4803
        echo ($context["text_image"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<a href=\"\" id=\"payment-block-thumb-image\${ paymentIndex }\" data-toggle=\"image\" class=\"img-thumbnail\">
\t\t\t\t\t\t\t<img src=\"";
        // line 4806
        echo ($context["placeholder"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" width=\"50\"height=\"50\" />
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<input type=\"hidden\" name=\"theme_oct_deals_data[product_payment][\${paymentIndex}][image]\" id=\"input-product-payment-image\${paymentIndex}\" />
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<ul class=\"nav nav-tabs\" id=\"payment-language-tabs-\${paymentIndex}\">
\t\t\t\t";
        // line 4813
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
            // line 4814
            echo "\t\t\t\t\t<li";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 4814)) {
                echo " class=\"active\"";
            }
            echo ">
\t\t\t\t\t\t<a href=\"#payment-language-\${paymentIndex}-";
            // line 4815
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4815);
            echo "\" data-toggle=\"tab\">
\t\t\t\t\t\t\t<img src=\"language/";
            // line 4816
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 4816);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 4816);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 4816);
            echo "\" /> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 4816);
            echo "
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t";
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
        // line 4820
        echo "\t\t\t\t</ul>

\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t";
        // line 4823
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
            // line 4824
            echo "\t\t\t\t\t<div class=\"tab-pane";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 4824)) {
                echo " active";
            }
            echo "\" id=\"payment-language-\${paymentIndex}-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4824);
            echo "\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-title\${paymentIndex}\">";
            // line 4826
            echo ($context["text_title"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><input type=\"text\" name=\"theme_oct_deals_data[product_payment][\${paymentIndex}][";
            // line 4827
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4827);
            echo "][title]\" value=\"\" placeholder=\"";
            echo ($context["text_title"] ?? null);
            echo "\" id=\"input-title";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4827);
            echo "\${paymentIndex}\" class=\"form-control\" /></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
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
        // line 4831
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-sort-order\${paymentIndex}\">";
        // line 4833
        echo ($context["text_sort_order"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-10\"><input type=\"number\" name=\"theme_oct_deals_data[product_payment][\${paymentIndex}][sort_order]\" value=\"0\" placeholder=\"";
        // line 4834
        echo ($context["text_sort_order"] ?? null);
        echo "\" id=\"input-sort-order\${paymentIndex}\" class=\"form-control\" /></div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-sm-2\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t<button type=\"button\" onclick=\"\$('#payment-block-\${paymentIndex}').remove();\" class=\"btn btn-danger\"><i class=\"fa fa-trash\"></i></button>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<hr style=\"border: 0;\">
\t\t</div>
\t\t`;

\t\t\$('#payment-blocks').append(paymentBlockHtml);\t
\t});

\t\$('#add-delivery').on('click', function () {
\t\tlet deliveryIndex = \$('#delivery-blocks .delivery-block').length;
\t\tlet html = '';

\t\tif (!deliveryIndex) deliveryIndex = 0;

\t\tlet deliveryBlockHtml = `
\t\t<div class=\"delivery-block\" style=\"background: #f9f9f9; border-radius: 10px;\" id=\"delivery-block-\${deliveryIndex}\">
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-product-delivery-image\${deliveryIndex}\">";
        // line 4861
        echo ($context["text_image"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<a href=\"\" id=\"delivery-block-thumb-image\${ deliveryIndex }\" data-toggle=\"image\" class=\"img-thumbnail\">
\t\t\t\t\t\t\t<img src=\"";
        // line 4864
        echo ($context["placeholder"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" width=\"50\"height=\"50\" />
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<input type=\"hidden\" name=\"theme_oct_deals_data[product_delivery][\${deliveryIndex}][image]\" id=\"input-product-delivery-image\${deliveryIndex}\" />
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<ul class=\"nav nav-tabs\" id=\"delivery-language-tabs-\${deliveryIndex}\">
\t\t\t\t";
        // line 4871
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
            // line 4872
            echo "\t\t\t\t\t<li";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 4872)) {
                echo " class=\"active\"";
            }
            echo ">
\t\t\t\t\t\t<a href=\"#delivery-language-\${deliveryIndex}-";
            // line 4873
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4873);
            echo "\" data-toggle=\"tab\">
\t\t\t\t\t\t\t<img src=\"language/";
            // line 4874
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 4874);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 4874);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 4874);
            echo "\" /> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 4874);
            echo "
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t";
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
        // line 4878
        echo "\t\t\t\t</ul>

\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t";
        // line 4881
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
            // line 4882
            echo "\t\t\t\t\t<div class=\"tab-pane";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 4882)) {
                echo " active";
            }
            echo "\" id=\"delivery-language-\${deliveryIndex}-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4882);
            echo "\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-title\${deliveryIndex}\">";
            // line 4884
            echo ($context["text_title"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><input type=\"text\" name=\"theme_oct_deals_data[product_delivery][\${deliveryIndex}][";
            // line 4885
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4885);
            echo "][title]\" value=\"\" placeholder=\"";
            echo ($context["text_title"] ?? null);
            echo "\" id=\"input-title";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4885);
            echo "\${deliveryIndex}\" class=\"form-control\" /></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-price\${deliveryIndex}\">";
            // line 4888
            echo ($context["text_price"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><input type=\"text\" name=\"theme_oct_deals_data[product_delivery][\${deliveryIndex}][";
            // line 4889
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4889);
            echo "][price]\" value=\"\" placeholder=\"";
            echo ($context["text_price"] ?? null);
            echo "\" id=\"input-price";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4889);
            echo "\${deliveryIndex}\" class=\"form-control\" /></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-link\${deliveryIndex}\">";
            // line 4892
            echo ($context["text_link"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><input type=\"text\" name=\"theme_oct_deals_data[product_delivery][\${deliveryIndex}][";
            // line 4893
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4893);
            echo "][link]\" value=\"\" placeholder=\"";
            echo ($context["text_link"] ?? null);
            echo "\" id=\"input-link";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4893);
            echo "\${deliveryIndex}\" class=\"form-control\" /></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
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
        // line 4897
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-sort-order\${deliveryIndex}\">";
        // line 4899
        echo ($context["text_sort_order"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-10\"><input type=\"number\" name=\"theme_oct_deals_data[product_delivery][\${deliveryIndex}][sort_order]\" value=\"0\" placeholder=\"";
        // line 4900
        echo ($context["text_sort_order"] ?? null);
        echo "\" id=\"input-sort-order\${deliveryIndex}\" class=\"form-control\" /></div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-sm-2\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t<button type=\"button\" onclick=\"\$('#delivery-block-\${deliveryIndex}').remove();\" class=\"btn btn-danger\"><i class=\"fa fa-trash\"></i></button>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<hr style=\"border: 0;\">
\t\t</div>
\t\t`;

\t\t\$('#delivery-blocks').append(deliveryBlockHtml);\t
\t});

\$(document).delegate('[id^=locations-] .panel-heading', 'click', function() {
\t\$(this).siblings('.panel-body').find('.location-block a:first').tab('show');
\t\$(this).siblings('.panel-body').toggle();
});

function deleteProduct(product_id) {
\t\$('#product-related' + product_id).remove();
}

let location_id = ";
        // line 4926
        echo ($context["location_id"] ?? null);
        echo ";

function addNewLocation() {
\tconst html = `
\t<div class=\"panel panel-default\" id=\"locations-\${ location_id }\">
\t\t<div class=\"panel-heading\">
\t\t\t<span><i class=\"fa fa-address-card\" aria-hidden=\"true\"></i> Title</span>
\t\t\t<a href=\"javascript:;\" class=\"btn btn-danger pull-right\" onclick=\"\$('#locations-\${ location_id }').remove();return false;\">
\t\t\t\t<i class=\"fa fa-trash-o\" aria-hidden=\"true\"></i>
\t\t\t</a>
\t\t</div>
\t\t<div class=\"panel-body\">
\t\t\t<fieldset>
\t\t\t\t<legend>";
        // line 4939
        echo ($context["text_locations_descr"] ?? null);
        echo "</legend>
\t\t\t\t<ul class=\"nav nav-tabs location-block\" id=\"locations-language-\${ location_id }\">
\t\t\t\t\t";
        // line 4941
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 4942
            echo "\t\t\t\t\t\t<li><a href=\"#locations-language\${ location_id }-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4942);
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 4942);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 4942);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 4942);
            echo "\" /> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 4942);
            echo "</a></li>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 4944
        echo "\t\t\t\t</ul>
\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t";
        // line 4946
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 4947
            echo "\t\t\t\t\t<div class=\"tab-pane\" id=\"locations-language\${ location_id }-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4947);
            echo "\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"descr_title\${ location_id }-";
            // line 4949
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4949);
            echo "\">";
            echo ($context["entry_location_title"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"text\" id=\"descr_title\${ location_id }-";
            // line 4951
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4951);
            echo "\" name=\"oct_locations[\${ location_id }][description][";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4951);
            echo "][title]\" value=\"\" class=\"form-control\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"descr_address\${ location_id }-";
            // line 4955
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4955);
            echo "\">";
            echo ($context["entry_location_address"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<textarea id=\"descr_address\${ location_id }-";
            // line 4957
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4957);
            echo "\" name=\"oct_locations[\${ location_id }][description][";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4957);
            echo "][address]\" rows=\"5\" class=\"form-control\"></textarea>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"descr_open\${ location_id }-";
            // line 4961
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4961);
            echo "\">";
            echo ($context["entry_contact_open"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<textarea id=\"descr_open\${ location_id }-";
            // line 4963
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4963);
            echo "\" name=\"oct_locations[\${ location_id }][description][";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4963);
            echo "][open]\" rows=\"5\" class=\"form-control\"></textarea>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 4968
        echo "\t\t\t\t</div>
\t\t\t</fieldset>
\t\t\t<fieldset>
\t\t\t\t<legend>";
        // line 4971
        echo ($context["text_locations_info"] ?? null);
        echo "</legend>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"location_phone\">";
        // line 4973
        echo ($context["entry_contact_telephone"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<textarea id=\"location_phone\" name=\"oct_locations[\${ location_id }][phone]\" rows=\"5\" class=\"form-control\"></textarea>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"location_map\${ location_id }\">";
        // line 4979
        echo ($context["entry_contact_map"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<textarea id=\"location_map\${ location_id }\" name=\"oct_locations[\${ location_id }][map]\" rows=\"5\" class=\"form-control\"></textarea>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"location_link\${ location_id }\">";
        // line 4985
        echo ($context["entry_location_link"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<input type=\"text\" id=\"location_link\${ location_id }\" name=\"oct_locations[\${ location_id }][link]\" value=\"\" class=\"form-control\" />
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"location_image\${ location_id }\">";
        // line 4991
        echo ($context["entry_location_image"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<a href=\"\" id=\"thumb-contact_location_image\${ location_id }\" data-toggle=\"image\" class=\"img-thumbnail\">
\t\t\t\t\t\t\t<img src=\"";
        // line 4994
        echo ($context["contact_placeholder"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["contact_placeholder"] ?? null);
        echo "\" />
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<input type=\"hidden\" name=\"oct_locations[\${ location_id }][image]\" value=\"\" id=\"input-contact_location_image\${ location_id }\" />
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"location_sort\${ location_id }\">";
        // line 5000
        echo ($context["entry_location_sort"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<input type=\"number\" id=\"location_sort\${ location_id }\" name=\"oct_locations[\${ location_id }][sort]\" value=\"0\" class=\"form-control\" />
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</fieldset>
\t\t</div>
\t</div>
\t`;

\t\$(\"#site_locations\").append(html);

\tlocation_id++;
}
</script>

<script>
\$(document).ready(function() {
    \$('#recommended_poducts_texts a:first').tab('show');

\t\$('#input-popupcart-recommend').on('change', function() {
\t\t\$('.recomended_hidden').toggle();
\t});

\t\$('input[name=\\'theme_oct_deals_popup_cart_recommend_products\\']').autocomplete({
\t\t'source': function(request, response) {
\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 5027
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

\t\t\t\$('#product-related').append('<div id=\"product-related' + item['value'] + '\"><i onclick=\"deleteProduct(' + item['value'] + ');\" class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"theme_oct_deals_popup_cart_recommend_products[]\" value=\"' + item['value'] + '\" /></div>');
\t\t}
\t});
});

function fontIcons(icone_id, input_id) {
\t\$.ajax({
\t\turl: 'index.php?route=extension/theme/oct_deals/getIcons&user_token=";
        // line 5051
        echo ($context["user_token"] ?? null);
        echo "&icone_id=' + icone_id + '&input_id=' + input_id,
\t\ttype: 'get',
\t\tcache: false,
\t\tdataType: 'html',
\t\tsuccess: function(data) {
\t\t\tconst html = `
\t\t\t<div id=\"modal-icons\" class=\"modal\">
\t\t\t  <div class=\"modal-dialog\" style=\"width:55%;\">
\t\t\t    <div class=\"modal-content\">
\t\t\t      <div class=\"modal-header\">
\t\t\t        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t\t        <h4 class=\"modal-title\">Font Awesome Icons</h4>
\t\t\t      </div>
\t\t\t      <div class=\"modal-body\">\${ data }</div>
\t\t\t    </div>
\t\t\t  </div>
\t\t\t</div>
\t\t\t`;

\t\t\t\$('body').append(html);

\t\t\t\$('#modal-icons').modal('show');
\t\t}
\t});
}
</script>
";
        // line 5077
        echo ($context["footer"] ?? null);
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "octemplates/theme/oct_deals.twig";
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
        return array (  10308 => 5077,  10279 => 5051,  10252 => 5027,  10222 => 5000,  10211 => 4994,  10205 => 4991,  10196 => 4985,  10187 => 4979,  10178 => 4973,  10173 => 4971,  10168 => 4968,  10155 => 4963,  10148 => 4961,  10139 => 4957,  10132 => 4955,  10123 => 4951,  10116 => 4949,  10110 => 4947,  10106 => 4946,  10102 => 4944,  10085 => 4942,  10081 => 4941,  10076 => 4939,  10060 => 4926,  10031 => 4900,  10027 => 4899,  10023 => 4897,  10001 => 4893,  9997 => 4892,  9987 => 4889,  9983 => 4888,  9973 => 4885,  9969 => 4884,  9959 => 4882,  9942 => 4881,  9937 => 4878,  9913 => 4874,  9909 => 4873,  9902 => 4872,  9885 => 4871,  9873 => 4864,  9867 => 4861,  9837 => 4834,  9833 => 4833,  9829 => 4831,  9807 => 4827,  9803 => 4826,  9793 => 4824,  9776 => 4823,  9771 => 4820,  9747 => 4816,  9743 => 4815,  9736 => 4814,  9719 => 4813,  9707 => 4806,  9701 => 4803,  9674 => 4778,  9664 => 4774,  9660 => 4773,  9656 => 4771,  9652 => 4770,  9646 => 4767,  9640 => 4763,  9630 => 4759,  9626 => 4758,  9622 => 4756,  9618 => 4755,  9612 => 4752,  9606 => 4748,  9591 => 4743,  9584 => 4741,  9573 => 4737,  9566 => 4735,  9560 => 4733,  9556 => 4732,  9552 => 4730,  9535 => 4728,  9531 => 4727,  9526 => 4725,  9514 => 4718,  9508 => 4717,  9502 => 4716,  9496 => 4713,  9488 => 4708,  9484 => 4707,  9480 => 4706,  9476 => 4705,  9472 => 4704,  9466 => 4701,  9458 => 4696,  9454 => 4695,  9450 => 4694,  9434 => 4681,  9419 => 4669,  9395 => 4648,  9359 => 4617,  9353 => 4614,  9345 => 4609,  9334 => 4601,  9305 => 4575,  9290 => 4563,  9272 => 4548,  9268 => 4546,  9259 => 4543,  9250 => 4541,  9246 => 4539,  9242 => 4538,  9237 => 4535,  9226 => 4532,  9217 => 4530,  9213 => 4528,  9209 => 4527,  9205 => 4525,  9194 => 4522,  9185 => 4520,  9181 => 4518,  9177 => 4517,  9171 => 4514,  9160 => 4506,  9149 => 4498,  9138 => 4490,  9111 => 4466,  9096 => 4454,  9091 => 4451,  9080 => 4448,  9071 => 4446,  9067 => 4444,  9063 => 4443,  9059 => 4441,  9048 => 4438,  9039 => 4436,  9035 => 4434,  9031 => 4433,  9025 => 4430,  9015 => 4423,  9004 => 4415,  8977 => 4391,  8962 => 4379,  8957 => 4376,  8946 => 4373,  8937 => 4371,  8933 => 4369,  8929 => 4368,  8925 => 4366,  8914 => 4363,  8905 => 4361,  8901 => 4359,  8897 => 4358,  8891 => 4355,  8881 => 4348,  8867 => 4337,  8861 => 4334,  8854 => 4330,  8840 => 4319,  8756 => 4238,  8743 => 4228,  8718 => 4206,  8706 => 4197,  8681 => 4175,  8669 => 4166,  8644 => 4144,  8632 => 4135,  8604 => 4110,  8591 => 4100,  8585 => 4097,  8580 => 4095,  8566 => 4083,  8551 => 4080,  8539 => 4078,  8535 => 4077,  8526 => 4075,  8519 => 4072,  8515 => 4071,  8510 => 4069,  8491 => 4055,  8485 => 4052,  8474 => 4043,  8463 => 4040,  8454 => 4038,  8450 => 4036,  8446 => 4035,  8441 => 4033,  8435 => 4029,  8424 => 4026,  8415 => 4024,  8411 => 4022,  8407 => 4021,  8402 => 4019,  8383 => 4005,  8377 => 4002,  8364 => 3992,  8359 => 3990,  8354 => 3988,  8346 => 3983,  8341 => 3981,  8336 => 3979,  8328 => 3974,  8323 => 3972,  8318 => 3970,  8310 => 3965,  8305 => 3963,  8300 => 3961,  8292 => 3956,  8287 => 3954,  8282 => 3952,  8274 => 3947,  8269 => 3945,  8264 => 3943,  8259 => 3941,  8253 => 3937,  8242 => 3934,  8233 => 3932,  8229 => 3930,  8225 => 3929,  8220 => 3927,  8203 => 3915,  8197 => 3912,  8189 => 3907,  8172 => 3893,  8169 => 3892,  8158 => 3889,  8149 => 3887,  8145 => 3885,  8141 => 3884,  8136 => 3882,  8119 => 3870,  8113 => 3867,  8105 => 3862,  8102 => 3861,  8091 => 3858,  8082 => 3856,  8078 => 3854,  8074 => 3853,  8069 => 3851,  8052 => 3839,  8046 => 3836,  8036 => 3829,  8033 => 3828,  8022 => 3825,  8013 => 3823,  8009 => 3821,  8005 => 3820,  8000 => 3818,  7982 => 3805,  7976 => 3802,  7957 => 3788,  7951 => 3785,  7942 => 3779,  7939 => 3778,  7928 => 3775,  7919 => 3773,  7915 => 3771,  7911 => 3770,  7906 => 3768,  7888 => 3755,  7880 => 3752,  7861 => 3738,  7855 => 3735,  7844 => 3727,  7841 => 3726,  7830 => 3723,  7821 => 3721,  7817 => 3719,  7813 => 3718,  7808 => 3716,  7790 => 3703,  7784 => 3700,  7765 => 3686,  7759 => 3683,  7750 => 3677,  7747 => 3676,  7736 => 3673,  7727 => 3671,  7723 => 3669,  7719 => 3668,  7714 => 3666,  7696 => 3653,  7688 => 3650,  7669 => 3636,  7663 => 3633,  7653 => 3626,  7649 => 3625,  7645 => 3624,  7627 => 3611,  7621 => 3608,  7608 => 3598,  7593 => 3586,  7587 => 3585,  7582 => 3583,  7575 => 3579,  7569 => 3578,  7564 => 3576,  7557 => 3572,  7551 => 3571,  7546 => 3569,  7539 => 3565,  7533 => 3564,  7528 => 3562,  7521 => 3558,  7515 => 3557,  7510 => 3555,  7503 => 3551,  7497 => 3550,  7492 => 3548,  7485 => 3544,  7471 => 3535,  7465 => 3532,  7458 => 3528,  7444 => 3519,  7438 => 3516,  7431 => 3512,  7417 => 3503,  7411 => 3500,  7404 => 3496,  7390 => 3487,  7384 => 3484,  7377 => 3480,  7363 => 3471,  7357 => 3468,  7350 => 3464,  7336 => 3455,  7330 => 3452,  7323 => 3448,  7309 => 3439,  7303 => 3436,  7296 => 3432,  7282 => 3423,  7276 => 3420,  7269 => 3416,  7255 => 3407,  7249 => 3404,  7242 => 3400,  7228 => 3391,  7222 => 3388,  7215 => 3384,  7201 => 3375,  7195 => 3372,  7188 => 3368,  7174 => 3359,  7168 => 3356,  7163 => 3354,  7143 => 3339,  7137 => 3336,  7120 => 3324,  7114 => 3321,  7097 => 3309,  7091 => 3306,  7074 => 3294,  7068 => 3291,  7051 => 3279,  7045 => 3276,  7028 => 3264,  7022 => 3261,  7005 => 3249,  6999 => 3246,  6982 => 3234,  6976 => 3231,  6959 => 3219,  6953 => 3216,  6948 => 3214,  6928 => 3199,  6922 => 3196,  6905 => 3184,  6899 => 3181,  6882 => 3169,  6876 => 3166,  6859 => 3154,  6853 => 3151,  6848 => 3149,  6840 => 3143,  6815 => 3138,  6808 => 3136,  6798 => 3134,  6781 => 3133,  6777 => 3131,  6768 => 3128,  6758 => 3127,  6755 => 3126,  6751 => 3125,  6739 => 3118,  6731 => 3115,  6724 => 3111,  6718 => 3107,  6709 => 3104,  6705 => 3103,  6701 => 3102,  6696 => 3101,  6692 => 3100,  6687 => 3098,  6679 => 3095,  6661 => 3082,  6655 => 3079,  6638 => 3067,  6632 => 3064,  6625 => 3062,  6609 => 3051,  6603 => 3048,  6598 => 3046,  6590 => 3043,  6585 => 3041,  6576 => 3037,  6571 => 3035,  6554 => 3023,  6548 => 3020,  6531 => 3008,  6525 => 3005,  6520 => 3003,  6510 => 2996,  6506 => 2995,  6502 => 2994,  6498 => 2993,  6489 => 2986,  6482 => 2982,  6478 => 2980,  6476 => 2979,  6466 => 2974,  6455 => 2968,  6447 => 2963,  6442 => 2960,  6435 => 2956,  6431 => 2954,  6429 => 2953,  6419 => 2948,  6408 => 2942,  6400 => 2937,  6395 => 2934,  6388 => 2930,  6384 => 2928,  6382 => 2927,  6372 => 2922,  6361 => 2916,  6353 => 2911,  6348 => 2908,  6341 => 2904,  6337 => 2902,  6335 => 2901,  6325 => 2896,  6314 => 2890,  6306 => 2885,  6301 => 2882,  6294 => 2878,  6290 => 2876,  6288 => 2875,  6278 => 2870,  6267 => 2864,  6259 => 2859,  6254 => 2856,  6247 => 2852,  6243 => 2850,  6241 => 2849,  6231 => 2844,  6220 => 2838,  6212 => 2833,  6207 => 2830,  6200 => 2826,  6196 => 2824,  6194 => 2823,  6184 => 2818,  6173 => 2812,  6165 => 2807,  6160 => 2804,  6153 => 2800,  6149 => 2798,  6147 => 2797,  6137 => 2792,  6126 => 2786,  6118 => 2781,  6113 => 2778,  6106 => 2774,  6102 => 2772,  6100 => 2771,  6090 => 2766,  6084 => 2765,  6073 => 2759,  6067 => 2758,  6059 => 2753,  6054 => 2750,  6047 => 2746,  6043 => 2744,  6041 => 2743,  6031 => 2738,  6020 => 2732,  6012 => 2727,  6007 => 2724,  6000 => 2720,  5996 => 2718,  5994 => 2717,  5984 => 2712,  5973 => 2706,  5965 => 2701,  5960 => 2698,  5953 => 2694,  5949 => 2692,  5947 => 2691,  5937 => 2686,  5926 => 2680,  5918 => 2675,  5913 => 2672,  5906 => 2668,  5902 => 2666,  5900 => 2665,  5890 => 2660,  5879 => 2654,  5871 => 2649,  5866 => 2647,  5853 => 2637,  5848 => 2635,  5841 => 2631,  5836 => 2629,  5831 => 2627,  5823 => 2621,  5805 => 2617,  5794 => 2613,  5790 => 2612,  5783 => 2609,  5779 => 2608,  5774 => 2605,  5757 => 2603,  5753 => 2602,  5745 => 2597,  5740 => 2595,  5734 => 2591,  5716 => 2587,  5705 => 2583,  5701 => 2582,  5694 => 2579,  5690 => 2578,  5685 => 2575,  5668 => 2573,  5664 => 2572,  5656 => 2567,  5651 => 2565,  5633 => 2552,  5627 => 2549,  5622 => 2547,  5609 => 2537,  5603 => 2533,  5597 => 2532,  5595 => 2531,  5587 => 2528,  5573 => 2517,  5563 => 2516,  5555 => 2513,  5551 => 2511,  5538 => 2508,  5529 => 2506,  5525 => 2504,  5521 => 2503,  5516 => 2500,  5500 => 2497,  5491 => 2495,  5487 => 2493,  5483 => 2492,  5479 => 2490,  5463 => 2487,  5454 => 2485,  5450 => 2483,  5446 => 2482,  5438 => 2479,  5425 => 2473,  5417 => 2472,  5411 => 2471,  5403 => 2467,  5398 => 2466,  5396 => 2465,  5387 => 2459,  5383 => 2458,  5374 => 2452,  5368 => 2451,  5352 => 2440,  5346 => 2437,  5341 => 2435,  5336 => 2433,  5330 => 2429,  5307 => 2420,  5293 => 2415,  5287 => 2414,  5283 => 2412,  5256 => 2408,  5250 => 2407,  5238 => 2405,  5221 => 2404,  5217 => 2402,  5199 => 2398,  5191 => 2397,  5185 => 2396,  5178 => 2395,  5161 => 2394,  5157 => 2393,  5147 => 2390,  5140 => 2388,  5136 => 2387,  5129 => 2385,  5122 => 2382,  5119 => 2381,  5102 => 2380,  5097 => 2378,  5089 => 2373,  5085 => 2371,  5062 => 2362,  5048 => 2357,  5042 => 2356,  5038 => 2354,  5011 => 2350,  5005 => 2349,  4990 => 2346,  4984 => 2345,  4969 => 2342,  4963 => 2341,  4951 => 2339,  4934 => 2338,  4930 => 2336,  4912 => 2332,  4904 => 2331,  4898 => 2330,  4891 => 2329,  4874 => 2328,  4870 => 2327,  4860 => 2324,  4853 => 2322,  4849 => 2321,  4842 => 2319,  4835 => 2316,  4832 => 2315,  4815 => 2314,  4810 => 2312,  4799 => 2306,  4792 => 2304,  4786 => 2300,  4768 => 2296,  4758 => 2293,  4752 => 2291,  4748 => 2290,  4744 => 2288,  4727 => 2286,  4723 => 2285,  4717 => 2282,  4711 => 2281,  4695 => 2270,  4689 => 2267,  4672 => 2255,  4666 => 2252,  4649 => 2240,  4643 => 2237,  4626 => 2225,  4620 => 2222,  4603 => 2210,  4597 => 2207,  4580 => 2195,  4574 => 2192,  4557 => 2180,  4551 => 2177,  4534 => 2165,  4528 => 2162,  4511 => 2150,  4505 => 2147,  4488 => 2135,  4482 => 2132,  4465 => 2120,  4459 => 2117,  4442 => 2105,  4436 => 2102,  4427 => 2098,  4422 => 2096,  4413 => 2092,  4408 => 2090,  4391 => 2078,  4385 => 2075,  4382 => 2074,  4365 => 2062,  4359 => 2059,  4356 => 2058,  4354 => 2057,  4338 => 2046,  4332 => 2043,  4327 => 2041,  4307 => 2026,  4301 => 2023,  4296 => 2021,  4278 => 2008,  4272 => 2005,  4255 => 1993,  4249 => 1990,  4232 => 1978,  4226 => 1975,  4209 => 1963,  4203 => 1960,  4186 => 1948,  4180 => 1945,  4168 => 1940,  4160 => 1939,  4154 => 1936,  4137 => 1924,  4131 => 1921,  4126 => 1919,  4120 => 1915,  4113 => 1911,  4109 => 1909,  4107 => 1908,  4101 => 1907,  4094 => 1905,  4089 => 1902,  4082 => 1898,  4078 => 1896,  4076 => 1895,  4070 => 1894,  4063 => 1892,  4058 => 1890,  4048 => 1885,  4038 => 1880,  4032 => 1877,  4024 => 1874,  4014 => 1869,  4008 => 1866,  4000 => 1863,  3990 => 1858,  3984 => 1855,  3976 => 1852,  3966 => 1847,  3960 => 1844,  3952 => 1841,  3942 => 1836,  3936 => 1833,  3928 => 1830,  3918 => 1825,  3912 => 1822,  3904 => 1819,  3894 => 1814,  3888 => 1811,  3880 => 1808,  3870 => 1803,  3864 => 1800,  3856 => 1797,  3846 => 1792,  3840 => 1789,  3832 => 1786,  3822 => 1781,  3816 => 1778,  3808 => 1775,  3798 => 1770,  3792 => 1767,  3784 => 1764,  3774 => 1759,  3768 => 1756,  3760 => 1753,  3750 => 1748,  3744 => 1745,  3736 => 1742,  3726 => 1737,  3720 => 1734,  3712 => 1731,  3702 => 1726,  3696 => 1723,  3688 => 1720,  3678 => 1715,  3672 => 1712,  3664 => 1709,  3655 => 1703,  3651 => 1702,  3647 => 1701,  3639 => 1696,  3627 => 1691,  3619 => 1690,  3611 => 1689,  3605 => 1686,  3588 => 1674,  3582 => 1671,  3565 => 1659,  3559 => 1656,  3542 => 1644,  3536 => 1641,  3519 => 1629,  3513 => 1626,  3504 => 1622,  3499 => 1620,  3482 => 1608,  3476 => 1605,  3459 => 1593,  3453 => 1590,  3436 => 1578,  3430 => 1575,  3413 => 1563,  3407 => 1560,  3402 => 1558,  3391 => 1549,  3382 => 1546,  3375 => 1545,  3371 => 1544,  3366 => 1542,  3359 => 1540,  3342 => 1528,  3336 => 1525,  3319 => 1513,  3313 => 1510,  3296 => 1498,  3290 => 1495,  3273 => 1483,  3267 => 1480,  3250 => 1468,  3244 => 1465,  3227 => 1453,  3221 => 1450,  3211 => 1443,  3205 => 1439,  3199 => 1438,  3197 => 1437,  3189 => 1434,  3184 => 1431,  3168 => 1428,  3159 => 1426,  3155 => 1424,  3151 => 1423,  3147 => 1421,  3131 => 1418,  3122 => 1416,  3118 => 1414,  3114 => 1413,  3106 => 1410,  3099 => 1407,  3094 => 1406,  3092 => 1405,  3085 => 1401,  3081 => 1400,  3070 => 1394,  3066 => 1393,  3052 => 1382,  3046 => 1378,  3040 => 1377,  3038 => 1376,  3030 => 1373,  3025 => 1370,  3009 => 1367,  3000 => 1365,  2996 => 1363,  2992 => 1362,  2988 => 1360,  2972 => 1357,  2963 => 1355,  2959 => 1353,  2955 => 1352,  2947 => 1349,  2940 => 1346,  2935 => 1345,  2933 => 1344,  2926 => 1340,  2922 => 1339,  2911 => 1333,  2906 => 1331,  2897 => 1325,  2893 => 1323,  2887 => 1321,  2884 => 1320,  2878 => 1319,  2876 => 1318,  2867 => 1311,  2859 => 1308,  2856 => 1307,  2851 => 1305,  2844 => 1304,  2839 => 1302,  2832 => 1301,  2829 => 1300,  2824 => 1298,  2817 => 1297,  2815 => 1296,  2811 => 1294,  2807 => 1293,  2801 => 1290,  2795 => 1286,  2787 => 1283,  2782 => 1281,  2775 => 1280,  2770 => 1278,  2763 => 1277,  2761 => 1276,  2757 => 1274,  2753 => 1273,  2747 => 1270,  2742 => 1268,  2738 => 1266,  2719 => 1261,  2712 => 1259,  2697 => 1255,  2690 => 1253,  2682 => 1251,  2678 => 1250,  2674 => 1248,  2655 => 1246,  2651 => 1245,  2647 => 1244,  2643 => 1243,  2639 => 1242,  2634 => 1240,  2625 => 1236,  2619 => 1235,  2613 => 1234,  2607 => 1233,  2602 => 1231,  2595 => 1229,  2586 => 1225,  2580 => 1224,  2574 => 1223,  2568 => 1222,  2562 => 1221,  2556 => 1220,  2551 => 1218,  2546 => 1216,  2538 => 1213,  2532 => 1212,  2526 => 1211,  2517 => 1205,  2513 => 1204,  2507 => 1202,  2502 => 1201,  2499 => 1200,  2497 => 1199,  2492 => 1197,  2474 => 1184,  2468 => 1181,  2451 => 1169,  2445 => 1166,  2435 => 1161,  2429 => 1160,  2423 => 1159,  2417 => 1158,  2411 => 1155,  2401 => 1150,  2395 => 1149,  2389 => 1146,  2380 => 1142,  2373 => 1140,  2356 => 1128,  2350 => 1125,  2346 => 1123,  2329 => 1118,  2322 => 1116,  2316 => 1114,  2312 => 1113,  2308 => 1111,  2291 => 1109,  2287 => 1108,  2270 => 1096,  2264 => 1093,  2259 => 1091,  2251 => 1086,  2247 => 1085,  2243 => 1084,  2229 => 1073,  2223 => 1069,  2217 => 1068,  2215 => 1067,  2208 => 1065,  2199 => 1063,  2188 => 1059,  2179 => 1057,  2169 => 1056,  2161 => 1052,  2156 => 1051,  2154 => 1050,  2147 => 1046,  2139 => 1041,  2135 => 1039,  2129 => 1037,  2126 => 1036,  2120 => 1035,  2118 => 1034,  2105 => 1028,  2098 => 1026,  2087 => 1022,  2080 => 1020,  2076 => 1019,  2069 => 1017,  2058 => 1013,  2051 => 1011,  2040 => 1007,  2033 => 1005,  2022 => 1001,  2015 => 999,  2010 => 997,  2005 => 994,  1986 => 989,  1977 => 987,  1962 => 983,  1953 => 981,  1938 => 977,  1929 => 975,  1921 => 973,  1917 => 972,  1913 => 970,  1894 => 968,  1890 => 967,  1886 => 966,  1882 => 965,  1873 => 959,  1869 => 958,  1863 => 956,  1858 => 955,  1855 => 954,  1853 => 953,  1847 => 950,  1827 => 935,  1821 => 932,  1804 => 920,  1798 => 917,  1781 => 905,  1775 => 902,  1758 => 890,  1752 => 887,  1735 => 875,  1729 => 872,  1712 => 860,  1706 => 857,  1701 => 855,  1691 => 848,  1686 => 846,  1679 => 842,  1674 => 840,  1667 => 836,  1662 => 834,  1655 => 830,  1650 => 828,  1643 => 824,  1638 => 822,  1631 => 818,  1626 => 816,  1619 => 812,  1612 => 810,  1606 => 807,  1599 => 803,  1594 => 801,  1588 => 797,  1577 => 794,  1572 => 793,  1568 => 792,  1564 => 790,  1547 => 788,  1543 => 787,  1537 => 784,  1530 => 780,  1525 => 778,  1519 => 774,  1508 => 771,  1503 => 770,  1499 => 769,  1495 => 767,  1478 => 765,  1474 => 764,  1468 => 761,  1463 => 759,  1455 => 754,  1451 => 753,  1447 => 752,  1443 => 751,  1430 => 741,  1426 => 739,  1420 => 738,  1418 => 737,  1405 => 727,  1395 => 726,  1386 => 722,  1382 => 721,  1378 => 720,  1374 => 719,  1369 => 718,  1364 => 717,  1362 => 716,  1346 => 705,  1324 => 688,  1302 => 671,  1280 => 654,  1258 => 637,  1236 => 620,  1214 => 603,  1192 => 586,  1170 => 569,  1148 => 552,  1137 => 544,  1117 => 529,  1111 => 526,  1094 => 514,  1088 => 511,  1079 => 505,  1075 => 504,  1055 => 489,  1049 => 486,  1032 => 474,  1026 => 471,  1009 => 459,  1003 => 456,  998 => 454,  983 => 444,  978 => 442,  969 => 438,  964 => 436,  955 => 432,  950 => 430,  941 => 426,  936 => 424,  927 => 420,  922 => 418,  913 => 414,  908 => 412,  899 => 408,  894 => 406,  888 => 403,  877 => 397,  872 => 395,  863 => 391,  858 => 389,  849 => 385,  844 => 383,  838 => 380,  823 => 374,  818 => 372,  805 => 368,  800 => 366,  787 => 362,  782 => 360,  773 => 356,  768 => 354,  759 => 350,  754 => 348,  748 => 345,  727 => 329,  721 => 326,  716 => 324,  699 => 312,  693 => 309,  676 => 297,  670 => 294,  653 => 282,  647 => 279,  642 => 277,  632 => 270,  626 => 267,  621 => 265,  604 => 253,  598 => 250,  581 => 238,  575 => 235,  558 => 223,  552 => 220,  535 => 208,  529 => 205,  512 => 193,  506 => 190,  489 => 178,  483 => 175,  466 => 163,  460 => 160,  443 => 148,  437 => 145,  425 => 140,  417 => 139,  409 => 138,  403 => 135,  393 => 130,  387 => 129,  381 => 128,  375 => 127,  369 => 126,  363 => 125,  357 => 124,  351 => 123,  345 => 122,  339 => 121,  333 => 118,  328 => 115,  321 => 111,  317 => 109,  315 => 108,  311 => 107,  306 => 105,  289 => 93,  283 => 90,  278 => 88,  274 => 87,  266 => 82,  262 => 81,  258 => 80,  248 => 73,  244 => 72,  240 => 71,  236 => 70,  232 => 69,  228 => 68,  224 => 67,  220 => 66,  216 => 65,  207 => 59,  203 => 58,  199 => 57,  195 => 56,  191 => 55,  186 => 53,  180 => 50,  176 => 49,  172 => 47,  166 => 44,  163 => 43,  160 => 42,  154 => 39,  151 => 38,  149 => 37,  143 => 33,  132 => 31,  128 => 30,  123 => 28,  115 => 26,  112 => 25,  107 => 22,  96 => 20,  92 => 19,  87 => 17,  84 => 16,  82 => 15,  76 => 14,  72 => 13,  65 => 12,  59 => 10,  56 => 9,  48 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "octemplates/theme/oct_deals.twig", "");
    }
}
