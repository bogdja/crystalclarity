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

/* extension/module/ocfilter/setting_form/tab_special_filter.twig */
class __TwigTemplate_82071105bc165e156f363f8c0ab24c155d81e1ffe22a0dc0b5008d6e8da9296b extends Template
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
        echo "<div role=\"tabs\">
  <div class=\"row\">
    <div class=\"col-md-3\">
      <div class=\"jumbotron\" style=\"padding: 15px;\">
        <ul class=\"nav nav-pills nav-stacked\" role=\"tablist\">
          <li class=\"active\"><a href=\"#tab-special-price\" data-toggle=\"tab\"><i class=\"fa fa-fw fa-usd\"></i> ";
        // line 6
        echo ($context["tab_price"] ?? null);
        echo "</a></li>
          <li><a href=\"#tab-special-manufacturer\" data-toggle=\"tab\"><i class=\"fa fa-fw fa-industry\"></i> ";
        // line 7
        echo ($context["tab_manufacturer"] ?? null);
        echo "</a></li>
          <li new-feature><a href=\"#tab-special-discount\" data-toggle=\"tab\"><i class=\"fa fa-fw fa-certificate\"></i> ";
        // line 8
        echo ($context["tab_discount"] ?? null);
        echo "</a></li>
          <li new-feature><a href=\"#tab-special-newest\" data-toggle=\"tab\"><i class=\"fa fa-fw fa-flash\"></i> ";
        // line 9
        echo ($context["tab_newest"] ?? null);
        echo "</a></li>
          <li new-feature><a href=\"#tab-special-dimension\" data-toggle=\"tab\"><i class=\"fa fa-fw fa-arrows-alt\"></i> ";
        // line 10
        echo ($context["tab_dimension"] ?? null);
        echo "</a></li>
          <li><a href=\"#tab-special-stock\" data-toggle=\"tab\"><i class=\"fa fa-fw fa-cubes\"></i> ";
        // line 11
        echo ($context["tab_stock"] ?? null);
        echo "</a></li>        
        </ul>
      </div>
    </div>
    <div class=\"col-md-9\">
      <div class=\"tab-content\">
        <div role=\"tabpanel\" class=\"tab-pane active\" id=\"tab-special-price\">
          <div class=\"form-group\">
            <label class=\"col-sm-3 control-label\">";
        // line 19
        echo ($context["entry_special_price"] ?? null);
        echo "</label>
            <div class=\"col-sm-9\">
              ";
        // line 21
        echo twig_include($this->env, $context, "extension/module/ocfilter/control/bool_button.twig", ["flag" => ($context["special_price"] ?? null), "name" => "special_price", "text_yes" => ($context["text_enabled"] ?? null), "text_no" => ($context["text_disabled"] ?? null)]);
        echo "
            </div>
          </div>
          
          <div class=\"form-group\">
            <label class=\"col-sm-3 control-label\" new-feature for=\"input-price-sort-order\">";
        // line 26
        echo ($context["entry_sort_order"] ?? null);
        echo "</label>
            <div class=\"col-sm-6\">
              ";
        // line 28
        echo twig_include($this->env, $context, "extension/module/ocfilter/control/sort_order.twig", ["sort_order" => ($context["special_price_sort_order"] ?? null), "name" => "special_price_sort_order"]);
        echo "
            </div>
          </div>          
          
          <div class=\"form-group\">
            <label class=\"col-sm-3 control-label\" new-feature>";
        // line 33
        echo ($context["entry_special_price_logarithmic"] ?? null);
        echo "</label>
            <div class=\"col-sm-9\">
              ";
        // line 35
        echo twig_include($this->env, $context, "extension/module/ocfilter/control/bool_button.twig", ["flag" => ($context["special_price_logarithmic"] ?? null), "name" => "special_price_logarithmic", "text_yes" => ($context["text_enabled"] ?? null), "text_no" => ($context["text_disabled"] ?? null)]);
        echo "                           
            </div>
          </div>          
          
          <div class=\"form-group\">
            <label class=\"col-sm-3 control-label\" new-feature>";
        // line 40
        echo ($context["entry_consider_tax"] ?? null);
        echo "</label>
            <div class=\"col-sm-9\">
              ";
        // line 42
        echo twig_include($this->env, $context, "extension/module/ocfilter/control/bool_button.twig", ["flag" => ($context["special_price_consider_tax"] ?? null), "name" => "special_price_consider_tax"]);
        echo "

              <p class=\"help-block\">";
        // line 44
        echo ($context["help_consider_tax"] ?? null);
        echo "</p>
            </div>
          </div>

          <h3 class=\"jumbotron\">";
        // line 48
        echo ($context["nav_price_source"] ?? null);
        echo "</h3>

          <div class=\"form-group\">
            <label class=\"col-sm-3 control-label\">";
        // line 51
        echo ($context["entry_special_price_consider_regular_price"] ?? null);
        echo "</label>
            <div class=\"col-sm-9\">
              ";
        // line 53
        echo twig_include($this->env, $context, "extension/module/ocfilter/control/bool_button.twig", ["flag" => ($context["special_price_consider_regular_price"] ?? null), "name" => "special_price_consider_regular_price"]);
        echo "

              <p class=\"help-block\">";
        // line 55
        echo ($context["help_special_price_consider_regular_price"] ?? null);
        echo "</p>
            </div>
          </div>

          <div class=\"form-group\">
            <label class=\"col-sm-3 control-label\">";
        // line 60
        echo ($context["entry_special_price_consider_discount"] ?? null);
        echo "</label>
            <div class=\"col-sm-9\">
              ";
        // line 62
        echo twig_include($this->env, $context, "extension/module/ocfilter/control/bool_button.twig", ["flag" => ($context["special_price_consider_discount"] ?? null), "name" => "special_price_consider_discount"]);
        echo "

              <p class=\"help-block\">";
        // line 64
        echo ($context["help_special_price_consider_discount"] ?? null);
        echo "</p>
            </div>
          </div>

          <div class=\"form-group\">
            <label class=\"col-sm-3 control-label\">";
        // line 69
        echo ($context["entry_special_price_consider_special"] ?? null);
        echo "</label>
            <div class=\"col-sm-9\">
              ";
        // line 71
        echo twig_include($this->env, $context, "extension/module/ocfilter/control/bool_button.twig", ["flag" => ($context["special_price_consider_special"] ?? null), "name" => "special_price_consider_special"]);
        echo "

              <p class=\"help-block\">";
        // line 73
        echo ($context["help_special_price_consider_special"] ?? null);
        echo "</p>
            </div>
          </div>

          <div class=\"form-group\">
            <label class=\"col-sm-3 control-label\">";
        // line 78
        echo ($context["entry_special_price_consider_option"] ?? null);
        echo "</label>
            <div class=\"col-sm-9\">
              ";
        // line 80
        echo twig_include($this->env, $context, "extension/module/ocfilter/control/bool_button.twig", ["flag" => ($context["special_price_consider_option"] ?? null), "name" => "special_price_consider_option"]);
        echo "

              <p class=\"help-block\">";
        // line 82
        echo ($context["help_special_price_consider_option"] ?? null);
        echo "</p>
            </div>
          </div>          
        </div><!-- /.price -->
        
        <div role=\"tabpanel\" class=\"tab-pane\" id=\"tab-special-manufacturer\">
          <div class=\"form-group\">
            <label class=\"col-sm-3 control-label\">";
        // line 89
        echo ($context["entry_special_manufacturer"] ?? null);
        echo "</label>
            <div class=\"col-sm-9\">
              ";
        // line 91
        echo twig_include($this->env, $context, "extension/module/ocfilter/control/bool_button.twig", ["flag" => ($context["special_manufacturer"] ?? null), "name" => "special_manufacturer", "text_yes" => ($context["text_enabled"] ?? null), "text_no" => ($context["text_disabled"] ?? null)]);
        echo "
              <p class=\"help-block\">";
        // line 92
        echo ($context["help_special_manufacturer"] ?? null);
        echo "</p>      
            </div>
          </div>
          
          <div class=\"form-group\">
            <label class=\"col-sm-3 control-label\" new-feature for=\"input-manufacturer-sort-order\">";
        // line 97
        echo ($context["entry_sort_order"] ?? null);
        echo "</label>
            <div class=\"col-sm-6\">
              ";
        // line 99
        echo twig_include($this->env, $context, "extension/module/ocfilter/control/sort_order.twig", ["sort_order" => ($context["special_manufacturer_sort_order"] ?? null), "name" => "special_manufacturer_sort_order"]);
        echo "
            </div>
          </div>
          
          <div class=\"form-group\">
            <label class=\"col-sm-3 control-label\" for=\"input-manufacturer-type\">";
        // line 104
        echo ($context["entry_type"] ?? null);
        echo "</label>
            <div class=\"col-sm-3\">
              <select name=\"special_manufacturer_type\" id=\"input-manufacturer-type\" class=\"form-control\">
                ";
        // line 107
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["types"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 108
            echo "                ";
            if (($context["type"] == ($context["special_manufacturer_type"] ?? null))) {
                // line 109
                echo "                <option value=\"";
                echo $context["type"];
                echo "\" selected=\"selected\">";
                echo twig_capitalize_string_filter($this->env, $context["type"]);
                echo "</option>
                ";
            } else {
                // line 111
                echo "                <option value=\"";
                echo $context["type"];
                echo "\">";
                echo twig_capitalize_string_filter($this->env, $context["type"]);
                echo "</option>
                ";
            }
            // line 113
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        echo "              </select>
            </div>
          </div>

          <div class=\"form-group\">
            <label class=\"col-sm-3 control-label\" new-feature>";
        // line 119
        echo ($context["entry_special_manufacturer_dropdown"] ?? null);
        echo "</label>
            <div class=\"col-sm-5\">
              ";
        // line 121
        echo twig_include($this->env, $context, "extension/module/ocfilter/control/bool_button.twig", ["flag" => ($context["special_manufacturer_dropdown"] ?? null), "name" => "special_manufacturer_dropdown", "text_yes" => ($context["text_enabled"] ?? null), "text_no" => ($context["text_disabled"] ?? null)]);
        echo "
            </div>
          </div>
          
          <div class=\"form-group\">
            <label class=\"col-sm-3 control-label\" new-feature>";
        // line 126
        echo ($context["entry_special_manufacturer_image"] ?? null);
        echo "</label>
            <div class=\"col-sm-5\">
              ";
        // line 128
        echo twig_include($this->env, $context, "extension/module/ocfilter/control/bool_button.twig", ["flag" => ($context["special_manufacturer_image"] ?? null), "name" => "special_manufacturer_image"]);
        echo "
            </div>
          </div>
        </div><!-- /.manufacturer -->
        
        <div role=\"tabpanel\" class=\"tab-pane\" id=\"tab-special-discount\">
          <div class=\"form-group\">
            <label class=\"col-sm-3 control-label\">";
        // line 135
        echo ($context["entry_special_discount"] ?? null);
        echo "</label>
            <div class=\"col-sm-9\">
              ";
        // line 137
        echo twig_include($this->env, $context, "extension/module/ocfilter/control/bool_button.twig", ["flag" => ($context["special_discount"] ?? null), "name" => "special_discount", "text_yes" => ($context["text_enabled"] ?? null), "text_no" => ($context["text_disabled"] ?? null)]);
        echo "
              <p class=\"help-block\">";
        // line 138
        echo ($context["help_special_discount"] ?? null);
        echo "</p>      
            </div>
          </div>

          <div class=\"form-group\">
            <label class=\"col-sm-3 control-label\" for=\"input-discount-sort-order\">";
        // line 143
        echo ($context["entry_sort_order"] ?? null);
        echo "</label>
            <div class=\"col-sm-6\">
              ";
        // line 145
        echo twig_include($this->env, $context, "extension/module/ocfilter/control/sort_order.twig", ["sort_order" => ($context["special_discount_sort_order"] ?? null), "name" => "special_discount_sort_order"]);
        echo "
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-3 control-label\">";
        // line 149
        echo ($context["entry_special_discount_consider_special"] ?? null);
        echo "</label>
            <div class=\"col-sm-5\">
              ";
        // line 151
        echo twig_include($this->env, $context, "extension/module/ocfilter/control/bool_button.twig", ["flag" => ($context["special_discount_consider_special"] ?? null), "name" => "special_discount_consider_special"]);
        echo "
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-3 control-label\">";
        // line 155
        echo ($context["entry_special_discount_consider_discount"] ?? null);
        echo "</label>
            <div class=\"col-sm-5\">
              ";
        // line 157
        echo twig_include($this->env, $context, "extension/module/ocfilter/control/bool_button.twig", ["flag" => ($context["special_discount_consider_discount"] ?? null), "name" => "special_discount_consider_discount"]);
        echo "
            </div>
          </div>
        </div><!-- /.discount -->   

        <div role=\"tabpanel\" class=\"tab-pane\" id=\"tab-special-newest\">
          <div class=\"form-group\">
            <label class=\"col-sm-3 control-label\">";
        // line 164
        echo ($context["entry_special_newest"] ?? null);
        echo "</label>
            <div class=\"col-sm-9\">
              ";
        // line 166
        echo twig_include($this->env, $context, "extension/module/ocfilter/control/bool_button.twig", ["flag" => ($context["special_newest"] ?? null), "name" => "special_newest", "text_yes" => ($context["text_enabled"] ?? null), "text_no" => ($context["text_disabled"] ?? null)]);
        echo "
              
              <p class=\"help-block\">";
        // line 168
        echo ($context["help_special_newest"] ?? null);
        echo "</p>      
            </div>
          </div>

          <div class=\"form-group\">
            <label class=\"col-sm-3 control-label\" for=\"input-newest-sort-order\">";
        // line 173
        echo ($context["entry_sort_order"] ?? null);
        echo "</label>
            <div class=\"col-sm-6\">
              ";
        // line 175
        echo twig_include($this->env, $context, "extension/module/ocfilter/control/sort_order.twig", ["sort_order" => ($context["special_newest_sort_order"] ?? null), "name" => "special_newest_sort_order"]);
        echo "
            </div>
          </div>
          
          <div class=\"form-group\">
            <label class=\"col-sm-3 control-label\">";
        // line 180
        echo ($context["entry_special_newest_interval"] ?? null);
        echo "</label>
            <div class=\"col-sm-3\">
              <div class=\"input-group\">
                <input type=\"number\" min=\"1\" name=\"special_newest_interval\" value=\"";
        // line 183
        echo ($context["special_newest_interval"] ?? null);
        echo "\" class=\"form-control\" />
                <div class=\"input-group-btn\">
                  <select name=\"special_newest_period\" class=\"btn btn-default\" data-selected=\"";
        // line 185
        echo ($context["special_newest_period"] ?? null);
        echo "\">
                    <option value=\"hour\">";
        // line 186
        echo ($context["text_special_newest_interval_hour"] ?? null);
        echo "</option>
                    <option value=\"day\">";
        // line 187
        echo ($context["text_special_newest_interval_day"] ?? null);
        echo "</option>
                    <option value=\"week\">";
        // line 188
        echo ($context["text_special_newest_interval_week"] ?? null);
        echo "</option>
                    <option value=\"month\">";
        // line 189
        echo ($context["text_special_newest_interval_month"] ?? null);
        echo "</option>
                  </select>
                </div>
              </div>                          
            </div>
            <div class=\"col-sm-offset-3 col-sm-9\">
              <p class=\"help-block\">";
        // line 195
        echo ($context["help_special_newest_interval"] ?? null);
        echo "</p>
            </div>
          </div>
        </div><!-- /.newest -->           
        
        <div role=\"tabpanel\" class=\"tab-pane\" id=\"tab-special-dimension\">
          <div class=\"row v-border\">
            <div class=\"col-sm-6\">
              <div class=\"form-group-vertical\">
                <label>";
        // line 204
        echo ($context["entry_special_weight"] ?? null);
        echo "</label>
                <div>
                  ";
        // line 206
        echo twig_include($this->env, $context, "extension/module/ocfilter/control/bool_button.twig", ["flag" => ($context["special_weight"] ?? null), "name" => "special_weight", "text_yes" => ($context["text_enabled"] ?? null), "text_no" => ($context["text_disabled"] ?? null)]);
        echo "
                </div>
              </div>
              <div class=\"form-group-vertical\">
                <label>";
        // line 210
        echo ($context["entry_sort_order"] ?? null);
        echo "</label>
                <div>
                  ";
        // line 212
        echo twig_include($this->env, $context, "extension/module/ocfilter/control/sort_order.twig", ["sort_order" => ($context["special_weight_sort_order"] ?? null), "name" => "special_weight_sort_order"]);
        echo "
                </div>
              </div>              
            </div>
            <div class=\"col-sm-6\">
              <div class=\"form-group-vertical\">
                <label>";
        // line 218
        echo ($context["entry_special_length"] ?? null);
        echo "</label>
                <div>
                  ";
        // line 220
        echo twig_include($this->env, $context, "extension/module/ocfilter/control/bool_button.twig", ["flag" => ($context["special_length"] ?? null), "name" => "special_length", "text_yes" => ($context["text_enabled"] ?? null), "text_no" => ($context["text_disabled"] ?? null)]);
        echo "
                </div>
              </div>
              <div class=\"form-group-vertical\">
                <label>";
        // line 224
        echo ($context["entry_sort_order"] ?? null);
        echo "</label>
                <div>
                  ";
        // line 226
        echo twig_include($this->env, $context, "extension/module/ocfilter/control/sort_order.twig", ["sort_order" => ($context["special_length_sort_order"] ?? null), "name" => "special_length_sort_order"]);
        echo "
                </div>
              </div> 
            </div>
          </div>
          <hr />
          <div class=\"row v-border\">
            <div class=\"col-sm-6\">
              <div class=\"form-group-vertical\">
                <label>";
        // line 235
        echo ($context["entry_special_width"] ?? null);
        echo "</label>
                <div>
                  ";
        // line 237
        echo twig_include($this->env, $context, "extension/module/ocfilter/control/bool_button.twig", ["flag" => ($context["special_width"] ?? null), "name" => "special_width", "text_yes" => ($context["text_enabled"] ?? null), "text_no" => ($context["text_disabled"] ?? null)]);
        echo "
                </div>
              </div>
              <div class=\"form-group-vertical\">
                <label>";
        // line 241
        echo ($context["entry_sort_order"] ?? null);
        echo "</label>
                <div>
                  ";
        // line 243
        echo twig_include($this->env, $context, "extension/module/ocfilter/control/sort_order.twig", ["sort_order" => ($context["special_width_sort_order"] ?? null), "name" => "special_width_sort_order"]);
        echo "
                </div>
              </div> 
            </div>
            <div class=\"col-sm-6\">
              <div class=\"form-group-vertical\">
                <label>";
        // line 249
        echo ($context["entry_special_height"] ?? null);
        echo "</label>
                <div>
                  ";
        // line 251
        echo twig_include($this->env, $context, "extension/module/ocfilter/control/bool_button.twig", ["flag" => ($context["special_height"] ?? null), "name" => "special_height", "text_yes" => ($context["text_enabled"] ?? null), "text_no" => ($context["text_disabled"] ?? null)]);
        echo "
                </div>
              </div>
              <div class=\"form-group-vertical\">
                <label>";
        // line 255
        echo ($context["entry_sort_order"] ?? null);
        echo "</label>
                <div>
                  ";
        // line 257
        echo twig_include($this->env, $context, "extension/module/ocfilter/control/sort_order.twig", ["sort_order" => ($context["special_height_sort_order"] ?? null), "name" => "special_height_sort_order"]);
        echo "                
                </div>
              </div> 
            </div>            
          </div>
        </div><!-- /.dimension -->           
        
        <div role=\"tabpanel\" class=\"tab-pane\" id=\"tab-special-stock\">
          <div class=\"form-group\">
            <label class=\"col-sm-3 control-label\">";
        // line 266
        echo ($context["entry_special_stock"] ?? null);
        echo "</label>
            <div class=\"col-sm-9\">
              ";
        // line 268
        echo twig_include($this->env, $context, "extension/module/ocfilter/control/bool_button.twig", ["flag" => ($context["special_stock"] ?? null), "name" => "special_stock", "text_yes" => ($context["text_enabled"] ?? null), "text_no" => ($context["text_disabled"] ?? null)]);
        echo "

              <p class=\"help-block\">";
        // line 270
        echo ($context["help_special_stock"] ?? null);
        echo "</p>
            </div>
          </div>

          <div class=\"form-group\">
            <label class=\"col-sm-3 control-label\">";
        // line 275
        echo ($context["entry_special_stock_method"] ?? null);
        echo "</label>
            <div class=\"col-sm-9\">
              <div class=\"btn-group\" data-toggle=\"buttons\">
                ";
        // line 278
        if ((($context["special_stock_method"] ?? null) == "quantity")) {
            // line 279
            echo "                <label class=\"btn btn-default active\" data-trigger=\"onclick\" onclick=\"\$('.collapse-group-1').collapse('hide').filter('#stock-status-quantity').collapse('show')\">
                  <input type=\"radio\" name=\"special_stock_method\" value=\"quantity\" checked=\"checked\" /> ";
            // line 280
            echo ($context["text_special_stock_method_by_quantity"] ?? null);
            echo "
                </label>
                <label class=\"btn btn-default\" onclick=\"\$('.collapse-group-1').collapse('hide').filter('#stock-status-id').collapse('show')\">
                  <input type=\"radio\" name=\"special_stock_method\" value=\"stock_status_id\" /> ";
            // line 283
            echo ($context["text_special_stock_method_by_status_id"] ?? null);
            echo "
                </label>
                ";
        } else {
            // line 286
            echo "                <label class=\"btn btn-default\" onclick=\"\$('.collapse-group-1').collapse('hide').filter('#stock-status-quantity').collapse('show')\">
                  <input type=\"radio\" name=\"special_stock_method\" value=\"quantity\" /> ";
            // line 287
            echo ($context["text_special_stock_method_by_quantity"] ?? null);
            echo "
                </label>
                <label class=\"btn btn-default active\" data-trigger=\"onclick\" onclick=\"\$('.collapse-group-1').collapse('hide').filter('#stock-status-id').collapse('show')\">
                  <input type=\"radio\" name=\"special_stock_method\" value=\"stock_status_id\" checked=\"checked\" /> ";
            // line 290
            echo ($context["text_special_stock_method_by_status_id"] ?? null);
            echo "
                </label>
                ";
        }
        // line 293
        echo "              </div>
            </div>
          </div>
          
          <div class=\"form-group\">
            <label class=\"col-sm-3 control-label\" for=\"input-stock-status-sort-order\">";
        // line 298
        echo ($context["entry_sort_order"] ?? null);
        echo "</label>
            <div class=\"col-sm-6\">
              ";
        // line 300
        echo twig_include($this->env, $context, "extension/module/ocfilter/control/sort_order.twig", ["sort_order" => ($context["special_stock_sort_order"] ?? null), "name" => "special_stock_sort_order"]);
        echo "
            </div>
          </div>          

          <div class=\"collapse collapse-group-1\" id=\"stock-status-id\">
            <div class=\"form-group\">
              <label class=\"col-sm-3 control-label\" for=\"input-stocks-tatus-type\">";
        // line 306
        echo ($context["entry_type"] ?? null);
        echo "</label>
              <div class=\"col-sm-3\">
                <select name=\"special_stock_type\" id=\"input-stocks-tatus-type\" class=\"form-control\">                  
                  ";
        // line 309
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["types"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 310
            echo "                  ";
            if (($context["type"] == ($context["special_stock_type"] ?? null))) {
                // line 311
                echo "                  <option value=\"";
                echo $context["type"];
                echo "\" selected=\"selected\">";
                echo twig_capitalize_string_filter($this->env, $context["type"]);
                echo "</option>
                  ";
            } else {
                // line 313
                echo "                  <option value=\"";
                echo $context["type"];
                echo "\">";
                echo twig_capitalize_string_filter($this->env, $context["type"]);
                echo "</option>
                  ";
            }
            // line 315
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                  
                </select>
              </div>
            </div>
          </div>

          <div class=\"collapse collapse-group-1\" id=\"stock-status-quantity\">
            <div class=\"form-group\">
              <label class=\"col-sm-3 control-label\">";
        // line 323
        echo ($context["entry_special_stock_out_value"] ?? null);
        echo "</label>
              <div class=\"col-sm-9\">
                ";
        // line 325
        echo twig_include($this->env, $context, "extension/module/ocfilter/control/bool_button.twig", ["flag" => ($context["special_stock_out_value"] ?? null), "name" => "special_stock_out_value"]);
        echo "
              </div>
            </div>
          </div>        
        </div><!-- /.stock -->   
      </div>
    </div>
  </div>
</div>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "extension/module/ocfilter/setting_form/tab_special_filter.twig";
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
        return array (  682 => 325,  677 => 323,  662 => 315,  654 => 313,  646 => 311,  643 => 310,  639 => 309,  633 => 306,  624 => 300,  619 => 298,  612 => 293,  606 => 290,  600 => 287,  597 => 286,  591 => 283,  585 => 280,  582 => 279,  580 => 278,  574 => 275,  566 => 270,  561 => 268,  556 => 266,  544 => 257,  539 => 255,  532 => 251,  527 => 249,  518 => 243,  513 => 241,  506 => 237,  501 => 235,  489 => 226,  484 => 224,  477 => 220,  472 => 218,  463 => 212,  458 => 210,  451 => 206,  446 => 204,  434 => 195,  425 => 189,  421 => 188,  417 => 187,  413 => 186,  409 => 185,  404 => 183,  398 => 180,  390 => 175,  385 => 173,  377 => 168,  372 => 166,  367 => 164,  357 => 157,  352 => 155,  345 => 151,  340 => 149,  333 => 145,  328 => 143,  320 => 138,  316 => 137,  311 => 135,  301 => 128,  296 => 126,  288 => 121,  283 => 119,  276 => 114,  270 => 113,  262 => 111,  254 => 109,  251 => 108,  247 => 107,  241 => 104,  233 => 99,  228 => 97,  220 => 92,  216 => 91,  211 => 89,  201 => 82,  196 => 80,  191 => 78,  183 => 73,  178 => 71,  173 => 69,  165 => 64,  160 => 62,  155 => 60,  147 => 55,  142 => 53,  137 => 51,  131 => 48,  124 => 44,  119 => 42,  114 => 40,  106 => 35,  101 => 33,  93 => 28,  88 => 26,  80 => 21,  75 => 19,  64 => 11,  60 => 10,  56 => 9,  52 => 8,  48 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/ocfilter/setting_form/tab_special_filter.twig", "/home3/crysta22/public_html/admin/view/template/extension/module/ocfilter/setting_form/tab_special_filter.twig");
    }
}
