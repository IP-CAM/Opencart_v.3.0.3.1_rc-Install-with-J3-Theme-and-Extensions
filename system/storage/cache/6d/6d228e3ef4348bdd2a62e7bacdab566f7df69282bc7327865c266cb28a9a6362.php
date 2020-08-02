<?php

/* extension/payment/yandex_money/market.twig */
class __TwigTemplate_e2721f98ff6d9aa7ce3f8c3352f8f7a56a13d6e80704381d90e9ca6f044dd49c extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["market_status"]) ? $context["market_status"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 2
            echo "    ";
            echo $context["m"];
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 4
        echo "<style>
    .yandex-money-market-sub-header {
        font-size: 120%;
        font-style: italic;
    }
    .yandex-money-market-sub-form-group {

    }
    .yandex-money-market-font-weight-normal {
        font-weight: normal;
        text-align: left !important;
    }

    .yandex-money-market-with-padding-top {
        padding-top: 9px;
    }

    .yandex-money-market-short-width {
        display: inline-block;
        width: 20%;
    }

    .yandex-money-market-width-100-percent {
        width: 100%;
    }

    .yandex-money-market-first-letter-uppercase:first-letter {
        text-transform: uppercase;
    }

    .yandex-money-market-category-tree {
        display: block;
    }

    .yandex-money-market-edit-on-button {
        position: relative;
        cursor: pointer;
        display: none;
    }

    .yandex-money-market-currency-disabled {
        color: silver;
    }

    .yandex-money-market-js-editable:hover .yandex-money-market-edit-on-button {
        display: inline;
    }

    .yandex-money-market-js-editable-edit {
        display: none;
    }

    .yandex-money-market-currency-edit form {
        display: inline-block;
    }

    .yandex-money-market-url {
        display: inline-block;
        width: 80%;
    }

    .yandex-money-market-copy-url {
        margin-left: 5px;
        cursor: pointer;
    }

    .yandex-money-market-delivery-more {
        padding-left: 20px;
        display: none;
    }

    .yandex-money-market-available-options-list::after {
        content: ',';
    }

    .yandex-money-market-available-options-list.last::after {
        content: '';
    }

    .yandex-money-market-available-status,
    .yandex-money-market-available-with-ready,
    .yandex-money-market-available-with-to-order {
        font-style: italic;
    }

    .yandex-money-market-additional-condition-template {
        display: none;
    }

    .yandex-money-market-hidden-element {
        display: none;
    }
</style>
<div class=\"panel panel-default\">
    <div class=\"panel-body\">
        <div>
            <p>";
        // line 100
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "kassa_header_description"), "method");
        echo "</p>
            <p>";
        // line 101
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "kassa_version_string"), "method");
        echo " ";
        echo (isset($context["module_version"]) ? $context["module_version"] : null);
        echo "</p>
        </div>
        <div class=\"form-group\">
            <label class=\"col-sm-4 control-label\">";
        // line 104
        echo (isset($context["active"]) ? $context["active"] : null);
        echo "</label>
            <div class=\"col-sm-8\">
                <label class=\"radio-inline\">
                    <input type=\"radio\" ";
        // line 107
        echo (((isset($context["yandex_money_market_active"]) ? $context["yandex_money_market_active"] : null)) ? (" checked=\"checked\"") : (""));
        echo " name=\"yandex_money_market_active\" value=\"1\"/> ";
        echo (isset($context["active_on"]) ? $context["active_on"] : null);
        echo "</label>
                <label class=\"radio-inline\">
                    <input type=\"radio\" ";
        // line 109
        echo (( !(isset($context["yandex_money_market_active"]) ? $context["yandex_money_market_active"] : null)) ? (" checked=\"checked\"") : (""));
        echo " name=\"yandex_money_market_active\" value=\"0\"/> ";
        echo (isset($context["active_off"]) ? $context["active_off"] : null);
        echo "</label>
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"col-sm-4 control-label\" for=\"yandex_money_market_shopname\">";
        // line 113
        echo (isset($context["market_short_name"]) ? $context["market_short_name"] : null);
        echo "</label>
            <div class=\"col-sm-8\">
                <input type=\"text\" name=\"yandex_money_market_shopname\" value=\"";
        // line 115
        echo (isset($context["yandex_money_market_shopname"]) ? $context["yandex_money_market_shopname"] : null);
        echo "\"
                       id=\"yandex_money_market_shopname\" class=\"form-control\" maxlength=\"20\"/>
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"col-sm-4 control-label\" for=\"yandex_money_market_full_shopname\">";
        // line 120
        echo (isset($context["market_full_name"]) ? $context["market_full_name"] : null);
        echo "</label>
            <div class=\"col-sm-8\">
                <input type=\"text\" name=\"yandex_money_market_full_shopname\"
                       value=\"";
        // line 123
        echo (isset($context["yandex_money_market_full_shopname"]) ? $context["yandex_money_market_full_shopname"] : null);
        echo "\" id=\"yandex_money_market_full_shopname\"
                       class=\"form-control\"/>
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"col-sm-4 control-label\">";
        // line 128
        echo (isset($context["market_currencies"]) ? $context["market_currencies"] : null);
        echo "</label>
            <div class=\"col-sm-8\">
                ";
        // line 130
        echo (isset($context["market_currency_list"]) ? $context["market_currency_list"] : null);
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"control-label col-sm-4\">";
        // line 134
        echo (isset($context["market_categories"]) ? $context["market_categories"] : null);
        echo "</label>
            <div class=\"col-sm-8\">
                <div>
                    <label class=\"radio-inline\">
                        <input type=\"radio\" ";
        // line 138
        echo (((isset($context["yandex_money_market_category_all"]) ? $context["yandex_money_market_category_all"] : null)) ? (" checked=\"checked\"") : (""));
        echo "
                               class=\"yandex_money_market_category_tree_switcher\"
                               name=\"yandex_money_market_category_all\" value=\"on\"/> ";
        // line 140
        echo (isset($context["market_categories_all"]) ? $context["market_categories_all"] : null);
        echo "
                    </label>
                </div>
                <div>
                    <label class=\"radio-inline\">
                        <input type=\"radio\" ";
        // line 145
        echo (( !(isset($context["yandex_money_market_category_all"]) ? $context["yandex_money_market_category_all"] : null)) ? (" checked=\"checked\"") : (""));
        echo "
                               class=\"yandex_money_market_category_tree_switcher\"
                               name=\"yandex_money_market_category_all\" value=\"\"/> ";
        // line 147
        echo (isset($context["market_categories_selected"]) ? $context["market_categories_selected"] : null);
        echo "
                    </label>
                </div>
                <div class=\"panel panel-default yandex-money-market-category-tree ";
        // line 150
        echo (((isset($context["yandex_money_market_category_all"]) ? $context["yandex_money_market_category_all"] : null)) ? ("yandex-money-market-hidden-element") : (""));
        echo "\">
                    <div class=\"tree-panel-heading tree-panel-heading-controls clearfix\">
                        <div class=\"tree-actions pull-right\">
                            <a onclick=\"return false;\" class=\"btn btn-default catTreeHideCatAll\">
                                <i class=\"fa fa-minus-square-o\"></i> ";
        // line 154
        echo (isset($context["market_sv_all"]) ? $context["market_sv_all"] : null);
        echo "
                            </a>
                            <a onclick=\"return false;\" class=\"btn btn-default catTreeShowCatAll\">
                                <i class=\"fa fa-plus-square-o \"></i> ";
        // line 157
        echo (isset($context["market_rv_all"]) ? $context["market_rv_all"] : null);
        echo "
                            </a>
                            <a onclick=\"return false;\" class=\"btn btn-default catTreeCheckCatAll\">
                                <i class=\"fa fa-check-square-o\"></i> ";
        // line 160
        echo (isset($context["market_ch_all"]) ? $context["market_ch_all"] : null);
        echo "
                            </a>
                            <a onclick=\"return false;\" class=\"btn btn-default catTreeUncheckCatAll\">
                                <i class=\"fa fa-square-o \"></i> ";
        // line 163
        echo (isset($context["market_unch_all"]) ? $context["market_unch_all"] : null);
        echo "
                            </a>
                        </div>
                    </div>
                    <ul id=\"categoryTree\" class=\"tree\">
                        ";
        // line 168
        echo (isset($context["market_cat_tree"]) ? $context["market_cat_tree"] : null);
        echo "
                    </ul>
                </div>
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"col-sm-4 control-label\">";
        // line 174
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "market_delivery_label"), "method");
        echo "</label>
            <div class=\"col-sm-8\">
                ";
        // line 176
        echo $this->getAttribute((isset($context["market"]) ? $context["market"] : null), "htmlDeliveryList", array(), "method");
        echo "
                <a onclick=\"return false;\"
                   class=\"yandex-money-market-delivery-more\">";
        // line 178
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "market_delivery_more"), "method");
        echo "</a>
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"col-sm-4 control-label yandex-money-market-sub-header\">";
        // line 182
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "market_header_offer_settings"), "method");
        echo "</label>
        </div>
        <div class=\"form-group\">
            <label class=\"col-sm-4 control-label\">";
        // line 185
        echo (isset($context["market_format"]) ? $context["market_format"] : null);
        echo "</label>
            <div class=\"col-sm-8\">
                <div>
                    <label class=\"radio-inline\">
                        <input type=\"radio\" ";
        // line 189
        echo (( !(isset($context["yandex_money_market_simple"]) ? $context["yandex_money_market_simple"] : null)) ? (" checked=\"checked\"") : (""));
        echo "
                               name=\"yandex_money_market_simple\" value=\"0\"/> ";
        // line 190
        echo (isset($context["market_format_vendor_model"]) ? $context["market_format_vendor_model"] : null);
        echo "
                    </label>
                </div>
                <div>
                    <label class=\"radio-inline\">
                        <input type=\"radio\" ";
        // line 195
        echo (((isset($context["yandex_money_market_simple"]) ? $context["yandex_money_market_simple"] : null)) ? (" checked=\"checked\"") : (""));
        echo "
                               name=\"yandex_money_market_simple\" value=\"1\"/> ";
        // line 196
        echo (isset($context["market_format_simple"]) ? $context["market_format_simple"] : null);
        echo "
                    </label>
                    <div class=\"form-group yandex_money_market_offer_name_template\">
                        <label class=\"col-sm-3 control-label yandex-money-market-font-weight-normal\">";
        // line 199
        echo (isset($context["market_offer_name_template"]) ? $context["market_offer_name_template"] : null);
        echo "</label>
                        <div class=\"col-sm-9\">
                            <input type=\"text\" name=\"yandex_money_market_name_template\"
                                   value=\"";
        // line 202
        echo (isset($context["yandex_money_market_name_template"]) ? $context["yandex_money_market_name_template"] : null);
        echo "\" class=\"form-control\"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"col-sm-4 control-label\">";
        // line 209
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "market_available_label"), "method");
        echo "</label>
            <div class=\"col-sm-8\">
                ";
        // line 211
        echo $this->getAttribute((isset($context["market"]) ? $context["market"] : null), "htmlAvailableList", array(), "method");
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"col-sm-4 control-label\">";
        // line 215
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "market_vat_label"), "method");
        echo "</label>
            <div class=\"col-sm-8\">
                <label class=\"form-check-label yandex-money-market-font-weight-normal\">
                    <input type=\"checkbox\" name=\"yandex_money_market_vat_enabled\"
                           value=\"on\" ";
        // line 219
        echo (((isset($context["yandex_money_market_vat_enabled"]) ? $context["yandex_money_market_vat_enabled"] : null)) ? ("checked=\"checked\"") : (""));
        echo ">
                    ";
        // line 220
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "market_vat_enable_label"), "method");
        echo "
                </label>
                ";
        // line 222
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["market"]) ? $context["market"] : null), "getTaxClasses", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["taxClass"]) {
            // line 223
            echo "                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label yandex-money-market-font-weight-normal\"
                               for=\"kassa-tax-rate-";
            // line 225
            echo $this->getAttribute($context["taxClass"], "tax_class_id", array());
            echo "\">";
            echo $this->getAttribute($context["taxClass"], "title", array());
            echo "</label>
                        <span class=\"col-sm-8\">
                            <select name=\"yandex_money_market_vat[";
            // line 227
            echo $this->getAttribute($context["taxClass"], "tax_class_id", array());
            echo "]\" class=\"form-control\">
                                ";
            // line 228
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["market"]) ? $context["market"] : null), "getVatList", array()));
            foreach ($context['_seq'] as $context["vatId"] => $context["vatName"]) {
                // line 229
                echo "                                    <option value=\"";
                echo $context["vatId"];
                echo "\" ";
                echo ((($this->getAttribute((isset($context["market"]) ? $context["market"] : null), "getVatRateId", array(0 => $this->getAttribute($context["taxClass"], "tax_class_id", array())), "method") == $context["vatId"])) ? (" selected") : (""));
                echo ">
                                        ";
                // line 230
                echo $context["vatName"];
                echo "
                                    </option>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['vatId'], $context['vatName'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 233
            echo "                            </select>
                        </span>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['taxClass'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 237
        echo "            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"col-sm-4 control-label\">";
        // line 240
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "market_option_label"), "method");
        echo "</label>
            <div class=\"col-sm-8\">
                ";
        // line 242
        echo $this->getAttribute((isset($context["market"]) ? $context["market"] : null), "htmlOptionList", array(), "method");
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"col-sm-4 control-label\">";
        // line 246
        echo (isset($context["market_offer_options_label"]) ? $context["market_offer_options_label"] : null);
        echo "</label>
            <div class=\"col-sm-8\">
                <div>
                    <label class=\"radio-inline\">
                        <input type=\"checkbox\" name=\"yandex_money_market_features\"
                                ";
        // line 251
        echo ((((isset($context["yandex_money_market_features"]) ? $context["yandex_money_market_features"] : null) == "on")) ? (" checked=\"checked\"") : (""));
        echo "
                               value=\"on\"/> ";
        // line 252
        echo (isset($context["market_offer_options_export_attributes"]) ? $context["market_offer_options_export_attributes"] : null);
        echo "
                    </label>
                </div>
                <div>
                    <label class=\"radio-inline\">
                        <input type=\"checkbox\" name=\"yandex_money_market_dimensions\"
                                ";
        // line 258
        echo ((((isset($context["yandex_money_market_dimensions"]) ? $context["yandex_money_market_dimensions"] : null) == "on")) ? (" checked=\"checked\"") : (""));
        echo "
                               value=\"on\"/> ";
        // line 259
        echo (isset($context["market_offer_options_export_dimensions"]) ? $context["market_offer_options_export_dimensions"] : null);
        echo "
                    </label>
                </div>
            </div>
        </div>
        <div class=\"form-group yandex_money_market_additional_condition_container\">
            <label class=\"col-sm-4 control-label\">";
        // line 265
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "market_additional_condition_label"), "method");
        echo "</label>
            ";
        // line 266
        echo $this->getAttribute((isset($context["market"]) ? $context["market"] : null), "htmlAdditionalConditionList", array());
        echo "
        </div>

        <div class=\"form-group\">
            <label class=\"col-sm-4 control-label yandex-money-market-sub-header\">";
        // line 270
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "market_header_param_settings"), "method");
        echo "</label>
        </div>
        <div class=\"form-group\">
            <label class=\"col-sm-4 control-label\" for=\"yandex_money_market_dynamic\">";
        // line 273
        echo (isset($context["market_lnk_yml"]) ? $context["market_lnk_yml"] : null);
        echo "</label>
            <div class=\"col-sm-8\">
                <input type=\"text\" name=\"yandex_money_market_dynamic\" value=\"";
        // line 275
        echo (isset($context["yandex_money_market_lnk_yml"]) ? $context["yandex_money_market_lnk_yml"] : null);
        echo "\"
                       id=\"yandex_money_market_dynamic\" disabled=\"disabled\"
                       class=\"form-control yandex-money-market-url\"/>
                <span class=\"yandex-money-market-copy-url fa fa-clone\"
                      title=\"";
        // line 279
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "market_copy_url_to_clipboard"), "method");
        echo "\"></span>
            </div>
        </div>
    </div>
</div>

<script>
    function marketAllCategoriesChangeHandler() {
        if (\$(this).val() === 'on') {
            \$(this).closest('form').find('.yandex-money-market-category-tree').slideUp();
        } else {
            \$(this).closest('form').find('.yandex-money-market-category-tree').slideDown();
        }
    }

    function catTreeHideCatAll() {
        \$(this).closest('.yandex-money-market-category-tree').find('ul.yandex_money_market_category_tree_branch').each(function () {
            \$(this).slideUp();
        });
    }

    function catTreeShowCatAll() {
        \$(this).closest('.yandex-money-market-category-tree').find('ul.yandex_money_market_category_tree_branch').each(function () {
            \$(this).slideDown();
        });
    }

    function catTreeCheckCatAll() {
        \$(this).closest('.yandex-money-market-category-tree').find('input[type=checkbox]').each(function () {
            \$(this).prop(\"checked\", true);
        });
    }

    function catTreeUncheckCatAll() {
        \$(this).closest('.yandex-money-market-category-tree').find('input[type=checkbox]').each(function () {
            \$(this).prop(\"checked\", false);
        });
    }

    function marketCurrencyShowHideRate(currencyIdValue, rateElement) {
        if (currencyIdValue && currencyIdValue !== '1') {
            rateElement.show();
        } else {
            rateElement.hide();
        }
    }

    function marketCurrencySelectChangeHandler() {
        marketCurrencyShowHideRate(\$(this).val(), \$(this).next('.edit_rate'))
    }

    function marketJsEditableEditOnHandler(event, parent) {
        event.stopPropagation();
        event.preventDefault();
        parent.find('.yandex-money-market-edit-on-button').hide();
        parent.find('.yandex_money_market_js_editable_view').hide();
        parent.find('.yandex-money-market-js-editable-edit').show();
        \$(this).hide();
    }

    function marketJsEditableEditFinishHandler(parent) {
        parent.find('.yandex-money-market-js-editable-edit').hide();
        parent.find('.yandex-money-market-edit-on-button').css('display', '');
        parent.find('.yandex_money_market_js_editable_view').show();
    }

    function marketCurrencyEditOnHandler(event) {
        let parent = \$(this).closest('.yandex-money-market-js-editable');
        marketJsEditableEditOnHandler(event, parent);
        marketCurrencyShowHideRate(parent.find('select').val(), parent.find('.edit_rate'));
    }

    function marketCurrencyEditFinishHandler() {
        let parent = \$(this).closest('.yandex-money-market-js-editable');
        marketJsEditableEditFinishHandler(parent);
        setTimeout(function () {
            marketCurrencyUpdateViewValues(parent)
        }, 0);
    }

    function marketCurrencyUpdateViewValues(parent) {
        let plus = parent.find('.yandex_money_market_currency_edit_plus').val();
        let rateOption = parent.find('.yandex_money_market_currency_rate option:selected');
        let rateValue = rateOption.val();
        parent.find('.yandex_money_market_currency_view_plus_value').text(plus);
        parent.find('.yandex_money_market_currency_input_plus').val(plus);
        parent.find('.yandex_money_market_currency_view_rate').text(rateOption.text());
        parent.find('.yandex_money_market_currency_input_rate').val(rateValue);
        if (rateValue === '1') {
            parent.find('.yandex_money_market_currency_view_plus').hide();
        } else {
            parent.find('.yandex_money_market_currency_view_plus').show();
        }
    }

    function marketCategoryClickHandler() {
        \$(this).closest('li').find('input[type=\"checkbox\"]').prop('checked', \$(this).prop('checked'));
    }

    function marketCopyUrlToClipboard() {
        let el = \$('input[name=\"yandex_money_market_dynamic\"]');
        el.prop('disabled', false);
        el.select();
        document.execCommand(\"copy\");
        el.prop('disabled', true);
        alert(\"";
        // line 384
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "market_url_copied_to_clipboard"), "method");
        echo "\");
    }

    function marketCommonEditOnHandler(event) {
        let parent = \$(this).closest('.yandex-money-market-js-editable');
        marketJsEditableEditOnHandler(event, parent);
    }

    function marketDeliveryEditFinishHandler() {
        let parent = \$(this).closest('.yandex_money_market_delivery');
        marketJsEditableEditFinishHandler(parent);
        setTimeout(function () {
            marketDeliveryUpdateViewValues(parent)
        }, 0);
    }

    function marketDeliveryUpdateViewValues(parent) {
        let edit = parent.find('.yandex-money-market-js-editable-edit');
        let cost = edit.find('.delivery_cost').val();
        let daysFrom = edit.find('.delivery_days_from').val();
        let daysTo = edit.find('.delivery_days_to').val();
        let orderBeforeOption = edit.find('.delivery_order_before option:selected');
        let orderBeforeValue = +orderBeforeOption.val() ? orderBeforeOption.val() : \"\";
        let orderBeforeText = +orderBeforeOption.val()
            ? orderBeforeOption.text()
            : \"";
        // line 409
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "market_delivery_default_value"), "method");
        echo "\";
        let days = !daysTo || daysFrom === daysTo ? +daysFrom : daysFrom + '-' + daysTo;

        let view = parent.find('.yandex_money_market_js_editable_view');
        view.find('.delivery_cost').text(+cost);
        view.find('.delivery_days').text(days);
        view.find('.delivery_order_before').text(orderBeforeText);
        parent.find('.delivery_cost').val(cost);
        parent.find('.delivery_days_from').val(daysFrom);
        parent.find('.delivery_days_to').val(daysTo);
        parent.find('.delivery_order_before').val(orderBeforeValue);
    }

    function hideEmptyDeliveries() {
        let count = 0;
        \$('.yandex_money_market_delivery').each(function (index) {
            if (!index) {
                return;
            }
            let parent = \$(this);
            if ((parent.find('.delivery_cost').val() === '')
                || (parent.find('.delivery_days_from').val() === '')) {
                parent.hide();
                count++;
            }
        });
        if (count) {
            \$('.yandex-money-market-delivery-more').show();
        }
    }

    function marketDeliveryShowMoreOptions() {
        \$('.yandex_money_market_delivery').show();
        \$('.yandex-money-market-delivery-more').hide();
    }

    function marketOfferFormatClickHandler() {
        if (\$('input[name=\"yandex_money_market_simple\"]:checked').val() === \"1\") {
            \$('.yandex_money_market_offer_name_template').show();
        } else {
            \$('.yandex_money_market_offer_name_template').hide();
        }
    }

    function marketAvailableEditFinishHandler() {
        let parent = \$(this).closest('.yandex_money_market_available');
        marketJsEditableEditFinishHandler(parent);
        setTimeout(function () {
            marketAvailableUpdateViewValues(parent)
        }, 0);
    }

    function marketAvailableUpdateViewValues(parent) {
        let edit = parent.find('.yandex-money-market-js-editable-edit');
        let view = parent.find('.yandex_money_market_js_editable_view');

        let delivery = edit.find('.available_delivery').is(':checked');
        let pickup = edit.find('.available_pickup').is(':checked');
        let store = edit.find('.available_store').is(':checked');

        let available = edit.find('select option:selected').val();
        if (available === 'none') {
            view.find('.available_dont_upload').show();
            view.find('.available_will_upload').hide();
        } else {
            view.find('.available_dont_upload').hide();
            view.find('.available_will_upload').show();
            if (available === 'true') {
                view.find('.yandex-money-market-available-with-ready').show();
                view.find('.yandex-money-market-available-with-to-order').hide();
            } else {
                view.find('.yandex-money-market-available-with-ready').hide();
                view.find('.yandex-money-market-available-with-to-order').show();
            }
            if (delivery || pickup || store) {
                view.find('.available_list').show();
                if (delivery) {
                    let el = view.find('.available_delivery');
                    el.show();
                    if (pickup || store) {
                        el.removeClass('last');
                    } else {
                        el.addClass('last');
                    }
                } else {
                    view.find('.available_delivery').hide();
                }
                if (pickup) {
                    let el = view.find('.available_pickup');
                    el.show();
                    if (store) {
                        el.removeClass('last');
                    } else {
                        el.addClass('last');
                    }
                } else {
                    view.find('.available_pickup').hide();
                }
                if (store) {
                    view.find('.available_store').show();
                } else {
                    view.find('.available_store').hide();
                }
            } else {
                view.find('.available_list').hide();
            }
        }

        parent.find('.yandex_money_market_available_input_available').val(available);
        parent.find('.yandex_money_market_available_input_delivery').val(delivery ? 'on' : '');
        parent.find('.yandex_money_market_available_input_pickup').val(pickup ? 'on' : '');
        parent.find('.yandex_money_market_available_input_store').val(store ? 'on' : '');
    }

    function marketAddNewAdditionalCondition() {
        let index = \$(this).data('index');
        let nextIndex = index + 1;
        \$(this).data('index', nextIndex);
        let list = \$('.yandex_money_market_additional_condition_list');
        let template = list.find('.yandex-money-market-additional-condition-template');
        let newForm = template.clone();
        newForm.removeClass('yandex-money-market-additional-condition-template');
        template.before(newForm);
        newForm.find('.yandex_money_market_additional_condition_edit_on_button').click();
        newForm.find('input[type=hidden], input[type=checkbox]').each(function () {
            \$(this).attr('name', \$(this).data('name').replace(/\\[\\]/, '[' + index + ']'));
        });
    }

    function marketAdditionalConditionEditFinishHandler() {
        let parent = \$(this).closest('.yandex_money_market_additional_condition');
        marketJsEditableEditFinishHandler(parent);
        setTimeout(function () {
            marketAdditionalConditionUpdateViewValues(parent)
        }, 0);
    }

    function marketAdditionalConditionDeleteHandler() {
        \$(this).closest('.yandex_money_market_additional_condition').detach();
    }

    function marketAdditionalConditionUpdateViewValues(parent) {
        let edit = parent.find('.yandex-money-market-js-editable-edit');
        let name = edit.find('.additional_condition_name').val();
        let tag = edit.find('.additional_condition_tag').val();
        let typeValue = edit.find('input[name=\"additional_condition_type_value\"]:checked').val();
        let staticValue = edit.find('.additional_condition_static_value').val();
        let dataValueOption = edit.find('.additional_condition_data_value option:selected');
        let dataValue = dataValueOption.val();
        let dataValueText = dataValueOption.text();
        let valueText = typeValue === 'static' ? staticValue : dataValueText;
        let view = parent.find('.yandex_money_market_js_editable_view');
        let forAllCat = edit.find('input[name=\"additional_condition_for_all_cat\"]:checked').val();
        let join = edit.find('input[name=\"additional_condition_join\"]:checked').val();

        edit.find('.additional_condition_categories').each(function () {
            let el = \$(this);
            parent.find('.additional_condition_categories[value=' + el.val() + ']').prop(\"checked\", el.prop(\"checked\"));
        });

        view.find('.additional_condition_name').text(name);
        view.find('.additional_condition_tag').text(tag);
        view.find('.additional_condition_value').text(valueText);
        let forAllCatText = forAllCat === 'on'
            ? \"";
        // line 573
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "market_additional_condition_for_all_category_label"), "method");
        echo "\"
            : \"";
        // line 574
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "market_additional_condition_for_selected_category_label"), "method");
        echo "\";
        view.find('.additional_condition_category_list').text(forAllCatText);

        parent.find('.additional_condition_name').val(name);
        parent.find('.additional_condition_tag').val(tag);
        parent.find('.additional_condition_type_value').val(typeValue);
        parent.find('.additional_condition_static_value').val(staticValue);
        parent.find('.additional_condition_data_value').val(dataValue);
        parent.find('.additional_condition_for_all_cat').val(forAllCat);
        parent.find('.additional_condition_join').val(join);
    }


    document.addEventListener('DOMContentLoaded', function () {
        \$('#tab-market').on('change', '.yandex_money_market_category_tree_switcher', marketAllCategoriesChangeHandler)
            .on('click', '.yandex-money-market-category-tree input[type=\"checkbox\"]', marketCategoryClickHandler)
            .on('click', '.catTreeHideCatAll', catTreeHideCatAll)
            .on('click', '.catTreeShowCatAll', catTreeShowCatAll)
            .on('click', '.catTreeCheckCatAll', catTreeCheckCatAll)
            .on('click', '.catTreeUncheckCatAll', catTreeUncheckCatAll);

        \$('.yandex_money_market_currency_rate').on('change', marketCurrencySelectChangeHandler);
        \$('.yandex_money_market_currency_edit_on_button').on('click', marketCurrencyEditOnHandler);
        \$('.yandex-money-market-currency-edit .edit_finish').on('click', marketCurrencyEditFinishHandler);
        \$('.yandex-money-market-copy-url').on('click', marketCopyUrlToClipboard);
        \$('.yandex_money_market_delivery_edit_on_button').on('click', marketCommonEditOnHandler);
        \$('.yandex_money_market_delivery_edit .edit_finish').on('click', marketDeliveryEditFinishHandler);
        \$('.yandex-money-market-delivery-more').on('click', marketDeliveryShowMoreOptions);
        marketOfferFormatClickHandler();
        \$('input[name=\"yandex_money_market_simple\"]').on('change', marketOfferFormatClickHandler);
        \$('.yandex_money_market_available_edit_on_button').on('click', marketCommonEditOnHandler);
        \$('.yandex_money_market_available_edit .edit_finish').on('click', marketAvailableEditFinishHandler);
        \$('.yandex_money_market_available').each(marketAvailableEditFinishHandler);
        \$('.yandex_money_market_additional_condition_more').on('click', marketAddNewAdditionalCondition);
        \$('.yandex_money_market_additional_condition_edit_on_button').on('click', marketCommonEditOnHandler);
        \$('.yandex_money_market_additional_condition_container')
            .on('click', '.yandex_money_market_additional_condition_edit_on_button', marketCommonEditOnHandler)
            .on('click', '.edit_finish', marketAdditionalConditionEditFinishHandler)
            .on('click', '.edit_delete', marketAdditionalConditionDeleteHandler);
    });
</script>";
    }

    public function getTemplateName()
    {
        return "extension/payment/yandex_money/market.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  807 => 574,  803 => 573,  636 => 409,  608 => 384,  500 => 279,  493 => 275,  488 => 273,  482 => 270,  475 => 266,  471 => 265,  462 => 259,  458 => 258,  449 => 252,  445 => 251,  437 => 246,  430 => 242,  425 => 240,  420 => 237,  411 => 233,  402 => 230,  395 => 229,  391 => 228,  387 => 227,  380 => 225,  376 => 223,  372 => 222,  367 => 220,  363 => 219,  356 => 215,  349 => 211,  344 => 209,  334 => 202,  328 => 199,  322 => 196,  318 => 195,  310 => 190,  306 => 189,  299 => 185,  293 => 182,  286 => 178,  281 => 176,  276 => 174,  267 => 168,  259 => 163,  253 => 160,  247 => 157,  241 => 154,  234 => 150,  228 => 147,  223 => 145,  215 => 140,  210 => 138,  203 => 134,  196 => 130,  191 => 128,  183 => 123,  177 => 120,  169 => 115,  164 => 113,  155 => 109,  148 => 107,  142 => 104,  134 => 101,  130 => 100,  32 => 4,  23 => 2,  19 => 1,);
    }
}
/* {% for m in market_status %}*/
/*     {{ m }}*/
/* {% endfor %}*/
/* <style>*/
/*     .yandex-money-market-sub-header {*/
/*         font-size: 120%;*/
/*         font-style: italic;*/
/*     }*/
/*     .yandex-money-market-sub-form-group {*/
/* */
/*     }*/
/*     .yandex-money-market-font-weight-normal {*/
/*         font-weight: normal;*/
/*         text-align: left !important;*/
/*     }*/
/* */
/*     .yandex-money-market-with-padding-top {*/
/*         padding-top: 9px;*/
/*     }*/
/* */
/*     .yandex-money-market-short-width {*/
/*         display: inline-block;*/
/*         width: 20%;*/
/*     }*/
/* */
/*     .yandex-money-market-width-100-percent {*/
/*         width: 100%;*/
/*     }*/
/* */
/*     .yandex-money-market-first-letter-uppercase:first-letter {*/
/*         text-transform: uppercase;*/
/*     }*/
/* */
/*     .yandex-money-market-category-tree {*/
/*         display: block;*/
/*     }*/
/* */
/*     .yandex-money-market-edit-on-button {*/
/*         position: relative;*/
/*         cursor: pointer;*/
/*         display: none;*/
/*     }*/
/* */
/*     .yandex-money-market-currency-disabled {*/
/*         color: silver;*/
/*     }*/
/* */
/*     .yandex-money-market-js-editable:hover .yandex-money-market-edit-on-button {*/
/*         display: inline;*/
/*     }*/
/* */
/*     .yandex-money-market-js-editable-edit {*/
/*         display: none;*/
/*     }*/
/* */
/*     .yandex-money-market-currency-edit form {*/
/*         display: inline-block;*/
/*     }*/
/* */
/*     .yandex-money-market-url {*/
/*         display: inline-block;*/
/*         width: 80%;*/
/*     }*/
/* */
/*     .yandex-money-market-copy-url {*/
/*         margin-left: 5px;*/
/*         cursor: pointer;*/
/*     }*/
/* */
/*     .yandex-money-market-delivery-more {*/
/*         padding-left: 20px;*/
/*         display: none;*/
/*     }*/
/* */
/*     .yandex-money-market-available-options-list::after {*/
/*         content: ',';*/
/*     }*/
/* */
/*     .yandex-money-market-available-options-list.last::after {*/
/*         content: '';*/
/*     }*/
/* */
/*     .yandex-money-market-available-status,*/
/*     .yandex-money-market-available-with-ready,*/
/*     .yandex-money-market-available-with-to-order {*/
/*         font-style: italic;*/
/*     }*/
/* */
/*     .yandex-money-market-additional-condition-template {*/
/*         display: none;*/
/*     }*/
/* */
/*     .yandex-money-market-hidden-element {*/
/*         display: none;*/
/*     }*/
/* </style>*/
/* <div class="panel panel-default">*/
/*     <div class="panel-body">*/
/*         <div>*/
/*             <p>{{ language.get('kassa_header_description') }}</p>*/
/*             <p>{{ language.get('kassa_version_string') }} {{ module_version }}</p>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <label class="col-sm-4 control-label">{{ active }}</label>*/
/*             <div class="col-sm-8">*/
/*                 <label class="radio-inline">*/
/*                     <input type="radio" {{ (yandex_money_market_active ? ' checked="checked"' : '') }} name="yandex_money_market_active" value="1"/> {{ active_on }}</label>*/
/*                 <label class="radio-inline">*/
/*                     <input type="radio" {{ (not yandex_money_market_active ? ' checked="checked"' : '') }} name="yandex_money_market_active" value="0"/> {{ active_off }}</label>*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <label class="col-sm-4 control-label" for="yandex_money_market_shopname">{{ market_short_name }}</label>*/
/*             <div class="col-sm-8">*/
/*                 <input type="text" name="yandex_money_market_shopname" value="{{ yandex_money_market_shopname }}"*/
/*                        id="yandex_money_market_shopname" class="form-control" maxlength="20"/>*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <label class="col-sm-4 control-label" for="yandex_money_market_full_shopname">{{ market_full_name }}</label>*/
/*             <div class="col-sm-8">*/
/*                 <input type="text" name="yandex_money_market_full_shopname"*/
/*                        value="{{ yandex_money_market_full_shopname }}" id="yandex_money_market_full_shopname"*/
/*                        class="form-control"/>*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <label class="col-sm-4 control-label">{{ market_currencies }}</label>*/
/*             <div class="col-sm-8">*/
/*                 {{ market_currency_list }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <label class="control-label col-sm-4">{{ market_categories }}</label>*/
/*             <div class="col-sm-8">*/
/*                 <div>*/
/*                     <label class="radio-inline">*/
/*                         <input type="radio" {{ (yandex_money_market_category_all ? ' checked="checked"' : '') }}*/
/*                                class="yandex_money_market_category_tree_switcher"*/
/*                                name="yandex_money_market_category_all" value="on"/> {{ market_categories_all }}*/
/*                     </label>*/
/*                 </div>*/
/*                 <div>*/
/*                     <label class="radio-inline">*/
/*                         <input type="radio" {{ (not yandex_money_market_category_all ? ' checked="checked"' : '') }}*/
/*                                class="yandex_money_market_category_tree_switcher"*/
/*                                name="yandex_money_market_category_all" value=""/> {{ market_categories_selected }}*/
/*                     </label>*/
/*                 </div>*/
/*                 <div class="panel panel-default yandex-money-market-category-tree {{ (yandex_money_market_category_all ? 'yandex-money-market-hidden-element' : '') }}">*/
/*                     <div class="tree-panel-heading tree-panel-heading-controls clearfix">*/
/*                         <div class="tree-actions pull-right">*/
/*                             <a onclick="return false;" class="btn btn-default catTreeHideCatAll">*/
/*                                 <i class="fa fa-minus-square-o"></i> {{ market_sv_all }}*/
/*                             </a>*/
/*                             <a onclick="return false;" class="btn btn-default catTreeShowCatAll">*/
/*                                 <i class="fa fa-plus-square-o "></i> {{ market_rv_all }}*/
/*                             </a>*/
/*                             <a onclick="return false;" class="btn btn-default catTreeCheckCatAll">*/
/*                                 <i class="fa fa-check-square-o"></i> {{ market_ch_all }}*/
/*                             </a>*/
/*                             <a onclick="return false;" class="btn btn-default catTreeUncheckCatAll">*/
/*                                 <i class="fa fa-square-o "></i> {{ market_unch_all }}*/
/*                             </a>*/
/*                         </div>*/
/*                     </div>*/
/*                     <ul id="categoryTree" class="tree">*/
/*                         {{ market_cat_tree }}*/
/*                     </ul>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <label class="col-sm-4 control-label">{{ language.get('market_delivery_label') }}</label>*/
/*             <div class="col-sm-8">*/
/*                 {{ market.htmlDeliveryList() }}*/
/*                 <a onclick="return false;"*/
/*                    class="yandex-money-market-delivery-more">{{ language.get('market_delivery_more') }}</a>*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <label class="col-sm-4 control-label yandex-money-market-sub-header">{{ language.get('market_header_offer_settings') }}</label>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <label class="col-sm-4 control-label">{{ market_format }}</label>*/
/*             <div class="col-sm-8">*/
/*                 <div>*/
/*                     <label class="radio-inline">*/
/*                         <input type="radio" {{ (not yandex_money_market_simple ? ' checked="checked"' : '') }}*/
/*                                name="yandex_money_market_simple" value="0"/> {{ market_format_vendor_model }}*/
/*                     </label>*/
/*                 </div>*/
/*                 <div>*/
/*                     <label class="radio-inline">*/
/*                         <input type="radio" {{ (yandex_money_market_simple ? ' checked="checked"' : '') }}*/
/*                                name="yandex_money_market_simple" value="1"/> {{ market_format_simple }}*/
/*                     </label>*/
/*                     <div class="form-group yandex_money_market_offer_name_template">*/
/*                         <label class="col-sm-3 control-label yandex-money-market-font-weight-normal">{{ market_offer_name_template }}</label>*/
/*                         <div class="col-sm-9">*/
/*                             <input type="text" name="yandex_money_market_name_template"*/
/*                                    value="{{ yandex_money_market_name_template }}" class="form-control"/>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <label class="col-sm-4 control-label">{{ language.get('market_available_label') }}</label>*/
/*             <div class="col-sm-8">*/
/*                 {{ market.htmlAvailableList() }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <label class="col-sm-4 control-label">{{ language.get('market_vat_label') }}</label>*/
/*             <div class="col-sm-8">*/
/*                 <label class="form-check-label yandex-money-market-font-weight-normal">*/
/*                     <input type="checkbox" name="yandex_money_market_vat_enabled"*/
/*                            value="on" {{ yandex_money_market_vat_enabled ? 'checked="checked"' : '' }}>*/
/*                     {{ language.get('market_vat_enable_label') }}*/
/*                 </label>*/
/*                 {% for taxClass in market.getTaxClasses %}*/
/*                     <div class="form-group">*/
/*                         <label class="col-sm-4 control-label yandex-money-market-font-weight-normal"*/
/*                                for="kassa-tax-rate-{{ taxClass.tax_class_id }}">{{ taxClass.title }}</label>*/
/*                         <span class="col-sm-8">*/
/*                             <select name="yandex_money_market_vat[{{ taxClass.tax_class_id }}]" class="form-control">*/
/*                                 {% for vatId, vatName in market.getVatList %}*/
/*                                     <option value="{{ vatId }}" {{ market.getVatRateId(taxClass.tax_class_id) == vatId ? ' selected' : '' }}>*/
/*                                         {{ vatName }}*/
/*                                     </option>*/
/*                                 {% endfor %}*/
/*                             </select>*/
/*                         </span>*/
/*                     </div>*/
/*                 {% endfor %}*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <label class="col-sm-4 control-label">{{ language.get('market_option_label') }}</label>*/
/*             <div class="col-sm-8">*/
/*                 {{ market.htmlOptionList() }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <label class="col-sm-4 control-label">{{ market_offer_options_label }}</label>*/
/*             <div class="col-sm-8">*/
/*                 <div>*/
/*                     <label class="radio-inline">*/
/*                         <input type="checkbox" name="yandex_money_market_features"*/
/*                                 {{ (yandex_money_market_features == 'on' ? ' checked="checked"' : '') }}*/
/*                                value="on"/> {{ market_offer_options_export_attributes }}*/
/*                     </label>*/
/*                 </div>*/
/*                 <div>*/
/*                     <label class="radio-inline">*/
/*                         <input type="checkbox" name="yandex_money_market_dimensions"*/
/*                                 {{ (yandex_money_market_dimensions == 'on' ? ' checked="checked"' : '') }}*/
/*                                value="on"/> {{ market_offer_options_export_dimensions }}*/
/*                     </label>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group yandex_money_market_additional_condition_container">*/
/*             <label class="col-sm-4 control-label">{{ language.get('market_additional_condition_label') }}</label>*/
/*             {{ market.htmlAdditionalConditionList }}*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*             <label class="col-sm-4 control-label yandex-money-market-sub-header">{{ language.get('market_header_param_settings') }}</label>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <label class="col-sm-4 control-label" for="yandex_money_market_dynamic">{{ market_lnk_yml }}</label>*/
/*             <div class="col-sm-8">*/
/*                 <input type="text" name="yandex_money_market_dynamic" value="{{ yandex_money_market_lnk_yml }}"*/
/*                        id="yandex_money_market_dynamic" disabled="disabled"*/
/*                        class="form-control yandex-money-market-url"/>*/
/*                 <span class="yandex-money-market-copy-url fa fa-clone"*/
/*                       title="{{ language.get('market_copy_url_to_clipboard') }}"></span>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* <script>*/
/*     function marketAllCategoriesChangeHandler() {*/
/*         if ($(this).val() === 'on') {*/
/*             $(this).closest('form').find('.yandex-money-market-category-tree').slideUp();*/
/*         } else {*/
/*             $(this).closest('form').find('.yandex-money-market-category-tree').slideDown();*/
/*         }*/
/*     }*/
/* */
/*     function catTreeHideCatAll() {*/
/*         $(this).closest('.yandex-money-market-category-tree').find('ul.yandex_money_market_category_tree_branch').each(function () {*/
/*             $(this).slideUp();*/
/*         });*/
/*     }*/
/* */
/*     function catTreeShowCatAll() {*/
/*         $(this).closest('.yandex-money-market-category-tree').find('ul.yandex_money_market_category_tree_branch').each(function () {*/
/*             $(this).slideDown();*/
/*         });*/
/*     }*/
/* */
/*     function catTreeCheckCatAll() {*/
/*         $(this).closest('.yandex-money-market-category-tree').find('input[type=checkbox]').each(function () {*/
/*             $(this).prop("checked", true);*/
/*         });*/
/*     }*/
/* */
/*     function catTreeUncheckCatAll() {*/
/*         $(this).closest('.yandex-money-market-category-tree').find('input[type=checkbox]').each(function () {*/
/*             $(this).prop("checked", false);*/
/*         });*/
/*     }*/
/* */
/*     function marketCurrencyShowHideRate(currencyIdValue, rateElement) {*/
/*         if (currencyIdValue && currencyIdValue !== '1') {*/
/*             rateElement.show();*/
/*         } else {*/
/*             rateElement.hide();*/
/*         }*/
/*     }*/
/* */
/*     function marketCurrencySelectChangeHandler() {*/
/*         marketCurrencyShowHideRate($(this).val(), $(this).next('.edit_rate'))*/
/*     }*/
/* */
/*     function marketJsEditableEditOnHandler(event, parent) {*/
/*         event.stopPropagation();*/
/*         event.preventDefault();*/
/*         parent.find('.yandex-money-market-edit-on-button').hide();*/
/*         parent.find('.yandex_money_market_js_editable_view').hide();*/
/*         parent.find('.yandex-money-market-js-editable-edit').show();*/
/*         $(this).hide();*/
/*     }*/
/* */
/*     function marketJsEditableEditFinishHandler(parent) {*/
/*         parent.find('.yandex-money-market-js-editable-edit').hide();*/
/*         parent.find('.yandex-money-market-edit-on-button').css('display', '');*/
/*         parent.find('.yandex_money_market_js_editable_view').show();*/
/*     }*/
/* */
/*     function marketCurrencyEditOnHandler(event) {*/
/*         let parent = $(this).closest('.yandex-money-market-js-editable');*/
/*         marketJsEditableEditOnHandler(event, parent);*/
/*         marketCurrencyShowHideRate(parent.find('select').val(), parent.find('.edit_rate'));*/
/*     }*/
/* */
/*     function marketCurrencyEditFinishHandler() {*/
/*         let parent = $(this).closest('.yandex-money-market-js-editable');*/
/*         marketJsEditableEditFinishHandler(parent);*/
/*         setTimeout(function () {*/
/*             marketCurrencyUpdateViewValues(parent)*/
/*         }, 0);*/
/*     }*/
/* */
/*     function marketCurrencyUpdateViewValues(parent) {*/
/*         let plus = parent.find('.yandex_money_market_currency_edit_plus').val();*/
/*         let rateOption = parent.find('.yandex_money_market_currency_rate option:selected');*/
/*         let rateValue = rateOption.val();*/
/*         parent.find('.yandex_money_market_currency_view_plus_value').text(plus);*/
/*         parent.find('.yandex_money_market_currency_input_plus').val(plus);*/
/*         parent.find('.yandex_money_market_currency_view_rate').text(rateOption.text());*/
/*         parent.find('.yandex_money_market_currency_input_rate').val(rateValue);*/
/*         if (rateValue === '1') {*/
/*             parent.find('.yandex_money_market_currency_view_plus').hide();*/
/*         } else {*/
/*             parent.find('.yandex_money_market_currency_view_plus').show();*/
/*         }*/
/*     }*/
/* */
/*     function marketCategoryClickHandler() {*/
/*         $(this).closest('li').find('input[type="checkbox"]').prop('checked', $(this).prop('checked'));*/
/*     }*/
/* */
/*     function marketCopyUrlToClipboard() {*/
/*         let el = $('input[name="yandex_money_market_dynamic"]');*/
/*         el.prop('disabled', false);*/
/*         el.select();*/
/*         document.execCommand("copy");*/
/*         el.prop('disabled', true);*/
/*         alert("{{ language.get('market_url_copied_to_clipboard') }}");*/
/*     }*/
/* */
/*     function marketCommonEditOnHandler(event) {*/
/*         let parent = $(this).closest('.yandex-money-market-js-editable');*/
/*         marketJsEditableEditOnHandler(event, parent);*/
/*     }*/
/* */
/*     function marketDeliveryEditFinishHandler() {*/
/*         let parent = $(this).closest('.yandex_money_market_delivery');*/
/*         marketJsEditableEditFinishHandler(parent);*/
/*         setTimeout(function () {*/
/*             marketDeliveryUpdateViewValues(parent)*/
/*         }, 0);*/
/*     }*/
/* */
/*     function marketDeliveryUpdateViewValues(parent) {*/
/*         let edit = parent.find('.yandex-money-market-js-editable-edit');*/
/*         let cost = edit.find('.delivery_cost').val();*/
/*         let daysFrom = edit.find('.delivery_days_from').val();*/
/*         let daysTo = edit.find('.delivery_days_to').val();*/
/*         let orderBeforeOption = edit.find('.delivery_order_before option:selected');*/
/*         let orderBeforeValue = +orderBeforeOption.val() ? orderBeforeOption.val() : "";*/
/*         let orderBeforeText = +orderBeforeOption.val()*/
/*             ? orderBeforeOption.text()*/
/*             : "{{ language.get('market_delivery_default_value') }}";*/
/*         let days = !daysTo || daysFrom === daysTo ? +daysFrom : daysFrom + '-' + daysTo;*/
/* */
/*         let view = parent.find('.yandex_money_market_js_editable_view');*/
/*         view.find('.delivery_cost').text(+cost);*/
/*         view.find('.delivery_days').text(days);*/
/*         view.find('.delivery_order_before').text(orderBeforeText);*/
/*         parent.find('.delivery_cost').val(cost);*/
/*         parent.find('.delivery_days_from').val(daysFrom);*/
/*         parent.find('.delivery_days_to').val(daysTo);*/
/*         parent.find('.delivery_order_before').val(orderBeforeValue);*/
/*     }*/
/* */
/*     function hideEmptyDeliveries() {*/
/*         let count = 0;*/
/*         $('.yandex_money_market_delivery').each(function (index) {*/
/*             if (!index) {*/
/*                 return;*/
/*             }*/
/*             let parent = $(this);*/
/*             if ((parent.find('.delivery_cost').val() === '')*/
/*                 || (parent.find('.delivery_days_from').val() === '')) {*/
/*                 parent.hide();*/
/*                 count++;*/
/*             }*/
/*         });*/
/*         if (count) {*/
/*             $('.yandex-money-market-delivery-more').show();*/
/*         }*/
/*     }*/
/* */
/*     function marketDeliveryShowMoreOptions() {*/
/*         $('.yandex_money_market_delivery').show();*/
/*         $('.yandex-money-market-delivery-more').hide();*/
/*     }*/
/* */
/*     function marketOfferFormatClickHandler() {*/
/*         if ($('input[name="yandex_money_market_simple"]:checked').val() === "1") {*/
/*             $('.yandex_money_market_offer_name_template').show();*/
/*         } else {*/
/*             $('.yandex_money_market_offer_name_template').hide();*/
/*         }*/
/*     }*/
/* */
/*     function marketAvailableEditFinishHandler() {*/
/*         let parent = $(this).closest('.yandex_money_market_available');*/
/*         marketJsEditableEditFinishHandler(parent);*/
/*         setTimeout(function () {*/
/*             marketAvailableUpdateViewValues(parent)*/
/*         }, 0);*/
/*     }*/
/* */
/*     function marketAvailableUpdateViewValues(parent) {*/
/*         let edit = parent.find('.yandex-money-market-js-editable-edit');*/
/*         let view = parent.find('.yandex_money_market_js_editable_view');*/
/* */
/*         let delivery = edit.find('.available_delivery').is(':checked');*/
/*         let pickup = edit.find('.available_pickup').is(':checked');*/
/*         let store = edit.find('.available_store').is(':checked');*/
/* */
/*         let available = edit.find('select option:selected').val();*/
/*         if (available === 'none') {*/
/*             view.find('.available_dont_upload').show();*/
/*             view.find('.available_will_upload').hide();*/
/*         } else {*/
/*             view.find('.available_dont_upload').hide();*/
/*             view.find('.available_will_upload').show();*/
/*             if (available === 'true') {*/
/*                 view.find('.yandex-money-market-available-with-ready').show();*/
/*                 view.find('.yandex-money-market-available-with-to-order').hide();*/
/*             } else {*/
/*                 view.find('.yandex-money-market-available-with-ready').hide();*/
/*                 view.find('.yandex-money-market-available-with-to-order').show();*/
/*             }*/
/*             if (delivery || pickup || store) {*/
/*                 view.find('.available_list').show();*/
/*                 if (delivery) {*/
/*                     let el = view.find('.available_delivery');*/
/*                     el.show();*/
/*                     if (pickup || store) {*/
/*                         el.removeClass('last');*/
/*                     } else {*/
/*                         el.addClass('last');*/
/*                     }*/
/*                 } else {*/
/*                     view.find('.available_delivery').hide();*/
/*                 }*/
/*                 if (pickup) {*/
/*                     let el = view.find('.available_pickup');*/
/*                     el.show();*/
/*                     if (store) {*/
/*                         el.removeClass('last');*/
/*                     } else {*/
/*                         el.addClass('last');*/
/*                     }*/
/*                 } else {*/
/*                     view.find('.available_pickup').hide();*/
/*                 }*/
/*                 if (store) {*/
/*                     view.find('.available_store').show();*/
/*                 } else {*/
/*                     view.find('.available_store').hide();*/
/*                 }*/
/*             } else {*/
/*                 view.find('.available_list').hide();*/
/*             }*/
/*         }*/
/* */
/*         parent.find('.yandex_money_market_available_input_available').val(available);*/
/*         parent.find('.yandex_money_market_available_input_delivery').val(delivery ? 'on' : '');*/
/*         parent.find('.yandex_money_market_available_input_pickup').val(pickup ? 'on' : '');*/
/*         parent.find('.yandex_money_market_available_input_store').val(store ? 'on' : '');*/
/*     }*/
/* */
/*     function marketAddNewAdditionalCondition() {*/
/*         let index = $(this).data('index');*/
/*         let nextIndex = index + 1;*/
/*         $(this).data('index', nextIndex);*/
/*         let list = $('.yandex_money_market_additional_condition_list');*/
/*         let template = list.find('.yandex-money-market-additional-condition-template');*/
/*         let newForm = template.clone();*/
/*         newForm.removeClass('yandex-money-market-additional-condition-template');*/
/*         template.before(newForm);*/
/*         newForm.find('.yandex_money_market_additional_condition_edit_on_button').click();*/
/*         newForm.find('input[type=hidden], input[type=checkbox]').each(function () {*/
/*             $(this).attr('name', $(this).data('name').replace(/\[\]/, '[' + index + ']'));*/
/*         });*/
/*     }*/
/* */
/*     function marketAdditionalConditionEditFinishHandler() {*/
/*         let parent = $(this).closest('.yandex_money_market_additional_condition');*/
/*         marketJsEditableEditFinishHandler(parent);*/
/*         setTimeout(function () {*/
/*             marketAdditionalConditionUpdateViewValues(parent)*/
/*         }, 0);*/
/*     }*/
/* */
/*     function marketAdditionalConditionDeleteHandler() {*/
/*         $(this).closest('.yandex_money_market_additional_condition').detach();*/
/*     }*/
/* */
/*     function marketAdditionalConditionUpdateViewValues(parent) {*/
/*         let edit = parent.find('.yandex-money-market-js-editable-edit');*/
/*         let name = edit.find('.additional_condition_name').val();*/
/*         let tag = edit.find('.additional_condition_tag').val();*/
/*         let typeValue = edit.find('input[name="additional_condition_type_value"]:checked').val();*/
/*         let staticValue = edit.find('.additional_condition_static_value').val();*/
/*         let dataValueOption = edit.find('.additional_condition_data_value option:selected');*/
/*         let dataValue = dataValueOption.val();*/
/*         let dataValueText = dataValueOption.text();*/
/*         let valueText = typeValue === 'static' ? staticValue : dataValueText;*/
/*         let view = parent.find('.yandex_money_market_js_editable_view');*/
/*         let forAllCat = edit.find('input[name="additional_condition_for_all_cat"]:checked').val();*/
/*         let join = edit.find('input[name="additional_condition_join"]:checked').val();*/
/* */
/*         edit.find('.additional_condition_categories').each(function () {*/
/*             let el = $(this);*/
/*             parent.find('.additional_condition_categories[value=' + el.val() + ']').prop("checked", el.prop("checked"));*/
/*         });*/
/* */
/*         view.find('.additional_condition_name').text(name);*/
/*         view.find('.additional_condition_tag').text(tag);*/
/*         view.find('.additional_condition_value').text(valueText);*/
/*         let forAllCatText = forAllCat === 'on'*/
/*             ? "{{ language.get('market_additional_condition_for_all_category_label') }}"*/
/*             : "{{ language.get('market_additional_condition_for_selected_category_label') }}";*/
/*         view.find('.additional_condition_category_list').text(forAllCatText);*/
/* */
/*         parent.find('.additional_condition_name').val(name);*/
/*         parent.find('.additional_condition_tag').val(tag);*/
/*         parent.find('.additional_condition_type_value').val(typeValue);*/
/*         parent.find('.additional_condition_static_value').val(staticValue);*/
/*         parent.find('.additional_condition_data_value').val(dataValue);*/
/*         parent.find('.additional_condition_for_all_cat').val(forAllCat);*/
/*         parent.find('.additional_condition_join').val(join);*/
/*     }*/
/* */
/* */
/*     document.addEventListener('DOMContentLoaded', function () {*/
/*         $('#tab-market').on('change', '.yandex_money_market_category_tree_switcher', marketAllCategoriesChangeHandler)*/
/*             .on('click', '.yandex-money-market-category-tree input[type="checkbox"]', marketCategoryClickHandler)*/
/*             .on('click', '.catTreeHideCatAll', catTreeHideCatAll)*/
/*             .on('click', '.catTreeShowCatAll', catTreeShowCatAll)*/
/*             .on('click', '.catTreeCheckCatAll', catTreeCheckCatAll)*/
/*             .on('click', '.catTreeUncheckCatAll', catTreeUncheckCatAll);*/
/* */
/*         $('.yandex_money_market_currency_rate').on('change', marketCurrencySelectChangeHandler);*/
/*         $('.yandex_money_market_currency_edit_on_button').on('click', marketCurrencyEditOnHandler);*/
/*         $('.yandex-money-market-currency-edit .edit_finish').on('click', marketCurrencyEditFinishHandler);*/
/*         $('.yandex-money-market-copy-url').on('click', marketCopyUrlToClipboard);*/
/*         $('.yandex_money_market_delivery_edit_on_button').on('click', marketCommonEditOnHandler);*/
/*         $('.yandex_money_market_delivery_edit .edit_finish').on('click', marketDeliveryEditFinishHandler);*/
/*         $('.yandex-money-market-delivery-more').on('click', marketDeliveryShowMoreOptions);*/
/*         marketOfferFormatClickHandler();*/
/*         $('input[name="yandex_money_market_simple"]').on('change', marketOfferFormatClickHandler);*/
/*         $('.yandex_money_market_available_edit_on_button').on('click', marketCommonEditOnHandler);*/
/*         $('.yandex_money_market_available_edit .edit_finish').on('click', marketAvailableEditFinishHandler);*/
/*         $('.yandex_money_market_available').each(marketAvailableEditFinishHandler);*/
/*         $('.yandex_money_market_additional_condition_more').on('click', marketAddNewAdditionalCondition);*/
/*         $('.yandex_money_market_additional_condition_edit_on_button').on('click', marketCommonEditOnHandler);*/
/*         $('.yandex_money_market_additional_condition_container')*/
/*             .on('click', '.yandex_money_market_additional_condition_edit_on_button', marketCommonEditOnHandler)*/
/*             .on('click', '.edit_finish', marketAdditionalConditionEditFinishHandler)*/
/*             .on('click', '.edit_delete', marketAdditionalConditionDeleteHandler);*/
/*     });*/
/* </script>*/
