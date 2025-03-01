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

/* oct_deals/template/octemplates/menu/oct_menu.twig */
class __TwigTemplate_e6e02b17fcf0dc5661671dbbc1f2dc3783fc095d76fdfae1949d5e4c3f8521c7 extends Template
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
            echo "    <button type=\"button\" class=\"ds-header-catalog-button button button-outline button-outline-primary button-large br-7 ms-3 d-none d-xl-flex\">
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
    <div class=\"ds-menu-catalog ds-menu-main-catalog\">
        <div class=\"ds-sidebar-header d-flex align-items-center justify-content-between py-2 px-3\">
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
        <nav class=\"ds-menu-catalog-inner\">
            <ul class=\"ds-menu-catalog-items br-4\">
                ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["oct_menu"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["oct_category"]) {
                // line 25
                echo "                    <li class=\"ds-menu-catalog-item d-flex align-items-center justify-content-between fsz-14 dark-text\">
                        ";
                // line 26
                if (twig_get_attribute($this->env, $this->source, $context["oct_category"], "oct_image", [], "any", false, false, false, 26)) {
                    // line 27
                    echo "                            <span class=\"d-inline-flex align-items-center\">
                                <img class=\"ds-menu-catalog-item-img\" src=\"";
                    // line 28
                    echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "oct_image", [], "any", false, false, false, 28);
                    echo "\" alt=\"\" width=\"20\" height=\"20\" loading=\"lazy\">
                                ";
                    // line 29
                    if (twig_get_attribute($this->env, $this->source, $context["oct_category"], "href", [], "any", false, false, false, 29)) {
                        // line 30
                        echo "                                    <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "href", [], "any", false, false, false, 30);
                        echo "\" ";
                        echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "target", [], "any", false, false, false, 30);
                        echo " class=\"ds-menu-maincategories-item-title fsz-14 dark-text fw-500 ms-2\">";
                        echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "name", [], "any", false, false, false, 30);
                        echo "</a>
                                ";
                    } else {
                        // line 32
                        echo "                                    <span class=\"ds-menu-maincategories-item-title fsz-14 dark-text fw-500 ms-2\">";
                        echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "name", [], "any", false, false, false, 32);
                        echo "</span>
                                ";
                    }
                    // line 34
                    echo "                            </span>
                        ";
                } else {
                    // line 36
                    echo "                            ";
                    if (twig_get_attribute($this->env, $this->source, $context["oct_category"], "href", [], "any", false, false, false, 36)) {
                        // line 37
                        echo "                                <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "href", [], "any", false, false, false, 37);
                        echo "\" ";
                        echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "target", [], "any", false, false, false, 37);
                        echo " class=\"ds-menu-maincategories-item-title fsz-14 dark-text fw-500\">";
                        echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "name", [], "any", false, false, false, 37);
                        echo "</a>
                            ";
                    } else {
                        // line 39
                        echo "                                <span class=\"ds-menu-maincategories-item-title fsz-14 dark-text fw-500 ms-2\">";
                        echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "name", [], "any", false, false, false, 39);
                        echo "</span>
                            ";
                    }
                    // line 41
                    echo "                        ";
                }
                // line 42
                echo "                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["oct_category"], "children", [], "any", false, false, false, 42) || twig_get_attribute($this->env, $this->source, $context["oct_category"], "oct_pages", [], "any", false, false, false, 42))) {
                    // line 43
                    echo "                            <svg width=\"6\" height=\"11\" viewBox=\"0 0 6 11\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                <path d=\"M1.24923 10.1022C1.05723 10.1022 0.865201 10.0292 0.719201 9.88223C0.426201 9.58923 0.426201 9.11419 0.719201 8.82119L4.18917 5.35122L0.719201 1.88125C0.426201 1.58825 0.426201 1.11321 0.719201 0.820214C1.0122 0.527214 1.48724 0.527214 1.78024 0.820214L5.78024 4.82021C6.07324 5.11321 6.07324 5.58825 5.78024 5.88125L1.78024 9.88125C1.63324 10.0292 1.44123 10.1022 1.24923 10.1022Z\"
                                    fill=\"#003459\"></path>
                            </svg>
                        ";
                }
                // line 48
                echo "                        ";
                if (((twig_get_attribute($this->env, $this->source, $context["oct_category"], "children", [], "any", false, false, false, 48) || twig_get_attribute($this->env, $this->source, $context["oct_category"], "oct_pages", [], "any", false, false, false, 48)) && (twig_get_attribute($this->env, $this->source, $context["oct_category"], "type", [], "any", false, false, false, 48) == "standard"))) {
                    // line 49
                    echo "                            <div class=\"ds-menu-catalog";
                    if ((twig_get_attribute($this->env, $this->source, $context["oct_category"], "view", [], "any", false, false, false, 49) == "2")) {
                        echo " ds-menu-catalog-wide";
                    }
                    echo "\">
                                <div class=\"ds-sidebar-header d-flex align-items-center justify-content-between py-2 px-3\">
                                    <div class=\"ds-sidebar-header-back fw-700 dark-text fsz-16 d-flex align-items-center\" data-sidebar=\"catalogback\">
                                        <svg class=\"me-2\" width=\"18\" height=\"10\" viewBox=\"0 0 18 10\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                            <path d=\"M17.4979 4.9994C17.4979 5.4134 17.1619 5.7494 16.7479 5.7494H2.55895L5.27892 8.46937C5.57192 8.76237 5.57192 9.2374 5.27892 9.5304C5.13292 9.6764 4.94089 9.75037 4.74889 9.75037C4.55689 9.75037 4.36487 9.6774 4.21887 9.5304L0.218865 5.5304C0.149865 5.4614 0.095 5.37851 0.057 5.28651C-0.019 5.10351 -0.019 4.89651 0.057 4.71351C0.095 4.62151 0.149865 4.53837 0.218865 4.46937L4.21887 0.469369C4.51187 0.176369 4.9869 0.176369 5.2799 0.469369C5.5729 0.762369 5.5729 1.2374 5.2799 1.5304L2.55993 4.25037H16.7479C17.1619 4.24937 17.4979 4.5854 17.4979 4.9994Z\"
                                                fill=\"#00171F\" />
                                        </svg>
                                        ";
                    // line 56
                    echo ($context["oct_menu_catalog"] ?? null);
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
                                    ";
                    // line 66
                    if ((twig_get_attribute($this->env, $this->source, $context["oct_category"], "oct_pages", [], "any", false, false, false, 66) && (twig_get_attribute($this->env, $this->source, $context["oct_category"], "view", [], "any", false, false, false, 66) == "2"))) {
                        // line 67
                        echo "                                        <div class=\"col-xl-3 p-3 p-xl-0\">
                                            ";
                        // line 68
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_category"], "oct_pages", [], "any", false, false, false, 68));
                        foreach ($context['_seq'] as $context["_key"] => $context["oct_page"]) {
                            // line 69
                            echo "                                                <ul class=\"ds-menu-list-landings p-3 py-xl-0 ps-xl-0\">
                                                    ";
                            // line 70
                            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 70))) {
                                // line 71
                                echo "                                                    <li class=\"d-flex flex-column mb-3\">
                                                        <span class=\"ds-megamenu-children-title fw-700 mb-2 pb-2\">";
                                // line 72
                                echo (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_group", [], "any", false, false, false, 72)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[($context["language_id"] ?? null)] ?? null) : null);
                                echo "</span>
                                                        ";
                                // line 73
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 73));
                                foreach ($context['_seq'] as $context["_key"] => $context["page_link"]) {
                                    // line 74
                                    echo "                                                        <a href=\"";
                                    echo twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = $context["page_link"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[($context["language_id"] ?? null)] ?? null) : null), "link", [], "any", false, false, false, 74);
                                    echo "\" title=\"";
                                    echo twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = $context["page_link"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 74);
                                    echo "\" class=\"ds-menu-list-landings-link fsz-14\">";
                                    echo twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = $context["page_link"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 74);
                                    echo "</a>
                                                        ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page_link'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 76
                                echo "                                                    </li>
                                                    ";
                            }
                            // line 78
                            echo "                                                </ul>
                                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_page'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 80
                        echo "                                        </div>
                                    ";
                    }
                    // line 82
                    echo "                                    <ul class=\"ds-menu-catalog-items\">
                                        ";
                    // line 83
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_category"], "children", [], "any", false, false, false, 83));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 84
                        echo "                                            <li class=\"ds-menu-catalog-item d-flex align-items-center justify-content-between fsz-14 dark-text\">
                                                <a href=\"";
                        // line 85
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 85);
                        echo "\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 85);
                        echo "\" class=\"d-flex align-items-center\">
                                                    ";
                        // line 86
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 86);
                        echo "
                                                </a>
                                                ";
                        // line 88
                        if ((twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 88) || twig_get_attribute($this->env, $this->source, $context["child"], "oct_pages", [], "any", false, false, false, 88))) {
                            // line 89
                            echo "                                                    <svg width=\"6\" height=\"11\" viewBox=\"0 0 6 11\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
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
                            // line 100
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 100);
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
                            // line 111
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 111));
                            foreach ($context['_seq'] as $context["_key"] => $context["ch"]) {
                                // line 112
                                echo "                                                                    <li class=\"ds-menu-catalog-item d-flex align-items-center justify-content-between fsz-14 dark-text\">
                                                                        <a href=\"";
                                // line 113
                                echo twig_get_attribute($this->env, $this->source, $context["ch"], "href", [], "any", false, false, false, 113);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["ch"], "name", [], "any", false, false, false, 113);
                                echo "</a>
                                                                        ";
                                // line 114
                                if ((twig_get_attribute($this->env, $this->source, $context["oct_category"], "view", [], "any", false, false, false, 114) == "1")) {
                                    // line 115
                                    echo "                                                                            ";
                                    if ((twig_get_attribute($this->env, $this->source, $context["ch"], "children", [], "any", false, false, false, 115) || twig_get_attribute($this->env, $this->source, $context["ch"], "oct_pages", [], "any", false, false, false, 115))) {
                                        // line 116
                                        echo "                                                                                <svg width=\"6\" height=\"11\" viewBox=\"0 0 6 11\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
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
                                        // line 128
                                        echo twig_get_attribute($this->env, $this->source, $context["ch"], "name", [], "any", false, false, false, 128);
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
                                        // line 139
                                        $context['_parent'] = $context;
                                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["ch"], "children", [], "any", false, false, false, 139));
                                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                                            // line 140
                                            echo "                                                                                                <li class=\"ds-menu-catalog-item d-flex align-items-center justify-content-between fsz-14 dark-text\">
                                                                                                    <a href=\"";
                                            // line 141
                                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 141);
                                            echo "\" class=\"flex-grow-1\">";
                                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 141);
                                            echo "</a>
                                                                                                </li>
                                                                                            ";
                                        }
                                        $_parent = $context['_parent'];
                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                        // line 144
                                        echo "                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            ";
                                    }
                                    // line 148
                                    echo "                                                                        ";
                                }
                                // line 149
                                echo "                                                                    </li>
                                                                ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ch'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 151
                            echo "                                                                ";
                            if ((twig_get_attribute($this->env, $this->source, $context["child"], "oct_pages", [], "any", false, false, false, 151) && (twig_get_attribute($this->env, $this->source, $context["oct_category"], "view", [], "any", false, false, false, 151) == "1"))) {
                                // line 152
                                echo "                                                                    <li class=\"ds-menu-list-landings\">
                                                                        <ul>
                                                                            ";
                                // line 154
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "oct_pages", [], "any", false, false, false, 154));
                                foreach ($context['_seq'] as $context["_key"] => $context["oct_page"]) {
                                    // line 155
                                    echo "                                                                                ";
                                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 155))) {
                                        // line 156
                                        echo "                                                                                <li class=\"d-flex flex-column\">
                                                                                    <span class=\"ds-megamenu-children-title fw-700 mb-2\">";
                                        // line 157
                                        echo (($__internal_compile_4 = twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_group", [], "any", false, false, false, 157)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[($context["language_id"] ?? null)] ?? null) : null);
                                        echo "</span>
                                                                                    ";
                                        // line 158
                                        $context['_parent'] = $context;
                                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 158));
                                        foreach ($context['_seq'] as $context["_key"] => $context["page_link"]) {
                                            // line 159
                                            echo "                                                                                    <a href=\"";
                                            echo twig_get_attribute($this->env, $this->source, (($__internal_compile_5 = $context["page_link"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[($context["language_id"] ?? null)] ?? null) : null), "link", [], "any", false, false, false, 159);
                                            echo "\" title=\"";
                                            echo twig_get_attribute($this->env, $this->source, (($__internal_compile_6 = $context["page_link"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 159);
                                            echo "\" class=\"ds-menu-list-landings-link fsz-14\">";
                                            echo twig_get_attribute($this->env, $this->source, (($__internal_compile_7 = $context["page_link"]) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 159);
                                            echo "</a>
                                                                                    ";
                                        }
                                        $_parent = $context['_parent'];
                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page_link'], $context['_parent'], $context['loop']);
                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                        // line 161
                                        echo "                                                                                </li>
                                                                                ";
                                    }
                                    // line 163
                                    echo "                                                                            ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_page'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 164
                                echo "                                                                        </ul>
                                                                    </li>
                                                                ";
                            }
                            // line 167
                            echo "                                                            </ul>
                                                            ";
                            // line 168
                            if ((twig_get_attribute($this->env, $this->source, $context["child"], "oct_pages", [], "any", false, false, false, 168) && (twig_get_attribute($this->env, $this->source, $context["oct_category"], "view", [], "any", false, false, false, 168) == "2"))) {
                                // line 169
                                echo "                                                                <ul class=\"ds-menu-list-landings p-3 p-xl-0\">
                                                                    ";
                                // line 170
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "oct_pages", [], "any", false, false, false, 170));
                                foreach ($context['_seq'] as $context["_key"] => $context["oct_page"]) {
                                    // line 171
                                    echo "                                                                        ";
                                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 171))) {
                                        // line 172
                                        echo "                                                                        <li class=\"d-flex flex-column\">
                                                                            <span class=\"ds-megamenu-children-title fw-700 mb-2\">";
                                        // line 173
                                        echo (($__internal_compile_8 = twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_group", [], "any", false, false, false, 173)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[($context["language_id"] ?? null)] ?? null) : null);
                                        echo "</span>
                                                                            ";
                                        // line 174
                                        $context['_parent'] = $context;
                                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 174));
                                        foreach ($context['_seq'] as $context["_key"] => $context["page_link"]) {
                                            // line 175
                                            echo "                                                                            <a href=\"";
                                            echo twig_get_attribute($this->env, $this->source, (($__internal_compile_9 = $context["page_link"]) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[($context["language_id"] ?? null)] ?? null) : null), "link", [], "any", false, false, false, 175);
                                            echo "\" title=\"";
                                            echo twig_get_attribute($this->env, $this->source, (($__internal_compile_10 = $context["page_link"]) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 175);
                                            echo "\" class=\"ds-menu-list-landings-link fsz-14\">";
                                            echo twig_get_attribute($this->env, $this->source, (($__internal_compile_11 = $context["page_link"]) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 175);
                                            echo "</a>
                                                                            ";
                                        }
                                        $_parent = $context['_parent'];
                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page_link'], $context['_parent'], $context['loop']);
                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                        // line 177
                                        echo "                                                                        </li>
                                                                        ";
                                    }
                                    // line 179
                                    echo "                                                                    ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_page'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 180
                                echo "                                                                </ul>
                                                            ";
                            }
                            // line 182
                            echo "                                                        </div>
                                                    </div>
                                                ";
                        }
                        // line 185
                        echo "                                            </li>
                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 187
                    echo "                                        ";
                    if ((twig_get_attribute($this->env, $this->source, $context["oct_category"], "oct_pages", [], "any", false, false, false, 187) && (twig_get_attribute($this->env, $this->source, $context["oct_category"], "view", [], "any", false, false, false, 187) == "1"))) {
                        // line 188
                        echo "                                            <li class=\"ds-menu-list-landings\">
                                                <ul>
                                                    ";
                        // line 190
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_category"], "oct_pages", [], "any", false, false, false, 190));
                        foreach ($context['_seq'] as $context["_key"] => $context["oct_page"]) {
                            // line 191
                            echo "                                                        ";
                            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 191))) {
                                // line 192
                                echo "                                                        <li class=\"d-flex flex-column\">
                                                            <span class=\"ds-megamenu-children-title fw-700 mb-2\">";
                                // line 193
                                echo (($__internal_compile_12 = twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_group", [], "any", false, false, false, 193)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[($context["language_id"] ?? null)] ?? null) : null);
                                echo "</span>
                                                            ";
                                // line 194
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 194));
                                foreach ($context['_seq'] as $context["_key"] => $context["page_link"]) {
                                    // line 195
                                    echo "                                                            <a href=\"";
                                    echo twig_get_attribute($this->env, $this->source, (($__internal_compile_13 = $context["page_link"]) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[($context["language_id"] ?? null)] ?? null) : null), "link", [], "any", false, false, false, 195);
                                    echo "\" title=\"";
                                    echo twig_get_attribute($this->env, $this->source, (($__internal_compile_14 = $context["page_link"]) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 195);
                                    echo "\" class=\"ds-menu-list-landings-link fsz-14\">";
                                    echo twig_get_attribute($this->env, $this->source, (($__internal_compile_15 = $context["page_link"]) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 195);
                                    echo "</a>
                                                            ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page_link'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 197
                                echo "                                                        </li>
                                                        ";
                            }
                            // line 199
                            echo "                                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_page'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 200
                        echo "                                                </ul>
                                            </li>
                                        ";
                    }
                    // line 203
                    echo "                                    </ul>
                                </div>
                            </div>
                        ";
                }
                // line 207
                echo "                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["oct_category"], "children", [], "any", false, false, false, 207) && (twig_get_attribute($this->env, $this->source, $context["oct_category"], "type", [], "any", false, false, false, 207) == "category"))) {
                    // line 208
                    echo "                        <!-- 1 = menu list, 2 = menu grid -->
                            <div class=\"ds-menu-catalog";
                    // line 209
                    if ((twig_get_attribute($this->env, $this->source, $context["oct_category"], "view", [], "any", false, false, false, 209) == "2")) {
                        echo " ds-menu-catalog-wide";
                    }
                    echo "\">
                                <div class=\"ds-sidebar-header d-flex align-items-center justify-content-between py-2 px-3 d-xl-none\">
                                    <div class=\"ds-sidebar-header-back fw-700 dark-text fsz-16 d-flex align-items-center\" data-sidebar=\"catalogback\">
                                        <svg class=\"me-2\" width=\"18\" height=\"10\" viewBox=\"0 0 18 10\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                            <path d=\"M17.4979 4.9994C17.4979 5.4134 17.1619 5.7494 16.7479 5.7494H2.55895L5.27892 8.46937C5.57192 8.76237 5.57192 9.2374 5.27892 9.5304C5.13292 9.6764 4.94089 9.75037 4.74889 9.75037C4.55689 9.75037 4.36487 9.6774 4.21887 9.5304L0.218865 5.5304C0.149865 5.4614 0.095 5.37851 0.057 5.28651C-0.019 5.10351 -0.019 4.89651 0.057 4.71351C0.095 4.62151 0.149865 4.53837 0.218865 4.46937L4.21887 0.469369C4.51187 0.176369 4.9869 0.176369 5.2799 0.469369C5.5729 0.762369 5.5729 1.2374 5.2799 1.5304L2.55993 4.25037H16.7479C17.1619 4.24937 17.4979 4.5854 17.4979 4.9994Z\"
                                                fill=\"#00171F\" />
                                        </svg>
                                        ";
                    // line 216
                    echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "name", [], "any", false, false, false, 216);
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
                                    ";
                    // line 226
                    if ((twig_get_attribute($this->env, $this->source, $context["oct_category"], "oct_pages", [], "any", false, false, false, 226) && (twig_get_attribute($this->env, $this->source, $context["oct_category"], "view", [], "any", false, false, false, 226) == "2"))) {
                        // line 227
                        echo "                                        <div class=\"col-xl-3 p-3 p-xl-0\">
                                            ";
                        // line 228
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_category"], "oct_pages", [], "any", false, false, false, 228));
                        foreach ($context['_seq'] as $context["_key"] => $context["oct_pages"]) {
                            // line 229
                            echo "                                                 ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($context["oct_pages"]);
                            foreach ($context['_seq'] as $context["_key"] => $context["oct_page"]) {
                                // line 230
                                echo "                                                    <ul class=\"ds-menu-list-landings dark-text mb-4 pe-xl-3\">
                                                        <li class=\"d-flex flex-column\">
                                                            ";
                                // line 232
                                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 232))) {
                                    // line 233
                                    echo "                                                                <span class=\"ds-megamenu-children-title fw-700 mb-2\">";
                                    echo (($__internal_compile_16 = twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_group", [], "any", false, false, false, 233)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[($context["language_id"] ?? null)] ?? null) : null);
                                    echo "</span>
                                                                ";
                                    // line 234
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 234));
                                    foreach ($context['_seq'] as $context["_key"] => $context["page_link"]) {
                                        // line 235
                                        echo "                                                                    <a href=\"";
                                        echo twig_get_attribute($this->env, $this->source, (($__internal_compile_17 = $context["page_link"]) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17[($context["language_id"] ?? null)] ?? null) : null), "link", [], "any", false, false, false, 235);
                                        echo "\" title=\"";
                                        echo twig_get_attribute($this->env, $this->source, (($__internal_compile_18 = $context["page_link"]) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 235);
                                        echo "\" class=\"ds-menu-list-landings-link fsz-14\">";
                                        echo twig_get_attribute($this->env, $this->source, (($__internal_compile_19 = $context["page_link"]) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 235);
                                        echo "</a>
                                                                ";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page_link'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 237
                                    echo "                                                            ";
                                }
                                // line 238
                                echo "                                                        </li>
                                                    </ul>
                                                ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_page'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 241
                            echo "                                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_pages'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 242
                        echo "                                        </div>
                                    ";
                    }
                    // line 244
                    echo "                                    <ul class=\"ds-menu-catalog-items\">
                                        ";
                    // line 245
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_category"], "children", [], "any", false, false, false, 245));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 246
                        echo "                                            <li class=\"ds-menu-catalog-item d-flex align-items-center justify-content-between fsz-14 dark-text\">
                                                    <a href=\"";
                        // line 247
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 247);
                        echo "\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 247);
                        echo "\" class=\"d-flex align-items-center\">
                                                        ";
                        // line 248
                        if (twig_get_attribute($this->env, $this->source, $context["child"], "oct_image", [], "any", false, false, false, 248)) {
                            // line 249
                            echo "                                                            <img class=\"me-3\" src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "oct_image", [], "any", false, false, false, 249);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "name", [], "any", false, false, false, 249);
                            echo "\" width=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "subcat_image_width", [], "any", false, false, false, 249);
                            echo "\" height=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "subcat_image_height", [], "any", false, false, false, 249);
                            echo "\" loading=\"lazy\" />
                                                        ";
                        }
                        // line 251
                        echo "                                                        ";
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 251);
                        echo "
                                                    </a>
                                                ";
                        // line 253
                        if ((twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 253) || twig_get_attribute($this->env, $this->source, $context["child"], "oct_pages", [], "any", false, false, false, 253))) {
                            // line 254
                            echo "                                                    <svg width=\"6\" height=\"11\" viewBox=\"0 0 6 11\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
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
                            // line 265
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 265);
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
                            // line 276
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 276));
                            foreach ($context['_seq'] as $context["_key"] => $context["ch"]) {
                                // line 277
                                echo "                                                                    <li class=\"ds-menu-catalog-item d-flex align-items-center justify-content-between fsz-14 dark-text\">
                                                                        <a href=\"";
                                // line 278
                                echo twig_get_attribute($this->env, $this->source, $context["ch"], "href", [], "any", false, false, false, 278);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["ch"], "name", [], "any", false, false, false, 278);
                                echo "</a>
                                                                        ";
                                // line 279
                                if ((twig_get_attribute($this->env, $this->source, $context["oct_category"], "view", [], "any", false, false, false, 279) == "1")) {
                                    // line 280
                                    echo "                                                                            ";
                                    if ((twig_get_attribute($this->env, $this->source, $context["ch"], "children", [], "any", false, false, false, 280) || twig_get_attribute($this->env, $this->source, $context["ch"], "oct_pages", [], "any", false, false, false, 280))) {
                                        // line 281
                                        echo "                                                                                <svg width=\"6\" height=\"11\" viewBox=\"0 0 6 11\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
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
                                        // line 293
                                        echo twig_get_attribute($this->env, $this->source, $context["ch"], "name", [], "any", false, false, false, 293);
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
                                        // line 304
                                        $context['_parent'] = $context;
                                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["ch"], "children", [], "any", false, false, false, 304));
                                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                                            // line 305
                                            echo "                                                                                                <li class=\"ds-menu-catalog-item d-flex align-items-center justify-content-between fsz-14 dark-text\">
                                                                                                    <a href=\"";
                                            // line 306
                                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 306);
                                            echo "\" class=\"flex-grow-1\">";
                                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 306);
                                            echo "</a>
                                                                                                </li>
                                                                                            ";
                                        }
                                        $_parent = $context['_parent'];
                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                        // line 309
                                        echo "                                                                                            ";
                                        if (twig_get_attribute($this->env, $this->source, $context["ch"], "oct_pages", [], "any", false, false, false, 309)) {
                                            // line 310
                                            echo "                                                                                                <li class=\"ds-menu-list-landings\">
                                                                                                    <ul>
                                                                                                        ";
                                            // line 312
                                            $context['_parent'] = $context;
                                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["ch"], "oct_pages", [], "any", false, false, false, 312));
                                            foreach ($context['_seq'] as $context["_key"] => $context["oct_page"]) {
                                                // line 313
                                                echo "                                                                                                            ";
                                                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 313))) {
                                                    // line 314
                                                    echo "                                                                                                            <li class=\"d-flex flex-column\">
                                                                                                                <span class=\"ds-megamenu-children-title fw-700 mb-2\">";
                                                    // line 315
                                                    echo (($__internal_compile_20 = twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_group", [], "any", false, false, false, 315)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20[($context["language_id"] ?? null)] ?? null) : null);
                                                    echo "</span>
                                                                                                                ";
                                                    // line 316
                                                    $context['_parent'] = $context;
                                                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 316));
                                                    foreach ($context['_seq'] as $context["_key"] => $context["page_link"]) {
                                                        // line 317
                                                        echo "                                                                                                                <a href=\"";
                                                        echo twig_get_attribute($this->env, $this->source, (($__internal_compile_21 = $context["page_link"]) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21[($context["language_id"] ?? null)] ?? null) : null), "link", [], "any", false, false, false, 317);
                                                        echo "\" title=\"";
                                                        echo twig_get_attribute($this->env, $this->source, (($__internal_compile_22 = $context["page_link"]) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 317);
                                                        echo "\" class=\"ds-menu-list-landings-link fsz-14\">";
                                                        echo twig_get_attribute($this->env, $this->source, (($__internal_compile_23 = $context["page_link"]) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 317);
                                                        echo "</a>
                                                                                                                ";
                                                    }
                                                    $_parent = $context['_parent'];
                                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page_link'], $context['_parent'], $context['loop']);
                                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                                    // line 319
                                                    echo "                                                                                                            </li>
                                                                                                            ";
                                                }
                                                // line 321
                                                echo "                                                                                                        ";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_page'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 322
                                            echo "                                                                                                    </ul>
                                                                                                </li>
                                                                                            ";
                                        }
                                        // line 325
                                        echo "                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            ";
                                    }
                                    // line 329
                                    echo "                                                                        ";
                                }
                                // line 330
                                echo "                                                                    </li>
                                                                ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ch'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 332
                            echo "                                                                ";
                            if ((twig_get_attribute($this->env, $this->source, $context["child"], "oct_pages", [], "any", false, false, false, 332) && (twig_get_attribute($this->env, $this->source, $context["oct_category"], "view", [], "any", false, false, false, 332) == "1"))) {
                                // line 333
                                echo "                                                                    <li class=\"ds-menu-list-landings\">
                                                                        <ul>
                                                                            ";
                                // line 335
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "oct_pages", [], "any", false, false, false, 335));
                                foreach ($context['_seq'] as $context["_key"] => $context["oct_page"]) {
                                    // line 336
                                    echo "                                                                                ";
                                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 336))) {
                                        // line 337
                                        echo "                                                                                <li class=\"d-flex flex-column mb-4\">
                                                                                    <span class=\"ds-megamenu-children-title fw-700 mb-2\">";
                                        // line 338
                                        echo (($__internal_compile_24 = twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_group", [], "any", false, false, false, 338)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24[($context["language_id"] ?? null)] ?? null) : null);
                                        echo "</span>
                                                                                    ";
                                        // line 339
                                        $context['_parent'] = $context;
                                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 339));
                                        foreach ($context['_seq'] as $context["_key"] => $context["page_link"]) {
                                            // line 340
                                            echo "                                                                                    <a href=\"";
                                            echo twig_get_attribute($this->env, $this->source, (($__internal_compile_25 = $context["page_link"]) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25[($context["language_id"] ?? null)] ?? null) : null), "link", [], "any", false, false, false, 340);
                                            echo "\" title=\"";
                                            echo twig_get_attribute($this->env, $this->source, (($__internal_compile_26 = $context["page_link"]) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 340);
                                            echo "\" class=\"ds-menu-list-landings-link fsz-14\">";
                                            echo twig_get_attribute($this->env, $this->source, (($__internal_compile_27 = $context["page_link"]) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 340);
                                            echo "</a>
                                                                                    ";
                                        }
                                        $_parent = $context['_parent'];
                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page_link'], $context['_parent'], $context['loop']);
                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                        // line 342
                                        echo "                                                                                </li>
                                                                                ";
                                    }
                                    // line 344
                                    echo "                                                                            ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_page'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 345
                                echo "                                                                        </ul>
                                                                    </li>
                                                                ";
                            }
                            // line 348
                            echo "                                                            </ul>
                                                        </div>
                                                    </div>
                                                ";
                        }
                        // line 352
                        echo "                                            </li>
                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 354
                    echo "                                    </ul>
                                </div>
                            </div>
                        ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 357
$context["oct_category"], "children", [], "any", false, false, false, 357) && (twig_get_attribute($this->env, $this->source, $context["oct_category"], "type", [], "any", false, false, false, 357) == "oct_blogcategory"))) {
                    // line 358
                    echo "                            <div class=\"ds-menu-catalog\">
                                <div class=\"ds-sidebar-header d-flex align-items-center justify-content-between py-2 px-3 d-xl-none\">
                                    <div class=\"ds-sidebar-header-back fw-700 dark-text fsz-16 d-flex align-items-center\" data-sidebar=\"catalogback\">
                                        <svg class=\"me-2\" width=\"18\" height=\"10\" viewBox=\"0 0 18 10\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                            <path d=\"M17.4979 4.9994C17.4979 5.4134 17.1619 5.7494 16.7479 5.7494H2.55895L5.27892 8.46937C5.57192 8.76237 5.57192 9.2374 5.27892 9.5304C5.13292 9.6764 4.94089 9.75037 4.74889 9.75037C4.55689 9.75037 4.36487 9.6774 4.21887 9.5304L0.218865 5.5304C0.149865 5.4614 0.095 5.37851 0.057 5.28651C-0.019 5.10351 -0.019 4.89651 0.057 4.71351C0.095 4.62151 0.149865 4.53837 0.218865 4.46937L4.21887 0.469369C4.51187 0.176369 4.9869 0.176369 5.2799 0.469369C5.5729 0.762369 5.5729 1.2374 5.2799 1.5304L2.55993 4.25037H16.7479C17.1619 4.24937 17.4979 4.5854 17.4979 4.9994Z\"
                                                fill=\"#00171F\" />
                                        </svg>
                                        ";
                    // line 365
                    echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "name", [], "any", false, false, false, 365);
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
                    // line 376
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_category"], "children", [], "any", false, false, false, 376));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 377
                        echo "                                        <li class=\"ds-menu-catalog-item d-flex align-items-center justify-content-between fsz-14 dark-text\">
                                            <a href=\"";
                        // line 378
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 378);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 378);
                        echo "</a>
                                            ";
                        // line 379
                        if (twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 379)) {
                            // line 380
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
                            // line 391
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 391);
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
                            // line 402
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 402));
                            foreach ($context['_seq'] as $context["_key"] => $context["ch"]) {
                                // line 403
                                echo "                                                            <li class=\"ds-menu-catalog-item d-flex align-items-center justify-content-between fsz-14 dark-text\">
                                                                <a href=\"";
                                // line 404
                                echo twig_get_attribute($this->env, $this->source, $context["ch"], "href", [], "any", false, false, false, 404);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["ch"], "name", [], "any", false, false, false, 404);
                                echo "</a>
                                                            </li>
                                                            ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ch'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 407
                            echo "                                                        </ul>
                                                    </div>
                                                </div>
                                            ";
                        }
                        // line 411
                        echo "                                        </li>
                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 413
                    echo "                                    </ul>
                                </div>
                            </div>
                        ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 416
$context["oct_category"], "children", [], "any", false, false, false, 416) && (twig_get_attribute($this->env, $this->source, $context["oct_category"], "type", [], "any", false, false, false, 416) == "manufacturer"))) {
                    // line 417
                    echo "                            <div class=\"ds-menu-catalog";
                    if (twig_get_attribute($this->env, $this->source, $context["oct_category"], "show_image", [], "any", false, false, false, 417)) {
                        echo " ds-menu-catalog-wide";
                    }
                    echo "\">
                                <div class=\"ds-sidebar-header d-flex align-items-center justify-content-between py-2 px-3 d-xl-none\">
                                    <div class=\"ds-sidebar-header-back fw-700 dark-text fsz-16 d-flex align-items-center\" data-sidebar=\"catalogback\">
                                        <svg class=\"me-2\" width=\"18\" height=\"10\" viewBox=\"0 0 18 10\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                            <path d=\"M17.4979 4.9994C17.4979 5.4134 17.1619 5.7494 16.7479 5.7494H2.55895L5.27892 8.46937C5.57192 8.76237 5.57192 9.2374 5.27892 9.5304C5.13292 9.6764 4.94089 9.75037 4.74889 9.75037C4.55689 9.75037 4.36487 9.6774 4.21887 9.5304L0.218865 5.5304C0.149865 5.4614 0.095 5.37851 0.057 5.28651C-0.019 5.10351 -0.019 4.89651 0.057 4.71351C0.095 4.62151 0.149865 4.53837 0.218865 4.46937L4.21887 0.469369C4.51187 0.176369 4.9869 0.176369 5.2799 0.469369C5.5729 0.762369 5.5729 1.2374 5.2799 1.5304L2.55993 4.25037H16.7479C17.1619 4.24937 17.4979 4.5854 17.4979 4.9994Z\"
                                                fill=\"#00171F\" />
                                        </svg>
                                        ";
                    // line 424
                    echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "name", [], "any", false, false, false, 424);
                    echo "
                                    </div>
                                    <button type=\"button\" class=\"button button-light br-10 ds-sidebar-close\" data-sidebar=\"catalogclose\" aria-label=\"Close\">
                                        <svg class=\"me-0\" width=\"12\" height=\"12\" viewBox=\"0 0 12 12\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                            <path d=\"M11.8029 10.8616C12.0633 11.122 12.0633 11.5442 11.8029 11.8046C11.6731 11.9344 11.5025 12.0001 11.3319 12.0001C11.1612 12.0001 10.9906 11.9352 10.8608 11.8046L5.99911 6.94288L1.13743 11.8046C1.00766 11.9344 0.837017 12.0001 0.666369 12.0001C0.495722 12.0001 0.325075 11.9352 0.195312 11.8046C-0.0651039 11.5442 -0.0651039 11.122 0.195312 10.8616L5.057 5.9999L0.195312 1.13824C-0.0651039 0.877827 -0.0651039 0.45562 0.195312 0.195205C0.455727 -0.0652107 0.877907 -0.0652107 1.13832 0.195205L6.00001 5.05692L10.8617 0.195205C11.1221 -0.0652107 11.5443 -0.0652107 11.8047 0.195205C12.0651 0.45562 12.0651 0.877827 11.8047 1.13824L6.943 5.9999L11.8029 10.8616Z\"
                                                fill=\"#00A8E8\" />
                                        </svg>
                                    </button>
                                </div>
                                ";
                    // line 433
                    if (twig_get_attribute($this->env, $this->source, $context["oct_category"], "show_image", [], "any", false, false, false, 433)) {
                        // line 434
                        echo "                                    <div class=\"ds-megamenu-children ds-megamenu-children-manufacturers flex-grow-1 d-flex flex-wrap flex-column flex-xl-row dark-text gap-xl-3\">
                                        ";
                        // line 435
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_category"], "children", [], "any", false, false, false, 435));
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 436
                            echo "                                            <div class=\"ds-megamenu-children-item text-xl-center\">
                                                <a href=\"";
                            // line 437
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 437);
                            echo "\" title=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 437);
                            echo "\" class=\"ds-megamenu-children-title fw-700 d-flex flex-xl-column align-items-center px-3 py-2 p-xl-2 fsz-14\">
                                                    ";
                            // line 438
                            if (twig_get_attribute($this->env, $this->source, $context["child"], "oct_image", [], "any", false, false, false, 438)) {
                                // line 439
                                echo "                                                        <img class=\"my-xl-2 me-3 mx-xl-auto\" src=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "oct_image", [], "any", false, false, false, 439);
                                echo "\" alt=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "name", [], "any", false, false, false, 439);
                                echo "\" width=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "subcat_image_width", [], "any", false, false, false, 439);
                                echo "\" height=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "subcat_image_height", [], "any", false, false, false, 439);
                                echo "\" loading=\"lazy\" />
                                                    ";
                            }
                            // line 441
                            echo "                                                    <span class=\"flex-grow-1\">";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 441);
                            echo "</span>
                                                </a>
                                            </div>
                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 445
                        echo "                                    </div>
                                ";
                    } else {
                        // line 447
                        echo "                                    <div class=\"ds-menu-catalog-inner\">
                                        <ul class=\"ds-menu-catalog-items\">
                                            ";
                        // line 449
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_category"], "children", [], "any", false, false, false, 449));
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 450
                            echo "                                                <li class=\"ds-menu-catalog-item d-flex align-items-center justify-content-between fsz-14 dark-text\">
                                                    <a href=\"";
                            // line 451
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 451);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 451);
                            echo "</a>
                                                </li>
                                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 454
                        echo "                                        </ul>
                                    </div>
                                ";
                    }
                    // line 457
                    echo "                            </div>
                        ";
                }
                // line 459
                echo "                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 461
            echo "            </ul>
        </nav>
    </div>
";
        } else {
            // line 465
            echo "    <div id=\"mobileMenuBox\" class=\"ds-menu-catalog ds-menu-main-catalog d-xl-none\">
        <div class=\"ds-sidebar-header d-flex align-items-center justify-content-between py-2 px-3\">
\t\t\t<div class=\"fw-700 dark-text fsz-16\">
\t\t\t\t";
            // line 468
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
        <nav class=\"ds-menu-catalog-inner\">
            <ul class=\"ds-menu-catalog-items br-4\">
            
            </ul>
        </nav>
    </div>
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "oct_deals/template/octemplates/menu/oct_menu.twig";
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
        return array (  1117 => 468,  1112 => 465,  1106 => 461,  1099 => 459,  1095 => 457,  1090 => 454,  1079 => 451,  1076 => 450,  1072 => 449,  1068 => 447,  1064 => 445,  1053 => 441,  1041 => 439,  1039 => 438,  1033 => 437,  1030 => 436,  1026 => 435,  1023 => 434,  1021 => 433,  1009 => 424,  996 => 417,  994 => 416,  989 => 413,  982 => 411,  976 => 407,  965 => 404,  962 => 403,  958 => 402,  944 => 391,  931 => 380,  929 => 379,  923 => 378,  920 => 377,  916 => 376,  902 => 365,  893 => 358,  891 => 357,  886 => 354,  879 => 352,  873 => 348,  868 => 345,  862 => 344,  858 => 342,  845 => 340,  841 => 339,  837 => 338,  834 => 337,  831 => 336,  827 => 335,  823 => 333,  820 => 332,  813 => 330,  810 => 329,  804 => 325,  799 => 322,  793 => 321,  789 => 319,  776 => 317,  772 => 316,  768 => 315,  765 => 314,  762 => 313,  758 => 312,  754 => 310,  751 => 309,  740 => 306,  737 => 305,  733 => 304,  719 => 293,  705 => 281,  702 => 280,  700 => 279,  694 => 278,  691 => 277,  687 => 276,  673 => 265,  660 => 254,  658 => 253,  652 => 251,  640 => 249,  638 => 248,  632 => 247,  629 => 246,  625 => 245,  622 => 244,  618 => 242,  612 => 241,  604 => 238,  601 => 237,  588 => 235,  584 => 234,  579 => 233,  577 => 232,  573 => 230,  568 => 229,  564 => 228,  561 => 227,  559 => 226,  546 => 216,  534 => 209,  531 => 208,  528 => 207,  522 => 203,  517 => 200,  511 => 199,  507 => 197,  494 => 195,  490 => 194,  486 => 193,  483 => 192,  480 => 191,  476 => 190,  472 => 188,  469 => 187,  462 => 185,  457 => 182,  453 => 180,  447 => 179,  443 => 177,  430 => 175,  426 => 174,  422 => 173,  419 => 172,  416 => 171,  412 => 170,  409 => 169,  407 => 168,  404 => 167,  399 => 164,  393 => 163,  389 => 161,  376 => 159,  372 => 158,  368 => 157,  365 => 156,  362 => 155,  358 => 154,  354 => 152,  351 => 151,  344 => 149,  341 => 148,  335 => 144,  324 => 141,  321 => 140,  317 => 139,  303 => 128,  289 => 116,  286 => 115,  284 => 114,  278 => 113,  275 => 112,  271 => 111,  257 => 100,  244 => 89,  242 => 88,  237 => 86,  231 => 85,  228 => 84,  224 => 83,  221 => 82,  217 => 80,  210 => 78,  206 => 76,  193 => 74,  189 => 73,  185 => 72,  182 => 71,  180 => 70,  177 => 69,  173 => 68,  170 => 67,  168 => 66,  155 => 56,  142 => 49,  139 => 48,  132 => 43,  129 => 42,  126 => 41,  120 => 39,  110 => 37,  107 => 36,  103 => 34,  97 => 32,  87 => 30,  85 => 29,  81 => 28,  78 => 27,  76 => 26,  73 => 25,  69 => 24,  55 => 13,  47 => 8,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oct_deals/template/octemplates/menu/oct_menu.twig", "");
    }
}
