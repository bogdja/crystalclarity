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

/* octemplates/module/oct_product_set_list.twig */
class __TwigTemplate_fa6de892743494ca0c8e2d957c4f37f5d1186f3606b641efca439fda6236b361 extends Template
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
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
\t<div class=\"page-header\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"pull-right\">
                <a href=\"";
        // line 6
        echo ($context["add"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\">
                    <i class=\"fa fa-plus\"></i>
                </a>
\t\t\t\t<a href=\"";
        // line 9
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\">
\t\t\t\t\t<i class=\"fa fa-reply\"></i>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<h1>";
        // line 13
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 16
            echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
            // line 17
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 17);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 17);
            echo "</a>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "\t\t\t</ul>
\t\t</div>
\t</div>
\t<div class=\"container-fluid\">
\t\t";
        // line 24
        if (($context["error_warning"] ?? null)) {
            // line 25
            echo "\t\t\t<div class=\"alert alert-danger alert-dismissible\">
\t\t\t\t<i class=\"fa fa-exclamation-circle\"></i>
\t\t\t\t";
            // line 27
            echo ($context["error_warning_info"] ?? null);
            echo "
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t\t</div>
\t\t";
        }
        // line 31
        echo "\t\t";
        if (($context["success"] ?? null)) {
            // line 32
            echo "\t\t\t<script>
\t\t\t\tusNotify('success', '";
            // line 33
            echo ($context["success"] ?? null);
            echo "');
\t\t\t</script>
\t\t";
        }
        // line 36
        echo "\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<h3 class=\"panel-title\">
\t\t\t\t\t<i class=\"fa fa-list\"></i>
\t\t\t\t\t";
        // line 40
        echo ($context["text_list"] ?? null);
        echo "</h3>
\t\t\t</div>
\t\t\t<div class=\"panel-body\">
\t\t\t\t";
        // line 43
        if (($context["product_sets"] ?? null)) {
            // line 44
            echo "\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t<h3 class=\"panel-title\"><i class=\"fa fa-filter\"></i> ";
            // line 46
            echo ($context["text_filter"] ?? null);
            echo "</h3>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t<form action=\"";
            // line 49
            echo ($context["filter_action"] ?? null);
            echo "\" method=\"get\" id=\"filter-form\">
\t\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-6 mb-3\">
\t\t\t\t\t\t\t\t\t<label for=\"filter_set_name\">";
            // line 52
            echo ($context["text_set_name"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"filter_set_name\" id=\"filter_set_name\" class=\"form-control\" value=\"";
            // line 53
            echo ($context["filter_set_name"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-6 mb-3\">
\t\t\t\t\t\t\t\t\t<label for=\"filter_product_name\">";
            // line 56
            echo ($context["text_product_name"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"filter_product_name\" id=\"filter_product_name\" class=\"form-control\" value=\"";
            // line 57
            echo ($context["filter_product_name"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t<label for=\"filter_category_name\">";
            // line 60
            echo ($context["text_category_name"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"filter_category_name\" id=\"filter_category_name\" class=\"form-control\" value=\"";
            // line 61
            echo ($context["filter_category_name"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t<label for=\"filter_manufacturer_name\">";
            // line 64
            echo ($context["text_manufacturer_name"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"filter_manufacturer_name\" id=\"filter_manufacturer_name\" class=\"form-control\" value=\"";
            // line 65
            echo ($context["filter_manufacturer_name"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">";
            // line 69
            echo ($context["button_filter"] ?? null);
            echo "</button>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-danger dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\" disabled id=\"deleteButton\">
\t\t\t\t\t\t\t<i class=\"fa fa-trash-o\"></i>
\t\t\t\t\t\t\t";
            // line 76
            echo ($context["button_delete_selected"] ?? null);
            echo "
\t\t\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<ul class=\"dropdown-menu\" role=\"menu\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a onclick=\"deleteAllSelected();\">";
            // line 81
            echo ($context["button_delete_selected"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<br/><br/>
\t\t\t\t\t<div class=\"table-responsive\" id=\"product-sets\">
\t\t\t\t\t\t<table class=\"table table-bordered table-hover\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th style=\"text-align: center;\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);checkCheckBoxes();\"/></th>
\t\t\t\t\t\t\t\t\t<th>";
            // line 91
            echo ($context["column_name"] ?? null);
            echo "</th>
\t\t\t\t\t\t\t\t\t<th>";
            // line 92
            echo ($context["column_date_added"] ?? null);
            echo "</th>
\t\t\t\t\t\t\t\t\t<th>";
            // line 93
            echo ($context["column_status"] ?? null);
            echo "</th>
\t\t\t\t\t\t\t\t\t<th>";
            // line 94
            echo ($context["column_action"] ?? null);
            echo "</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t";
            // line 98
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["product_sets"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product_set"]) {
                // line 99
                echo "\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td style=\"text-align: center;\"><input type=\"checkbox\" name=\"selected[]\" value=\"";
                // line 100
                echo twig_get_attribute($this->env, $this->source, $context["product_set"], "set_id", [], "any", false, false, false, 100);
                echo "\"/></td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<b>";
                // line 103
                echo twig_get_attribute($this->env, $this->source, $context["product_set"], "name", [], "any", false, false, false, 103);
                echo "</b>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t<p>";
                // line 105
                echo ($context["text_product_sets"] ?? null);
                echo "</p>
\t\t\t\t\t\t\t\t\t\t\t";
                // line 106
                if (twig_get_attribute($this->env, $this->source, $context["product_set"], "products", [], "any", false, false, false, 106)) {
                    // line 107
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<div style=\"display: flex; gap: 12px; flex-wrap: wrap;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 108
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product_set"], "products", [], "any", false, false, false, 108));
                    foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                        // line 109
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div style=\"margin: 4px 0; padding: 8px; border: 1px solid #f8f8f8; border-radius: 8px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                        // line 110
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 110);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 110);
                        echo "\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 110);
                        echo "\" style=\"max-height: 30px; max-width: 30px;\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"";
                        // line 111
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "edit", [], "any", false, false, false, 111);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 111);
                        echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 114
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 116
                echo "\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>";
                // line 117
                echo twig_get_attribute($this->env, $this->source, $context["product_set"], "date_added", [], "any", false, false, false, 117);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t";
                // line 119
                if (twig_get_attribute($this->env, $this->source, $context["product_set"], "status", [], "any", false, false, false, 119)) {
                    // line 120
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-success\">";
                    echo ($context["text_enabled"] ?? null);
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 122
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-danger\">";
                    echo ($context["text_disabled"] ?? null);
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 124
                echo "\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<div style=\"display: flex; gap: 8px; flex-wrap: no-wrap;\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 127
                echo twig_get_attribute($this->env, $this->source, $context["product_set"], "edit", [], "any", false, false, false, 127);
                echo "\" data-toggle=\"tooltip\" title=\"\" class=\"btn btn-primary\" data-original-title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa fa-pencil\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a onclick=\"deleteSelected(";
                // line 130
                echo twig_get_attribute($this->env, $this->source, $context["product_set"], "set_id", [], "any", false, false, false, 130);
                echo ");\" data-toggle=\"tooltip\" title=\"\" class=\"btn btn-danger\" data-original-title=\"";
                echo ($context["button_delete"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-trash-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_set'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 137
            echo "\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t";
        } else {
            // line 141
            echo "\t\t\t\t\t";
            echo ($context["text_empty"] ?? null);
            echo "
\t\t\t\t";
        }
        // line 143
        echo "\t\t\t\t";
        if (($context["pagination"] ?? null)) {
            // line 144
            echo "\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-6 text-left\">
\t\t\t\t\t\t\t<div class=\"pagination\">
\t\t\t\t\t\t\t\t<div class=\"links\">";
            // line 147
            echo ($context["pagination"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-6 text-right\">
\t\t\t\t\t\t\t<div class=\"results\">";
            // line 151
            echo ($context["results"] ?? null);
            echo "</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 155
        echo "\t\t\t</div>
\t\t</div>

\t</div>
</div>
<script>

const baseUrl = 'index.php?route=octemplates/module/oct_product_set/';
const userToken = '";
        // line 163
        echo ($context["user_token"] ?? null);
        echo "';

function sendRequest(type, action, data = {}) {
    \$.ajax({
        type: type,
        url: `\${baseUrl}\${action}&user_token=\${userToken}`,
        data: data,
        dataType: 'json',
        cache: false,
        success: function(json) {
           window.location.href = `index.php?route=octemplates/module/oct_product_set&user_token=\${userToken}`;
        },
        error: function(xhr, status, error) {
            console.error('AJAX Error:', status, error);
        }
    });
}

function deleteSelected(subscription_id) {
\tif (confirm('";
        // line 182
        echo ($context["text_confirm"] ?? null);
        echo "')) {
\t\tsendRequest('post', `deleteSelected&delete=\${subscription_id}`);
\t}
}

function deleteAllSelected() {
\tif (confirm('";
        // line 188
        echo ($context["text_confirm"] ?? null);
        echo "')) {
\t\tconst checkedInputs = \$('#product-sets input[type=\\'checkbox\\']:checked');
\t\tsendRequest('post', 'deleteAllSelected', checkedInputs);
\t}
}

function checkCheckBoxes() {
    if (\$('input[name=\"selected[]\"]:checked').length > 0) {
        \$('#deleteButton').removeAttr('disabled');
    } else {
        \$('#deleteButton').attr('disabled', 'disabled');
    }
}

\$('input[name=\"selected[]\"]').change(function() {
    checkCheckBoxes();
});

\$('#filter-form').submit(function() {
    var url = baseUrl + 'index&user_token=' + userToken;

    var filterSetName = \$('#filter_set_name').val();
    if (filterSetName) {
        url += '&filter_set_name=' + encodeURIComponent(filterSetName);
    }

    var filterProductName = \$('#filter_product_name').val();
    if (filterProductName) {
        url += '&filter_product_name=' + encodeURIComponent(filterProductName);
    }

    var filterCategoryName = \$('#filter_category_name').val();
    if (filterCategoryName) {
        url += '&filter_category_name=' + encodeURIComponent(filterCategoryName);
    }

    var filterManufacturerName = \$('#filter_manufacturer_name').val();
    if (filterManufacturerName) {
        url += '&filter_manufacturer_name=' + encodeURIComponent(filterManufacturerName);
    }

    window.location.href = url;
    return false; 
});

</script>
";
        // line 234
        echo ($context["footer"] ?? null);
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "octemplates/module/oct_product_set_list.twig";
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
        return array (  469 => 234,  420 => 188,  411 => 182,  389 => 163,  379 => 155,  372 => 151,  365 => 147,  360 => 144,  357 => 143,  351 => 141,  345 => 137,  330 => 130,  322 => 127,  317 => 124,  311 => 122,  305 => 120,  303 => 119,  298 => 117,  295 => 116,  291 => 114,  280 => 111,  272 => 110,  269 => 109,  265 => 108,  262 => 107,  260 => 106,  256 => 105,  251 => 103,  245 => 100,  242 => 99,  238 => 98,  231 => 94,  227 => 93,  223 => 92,  219 => 91,  206 => 81,  198 => 76,  188 => 69,  181 => 65,  177 => 64,  171 => 61,  167 => 60,  161 => 57,  157 => 56,  151 => 53,  147 => 52,  141 => 49,  135 => 46,  131 => 44,  129 => 43,  123 => 40,  117 => 36,  111 => 33,  108 => 32,  105 => 31,  98 => 27,  94 => 25,  92 => 24,  86 => 20,  75 => 17,  72 => 16,  68 => 15,  63 => 13,  54 => 9,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "octemplates/module/oct_product_set_list.twig", "");
    }
}
