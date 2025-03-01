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

/* extension/module/ocfilter/setting_form/tab_placement.twig */
class __TwigTemplate_cb138a07fa56a9d361c5c00d2733a5f54f75c0e08db696659f05c17dc350b2d7 extends Template
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
        echo "<div class=\"alert alert-info\" role=\"alert\">";
        echo ($context["text_placement"] ?? null);
        echo "</div>
<div class=\"row\" id=\"placement-content\">
  <div class=\"col-sm-3\">
    <div class=\"jumbotron\" style=\"padding: 15px;\">
      <ul class=\"nav nav-pills nav-stacked\">
        <li role=\"presentation\"><a href=\"#\" onclick=\"addModulePlace(); return false;\"><i class=\"fa fa-plus-circle\"></i> ";
        // line 6
        echo ($context["button_add_placement"] ?? null);
        echo "</a></li>
        ";
        // line 7
        $context["placement_row"] = 0;
        // line 8
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["placement_layout"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["place"]) {
            // line 9
            echo "        <li role=\"presentation\"><a href=\"#tab-place-";
            echo ($context["placement_row"] ?? null);
            echo "\" role=\"tab\" data-toggle=\"tab\"><span class=\"pull-right\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
            echo ($context["button_remove_placement"] ?? null);
            echo "\" onclick=\"removeModulePlace('";
            echo ($context["placement_row"] ?? null);
            echo "');\"><i class=\"fa fa-lg fa-times-circle\"></i></span> ";
            echo twig_get_attribute($this->env, $this->source, $context["place"], "layout_name", [], "any", false, false, false, 9);
            echo "</a></li>
        ";
            // line 10
            $context["placement_row"] = (($context["placement_row"] ?? null) + 1);
            // line 11
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['place'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "      </ul>
    </div>
  </div>
  <div class=\"col-sm-9\">
    <div class=\"tab-content\">
      ";
        // line 17
        $context["placement_row"] = 0;
        // line 18
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["placement_layout"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["place"]) {
            // line 19
            echo "      <div role=\"tabpanel\" class=\"tab-pane\" id=\"tab-place-";
            echo ($context["placement_row"] ?? null);
            echo "\">
        <div class=\"form-group\">
          <label class=\"col-sm-3 control-label\">";
            // line 21
            echo ($context["entry_placement_layout"] ?? null);
            echo "</label>
          <div class=\"col-sm-5\">
            <select name=\"placement_layout[";
            // line 23
            echo ($context["placement_row"] ?? null);
            echo "][layout_id]\" class=\"form-control\" data-row=\"";
            echo ($context["placement_row"] ?? null);
            echo "\">
              <option value=\"\">";
            // line 24
            echo ($context["text_select"] ?? null);
            echo "</option>
              ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["layouts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
                // line 26
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 26) == twig_get_attribute($this->env, $this->source, $context["place"], "layout_id", [], "any", false, false, false, 26))) {
                    // line 27
                    echo "              <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 27);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 27);
                    echo "</option>
              ";
                } else {
                    // line 29
                    echo "              <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 29);
                    echo "\" ";
                    echo ((twig_get_attribute($this->env, $this->source, $context["layout"], "disabled", [], "any", false, false, false, 29)) ? ("disabled=\"disabled\"") : (""));
                    echo ">";
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 29);
                    echo "</option>
              ";
                }
                // line 31
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "            </select>
          </div>
        </div>
        <div class=\"form-group\">
          <label class=\"col-sm-3 control-label\">";
            // line 36
            echo ($context["entry_placement_filter"] ?? null);
            echo "</label>
          <div class=\"col-sm-9\">
            <div class=\"input-group\">
              <input type=\"text\" name=\"autocomplete_filter[";
            // line 39
            echo ($context["placement_row"] ?? null);
            echo "]\" value=\"\" placeholder=\"";
            echo ($context["placeholder_autocomplete"] ?? null);
            echo "\" class=\"form-control\" />
              <div class=\"input-group-addon\"><i class=\"fa fa-bars\"></i></div>
            </div>            
            <div class=\"well well-sm\" id=\"placement-filter-";
            // line 42
            echo ($context["placement_row"] ?? null);
            echo "\" style=\"height: 150px; overflow: auto;\">
              ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["place"], "filters", [], "any", false, false, false, 43));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                // line 44
                echo "              <div id=\"placemenet-filter-";
                echo ($context["placement_row"] ?? null);
                echo "-";
                echo twig_get_attribute($this->env, $this->source, $context["filter"], "filter_id", [], "any", false, false, false, 44);
                echo "-";
                echo twig_get_attribute($this->env, $this->source, $context["filter"], "source", [], "any", false, false, false, 44);
                echo "\">
                <i class=\"fa fa-fw fa-minus-circle\" onclick=\"\$(this).parent().remove();\"></i> ";
                // line 45
                echo twig_get_attribute($this->env, $this->source, $context["filter"], "name", [], "any", false, false, false, 45);
                echo "
                <input type=\"hidden\" name=\"placement_layout[";
                // line 46
                echo ($context["placement_row"] ?? null);
                echo "][filters][]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["filter"], "filter_key", [], "any", false, false, false, 46);
                echo "\" />
              </div>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "            </div>
          </div>
        </div>
      </div>
      ";
            // line 53
            $context["placement_row"] = (($context["placement_row"] ?? null) + 1);
            // line 54
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['place'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "    </div>
  </div>
</div>
<script id=\"template-placement-row\" type=\"text/x-handlebars-template\">
<div role=\"tabpanel\" class=\"tab-pane\" id=\"tab-place-{row}\">
  <div class=\"form-group\">
    <label class=\"col-sm-3 control-label\">";
        // line 61
        echo ($context["entry_placement_layout"] ?? null);
        echo "</label>
    <div class=\"col-sm-5\">
      <select name=\"placement_layout[{row}][layout_id]\" class=\"form-control\" data-row=\"{row}\">
        <option value=\"\">";
        // line 64
        echo ($context["text_select"] ?? null);
        echo "</option>
        ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layouts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
            // line 66
            echo "        <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 66);
            echo "\" ";
            echo ((twig_get_attribute($this->env, $this->source, $context["layout"], "disabled", [], "any", false, false, false, 66)) ? ("disabled=\"disabled\"") : (""));
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 66);
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "      </select>
    </div>
  </div>
  <div class=\"form-group\">
    <label class=\"col-sm-3 control-label\">";
        // line 72
        echo ($context["entry_placement_filter"] ?? null);
        echo "</label>
    <div class=\"col-sm-9\">
      <div class=\"input-group\">
        <input type=\"text\" name=\"autocomplete_filter[{row}]\" value=\"\" placeholder=\"";
        // line 75
        echo ($context["placeholder_autocomplete"] ?? null);
        echo "\" class=\"form-control\" data-placement-row=\"{row}\" />
        <div class=\"input-group-addon\"><i class=\"fa fa-bars\"></i></div>
      </div>       
      <div class=\"well well-sm\" id=\"placement-filter-{row}\" style=\"height: 150px; overflow: auto;\"></div>
    </div>
  </div>
</div>
</script>
<script>
var

ocfDOMReady = function(fn) {
  if (document.readyState != 'loading') {
    fn();
  } else {
    document.addEventListener('DOMContentLoaded', fn);
  }
},

placement_row = ";
        // line 94
        echo ($context["placement_row"] ?? null);
        echo ",

addModulePlace = function() {
  \$('#placement-content .tab-content').prepend(\$('#template-placement-row').html().replace(/\\{row\\}/g, placement_row));

  \$('#placement-content .nav.nav-pills').find('> li:eq(0)').after('<li role=\"presentation\"><a href=\"#tab-place-' + placement_row + '\" role=\"tab\" data-toggle=\"tab\"><span class=\"pull-right\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
        // line 99
        echo ($context["button_remove_placement"] ?? null);
        echo "\" onclick=\"removeModulePlace(\\'' + placement_row + '\\');\"><i class=\"fa fa-lg fa-times-circle\"></i></span> ";
        echo ($context["text_new_placement"] ?? null);
        echo "</a></li>');
  \$('#placement-content .nav.nav-pills').find('> li:eq(1) > a').tab('show');

  \$('a[href=\"#tab-place-' + placement_row + '\"] [data-toggle=\"tooltip\"]').tooltip({ container: 'body', html: true });

  filterAutocomplete(placement_row);

  placement_row++;
},

removeModulePlace = function(placement_row) {
  \$('#tab-place-' + placement_row + ', a[href=\"#tab-place-' + placement_row + '\"]').remove();

  let \$tabs = \$('a[href^=\"#tab-place-\"]');

  if (\$tabs.length > 0) {
    \$tabs.filter(':first').tab('show');
  }
},

filterAutocomplete = function(placement_row) {
\t\$('input[name=\"autocomplete_filter[' + placement_row + ']\"]').autocomplete({  
\t\t'source': function(request, response) {
      var \$this = \$(this);
      
      \$this.parent().find('.input-group-addon').find('i').attr('class', 'fa fa-refresh fa-spin');  
    
\t\t\t\$.ajax({
\t\t\t\turl: ocfilter.link('extension/module/ocfilter/filter/autocompleteFilters', 'filter_status=1&filter_name=' +  request),
\t\t\t\tdataType: 'json',
\t\t\t\tsuccess: function(json) {
\t\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\t\treturn {
\t\t\t\t\t\t\tcategory: item.category,
\t\t\t\t\t\t\tlabel: item.name,
\t\t\t\t\t\t\tvalue: item.filter_key,
              filter_id: item.filter_id,
              source: item.source,
\t\t\t\t\t\t}
\t\t\t\t\t}));
\t\t\t\t}
\t\t\t});
      
      \$this.parent().find('.input-group-addon').find('i').attr('class', 'fa fa-bars');
\t\t},
\t\t'select': function(item) {
\t\t\t\$('input[name=\"autocomplete_filter[' + placement_row + ']\"]').val('');

      \$('#placement-filter-' + placement_row).append('<div id=\"placemenet-filter-' + placement_row + '-' + item['filter_id'] + '-' + item['source'] + '\"><i class=\"fa fa-fw fa-minus-circle\" onclick=\"\$(this).parent().remove();\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"placement_layout[' + placement_row + '][filters][]\" value=\"' + item['value'] + '\" /></div>');
\t\t}
\t});
};

ocfDOMReady(function() {
  \$(function() {
    \$('#placement-content .tab-pane').each(function(index, element) {
       filterAutocomplete(index);
    });

    \$('#placement-content').on('change', 'select[name\$=\"[layout_id]\"]', function() {
      let \$tab = \$('a[href=\"#tab-place-' + \$(this).data().row + '\"]');

      \$tab.html(\$tab.html().replace(\$tab.text(), '') + \$(this).find('option[value=\"' + \$(this).val() + '\"]').text());
    });

    \$('#placement-content .nav.nav-pills').find('> li:eq(1) > a').tab('show');
  });
});  
</script>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "extension/module/ocfilter/setting_form/tab_placement.twig";
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
        return array (  285 => 99,  277 => 94,  255 => 75,  249 => 72,  243 => 68,  230 => 66,  226 => 65,  222 => 64,  216 => 61,  208 => 55,  202 => 54,  200 => 53,  194 => 49,  183 => 46,  179 => 45,  170 => 44,  166 => 43,  162 => 42,  154 => 39,  148 => 36,  142 => 32,  136 => 31,  126 => 29,  118 => 27,  115 => 26,  111 => 25,  107 => 24,  101 => 23,  96 => 21,  90 => 19,  85 => 18,  83 => 17,  76 => 12,  70 => 11,  68 => 10,  57 => 9,  52 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/ocfilter/setting_form/tab_placement.twig", "/home3/crysta22/public_html/admin/view/template/extension/module/ocfilter/setting_form/tab_placement.twig");
    }
}
