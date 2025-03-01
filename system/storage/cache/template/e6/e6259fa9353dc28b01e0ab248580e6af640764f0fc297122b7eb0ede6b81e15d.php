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

/* oct_deals/template/common/menu.twig */
class __TwigTemplate_33532d2a224ed0627e71537dd78c70f2511d988da853805550e178f094f6af79 extends Template
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
        if (($context["categories"] ?? null)) {
            // line 2
            echo "\t<button type=\"button\" class=\"ds-header-catalog-button button button-outline button-outline-primary button-large br-7 ms-3 d-none d-xl-flex\">
        <svg width=\"18\" height=\"18\" viewBox=\"0 0 18 18\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
            <path
                d=\"M14.25 17.75C12.183 17.75 10.5 16.068 10.5 14C10.5 11.932 12.183 10.25 14.25 10.25C16.317 10.25 18 11.932 18 14C18 16.068 16.317 17.75 14.25 17.75ZM14.25 11.75C13.01 11.75 12 12.759 12 14C12 15.241 13.01 16.25 14.25 16.25C15.49 16.25 16.5 15.241 16.5 14C16.5 12.759 15.49 11.75 14.25 11.75ZM15.75 7.75H12.75C11.341 7.75 10.5 6.909 10.5 5.5V2.5C10.5 1.091 11.341 0.25 12.75 0.25H15.75C17.159 0.25 18 1.091 18 2.5V5.5C18 6.909 17.159 7.75 15.75 7.75ZM12.75 1.75C12.161 1.75 12 1.911 12 2.5V5.5C12 6.089 12.161 6.25 12.75 6.25H15.75C16.339 6.25 16.5 6.089 16.5 5.5V2.5C16.5 1.911 16.339 1.75 15.75 1.75H12.75ZM5.75 7.75H2.75C1.341 7.75 0.5 6.909 0.5 5.5V2.5C0.5 1.091 1.341 0.25 2.75 0.25H5.75C7.159 0.25 8 1.091 8 2.5V5.5C8 6.909 7.159 7.75 5.75 7.75ZM2.75 1.75C2.161 1.75 2 1.911 2 2.5V5.5C2 6.089 2.161 6.25 2.75 6.25H5.75C6.339 6.25 6.5 6.089 6.5 5.5V2.5C6.5 1.911 6.339 1.75 5.75 1.75H2.75ZM5.75 17.75H2.75C1.341 17.75 0.5 16.909 0.5 15.5V12.5C0.5 11.091 1.341 10.25 2.75 10.25H5.75C7.159 10.25 8 11.091 8 12.5V15.5C8 16.909 7.159 17.75 5.75 17.75ZM2.75 11.75C2.161 11.75 2 11.911 2 12.5V15.5C2 16.089 2.161 16.25 2.75 16.25H5.75C6.339 16.25 6.5 16.089 6.5 15.5V12.5C6.5 11.911 6.339 11.75 5.75 11.75H2.75Z\"
                fill=\"#00A8E8\"></path>
        </svg>
        <span class=\"button-text fsz-14\">";
            // line 8
            echo ($context["oct_menu_catalog"] ?? null);
            echo "</span>
    </button>
\t<div class=\"ds-menu-catalog ds-menu-main-catalog\">
\t\t<div class=\"ds-sidebar-header d-flex align-items-center justify-content-between py-2 px-3\">
\t\t\t<div class=\"fw-700 dark-text fsz-16\">
\t\t\t\t";
            // line 13
            echo ($context["oct_menu_catalog"] ?? null);
            echo "
\t\t\t</div>
\t\t\t<button type=\"button\" class=\"button button-light br-10 ds-sidebar-close\" data-sidebar=\"catalogclose\" aria-label=\"Close\">
\t\t\t\t<svg class=\"me-0\" width=\"12\" height=\"12\" viewBox=\"0 0 12 12\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t<path d=\"M11.8029 10.8616C12.0633 11.122 12.0633 11.5442 11.8029 11.8046C11.6731 11.9344 11.5025 12.0001 11.3319 12.0001C11.1612 12.0001 10.9906 11.9352 10.8608 11.8046L5.99911 6.94288L1.13743 11.8046C1.00766 11.9344 0.837017 12.0001 0.666369 12.0001C0.495722 12.0001 0.325075 11.9352 0.195312 11.8046C-0.0651039 11.5442 -0.0651039 11.122 0.195312 10.8616L5.057 5.9999L0.195312 1.13824C-0.0651039 0.877827 -0.0651039 0.45562 0.195312 0.195205C0.455727 -0.0652107 0.877907 -0.0652107 1.13832 0.195205L6.00001 5.05692L10.8617 0.195205C11.1221 -0.0652107 11.5443 -0.0652107 11.8047 0.195205C12.0651 0.45562 12.0651 0.877827 11.8047 1.13824L6.943 5.9999L11.8029 10.8616Z\"
\t\t\t\t\t\tfill=\"#00A8E8\" />
\t\t\t\t</svg>
\t\t\t</button>
\t\t</div>
\t\t<nav class=\"ds-menu-catalog-inner\">
\t\t\t<ul class=\"ds-menu-catalog-items br-4\">
\t\t\t\t";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 25
                echo "\t\t\t\t\t<li class=\"ds-menu-catalog-item d-flex align-items-center justify-content-between fsz-14 dark-text\">
\t\t\t\t\t\t";
                // line 26
                if (twig_get_attribute($this->env, $this->source, $context["category"], "oct_image", [], "any", false, false, false, 26)) {
                    // line 27
                    echo "                            <span class=\"d-inline-flex align-items-center\">
                                <img class=\"ds-menu-catalog-item-img\" src=\"";
                    // line 28
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "oct_image", [], "any", false, false, false, 28);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 28);
                    echo "\" width=\"20\" height=\"20\" loading=\"lazy\">
\t\t\t\t\t\t\t\t";
                    // line 29
                    if (twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 29)) {
                        // line 30
                        echo "                                \t<a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 30);
                        echo "\" ";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "target", [], "any", false, false, false, 30);
                        echo "  class=\"ds-menu-maincategories-item-title fsz-14 dark-text ms-2\">";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 30);
                        echo "</a>
\t\t\t\t\t\t\t\t";
                    } else {
                        // line 32
                        echo "\t\t\t\t\t\t\t\t\t<span class=\"ds-menu-maincategories-item-title fsz-14 dark-text ms-2\">";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 32);
                        echo "</span>
\t\t\t\t\t\t\t\t";
                    }
                    // line 34
                    echo "                            </span>
                        ";
                } else {
                    // line 36
                    echo "                            ";
                    if (twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 36)) {
                        // line 37
                        echo "                                \t<a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 37);
                        echo "\" ";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "target", [], "any", false, false, false, 37);
                        echo "  class=\"ds-menu-maincategories-item-title fsz-14 dark-text\">";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 37);
                        echo "</a>
\t\t\t\t\t\t\t\t";
                    } else {
                        // line 39
                        echo "\t\t\t\t\t\t\t\t\t<span class=\"ds-menu-maincategories-item-title fsz-14 dark-text ms-2\">";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 39);
                        echo "</span>
\t\t\t\t\t\t\t\t";
                    }
                    // line 41
                    echo "                        ";
                }
                // line 42
                echo "\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 42) || twig_get_attribute($this->env, $this->source, $context["category"], "oct_pages", [], "any", false, false, false, 42))) {
                    // line 43
                    echo "\t\t\t\t\t\t\t<svg width=\"6\" height=\"11\" viewBox=\"0 0 6 11\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t<path d=\"M1.24923 10.1022C1.05723 10.1022 0.865201 10.0292 0.719201 9.88223C0.426201 9.58923 0.426201 9.11419 0.719201 8.82119L4.18917 5.35122L0.719201 1.88125C0.426201 1.58825 0.426201 1.11321 0.719201 0.820214C1.0122 0.527214 1.48724 0.527214 1.78024 0.820214L5.78024 4.82021C6.07324 5.11321 6.07324 5.58825 5.78024 5.88125L1.78024 9.88125C1.63324 10.0292 1.44123 10.1022 1.24923 10.1022Z\"
\t\t\t\t\t\t\t\t\tfill=\"#003459\"></path>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t<div class=\"ds-menu-catalog\">
\t\t\t\t\t\t\t\t<div class=\"ds-sidebar-header d-flex align-items-center justify-content-between py-2 px-3\">
\t\t\t\t\t\t\t\t\t<div class=\"ds-sidebar-header-back fw-700 dark-text fsz-16 d-flex align-items-center\" data-sidebar=\"catalogback\">
\t\t\t\t\t\t\t\t\t\t<svg class=\"me-2\" width=\"18\" height=\"10\" viewBox=\"0 0 18 10\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t\t<path d=\"M17.4979 4.9994C17.4979 5.4134 17.1619 5.7494 16.7479 5.7494H2.55895L5.27892 8.46937C5.57192 8.76237 5.57192 9.2374 5.27892 9.5304C5.13292 9.6764 4.94089 9.75037 4.74889 9.75037C4.55689 9.75037 4.36487 9.6774 4.21887 9.5304L0.218865 5.5304C0.149865 5.4614 0.095 5.37851 0.057 5.28651C-0.019 5.10351 -0.019 4.89651 0.057 4.71351C0.095 4.62151 0.149865 4.53837 0.218865 4.46937L4.21887 0.469369C4.51187 0.176369 4.9869 0.176369 5.2799 0.469369C5.5729 0.762369 5.5729 1.2374 5.2799 1.5304L2.55993 4.25037H16.7479C17.1619 4.24937 17.4979 4.5854 17.4979 4.9994Z\"
\t\t\t\t\t\t\t\t\t\t\t\tfill=\"#00171F\" />
\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t";
                    // line 54
                    echo ($context["oct_menu_catalog"] ?? null);
                    echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"button button-light br-10 ds-sidebar-close\" data-sidebar=\"catalogclose\" aria-label=\"Close\">
\t\t\t\t\t\t\t\t\t\t<svg class=\"me-0\" width=\"12\" height=\"12\" viewBox=\"0 0 12 12\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t\t<path d=\"M11.8029 10.8616C12.0633 11.122 12.0633 11.5442 11.8029 11.8046C11.6731 11.9344 11.5025 12.0001 11.3319 12.0001C11.1612 12.0001 10.9906 11.9352 10.8608 11.8046L5.99911 6.94288L1.13743 11.8046C1.00766 11.9344 0.837017 12.0001 0.666369 12.0001C0.495722 12.0001 0.325075 11.9352 0.195312 11.8046C-0.0651039 11.5442 -0.0651039 11.122 0.195312 10.8616L5.057 5.9999L0.195312 1.13824C-0.0651039 0.877827 -0.0651039 0.45562 0.195312 0.195205C0.455727 -0.0652107 0.877907 -0.0652107 1.13832 0.195205L6.00001 5.05692L10.8617 0.195205C11.1221 -0.0652107 11.5443 -0.0652107 11.8047 0.195205C12.0651 0.45562 12.0651 0.877827 11.8047 1.13824L6.943 5.9999L11.8029 10.8616Z\"
\t\t\t\t\t\t\t\t\t\t\t\tfill=\"#00A8E8\" />
\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"ds-menu-catalog-inner\">
\t\t\t\t\t\t\t\t\t <ul class=\"ds-menu-catalog-items\">
\t\t\t\t\t\t\t\t\t\t";
                    // line 65
                    if (twig_get_attribute($this->env, $this->source, $context["category"], "oct_pages", [], "any", false, false, false, 65)) {
                        // line 66
                        echo "\t\t\t\t\t\t\t\t\t\t\t<li class=\"ds-menu-list-landings\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 68
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "oct_pages", [], "any", false, false, false, 68));
                        foreach ($context['_seq'] as $context["_key"] => $context["oct_page"]) {
                            // line 69
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 69))) {
                                // line 70
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"d-flex flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ds-megamenu-children-title fw-700 mb-2\">";
                                // line 71
                                echo (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_group", [], "any", false, false, false, 71)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[($context["language_id"] ?? null)] ?? null) : null);
                                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 72
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 72));
                                foreach ($context['_seq'] as $context["_key"] => $context["page_link"]) {
                                    // line 73
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                    echo twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = $context["page_link"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[($context["language_id"] ?? null)] ?? null) : null), "link", [], "any", false, false, false, 73);
                                    echo "\" title=\"";
                                    echo twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = $context["page_link"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 73);
                                    echo "\" class=\"ds-menu-list-landings-link fsz-12\">";
                                    echo twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = $context["page_link"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 73);
                                    echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page_link'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 75
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 77
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_page'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 78
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 81
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 81));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 82
                        echo "\t\t\t\t\t\t\t\t\t\t<li class=\"ds-menu-catalog-item d-flex align-items-center justify-content-between fsz-14 dark-text\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                        // line 83
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 83);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 83);
                        echo "</a>
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 84
                        if ((twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 84) || twig_get_attribute($this->env, $this->source, $context["child"], "oct_pages", [], "any", false, false, false, 84))) {
                            // line 85
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<svg width=\"6\" height=\"11\" viewBox=\"0 0 6 11\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M1.24923 10.1022C1.05723 10.1022 0.865201 10.0292 0.719201 9.88223C0.426201 9.58923 0.426201 9.11419 0.719201 8.82119L4.18917 5.35122L0.719201 1.88125C0.426201 1.58825 0.426201 1.11321 0.719201 0.820214C1.0122 0.527214 1.48724 0.527214 1.78024 0.820214L5.78024 4.82021C6.07324 5.11321 6.07324 5.58825 5.78024 5.88125L1.78024 9.88125C1.63324 10.0292 1.44123 10.1022 1.24923 10.1022Z\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tfill=\"#003459\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ds-menu-catalog\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ds-sidebar-header d-flex align-items-center justify-content-between py-2 px-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ds-sidebar-header-back fw-700 dark-text fsz-16 d-flex align-items-center\" data-sidebar=\"catalogback\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg class=\"me-2\" width=\"18\" height=\"10\" viewBox=\"0 0 18 10\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M17.4979 4.9994C17.4979 5.4134 17.1619 5.7494 16.7479 5.7494H2.55895L5.27892 8.46937C5.57192 8.76237 5.57192 9.2374 5.27892 9.5304C5.13292 9.6764 4.94089 9.75037 4.74889 9.75037C4.55689 9.75037 4.36487 9.6774 4.21887 9.5304L0.218865 5.5304C0.149865 5.4614 0.095 5.37851 0.057 5.28651C-0.019 5.10351 -0.019 4.89651 0.057 4.71351C0.095 4.62151 0.149865 4.53837 0.218865 4.46937L4.21887 0.469369C4.51187 0.176369 4.9869 0.176369 5.2799 0.469369C5.5729 0.762369 5.5729 1.2374 5.2799 1.5304L2.55993 4.25037H16.7479C17.1619 4.24937 17.4979 4.5854 17.4979 4.9994Z\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfill=\"#00171F\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 96
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 96);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"button button-light br-10 ds-sidebar-close\" data-sidebar=\"catalogclose\" aria-label=\"Close\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg class=\"me-0\" width=\"12\" height=\"12\" viewBox=\"0 0 12 12\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M11.8029 10.8616C12.0633 11.122 12.0633 11.5442 11.8029 11.8046C11.6731 11.9344 11.5025 12.0001 11.3319 12.0001C11.1612 12.0001 10.9906 11.9352 10.8608 11.8046L5.99911 6.94288L1.13743 11.8046C1.00766 11.9344 0.837017 12.0001 0.666369 12.0001C0.495722 12.0001 0.325075 11.9352 0.195312 11.8046C-0.0651039 11.5442 -0.0651039 11.122 0.195312 10.8616L5.057 5.9999L0.195312 1.13824C-0.0651039 0.877827 -0.0651039 0.45562 0.195312 0.195205C0.455727 -0.0652107 0.877907 -0.0652107 1.13832 0.195205L6.00001 5.05692L10.8617 0.195205C11.1221 -0.0652107 11.5443 -0.0652107 11.8047 0.195205C12.0651 0.45562 12.0651 0.877827 11.8047 1.13824L6.943 5.9999L11.8029 10.8616Z\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfill=\"#00A8E8\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ds-menu-catalog-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"ds-menu-catalog-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 107
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 107));
                            foreach ($context['_seq'] as $context["_key"] => $context["ch"]) {
                                // line 108
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"ds-menu-catalog-item d-flex align-items-center justify-content-between fsz-14 dark-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                // line 109
                                echo twig_get_attribute($this->env, $this->source, $context["ch"], "href", [], "any", false, false, false, 109);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["ch"], "name", [], "any", false, false, false, 109);
                                echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 110
                                if ((twig_get_attribute($this->env, $this->source, $context["ch"], "children", [], "any", false, false, false, 110) || twig_get_attribute($this->env, $this->source, $context["ch"], "oct_pages", [], "any", false, false, false, 110))) {
                                    // line 111
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg width=\"6\" height=\"11\" viewBox=\"0 0 6 11\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M1.24923 10.1022C1.05723 10.1022 0.865201 10.0292 0.719201 9.88223C0.426201 9.58923 0.426201 9.11419 0.719201 8.82119L4.18917 5.35122L0.719201 1.88125C0.426201 1.58825 0.426201 1.11321 0.719201 0.820214C1.0122 0.527214 1.48724 0.527214 1.78024 0.820214L5.78024 4.82021C6.07324 5.11321 6.07324 5.58825 5.78024 5.88125L1.78024 9.88125C1.63324 10.0292 1.44123 10.1022 1.24923 10.1022Z\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfill=\"#003459\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ds-menu-catalog\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ds-sidebar-header d-flex align-items-center justify-content-between py-2 px-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ds-sidebar-header-back fw-700 dark-text fsz-16 d-flex align-items-center\" data-sidebar=\"catalogback\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg class=\"me-2\" width=\"18\" height=\"10\" viewBox=\"0 0 18 10\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M17.4979 4.9994C17.4979 5.4134 17.1619 5.7494 16.7479 5.7494H2.55895L5.27892 8.46937C5.57192 8.76237 5.57192 9.2374 5.27892 9.5304C5.13292 9.6764 4.94089 9.75037 4.74889 9.75037C4.55689 9.75037 4.36487 9.6774 4.21887 9.5304L0.218865 5.5304C0.149865 5.4614 0.095 5.37851 0.057 5.28651C-0.019 5.10351 -0.019 4.89651 0.057 4.71351C0.095 4.62151 0.149865 4.53837 0.218865 4.46937L4.21887 0.469369C4.51187 0.176369 4.9869 0.176369 5.2799 0.469369C5.5729 0.762369 5.5729 1.2374 5.2799 1.5304L2.55993 4.25037H16.7479C17.1619 4.24937 17.4979 4.5854 17.4979 4.9994Z\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfill=\"#00171F\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    // line 122
                                    echo twig_get_attribute($this->env, $this->source, $context["ch"], "name", [], "any", false, false, false, 122);
                                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"button button-light br-10 ds-sidebar-close\" data-sidebar=\"catalogclose\" aria-label=\"Close\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg class=\"me-0\" width=\"12\" height=\"12\" viewBox=\"0 0 12 12\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M11.8029 10.8616C12.0633 11.122 12.0633 11.5442 11.8029 11.8046C11.6731 11.9344 11.5025 12.0001 11.3319 12.0001C11.1612 12.0001 10.9906 11.9352 10.8608 11.8046L5.99911 6.94288L1.13743 11.8046C1.00766 11.9344 0.837017 12.0001 0.666369 12.0001C0.495722 12.0001 0.325075 11.9352 0.195312 11.8046C-0.0651039 11.5442 -0.0651039 11.122 0.195312 10.8616L5.057 5.9999L0.195312 1.13824C-0.0651039 0.877827 -0.0651039 0.45562 0.195312 0.195205C0.455727 -0.0652107 0.877907 -0.0652107 1.13832 0.195205L6.00001 5.05692L10.8617 0.195205C11.1221 -0.0652107 11.5443 -0.0652107 11.8047 0.195205C12.0651 0.45562 12.0651 0.877827 11.8047 1.13824L6.943 5.9999L11.8029 10.8616Z\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfill=\"#00A8E8\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ds-menu-catalog-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"ds-menu-catalog-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    // line 133
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["ch"], "children", [], "any", false, false, false, 133));
                                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                                        // line 134
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"ds-menu-catalog-item d-flex align-items-center justify-content-between fsz-14 dark-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                        // line 135
                                        echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 135);
                                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                        // line 136
                                        echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 136);
                                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 140
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    if (twig_get_attribute($this->env, $this->source, $context["ch"], "oct_pages", [], "any", false, false, false, 140)) {
                                        // line 141
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"ds-menu-list-landings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                        // line 143
                                        $context['_parent'] = $context;
                                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["ch"], "oct_pages", [], "any", false, false, false, 143));
                                        foreach ($context['_seq'] as $context["_key"] => $context["oct_page"]) {
                                            // line 144
                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 144))) {
                                                // line 145
                                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"d-flex flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ds-megamenu-children-title fw-700 mb-2\">";
                                                // line 146
                                                echo (($__internal_compile_4 = twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_group", [], "any", false, false, false, 146)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[($context["language_id"] ?? null)] ?? null) : null);
                                                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                                // line 147
                                                $context['_parent'] = $context;
                                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 147));
                                                foreach ($context['_seq'] as $context["_key"] => $context["page_link"]) {
                                                    // line 148
                                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                                    echo twig_get_attribute($this->env, $this->source, (($__internal_compile_5 = $context["page_link"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[($context["language_id"] ?? null)] ?? null) : null), "link", [], "any", false, false, false, 148);
                                                    echo "\" title=\"";
                                                    echo twig_get_attribute($this->env, $this->source, (($__internal_compile_6 = $context["page_link"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 148);
                                                    echo "\" class=\"ds-menu-list-landings-link fsz-12\">";
                                                    echo twig_get_attribute($this->env, $this->source, (($__internal_compile_7 = $context["page_link"]) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 148);
                                                    echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                                }
                                                $_parent = $context['_parent'];
                                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page_link'], $context['_parent'], $context['loop']);
                                                $context = array_intersect_key($context, $_parent) + $_parent;
                                                // line 150
                                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                            }
                                            // line 152
                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                        }
                                        $_parent = $context['_parent'];
                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_page'], $context['_parent'], $context['loop']);
                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                        // line 153
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    // line 156
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 160
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ch'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 162
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if (twig_get_attribute($this->env, $this->source, $context["child"], "oct_pages", [], "any", false, false, false, 162)) {
                                // line 163
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"ds-menu-list-landings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 165
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "oct_pages", [], "any", false, false, false, 165));
                                foreach ($context['_seq'] as $context["_key"] => $context["oct_page"]) {
                                    // line 166
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 166))) {
                                        // line 167
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"d-flex flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ds-megamenu-children-title fw-700 mb-2\">";
                                        // line 168
                                        echo (($__internal_compile_8 = twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_group", [], "any", false, false, false, 168)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[($context["language_id"] ?? null)] ?? null) : null);
                                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                        // line 169
                                        $context['_parent'] = $context;
                                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 169));
                                        foreach ($context['_seq'] as $context["_key"] => $context["page_link"]) {
                                            // line 170
                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                            echo twig_get_attribute($this->env, $this->source, (($__internal_compile_9 = $context["page_link"]) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[($context["language_id"] ?? null)] ?? null) : null), "link", [], "any", false, false, false, 170);
                                            echo "\" title=\"";
                                            echo twig_get_attribute($this->env, $this->source, (($__internal_compile_10 = $context["page_link"]) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 170);
                                            echo "\" class=\"ds-menu-list-landings-link fsz-12\">";
                                            echo twig_get_attribute($this->env, $this->source, (($__internal_compile_11 = $context["page_link"]) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 170);
                                            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                        }
                                        $_parent = $context['_parent'];
                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page_link'], $context['_parent'], $context['loop']);
                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                        // line 172
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    // line 174
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_page'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 175
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 178
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 182
                        echo "\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 184
                    echo "\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 188
                echo "\t\t\t\t\t</li>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 190
            echo "\t\t\t</ul>
\t\t</nav>
\t</div>
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "oct_deals/template/common/menu.twig";
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
        return array (  464 => 190,  457 => 188,  451 => 184,  444 => 182,  438 => 178,  433 => 175,  427 => 174,  423 => 172,  410 => 170,  406 => 169,  402 => 168,  399 => 167,  396 => 166,  392 => 165,  388 => 163,  385 => 162,  378 => 160,  372 => 156,  367 => 153,  361 => 152,  357 => 150,  344 => 148,  340 => 147,  336 => 146,  333 => 145,  330 => 144,  326 => 143,  322 => 141,  319 => 140,  309 => 136,  305 => 135,  302 => 134,  298 => 133,  284 => 122,  271 => 111,  269 => 110,  263 => 109,  260 => 108,  256 => 107,  242 => 96,  229 => 85,  227 => 84,  221 => 83,  218 => 82,  213 => 81,  208 => 78,  202 => 77,  198 => 75,  185 => 73,  181 => 72,  177 => 71,  174 => 70,  171 => 69,  167 => 68,  163 => 66,  161 => 65,  147 => 54,  134 => 43,  131 => 42,  128 => 41,  122 => 39,  112 => 37,  109 => 36,  105 => 34,  99 => 32,  89 => 30,  87 => 29,  81 => 28,  78 => 27,  76 => 26,  73 => 25,  69 => 24,  55 => 13,  47 => 8,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oct_deals/template/common/menu.twig", "");
    }
}
