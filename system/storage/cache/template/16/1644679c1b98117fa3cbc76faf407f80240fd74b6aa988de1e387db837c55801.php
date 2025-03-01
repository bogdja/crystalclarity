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

/* octemplates/design/oct_banner_plus_form.twig */
class __TwigTemplate_6b2e2870d2cb8efbb5b2a4120068983e4817a2f9f7942f4374e4effab873a6a8 extends Template
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
\t\t\t\t<button type=\"submit\" form=\"form-banner-plus\" data-toggle=\"tooltip\" title=\"";
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
        echo "\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 25
        echo ($context["text_form"] ?? null);
        echo "</h3>
\t\t\t</div>
\t\t\t<div class=\"panel-body\">
\t\t\t\t<form action=\"";
        // line 28
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-banner-plus\" class=\"form-horizontal\">
\t\t\t\t\t<div class=\"form-group mx-0\">
\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-status\">";
        // line 30
        echo ($context["entry_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"status\" ";
        // line 33
        if (($context["status"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"status\" tabindex=\"1\">
\t\t\t\t\t\t\t\t<label for=\"status\"></label>
\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group mx-0 required\">
\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-name\">";
        // line 45
        echo ($context["entry_name"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" value=\"";
        // line 47
        echo ($context["name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\"/>
\t\t\t\t\t\t\t";
        // line 48
        if (($context["error_name"] ?? null)) {
            // line 49
            echo "\t\t\t\t\t\t\t<div class=\"text-danger\">
\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\tusNotify('warning', '";
            // line 51
            echo ($context["error_name"] ?? null);
            echo "');
\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 55
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t<ul class=\"nav nav-pills nav-stacked\" id=\"settings\">
\t\t\t\t\t\t\t\t";
        // line 60
        $context["image_row"] = 0;
        // line 61
        echo "\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["oct_banner_plus_images"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["oct_banner_plus_image"]) {
            // line 62
            echo "\t\t\t\t\t\t\t\t<li class=\"banner-li";
            echo ($context["image_row"] ?? null);
            echo "\"><a href=\"#image-row";
            echo ($context["image_row"] ?? null);
            echo "\" data-toggle=\"tab\"><span class=\"delete-block-in\" onclick=\"removeImage(";
            echo ($context["image_row"] ?? null);
            echo ");\"><i class=\"fa fa-minus-circle\"></i></span> ";
            echo twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, $context["oct_banner_plus_image"], "oct_banner_plus_image_description", [], "any", false, false, false, 62)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 62);
            echo "</a></li>

\t\t\t\t\t\t\t\t";
            // line 64
            $context["image_row"] = (($context["image_row"] ?? null) + 1);
            // line 65
            echo "\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_banner_plus_image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<ul class=\"nav nav-pills nav-stacked\" style=\"padding-top:8px;\">
\t\t\t\t\t\t\t\t<li><a href=\"javascript:;\" onclick=\"addImage(); updateActive(); return false;\" id=\"add_banner\"><i class=\"fa fa-plus-circle\"></i> ";
        // line 68
        echo ($context["entry_add_new_block"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t<div class=\"tab-content\" id=\"banner-setting-block\">
\t\t\t\t\t\t\t\t";
        // line 73
        $context["image_row"] = 0;
        // line 74
        echo "\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["oct_banner_plus_images"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["oct_banner_plus_image"]) {
            // line 75
            echo "\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"image-row";
            echo ($context["image_row"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t<legend style=\"padding-bottom:10px;\" class=\"clearfix\"><div class=\"pull-left\">";
            // line 77
            echo ($context["entry_settings"] ?? null);
            echo "</div></legend>
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"language_banner";
            // line 78
            echo ($context["image_row"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 79
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 80
                echo "\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#banner_language";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 80);
                echo "-";
                echo ($context["image_row"] ?? null);
                echo "\" data-toggle=\"tab\"><img src=\"language/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 80);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 80);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 80);
                echo "\" />  ";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 80);
                echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 84
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 85
                echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"banner_language";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 85);
                echo "-";
                echo ($context["image_row"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-title";
                // line 87
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 87);
                echo "\">";
                echo ($context["entry_title"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"oct_banner_plus_image[";
                // line 89
                echo ($context["image_row"] ?? null);
                echo "][oct_banner_plus_image_description][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 89);
                echo "][title]\" value=\"";
                echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["oct_banner_plus_image"], "oct_banner_plus_image_description", [], "any", false, true, false, 89), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 89), [], "array", true, true, false, 89)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, $context["oct_banner_plus_image"], "oct_banner_plus_image_description", [], "any", false, false, false, 89)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 89)] ?? null) : null), "title", [], "any", false, false, false, 89)) : (""));
                echo "\" placeholder=\"";
                echo ($context["entry_title"] ?? null);
                echo "\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 90
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["error_oct_banner_plus_image"] ?? null), ($context["image_row"] ?? null), [], "array", false, true, false, 90), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 90), [], "array", true, true, false, 90)) {
                    // line 91
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tusNotify('warning', '";
                    // line 93
                    echo (($__internal_compile_2 = (($__internal_compile_3 = ($context["error_oct_banner_plus_image"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[($context["image_row"] ?? null)] ?? null) : null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 93)] ?? null) : null);
                    echo "');
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 97
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-link";
                // line 100
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 100);
                echo "\">";
                echo ($context["entry_link"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"oct_banner_plus_image[";
                // line 102
                echo ($context["image_row"] ?? null);
                echo "][oct_banner_plus_image_description][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 102);
                echo "][link]\" value=\"";
                echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["oct_banner_plus_image"], "oct_banner_plus_image_description", [], "any", false, true, false, 102), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 102), [], "array", true, true, false, 102)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_4 = twig_get_attribute($this->env, $this->source, $context["oct_banner_plus_image"], "oct_banner_plus_image_description", [], "any", false, false, false, 102)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 102)] ?? null) : null), "link", [], "any", false, false, false, 102)) : (""));
                echo "\" placeholder=\"";
                echo ($context["entry_link"] ?? null);
                echo "\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 108
            echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-banner_image\">";
            // line 110
            echo ($context["entry_image"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" id=\"thumb-image";
            // line 112
            echo ($context["image_row"] ?? null);
            echo "\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["oct_banner_plus_image"], "thumb", [], "any", false, false, false, 112);
            echo "\" alt=\"\" title=\"\" data-placeholder=\"";
            echo ($context["placeholder"] ?? null);
            echo "\" /></a>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"oct_banner_plus_image[";
            // line 113
            echo ($context["image_row"] ?? null);
            echo "][image]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["oct_banner_plus_image"], "image", [], "any", false, false, false, 113);
            echo "\" id=\"input-image";
            echo ($context["image_row"] ?? null);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-sort-order\">";
            // line 117
            echo ($context["entry_sort_order"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"oct_banner_plus_image[";
            // line 119
            echo ($context["image_row"] ?? null);
            echo "][sort_order]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["oct_banner_plus_image"], "sort_order", [], "any", false, false, false, 119);
            echo "\" placeholder=\"";
            echo ($context["entry_sort_order"] ?? null);
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-banner_image_button_color\">";
            // line 123
            echo ($context["entry_background_color"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"oct_banner_plus_image[";
            // line 125
            echo ($context["image_row"] ?? null);
            echo "][background_color]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["oct_banner_plus_image"], "background_color", [], "any", false, false, false, 125);
            echo "\" placeholder=\"";
            echo ($context["entry_background_color"] ?? null);
            echo "\" class=\"form-control spectrum\"/>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-banner_image_button_color\">";
            // line 129
            echo ($context["entry_title_color"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"oct_banner_plus_image[";
            // line 131
            echo ($context["image_row"] ?? null);
            echo "][title_color]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["oct_banner_plus_image"], "title_color", [], "any", false, false, false, 131);
            echo "\" placeholder=\"";
            echo ($context["entry_title_color"] ?? null);
            echo "\" class=\"form-control spectrum\"/>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-banner_image_button_color\">";
            // line 135
            echo ($context["entry_button_background"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"oct_banner_plus_image[";
            // line 137
            echo ($context["image_row"] ?? null);
            echo "][button_background]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["oct_banner_plus_image"], "button_background", [], "any", false, false, false, 137);
            echo "\" placeholder=\"";
            echo ($context["entry_button_background"] ?? null);
            echo "\" class=\"form-control spectrum\"/>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t\$('#language_banner";
            // line 142
            echo ($context["image_row"] ?? null);
            echo " a:first').tab('show');
\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            // line 145
            $context["image_row"] = (($context["image_row"] ?? null) + 1);
            // line 146
            echo "\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_banner_plus_image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 147
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<script>
\tvar image_row = ";
        // line 156
        echo ($context["image_row"] ?? null);
        echo ";

\tfunction addImage() {
\t\thtml  = '<div class=\"tab-pane\" id=\"image-row' + image_row + '\">';
\t\thtml += '<div class=\"col-sm-12\">';
\t\thtml += '<legend style=\"padding-bottom:10px;\" class=\"clearfix\"><div class=\"pull-left\">";
        // line 161
        echo ($context["entry_settings"] ?? null);
        echo "</div></legend>';
\t\thtml += '<ul class=\"nav nav-tabs\" id=\"language_banner' + image_row + '\">';
\t\t";
        // line 163
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 164
            echo "\t\thtml += '<li><a href=\"#banner_language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 164);
            echo "-' + image_row + '\" data-toggle=\"tab\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 164);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 164);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 164);
            echo "\" />  ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 164);
            echo "</a></li>';
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 166
        echo "\t\thtml += '</ul>';
\t\thtml += '<div class=\"tab-content\">';
\t\t";
        // line 168
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 169
            echo "\t\thtml += '<div class=\"tab-pane\" id=\"banner_language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 169);
            echo "-' + image_row + '\">';
\t\thtml += '<div class=\"form-group required\">';
\t\thtml += '<label class=\"col-sm-2 control-label\" for=\"input-title";
            // line 171
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 171);
            echo "\">";
            echo ($context["entry_title"] ?? null);
            echo "</label>';
\t\thtml += '<div class=\"col-sm-10\">';
\t\thtml += '<input type=\"text\" name=\"oct_banner_plus_image[' + image_row + '][oct_banner_plus_image_description][";
            // line 173
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 173);
            echo "][title]\" value=\"\" placeholder=\"";
            echo ($context["entry_title"] ?? null);
            echo "\" class=\"form-control\"/>';
\t\thtml += '</div>';
\t\thtml += '</div>';
\t\thtml += '<div class=\"form-group\"><label class=\"col-sm-2 control-label\" for=\"input-link";
            // line 176
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 176);
            echo "\">";
            echo ($context["entry_link"] ?? null);
            echo "</label><div class=\"col-sm-10\"><input type=\"text\" name=\"oct_banner_plus_image[' + image_row + '][oct_banner_plus_image_description][";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 176);
            echo "][link]\" value=\"\" placeholder=\"";
            echo ($context["entry_link"] ?? null);
            echo "\" class=\"form-control\"/></div></div>';
\t\thtml += '</div>';
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 179
        echo "\t\thtml += '<hr></div>';
\t\thtml += '<div class=\"form-group\"><label class=\"col-sm-2 control-label\" for=\"input-banner_image\">";
        // line 180
        echo ($context["entry_image"] ?? null);
        echo "</label><div class=\"col-sm-10\"><a href=\"\" id=\"thumb-image' + image_row + '\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a><input type=\"hidden\" name=\"oct_banner_plus_image[' + image_row + '][image]\" value=\"\" id=\"input-image' + image_row + '\" /></div></div>';
\t\thtml += '<div class=\"form-group\"><label class=\"col-sm-2 control-label\" for=\"input-sort-order\">";
        // line 181
        echo ($context["entry_sort_order"] ?? null);
        echo "</label><div class=\"col-sm-10\"><input type=\"text\" name=\"oct_banner_plus_image[' + image_row + '][sort_order]\" value=\"\" placeholder=\"";
        echo ($context["entry_sort_order"] ?? null);
        echo "\" class=\"form-control\" /></div></div>';
\t\thtml += '<div class=\"form-group\"><label class=\"col-sm-2 control-label\" for=\"input-banner_image_button_color\">";
        // line 182
        echo ($context["entry_background_color"] ?? null);
        echo "</label><div class=\"col-sm-10\"><input type=\"text\" name=\"oct_banner_plus_image[' + image_row + '][background_color]\" value=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["oct_default_colors"] ?? null), "background_color", [], "any", false, false, false, 182);
        echo "\" placeholder=\"";
        echo ($context["entry_background_color"] ?? null);
        echo "\" class=\"form-control spectrum\"/></div></div>';
\t\thtml += '<div class=\"form-group\"><label class=\"col-sm-2 control-label\" for=\"input-banner_image_button_color\">";
        // line 183
        echo ($context["entry_title_color"] ?? null);
        echo "</label><div class=\"col-sm-10\"><input type=\"text\" name=\"oct_banner_plus_image[' + image_row + '][title_color]\" value=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["oct_default_colors"] ?? null), "title_color", [], "any", false, false, false, 183);
        echo "\" placeholder=\"";
        echo ($context["entry_title_color"] ?? null);
        echo "\" class=\"form-control spectrum\"/></div></div>';
\t\thtml += '<div class=\"form-group\"><label class=\"col-sm-2 control-label\" for=\"input-banner_image_button_color\">";
        // line 184
        echo ($context["entry_button_background"] ?? null);
        echo "</label><div class=\"col-sm-10\"><input type=\"text\" name=\"oct_banner_plus_image[' + image_row + '][button_background]\" value=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["oct_default_colors"] ?? null), "button_background", [], "any", false, false, false, 184);
        echo "\" placeholder=\"";
        echo ($context["entry_button_background"] ?? null);
        echo "\" class=\"form-control spectrum\"/></div></div>';
\t\thtml += '</div>';
\t\thtml += '</div>';

\t\thtml2 = \"<li class='banner-li\" + image_row + \"'><a href='#image-row\" + image_row + \"' data-toggle='tab'><span class='delete-block-in' onclick='removeImage(\" + image_row + \")'><i class='fa fa-minus-circle'></i></span> ";
        // line 188
        echo ($context["entry_new_block"] ?? null);
        echo "</a></li>\";

\t\t\$('#banner-setting-block').append(html);
\t\t\$('#settings').append(html2);

\t\t\$('#settings li').removeClass('active');

\t\t\$(\"#settings .banner-li\" + image_row + \" a\").tab('show');

\t\t(\$('.delete-block-in').length == 4) ? (\$('#add_banner').hide()) : (\$('#add_banner').show());

\t\timage_row++;

\t\tinitSpectrum();
\t}

\tfunction removeImage(image_row) {
\t\t\$(\"#image-row\" + image_row).remove();
\t\t\$(\".banner-li\" + image_row).remove();

\t\t(\$('.delete-block-in').length == 4) ? (\$('#add_banner').hide()) : (\$('#add_banner').show());

\t\t\$('#settings a:first').tab('show');
\t}
</script>
<script>
\tfunction updateActive() {
\t\t\$('.nav.nav-tabs').each(function () {
\t\t\t\$(this).children().children().first().tab('show');
\t\t});
\t}

\t(\$('.delete-block-in').length == 4) ? (\$('#add_banner').hide()) : (\$('#add_banner').show());

\tfunction initSpectrum() {
\t\t\$(\".spectrum\").spectrum({
\t\t\tpreferredFormat: \"rgb\",
\t\t\tshowInitial: true,
\t\t\tshowInput: true,
\t\t\tshowAlpha: true,
\t\t\tshowPalette: true,
\t\t\tpalette: [[\"red\", \"rgba(0, 255, 0, .5)\", \"rgb(0, 0, 255)\"]]
\t\t});
\t}

\tinitSpectrum();

\t\$('#settings a:first').tab('show');
</script>
";
        // line 237
        echo ($context["footer"] ?? null);
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "octemplates/design/oct_banner_plus_form.twig";
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
        return array (  614 => 237,  562 => 188,  551 => 184,  543 => 183,  535 => 182,  529 => 181,  521 => 180,  518 => 179,  503 => 176,  495 => 173,  488 => 171,  482 => 169,  478 => 168,  474 => 166,  457 => 164,  453 => 163,  448 => 161,  440 => 156,  429 => 147,  423 => 146,  421 => 145,  415 => 142,  403 => 137,  398 => 135,  387 => 131,  382 => 129,  371 => 125,  366 => 123,  355 => 119,  350 => 117,  339 => 113,  331 => 112,  326 => 110,  322 => 108,  304 => 102,  297 => 100,  292 => 97,  285 => 93,  281 => 91,  279 => 90,  269 => 89,  262 => 87,  254 => 85,  250 => 84,  246 => 82,  227 => 80,  223 => 79,  219 => 78,  215 => 77,  209 => 75,  204 => 74,  202 => 73,  194 => 68,  190 => 66,  184 => 65,  182 => 64,  170 => 62,  165 => 61,  163 => 60,  156 => 55,  149 => 51,  145 => 49,  143 => 48,  137 => 47,  132 => 45,  115 => 33,  109 => 30,  104 => 28,  98 => 25,  94 => 23,  88 => 20,  85 => 19,  83 => 18,  77 => 14,  66 => 12,  62 => 11,  57 => 9,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "octemplates/design/oct_banner_plus_form.twig", "");
    }
}
