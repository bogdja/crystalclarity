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

/* oct_deals/template/extension/module/category.twig */
class __TwigTemplate_2fcb5246964b7ca5c9116ae8cf21dbde1cee46d34d1452b27337d58334ed2186 extends Template
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
        if ((($context["categories"] ?? null) &&  !($context["oct_detect"] ?? null))) {
            // line 2
            echo "<div class=\"ds-column-categories d-flex flex-column\">
\t<div class=\"ds-column-categories-title content-block fw-700 dark-text\">";
            // line 3
            echo ($context["text_module_category"] ?? null);
            echo "</div>
\t<ul class=\"list-unstyled ds-column-categories-list fw-500 fsz-14 p-0 d-flex flex-column\">
\t\t";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 6
                echo "\t\t\t<li class=\"ds-column-categories-item content-block";
                if ((twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 6) == ($context["category_id"] ?? null))) {
                    echo " clicked";
                }
                echo "\">
\t\t\t\t<span class=\"d-flex justify-content-between\">
\t\t\t\t\t<a href=\"";
                // line 8
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 8);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 8);
                echo "</a>
\t\t\t\t\t";
                // line 9
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 9)) {
                    // line 10
                    echo "\t\t\t\t\t<button class=\"ds-column-categories-toggle br-4 p-0 d-flex align-items-center justify-content-center\" aria-label=\"Expand\">
                        <svg width=\"6\" height=\"5\" viewBox=\"0 0 6 5\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                            <path d=\"M2.99938 4.08973C2.87814 4.08973 2.75688 4.04365 2.66468 3.95082L0.138767 1.42491C-0.0462558 1.23988 -0.0462558 0.93991 0.138767 0.754887C0.323791 0.569864 0.623765 0.569864 0.808788 0.754887L3 2.9461L5.19121 0.754887C5.37624 0.569864 5.67621 0.569864 5.86123 0.754887C6.04626 0.93991 6.04626 1.23988 5.86123 1.42491L3.33532 3.95082C3.24186 4.04365 3.12063 4.08973 2.99938 4.08973Z\" fill=\"#9CA3AF\" />
                        </svg>
                    </button>
\t\t\t\t\t";
                }
                // line 16
                echo "\t\t\t\t</span>
\t\t\t\t";
                // line 17
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 17)) {
                    // line 18
                    echo "\t\t\t\t<ul class=\"ds-column-categories-children ds-categories-2 list-unstyled ps-0";
                    if ((twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 18) == ($context["category_id"] ?? null))) {
                        echo " active";
                    }
                    echo "\">
\t\t\t\t";
                    // line 19
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 19));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 20
                        echo "\t\t\t\t\t<li class=\"ds-column-categories-item";
                        if ((twig_get_attribute($this->env, $this->source, $context["child"], "category_id", [], "any", false, false, false, 20) == ($context["child_id"] ?? null))) {
                            echo " clicked";
                        }
                        echo "\">
\t\t\t\t\t\t<span class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t<a href=\"";
                        // line 22
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 22);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 22);
                        echo "</a>
\t\t\t\t\t\t\t";
                        // line 23
                        if (twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 23)) {
                            // line 24
                            echo "\t\t\t\t\t\t\t\t<button type=\"button\" class=\"ds-column-categories-toggle br-4 p-0 d-flex align-items-center justify-content-center\" aria-label=\"Expand\">
\t\t\t\t\t\t\t\t\t<svg width=\"6\" height=\"5\" viewBox=\"0 0 6 5\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t<path d=\"M2.99938 4.08973C2.87814 4.08973 2.75688 4.04365 2.66468 3.95082L0.138767 1.42491C-0.0462558 1.23988 -0.0462558 0.93991 0.138767 0.754887C0.323791 0.569864 0.623765 0.569864 0.808788 0.754887L3 2.9461L5.19121 0.754887C5.37624 0.569864 5.67621 0.569864 5.86123 0.754887C6.04626 0.93991 6.04626 1.23988 5.86123 1.42491L3.33532 3.95082C3.24186 4.04365 3.12063 4.08973 2.99938 4.08973Z\" fill=\"#9CA3AF\" />
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t";
                        }
                        // line 30
                        echo "\t\t\t\t\t\t</span>
\t\t\t\t\t\t";
                        // line 31
                        if (twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 31)) {
                            // line 32
                            echo "\t\t\t\t\t\t<ul class=\"ds-column-categories-children ds-categories-3 list-unstyled ps-0";
                            if ((twig_get_attribute($this->env, $this->source, $context["child"], "category_id", [], "any", false, false, false, 32) == ($context["child_id"] ?? null))) {
                                echo " active";
                            }
                            echo "\">
\t\t\t\t        \t";
                            // line 33
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 33));
                            foreach ($context['_seq'] as $context["_key"] => $context["child_3"]) {
                                // line 34
                                echo "\t\t\t\t\t\t\t\t<li class=\"ds-column-categories-item";
                                if ((twig_get_attribute($this->env, $this->source, $context["child_3"], "category_id", [], "any", false, false, false, 34) == ($context["ch_id"] ?? null))) {
                                    echo " clicked";
                                }
                                echo "\">
\t\t\t\t\t\t\t\t\t<span class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                // line 36
                                echo twig_get_attribute($this->env, $this->source, $context["child_3"], "href", [], "any", false, false, false, 36);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["child_3"], "name", [], "any", false, false, false, 36);
                                echo "</a>
\t\t\t\t\t\t\t\t\t\t";
                                // line 37
                                if (twig_get_attribute($this->env, $this->source, $context["child_3"], "children", [], "any", false, false, false, 37)) {
                                    // line 38
                                    echo "\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"ds-column-categories-toggle br-4 p-0 d-flex align-items-center justify-content-center\" aria-label=\"Expand\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ds-btn-icon ds-btn-icon-chevron\"></span>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 42
                                echo "\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t";
                                // line 43
                                if (twig_get_attribute($this->env, $this->source, $context["child_3"], "children", [], "any", false, false, false, 43)) {
                                    // line 44
                                    echo "\t\t\t\t\t\t\t\t\t\t<ul class=\"ds-column-categories-children ds-categories-3 list-unstyled ps-0";
                                    if ((twig_get_attribute($this->env, $this->source, $context["child_3"], "category_id", [], "any", false, false, false, 44) == ($context["ch_id"] ?? null))) {
                                        echo " active";
                                    }
                                    echo "\">
\t\t\t\t\t\t\t\t\t\t";
                                    // line 45
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child_3"], "children", [], "any", false, false, false, 45));
                                    foreach ($context['_seq'] as $context["_key"] => $context["child_4"]) {
                                        // line 46
                                        echo "\t\t\t\t\t\t\t\t\t\t\t<li class=\"ds-column-categories-item";
                                        if ((twig_get_attribute($this->env, $this->source, $context["child_4"], "category_id", [], "any", false, false, false, 46) == ($context["child3_id"] ?? null))) {
                                            echo " active";
                                        }
                                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<span><a href=\"";
                                        // line 47
                                        echo twig_get_attribute($this->env, $this->source, $context["child_4"], "href", [], "any", false, false, false, 47);
                                        echo "\">";
                                        echo twig_get_attribute($this->env, $this->source, $context["child_4"], "name", [], "any", false, false, false, 47);
                                        echo "</a></span>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child_4'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 49
                                    echo "\t
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t";
                                }
                                // line 52
                                echo "\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child_3'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 54
                            echo "\t\t\t\t\t\t</ul>
\t\t\t\t        ";
                        }
                        // line 56
                        echo "\t\t\t        </li>
\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 58
                    echo "\t\t\t\t</ul>
\t\t\t\t";
                }
                // line 60
                echo "\t\t\t</li>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "\t</ul>
</div>
<script>
\twindow.addEventListener('DOMContentLoaded', () => {
\t\ttoggleColumnCategories();
\t});
</script>
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "oct_deals/template/extension/module/category.twig";
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
        return array (  221 => 62,  214 => 60,  210 => 58,  203 => 56,  199 => 54,  192 => 52,  187 => 49,  176 => 47,  169 => 46,  165 => 45,  158 => 44,  156 => 43,  153 => 42,  147 => 38,  145 => 37,  139 => 36,  131 => 34,  127 => 33,  120 => 32,  118 => 31,  115 => 30,  107 => 24,  105 => 23,  99 => 22,  91 => 20,  87 => 19,  80 => 18,  78 => 17,  75 => 16,  67 => 10,  65 => 9,  59 => 8,  51 => 6,  47 => 5,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oct_deals/template/extension/module/category.twig", "");
    }
}
