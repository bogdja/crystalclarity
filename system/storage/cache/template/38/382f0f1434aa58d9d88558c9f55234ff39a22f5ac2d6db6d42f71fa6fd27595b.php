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

/* oct_deals/template/octemplates/menu/oct_menu_horizontal.twig */
class __TwigTemplate_a394958864e72ff4367579dbbd9b2a03651ccdcd59fc048146e72d61d60ec1cf extends Template
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
        if (($context["oct_menu"] ?? null)) {
            // line 2
            echo "    <ul class=\"ds-menu-maincategories d-flex flex-column flex-xl-row\">
        ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["oct_menu"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["oct_category"]) {
                // line 4
                echo "            <li class=\"ds-menu-maincategories-item d-flex align-items-center py-2 px-3 px-xl-2\">
                ";
                // line 5
                if (twig_get_attribute($this->env, $this->source, $context["oct_category"], "oct_image", [], "any", false, false, false, 5)) {
                    // line 6
                    echo "                    <span class=\"d-inline-flex align-items-center\">
                        <img class=\"ds-menu-catalog-item-img\" src=\"";
                    // line 7
                    echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "oct_image", [], "any", false, false, false, 7);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "name", [], "any", false, false, false, 7);
                    echo "\" width=\"20\" height=\"20\" loading=\"lazy\">
                        ";
                    // line 8
                    if (twig_get_attribute($this->env, $this->source, $context["oct_category"], "href", [], "any", false, false, false, 8)) {
                        // line 9
                        echo "                            <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "href", [], "any", false, false, false, 9);
                        echo "\" ";
                        echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "target", [], "any", false, false, false, 9);
                        echo " class=\"ds-menu-maincategories-item-title fsz-14 dark-text fw-500 ms-2\">";
                        echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "name", [], "any", false, false, false, 9);
                        echo "</a>
                        ";
                    } else {
                        // line 11
                        echo "                            <span class=\"ds-menu-maincategories-item-title fsz-14 dark-text fw-500 ms-2\">";
                        echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "name", [], "any", false, false, false, 11);
                        echo "</span>
                        ";
                    }
                    // line 13
                    echo "                    </span>
                ";
                } else {
                    // line 15
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, $context["oct_category"], "href", [], "any", false, false, false, 15)) {
                        // line 16
                        echo "                        <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "href", [], "any", false, false, false, 16);
                        echo "\" ";
                        echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "target", [], "any", false, false, false, 16);
                        echo " class=\"ds-menu-maincategories-item-title fsz-14 dark-text fw-500\">";
                        echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "name", [], "any", false, false, false, 16);
                        echo "</a>
                    ";
                    } else {
                        // line 18
                        echo "                        <span class=\"ds-menu-maincategories-item-title fsz-14 dark-text fw-500 ms-2\">";
                        echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "name", [], "any", false, false, false, 18);
                        echo "</span>
                    ";
                    }
                    // line 20
                    echo "                ";
                }
                // line 21
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["oct_category"], "children", [], "any", false, false, false, 21) || twig_get_attribute($this->env, $this->source, $context["oct_category"], "oct_pages", [], "any", false, false, false, 21))) {
                    // line 22
                    echo "                    <svg class=\"ms-2\" width=\"6\" height=\"11\" viewBox=\"0 0 6 11\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path d=\"M1.24923 10.1022C1.05723 10.1022 0.865201 10.0292 0.719201 9.88223C0.426201 9.58923 0.426201 9.11419 0.719201 8.82119L4.18917 5.35122L0.719201 1.88125C0.426201 1.58825 0.426201 1.11321 0.719201 0.820214C1.0122 0.527214 1.48724 0.527214 1.78024 0.820214L5.78024 4.82021C6.07324 5.11321 6.07324 5.58825 5.78024 5.88125L1.78024 9.88125C1.63324 10.0292 1.44123 10.1022 1.24923 10.1022Z\"
                            fill=\"#003459\"></path>
                    </svg>
                ";
                }
                // line 27
                echo "                ";
                if (((twig_get_attribute($this->env, $this->source, $context["oct_category"], "children", [], "any", false, false, false, 27) || twig_get_attribute($this->env, $this->source, $context["oct_category"], "oct_pages", [], "any", false, false, false, 27)) && (twig_get_attribute($this->env, $this->source, $context["oct_category"], "type", [], "any", false, false, false, 27) == "standard"))) {
                    // line 28
                    echo "                    <div class=\"ds-menu-catalog";
                    if ((twig_get_attribute($this->env, $this->source, $context["oct_category"], "view", [], "any", false, false, false, 28) == "2")) {
                        echo " ds-menu-catalog-wide";
                    }
                    echo "\">
                        ";
                    // line 29
                    if ((twig_get_attribute($this->env, $this->source, $context["oct_category"], "view", [], "any", false, false, false, 29) == "1")) {
                        // line 30
                        echo "                            <div class=\"ds-menu-catalog-inner\">
                                <ul class=\"ds-menu-catalog-items\">
                                    ";
                        // line 32
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_category"], "children", [], "any", false, false, false, 32));
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 33
                            echo "                                        <li class=\"ds-menu-catalog-item d-flex align-items-center justify-content-between fsz-14 dark-text\">
                                            <a href=\"";
                            // line 34
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 34);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 34);
                            echo "</a>
                                            ";
                            // line 35
                            if ((twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 35) || twig_get_attribute($this->env, $this->source, $context["child"], "oct_pages", [], "any", false, false, false, 35))) {
                                // line 36
                                echo "                                                <svg width=\"6\" height=\"11\" viewBox=\"0 0 6 11\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                                    <path d=\"M1.24923 10.1022C1.05723 10.1022 0.865201 10.0292 0.719201 9.88223C0.426201 9.58923 0.426201 9.11419 0.719201 8.82119L4.18917 5.35122L0.719201 1.88125C0.426201 1.58825 0.426201 1.11321 0.719201 0.820214C1.0122 0.527214 1.48724 0.527214 1.78024 0.820214L5.78024 4.82021C6.07324 5.11321 6.07324 5.58825 5.78024 5.88125L1.78024 9.88125C1.63324 10.0292 1.44123 10.1022 1.24923 10.1022Z\"
                                                        fill=\"#003459\"></path>
                                                </svg>
                                                <div class=\"ds-menu-catalog\">
                                                    <div class=\"ds-menu-catalog-inner\">
                                                        <ul class=\"ds-menu-catalog-items\">
                                                            ";
                                // line 43
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 43));
                                foreach ($context['_seq'] as $context["_key"] => $context["ch"]) {
                                    // line 44
                                    echo "                                                                <li class=\"ds-menu-catalog-item d-flex align-items-center justify-content-between fsz-14 dark-text\">
                                                                    <a href=\"";
                                    // line 45
                                    echo twig_get_attribute($this->env, $this->source, $context["ch"], "href", [], "any", false, false, false, 45);
                                    echo "\">";
                                    echo twig_get_attribute($this->env, $this->source, $context["ch"], "name", [], "any", false, false, false, 45);
                                    echo "</a>
                                                                    ";
                                    // line 46
                                    if ((twig_get_attribute($this->env, $this->source, $context["ch"], "children", [], "any", false, false, false, 46) || twig_get_attribute($this->env, $this->source, $context["ch"], "oct_pages", [], "any", false, false, false, 46))) {
                                        // line 47
                                        echo "                                                                        <svg width=\"6\" height=\"11\" viewBox=\"0 0 6 11\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                                                            <path d=\"M1.24923 10.1022C1.05723 10.1022 0.865201 10.0292 0.719201 9.88223C0.426201 9.58923 0.426201 9.11419 0.719201 8.82119L4.18917 5.35122L0.719201 1.88125C0.426201 1.58825 0.426201 1.11321 0.719201 0.820214C1.0122 0.527214 1.48724 0.527214 1.78024 0.820214L5.78024 4.82021C6.07324 5.11321 6.07324 5.58825 5.78024 5.88125L1.78024 9.88125C1.63324 10.0292 1.44123 10.1022 1.24923 10.1022Z\"
                                                                                fill=\"#003459\"></path>
                                                                        </svg>
                                                                        <div class=\"ds-menu-catalog\">
                                                                            <div class=\"ds-menu-catalog-inner\">
                                                                                <ul class=\"ds-menu-catalog-items\">
                                                                                    ";
                                        // line 54
                                        $context['_parent'] = $context;
                                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["ch"], "children", [], "any", false, false, false, 54));
                                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                                            // line 55
                                            echo "                                                                                        <li class=\"ds-menu-catalog-item d-flex align-items-center justify-content-between fsz-14 dark-text\">
                                                                                            <a href=\"";
                                            // line 56
                                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 56);
                                            echo "\">
                                                                                                ";
                                            // line 57
                                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 57);
                                            echo "
                                                                                            </a>
                                                                                        </li>
                                                                                    ";
                                        }
                                        $_parent = $context['_parent'];
                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                        // line 61
                                        echo "                                                                                    ";
                                        if (twig_get_attribute($this->env, $this->source, $context["ch"], "oct_pages", [], "any", false, false, false, 61)) {
                                            // line 62
                                            echo "                                                                                        <li class=\"ds-menu-list-landings\">
                                                                                            <ul>
                                                                                                ";
                                            // line 64
                                            $context['_parent'] = $context;
                                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["ch"], "oct_pages", [], "any", false, false, false, 64));
                                            foreach ($context['_seq'] as $context["_key"] => $context["oct_page"]) {
                                                // line 65
                                                echo "                                                                                                    ";
                                                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 65))) {
                                                    // line 66
                                                    echo "                                                                                                    <li class=\"d-flex flex-column \">
                                                                                                        <span class=\"ds-megamenu-children-title fw-700 mb-2\">";
                                                    // line 67
                                                    echo (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_group", [], "any", false, false, false, 67)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[($context["language_id"] ?? null)] ?? null) : null);
                                                    echo "</span>
                                                                                                        ";
                                                    // line 68
                                                    $context['_parent'] = $context;
                                                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 68));
                                                    foreach ($context['_seq'] as $context["_key"] => $context["page_link"]) {
                                                        // line 69
                                                        echo "                                                                                                        <a href=\"";
                                                        echo twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = $context["page_link"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[($context["language_id"] ?? null)] ?? null) : null), "link", [], "any", false, false, false, 69);
                                                        echo "\" title=\"";
                                                        echo twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = $context["page_link"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 69);
                                                        echo "\" class=\"ds-menu-list-landings-link fsz-14\">";
                                                        echo twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = $context["page_link"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 69);
                                                        echo "</a>
                                                                                                        ";
                                                    }
                                                    $_parent = $context['_parent'];
                                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page_link'], $context['_parent'], $context['loop']);
                                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                                    // line 71
                                                    echo "                                                                                                    </li>
                                                                                                    ";
                                                }
                                                // line 73
                                                echo "                                                                                                ";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_page'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 74
                                            echo "                                                                                            </ul>
                                                                                        </li>
                                                                                    ";
                                        }
                                        // line 77
                                        echo "                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    ";
                                    }
                                    // line 81
                                    echo "                                                                </li>
                                                            ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ch'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 83
                                echo "                                                            ";
                                if (twig_get_attribute($this->env, $this->source, $context["child"], "oct_pages", [], "any", false, false, false, 83)) {
                                    // line 84
                                    echo "                                                                <li class=\"ds-menu-list-landings\">
                                                                    <ul>
                                                                        ";
                                    // line 86
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "oct_pages", [], "any", false, false, false, 86));
                                    foreach ($context['_seq'] as $context["_key"] => $context["oct_page"]) {
                                        // line 87
                                        echo "                                                                            ";
                                        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 87))) {
                                            // line 88
                                            echo "                                                                            <li class=\"d-flex flex-column\">
                                                                                <span class=\"ds-megamenu-children-title fw-700 mb-2\">";
                                            // line 89
                                            echo (($__internal_compile_4 = twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_group", [], "any", false, false, false, 89)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[($context["language_id"] ?? null)] ?? null) : null);
                                            echo "</span>
                                                                                ";
                                            // line 90
                                            $context['_parent'] = $context;
                                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 90));
                                            foreach ($context['_seq'] as $context["_key"] => $context["page_link"]) {
                                                // line 91
                                                echo "                                                                                <a href=\"";
                                                echo twig_get_attribute($this->env, $this->source, (($__internal_compile_5 = $context["page_link"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[($context["language_id"] ?? null)] ?? null) : null), "link", [], "any", false, false, false, 91);
                                                echo "\" title=\"";
                                                echo twig_get_attribute($this->env, $this->source, (($__internal_compile_6 = $context["page_link"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 91);
                                                echo "\" class=\"ds-menu-list-landings-link fsz-14\">";
                                                echo twig_get_attribute($this->env, $this->source, (($__internal_compile_7 = $context["page_link"]) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 91);
                                                echo "</a>
                                                                                ";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page_link'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 93
                                            echo "                                                                            </li>
                                                                            ";
                                        }
                                        // line 95
                                        echo "                                                                        ";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_page'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 96
                                    echo "                                                                    </ul>
                                                                </li>
                                                            ";
                                }
                                // line 99
                                echo "                                                        </ul>
                                                    </div>
                                            </div>
                                            ";
                            }
                            // line 103
                            echo "                                        </li>
                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 105
                        echo "                                    ";
                        if (twig_get_attribute($this->env, $this->source, $context["oct_category"], "oct_pages", [], "any", false, false, false, 105)) {
                            // line 106
                            echo "                                        <li class=\"ds-menu-list-landings\">
                                            <ul>
                                                ";
                            // line 108
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_category"], "oct_pages", [], "any", false, false, false, 108));
                            foreach ($context['_seq'] as $context["_key"] => $context["oct_page"]) {
                                // line 109
                                echo "                                                    ";
                                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 109))) {
                                    // line 110
                                    echo "                                                    <li class=\"d-flex flex-column\">
                                                        <span class=\"ds-megamenu-children-title fw-700 mb-2\">";
                                    // line 111
                                    echo (($__internal_compile_8 = twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_group", [], "any", false, false, false, 111)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[($context["language_id"] ?? null)] ?? null) : null);
                                    echo "</span>
                                                        ";
                                    // line 112
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 112));
                                    foreach ($context['_seq'] as $context["_key"] => $context["page_link"]) {
                                        // line 113
                                        echo "                                                        <a href=\"";
                                        echo twig_get_attribute($this->env, $this->source, (($__internal_compile_9 = $context["page_link"]) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[($context["language_id"] ?? null)] ?? null) : null), "link", [], "any", false, false, false, 113);
                                        echo "\" title=\"";
                                        echo twig_get_attribute($this->env, $this->source, (($__internal_compile_10 = $context["page_link"]) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 113);
                                        echo "\" class=\"ds-menu-list-landings-link fsz-14\">";
                                        echo twig_get_attribute($this->env, $this->source, (($__internal_compile_11 = $context["page_link"]) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 113);
                                        echo "</a>
                                                        ";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page_link'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 115
                                    echo "                                                    </li>
                                                    ";
                                }
                                // line 117
                                echo "                                                ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_page'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 118
                            echo "                                            </ul>
                                        </li>
                                    ";
                        }
                        // line 121
                        echo "                                </ul>
                            </div>
                        ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 123
$context["oct_category"], "view", [], "any", false, false, false, 123) == "2")) {
                        // line 124
                        echo "                            <div class=\"ds-megamenu-child-wrapper\">
                                <div class=\"ds-megamenu-child-title fw-700 fsz-20 dark-text mb-4\">";
                        // line 125
                        echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "name", [], "any", false, false, false, 125);
                        echo "</div>
                                <div class=\"d-flex\">
                                    <div class=\"ds-megamenu-children flex-grow-1 flex-column flex-xl-row\">
                                        ";
                        // line 128
                        if (twig_get_attribute($this->env, $this->source, $context["oct_category"], "oct_pages", [], "any", false, false, false, 128)) {
                            // line 129
                            echo "                                            <div class=\"ds-megamenu-children-item\">
                                                ";
                            // line 130
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_category"], "oct_pages", [], "any", false, false, false, 130));
                            foreach ($context['_seq'] as $context["_key"] => $context["oct_page"]) {
                                // line 131
                                echo "                                                    ";
                                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 131))) {
                                    // line 132
                                    echo "                                                        <span class=\"ds-megamenu-children-title fw-700\">";
                                    echo (($__internal_compile_12 = twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_group", [], "any", false, false, false, 132)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[($context["language_id"] ?? null)] ?? null) : null);
                                    echo "</span>
                                                        <ul class=\"list-unstyled fsz-14\">
                                                            ";
                                    // line 134
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 134));
                                    foreach ($context['_seq'] as $context["_key"] => $context["page_link"]) {
                                        // line 135
                                        echo "                                                            <li>
                                                                <a href=\"";
                                        // line 136
                                        echo twig_get_attribute($this->env, $this->source, (($__internal_compile_13 = $context["page_link"]) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[($context["language_id"] ?? null)] ?? null) : null), "link", [], "any", false, false, false, 136);
                                        echo "\" title=\"";
                                        echo twig_get_attribute($this->env, $this->source, (($__internal_compile_14 = $context["page_link"]) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 136);
                                        echo "\">";
                                        echo twig_get_attribute($this->env, $this->source, (($__internal_compile_15 = $context["page_link"]) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 136);
                                        echo "</a>
                                                            </li>
                                                            ";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page_link'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 139
                                    echo "                                                        </ul>
                                                    ";
                                }
                                // line 141
                                echo "                                                ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_page'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 142
                            echo "                                            </div>
                                        ";
                        }
                        // line 144
                        echo "                                        ";
                        if (twig_get_attribute($this->env, $this->source, $context["oct_category"], "children", [], "any", false, false, false, 144)) {
                            // line 145
                            echo "                                            ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_category"], "children", [], "any", false, false, false, 145));
                            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                                // line 146
                                echo "                                                <div class=\"ds-megamenu-children-item\">
                                                    <a href=\"";
                                // line 147
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 147);
                                echo "\" title=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 147);
                                echo "\" class=\"ds-megamenu-children-title fw-700\">";
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 147);
                                echo "</a>
                                                    ";
                                // line 148
                                if (twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 148)) {
                                    // line 149
                                    echo "                                                        <ul class=\"list-unstyled fsz-14\">
                                                            ";
                                    // line 150
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 150));
                                    foreach ($context['_seq'] as $context["_key"] => $context["ch"]) {
                                        // line 151
                                        echo "                                                            <li>
                                                                <a href=\"";
                                        // line 152
                                        echo twig_get_attribute($this->env, $this->source, $context["ch"], "href", [], "any", false, false, false, 152);
                                        echo "\" title=\"";
                                        echo twig_get_attribute($this->env, $this->source, $context["ch"], "name", [], "any", false, false, false, 152);
                                        echo "\">";
                                        echo twig_get_attribute($this->env, $this->source, $context["ch"], "name", [], "any", false, false, false, 152);
                                        echo "</a>
                                                            </li>
                                                            ";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ch'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 155
                                    echo "                                                        </ul>
                                                    ";
                                }
                                // line 157
                                echo "                                                </div>
                                            ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 159
                            echo "                                        ";
                        }
                        // line 160
                        echo "                                    </div>
                                </div>
                            </div>
                        ";
                    }
                    // line 164
                    echo "                    </div>
                ";
                }
                // line 166
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["oct_category"], "children", [], "any", false, false, false, 166) && (twig_get_attribute($this->env, $this->source, $context["oct_category"], "type", [], "any", false, false, false, 166) == "category"))) {
                    // line 167
                    echo "                    <div class=\"ds-menu-maincategories-dropdown position-absolute";
                    if ((twig_get_attribute($this->env, $this->source, $context["oct_category"], "view", [], "any", false, false, false, 167) == "1")) {
                        echo " ds-menu-maincategories-dropdown-narrow";
                    }
                    echo "\">
                        <div class=\"ds-sidebar-header d-flex align-items-center justify-content-between py-2 px-3 d-xl-none\">
                            <div class=\"ds-sidebar-header-back fw-700 dark-text fsz-16 d-flex align-items-center\" data-sidebar=\"catalogback\">
                                <svg class=\"me-2\" width=\"18\" height=\"10\" viewBox=\"0 0 18 10\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                    <path d=\"M17.4979 4.9994C17.4979 5.4134 17.1619 5.7494 16.7479 5.7494H2.55895L5.27892 8.46937C5.57192 8.76237 5.57192 9.2374 5.27892 9.5304C5.13292 9.6764 4.94089 9.75037 4.74889 9.75037C4.55689 9.75037 4.36487 9.6774 4.21887 9.5304L0.218865 5.5304C0.149865 5.4614 0.095 5.37851 0.057 5.28651C-0.019 5.10351 -0.019 4.89651 0.057 4.71351C0.095 4.62151 0.149865 4.53837 0.218865 4.46937L4.21887 0.469369C4.51187 0.176369 4.9869 0.176369 5.2799 0.469369C5.5729 0.762369 5.5729 1.2374 5.2799 1.5304L2.55993 4.25037H16.7479C17.1619 4.24937 17.4979 4.5854 17.4979 4.9994Z\"
                                        fill=\"#00171F\" />
                                </svg>
                                ";
                    // line 174
                    echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "name", [], "any", false, false, false, 174);
                    echo "
                            </div>
                            <button type=\"button\" class=\"button button-light br-10 ds-sidebar-close\" data-sidebar=\"catalogclose\" aria-label=\"Close\">
                                <svg class=\"me-0\" width=\"12\" height=\"12\" viewBox=\"0 0 12 12\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                    <path d=\"M11.8029 10.8616C12.0633 11.122 12.0633 11.5442 11.8029 11.8046C11.6731 11.9344 11.5025 12.0001 11.3319 12.0001C11.1612 12.0001 10.9906 11.9352 10.8608 11.8046L5.99911 6.94288L1.13743 11.8046C1.00766 11.9344 0.837017 12.0001 0.666369 12.0001C0.495722 12.0001 0.325075 11.9352 0.195312 11.8046C-0.0651039 11.5442 -0.0651039 11.122 0.195312 10.8616L5.057 5.9999L0.195312 1.13824C-0.0651039 0.877827 -0.0651039 0.45562 0.195312 0.195205C0.455727 -0.0652107 0.877907 -0.0652107 1.13832 0.195205L6.00001 5.05692L10.8617 0.195205C11.1221 -0.0652107 11.5443 -0.0652107 11.8047 0.195205C12.0651 0.45562 12.0651 0.877827 11.8047 1.13824L6.943 5.9999L11.8029 10.8616Z\"
                                        fill=\"#00A8E8\" />
                                </svg>
                            </button>
                        </div>
                        <!-- 1 = menu list, 2 = menu grid -->
                        ";
                    // line 184
                    if ((twig_get_attribute($this->env, $this->source, $context["oct_category"], "view", [], "any", false, false, false, 184) == "1")) {
                        // line 185
                        echo "                            <div class=\"ds-menu-catalog-inner\">
                                <ul class=\"ds-menu-catalog-items\">
                                    ";
                        // line 187
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_category"], "children", [], "any", false, false, false, 187));
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 188
                            echo "                                        <li class=\"ds-menu-catalog-item d-flex align-items-center justify-content-between fsz-14 dark-text\">
                                            <a href=\"";
                            // line 189
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 189);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 189);
                            echo "</a>
                                            ";
                            // line 190
                            if ((twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 190) || twig_get_attribute($this->env, $this->source, $context["child"], "oct_pages", [], "any", false, false, false, 190))) {
                                // line 191
                                echo "                                                <svg width=\"6\" height=\"11\" viewBox=\"0 0 6 11\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                                    <path d=\"M1.24923 10.1022C1.05723 10.1022 0.865201 10.0292 0.719201 9.88223C0.426201 9.58923 0.426201 9.11419 0.719201 8.82119L4.18917 5.35122L0.719201 1.88125C0.426201 1.58825 0.426201 1.11321 0.719201 0.820214C1.0122 0.527214 1.48724 0.527214 1.78024 0.820214L5.78024 4.82021C6.07324 5.11321 6.07324 5.58825 5.78024 5.88125L1.78024 9.88125C1.63324 10.0292 1.44123 10.1022 1.24923 10.1022Z\"
                                                        fill=\"#003459\"></path>
                                                </svg>
                                                <div class=\"ds-menu-catalog\">
                                                    <div class=\"ds-sidebar-header d-flex align-items-center justify-content-between py-2 px-3 d-xl-none\">
                                                        <div class=\"ds-sidebar-header-back fw-700 dark-text fsz-16 d-flex align-items-center\" data-sidebar=\"catalogback\">
                                                            <svg class=\"me-2\" width=\"18\" height=\"10\" viewBox=\"0 0 18 10\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                                                <path d=\"M17.4979 4.9994C17.4979 5.4134 17.1619 5.7494 16.7479 5.7494H2.55895L5.27892 8.46937C5.57192 8.76237 5.57192 9.2374 5.27892 9.5304C5.13292 9.6764 4.94089 9.75037 4.74889 9.75037C4.55689 9.75037 4.36487 9.6774 4.21887 9.5304L0.218865 5.5304C0.149865 5.4614 0.095 5.37851 0.057 5.28651C-0.019 5.10351 -0.019 4.89651 0.057 4.71351C0.095 4.62151 0.149865 4.53837 0.218865 4.46937L4.21887 0.469369C4.51187 0.176369 4.9869 0.176369 5.2799 0.469369C5.5729 0.762369 5.5729 1.2374 5.2799 1.5304L2.55993 4.25037H16.7479C17.1619 4.24937 17.4979 4.5854 17.4979 4.9994Z\"
                                                                    fill=\"#00171F\" />
                                                            </svg>
                                                            ";
                                // line 202
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 202);
                                echo "
                                                        </div>
                                                        <button type=\"button\" class=\"button button-light br-10 ds-sidebar-close\" data-sidebar=\"catalogclose\" aria-label=\"Close\">
                                                            <svg class=\"me-0\" width=\"12\" height=\"12\" viewBox=\"0 0 12 12\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                                                <path d=\"M11.8029 10.8616C12.0633 11.122 12.0633 11.5442 11.8029 11.8046C11.6731 11.9344 11.5025 12.0001 11.3319 12.0001C11.1612 12.0001 10.9906 11.9352 10.8608 11.8046L5.99911 6.94288L1.13743 11.8046C1.00766 11.9344 0.837017 12.0001 0.666369 12.0001C0.495722 12.0001 0.325075 11.9352 0.195312 11.8046C-0.0651039 11.5442 -0.0651039 11.122 0.195312 10.8616L5.057 5.9999L0.195312 1.13824C-0.0651039 0.877827 -0.0651039 0.45562 0.195312 0.195205C0.455727 -0.0652107 0.877907 -0.0652107 1.13832 0.195205L6.00001 5.05692L10.8617 0.195205C11.1221 -0.0652107 11.5443 -0.0652107 11.8047 0.195205C12.0651 0.45562 12.0651 0.877827 11.8047 1.13824L6.943 5.9999L11.8029 10.8616Z\"
                                                                    fill=\"#00A8E8\" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <div class=\"ds-menu-catalog-inner\">
                                                        <ul class=\"ds-menu-catalog-items\">
                                                            ";
                                // line 213
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 213));
                                foreach ($context['_seq'] as $context["_key"] => $context["ch"]) {
                                    // line 214
                                    echo "                                                                <li class=\"ds-menu-catalog-item d-flex align-items-center justify-content-between fsz-14 dark-text\">
                                                                    <a href=\"";
                                    // line 215
                                    echo twig_get_attribute($this->env, $this->source, $context["ch"], "href", [], "any", false, false, false, 215);
                                    echo "\">";
                                    echo twig_get_attribute($this->env, $this->source, $context["ch"], "name", [], "any", false, false, false, 215);
                                    echo "</a>
                                                                    ";
                                    // line 216
                                    if ((twig_get_attribute($this->env, $this->source, $context["ch"], "children", [], "any", false, false, false, 216) || twig_get_attribute($this->env, $this->source, $context["ch"], "oct_pages", [], "any", false, false, false, 216))) {
                                        // line 217
                                        echo "                                                                        <svg width=\"6\" height=\"11\" viewBox=\"0 0 6 11\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                                                            <path d=\"M1.24923 10.1022C1.05723 10.1022 0.865201 10.0292 0.719201 9.88223C0.426201 9.58923 0.426201 9.11419 0.719201 8.82119L4.18917 5.35122L0.719201 1.88125C0.426201 1.58825 0.426201 1.11321 0.719201 0.820214C1.0122 0.527214 1.48724 0.527214 1.78024 0.820214L5.78024 4.82021C6.07324 5.11321 6.07324 5.58825 5.78024 5.88125L1.78024 9.88125C1.63324 10.0292 1.44123 10.1022 1.24923 10.1022Z\"
                                                                                fill=\"#003459\"></path>
                                                                        </svg>
                                                                        <div class=\"ds-menu-catalog\">
                                                                            <div class=\"ds-sidebar-header d-flex align-items-center justify-content-between py-2 px-3 d-xl-none\">
                                                                                <div class=\"ds-sidebar-header-back fw-700 dark-text fsz-16 d-flex align-items-center\"
                                                                                    data-sidebar=\"catalogback\">
                                                                                    <svg class=\"me-2\" width=\"18\" height=\"10\" viewBox=\"0 0 18 10\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                                                                        <path d=\"M17.4979 4.9994C17.4979 5.4134 17.1619 5.7494 16.7479 5.7494H2.55895L5.27892 8.46937C5.57192 8.76237 5.57192 9.2374 5.27892 9.5304C5.13292 9.6764 4.94089 9.75037 4.74889 9.75037C4.55689 9.75037 4.36487 9.6774 4.21887 9.5304L0.218865 5.5304C0.149865 5.4614 0.095 5.37851 0.057 5.28651C-0.019 5.10351 -0.019 4.89651 0.057 4.71351C0.095 4.62151 0.149865 4.53837 0.218865 4.46937L4.21887 0.469369C4.51187 0.176369 4.9869 0.176369 5.2799 0.469369C5.5729 0.762369 5.5729 1.2374 5.2799 1.5304L2.55993 4.25037H16.7479C17.1619 4.24937 17.4979 4.5854 17.4979 4.9994Z\"
                                                                                            fill=\"#00171F\" />
                                                                                    </svg>
                                                                                    ";
                                        // line 229
                                        echo twig_get_attribute($this->env, $this->source, $context["ch"], "name", [], "any", false, false, false, 229);
                                        echo "
                                                                                </div>
                                                                                <button type=\"button\" class=\"button button-light br-10 ds-sidebar-close\" data-sidebar=\"catalogclose\" aria-label=\"Close\">
                                                                                    <svg class=\"me-0\" width=\"12\" height=\"12\" viewBox=\"0 0 12 12\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                                                                        <path d=\"M11.8029 10.8616C12.0633 11.122 12.0633 11.5442 11.8029 11.8046C11.6731 11.9344 11.5025 12.0001 11.3319 12.0001C11.1612 12.0001 10.9906 11.9352 10.8608 11.8046L5.99911 6.94288L1.13743 11.8046C1.00766 11.9344 0.837017 12.0001 0.666369 12.0001C0.495722 12.0001 0.325075 11.9352 0.195312 11.8046C-0.0651039 11.5442 -0.0651039 11.122 0.195312 10.8616L5.057 5.9999L0.195312 1.13824C-0.0651039 0.877827 -0.0651039 0.45562 0.195312 0.195205C0.455727 -0.0652107 0.877907 -0.0652107 1.13832 0.195205L6.00001 5.05692L10.8617 0.195205C11.1221 -0.0652107 11.5443 -0.0652107 11.8047 0.195205C12.0651 0.45562 12.0651 0.877827 11.8047 1.13824L6.943 5.9999L11.8029 10.8616Z\"
                                                                                            fill=\"#00A8E8\" />
                                                                                    </svg>
                                                                                </button>
                                                                            </div>
                                                                            <div class=\"ds-menu-catalog-inner\">
                                                                                <ul class=\"ds-menu-catalog-items\">
                                                                                    ";
                                        // line 240
                                        $context['_parent'] = $context;
                                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["ch"], "children", [], "any", false, false, false, 240));
                                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                                            // line 241
                                            echo "                                                                                        <li class=\"ds-menu-catalog-item d-flex align-items-center justify-content-between fsz-14 dark-text\">
                                                                                            <a href=\"";
                                            // line 242
                                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 242);
                                            echo "\" class=\"flex-grow-1\">";
                                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 242);
                                            echo "</a>
                                                                                        </li>
                                                                                    ";
                                        }
                                        $_parent = $context['_parent'];
                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                        // line 245
                                        echo "                                                                                    ";
                                        if (twig_get_attribute($this->env, $this->source, $context["ch"], "oct_pages", [], "any", false, false, false, 245)) {
                                            // line 246
                                            echo "                                                                                        <li class=\"ds-menu-list-landings\">
                                                                                            <ul>
                                                                                                ";
                                            // line 248
                                            $context['_parent'] = $context;
                                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["ch"], "oct_pages", [], "any", false, false, false, 248));
                                            foreach ($context['_seq'] as $context["_key"] => $context["oct_page"]) {
                                                // line 249
                                                echo "                                                                                                    ";
                                                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 249))) {
                                                    // line 250
                                                    echo "                                                                                                    <li class=\"d-flex flex-column \">
                                                                                                        <span class=\"ds-megamenu-children-title fw-700 mb-2\">";
                                                    // line 251
                                                    echo (($__internal_compile_16 = twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_group", [], "any", false, false, false, 251)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[($context["language_id"] ?? null)] ?? null) : null);
                                                    echo "</span>
                                                                                                        ";
                                                    // line 252
                                                    $context['_parent'] = $context;
                                                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 252));
                                                    foreach ($context['_seq'] as $context["_key"] => $context["page_link"]) {
                                                        // line 253
                                                        echo "                                                                                                        <a href=\"";
                                                        echo twig_get_attribute($this->env, $this->source, (($__internal_compile_17 = $context["page_link"]) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17[($context["language_id"] ?? null)] ?? null) : null), "link", [], "any", false, false, false, 253);
                                                        echo "\" title=\"";
                                                        echo twig_get_attribute($this->env, $this->source, (($__internal_compile_18 = $context["page_link"]) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 253);
                                                        echo "\" class=\"ds-menu-list-landings-link fsz-14\">";
                                                        echo twig_get_attribute($this->env, $this->source, (($__internal_compile_19 = $context["page_link"]) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 253);
                                                        echo "</a>
                                                                                                        ";
                                                    }
                                                    $_parent = $context['_parent'];
                                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page_link'], $context['_parent'], $context['loop']);
                                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                                    // line 255
                                                    echo "                                                                                                    </li>
                                                                                                    ";
                                                }
                                                // line 257
                                                echo "                                                                                                ";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_page'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 258
                                            echo "                                                                                            </ul>
                                                                                        </li>
                                                                                    ";
                                        }
                                        // line 261
                                        echo "                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    ";
                                    }
                                    // line 265
                                    echo "                                                                </li>
                                                            ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ch'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 267
                                echo "                                                            ";
                                if (twig_get_attribute($this->env, $this->source, $context["child"], "oct_pages", [], "any", false, false, false, 267)) {
                                    // line 268
                                    echo "                                                                <li class=\"ds-menu-list-landings\">
                                                                    <ul>
                                                                        ";
                                    // line 270
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "oct_pages", [], "any", false, false, false, 270));
                                    foreach ($context['_seq'] as $context["_key"] => $context["oct_page"]) {
                                        // line 271
                                        echo "                                                                            ";
                                        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 271))) {
                                            // line 272
                                            echo "                                                                            <li class=\"d-flex flex-column\">
                                                                                <span class=\"ds-megamenu-children-title fw-700 mb-2\">";
                                            // line 273
                                            echo (($__internal_compile_20 = twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_group", [], "any", false, false, false, 273)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20[($context["language_id"] ?? null)] ?? null) : null);
                                            echo "</span>
                                                                                ";
                                            // line 274
                                            $context['_parent'] = $context;
                                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 274));
                                            foreach ($context['_seq'] as $context["_key"] => $context["page_link"]) {
                                                // line 275
                                                echo "                                                                                <a href=\"";
                                                echo twig_get_attribute($this->env, $this->source, (($__internal_compile_21 = $context["page_link"]) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21[($context["language_id"] ?? null)] ?? null) : null), "link", [], "any", false, false, false, 275);
                                                echo "\" title=\"";
                                                echo twig_get_attribute($this->env, $this->source, (($__internal_compile_22 = $context["page_link"]) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 275);
                                                echo "\" class=\"ds-menu-list-landings-link fsz-14\">";
                                                echo twig_get_attribute($this->env, $this->source, (($__internal_compile_23 = $context["page_link"]) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 275);
                                                echo "</a>
                                                                                ";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page_link'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 277
                                            echo "                                                                            </li>
                                                                            ";
                                        }
                                        // line 279
                                        echo "                                                                        ";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_page'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 280
                                    echo "                                                                    </ul>
                                                                </li>
                                                            ";
                                }
                                // line 283
                                echo "                                                        </ul>
                                                    </div>
                                                </div>
                                            ";
                            }
                            // line 287
                            echo "                                        </li>
                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 289
                        echo "                                    ";
                        if (twig_get_attribute($this->env, $this->source, $context["oct_category"], "oct_pages", [], "any", false, false, false, 289)) {
                            // line 290
                            echo "                                        <li class=\"ds-menu-list-landings\">
                                            <ul>
                                                ";
                            // line 292
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_category"], "oct_pages", [], "any", false, false, false, 292));
                            foreach ($context['_seq'] as $context["_key"] => $context["oct_page"]) {
                                // line 293
                                echo "                                                    ";
                                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 293))) {
                                    // line 294
                                    echo "                                                    <li class=\"d-flex flex-column\">
                                                        <span class=\"ds-megamenu-children-title fw-700 mb-2\">";
                                    // line 295
                                    echo (($__internal_compile_24 = twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_group", [], "any", false, false, false, 295)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24[($context["language_id"] ?? null)] ?? null) : null);
                                    echo "</span>
                                                        ";
                                    // line 296
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 296));
                                    foreach ($context['_seq'] as $context["_key"] => $context["page_link"]) {
                                        // line 297
                                        echo "                                                        <a href=\"";
                                        echo twig_get_attribute($this->env, $this->source, (($__internal_compile_25 = $context["page_link"]) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25[($context["language_id"] ?? null)] ?? null) : null), "link", [], "any", false, false, false, 297);
                                        echo "\" title=\"";
                                        echo twig_get_attribute($this->env, $this->source, (($__internal_compile_26 = $context["page_link"]) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 297);
                                        echo "\" class=\"ds-menu-list-landings-link fsz-14\">";
                                        echo twig_get_attribute($this->env, $this->source, (($__internal_compile_27 = $context["page_link"]) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 297);
                                        echo "</a>
                                                        ";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page_link'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 299
                                    echo "                                                    </li>
                                                    ";
                                }
                                // line 301
                                echo "                                                ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_page'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 302
                            echo "                                            </ul>
                                        </li>
                                    ";
                        }
                        // line 305
                        echo "                                </ul>
                            </div>
                        ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 307
$context["oct_category"], "view", [], "any", false, false, false, 307) == "2")) {
                        // line 308
                        echo "                            <div class=\"ds-megamenu-child-wrapper\">
                                <div class=\"d-flex flex-column flex-xl-row p-3\">
                                    ";
                        // line 310
                        if (twig_get_attribute($this->env, $this->source, $context["oct_category"], "oct_pages", [], "any", false, false, false, 310)) {
                            // line 311
                            echo "                                        <div class=\"col-xl-3 p-3 p-xl-0\">
                                            ";
                            // line 312
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_category"], "oct_pages", [], "any", false, false, false, 312));
                            foreach ($context['_seq'] as $context["_key"] => $context["oct_pages"]) {
                                // line 313
                                echo "                                                ";
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable($context["oct_pages"]);
                                foreach ($context['_seq'] as $context["_key"] => $context["oct_page"]) {
                                    // line 314
                                    echo "                                                    <ul class=\"ds-menu-list-landings dark-text mb-4 pe-xl-3\">
                                                        <li class=\"d-flex flex-column\">
                                                            ";
                                    // line 316
                                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 316))) {
                                        // line 317
                                        echo "                                                                <span class=\"ds-megamenu-children-title fw-700\">";
                                        echo (($__internal_compile_28 = twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_group", [], "any", false, false, false, 317)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28[($context["language_id"] ?? null)] ?? null) : null);
                                        echo "</span>
                                                                ";
                                        // line 318
                                        $context['_parent'] = $context;
                                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 318));
                                        foreach ($context['_seq'] as $context["_key"] => $context["page_link"]) {
                                            // line 319
                                            echo "                                                                    <a class=\"ds-menu-list-landings-link fsz-14\" href=\"";
                                            echo twig_get_attribute($this->env, $this->source, (($__internal_compile_29 = $context["page_link"]) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29[($context["language_id"] ?? null)] ?? null) : null), "link", [], "any", false, false, false, 319);
                                            echo "\" title=\"";
                                            echo twig_get_attribute($this->env, $this->source, (($__internal_compile_30 = $context["page_link"]) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 319);
                                            echo "\">";
                                            echo twig_get_attribute($this->env, $this->source, (($__internal_compile_31 = $context["page_link"]) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 319);
                                            echo "</a>
                                                                ";
                                        }
                                        $_parent = $context['_parent'];
                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page_link'], $context['_parent'], $context['loop']);
                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                        // line 321
                                        echo "                                                            ";
                                    }
                                    // line 322
                                    echo "                                                        </li>
                                                    </ul>
                                                ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_page'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 325
                                echo "                                            ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_pages'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 326
                            echo "                                        </div>
                                    ";
                        }
                        // line 328
                        echo "                                    <div class=\"ds-megamenu-children flex-grow-1 d-flex flex-wrap dark-text px-3 px-xl-0\">
                                        ";
                        // line 329
                        if (twig_get_attribute($this->env, $this->source, $context["oct_category"], "children", [], "any", false, false, false, 329)) {
                            // line 330
                            echo "                                            ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_category"], "children", [], "any", false, false, false, 330));
                            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                                // line 331
                                echo "                                                <div class=\"ds-megamenu-children-item\">
                                                    ";
                                // line 332
                                if (twig_get_attribute($this->env, $this->source, $context["child"], "oct_image", [], "any", false, false, false, 332)) {
                                    // line 333
                                    echo "                                                        <a href=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 333);
                                    echo "\" title=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 333);
                                    echo "\" class=\"ds-megamenu-children-title fw-600 mb-2 d-flex align-items-center mb-3\">
                                                            ";
                                    // line 334
                                    if (twig_get_attribute($this->env, $this->source, $context["child"], "oct_image", [], "any", false, false, false, 334)) {
                                        // line 335
                                        echo "                                                                <img class=\"me-3\" src=\"";
                                        echo twig_get_attribute($this->env, $this->source, $context["child"], "oct_image", [], "any", false, false, false, 335);
                                        echo "\" alt=\"";
                                        echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "name", [], "any", false, false, false, 335);
                                        echo "\" width=\"";
                                        echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "subcat_image_width", [], "any", false, false, false, 335);
                                        echo "\" height=\"";
                                        echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "subcat_image_height", [], "any", false, false, false, 335);
                                        echo "\" loading=\"lazy\" />
                                                            ";
                                    }
                                    // line 337
                                    echo "                                                            <span class=\"fsz-14\">";
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 337);
                                    echo "</span>
                                                        </a>
                                                    ";
                                } else {
                                    // line 340
                                    echo "                                                        <a href=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 340);
                                    echo "\" title=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 340);
                                    echo "\" class=\"ds-megamenu-children-title fw-600 mb-3 d-block\">";
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 340);
                                    echo "</a>
                                                    ";
                                }
                                // line 342
                                echo "                                                    ";
                                if (twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 342)) {
                                    // line 343
                                    echo "                                                        <ul class=\"list-unstyled fsz-14\">
                                                            ";
                                    // line 344
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 344));
                                    foreach ($context['_seq'] as $context["_key"] => $context["ch"]) {
                                        // line 345
                                        echo "                                                                <li class=\"my-1\">
                                                                    <a href=\"";
                                        // line 346
                                        echo twig_get_attribute($this->env, $this->source, $context["ch"], "href", [], "any", false, false, false, 346);
                                        echo "\" title=\"";
                                        echo twig_get_attribute($this->env, $this->source, $context["ch"], "name", [], "any", false, false, false, 346);
                                        echo "\">";
                                        echo twig_get_attribute($this->env, $this->source, $context["ch"], "name", [], "any", false, false, false, 346);
                                        echo "</a>
                                                                </li>
                                                            ";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ch'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 349
                                    echo "                                                        </ul>
                                                    ";
                                }
                                // line 351
                                echo "                                                </div>
                                            ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 353
                            echo "                                        ";
                        }
                        // line 354
                        echo "                                    </div>
                                </div>
                            </div>
                        ";
                    }
                    // line 358
                    echo "                    </div>
                ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 359
$context["oct_category"], "children", [], "any", false, false, false, 359) && (twig_get_attribute($this->env, $this->source, $context["oct_category"], "type", [], "any", false, false, false, 359) == "oct_blogcategory"))) {
                    // line 360
                    echo "                    <div class=\"ds-menu-maincategories-dropdown position-absolute ds-menu-maincategories-dropdown-narrow ds-menu-maincategories-dropdown-blog\">
                        <div class=\"ds-sidebar-header d-flex align-items-center justify-content-between py-2 px-3 d-xl-none\">
                            <div class=\"ds-sidebar-header-back fw-700 dark-text fsz-16 d-flex align-items-center\" data-sidebar=\"catalogback\">
                                <svg class=\"me-2\" width=\"18\" height=\"10\" viewBox=\"0 0 18 10\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                    <path d=\"M17.4979 4.9994C17.4979 5.4134 17.1619 5.7494 16.7479 5.7494H2.55895L5.27892 8.46937C5.57192 8.76237 5.57192 9.2374 5.27892 9.5304C5.13292 9.6764 4.94089 9.75037 4.74889 9.75037C4.55689 9.75037 4.36487 9.6774 4.21887 9.5304L0.218865 5.5304C0.149865 5.4614 0.095 5.37851 0.057 5.28651C-0.019 5.10351 -0.019 4.89651 0.057 4.71351C0.095 4.62151 0.149865 4.53837 0.218865 4.46937L4.21887 0.469369C4.51187 0.176369 4.9869 0.176369 5.2799 0.469369C5.5729 0.762369 5.5729 1.2374 5.2799 1.5304L2.55993 4.25037H16.7479C17.1619 4.24937 17.4979 4.5854 17.4979 4.9994Z\"
                                        fill=\"#00171F\" />
                                </svg>
                                ";
                    // line 367
                    echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "name", [], "any", false, false, false, 367);
                    echo "
                            </div>
                            <button type=\"button\" class=\"button button-light br-10 ds-sidebar-close\" data-sidebar=\"catalogclose\" aria-label=\"Close\">
                                <svg class=\"me-0\" width=\"12\" height=\"12\" viewBox=\"0 0 12 12\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                    <path d=\"M11.8029 10.8616C12.0633 11.122 12.0633 11.5442 11.8029 11.8046C11.6731 11.9344 11.5025 12.0001 11.3319 12.0001C11.1612 12.0001 10.9906 11.9352 10.8608 11.8046L5.99911 6.94288L1.13743 11.8046C1.00766 11.9344 0.837017 12.0001 0.666369 12.0001C0.495722 12.0001 0.325075 11.9352 0.195312 11.8046C-0.0651039 11.5442 -0.0651039 11.122 0.195312 10.8616L5.057 5.9999L0.195312 1.13824C-0.0651039 0.877827 -0.0651039 0.45562 0.195312 0.195205C0.455727 -0.0652107 0.877907 -0.0652107 1.13832 0.195205L6.00001 5.05692L10.8617 0.195205C11.1221 -0.0652107 11.5443 -0.0652107 11.8047 0.195205C12.0651 0.45562 12.0651 0.877827 11.8047 1.13824L6.943 5.9999L11.8029 10.8616Z\"
                                        fill=\"#00A8E8\" />
                                </svg>
                            </button>
                        </div>
                        <div class=\"ds-menu-catalog-inner\">
                            <ul class=\"ds-menu-catalog-items\">
                                ";
                    // line 378
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_category"], "children", [], "any", false, false, false, 378));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 379
                        echo "                                    <li class=\"ds-menu-catalog-item d-flex align-items-center justify-content-between fsz-14 dark-text\">
                                        <a href=\"";
                        // line 380
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 380);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 380);
                        echo "</a>
                                        ";
                        // line 381
                        if (twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 381)) {
                            // line 382
                            echo "                                             <svg width=\"6\" height=\"11\" viewBox=\"0 0 6 11\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                                    <path d=\"M1.24923 10.1022C1.05723 10.1022 0.865201 10.0292 0.719201 9.88223C0.426201 9.58923 0.426201 9.11419 0.719201 8.82119L4.18917 5.35122L0.719201 1.88125C0.426201 1.58825 0.426201 1.11321 0.719201 0.820214C1.0122 0.527214 1.48724 0.527214 1.78024 0.820214L5.78024 4.82021C6.07324 5.11321 6.07324 5.58825 5.78024 5.88125L1.78024 9.88125C1.63324 10.0292 1.44123 10.1022 1.24923 10.1022Z\"
                                                        fill=\"#003459\"></path>
                                                </svg>
                                            <div class=\"ds-menu-catalog\">
                                                <div class=\"ds-sidebar-header d-flex align-items-center justify-content-between py-2 px-3 d-xl-none\">
                                                    <div class=\"ds-sidebar-header-back fw-700 dark-text fsz-16 d-flex align-items-center\" data-sidebar=\"catalogback\">
                                                        <svg class=\"me-2\" width=\"18\" height=\"10\" viewBox=\"0 0 18 10\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                                            <path d=\"M17.4979 4.9994C17.4979 5.4134 17.1619 5.7494 16.7479 5.7494H2.55895L5.27892 8.46937C5.57192 8.76237 5.57192 9.2374 5.27892 9.5304C5.13292 9.6764 4.94089 9.75037 4.74889 9.75037C4.55689 9.75037 4.36487 9.6774 4.21887 9.5304L0.218865 5.5304C0.149865 5.4614 0.095 5.37851 0.057 5.28651C-0.019 5.10351 -0.019 4.89651 0.057 4.71351C0.095 4.62151 0.149865 4.53837 0.218865 4.46937L4.21887 0.469369C4.51187 0.176369 4.9869 0.176369 5.2799 0.469369C5.5729 0.762369 5.5729 1.2374 5.2799 1.5304L2.55993 4.25037H16.7479C17.1619 4.24937 17.4979 4.5854 17.4979 4.9994Z\"
                                                                fill=\"#00171F\" />
                                                        </svg>
                                                        ";
                            // line 393
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 393);
                            echo "
                                                    </div>
                                                    <button type=\"button\" class=\"button button-light br-10 ds-sidebar-close\" data-sidebar=\"catalogclose\" aria-label=\"Close\">
                                                        <svg class=\"me-0\" width=\"12\" height=\"12\" viewBox=\"0 0 12 12\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                                            <path d=\"M11.8029 10.8616C12.0633 11.122 12.0633 11.5442 11.8029 11.8046C11.6731 11.9344 11.5025 12.0001 11.3319 12.0001C11.1612 12.0001 10.9906 11.9352 10.8608 11.8046L5.99911 6.94288L1.13743 11.8046C1.00766 11.9344 0.837017 12.0001 0.666369 12.0001C0.495722 12.0001 0.325075 11.9352 0.195312 11.8046C-0.0651039 11.5442 -0.0651039 11.122 0.195312 10.8616L5.057 5.9999L0.195312 1.13824C-0.0651039 0.877827 -0.0651039 0.45562 0.195312 0.195205C0.455727 -0.0652107 0.877907 -0.0652107 1.13832 0.195205L6.00001 5.05692L10.8617 0.195205C11.1221 -0.0652107 11.5443 -0.0652107 11.8047 0.195205C12.0651 0.45562 12.0651 0.877827 11.8047 1.13824L6.943 5.9999L11.8029 10.8616Z\"
                                                                fill=\"#00A8E8\" />
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class=\"ds-menu-catalog-inner\">
                                                    <ul class=\"ds-menu-catalog-items\">
                                                        ";
                            // line 404
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 404));
                            foreach ($context['_seq'] as $context["_key"] => $context["ch"]) {
                                // line 405
                                echo "                                                            <li class=\"ds-menu-catalog-item d-flex align-items-center justify-content-between fsz-14 dark-text\">
                                                                <a class=\"flex-grow-1\" href=\"";
                                // line 406
                                echo twig_get_attribute($this->env, $this->source, $context["ch"], "href", [], "any", false, false, false, 406);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["ch"], "name", [], "any", false, false, false, 406);
                                echo "</a>
                                                                ";
                                // line 407
                                if (twig_get_attribute($this->env, $this->source, $context["ch"], "children", [], "any", false, false, false, 407)) {
                                    // line 408
                                    echo "                                                                    <svg width=\"6\" height=\"11\" viewBox=\"0 0 6 11\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                                                        <path d=\"M1.24923 10.1022C1.05723 10.1022 0.865201 10.0292 0.719201 9.88223C0.426201 9.58923 0.426201 9.11419 0.719201 8.82119L4.18917 5.35122L0.719201 1.88125C0.426201 1.58825 0.426201 1.11321 0.719201 0.820214C1.0122 0.527214 1.48724 0.527214 1.78024 0.820214L5.78024 4.82021C6.07324 5.11321 6.07324 5.58825 5.78024 5.88125L1.78024 9.88125C1.63324 10.0292 1.44123 10.1022 1.24923 10.1022Z\"
                                                                            fill=\"#003459\"></path>
                                                                    </svg>
                                                                    <div class=\"ds-menu-catalog\">
                                                                        <div class=\"ds-sidebar-header d-flex align-items-center justify-content-between py-2 px-3 d-xl-none\">
                                                                            <div class=\"ds-sidebar-header-back fw-700 dark-text fsz-16 d-flex align-items-center\"
                                                                                data-sidebar=\"catalogback\">
                                                                                <svg class=\"me-2\" width=\"18\" height=\"10\" viewBox=\"0 0 18 10\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                                                                    <path d=\"M17.4979 4.9994C17.4979 5.4134 17.1619 5.7494 16.7479 5.7494H2.55895L5.27892 8.46937C5.57192 8.76237 5.57192 9.2374 5.27892 9.5304C5.13292 9.6764 4.94089 9.75037 4.74889 9.75037C4.55689 9.75037 4.36487 9.6774 4.21887 9.5304L0.218865 5.5304C0.149865 5.4614 0.095 5.37851 0.057 5.28651C-0.019 5.10351 -0.019 4.89651 0.057 4.71351C0.095 4.62151 0.149865 4.53837 0.218865 4.46937L4.21887 0.469369C4.51187 0.176369 4.9869 0.176369 5.2799 0.469369C5.5729 0.762369 5.5729 1.2374 5.2799 1.5304L2.55993 4.25037H16.7479C17.1619 4.24937 17.4979 4.5854 17.4979 4.9994Z\"
                                                                                        fill=\"#00171F\" />
                                                                                </svg>
                                                                                ";
                                    // line 420
                                    echo twig_get_attribute($this->env, $this->source, $context["ch"], "name", [], "any", false, false, false, 420);
                                    echo "
                                                                            </div>
                                                                            <button type=\"button\" class=\"button button-light br-10 ds-sidebar-close\" data-sidebar=\"catalogclose\" aria-label=\"Close\">
                                                                                <svg class=\"me-0\" width=\"12\" height=\"12\" viewBox=\"0 0 12 12\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                                                                    <path d=\"M11.8029 10.8616C12.0633 11.122 12.0633 11.5442 11.8029 11.8046C11.6731 11.9344 11.5025 12.0001 11.3319 12.0001C11.1612 12.0001 10.9906 11.9352 10.8608 11.8046L5.99911 6.94288L1.13743 11.8046C1.00766 11.9344 0.837017 12.0001 0.666369 12.0001C0.495722 12.0001 0.325075 11.9352 0.195312 11.8046C-0.0651039 11.5442 -0.0651039 11.122 0.195312 10.8616L5.057 5.9999L0.195312 1.13824C-0.0651039 0.877827 -0.0651039 0.45562 0.195312 0.195205C0.455727 -0.0652107 0.877907 -0.0652107 1.13832 0.195205L6.00001 5.05692L10.8617 0.195205C11.1221 -0.0652107 11.5443 -0.0652107 11.8047 0.195205C12.0651 0.45562 12.0651 0.877827 11.8047 1.13824L6.943 5.9999L11.8029 10.8616Z\"
                                                                                        fill=\"#00A8E8\" />
                                                                                </svg>
                                                                            </button>
                                                                        </div>
                                                                        <div class=\"ds-menu-catalog-inner\">
                                                                            <ul class=\"ds-menu-catalog-items\">
                                                                                ";
                                    // line 431
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["ch"], "children", [], "any", false, false, false, 431));
                                    foreach ($context['_seq'] as $context["_key"] => $context["ch2"]) {
                                        // line 432
                                        echo "                                                                                    <li class=\"ds-menu-catalog-item d-flex align-items-center justify-content-between fsz-14 dark-text\">
                                                                                        <a class=\"flex-grow-1\" href=\"";
                                        // line 433
                                        echo twig_get_attribute($this->env, $this->source, $context["ch2"], "href", [], "any", false, false, false, 433);
                                        echo "\">";
                                        echo twig_get_attribute($this->env, $this->source, $context["ch2"], "name", [], "any", false, false, false, 433);
                                        echo "</a>
                                                                                    </li>
                                                                                ";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ch2'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 436
                                    echo "                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                ";
                                }
                                // line 440
                                echo "                                                            </li>
                                                        ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ch'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 442
                            echo "                                                    </ul>
                                                </div>
                                            </div>
                                        ";
                        }
                        // line 446
                        echo "                                    </li>
                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 448
                    echo "                            </ul>
                        </div>
                    </div>
                ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 451
$context["oct_category"], "children", [], "any", false, false, false, 451) && (twig_get_attribute($this->env, $this->source, $context["oct_category"], "type", [], "any", false, false, false, 451) == "manufacturer"))) {
                    // line 452
                    echo "                    <div class=\"ds-menu-maincategories-dropdown position-absolute";
                    if ( !twig_get_attribute($this->env, $this->source, $context["oct_category"], "show_image", [], "any", false, false, false, 452)) {
                        echo " ds-menu-maincategories-dropdown-narrow";
                    }
                    echo "\">
                        <div class=\"ds-sidebar-header d-flex align-items-center justify-content-between py-2 px-3 d-xl-none\">
                            <div class=\"ds-sidebar-header-back fw-700 dark-text fsz-16 d-flex align-items-center\" data-sidebar=\"catalogback\">
                                <svg class=\"me-2\" width=\"18\" height=\"10\" viewBox=\"0 0 18 10\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                    <path d=\"M17.4979 4.9994C17.4979 5.4134 17.1619 5.7494 16.7479 5.7494H2.55895L5.27892 8.46937C5.57192 8.76237 5.57192 9.2374 5.27892 9.5304C5.13292 9.6764 4.94089 9.75037 4.74889 9.75037C4.55689 9.75037 4.36487 9.6774 4.21887 9.5304L0.218865 5.5304C0.149865 5.4614 0.095 5.37851 0.057 5.28651C-0.019 5.10351 -0.019 4.89651 0.057 4.71351C0.095 4.62151 0.149865 4.53837 0.218865 4.46937L4.21887 0.469369C4.51187 0.176369 4.9869 0.176369 5.2799 0.469369C5.5729 0.762369 5.5729 1.2374 5.2799 1.5304L2.55993 4.25037H16.7479C17.1619 4.24937 17.4979 4.5854 17.4979 4.9994Z\"
                                        fill=\"#00171F\" />
                                </svg>
                                ";
                    // line 459
                    echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "name", [], "any", false, false, false, 459);
                    echo "
                            </div>
                            <button type=\"button\" class=\"button button-light br-10 ds-sidebar-close\" data-sidebar=\"catalogclose\" aria-label=\"Close\">
                                <svg class=\"me-0\" width=\"12\" height=\"12\" viewBox=\"0 0 12 12\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                    <path d=\"M11.8029 10.8616C12.0633 11.122 12.0633 11.5442 11.8029 11.8046C11.6731 11.9344 11.5025 12.0001 11.3319 12.0001C11.1612 12.0001 10.9906 11.9352 10.8608 11.8046L5.99911 6.94288L1.13743 11.8046C1.00766 11.9344 0.837017 12.0001 0.666369 12.0001C0.495722 12.0001 0.325075 11.9352 0.195312 11.8046C-0.0651039 11.5442 -0.0651039 11.122 0.195312 10.8616L5.057 5.9999L0.195312 1.13824C-0.0651039 0.877827 -0.0651039 0.45562 0.195312 0.195205C0.455727 -0.0652107 0.877907 -0.0652107 1.13832 0.195205L6.00001 5.05692L10.8617 0.195205C11.1221 -0.0652107 11.5443 -0.0652107 11.8047 0.195205C12.0651 0.45562 12.0651 0.877827 11.8047 1.13824L6.943 5.9999L11.8029 10.8616Z\"
                                        fill=\"#00A8E8\" />
                                </svg>
                            </button>
                        </div>
                        <div class=\"";
                    // line 468
                    if (twig_get_attribute($this->env, $this->source, $context["oct_category"], "show_image", [], "any", false, false, false, 468)) {
                        echo "ds-megamenu-child-wrapper";
                    } else {
                        echo "ds-menu-catalog-inner";
                    }
                    echo "\">
                            ";
                    // line 469
                    if (twig_get_attribute($this->env, $this->source, $context["oct_category"], "show_image", [], "any", false, false, false, 469)) {
                        // line 470
                        echo "                                <div class=\"ds-megamenu-children ds-megamenu-children-manufacturers flex-grow-1 d-flex flex-wrap flex-column flex-xl-row dark-text p-xl-3\">
                                    ";
                        // line 471
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_category"], "children", [], "any", false, false, false, 471));
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 472
                            echo "                                        <div class=\"ds-megamenu-children-item text-xl-center p-3\">
                                            <a href=\"";
                            // line 473
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 473);
                            echo "\" title=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 473);
                            echo "\" class=\"ds-megamenu-children-title fw-700 d-flex flex-xl-column align-items-center px-3 py-2 p-xl-0\">
                                                ";
                            // line 474
                            if (twig_get_attribute($this->env, $this->source, $context["child"], "oct_image", [], "any", false, false, false, 474)) {
                                // line 475
                                echo "                                                    <img class=\"my-xl-2 me-3 mx-xl-auto\" src=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "oct_image", [], "any", false, false, false, 475);
                                echo "\" alt=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "name", [], "any", false, false, false, 475);
                                echo "\" width=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "subcat_image_width", [], "any", false, false, false, 475);
                                echo "\" height=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "subcat_image_height", [], "any", false, false, false, 475);
                                echo "\" loading=\"lazy\" />
                                                ";
                            }
                            // line 477
                            echo "                                                <span class=\"flex-grow-1\">";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 477);
                            echo "</span>
                                            </a>
                                        </div>
                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 481
                        echo "                                </div>
                            ";
                    } else {
                        // line 483
                        echo "                                <ul class=\"ds-menu-catalog-items\">
                                    ";
                        // line 484
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_category"], "children", [], "any", false, false, false, 484));
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 485
                            echo "                                        <li class=\"ds-menu-catalog-item d-flex align-items-center justify-content-between fsz-14 dark-text\">
                                            <a class=\"flex-grow-1\" href=\"";
                            // line 486
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 486);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 486);
                            echo "</a>
                                        </li>
                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 489
                        echo "                                </ul>
                            ";
                    }
                    // line 491
                    echo "                        </div>
                    </div>
                ";
                }
                // line 494
                echo "            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 496
            echo "    </ul>
    <script>
        window.addEventListener('DOMContentLoaded', function() {
            requestAnimationFrame(function() {
                horizontalMenu();
            });
        });
    </script>
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "oct_deals/template/octemplates/menu/oct_menu_horizontal.twig";
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
        return array (  1295 => 496,  1288 => 494,  1283 => 491,  1279 => 489,  1268 => 486,  1265 => 485,  1261 => 484,  1258 => 483,  1254 => 481,  1243 => 477,  1231 => 475,  1229 => 474,  1223 => 473,  1220 => 472,  1216 => 471,  1213 => 470,  1211 => 469,  1203 => 468,  1191 => 459,  1178 => 452,  1176 => 451,  1171 => 448,  1164 => 446,  1158 => 442,  1151 => 440,  1145 => 436,  1134 => 433,  1131 => 432,  1127 => 431,  1113 => 420,  1099 => 408,  1097 => 407,  1091 => 406,  1088 => 405,  1084 => 404,  1070 => 393,  1057 => 382,  1055 => 381,  1049 => 380,  1046 => 379,  1042 => 378,  1028 => 367,  1019 => 360,  1017 => 359,  1014 => 358,  1008 => 354,  1005 => 353,  998 => 351,  994 => 349,  981 => 346,  978 => 345,  974 => 344,  971 => 343,  968 => 342,  958 => 340,  951 => 337,  939 => 335,  937 => 334,  930 => 333,  928 => 332,  925 => 331,  920 => 330,  918 => 329,  915 => 328,  911 => 326,  905 => 325,  897 => 322,  894 => 321,  881 => 319,  877 => 318,  872 => 317,  870 => 316,  866 => 314,  861 => 313,  857 => 312,  854 => 311,  852 => 310,  848 => 308,  846 => 307,  842 => 305,  837 => 302,  831 => 301,  827 => 299,  814 => 297,  810 => 296,  806 => 295,  803 => 294,  800 => 293,  796 => 292,  792 => 290,  789 => 289,  782 => 287,  776 => 283,  771 => 280,  765 => 279,  761 => 277,  748 => 275,  744 => 274,  740 => 273,  737 => 272,  734 => 271,  730 => 270,  726 => 268,  723 => 267,  716 => 265,  710 => 261,  705 => 258,  699 => 257,  695 => 255,  682 => 253,  678 => 252,  674 => 251,  671 => 250,  668 => 249,  664 => 248,  660 => 246,  657 => 245,  646 => 242,  643 => 241,  639 => 240,  625 => 229,  611 => 217,  609 => 216,  603 => 215,  600 => 214,  596 => 213,  582 => 202,  569 => 191,  567 => 190,  561 => 189,  558 => 188,  554 => 187,  550 => 185,  548 => 184,  535 => 174,  522 => 167,  519 => 166,  515 => 164,  509 => 160,  506 => 159,  499 => 157,  495 => 155,  482 => 152,  479 => 151,  475 => 150,  472 => 149,  470 => 148,  462 => 147,  459 => 146,  454 => 145,  451 => 144,  447 => 142,  441 => 141,  437 => 139,  424 => 136,  421 => 135,  417 => 134,  411 => 132,  408 => 131,  404 => 130,  401 => 129,  399 => 128,  393 => 125,  390 => 124,  388 => 123,  384 => 121,  379 => 118,  373 => 117,  369 => 115,  356 => 113,  352 => 112,  348 => 111,  345 => 110,  342 => 109,  338 => 108,  334 => 106,  331 => 105,  324 => 103,  318 => 99,  313 => 96,  307 => 95,  303 => 93,  290 => 91,  286 => 90,  282 => 89,  279 => 88,  276 => 87,  272 => 86,  268 => 84,  265 => 83,  258 => 81,  252 => 77,  247 => 74,  241 => 73,  237 => 71,  224 => 69,  220 => 68,  216 => 67,  213 => 66,  210 => 65,  206 => 64,  202 => 62,  199 => 61,  189 => 57,  185 => 56,  182 => 55,  178 => 54,  169 => 47,  167 => 46,  161 => 45,  158 => 44,  154 => 43,  145 => 36,  143 => 35,  137 => 34,  134 => 33,  130 => 32,  126 => 30,  124 => 29,  117 => 28,  114 => 27,  107 => 22,  104 => 21,  101 => 20,  95 => 18,  85 => 16,  82 => 15,  78 => 13,  72 => 11,  62 => 9,  60 => 8,  54 => 7,  51 => 6,  49 => 5,  46 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oct_deals/template/octemplates/menu/oct_menu_horizontal.twig", "");
    }
}
