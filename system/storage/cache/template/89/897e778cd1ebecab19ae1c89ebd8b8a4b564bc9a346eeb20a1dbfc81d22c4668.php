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

/* extension/module/ocfilter/control/sort_order.twig */
class __TwigTemplate_a5b049a5a778c2b6bbe3fe135370e2e2d21926710d041cb32370cd502b285d9c extends Template
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
        echo "<div class=\"input-group ocf-sort-order\" data-toggle=\"buttons\">
  <div class=\"input-group-btn\">
    ";
        // line 3
        if ((($context["sort_order"] ?? null) == "begin")) {
            // line 4
            echo "    <label class=\"btn btn-default\">
      <input type=\"radio\" name=\"";
            // line 5
            echo ($context["name"] ?? null);
            echo "\" value=\"begin\" checked /> ";
            echo ($context["text_begin"] ?? null);
            echo "
    </label>
    ";
        } else {
            // line 8
            echo "    <label class=\"btn btn-default\">
      <input type=\"radio\" name=\"";
            // line 9
            echo ($context["name"] ?? null);
            echo "\" value=\"begin\" /> ";
            echo ($context["text_begin"] ?? null);
            echo "
    </label>          
    ";
        }
        // line 12
        echo "  </div>
  <div class=\"input-group-prepend ocf-relative\">
    ";
        // line 14
        if (((($context["sort_order"] ?? null) != "begin") && (($context["sort_order"] ?? null) != "after"))) {
            // line 15
            echo "    <input type=\"number\" name=\"";
            echo ($context["name"] ?? null);
            echo "\" value=\"";
            echo ($context["sort_order"] ?? null);
            echo "\" class=\"form-control\" />
    ";
        } else {
            // line 17
            echo "    <input type=\"number\" name=\"";
            echo ($context["name"] ?? null);
            echo "\" value=\"\" class=\"form-control\" disabled />
    ";
        }
        // line 18
        echo " 
    <div class=\"ocf-input-placeholder\"></div>
  </div>    
  <div class=\"input-group-btn\">
    ";
        // line 22
        if ((($context["sort_order"] ?? null) == "after")) {
            // line 23
            echo "    <label class=\"btn btn-default\">
      <input type=\"radio\" name=\"";
            // line 24
            echo ($context["name"] ?? null);
            echo "\" value=\"after\" checked /> ";
            echo ($context["text_after"] ?? null);
            echo "
    </label>
    ";
        } else {
            // line 27
            echo "    <label class=\"btn btn-default\">
      <input type=\"radio\" name=\"";
            // line 28
            echo ($context["name"] ?? null);
            echo "\" value=\"after\" /> ";
            echo ($context["text_after"] ?? null);
            echo "
    </label>
    ";
        }
        // line 31
        echo "  </div>
</div>  
<p class=\"help-block\">";
        // line 33
        echo ($context["help_sort_order"] ?? null);
        echo "</p>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "extension/module/ocfilter/control/sort_order.twig";
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
        return array (  119 => 33,  115 => 31,  107 => 28,  104 => 27,  96 => 24,  93 => 23,  91 => 22,  85 => 18,  79 => 17,  71 => 15,  69 => 14,  65 => 12,  57 => 9,  54 => 8,  46 => 5,  43 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/ocfilter/control/sort_order.twig", "/home3/crysta22/public_html/admin/view/template/extension/module/ocfilter/control/sort_order.twig");
    }
}
