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

/* extension/module/ocfilter/setting_form/tab_appearance.twig */
class __TwigTemplate_82179487b0a18b20f4a46bf165d141bfb47158cfbb6a99bdd1289e118c978b7e extends Template
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
        echo "<h3 class=\"jumbotron\">";
        echo ($context["nav_appearance_module"] ?? null);
        echo "</h3>
<div class=\"form-group\">
  <label class=\"col-sm-3 control-label\" new-feature>";
        // line 3
        echo ($context["entry_theme"] ?? null);
        echo "</label>
  <div class=\"col-sm-3\">
    <select name=\"theme\" class=\"form-control\">
      ";
        // line 6
        if ((($context["theme"] ?? null) == "light")) {
            // line 7
            echo "      <option value=\"light\" selected=\"selected\">";
            echo ($context["text_theme_light"] ?? null);
            echo "</option>
      ";
        } else {
            // line 9
            echo "      <option value=\"light\">";
            echo ($context["text_theme_light"] ?? null);
            echo "</option>
      ";
        }
        // line 11
        echo "      ";
        if ((($context["theme"] ?? null) == "light-block")) {
            // line 12
            echo "      <option value=\"light-block\" selected=\"selected\">";
            echo ($context["text_theme_light_block"] ?? null);
            echo "</option>
      ";
        } else {
            // line 14
            echo "      <option value=\"light-block\">";
            echo ($context["text_theme_light_block"] ?? null);
            echo "</option>
      ";
        }
        // line 15
        echo "      
    </select>
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-sm-3 control-label\" new-feature>";
        // line 21
        echo ($context["entry_module_heading_title"] ?? null);
        echo "</label>
  <div class=\"col-sm-9\">
    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 24
            echo "    <div class=\"input-group\">
      <span class=\"input-group-addon\"><img src=\"";
            // line 25
            echo twig_get_attribute($this->env, $this->source, $context["language"], "image", [], "any", false, false, false, 25);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 25);
            echo "\" /></span>
      <input type=\"text\" name=\"module_heading_title[";
            // line 26
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 26);
            echo "]\" value=\"";
            echo (((($__internal_compile_0 = ($context["module_heading_title"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 26)] ?? null) : null)) ? ((($__internal_compile_1 = ($context["module_heading_title"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 26)] ?? null) : null)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_module_heading_title"] ?? null);
            echo "\" class=\"form-control\" />
    </div>
    ";
            // line 28
            if ((($__internal_compile_2 = ($context["error_module_heading_title"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 28)] ?? null) : null)) {
                // line 29
                echo "    <div class=\"text-danger\">";
                echo (($__internal_compile_3 = ($context["error_module_heading_title"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 29)] ?? null) : null);
                echo "</div>
    ";
            }
            // line 31
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-sm-3 control-label\" new-feature>";
        // line 36
        echo ($context["entry_mobile_button_text"] ?? null);
        echo "</label>
  <div class=\"col-sm-9\">
    ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 39
            echo "    <div class=\"input-group\">
      <span class=\"input-group-addon\"><img src=\"";
            // line 40
            echo twig_get_attribute($this->env, $this->source, $context["language"], "image", [], "any", false, false, false, 40);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 40);
            echo "\" /></span>
      <input type=\"text\" name=\"mobile_button_text[";
            // line 41
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 41);
            echo "]\" value=\"";
            echo (((($__internal_compile_4 = ($context["mobile_button_text"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 41)] ?? null) : null)) ? ((($__internal_compile_5 = ($context["mobile_button_text"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 41)] ?? null) : null)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_mobile_button_text"] ?? null);
            echo "\" class=\"form-control\" />
    </div>
    ";
            // line 43
            if ((($__internal_compile_6 = ($context["error_mobile_button_text"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 43)] ?? null) : null)) {
                // line 44
                echo "    <div class=\"text-danger\">";
                echo (($__internal_compile_7 = ($context["error_mobile_button_text"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 44)] ?? null) : null);
                echo "</div>
    ";
            }
            // line 46
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-sm-3 control-label\" new-feature>";
        // line 51
        echo ($context["entry_mobile_button_position"] ?? null);
        echo "</label>
  <div class=\"col-sm-9\">
    <div class=\"btn-group\" data-toggle=\"buttons\">
      ";
        // line 54
        if ((($context["mobile_button_position"] ?? null) == "fixed")) {
            // line 55
            echo "      <label class=\"btn btn-default active\">
        <input type=\"radio\" name=\"mobile_button_position\" value=\"fixed\" checked=\"checked\" /> ";
            // line 56
            echo ($context["text_mobile_button_position_fixed"] ?? null);
            echo "
      </label>
      ";
        } else {
            // line 59
            echo "      <label class=\"btn btn-default\">
        <input type=\"radio\" name=\"mobile_button_position\" value=\"fixed\" /> ";
            // line 60
            echo ($context["text_mobile_button_position_fixed"] ?? null);
            echo "
      </label>      
      ";
        }
        // line 63
        echo "      
      ";
        // line 64
        if ((($context["mobile_button_position"] ?? null) == "static")) {
            // line 65
            echo "      <label class=\"btn btn-default active\">
        <input type=\"radio\" name=\"mobile_button_position\" value=\"static\" checked=\"checked\" /> ";
            // line 66
            echo ($context["text_mobile_button_position_static"] ?? null);
            echo "
      </label>
      ";
        } else {
            // line 69
            echo "      <label class=\"btn btn-default\">
        <input type=\"radio\" name=\"mobile_button_position\" value=\"static\" /> ";
            // line 70
            echo ($context["text_mobile_button_position_static"] ?? null);
            echo "
      </label>      
      ";
        }
        // line 73
        echo "      
      ";
        // line 74
        if ((($context["mobile_button_position"] ?? null) == "both")) {
            // line 75
            echo "      <label class=\"btn btn-default active\">
        <input type=\"radio\" name=\"mobile_button_position\" value=\"both\" checked=\"checked\" /> ";
            // line 76
            echo ($context["text_mobile_button_position_both"] ?? null);
            echo "
      </label>
      ";
        } else {
            // line 79
            echo "      <label class=\"btn btn-default\">
        <input type=\"radio\" name=\"mobile_button_position\" value=\"both\" /> ";
            // line 80
            echo ($context["text_mobile_button_position_both"] ?? null);
            echo "
      </label>      
      ";
        }
        // line 82
        echo "      
    </div>
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-sm-3 control-label\" for=\"input-mobile-max-width\" new-feature>";
        // line 88
        echo ($context["entry_mobile_max_width"] ?? null);
        echo "</label>
  <div class=\"col-sm-3\">
    <div class=\"input-group\">
      <input type=\"number\" name=\"mobile_max_width\" min=\"0\" value=\"";
        // line 91
        echo ($context["mobile_max_width"] ?? null);
        echo "\" class=\"form-control\" id=\"input-mobile-max-width\" />
      <span class=\"input-group-addon\">px</span>
    </div>
  </div>
  <div class=\"col-sm-offset-3 col-sm-9\">
    <p class=\"help-block\">";
        // line 96
        echo ($context["help_mobile_max_width"] ?? null);
        echo "</p>
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-sm-3 control-label\" new-feature>";
        // line 101
        echo ($context["entry_mobile_placement"] ?? null);
        echo "</label>
  <div class=\"col-sm-9\">
    <div class=\"btn-group\" data-toggle=\"buttons\">
      ";
        // line 104
        if ((($context["mobile_placement"] ?? null) == "left")) {
            // line 105
            echo "      <label class=\"btn btn-default active\">
        <input type=\"radio\" name=\"mobile_placement\" value=\"left\" checked=\"checked\" /> <i class=\"fa fa-step-backward\"></i> ";
            // line 106
            echo ($context["text_mobile_placement_left"] ?? null);
            echo "
      </label>
      <label class=\"btn btn-default\">
        <input type=\"radio\" name=\"mobile_placement\" value=\"right\" /> ";
            // line 109
            echo ($context["text_mobile_placement_right"] ?? null);
            echo " <i class=\"fa fa-step-forward\"></i>
      </label>      
      ";
        }
        // line 112
        echo "      ";
        if ((($context["mobile_placement"] ?? null) == "right")) {
            // line 113
            echo "      <label class=\"btn btn-default\">
        <input type=\"radio\" name=\"mobile_placement\" value=\"left\" /> <i class=\"fa fa-step-backward\"></i> ";
            // line 114
            echo ($context["text_mobile_placement_left"] ?? null);
            echo "
      </label>
      <label class=\"btn btn-default active\">
        <input type=\"radio\" name=\"mobile_placement\" value=\"right\" checked=\"checked\" /> ";
            // line 117
            echo ($context["text_mobile_placement_right"] ?? null);
            echo " <i class=\"fa fa-step-forward\"></i>
      </label>
      ";
        }
        // line 120
        echo "    </div>
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-sm-3 control-label\" new-feature>";
        // line 125
        echo ($context["entry_mobile_remember_state"] ?? null);
        echo "</label>
  <div class=\"col-sm-5\">    
    ";
        // line 127
        echo twig_include($this->env, $context, "extension/module/ocfilter/control/bool_button.twig", ["flag" => ($context["mobile_remember_state"] ?? null), "name" => "mobile_remember_state"]);
        echo "
  </div>
  <div class=\"col-sm-offset-3 col-sm-9\">
    <p class=\"help-block\">";
        // line 130
        echo ($context["help_mobile_remember_state"] ?? null);
        echo "</p>
  </div>  
</div>

<h3 class=\"jumbotron\">";
        // line 134
        echo ($context["nav_appearance_filter"] ?? null);
        echo "</h3>

<div class=\"form-group\">
  <label class=\"col-sm-3 control-label\" for=\"input-show-filters-limit\">";
        // line 137
        echo ($context["entry_show_first_limit"] ?? null);
        echo "</label>
  <div class=\"col-sm-3\">
    <div class=\"input-group\">
      <input type=\"number\" name=\"show_filters_limit\" min=\"0\" value=\"";
        // line 140
        echo ($context["show_filters_limit"] ?? null);
        echo "\" class=\"form-control\" id=\"input-show-filters-limit\" />
      <span class=\"input-group-addon\">";
        // line 141
        echo ($context["text_filters"] ?? null);
        echo "</span>
    </div>
  </div>
  <div class=\"col-sm-offset-3 col-sm-9\">
    <p class=\"help-block\">";
        // line 145
        echo ($context["help_show_filters_limit"] ?? null);
        echo "</p>
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-sm-3 control-label\" new-feature>";
        // line 150
        echo ($context["entry_hidden_filters_lazy_load"] ?? null);
        echo "</label>
  <div class=\"col-sm-5\">
    ";
        // line 152
        echo twig_include($this->env, $context, "extension/module/ocfilter/control/bool_button.twig", ["flag" => ($context["hidden_filters_lazy_load"] ?? null), "name" => "hidden_filters_lazy_load"]);
        echo "
  </div>
  <div class=\"col-sm-offset-3 col-sm-9\">
    <p class=\"help-block\">";
        // line 155
        echo ($context["help_hidden_filters_lazy_load"] ?? null);
        echo "</p>
  </div>  
</div>

<div class=\"form-group\">
  <label class=\"col-sm-3 control-label\" new-feature>";
        // line 160
        echo ($context["entry_hide_single_value"] ?? null);
        echo "</label>
  <div class=\"col-sm-9\">
    ";
        // line 162
        echo twig_include($this->env, $context, "extension/module/ocfilter/control/bool_button.twig", ["flag" => ($context["hide_single_value"] ?? null), "name" => "hide_single_value"]);
        echo "

    <p class=\"help-block\">";
        // line 164
        echo ($context["help_hide_single_value"] ?? null);
        echo "</p>
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-sm-3 control-label\" new-feature>";
        // line 169
        echo ($context["entry_slider_input"] ?? null);
        echo "</label>
  <div class=\"col-sm-9\">
    ";
        // line 171
        echo twig_include($this->env, $context, "extension/module/ocfilter/control/bool_button.twig", ["flag" => ($context["slider_input"] ?? null), "name" => "slider_input"]);
        echo "
    
    <p class=\"help-block\">";
        // line 173
        echo ($context["help_slider_input"] ?? null);
        echo "</p>
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-sm-3 control-label\" new-feature>";
        // line 178
        echo ($context["entry_slider_pips"] ?? null);
        echo "</label>
  <div class=\"col-sm-9\">
    ";
        // line 180
        echo twig_include($this->env, $context, "extension/module/ocfilter/control/bool_button.twig", ["flag" => ($context["slider_pips"] ?? null), "name" => "slider_pips"]);
        echo "
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-sm-3 control-label\">";
        // line 185
        echo ($context["entry_show_selected"] ?? null);
        echo "</label>
  <div class=\"col-sm-9\">
    ";
        // line 187
        echo twig_include($this->env, $context, "extension/module/ocfilter/control/bool_button.twig", ["flag" => ($context["show_selected"] ?? null), "name" => "show_selected"]);
        echo "
    
    <p class=\"help-block\">";
        // line 189
        echo ($context["help_show_selected"] ?? null);
        echo "</p>
  </div>
</div>

<h3 class=\"jumbotron\">";
        // line 193
        echo ($context["nav_appearance_filter_value"] ?? null);
        echo "</h3>

<div class=\"form-group\">
  <label class=\"col-sm-3 control-label\">";
        // line 196
        echo ($context["entry_show_counter"] ?? null);
        echo "</label>
  <div class=\"col-sm-9\">    
    ";
        // line 198
        echo twig_include($this->env, $context, "extension/module/ocfilter/control/bool_button.twig", ["flag" => ($context["show_counter"] ?? null), "name" => "show_counter"]);
        echo "

    <p class=\"help-block\">";
        // line 200
        echo ($context["help_show_counter"] ?? null);
        echo "</p>
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-sm-3 control-label\" for=\"input-show-values-limit\">";
        // line 205
        echo ($context["entry_show_first_limit"] ?? null);
        echo "</label>
  <div class=\"col-sm-3\">
    <div class=\"input-group\">
      <input type=\"number\" name=\"show_values_limit\" min=\"0\" value=\"";
        // line 208
        echo ($context["show_values_limit"] ?? null);
        echo "\" class=\"form-control\" id=\"input-show-values-limit\" />
      <span class=\"input-group-addon\">";
        // line 209
        echo ($context["text_values"] ?? null);
        echo "</span>
    </div>
  </div>
  <div class=\"col-sm-offset-3 col-sm-9\">
    <p class=\"help-block\">";
        // line 213
        echo ($context["help_show_values_limit"] ?? null);
        echo "</p>
  </div>    
</div>

<div class=\"form-group\">
  <label class=\"col-sm-3 control-label\" new-feature>";
        // line 218
        echo ($context["entry_hidden_values_lazy_load"] ?? null);
        echo "</label>
  <div class=\"col-sm-5\">
    ";
        // line 220
        echo twig_include($this->env, $context, "extension/module/ocfilter/control/bool_button.twig", ["flag" => ($context["hidden_values_lazy_load"] ?? null), "name" => "hidden_values_lazy_load", "text_yes" => ($context["text_enabled"] ?? null), "text_no" => ($context["text_disabled"] ?? null)]);
        echo "
  </div>
  <div class=\"col-sm-offset-3 col-sm-9\">
    <p class=\"help-block\">";
        // line 223
        echo ($context["help_hidden_values_lazy_load"] ?? null);
        echo "</p>
  </div>   
</div>

<div class=\"form-group\">
  <label class=\"col-sm-3 control-label\">";
        // line 228
        echo ($context["entry_hide_empty_values"] ?? null);
        echo "</label>
  <div class=\"col-sm-9\">
    ";
        // line 230
        echo twig_include($this->env, $context, "extension/module/ocfilter/control/bool_button.twig", ["flag" => ($context["hide_empty_values"] ?? null), "name" => "hide_empty_values"]);
        echo "

    <p class=\"help-block\">";
        // line 232
        echo ($context["help_hide_empty_values"] ?? null);
        echo "</p>
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-sm-3 control-label beta-feature\" new-feature>";
        // line 237
        echo ($context["entry_values_auto_column"] ?? null);
        echo "</label>
  <div class=\"col-sm-5\">
    ";
        // line 239
        echo twig_include($this->env, $context, "extension/module/ocfilter/control/bool_button.twig", ["flag" => ($context["values_auto_column"] ?? null), "name" => "values_auto_column"]);
        echo "
  </div>
  <div class=\"col-sm-offset-3 col-sm-9\">
    <p class=\"help-block\">";
        // line 242
        echo ($context["help_values_auto_column"] ?? null);
        echo "</p>
  </div>    
</div>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "extension/module/ocfilter/setting_form/tab_appearance.twig";
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
        return array (  561 => 242,  555 => 239,  550 => 237,  542 => 232,  537 => 230,  532 => 228,  524 => 223,  518 => 220,  513 => 218,  505 => 213,  498 => 209,  494 => 208,  488 => 205,  480 => 200,  475 => 198,  470 => 196,  464 => 193,  457 => 189,  452 => 187,  447 => 185,  439 => 180,  434 => 178,  426 => 173,  421 => 171,  416 => 169,  408 => 164,  403 => 162,  398 => 160,  390 => 155,  384 => 152,  379 => 150,  371 => 145,  364 => 141,  360 => 140,  354 => 137,  348 => 134,  341 => 130,  335 => 127,  330 => 125,  323 => 120,  317 => 117,  311 => 114,  308 => 113,  305 => 112,  299 => 109,  293 => 106,  290 => 105,  288 => 104,  282 => 101,  274 => 96,  266 => 91,  260 => 88,  252 => 82,  246 => 80,  243 => 79,  237 => 76,  234 => 75,  232 => 74,  229 => 73,  223 => 70,  220 => 69,  214 => 66,  211 => 65,  209 => 64,  206 => 63,  200 => 60,  197 => 59,  191 => 56,  188 => 55,  186 => 54,  180 => 51,  174 => 47,  168 => 46,  162 => 44,  160 => 43,  151 => 41,  145 => 40,  142 => 39,  138 => 38,  133 => 36,  127 => 32,  121 => 31,  115 => 29,  113 => 28,  104 => 26,  98 => 25,  95 => 24,  91 => 23,  86 => 21,  78 => 15,  72 => 14,  66 => 12,  63 => 11,  57 => 9,  51 => 7,  49 => 6,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/ocfilter/setting_form/tab_appearance.twig", "/home3/crysta22/public_html/admin/view/template/extension/module/ocfilter/setting_form/tab_appearance.twig");
    }
}
