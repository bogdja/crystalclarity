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

/* oct_deals/template/octemplates/module/oct_benefits.twig */
class __TwigTemplate_0049ca562b880927e1c5fe5a13f2ff5e7d1db43e6af8a876fbdf2cfc8be42919 extends Template
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
        if (($context["oct_benefits"] ?? null)) {
            // line 2
            echo "<div id=\"ds-shop-advantages-";
            echo ($context["module"] ?? null);
            echo "\" class=\"row pt-3 g-2 g-md-3 ds-advantages\">
\t";
            // line 3
            $context["key"] = 0;
            // line 4
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["oct_benefits"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["oct_benefit"]) {
                // line 5
                echo "\t";
                $context["key"] = (($context["key"] ?? null) + 1);
                // line 6
                echo "\t\t";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["oct_benefit"], "title", [], "any", false, true, false, 6), ($context["language_id"] ?? null), [], "array", true, true, false, 6) && (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, $context["oct_benefit"], "title", [], "any", false, false, false, 6)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[($context["language_id"] ?? null)] ?? null) : null))) {
                    // line 7
                    echo "\t\t\t<div class=\"ds-advantages-item\">
\t\t\t\t<div id=\"block";
                    // line 8
                    echo ($context["module"] ?? null);
                    echo "-";
                    echo ($context["key"] ?? null);
                    echo "\" class=\"content-block d-flex flex-row flex-xl-column align-items-center text-xl-center h-100 px-2 px-md-3\">
\t\t\t\t\t<img src=\"";
                    // line 9
                    echo twig_get_attribute($this->env, $this->source, $context["oct_benefit"], "icon", [], "any", false, false, false, 9);
                    echo "\" alt=\"";
                    echo (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, $context["oct_benefit"], "title", [], "any", false, false, false, 9)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[($context["language_id"] ?? null)] ?? null) : null);
                    echo "\" width=\"40\" height=\"40\" loading=\"lazy\">
\t\t\t\t\t<div class=\"ds-advantages-item-text d-flex flex-column align-items-start align-items-xl-center ms-2 ms-md-3 ms-xl-0\">
\t\t\t\t\t\t";
                    // line 11
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["oct_benefit"], "link", [], "any", false, true, false, 11), ($context["language_id"] ?? null), [], "array", true, true, false, 11) && (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, $context["oct_benefit"], "link", [], "any", false, false, false, 11)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[($context["language_id"] ?? null)] ?? null) : null))) {
                        // line 12
                        echo "\t\t\t\t\t\t\t<a href=\"";
                        echo (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, $context["oct_benefit"], "link", [], "any", false, false, false, 12)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[($context["language_id"] ?? null)] ?? null) : null);
                        echo "\" class=\"ds-advantages-item-title mt-xl-3 mb-1 fsz-14 fw-500 dark-text\">";
                        echo (($__internal_compile_4 = twig_get_attribute($this->env, $this->source, $context["oct_benefit"], "title", [], "any", false, false, false, 12)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[($context["language_id"] ?? null)] ?? null) : null);
                        echo "</a>
\t\t\t\t\t\t";
                    } else {
                        // line 14
                        echo "\t\t\t\t\t\t\t<span class=\"ds-advantages-item-title mt-xl-3 mb-1 fsz-14 fw-500 dark-text\">";
                        echo (($__internal_compile_5 = twig_get_attribute($this->env, $this->source, $context["oct_benefit"], "title", [], "any", false, false, false, 14)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[($context["language_id"] ?? null)] ?? null) : null);
                        echo "</span>
\t\t\t\t\t\t";
                    }
                    // line 16
                    echo "\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["oct_benefit"], "text", [], "any", false, true, false, 16), ($context["language_id"] ?? null), [], "array", true, true, false, 16) && (($__internal_compile_6 = twig_get_attribute($this->env, $this->source, $context["oct_benefit"], "text", [], "any", false, false, false, 16)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[($context["language_id"] ?? null)] ?? null) : null))) {
                        // line 17
                        echo "\t\t\t\t\t\t\t<span class=\"ds-advantages-item-text fsz-12 light-text\">";
                        echo (($__internal_compile_7 = twig_get_attribute($this->env, $this->source, $context["oct_benefit"], "text", [], "any", false, false, false, 17)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[($context["language_id"] ?? null)] ?? null) : null);
                        echo "</span>
\t\t\t\t\t\t";
                    }
                    // line 19
                    echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<style>
\t\t\t\t";
                    // line 23
                    if (twig_get_attribute($this->env, $this->source, $context["oct_benefit"], "color_title", [], "any", false, false, false, 23)) {
                        // line 24
                        echo "\t\t\t\t#block";
                        echo ($context["module"] ?? null);
                        echo "-";
                        echo ($context["key"] ?? null);
                        echo " .ds-advantages-item-title {color: ";
                        echo twig_get_attribute($this->env, $this->source, $context["oct_benefit"], "color_title", [], "any", false, false, false, 24);
                        echo ";}
\t\t\t\t";
                    }
                    // line 26
                    echo "
\t\t\t\t";
                    // line 27
                    if (twig_get_attribute($this->env, $this->source, $context["oct_benefit"], "color_text", [], "any", false, false, false, 27)) {
                        // line 28
                        echo "\t\t\t\t#block";
                        echo ($context["module"] ?? null);
                        echo "-";
                        echo ($context["key"] ?? null);
                        echo " .ds-advantages-item-text {color: ";
                        echo twig_get_attribute($this->env, $this->source, $context["oct_benefit"], "color_text", [], "any", false, false, false, 28);
                        echo ";}
\t\t\t\t";
                    }
                    // line 30
                    echo "\t\t\t</style>
\t\t";
                }
                // line 32
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_benefit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "</div>
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "oct_deals/template/octemplates/module/oct_benefits.twig";
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
        return array (  141 => 33,  135 => 32,  131 => 30,  121 => 28,  119 => 27,  116 => 26,  106 => 24,  104 => 23,  98 => 19,  92 => 17,  89 => 16,  83 => 14,  75 => 12,  73 => 11,  66 => 9,  60 => 8,  57 => 7,  54 => 6,  51 => 5,  46 => 4,  44 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oct_deals/template/octemplates/module/oct_benefits.twig", "");
    }
}
