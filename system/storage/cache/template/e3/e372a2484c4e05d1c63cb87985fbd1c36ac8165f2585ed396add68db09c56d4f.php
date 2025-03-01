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

/* oct_deals/template/product/manufacturer_list.twig */
class __TwigTemplate_a7135e6fa54d0313a238de89627665fcb160d6ef70af88daab0e601c038ab135 extends Template
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
        echo "
<div id=\"product-manufacturer\" class=\"container-fluid container-xl flex-grow-1\">
    <nav aria-label=\"breadcrumb\">
        <ul class=\"breadcrumb ds-breadcrumb fsz-12\">
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 6
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 6)) {
                // line 7
                echo "                <li class=\"breadcrumb-item ds-breadcrumb-item\">";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 7);
                echo "</li>
            ";
            } else {
                // line 9
                echo "                <li class=\"breadcrumb-item ds-breadcrumb-item\"><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 9);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 9);
                echo "</a></li>
            ";
            }
            // line 11
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "        </ul>
    </nav>
    ";
        // line 14
        if ((twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "micro", [], "any", true, true, false, 14) && twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "micro", [], "any", false, false, false, 14))) {
            // line 15
            echo "    <script type=\"application/ld+json\">
    {
        \"@context\": \"http://schema.org\",
        \"@type\": \"BreadcrumbList\",
        \"itemListElement\":
        [
            ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
                // line 22
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 22)) {
                    // line 23
                    echo "                ";
                } else {
                    // line 24
                    echo "                {
                    \"@type\": \"ListItem\",
                    \"position\": ";
                    // line 26
                    echo (twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 26) - 1);
                    echo ",
                    \"item\":
                    {
                        \"@id\": \"";
                    // line 29
                    echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 29);
                    echo "\",
                        \"name\": \"";
                    // line 30
                    echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 30);
                    echo "\"
                    }
                }";
                    // line 32
                    if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 32)) {
                        echo ",";
                    }
                    // line 33
                    echo "                ";
                }
                // line 34
                echo "            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "        ]
    }
    </script>
    ";
        }
        // line 39
        echo "    <main>
        <div class=\"row\">
            <div class=\"col-12 ds-page-title pb-3\">
                <h1>";
        // line 42
        echo ($context["heading_title"] ?? null);
        echo "</h1>
            </div>
        </div>
        <div class=\"content-top-box\">";
        // line 45
        echo ($context["content_top"] ?? null);
        echo "</div>
        <div class=\"row g-3\">
            ";
        // line 47
        echo ($context["column_left"] ?? null);
        echo "
            ";
        // line 48
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 49
            echo "                ";
            $context["class"] = "col-xl-6 is-cols";
            // line 50
            echo "            ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 51
            echo "                ";
            $context["class"] = "col-xl-9";
            // line 52
            echo "            ";
        } else {
            // line 53
            echo "                ";
            $context["class"] = "col-xl-12 no-col";
            // line 54
            echo "            ";
        }
        // line 55
        echo "            <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">
                ";
        // line 56
        if (($context["categories"] ?? null)) {
            // line 57
            echo "                    <div class=\"ds-manufacturer-links content-block mb-3 sticky-top ds-sticky-column\">
                        <span class=\"fw-500 dark-text\">";
            // line 58
            echo ($context["text_index"] ?? null);
            echo "</span>
                        ";
            // line 59
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 60
                echo "                            <span data-scroll=\"goTo-";
                echo twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 60), [" " => ""]);
                echo "\" class=\"blue-link\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 60);
                echo "</span>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "                        <script>
                            document.addEventListener('DOMContentLoaded', () => {
                                scrollToBrand();
                                stickyColumn();
                            });
                        </script>
                    </div>
                    ";
            // line 69
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 70
                echo "                        <div class=\"content-block ds-manufacturer-item mb-3 p-2 p-md-3\">
                            <div id=\"goTo-";
                // line 71
                echo twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 71), [" " => ""]);
                echo "\" class=\"ds-manufacturer-title fsz-20 fw-700 dark-text pb-2 pb-md-3\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 71);
                echo "</div>
                            ";
                // line 72
                if (twig_get_attribute($this->env, $this->source, $context["category"], "manufacturer", [], "any", false, false, false, 72)) {
                    // line 73
                    echo "                                <div class=\"row g-2 g-md-3 pt-2 pt-md-3\">
                                    ";
                    // line 74
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "manufacturer", [], "any", false, false, false, 74));
                    foreach ($context['_seq'] as $context["_key"] => $context["manufacturer"]) {
                        // line 75
                        echo "                                        <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "href", [], "any", false, false, false, 75);
                        echo "\" class=\"ds-manufacturer-item-block\">
                                            ";
                        // line 76
                        if ((twig_get_attribute($this->env, $this->source, $context["manufacturer"], "image", [], "any", true, true, false, 76) && twig_get_attribute($this->env, $this->source, $context["manufacturer"], "image", [], "any", false, false, false, 76))) {
                            // line 77
                            echo "                                                <span class=\"content-block d-flex flex-column align-items-center text-center h-100\">
                                                    <img src=\"";
                            // line 78
                            echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "image", [], "any", false, false, false, 78);
                            echo "\" class=\"img-fluid\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "name", [], "any", false, false, false, 78);
                            echo "\" width=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "width", [], "any", false, false, false, 78);
                            echo "\" height=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "height", [], "any", false, false, false, 78);
                            echo "\" loading=\"lazy\"/>
                                                    <span class=\"fw-700 fsz-14 dark-text ds-manufacturer-item-title\">";
                            // line 79
                            echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "name", [], "any", false, false, false, 79);
                            echo "</span>
                                                </span>
                                            ";
                        } else {
                            // line 82
                            echo "                                                <span class=\"content-block d-flex flex-column align-items-center text-center h-100\">
                                                    <span class=\"fw-700 fsz-14 dark-text ds-manufacturer-item-title\">";
                            // line 83
                            echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "name", [], "any", false, false, false, 83);
                            echo "</span>
                                                </span>
                                            ";
                        }
                        // line 86
                        echo "                                        </a>
                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['manufacturer'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 88
                    echo "                                </div>
                            ";
                }
                // line 90
                echo "                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "                ";
        } else {
            // line 93
            echo "                    <div class=\"content-block\">
                        <p class=\"fw-500 dark-text\">";
            // line 94
            echo ($context["text_empty"] ?? null);
            echo "</p>
                        <a href=\"";
            // line 95
            echo ($context["continue"] ?? null);
            echo "\" class=\"button button-primary mt-3 br-7 d-inline-flex\">";
            echo ($context["button_continue"] ?? null);
            echo "</a>
                    </div>
                ";
        }
        // line 98
        echo "            </div>
            ";
        // line 99
        echo ($context["column_right"] ?? null);
        echo "
        </div>
        ";
        // line 101
        echo ($context["content_bottom"] ?? null);
        echo "
    </main>
</div>
";
        // line 104
        echo ($context["footer"] ?? null);
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "oct_deals/template/product/manufacturer_list.twig";
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
        return array (  360 => 104,  354 => 101,  349 => 99,  346 => 98,  338 => 95,  334 => 94,  331 => 93,  328 => 92,  321 => 90,  317 => 88,  310 => 86,  304 => 83,  301 => 82,  295 => 79,  285 => 78,  282 => 77,  280 => 76,  275 => 75,  271 => 74,  268 => 73,  266 => 72,  260 => 71,  257 => 70,  253 => 69,  244 => 62,  233 => 60,  229 => 59,  225 => 58,  222 => 57,  220 => 56,  215 => 55,  212 => 54,  209 => 53,  206 => 52,  203 => 51,  200 => 50,  197 => 49,  195 => 48,  191 => 47,  186 => 45,  180 => 42,  175 => 39,  169 => 35,  155 => 34,  152 => 33,  148 => 32,  143 => 30,  139 => 29,  133 => 26,  129 => 24,  126 => 23,  123 => 22,  106 => 21,  98 => 15,  96 => 14,  92 => 12,  78 => 11,  70 => 9,  64 => 7,  61 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oct_deals/template/product/manufacturer_list.twig", "");
    }
}
