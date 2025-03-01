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

/* extension/module/ocfilter/setting_form/tab_copy.twig */
class __TwigTemplate_bcbb3b6006d15f124dae8e4e43dc21323101abe3a008aac75753a5e3fa7bf10f extends Template
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
        echo "<h3 class=\"jumbotron\">";
        echo ($context["nav_copy_source"] ?? null);
        echo "</h3>

<div class=\"form-group\">
  <label class=\"col-sm-3 control-label\">";
        // line 4
        echo ($context["entry_copy_attribute"] ?? null);
        echo "</label>
  <div class=\"col-sm-9\">
    ";
        // line 6
        echo twig_include($this->env, $context, "extension/module/ocfilter/control/bool_button.twig", ["flag" => ($context["copy_attribute"] ?? null), "name" => "copy_attribute"]);
        echo "
    <p class=\"help-block\" id=\"text-copy-attribute-total\"><i class=\"fa fa-refresh fa-spin\"></i></p>
  </div>
</div>

<div class=\"collapse\" id=\"collapse-copy-attribute\">
  <div class=\"form-group\">
    <label class=\"col-sm-3 control-label\" new-feature>";
        // line 13
        echo ($context["entry_copy_group_as_attribute"] ?? null);
        echo "</label>
    <div class=\"col-sm-9\">
      ";
        // line 15
        echo twig_include($this->env, $context, "extension/module/ocfilter/control/bool_button.twig", ["flag" => ($context["copy_group_as_attribute"] ?? null), "name" => "copy_group_as_attribute"]);
        echo "

      <p class=\"help-block\">";
        // line 17
        echo ($context["help_copy_group_as_attribute"] ?? null);
        echo "</p>
    </div>
  </div>
  
  <div class=\"form-group\">
    <label class=\"col-lg-3 control-label\" new-feature>";
        // line 22
        echo ($context["entry_copy_attribute_data"] ?? null);
        echo "</label>
    <div class=\"col-sm-6 col-lg-4\" data-group-as-attribute=\"0\">          
      <div class=\"input-group\">
        <input type=\"text\" name=\"autocomplete_attribute\" value=\"\" placeholder=\"";
        // line 25
        echo ($context["placeholder_copy_attribute_autocomplete"] ?? null);
        echo "\" class=\"form-control\" />
        <label class=\"input-group-addon\">
          <input type=\"checkbox\" name=\"copy_attribute_id_exclude\" value=\"1\" autocomplete=\"off\" ";
        // line 27
        echo ((($context["copy_attribute_id_exclude"] ?? null)) ? ("checked") : (""));
        echo "> ";
        echo ($context["entry_copy_exclude"] ?? null);
        echo "
        </label>       
        <div class=\"input-group-btn\">
          <button type=\"button\" class=\"btn btn-default\" onclick=\"getAutoAttributes(this)\" data-loading-text=\"";
        // line 30
        echo ($context["text_loading"] ?? null);
        echo "\">";
        echo ($context["button_auto"] ?? null);
        echo "</button>
        </div>
        <div class=\"input-group-addon\"><i class=\"fa fa-bars\"></i></div>
      </div>            
      <div class=\"alert alert-success mb-0\" id=\"copy-attribute-id\" style=\"height: 150px; overflow: auto;\">
        ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["copy_attribute_id"] ?? null));
        foreach ($context['_seq'] as $context["attribute_id"] => $context["name"]) {
            // line 36
            echo "        <div id=\"copy-attribute-";
            echo $context["attribute_id"];
            echo "\">
          <i class=\"fa fa-fw fa-minus-circle\" onclick=\"\$(this).parent().remove();\"></i> ";
            // line 37
            echo $context["name"];
            echo "
          <input type=\"hidden\" name=\"copy_attribute_id[";
            // line 38
            echo $context["attribute_id"];
            echo "]\" value=\"";
            echo $context["name"];
            echo "\" />
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attribute_id'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "      </div>
      <button type=\"button\" class=\"btn btn-link\" onclick=\"\$(this).prev().html(''); buildCopyCode();\">";
        // line 42
        echo ($context["button_clear"] ?? null);
        echo "</button>
    </div>
    <div class=\"col-sm-6 col-lg-4\" data-group-as-attribute=\"1\">          
      <div class=\"input-group\">
        <input type=\"text\" name=\"autocomplete_attribute_group\" value=\"\" placeholder=\"";
        // line 46
        echo ($context["placeholder_copy_attribute_group_autocomplete"] ?? null);
        echo "\" class=\"form-control\" />
        <label class=\"input-group-addon\">
          <input type=\"checkbox\" name=\"copy_attribute_group_id_exclude\" value=\"1\" autocomplete=\"off\" ";
        // line 48
        echo ((($context["copy_attribute_group_id_exclude"] ?? null)) ? ("checked") : (""));
        echo "> ";
        echo ($context["entry_copy_exclude"] ?? null);
        echo "
        </label>          
        <div class=\"input-group-addon\"><i class=\"fa fa-bars\"></i></div>
      </div>            
      <div class=\"alert alert-success mb-0\" id=\"copy-attribute-group-id\" style=\"height: 150px; overflow: auto;\">
        ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["copy_attribute_group_id"] ?? null));
        foreach ($context['_seq'] as $context["attribute_group_id"] => $context["name"]) {
            // line 54
            echo "        <div id=\"copy-attribute-";
            echo $context["attribute_group_id"];
            echo "\">
          <i class=\"fa fa-fw fa-minus-circle\" onclick=\"\$(this).parent().remove();\"></i> ";
            // line 55
            echo $context["name"];
            echo "
          <input type=\"hidden\" name=\"copy_attribute_group_id[";
            // line 56
            echo $context["attribute_group_id"];
            echo "]\" value=\"";
            echo $context["name"];
            echo "\" />
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attribute_group_id'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "      </div>
      <button type=\"button\" class=\"btn btn-link\" onclick=\"\$(this).prev().html(''); buildCopyCode();\">";
        // line 60
        echo ($context["button_clear"] ?? null);
        echo "</button>
    </div>
    <div class=\"col-sm-6 col-lg-4\">          
      <div class=\"input-group\">
        <input type=\"text\" name=\"autocomplete_attribute_category\" value=\"\" placeholder=\"";
        // line 64
        echo ($context["placeholder_copy_category_autocomplete"] ?? null);
        echo "\" class=\"form-control\" />
        <label class=\"input-group-addon\">
          <input type=\"checkbox\" name=\"copy_attribute_category_id_exclude\" value=\"1\" autocomplete=\"off\" ";
        // line 66
        echo ((($context["copy_attribute_category_id_exclude"] ?? null)) ? ("checked") : (""));
        echo "> ";
        echo ($context["entry_copy_exclude"] ?? null);
        echo "
        </label>           
        <div class=\"input-group-addon\"><i class=\"fa fa-bars\"></i></div>
      </div>            
      <div class=\"alert alert-success mb-0\" id=\"copy-attribute-category-id\" style=\"height: 150px; overflow: auto;\">
        ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["copy_attribute_category_id"] ?? null));
        foreach ($context['_seq'] as $context["attribute_category_id"] => $context["name"]) {
            echo "        
        <div id=\"copy-attribute-category-";
            // line 72
            echo $context["attribute_category_id"];
            echo "\">
          <i class=\"fa fa-fw fa-minus-circle\" onclick=\"\$(this).parent().remove();\"></i> ";
            // line 73
            echo $context["name"];
            echo "
          <input type=\"hidden\" name=\"copy_attribute_category_id[";
            // line 74
            echo $context["attribute_category_id"];
            echo "]\" value=\"";
            echo $context["name"];
            echo "\" />
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attribute_category_id'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "      </div>
      <button type=\"button\" class=\"btn btn-link\" onclick=\"\$(this).prev().html(''); buildCopyCode();\">";
        // line 78
        echo ($context["button_clear"] ?? null);
        echo "</button>
    </div>   
    <div class=\"col-sm-offset-3 col-sm-9\">
      <p class=\"help-block\">";
        // line 81
        echo ($context["help_copy_attribute_data"] ?? null);
        echo "</p>
    </div>
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-sm-3 control-label\">";
        // line 87
        echo ($context["entry_copy_filter"] ?? null);
        echo "</label>
  <div class=\"col-sm-9\">
    ";
        // line 89
        echo twig_include($this->env, $context, "extension/module/ocfilter/control/bool_button.twig", ["flag" => ($context["copy_filter"] ?? null), "name" => "copy_filter"]);
        echo "
    <p class=\"help-block\" id=\"text-copy-filter-total\"><i class=\"fa fa-refresh fa-spin\"></i></p>
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-sm-3 control-label\">";
        // line 95
        echo ($context["entry_copy_option"] ?? null);
        echo "</label>
  <div class=\"col-sm-9\">
    ";
        // line 97
        echo twig_include($this->env, $context, "extension/module/ocfilter/control/bool_button.twig", ["flag" => ($context["copy_option"] ?? null), "name" => "copy_option"]);
        echo "
    <p class=\"help-block\" id=\"text-copy-option-total\"><i class=\"fa fa-refresh fa-spin\"></i></p>
  </div>
</div>

<div class=\"collapse\" id=\"collapse-copy-option\">
  <div class=\"form-group\">
    <label class=\"col-sm-3 control-label\" new-feature>";
        // line 104
        echo ($context["entry_copy_option_in_stock"] ?? null);
        echo "</label>
    <div class=\"col-sm-9\">
      ";
        // line 106
        echo twig_include($this->env, $context, "extension/module/ocfilter/control/bool_button.twig", ["flag" => ($context["copy_option_in_stock"] ?? null), "name" => "copy_option_in_stock"]);
        echo "

      <p class=\"help-block\">";
        // line 108
        echo ($context["help_copy_option_in_stock"] ?? null);
        echo "</p>
    </div>
  </div>
</div>

<h3 class=\"jumbotron\">";
        // line 113
        echo ($context["nav_copy_filter"] ?? null);
        echo "</h3>

<div class=\"form-group\">
  <label class=\"col-sm-3 control-label\" for=\"input-copy-type\">";
        // line 116
        echo ($context["entry_copy_type"] ?? null);
        echo "</label>
  <div class=\"col-sm-3\">
    <select name=\"copy_type\" id=\"input-copy-type\" class=\"form-control\">
      ";
        // line 119
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["types"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 120
            echo "      ";
            if (($context["type"] == ($context["copy_type"] ?? null))) {
                // line 121
                echo "      <option value=\"";
                echo $context["type"];
                echo "\" selected=\"selected\">";
                echo twig_capitalize_string_filter($this->env, $context["type"]);
                echo "</option>
      ";
            } else {
                // line 123
                echo "      <option value=\"";
                echo $context["type"];
                echo "\">";
                echo twig_capitalize_string_filter($this->env, $context["type"]);
                echo "</option>
      ";
            }
            // line 125
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        echo "    </select>
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-sm-3 control-label\" new-feature>";
        // line 131
        echo ($context["entry_copy_dropdown"] ?? null);
        echo "</label>
  <div class=\"col-sm-9\">
    ";
        // line 133
        echo twig_include($this->env, $context, "extension/module/ocfilter/control/bool_button.twig", ["flag" => ($context["copy_dropdown"] ?? null), "name" => "copy_dropdown"]);
        echo "
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-sm-3 control-label\" for=\"input-truncate\">";
        // line 138
        echo ($context["entry_copy_status"] ?? null);
        echo "</label>
  <div class=\"col-sm-9\">
    ";
        // line 140
        echo twig_include($this->env, $context, "extension/module/ocfilter/control/bool_button.twig", ["flag" => ($context["copy_status"] ?? null), "name" => "copy_status", "text_yes" => ($context["text_enabled"] ?? null), "text_no" => ($context["text_disabled"] ?? null)]);
        echo "

    <p class=\"help-block\">";
        // line 142
        echo ($context["help_copy_status"] ?? null);
        echo "</p>
  </div>
</div>

<h3 class=\"jumbotron\">";
        // line 146
        echo ($context["nav_copy_other"] ?? null);
        echo "</h3>

<div class=\"form-group\">
  <label class=\"col-sm-3 control-label\" new-feature>";
        // line 149
        echo ($context["entry_copy_value_separator"] ?? null);
        echo "</label>
  <div class=\"col-sm-5\">     
    <div class=\"input-group\">
      <div class=\"input-group-addon\">1</div>
      <input name=\"copy_value_separator[]\" type=\"text\" class=\"form-control\" placeholder=\"";
        // line 153
        echo ($context["placeholder_copy_value_separator"] ?? null);
        echo "\" value=\"";
        echo (((($__internal_compile_0 = ($context["copy_value_separator"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null)) ? ((($__internal_compile_1 = ($context["copy_value_separator"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[0] ?? null) : null)) : (""));
        echo "\" />
      <div class=\"input-group-addon\">2</div>
      <input name=\"copy_value_separator[]\" type=\"text\" class=\"form-control\" placeholder=\"";
        // line 155
        echo ($context["placeholder_copy_value_separator"] ?? null);
        echo "\" value=\"";
        echo (((($__internal_compile_2 = ($context["copy_value_separator"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[1] ?? null) : null)) ? ((($__internal_compile_3 = ($context["copy_value_separator"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[1] ?? null) : null)) : (""));
        echo "\" />
      <div class=\"input-group-addon\">3</div>
      <input name=\"copy_value_separator[]\" type=\"text\" class=\"form-control\" placeholder=\"";
        // line 157
        echo ($context["placeholder_copy_value_separator"] ?? null);
        echo "\" value=\"";
        echo (((($__internal_compile_4 = ($context["copy_value_separator"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[2] ?? null) : null)) ? ((($__internal_compile_5 = ($context["copy_value_separator"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[2] ?? null) : null)) : (""));
        echo "\" />      
    </div>    
  </div>
  <div class=\"col-sm-offset-3 col-sm-9\">
    <p class=\"help-block\">";
        // line 161
        echo ($context["help_copy_value_separator"] ?? null);
        echo "</p>
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-sm-3 control-label\">";
        // line 166
        echo ($context["entry_copy_clear_filter"] ?? null);
        echo "</label>
  <div class=\"col-sm-9\">
    ";
        // line 168
        echo twig_include($this->env, $context, "extension/module/ocfilter/control/bool_button.twig", ["flag" => ($context["copy_truncate"] ?? null), "name" => "copy_truncate"]);
        echo "
    
    <p class=\"help-block\">";
        // line 170
        echo ($context["help_copy_clear_filter"] ?? null);
        echo "</p>
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-sm-3 control-label\">";
        // line 175
        echo ($context["entry_copy_category"] ?? null);
        echo "</label>
  <div class=\"col-sm-9\">
    ";
        // line 177
        echo twig_include($this->env, $context, "extension/module/ocfilter/control/bool_button.twig", ["flag" => ($context["copy_category"] ?? null), "name" => "copy_category"]);
        echo "

    <p class=\"help-block\">";
        // line 179
        echo ($context["help_copy_category"] ?? null);
        echo "</p>
  </div>
</div>

<h3 class=\"jumbotron\">";
        // line 183
        echo ($context["nav_copy_auto"] ?? null);
        echo "</h3>

<div class=\"form-group\">
  <label class=\"col-sm-3 control-label\" new-feature>";
        // line 186
        echo ($context["text_copy_auto_code_php"] ?? null);
        echo "</label>
  <div class=\"col-sm-9\">
    <pre id=\"copy-auto-code-container-php\"></pre>
    <p class=\"help-block\">";
        // line 189
        echo ($context["help_copy_auto_code_php"] ?? null);
        echo "</p>
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-sm-3 control-label\" new-feature>";
        // line 194
        echo ($context["text_copy_auto_code_js"] ?? null);
        echo "</label>
  <div class=\"col-sm-9\">
    <pre id=\"copy-auto-code-container-js\">
&lt;script&gt;
<span class=\"text-muted\">// OCFilter copy start</span>
(<b class=\"text-warning\">function</b>() {
  <b class=\"text-warning\">var</b> token = window.location.search.match(<span class=\"text-warning\">/(user_)?token\\=(.+)(\$|&)/</span>);

  <b class=\"text-warning\">if</b> (token[0]) {
    fetch(<span class=\"text-success\">'index.php?route=extension/module/ocfilter/copy&'</span> + token[0]).then(() => {
      console.info(<span class=\"text-success\">'OCFilter Copy finished'</span>);
    }).catch(error => {
      console.warning(<span class=\"text-success\">'OCFilter Copy error '</span> + error);
    });
  }
})();
<span class=\"text-muted\">// OCFilter copy end</span>
&lt;/script&gt;</pre>
    <p class=\"help-block\">";
        // line 212
        echo ($context["help_copy_auto_code_js"] ?? null);
        echo "</p>
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-sm-3 control-label\" new-feature>";
        // line 217
        echo ($context["text_copy_auto_cron"] ?? null);
        echo "</label>
  <div class=\"col-sm-9\">
    <div id=\"cron-manager\">
      <div class=\"input-group input-group\">
        <div class=\"input-group-btn dropdown\">
          <button class=\"btn btn-default dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\"><i class=\"fa fa-clock-o\"></i> <span class=\"dropdown-label\">";
        // line 222
        echo ($context["text_cron_period"] ?? null);
        echo "</span> <i class=\"fa fa-angle-down\"></i></button>
          <ul class=\"dropdown-menu\" role=\"menu\">
            <li class=\"dropdown-header\">";
        // line 224
        echo ($context["text_cron_select_period"] ?? null);
        echo "</li>
            <li class=\"divider\"></li>

            <li><a role=\"menuitem\" href=\"#0 * * * *\">";
        // line 227
        echo ($context["text_cron_period_01"] ?? null);
        echo "</a></li>
            <li><a role=\"menuitem\" href=\"#0 */3 * * *\">";
        // line 228
        echo ($context["text_cron_period_02"] ?? null);
        echo "</a></li>
            <li><a role=\"menuitem\" href=\"#0 4 * * *\">";
        // line 229
        echo ($context["text_cron_period_03"] ?? null);
        echo "</a></li>
            <li><a role=\"menuitem\" href=\"#0 4 * * 0\">";
        // line 230
        echo ($context["text_cron_period_04"] ?? null);
        echo "</a></li>
            <li><a role=\"menuitem\" href=\"#0 */5 * * 6,0\">";
        // line 231
        echo ($context["text_cron_period_05"] ?? null);
        echo "</a></li>
            <li><a role=\"menuitem\" href=\"#0 0 1 * *\">";
        // line 232
        echo ($context["text_cron_period_06"] ?? null);
        echo "</a></li>
          </ul>
        </div>
        <div class=\"input-group-addon\">";
        // line 235
        echo ($context["text_or"] ?? null);
        echo "</div>
        <input type=\"text\" name=\"cron_period_manual\" value=\"\" class=\"form-control\" placeholder=\"";
        // line 236
        echo ($context["text_cron_period_manual"] ?? null);
        echo "\" />
      </div><!-- /.input-group -->
    </div><br />
       
    <p>";
        // line 240
        echo ($context["text_cron_bin"] ?? null);
        echo "</p>
    <kbd contenteditable=\"true\" onclick=\"document.execCommand('selectAll', false, null)\" style=\"font-size: 14px;\"><span class=\"cron-period\"></span> ";
        // line 241
        echo ($context["cron_command_bin"] ?? null);
        echo " -f ";
        echo ($context["cron_command_script"] ?? null);
        echo "</kbd>
    <br /><br />
    <p class=\"ocf-checkbox\"><input type=\"checkbox\" name=\"copy_cron_wget\" value=\"1\" id=\"input-copy-cron-wget\" autocomplete=\"off\" ";
        // line 243
        echo ((($context["copy_cron_wget"] ?? null)) ? ("checked=\"checked\"") : (""));
        echo "> <label for=\"input-copy-cron-wget\">";
        echo ($context["text_cron_wget"] ?? null);
        echo "</label></p>
    <kbd contenteditable=\"true\" onclick=\"document.execCommand('selectAll', false, null)\" style=\"font-size: 14px;\" class=\"cron-command-wget\"><span class=\"cron-period\"></span> ";
        // line 244
        echo ($context["cron_command_wget"] ?? null);
        echo "</kbd>
             
    <p class=\"help-block\">";
        // line 246
        echo ($context["help_copy_auto_cron"] ?? null);
        echo "</p>
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-sm-3 control-label\">";
        // line 251
        echo ($context["entry_copy_now"] ?? null);
        echo "</label>
  <div class=\"col-sm-3\">
    <div class=\"input-group\">
      <div class=\"input-group-btn\" style=\"width: 0%;\">
        <button type=\"button\" class=\"btn btn-lg btn-primary\" id=\"button-copy-filter\" data-loading-text=\"";
        // line 255
        echo ($context["text_loading"] ?? null);
        echo "\" data-complete-text=\"";
        echo ($context["text_complete"] ?? null);
        echo "\"><i class=\"fa fa-copy\"></i> ";
        echo ($context["button_copy"] ?? null);
        echo "</button>
      </div>
      <label class=\"input-group-addon\">
        <input type=\"checkbox\" name=\"copy_save_setting\" value=\"1\" autocomplete=\"off\"> ";
        // line 258
        echo ($context["entry_copy_save_setting"] ?? null);
        echo "
      </label>
    </div>    
  </div>
  
  <div class=\"col-sm-offset-3 col-sm-9\">
    <pre id=\"copy-log\" style=\"max-height: 300px; overflow: auto; margin-top: 20px;\"></pre>
  </div>
</div>

<script>
var 

ocfDOMReady = function(fn) {
  if (document.readyState != 'loading') {
    fn();
  } else {
    document.addEventListener('DOMContentLoaded', fn);
  }
},

buildCopyCode = function() {
  var code = '', \$control, values = [];

  code += '<span class=\"text-muted\">// OCFilter copy start</span><br>';
  code += '<span class=\"text-primary\">\$this</span>->load->controller(\\'extension/module/ocfilter/copy\\', [<br>';

  \$('#tab-copy').find('[name^=\"copy_\"]').filter('input[type=\"text\"], input[type=\"hidden\"], input[type=\"number\"], input[type=\"checkbox\"], input[type=\"radio\"]:checked, select').filter(':not([name\$=\"]\"])').each(function(i) {
    \$control = \$(this);

    if (\$control.attr('name') == 'copy_save_setting') {
      return true;
    }

    code += \"  <span class='text-success'>'\" + \$control.attr('name') + \"'</span> => \";

    if (\$control.is(':checkbox')) {
      code += '<b class=\"text-warning\">' + (\$.isNumeric(\$control.val()) ? (\$control.prop('checked') + 0) : (\$control.prop('checked') ? \$control.val() : '')) + '</b>';
    } else if (\$.isNumeric(\$control.val())) {
      code += '<b class=\"text-warning\">' + \$control.val() + '</b>';
    } else {
      code += \"<span class='text-success'>'\" + \$control.val() + \"'</span>\";
    }

    code += ',';
    
    if (\$control.closest('.form-group').find('.control-label').length) {
      code += ' <span class=\"text-muted\">// ' + \$control.closest('.form-group').find('.control-label').text() + '</span>';
    }

    code += \"<br>\";
  });
  
  // Arrays
  values = [];
  
  \$('#tab-copy').find('[name^=\"copy_value_separator[\"]').each(function() {
    \$(this).val() && values.push('<span class=\"text-success\">\\'' + \$(this).val() + '\\'</span>');    
  });

  code += '  <span class=\"text-success\">\\'copy_value_separator\\'</span> => [' + values.join(', ') + '], <span class=\"text-muted\">// <?php echo addslashes(\$entry_copy_value_separator) }}</span><br>';   
  
  // Attributes
  values = [];
  
  \$('#tab-copy').find('[name^=\"copy_attribute_id[\"]').each(function() {
    values.push('<span class=\"text-success\">\\'' + \$(this).attr('name').match(/\\[(\\d+)\\]/)[1] + '\\'</span>');    
  });

  code += '  <span class=\"text-success\">\\'copy_attribute_id\\'</span> => [' + values.join(', ') + '], <span class=\"text-muted\">// <?php echo addslashes(\$placeholder_copy_attribute_autocomplete) }}</span><br>';     
  
  // Attribute groups
  values = [];
  
  \$('#tab-copy').find('[name^=\"copy_attribute_group_id[\"]').each(function() {
    values.push('<span class=\"text-success\">\\'' + \$(this).attr('name').match(/\\[(\\d+)\\]/)[1] + '\\'</span>');    
  });

  code += '  <span class=\"text-success\">\\'copy_attribute_group_id\\'</span> => [' + values.join(', ') + '], <span class=\"text-muted\">// <?php echo addslashes(\$placeholder_copy_attribute_group_autocomplete) }}</span><br>';   

  // Categories
  values = [];
  
  \$('#tab-copy').find('[name^=\"copy_attribute_category_id[\"]').each(function() {
    values.push('<span class=\"text-success\">\\'' + \$(this).attr('name').match(/\\[(\\d+)\\]/)[1] + '\\'</span>');    
  });

  code += '  <span class=\"text-success\">\\'copy_attribute_category_id\\'</span> => [' + values.join(', ') + '], <span class=\"text-muted\">// <?php echo addslashes(\$placeholder_copy_category_autocomplete) }}</span><br>';     

  code += ']);<br>';
  code += '<span class=\"text-muted\">// OCFilter copy end</span>';

  \$('#copy-auto-code-container-php').html(code);
},

getAutoAttributes = function(btn) {
  \$(btn).button('loading');
  
  \$.get(ocfilter.link('extension/module/ocfilter/getCopyAttribute', 'exclude=' + (\$('input[name=\"copy_attribute_id_exclude\"]').prop('checked') + 0)), {}, function(response) {
    \$(btn).button('reset');
    
    for (var i = 0, len = response.length; i < len; i++) {
      \$('#copy-attribute-' + response[i].attribute_id).remove();

      \$('#copy-attribute-id').append('<div id=\"copy-attribute-' + response[i].attribute_id + '\"><i class=\"fa fa-fw fa-minus-circle\" onclick=\"\$(this).parent().remove();\"></i> ' + response[i].name + '<input type=\"hidden\" name=\"copy_attribute_id[' + response[i].attribute_id + ']\" value=\"' + response[i].name + '\" /></div>');      
    }
    
    buildCopyCode();
  }, 'json');
};

ocfDOMReady(function() {
\$(function() {
  \$('input[name=\"copy_attribute\"]').on('change', function() {
    \$('#collapse-copy-attribute').collapse(\$(this).prop('checked') && \$(this).val() == 1 ? 'show' : 'hide');
  }).filter(':checked').trigger('change');
  
  \$('input[name=\"copy_option\"]').on('change', function() {
    \$('#collapse-copy-option').collapse(\$(this).prop('checked') && \$(this).val() == 1 ? 'show' : 'hide');
  }).filter(':checked').trigger('change');  

  \$('#tab-copy').find('input, select').on('change', buildCopyCode);

  \$('#cron-manager .dropdown-menu a').on('click', function(e) {
    e.preventDefault();

    \$('.cron-period').text(\$(this).attr('href').substring(1));

    \$(this).closest('.dropdown-menu').find('li').removeClass('active');
    \$(this).parent().addClass('active').closest('.dropdown').find('.dropdown-label').text(\$(this).text());
  }).filter(':first').trigger('click');

  \$('input[name=\"cron_period_manual\"]').on('change', function(e) {
    \$('.cron-period').text(\$(this).val());
  });

  buildCopyCode();

  var timer, copyDone = false, copySuccess = false, copyHash;

  function checkLog() {
    \$('#copy-log').get(0).scrollTop = 9999;
    
    if (copyDone) {
      return;
    }
  
    \$.get(ocfilter.link('extension/module/ocfilter/getCopyLog'), {}, function(response) {
      if (response.indexOf(copyHash) !== -1) {
        copyDone = true;
        
        if (!copySuccess) {
          \$('#button-copy-filter').button('complete');

          timer = setTimeout(function() {
            \$('#button-copy-filter').button('reset');
          }, 7 * 1000);
        }
      }
    
      \$('#copy-log').html(response.replace(/\\[(.+?)\\]/g, '<b class=\"text-primary\">\$1</b>')).get(0).scrollTop = 9999;
    
      setTimeout(checkLog, 2000);
    }, 'text');
  }
  
  \$('#button-copy-filter').on('click', function(e) {
    copyHash = (new Date()).getTime();
    copyDone = false;
    copySuccess = false;
    
    clearTimeout(timer);

    if (\$('#tab-copy input[name=\"copy_truncate\"][value=\"1\"]:checked').length > 0 && !confirm('";
        // line 431
        echo ($context["text_confirm_truncate_copy"] ?? null);
        echo "')) {
      return false;
    }
    
    checkLog();    

    \$('#tab-copy > .alert').remove();

    var \$button = \$(this).button('loading');

    \$.post(ocfilter.link('extension/module/ocfilter/copy', 'copy_hash=' + copyHash), \$('#tab-copy').find('[name^=\"copy_\"]').filter('input[type=\"checkbox\"]:checked, input[type=\"radio\"]:checked, input[type=\"text\"], input[type=\"number\"], input[type=\"hidden\"], select'), function(response) {
      if (response['error']) {
        \$button.button('reset');

        \$('#tab-copy').prepend('<div class=\"alert alert-danger\" role=\"alert\">' + response['error'] + '</div>');
      }

      if (response['success']) {
        \$button.button('complete');

        timer = setTimeout(function() {
          \$button.button('reset');
        }, 7 * 1000);
        
        copySuccess = true;
      }
    }, 'json');
  });
    
  \$.get(ocfilter.link('extension/module/ocfilter/getCopyDataTotals'), {}, function(json) {
    for (var i in json) {
      if (json.hasOwnProperty(i)) {
        \$('#' + i.replace(/_/g, '-')).html(json[i]);
      }
    }
  }, 'json');  
  
\t\$('input[name=\"autocomplete_attribute\"]').autocomplete({  
\t\t'source': function(request, response) {
      var \$this = \$(this);
      
      \$this.parent().find('.input-group-addon').find('i').attr('class', 'fa fa-refresh fa-spin');  
    
\t\t\t\$.ajax({
\t\t\t\turl: ocfilter.link('extension/module/ocfilter/autocompleteAttribute', 'filter_name=' +  request),
\t\t\t\tdataType: 'json',
\t\t\t\tsuccess: function(json) {
\t\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\t\treturn {
\t\t\t\t\t\t\tlabel: item.name,
              category: item.attribute_group,
\t\t\t\t\t\t\tvalue: item.attribute_id
\t\t\t\t\t\t}
\t\t\t\t\t}));
\t\t\t\t}
\t\t\t});
      
      \$this.parent().find('.input-group-addon').find('i').attr('class', 'fa fa-bars');
\t\t},
\t\t'select': function(item) {
\t\t\t\$(this).val('');

      \$('#copy-attribute-' + item.value).remove();

      \$('#copy-attribute-id').append('<div id=\"copy-attribute-' + item.value + '\"><i class=\"fa fa-fw fa-minus-circle\" onclick=\"\$(this).parent().remove();\"></i> ' + item.label + '<input type=\"hidden\" name=\"copy_attribute_id[' + item.value + ']\" value=\"' + item.label + '\" /></div>');
      
      buildCopyCode();
\t\t}
\t}); 

\t\$('input[name=\"autocomplete_attribute_group\"]').autocomplete({  
\t\t'source': function(request, response) {
      var \$this = \$(this);
      
      \$this.parent().find('.input-group-addon').find('i').attr('class', 'fa fa-refresh fa-spin');  
    
\t\t\t\$.ajax({
\t\t\t\turl: ocfilter.link('extension/module/ocfilter/autocompleteAttributeGroup', 'filter_name=' +  request),
\t\t\t\tdataType: 'json',
\t\t\t\tsuccess: function(json) {
\t\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\t\treturn {
\t\t\t\t\t\t\tlabel: item.name,
\t\t\t\t\t\t\tvalue: item.attribute_id
\t\t\t\t\t\t}
\t\t\t\t\t}));
\t\t\t\t}
\t\t\t});
      
      \$this.parent().find('.input-group-addon').find('i').attr('class', 'fa fa-bars');
\t\t},
\t\t'select': function(item) {
\t\t\t\$(this).val('');
      
      \$('#copy-attribute-group-' + item.value).remove();

      \$('#copy-attribute-group-id').append('<div id=\"copy-attribute-group-' + item.value + '\"><i class=\"fa fa-fw fa-minus-circle\" onclick=\"\$(this).parent().remove();\"></i> ' + item.label + '<input type=\"hidden\" name=\"copy_attribute_group_id[' + item.value + ']\" value=\"' + item.label + '\" /></div>');
      
      buildCopyCode();
\t\t}
\t}); 

\t\$('input[name=\"autocomplete_attribute_category\"]').autocomplete({  
\t\t'source': function(request, response) {
      var \$this = \$(this);
      
      \$this.parent().find('.input-group-addon').find('i').attr('class', 'fa fa-refresh fa-spin');  
    
\t\t\t\$.ajax({
\t\t\t\turl: ocfilter.link('extension/module/ocfilter/autocompleteCategory', 'filter_name=' +  request),
\t\t\t\tdataType: 'json',
\t\t\t\tsuccess: function(json) {
\t\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\t\treturn {
\t\t\t\t\t\t\tlabel: item.name,
\t\t\t\t\t\t\tvalue: item.category_id
\t\t\t\t\t\t}
\t\t\t\t\t}));
\t\t\t\t}
\t\t\t});
      
      \$this.parent().find('.input-group-addon').find('i').attr('class', 'fa fa-bars');
\t\t},
\t\t'select': function(item) {
\t\t\t\$(this).val('');
      
      \$('#copy-attribute-category-' + item.value).remove();

      \$('#copy-attribute-category-id').append('<div id=\"copy-attribute-category-' + item.value + '\"><i class=\"fa fa-fw fa-minus-circle\" onclick=\"\$(this).parent().remove();\"></i> ' + item.label + '<input type=\"hidden\" name=\"copy_attribute_category_id[' + item.value + ']\" value=\"' + item.label + '\" /></div>');
      
      buildCopyCode();
\t\t}
\t});   
  
  \$('input[name=\"copy_group_as_attribute\"]').on('change', function(e) {
    \$('[data-group-as-attribute]').hide().filter('[data-group-as-attribute=\"' + \$('input[name=\"copy_group_as_attribute\"]:checked').val() + '\"]').show();
  }).filter(':checked').trigger('change');
  
  \$('input[name\$=\"_exclude\"]').on('change', function(e) {
    \$(this).closest('.input-group').next().toggleClass('alert-danger', this.checked);
  }).filter(':checked').trigger('change');  
  
  \$('#input-copy-cron-wget').on('change', function(e) {
    \$('.cron-command-wget').toggleClass('ocf-opacity-50', !this.checked);
  }).trigger('change');        
});
}); // DOM Ready
</script>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "extension/module/ocfilter/setting_form/tab_copy.twig";
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
        return array (  779 => 431,  603 => 258,  593 => 255,  586 => 251,  578 => 246,  573 => 244,  567 => 243,  560 => 241,  556 => 240,  549 => 236,  545 => 235,  539 => 232,  535 => 231,  531 => 230,  527 => 229,  523 => 228,  519 => 227,  513 => 224,  508 => 222,  500 => 217,  492 => 212,  471 => 194,  463 => 189,  457 => 186,  451 => 183,  444 => 179,  439 => 177,  434 => 175,  426 => 170,  421 => 168,  416 => 166,  408 => 161,  399 => 157,  392 => 155,  385 => 153,  378 => 149,  372 => 146,  365 => 142,  360 => 140,  355 => 138,  347 => 133,  342 => 131,  335 => 126,  329 => 125,  321 => 123,  313 => 121,  310 => 120,  306 => 119,  300 => 116,  294 => 113,  286 => 108,  281 => 106,  276 => 104,  266 => 97,  261 => 95,  252 => 89,  247 => 87,  238 => 81,  232 => 78,  229 => 77,  218 => 74,  214 => 73,  210 => 72,  204 => 71,  194 => 66,  189 => 64,  182 => 60,  179 => 59,  168 => 56,  164 => 55,  159 => 54,  155 => 53,  145 => 48,  140 => 46,  133 => 42,  130 => 41,  119 => 38,  115 => 37,  110 => 36,  106 => 35,  96 => 30,  88 => 27,  83 => 25,  77 => 22,  69 => 17,  64 => 15,  59 => 13,  49 => 6,  44 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/ocfilter/setting_form/tab_copy.twig", "/home3/crysta22/public_html/admin/view/template/extension/module/ocfilter/setting_form/tab_copy.twig");
    }
}
