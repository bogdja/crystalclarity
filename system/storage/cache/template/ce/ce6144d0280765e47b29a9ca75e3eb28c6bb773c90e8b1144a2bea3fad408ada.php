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

/* octemplates/design/oct_slideshow_plus_form.twig */
class __TwigTemplate_fe1d9f96f5902e39e4d62a23a1dcdc5e178c7ecf6c5ad153a059a4c8cb3ba050 extends Template
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
<div class=\"page-header\">
\t<div class=\"container-fluid\">
\t\t<div class=\"pull-right\">
\t\t\t<button type=\"submit\" form=\"form-slideshow-plus\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
\t\t\t<a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a>
\t\t</div>
\t\t<h1>";
        // line 9
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t<ul class=\"breadcrumb\">
\t\t\t";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
            echo "\t\t\t<li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 12);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 12);
            echo "</a></li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "\t\t</ul>
\t</div>
</div>
<div class=\"container-fluid\">
\t";
        // line 18
        if (($context["error_warning"] ?? null)) {
            // line 19
            echo "\t<script>
\t\tusNotify('warning', '";
            // line 20
            echo ($context["error_warning"] ?? null);
            echo "');
\t</script>
\t";
        }
        // line 23
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-heading\">
\t\t\t<h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 25
        echo ($context["text_form"] ?? null);
        echo "</h3>
\t\t</div>
\t\t";
        // line 27
        if (($context["error_empty_image"] ?? null)) {
            // line 28
            echo "\t\t\t<script>
\t\t\t\tusNotify('warning', '";
            // line 29
            echo ($context["error_empty_image"] ?? null);
            echo "');
\t\t\t</script>
\t\t";
        }
        // line 32
        echo "\t\t";
        if (($context["error_empty_mobile_image"] ?? null)) {
            // line 33
            echo "\t\t\t<script>
\t\t\t\tusNotify('warning', '";
            // line 34
            echo ($context["error_empty_mobile_image"] ?? null);
            echo "');
\t\t\t</script>
\t\t";
        }
        // line 37
        echo "\t\t<div class=\"panel-body\">
\t\t\t<form action=\"";
        // line 38
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-slideshow-plus\" class=\"form-horizontal\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 40
        echo ($context["entry_status"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"status\" ";
        // line 43
        if (($context["status"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"status\" tabindex=\"1\">
\t\t\t\t\t\t\t<label for=\"status\"></label>
\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 55
        echo ($context["entry_name"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<input type=\"text\" name=\"name\" value=\"";
        // line 57
        echo ($context["name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\"/>
\t\t\t\t\t\t";
        // line 58
        if (($context["error_name"] ?? null)) {
            // line 59
            echo "\t\t\t\t\t\t<div class=\"text-danger\">
\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\tusNotify('warning', '";
            // line 61
            echo ($context["error_name"] ?? null);
            echo "');
\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 65
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"banner_image_full\">";
        // line 68
        echo ($context["entry_full_img"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"full\" ";
        // line 71
        if (($context["full"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"banner_image_full\" tabindex=\"1\">
\t\t\t\t\t\t\t<label for=\"banner_image_full\"></label>
\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t<li id=\"sliders_view\" class=\"active\"><a href=\"#tab-settings_slides\" data-toggle=\"tab\"><i class=\"fa fa-picture-o\" aria-hidden=\"true\"></i> ";
        // line 83
        echo ($context["text_slides"] ?? null);
        echo "</a></li>
\t\t\t\t</ul>
\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t<div class=\"tab-pane active\" id=\"tab-settings_slides\">
\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t\t\t<ul class=\"nav nav-pills nav-stacked\" id=\"settings\">
\t\t\t\t\t\t\t\t\t";
        // line 90
        $context["image_row"] = 0;
        // line 91
        echo "\t\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["oct_slideshow_plus_images"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["oct_slideshow_plus_image"]) {
            // line 92
            echo "\t\t\t\t\t\t\t\t\t<li class=\"slide-li";
            echo ($context["image_row"] ?? null);
            echo "\"><a href=\"#image-row";
            echo ($context["image_row"] ?? null);
            echo "\" data-toggle=\"tab\"><span class=\"delete-block-in\" onclick=\"removeImage(";
            echo ($context["image_row"] ?? null);
            echo ");\"><i class=\"fa fa-minus-circle\"></i></span> ";
            echo twig_get_attribute($this->env, $this->source, $context["oct_slideshow_plus_image"], "title", [], "any", false, false, false, 92);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t";
            // line 93
            $context["image_row"] = (($context["image_row"] ?? null) + 1);
            // line 94
            echo "\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_slideshow_plus_image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<ul class=\"nav nav-pills nav-stacked\">
\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:;\" onclick=\"addImage(); updateActive(); return false;\" id=\"add_slide\"><i class=\"fa fa-plus-circle\"></i> ";
        // line 97
        echo ($context["entry_add_new_slide"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<div class=\"tab-content\" id=\"slideshow-setting-block\">
\t\t\t\t\t\t\t\t\t";
        // line 102
        $context["image_row"] = 0;
        // line 103
        echo "\t\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["oct_slideshow_plus_images"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["oct_slideshow_plus_image"]) {
            // line 104
            echo "\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"image-row";
            echo ($context["image_row"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t<legend style=\"padding-bottom:10px;\" class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pull-left\">";
            // line 107
            echo ($context["text_settings_slides"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t</legend>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"language_slide";
            // line 109
            echo ($context["image_row"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 110
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 111
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#slide_language";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 111);
                echo "-";
                echo ($context["image_row"] ?? null);
                echo "\" data-toggle=\"tab\"><img src=\"language/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 111);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 111);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 111);
                echo "\" />  ";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 111);
                echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 113
            echo "\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 115
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 116
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"slide_language";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 116);
                echo "-";
                echo ($context["image_row"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group is_not_full\" ";
                // line 117
                if ((array_key_exists("full", $context) && ($context["full"] ?? null))) {
                    echo "style=\"display:none;\"";
                }
                echo ">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-title";
                // line 118
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 118);
                echo "\">";
                echo ($context["entry_title"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"oct_slideshow_plus_image[";
                // line 120
                echo ($context["image_row"] ?? null);
                echo "][oct_slideshow_plus_image_description][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 120);
                echo "][title]\" value=\"";
                echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["oct_slideshow_plus_image"], "oct_slideshow_plus_image_description", [], "any", false, true, false, 120), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 120), [], "array", true, true, false, 120)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, $context["oct_slideshow_plus_image"], "oct_slideshow_plus_image_description", [], "any", false, false, false, 120)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 120)] ?? null) : null), "title", [], "any", false, false, false, 120)) : (""));
                echo "\" placeholder=\"";
                echo ($context["entry_title"] ?? null);
                echo "\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 121
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["error_oct_slideshow_plus_image"] ?? null), ($context["image_row"] ?? null), [], "array", false, true, false, 121), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 121), [], "array", true, true, false, 121)) {
                    // line 122
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tusNotify('warning', '";
                    // line 124
                    echo (($__internal_compile_1 = (($__internal_compile_2 = ($context["error_oct_slideshow_plus_image"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[($context["image_row"] ?? null)] ?? null) : null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 124)] ?? null) : null);
                    echo "');
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 128
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group is_not_full\" ";
                // line 130
                if ((array_key_exists("full", $context) && ($context["full"] ?? null))) {
                    echo "style=\"display:none;\"";
                }
                echo ">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-button";
                // line 131
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 131);
                echo "\">";
                echo ($context["entry_button"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"oct_slideshow_plus_image[";
                // line 133
                echo ($context["image_row"] ?? null);
                echo "][oct_slideshow_plus_image_description][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 133);
                echo "][button]\" value=\"";
                echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["oct_slideshow_plus_image"], "oct_slideshow_plus_image_description", [], "any", false, true, false, 133), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 133), [], "array", true, true, false, 133)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, $context["oct_slideshow_plus_image"], "oct_slideshow_plus_image_description", [], "any", false, false, false, 133)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 133)] ?? null) : null), "button", [], "any", false, false, false, 133)) : (""));
                echo "\" placeholder=\"";
                echo ($context["entry_title"] ?? null);
                echo "\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group is_not_full\" ";
                // line 136
                if ((array_key_exists("full", $context) && ($context["full"] ?? null))) {
                    echo "style=\"display:none;\"";
                }
                echo ">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-description";
                // line 137
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 137);
                echo "\">";
                echo ($context["entry_description"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"oct_slideshow_plus_image[";
                // line 139
                echo ($context["image_row"] ?? null);
                echo "][oct_slideshow_plus_image_description][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 139);
                echo "][description]\" class=\"form-control\">";
                echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["oct_slideshow_plus_image"], "oct_slideshow_plus_image_description", [], "any", false, true, false, 139), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 139), [], "array", true, true, false, 139)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_4 = twig_get_attribute($this->env, $this->source, $context["oct_slideshow_plus_image"], "oct_slideshow_plus_image_description", [], "any", false, false, false, 139)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 139)] ?? null) : null), "description", [], "any", false, false, false, 139)) : (""));
                echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-link";
                // line 143
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 143);
                echo "\">";
                echo ($context["entry_link"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"oct_slideshow_plus_image[";
                // line 145
                echo ($context["image_row"] ?? null);
                echo "][oct_slideshow_plus_image_description][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 145);
                echo "][link]\" value=\"";
                echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["oct_slideshow_plus_image"], "oct_slideshow_plus_image_description", [], "any", false, true, false, 145), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 145), [], "array", true, true, false, 145)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_5 = twig_get_attribute($this->env, $this->source, $context["oct_slideshow_plus_image"], "oct_slideshow_plus_image_description", [], "any", false, false, false, 145)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 145)] ?? null) : null), "link", [], "any", false, false, false, 145)) : (""));
                echo "\" placeholder=\"";
                echo ($context["entry_link"] ?? null);
                echo "\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"slide-banner_image\">";
                // line 150
                echo ($context["entry_image"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" id=\"thumb-image";
                // line 152
                echo ($context["image_row"] ?? null);
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 152);
                echo "\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
                echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["oct_slideshow_plus_image"], "thumb", [], "any", false, true, false, 152), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 152), [], "array", true, true, false, 152)) ? ((($__internal_compile_6 = twig_get_attribute($this->env, $this->source, $context["oct_slideshow_plus_image"], "thumb", [], "any", false, false, false, 152)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 152)] ?? null) : null)) : (($context["placeholder"] ?? null)));
                echo "\" alt=\"\" title=\"\" data-placeholder=\"";
                echo ($context["placeholder"] ?? null);
                echo "\" /></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"oct_slideshow_plus_image[";
                // line 153
                echo ($context["image_row"] ?? null);
                echo "][image][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 153);
                echo "]\" value=\"";
                echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["oct_slideshow_plus_image"], "image", [], "any", false, true, false, 153), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 153), [], "array", true, true, false, 153)) ? ((($__internal_compile_7 = twig_get_attribute($this->env, $this->source, $context["oct_slideshow_plus_image"], "image", [], "any", false, false, false, 153)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 153)] ?? null) : null)) : (""));
                echo "\" id=\"input-image";
                echo ($context["image_row"] ?? null);
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 153);
                echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6 oct-slide-mobile_image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"slide-mobile_image\">";
                // line 157
                echo ($context["entry_mobile_image"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" id=\"thumb-mobile_image";
                // line 159
                echo ($context["image_row"] ?? null);
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 159);
                echo "\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
                echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["oct_slideshow_plus_image"], "mobile_thumb", [], "any", false, true, false, 159), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 159), [], "array", true, true, false, 159)) ? ((($__internal_compile_8 = twig_get_attribute($this->env, $this->source, $context["oct_slideshow_plus_image"], "mobile_thumb", [], "any", false, false, false, 159)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 159)] ?? null) : null)) : (($context["placeholder"] ?? null)));
                echo "\" alt=\"\" title=\"\" data-placeholder=\"";
                echo ($context["placeholder"] ?? null);
                echo "\" /></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"oct_slideshow_plus_image[";
                // line 160
                echo ($context["image_row"] ?? null);
                echo "][mobile_image][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 160);
                echo "]\" value=\"";
                echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["oct_slideshow_plus_image"], "mobile_image", [], "any", false, true, false, 160), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 160), [], "array", true, true, false, 160)) ? ((($__internal_compile_9 = twig_get_attribute($this->env, $this->source, $context["oct_slideshow_plus_image"], "mobile_image", [], "any", false, false, false, 160)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 160)] ?? null) : null)) : (""));
                echo "\" id=\"input-mobile_image";
                echo ($context["image_row"] ?? null);
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 160);
                echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 166
            echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-sort-order\">";
            // line 168
            echo ($context["entry_sort_order"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"oct_slideshow_plus_image[";
            // line 170
            echo ($context["image_row"] ?? null);
            echo "][sort_order]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["oct_slideshow_plus_image"], "sort_order", [], "any", false, false, false, 170);
            echo "\" placeholder=\"";
            echo ($context["entry_sort_order"] ?? null);
            echo "\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"is_not_full\" ";
            // line 173
            if ((array_key_exists("full", $context) && ($context["full"] ?? null))) {
                echo "style=\"display:none;\"";
            }
            echo ">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"slide-banner_image_button_color\">";
            // line 175
            echo ($context["entry_background_color"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"oct_slideshow_plus_image[";
            // line 177
            echo ($context["image_row"] ?? null);
            echo "][background_color]\" value=\"";
            echo (($__internal_compile_10 = $context["oct_slideshow_plus_image"]) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["background_color"] ?? null) : null);
            echo "\" placeholder=\"";
            echo ($context["entry_background_color"] ?? null);
            echo "\" class=\"form-control spectrum\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"slide-banner_image_button_color\">";
            // line 181
            echo ($context["entry_title_color"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"oct_slideshow_plus_image[";
            // line 183
            echo ($context["image_row"] ?? null);
            echo "][title_color]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["oct_slideshow_plus_image"], "title_color", [], "any", false, false, false, 183);
            echo "\" placeholder=\"";
            echo ($context["entry_title_color"] ?? null);
            echo "\" class=\"form-control spectrum\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"slide-banner_image_button_color\">";
            // line 187
            echo ($context["entry_text_color"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"oct_slideshow_plus_image[";
            // line 189
            echo ($context["image_row"] ?? null);
            echo "][text_color]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["oct_slideshow_plus_image"], "text_color", [], "any", false, false, false, 189);
            echo "\" placeholder=\"";
            echo ($context["entry_text_color"] ?? null);
            echo "\" class=\"form-control spectrum\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"slide-banner_image_button_color\">";
            // line 193
            echo ($context["entry_button_color"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"oct_slideshow_plus_image[";
            // line 195
            echo ($context["image_row"] ?? null);
            echo "][button_color]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["oct_slideshow_plus_image"], "button_color", [], "any", false, false, false, 195);
            echo "\" placeholder=\"";
            echo ($context["entry_button_color"] ?? null);
            echo "\" class=\"form-control spectrum\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"slide-banner_image_button_color\">";
            // line 199
            echo ($context["entry_button_background"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"oct_slideshow_plus_image[";
            // line 201
            echo ($context["image_row"] ?? null);
            echo "][button_background]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["oct_slideshow_plus_image"], "button_background", [], "any", false, false, false, 201);
            echo "\" placeholder=\"";
            echo ($context["entry_button_background"] ?? null);
            echo "\" class=\"form-control spectrum\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"slide-button_color_hover\">";
            // line 206
            echo ($context["entry_button_color_hover"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"oct_slideshow_plus_image[";
            // line 208
            echo ($context["image_row"] ?? null);
            echo "][button_color_hover]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["oct_slideshow_plus_image"], "button_color_hover", [], "any", false, false, false, 208);
            echo "\" placeholder=\"";
            echo ($context["entry_button_color_hover"] ?? null);
            echo "\" class=\"form-control spectrum\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"slide-button_background_hover\">";
            // line 212
            echo ($context["entry_button_background_hover"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"oct_slideshow_plus_image[";
            // line 214
            echo ($context["image_row"] ?? null);
            echo "][button_background_hover]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["oct_slideshow_plus_image"], "button_background_hover", [], "any", false, false, false, 214);
            echo "\" placeholder=\"";
            echo ($context["entry_button_background_hover"] ?? null);
            echo "\" class=\"form-control spectrum\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t\t\$('#language_slide";
            // line 220
            echo ($context["image_row"] ?? null);
            echo " a:first').tab('show');
\t\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
            // line 223
            $context["image_row"] = (($context["image_row"] ?? null) + 1);
            // line 224
            echo "\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_slideshow_plus_image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 225
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<script>
\t\$('input[name=\\'product\\']').autocomplete({
\t\tsource: function(request, response) {
\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 238
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\t\tdataType: 'json',
\t\t\t\tcache: false,
\t\t\t\tsuccess: function(json) {
\t\t\t    \t\tresponse(\$.map(json, function(item) {
\t\t\t\t\t\treturn {
\t\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\t\tvalue: item['product_id']
\t\t\t\t\t\t}
\t\t\t\t\t}));
\t\t\t\t}
\t\t\t});
\t\t},
\t\tselect: function(item) {
\t    \t\t\$('input[name=\\'product\\']').val('');
\t\t\t\$('#discount-product' + item['value']).remove();
\t\t\t\$('#discount-product').append('<div id=\"discount-product' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"oct_discount_products[]\" value=\"' + item['value'] + '\" /></div>');
\t\t}
\t});

\t\$('#discount-product').delegate('.fa-minus-circle', 'click', function() {
\t\t\$(this).parent().remove();
\t});
</script>
<script>
\tvar image_row = ";
        // line 263
        echo ($context["image_row"] ?? null);
        echo ";

\tfunction addImage() {
\t\thtml  = '<div class=\"tab-pane\" id=\"image-row' + image_row + '\">';
\t\thtml += '<div class=\"col-sm-12\">';
\t\thtml += '<legend style=\"padding-bottom:10px;\" class=\"clearfix\"><div class=\"pull-left\">";
        // line 268
        echo ($context["text_settings_slides"] ?? null);
        echo "</div></legend>';
\t\thtml += '<ul class=\"nav nav-tabs\" id=\"language_slide' + image_row + '\">';
\t\t";
        // line 270
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 271
            echo "\t\thtml += '<li><a href=\"#slide_language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 271);
            echo "-' + image_row + '\" data-toggle=\"tab\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 271);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 271);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 271);
            echo "\" />  ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 271);
            echo "</a></li>';
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 273
        echo "\t\thtml += '</ul>';
\t\thtml += '<div class=\"tab-content\">';
\t\t";
        // line 275
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 276
            echo "\t\thtml += '<div class=\"tab-pane\" id=\"slide_language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 276);
            echo "-' + image_row + '\">';
\t\thtml += '<div class=\"form-group is_not_full\" ";
            // line 277
            if ((array_key_exists("full", $context) && ($context["full"] ?? null))) {
                echo "style=\"display:none;\"";
            }
            echo "><label class=\"col-sm-2 control-label\" for=\"input-title";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 277);
            echo "\">";
            echo ($context["entry_title"] ?? null);
            echo "</label><div class=\"col-sm-10\"><input type=\"text\" name=\"oct_slideshow_plus_image[' + image_row + '][oct_slideshow_plus_image_description][";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 277);
            echo "][title]\" value=\"\" placeholder=\"";
            echo ($context["entry_title"] ?? null);
            echo "\" class=\"form-control\"/></div></div>';
\t\thtml += '<div class=\"form-group is_not_full\" ";
            // line 278
            if ((array_key_exists("full", $context) && ($context["full"] ?? null))) {
                echo "style=\"display:none;\"";
            }
            echo "><label class=\"col-sm-2 control-label\" for=\"input-button";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 278);
            echo "\">";
            echo ($context["entry_button"] ?? null);
            echo "</label><div class=\"col-sm-10\"><input type=\"text\" name=\"oct_slideshow_plus_image[' + image_row + '][oct_slideshow_plus_image_description][";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 278);
            echo "][button]\" value=\"\" placeholder=\"";
            echo ($context["entry_title"] ?? null);
            echo "\" class=\"form-control\"/></div></div>';
\t\thtml += '<div class=\"form-group is_not_full\" ";
            // line 279
            if ((array_key_exists("full", $context) && ($context["full"] ?? null))) {
                echo "style=\"display:none;\"";
            }
            echo "><label class=\"col-sm-2 control-label\" for=\"input-description";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 279);
            echo "\">";
            echo ($context["entry_description"] ?? null);
            echo "</label><div class=\"col-sm-10\"><textarea name=\"oct_slideshow_plus_image[' + image_row + '][oct_slideshow_plus_image_description][";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 279);
            echo "][description]\" class=\"form-control\"></textarea></div></div>';
\t\thtml += '<div class=\"form-group\"><label class=\"col-sm-2 control-label\" for=\"input-link";
            // line 280
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 280);
            echo "\">";
            echo ($context["entry_link"] ?? null);
            echo "</label><div class=\"col-sm-10\"><input type=\"text\" name=\"oct_slideshow_plus_image[' + image_row + '][oct_slideshow_plus_image_description][";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 280);
            echo "][link]\" value=\"\" placeholder=\"";
            echo ($context["entry_link"] ?? null);
            echo "\" class=\"form-control\"/></div></div>';
\t\thtml += '<div class=\"form-group\"><div class=\"col-sm-6\"><label class=\"col-sm-4 control-label\" for=\"slide-banner_image\">";
            // line 281
            echo ($context["entry_image"] ?? null);
            echo "</label><div class=\"col-sm-8\"><a href=\"\" id=\"thumb-image' + image_row + '";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 281);
            echo "\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
            echo ($context["placeholder"] ?? null);
            echo "\" alt=\"\" title=\"\" data-placeholder=\"";
            echo ($context["placeholder"] ?? null);
            echo "\" /></a><input type=\"hidden\" name=\"oct_slideshow_plus_image[' + image_row + '][image][";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 281);
            echo "]\" value=\"\" id=\"input-image' + image_row + '";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 281);
            echo "\" /></div></div><div class=\"col-sm-6 oct-slide-mobile_image\"><label class=\"col-sm-4 control-label\" for=\"slide-mobile_image\">";
            echo ($context["entry_mobile_image"] ?? null);
            echo "</label><div class=\"col-sm-8\"><a href=\"\" id=\"thumb-mobile_image' + image_row + '";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 281);
            echo "\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
            echo ($context["placeholder"] ?? null);
            echo "\" alt=\"\" title=\"\" data-placeholder=\"";
            echo ($context["placeholder"] ?? null);
            echo "\" /></a><input type=\"hidden\" name=\"oct_slideshow_plus_image[' + image_row + '][mobile_image][";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 281);
            echo "]\" value=\"\" id=\"input-mobile_image' + image_row + '";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 281);
            echo "\" /></div></div></div>';
\t\thtml += '</div>';
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 284
        echo "\t\thtml += '</div>';
\t\thtml += '<div class=\"form-group\"><label class=\"col-sm-2 control-label\" for=\"input-sort-order\">";
        // line 285
        echo ($context["entry_sort_order"] ?? null);
        echo "</label><div class=\"col-sm-10\"><input type=\"text\" name=\"oct_slideshow_plus_image[' + image_row + '][sort_order]\" value=\"\" placeholder=\"";
        echo ($context["entry_sort_order"] ?? null);
        echo "\" class=\"form-control\"/></div></div>';
\t\thtml += '<div class=\"is_not_full\" ";
        // line 286
        if ((array_key_exists("full", $context) && ($context["full"] ?? null))) {
            echo "style=\"display:none;\"";
        }
        echo ">';
\t\thtml += '<div class=\"form-group\"><label class=\"col-sm-2 control-label\" for=\"slide-banner_image_button_color\">";
        // line 287
        echo ($context["entry_background_color"] ?? null);
        echo "</label><div class=\"col-sm-10\"><input type=\"text\" name=\"oct_slideshow_plus_image[' + image_row + '][background_color]\" value=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["oct_default_colors"] ?? null), "background_color", [], "any", false, false, false, 287);
        echo "\" placeholder=\"";
        echo ($context["entry_background_color"] ?? null);
        echo "\" class=\"form-control spectrum\"/></div></div>';
\t\thtml += '<div class=\"form-group\"><label class=\"col-sm-2 control-label\" for=\"slide-banner_image_button_color\">";
        // line 288
        echo ($context["entry_title_color"] ?? null);
        echo "</label><div class=\"col-sm-10\"><input type=\"text\" name=\"oct_slideshow_plus_image[' + image_row + '][title_color]\" value=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["oct_default_colors"] ?? null), "title_color", [], "any", false, false, false, 288);
        echo "\" placeholder=\"";
        echo ($context["entry_title_color"] ?? null);
        echo "\" class=\"form-control spectrum\"/></div></div>';
\t\thtml += '<div class=\"form-group\"><label class=\"col-sm-2 control-label\" for=\"slide-banner_image_button_color\">";
        // line 289
        echo ($context["entry_text_color"] ?? null);
        echo "</label><div class=\"col-sm-10\"><input type=\"text\" name=\"oct_slideshow_plus_image[' + image_row + '][text_color]\" value=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["oct_default_colors"] ?? null), "text_color", [], "any", false, false, false, 289);
        echo "\" placeholder=\"";
        echo ($context["entry_text_color"] ?? null);
        echo "\" class=\"form-control spectrum\"/></div></div>';
\t\thtml += '<div class=\"form-group\"><label class=\"col-sm-2 control-label\" for=\"slide-banner_image_button_color\">";
        // line 290
        echo ($context["entry_button_color"] ?? null);
        echo "</label><div class=\"col-sm-10\"><input type=\"text\" name=\"oct_slideshow_plus_image[' + image_row + '][button_color]\" value=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["oct_default_colors"] ?? null), "button_color", [], "any", false, false, false, 290);
        echo "\" placeholder=\"";
        echo ($context["entry_button_color"] ?? null);
        echo "\" class=\"form-control spectrum\"/></div></div>';
\t\thtml += '<div class=\"form-group\"><label class=\"col-sm-2 control-label\" for=\"slide-banner_image_button_color\">";
        // line 291
        echo ($context["entry_button_background"] ?? null);
        echo "</label><div class=\"col-sm-10\"><input type=\"text\" name=\"oct_slideshow_plus_image[' + image_row + '][button_background]\" value=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["oct_default_colors"] ?? null), "button_background", [], "any", false, false, false, 291);
        echo "\" placeholder=\"";
        echo ($context["entry_button_background"] ?? null);
        echo "\" class=\"form-control spectrum\"/></div></div><div class=\"form-group\"><label class=\"col-sm-2 control-label\" for=\"slide-button_color_hover\">";
        echo ($context["entry_button_color_hover"] ?? null);
        echo "</label><div class=\"col-sm-10\"><input type=\"text\" name=\"oct_slideshow_plus_image[' + image_row + '][button_color_hover]\" value=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["oct_default_colors"] ?? null), "button_color_hover", [], "any", false, false, false, 291);
        echo "\" placeholder=\"";
        echo ($context["entry_button_color_hover"] ?? null);
        echo "\" class=\"form-control spectrum\"/></div></div><div class=\"form-group\"><label class=\"col-sm-2 control-label\" for=\"slide-button_background_hover\">";
        echo ($context["entry_button_background_hover"] ?? null);
        echo "</label><div class=\"col-sm-10\"><input type=\"text\" name=\"oct_slideshow_plus_image[' + image_row + '][button_background_hover]\" value=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["oct_default_colors"] ?? null), "button_background_hover", [], "any", false, false, false, 291);
        echo "\" placeholder=\"";
        echo ($context["entry_button_background_hover"] ?? null);
        echo "\" class=\"form-control spectrum\"/></div></div>';
\t\thtml += '</div>';
\t\thtml += '</div>';
\t\thtml += '</div>';

\t\thtml2 = \"<li class='slide-li\" + image_row + \"'><a href='#image-row\" + image_row + \"' data-toggle='tab'><span class='delete-block-in' onclick='removeImage(\" + image_row + \");'><i class='fa fa-minus-circle'></i></span> ";
        // line 296
        echo ($context["entry_new_slide"] ?? null);
        echo "</a></li>\";

\t\t\$('#slideshow-setting-block').append(html);
\t\t\$('#settings').append(html2);

\t\t\$('#settings li').removeClass('active');

\t\t\$(\"#settings .slide-li\" + image_row + \" a\").tab('show');

\t\timage_row++;

\t\tinitSpectrum();

\t\tcheckFullImage();

\t\tif (\$('#banner_image_full').is(\":checked\")) {
\t\t    \$(\".is_not_full\").hide();
\t\t} else {
\t\t    \$(\".is_not_full\").show();
\t\t}
\t}

\tfunction removeImage(image_row) {
\t\t\$(\"#image-row\" + image_row).remove();
\t\t\$(\".slide-li\" + image_row).remove();

\t\t\$('#settings a:first').tab('show');
\t}
</script>
<script>
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
</script>
<script>
\tfunction updateActive() {
\t\t\$('.nav.nav-tabs').each(function () {
\t\t\t\$(this).children().children().first().tab('show');
\t\t});
\t}

\t\$('#settings a:first').tab('show');

\tfunction checkFullImage() {
\t\t\tconst currentState = \$('#banner_image_full').is(\":checked\");

\t\t\tif (currentState === false) {
\t\t\t\t\$(\".oct-slide-mobile_image\").css('display', 'none');
\t\t\t}
\t}

\tcheckFullImage();

</script>
<script>
\$(function() {
\t\$('#status_additional_banners').change(function() {
        var \$input = \$(this);

        if (\$input.is(\":checked\")) {
            \$(\"#discount_products_view\").slideDown('slow');
            \$(\"#position_view\").slideDown('slow');
        } else {
            \$(\"#discount_products_view\").slideUp('slow');
            \$(\"#position_view\").slideUp('slow');
            \$(\"#sliders_view a\").click();
        }
    });

\t\$('#banner_image_full').change(function() {
        var \$input_full = \$(this);

        if (\$input_full.is(\":checked\")) {
            \$(\".is_not_full\").slideUp('slow');
\t\t\t\t\t\t\$(\".oct-slide-mobile_image\").slideDown('slow');
        } else {
            \$(\".is_not_full\").slideDown('slow');
\t\t\t\t\t\t\$(\".oct-slide-mobile_image\").slideUp('slow');
        }
    });
});
</script>
";
        // line 387
        echo ($context["footer"] ?? null);
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "octemplates/design/oct_slideshow_plus_form.twig";
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
        return array (  980 => 387,  886 => 296,  862 => 291,  854 => 290,  846 => 289,  838 => 288,  830 => 287,  824 => 286,  818 => 285,  815 => 284,  784 => 281,  774 => 280,  762 => 279,  748 => 278,  734 => 277,  729 => 276,  725 => 275,  721 => 273,  704 => 271,  700 => 270,  695 => 268,  687 => 263,  659 => 238,  644 => 225,  638 => 224,  636 => 223,  630 => 220,  617 => 214,  612 => 212,  601 => 208,  596 => 206,  584 => 201,  579 => 199,  568 => 195,  563 => 193,  552 => 189,  547 => 187,  536 => 183,  531 => 181,  520 => 177,  515 => 175,  508 => 173,  498 => 170,  493 => 168,  489 => 166,  470 => 160,  461 => 159,  456 => 157,  442 => 153,  433 => 152,  428 => 150,  414 => 145,  407 => 143,  396 => 139,  389 => 137,  383 => 136,  371 => 133,  364 => 131,  358 => 130,  354 => 128,  347 => 124,  343 => 122,  341 => 121,  331 => 120,  324 => 118,  318 => 117,  311 => 116,  307 => 115,  303 => 113,  284 => 111,  280 => 110,  276 => 109,  271 => 107,  264 => 104,  259 => 103,  257 => 102,  249 => 97,  245 => 95,  239 => 94,  237 => 93,  226 => 92,  221 => 91,  219 => 90,  209 => 83,  192 => 71,  186 => 68,  181 => 65,  174 => 61,  170 => 59,  168 => 58,  162 => 57,  157 => 55,  140 => 43,  134 => 40,  129 => 38,  126 => 37,  120 => 34,  117 => 33,  114 => 32,  108 => 29,  105 => 28,  103 => 27,  98 => 25,  94 => 23,  88 => 20,  85 => 19,  83 => 18,  77 => 14,  66 => 12,  62 => 11,  57 => 9,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "octemplates/design/oct_slideshow_plus_form.twig", "");
    }
}
