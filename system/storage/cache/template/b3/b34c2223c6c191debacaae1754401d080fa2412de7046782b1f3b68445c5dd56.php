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

/* oct_deals/template/octemplates/module/oct_product_set.twig */
class __TwigTemplate_7c27978fd8643c1dd0a31ba5b1f83ff4f95c4b2cfffbc055e52a436535f28420 extends Template
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
        if (($context["product_set"] ?? null)) {
            // line 2
            echo "    <div class=\"ds-product-block-kit ds-product-tab-content content-block d-flex flex-column mt-3 px-xl-4 pt-xl-4 gap-3 gap-xl-4";
            if ((twig_length_filter($this->env, ($context["product_set"] ?? null)) > 1)) {
                echo " with-bottom-padding";
            }
            echo "\" data-type=\"minimal\">
        <div class=\"ds-product-tab-content-title d-flex align-items-center dark-text fsz-20 fw-500 pb-3\">
            <svg class=\"me-2\" xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"21\" viewBox=\"0 0 20 21\" fill=\"none\">
                <path
                    d=\"M6.27907 14.7715C6.10047 14.7715 5.92183 14.7036 5.78602 14.5669C5.51346 14.2943 5.51346 13.8524 5.78602 13.5799L13.2279 6.13802C13.5004 5.86546 13.9423 5.86546 14.2149 6.13802C14.4874 6.41057 14.4874 6.85247 14.2149 7.12503L6.77303 14.5669C6.63628 14.7036 6.45767 14.7715 6.27907 14.7715ZM14.4186 12.911C14.4186 11.885 13.5842 11.0506 12.5581 11.0506C11.5321 11.0506 10.6977 11.885 10.6977 12.911C10.6977 13.9371 11.5321 14.7715 12.5581 14.7715C13.5842 14.7715 14.4186 13.9371 14.4186 12.911ZM13.0233 12.911C13.0233 13.1678 12.8149 13.3762 12.5581 13.3762C12.3014 13.3762 12.093 13.1678 12.093 12.911C12.093 12.6543 12.3014 12.4459 12.5581 12.4459C12.8149 12.4459 13.0233 12.6543 13.0233 12.911ZM9.30233 7.79477C9.30233 6.76872 8.46791 5.9343 7.44186 5.9343C6.41581 5.9343 5.5814 6.76872 5.5814 7.79477C5.5814 8.82081 6.41581 9.65523 7.44186 9.65523C8.46791 9.65523 9.30233 8.82081 9.30233 7.79477ZM7.90698 7.79477C7.90698 8.05151 7.6986 8.25988 7.44186 8.25988C7.18512 8.25988 6.97674 8.05151 6.97674 7.79477C6.97674 7.53802 7.18512 7.32965 7.44186 7.32965C7.6986 7.32965 7.90698 7.53802 7.90698 7.79477ZM20 10.3529C20 4.83849 15.5144 0.352905 10 0.352905C4.48558 0.352905 0 4.83849 0 10.3529C0 15.8673 4.48558 20.3529 10 20.3529C15.5144 20.3529 20 15.8673 20 10.3529ZM18.6047 10.3529C18.6047 15.098 14.7451 18.9576 10 18.9576C5.25488 18.9576 1.39535 15.098 1.39535 10.3529C1.39535 5.60779 5.25488 1.74825 10 1.74825C14.7451 1.74825 18.6047 5.60779 18.6047 10.3529Z\"
                    fill=\"#00171F\" />
            </svg>";
            // line 8
            echo ($context["text_module"] ?? null);
            echo "
        </div>
        <div id=\"product-set-data\" class=\"swiper product-set-data-swiper\">
            <div class=\"swiper-wrapper";
            // line 11
            if ((twig_length_filter($this->env, ($context["product_set"] ?? null)) > 1)) {
                echo " mb-5";
            }
            echo "\">
                ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["product_set"] ?? null));
            foreach ($context['_seq'] as $context["set_id"] => $context["set_data"]) {
                // line 13
                echo "                    <div class=\"product-set-data-item swiper-slide\">
                        <div class=\"d-flex align-items-center justify-content-between gap-4 flex-column flex-md-row\" id=\"set-id-";
                // line 14
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["set_data"], "set_info", [], "any", false, false, false, 14), "set_id", [], "any", false, false, false, 14);
                echo "\">
                            <div class=\"ds-product-block-kit-items d-flex align-items-stretch align-items-xl-stretch flex-column flex-xl-row\">
                                ";
                // line 16
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["set_data"], "products", [], "any", false, false, false, 16));
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
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 17
                    echo "                                    <div class=\"ds-product-block-kit-item content-block p-0 p-sm-2 p-lg-3 d-flex";
                    if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["set_data"], "products", [], "any", false, false, false, 17)) <= 2)) {
                        echo " flex-row align-items-center";
                    } else {
                        echo " flex-xl-column";
                    }
                    echo "\">
                                        <div class=\"ds-module-img d-flex flex-column\">
                                            <div class=\"ds-module-img-box position-relative\">
                                                <img src=\"";
                    // line 20
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 20);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 20);
                    echo "\" width=\"174\" height=\"174\" class=\"d-block mx-auto\" loading=\"lazy\">
                                                <div class=\"rounded-circle d-inline-flex align-items-center justify-content-center fsz-10 dark-text position-absolute\">x <span data-quantity=\"";
                    // line 21
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_quantity", [], "any", false, false, false, 21);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_quantity", [], "any", false, false, false, 21);
                    echo "</span></div>
                                            </div>
                                        </div>
                                        <div class=\"ds-module-caption d-flex flex-column h-100 gap-0\">
                                            <a data-product-id=\"";
                    // line 25
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 25);
                    echo "\" href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 25);
                    echo "\" class=\"ds-module-title fsz-14 dark-text fw-400\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 25);
                    echo "</a>
                                            <div class=\"ds-module-price mt-auto d-flex gap-2 align-items-center\">
                                                ";
                    // line 27
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "saving_not_formatted", [], "any", false, false, false, 27) > 0)) {
                        // line 28
                        echo "                                                    <div class=\"ds-price-old fsz-12 light-text text-decoration-line-through fw-400\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 28);
                        echo "</div>
                                                    <div class=\"ds-price-new fsz-18 fw-700 red-text\">";
                        // line 29
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "discounted_price", [], "any", false, false, false, 29);
                        echo "</div>
                                                ";
                    } else {
                        // line 31
                        echo "                                                    <div class=\"ds-price-new fsz-18 fw-700 dark-text\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "discounted_price", [], "any", false, false, false, 31);
                        echo "</div>
                                                ";
                    }
                    // line 33
                    echo "                                            </div>
                                        </div>
                                    </div>
                                    ";
                    // line 36
                    if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 36)) {
                        // line 37
                        echo "                                        <div class=\"ds-product-block-kit-plus-icon text-center d-grid place-items-center\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewBox=\"0 0 19 19\" fill=\"none\">
                                                <path
                                                    d=\"M16.5 10.853C17.1901 10.853 17.75 10.2932 17.75 9.60303C17.75 8.91289 17.1901 8.35303 16.5 8.35303H10.75V2.60303C10.75 1.91288 10.1901 1.35303 9.5 1.35303C8.80986 1.35303 8.25 1.91288 8.25 2.60303V8.35303H2.5C1.80986 8.35303 1.25 8.91289 1.25 9.60303C1.25 10.2932 1.80986 10.853 2.5 10.853H8.25V16.603C8.25 17.2932 8.80986 17.853 9.5 17.853C10.1901 17.853 10.75 17.2932 10.75 16.603V10.853H16.5Z\"
                                                    fill=\"#59AA45\" stroke=\"#59AA45\" />
                                            </svg>
                                        </div>
                                    ";
                    }
                    // line 45
                    echo "                                ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 46
                echo "                            </div>
                            <div class=\"ds-product-block-kit-prices flex-grow-1 px-md-5 position-relative align-self-stretch\">
                                <div class=\"ds-product-block-kit-equal-icon position-absolute\">
                                    <svg width=\"18\" height=\"8\" viewBox=\"0 0 25 13\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                        <path d=\"M23.3387 3.0918H1.66129C1.02026 3.0918 0.5 2.4198 0.5 1.5918C0.5 0.763797 1.02026 0.0917969 1.66129 0.0917969H23.3387C23.9797 0.0917969 24.5 0.763797 24.5 1.5918C24.5 2.4198 23.9797 3.0918 23.3387 3.0918Z\" fill=\"#9CA3AF\"/>
                                        <path d=\"M23.3387 12.0918H1.66129C1.02026 12.0918 0.5 11.4198 0.5 10.5918C0.5 9.7638 1.02026 9.0918 1.66129 9.0918H23.3387C23.9797 9.0918 24.5 9.7638 24.5 10.5918C24.5 11.4198 23.9797 12.0918 23.3387 12.0918Z\" fill=\"#9CA3AF\"/>
                                    </svg>
    
                                </div>
                                <div class=\"content-block text-center d-flex flex-sm-column align-items-end align-items-sm-center mt-sm-4 mt-md-0 p-0 p-md-4 pt-xl-0 h-100 justify-content-sm-center\">
                                    <div class=\"ds-product-block-kit-prices-text d-flex flex-column align-items-start align-items-sm-center justify-content-sm-center gap-3 pe-3 pe-sm-0 flex-grow-1 flex-sm-grow-0\">
                                        <div class=\"d-flex flex-column align-items-sm-center justify-content-sm-center gap-1\">
                                            <span class=\"light-text text-decoration-line-through fw-300\">";
                // line 58
                echo twig_get_attribute($this->env, $this->source, $context["set_data"], "total_price_formatted", [], "any", false, false, false, 58);
                echo "</span>
                                            <span class=\"fw-500 fsz-20 d-inline-block br-7 white-text red-bg px-2 py-1\">";
                // line 59
                echo twig_get_attribute($this->env, $this->source, $context["set_data"], "discounted_price_formatted", [], "any", false, false, false, 59);
                echo "</span>
                                        </div>
                                        <div class=\"mb-sm-3 dark-text d-none d-sm-block\">";
                // line 61
                echo ($context["text_economy"] ?? null);
                echo " <span class=\"dark-text fw-700\">";
                echo twig_get_attribute($this->env, $this->source, $context["set_data"], "you_save_formatted", [], "any", false, false, false, 61);
                echo "</span></div>
                                    </div>
                                    <button type=\"button\" onclick=\"addSet(";
                // line 63
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["set_data"], "set_info", [], "any", false, false, false, 63), "set_id", [], "any", false, false, false, 63);
                echo ");\" class=\"button button-primary br-8 fw-14 fw-400 add-kit-to-cart\">
                                        <svg class=\"me-2\" xmlns=\"http://www.w3.org/2000/svg\" width=\"17\" height=\"17\" viewBox=\"0 0 17 17\" fill=\"none\">
                                            <path d=\"M1.18568 16.0918C1.01015 16.0918 0.834615 16.0251 0.701135 15.8907C0.433261 15.6228 0.433261 15.1885 0.701135 14.9206L15.3291 0.292703C15.5969 0.0248283 16.0312 0.0248283 16.2991 0.292703C16.567 0.560577 16.567 0.994876 16.2991 1.26275L1.67115 15.8907C1.53676 16.0251 1.36122 16.0918 1.18568 16.0918ZM16.4993 13.1205C16.4993 11.4822 15.1663 10.1492 13.528 10.1492C11.8897 10.1492 10.5567 11.4822 10.5567 13.1205C10.5567 14.7588 11.8897 16.0918 13.528 16.0918C15.1663 16.0918 16.4993 14.7588 16.4993 13.1205ZM15.1279 13.1205C15.1279 14.0027 14.4103 14.7204 13.528 14.7204C12.6458 14.7204 11.9281 14.0027 11.9281 13.1205C11.9281 12.2382 12.6458 11.5206 13.528 11.5206C14.4103 11.5206 15.1279 12.2382 15.1279 13.1205ZM6.4426 3.06379C6.4426 1.42546 5.10963 0.0924879 3.4713 0.0924879C1.83297 0.0924879 0.5 1.42546 0.5 3.06379C0.5 4.70212 1.83297 6.03509 3.4713 6.03509C5.10963 6.03509 6.4426 4.70212 6.4426 3.06379ZM5.07123 3.06379C5.07123 3.94604 4.35355 4.66372 3.4713 4.66372C2.58905 4.66372 1.87137 3.94604 1.87137 3.06379C1.87137 2.18154 2.58905 1.46386 3.4713 1.46386C4.35355 1.46386 5.07123 2.18154 5.07123 3.06379Z\" fill=\"#F8FBFD\"/>
                                        </svg>
                                        ";
                // line 67
                echo ($context["button_buy"] ?? null);
                echo "
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['set_id'], $context['set_data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "            </div>
            ";
            // line 75
            if ((twig_length_filter($this->env, ($context["product_set"] ?? null)) > 1)) {
                // line 76
                echo "                <div class=\"swiper-pagination\"></div>
            ";
            }
            // line 78
            echo "        </div>
    </div>
<script>
function addSet(setId) {
    let products = [];
    let selector = '#set-id-' + setId + ' .ds-product-block-kit-item';

    \$(selector).each(function() {
        var productId = \$(this).find('[data-product-id]').data('product-id');
        var quantity = \$(this).find('[data-quantity]').data('quantity');
        products.push({product_id: productId, quantity: quantity});
    });
    addToCart(products);
}

function addToCart(products) {
    \$.ajax({
        url: 'index.php?route=octemplates/module/oct_product_set/addSet', 
        type: 'post',
        data: {products: products},
        dataType: 'json',
        success: function(json) {

            scNotify('success', json['success']);

            if(json['issetPopupCart']) {
                octPopupCart();
            }

            if(json['total']) {
                \$('.ds-cart-qty').addClass('active').html(json['total']);
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
}

";
            // line 117
            if ((twig_length_filter($this->env, ($context["product_set"] ?? null)) > 1)) {
                // line 118
                echo "document.addEventListener('DOMContentLoaded', function() {
    var productSetSwiper = new Swiper('#product-set-data', {
        slidesPerView: 1,
        spaceBetween: 0,
        loop: false,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });
});
";
            }
            // line 130
            echo "</script>
";
        }
        // line 132
        echo "


    ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "oct_deals/template/octemplates/module/oct_product_set.twig";
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
        return array (  296 => 132,  292 => 130,  278 => 118,  276 => 117,  235 => 78,  231 => 76,  229 => 75,  226 => 74,  213 => 67,  206 => 63,  199 => 61,  194 => 59,  190 => 58,  176 => 46,  162 => 45,  152 => 37,  150 => 36,  145 => 33,  139 => 31,  134 => 29,  129 => 28,  127 => 27,  118 => 25,  109 => 21,  103 => 20,  92 => 17,  75 => 16,  70 => 14,  67 => 13,  63 => 12,  57 => 11,  51 => 8,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oct_deals/template/octemplates/module/oct_product_set.twig", "");
    }
}
