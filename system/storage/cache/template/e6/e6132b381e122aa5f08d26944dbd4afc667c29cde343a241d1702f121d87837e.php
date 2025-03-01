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

/* oct_deals/template/octemplates/faq/oct_product_faq.twig */
class __TwigTemplate_605a2942e36bdc86b572f12114d1dbdb32d59c9a2e38e92055ea87bdda96629e extends Template
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
        echo "<div id=\"";
        echo ($context["oct_id_div"] ?? null);
        echo "\" class=\"ds-product-faq ds-product-tab-content content-block p-xl-4\">
    ";
        // line 2
        if ((($context["next_page"] ?? null) == 2)) {
            // line 3
            echo "    <div class=\"ds-product-tab-content-title d-flex align-items-center dark-text fsz-20 fw-500 pb-3 mb-3\">
    <svg class=\"me-2\" xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" viewBox=\"0 0 20 20\" fill=\"none\">
        <path
            d=\"M1.75392 19.7495C1.29692 19.7495 0.853108 19.5695 0.517108 19.2335C0.0431084 18.7605 -0.119893 18.0735 0.0901065 17.4415L0.930927 14.9405C1.02893 14.6335 1.02005 14.3255 0.905048 14.0825C0.313048 12.8095 0.0029483 11.3995 0.0029483 9.99951C0.0029483 4.62451 4.376 0.250488 9.751 0.250488C15.127 0.250488 19.5 4.62351 19.5 9.99951C19.5 15.3755 15.127 19.7485 9.751 19.7485C8.352 19.7485 6.94204 19.4375 5.67604 18.8485C5.42804 18.7295 5.11904 18.7215 4.80104 18.8225L2.31203 19.6585C2.12703 19.7195 1.93892 19.7495 1.75392 19.7495ZM9.75002 1.75049C5.20202 1.75049 1.50197 5.45051 1.50197 9.99951C1.50197 11.1825 1.76498 12.3735 2.26198 13.4435C2.53798 14.0245 2.57395 14.7235 2.35695 15.4065L1.51296 17.9175C1.47096 18.0425 1.53492 18.1315 1.57692 18.1735C1.61892 18.2155 1.709 18.2795 1.834 18.2375L4.33205 17.3985C5.02605 17.1775 5.72598 17.2115 6.31398 17.4925C7.37598 17.9865 8.56702 18.2495 9.75002 18.2495C14.299 18.2495 17.999 14.5495 17.999 10.0005C17.999 5.45149 14.299 1.75049 9.75002 1.75049ZM9.75393 11.0005C9.20193 11.0005 8.74904 10.5525 8.74904 10.0005C8.74904 9.44849 9.19216 9.00049 9.74416 9.00049H9.75393C10.3069 9.00049 10.7539 9.44849 10.7539 10.0005C10.7539 10.5525 10.3069 11.0005 9.75393 11.0005ZM14.7539 10.0005C14.7539 9.44849 14.3069 9.00049 13.7539 9.00049H13.7442C13.1922 9.00049 12.749 9.44849 12.749 10.0005C12.749 10.5525 13.2019 11.0005 13.7539 11.0005C14.3069 11.0005 14.7539 10.5525 14.7539 10.0005ZM6.75392 10.0005C6.75392 9.44849 6.30692 9.00049 5.75392 9.00049H5.74416C5.19216 9.00049 4.74904 9.44849 4.74904 10.0005C4.74904 10.5525 5.20192 11.0005 5.75392 11.0005C6.30692 11.0005 6.75392 10.5525 6.75392 10.0005Z\"
            fill=\"#00171F\" />
    </svg>
        ";
            // line 9
            echo ($context["text_faq_title"] ?? null);
            echo "
    </div>
    <div class=\"ds-product-faq-top pb-3 mb-3 d-flex flex-column align-items-center align-items-md-start\">
        <div class=\"ds-product-faq-top-text light-text fw-300 fsz-14 pb-3 text-center text-sm-start\">
            ";
            // line 13
            echo ($context["text_faq_text"] ?? null);
            echo "
        </div>
        <button type=\"button\" class=\"button button-outline button-outline-primary br-7 px-5 fw-400 d-inline-flex mx-auto mx-md-0 fsz-12\" data-bs-toggle=\"modal\" data-bs-target=\"#faqModal\">
            <span class=\"button-text\">";
            // line 16
            echo ($context["text_faq_button"] ?? null);
            echo "</span>
        </button>
    </div>
    <div class=\"modal fade\" id=\"faqModal\" tabindex=\"-1\" aria-labelledby=\"faqModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-centered\">
            <div class=\"modal-content\">
                <div class=\"modal-header p-0 pb-4\">
                    <h5 class=\"modal-title fsz-20 fw-700 d-flex align-items-center justify-content-between\" id=\"faqModalLabel\">";
            // line 23
            echo ($context["text_faq"] ?? null);
            echo "</h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"12\" height=\"13\" viewBox=\"0 0 12 13\" fill=\"none\">
                            <path d=\"M11.8029 11.5725C12.0633 11.8329 12.0633 12.2551 11.8029 12.5155C11.6731 12.6453 11.5025 12.7111 11.3319 12.7111C11.1612 12.7111 10.9906 12.6462 10.8608 12.5155L5.99911 7.65384L1.13743 12.5155C1.00766 12.6453 0.837017 12.7111 0.666369 12.7111C0.495722 12.7111 0.325075 12.6462 0.195312 12.5155C-0.0651039 12.2551 -0.0651039 11.8329 0.195312 11.5725L5.057 6.71085L0.195312 1.8492C-0.0651039 1.58878 -0.0651039 1.16657 0.195312 0.906158C0.455727 0.645742 0.877907 0.645742 1.13832 0.906158L6.00001 5.76787L10.8617 0.906158C11.1221 0.645742 11.5443 0.645742 11.8047 0.906158C12.0651 1.16657 12.0651 1.58878 11.8047 1.8492L6.943 6.71085L11.8029 11.5725Z\" fill=\"#00A8E8\" />
                        </svg>
                    </button>
                </div>
                <div class=\"modal-body\">
                    <div class=\"ds-product-content-reviews-rating-text light-text fsz-14 my-4 text-sm-start\">";
            // line 31
            echo ($context["text_faq_text"] ?? null);
            echo "</div>
                    <form id=\"form-faq\" enctype=\"multipart/form-data\" method=\"post\">
                        <div class=\"input-group my-4\">
                            <span class=\"input-group-text\" id=\"faqUsernameIcon\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"17\" viewBox=\"0 0 14 17\" fill=\"none\">
                                    <path d=\"M7.00726 7.47837C5.1217 7.47837 3.58848 5.94434 3.58848 4.05959C3.58848 2.17483 5.1217 0.640808 7.00726 0.640808C8.89282 0.640808 10.426 2.17483 10.426 4.05959C10.426 5.94434 8.89282 7.47837 7.00726 7.47837ZM7.00726 1.84744C5.78696 1.84744 4.79511 2.83928 4.79511 4.05959C4.79511 5.27989 5.78696 6.27174 7.00726 6.27174C8.22756 6.27174 9.21941 5.27989 9.21941 4.05959C9.21941 2.83928 8.22676 1.84744 7.00726 1.84744ZM13.2342 15.7237V13.3257C13.2342 11.1852 12.0228 8.685 8.60883 8.685H5.39115C1.9772 8.685 0.765747 11.1844 0.765747 13.3257V15.7237C0.765747 16.0567 1.03603 16.327 1.36906 16.327C1.70209 16.327 1.97238 16.0567 1.97238 15.7237V13.3257C1.97238 12.5205 2.21933 9.89162 5.39115 9.89162H8.60883C11.7807 9.89162 12.0276 12.5197 12.0276 13.3257V15.7237C12.0276 16.0567 12.2979 16.327 12.6309 16.327C12.964 16.327 13.2342 16.0567 13.2342 15.7237Z\" fill=\"#00171F\"></path>
                                </svg>
                            </span>
                            <input type=\"text\" name=\"name\" ";
            // line 39
            if (($context["firstname"] ?? null)) {
                echo "value=\"";
                echo ($context["firstname"] ?? null);
                echo "\"";
            }
            echo " class=\"form-control\" id=\"faqInputName\" placeholder=\"";
            echo ($context["entry_name"] ?? null);
            echo "\" inputmode=\"text\" aria-label=\"Username\" aria-describedby=\"faqUsernameIcon\">
                        </div>
                        <div class=\"input-group my-4\">
                            <span class=\"input-group-text\" id=\"faqEmailIcon\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"15\" viewBox=\"0 0 16 15\" fill=\"none\">
                                    <path d=\"M12.9231 14.4517H3.07692C1.09292 14.4517 0 13.3588 0 11.3748V3.99019C0 2.00619 1.09292 0.913269 3.07692 0.913269H12.9231C14.9071 0.913269 16 2.00619 16 3.99019V11.3748C16 13.3588 14.9071 14.4517 12.9231 14.4517ZM3.07692 2.14404C1.78297 2.14404 1.23077 2.69624 1.23077 3.99019V11.3748C1.23077 12.6688 1.78297 13.221 3.07692 13.221H12.9231C14.217 13.221 14.7692 12.6688 14.7692 11.3748V3.99019C14.7692 2.69624 14.217 2.14404 12.9231 2.14404H3.07692ZM8.84435 8.23963L12.8746 5.30875C13.1495 5.10937 13.2102 4.72374 13.01 4.44886C12.8106 4.17481 12.4268 4.11245 12.1502 4.31347L8.11979 7.24435C8.04759 7.29686 7.95161 7.29686 7.87941 7.24435L3.84896 4.31347C3.57162 4.11245 3.18857 4.17563 2.98918 4.44886C2.78898 4.72374 2.84973 5.10855 3.1246 5.30875L7.15485 8.24044C7.40757 8.42424 7.70381 8.51532 7.9992 8.51532C8.29458 8.51532 8.59245 8.42342 8.84435 8.23963Z\" fill=\"#00171F\"></path>
                                </svg>
                            </span>
                            <input type=\"text\" name=\"email\" ";
            // line 47
            if (($context["email_user"] ?? null)) {
                echo "value=\"";
                echo ($context["email_user"] ?? null);
                echo "\"";
            }
            echo " class=\"form-control\" id=\"faqInputEmail\" placeholder=\"";
            echo ($context["text_faq_email"] ?? null);
            echo "\" inputmode=\"email\" aria-label=\"email\" aria-describedby=\"faqEmailIcon\">
                        </div>
                        <div class=\"form-group mb-4\">
                            <label for=\"faqText\" class=\"fsz-14 dark-text fw-500 pb-1\"><span class=\"required\">* </span>";
            // line 50
            echo ($context["text_faq_textarea"] ?? null);
            echo "</label>
                            <textarea id=\"faqText\" name=\"text\" class=\"form-control\" placeholder=\"";
            // line 51
            echo ($context["text_faq_textarea"] ?? null);
            echo "\" rows=\"11\"></textarea>
                        </div>
                        <div class=\"form-group\">
                            ";
            // line 54
            echo ($context["captcha"] ?? null);
            echo "
                        </div>
                        <button type=\"button\" id=\"button-oct_faq\" class=\"button button-primary br-7 w-100\">";
            // line 56
            echo ($context["button_continue"] ?? null);
            echo "</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    ";
        }
        // line 63
        echo "    
    <div id=\"";
        // line 64
        echo ($context["oct_faqs_id"] ?? null);
        echo "\" class=\"ds-product-faq-content\">
         ";
        // line 65
        if (($context["oct_faqs"] ?? null)) {
            // line 66
            echo "             ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["oct_faqs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["oct_faq"]) {
                // line 67
                echo "                <div class=\"ds-product-reviews-item-box\">
                    <div class=\"ds-product-reviews-item br-4 p-3\">
                        <div class=\"ds-product-reviews-item-header d-flex justify-content-between align-items-center pb-3\">
                            <div class=\"ds-store-reviews-item-author d-flex align-items-center\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"28\" height=\"29\" viewBox=\"0 0 28 29\" fill=\"none\">
                                       <path
                                        d=\"M22.2895 0.346191H5.71053C1.97474 0.346191 0 2.32093 0 6.05672V22.6357C0 26.1106 1.72863 28.0396 4.97368 28.2946C5.03411 28.3108 5.09305 28.3314 5.15789 28.3314C5.18884 28.3314 5.21689 28.3168 5.24784 28.3138C5.40553 28.3212 5.54695 28.3462 5.71053 28.3462H22.2895C22.4531 28.3462 22.5959 28.3212 22.7522 28.3138C22.7831 28.3182 22.8097 28.3314 22.8421 28.3314C22.9069 28.3314 22.9659 28.3108 23.0263 28.2946C26.2714 28.0381 28 26.1106 28 22.6357V6.05672C28 2.32093 26.0253 0.346191 22.2895 0.346191ZM22.1053 26.8725H5.89474V25.9441C5.89474 24.6296 6.29711 20.344 11.4801 20.344H16.5199C21.7029 20.344 22.1053 24.631 22.1053 25.9441V26.8725ZM26.5263 22.6357C26.5263 25.0496 25.5728 26.373 23.5789 26.7473V25.9441C23.5789 22.6813 21.7294 18.8703 16.5199 18.8703H11.4801C6.27058 18.8703 4.42105 22.6813 4.42105 25.9441V26.7473C2.42716 26.3715 1.47368 25.0496 1.47368 22.6357V6.05672C1.47368 3.16682 2.81916 1.81988 5.71053 1.81988H22.2895C25.1808 1.81988 26.5263 3.16682 26.5263 6.05672V22.6357ZM14.0119 6.24093C11.1677 6.24093 8.85398 8.55461 8.85398 11.3988C8.85398 14.243 11.1677 16.5567 14.0119 16.5567C16.8561 16.5567 19.1698 14.243 19.1698 11.3988C19.1698 8.55461 16.8561 6.24093 14.0119 6.24093ZM14.0119 15.083C11.9797 15.083 10.3277 13.4296 10.3277 11.3988C10.3277 9.36809 11.9797 7.71461 14.0119 7.71461C16.0441 7.71461 17.6961 9.36809 17.6961 11.3988C17.6961 13.4296 16.0441 15.083 14.0119 15.083Z\"
                                        fill=\"#9CA3AF\" />
                                </svg>
                                <div class=\"ds-store-reviews-item-info ms-2 dark-text fw-500 fsz-14\">
                                    ";
                // line 77
                echo twig_get_attribute($this->env, $this->source, $context["oct_faq"], "author", [], "any", false, false, false, 77);
                echo "
                                </div>
                            </div>
                            <span class=\"ds-store-reviews-item-date fsz-12\">
                            <svg class=\"me-1\" width=\"12\" height=\"12\" viewBox=\"0 0 12 12\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                    <path d=\"M9.69231 0.923565H8.92308V0.462027C8.92308 0.207258 8.71631 0.000488281 8.46154 0.000488281C8.20677 0.000488281 8 0.207258 8 0.462027V0.923565H4V0.462027C4 0.207258 3.79323 0.000488281 3.53846 0.000488281C3.28369 0.000488281 3.07692 0.207258 3.07692 0.462027V0.923565H2.30769C0.819692 0.923565 0 1.74326 0 3.23126V9.6928C0 11.1808 0.819692 12.0005 2.30769 12.0005H9.69231C11.1803 12.0005 12 11.1808 12 9.6928V3.23126C12 1.74326 11.1803 0.923565 9.69231 0.923565ZM2.30769 1.84664H3.07692V2.30818C3.07692 2.56295 3.28369 2.76972 3.53846 2.76972C3.79323 2.76972 4 2.56295 4 2.30818V1.84664H8V2.30818C8 2.56295 8.20677 2.76972 8.46154 2.76972C8.71631 2.76972 8.92308 2.56295 8.92308 2.30818V1.84664H9.69231C10.6628 1.84664 11.0769 2.2608 11.0769 3.23126V3.6928H0.923077V3.23126C0.923077 2.2608 1.33723 1.84664 2.30769 1.84664ZM9.69231 11.0774H2.30769C1.33723 11.0774 0.923077 10.6633 0.923077 9.6928V4.61587H11.0769V9.6928C11.0769 10.6633 10.6628 11.0774 9.69231 11.0774ZM4.16617 6.61587C4.16617 6.95557 3.89109 7.23126 3.55078 7.23126C3.21109 7.23126 2.93224 6.95557 2.93224 6.61587C2.93224 6.27618 3.20493 6.00049 3.54462 6.00049H3.55078C3.89047 6.00049 4.16617 6.27618 4.16617 6.61587ZM6.6277 6.61587C6.6277 6.95557 6.35263 7.23126 6.01232 7.23126C5.67263 7.23126 5.39378 6.95557 5.39378 6.61587C5.39378 6.27618 5.66647 6.00049 6.00616 6.00049H6.01232C6.35201 6.00049 6.6277 6.27618 6.6277 6.61587ZM9.08924 6.61587C9.08924 6.95557 8.81417 7.23126 8.47386 7.23126C8.13417 7.23126 7.85532 6.95557 7.85532 6.61587C7.85532 6.27618 8.12801 6.00049 8.4677 6.00049H8.47386C8.81355 6.00049 9.08924 6.27618 9.08924 6.61587ZM4.16617 9.07741C4.16617 9.4171 3.89109 9.6928 3.55078 9.6928C3.21109 9.6928 2.93224 9.4171 2.93224 9.07741C2.93224 8.73772 3.20493 8.46203 3.54462 8.46203H3.55078C3.89047 8.46203 4.16617 8.73772 4.16617 9.07741ZM6.6277 9.07741C6.6277 9.4171 6.35263 9.6928 6.01232 9.6928C5.67263 9.6928 5.39378 9.4171 5.39378 9.07741C5.39378 8.73772 5.66647 8.46203 6.00616 8.46203H6.01232C6.35201 8.46203 6.6277 8.73772 6.6277 9.07741ZM9.08924 9.07741C9.08924 9.4171 8.81417 9.6928 8.47386 9.6928C8.13417 9.6928 7.85532 9.4171 7.85532 9.07741C7.85532 8.73772 8.12801 8.46203 8.4677 8.46203H8.47386C8.81355 8.46203 9.08924 8.73772 9.08924 9.07741Z\" fill=\"#9CA3AF\"></path>
                                </svg>
                                ";
                // line 84
                echo twig_get_attribute($this->env, $this->source, $context["oct_faq"], "date_added", [], "any", false, false, false, 84);
                echo "
                            </span>
                        </div>
                        <div class=\"ds-product-reviews-item-content pt-3 fsz-14 fw-300 dark-text\">
                             <p>";
                // line 88
                echo twig_get_attribute($this->env, $this->source, $context["oct_faq"], "text", [], "any", false, false, false, 88);
                echo "</p>
                        </div>
                    </div>
                    ";
                // line 91
                if ((twig_get_attribute($this->env, $this->source, $context["oct_faq"], "answer", [], "any", true, true, false, 91) && twig_get_attribute($this->env, $this->source, $context["oct_faq"], "answer", [], "any", false, false, false, 91))) {
                    // line 92
                    echo "                        <div class=\"ds-product-reviews-item ds-product-reviews-item-answer p-3 mt-3 mt-lg-4 br-4 position-relative\">
                            <div class=\"ds-product-reviews-item-header d-flex justify-content-between align-items-center pb-3\">
                                <div class=\"ds-product-reviews-item-answer-title dark-text fw-500 fsz-14\">";
                    // line 94
                    echo ($context["text_faq_answer"] ?? null);
                    echo "</div>
                                <span class=\"d-inline-flex align-items-center fsz-12 light-text\">
                                    <svg class=\"me-1\" width=\"12\" height=\"12\" viewBox=\"0 0 12 12\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                      <path
                                            d=\"M9.69231 0.923565H8.92308V0.462027C8.92308 0.207258 8.71631 0.000488281 8.46154 0.000488281C8.20677 0.000488281 8 0.207258 8 0.462027V0.923565H4V0.462027C4 0.207258 3.79323 0.000488281 3.53846 0.000488281C3.28369 0.000488281 3.07692 0.207258 3.07692 0.462027V0.923565H2.30769C0.819692 0.923565 0 1.74326 0 3.23126V9.6928C0 11.1808 0.819692 12.0005 2.30769 12.0005H9.69231C11.1803 12.0005 12 11.1808 12 9.6928V3.23126C12 1.74326 11.1803 0.923565 9.69231 0.923565ZM2.30769 1.84664H3.07692V2.30818C3.07692 2.56295 3.28369 2.76972 3.53846 2.76972C3.79323 2.76972 4 2.56295 4 2.30818V1.84664H8V2.30818C8 2.56295 8.20677 2.76972 8.46154 2.76972C8.71631 2.76972 8.92308 2.56295 8.92308 2.30818V1.84664H9.69231C10.6628 1.84664 11.0769 2.2608 11.0769 3.23126V3.6928H0.923077V3.23126C0.923077 2.2608 1.33723 1.84664 2.30769 1.84664ZM9.69231 11.0774H2.30769C1.33723 11.0774 0.923077 10.6633 0.923077 9.6928V4.61587H11.0769V9.6928C11.0769 10.6633 10.6628 11.0774 9.69231 11.0774ZM4.16617 6.61587C4.16617 6.95557 3.89109 7.23126 3.55078 7.23126C3.21109 7.23126 2.93224 6.95557 2.93224 6.61587C2.93224 6.27618 3.20493 6.00049 3.54462 6.00049H3.55078C3.89047 6.00049 4.16617 6.27618 4.16617 6.61587ZM6.6277 6.61587C6.6277 6.95557 6.35263 7.23126 6.01232 7.23126C5.67263 7.23126 5.39378 6.95557 5.39378 6.61587C5.39378 6.27618 5.66647 6.00049 6.00616 6.00049H6.01232C6.35201 6.00049 6.6277 6.27618 6.6277 6.61587ZM9.08924 6.61587C9.08924 6.95557 8.81417 7.23126 8.47386 7.23126C8.13417 7.23126 7.85532 6.95557 7.85532 6.61587C7.85532 6.27618 8.12801 6.00049 8.4677 6.00049H8.47386C8.81355 6.00049 9.08924 6.27618 9.08924 6.61587ZM4.16617 9.07741C4.16617 9.4171 3.89109 9.6928 3.55078 9.6928C3.21109 9.6928 2.93224 9.4171 2.93224 9.07741C2.93224 8.73772 3.20493 8.46203 3.54462 8.46203H3.55078C3.89047 8.46203 4.16617 8.73772 4.16617 9.07741ZM6.6277 9.07741C6.6277 9.4171 6.35263 9.6928 6.01232 9.6928C5.67263 9.6928 5.39378 9.4171 5.39378 9.07741C5.39378 8.73772 5.66647 8.46203 6.00616 8.46203H6.01232C6.35201 8.46203 6.6277 8.73772 6.6277 9.07741ZM9.08924 9.07741C9.08924 9.4171 8.81417 9.6928 8.47386 9.6928C8.13417 9.6928 7.85532 9.4171 7.85532 9.07741C7.85532 8.73772 8.12801 8.46203 8.4677 8.46203H8.47386C8.81355 8.46203 9.08924 8.73772 9.08924 9.07741Z\"
                                            fill=\"#9CA3AF\"></path>
                                    </svg>
                                    ";
                    // line 101
                    echo twig_get_attribute($this->env, $this->source, $context["oct_faq"], "date_modified", [], "any", false, false, false, 101);
                    echo "
                                </span>
                            </div>
                            <div class=\"ds-product-reviews-item-content pt-3 fsz-14 fw-300 dark-text\">
                                ";
                    // line 105
                    echo twig_get_attribute($this->env, $this->source, $context["oct_faq"], "answer", [], "any", false, false, false, 105);
                    echo "
                            </div>
                        </div>
                    ";
                }
                // line 109
                echo "                </div>
             ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_faq'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 111
            echo "         ";
        } else {
            // line 112
            echo "             <div class=\"d-flex flex-column justify-content-center ds-empty-reviews mb-3 mb-md-0 text-center p-4 br-4\">
                 <p class=\"fw-500 fsz-16 mb-5\">";
            // line 113
            echo ($context["text_faq_empty"] ?? null);
            echo "</p>
                <svg class=\"mx-auto\" xmlns=\"http://www.w3.org/2000/svg\" width=\"80\" height=\"77\" viewBox=\"0 0 80 77\" fill=\"none\">
                    <path d=\"M39.9979 0.489746C16.4455 0.489746 0 15.2089 0 36.2815C0 44.9716 2.77917 52.7527 8.05468 58.8492C7.47787 61.4006 5.88148 65.4253 1.46066 68.9957C0.14704 70.1072 -0.323947 71.8839 0.252865 73.5133C0.829678 75.1301 2.2951 76.2035 3.97081 76.2414C4.5392 76.2624 5.11926 76.2712 5.72133 76.2712C12.0326 76.2712 19.9185 75.0415 25.4551 69.9259C30.0149 71.349 34.8992 72.0732 40.0021 72.0732C63.5545 72.0732 80 57.3541 80 36.2815C80 15.2089 63.5504 0.489746 39.9979 0.489746ZM39.9979 67.867C34.895 67.867 30.0406 67.084 25.5692 65.5388C24.7777 65.2652 23.9142 65.4845 23.3458 66.0908C18.4029 71.3663 10.2223 72.2418 4.22264 72.2418C4.19738 72.2418 4.16773 72.2418 4.14247 72.2418C8.6475 68.5999 11.5829 63.7372 12.3955 58.5501C12.4924 57.9143 12.2979 57.2702 11.86 56.7944C6.85815 51.3757 4.21031 44.2811 4.21031 36.2815C4.21031 17.6846 18.9253 4.70006 39.9979 4.70006C61.0705 4.70006 75.7856 17.6846 75.7856 36.2815C75.7856 54.8784 61.0705 67.867 39.9979 67.867ZM49.8412 27.6378C50.5401 31.6292 48.8524 35.208 45.0799 37.7216C42.6337 39.3468 42.1078 40.2979 41.9941 40.6347C41.6994 41.5104 40.8779 42.0666 39.9979 42.0666C39.7748 42.0666 39.552 42.0334 39.3247 41.9576C38.2216 41.5871 37.6322 40.3912 38.0069 39.2881C38.5795 37.5956 40.0866 35.9827 42.7517 34.2144C45.1432 32.6229 46.1113 30.707 45.6987 28.3661C45.2861 26.0462 43.3826 24.1431 41.067 23.739C39.3155 23.4316 37.6148 23.8782 36.2759 24.9981C34.9623 26.1012 34.2088 27.7178 34.2088 29.4356C34.2088 30.5977 33.2657 31.5408 32.1036 31.5408C30.9416 31.5408 29.9985 30.5977 29.9985 29.4356C29.9985 26.4716 31.3042 23.6803 33.5735 21.7772C35.8429 19.8699 38.8444 19.0824 41.7916 19.5919C45.8209 20.2992 49.1339 23.6085 49.8412 27.6378ZM43.1557 51.0135C43.1557 52.7607 41.749 54.1712 40.0144 54.1712C38.284 54.1712 36.8402 52.7607 36.8402 51.0135C36.8402 49.2662 38.217 47.8557 39.9517 47.8557H40.0144C41.749 47.8557 43.1557 49.2662 43.1557 51.0135Z\" fill=\"#F2F2F2\"/>
                </svg>
             </div>
         ";
        }
        // line 119
        echo "    </div>
    
    ";
        // line 121
        if (($context["has_more"] ?? null)) {
            // line 122
            echo "        <div id=\"faq-pagination\" class=\"d-none\" data-has-more=\"";
            echo ((($context["has_more"] ?? null)) ? ("true") : ("false"));
            echo "\" data-next-page=\"";
            echo ($context["next_page"] ?? null);
            echo "\"></div>
        <div class=\"mt-3\">
            <button id=\"load-more-faq\" class=\"ds-footer-contacts-button button button-primary br-7 mt-4\">";
            // line 124
            echo ($context["oct_show_more"] ?? null);
            echo "</button>
        </div>
    ";
        }
        // line 127
        echo "

    <script>
    \$(\"#faqInputName, #faqInputEmail, #faqText\").on(\"change paste keyup\", function() {
        \$(this).removeClass('error_style');
    });

    function loadMoreFaq() {
        if (window.loadingMoreFaq) return;
        window.loadingMoreFaq = true;
        
        var \$pagination = \$('#faq-pagination');
        var hasMore = \$pagination.attr('data-has-more');
        var nextPage = \$pagination.attr('data-next-page');
        
        if (hasMore === \"false\" || !nextPage) {
            \$('#load-more-faq').remove();
            window.loadingMoreFaq = false;
            return;
        }
        
        \$.ajax({
            url: 'index.php?route=octemplates/faq/oct_product_faq',
            type: 'GET',
            data: {
                page: nextPage,
                oct_product_id: '";
        // line 153
        echo ($context["product_id"] ?? null);
        echo "'
            },
            dataType: 'html',
            beforeSend: function() {
                \$('#load-more-faq').prop('disabled', true);
                masked('body', true);
            },
            complete: function() {
                \$('#load-more-faq').prop('disabled', false);
                masked('body', false);
            },
            success: function(html) {
                var \$temp = \$('<div>').html(html);
                var \$newFaqContainer = \$temp.find('#";
        // line 166
        echo ($context["oct_faqs_id"] ?? null);
        echo "');
                var newFaqContent = \$newFaqContainer.length ? \$newFaqContainer.html() : \$temp.html();
                \$('#";
        // line 168
        echo ($context["oct_faqs_id"] ?? null);
        echo "').append(newFaqContent);
                
                var \$newPagination = \$temp.find('#faq-pagination');
                if (\$newPagination.length) {
                    \$('#faq-pagination').attr('data-has-more', \$newPagination.attr('data-has-more'));
                    \$('#faq-pagination').attr('data-next-page', \$newPagination.attr('data-next-page'));
                    if (\$newPagination.attr('data-has-more') === \"false\") {
                        \$('#load-more-faq').remove();
                    }
                } else {
                    \$('#load-more-faq').remove();
                }
                window.loadingMoreFaq = false;
            },
            error: function() {
                window.loadingMoreFaq = false;
            }
        });
    }

    \$(document).ready(function(){
        \$(document).on('click', '#load-more-faq', function(e) {
            e.preventDefault();
            loadMoreFaq();
        });
        
        \$('#button-oct_faq').on('click', function() {
            \$.ajax({
                url: 'index.php?route=octemplates/faq/oct_product_faq/write&faqp_id=";
        // line 196
        echo ($context["product_id"] ?? null);
        echo "',
                type: 'post',
                dataType: 'json',
                data: \$(\"#form-faq\").serialize(),
                beforeSend: function() {
                    \$('#button-oct_faq').prop('disabled', true).html('<span class=\"spinner-border spinner-border-sm\" role=\"status\" aria-hidden=\"true\"></span>');
                    \$('#faqModal input, #faqModal textarea').removeClass('error_style');
                    masked('body', true);
                },
                complete: function() {
                    masked('body', false);
                    setTimeout(function () {
                        \$('#button-oct_faq').prop('disabled', false).html('";
        // line 208
        echo ($context["button_continue"] ?? null);
        echo "');
                    }, 600);
                },
                success: function(json) {
                    \$('.alert-dismissible').remove();
                    if (json['error']) {
                        var errorOption = '';
                        \$.each(json['error'], function(i, val) {
                            \$('#faqModal [name=\"' + i + '\"]').addClass('error_style');
                            errorOption += '<div class=\"alert-text-item\">' + val + '</div>';
                        });
                        scNotify('danger', errorOption);
                    }
                    if (json['success']) {
                        scNotify('success', json['success']);
                        \$('#faqModal').modal('hide');
                        \$('#form-faq input[name=\"name\"]').val('');
                        \$('#form-faq textarea[name=\"text\"]').val('');
                    }
                }
            });
        });
    });
    </script>
</div>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "oct_deals/template/octemplates/faq/oct_product_faq.twig";
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
        return array (  367 => 208,  352 => 196,  321 => 168,  316 => 166,  300 => 153,  272 => 127,  266 => 124,  258 => 122,  256 => 121,  252 => 119,  243 => 113,  240 => 112,  237 => 111,  230 => 109,  223 => 105,  216 => 101,  206 => 94,  202 => 92,  200 => 91,  194 => 88,  187 => 84,  177 => 77,  165 => 67,  160 => 66,  158 => 65,  154 => 64,  151 => 63,  141 => 56,  136 => 54,  130 => 51,  126 => 50,  114 => 47,  97 => 39,  86 => 31,  75 => 23,  65 => 16,  59 => 13,  52 => 9,  44 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oct_deals/template/octemplates/faq/oct_product_faq.twig", "");
    }
}
