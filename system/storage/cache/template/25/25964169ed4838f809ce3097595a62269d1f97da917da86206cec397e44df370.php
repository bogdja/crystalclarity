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

/* oct_deals/template/octemplates/module/oct_static_subscribe.twig */
class __TwigTemplate_b8c981b5b346f7eec2ce073ac6aebc72ce3fb7248f1a07eee3b8e4dedc520989 extends Template
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
        echo "<div class=\"col-md-8 col-xl-6 ds-footer-subscribe mb-3 mb-md-0\">
\t<div class=\"d-flex justify-content-center justify-content-md-end position-relative overflow-hidden\">
\t\t<div id=\"subscribeContainer\">
\t\t\t<div class=\"d-flex flex-column flex-md-row justify-content-center justify-content-md-end align-items-center align-items-md-start\">
\t\t\t\t<div class=\"ds-footer-subscribe-text fsz-14 secondary-text text-center text-md-start mb-3 mb-md-0\">
\t\t\t\t\t";
        // line 6
        echo ($context["text_static_subscribe"] ?? null);
        echo "
\t\t\t\t</div>
\t\t\t\t<button type=\"button\" class=\"ds-footer-subscribe-button button button-outline button-outline-primary br-7\">
\t\t\t\t\t<svg width=\"21\" height=\"18\" viewBox=\"0 0 21 18\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t<path
\t\t\t\t\t\t\td=\"M10 15.5C10 15.776 9.776 16 9.5 16H3.5C1.21 16 0 14.79 0 12.5V3.5C0 1.21 1.21 0 3.5 0H15.5C17.79 0 19 1.21 19 3.5V6.5C19 6.776 18.776 7 18.5 7C18.224 7 18 6.776 18 6.5V3.5C18 1.771 17.229 1 15.5 1H3.5C1.771 1 1 1.771 1 3.5V12.5C1 14.229 1.771 15 3.5 15H9.5C9.776 15 10 15.224 10 15.5ZM15.4041 4.20599C15.2411 3.98199 14.9271 3.93399 14.7061 4.09599L9.79395 7.668C9.61795 7.796 9.38205 7.795 9.20605 7.668L4.29395 4.09599C4.07095 3.93399 3.75895 3.98199 3.59595 4.20599C3.43395 4.42899 3.48305 4.74201 3.70605 4.90401L8.61792 8.476C8.88192 8.668 9.19 8.76401 9.5 8.76401C9.809 8.76401 10.1181 8.668 10.3821 8.476L15.2939 4.90401C15.5179 4.74201 15.5661 4.42899 15.4041 4.20599ZM17.75 13H17V12.25C17 11.974 16.776 11.75 16.5 11.75C16.224 11.75 16 11.974 16 12.25V13H15.25C14.974 13 14.75 13.224 14.75 13.5C14.75 13.776 14.974 14 15.25 14H16V14.75C16 15.026 16.224 15.25 16.5 15.25C16.776 15.25 17 15.026 17 14.75V14H17.75C18.026 14 18.25 13.776 18.25 13.5C18.25 13.224 18.026 13 17.75 13ZM21 13.5C21 15.981 18.981 18 16.5 18C14.019 18 12 15.981 12 13.5C12 11.019 14.019 9 16.5 9C18.981 9 21 11.019 21 13.5ZM20 13.5C20 11.57 18.43 10 16.5 10C14.57 10 13 11.57 13 13.5C13 15.43 14.57 17 16.5 17C18.43 17 20 15.43 20 13.5Z\"
\t\t\t\t\t\t\tfill=\"white\" />
\t\t\t\t\t</svg>
\t\t\t\t\t<span class=\"button-text fsz-14 fw-400\">";
        // line 14
        echo ($context["button_subscribe"] ?? null);
        echo "</span>
\t\t\t\t</button>
\t\t\t</div>
\t\t</div>
\t\t<form action=\"javascript:;\" id=\"footer-subscribe\" class=\"ds-footer-subscribe-input position-absolute\">
\t\t\t<div class=\"d-flex flex-column flex-md-row\">
\t\t\t\t<input type=\"email\" id=\"InputSubscribeEmail\" class=\"form-control mb-2 mb-md-0 ms-lg-auto\" name=\"email\" inputmode=\"email\" placeholder=\"";
        // line 20
        echo ($context["enter_email_static_subscribe"] ?? null);
        echo "\">
\t\t\t\t<button type=\"submit\" id=\"footer-make-subscribe\" class=\"button button-primary br-7 flex-grow-1 flex-lg-grow-0\">";
        // line 21
        echo ($context["oct_text_subscribe_button"] ?? null);
        echo "</button>
\t\t\t</div>
\t\t\t";
        // line 23
        if (($context["text_terms"] ?? null)) {
            // line 24
            echo "\t\t\t<div class=\"form-check mt-1\">
\t\t\t\t<input type=\"checkbox\" class=\"form-check-input\" name=\"agree\" id=\"oct-scales-static\">
\t\t\t\t<label class=\"form-check-label\" for=\"oct-scales-static\">";
            // line 26
            echo ($context["text_terms"] ?? null);
            echo "</label>
\t\t\t</div>
\t\t\t";
        }
        // line 29
        echo "\t\t</form>
\t</div>
\t<script>
\t\tdocument.addEventListener('DOMContentLoaded', function() {
\t\t\tfooterSubscribe();
\t\t});
\t</script>
</div>
<script>
\$(\"#InputSubscribeEmail, #oct-scales-static\").on(\"change paste keyup\", function() {
\t\$(this).removeClass('error_style');
});
\$('#footer-make-subscribe').on('click', function() {
\t\$.ajax({
\t\ttype: 'post',
\t\turl:  'index.php?route=octemplates/module/oct_subscribe/makeSubscribe',
\t\tdataType: 'json',
\t\tcache: false,
\t\tdata: \$('#footer-subscribe').serialize(),
\t\tsuccess: function(json) {
\t\t\tif (json['error']) {
\t\t\t\t\$('#us-subscribe-modal .text-danger').remove();
\t\t\t\tlet errorOption = '';

\t\t\t\t\$.each(json['error'], function(i, val) {
\t\t\t\t\t\$('#footer-subscribe [name=\"' + i + '\"]').addClass('error_style');
\t\t\t\t\terrorOption += '<div class=\"alert-text-item\">' + val + '</div>';
\t\t\t\t});

\t\t\t\tscNotify('danger', errorOption);
\t\t\t} else {
\t\t\t\tif (json['output']) {
\t\t\t\t\t\$('#footer-subscribe [name=\"email\"]').val('');
\t\t\t\t\tscNotify('success', '<div class=\"alert-text-item\">' + json['output'] + '</div>');
\t\t\t\t\tfooterSubscribeClose();
\t\t\t\t\t\$('#footer-subscribe [name=\"agree\"]').prop('checked', false);
\t\t\t\t}
\t\t\t}
\t\t}
\t});
});
</script>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "oct_deals/template/octemplates/module/oct_static_subscribe.twig";
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
        return array (  85 => 29,  79 => 26,  75 => 24,  73 => 23,  68 => 21,  64 => 20,  55 => 14,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oct_deals/template/octemplates/module/oct_static_subscribe.twig", "");
    }
}
