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

/* extension/module/ocfilter/control/bool_button.twig */
class __TwigTemplate_670ae9ca5bdd2519f46cab6d2600061af5d85c6a96aa97a0782cfb59cda6b9f7 extends Template
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
        echo "<div class=\"btn-group\" data-toggle=\"buttons\">
  ";
        // line 2
        if (($context["flag"] ?? null)) {
            // line 3
            echo "  <label class=\"btn btn-default active\">
    <input type=\"radio\" name=\"";
            // line 4
            echo ($context["name"] ?? null);
            echo "\" value=\"1\" checked=\"checked\" /> ";
            echo ($context["text_yes"] ?? null);
            echo "
  </label>
  <label class=\"btn btn-default\">
    <input type=\"radio\" name=\"";
            // line 7
            echo ($context["name"] ?? null);
            echo "\" value=\"0\" /> ";
            echo ($context["text_no"] ?? null);
            echo "
  </label>
  ";
        } else {
            // line 10
            echo "  <label class=\"btn btn-default\">
    <input type=\"radio\" name=\"";
            // line 11
            echo ($context["name"] ?? null);
            echo "\" value=\"1\" /> ";
            echo ($context["text_yes"] ?? null);
            echo "
  </label>
  <label class=\"btn btn-default active\">
    <input type=\"radio\" name=\"";
            // line 14
            echo ($context["name"] ?? null);
            echo "\" value=\"0\" checked=\"checked\" /> ";
            echo ($context["text_no"] ?? null);
            echo "
  </label>
  ";
        }
        // line 17
        echo "</div>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "extension/module/ocfilter/control/bool_button.twig";
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
        return array (  80 => 17,  72 => 14,  64 => 11,  61 => 10,  53 => 7,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/ocfilter/control/bool_button.twig", "/home3/crysta22/public_html/admin/view/template/extension/module/ocfilter/control/bool_button.twig");
    }
}
