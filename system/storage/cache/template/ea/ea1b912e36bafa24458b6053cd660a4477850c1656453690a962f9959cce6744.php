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

/* extension/module/ocfilter/setting_form/tab_general.twig */
class __TwigTemplate_58beb40c81f390ce8439437dd3363f37b998bac711a9fc3b48d377e5486b1c33 extends Template
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
        echo "<div class=\"form-group\">
  <label class=\"col-sm-3 control-label\">";
        // line 2
        echo ($context["entry_license"] ?? null);
        echo "</label>
  <div class=\"col-sm-5\">
    <input type=\"text\" name=\"license\" value=\"";
        // line 4
        echo ($context["license"] ?? null);
        echo "\" class=\"form-control\" />
    ";
        // line 5
        if (($context["error_license"] ?? null)) {
            // line 6
            echo "    <p class=\"text-danger\">";
            echo ($context["error_license"] ?? null);
            echo "</p>
    ";
        }
        // line 7
        echo "    
    <p class=\"help-block\">";
        // line 8
        echo ($context["help_license"] ?? null);
        echo "</p>
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-sm-3 control-label\">";
        // line 13
        echo ($context["entry_status"] ?? null);
        echo "</label> 
  <div class=\"col-sm-9\">
    ";
        // line 15
        echo twig_include($this->env, $context, "extension/module/ocfilter/control/bool_button.twig", ["flag" => ($context["status"] ?? null), "name" => "status", "text_yes" => ($context["text_enabled"] ?? null), "text_no" => ($context["text_disabled"] ?? null)]);
        echo "
    
    <p class=\"help-block\">";
        // line 17
        echo ($context["help_status"] ?? null);
        echo "</p>
  </div>
</div>

<div class=\"form-group form-group-popover\">
  <label class=\"col-sm-3 control-label\">";
        // line 22
        echo ($context["entry_category_visibility"] ?? null);
        echo "</label>
  <div class=\"col-sm-9\">
    <div class=\"btn-group-vertical\" data-toggle=\"buttons\">
      ";
        // line 25
        if ((($context["category_visibility"] ?? null) == "default")) {
            // line 26
            echo "      <label class=\"btn btn-default active\" data-content=\"";
            echo ($context["help_category_visibility_default"] ?? null);
            echo "\">
        <input type=\"radio\" name=\"category_visibility\" value=\"default\" checked=\"checked\" /> ";
            // line 27
            echo ($context["text_category_visibility_default"] ?? null);
            echo "
      </label>
      ";
        } else {
            // line 30
            echo "      <label class=\"btn btn-default\" data-content=\"";
            echo ($context["help_category_visibility_default"] ?? null);
            echo "\">
        <input type=\"radio\" name=\"category_visibility\" value=\"default\" /> ";
            // line 31
            echo ($context["text_category_visibility_default"] ?? null);
            echo "
      </label>
      ";
        }
        // line 34
        echo "      ";
        if ((($context["category_visibility"] ?? null) == "parent")) {
            // line 35
            echo "      <label class=\"btn btn-default active\" data-content=\"";
            echo ($context["help_category_visibility_parent"] ?? null);
            echo "\">
        <input type=\"radio\" name=\"category_visibility\" value=\"parent\" checked=\"checked\" /> ";
            // line 36
            echo ($context["text_category_visibility_parent"] ?? null);
            echo "
      </label>
      ";
        } else {
            // line 39
            echo "      <label class=\"btn btn-default\" data-content=\"";
            echo ($context["help_category_visibility_parent"] ?? null);
            echo "\">
        <input type=\"radio\" name=\"category_visibility\" value=\"parent\" /> ";
            // line 40
            echo ($context["text_category_visibility_parent"] ?? null);
            echo "
      </label>
      ";
        }
        // line 43
        echo "      ";
        if ((($context["category_visibility"] ?? null) == "last_level")) {
            // line 44
            echo "      <label class=\"btn btn-default active\" data-content=\"";
            echo ($context["help_category_visibility_last_level"] ?? null);
            echo "\" new-feature>
        <input type=\"radio\" name=\"category_visibility\" value=\"last_level\" checked=\"checked\" /> ";
            // line 45
            echo ($context["text_category_visibility_last_level"] ?? null);
            echo "
      </label>
      ";
        } else {
            // line 48
            echo "      <label class=\"btn btn-default\" data-content=\"";
            echo ($context["help_category_visibility_last_level"] ?? null);
            echo "\" new-feature>
        <input type=\"radio\" name=\"category_visibility\" value=\"last_level\" /> ";
            // line 49
            echo ($context["text_category_visibility_last_level"] ?? null);
            echo "
      </label>
      ";
        }
        // line 52
        echo "    </div>
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-sm-3 control-label\" new-feature>";
        // line 57
        echo ($context["entry_hide_categories"] ?? null);
        echo "</label>
  <div class=\"col-sm-9\">    
    ";
        // line 59
        echo twig_include($this->env, $context, "extension/module/ocfilter/control/bool_button.twig", ["flag" => ($context["hide_categories"] ?? null), "name" => "hide_categories"]);
        echo "
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-sm-3 control-label\" new-feature>";
        // line 64
        echo ($context["entry_only_instock"] ?? null);
        echo "</label>
  <div class=\"col-sm-9\">
    ";
        // line 66
        echo twig_include($this->env, $context, "extension/module/ocfilter/control/bool_button.twig", ["flag" => ($context["only_instock"] ?? null), "name" => "only_instock"]);
        echo "

    <p class=\"help-block\">";
        // line 68
        echo ($context["help_only_instock"] ?? null);
        echo "</p>
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-sm-3 control-label\">";
        // line 73
        echo ($context["entry_search_button"] ?? null);
        echo "</label>
  <div class=\"col-sm-9\">    
    ";
        // line 75
        echo twig_include($this->env, $context, "extension/module/ocfilter/control/bool_button.twig", ["flag" => ($context["search_button"] ?? null), "name" => "search_button"]);
        echo "
    
    <p class=\"help-block\">";
        // line 77
        echo ($context["help_search_button"] ?? null);
        echo "</p>
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-sm-3 control-label\" new-feature>";
        // line 82
        echo ($context["entry_cache"] ?? null);
        echo "</label>
  <div class=\"col-sm-9\">
    <div class=\"btn-group\" data-toggle=\"buttons\">
      ";
        // line 85
        if (($context["cache"] ?? null)) {
            // line 86
            echo "      <label class=\"btn btn-default active\" data-trigger=\"onclick\" onclick=\"\$('#cache-store').collapse('show')\">
        <input type=\"radio\" name=\"cache\" value=\"1\" checked=\"checked\" /> ";
            // line 87
            echo ($context["text_enabled"] ?? null);
            echo "
      </label>
      <label class=\"btn btn-default\" onclick=\"\$('#cache-store').collapse('hide')\">
        <input type=\"radio\" name=\"cache\" value=\"0\" /> ";
            // line 90
            echo ($context["text_disabled"] ?? null);
            echo "
      </label>
      ";
        } else {
            // line 93
            echo "      <label class=\"btn btn-default\" onclick=\"\$('#cache-store').collapse('show')\">
        <input type=\"radio\" name=\"cache\" value=\"1\" /> ";
            // line 94
            echo ($context["text_enabled"] ?? null);
            echo "
      </label>
      <label class=\"btn btn-default active\" data-trigger=\"onclick\" onclick=\"\$('#cache-store').collapse('hide')\">
        <input type=\"radio\" name=\"cache\" value=\"0\" checked=\"checked\" /> ";
            // line 97
            echo ($context["text_disabled"] ?? null);
            echo "
      </label>
      ";
        }
        // line 100
        echo "    </div>
    <p class=\"help-block\">";
        // line 101
        echo ($context["help_cache"] ?? null);
        echo "</p>
  </div>
</div>

<div class=\"collapse\" id=\"cache-store\">
  <div class=\"form-group\">
    <label class=\"col-sm-3 control-label\" for=\"input-cache-store\">";
        // line 107
        echo ($context["entry_cache_store"] ?? null);
        echo "</label>
    <div class=\"col-sm-4 col-md-3 col-lg-2\">
      <select name=\"cache_store\" id=\"input-cache-store\" class=\"form-control\">
        ";
        // line 110
        if ((($context["cache_store"] ?? null) == "db")) {
            // line 111
            echo "        <option value=\"db\" selected=\"selected\">";
            echo ($context["text_cache_db"] ?? null);
            echo "</option>
        ";
        } else {
            // line 113
            echo "        <option value=\"db\">";
            echo ($context["text_cache_db"] ?? null);
            echo "</option>
        ";
        }
        // line 115
        echo "        ";
        if ((($context["cache_store"] ?? null) == "system")) {
            // line 116
            echo "        <option value=\"system\" selected=\"selected\">";
            echo ($context["text_cache_system"] ?? null);
            echo "</option>
        ";
        } else {
            // line 118
            echo "        <option value=\"system\">";
            echo ($context["text_cache_system"] ?? null);
            echo "</option>
        ";
        }
        // line 119
        echo "       
      </select>
    </div>
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-sm-3 control-label beta-feature\">";
        // line 126
        echo ($context["entry_debug"] ?? null);
        echo "</label>
  <div class=\"col-sm-9\">
    ";
        // line 128
        echo twig_include($this->env, $context, "extension/module/ocfilter/control/bool_button.twig", ["flag" => ($context["debug"] ?? null), "name" => "debug"]);
        echo "
    
    <p class=\"help-block\">";
        // line 130
        echo ($context["help_debug"] ?? null);
        echo "</p>
  </div>
</div>

<h3 class=\"jumbotron\">";
        // line 134
        echo ($context["nav_general_compatibility"] ?? null);
        echo "</h3>

<div class=\"row\">
  <div class=\"col-sm-offset-3 col-sm-9\">
    <h4>Hyper Multi Product Models</h4>
  </div>
</div>

<div class=\"form-group ";
        // line 142
        echo ((($context["use_hpmodel"] ?? null)) ? ("") : ("disabled"));
        echo "\">
  <label class=\"col-sm-3 control-label\" new-feature>";
        // line 143
        echo ($context["entry_module_hpm_group_products"] ?? null);
        echo "</label>
  <div class=\"col-sm-9\">    
    ";
        // line 145
        echo twig_include($this->env, $context, "extension/module/ocfilter/control/bool_button.twig", ["flag" => ($context["module_hpm_group_products"] ?? null), "name" => "module_hpm_group_products"]);
        echo "
    
    <p class=\"help-block\">";
        // line 147
        echo ($context["help_module_hpm_group_products"] ?? null);
        echo "</p>
  </div>
</div>

<div class=\"form-group ";
        // line 151
        echo ((($context["use_hpmodel"] ?? null)) ? ("") : ("disabled"));
        echo "\">
  <label class=\"col-sm-3 control-label\" new-feature>";
        // line 152
        echo ($context["entry_module_hpm_group_counter"] ?? null);
        echo "</label>
  <div class=\"col-sm-9\">
    ";
        // line 154
        echo twig_include($this->env, $context, "extension/module/ocfilter/control/bool_button.twig", ["flag" => ($context["module_hpm_group_counter"] ?? null), "name" => "module_hpm_group_counter"]);
        echo "
    
    <p class=\"help-block\">";
        // line 156
        echo ($context["help_module_hpm_group_counter"] ?? null);
        echo "</p>
  </div>
</div>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "extension/module/ocfilter/setting_form/tab_general.twig";
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
        return array (  379 => 156,  374 => 154,  369 => 152,  365 => 151,  358 => 147,  353 => 145,  348 => 143,  344 => 142,  333 => 134,  326 => 130,  321 => 128,  316 => 126,  307 => 119,  301 => 118,  295 => 116,  292 => 115,  286 => 113,  280 => 111,  278 => 110,  272 => 107,  263 => 101,  260 => 100,  254 => 97,  248 => 94,  245 => 93,  239 => 90,  233 => 87,  230 => 86,  228 => 85,  222 => 82,  214 => 77,  209 => 75,  204 => 73,  196 => 68,  191 => 66,  186 => 64,  178 => 59,  173 => 57,  166 => 52,  160 => 49,  155 => 48,  149 => 45,  144 => 44,  141 => 43,  135 => 40,  130 => 39,  124 => 36,  119 => 35,  116 => 34,  110 => 31,  105 => 30,  99 => 27,  94 => 26,  92 => 25,  86 => 22,  78 => 17,  73 => 15,  68 => 13,  60 => 8,  57 => 7,  51 => 6,  49 => 5,  45 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/ocfilter/setting_form/tab_general.twig", "/home3/crysta22/public_html/admin/view/template/extension/module/ocfilter/setting_form/tab_general.twig");
    }
}
