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

/* oct_deals/template/product/product.twig */
class __TwigTemplate_ef53df6117dd7ac0d89aff44959c11868d6fb126dbf3814f463ca76bd6d6dec9 extends Template
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
<div id=\"product-product\" class=\"container-fluid container-xl flex-grow-1\">
 \t<nav aria-label=\"breadcrumb\">
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
        <div class=\"d-flex justify-content-between align-items-start align-items-md-center secondary-text fsz-12\">
            <div class=\"ds-product-top-info d-flex flex-column flex-md-row align-items-md-center\">
                ";
        // line 48
        if (($context["manufacturer"] ?? null)) {
            // line 49
            echo "                    <span>";
            echo ($context["text_manufacturer"] ?? null);
            echo " <a href=\"";
            echo ($context["manufacturers"] ?? null);
            echo "\" class=\"blue-link\">";
            echo ($context["manufacturer"] ?? null);
            echo "</a></span>
                ";
        }
        // line 51
        echo "                ";
        if ((twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "product_model", [], "any", true, true, false, 51) && (twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "product_model", [], "any", false, false, false, 51) == "on"))) {
            // line 52
            echo "                    <span>";
            echo ($context["text_model"] ?? null);
            echo " <span class=\"light-text\">";
            echo ($context["model"] ?? null);
            echo "</span></span>
                ";
        }
        // line 54
        echo "                ";
        if ((($context["oct_product_sku_show"] ?? null) && ($context["sku"] ?? null))) {
            // line 55
            echo "                    <span>";
            echo ($context["text_sku"] ?? null);
            echo " <span class=\"light-text\">";
            echo ($context["sku"] ?? null);
            echo "</span></span>
                ";
        }
        // line 57
        echo "                ";
        if ((($context["oct_product_upc_show"] ?? null) && ($context["upc"] ?? null))) {
            // line 58
            echo "                    <span>";
            echo ($context["text_upc"] ?? null);
            echo " <span class=\"light-text\">";
            echo ($context["upc"] ?? null);
            echo "</span></span>
                ";
        }
        // line 60
        echo "                ";
        if ((($context["oct_product_ean_show"] ?? null) && ($context["ean"] ?? null))) {
            // line 61
            echo "                    <span>";
            echo ($context["text_ean"] ?? null);
            echo " <span class=\"light-text\">";
            echo ($context["ean"] ?? null);
            echo "</span></span>
                ";
        }
        // line 63
        echo "                ";
        if ((($context["oct_product_jan_show"] ?? null) && ($context["jan"] ?? null))) {
            // line 64
            echo "                    <span>";
            echo ($context["text_jan"] ?? null);
            echo " <span class=\"light-text\">";
            echo ($context["jan"] ?? null);
            echo "</span></span>
                ";
        }
        // line 66
        echo "                ";
        if ((($context["oct_product_isbn_show"] ?? null) && ($context["isbn"] ?? null))) {
            // line 67
            echo "                    <span>";
            echo ($context["text_isbn"] ?? null);
            echo " <span class=\"light-text\">";
            echo ($context["isbn"] ?? null);
            echo "</span></span>
                ";
        }
        // line 69
        echo "                ";
        if ((($context["oct_product_mpn_show"] ?? null) && ($context["mpn"] ?? null))) {
            // line 70
            echo "                    <span>";
            echo ($context["text_mpn"] ?? null);
            echo " <span class=\"light-text\">";
            echo ($context["mpn"] ?? null);
            echo "</span></span>
                ";
        }
        // line 72
        echo "            </div>
            ";
        // line 73
        if (($context["review_status"] ?? null)) {
            // line 74
            echo "                <div class=\"ds-module-rating d-flex align-items-center\">
                    <div class=\"ds-module-rating-stars d-flex align-items-center me-2\" data-rating=\"";
            // line 75
            echo ($context["oct_rating"] ?? null);
            echo "\">
                        ";
            // line 76
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 77
                echo "                            <span class=\"ds-module-rating-star\"><span class=\"ds-module-rating-star-inner\"></span></span>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "                    </div>
                    <div class=\"ds-module-reviews d-flex align-items-center\">
                        <svg width=\"13\" height=\"12\" viewBox=\"0 0 13 12\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                            <g>
                                <path d=\"M1.88345 11.5383C1.82835 11.5383 1.77318 11.5276 1.72036 11.506C1.5613 11.4401 1.45741 11.2844 1.45741 11.1123V2.5916C1.45741 1.21806 2.21405 0.461426 3.58759 0.461426H10.4042C11.7777 0.461426 12.5343 1.21806 12.5343 2.5916V7.70403C12.5343 9.07757 11.7777 9.83421 10.4042 9.83421H3.76427L2.18508 11.4134C2.10329 11.4952 1.99422 11.5383 1.88345 11.5383ZM3.58759 1.3135C2.69178 1.3135 2.30948 1.69579 2.30948 2.5916V10.0836L3.28651 9.10653C3.3666 9.02644 3.47455 8.98158 3.58759 8.98158H10.4042C11.3 8.98158 11.6823 8.59929 11.6823 7.70347V2.59105C11.6823 1.69524 11.3 1.31294 10.4042 1.31294H3.58759V1.3135ZM9.6941 4.01172C9.6941 3.77655 9.50323 3.58569 9.26806 3.58569H4.72369C4.48851 3.58569 4.29765 3.77655 4.29765 4.01172C4.29765 4.24689 4.48851 4.43776 4.72369 4.43776H9.26806C9.50323 4.43776 9.6941 4.24689 9.6941 4.01172ZM7.98996 6.28391C7.98996 6.04874 7.79909 5.85788 7.56392 5.85788H4.72369C4.48851 5.85788 4.29765 6.04874 4.29765 6.28391C4.29765 6.51908 4.48851 6.70995 4.72369 6.70995H7.56392C7.79909 6.70995 7.98996 6.51908 7.98996 6.28391Z\" fill=\"#9CA3AF\"></path>
                            </g>
                        </svg>
                        <span class=\"blue-link ds-scroll-to-reviews\">";
            // line 86
            echo ($context["total_reviews"] ?? null);
            echo "</span>
                    </div>
                </div>
            ";
        }
        // line 90
        echo "        </div>
        <div class=\"ds-product-tabs sticky-top mt-3\">
            <div class=\"container-fluid container-xl\">
                <div id=\"oct-tabs\" class=\"ds-product-tabs-box d-flex align-items-stretch w-100\">
                    <div data-tab-target=\".ds-product-tab-main-content\" class=\"ds-product-tabs-item d-flex align-items-center justify-content-center br-4 active\">
                        ";
        // line 95
        echo ($context["oct_product_maintab"] ?? null);
        echo "
                    </div>
                    ";
        // line 97
        if (($context["description"] ?? null)) {
            // line 98
            echo "                    <div data-tab-target=\".ds-product-description\" class=\"ds-product-tabs-item d-flex align-items-center justify-content-center br-4\">
                        ";
            // line 99
            echo ($context["oct_product_description"] ?? null);
            echo "
                    </div>
                    ";
        }
        // line 102
        echo "                    ";
        if (($context["attribute_groups"] ?? null)) {
            // line 103
            echo "                    <div data-tab-target=\".ds-product-attributes\" class=\"ds-product-tabs-item d-flex align-items-center justify-content-center br-4\">
                        ";
            // line 104
            echo ($context["tab_attribute"] ?? null);
            echo "
                    </div>
                    ";
        }
        // line 107
        echo "                    ";
        if (($context["review_status"] ?? null)) {
            // line 108
            echo "                    <div data-tab-target=\".ds-product-reviews\" class=\"ds-product-tabs-item ds-product-review-toggle d-flex align-items-center justify-content-center br-4\">
                        ";
            // line 109
            echo ($context["oct_product_tab_reviews"] ?? null);
            echo "
                        <span class=\"ds-product-tabs-badge d-grid fsz-10 ms-2\">";
            // line 110
            echo ($context["total_reviews"] ?? null);
            echo "</span>
                    </div>
                    ";
        }
        // line 113
        echo "                    ";
        if (($context["oct_product_faq"] ?? null)) {
            // line 114
            echo "                    <div data-tab-target=\".ds-product-faq\" class=\"ds-product-tabs-item d-flex align-items-center justify-content-center br-4\">
                        ";
            // line 115
            echo ($context["tab_oct_faq"] ?? null);
            echo "
                    </div>
                    ";
        }
        // line 118
        echo "                    ";
        if (((twig_get_attribute($this->env, $this->source, ($context["dop_tab"] ?? null), "title", [], "any", true, true, false, 118) && twig_get_attribute($this->env, $this->source, ($context["dop_tab"] ?? null), "title", [], "any", false, false, false, 118)) && (twig_get_attribute($this->env, $this->source, ($context["dop_tab"] ?? null), "text", [], "any", true, true, false, 118) && twig_get_attribute($this->env, $this->source, ($context["dop_tab"] ?? null), "text", [], "any", false, false, false, 118)))) {
            // line 119
            echo "                    <div data-tab-target=\".ds-product-dop_tab\" class=\"ds-product-tabs-item d-flex align-items-center justify-content-center br-4\">
                        ";
            // line 120
            echo twig_get_attribute($this->env, $this->source, ($context["dop_tab"] ?? null), "title", [], "any", false, false, false, 120);
            echo "
                    </div>
                    ";
        }
        // line 123
        echo "                    ";
        if (($context["oct_product_extra_tabs"] ?? null)) {
            // line 124
            echo "                        ";
            $context["key"] = 0;
            // line 125
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["oct_product_extra_tabs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["extra_tab"]) {
                // line 126
                echo "                            ";
                $context["key"] = (($context["key"] ?? null) + 1);
                // line 127
                echo "                            <div data-tab-target=\".ds-product_extra_tab-";
                echo ($context["key"] ?? null);
                echo "\" class=\"ds-product-tabs-item d-flex align-items-center justify-content-center br-4\">
                                ";
                // line 128
                echo twig_get_attribute($this->env, $this->source, $context["extra_tab"], "title", [], "any", false, false, false, 128);
                echo "
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extra_tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 131
            echo "                    ";
        }
        // line 132
        echo "                    ";
        if (($context["products"] ?? null)) {
            // line 133
            echo "                        <div data-tab-target=\"#ds-related-products_0\" class=\"ds-product-tabs-item d-flex align-items-center justify-content-center br-4\">
                            ";
            // line 134
            echo ($context["oct_related_products"] ?? null);
            echo "
                        </div>
                    ";
        }
        // line 137
        echo "                </div>
                <script>
                    window.addEventListener('DOMContentLoaded', () => {
                        octProductTabs();
                    });
                </script>
            </div>
        </div>

        <div id=\"content\" class=\"ds-product-tab-main-content ds-product-tab-content\">
            <div class=\"ds-product-main-content content-block d-flex flex-column flex-md-row p-xl-4 py-xl-0\">
                <div id=\"productImages\" class=\"ds-product-images position-relative pe-md-3 pe-xl-4 me-md-3 me-xl-4\">
                    <div class=\"sticky-md-top ds-sticky-column z-3 pt-xl-4 pb-3\">
                        ";
        // line 150
        if (($context["oct_product_stickers"] ?? null)) {
            // line 151
            echo "                            <div class=\"ds-product-stickers d-flex align-items-center justify-content-between mb-3\">
                                <div class=\"ds-module-stickers ds-module-sticker-images d-flex align-items-center\">
                                    ";
            // line 153
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["oct_product_stickers"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["oct_sticker"]) {
                // line 154
                echo "                                        ";
                if (( !twig_test_empty($context["oct_sticker"]) && is_iterable($context["oct_sticker"]))) {
                    // line 155
                    echo "                                            <span class=\"ds-module-sticker-image\">
                                                <img src=\"";
                    // line 156
                    echo twig_get_attribute($this->env, $this->source, $context["oct_sticker"], "image", [], "any", false, false, false, 156);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["oct_sticker"], "title", [], "any", false, false, false, 156);
                    echo "\" data-bs-html=\"true\" data-bs-placement=\"bottom\" data-bs-toggle=\"popover\" data-bs-trigger=\"hover\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["oct_sticker"], "title", [], "any", false, false, false, 156);
                    echo "\" data-bs-content=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["oct_sticker"], "description", [], "any", false, false, false, 156);
                    echo "\" width=\"20\" height=\"20\" />
                                            </span>
                                        ";
                } else {
                    // line 159
                    echo "                                            <div class=\"ds-module-sticker br-12 fw-500 ds-module-sticker-";
                    echo $context["key"];
                    echo "\">
                                                ";
                    // line 160
                    echo $context["oct_sticker"];
                    echo "
                                            </div>
                                        ";
                }
                // line 163
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['oct_sticker'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 164
            echo "                                </div>
                            </div>
                        ";
        }
        // line 167
        echo "                        ";
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 168
            echo "                            <div class=\"position-relative pb-1\">
                                ";
            // line 169
            if (($context["images"] ?? null)) {
                // line 170
                echo "                                    <div class=\"ds-product-images-additional d-none d-xl-flex position-absolute br-4 overflow-hidden\">
                                        <div class=\"swiper ds-product-images-additional-swiper br-4\">
                                            <div class=\"button button-light br-4 p-0 swiper-slider-btn swiper-slider-btn-prev\">
                                                <svg class=\"me-0\" xmlns=\"http://www.w3.org/2000/svg\" width=\"5\" height=\"8\" viewBox=\"0 0 5 8\" fill=\"none\">
                                                    <path d=\"M0.498016 3.94727C0.498016 3.76808 0.563326 3.58886 0.69332 3.45237L3.35986 0.652529C3.62052 0.378844 4.04187 0.378844 4.30253 0.652529C4.56318 0.926214 4.56318 1.36863 4.30253 1.64232L2.10732 3.94727L4.30253 6.25221C4.56318 6.5259 4.56318 6.96832 4.30253 7.242C4.04187 7.51569 3.62052 7.51569 3.35986 7.242L0.69332 4.44216C0.563326 4.30567 0.498016 4.12646 0.498016 3.94727Z\" fill=\"#00171F\"/>
                                                </svg>
                                            </div>
                                            <div class=\"swiper-wrapper\">
                                                ";
                // line 178
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                foreach ($context['_seq'] as $context["key"] => $context["image"]) {
                    // line 179
                    echo "                                                    ";
                    $context["i"] = ($context["key"] + 1);
                    // line 180
                    echo "                                                    <div class=\"swiper-slide overflow-hidden\">
                                                        <span class=\"ds-product-images-additional-item d-block\" data-href=\"";
                    // line 181
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 181);
                    echo "\">
                                                            <img src=\"";
                    // line 182
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 182);
                    echo "\" title=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" alt=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" width=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "images_width", [], "any", false, false, false, 182);
                    echo "\" height=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "images_height", [], "any", false, false, false, 182);
                    echo "\" />
                                                        </span>
                                                    </div>
                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 186
                echo "                                            </div>
                                            <div class=\"button button-light br-4 p-0 swiper-slider-btn swiper-slider-btn-next\">
                                                <svg class=\"me-0\" xmlns=\"http://www.w3.org/2000/svg\" width=\"5\" height=\"8\" viewBox=\"0 0 5 8\" fill=\"none\">
                                                    <path d=\"M4.49802 3.94727C4.49802 4.12646 4.43271 4.30567 4.30271 4.44216L1.63617 7.242C1.37552 7.51569 0.954162 7.51569 0.693507 7.242C0.432853 6.96832 0.432853 6.5259 0.693507 6.25221L2.88872 3.94727L0.693507 1.64232C0.432853 1.36863 0.432853 0.926214 0.693507 0.652529C0.954162 0.378845 1.37552 0.378845 1.63617 0.652529L4.30271 3.45237C4.43271 3.58886 4.49802 3.76808 4.49802 3.94727Z\" fill=\"#00171F\"/>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                ";
            }
            // line 195
            echo "                                ";
            if (($context["thumb"] ?? null)) {
                // line 196
                echo "                                    ";
                $context["totalSlides"] = (1 + twig_length_filter($this->env, ($context["images"] ?? null)));
                // line 197
                echo "                                    <div class=\"ds-product-images-main";
                if ((($context["totalSlides"] ?? null) > 1)) {
                    echo " ds-product-images-main--multiple";
                }
                echo "\">
                                        <div class=\"swiper ds-product-images-main-swiper\">
                                            <div class=\"swiper-wrapper mb-5 mb-xl-0\">
                                                <div class=\"ds-product-images-slide swiper-slide\">
                                                    <span data-fancybox=\"gallery\" data-src=\"";
                // line 201
                echo ($context["popup"] ?? null);
                echo "\" class=\"oct-gallery d-block\">
                                                        <img src=\"";
                // line 202
                echo ($context["thumb"] ?? null);
                echo "\" class=\"d-block mx-auto br-4\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" width=\"";
                echo ($context["thumb_width"] ?? null);
                echo "\" height=\"";
                echo ($context["thumb_height"] ?? null);
                echo "\" />
                                                    </span>
                                                </div>
                                                ";
                // line 205
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
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
                foreach ($context['_seq'] as $context["key"] => $context["image"]) {
                    // line 206
                    echo "                                                    ";
                    $context["i"] = ($context["key"] + 1);
                    // line 207
                    echo "                                                    ";
                    if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 207) > 0)) {
                        // line 208
                        echo "                                                        <div class=\"ds-product-images-slide swiper-slide\">
                                                            <span data-fancybox=\"gallery\" data-src=\"";
                        // line 209
                        echo twig_get_attribute($this->env, $this->source, $context["image"], "popup_fancy", [], "any", false, false, false, 209);
                        echo "\" class=\"oct-gallery d-block\">
                                                                <img src=\"";
                        // line 210
                        echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 210);
                        echo "\" class=\"d-block mx-auto br-4\" alt=\"";
                        echo ($context["heading_title"] ?? null);
                        echo "\" title=\"";
                        echo ($context["heading_title"] ?? null);
                        echo "\" width=\"";
                        echo ($context["thumb_width"] ?? null);
                        echo "\" height=\"";
                        echo ($context["thumb_height"] ?? null);
                        echo "\" loading=\"lazy\" />
                                                            </span>
                                                        </div>
                                                    ";
                    }
                    // line 214
                    echo "                                                ";
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
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 215
                echo "                                            </div>
                                            <div class=\"swiper-pagination\"></div>
                                        </div>
                                    </div>
                                ";
            }
            // line 220
            echo "                            </div>
                            <script>

                                window.addEventListener('DOMContentLoaded', () => {

                                    function sliderProducts() {
                                        var sliderProducts = \$('.ds-product-images-main .oct-gallery');

                                        sliderProducts.on('click', function(e) {
                                            e.preventDefault();

                                            var totalSlides = \$(this).parents('.ds-product-images-main').find('.ds-product-images-slide').length,
                                            dataIndex = \$(this).parents('.ds-product-images-slide').data('swiper-slide-index');

                                            \$.fancybox.open(sliderProducts, {backFocus: false, hideScrollbar: false, loop : true}, dataIndex);

                                            return false;
                                        });

                                        var additionalImagesCount = \$('.ds-product-images-additional .swiper-slide').length;

                                        if (additionalImagesCount < 6) {
                                            \$('.ds-product-images-additional .swiper-slider-btn').hide();
                                        }

                                        \$(document).on('click', '.ds-product-images-additional .swiper-slider-btn-next', function(){
                                            mainImagesSwiper.slideNext();
                                        });

                                        \$(document).on('click', '.ds-product-images-additional .swiper-slider-btn-prev', function(){
                                            mainImagesSwiper.slidePrev();
                                        });
                                    }

                                    sliderProducts();

                                    ";
            // line 256
            if (($context["images"] ?? null)) {
                // line 257
                echo "                                        var additionalImagesSwiper = new Swiper(\".ds-product-images-additional-swiper\", {
                                            direction: 'vertical',
                                            slidesPerView: 6,
                                            slideToClickedSlide: true,
                                            spaceBetween: 16,
                                            speed: 500,
                                            breakpoints: {
                                                1200: {
                                                    navigation: {
                                                        nextEl: '.swiper-slider-btn-next',
                                                        prevEl: '.swiper-slider-btn-prev',
                                                        enabled: true
                                                    }
                                                }
                                            }
                                        });
                                        
                                        var mainImagesSwiper = new Swiper('.ds-product-images-main-swiper', {
                                            loop: true,
                                            spaceBetween: 0,
                                            slidesPerView: 1,
                                            slideToClickedSlide: true,
                                            speed: 500,
                                            pagination: {
                                                el: '.swiper-pagination',
                                                clickable: true,
                                            },
                                            navigation: {
                                                enabled: false
                                            },
                                            thumbs: {
                                                swiper: additionalImagesSwiper,
                                            },
                                            breakpoints: {
                                                1200: {
                                                    pagination: {
                                                        enabled: false
                                                    }
                                                }
                                            }
                                        });
                                    ";
            } else {
                // line 299
                echo "                                        var mainImagesSwiper = new Swiper('.ds-product-images-main-swiper', {
                                            spaceBetween: 0,
                                            slidesPerView: 1,
                                            pagination: {
                                                enabled: false
                                            },
                                            navigation: {
                                                enabled: false
                                            }
                                        });
                                    ";
            }
            // line 310
            echo "
                                    ";
            // line 311
            if ((array_key_exists("oct_product_main_image_option_status", $context) && ($context["oct_product_main_image_option_status"] ?? null))) {
                // line 312
                echo "                                        \$(document).on('change', '#ds-product-options .radio', function() {

                                            \$.ajax({
                                            url: 'index.php?route=product/product/getPImages&product_id=";
                // line 315
                echo ($context["product_id"] ?? null);
                echo "',
                                            type: 'post',
                                            data: \$('#ds-product-options input[type=\\'radio\\']:checked'),
                                            dataType: 'json',
                                            success: function(json) {

                                                if (json['images']) {
                                                    mainImagesSwiper.removeAllSlides();
                                                    additionalImagesSwiper.removeAllSlides();
                                                    \$.fancybox.destroy();
                                                    
                                                    const obj = JSON.parse(JSON.stringify(json['images']));
                                                    
                                                    Object.keys(obj).forEach(el => {
                                                        const popupImage = obj[el].popup,
                                                            thumbImage = obj[el].thumb,
                                                            sliderImage = obj[el].thumb_slider,
                                                            width = obj[el].width,
                                                            height = obj[el].height,
                                                            thumbHeight = obj[el].thumb_height,
                                                            thumbWidth = obj[el].thumb_width;
                                                        
                                                        additionalImagesSwiper.appendSlide(`
                                                            <span class=\"ds-product-images-additional-item swiper-slide d-block\" href=\"\${thumbImage}\" data-href=\"\${thumbImage}\">
                                                                <img src=\"\${thumbImage}\" width=\"\${thumbWidth}\" height=\"\${thumbHeight}\" />
                                                            </span>
                                                        `);
                                                        
                                                        mainImagesSwiper.appendSlide(`
                                                            <div class=\"ds-product-images-slide swiper-slide ds-product-images-slide-opt\">
                                                                <span data-fancybox=\"gallery\" data-src=\"\${popupImage}\" class=\"oct-gallery d-block\">
                                                                    <img src=\"\${sliderImage}\" width=\"\${width}\" height=\"\${height}\" class=\"d-block mx-auto br-4\" />
                                                                </span>
                                                            </div>
                                                        `);
                                                    });

                                                    mainImagesSwiper.update();
                                                    additionalImagesSwiper.update();

                                                    var additionalImagesCount = \$('.ds-product-images-additional .swiper-slide').length;

                                                    if (additionalImagesCount < 6) {
                                                        \$('.ds-product-images-additional .swiper-slider-btn').hide();
                                                    } else {
                                                        \$('.ds-product-images-additional .swiper-slider-btn').show();
                                                    }
                                                    
                                                    ";
                // line 363
                if ((twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "product_zoom", [], "any", true, true, false, 363) && twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "product_zoom", [], "any", false, false, false, 363))) {
                    // line 364
                    echo "                                                        \$(\".oct-gallery\").zoom();
                                                    ";
                }
                // line 366
                echo "                                                    
                                                    \$(document).on('click', '.ds-product-images-slide .oct-gallery', function(e) {
                                                        e.preventDefault();
                                                        \$.fancybox.destroy();

                                                        const \$slide = \$(this).closest('.ds-product-images-slide-opt');
                                                        const \$allSlides = \$('.ds-product-images-slide-opt:not(.swiper-slide-duplicate)');
                                                        const slideIndex = \$(this).parents('.ds-product-images-slide-opt').data('swiper-slide-index');

                                                        \$.fancybox.open(
                                                            \$allSlides.find('.oct-gallery'),
                                                            { backFocus: false, hideScrollbar: false, loop: true },
                                                            slideIndex
                                                        );
                                                    });

                                                }
                                            }
                                            });
                                        });
                                    ";
            }
            // line 387
            echo "
                                    stickyColumn();
                                });
                            </script>
                        ";
        }
        // line 392
        echo "                    </div>
                </div>
                <div id=\"product\" class=\"ds-product-main pt-xl-4\">
                    <div class=\"d-flex align-items-stretch justify-content-between mb-3\">
                        <div class=\"ds-product-main-stock d-flex align-items-center justify-content-center ";
        // line 396
        if (($context["out_of_stock"] ?? null)) {
            echo "red";
        } else {
            echo "green";
        }
        echo "-text fw-500 br-7\">
                            ";
        // line 397
        if ( !($context["out_of_stock"] ?? null)) {
            // line 398
            echo "                                <svg class=\"me-2\" xmlns=\"http://www.w3.org/2000/svg\" width=\"10\" height=\"10\" viewBox=\"0 0 10 10\" fill=\"none\">
                                    <path
                                        d=\"M5 -0.00305176C2.24279 -0.00305176 0 2.2402 0 4.99695C0 7.75369 2.24279 9.99695 5 9.99695C7.75721 9.99695 10 7.75369 10 4.99695C10 2.2402 7.75721 -0.00305176 5 -0.00305176ZM5 9.29927C2.62744 9.29927 0.697674 7.36951 0.697674 4.99695C0.697674 2.62439 2.62744 0.694623 5 0.694623C7.37256 0.694623 9.30233 2.62439 9.30233 4.99695C9.30233 7.36951 7.37256 9.29927 5 9.29927ZM6.87442 3.66485C7.0107 3.80113 7.0107 4.02207 6.87442 4.15835L4.70372 6.32905C4.63582 6.39696 4.54652 6.43136 4.45721 6.43136C4.36791 6.43136 4.27861 6.39742 4.2107 6.32905L3.12558 5.24393C2.9893 5.10765 2.9893 4.8867 3.12558 4.75042C3.26186 4.61414 3.48279 4.61414 3.61907 4.75042L4.45768 5.58905L6.3814 3.66533C6.51768 3.52905 6.73814 3.52904 6.87442 3.66485Z\"
                                        fill=\"#59AA45\" />
                                </svg>
                            ";
        }
        // line 404
        echo "                            ";
        if ((($context["oct_stock_display"] ?? null) &&  !($context["out_of_stock"] ?? null))) {
            echo " ";
            echo ($context["oct_product_config_stock_display"] ?? null);
            echo " ";
        }
        echo ($context["stock"] ?? null);
        echo "
                        </div>
                        <div class=\"ds-product-wishlist-compare d-flex align-items-center\">
                            <button type=\"button\" class=\"ds-product-wishlist br-7 button button-light ds-wishlist-btn\" onclick=\"wishlist.add('";
        // line 407
        echo ($context["product_id"] ?? null);
        echo "');\" title=\"";
        echo ($context["button_wishlist"] ?? null);
        echo "\" aria-label=\"Wishlist button\">
                                <svg class=\"me-0\" xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"13\" viewBox=\"0 0 14 13\" fill=\"none\">
                                    <path d=\"M6.99998 12.497C6.92932 12.497 6.85863 12.4823 6.79263 12.4523C6.57463 12.353 1.44399 9.97363 0.621322 5.7363C0.303322 4.09697 0.622659 2.49762 1.47533 1.45896C2.16533 0.617625 3.1573 0.17028 4.34463 0.16428C4.35063 0.16428 4.35663 0.16428 4.36196 0.16428C5.71663 0.16428 6.54267 0.935633 6.99933 1.5923C7.458 0.932966 8.29062 0.15828 9.65396 0.16428C10.842 0.17028 11.8346 0.617625 12.5253 1.45896C13.3766 2.49696 13.6953 4.09629 13.3766 5.73695C12.5553 9.97429 7.42396 12.3543 7.20596 12.453C7.14129 12.4823 7.07065 12.497 6.99998 12.497ZM4.36131 1.16363C4.35731 1.16363 4.354 1.16363 4.35 1.16363C3.458 1.16763 2.75135 1.48028 2.24868 2.09295C1.58268 2.90428 1.342 4.19496 1.60334 5.54563C2.24 8.82829 6.06198 10.9616 6.99998 11.4403C7.93798 10.9616 11.76 8.82829 12.396 5.54563C12.6586 4.19429 12.418 2.90362 11.7533 2.09295C11.2507 1.48095 10.544 1.16895 9.64997 1.16428C9.64597 1.16428 9.64199 1.16428 9.63866 1.16428C8.05732 1.16428 7.49669 2.74897 7.47402 2.8163C7.40469 3.0183 7.21397 3.15561 7.00064 3.15561C6.9993 3.15561 6.99862 3.15561 6.99795 3.15561C6.78395 3.15495 6.59329 3.01829 6.52529 2.81496C6.50329 2.74829 5.94198 1.16363 4.36131 1.16363Z\" fill=\"#00171F\" />
                                </svg>
                            </button>
                            <button type=\"button\" class=\"ds-product-compare br-7 button button-light ds-compare-btn\" onclick=\"compare.add('";
        // line 412
        echo ($context["product_id"] ?? null);
        echo "');\" title=\"";
        echo ($context["button_compare"] ?? null);
        echo "\" aria-label=\"Compare button\">
                                <svg class=\"me-0\" xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"14\" viewBox=\"0 0 14 14\" fill=\"none\">
                                    <path d=\"M13.5 6.99698V8.99698C13.5 10.3757 12.378 11.497 11 11.497H2.20736L3.354 12.6436C3.54934 12.839 3.54934 13.1557 3.354 13.351C3.25667 13.4483 3.12865 13.4976 3.00065 13.4976C2.87265 13.4976 2.74463 13.449 2.6473 13.351L0.647298 11.351C0.601298 11.305 0.564721 11.2497 0.539388 11.1884C0.488721 11.0664 0.488721 10.9284 0.539388 10.8064C0.564721 10.7451 0.601298 10.6896 0.647298 10.6436L2.6473 8.64363C2.84263 8.4483 3.15932 8.4483 3.35466 8.64363C3.54999 8.83897 3.54999 9.15565 3.35466 9.35099L2.20801 10.4976H11C11.8267 10.4976 12.5 9.82497 12.5 8.99764V6.99764C12.5 6.72164 12.724 6.49764 13 6.49764C13.276 6.49764 13.5 6.72098 13.5 6.99698ZM1 7.49698C1.276 7.49698 1.5 7.27298 1.5 6.99698V4.99698C1.5 4.16965 2.17333 3.49698 3 3.49698H11.7926L10.646 4.64363C10.4507 4.83896 10.4507 5.15565 10.646 5.35099C10.7433 5.44832 10.8713 5.49764 10.9993 5.49764C11.1273 5.49764 11.2554 5.44899 11.3527 5.35099L13.3527 3.35099C13.3987 3.30499 13.4353 3.24972 13.4606 3.18839C13.5113 3.06639 13.5113 2.92839 13.4606 2.80639C13.4353 2.74506 13.3987 2.68963 13.3527 2.64363L11.3527 0.643631C11.1574 0.448298 10.8407 0.448298 10.6453 0.643631C10.45 0.838965 10.45 1.15565 10.6453 1.35099L11.792 2.49764H3C1.622 2.49764 0.5 3.61897 0.5 4.99764V6.99764C0.5 7.27297 0.724 7.49698 1 7.49698Z\" fill=\"#00171F\" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    ";
        // line 419
        if (($context["price"] ?? null)) {
            // line 420
            echo "                        <div class=\"ds-product-main-price\">
                            ";
            // line 421
            if ( !($context["special"] ?? null)) {
                // line 422
                echo "                                <div class=\"ds-price-new fsz-24 fw-700 dark-text\">";
                echo ($context["price"] ?? null);
                echo "</div>
                            ";
            } else {
                // line 424
                echo "                                <div class=\"w-100 d-flex flex-column flex-sm-row align-items-stretch justify-content-between\">
                                    <div class=\"ds-product-main-price-info\">
                                        <div class=\"d-flex align-items-center\">
                                            <div class=\"ds-price-old light-text text-decoration-line-through fw-500\">";
                // line 427
                echo ($context["price"] ?? null);
                echo "</div>
                                            ";
                // line 428
                if (($context["oct_sticker_you_save"] ?? null)) {
                    // line 429
                    echo "                                                <div class=\"ds-module-sticker br-12 fw-500 red-bg ms-2\">";
                    echo ($context["you_save"] ?? null);
                    echo "</div>
                                            ";
                }
                // line 431
                echo "                                        </div>
                                        <div class=\"ds-price-new fsz-24 fw-700 red-text\">";
                // line 432
                echo ($context["special"] ?? null);
                echo "</div>
                                        <div class=\"ds-product-price-discount fsz-12 mt-1\">";
                // line 433
                echo ($context["oct_product_you_save"] ?? null);
                echo " <span id=\"main-product-you-save\">";
                echo ($context["you_save_price"] ?? null);
                echo "</span></div>
                                    </div>
                                    ";
                // line 435
                if (($context["product_timer"] ?? null)) {
                    // line 436
                    echo "                                        <div class=\"ds-product-timer d-inline-flex flex-column p-2 p-md-3 br-7 my-3 my-sm-0 text-center\">
                                            <div class=\"ds-product-timer-text dark-text fw-500 fsz-12\">";
                    // line 437
                    echo ($context["oct_product_timer"] ?? null);
                    echo "</div>
                                            <div class=\"ds-product-timer-inner d-inline-flex align-items-start justify-content-center\">
                                                <div class=\"d-flex flex-column align-items-center\">
                                                    <div id=\"ds-timer-days\" class=\"ds-product-timer-number red-text fw-600\"></div>
                                                    <span class=\"dark-text fsz-10\">";
                    // line 441
                    echo ($context["oct_product_timer_days"] ?? null);
                    echo "</span>
                                                </div>
                                                <div class=\"ds-product-timer-delimiter animated secondary-text\">:</div>
                                                <div class=\"d-flex flex-column align-items-center\">
                                                    <div id=\"ds-timer-hours\" class=\"ds-product-timer-number red-text fw-600\"></div>
                                                    <span class=\"dark-text fsz-10\">";
                    // line 446
                    echo ($context["oct_product_timer_hours"] ?? null);
                    echo "</span>
                                                </div>
                                                <div class=\"ds-product-timer-delimiter animated secondary-text\">:</div>
                                                <div class=\"d-flex flex-column align-items-center\">
                                                    <div id=\"ds-timer-minutes\" class=\"ds-product-timer-number red-text fw-600\"></div>
                                                    <span class=\"dark-text fsz-10\">";
                    // line 451
                    echo ($context["oct_product_timer_minutes"] ?? null);
                    echo "</span>
                                                </div>
                                                <div class=\"ds-product-timer-delimiter animated secondary-text\">:</div>
                                                <div class=\"d-flex flex-column align-items-center\">
                                                    <div id=\"ds-timer-seconds\" class=\"ds-product-timer-number red-text fw-600\"></div>
                                                    <span class=\"dark-text fsz-10\">";
                    // line 456
                    echo ($context["oct_product_timer_seconds"] ?? null);
                    echo "</span>
                                                </div>
                                            </div>
                                        </div>
                                    ";
                }
                // line 461
                echo "                                </div>
                            ";
            }
            // line 463
            echo "                            ";
            if (((array_key_exists("oct_popup_found_cheaper_status", $context) && (($context["oct_popup_found_cheaper_status"] ?? null) == "on")) && ($context["can_buy"] ?? null))) {
                // line 464
                echo "                                <span class=\"ds-product-found-cheaper blue-link fsz-12\" onclick=\"octPopupFoundCheaper('";
                echo ($context["product_id"] ?? null);
                echo "');\">";
                echo ($context["oct_product_cheaper"] ?? null);
                echo "</span>
                            ";
            }
            // line 466
            echo "                            ";
            if (($context["tax"] ?? null)) {
                // line 467
                echo "                                <div class=\"price-tax fsz-10 fw-300 mt-1\">";
                echo ($context["text_tax"] ?? null);
                echo "
                                    <span>";
                // line 468
                echo ($context["tax"] ?? null);
                echo "</span>
                                </div>
                            ";
            }
            // line 471
            echo "                            ";
            if (($context["discounts"] ?? null)) {
                // line 472
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["discounts"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 473
                    echo "                                    <div class=\"ds-product-price-discount fsz-12 mt-1\">";
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "quantity", [], "any", false, false, false, 473);
                    echo ($context["text_discount"] ?? null);
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "price", [], "any", false, false, false, 473);
                    echo "</div>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 475
                echo "                            ";
            }
            // line 476
            echo "                            ";
            if ((($context["minimum"] ?? null) > 1)) {
                // line 477
                echo "                                <div class=\"ds-product-option-minquant fsz-12 mt-1\">";
                echo ($context["text_minimum"] ?? null);
                echo "</div>
                            ";
            }
            // line 479
            echo "                            ";
            if (($context["points"] ?? null)) {
                // line 480
                echo "                                <div class=\"ds-product-option-bonus fsz-12 mt-1\">";
                echo ($context["text_points"] ?? null);
                echo "
                                    ";
                // line 481
                echo ($context["points"] ?? null);
                echo "</div>
                                ";
                // line 482
                if (($context["reward"] ?? null)) {
                    // line 483
                    echo "                                    <div class=\"ds-product-option-bonus fsz-12 mt-1\">";
                    echo ($context["text_reward"] ?? null);
                    echo "
                                        ";
                    // line 484
                    echo ($context["reward"] ?? null);
                    echo "</div>
                                ";
                }
                // line 486
                echo "                            ";
            }
            // line 487
            echo "                            ";
            if (($context["recurrings"] ?? null)) {
                // line 488
                echo "                                <div class=\"form-group d-flex flex-column flex-md-row align-items-md-center\">
                                    <div class=\"ds-control-label fw-500 dark-text fsz-14 mb-2\">";
                // line 489
                echo ($context["text_payment_recurring"] ?? null);
                echo "
                                        <span class=\"required\"> *</span></div>
                                    <div class=\"form-group\">
                                        <select name=\"recurring_id\" class=\"form-select form-control\">
                                            <option value=\"\">";
                // line 493
                echo ($context["text_select"] ?? null);
                echo "</option>
                                            ";
                // line 494
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                    // line 495
                    echo "                                                <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 495);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 495);
                    echo "</option>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 497
                echo "                                        </select>
                                        <div class=\"help-block\" id=\"recurring-description\"></div>
                                    </div>
                                </div>
                            ";
            }
            // line 502
            echo "                        </div>
                    ";
        }
        // line 504
        echo "                    ";
        if (($context["can_buy"] ?? null)) {
            // line 505
            echo "                        <div class=\"ds-product-main-actions ds-product-actions-middle br-7 content-block p-3 p-md-4 my-3 my-md-4 d-flex flex-column g-3 g-md-4\">
                            ";
            // line 506
            if (($context["options"] ?? null)) {
                // line 507
                echo "                                <div id=\"ds-product-options\" class=\"ds-product-options mb-3 mb-md-4 pb-3 pb-md-4\">
                                    ";
                // line 508
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 509
                    echo "                                        ";
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 509) == "select")) {
                        // line 510
                        echo "                                            <div class=\"form-group\">
                                                <label class=\"ds-control-label fw-500 dark-text fsz-14 mb-2\" for=\"input-option";
                        // line 511
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 511);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 511);
                        echo "
                                                    ";
                        // line 512
                        if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 512)) {
                            // line 513
                            echo "                                                        <span class=\"required option-required\"> *</span>
                                                    ";
                        }
                        // line 515
                        echo "                                                </label>
                                                <select name=\"option[";
                        // line 516
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 516);
                        echo "]\" id=\"input-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 516);
                        echo "\" class=\"form-select form-control\">
                                                    <option value=\"\">";
                        // line 517
                        echo ($context["text_select"] ?? null);
                        echo "</option>
                                                    ";
                        // line 518
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 518));
                        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                            // line 519
                            echo "                                                        <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 519);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 519);
                            echo "
                                                            ";
                            // line 520
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 520)) {
                                // line 521
                                echo "                                                                (";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 521);
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 521);
                                echo ")
                                                            ";
                            }
                            // line 523
                            echo "                                                        </option>
                                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 525
                        echo "                                                </select>
                                            </div>
                                        ";
                    }
                    // line 528
                    echo "                                        ";
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 528) == "radio")) {
                        // line 529
                        echo "                                            <div class=\"form-group\">
                                                <label class=\"ds-control-label fw-500 dark-text fsz-14 mb-2\">";
                        // line 530
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 530);
                        echo "
                                                    ";
                        // line 531
                        if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 531)) {
                            // line 532
                            echo "                                                        <span class=\"required option-required\"> *</span>";
                        }
                        // line 533
                        echo "                                                </label>
                                                <div id=\"input-option";
                        // line 534
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 534);
                        echo "\" class=\"options-box d-flex flex-wrap\">
                                                    ";
                        // line 535
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 535));
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
                        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                            // line 536
                            echo "                                                        <div class=\"radio\">
                                                            <label
                                                                data-bs-toggle=\"tooltip\"
                                                                data-bs-placement=\"top\"
                                                                class=\"option optid-";
                            // line 540
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 540);
                            echo " not-selected";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 540)) {
                                echo " radio-img";
                            } else {
                                echo " ds-radio";
                            }
                            if ((twig_in_filter(twig_get_attribute($this->env, $this->source, $context["option"], "option_id", [], "any", false, false, false, 540), ($context["allowed_options_ids"] ?? null)) && (twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 540) == 1))) {
                                echo " auto-choose";
                            }
                            echo "\"
                                                                title=\"";
                            // line 541
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 541);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 541)) {
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 541);
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 541);
                            }
                            echo "\">
                                                                <input type=\"radio\" name=\"option[";
                            // line 542
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 542);
                            echo "]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 542);
                            echo "\" class=\"input-radio\"/>
                                                                ";
                            // line 543
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 543)) {
                                // line 544
                                echo "                                                                    <img src=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 544);
                                echo "\" alt=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 544);
                                echo " ";
                                if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 544)) {
                                    echo " ";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 544);
                                    echo " ";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 544);
                                    echo " ";
                                }
                                echo "\" width=\"50\" height=\"50\" loading=\"lazy\" />
                                                                ";
                            } else {
                                // line 546
                                echo "                                                                    ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 546);
                                echo "
                                                                ";
                            }
                            // line 548
                            echo "                                                            </label>
                                                            <script>
                                                                \$(document).ready(function() {
                                                                    \$(document).on('click', 'label.optid-";
                            // line 551
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 551);
                            echo "', function(event) {
                                                                        \$('label.optid-";
                            // line 552
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 552);
                            echo "').removeClass('selected').addClass('not-selected');
                                                                        \$(this).removeClass('not-selected').addClass('selected');
                                                                    });
                                                                });
                                                            </script>
                                                        </div>
                                                    ";
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
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 559
                        echo "                                                </div>
                                            </div>
                                        ";
                    }
                    // line 562
                    echo "                                        ";
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 562) == "checkbox")) {
                        // line 563
                        echo "                                            <div class=\"form-checkbox-group\">
                                                <div class=\"ds-control-label fw-500 dark-text fsz-14 mb-2\">";
                        // line 564
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 564);
                        echo "
                                                    ";
                        // line 565
                        if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 565)) {
                            // line 566
                            echo "                                                        <span class=\"required option-required\"> *</span>";
                        }
                        // line 567
                        echo "                                                </div>
                                                <div id=\"input-option";
                        // line 568
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 568);
                        echo "\">
                                                    ";
                        // line 569
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 569));
                        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                            // line 570
                            echo "                                                        <div class=\"form-check\">
                                                            <label class=\"form-check-label d-flex align-items-center\">
                                                                ";
                            // line 572
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 572)) {
                                echo "<img src=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 572);
                                echo "\" alt=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 572);
                                echo " ";
                                if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 572)) {
                                    echo " ";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 572);
                                    echo " ";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 572);
                                    echo " ";
                                }
                                echo "\" class=\"img-thumbnail\" width=\"50\" height=\"50\" loading=\"lazy\" />";
                            }
                            // line 573
                            echo "                                                                <input type=\"checkbox\" id=\"option[";
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 573);
                            echo "][";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 573);
                            echo "]\" name=\"option[";
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 573);
                            echo "][]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 573);
                            echo "\" class=\"form-check-input\"/>
                                                                ";
                            // line 574
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 574);
                            echo "
                                                                ";
                            // line 575
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 575)) {
                                // line 576
                                echo "                                                                    (";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 576);
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 576);
                                echo ")
                                                                ";
                            }
                            // line 578
                            echo "                                                            </label>
                                                        </div>
                                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 581
                        echo "                                                </div>
                                            </div>
                                        ";
                    }
                    // line 584
                    echo "                                        ";
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 584) == "text")) {
                        // line 585
                        echo "                                            <div class=\"form-group\">
                                                <label class=\"ds-control-label fw-500 dark-text fsz-14 mb-2\" for=\"input-option";
                        // line 586
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 586);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 586);
                        echo "
                                                    ";
                        // line 587
                        if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 587)) {
                            // line 588
                            echo "                                                        <span class=\"required option-required\"> *</span>
                                                    ";
                        }
                        // line 590
                        echo "                                                </label>
                                                <input type=\"text\" name=\"option[";
                        // line 591
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 591);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 591);
                        echo "\" placeholder=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 591);
                        echo "\" id=\"input-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 591);
                        echo "\" class=\"form-control\" inputmode=\"text\">
                                            </div>
                                        ";
                    }
                    // line 594
                    echo "                                        ";
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 594) == "textarea")) {
                        // line 595
                        echo "                                            <div class=\"form-group\">
                                                <label class=\"ds-control-label fw-500 dark-text fsz-14 mb-2\" for=\"input-option";
                        // line 596
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 596);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 596);
                        echo "
                                                    ";
                        // line 597
                        if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 597)) {
                            // line 598
                            echo "                                                        <span class=\"required option-required\"> *</span>";
                        }
                        // line 599
                        echo "                                                </label>
                                                <textarea name=\"option[";
                        // line 600
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 600);
                        echo "]\" rows=\"5\" placeholder=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 600);
                        echo "\" id=\"input-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 600);
                        echo "\" class=\"form-control\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 600);
                        echo "</textarea>
                                            </div>
                                        ";
                    }
                    // line 603
                    echo "                                        ";
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 603) == "file")) {
                        // line 604
                        echo "                                            <div class=\"form-group\">
                                                <label class=\"ds-control-label fw-500 dark-text fsz-14 mb-2 d-block\">";
                        // line 605
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 605);
                        echo "
                                                    ";
                        // line 606
                        if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 606)) {
                            // line 607
                            echo "                                                        <span class=\"required option-required\"> *</span>";
                        }
                        // line 608
                        echo "                                                </label>
                                                <button type=\"button\" id=\"button-upload";
                        // line 609
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 609);
                        echo "\" data-loading-text=\"";
                        echo ($context["text_loading"] ?? null);
                        echo "\" class=\"button button-outline button-outline-primary br-7\">
                                                    <i class=\"fa fa-upload me-2\"></i>
                                                    ";
                        // line 611
                        echo ($context["button_upload"] ?? null);
                        echo "</button>
                                                <input type=\"hidden\" name=\"option[";
                        // line 612
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 612);
                        echo "]\" value=\"\" id=\"input-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 612);
                        echo "\"/>
                                            </div>
                                        ";
                    }
                    // line 615
                    echo "                                        ";
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 615) == "date")) {
                        // line 616
                        echo "                                            <div class=\"form-group\">
                                                <label class=\"ds-control-label fw-500 dark-text fsz-14 mb-2\" for=\"input-option";
                        // line 617
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 617);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 617);
                        echo "
                                                    ";
                        // line 618
                        if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 618)) {
                            // line 619
                            echo "                                                        <span class=\"required option-required\"> *</span>";
                        }
                        // line 620
                        echo "                                                </label>
                                                <div class=\"input-group date\">
                                                    <input type=\"date\" name=\"option[";
                        // line 622
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 622);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 622);
                        echo "\" id=\"input-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 622);
                        echo "\" class=\"form-control\"/>
                                                </div>
                                            </div>
                                        ";
                    }
                    // line 626
                    echo "                                        ";
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 626) == "datetime")) {
                        // line 627
                        echo "                                            <div class=\"form-group\">
                                                <label class=\"ds-control-label fw-500 dark-text fsz-14 mb-2\" for=\"input-option";
                        // line 628
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 628);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 628);
                        echo "
                                                    ";
                        // line 629
                        if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 629)) {
                            // line 630
                            echo "                                                        <span class=\"required option-required\"> *</span>";
                        }
                        // line 631
                        echo "                                                </label>
                                                <div class=\"input-group datetime\">
                                                    <input type=\"datetime-local\" name=\"option[";
                        // line 633
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 633);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 633);
                        echo "\" id=\"input-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 633);
                        echo "\" class=\"form-control\"/>
                                                </div>
                                            </div>
                                        ";
                    }
                    // line 637
                    echo "                                        ";
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 637) == "time")) {
                        // line 638
                        echo "                                            <div class=\"form-group\">
                                                <label class=\"ds-control-label fw-500 dark-text fsz-14 mb-2\" for=\"input-option";
                        // line 639
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 639);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 639);
                        echo "
                                                    ";
                        // line 640
                        if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 640)) {
                            // line 641
                            echo "                                                        <span class=\"required option-required\"> *</span>";
                        }
                        // line 642
                        echo "                                                </label>
                                                <div class=\"input-group time\">
                                                    <input type=\"time\" name=\"option[";
                        // line 644
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 644);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 644);
                        echo "\" id=\"input-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 644);
                        echo "\" class=\"form-control\"/>
                                                </div>
                                            </div>
                                        ";
                    }
                    // line 648
                    echo "                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 649
                echo "                                </div>
                            ";
            }
            // line 651
            echo "                            <div class=\"ds-product-main-buttons d-flex\">
                                <div class=\"ds-product-main-cart d-flex align-items-stretch justify-content-between\">
                                    <div class=\"ds-module-quantity d-flex align-items-center justify-content-center br-8 me-3";
            // line 653
            if ( !($context["product_quantity_show"] ?? null)) {
                echo " d-none";
            }
            echo "\">
                                        <button type=\"button\" aria-label=\"Minus\" class=\"ds-module-quantity-btn d-flex align-items-center justify-content-center\" onclick=\"updateValueProduct(true, false, false);\">
                                            <svg width=\"16\" height=\"16\" viewBox=\"0 0 16 16\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                                <g>
                                                    <path
                                                        d=\"M3.33333 7.5L12.6667 7.5C12.9427 7.5 13.1667 7.724 13.1667 8C13.1667 8.276 12.9427 8.5 12.6667 8.5L3.33333 8.5C3.05733 8.5 2.83333 8.276 2.83333 8C2.83333 7.724 3.05733 7.5 3.33333 7.5Z\"
                                                        fill=\"#25314C\"></path>
                                                </g>
                                            </svg>
                                        </button>
                                        <input type=\"text\" class=\"form-control\" name=\"quantity\" value=\"";
            // line 663
            echo ($context["minimum"] ?? null);
            echo "\" id=\"input-quantity\" aria-label=\"Quantity\" inputmode=\"numeric\">
                                        <button type=\"button\" aria-label=\"Plus\" class=\"ds-module-quantity-btn d-flex align-items-center justify-content-center\" onclick=\"updateValueProduct(false, true, false);\">
                                            <svg width=\"16\" height=\"16\" viewBox=\"0 0 16 16\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                                <g>
                                                    <path
                                                        d=\"M2.83341 8.00009C2.83341 7.72409 3.05741 7.50009 3.33341 7.50009L7.50008 7.50009L7.50008 3.33342C7.50008 3.05742 7.72408 2.83342 8.00008 2.83342C8.27608 2.83342 8.50008 3.05742 8.50008 3.33342L8.50008 7.50009L12.6667 7.50008C12.9427 7.50008 13.1667 7.72408 13.1667 8.00008C13.1667 8.27608 12.9427 8.50008 12.6667 8.50008L8.50008 8.50009L8.50008 12.6668C8.50008 12.9428 8.27608 13.1668 8.00008 13.1668C7.72408 13.1668 7.50008 12.9428 7.50008 12.6668L7.50008 8.50009L3.33342 8.50009C3.05742 8.50009 2.83342 8.27609 2.83341 8.00009Z\"
                                                        fill=\"#25314C\"></path>
                                                </g>
                                            </svg>
                                        </button>
                                        <input id=\"oct-product-id\" type=\"hidden\" name=\"product_id\" value=\"";
            // line 673
            echo ($context["product_id"] ?? null);
            echo "\"/>
                                        <input type=\"hidden\" id=\"min-product-quantity\" value=\"";
            // line 674
            echo ($context["minimum"] ?? null);
            echo "\" name=\"min_quantity\">
                                        <input type=\"hidden\" id=\"max-product-quantity\" value=\"";
            // line 675
            echo ($context["max_quantity"] ?? null);
            echo "\" name=\"max_quantity\">
                                    </div>
                                    <button type=\"button\" id=\"button-cart\" data-loading-text=\"";
            // line 677
            echo ($context["text_loading"] ?? null);
            echo "\" class=\"ds-product-main-cart-button button button-primary br-7 fsz-14 fw-500 flex-grow-1\">
                                        <svg class=\"me-1\" width=\"16\" height=\"16\" viewBox=\"0 0 16 16\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                            <path
                                                d=\"M13.3333 4.10256H11.4872V3.48718C11.4872 1.5639 9.92328 0 8 0C6.07672 0 4.51282 1.5639 4.51282 3.48718V4.10256H2.66666C1.64923 4.10256 0.820511 4.93046 0.820511 5.94872V12.9231C0.820511 14.9071 1.91343 16 3.89743 16H12.1026C14.0866 16 15.1795 14.9071 15.1795 12.9231V5.94872C15.1795 4.93046 14.3508 4.10256 13.3333 4.10256ZM5.74359 3.48718C5.74359 2.24246 6.75528 1.23077 8 1.23077C9.24472 1.23077 10.2564 2.24246 10.2564 3.48718V4.10256H5.74359V3.48718ZM13.9487 12.9231C13.9487 14.217 13.3965 14.7692 12.1026 14.7692H3.89743C2.60349 14.7692 2.05128 14.217 2.05128 12.9231V5.94872C2.05128 5.60903 2.32779 5.33333 2.66666 5.33333H4.51282V7.17949C4.51282 7.51918 4.78851 7.79487 5.1282 7.79487C5.4679 7.79487 5.74359 7.51918 5.74359 7.17949V5.33333H10.2564V7.17949C10.2564 7.51918 10.5321 7.79487 10.8718 7.79487C11.2115 7.79487 11.4872 7.51918 11.4872 7.17949V5.33333H13.3333C13.6722 5.33333 13.9487 5.60903 13.9487 5.94872V12.9231Z\"
                                                fill=\"#FFF\"></path>
                                        </svg>
                                        <span class=\"button-text d-inline\">";
            // line 683
            echo ($context["button_cart"] ?? null);
            echo "</span>
                                    </button>
                                </div>
                                ";
            // line 686
            if ((array_key_exists("oct_popup_purchase_status", $context) && ($context["can_buy"] ?? null))) {
                // line 687
                echo "                                    <button type=\"button\" class=\"ds-product-fast-order-button button button-outline button-outline-primary br-7 fsz-12\" onclick=\"octPopPurchase('";
                echo ($context["product_id"] ?? null);
                echo "')\">
                                        <span class=\"button-text\">";
                // line 688
                echo ($context["oct_product_quickbuy"] ?? null);
                echo "</span>
                                    </button>
                                ";
            }
            // line 691
            echo "                            </div>
                        </div>
                        ";
            // line 693
            echo ($context["oct_byoneclick"] ?? null);
            echo "
                    ";
        } else {
            // line 694
            echo "   
                        ";
            // line 695
            if ((array_key_exists("oct_stock_notifier_status", $context) &&  !twig_test_empty(($context["oct_stock_notifier_status"] ?? null)))) {
                // line 696
                echo "                            <div class=\"pt-3\">
                                <button onclick=\"octStockNotifier('";
                // line 697
                echo ($context["product_id"] ?? null);
                echo "');\" type=\"button\" class=\"button button-primary br-7 ds-stock-notifier-btn\">
                                    <span class=\"button-text\">";
                // line 698
                echo ($context["oct_stock_notifier_text"] ?? null);
                echo "</span>
                                </button>
                            </div>
                        ";
            }
            // line 702
            echo "                    ";
        }
        // line 703
        echo "                    ";
        if ((array_key_exists("product_js_button", $context) && ($context["product_js_button"] ?? null))) {
            // line 704
            echo "                        <div class=\"ds-product-social-buttons mt-3\">";
            echo ($context["product_js_button"] ?? null);
            echo "</div>
                    ";
        }
        // line 706
        echo "                    ";
        if (($context["oct_attributs"] ?? null)) {
            // line 707
            echo "                        <div class=\"ds-product-main-attributes dark-text fsz-14 fw-300 mt-4 pt-3 d-flex flex-wrap\">
                            ";
            // line 708
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["oct_attributs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                // line 709
                echo "                                <div class=\"ds-product-main-attributes-item br-4 py-1 px-2\">
                                    ";
                // line 710
                echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 710);
                echo ":<span class=\"fsz-12 fw-500 ps-2\">";
                echo twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 710);
                echo "</span>
                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 713
            echo "                        </div>
                    ";
        }
        // line 715
        echo "                    ";
        if ((((twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "product_advantage", [], "any", true, true, false, 715) && (twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "product_advantage", [], "any", false, false, false, 715) == "on")) && (array_key_exists("oct_product_advantages", $context) &&  !twig_test_empty(($context["oct_product_advantages"] ?? null)))) || ((array_key_exists("oct_product_delivery", $context) &&  !twig_test_empty(($context["oct_product_delivery"] ?? null))) || (array_key_exists("oct_product_payment", $context) &&  !twig_test_empty(($context["oct_product_payment"] ?? null)))))) {
            // line 716
            echo "                    <div class=\"ds-product-advantages content-block d-flex flex-column px-3 px-md-0 px-xl-3 py-0 py-md-3 py-xl-0 mb-xl-4 mt-3\">
                        <!-- Product advantages delivery -->
                        ";
            // line 718
            if ((array_key_exists("oct_product_delivery", $context) &&  !twig_test_empty(($context["oct_product_delivery"] ?? null)))) {
                // line 719
                echo "                            <div class=\"ds-product-advantages-item px-md-3 px-lg-4 pt-3 px-xl-0\">
                                <div class=\"dark-text fw-500 fsz-16\">";
                // line 720
                echo ($context["oct_product_delivery_text"] ?? null);
                echo "</div>
                                ";
                // line 721
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["oct_product_delivery"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["delivery_item"]) {
                    // line 722
                    echo "                                    <div class=\"ds-product-advantages-item-text d-flex align-items-center justify-content-between gap-2 py-3\">
                                        <div class=\"d-flex align-items-center gap-2\">
                                            <img class=\"ds-product-advantages-item-text-img\" src=\"";
                    // line 724
                    echo twig_get_attribute($this->env, $this->source, $context["delivery_item"], "image", [], "any", false, false, false, 724);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["delivery_item"], "title", [], "any", false, false, false, 724);
                    echo "\" width=\"20\" height=\"20\"/>
                                            <span class=\"fw-300 secondary-text fsz-12\">";
                    // line 725
                    echo twig_get_attribute($this->env, $this->source, $context["delivery_item"], "title", [], "any", false, false, false, 725);
                    echo "</span>
                                        </div>
                                        <div class=\"ds-product-advantages-item-text-price d-flex align-items-center justify-content-end gap-2\">
                                            <span class=\"dark-text text-end fsz-10\">";
                    // line 728
                    echo twig_get_attribute($this->env, $this->source, $context["delivery_item"], "price", [], "any", false, false, false, 728);
                    echo "</span>
                                            ";
                    // line 729
                    if (twig_get_attribute($this->env, $this->source, $context["delivery_item"], "link", [], "any", false, false, false, 729)) {
                        // line 730
                        echo "                                                <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["delivery_item"], "link", [], "any", false, false, false, 730);
                        echo "\" target=\"_blank\" rel=\"noopener noreferrer\" class=\"button no-btn p-0\" aria-label=\"Dilivery link\">
                                                    <svg class=\"me-0\" xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"17\" viewBox=\"0 0 16 17\" fill=\"none\">
                                                        <path d=\"M8 16.3529C3.58847 16.3529 0 12.7644 0 8.35291C0 3.94137 3.58847 0.352905 8 0.352905C12.4115 0.352905 16 3.94137 16 8.35291C16 12.7644 12.4115 16.3529 8 16.3529ZM8 1.46918C4.20391 1.46918 1.11628 4.55681 1.11628 8.35291C1.11628 12.149 4.20391 15.2366 8 15.2366C11.7961 15.2366 14.8837 12.149 14.8837 8.35291C14.8837 4.55681 11.7961 1.46918 8 1.46918ZM8.55814 11.7017V8.30003C8.55814 7.99194 8.30809 7.7419 8 7.7419C7.69191 7.7419 7.44186 7.99194 7.44186 8.30003V11.7017C7.44186 12.0098 7.69191 12.2599 8 12.2599C8.30809 12.2599 8.55814 12.0098 8.55814 11.7017ZM8.75908 5.74825C8.75908 5.33746 8.42643 5.00407 8.0149 5.00407H8.00745C7.59666 5.00407 7.2669 5.33746 7.2669 5.74825C7.2669 6.15904 7.60411 6.49244 8.0149 6.49244C8.42569 6.49244 8.75908 6.15904 8.75908 5.74825Z\" fill=\"#00171F\"/>
                                                    </svg>
                                                </a>
                                            ";
                    }
                    // line 736
                    echo "                                        </div>
                                    </div>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['delivery_item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 739
                echo "                            </div>
                        ";
            }
            // line 741
            echo "                        <!-- Product advantages payments -->
                        ";
            // line 742
            if ((array_key_exists("oct_product_payment", $context) &&  !twig_test_empty(($context["oct_product_payment"] ?? null)))) {
                // line 743
                echo "                            <div class=\"ds-product-advantages-item px-md-3 px-lg-4 pt-3 px-xl-0\">
                                <div class=\"dark-text fw-500 fsz-16 mb-3\">";
                // line 744
                echo ($context["oct_product_payment_text"] ?? null);
                echo "</div>
                                <div class=\"ds-product-advantages-payments d-flex flex-wrap align-items-stretch gap-2 mb-3\">
                                    ";
                // line 746
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["oct_product_payment"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["payment_item"]) {
                    // line 747
                    echo "                                        <div class=\"ds-product-advantages-payments-item ds-product-main-attributes-item d-inline-flex align-items-center br-4 py-1 px-2\">
                                            ";
                    // line 748
                    if (twig_get_attribute($this->env, $this->source, $context["payment_item"], "image", [], "any", false, false, false, 748)) {
                        // line 749
                        echo "                                                <img src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["payment_item"], "image", [], "any", false, false, false, 749);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["payment_item"], "title", [], "any", false, false, false, 749);
                        echo "\" width=\"20\" height=\"20\" loading=\"lazy\"/>
                                            ";
                    }
                    // line 751
                    echo "                                            ";
                    if (twig_get_attribute($this->env, $this->source, $context["payment_item"], "title", [], "any", false, false, false, 751)) {
                        // line 752
                        echo "                                                <span class=\"fw-300 fsz-12 dark-text ms-2\">";
                        echo twig_get_attribute($this->env, $this->source, $context["payment_item"], "title", [], "any", false, false, false, 752);
                        echo "</span>
                                            ";
                    }
                    // line 753
                    echo "  
                                        </div>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payment_item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 756
                echo "                                </div>
                            </div>
                        ";
            }
            // line 759
            echo "                        <!-- End of product advantages--> 
                        ";
            // line 760
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["oct_product_advantages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["advantage"]) {
                // line 761
                echo "                            <div class=\"ds-product-advantages-item d-flex align-items-center px-3 px-lg-4 py-xl-3 px-xl-3\">
                                <img src=\"";
                // line 762
                echo twig_get_attribute($this->env, $this->source, $context["advantage"], "icone", [], "any", false, false, false, 762);
                echo "\" alt=\"\" width=\"50\" height=\"50\" loading=\"lazy\" />
                                <div class=\"ds-product-advantages-item-text px-3 py-3 py-md-0\">
                                    <a href=\"";
                // line 764
                echo twig_get_attribute($this->env, $this->source, $context["advantage"], "link", [], "any", false, false, false, 764);
                echo "\" ";
                if ((twig_get_attribute($this->env, $this->source, $context["advantage"], "information_id", [], "any", false, false, false, 764) && twig_get_attribute($this->env, $this->source, $context["advantage"], "popup", [], "any", false, false, false, 764))) {
                    echo " data-rel=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["advantage"], "information_id", [], "any", false, false, false, 764);
                    echo "\" ";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["advantage"], "link", [], "any", false, false, false, 764) != "javascript:;")) {
                    echo " target=\"_blank\" ";
                }
                echo " class=\"dark-text fw-500 fsz-14";
                if (twig_get_attribute($this->env, $this->source, $context["advantage"], "popup", [], "any", false, false, false, 764)) {
                    echo " agree";
                }
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["advantage"], "title", [], "any", false, false, false, 764);
                echo "</a>
                                    <div class=\"light-text fsz-12 mt-2\">";
                // line 765
                echo twig_get_attribute($this->env, $this->source, $context["advantage"], "text", [], "any", false, false, false, 765);
                echo "</div>
                                </div>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advantage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 769
            echo "                    </div>
                ";
        }
        // line 771
        echo "                </div>
            </div>
            ";
        // line 773
        if ((array_key_exists("product_sets", $context) && ($context["product_sets"] ?? null))) {
            // line 774
            echo "                ";
            echo ($context["product_sets"] ?? null);
            echo "
            ";
        }
        // line 776
        echo "        </div>
        <div class=\"row d-flex pt-3 g-3\">
            <div class=\"col-xl-3 order-0 order-xl-1 d-none d-xl-block\">
                <div class=\"ds-product-block sticky-md-top ds-module-col\">
                    <div class=\"content-block d-none d-xl-flex flex-column\">
                        <div class=\"ds-module-img d-flex flex-column\">
                            <div class=\"ds-module-img-box position-relative\">
                                <div class=\"ds-module-buttons position-absolute d-flex flex-column br-8\">
                                    <button type=\"button\" class=\"ds-module-button ds-module-button-wishlist align-self-stretch p-0 ds-wishlist-btn\" onclick=\"wishlist.add('";
        // line 784
        echo ($context["product_id"] ?? null);
        echo "');\" title=\"";
        echo ($context["button_wishlist"] ?? null);
        echo "\" aria-label=\"Wishlist button\">
                                        <svg width=\"15\" height=\"13\" viewBox=\"0 0 15 13\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                            <g>
                                                <path
                                                    d=\"M7.49998 12.5C7.42931 12.5 7.35862 12.4853 7.29262 12.4553C7.07462 12.3559 1.94398 9.97662 1.12132 5.73929C0.803317 4.09996 1.12265 2.50062 1.97532 1.46195C2.66532 0.620615 3.65729 0.173271 4.84462 0.167271C4.85062 0.167271 4.85662 0.167271 4.86196 0.167271C6.21662 0.167271 7.04266 0.938623 7.49933 1.59529C7.95799 0.935957 8.79062 0.161271 10.1539 0.167271C11.342 0.173271 12.3346 0.620615 13.0253 1.46195C13.8766 2.49995 14.1953 4.09928 13.8766 5.73994C13.0553 9.97728 7.92395 12.3573 7.70595 12.456C7.64129 12.4853 7.57065 12.5 7.49998 12.5ZM4.86131 1.16662C4.85731 1.16662 4.854 1.16662 4.85 1.16662C3.95799 1.17062 3.25134 1.48327 2.74868 2.09594C2.08268 2.90727 1.842 4.19795 2.10333 5.54862C2.74 8.83128 6.56198 10.9646 7.49998 11.4433C8.43798 10.9646 12.26 8.83128 12.896 5.54862C13.1586 4.19728 12.918 2.90661 12.2533 2.09594C11.7506 1.48394 11.044 1.17194 10.15 1.16727C10.146 1.16727 10.142 1.16727 10.1387 1.16727C8.55732 1.16727 7.99669 2.75196 7.97402 2.81929C7.90469 3.02129 7.71396 3.1586 7.50063 3.1586C7.4993 3.1586 7.49861 3.1586 7.49794 3.1586C7.28394 3.15794 7.09329 3.02128 7.02529 2.81795C7.00329 2.75128 6.44197 1.16662 4.86131 1.16662Z\"
                                                    fill=\"#00171F\"></path>
                                            </g>
                                        </svg>
                                    </button>
                                    <button type=\"button\" class=\"ds-module-button ds-module-button-compare align-self-stretch p-0 ds-compare-btn\" onclick=\"compare.add('";
        // line 793
        echo ($context["product_id"] ?? null);
        echo "');\" title=\"";
        echo ($context["button_compare"] ?? null);
        echo "\" aria-label=\"Compare button\">
                                        <svg width=\"15\" height=\"14\" viewBox=\"0 0 15 14\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                            <g>
                                                <path
                                                    d=\"M14 7.0001V9.0001C14 10.3788 12.878 11.5001 11.5 11.5001H2.70736L3.854 12.6467C4.04934 12.8421 4.04934 13.1588 3.854 13.3541C3.75667 13.4514 3.62865 13.5007 3.50065 13.5007C3.37265 13.5007 3.24463 13.4521 3.1473 13.3541L1.1473 11.3541C1.1013 11.3081 1.06472 11.2528 1.03939 11.1915C0.988721 11.0695 0.988721 10.9315 1.03939 10.8095C1.06472 10.7482 1.1013 10.6927 1.1473 10.6467L3.1473 8.64674C3.34263 8.45141 3.65932 8.45141 3.85466 8.64674C4.04999 8.84208 4.04999 9.15877 3.85466 9.3541L2.70801 10.5007H11.5C12.3267 10.5007 13 9.82808 13 9.00075V7.00075C13 6.72475 13.224 6.50075 13.5 6.50075C13.776 6.50075 14 6.7241 14 7.0001ZM1.5 7.5001C1.776 7.5001 2 7.2761 2 7.0001V5.0001C2 4.17276 2.67333 3.5001 3.5 3.5001H12.2926L11.146 4.64674C10.9507 4.84208 10.9507 5.15877 11.146 5.3541C11.2433 5.45143 11.3713 5.50075 11.4993 5.50075C11.6273 5.50075 11.7554 5.4521 11.8527 5.3541L13.8527 3.3541C13.8987 3.3081 13.9353 3.25284 13.9606 3.1915C14.0113 3.0695 14.0113 2.9315 13.9606 2.8095C13.9353 2.74817 13.8987 2.69274 13.8527 2.64674L11.8527 0.646744C11.6574 0.451411 11.3407 0.451411 11.1453 0.646744C10.95 0.842077 10.95 1.15877 11.1453 1.3541L12.292 2.50075H3.5C2.122 2.50075 1 3.62208 1 5.00075V7.00075C1 7.27608 1.224 7.5001 1.5 7.5001Z\"
                                                    fill=\"#00171F\"></path>
                                            </g>
                                        </svg>
                                    </button>
                                </div>
                                ";
        // line 803
        if (($context["thumb"] ?? null)) {
            // line 804
            echo "                                    <img src=\"";
            echo ($context["thumb"] ?? null);
            echo "\" alt=\"\" width=\"210\" height=\"210\" loading=\"lazy\" class=\"d-block mx-auto\">
                                ";
        }
        // line 806
        echo "                            </div>
                        </div>
                        <div class=\"ds-module-caption d-flex flex-column h-100\">
                            <div class=\"ds-module-title fsz-14 fw-500 dark-text mt-3\">";
        // line 809
        echo ($context["heading_title"] ?? null);
        echo "</div>
                            ";
        // line 810
        if (($context["price"] ?? null)) {
            // line 811
            echo "                                <div class=\"ds-module-price mt-3\">
                                    ";
            // line 812
            if ( !($context["special"] ?? null)) {
                // line 813
                echo "                                        <div class=\"ds-price-new fsz-18 fw-700 dark-text\">";
                echo ($context["price"] ?? null);
                echo "</div>
                                    ";
            } else {
                // line 815
                echo "                                        <div class=\"d-flex align-items-center\">
                                            <div class=\"ds-price-old fsz-12 light-text text-decoration-line-through fw-500\">";
                // line 816
                echo ($context["price"] ?? null);
                echo "</div>
                                            ";
                // line 817
                if ((($context["oct_sticker_you_save"] ?? null) && ($context["you_save"] ?? null))) {
                    // line 818
                    echo "                                                <div class=\"ds-module-sticker br-12 fw-500 red-bg ms-2\">";
                    echo ($context["you_save"] ?? null);
                    echo "</div>
                                            ";
                }
                // line 820
                echo "                                        </div>
                                        <div class=\"ds-price-new fsz-18 fw-700 red-text\">";
                // line 821
                echo ($context["special"] ?? null);
                echo "</div>
                                    ";
            }
            // line 823
            echo "                                </div>
                            ";
        }
        // line 825
        echo "                            ";
        if (($context["can_buy"] ?? null)) {
            // line 826
            echo "                                <div class=\"ds-module-cart d-flex align-items-center justify-content-between\">
                                    <div class=\"ds-module-quantity d-flex align-items-center justify-content-center br-8";
            // line 827
            if ( !($context["product_quantity_show"] ?? null)) {
                echo " d-none";
            }
            echo "\">
                                        <button type=\"button\" aria-label=\"Minus\" class=\"ds-module-quantity-btn d-flex align-items-center justify-content-center ds-minus\">
                                            <svg width=\"16\" height=\"16\" viewBox=\"0 0 16 16\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                                <g>
                                                    <path
                                                        d=\"M3.33333 7.5L12.6667 7.5C12.9427 7.5 13.1667 7.724 13.1667 8C13.1667 8.276 12.9427 8.5 12.6667 8.5L3.33333 8.5C3.05733 8.5 2.83333 8.276 2.83333 8C2.83333 7.724 3.05733 7.5 3.33333 7.5Z\"
                                                        fill=\"#25314C\"></path>
                                                </g>
                                            </svg>
                                        </button>
                                        <input type=\"text\" class=\"form-control\" name=\"quantity\" value=\"";
            // line 837
            echo ($context["minimum"] ?? null);
            echo "\" aria-label=\"Quantity\" inputmode=\"numeric\">
                                        <button type=\"button\" aria-label=\"Plus\" class=\"ds-module-quantity-btn d-flex align-items-center justify-content-center ds-plus\">
                                            <svg width=\"16\" height=\"16\" viewBox=\"0 0 16 16\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                                <g>
                                                    <path
                                                        d=\"M2.83341 8.00009C2.83341 7.72409 3.05741 7.50009 3.33341 7.50009L7.50008 7.50009L7.50008 3.33342C7.50008 3.05742 7.72408 2.83342 8.00008 2.83342C8.27608 2.83342 8.50008 3.05742 8.50008 3.33342L8.50008 7.50009L12.6667 7.50008C12.9427 7.50008 13.1667 7.72408 13.1667 8.00008C13.1667 8.27608 12.9427 8.50008 12.6667 8.50008L8.50008 8.50009L8.50008 12.6668C8.50008 12.9428 8.27608 13.1668 8.00008 13.1668C7.72408 13.1668 7.50008 12.9428 7.50008 12.6668L7.50008 8.50009L3.33342 8.50009C3.05742 8.50009 2.83342 8.27609 2.83341 8.00009Z\"
                                                        fill=\"#25314C\"></path>
                                                </g>
                                            </svg>
                                        </button>
                                        <input type=\"hidden\" name=\"product_id\" value=\"";
            // line 847
            echo ($context["product_id"] ?? null);
            echo "\">
                                        <input type=\"hidden\" class=\"min-qty\" value=\"";
            // line 848
            echo ($context["minimum"] ?? null);
            echo "\" name=\"min_quantity\">
                                    </div>
                                    <button type=\"button\" class=\"button button-outline button-outline-primary br-8 fsz-12 ds-product-fixed-cart-btn\" aria-label=\"To cart\">
                                        <svg class=\"me-1\" width=\"16\" height=\"16\" viewBox=\"0 0 16 16\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                            <path
                                                d=\"M13.3333 4.10256H11.4872V3.48718C11.4872 1.5639 9.92328 0 8 0C6.07672 0 4.51282 1.5639 4.51282 3.48718V4.10256H2.66666C1.64923 4.10256 0.820511 4.93046 0.820511 5.94872V12.9231C0.820511 14.9071 1.91343 16 3.89743 16H12.1026C14.0866 16 15.1795 14.9071 15.1795 12.9231V5.94872C15.1795 4.93046 14.3508 4.10256 13.3333 4.10256ZM5.74359 3.48718C5.74359 2.24246 6.75528 1.23077 8 1.23077C9.24472 1.23077 10.2564 2.24246 10.2564 3.48718V4.10256H5.74359V3.48718ZM13.9487 12.9231C13.9487 14.217 13.3965 14.7692 12.1026 14.7692H3.89743C2.60349 14.7692 2.05128 14.217 2.05128 12.9231V5.94872C2.05128 5.60903 2.32779 5.33333 2.66666 5.33333H4.51282V7.17949C4.51282 7.51918 4.78851 7.79487 5.1282 7.79487C5.4679 7.79487 5.74359 7.51918 5.74359 7.17949V5.33333H10.2564V7.17949C10.2564 7.51918 10.5321 7.79487 10.8718 7.79487C11.2115 7.79487 11.4872 7.51918 11.4872 7.17949V5.33333H13.3333C13.6722 5.33333 13.9487 5.60903 13.9487 5.94872V12.9231Z\"
                                                fill=\"#00A8E8\"></path>
                                        </svg>
                                        <span class=\"button-text d-inline\">";
            // line 856
            echo ($context["button_cart"] ?? null);
            echo "</span>
                                    </button>
                                </div>
                            ";
        }
        // line 860
        echo "                        </div>
                    </div>
                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            stickyProduct();
                        });
                    </script>
                </div>
            </div>
            <div class=\"col-xl-9 order-1 order-xl-0\">
                ";
        // line 870
        if (($context["description"] ?? null)) {
            // line 871
            echo "                    <div class=\"ds-product-description ds-product-tab-content content-block p-xl-4\">
                        <div class=\"ds-product-tab-content-title d-flex align-items-center dark-text fsz-20 fw-500 pb-3 mb-3\">
                            <svg class=\"me-2\" xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"21\" viewBox=\"0 0 20 21\" fill=\"none\">
                                <path
                                    d=\"M10 20.3529C4.48558 20.3529 0 15.8673 0 10.3529C0 4.83849 4.48558 0.352905 10 0.352905C15.5144 0.352905 20 4.83849 20 10.3529C20 15.8673 15.5144 20.3529 10 20.3529ZM10 1.74825C5.25488 1.74825 1.39535 5.60779 1.39535 10.3529C1.39535 15.098 5.25488 18.9576 10 18.9576C14.7451 18.9576 18.6047 15.098 18.6047 10.3529C18.6047 5.60779 14.7451 1.74825 10 1.74825ZM10.6977 14.539V10.2868C10.6977 9.9017 10.3851 9.58914 10 9.58914C9.61488 9.58914 9.30233 9.9017 9.30233 10.2868V14.539C9.30233 14.9241 9.61488 15.2366 10 15.2366C10.3851 15.2366 10.6977 14.9241 10.6977 14.539ZM10.9489 7.09709C10.9489 6.5836 10.533 6.16686 10.0186 6.16686H10.0093C9.49582 6.16686 9.08362 6.5836 9.08362 7.09709C9.08362 7.61058 9.50513 8.02732 10.0186 8.02732C10.5321 8.02732 10.9489 7.61058 10.9489 7.09709Z\"
                                    fill=\"#00171F\" />
                            </svg>
                            ";
            // line 878
            echo ($context["oct_product_description"] ?? null);
            echo "
                        </div>
                        <div class=\"ds-product-tab-content-text secondary-text fw-300\">
                            ";
            // line 881
            echo ($context["description"] ?? null);
            echo "
                            ";
            // line 882
            if (($context["tags"] ?? null)) {
                // line 883
                echo "                                <p class=\"ds-product-tags\">";
                echo ($context["text_oct_tags"] ?? null);
                echo "
                                    ";
                // line 884
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, ($context["tags"] ?? null)) - 1)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 885
                    echo "                                        <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = ($context["tags"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 885);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = ($context["tags"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 885);
                    echo "</a>";
                    if (($context["i"] < (twig_length_filter($this->env, ($context["tags"] ?? null)) - 1))) {
                        echo ",";
                    }
                    // line 886
                    echo "                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 887
                echo "                                </p>
                            ";
            }
            // line 889
            echo "                        </div>
                    </div>
                ";
        }
        // line 892
        echo "                ";
        if (($context["attribute_groups"] ?? null)) {
            // line 893
            echo "                    <div class=\"ds-product-attributes ds-product-tab-content content-block p-xl-4\">
                        <div class=\"ds-product-tab-content-title d-flex align-items-center dark-text fsz-20 fw-500 pb-3 mb-3\">
                            <svg class=\"me-2\" xmlns=\"http://www.w3.org/2000/svg\" width=\"22\" height=\"22\" viewBox=\"0 0 22 22\" fill=\"none\">
                                <path
                                    d=\"M14.75 8.84631H6.75C6.336 8.84631 6 8.51031 6 8.09631C6 7.68231 6.336 7.34631 6.75 7.34631H14.75C15.164 7.34631 15.5 7.68231 15.5 8.09631C15.5 8.51031 15.164 8.84631 14.75 8.84631ZM15.5 11.0963C15.5 10.6823 15.164 10.3463 14.75 10.3463H6.75C6.336 10.3463 6 10.6823 6 11.0963C6 11.5103 6.336 11.8463 6.75 11.8463H14.75C15.164 11.8463 15.5 11.5103 15.5 11.0963ZM11.5 14.0963C11.5 13.6823 11.164 13.3463 10.75 13.3463H6.75C6.336 13.3463 6 13.6823 6 14.0963C6 14.5103 6.336 14.8463 6.75 14.8463H10.75C11.164 14.8463 11.5 14.5103 11.5 14.0963ZM21.5 11.0963C21.5 5.16831 16.678 0.346313 10.75 0.346313C4.822 0.346313 0 5.16831 0 11.0963C0 17.0243 4.822 21.8463 10.75 21.8463C16.678 21.8463 21.5 17.0243 21.5 11.0963ZM20 11.0963C20 16.1973 15.851 20.3463 10.75 20.3463C5.649 20.3463 1.5 16.1973 1.5 11.0963C1.5 5.99531 5.649 1.84631 10.75 1.84631C15.851 1.84631 20 5.99531 20 11.0963Z\"
                                    fill=\"#00171F\" />
                            </svg>
                            ";
            // line 900
            echo ($context["oct_product_attributes_tab"] ?? null);
            echo "
                        </div>
                        <div class=\"ds-product-attributes-items dark-text fsz-14 w-100\">
                            ";
            // line 903
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 904
                echo "                                <div class=\"ds-product-content-attributes-list\">
                                    <div class=\"ds-product-content-attributes-list-title fw-500\">";
                // line 905
                echo twig_get_attribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 905);
                echo "</div>
                                    ";
                // line 906
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 906));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 907
                    echo "                                        <div class=\"ds-product-attributes-item d-flex br-2\">
                                            <div class=\"secondary-text\">
                                                <span>";
                    // line 909
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 909);
                    echo "</span>
                                            </div>
                                            <span>";
                    // line 911
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 911);
                    echo "</span>
                                        </div>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 914
                echo "                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 916
            echo "                        </div>
                    </div>
                ";
        }
        // line 919
        echo "                ";
        if (($context["review_status"] ?? null)) {
            // line 920
            echo "                    <div class=\"ds-product-reviews ds-product-tab-content content-block p-xl-4\">
                        <div class=\"ds-product-tab-content-title d-flex align-items-center dark-text fsz-20 fw-500 pb-3 mb-3\">
                            <svg class=\"me-2\" xmlns=\"http://www.w3.org/2000/svg\" width=\"22\" height=\"23\" viewBox=\"0 0 22 23\" fill=\"none\">
                                <path
                                    d=\"M10.75 22.3463C4.822 22.3463 0 17.5233 0 11.5963C0 5.66931 4.822 0.846313 10.75 0.846313C16.678 0.846313 21.5 5.66931 21.5 11.5963C21.5 17.5233 16.678 22.3463 10.75 22.3463ZM10.75 2.34631C5.649 2.34631 1.5 6.49531 1.5 11.5963C1.5 16.6973 5.649 20.8463 10.75 20.8463C15.851 20.8463 20 16.6973 20 11.5963C20 6.49531 15.851 2.34631 10.75 2.34631ZM13.446 17.0963C13.232 17.0963 13.017 17.0443 12.819 16.9403L10.75 15.8513L8.68298 16.9393C8.22598 17.1793 7.68299 17.1403 7.26599 16.8373C6.84799 16.5333 6.64198 16.0273 6.72998 15.5173L7.125 13.2123L5.396 11.5253C5.037 11.1753 4.90994 10.6603 5.06494 10.1833C5.21994 9.70629 5.62497 9.36533 6.12097 9.29333L8.51001 8.94531L9.54395 6.84729C9.77295 6.38329 10.234 6.09631 10.751 6.09631C11.268 6.09631 11.73 6.38433 11.958 6.84833L12.9919 8.94629L15.382 9.29431C15.877 9.36631 16.281 9.70733 16.437 10.1843C16.592 10.6613 16.465 11.1763 16.106 11.5263L14.377 13.2133L14.7729 15.5203C14.8599 16.0303 14.654 16.5363 14.236 16.8393C13.999 17.0093 13.724 17.0963 13.446 17.0963ZM10.75 14.3253C10.959 14.3253 11.168 14.3753 11.358 14.4763L13.24 15.4673L12.881 13.3683C12.808 12.9433 12.948 12.5103 13.257 12.2093L14.78 10.7223L12.674 10.4163C12.248 10.3543 11.881 10.0863 11.691 9.69934L10.751 7.7923L9.81104 9.70032C9.62104 10.0863 9.253 10.3543 8.828 10.4163L6.72205 10.7223L8.245 12.2093C8.554 12.5093 8.69397 12.9433 8.62097 13.3683L8.26196 15.4663L10.144 14.4753C10.332 14.3753 10.541 14.3253 10.75 14.3253ZM15.165 10.7783H15.175H15.165ZM10.611 7.51031C10.611 7.51131 10.611 7.51131 10.611 7.51031C10.611 7.51131 10.611 7.51131 10.611 7.51031Z\"
                                    fill=\"#00171F\" />
                            </svg>
                            ";
            // line 927
            echo ($context["tab_review_view"] ?? null);
            echo "
                        </div>
                        <div class=\"ds-product-reviews-top pb-3 mb-3 d-flex flex-column justify-content-center justify-content-md-start align-items-md-start\">
                            ";
            // line 930
            if (($context["oct_rating"] ?? null)) {
                // line 931
                echo "                                <div class=\"d-flex flex-column flex-md-row justify-content-between w-100\">
                                    <div class=\"ds-product-rating d-flex flex-column align-items-center pt-md-3\">
                                        <div class=\"fsz-14 fw-500 secondary-text mb-2\">";
                // line 933
                echo ($context["tab_review_c"] ?? null);
                echo "</div>
                                        <div class=\"fsz-36 fw-700 dark-text mb-2\">";
                // line 934
                echo ($context["oct_rating"] ?? null);
                echo "</div>
                                        <div class=\"ds-module-rating-stars d-flex align-items-center mb-2\" data-rating=\"";
                // line 935
                echo ($context["oct_rating"] ?? null);
                echo "\">
                                            ";
                // line 936
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 937
                    echo "                                                <span class=\"ds-module-rating-star\"><span class=\"ds-module-rating-star-inner\"></span></span>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 939
                echo "                                        </div>
                                        <div class=\"light-text fsz-14\">";
                // line 940
                echo ($context["text_total_reviews"] ?? null);
                echo " ";
                echo ($context["total_reviews"] ?? null);
                echo "</div>
                                    </div>
                                    <div class=\"ds-product-reviews-rating d-flex flex-column align-items-end flex-md-grow-1\">
                                        ";
                // line 943
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["oct_raiting_stats"] ?? null));
                foreach ($context['_seq'] as $context["oct_key"] => $context["oct_raiting_stat"]) {
                    // line 944
                    echo "                                            <div class=\"ds-product-reviews-rating-item d-flex align-items-center justify-content-center px-2 py-1 br-4 secondary-text fsz-14\">
                                                <div class=\"ds-product-reviews-rating-item-stars d-flex align-items-center\">
                                                    ";
                    // line 946
                    echo $context["oct_key"];
                    echo "
                                                    <svg class=\"ms-1\" xmlns=\"http://www.w3.org/2000/svg\" width=\"12\" height=\"12\" viewBox=\"0 0 12 12\" fill=\"none\">
                                                        <path d=\"M6.64043 0.418447L7.93511 3.18342C8.03245 3.39166 8.22045 3.53568 8.43845 3.56886L11.4271 4.02624C11.9751 4.11024 12.1938 4.82179 11.7971 5.2298L9.63645 7.44984C9.47845 7.6122 9.40641 7.84584 9.44374 8.07525L9.93772 11.1134C10.0377 11.7297 9.4264 12.1998 8.9024 11.9097L6.31044 10.4732C6.11577 10.3652 5.88375 10.3652 5.68975 10.4732L3.09974 11.9082C2.57508 12.1991 1.96172 11.7282 2.06239 11.1106L2.55645 8.07525C2.59378 7.84584 2.52174 7.6122 2.36374 7.44984L0.203097 5.2298C-0.194236 4.82179 0.0243849 4.11024 0.573052 4.02624L3.56174 3.56886C3.77907 3.53568 3.96708 3.39166 4.06508 3.18342L5.35975 0.418447C5.62042 -0.142738 6.37777 -0.142738 6.64043 0.418447Z\" fill=\"#FBC756\" />
                                                    </svg>
                                                </div>
                                                <div class=\"ds-product-reviews-rating-item-line br-6 w-100\">
                                                    <span class=\"ds-product-reviews-rating-item-line-value\" style=\"width: ";
                    // line 952
                    echo twig_get_attribute($this->env, $this->source, $context["oct_raiting_stat"], "raiting", [], "any", false, false, false, 952);
                    echo "%;\"></span>
                                                </div>
                                                <div class=\"ds-product-reviews-rating-item-qty\">";
                    // line 954
                    echo twig_get_attribute($this->env, $this->source, $context["oct_raiting_stat"], "sum", [], "any", false, false, false, 954);
                    echo "</div>
                                            </div>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['oct_key'], $context['oct_raiting_stat'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 957
                echo "                                    </div>
                                </div>
                            ";
            } else {
                // line 960
                echo "                                <p class=\"light-text fw-300 fsz-14 text-center text-sm-start\">";
                echo ($context["text_no_reviews"] ?? null);
                echo "</p>
                            ";
            }
            // line 962
            echo "                            ";
            if (($context["review_guest"] ?? null)) {
                // line 963
                echo "                                <button type=\"button\" class=\"button button-outline button-outline-primary br-7 mt-3 px-5 fw-400 mx-auto mx-md-0 fsz-12\" data-bs-toggle=\"modal\" data-bs-target=\"#reviewModal\">";
                echo ($context["tab_review_add"] ?? null);
                echo "</button>
                                <div class=\"modal fade\" id=\"reviewModal\" tabindex=\"-1\" aria-labelledby=\"reviewModalLabel\" aria-hidden=\"true\">
                                    <div class=\"modal-dialog modal-dialog-centered\">
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header p-0 pb-4\">
                                                <h5 class=\"modal-title fsz-20 fw-700 d-flex align-items-center justify-content-between\" id=\"reviewModalLabel\">";
                // line 968
                echo ($context["text_write"] ?? null);
                echo "</h5>
                                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\">
                                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"12\" height=\"13\" viewBox=\"0 0 12 13\" fill=\"none\">
                                                        <path d=\"M11.8029 11.5725C12.0633 11.8329 12.0633 12.2551 11.8029 12.5155C11.6731 12.6453 11.5025 12.7111 11.3319 12.7111C11.1612 12.7111 10.9906 12.6462 10.8608 12.5155L5.99911 7.65384L1.13743 12.5155C1.00766 12.6453 0.837017 12.7111 0.666369 12.7111C0.495722 12.7111 0.325075 12.6462 0.195312 12.5155C-0.0651039 12.2551 -0.0651039 11.8329 0.195312 11.5725L5.057 6.71085L0.195312 1.8492C-0.0651039 1.58878 -0.0651039 1.16657 0.195312 0.906158C0.455727 0.645742 0.877907 0.645742 1.13832 0.906158L6.00001 5.76787L10.8617 0.906158C11.1221 0.645742 11.5443 0.645742 11.8047 0.906158C12.0651 1.16657 12.0651 1.58878 11.8047 1.8492L6.943 6.71085L11.8029 11.5725Z\" fill=\"#00A8E8\" />
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class=\"modal-body p-0 pt-4\">
                                                <form id=\"popup_review_form\">
                                                    <div class=\"d-flex\">
                                                        <div class=\"modal-body-product-img p-2 br-7 overflow-hidden me-1 flex-grow-1\">
                                                            <img src=\"";
                // line 979
                echo ($context["thumb"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" width=\"150\" height=\"150\" loading=\"lazy\">
                                                        </div>
                                                        <div class=\"modal-body-product-info ps-3 dark-text flex-grow-1 d-flex flex-column\">
                                                            <div class=\"modal-body-product-title fw-500 mb-3\">";
                // line 982
                echo ($context["heading_title"] ?? null);
                echo "</div>
                                                            <div class=\"fw-500 dark-text\">";
                // line 983
                echo ($context["text_oct_review"] ?? null);
                echo "</div>
                                                            <div class=\"ds-module-rating-stars d-flex align-items-center mt-2\">
                                                                <label class=\"ds-module-rating-star ds-module-rating-star-is\"><input class=\"d-none\" type=\"radio\" name=\"rating\" value=\"1\" checked/></label>
                                                                <label class=\"ds-module-rating-star ds-module-rating-star-is\"><input class=\"d-none\" type=\"radio\" name=\"rating\" value=\"2\" checked/></label>
                                                                <label class=\"ds-module-rating-star ds-module-rating-star-is\"><input class=\"d-none\" type=\"radio\" name=\"rating\" value=\"3\" checked/></label>
                                                                <label class=\"ds-module-rating-star ds-module-rating-star-is\"><input class=\"d-none\" type=\"radio\" name=\"rating\" value=\"4\" checked/></label>
                                                                <label class=\"ds-module-rating-star ds-module-rating-star-is\"><input class=\"d-none\" type=\"radio\" name=\"rating\" value=\"5\" checked/></label>
                                                            </div>
                                                            <script>
                                                                window.addEventListener('DOMContentLoaded', () => {
                                                                    reviewsRating('#popup_review_form');
                                                                });
                                                            </script>
                                                        </div>
                                                    </div>
                                                    <div class=\"input-group my-4\">
                                                        <span class=\"input-group-text\" id=\"reviewUsernameIcon\">
                                                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"17\" viewBox=\"0 0 14 17\" fill=\"none\">
                                                                <path
                                                                    d=\"M7.00726 7.47837C5.1217 7.47837 3.58848 5.94434 3.58848 4.05959C3.58848 2.17483 5.1217 0.640808 7.00726 0.640808C8.89282 0.640808 10.426 2.17483 10.426 4.05959C10.426 5.94434 8.89282 7.47837 7.00726 7.47837ZM7.00726 1.84744C5.78696 1.84744 4.79511 2.83928 4.79511 4.05959C4.79511 5.27989 5.78696 6.27174 7.00726 6.27174C8.22756 6.27174 9.21941 5.27989 9.21941 4.05959C9.21941 2.83928 8.22676 1.84744 7.00726 1.84744ZM13.2342 15.7237V13.3257C13.2342 11.1852 12.0228 8.685 8.60883 8.685H5.39115C1.9772 8.685 0.765747 11.1844 0.765747 13.3257V15.7237C0.765747 16.0567 1.03603 16.327 1.36906 16.327C1.70209 16.327 1.97238 16.0567 1.97238 15.7237V13.3257C1.97238 12.5205 2.21933 9.89162 5.39115 9.89162H8.60883C11.7807 9.89162 12.0276 12.5197 12.0276 13.3257V15.7237C12.0276 16.0567 12.2979 16.327 12.6309 16.327C12.964 16.327 13.2342 16.0567 13.2342 15.7237Z\"
                                                                    fill=\"#00171F\"></path>
                                                            </svg>
                                                        </span>
                                                        <input type=\"text\" name=\"name\" class=\"form-control\" id=\"inputReviewName\" placeholder=\"";
                // line 1006
                echo ($context["entry_name"] ?? null);
                echo "\" inputmode=\"text\" aria-label=\"Username\" aria-describedby=\"reviewUsernameIcon\">
                                                    </div>
                                                    <div class=\"form-group pb-4\">
                                                        <textarea id=\"inputReviewComment\" name=\"text\" class=\"form-control\" placeholder=\"";
                // line 1009
                echo ($context["oct_product_yourreview"] ?? null);
                echo "\" rows=\"7\"></textarea>
                                                    </div>
                                                     <div class=\"form-group pb-4\">
                                                        <textarea name=\"positive_text\" cols=\"60\" rows=\"3\" placeholder=\"";
                // line 1012
                echo ($context["oct_product_inputpluces"] ?? null);
                echo "\" id=\"input-positive-text\" class=\"form-control\">";
                echo ($context["positive_text"] ?? null);
                echo "</textarea>
                                                    </div>
                                                    <div class=\"form-group pb-4\">
                                                        <textarea name=\"negative_text\" cols=\"60\" rows=\"3\" placeholder=\"";
                // line 1015
                echo ($context["oct_product_inputpminuses"] ?? null);
                echo "\" id=\"input-negative-text\" class=\"form-control\">";
                echo ($context["negatoct_product_inputpminusesive_text"] ?? null);
                echo "</textarea>
                                                    </div>
                                                    ";
                // line 1017
                if (($context["captcha"] ?? null)) {
                    // line 1018
                    echo "                                                        <div class=\"form-group pb-4\">
                                                            ";
                    // line 1019
                    echo ($context["captcha"] ?? null);
                    echo "
                                                        </div>
                                                    ";
                }
                // line 1022
                echo "                                                    <button type=\"button\" id=\"button-review\" class=\"button button-primary br-7 w-100\">";
                echo ($context["button_continue"] ?? null);
                echo "</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            ";
            }
            // line 1029
            echo "                        </div>
                        <div id=\"review\" class=\"ds-product-reviews-content\">
                            ";
            // line 1031
            if ( !twig_test_empty(($context["oct_p_reviews"] ?? null))) {
                // line 1032
                echo "                                ";
                echo ($context["oct_p_reviews"] ?? null);
                echo "
                            ";
            }
            // line 1034
            echo "                        </div>
                    </div>
                ";
        }
        // line 1037
        echo "                ";
        if ((array_key_exists("oct_product_faq", $context) && ($context["oct_product_faq"] ?? null))) {
            // line 1038
            echo "                    ";
            echo ($context["oct_product_faq"] ?? null);
            echo "
                ";
        }
        // line 1040
        echo "                ";
        if (((twig_get_attribute($this->env, $this->source, ($context["dop_tab"] ?? null), "title", [], "any", true, true, false, 1040) && twig_get_attribute($this->env, $this->source, ($context["dop_tab"] ?? null), "title", [], "any", false, false, false, 1040)) && (twig_get_attribute($this->env, $this->source, ($context["dop_tab"] ?? null), "text", [], "any", true, true, false, 1040) && twig_get_attribute($this->env, $this->source, ($context["dop_tab"] ?? null), "text", [], "any", false, false, false, 1040)))) {
            // line 1041
            echo "                    <div id=\"product_dop_tab\" class=\"ds-product-dop_tab ds-product-tab-content content-block p-xl-4\">
                        <div class=\"ds-product-tab-content-title d-flex align-items-center dark-text fsz-20 fw-500 pb-3 mb-3\">
                            <svg class=\"me-2\" xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"21\" viewBox=\"0 0 20 21\" fill=\"none\">
                                <path
                                    d=\"M10 20.3529C4.48558 20.3529 0 15.8673 0 10.3529C0 4.83849 4.48558 0.352905 10 0.352905C15.5144 0.352905 20 4.83849 20 10.3529C20 15.8673 15.5144 20.3529 10 20.3529ZM10 1.74825C5.25488 1.74825 1.39535 5.60779 1.39535 10.3529C1.39535 15.098 5.25488 18.9576 10 18.9576C14.7451 18.9576 18.6047 15.098 18.6047 10.3529C18.6047 5.60779 14.7451 1.74825 10 1.74825ZM10.6977 14.539V10.2868C10.6977 9.9017 10.3851 9.58914 10 9.58914C9.61488 9.58914 9.30233 9.9017 9.30233 10.2868V14.539C9.30233 14.9241 9.61488 15.2366 10 15.2366C10.3851 15.2366 10.6977 14.9241 10.6977 14.539ZM10.9489 7.09709C10.9489 6.5836 10.533 6.16686 10.0186 6.16686H10.0093C9.49582 6.16686 9.08362 6.5836 9.08362 7.09709C9.08362 7.61058 9.50513 8.02732 10.0186 8.02732C10.5321 8.02732 10.9489 7.61058 10.9489 7.09709Z\"
                                    fill=\"#00171F\" />
                            </svg>
                            ";
            // line 1048
            echo twig_get_attribute($this->env, $this->source, ($context["dop_tab"] ?? null), "title", [], "any", false, false, false, 1048);
            echo "
                        </div>
                        <div class=\"ds-product-tab-content-text secondary-text fw-300\">";
            // line 1050
            echo twig_get_attribute($this->env, $this->source, ($context["dop_tab"] ?? null), "text", [], "any", false, false, false, 1050);
            echo "</div>
                    </div>
                ";
        }
        // line 1053
        echo "                ";
        if (($context["oct_product_extra_tabs"] ?? null)) {
            // line 1054
            echo "                    ";
            $context["key"] = 0;
            // line 1055
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["oct_product_extra_tabs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["extra_tab"]) {
                // line 1056
                echo "                        ";
                $context["key"] = (($context["key"] ?? null) + 1);
                // line 1057
                echo "                            <div class=\"ds-product_extra_tab-";
                echo ($context["key"] ?? null);
                echo " ds-product-tab-content content-block p-xl-4\">
                                <div class=\"ds-product-content-title d-flex align-items-center\">
                                    <div class=\"ds-product-tab-content-title d-flex align-items-center dark-text fsz-20 fw-500 pb-3 mb-3\">
                                        <svg class=\"me-2\" xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"21\" viewBox=\"0 0 20 21\" fill=\"none\">
                                            <path
                                                d=\"M10 20.3529C4.48558 20.3529 0 15.8673 0 10.3529C0 4.83849 4.48558 0.352905 10 0.352905C15.5144 0.352905 20 4.83849 20 10.3529C20 15.8673 15.5144 20.3529 10 20.3529ZM10 1.74825C5.25488 1.74825 1.39535 5.60779 1.39535 10.3529C1.39535 15.098 5.25488 18.9576 10 18.9576C14.7451 18.9576 18.6047 15.098 18.6047 10.3529C18.6047 5.60779 14.7451 1.74825 10 1.74825ZM10.6977 14.539V10.2868C10.6977 9.9017 10.3851 9.58914 10 9.58914C9.61488 9.58914 9.30233 9.9017 9.30233 10.2868V14.539C9.30233 14.9241 9.61488 15.2366 10 15.2366C10.3851 15.2366 10.6977 14.9241 10.6977 14.539ZM10.9489 7.09709C10.9489 6.5836 10.533 6.16686 10.0186 6.16686H10.0093C9.49582 6.16686 9.08362 6.5836 9.08362 7.09709C9.08362 7.61058 9.50513 8.02732 10.0186 8.02732C10.5321 8.02732 10.9489 7.61058 10.9489 7.09709Z\"
                                                fill=\"#00171F\" />
                                        </svg>
                                        ";
                // line 1065
                echo twig_get_attribute($this->env, $this->source, $context["extra_tab"], "title", [], "any", false, false, false, 1065);
                echo "
                                    </div>
                                </div>
                                <div class=\"ds-product-tab-content-text secondary-text fw-300\">";
                // line 1068
                echo twig_get_attribute($this->env, $this->source, $context["extra_tab"], "text", [], "any", false, false, false, 1068);
                echo "</div>
                            </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extra_tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1071
            echo "                ";
        }
        // line 1072
        echo "            </div>
        </div>
    </main>
    ";
        // line 1075
        if (($context["products"] ?? null)) {
            // line 1076
            echo "        ";
            echo ($context["products"] ?? null);
            echo "
    ";
        }
        // line 1078
        echo "    ";
        if (($context["oct_related_articles"] ?? null)) {
            // line 1079
            echo "        <div id=\"ds-related-article\" class=\"row mt-3 mt-md-0 py-3 p-md-0 pt-xl-3 g-3 g-xl-4 ds-module\">
            <div class=\"fw-500 dark-text fsz-20 mt-0 mt-md-3 mb-2 mb-md-0\">";
            // line 1080
            echo ($context["oct_product_related_articles"] ?? null);
            echo "</div>
            ";
            // line 1081
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["oct_related_articles"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 1082
                echo "                <div class=\"ds-last-news-item\">
\t\t\t\t\t<div class=\"content-block d-flex flex-sm-column p-2 p-md-3 h-100\">
\t\t\t\t\t\t<a href=\"";
                // line 1084
                echo twig_get_attribute($this->env, $this->source, $context["article"], "href", [], "any", false, false, false, 1084);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["article"], "name", [], "any", false, false, false, 1084);
                echo "\" class=\"me-2 me-sm-0\">
\t\t\t\t\t\t\t<img src=\"";
                // line 1085
                echo twig_get_attribute($this->env, $this->source, $context["article"], "thumb", [], "any", false, false, false, 1085);
                echo "\" class=\"img-fluid w-md-100\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["article"], "name", [], "any", false, false, false, 1085);
                echo "\" width=\"";
                echo twig_get_attribute($this->env, $this->source, $context["article"], "width", [], "any", false, false, false, 1085);
                echo "\" height=\"";
                echo twig_get_attribute($this->env, $this->source, $context["article"], "height", [], "any", false, false, false, 1085);
                echo "\" loading=\"lazy\" />
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"ds-last-news-item-info mt-sm-3 w-100 h-100 d-flex flex-column\">
\t\t\t\t\t\t\t<a href=\"";
                // line 1088
                echo twig_get_attribute($this->env, $this->source, $context["article"], "href", [], "any", false, false, false, 1088);
                echo "\" class=\"ds-last-news-item-title d-inline-block dark-text fsz-14 fw-500 mb-3\">";
                echo twig_get_attribute($this->env, $this->source, $context["article"], "name", [], "any", false, false, false, 1088);
                echo "</a>
\t\t\t\t\t\t\t<div class=\"d-flex align-items-center justify-content-between light-text fsz-10 mt-auto\">
\t\t\t\t\t\t\t\t<div class=\"ds-last-news-item-category d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t<svg class=\"me-1\" width=\"14\" height=\"13\" viewBox=\"0 0 14 13\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t<path
\t\t\t\t\t\t\t\t\t\t\td=\"M11.3077 12.3535H2.69231C0.956308 12.3535 0 11.4401 0 9.78209V2.92494C0 1.26689 0.956308 0.353516 2.69231 0.353516H5.5641C5.70697 0.353516 5.84412 0.407688 5.94464 0.504374L7.94056 2.41066H11.3077C13.0437 2.41066 14 3.32403 14 4.98209V9.78209C14 11.4401 13.0437 12.3535 11.3077 12.3535ZM2.69231 1.38209C1.5601 1.38209 1.07692 1.84357 1.07692 2.92494V9.78209C1.07692 10.8635 1.5601 11.3249 2.69231 11.3249H11.3077C12.4399 11.3249 12.9231 10.8635 12.9231 9.78209V4.98209C12.9231 3.90072 12.4399 3.43923 11.3077 3.43923H7.71795C7.57508 3.43923 7.43793 3.38506 7.33742 3.28837L5.3415 1.38209H2.69231Z\"
\t\t\t\t\t\t\t\t\t\t\tfill=\"#9CA3AF\" />
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t";
                // line 1096
                $context["key"] = 0;
                // line 1097
                echo "\t\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["article"], "blog_categories", [], "any", false, false, false, 1097));
                foreach ($context['_seq'] as $context["_key"] => $context["blog_category_name"]) {
                    // line 1098
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    $context["key"] = (($context["key"] ?? null) + 1);
                    // line 1099
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    echo $context["blog_category_name"];
                    if ((($context["key"] ?? null) < twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "blog_categories", [], "any", false, false, false, 1099)))) {
                        echo ",";
                    }
                    // line 1100
                    echo "\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog_category_name'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1101
                echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"ds-last-news-item-date d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t<svg class=\"me-1\" width=\"12\" height=\"12\" viewBox=\"0 0 12 12\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t<path
\t\t\t\t\t\t\t\t\t\t\td=\"M9.69231 0.923565H8.92308V0.462027C8.92308 0.207258 8.71631 0.000488281 8.46154 0.000488281C8.20677 0.000488281 8 0.207258 8 0.462027V0.923565H4V0.462027C4 0.207258 3.79323 0.000488281 3.53846 0.000488281C3.28369 0.000488281 3.07692 0.207258 3.07692 0.462027V0.923565H2.30769C0.819692 0.923565 0 1.74326 0 3.23126V9.6928C0 11.1808 0.819692 12.0005 2.30769 12.0005H9.69231C11.1803 12.0005 12 11.1808 12 9.6928V3.23126C12 1.74326 11.1803 0.923565 9.69231 0.923565ZM2.30769 1.84664H3.07692V2.30818C3.07692 2.56295 3.28369 2.76972 3.53846 2.76972C3.79323 2.76972 4 2.56295 4 2.30818V1.84664H8V2.30818C8 2.56295 8.20677 2.76972 8.46154 2.76972C8.71631 2.76972 8.92308 2.56295 8.92308 2.30818V1.84664H9.69231C10.6628 1.84664 11.0769 2.2608 11.0769 3.23126V3.6928H0.923077V3.23126C0.923077 2.2608 1.33723 1.84664 2.30769 1.84664ZM9.69231 11.0774H2.30769C1.33723 11.0774 0.923077 10.6633 0.923077 9.6928V4.61587H11.0769V9.6928C11.0769 10.6633 10.6628 11.0774 9.69231 11.0774ZM4.16617 6.61587C4.16617 6.95557 3.89109 7.23126 3.55078 7.23126C3.21109 7.23126 2.93224 6.95557 2.93224 6.61587C2.93224 6.27618 3.20493 6.00049 3.54462 6.00049H3.55078C3.89047 6.00049 4.16617 6.27618 4.16617 6.61587ZM6.6277 6.61587C6.6277 6.95557 6.35263 7.23126 6.01232 7.23126C5.67263 7.23126 5.39378 6.95557 5.39378 6.61587C5.39378 6.27618 5.66647 6.00049 6.00616 6.00049H6.01232C6.35201 6.00049 6.6277 6.27618 6.6277 6.61587ZM9.08924 6.61587C9.08924 6.95557 8.81417 7.23126 8.47386 7.23126C8.13417 7.23126 7.85532 6.95557 7.85532 6.61587C7.85532 6.27618 8.12801 6.00049 8.4677 6.00049H8.47386C8.81355 6.00049 9.08924 6.27618 9.08924 6.61587ZM4.16617 9.07741C4.16617 9.4171 3.89109 9.6928 3.55078 9.6928C3.21109 9.6928 2.93224 9.4171 2.93224 9.07741C2.93224 8.73772 3.20493 8.46203 3.54462 8.46203H3.55078C3.89047 8.46203 4.16617 8.73772 4.16617 9.07741ZM6.6277 9.07741C6.6277 9.4171 6.35263 9.6928 6.01232 9.6928C5.67263 9.6928 5.39378 9.4171 5.39378 9.07741C5.39378 8.73772 5.66647 8.46203 6.00616 8.46203H6.01232C6.35201 8.46203 6.6277 8.73772 6.6277 9.07741ZM9.08924 9.07741C9.08924 9.4171 8.81417 9.6928 8.47386 9.6928C8.13417 9.6928 7.85532 9.4171 7.85532 9.07741C7.85532 8.73772 8.12801 8.46203 8.4677 8.46203H8.47386C8.81355 8.46203 9.08924 8.73772 9.08924 9.07741Z\"
\t\t\t\t\t\t\t\t\t\t\tfill=\"#9CA3AF\" />
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t";
                // line 1108
                echo twig_get_attribute($this->env, $this->source, $context["article"], "date_added", [], "any", false, false, false, 1108);
                echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1115
            echo "        </div>
    ";
        }
        // line 1117
        echo "    ";
        echo ($context["content_bottom"] ?? null);
        echo "
</div>

<script>
    // product timer
    ";
        // line 1122
        if (($context["product_timer"] ?? null)) {
            // line 1123
            echo "        function timerSpecial(id, deadline) {
            const addZero = (num) => {
                if (num <= 9) {
                    return '0' + num;
                } else {
                    return num;
                }
            };

            const getTimeRemaining = (endtime) => {
                const t = Date.parse(endtime) - Date.parse(new Date()),
                    seconds = Math.floor((t / 1000) % 60),
                    minutes = Math.floor((t / 1000 / 60) % 60),
                    hours = Math.floor((t / (1000 * 60 * 60)) % 24),
                    days = Math.floor((t / (1000 * 60 * 60 * 24)));

                return {
                    'total': t,
                    'days': days,
                    'hours': hours,
                    'minutes': minutes,
                    'seconds': seconds
                };
            };

            const setClock = (selector, endtime) => {
                const timer = document.querySelector(selector),
                    days = timer.querySelector('#ds-timer-days'),
                    hours = timer.querySelector('#ds-timer-hours'),
                    minutes = timer.querySelector('#ds-timer-minutes'),
                    seconds = timer.querySelector('#ds-timer-seconds'),
                    timeInterval = setInterval(updateClock, 1000);

                updateClock();

                function updateClock() {
                    const t = getTimeRemaining(endtime);

                    days.textContent = addZero(t.days);
                    hours.textContent = addZero(t.hours);
                    minutes.textContent = addZero(t.minutes);
                    seconds.textContent = addZero(t.seconds);

                    if (t.total <= 0) {
                        days.textContent = \"00\";
                        hours.textContent = \"00\";
                        minutes.textContent = \"00\";
                        seconds.textContent = \"00\";

                        clearInterval(timeInterval);
                    }
                }
            };

            setClock(id, deadline);
        }

        timerSpecial('.ds-product-timer', '";
            // line 1180
            echo ($context["special_date_end"] ?? null);
            echo "T00:00:00');
    ";
        }
        // line 1182
        echo "
    \$('select[name=\\'recurring_id\\'], input[name=\"quantity\"]').change(function() {
        \$.ajax({
            url: 'index.php?route=product/product/getRecurringDescription',
            type: 'post',
            data: \$('input[name=\\'product_id\\'], input[name=\\'quantity\\'], select[name=\\'recurring_id\\']'),
            dataType: 'json',
            cache: false,
            beforeSend: function() {
                \$('#recurring-description').html('');
            },
            success: function(json) {
                \$('.alert-dismissible, .text-danger').remove();

                if (json['success']) {
                    \$('#recurring-description').html(json['success']);
                }
            }
        });
    });
</script>
<script>
    \$('body').on('click', '#button-cart, .ds-product-fixed-cart-btn', function(){
        let data;

        if (this.classList.contains('ds-product-fixed-cart-btn')) {
            data = \$('.ds-product-block input[type=\\'text\\'], .ds-product-block input[type=\\'hidden\\'], #product input[type=\\'radio\\']:checked, #product input[type=\\'checkbox\\']:checked, #product select, #product textarea, #product input[type=\\'date\\'], #product input[type=\\'datetime-local\\'], #product input[type=\\'time\\']');
        } else {
            data = \$('#product input[type=\\'text\\'], #product input[type=\\'hidden\\'], #product input[type=\\'radio\\']:checked, #product input[type=\\'checkbox\\']:checked, #product select, #product textarea, #product input[type=\\'date\\'], #product input[type=\\'datetime-local\\'], #product input[type=\\'time\\']');
        }

        \$.ajax({
            url: 'index.php?route=checkout/cart/add',
            type: 'post',
            data: data,
            dataType: 'json',
            cache: false,
            beforeSend: function() {
                \$('#button-cart, .ds-product-fixed-cart-btn').data('original-content', \$('#button-cart, .ds-product-fixed-cart-btn').html());
                \$('#button-cart, .ds-product-fixed-cart-btn').html('<span class=\"spinner-border spinner-border-sm\" role=\"status\" aria-hidden=\"true\"></span>').prop('disabled', true);
            },
            complete: function() {
                setTimeout(function () {
                    \$('#button-cart, .ds-product-fixed-cart-btn').html('<i class=\"fas fa-check fsz-18\"></i>').prop('disabled', true);
                }, 1000);

                setTimeout(function () {
                    \$('#button-cart, .ds-product-fixed-cart-btn').html(\$('#button-cart, .ds-product-fixed-cart-btn').data('original-content')).prop('disabled', false);
                }, 1200);
            },
            success: function(json) {
                \$('.alert-dismissible, .text-danger').remove();
                \$('.form-group').removeClass('has-error');

                if (json['error']) {
                    if (json['error']['option']) {
                        let errorOption = '';
                        for (i in json['error']['option']) {
                            var element = \$('#input-option' + i.replace('_', '-'));

                            if (element.parent().hasClass('input-group')) {
                                element.parent().after('<div class=\"text-danger fsz-14 fw-500 mb-4\">' + json['error']['option'][i] + '</div>');
                            } else {
                                element.parent().after('<div class=\"text-danger fsz-14 fw-500 mb-4\">' + json['error']['option'][i] + '</div>');
                            }
                            errorOption += '<div class=\"alert-text-item\">' + json['error']['option'][i] + '</div>';
                        }
                        scNotify('danger', errorOption);
                        
                        const headerHeight = document.querySelector('header').offsetHeight,
                        tabsHeight = document.getElementById('oct-tabs').offsetHeight;

                        scrollToElement('.ds-product-actions-middle', null, -headerHeight - tabsHeight - 42);
                        \$('.ds-product-fixed-cart-btn').removeClass('added');
                        return;
                    }

                    if (json['error']['error_warning']) {
                        scNotify('danger', json['error']['error_warning']);
                    }

                    if (json['error']['recurring']) {
                        \$('select[name=\\'recurring_id\\']').after('<div class=\"text-danger\">' + json['error']['recurring'] + '</div>');
                    }

                    // Highlight any found errors
                    \$('.text-danger').parent().addClass('has-error');
                }

                if (json['success']) {
                    if (json['isPopup']) {
                        octPopupCart();
                    } else {
                        scNotify('success', json['success']);
                    }

                    let cartIdsHolder = document.querySelector(\"[data-cart-ids]\");

                    if (json.oct_cart_ids && json.oct_cart_ids.length > 0 && cartIdsHolder) {
                        cartIdsHolder.dataset.cartIds = json.oct_cart_ids;
                        setTimeout(function () {
                            setCartBtnAdded();
                        }, 1201);
                    }

                    // Need to set timeout otherwise it wont update the total
                    setTimeout(function() {
                        \$('#cart .ds-cart-qty').addClass('active').html(json['total_products']);
                    }, 100);
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
</script>
<script>
    \$('button[id^=\\'button-upload\\']').on('click', function() {
        var node = this;

        \$('#form-upload').remove();

        \$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

        \$('#form-upload input[name=\\'file\\']').trigger('click');

        if (typeof timer != 'undefined') {
            clearInterval(timer);
        }

        timer = setInterval(function() {
            if (\$('#form-upload input[name=\\'file\\']').val() != '') {
                clearInterval(timer);

                \$.ajax({
                    url: 'index.php?route=tool/upload',
                    type: 'post',
                    dataType: 'json',
                    data: new FormData(\$('#form-upload')[0]),
                    cache: false,
                    contentType: false,
                    processData: false,
                    beforeSend: function() {
                        \$(node).button('loading');
                    },
                    complete: function() {
                        \$(node).button('reset');
                    },
                    success: function(json) {
                        \$('.text-danger').remove();

                        if (json['error']) {
                            \$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
                        }

                        if (json['success']) {
                            alert(json['success']);

                            \$(node).parent().find('input').val(json['code']);
                        }
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                });
            }
        }, 500);
    });
</script>
<script>
    \$('#review').delegate('.pagination a', 'click', function(e) {
        const headerHeight = document.querySelector('header').offsetHeight,
        tabsHeight = document.getElementById('oct-tabs').offsetHeight;

        e.preventDefault();
        \$('#review').load(this.href);
        scrollToElement('.ds-product-reviews-content', null, -headerHeight - tabsHeight - 42);
    });

    \$(\"#inputReviewName, #inputReviewComment\").on(\"change paste keyup\", function() {
        \$(this).removeClass('error_style');
    });

    \$('#button-review').on('click', function() {
        \$.ajax({
            url: 'index.php?route=product/product/write&product_id=";
        // line 1368
        echo ($context["product_id"] ?? null);
        echo "',
            type: 'post',
            dataType: 'json',
            cache: false,
            data: \$('#popup_review_form').serialize(),
            beforeSend: function() {
                \$('#button-review').button('loading');
            },
            complete: function() {
                \$('#button-review').button('reset');
            },
            success: function(json) {
                \$('.alert-dismissible').remove();

                if (json['error']) {
                    let errorOption = '';

                    \$.each(json['error'], function(i, val) {
                        \$('#reviewModal [name=\"' + i + '\"]').addClass('error_style');
                        errorOption += '<div class=\"alert-text-item\">' + val + '</div>';
                    });

                    scNotify('danger', errorOption);
                }

                if (json['success']) {
                    scNotify('success', json['success']);
                    \$('#reviewModal').modal('hide');
                    \$('#popup_review_form input[name=\\'name\\']').val('');
                    \$('#popup_review_form textarea[name=\\'text\\']').val('');
                    \$('#reviewModal .rm-module-rating-star-is').removeClass('rm-module-rating-star-is');
                }
            }
        });
    });

    \$('#input-quantity').on('change', function(e) {
        updateValueProduct(false, false, true);
    });

    function updateValueProduct(minus, plus, manual) {
        let min = parseInt(\$('#input-quantity').val());
        let currentMinimum = parseInt(\$('#min-product-quantity').val());
        let max = parseInt(\$('#max-product-quantity').val());

        if (max === 0)
            return;

        if (minus && min > 1) {

            if (currentMinimum >= min) {
                \$(\"#input-quantity\").val(currentMinimum);
                updateProductPrice();
                return;
            } else if (min > max) {
                \$('#input-quantity').val(max);
                updateProductPrice();
                return;
            }

            \$('#input-quantity').val(~~ \$('#input-quantity').val() - 1);
        }

        if (plus) {
            if (max && min > max - 1) {
                \$('#input-quantity').val(max);
                updateProductPrice();
                return;
            } else if (currentMinimum > min) {
                \$('#input-quantity').val(currentMinimum);
                updateProductPrice();
                return;
            }

            \$('#input-quantity').val(~~ \$('#input-quantity').val() + 1);
        }

        if (manual) {
            if (currentMinimum >= min) {
                \$('#input-quantity').val(currentMinimum);
                updateProductPrice();
                return;
            } else if (min > max) {
                \$('#input-quantity').val(max);
                updateProductPrice();
                return;
            }

        }

        updateProductPrice();
    }

    \$('#ds-product-options input, #ds-product-options select').on('change', function() {
        updateProductPrice();
    });

    ";
        // line 1465
        if ((twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "product_zoom", [], "any", true, true, false, 1465) && twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "product_zoom", [], "any", false, false, false, 1465))) {
            // line 1466
            echo "    \$(document).ready(function() {
        \$(\".oct-gallery\").zoom();
    });
    ";
        }
        // line 1470
        echo "
    function updateProductPrice() {
        let priceOld = document.querySelector('#product .ds-price-old');
        let priceNew = document.querySelector('#product .ds-price-new');
        let youSave = document.querySelector('#main-product-you-save');

        \$.ajax({
            type: 'post',
            url: 'index.php?route=octemplates/main/oct_functions/updatePrices',
            data: \$('#product input[type=\\'text\\'], #product input[type=\\'hidden\\']:not(\"#oct_purchase_byoneclick_form_product input\"), #product input[type=\\'radio\\']:checked, #product input[type=\\'checkbox\\']:checked, #product select'),
            dataType: 'json',
            cache: false,
            success: function(json) {
                ";
        // line 1483
        if (($context["special"] ?? null)) {
            // line 1484
            echo "                    animatePrice(json['price'], priceOld);
                    animatePrice(json['special'], priceNew);
                ";
        } else {
            // line 1487
            echo "                    animatePrice(json['price'], priceNew);
                ";
        }
        // line 1489
        echo "
                ";
        // line 1490
        if ((($context["oct_sticker_you_save"] ?? null) && ($context["you_save"] ?? null))) {
            // line 1491
            echo "                    animatePrice(json['you_save_price'], youSave);
                ";
        }
        // line 1493
        echo "
                ";
        // line 1494
        if (($context["tax"] ?? null)) {
            // line 1495
            echo "                    \$('.price-tax > span').html(json['tax']);
                ";
        }
        // line 1497
        echo "            }
        });
    }
    ";
        // line 1500
        if ((($context["minimum"] ?? null) > 1)) {
            // line 1501
            echo "        updateProductPrice();
    ";
        }
        // line 1503
        echo "</script>
";
        // line 1504
        if ((twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "micro", [], "any", true, true, false, 1504) && twig_get_attribute($this->env, $this->source, ($context["oct_deals_data"] ?? null), "micro", [], "any", false, false, false, 1504))) {
            // line 1505
            echo "    <script type=\"application/ld+json\">
    {
        \"@context\": \"https://schema.org\",
        \"@type\": \"Product\",
        \"url\": \"";
            // line 1509
            echo ($context["share"] ?? null);
            echo "\",
        \"category\": \"";
            // line 1510
            echo ($context["oct_product_categories"] ?? null);
            echo "\",
        \"image\": \"";
            // line 1511
            echo ($context["thumb"] ?? null);
            echo "\",
        \"brand\": {\"@type\": \"Brand\",\"name\": \"";
            // line 1512
            echo ($context["manufacturer"] ?? null);
            echo "\"},
        \"manufacturer\": \"";
            // line 1513
            echo ($context["manufacturer"] ?? null);
            echo "\",
        \"model\": \"";
            // line 1514
            echo ($context["model"] ?? null);
            echo "\",
        \"productID\": \"";
            // line 1515
            echo ($context["product_id"] ?? null);
            echo "\",
        ";
            // line 1516
            if ((array_key_exists("upc", $context) && ($context["upc"] ?? null))) {
                // line 1517
                echo "        \"gtin12\": \"";
                echo ($context["upc"] ?? null);
                echo "\",
        ";
            }
            // line 1519
            echo "        ";
            if ((array_key_exists("ean", $context) && ($context["ean"] ?? null))) {
                // line 1520
                echo "        \"gtin\": \"";
                echo ($context["ean"] ?? null);
                echo "\",
        ";
            }
            // line 1522
            echo "        ";
            if ((array_key_exists("mpn", $context) && ($context["mpn"] ?? null))) {
                // line 1523
                echo "        \"mpn\": \"";
                echo ($context["mpn"] ?? null);
                echo "\",
        ";
            }
            // line 1525
            echo "        ";
            if ((array_key_exists("sku", $context) && ($context["sku"] ?? null))) {
                // line 1526
                echo "        \"sku\": \"";
                echo ($context["sku"] ?? null);
                echo "\",
        ";
            }
            // line 1528
            echo "        ";
            if (($context["rating"] ?? null)) {
                // line 1529
                echo "        \"aggregateRating\": {
            \"@type\": \"AggregateRating\",
            \"ratingValue\": \"";
                // line 1531
                echo ($context["rating"] ?? null);
                echo "\",
            \"ratingCount\": \"";
                // line 1532
                echo ($context["total_reviews"] ?? null);
                echo "\",
            \"reviewCount\": \"";
                // line 1533
                echo ($context["total_reviews"] ?? null);
                echo "\",
            \"bestRating\": \"5\",
            \"worstRating\": \"1\"
        },
        ";
            }
            // line 1538
            echo "
        \"description\": \"";
            // line 1539
            echo ($context["oct_description_microdata"] ?? null);
            echo "\",
        \"name\": \"";
            // line 1540
            echo ($context["oct_micro_heading_title"] ?? null);
            echo "\",

        \"offers\": {
            \"@type\": \"Offer\",
            \"url\": \"";
            // line 1544
            echo ($context["share"] ?? null);
            echo "\",

            ";
            // line 1546
            if (($context["oct_special_microdata"] ?? null)) {
                // line 1547
                echo "            ";
                $context["special_date"] = twig_date_modify_filter($this->env, "now", "+30 day");
                // line 1548
                echo "            \"priceValidUntil\" : \"";
                echo twig_date_format_filter($this->env, ($context["special_date"] ?? null), "Y-m-d");
                echo "\",
            ";
            } else {
                // line 1550
                echo "            \"priceValidUntil\" : \"";
                echo twig_date_format_filter($this->env, twig_date_modify_filter($this->env, ($context["now"] ?? null), "+60 days"), "Y-m-d");
                echo "\",
            ";
            }
            // line 1552
            echo "
            ";
            // line 1553
            if (($context["out_of_stock"] ?? null)) {
                // line 1554
                echo "            \"availability\": \"https://schema.org/OutOfStock\",
            ";
            } else {
                // line 1556
                echo "            \"availability\": \"https://schema.org/InStock\",
            ";
            }
            // line 1558
            echo "
            \"price\": \"";
            // line 1559
            if ( !($context["oct_special_microdata"] ?? null)) {
                echo ($context["oct_price_microdata"] ?? null);
            } else {
                echo ($context["oct_special_microdata"] ?? null);
            }
            echo "\",
            \"priceCurrency\": \"";
            // line 1560
            echo ($context["oct_price_currency"] ?? null);
            echo "\",
            \"itemCondition\": \"https://schema.org/NewCondition\"

        ";
            // line 1563
            if (($context["rating"] ?? null)) {
                // line 1564
                echo "        },

        \"review\": [
            ";
                // line 1567
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["oct_reviews_all"] ?? null));
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
                foreach ($context['_seq'] as $context["_key"] => $context["rew_one"]) {
                    // line 1568
                    echo "            {
                \"@type\": \"Review\",
                \"author\": {
                \"@type\": \"Person\",
                \"name\": \"";
                    // line 1572
                    echo twig_get_attribute($this->env, $this->source, $context["rew_one"], "author", [], "any", false, false, false, 1572);
                    echo "\"
                },
                \"datePublished\": \"";
                    // line 1574
                    echo twig_get_attribute($this->env, $this->source, $context["rew_one"], "date_added", [], "any", false, false, false, 1574);
                    echo "\",
                \"description\": \"";
                    // line 1575
                    echo twig_get_attribute($this->env, $this->source, $context["rew_one"], "text", [], "any", false, false, false, 1575);
                    echo "\",
                \"reviewRating\": {
                    \"@type\": \"Rating\",
                    \"bestRating\": \"5\",
                    \"ratingValue\": \"";
                    // line 1579
                    echo twig_get_attribute($this->env, $this->source, $context["rew_one"], "rating", [], "any", false, false, false, 1579);
                    echo "\",
                    \"worstRating\": \"1\"
                }
            }";
                    // line 1582
                    if ((twig_length_filter($this->env, ($context["oct_reviews_all"] ?? null)) > twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 1582))) {
                        echo ",";
                    }
                    // line 1583
                    echo "
            ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rew_one'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1585
                echo "        ]
        ";
            } else {
                // line 1587
                echo "        }
        ";
            }
            // line 1589
            echo "    }
    </script>
";
        }
        // line 1592
        if ((array_key_exists("oct_popup_purchase_status", $context) && ($context["can_buy"] ?? null))) {
            // line 1593
            echo "    <script>
        window.addEventListener('DOMContentLoaded', () => {
            const productElement = document.getElementById('product-product');

            if (productElement) {
                document.body.classList.add('body-product');
            }

            showProductButtons();
        });
    </script>
    <div class=\"ds-product-fixed-btns position-fixed d-md-none pt-3 px-3\">
        <div class=\"d-flex align-items-center justify-content-between\">
            ";
            // line 1606
            if ( !($context["special"] ?? null)) {
                // line 1607
                echo "                <div class=\"ds-price-new fsz-20 fw-700 dark-text\">";
                echo ($context["price"] ?? null);
                echo "</div>
            ";
            } else {
                // line 1609
                echo "                <div class=\"d-flex flex-column\">
                    <div class=\"d-flex align-items-center\">
                        <div class=\"ds-price-old light-text text-decoration-line-through fw-500 fsz-12\">";
                // line 1611
                echo ($context["price"] ?? null);
                echo "</div>
                        ";
                // line 1612
                if (($context["oct_sticker_you_save"] ?? null)) {
                    // line 1613
                    echo "                            <div class=\"ds-module-sticker br-12 fw-500 red-bg ms-2\">";
                    echo ($context["you_save"] ?? null);
                    echo "</div>
                        ";
                }
                // line 1615
                echo "                    </div>
                    <div class=\"ds-price-new fsz-20 fw-700 red-text lh-1\">";
                // line 1616
                echo ($context["special"] ?? null);
                echo "</div>
                </div>
            ";
            }
            // line 1619
            echo "            <div class=\"ds-module-quantity\" hidden>
                <input type=\"hidden\" class=\"form-control\" name=\"quantity\" value=\"";
            // line 1620
            echo ($context["minimum"] ?? null);
            echo "\" id=\"fixed-input-quantity\"/>
                <input type=\"hidden\" name=\"product_id\" value=\"";
            // line 1621
            echo ($context["product_id"] ?? null);
            echo "\"/>
                <input type=\"hidden\" id=\"fixed-min-product-quantity\" value=\"";
            // line 1622
            echo ($context["minimum"] ?? null);
            echo "\" name=\"min_quantity\">
            </div>
            <button type=\"button\" class=\"button button-primary small br-7 fsz-12 ds-product-fixed-cart-btn\">
                <svg width=\"16\" height=\"16\" viewBox=\"0 0 16 16\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path d=\"M13.3333 4.10256H11.4872V3.48718C11.4872 1.5639 9.92328 0 8 0C6.07672 0 4.51282 1.5639 4.51282 3.48718V4.10256H2.66666C1.64923 4.10256 0.820511 4.93046 0.820511 5.94872V12.9231C0.820511 14.9071 1.91343 16 3.89743 16H12.1026C14.0866 16 15.1795 14.9071 15.1795 12.9231V5.94872C15.1795 4.93046 14.3508 4.10256 13.3333 4.10256ZM5.74359 3.48718C5.74359 2.24246 6.75528 1.23077 8 1.23077C9.24472 1.23077 10.2564 2.24246 10.2564 3.48718V4.10256H5.74359V3.48718ZM13.9487 12.9231C13.9487 14.217 13.3965 14.7692 12.1026 14.7692H3.89743C2.60349 14.7692 2.05128 14.217 2.05128 12.9231V5.94872C2.05128 5.60903 2.32779 5.33333 2.66666 5.33333H4.51282V7.17949C4.51282 7.51918 4.78851 7.79487 5.1282 7.79487C5.4679 7.79487 5.74359 7.51918 5.74359 7.17949V5.33333H10.2564V7.17949C10.2564 7.51918 10.5321 7.79487 10.8718 7.79487C11.2115 7.79487 11.4872 7.51918 11.4872 7.17949V5.33333H13.3333C13.6722 5.33333 13.9487 5.60903 13.9487 5.94872V12.9231Z\" fill=\"#FFF\"></path>
                </svg>
                <span class=\"button-text\">";
            // line 1628
            echo ($context["button_cart"] ?? null);
            echo "</span>
            </button>
        </div>
    </div>
";
        }
        // line 1633
        echo ($context["footer"] ?? null);
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "oct_deals/template/product/product.twig";
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
        return array (  3401 => 1633,  3393 => 1628,  3384 => 1622,  3380 => 1621,  3376 => 1620,  3373 => 1619,  3367 => 1616,  3364 => 1615,  3358 => 1613,  3356 => 1612,  3352 => 1611,  3348 => 1609,  3342 => 1607,  3340 => 1606,  3325 => 1593,  3323 => 1592,  3318 => 1589,  3314 => 1587,  3310 => 1585,  3295 => 1583,  3291 => 1582,  3285 => 1579,  3278 => 1575,  3274 => 1574,  3269 => 1572,  3263 => 1568,  3246 => 1567,  3241 => 1564,  3239 => 1563,  3233 => 1560,  3225 => 1559,  3222 => 1558,  3218 => 1556,  3214 => 1554,  3212 => 1553,  3209 => 1552,  3203 => 1550,  3197 => 1548,  3194 => 1547,  3192 => 1546,  3187 => 1544,  3180 => 1540,  3176 => 1539,  3173 => 1538,  3165 => 1533,  3161 => 1532,  3157 => 1531,  3153 => 1529,  3150 => 1528,  3144 => 1526,  3141 => 1525,  3135 => 1523,  3132 => 1522,  3126 => 1520,  3123 => 1519,  3117 => 1517,  3115 => 1516,  3111 => 1515,  3107 => 1514,  3103 => 1513,  3099 => 1512,  3095 => 1511,  3091 => 1510,  3087 => 1509,  3081 => 1505,  3079 => 1504,  3076 => 1503,  3072 => 1501,  3070 => 1500,  3065 => 1497,  3061 => 1495,  3059 => 1494,  3056 => 1493,  3052 => 1491,  3050 => 1490,  3047 => 1489,  3043 => 1487,  3038 => 1484,  3036 => 1483,  3021 => 1470,  3015 => 1466,  3013 => 1465,  2913 => 1368,  2725 => 1182,  2720 => 1180,  2661 => 1123,  2659 => 1122,  2650 => 1117,  2646 => 1115,  2633 => 1108,  2624 => 1101,  2618 => 1100,  2612 => 1099,  2609 => 1098,  2604 => 1097,  2602 => 1096,  2589 => 1088,  2577 => 1085,  2571 => 1084,  2567 => 1082,  2563 => 1081,  2559 => 1080,  2556 => 1079,  2553 => 1078,  2547 => 1076,  2545 => 1075,  2540 => 1072,  2537 => 1071,  2528 => 1068,  2522 => 1065,  2510 => 1057,  2507 => 1056,  2502 => 1055,  2499 => 1054,  2496 => 1053,  2490 => 1050,  2485 => 1048,  2476 => 1041,  2473 => 1040,  2467 => 1038,  2464 => 1037,  2459 => 1034,  2453 => 1032,  2451 => 1031,  2447 => 1029,  2436 => 1022,  2430 => 1019,  2427 => 1018,  2425 => 1017,  2418 => 1015,  2410 => 1012,  2404 => 1009,  2398 => 1006,  2372 => 983,  2368 => 982,  2360 => 979,  2346 => 968,  2337 => 963,  2334 => 962,  2328 => 960,  2323 => 957,  2314 => 954,  2309 => 952,  2300 => 946,  2296 => 944,  2292 => 943,  2284 => 940,  2281 => 939,  2274 => 937,  2270 => 936,  2266 => 935,  2262 => 934,  2258 => 933,  2254 => 931,  2252 => 930,  2246 => 927,  2237 => 920,  2234 => 919,  2229 => 916,  2222 => 914,  2213 => 911,  2208 => 909,  2204 => 907,  2200 => 906,  2196 => 905,  2193 => 904,  2189 => 903,  2183 => 900,  2174 => 893,  2171 => 892,  2166 => 889,  2162 => 887,  2156 => 886,  2147 => 885,  2143 => 884,  2138 => 883,  2136 => 882,  2132 => 881,  2126 => 878,  2117 => 871,  2115 => 870,  2103 => 860,  2096 => 856,  2085 => 848,  2081 => 847,  2068 => 837,  2053 => 827,  2050 => 826,  2047 => 825,  2043 => 823,  2038 => 821,  2035 => 820,  2029 => 818,  2027 => 817,  2023 => 816,  2020 => 815,  2014 => 813,  2012 => 812,  2009 => 811,  2007 => 810,  2003 => 809,  1998 => 806,  1992 => 804,  1990 => 803,  1975 => 793,  1961 => 784,  1951 => 776,  1945 => 774,  1943 => 773,  1939 => 771,  1935 => 769,  1925 => 765,  1907 => 764,  1902 => 762,  1899 => 761,  1895 => 760,  1892 => 759,  1887 => 756,  1879 => 753,  1873 => 752,  1870 => 751,  1862 => 749,  1860 => 748,  1857 => 747,  1853 => 746,  1848 => 744,  1845 => 743,  1843 => 742,  1840 => 741,  1836 => 739,  1828 => 736,  1818 => 730,  1816 => 729,  1812 => 728,  1806 => 725,  1800 => 724,  1796 => 722,  1792 => 721,  1788 => 720,  1785 => 719,  1783 => 718,  1779 => 716,  1776 => 715,  1772 => 713,  1761 => 710,  1758 => 709,  1754 => 708,  1751 => 707,  1748 => 706,  1742 => 704,  1739 => 703,  1736 => 702,  1729 => 698,  1725 => 697,  1722 => 696,  1720 => 695,  1717 => 694,  1712 => 693,  1708 => 691,  1702 => 688,  1697 => 687,  1695 => 686,  1689 => 683,  1680 => 677,  1675 => 675,  1671 => 674,  1667 => 673,  1654 => 663,  1639 => 653,  1635 => 651,  1631 => 649,  1625 => 648,  1614 => 644,  1610 => 642,  1607 => 641,  1605 => 640,  1599 => 639,  1596 => 638,  1593 => 637,  1582 => 633,  1578 => 631,  1575 => 630,  1573 => 629,  1567 => 628,  1564 => 627,  1561 => 626,  1550 => 622,  1546 => 620,  1543 => 619,  1541 => 618,  1535 => 617,  1532 => 616,  1529 => 615,  1521 => 612,  1517 => 611,  1510 => 609,  1507 => 608,  1504 => 607,  1502 => 606,  1498 => 605,  1495 => 604,  1492 => 603,  1480 => 600,  1477 => 599,  1474 => 598,  1472 => 597,  1466 => 596,  1463 => 595,  1460 => 594,  1448 => 591,  1445 => 590,  1441 => 588,  1439 => 587,  1433 => 586,  1430 => 585,  1427 => 584,  1422 => 581,  1414 => 578,  1407 => 576,  1405 => 575,  1401 => 574,  1390 => 573,  1374 => 572,  1370 => 570,  1366 => 569,  1362 => 568,  1359 => 567,  1356 => 566,  1354 => 565,  1350 => 564,  1347 => 563,  1344 => 562,  1339 => 559,  1318 => 552,  1314 => 551,  1309 => 548,  1303 => 546,  1287 => 544,  1285 => 543,  1279 => 542,  1270 => 541,  1257 => 540,  1251 => 536,  1234 => 535,  1230 => 534,  1227 => 533,  1224 => 532,  1222 => 531,  1218 => 530,  1215 => 529,  1212 => 528,  1207 => 525,  1200 => 523,  1193 => 521,  1191 => 520,  1184 => 519,  1180 => 518,  1176 => 517,  1170 => 516,  1167 => 515,  1163 => 513,  1161 => 512,  1155 => 511,  1152 => 510,  1149 => 509,  1145 => 508,  1142 => 507,  1140 => 506,  1137 => 505,  1134 => 504,  1130 => 502,  1123 => 497,  1112 => 495,  1108 => 494,  1104 => 493,  1097 => 489,  1094 => 488,  1091 => 487,  1088 => 486,  1083 => 484,  1078 => 483,  1076 => 482,  1072 => 481,  1067 => 480,  1064 => 479,  1058 => 477,  1055 => 476,  1052 => 475,  1041 => 473,  1036 => 472,  1033 => 471,  1027 => 468,  1022 => 467,  1019 => 466,  1011 => 464,  1008 => 463,  1004 => 461,  996 => 456,  988 => 451,  980 => 446,  972 => 441,  965 => 437,  962 => 436,  960 => 435,  953 => 433,  949 => 432,  946 => 431,  940 => 429,  938 => 428,  934 => 427,  929 => 424,  923 => 422,  921 => 421,  918 => 420,  916 => 419,  904 => 412,  894 => 407,  882 => 404,  874 => 398,  872 => 397,  864 => 396,  858 => 392,  851 => 387,  828 => 366,  824 => 364,  822 => 363,  771 => 315,  766 => 312,  764 => 311,  761 => 310,  748 => 299,  704 => 257,  702 => 256,  664 => 220,  657 => 215,  643 => 214,  628 => 210,  624 => 209,  621 => 208,  618 => 207,  615 => 206,  598 => 205,  584 => 202,  580 => 201,  570 => 197,  567 => 196,  564 => 195,  553 => 186,  535 => 182,  531 => 181,  528 => 180,  525 => 179,  521 => 178,  511 => 170,  509 => 169,  506 => 168,  503 => 167,  498 => 164,  492 => 163,  486 => 160,  481 => 159,  469 => 156,  466 => 155,  463 => 154,  459 => 153,  455 => 151,  453 => 150,  438 => 137,  432 => 134,  429 => 133,  426 => 132,  423 => 131,  414 => 128,  409 => 127,  406 => 126,  401 => 125,  398 => 124,  395 => 123,  389 => 120,  386 => 119,  383 => 118,  377 => 115,  374 => 114,  371 => 113,  365 => 110,  361 => 109,  358 => 108,  355 => 107,  349 => 104,  346 => 103,  343 => 102,  337 => 99,  334 => 98,  332 => 97,  327 => 95,  320 => 90,  313 => 86,  304 => 79,  297 => 77,  293 => 76,  289 => 75,  286 => 74,  284 => 73,  281 => 72,  273 => 70,  270 => 69,  262 => 67,  259 => 66,  251 => 64,  248 => 63,  240 => 61,  237 => 60,  229 => 58,  226 => 57,  218 => 55,  215 => 54,  207 => 52,  204 => 51,  194 => 49,  192 => 48,  186 => 45,  180 => 42,  175 => 39,  169 => 35,  155 => 34,  152 => 33,  148 => 32,  143 => 30,  139 => 29,  133 => 26,  129 => 24,  126 => 23,  123 => 22,  106 => 21,  98 => 15,  96 => 14,  92 => 12,  78 => 11,  70 => 9,  64 => 7,  61 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oct_deals/template/product/product.twig", "");
    }
}
