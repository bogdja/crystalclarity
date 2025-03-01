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

/* oct_deals/template/octemplates/module/oct_category_wall.twig */
class __TwigTemplate_e3208b38f116296d4ba585d8986c42da044ff3ee0a1c4aac28de2156fe1605e1 extends Template
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
        if ( !twig_test_empty(($context["categories"] ?? null))) {
            // line 2
            echo "<div class=\"py-3 fw-500 dark-text fsz-20\">";
            echo ($context["heading_title"] ?? null);
            echo "</div>
<div class=\"row g-2 g-md-3 ds-category-wall\">
\t";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 5
                echo "\t\t<div class=\"ds-category-wall-item\">
\t\t\t";
                // line 6
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 6)) {
                    // line 7
                    echo "\t\t\t\t<div class=\"content-block d-flex align-items-start\">
\t\t\t\t\t";
                    // line 8
                    if (twig_get_attribute($this->env, $this->source, $context["category"], "thumb", [], "any", false, false, false, 8)) {
                        // line 9
                        echo "\t\t\t\t\t\t<img src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "thumb", [], "any", false, false, false, 9);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 9);
                        echo "\" width=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "width", [], "any", false, false, false, 9);
                        echo "\" height=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "height", [], "any", false, false, false, 9);
                        echo "\" loading=\"lazy\" />
\t\t\t\t\t";
                    }
                    // line 11
                    echo "\t\t\t\t\t<div class=\"ds-category-wall-item-links ps-3\">
\t\t\t\t\t\t<a href=\"";
                    // line 12
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 12);
                    echo "\" class=\"ds-category-wall-title dark-text fw-500 d-inline-block fsz-14 mb-3\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 12);
                    echo "</a>
\t\t\t\t\t\t<div class=\"ds-category-wall-item-list\">
\t\t\t\t\t\t\t";
                    // line 14
                    $context["countstop"] = 1;
                    // line 15
                    echo "\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 15));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 16
                        echo "\t\t\t\t\t\t\t\t";
                        $context["countstop"] = (($context["countstop"] ?? null) + 1);
                        // line 17
                        echo "\t\t\t\t\t\t\t\t<a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 17);
                        echo "\" class=\"fsz-12 d-inline-block secondary-text py-1 px-2 br-4 fw-300\">";
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 17);
                        echo "</a>
\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 19
                    echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
                } else {
                    // line 23
                    echo "\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 23);
                    echo "\" class=\"content-block d-flex align-items-start\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 23);
                    echo "\">
\t\t\t\t\t";
                    // line 24
                    if (twig_get_attribute($this->env, $this->source, $context["category"], "thumb", [], "any", false, false, false, 24)) {
                        // line 25
                        echo "\t\t\t\t\t<img src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "thumb", [], "any", false, false, false, 25);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 25);
                        echo "\" width=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "width", [], "any", false, false, false, 25);
                        echo "\" height=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "height", [], "any", false, false, false, 25);
                        echo "\" />
\t\t\t\t\t";
                    }
                    // line 27
                    echo "\t\t\t\t\t<span class=\"ds-category-wall-title dark-text fw-500 d-inline-block fsz-14 ps-3 align-self-center\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 27);
                    echo "</span>
\t\t\t\t</a>
\t\t\t";
                }
                // line 30
                echo "\t\t</div>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "\t</div>
\t<div class=\"row d-sm-none\">
\t\t<div class=\"col\">
\t\t\t<button type=\"button\" class=\"button button-primary br-7 mt-3 w-100\" data-sidebar=\"catalog\">
\t\t\t\t<svg width=\"20\" height=\"20\" viewbox=\"0 0 20 20\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t<g>
\t\t\t\t\t\t<rect x=\"1.42857\" y=\"1.42859\" width=\"7.14286\" height=\"7.14286\" rx=\"2\" stroke=\"#FDFDFD\"></rect>
\t\t\t\t\t\t<rect x=\"11.4286\" y=\"11.1858\" width=\"7.14286\" height=\"7.14286\" rx=\"2\" stroke=\"#FDFDFD\"></rect>
\t\t\t\t\t\t<rect x=\"1.42857\" y=\"11.4286\" width=\"7.14286\" height=\"7.14286\" rx=\"2\" stroke=\"#FDFDFD\"></rect>
\t\t\t\t\t\t<rect x=\"11.4286\" y=\"1.30725\" width=\"7.14286\" height=\"7.14286\" rx=\"2\" stroke=\"#FDFDFD\"></rect>
\t\t\t\t\t</g>
\t\t\t\t</svg>
\t\t\t\t<span class=\"button-text\">";
            // line 44
            echo ($context["oct_menu_catalog"] ?? null);
            echo "</span>
\t\t\t</button>
\t\t</div>
\t</div>
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "oct_deals/template/octemplates/module/oct_category_wall.twig";
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
        return array (  157 => 44,  143 => 32,  136 => 30,  129 => 27,  117 => 25,  115 => 24,  108 => 23,  102 => 19,  91 => 17,  88 => 16,  83 => 15,  81 => 14,  74 => 12,  71 => 11,  59 => 9,  57 => 8,  54 => 7,  52 => 6,  49 => 5,  45 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oct_deals/template/octemplates/module/oct_category_wall.twig", "");
    }
}
