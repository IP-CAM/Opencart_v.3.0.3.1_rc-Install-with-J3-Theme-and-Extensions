<?php

/* extension/module/ocfilter.twig */
class __TwigTemplate_4db7b455e2e28d5ca5f28bc274d7631f79b14a3354f224ef221c465ba571868d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo (isset($context["header"]) ? $context["header"] : null);
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-ocfilter\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\" class=\"btn btn-primary\" onclick=\"\$('#form-ocfilter').attr('action','";
        echo (isset($context["save"]) ? $context["save"] : null);
        echo "');\"><i class=\"fa fa-save\"></i></button>
        <button type=\"submit\" form=\"form-ocfilter\" data-toggle=\"tooltip\" title=\"";
        // line 7
        echo (isset($context["button_apply"]) ? $context["button_apply"] : null);
        echo "\" class=\"btn btn-success\" onclick=\"\$('#form-ocfilter').attr('action','";
        echo (isset($context["apply"]) ? $context["apply"] : null);
        echo "');\"><i class=\"fa fa-save\"></i></button>
\t\t\t\t<a href=\"";
        // line 8
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a>
\t\t\t</div>
      <h1>";
        // line 10
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 13
            echo "        <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "      </ul>
    </div>
  </div>

  <div class=\"container-fluid\">
    ";
        // line 20
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 21
            echo "    <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 25
        echo "    ";
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 26
            echo "    <div class=\"alert alert-success\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 30
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <ul class=\"list-inline pull-right\">
          <li><a href=\"";
        // line 33
        echo (isset($context["filter_list"]) ? $context["filter_list"] : null);
        echo "\" target=\"_blank\"><i class=\"fa fa-fw fa-code-fork\"></i> ";
        echo (isset($context["text_filter_list"]) ? $context["text_filter_list"] : null);
        echo "</a></li>
          <li><a href=\"";
        // line 34
        echo (isset($context["filter_page_list"]) ? $context["filter_page_list"] : null);
        echo "\" target=\"_blank\"><i class=\"fa fa-fw fa-file-text-o\"></i> ";
        echo (isset($context["text_filter_page_list"]) ? $context["text_filter_page_list"] : null);
        echo "</a></li>
          <li><a href=\"https://ocfilter.com/faq\" target=\"_blank\"><i class=\"fa fa-fw fa-question-circle\"></i> ";
        // line 35
        echo (isset($context["text_faq"]) ? $context["text_faq"] : null);
        echo "</a></li>
        </ul>
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 37
        echo (isset($context["text_edit"]) ? $context["text_edit"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-ocfilter\" class=\"form-horizontal\">
          <div role=\"tabs\">
            <ul class=\"nav nav-tabs\" role=\"tablist\">
              <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 43
        echo (isset($context["tab_general"]) ? $context["tab_general"] : null);
        echo "</a></li>
              <li><a href=\"#tab-option\" data-toggle=\"tab\">";
        // line 44
        echo (isset($context["tab_option"]) ? $context["tab_option"] : null);
        echo "</a></li>
              <li><a href=\"#tab-price-filtering\" data-toggle=\"tab\">";
        // line 45
        echo (isset($context["tab_price_filtering"]) ? $context["tab_price_filtering"] : null);
        echo "</a></li>
              <li><a href=\"#tab-other\" data-toggle=\"tab\">";
        // line 46
        echo (isset($context["tab_other"]) ? $context["tab_other"] : null);
        echo "</a></li>
              <li><a href=\"#tab-copy\" data-toggle=\"tab\">";
        // line 47
        echo (isset($context["tab_copy"]) ? $context["tab_copy"] : null);
        echo "</a></li>
            </ul>

          \t<div class=\"tab-content\">
              <div id=\"tab-general\" class=\"tab-pane active\">
                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-status\">";
        // line 53
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
                  <div class=\"col-sm-9\">
                    <div class=\"btn-group\" data-toggle=\"buttons\">
                      ";
        // line 56
        if ((isset($context["status"]) ? $context["status"] : null)) {
            // line 57
            echo "                      <label class=\"btn btn-default active\">
                        <input type=\"radio\" name=\"status\" value=\"1\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 58
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "
                      </label>
                      <label class=\"btn btn-default\">
                        <input type=\"radio\" name=\"status\" value=\"0\" autocomplete=\"off\" /> ";
            // line 61
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "
                      </label>
                      ";
        } else {
            // line 64
            echo "                      <label class=\"btn btn-default\">
                        <input type=\"radio\" name=\"status\" value=\"1\" autocomplete=\"off\" /> ";
            // line 65
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "
                      </label>
                      <label class=\"btn btn-default active\">
                        <input type=\"radio\" name=\"status\" value=\"0\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 68
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "
                      </label>
                      ";
        }
        // line 71
        echo "                    </div>

                    <p class=\"help-block\">";
        // line 73
        echo (isset($context["help_status"]) ? $context["help_status"] : null);
        echo "</p>
                  </div>
                </div>

                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-status\">";
        // line 78
        echo (isset($context["entry_sub_category"]) ? $context["entry_sub_category"] : null);
        echo "</label>
                  <div class=\"col-sm-9\">
                    <div class=\"btn-group\" data-toggle=\"buttons\">
                      ";
        // line 81
        if ((isset($context["sub_category"]) ? $context["sub_category"] : null)) {
            // line 82
            echo "                      <label class=\"btn btn-default active\">
                        <input type=\"radio\" name=\"sub_category\" value=\"1\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 83
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "
                      </label>
                      <label class=\"btn btn-default\">
                        <input type=\"radio\" name=\"sub_category\" value=\"0\" autocomplete=\"off\" /> ";
            // line 86
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "
                      </label>
                      ";
        } else {
            // line 89
            echo "                      <label class=\"btn btn-default\">
                        <input type=\"radio\" name=\"sub_category\" value=\"1\" autocomplete=\"off\" /> ";
            // line 90
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "
                      </label>
                      <label class=\"btn btn-default active\">
                        <input type=\"radio\" name=\"sub_category\" value=\"0\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 93
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "
                      </label>
                      ";
        }
        // line 96
        echo "                    </div>

                    <p class=\"help-block\">";
        // line 98
        echo (isset($context["help_sub_category"]) ? $context["help_sub_category"] : null);
        echo "</p>
                  </div>
                </div>

                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-sitemap-status\">";
        // line 103
        echo (isset($context["entry_sitemap"]) ? $context["entry_sitemap"] : null);
        echo "</label>
                  <div class=\"col-sm-9\">
                    <div class=\"btn-group\" data-toggle=\"buttons\">
                      ";
        // line 106
        if ((isset($context["sitemap_status"]) ? $context["sitemap_status"] : null)) {
            // line 107
            echo "                      <label class=\"btn btn-default active\" data-toggle=\"trigger\" onclick=\"\$('#sitemap-link').collapse('show')\">
                        <input type=\"radio\" name=\"sitemap_status\" value=\"1\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 108
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "
                      </label>
                      <label class=\"btn btn-default\" onclick=\"\$('#sitemap-link').collapse('hide')\">
                        <input type=\"radio\" name=\"sitemap_status\" value=\"0\" autocomplete=\"off\" /> ";
            // line 111
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "
                      </label>
                      ";
        } else {
            // line 114
            echo "                      <label class=\"btn btn-default\" onclick=\"\$('#sitemap-link').collapse('show')\">
                        <input type=\"radio\" name=\"sitemap_status\" value=\"1\" autocomplete=\"off\" /> ";
            // line 115
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "
                      </label>
                      <label class=\"btn btn-default active\" data-toggle=\"trigger\" onclick=\"\$('#sitemap-link').collapse('hide')\">
                        <input type=\"radio\" name=\"sitemap_status\" value=\"0\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 118
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "
                      </label>
                      ";
        }
        // line 121
        echo "                    </div>
                  </div>
                </div>

                <div class=\"collapse\" id=\"sitemap-link\">
                  <div class=\"form-group\">
                    <label class=\"col-sm-3 control-label\">";
        // line 127
        echo (isset($context["entry_sitemap_link"]) ? $context["entry_sitemap_link"] : null);
        echo "</label>
                    <div class=\"col-sm-9\">
                      <input type=\"text\" name=\"sitemap_link\" value=\"";
        // line 129
        echo (isset($context["sitemap_link"]) ? $context["sitemap_link"] : null);
        echo "\" class=\"form-control\" onclick=\"\$(this).select();\" readonly=\"readonly\" />
                    </div>
                  </div>
                </div>
  \t\t        </div>

  \t\t        <div id=\"tab-option\" class=\"tab-pane\">
                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-status\">";
        // line 137
        echo (isset($context["entry_search_button"]) ? $context["entry_search_button"] : null);
        echo "</label>
                  <div class=\"col-sm-9\">
                    <div class=\"btn-group\" data-toggle=\"buttons\">
                      ";
        // line 140
        if ((isset($context["search_button"]) ? $context["search_button"] : null)) {
            // line 141
            echo "                      <label class=\"btn btn-default active\">
                        <input type=\"radio\" name=\"search_button\" value=\"1\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 142
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "
                      </label>
                      <label class=\"btn btn-default\">
                        <input type=\"radio\" name=\"search_button\" value=\"0\" autocomplete=\"off\" /> ";
            // line 145
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "
                      </label>
                      ";
        } else {
            // line 148
            echo "                      <label class=\"btn btn-default\">
                        <input type=\"radio\" name=\"search_button\" value=\"1\" autocomplete=\"off\" /> ";
            // line 149
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "
                      </label>
                      <label class=\"btn btn-default active\">
                        <input type=\"radio\" name=\"search_button\" value=\"0\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 152
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "
                      </label>
                      ";
        }
        // line 155
        echo "                    </div>

                    <p class=\"help-block\">";
        // line 157
        echo (isset($context["help_search_button"]) ? $context["help_search_button"] : null);
        echo "</p>
                  </div>
                </div>

                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-show-selected\">";
        // line 162
        echo (isset($context["entry_show_selected"]) ? $context["entry_show_selected"] : null);
        echo "</label>
                  <div class=\"col-sm-9\">
                    <div class=\"btn-group\" data-toggle=\"buttons\">
                      ";
        // line 165
        if ((isset($context["show_selected"]) ? $context["show_selected"] : null)) {
            // line 166
            echo "                      <label class=\"btn btn-default active\">
                        <input type=\"radio\" name=\"show_selected\" value=\"1\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 167
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "
                      </label>
                      <label class=\"btn btn-default\">
                        <input type=\"radio\" name=\"show_selected\" value=\"0\" autocomplete=\"off\" /> ";
            // line 170
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "
                      </label>
                      ";
        } else {
            // line 173
            echo "                      <label class=\"btn btn-default\">
                        <input type=\"radio\" name=\"show_selected\" value=\"1\" autocomplete=\"off\" /> ";
            // line 174
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "
                      </label>
                      <label class=\"btn btn-default active\">
                        <input type=\"radio\" name=\"show_selected\" value=\"0\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 177
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "
                      </label>
                      ";
        }
        // line 180
        echo "                    </div>

                    <p class=\"help-block\">";
        // line 182
        echo (isset($context["help_show_selected"]) ? $context["help_show_selected"] : null);
        echo "</p>
                  </div>
                </div>

                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-show-price\">";
        // line 187
        echo (isset($context["entry_show_price"]) ? $context["entry_show_price"] : null);
        echo "</label>
                  <div class=\"col-sm-9\">
                    <div class=\"btn-group\" data-toggle=\"buttons\">
                      ";
        // line 190
        if ((isset($context["show_price"]) ? $context["show_price"] : null)) {
            // line 191
            echo "                      <label class=\"btn btn-default active\">
                        <input type=\"radio\" name=\"show_price\" value=\"1\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 192
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "
                      </label>
                      <label class=\"btn btn-default\">
                        <input type=\"radio\" name=\"show_price\" value=\"0\" autocomplete=\"off\" /> ";
            // line 195
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "
                      </label>
                      ";
        } else {
            // line 198
            echo "                      <label class=\"btn btn-default\">
                        <input type=\"radio\" name=\"show_price\" value=\"1\" autocomplete=\"off\" /> ";
            // line 199
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "
                      </label>
                      <label class=\"btn btn-default active\">
                        <input type=\"radio\" name=\"show_price\" value=\"0\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 202
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "
                      </label>
                      ";
        }
        // line 205
        echo "                    </div>

                    <p class=\"help-block\">";
        // line 207
        echo (isset($context["help_show_price"]) ? $context["help_show_price"] : null);
        echo "</p>
                  </div>
                </div>

                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-show-counter\">";
        // line 212
        echo (isset($context["entry_show_counter"]) ? $context["entry_show_counter"] : null);
        echo "</label>
                  <div class=\"col-sm-9\">
                    <div class=\"btn-group\" data-toggle=\"buttons\">
                      ";
        // line 215
        if ((isset($context["show_counter"]) ? $context["show_counter"] : null)) {
            // line 216
            echo "                      <label class=\"btn btn-default active\">
                        <input type=\"radio\" name=\"show_counter\" value=\"1\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 217
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "
                      </label>
                      <label class=\"btn btn-default\">
                        <input type=\"radio\" name=\"show_counter\" value=\"0\" autocomplete=\"off\" /> ";
            // line 220
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "
                      </label>
                      ";
        } else {
            // line 223
            echo "                      <label class=\"btn btn-default\">
                        <input type=\"radio\" name=\"show_counter\" value=\"1\" autocomplete=\"off\" /> ";
            // line 224
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "
                      </label>
                      <label class=\"btn btn-default active\">
                        <input type=\"radio\" name=\"show_counter\" value=\"0\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 227
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "
                      </label>
                      ";
        }
        // line 230
        echo "                    </div>

                    <p class=\"help-block\">";
        // line 232
        echo (isset($context["help_show_counter"]) ? $context["help_show_counter"] : null);
        echo "</p>
                  </div>
                </div>

                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-manufacturer\">";
        // line 237
        echo (isset($context["entry_manufacturer"]) ? $context["entry_manufacturer"] : null);
        echo "</label>
                  <div class=\"col-sm-9\">
                    <div class=\"btn-group\" data-toggle=\"buttons\">
                      ";
        // line 240
        if ((isset($context["manufacturer"]) ? $context["manufacturer"] : null)) {
            // line 241
            echo "                      <label class=\"btn btn-default active\" data-toggle=\"trigger\" onclick=\"\$('#manufacturer-type').collapse('show')\">
                        <input type=\"radio\" name=\"manufacturer\" value=\"1\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 242
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "
                      </label>
                      <label class=\"btn btn-default\" onclick=\"\$('#manufacturer-type').collapse('hide')\">
                        <input type=\"radio\" name=\"manufacturer\" value=\"0\" autocomplete=\"off\" /> ";
            // line 245
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "
                      </label>
                      ";
        } else {
            // line 248
            echo "                      <label class=\"btn btn-default\" onclick=\"\$('#manufacturer-type').collapse('show')\">
                        <input type=\"radio\" name=\"manufacturer\" value=\"1\" autocomplete=\"off\" /> ";
            // line 249
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "
                      </label>
                      <label class=\"btn btn-default active\" data-toggle=\"trigger\" onclick=\"\$('#manufacturer-type').collapse('hide')\">
                        <input type=\"radio\" name=\"manufacturer\" value=\"0\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 252
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "
                      </label>
                      ";
        }
        // line 255
        echo "                    </div>

                    <p class=\"help-block\">";
        // line 257
        echo (isset($context["help_manufacturer"]) ? $context["help_manufacturer"] : null);
        echo "</p>
                  </div>
                </div>

                <div class=\"collapse\" id=\"manufacturer-type\">
                  <div class=\"form-group\">
                    <label class=\"col-sm-3 control-label\" for=\"input-manufacturer-type\">";
        // line 263
        echo (isset($context["entry_type"]) ? $context["entry_type"] : null);
        echo "</label>
                    <div class=\"col-sm-5\">
                      <select name=\"manufacturer_type\" id=\"input-manufacturer-type\" class=\"form-control\">
                        ";
        // line 266
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["types"]) ? $context["types"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 267
            echo "                        ";
            if (($context["type"] == (isset($context["manufacturer_type"]) ? $context["manufacturer_type"] : null))) {
                // line 268
                echo "                        <option value=\"";
                echo $context["type"];
                echo "\" selected=\"selected\">";
                echo twig_capitalize_string_filter($this->env, $context["type"]);
                echo "</option>
                        ";
            } else {
                // line 270
                echo "                        <option value=\"";
                echo $context["type"];
                echo "\">";
                echo twig_capitalize_string_filter($this->env, $context["type"]);
                echo "</option>
                        ";
            }
            // line 272
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 273
        echo "                      </select>
                    </div>
                  </div>
                </div>

                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-stock-status\">";
        // line 279
        echo (isset($context["entry_stock_status"]) ? $context["entry_stock_status"] : null);
        echo "</label>
                  <div class=\"col-sm-9\">
                    <div class=\"btn-group\" data-toggle=\"buttons\">
                      ";
        // line 282
        if ((isset($context["stock_status"]) ? $context["stock_status"] : null)) {
            // line 283
            echo "                      <label class=\"btn btn-default active\" data-toggle=\"trigger\" onclick=\"\$('#stock-status-method').collapse('show')\">
                        <input type=\"radio\" name=\"stock_status\" value=\"1\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 284
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "
                      </label>
                      <label class=\"btn btn-default\" onclick=\"\$('#stock-status-method').collapse('hide')\">
                        <input type=\"radio\" name=\"stock_status\" value=\"0\" autocomplete=\"off\" /> ";
            // line 287
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "
                      </label>
                      ";
        } else {
            // line 290
            echo "                      <label class=\"btn btn-default\" onclick=\"\$('#stock-status-method').collapse('show')\">
                        <input type=\"radio\" name=\"stock_status\" value=\"1\" autocomplete=\"off\" /> ";
            // line 291
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "
                      </label>
                      <label class=\"btn btn-default active\" data-toggle=\"trigger\" onclick=\"\$('#stock-status-method').collapse('hide')\">
                        <input type=\"radio\" name=\"stock_status\" value=\"0\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 294
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "
                      </label>
                      ";
        }
        // line 297
        echo "                    </div>

                    <p class=\"help-block\">";
        // line 299
        echo (isset($context["help_stock_status"]) ? $context["help_stock_status"] : null);
        echo "</p>
                  </div>
                </div>

                <div class=\"collapse\" id=\"stock-status-method\">
                  <div class=\"form-group\">
                    <label class=\"col-sm-3 control-label\" for=\"input-stock-status-method\">";
        // line 305
        echo (isset($context["entry_stock_status_method"]) ? $context["entry_stock_status_method"] : null);
        echo "</label>
                    <div class=\"col-sm-9\">
                      <div class=\"btn-group\" data-toggle=\"buttons\">
                        ";
        // line 308
        if (((isset($context["stock_status_method"]) ? $context["stock_status_method"] : null) == "quantity")) {
            // line 309
            echo "                        <label class=\"btn btn-default active\" data-toggle=\"trigger\" onclick=\"\$('.collapse-group-1').collapse('hide').filter('#stock-status-quantity').collapse('show')\">
                          <input type=\"radio\" name=\"stock_status_method\" value=\"quantity\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 310
            echo (isset($context["text_stock_by_quantity"]) ? $context["text_stock_by_quantity"] : null);
            echo "
                        </label>
                        <label class=\"btn btn-default\" onclick=\"\$('.collapse-group-1').collapse('hide').filter('#stock-status-id').collapse('show')\">
                          <input type=\"radio\" name=\"stock_status_method\" value=\"stock_status_id\" autocomplete=\"off\" /> ";
            // line 313
            echo (isset($context["text_stock_by_status_id"]) ? $context["text_stock_by_status_id"] : null);
            echo "
                        </label>
                        ";
        } else {
            // line 316
            echo "                        <label class=\"btn btn-default\" onclick=\"\$('.collapse-group-1').collapse('hide').filter('#stock-status-quantity').collapse('show')\">
                          <input type=\"radio\" name=\"stock_status_method\" value=\"quantity\" autocomplete=\"off\" /> ";
            // line 317
            echo (isset($context["text_stock_by_quantity"]) ? $context["text_stock_by_quantity"] : null);
            echo "
                        </label>
                        <label class=\"btn btn-default active\" data-toggle=\"trigger\" onclick=\"\$('.collapse-group-1').collapse('hide').filter('#stock-status-id').collapse('show')\">
                          <input type=\"radio\" name=\"stock_status_method\" value=\"stock_status_id\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 320
            echo (isset($context["text_stock_by_status_id"]) ? $context["text_stock_by_status_id"] : null);
            echo "
                        </label>
                        ";
        }
        // line 323
        echo "                      </div>
                    </div>
                  </div>

                  <div class=\"collapse collapse-group-1\" id=\"stock-status-id\">
                    <div class=\"form-group\">
                      <label class=\"col-sm-3 control-label\" for=\"input-stocks-tatus-type\">";
        // line 329
        echo (isset($context["entry_type"]) ? $context["entry_type"] : null);
        echo "</label>
                      <div class=\"col-sm-5\">
                        <select name=\"stock_status_type\" id=\"input-stocks-tatus-type\" class=\"form-control\">
                          ";
        // line 332
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["types"]) ? $context["types"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 333
            echo "                          ";
            if (($context["type"] == (isset($context["stock_status_type"]) ? $context["stock_status_type"] : null))) {
                // line 334
                echo "                          <option value=\"";
                echo $context["type"];
                echo "\" selected=\"selected\">";
                echo twig_capitalize_string_filter($this->env, $context["type"]);
                echo "</option>
                          ";
            } else {
                // line 336
                echo "                          <option value=\"";
                echo $context["type"];
                echo "\">";
                echo twig_capitalize_string_filter($this->env, $context["type"]);
                echo "</option>
                          ";
            }
            // line 338
            echo "                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 339
        echo "                        </select>
                      </div>
                    </div>
                  </div>

                  <div class=\"collapse collapse-group-1\" id=\"stock-status-quantity\">
                    <div class=\"form-group\">
                      <label class=\"col-sm-3 control-label\" for=\"input-stock-out-value\">";
        // line 346
        echo (isset($context["entry_stock_out_value"]) ? $context["entry_stock_out_value"] : null);
        echo "</label>
                      <div class=\"col-sm-9\">
                        <div class=\"btn-group\" data-toggle=\"buttons\">
                          ";
        // line 349
        if ((isset($context["stock_out_value"]) ? $context["stock_out_value"] : null)) {
            // line 350
            echo "                          <label class=\"btn btn-default active\">
                            <input type=\"radio\" name=\"stock_out_value\" value=\"1\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 351
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "
                          </label>
                          <label class=\"btn btn-default\">
                            <input type=\"radio\" name=\"stock_out_value\" value=\"0\" autocomplete=\"off\" /> ";
            // line 354
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "
                          </label>
                          ";
        } else {
            // line 357
            echo "                          <label class=\"btn btn-default\">
                            <input type=\"radio\" name=\"stock_out_value\" value=\"1\" autocomplete=\"off\" /> ";
            // line 358
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "
                          </label>
                          <label class=\"btn btn-default active\">
                            <input type=\"radio\" name=\"stock_out_value\" value=\"0\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 361
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "
                          </label>
                          ";
        }
        // line 364
        echo "                        </div>
                      </div>
                    </div>
                  </div>
                </div>
  \t\t        </div>
  \t\t        <div id=\"tab-price-filtering\" class=\"tab-pane\">
                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-manual-price\">";
        // line 372
        echo (isset($context["entry_manual_price"]) ? $context["entry_manual_price"] : null);
        echo "</label>
                  <div class=\"col-sm-9\">
                    <div class=\"btn-group\" data-toggle=\"buttons\">
                      ";
        // line 375
        if ((isset($context["manual_price"]) ? $context["manual_price"] : null)) {
            // line 376
            echo "                      <label class=\"btn btn-default active\">
                        <input type=\"radio\" name=\"manual_price\" value=\"1\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 377
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "
                      </label>
                      <label class=\"btn btn-default\">
                        <input type=\"radio\" name=\"manual_price\" value=\"0\" autocomplete=\"off\" /> ";
            // line 380
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "
                      </label>
                      ";
        } else {
            // line 383
            echo "                      <label class=\"btn btn-default\">
                        <input type=\"radio\" name=\"manual_price\" value=\"1\" autocomplete=\"off\" /> ";
            // line 384
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "
                      </label>
                      <label class=\"btn btn-default active\">
                        <input type=\"radio\" name=\"manual_price\" value=\"0\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 387
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "
                      </label>
                      ";
        }
        // line 390
        echo "                    </div>

                    <p class=\"help-block\">";
        // line 392
        echo (isset($context["help_manual_price"]) ? $context["help_manual_price"] : null);
        echo "</p>
                  </div>
                </div>

                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-consider-discount\">";
        // line 397
        echo (isset($context["entry_consider_discount"]) ? $context["entry_consider_discount"] : null);
        echo "</label>
                  <div class=\"col-sm-9\">
                    <div class=\"btn-group\" data-toggle=\"buttons\">
                      ";
        // line 400
        if ((isset($context["consider_discount"]) ? $context["consider_discount"] : null)) {
            // line 401
            echo "                      <label class=\"btn btn-default active\">
                        <input type=\"radio\" name=\"consider_discount\" value=\"1\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 402
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "
                      </label>
                      <label class=\"btn btn-default\">
                        <input type=\"radio\" name=\"consider_discount\" value=\"0\" autocomplete=\"off\" /> ";
            // line 405
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "
                      </label>
                      ";
        } else {
            // line 408
            echo "                      <label class=\"btn btn-default\">
                        <input type=\"radio\" name=\"consider_discount\" value=\"1\" autocomplete=\"off\" /> ";
            // line 409
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "
                      </label>
                      <label class=\"btn btn-default active\">
                        <input type=\"radio\" name=\"consider_discount\" value=\"0\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 412
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "
                      </label>
                      ";
        }
        // line 415
        echo "                    </div>
                    <p class=\"help-block\">";
        // line 416
        echo (isset($context["help_consider_discount"]) ? $context["help_consider_discount"] : null);
        echo "</p>
                  </div>
                </div>

                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-consider-special\">";
        // line 421
        echo (isset($context["entry_consider_special"]) ? $context["entry_consider_special"] : null);
        echo "</label>
                  <div class=\"col-sm-9\">
                    <div class=\"btn-group\" data-toggle=\"buttons\">
                      ";
        // line 424
        if ((isset($context["consider_special"]) ? $context["consider_special"] : null)) {
            // line 425
            echo "                      <label class=\"btn btn-default active\">
                        <input type=\"radio\" name=\"consider_special\" value=\"1\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 426
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "
                      </label>
                      <label class=\"btn btn-default\">
                        <input type=\"radio\" name=\"consider_special\" value=\"0\" autocomplete=\"off\" /> ";
            // line 429
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "
                      </label>
                      ";
        } else {
            // line 432
            echo "                      <label class=\"btn btn-default\">
                        <input type=\"radio\" name=\"consider_special\" value=\"1\" autocomplete=\"off\" /> ";
            // line 433
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "
                      </label>
                      <label class=\"btn btn-default active\">
                        <input type=\"radio\" name=\"consider_special\" value=\"0\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 436
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "
                      </label>
                      ";
        }
        // line 439
        echo "                    </div>

                    <p class=\"help-block\">";
        // line 441
        echo (isset($context["help_consider_special"]) ? $context["help_consider_special"] : null);
        echo "</p>
                  </div>
                </div>

                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-consider-option\">";
        // line 446
        echo (isset($context["entry_consider_option"]) ? $context["entry_consider_option"] : null);
        echo "</label>
                  <div class=\"col-sm-9\">
                    <div class=\"btn-group\" data-toggle=\"buttons\">
                      ";
        // line 449
        if ((isset($context["consider_option"]) ? $context["consider_option"] : null)) {
            // line 450
            echo "                      <label class=\"btn btn-default active\">
                        <input type=\"radio\" name=\"consider_option\" value=\"1\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 451
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "
                      </label>
                      <label class=\"btn btn-default\">
                        <input type=\"radio\" name=\"consider_option\" value=\"0\" autocomplete=\"off\" /> ";
            // line 454
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "
                      </label>
                      ";
        } else {
            // line 457
            echo "                      <label class=\"btn btn-default\">
                        <input type=\"radio\" name=\"consider_option\" value=\"1\" autocomplete=\"off\" /> ";
            // line 458
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "
                      </label>
                      <label class=\"btn btn-default active\">
                        <input type=\"radio\" name=\"consider_option\" value=\"0\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 461
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "
                      </label>
                      ";
        }
        // line 464
        echo "                    </div>
                    <p class=\"help-block\">";
        // line 465
        echo (isset($context["help_consider_option"]) ? $context["help_consider_option"] : null);
        echo "</p>
                  </div>
                </div>
  \t\t        </div>

  \t\t        <div id=\"tab-other\" class=\"tab-pane\">
                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-show-options-limit\">";
        // line 472
        echo (isset($context["entry_show_first_limit"]) ? $context["entry_show_first_limit"] : null);
        echo "</label>
                  <div class=\"col-sm-4\">
                    <div class=\"input-group\">
                      <input type=\"number\" name=\"show_options_limit\" min=\"0\" value=\"";
        // line 475
        echo (isset($context["show_options_limit"]) ? $context["show_options_limit"] : null);
        echo "\" class=\"form-control\" id=\"input-show-options-limit\" />
                      <span class=\"input-group-addon\">";
        // line 476
        echo (isset($context["text_options"]) ? $context["text_options"] : null);
        echo "</span>
                    </div><!-- /.input-group -->
                    <p class=\"help-block\">";
        // line 478
        echo (isset($context["help_show_options_limit"]) ? $context["help_show_options_limit"] : null);
        echo "</p>
                  </div>
                </div>

                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-show-values-limit\">";
        // line 483
        echo (isset($context["entry_show_first_limit"]) ? $context["entry_show_first_limit"] : null);
        echo "</label>
                  <div class=\"col-sm-4\">
                    <div class=\"input-group\">
                      <input type=\"number\" name=\"show_values_limit\" min=\"0\" value=\"";
        // line 486
        echo (isset($context["show_values_limit"]) ? $context["show_values_limit"] : null);
        echo "\" class=\"form-control\" id=\"input-show-values-limit\" />
                      <span class=\"input-group-addon\">";
        // line 487
        echo (isset($context["text_values"]) ? $context["text_values"] : null);
        echo "</span>
                    </div><!-- /.input-group -->
                    <p class=\"help-block\">";
        // line 489
        echo (isset($context["help_show_values_limit"]) ? $context["help_show_values_limit"] : null);
        echo "</p>
                  </div>
                </div>

                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-hide-empty-values\">";
        // line 494
        echo (isset($context["entry_hide_empty_values"]) ? $context["entry_hide_empty_values"] : null);
        echo "</label>
                  <div class=\"col-sm-9\">
                    <div class=\"btn-group\" data-toggle=\"buttons\">
                      ";
        // line 497
        if ((isset($context["hide_empty_values"]) ? $context["hide_empty_values"] : null)) {
            // line 498
            echo "                      <label class=\"btn btn-default active\">
                        <input type=\"radio\" name=\"hide_empty_values\" value=\"1\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 499
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "
                      </label>
                      <label class=\"btn btn-default\">
                        <input type=\"radio\" name=\"hide_empty_values\" value=\"0\" autocomplete=\"off\" /> ";
            // line 502
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "
                      </label>
                      ";
        } else {
            // line 505
            echo "                      <label class=\"btn btn-default\">
                        <input type=\"radio\" name=\"hide_empty_values\" value=\"1\" autocomplete=\"off\" /> ";
            // line 506
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "
                      </label>
                      <label class=\"btn btn-default active\">
                        <input type=\"radio\" name=\"hide_empty_values\" value=\"0\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 509
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "
                      </label>
                      ";
        }
        // line 512
        echo "                    </div>
                    <p class=\"help-block\">";
        // line 513
        echo (isset($context["help_hide_empty_values"]) ? $context["help_hide_empty_values"] : null);
        echo "</p>
                  </div>
                </div>
  \t\t        </div>

  \t\t        <div id=\"tab-copy\" class=\"tab-pane\">
                <h4>";
        // line 519
        echo (isset($context["nav_copy_filter"]) ? $context["nav_copy_filter"] : null);
        echo "</h4>

                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-copy-type\">";
        // line 522
        echo (isset($context["entry_copy_type"]) ? $context["entry_copy_type"] : null);
        echo "</label>
                  <div class=\"col-sm-5\">
                    <select name=\"copy_type\" id=\"input-copy-type\" class=\"form-control\">
                      ";
        // line 525
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["types"]) ? $context["types"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 526
            echo "                      ";
            if (($context["type"] == (isset($context["copy_type"]) ? $context["copy_type"] : null))) {
                // line 527
                echo "                      <option value=\"";
                echo $context["type"];
                echo "\" selected=\"selected\">";
                echo twig_capitalize_string_filter($this->env, $context["type"]);
                echo "</option>
                      ";
            } else {
                // line 529
                echo "                      <option value=\"";
                echo $context["type"];
                echo "\">";
                echo twig_capitalize_string_filter($this->env, $context["type"]);
                echo "</option>
                      ";
            }
            // line 531
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 532
        echo "                    </select>
                  </div>
                </div>

                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-truncate\">";
        // line 537
        echo (isset($context["entry_copy_status"]) ? $context["entry_copy_status"] : null);
        echo "</label>
                  <div class=\"col-sm-9\">
                    <div class=\"btn-group\" data-toggle=\"buttons\">
                      ";
        // line 540
        if (((isset($context["copy_status"]) ? $context["copy_status"] : null) > 0)) {
            // line 541
            echo "                      <label class=\"btn btn-default active\">
                        <input type=\"radio\" name=\"copy_status\" value=\"1\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 542
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "
                      </label>
                      <label class=\"btn btn-default\">
                        <input type=\"radio\" name=\"copy_status\" value=\"0\" autocomplete=\"off\" /> ";
            // line 545
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "
                      </label>
                      <label class=\"btn btn-default\">
                        <input type=\"radio\" name=\"copy_status\" value=\"-1\" autocomplete=\"off\" /> ";
            // line 548
            echo (isset($context["text_auto"]) ? $context["text_auto"] : null);
            echo "
                      </label>
                      ";
        } elseif ((        // line 550
(isset($context["copy_status"]) ? $context["copy_status"] : null) < 0)) {
            // line 551
            echo "                      <label class=\"btn btn-default\">
                        <input type=\"radio\" name=\"copy_status\" value=\"1\" autocomplete=\"off\" /> ";
            // line 552
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "
                      </label>
                      <label class=\"btn btn-default\">
                        <input type=\"radio\" name=\"copy_status\" value=\"0\" autocomplete=\"off\" /> ";
            // line 555
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "
                      </label>
                      <label class=\"btn btn-default active\">
                        <input type=\"radio\" name=\"copy_status\" value=\"-1\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 558
            echo (isset($context["text_auto"]) ? $context["text_auto"] : null);
            echo "
                      </label>
                      ";
        } else {
            // line 561
            echo "                      <label class=\"btn btn-default\">
                        <input type=\"radio\" name=\"copy_status\" value=\"1\" autocomplete=\"off\" /> ";
            // line 562
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "
                      </label>
                      <label class=\"btn btn-default active\">
                        <input type=\"radio\" name=\"copy_status\" value=\"0\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 565
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "
                      </label>
                      <label class=\"btn btn-default\">
                        <input type=\"radio\" name=\"copy_status\" value=\"-1\" autocomplete=\"off\" /> ";
            // line 568
            echo (isset($context["text_auto"]) ? $context["text_auto"] : null);
            echo "
                      </label>
                      ";
        }
        // line 571
        echo "                    </div>
                    <p class=\"help-block\">";
        // line 572
        echo (isset($context["help_copy_status_auto"]) ? $context["help_copy_status_auto"] : null);
        echo "</p>
                  </div>
                </div>

                <h4>";
        // line 576
        echo (isset($context["nav_copy_source"]) ? $context["nav_copy_source"] : null);
        echo "</h4>

                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-copy-attribute\">";
        // line 579
        echo (isset($context["entry_copy_attribute"]) ? $context["entry_copy_attribute"] : null);
        echo "</label>
                  <div class=\"col-sm-4\">
                    <div class=\"input-group\">
                      <span class=\"input-group-btn\" data-toggle=\"buttons\">
                        ";
        // line 583
        if ((isset($context["copy_attribute"]) ? $context["copy_attribute"] : null)) {
            // line 584
            echo "                        <label class=\"btn btn-default active\" data-toggle=\"trigger\" onclick=\"\$('[name=\\'attribute_separator\\']').prop('disabled', false)\">
                          <input type=\"radio\" name=\"copy_attribute\" value=\"1\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 585
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                        </label>
                        <label class=\"btn btn-default\" onclick=\"\$('[name=\\'attribute_separator\\']').prop('disabled', true)\">
                          <input type=\"radio\" name=\"copy_attribute\" value=\"0\" autocomplete=\"off\" /> ";
            // line 588
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                        </label>
                        ";
        } else {
            // line 591
            echo "                        <label class=\"btn btn-default\" onclick=\"\$('[name=\\'attribute_separator\\']').prop('disabled', false)\">
                          <input type=\"radio\" name=\"copy_attribute\" value=\"1\" autocomplete=\"off\" /> ";
            // line 592
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                        </label>
                        <label class=\"btn btn-default active\" data-toggle=\"trigger\" onclick=\"\$('[name=\\'attribute_separator\\']').prop('disabled', true)\">
                          <input type=\"radio\" name=\"copy_attribute\" value=\"0\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 595
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                        </label>
                        ";
        }
        // line 598
        echo "                      </span>
                      <input name=\"attribute_separator\" type=\"text\" class=\"form-control\" placeholder=\"";
        // line 599
        echo (isset($context["entry_copy_attribute_separator"]) ? $context["entry_copy_attribute_separator"] : null);
        echo "\" value=\"";
        echo (isset($context["copy_attribute_separator"]) ? $context["copy_attribute_separator"] : null);
        echo "\" disabled=\"disabled\" />
                    </div>
                  </div>
                </div>

                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-copy-filter\">";
        // line 605
        echo (isset($context["entry_copy_filter"]) ? $context["entry_copy_filter"] : null);
        echo "</label>
                  <div class=\"col-sm-9\">
                    <div class=\"btn-group\" data-toggle=\"buttons\">
                      ";
        // line 608
        if ((isset($context["copy_filter"]) ? $context["copy_filter"] : null)) {
            // line 609
            echo "                      <label class=\"btn btn-default active\">
                        <input type=\"radio\" name=\"copy_filter\" value=\"1\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 610
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      </label>
                      <label class=\"btn btn-default\">
                        <input type=\"radio\" name=\"copy_filter\" value=\"0\" autocomplete=\"off\" /> ";
            // line 613
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      </label>
                      ";
        } else {
            // line 616
            echo "                      <label class=\"btn btn-default\">
                        <input type=\"radio\" name=\"copy_filter\" value=\"1\" autocomplete=\"off\" /> ";
            // line 617
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      </label>
                      <label class=\"btn btn-default active\">
                        <input type=\"radio\" name=\"copy_filter\" value=\"0\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 620
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      </label>
                      ";
        }
        // line 623
        echo "                    </div>
                  </div>
                </div>

                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-copy-option\">";
        // line 628
        echo (isset($context["entry_copy_option"]) ? $context["entry_copy_option"] : null);
        echo "</label>
                  <div class=\"col-sm-9\">
                    <div class=\"btn-group\" data-toggle=\"buttons\">
                      ";
        // line 631
        if ((isset($context["copy_option"]) ? $context["copy_option"] : null)) {
            // line 632
            echo "                      <label class=\"btn btn-default active\">
                        <input type=\"radio\" name=\"copy_option\" value=\"1\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 633
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      </label>
                      <label class=\"btn btn-default\">
                        <input type=\"radio\" name=\"copy_option\" value=\"0\" autocomplete=\"off\" /> ";
            // line 636
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      </label>
                      ";
        } else {
            // line 639
            echo "                      <label class=\"btn btn-default\">
                        <input type=\"radio\" name=\"copy_option\" value=\"1\" autocomplete=\"off\" /> ";
            // line 640
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      </label>
                      <label class=\"btn btn-default active\">
                        <input type=\"radio\" name=\"copy_option\" value=\"0\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 643
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      </label>
                      ";
        }
        // line 646
        echo "                    </div>
                  </div>
                </div>

                <h4>";
        // line 650
        echo (isset($context["nav_copy_other"]) ? $context["nav_copy_other"] : null);
        echo "</h4>

                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\">";
        // line 653
        echo (isset($context["entry_copy_clear_filter"]) ? $context["entry_copy_clear_filter"] : null);
        echo "</label>
                  <div class=\"col-sm-9\">
                    <div class=\"btn-group\" data-toggle=\"buttons\">
                      <label class=\"btn btn-default\">
                        <input type=\"radio\" name=\"copy_truncate\" value=\"1\" autocomplete=\"off\" /> ";
        // line 657
        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        echo "
                      </label>
                      <label class=\"btn btn-default active\">
                        <input type=\"radio\" name=\"copy_truncate\" value=\"0\" autocomplete=\"off\" checked=\"checked\" /> ";
        // line 660
        echo (isset($context["text_no"]) ? $context["text_no"] : null);
        echo "
                      </label>
                    </div>
                  </div>
                </div>

                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\">";
        // line 667
        echo (isset($context["entry_copy_category"]) ? $context["entry_copy_category"] : null);
        echo "</label>
                  <div class=\"col-sm-9\">
                    <div class=\"btn-group\" data-toggle=\"buttons\">
                      <label class=\"btn btn-default active\">
                        <input type=\"radio\" name=\"copy_category\" value=\"1\" autocomplete=\"off\" checked=\"checked\" /> ";
        // line 671
        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        echo "
                      </label>
                      <label class=\"btn btn-default\">
                        <input type=\"radio\" name=\"copy_category\" value=\"0\" autocomplete=\"off\" /> ";
        // line 674
        echo (isset($context["text_no"]) ? $context["text_no"] : null);
        echo "
                      </label>
                    </div>
                    <p class=\"help-block\">";
        // line 677
        echo (isset($context["help_copy_category"]) ? $context["help_copy_category"] : null);
        echo "</p>
                  </div>
                </div>

                <div class=\"form-group\">
                  <div class=\"col-sm-offset-3 col-sm-9\">
                    <button type=\"button\" class=\"btn btn-lg btn-primary\" id=\"button-copy-filter\" data-loading-text=\"";
        // line 683
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" data-complete-text=\"";
        echo (isset($context["text_complete"]) ? $context["text_complete"] : null);
        echo "\"><i class=\"fa fa-copy\"></i> ";
        echo (isset($context["button_copy"]) ? $context["button_copy"] : null);
        echo "</button>
                  </div>
                </div>
  \t\t        </div>
            </div>
          </div>
        </form>
\t\t\t</div>
    </div>
  </div>
<script type=\"text/javascript\"><!--
\$(function() {
  \$('[data-toggle=\"trigger\"][onclick]').trigger('click');

  var timer;

  \$('#button-copy-filter').on('click', function(e) {
    clearTimeout(timer);

    \$('#tab-copy > .alert').remove();

    var \$button = \$(this).button('loading');

    \$.post('index.php?route=extension/module/ocfilter/copyFilters&user_token=";
        // line 706
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "', \$('[name^=\"copy_\"], [name=\"attribute_separator\"]').serialize(), function(response) {
      if (response['error']) {
        \$button.button('reset');

        \$('#tab-copy').prepend('<div class=\"alert alert-danger\" role=\"alert\">' + response['error'] + '</div>');
      }

      if (response['success']) {
        \$button.button('complete');

        \$('#tab-copy').prepend('<div class=\"alert alert-success\" role=\"alert\">' + response['success'] + '</div>');

        timer = setTimeout(function() {
          \$button.button('reset');
        }, 10 * 1000);
      }
    }, 'json');
  });
});
//--></script>
</div>
";
        // line 727
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "extension/module/ocfilter.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1481 => 727,  1457 => 706,  1427 => 683,  1418 => 677,  1412 => 674,  1406 => 671,  1399 => 667,  1389 => 660,  1383 => 657,  1376 => 653,  1370 => 650,  1364 => 646,  1358 => 643,  1352 => 640,  1349 => 639,  1343 => 636,  1337 => 633,  1334 => 632,  1332 => 631,  1326 => 628,  1319 => 623,  1313 => 620,  1307 => 617,  1304 => 616,  1298 => 613,  1292 => 610,  1289 => 609,  1287 => 608,  1281 => 605,  1270 => 599,  1267 => 598,  1261 => 595,  1255 => 592,  1252 => 591,  1246 => 588,  1240 => 585,  1237 => 584,  1235 => 583,  1228 => 579,  1222 => 576,  1215 => 572,  1212 => 571,  1206 => 568,  1200 => 565,  1194 => 562,  1191 => 561,  1185 => 558,  1179 => 555,  1173 => 552,  1170 => 551,  1168 => 550,  1163 => 548,  1157 => 545,  1151 => 542,  1148 => 541,  1146 => 540,  1140 => 537,  1133 => 532,  1127 => 531,  1119 => 529,  1111 => 527,  1108 => 526,  1104 => 525,  1098 => 522,  1092 => 519,  1083 => 513,  1080 => 512,  1074 => 509,  1068 => 506,  1065 => 505,  1059 => 502,  1053 => 499,  1050 => 498,  1048 => 497,  1042 => 494,  1034 => 489,  1029 => 487,  1025 => 486,  1019 => 483,  1011 => 478,  1006 => 476,  1002 => 475,  996 => 472,  986 => 465,  983 => 464,  977 => 461,  971 => 458,  968 => 457,  962 => 454,  956 => 451,  953 => 450,  951 => 449,  945 => 446,  937 => 441,  933 => 439,  927 => 436,  921 => 433,  918 => 432,  912 => 429,  906 => 426,  903 => 425,  901 => 424,  895 => 421,  887 => 416,  884 => 415,  878 => 412,  872 => 409,  869 => 408,  863 => 405,  857 => 402,  854 => 401,  852 => 400,  846 => 397,  838 => 392,  834 => 390,  828 => 387,  822 => 384,  819 => 383,  813 => 380,  807 => 377,  804 => 376,  802 => 375,  796 => 372,  786 => 364,  780 => 361,  774 => 358,  771 => 357,  765 => 354,  759 => 351,  756 => 350,  754 => 349,  748 => 346,  739 => 339,  733 => 338,  725 => 336,  717 => 334,  714 => 333,  710 => 332,  704 => 329,  696 => 323,  690 => 320,  684 => 317,  681 => 316,  675 => 313,  669 => 310,  666 => 309,  664 => 308,  658 => 305,  649 => 299,  645 => 297,  639 => 294,  633 => 291,  630 => 290,  624 => 287,  618 => 284,  615 => 283,  613 => 282,  607 => 279,  599 => 273,  593 => 272,  585 => 270,  577 => 268,  574 => 267,  570 => 266,  564 => 263,  555 => 257,  551 => 255,  545 => 252,  539 => 249,  536 => 248,  530 => 245,  524 => 242,  521 => 241,  519 => 240,  513 => 237,  505 => 232,  501 => 230,  495 => 227,  489 => 224,  486 => 223,  480 => 220,  474 => 217,  471 => 216,  469 => 215,  463 => 212,  455 => 207,  451 => 205,  445 => 202,  439 => 199,  436 => 198,  430 => 195,  424 => 192,  421 => 191,  419 => 190,  413 => 187,  405 => 182,  401 => 180,  395 => 177,  389 => 174,  386 => 173,  380 => 170,  374 => 167,  371 => 166,  369 => 165,  363 => 162,  355 => 157,  351 => 155,  345 => 152,  339 => 149,  336 => 148,  330 => 145,  324 => 142,  321 => 141,  319 => 140,  313 => 137,  302 => 129,  297 => 127,  289 => 121,  283 => 118,  277 => 115,  274 => 114,  268 => 111,  262 => 108,  259 => 107,  257 => 106,  251 => 103,  243 => 98,  239 => 96,  233 => 93,  227 => 90,  224 => 89,  218 => 86,  212 => 83,  209 => 82,  207 => 81,  201 => 78,  193 => 73,  189 => 71,  183 => 68,  177 => 65,  174 => 64,  168 => 61,  162 => 58,  159 => 57,  157 => 56,  151 => 53,  142 => 47,  138 => 46,  134 => 45,  130 => 44,  126 => 43,  117 => 37,  112 => 35,  106 => 34,  100 => 33,  95 => 30,  87 => 26,  84 => 25,  76 => 21,  74 => 20,  67 => 15,  56 => 13,  52 => 12,  47 => 10,  40 => 8,  34 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="submit" form="form-ocfilter" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary" onclick="$('#form-ocfilter').attr('action','{{ save }}');"><i class="fa fa-save"></i></button>*/
/*         <button type="submit" form="form-ocfilter" data-toggle="tooltip" title="{{ button_apply }}" class="btn btn-success" onclick="$('#form-ocfilter').attr('action','{{ apply }}');"><i class="fa fa-save"></i></button>*/
/* 				<a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a>*/
/* 			</div>*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="container-fluid">*/
/*     {% if error_warning %}*/
/*     <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     {% if success %}*/
/*     <div class="alert alert-success"><i class="fa fa-exclamation-circle"></i> {{ success }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <ul class="list-inline pull-right">*/
/*           <li><a href="{{ filter_list }}" target="_blank"><i class="fa fa-fw fa-code-fork"></i> {{ text_filter_list }}</a></li>*/
/*           <li><a href="{{ filter_page_list }}" target="_blank"><i class="fa fa-fw fa-file-text-o"></i> {{ text_filter_page_list }}</a></li>*/
/*           <li><a href="https://ocfilter.com/faq" target="_blank"><i class="fa fa-fw fa-question-circle"></i> {{ text_faq }}</a></li>*/
/*         </ul>*/
/*         <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_edit }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <form action="" method="post" enctype="multipart/form-data" id="form-ocfilter" class="form-horizontal">*/
/*           <div role="tabs">*/
/*             <ul class="nav nav-tabs" role="tablist">*/
/*               <li class="active"><a href="#tab-general" data-toggle="tab">{{ tab_general }}</a></li>*/
/*               <li><a href="#tab-option" data-toggle="tab">{{ tab_option }}</a></li>*/
/*               <li><a href="#tab-price-filtering" data-toggle="tab">{{ tab_price_filtering }}</a></li>*/
/*               <li><a href="#tab-other" data-toggle="tab">{{ tab_other }}</a></li>*/
/*               <li><a href="#tab-copy" data-toggle="tab">{{ tab_copy }}</a></li>*/
/*             </ul>*/
/* */
/*           	<div class="tab-content">*/
/*               <div id="tab-general" class="tab-pane active">*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-3 control-label" for="input-status">{{ entry_status }}</label>*/
/*                   <div class="col-sm-9">*/
/*                     <div class="btn-group" data-toggle="buttons">*/
/*                       {% if status %}*/
/*                       <label class="btn btn-default active">*/
/*                         <input type="radio" name="status" value="1" autocomplete="off" checked="checked" /> {{ text_enabled }}*/
/*                       </label>*/
/*                       <label class="btn btn-default">*/
/*                         <input type="radio" name="status" value="0" autocomplete="off" /> {{ text_disabled }}*/
/*                       </label>*/
/*                       {% else %}*/
/*                       <label class="btn btn-default">*/
/*                         <input type="radio" name="status" value="1" autocomplete="off" /> {{ text_enabled }}*/
/*                       </label>*/
/*                       <label class="btn btn-default active">*/
/*                         <input type="radio" name="status" value="0" autocomplete="off" checked="checked" /> {{ text_disabled }}*/
/*                       </label>*/
/*                       {% endif %}*/
/*                     </div>*/
/* */
/*                     <p class="help-block">{{ help_status }}</p>*/
/*                   </div>*/
/*                 </div>*/
/* */
/*                 <div class="form-group">*/
/*                   <label class="col-sm-3 control-label" for="input-status">{{ entry_sub_category }}</label>*/
/*                   <div class="col-sm-9">*/
/*                     <div class="btn-group" data-toggle="buttons">*/
/*                       {% if sub_category %}*/
/*                       <label class="btn btn-default active">*/
/*                         <input type="radio" name="sub_category" value="1" autocomplete="off" checked="checked" /> {{ text_enabled }}*/
/*                       </label>*/
/*                       <label class="btn btn-default">*/
/*                         <input type="radio" name="sub_category" value="0" autocomplete="off" /> {{ text_disabled }}*/
/*                       </label>*/
/*                       {% else %}*/
/*                       <label class="btn btn-default">*/
/*                         <input type="radio" name="sub_category" value="1" autocomplete="off" /> {{ text_enabled }}*/
/*                       </label>*/
/*                       <label class="btn btn-default active">*/
/*                         <input type="radio" name="sub_category" value="0" autocomplete="off" checked="checked" /> {{ text_disabled }}*/
/*                       </label>*/
/*                       {% endif %}*/
/*                     </div>*/
/* */
/*                     <p class="help-block">{{ help_sub_category }}</p>*/
/*                   </div>*/
/*                 </div>*/
/* */
/*                 <div class="form-group">*/
/*                   <label class="col-sm-3 control-label" for="input-sitemap-status">{{ entry_sitemap }}</label>*/
/*                   <div class="col-sm-9">*/
/*                     <div class="btn-group" data-toggle="buttons">*/
/*                       {% if sitemap_status %}*/
/*                       <label class="btn btn-default active" data-toggle="trigger" onclick="$('#sitemap-link').collapse('show')">*/
/*                         <input type="radio" name="sitemap_status" value="1" autocomplete="off" checked="checked" /> {{ text_enabled }}*/
/*                       </label>*/
/*                       <label class="btn btn-default" onclick="$('#sitemap-link').collapse('hide')">*/
/*                         <input type="radio" name="sitemap_status" value="0" autocomplete="off" /> {{ text_disabled }}*/
/*                       </label>*/
/*                       {% else %}*/
/*                       <label class="btn btn-default" onclick="$('#sitemap-link').collapse('show')">*/
/*                         <input type="radio" name="sitemap_status" value="1" autocomplete="off" /> {{ text_enabled }}*/
/*                       </label>*/
/*                       <label class="btn btn-default active" data-toggle="trigger" onclick="$('#sitemap-link').collapse('hide')">*/
/*                         <input type="radio" name="sitemap_status" value="0" autocomplete="off" checked="checked" /> {{ text_disabled }}*/
/*                       </label>*/
/*                       {% endif %}*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/* */
/*                 <div class="collapse" id="sitemap-link">*/
/*                   <div class="form-group">*/
/*                     <label class="col-sm-3 control-label">{{ entry_sitemap_link }}</label>*/
/*                     <div class="col-sm-9">*/
/*                       <input type="text" name="sitemap_link" value="{{ sitemap_link }}" class="form-control" onclick="$(this).select();" readonly="readonly" />*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*   		        </div>*/
/* */
/*   		        <div id="tab-option" class="tab-pane">*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-3 control-label" for="input-status">{{ entry_search_button }}</label>*/
/*                   <div class="col-sm-9">*/
/*                     <div class="btn-group" data-toggle="buttons">*/
/*                       {% if search_button %}*/
/*                       <label class="btn btn-default active">*/
/*                         <input type="radio" name="search_button" value="1" autocomplete="off" checked="checked" /> {{ text_enabled }}*/
/*                       </label>*/
/*                       <label class="btn btn-default">*/
/*                         <input type="radio" name="search_button" value="0" autocomplete="off" /> {{ text_disabled }}*/
/*                       </label>*/
/*                       {% else %}*/
/*                       <label class="btn btn-default">*/
/*                         <input type="radio" name="search_button" value="1" autocomplete="off" /> {{ text_enabled }}*/
/*                       </label>*/
/*                       <label class="btn btn-default active">*/
/*                         <input type="radio" name="search_button" value="0" autocomplete="off" checked="checked" /> {{ text_disabled }}*/
/*                       </label>*/
/*                       {% endif %}*/
/*                     </div>*/
/* */
/*                     <p class="help-block">{{ help_search_button }}</p>*/
/*                   </div>*/
/*                 </div>*/
/* */
/*                 <div class="form-group">*/
/*                   <label class="col-sm-3 control-label" for="input-show-selected">{{ entry_show_selected }}</label>*/
/*                   <div class="col-sm-9">*/
/*                     <div class="btn-group" data-toggle="buttons">*/
/*                       {% if show_selected %}*/
/*                       <label class="btn btn-default active">*/
/*                         <input type="radio" name="show_selected" value="1" autocomplete="off" checked="checked" /> {{ text_enabled }}*/
/*                       </label>*/
/*                       <label class="btn btn-default">*/
/*                         <input type="radio" name="show_selected" value="0" autocomplete="off" /> {{ text_disabled }}*/
/*                       </label>*/
/*                       {% else %}*/
/*                       <label class="btn btn-default">*/
/*                         <input type="radio" name="show_selected" value="1" autocomplete="off" /> {{ text_enabled }}*/
/*                       </label>*/
/*                       <label class="btn btn-default active">*/
/*                         <input type="radio" name="show_selected" value="0" autocomplete="off" checked="checked" /> {{ text_disabled }}*/
/*                       </label>*/
/*                       {% endif %}*/
/*                     </div>*/
/* */
/*                     <p class="help-block">{{ help_show_selected }}</p>*/
/*                   </div>*/
/*                 </div>*/
/* */
/*                 <div class="form-group">*/
/*                   <label class="col-sm-3 control-label" for="input-show-price">{{ entry_show_price }}</label>*/
/*                   <div class="col-sm-9">*/
/*                     <div class="btn-group" data-toggle="buttons">*/
/*                       {% if show_price %}*/
/*                       <label class="btn btn-default active">*/
/*                         <input type="radio" name="show_price" value="1" autocomplete="off" checked="checked" /> {{ text_enabled }}*/
/*                       </label>*/
/*                       <label class="btn btn-default">*/
/*                         <input type="radio" name="show_price" value="0" autocomplete="off" /> {{ text_disabled }}*/
/*                       </label>*/
/*                       {% else %}*/
/*                       <label class="btn btn-default">*/
/*                         <input type="radio" name="show_price" value="1" autocomplete="off" /> {{ text_enabled }}*/
/*                       </label>*/
/*                       <label class="btn btn-default active">*/
/*                         <input type="radio" name="show_price" value="0" autocomplete="off" checked="checked" /> {{ text_disabled }}*/
/*                       </label>*/
/*                       {% endif %}*/
/*                     </div>*/
/* */
/*                     <p class="help-block">{{ help_show_price }}</p>*/
/*                   </div>*/
/*                 </div>*/
/* */
/*                 <div class="form-group">*/
/*                   <label class="col-sm-3 control-label" for="input-show-counter">{{ entry_show_counter }}</label>*/
/*                   <div class="col-sm-9">*/
/*                     <div class="btn-group" data-toggle="buttons">*/
/*                       {% if show_counter %}*/
/*                       <label class="btn btn-default active">*/
/*                         <input type="radio" name="show_counter" value="1" autocomplete="off" checked="checked" /> {{ text_enabled }}*/
/*                       </label>*/
/*                       <label class="btn btn-default">*/
/*                         <input type="radio" name="show_counter" value="0" autocomplete="off" /> {{ text_disabled }}*/
/*                       </label>*/
/*                       {% else %}*/
/*                       <label class="btn btn-default">*/
/*                         <input type="radio" name="show_counter" value="1" autocomplete="off" /> {{ text_enabled }}*/
/*                       </label>*/
/*                       <label class="btn btn-default active">*/
/*                         <input type="radio" name="show_counter" value="0" autocomplete="off" checked="checked" /> {{ text_disabled }}*/
/*                       </label>*/
/*                       {% endif %}*/
/*                     </div>*/
/* */
/*                     <p class="help-block">{{ help_show_counter }}</p>*/
/*                   </div>*/
/*                 </div>*/
/* */
/*                 <div class="form-group">*/
/*                   <label class="col-sm-3 control-label" for="input-manufacturer">{{ entry_manufacturer }}</label>*/
/*                   <div class="col-sm-9">*/
/*                     <div class="btn-group" data-toggle="buttons">*/
/*                       {% if manufacturer %}*/
/*                       <label class="btn btn-default active" data-toggle="trigger" onclick="$('#manufacturer-type').collapse('show')">*/
/*                         <input type="radio" name="manufacturer" value="1" autocomplete="off" checked="checked" /> {{ text_enabled }}*/
/*                       </label>*/
/*                       <label class="btn btn-default" onclick="$('#manufacturer-type').collapse('hide')">*/
/*                         <input type="radio" name="manufacturer" value="0" autocomplete="off" /> {{ text_disabled }}*/
/*                       </label>*/
/*                       {% else %}*/
/*                       <label class="btn btn-default" onclick="$('#manufacturer-type').collapse('show')">*/
/*                         <input type="radio" name="manufacturer" value="1" autocomplete="off" /> {{ text_enabled }}*/
/*                       </label>*/
/*                       <label class="btn btn-default active" data-toggle="trigger" onclick="$('#manufacturer-type').collapse('hide')">*/
/*                         <input type="radio" name="manufacturer" value="0" autocomplete="off" checked="checked" /> {{ text_disabled }}*/
/*                       </label>*/
/*                       {% endif %}*/
/*                     </div>*/
/* */
/*                     <p class="help-block">{{ help_manufacturer }}</p>*/
/*                   </div>*/
/*                 </div>*/
/* */
/*                 <div class="collapse" id="manufacturer-type">*/
/*                   <div class="form-group">*/
/*                     <label class="col-sm-3 control-label" for="input-manufacturer-type">{{ entry_type }}</label>*/
/*                     <div class="col-sm-5">*/
/*                       <select name="manufacturer_type" id="input-manufacturer-type" class="form-control">*/
/*                         {% for type in types %}*/
/*                         {% if type == manufacturer_type %}*/
/*                         <option value="{{ type }}" selected="selected">{{ type|capitalize }}</option>*/
/*                         {% else %}*/
/*                         <option value="{{ type }}">{{ type|capitalize }}</option>*/
/*                         {% endif %}*/
/*                         {% endfor %}*/
/*                       </select>*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/* */
/*                 <div class="form-group">*/
/*                   <label class="col-sm-3 control-label" for="input-stock-status">{{ entry_stock_status }}</label>*/
/*                   <div class="col-sm-9">*/
/*                     <div class="btn-group" data-toggle="buttons">*/
/*                       {% if stock_status %}*/
/*                       <label class="btn btn-default active" data-toggle="trigger" onclick="$('#stock-status-method').collapse('show')">*/
/*                         <input type="radio" name="stock_status" value="1" autocomplete="off" checked="checked" /> {{ text_enabled }}*/
/*                       </label>*/
/*                       <label class="btn btn-default" onclick="$('#stock-status-method').collapse('hide')">*/
/*                         <input type="radio" name="stock_status" value="0" autocomplete="off" /> {{ text_disabled }}*/
/*                       </label>*/
/*                       {% else %}*/
/*                       <label class="btn btn-default" onclick="$('#stock-status-method').collapse('show')">*/
/*                         <input type="radio" name="stock_status" value="1" autocomplete="off" /> {{ text_enabled }}*/
/*                       </label>*/
/*                       <label class="btn btn-default active" data-toggle="trigger" onclick="$('#stock-status-method').collapse('hide')">*/
/*                         <input type="radio" name="stock_status" value="0" autocomplete="off" checked="checked" /> {{ text_disabled }}*/
/*                       </label>*/
/*                       {% endif %}*/
/*                     </div>*/
/* */
/*                     <p class="help-block">{{ help_stock_status }}</p>*/
/*                   </div>*/
/*                 </div>*/
/* */
/*                 <div class="collapse" id="stock-status-method">*/
/*                   <div class="form-group">*/
/*                     <label class="col-sm-3 control-label" for="input-stock-status-method">{{ entry_stock_status_method }}</label>*/
/*                     <div class="col-sm-9">*/
/*                       <div class="btn-group" data-toggle="buttons">*/
/*                         {% if stock_status_method == 'quantity' %}*/
/*                         <label class="btn btn-default active" data-toggle="trigger" onclick="$('.collapse-group-1').collapse('hide').filter('#stock-status-quantity').collapse('show')">*/
/*                           <input type="radio" name="stock_status_method" value="quantity" autocomplete="off" checked="checked" /> {{ text_stock_by_quantity }}*/
/*                         </label>*/
/*                         <label class="btn btn-default" onclick="$('.collapse-group-1').collapse('hide').filter('#stock-status-id').collapse('show')">*/
/*                           <input type="radio" name="stock_status_method" value="stock_status_id" autocomplete="off" /> {{ text_stock_by_status_id }}*/
/*                         </label>*/
/*                         {% else %}*/
/*                         <label class="btn btn-default" onclick="$('.collapse-group-1').collapse('hide').filter('#stock-status-quantity').collapse('show')">*/
/*                           <input type="radio" name="stock_status_method" value="quantity" autocomplete="off" /> {{ text_stock_by_quantity }}*/
/*                         </label>*/
/*                         <label class="btn btn-default active" data-toggle="trigger" onclick="$('.collapse-group-1').collapse('hide').filter('#stock-status-id').collapse('show')">*/
/*                           <input type="radio" name="stock_status_method" value="stock_status_id" autocomplete="off" checked="checked" /> {{ text_stock_by_status_id }}*/
/*                         </label>*/
/*                         {% endif %}*/
/*                       </div>*/
/*                     </div>*/
/*                   </div>*/
/* */
/*                   <div class="collapse collapse-group-1" id="stock-status-id">*/
/*                     <div class="form-group">*/
/*                       <label class="col-sm-3 control-label" for="input-stocks-tatus-type">{{ entry_type }}</label>*/
/*                       <div class="col-sm-5">*/
/*                         <select name="stock_status_type" id="input-stocks-tatus-type" class="form-control">*/
/*                           {% for type in types %}*/
/*                           {% if type == stock_status_type %}*/
/*                           <option value="{{ type }}" selected="selected">{{ type|capitalize }}</option>*/
/*                           {% else %}*/
/*                           <option value="{{ type }}">{{ type|capitalize }}</option>*/
/*                           {% endif %}*/
/*                           {% endfor %}*/
/*                         </select>*/
/*                       </div>*/
/*                     </div>*/
/*                   </div>*/
/* */
/*                   <div class="collapse collapse-group-1" id="stock-status-quantity">*/
/*                     <div class="form-group">*/
/*                       <label class="col-sm-3 control-label" for="input-stock-out-value">{{ entry_stock_out_value }}</label>*/
/*                       <div class="col-sm-9">*/
/*                         <div class="btn-group" data-toggle="buttons">*/
/*                           {% if stock_out_value %}*/
/*                           <label class="btn btn-default active">*/
/*                             <input type="radio" name="stock_out_value" value="1" autocomplete="off" checked="checked" /> {{ text_enabled }}*/
/*                           </label>*/
/*                           <label class="btn btn-default">*/
/*                             <input type="radio" name="stock_out_value" value="0" autocomplete="off" /> {{ text_disabled }}*/
/*                           </label>*/
/*                           {% else %}*/
/*                           <label class="btn btn-default">*/
/*                             <input type="radio" name="stock_out_value" value="1" autocomplete="off" /> {{ text_enabled }}*/
/*                           </label>*/
/*                           <label class="btn btn-default active">*/
/*                             <input type="radio" name="stock_out_value" value="0" autocomplete="off" checked="checked" /> {{ text_disabled }}*/
/*                           </label>*/
/*                           {% endif %}*/
/*                         </div>*/
/*                       </div>*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*   		        </div>*/
/*   		        <div id="tab-price-filtering" class="tab-pane">*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-3 control-label" for="input-manual-price">{{ entry_manual_price }}</label>*/
/*                   <div class="col-sm-9">*/
/*                     <div class="btn-group" data-toggle="buttons">*/
/*                       {% if manual_price %}*/
/*                       <label class="btn btn-default active">*/
/*                         <input type="radio" name="manual_price" value="1" autocomplete="off" checked="checked" /> {{ text_enabled }}*/
/*                       </label>*/
/*                       <label class="btn btn-default">*/
/*                         <input type="radio" name="manual_price" value="0" autocomplete="off" /> {{ text_disabled }}*/
/*                       </label>*/
/*                       {% else %}*/
/*                       <label class="btn btn-default">*/
/*                         <input type="radio" name="manual_price" value="1" autocomplete="off" /> {{ text_enabled }}*/
/*                       </label>*/
/*                       <label class="btn btn-default active">*/
/*                         <input type="radio" name="manual_price" value="0" autocomplete="off" checked="checked" /> {{ text_disabled }}*/
/*                       </label>*/
/*                       {% endif %}*/
/*                     </div>*/
/* */
/*                     <p class="help-block">{{ help_manual_price }}</p>*/
/*                   </div>*/
/*                 </div>*/
/* */
/*                 <div class="form-group">*/
/*                   <label class="col-sm-3 control-label" for="input-consider-discount">{{ entry_consider_discount }}</label>*/
/*                   <div class="col-sm-9">*/
/*                     <div class="btn-group" data-toggle="buttons">*/
/*                       {% if consider_discount %}*/
/*                       <label class="btn btn-default active">*/
/*                         <input type="radio" name="consider_discount" value="1" autocomplete="off" checked="checked" /> {{ text_enabled }}*/
/*                       </label>*/
/*                       <label class="btn btn-default">*/
/*                         <input type="radio" name="consider_discount" value="0" autocomplete="off" /> {{ text_disabled }}*/
/*                       </label>*/
/*                       {% else %}*/
/*                       <label class="btn btn-default">*/
/*                         <input type="radio" name="consider_discount" value="1" autocomplete="off" /> {{ text_enabled }}*/
/*                       </label>*/
/*                       <label class="btn btn-default active">*/
/*                         <input type="radio" name="consider_discount" value="0" autocomplete="off" checked="checked" /> {{ text_disabled }}*/
/*                       </label>*/
/*                       {% endif %}*/
/*                     </div>*/
/*                     <p class="help-block">{{ help_consider_discount }}</p>*/
/*                   </div>*/
/*                 </div>*/
/* */
/*                 <div class="form-group">*/
/*                   <label class="col-sm-3 control-label" for="input-consider-special">{{ entry_consider_special }}</label>*/
/*                   <div class="col-sm-9">*/
/*                     <div class="btn-group" data-toggle="buttons">*/
/*                       {% if consider_special %}*/
/*                       <label class="btn btn-default active">*/
/*                         <input type="radio" name="consider_special" value="1" autocomplete="off" checked="checked" /> {{ text_enabled }}*/
/*                       </label>*/
/*                       <label class="btn btn-default">*/
/*                         <input type="radio" name="consider_special" value="0" autocomplete="off" /> {{ text_disabled }}*/
/*                       </label>*/
/*                       {% else %}*/
/*                       <label class="btn btn-default">*/
/*                         <input type="radio" name="consider_special" value="1" autocomplete="off" /> {{ text_enabled }}*/
/*                       </label>*/
/*                       <label class="btn btn-default active">*/
/*                         <input type="radio" name="consider_special" value="0" autocomplete="off" checked="checked" /> {{ text_disabled }}*/
/*                       </label>*/
/*                       {% endif %}*/
/*                     </div>*/
/* */
/*                     <p class="help-block">{{ help_consider_special }}</p>*/
/*                   </div>*/
/*                 </div>*/
/* */
/*                 <div class="form-group">*/
/*                   <label class="col-sm-3 control-label" for="input-consider-option">{{ entry_consider_option }}</label>*/
/*                   <div class="col-sm-9">*/
/*                     <div class="btn-group" data-toggle="buttons">*/
/*                       {% if consider_option %}*/
/*                       <label class="btn btn-default active">*/
/*                         <input type="radio" name="consider_option" value="1" autocomplete="off" checked="checked" /> {{ text_enabled }}*/
/*                       </label>*/
/*                       <label class="btn btn-default">*/
/*                         <input type="radio" name="consider_option" value="0" autocomplete="off" /> {{ text_disabled }}*/
/*                       </label>*/
/*                       {% else %}*/
/*                       <label class="btn btn-default">*/
/*                         <input type="radio" name="consider_option" value="1" autocomplete="off" /> {{ text_enabled }}*/
/*                       </label>*/
/*                       <label class="btn btn-default active">*/
/*                         <input type="radio" name="consider_option" value="0" autocomplete="off" checked="checked" /> {{ text_disabled }}*/
/*                       </label>*/
/*                       {% endif %}*/
/*                     </div>*/
/*                     <p class="help-block">{{ help_consider_option }}</p>*/
/*                   </div>*/
/*                 </div>*/
/*   		        </div>*/
/* */
/*   		        <div id="tab-other" class="tab-pane">*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-3 control-label" for="input-show-options-limit">{{ entry_show_first_limit }}</label>*/
/*                   <div class="col-sm-4">*/
/*                     <div class="input-group">*/
/*                       <input type="number" name="show_options_limit" min="0" value="{{ show_options_limit }}" class="form-control" id="input-show-options-limit" />*/
/*                       <span class="input-group-addon">{{ text_options }}</span>*/
/*                     </div><!-- /.input-group -->*/
/*                     <p class="help-block">{{ help_show_options_limit }}</p>*/
/*                   </div>*/
/*                 </div>*/
/* */
/*                 <div class="form-group">*/
/*                   <label class="col-sm-3 control-label" for="input-show-values-limit">{{ entry_show_first_limit }}</label>*/
/*                   <div class="col-sm-4">*/
/*                     <div class="input-group">*/
/*                       <input type="number" name="show_values_limit" min="0" value="{{ show_values_limit }}" class="form-control" id="input-show-values-limit" />*/
/*                       <span class="input-group-addon">{{ text_values }}</span>*/
/*                     </div><!-- /.input-group -->*/
/*                     <p class="help-block">{{ help_show_values_limit }}</p>*/
/*                   </div>*/
/*                 </div>*/
/* */
/*                 <div class="form-group">*/
/*                   <label class="col-sm-3 control-label" for="input-hide-empty-values">{{ entry_hide_empty_values }}</label>*/
/*                   <div class="col-sm-9">*/
/*                     <div class="btn-group" data-toggle="buttons">*/
/*                       {% if hide_empty_values %}*/
/*                       <label class="btn btn-default active">*/
/*                         <input type="radio" name="hide_empty_values" value="1" autocomplete="off" checked="checked" /> {{ text_enabled }}*/
/*                       </label>*/
/*                       <label class="btn btn-default">*/
/*                         <input type="radio" name="hide_empty_values" value="0" autocomplete="off" /> {{ text_disabled }}*/
/*                       </label>*/
/*                       {% else %}*/
/*                       <label class="btn btn-default">*/
/*                         <input type="radio" name="hide_empty_values" value="1" autocomplete="off" /> {{ text_enabled }}*/
/*                       </label>*/
/*                       <label class="btn btn-default active">*/
/*                         <input type="radio" name="hide_empty_values" value="0" autocomplete="off" checked="checked" /> {{ text_disabled }}*/
/*                       </label>*/
/*                       {% endif %}*/
/*                     </div>*/
/*                     <p class="help-block">{{ help_hide_empty_values }}</p>*/
/*                   </div>*/
/*                 </div>*/
/*   		        </div>*/
/* */
/*   		        <div id="tab-copy" class="tab-pane">*/
/*                 <h4>{{ nav_copy_filter }}</h4>*/
/* */
/*                 <div class="form-group">*/
/*                   <label class="col-sm-3 control-label" for="input-copy-type">{{ entry_copy_type }}</label>*/
/*                   <div class="col-sm-5">*/
/*                     <select name="copy_type" id="input-copy-type" class="form-control">*/
/*                       {% for type in types %}*/
/*                       {% if type == copy_type %}*/
/*                       <option value="{{ type }}" selected="selected">{{ type|capitalize }}</option>*/
/*                       {% else %}*/
/*                       <option value="{{ type }}">{{ type|capitalize }}</option>*/
/*                       {% endif %}*/
/*                       {% endfor %}*/
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/* */
/*                 <div class="form-group">*/
/*                   <label class="col-sm-3 control-label" for="input-truncate">{{ entry_copy_status }}</label>*/
/*                   <div class="col-sm-9">*/
/*                     <div class="btn-group" data-toggle="buttons">*/
/*                       {% if copy_status > 0 %}*/
/*                       <label class="btn btn-default active">*/
/*                         <input type="radio" name="copy_status" value="1" autocomplete="off" checked="checked" /> {{ text_enabled }}*/
/*                       </label>*/
/*                       <label class="btn btn-default">*/
/*                         <input type="radio" name="copy_status" value="0" autocomplete="off" /> {{ text_disabled }}*/
/*                       </label>*/
/*                       <label class="btn btn-default">*/
/*                         <input type="radio" name="copy_status" value="-1" autocomplete="off" /> {{ text_auto }}*/
/*                       </label>*/
/*                       {% elseif copy_status < 0 %}*/
/*                       <label class="btn btn-default">*/
/*                         <input type="radio" name="copy_status" value="1" autocomplete="off" /> {{ text_enabled }}*/
/*                       </label>*/
/*                       <label class="btn btn-default">*/
/*                         <input type="radio" name="copy_status" value="0" autocomplete="off" /> {{ text_disabled }}*/
/*                       </label>*/
/*                       <label class="btn btn-default active">*/
/*                         <input type="radio" name="copy_status" value="-1" autocomplete="off" checked="checked" /> {{ text_auto }}*/
/*                       </label>*/
/*                       {% else %}*/
/*                       <label class="btn btn-default">*/
/*                         <input type="radio" name="copy_status" value="1" autocomplete="off" /> {{ text_enabled }}*/
/*                       </label>*/
/*                       <label class="btn btn-default active">*/
/*                         <input type="radio" name="copy_status" value="0" autocomplete="off" checked="checked" /> {{ text_disabled }}*/
/*                       </label>*/
/*                       <label class="btn btn-default">*/
/*                         <input type="radio" name="copy_status" value="-1" autocomplete="off" /> {{ text_auto }}*/
/*                       </label>*/
/*                       {% endif %}*/
/*                     </div>*/
/*                     <p class="help-block">{{ help_copy_status_auto }}</p>*/
/*                   </div>*/
/*                 </div>*/
/* */
/*                 <h4>{{ nav_copy_source }}</h4>*/
/* */
/*                 <div class="form-group">*/
/*                   <label class="col-sm-3 control-label" for="input-copy-attribute">{{ entry_copy_attribute }}</label>*/
/*                   <div class="col-sm-4">*/
/*                     <div class="input-group">*/
/*                       <span class="input-group-btn" data-toggle="buttons">*/
/*                         {% if copy_attribute %}*/
/*                         <label class="btn btn-default active" data-toggle="trigger" onclick="$('[name=\'attribute_separator\']').prop('disabled', false)">*/
/*                           <input type="radio" name="copy_attribute" value="1" autocomplete="off" checked="checked" /> {{ text_yes }}*/
/*                         </label>*/
/*                         <label class="btn btn-default" onclick="$('[name=\'attribute_separator\']').prop('disabled', true)">*/
/*                           <input type="radio" name="copy_attribute" value="0" autocomplete="off" /> {{ text_no }}*/
/*                         </label>*/
/*                         {% else %}*/
/*                         <label class="btn btn-default" onclick="$('[name=\'attribute_separator\']').prop('disabled', false)">*/
/*                           <input type="radio" name="copy_attribute" value="1" autocomplete="off" /> {{ text_yes }}*/
/*                         </label>*/
/*                         <label class="btn btn-default active" data-toggle="trigger" onclick="$('[name=\'attribute_separator\']').prop('disabled', true)">*/
/*                           <input type="radio" name="copy_attribute" value="0" autocomplete="off" checked="checked" /> {{ text_no }}*/
/*                         </label>*/
/*                         {% endif %}*/
/*                       </span>*/
/*                       <input name="attribute_separator" type="text" class="form-control" placeholder="{{ entry_copy_attribute_separator }}" value="{{ copy_attribute_separator }}" disabled="disabled" />*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/* */
/*                 <div class="form-group">*/
/*                   <label class="col-sm-3 control-label" for="input-copy-filter">{{ entry_copy_filter }}</label>*/
/*                   <div class="col-sm-9">*/
/*                     <div class="btn-group" data-toggle="buttons">*/
/*                       {% if copy_filter %}*/
/*                       <label class="btn btn-default active">*/
/*                         <input type="radio" name="copy_filter" value="1" autocomplete="off" checked="checked" /> {{ text_yes }}*/
/*                       </label>*/
/*                       <label class="btn btn-default">*/
/*                         <input type="radio" name="copy_filter" value="0" autocomplete="off" /> {{ text_no }}*/
/*                       </label>*/
/*                       {% else %}*/
/*                       <label class="btn btn-default">*/
/*                         <input type="radio" name="copy_filter" value="1" autocomplete="off" /> {{ text_yes }}*/
/*                       </label>*/
/*                       <label class="btn btn-default active">*/
/*                         <input type="radio" name="copy_filter" value="0" autocomplete="off" checked="checked" /> {{ text_no }}*/
/*                       </label>*/
/*                       {% endif %}*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/* */
/*                 <div class="form-group">*/
/*                   <label class="col-sm-3 control-label" for="input-copy-option">{{ entry_copy_option }}</label>*/
/*                   <div class="col-sm-9">*/
/*                     <div class="btn-group" data-toggle="buttons">*/
/*                       {% if copy_option %}*/
/*                       <label class="btn btn-default active">*/
/*                         <input type="radio" name="copy_option" value="1" autocomplete="off" checked="checked" /> {{ text_yes }}*/
/*                       </label>*/
/*                       <label class="btn btn-default">*/
/*                         <input type="radio" name="copy_option" value="0" autocomplete="off" /> {{ text_no }}*/
/*                       </label>*/
/*                       {% else %}*/
/*                       <label class="btn btn-default">*/
/*                         <input type="radio" name="copy_option" value="1" autocomplete="off" /> {{ text_yes }}*/
/*                       </label>*/
/*                       <label class="btn btn-default active">*/
/*                         <input type="radio" name="copy_option" value="0" autocomplete="off" checked="checked" /> {{ text_no }}*/
/*                       </label>*/
/*                       {% endif %}*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/* */
/*                 <h4>{{ nav_copy_other }}</h4>*/
/* */
/*                 <div class="form-group">*/
/*                   <label class="col-sm-3 control-label">{{ entry_copy_clear_filter }}</label>*/
/*                   <div class="col-sm-9">*/
/*                     <div class="btn-group" data-toggle="buttons">*/
/*                       <label class="btn btn-default">*/
/*                         <input type="radio" name="copy_truncate" value="1" autocomplete="off" /> {{ text_yes }}*/
/*                       </label>*/
/*                       <label class="btn btn-default active">*/
/*                         <input type="radio" name="copy_truncate" value="0" autocomplete="off" checked="checked" /> {{ text_no }}*/
/*                       </label>*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/* */
/*                 <div class="form-group">*/
/*                   <label class="col-sm-3 control-label">{{ entry_copy_category }}</label>*/
/*                   <div class="col-sm-9">*/
/*                     <div class="btn-group" data-toggle="buttons">*/
/*                       <label class="btn btn-default active">*/
/*                         <input type="radio" name="copy_category" value="1" autocomplete="off" checked="checked" /> {{ text_yes }}*/
/*                       </label>*/
/*                       <label class="btn btn-default">*/
/*                         <input type="radio" name="copy_category" value="0" autocomplete="off" /> {{ text_no }}*/
/*                       </label>*/
/*                     </div>*/
/*                     <p class="help-block">{{ help_copy_category }}</p>*/
/*                   </div>*/
/*                 </div>*/
/* */
/*                 <div class="form-group">*/
/*                   <div class="col-sm-offset-3 col-sm-9">*/
/*                     <button type="button" class="btn btn-lg btn-primary" id="button-copy-filter" data-loading-text="{{ text_loading }}" data-complete-text="{{ text_complete }}"><i class="fa fa-copy"></i> {{ button_copy }}</button>*/
/*                   </div>*/
/*                 </div>*/
/*   		        </div>*/
/*             </div>*/
/*           </div>*/
/*         </form>*/
/* 			</div>*/
/*     </div>*/
/*   </div>*/
/* <script type="text/javascript"><!--*/
/* $(function() {*/
/*   $('[data-toggle="trigger"][onclick]').trigger('click');*/
/* */
/*   var timer;*/
/* */
/*   $('#button-copy-filter').on('click', function(e) {*/
/*     clearTimeout(timer);*/
/* */
/*     $('#tab-copy > .alert').remove();*/
/* */
/*     var $button = $(this).button('loading');*/
/* */
/*     $.post('index.php?route=extension/module/ocfilter/copyFilters&user_token={{ user_token }}', $('[name^="copy_"], [name="attribute_separator"]').serialize(), function(response) {*/
/*       if (response['error']) {*/
/*         $button.button('reset');*/
/* */
/*         $('#tab-copy').prepend('<div class="alert alert-danger" role="alert">' + response['error'] + '</div>');*/
/*       }*/
/* */
/*       if (response['success']) {*/
/*         $button.button('complete');*/
/* */
/*         $('#tab-copy').prepend('<div class="alert alert-success" role="alert">' + response['success'] + '</div>');*/
/* */
/*         timer = setTimeout(function() {*/
/*           $button.button('reset');*/
/*         }, 10 * 1000);*/
/*       }*/
/*     }, 'json');*/
/*   });*/
/* });*/
/* //--></script>*/
/* </div>*/
/* {{ footer }}*/
