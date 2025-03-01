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

/* octemplates/module/oct_popup_view.twig */
class __TwigTemplate_1260627e31090e6f1e690fb622f3e5a9de09eee05cd054c723a42d9ebb084037 extends Template
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
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 17
        if (($context["error_warning"] ?? null)) {
            // line 18
            echo "\t<script>
\t\tusNotify('warning', '";
            // line 19
            echo ($context["error_warning"] ?? null);
            echo "');
\t</script>
\t";
        }
        // line 22
        echo "\t";
        if (($context["success"] ?? null)) {
            // line 23
            echo "    <script>
\t\tusNotify('success', '";
            // line 24
            echo ($context["success"] ?? null);
            echo "');
\t</script>
    ";
        }
        // line 27
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 29
        echo ($context["text_edit"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 32
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form\" class=\"form-horizontal\">
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"setting-tab\">
              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-status\">";
        // line 36
        echo ($context["entry_status"] ?? null);
        echo "</label>
                <div class=\"col-sm-9\">
                  <div class=\"toggle-group\">
\t\t\t\t    <input type=\"checkbox\" name=\"oct_popup_view_status\" ";
        // line 39
        if (($context["oct_popup_view_status"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"oct_popup_view_status\" tabindex=\"1\">
\t\t\t\t    <label for=\"oct_popup_view_status\"></label>
\t\t\t\t    <div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t        <div class=\"onoffswitch-label\">
\t\t\t\t            <div class=\"onoffswitch-inner\"></div>
\t\t\t\t            <div class=\"onoffswitch-switch\"></div>
\t\t\t\t        </div>
\t\t\t\t    </div>
\t\t\t\t  </div>
                </div>
              </div>
              <div id=\"all_settings\" ";
        // line 50
        if (( !array_key_exists("oct_popup_view_status", $context) || (array_key_exists("oct_popup_view_status", $context) &&  !($context["oct_popup_view_status"] ?? null)))) {
            echo "style=\"display:none\"";
        }
        echo ">
\t              <div class=\"form-group\">
\t                <div class=\"col-sm-6\">
\t                \t<label class=\"col-sm-6 control-label\" for=\"input-quantity\">";
        // line 53
        echo ($context["entry_quantity"] ?? null);
        echo "</label>
\t\t                <div class=\"col-sm-6\">
\t\t                  <div class=\"toggle-group\">
\t\t\t\t\t\t    <input type=\"checkbox\" name=\"oct_popup_view_data[quantity]\" ";
        // line 56
        if (twig_get_attribute($this->env, $this->source, ($context["oct_popup_view_data"] ?? null), "quantity", [], "any", false, false, false, 56)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-quantity\" tabindex=\"1\">
\t\t\t\t\t\t    <label for=\"input-quantity\"></label>
\t\t\t\t\t\t    <div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t        <div class=\"onoffswitch-label\">
\t\t\t\t\t\t            <div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t            <div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t        </div>
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t  </div>
\t\t                </div>
\t                </div>
\t                <div class=\"col-sm-6\">
\t                \t<label class=\"col-sm-6 control-label\" for=\"input-specification\">";
        // line 68
        echo ($context["entry_specification_tab"] ?? null);
        echo "</label>
\t\t                <div class=\"col-sm-6\">
\t\t                  <div class=\"toggle-group\">
\t\t\t\t\t\t    <input type=\"checkbox\" name=\"oct_popup_view_data[specification]\" ";
        // line 71
        if (twig_get_attribute($this->env, $this->source, ($context["oct_popup_view_data"] ?? null), "specification", [], "any", false, false, false, 71)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-specification\" tabindex=\"1\">
\t\t\t\t\t\t    <label for=\"input-specification\"></label>
\t\t\t\t\t\t    <div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t        <div class=\"onoffswitch-label\">
\t\t\t\t\t\t            <div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t            <div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t        </div>
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t  </div>
\t\t                </div>
\t                </div>
\t              </div>
\t              <div class=\"form-group\">
\t                <div class=\"col-sm-6\">
\t                \t<label class=\"col-sm-6 control-label\" for=\"input-wishlist\">";
        // line 85
        echo ($context["entry_wishlist"] ?? null);
        echo "</label>
\t\t                <div class=\"col-sm-6\">
\t\t                  <div class=\"toggle-group\">
\t\t\t\t\t\t    <input type=\"checkbox\" name=\"oct_popup_view_data[wishlist]\" ";
        // line 88
        if (twig_get_attribute($this->env, $this->source, ($context["oct_popup_view_data"] ?? null), "wishlist", [], "any", false, false, false, 88)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-wishlist\" tabindex=\"1\">
\t\t\t\t\t\t    <label for=\"input-wishlist\"></label>
\t\t\t\t\t\t    <div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t        <div class=\"onoffswitch-label\">
\t\t\t\t\t\t            <div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t            <div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t        </div>
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t  </div>
\t\t                </div>
\t                </div>
\t                <div class=\"col-sm-6\">
\t                \t<label class=\"col-sm-6 control-label\" for=\"input-compare\">";
        // line 100
        echo ($context["entry_compare"] ?? null);
        echo "</label>
\t\t                <div class=\"col-sm-6\">
\t\t                  <div class=\"toggle-group\">
\t\t\t\t\t\t    <input type=\"checkbox\" name=\"oct_popup_view_data[compare]\" ";
        // line 103
        if (twig_get_attribute($this->env, $this->source, ($context["oct_popup_view_data"] ?? null), "compare", [], "any", false, false, false, 103)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-compare\" tabindex=\"1\">
\t\t\t\t\t\t    <label for=\"input-compare\"></label>
\t\t\t\t\t\t    <div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t        <div class=\"onoffswitch-label\">
\t\t\t\t\t\t            <div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t            <div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t        </div>
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t  </div>
\t\t                </div>
\t                </div>
\t              </div>
\t              <div class=\"form-group\">
\t                <div class=\"col-sm-6\">
\t                \t<label class=\"col-sm-6 control-label\" for=\"input-description\">";
        // line 117
        echo ($context["entry_description_tab"] ?? null);
        echo "</label>
\t\t                <div class=\"col-sm-6\">
\t\t                  <div class=\"toggle-group\">
\t\t\t\t\t\t    <input type=\"checkbox\" name=\"oct_popup_view_data[description]\" ";
        // line 120
        if (twig_get_attribute($this->env, $this->source, ($context["oct_popup_view_data"] ?? null), "description", [], "any", false, false, false, 120)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-description\" tabindex=\"1\">
\t\t\t\t\t\t    <label for=\"input-description\"></label>
\t\t\t\t\t\t    <div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t        <div class=\"onoffswitch-label\">
\t\t\t\t\t\t            <div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t            <div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t        </div>
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t  </div>
\t\t                </div>
\t                </div>
\t                <div class=\"col-sm-6\" id=\"description\" ";
        // line 131
        if (( !twig_get_attribute($this->env, $this->source, ($context["oct_popup_view_data"] ?? null), "description", [], "any", true, true, false, 131) || (twig_get_attribute($this->env, $this->source, ($context["oct_popup_view_data"] ?? null), "description", [], "any", true, true, false, 131) &&  !twig_get_attribute($this->env, $this->source, ($context["oct_popup_view_data"] ?? null), "description", [], "any", false, false, false, 131)))) {
            echo "style=\"display:none\"";
        }
        echo ">
\t                  <label class=\"col-sm-4 control-label\" for=\"input-description_max\">";
        // line 132
        echo ($context["entry_description_max"] ?? null);
        echo "</label>
\t                  <div class=\"col-sm-6\">
\t                    <input type=\"text\" name=\"oct_popup_view_data[description_max]\" value=\"";
        // line 134
        echo (($__internal_compile_0 = ($context["oct_popup_view_data"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["description_max"] ?? null) : null);
        echo "\" id=\"input-description_max\" class=\"form-control\" />
\t                  </div>
\t                </div>
\t              </div>
\t              <div class=\"form-group\">
\t                <div class=\"col-sm-6\">
\t                \t<label class=\"col-sm-6 control-label\" for=\"input-image\">";
        // line 140
        echo ($context["entry_image"] ?? null);
        echo "</label>
\t\t                <div class=\"col-sm-6\">
\t\t                  <div class=\"toggle-group\">
\t\t\t\t\t\t    <input type=\"checkbox\" name=\"oct_popup_view_data[image]\" ";
        // line 143
        if (twig_get_attribute($this->env, $this->source, ($context["oct_popup_view_data"] ?? null), "image", [], "any", false, false, false, 143)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-image\" tabindex=\"1\">
\t\t\t\t\t\t    <label for=\"input-image\"></label>
\t\t\t\t\t\t    <div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t        <div class=\"onoffswitch-label\">
\t\t\t\t\t\t            <div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t            <div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t        </div>
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t  </div>
\t\t                </div>
\t                </div>
\t                <div class=\"col-sm-6\" id=\"image_view\" ";
        // line 154
        if (( !twig_get_attribute($this->env, $this->source, ($context["oct_popup_view_data"] ?? null), "image", [], "any", true, true, false, 154) || (twig_get_attribute($this->env, $this->source, ($context["oct_popup_view_data"] ?? null), "image", [], "any", true, true, false, 154) &&  !twig_get_attribute($this->env, $this->source, ($context["oct_popup_view_data"] ?? null), "image", [], "any", false, false, false, 154)))) {
            echo "style=\"display:none\"";
        }
        echo ">
\t                  <label class=\"col-sm-4 control-label\" for=\"input-width\">";
        // line 155
        echo ($context["entry_width"] ?? null);
        echo "</label>
\t                  <div class=\"col-sm-2\">
\t                    <input type=\"text\" name=\"oct_popup_view_data[image_width]\" value=\"";
        // line 157
        echo twig_get_attribute($this->env, $this->source, ($context["oct_popup_view_data"] ?? null), "image_width", [], "any", false, false, false, 157);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-width\" class=\"form-control\" />
\t                  </div>
\t                  <label class=\"col-sm-2 control-label\" for=\"input-height\">";
        // line 159
        echo ($context["entry_height"] ?? null);
        echo "</label>
\t                  <div class=\"col-sm-2\">
\t                    <input type=\"text\" name=\"oct_popup_view_data[image_height]\" value=\"";
        // line 161
        echo twig_get_attribute($this->env, $this->source, ($context["oct_popup_view_data"] ?? null), "image_height", [], "any", false, false, false, 161);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" id=\"input-height\" class=\"form-control\" />
\t                  </div>
\t                </div>
\t              </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script>
\$(function() {
\t\$('#oct_popup_view_status').change(function() {
        var \$input = \$(this);

        if (\$input.is(\":checked\")) {
            \$(\"#all_settings\").slideDown('slow');
        } else {
            \$(\"#all_settings\").slideUp('slow');
        }
    });
\t
    \$('#input-description').change(function() {
        var \$input = \$(this);

        if (\$input.is(\":checked\")) {
            \$(\"#description\").slideDown('slow');
        } else {
            \$(\"#description\").slideUp('slow');
        }
    });
    
    \$('#input-image').change(function() {
        var \$input = \$(this);

        if (\$input.is(\":checked\")) {
            \$(\"#image_view\").slideDown('slow');
        } else {
            \$(\"#image_view\").slideUp('slow');
        }
    });
    
    \$('#input-additional_image').change(function() {
        var \$input = \$(this);

        if (\$input.is(\":checked\")) {
            \$(\"#images_mini\").slideDown('slow');
        } else {
            \$(\"#images_mini\").slideUp('slow');
        }
    });
});
</script>
";
        // line 216
        echo ($context["footer"] ?? null);
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "octemplates/module/oct_popup_view.twig";
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
        return array (  395 => 216,  335 => 161,  330 => 159,  323 => 157,  318 => 155,  312 => 154,  296 => 143,  290 => 140,  281 => 134,  276 => 132,  270 => 131,  254 => 120,  248 => 117,  229 => 103,  223 => 100,  206 => 88,  200 => 85,  181 => 71,  175 => 68,  158 => 56,  152 => 53,  144 => 50,  128 => 39,  122 => 36,  115 => 32,  109 => 29,  105 => 27,  99 => 24,  96 => 23,  93 => 22,  87 => 19,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "octemplates/module/oct_popup_view.twig", "");
    }
}
