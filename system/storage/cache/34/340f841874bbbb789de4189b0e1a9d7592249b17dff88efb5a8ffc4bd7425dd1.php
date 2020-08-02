<?php

/* extension/payment/yandex_money/kassa.twig */
class __TwigTemplate_3cbb61acc86eb6f2ee0e9e26b55dbba906cb1181929bcfc57c11dea499974dc1 extends Twig_Template
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
        if ($this->getAttribute((isset($context["kassa"]) ? $context["kassa"] : null), "isTestMode", array(), "method")) {
            // line 2
            echo "    <div class=\"alert alert-info\">
        <i class=\"fa fa-exclamation-circle\"></i>";
            // line 3
            echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "kassa_test_mode_description"), "method");
            echo "
    </div>
";
        }
        // line 6
        echo "<div class=\"panel panel-default\">
    <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 8
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "kassa_page_title"), "method");
        echo "</h3>
    </div>
    <div class=\"panel-body\">
        <div>
            <p>";
        // line 12
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "kassa_header_description"), "method");
        echo "</p>
            <p>";
        // line 13
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "kassa_version_string"), "method");
        echo ":&nbsp;";
        echo (isset($context["module_version"]) ? $context["module_version"] : null);
        echo "</p>
        </div>

        ";
        // line 16
        if (array_key_exists("error_kassa_invalid_credentials", $context)) {
            // line 17
            echo "            <div class=\"alert alert-danger\"><i
                        class=\"fa fa-exclamation-circle\"></i> ";
            // line 18
            echo (isset($context["error_kassa_invalid_credentials"]) ? $context["error_kassa_invalid_credentials"] : null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>
        ";
        }
        // line 22
        echo "
        <div class=\"form-group\">
            <div class=\"col-sm-10 col-sm-offset-2\">
                <label>
                    <input type=\"checkbox\" id=\"kassa-enabled\" name=\"yandex_money_kassa_enabled\"
                           value=\"on\"";
        // line 27
        echo (($this->getAttribute((isset($context["kassa"]) ? $context["kassa"] : null), "isEnabled", array(), "method")) ? (" checked") : (""));
        echo " class=\"enable-button\"/>
                    ";
        // line 28
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "kassa_enable_label"), "method");
        echo "
                </label>
            </div>
        </div>

        <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"kassa-shop-id\">";
        // line 34
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "kassa_shop_id_label"), "method");
        echo "</label>
            <div class=\"col-sm-10\">
                <input type=\"text\" name=\"yandex_money_kassa_shop_id\" value=\"";
        // line 36
        echo $this->getAttribute((isset($context["kassa"]) ? $context["kassa"] : null), "getShopId", array(), "method");
        echo "\"
                       placeholder=\"";
        // line 37
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "kassa_shop_id_label"), "method");
        echo "\" id=\"kassa-shop-id\" class=\"form-control\"/>
                ";
        // line 38
        if ((array_key_exists("error_kassa_shop_id", $context) && (isset($context["error_kassa_shop_id"]) ? $context["error_kassa_shop_id"] : null))) {
            // line 39
            echo "                    <div class=\"text-danger\">";
            echo (isset($context["error_kassa_shop_id"]) ? $context["error_kassa_shop_id"] : null);
            echo "</div>
                ";
        } else {
            // line 41
            echo "                    <p class=\"help-block\">";
            echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "kassa_shop_id_description"), "method");
            echo "</p>
                ";
        }
        // line 43
        echo "            </div>
        </div>

        <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\"
                   for=\"kassa-password\">";
        // line 48
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "kassa_password_label"), "method");
        echo "</label>
            <div class=\"col-sm-10\">
                <input type=\"text\" name=\"yandex_money_kassa_password\" value=\"";
        // line 50
        echo $this->getAttribute((isset($context["kassa"]) ? $context["kassa"] : null), "getPassword", array(), "method");
        echo "\"
                       placeholder=\"";
        // line 51
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "kassa_password_label"), "method");
        echo "\" id=\"kassa-password\"
                       class=\"form-control\"/>
                ";
        // line 53
        if ((array_key_exists("error_kassa_password", $context) && (isset($context["error_kassa_password"]) ? $context["error_kassa_password"] : null))) {
            // line 54
            echo "                    <div class=\"text-danger\">";
            echo (isset($context["error_kassa_password"]) ? $context["error_kassa_password"] : null);
            echo "</div>
                ";
        } else {
            // line 56
            echo "                    <p class=\"help-block\">";
            echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "kassa_password_description"), "method");
            echo "</p>
                ";
        }
        // line 58
        echo "            </div>
        </div>

        <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\"
                   for=\"kassa-payment-mode\">";
        // line 63
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "kassa_payment_mode_label"), "method");
        echo "</label>
            <div class=\"col-sm-10\">
                <label class=\"form-check-label\">
                    <input type=\"radio\" name=\"yandex_money_kassa_payment_mode\" value=\"kassa\"
                           id=\"kassa-payment-mode-kassa\"
                           class=\"form-check-input\"";
        // line 68
        echo (($this->getAttribute((isset($context["kassa"]) ? $context["kassa"] : null), "getEpl", array(), "method")) ? (" checked") : (""));
        echo " />
                    ";
        // line 69
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "kassa_payment_mode_kassa_label"), "method");
        echo "
                </label>
            </div>
            <div class=\"col-sm-10 col-sm-offset-2\" style=\"padding-bottom: 10px;\"
                 id=\"kassa-payment-mode-kassa-container\">
                <label class=\"form-check-label\">
                    <input type=\"checkbox\" name=\"yandex_money_kassa_use_yandex_button\" value=\"on\"
                           id=\"kassa-use-yandex-button\"
                           class=\"form-check-input\"";
        // line 77
        echo (($this->getAttribute((isset($context["kassa"]) ? $context["kassa"] : null), "useYandexButton", array(), "method")) ? (" checked") : (""));
        echo " />
                    ";
        // line 78
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "kassa_use_yandex_button_label"), "method");
        echo "
                </label>
                <br/>
                <label class=\"form-check-label\">
                    <input type=\"checkbox\" name=\"yandex_money_kassa_use_installments_button\" value=\"on\"
                           id=\"kassa-use-installments-button\"
                           class=\"form-check-input\"";
        // line 84
        echo (($this->getAttribute((isset($context["kassa"]) ? $context["kassa"] : null), "useInstallmentsButton", array(), "method")) ? (" checked") : (""));
        echo " />
                    ";
        // line 85
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "kassa_use_installments_button_label"), "method");
        echo "
                </label>
                <br>
                <label class=\"form-check-label\" style=\"margin-left: 20px;\">
                    <input type=\"checkbox\" name=\"yandex_money_kassa_add_installments_block\" value=\"on\"
                           class=\"form-check-input\"";
        // line 90
        echo (($this->getAttribute((isset($context["kassa"]) ? $context["kassa"] : null), "getAddInstallmentsBlock", array(), "method")) ? (" checked") : (""));
        echo " />
                    ";
        // line 91
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "kassa_add_installments_block_label"), "method");
        echo "
                </label>
            </div>
            <div class=\"col-sm-10 col-sm-offset-2\">
                <label class=\"form-check-label\">
                    <input type=\"radio\" name=\"yandex_money_kassa_payment_mode\" value=\"shop\" id=\"kassa-payment-mode-shop\"
                           class=\"form-check-input\"";
        // line 97
        echo (($this->getAttribute((isset($context["kassa"]) ? $context["kassa"] : null), "getEpl", array(), "method")) ? ("") : (" checked"));
        echo " />
                    ";
        // line 98
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "kassa_payment_mode_shop_label"), "method");
        echo "
                </label>
            </div>
            <div class=\"col-sm-10 col-sm-offset-2\" id=\"kassa-payment-mode-shop-container\">
                ";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["kassa"]) ? $context["kassa"] : null), "getPaymentMethods", array(), "method"));
        foreach ($context['_seq'] as $context["id"] => $context["enabled"]) {
            // line 103
            echo "                    <label class=\"form-check-label\">
                        <input type=\"checkbox\" name=\"yandex_money_kassa_payment_method_";
            // line 104
            echo $context["id"];
            echo "\" value=\"on\"
                               id=\"kassa-payment-method-";
            // line 105
            echo $context["id"];
            echo "\"
                               class=\"form-check-input\"";
            // line 106
            echo (($context["enabled"]) ? (" checked") : (""));
            echo " />
                        ";
            // line 107
            echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => ("kassa_payment_method_" . $context["id"])), "method");
            echo "
                    </label><br/>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['enabled'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "                <label class=\"form-check-label\" style=\"margin-left: 20px;\">
                    <input type=\"checkbox\" name=\"yandex_money_kassa_add_installments_block\" value=\"on\"
                           class=\"form-check-input\"";
        // line 112
        echo (($this->getAttribute((isset($context["kassa"]) ? $context["kassa"] : null), "getAddInstallmentsBlock", array(), "method")) ? (" checked") : (""));
        echo " />
                    ";
        // line 113
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "kassa_add_installments_block_label"), "method");
        echo "
                </label>
                ";
        // line 115
        if ((isset($context["error_kassa_payment_method"]) ? $context["error_kassa_payment_method"] : null)) {
            // line 116
            echo "                    <div class=\"text-danger\">";
            echo (isset($context["error_kassa_payment_method"]) ? $context["error_kassa_payment_method"] : null);
            echo "</div>
                ";
        }
        // line 118
        echo "            </div>
        </div>

        <!-- Currency Start-->

        <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"yandex-money-kassa-currency\">";
        // line 124
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "kassa_currency"), "method");
        echo "</label>
            <div class=\"col-sm-5\">
                <select id=\"yandex-money-kassa-currency\" name=\"yandex_money_kassa_currency\" class=\"form-control\">
                    ";
        // line 127
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["kassa_currencies"]) ? $context["kassa_currencies"] : null));
        foreach ($context['_seq'] as $context["code"] => $context["data"]) {
            // line 128
            echo "                        <option value=\"";
            echo $context["code"];
            echo "\"";
            echo ((($this->getAttribute((isset($context["kassa"]) ? $context["kassa"] : null), "getCurrency", array(), "method") == $context["code"])) ? (" selected") : (""));
            echo ">";
            echo $this->getAttribute($context["data"], "code", array());
            echo " (";
            echo $this->getAttribute($context["data"], "title", array());
            echo ")</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['code'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        echo "                </select>
                <p class=\"help-block\">";
        // line 131
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "kassa_currency_help"), "method");
        echo "</p>
            </div>
            <div class=\"col-sm-5\">
                <label class=\"form-check-label\">
                    <input type=\"checkbox\" name=\"yandex_money_kassa_currency_convert\" value=\"on\"
                           id=\"currency_convert=\"
                           class=\"form-check-input\"";
        // line 137
        echo (($this->getAttribute((isset($context["kassa"]) ? $context["kassa"] : null), "getCurrencyConvert", array(), "method")) ? (" checked") : (""));
        echo " />
                    ";
        // line 138
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "kassa_currency_convert"), "method");
        echo "
                </label>
                <p class=\"help-block\">";
        // line 140
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "kassa_currency_convert_help"), "method");
        echo "</p>
            </div>
        </div>

        <!-- Sbbol Start-->

        <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\"
                   for=\"b2b_sberbank_enabled\">";
        // line 148
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "b2b_sberbank_label"), "method");
        echo "</label>
            <div class=\"col-sm-10\">
                <input type=\"checkbox\" id=\"b2b_sberbank_enabled\" name=\"yandex_money_kassa_b2b_sberbank_enabled\"
                       value=\"on\"";
        // line 151
        echo (($this->getAttribute((isset($context["kassa"]) ? $context["kassa"] : null), "getB2bSberbankEnabled", array(), "method")) ? (" checked") : (""));
        echo " />
                ";
        // line 152
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "b2b_sberbank_on_label"), "method");
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            <div class=\"col-sm-10 col-sm-offset-2\">
                <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\"
                           for=\"b2b-sberbank-description-template\">";
        // line 159
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "b2b_sberbank_template_label"), "method");
        echo "</label>
                    <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"yandex_money_kassa_b2b_sberbank_payment_purpose\"
                               value=\"";
        // line 162
        echo $this->getAttribute((isset($context["kassa"]) ? $context["kassa"] : null), "getB2bSberbankPaymentPurpose", array(), "method");
        echo "\"
                               placeholder=\"";
        // line 163
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "kassa_default_payment_description"), "method");
        echo "\"
                               id=\"_b2b_sberbank_payment_purpose\" class=\"form-control\"/>
                        <p class=\"help-block\">";
        // line 165
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "b2b_sberbank_template_help"), "method");
        echo "</p>
                    </div>
                </div>

                <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"kassa-tax-rate-default\">
                        ";
        // line 171
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "b2b_sberbank_vat_default_label"), "method");
        echo "
                    </label>
                    <div class=\"col-sm-10\">
                        <select id=\"b2b-tax-rate-default\" name=\"yandex_money_kassa_b2b_tax_rate_default\"
                                class=\"form-control\">
                            ";
        // line 176
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["b2bTaxRates"]) ? $context["b2bTaxRates"] : null));
        foreach ($context['_seq'] as $context["id"] => $context["name"]) {
            // line 177
            echo "                                <option value=\"";
            echo $context["id"];
            echo "\"";
            echo ((($this->getAttribute((isset($context["kassa"]) ? $context["kassa"] : null), "getB2bSberbankDefaultTaxRate", array(), "method") == $context["id"])) ? (" selected") : (""));
            echo ">";
            echo $context["name"];
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 179
        echo "                        </select>
                        <p class=\"help-block\">";
        // line 180
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "b2b_sberbank_vat_default_help"), "method");
        echo "</p>
                    </div>
                </div>

                <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\">
                        ";
        // line 186
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "b2b_sberbank_vat_label"), "method");
        echo "
                    </label>
                    <div class=\"col-sm-10\">
                        <table class=\"table\">
                            <thead>
                            <tr>
                                <th>";
        // line 192
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "b2b_sberbank_vat_cms_label"), "method");
        echo "</th>
                                <th>";
        // line 193
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "b2b_sberbank_vat_sbbol_label"), "method");
        echo "</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 197
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["shopTaxRates"]) ? $context["shopTaxRates"] : null));
        foreach ($context['_seq'] as $context["id"] => $context["name"]) {
            // line 198
            echo "                                <tr>
                                    <td>
                                        <label class=\"control-label\" for=\"b2b-tax-rate-";
            // line 200
            echo $context["id"];
            echo "\">";
            echo $context["name"];
            echo "</td>
                                    <td>
                                        <select id=\"b2b-tax-rate-";
            // line 202
            echo $context["id"];
            echo "\"
                                                name=\"yandex_money_kassa_b2b_tax_rates[";
            // line 203
            echo $context["id"];
            echo "]\"
                                                class=\"form-control\">
                                            ";
            // line 205
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["b2bTaxRates"]) ? $context["b2bTaxRates"] : null));
            foreach ($context['_seq'] as $context["taxRateId"] => $context["taxRateName"]) {
                // line 206
                echo "                                                <option value=\"";
                echo $context["taxRateId"];
                echo "\"";
                echo ((($this->getAttribute((isset($context["kassa"]) ? $context["kassa"] : null), "getB2bTaxRateId", array(0 => $context["id"]), "method") == $context["taxRateId"])) ? (" selected") : (""));
                echo ">";
                echo $context["taxRateName"];
                echo "</option>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['taxRateId'], $context['taxRateName'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 208
            echo "                                        </select>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 212
        echo "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sbbol End -->


        <div class=\"form-group\">
            <div class=\"col-sm-10 col-sm-offset-2\">
                <label>
                    <input type=\"checkbox\" id=\"kassa-enable-hold-mode\"
                           name=\"yandex_money_kassa_enable_hold_mode\"
                           value=\"on\" ";
        // line 227
        echo (($this->getAttribute((isset($context["kassa"]) ? $context["kassa"] : null), "getEnableHoldMode", array(), "method")) ? ("checked") : (""));
        echo "/>
                    ";
        // line 228
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "kassa_hold_setting_label"), "method");
        echo "
                </label>
            </div>
            <div class=\"form-group\">
                <div class=\"col-sm-10 col-sm-offset-2\">
                    <div class=\"statuses-wrapper\">

                        <div id=\"kassa-statuses-label\" class=\"col-sm-offset-6 col-sm-6\">
                            <label> ";
        // line 236
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "kassa_statuses_description_label"), "method");
        echo " </label>
                        </div>

                        <label class=\"col-sm-6 control-label\" for=\"kassa-hold-order-status\">
                            ";
        // line 240
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "kassa_hold_order_status_label"), "method");
        echo "
                        </label>
                        <div class=\"col-sm-6\" style=\"margin-bottom: 10px;\">
                            <select id=\"kassa-hold-order-status\" name=\"yandex_money_kassa_hold_order_status\"
                                    class=\"form-control\">
                                ";
        // line 245
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["orderStatuses"]) ? $context["orderStatuses"] : null));
        foreach ($context['_seq'] as $context["id"] => $context["name"]) {
            // line 246
            echo "                                    <option value=\"";
            echo $context["id"];
            echo "\"";
            echo ((($this->getAttribute((isset($context["kassa"]) ? $context["kassa"] : null), "getHoldOrderStatusId", array(), "method") == $context["id"])) ? (" selected") : (""));
            echo ">";
            echo $context["name"];
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 248
        echo "                            </select>
                        </div>

                        <label class=\"col-sm-6 control-label\" for=\"kassa-cancel-order-status\">
                            ";
        // line 252
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "kassa_cancel_order_status_label"), "method");
        echo "
                        </label>

                        <div class=\"col-sm-6\">
                            <select id=\"kassa-cancel-order-status\" name=\"yandex_money_kassa_cancel_order_status\"
                                    class=\"form-control\">

                                ";
        // line 259
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["orderStatuses"]) ? $context["orderStatuses"] : null));
        foreach ($context['_seq'] as $context["id"] => $context["name"]) {
            // line 260
            echo "                                    <option value=\"";
            echo $context["id"];
            echo "\"";
            echo ((($this->getAttribute((isset($context["kassa"]) ? $context["kassa"] : null), "getOrderCanceledStatus", array(), "method") == $context["id"])) ? (" selected") : (""));
            echo "> ";
            echo $context["name"];
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 262
        echo "                            </select>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\"
                   for=\"kassa-payment-description\">";
        // line 272
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "kassa_payment_description_label"), "method");
        echo "</label>
            <div class=\"col-sm-10\">
                <input type=\"text\" name=\"yandex_money_kassa_payment_description\"
                       value=\"";
        // line 275
        echo $this->getAttribute((isset($context["kassa"]) ? $context["kassa"] : null), "getPaymentDescription", array(), "method");
        echo "\"
                       placeholder=\"";
        // line 276
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "kassa_default_payment_description"), "method");
        echo "\"
                       id=\"kassa-payment-description\" class=\"form-control\"/>
                <p class=\"help-block\">";
        // line 278
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "kassa_payment_description_description"), "method");
        echo "</p>
            </div>
        </div>

        <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\"
                   for=\"kassa-display-name\">";
        // line 284
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "kassa_display_name_label"), "method");
        echo "</label>
            <div class=\"col-sm-10\">
                <input type=\"text\" name=\"yandex_money_kassa_display_name\" value=\"";
        // line 286
        echo $this->getAttribute((isset($context["kassa"]) ? $context["kassa"] : null), "getDisplayName", array(), "method");
        echo "\"
                       placeholder=\"";
        // line 287
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "kassa_display_name_label"), "method");
        echo "\" id=\"kassa-display-name\"
                       class=\"form-control\"/>
                <p class=\"help-block\">";
        // line 289
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "kassa_display_name_description"), "method");
        echo "</p>
            </div>
        </div>

        <div class=\"form-group\">
            <div class=\"col-sm-10 col-sm-offset-2\">
                <label>
                    <input type=\"checkbox\" id=\"kassa-send-receipt\" name=\"yandex_money_kassa_send_receipt\"
                           value=\"on\"";
        // line 297
        echo (($this->getAttribute((isset($context["kassa"]) ? $context["kassa"] : null), "isSendReceipt", array(), "method")) ? (" checked") : (""));
        echo " />
                    ";
        // line 298
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "kassa_send_receipt_label"), "method");
        echo "
                </label>
            </div>
        </div>
        <div class=\"form-group\">
            <div class=\"col-sm-10 col-sm-offset-2\">
                <div class=\"form-group receipt-only\">
                    <div class=\"col-sm-10 col-sm-offset-2\">
                        <h4>";
        // line 306
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "kassa_send_receipt_tax_rate_title"), "method");
        echo "</h4>
                    </div>
                </div>
                <div class=\"form-group receipt-only\">
                    <label class=\"col-sm-2 control-label\" for=\"kassa-tax-rate-default\">
                        ";
        // line 311
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "kassa_tax_rate_default_label"), "method");
        echo "
                    </label>
                    <div class=\"col-sm-10\">
                        <select id=\"kassa-tax-rate-default\" name=\"yandex_money_kassa_tax_rate_default\"
                                class=\"form-control\">
                            ";
        // line 316
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["kassaTaxRates"]) ? $context["kassaTaxRates"] : null));
        foreach ($context['_seq'] as $context["id"] => $context["name"]) {
            // line 317
            echo "                                <option value=\"";
            echo $context["id"];
            echo "\"";
            echo ((($this->getAttribute((isset($context["kassa"]) ? $context["kassa"] : null), "getDefaultTaxRate", array(), "method") == $context["id"])) ? (" selected") : (""));
            echo ">";
            echo $context["name"];
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 319
        echo "                        </select>
                        <p class=\"help-block\">";
        // line 320
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "kassa_tax_rate_default_description"), "method");
        echo "</p>
                    </div>
                </div>
                <div class=\"form-group receipt-only\">
                    <label class=\"col-sm-2 control-label\">
                        ";
        // line 325
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "kassa_tax_rate_table_caption"), "method");
        echo "
                    </label>
                    <div class=\"col-sm-10\">
                        <table class=\"table\">
                            <thead>
                            <tr>
                                <th>";
        // line 331
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "kassa_shop_tax_rate_header"), "method");
        echo "</th>
                                <th>";
        // line 332
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "kassa_kassa_tax_rate_header"), "method");
        echo "</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 336
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["shopTaxRates"]) ? $context["shopTaxRates"] : null));
        foreach ($context['_seq'] as $context["id"] => $context["name"]) {
            // line 337
            echo "                                <tr>
                                    <td>
                                        <label class=\"control-label\" for=\"kassa-tax-rate-";
            // line 339
            echo $context["id"];
            echo "\">";
            echo $context["name"];
            echo "</td>
                                    <td>
                                        <select id=\"kassa-tax-rate-";
            // line 341
            echo $context["id"];
            echo "\"
                                                name=\"yandex_money_kassa_tax_rates[";
            // line 342
            echo $context["id"];
            echo "]\"
                                                class=\"form-control\">
                                            ";
            // line 344
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["kassaTaxRates"]) ? $context["kassaTaxRates"] : null));
            foreach ($context['_seq'] as $context["taxRateId"] => $context["taxRateName"]) {
                // line 345
                echo "                                                <option value=\"";
                echo $context["taxRateId"];
                echo "\"";
                echo ((($this->getAttribute((isset($context["kassa"]) ? $context["kassa"] : null), "getTaxRateId", array(0 => $context["id"]), "method") == $context["taxRateId"])) ? (" selected") : (""));
                echo ">";
                echo $context["taxRateName"];
                echo "</option>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['taxRateId'], $context['taxRateName'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 347
            echo "                                        </select>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 351
        echo "                            </tbody>
                        </table>
                    </div>
                </div>
                <div class=\"form-group receipt-only\">
                    <label class=\"col-sm-2 control-label\" for=\"kassa-tax-rate-default\">
                        ";
        // line 357
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "kassa_payment_mode_default_label"), "method");
        echo "
                    </label>
                    <div class=\"col-sm-10\">
                        <select id=\"kassa-payment-mode-default\" name=\"yandex_money_kassa_payment_mode_default\"
                                class=\"form-control\">
                            ";
        // line 362
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["kassa"]) ? $context["kassa"] : null), "getPaymentModeEnum", array(), "method"));
        foreach ($context['_seq'] as $context["id"] => $context["name"]) {
            // line 363
            echo "                                <option value=\"";
            echo $context["id"];
            echo "\"";
            echo ((($this->getAttribute((isset($context["kassa"]) ? $context["kassa"] : null), "getDefaultPaymentMode", array(), "method") == $context["id"])) ? (" selected") : (""));
            echo ">";
            echo $context["name"];
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 365
        echo "                        </select>
                    </div>
                </div>
                <div class=\"form-group receipt-only\">
                    <label class=\"col-sm-2 control-label\" for=\"kassa-tax-rate-default\">
                        ";
        // line 370
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "kassa_payment_subject_default_label"), "method");
        echo "
                    </label>
                    <div class=\"col-sm-10\">
                        <select id=\"kassa-tax-rate-default\" name=\"yandex_money_kassa_payment_subject_default\"
                                class=\"form-control\">
                            ";
        // line 375
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["kassa"]) ? $context["kassa"] : null), "getPaymentSubjectEnum", array(), "method"));
        foreach ($context['_seq'] as $context["id"] => $context["name"]) {
            // line 376
            echo "                                <option value=\"";
            echo $context["id"];
            echo "\"";
            echo ((($this->getAttribute((isset($context["kassa"]) ? $context["kassa"] : null), "getDefaultPaymentSubject", array(), "method") == $context["id"])) ? (" selected") : (""));
            echo ">";
            echo $context["name"];
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 378
        echo "                        </select>
                    </div>
                </div>
                <p class=\"help-block receipt-only\">";
        // line 381
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "kassa_payment_subject_default_description"), "method");
        echo "</p>
                <div class=\"form-group receipt-only\">

                    <label class=\"col-sm-2 control-label\">
                        ";
        // line 385
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "kassa_second_receipt_header"), "method");
        echo "
                    </label>
                    <div class=\"col-sm-10\">
                        <label style=\"font-weight: 600; padding-top: 9px; cursor: pointer\" class=\"form-check-label\">
                            <input style=\"vertical-align:middle;margin:-2px 3px 0 0;cursor: pointer\" type=\"radio\" name=\"yandex_money_kassa_second_receipt_enable\" value=\"1\" class=\"form-check-input\" ";
        // line 389
        echo (($this->getAttribute((isset($context["kassa"]) ? $context["kassa"] : null), "isSecondReceipt", array(), "method")) ? (" checked") : (""));
        echo "/>
                            ";
        // line 390
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "kassa_second_receipt_enable"), "method");
        echo "
                        </label>
                        <label style=\"font-weight: 600; margin-left: 10px; cursor: pointer\" class=\"form-check-label\">
                            <input style=\"vertical-align:middle;margin:-2px 3px 0 0;cursor: pointer\" type=\"radio\" name=\"yandex_money_kassa_second_receipt_enable\" value=\"0\" class=\"form-check-input\" ";
        // line 393
        echo (($this->getAttribute((isset($context["kassa"]) ? $context["kassa"] : null), "isSecondReceipt", array(), "method")) ? (" ") : (" checked"));
        echo "/>
                            ";
        // line 394
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "kassa_second_receipt_disable"), "method");
        echo "
                        </label>
                    </div>
                    <div class=\"col-sm-10 col-sm-offset-2 second-receipt-wrapper\">
                        <p>";
        // line 398
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "kassa_second_receipt_description"), "method");
        echo "</p>
                        <table class=\"table table-hover\">
                            <tbody>
                            <tr>
                                <td style=\"border: none\">
                                    <label class=\"control-label\">
                                        ";
        // line 404
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "kassa_second_receipt_enable_label"), "method");
        echo "
                                    </label>
                                </td>
                                <td style=\"border: none\">
                                    <select name=\"yandex_money_kassa_second_receipt_status\" class=\"form-control col-xl-4 col-md-4\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"\">
                                        ";
        // line 409
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["orderStatuses"]) ? $context["orderStatuses"] : null));
        foreach ($context['_seq'] as $context["id"] => $context["name"]) {
            // line 410
            echo "                                            <option value=\"";
            echo $context["id"];
            echo "\"";
            echo ((($this->getAttribute((isset($context["kassa"]) ? $context["kassa"] : null), "getSecondReceiptStatus", array()) == $context["id"])) ? (" selected") : (""));
            echo ">";
            echo $context["name"];
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 412
        echo "                                    </select>
                                </td>
                            </tr>
                            </tbody>
                        </table>

                        <p class=\"help-block\">";
        // line 418
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "kassa_second_receipt_help_info"), "method");
        echo "</p>
                    </div>
                </div>

            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">Показывать ссылку на сайт Кассы</label>
            <div class=\"col-sm-10\">
                <select id=\"kassa-debug-log\" name=\"yandex_money_kassa_show_in_footer\" class=\"form-control\">
                    <option value=\"off\"
                            ";
        // line 429
        if ( !$this->getAttribute((isset($context["kassa"]) ? $context["kassa"] : null), "getShowLinkInFooter", array(), "method")) {
            echo "selected";
        }
        echo ">";
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "kassa_debug_log_off"), "method");
        echo "</option>
                    <option value=\"on\"
                            ";
        // line 431
        if ($this->getAttribute((isset($context["kassa"]) ? $context["kassa"] : null), "getShowLinkInFooter", array(), "method")) {
            echo "selected";
        }
        echo ">";
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "kassa_debug_log_on"), "method");
        echo "</option>
                </select>
                <p class=\"help-block\">Ссылка будет отображаться в подвале вашего сайта.</p>
            </div>
        </div>

        <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"kassa-notification-url\">
                ";
        // line 439
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "kassa_notification_url_label"), "method");
        echo "
            </label>
            <div class=\"col-sm-10\">
                <input type=\"text\" id=\"kassa-notification-url\" name=\"kassa_notification_url\"
                       value=\"";
        // line 443
        echo (isset($context["notificationUrl"]) ? $context["notificationUrl"] : null);
        echo "\" class=\"form-control\" disabled/>
                <p class=\"help-block\">";
        // line 444
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "kassa_notification_url_description"), "method");
        echo "</p>
            </div>
        </div>

        <div class=\"form-group\">
            <div class=\"col-sm-10 col-sm-offset-2\">
                <label>
                    <input type=\"checkbox\" id=\"kassa-invoice\" name=\"yandex_money_kassa_invoice\"
                           value=\"on\"";
        // line 452
        echo (($this->getAttribute((isset($context["kassa"]) ? $context["kassa"] : null), "isInvoicesEnabled", array(), "method")) ? (" checked") : (""));
        echo " />
                    ";
        // line 453
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "kassa_invoice_label"), "method");
        echo "
                </label>
            </div>
        </div>
        <div class=\"form-group invoice-only\">
            <label class=\"col-sm-2 control-label\">";
        // line 458
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "kassa_invoice_heading_label"), "method");
        echo "</label>
            <label class=\"col-sm-2 control-label\" for=\"kassa-invoice-subject\">
                ";
        // line 460
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "kassa_invoice_subject_label"), "method");
        echo "
            </label>
            <div class=\"col-sm-8\">
                <input type=\"text\" id=\"kassa-invoice-subject\" name=\"yandex_money_kassa_invoice_subject\"
                       value=\"";
        // line 464
        echo $this->getAttribute((isset($context["kassa"]) ? $context["kassa"] : null), "getInvoiceSubject", array(), "method");
        echo "\" class=\"form-control\"/>
                <p class=\"help-block\">";
        // line 465
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "kassa_invoice_subject_description"), "method");
        echo "</p>
            </div>
            <label class=\"col-sm-2 col-sm-offset-2 control-label\" for=\"kassa-invoice-message\">
                ";
        // line 468
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "kassa_invoice_message_label"), "method");
        echo "
            </label>
            <div class=\"col-sm-8\">
                <textarea id=\"kassa-invoice-message\" name=\"yandex_money_kassa_invoice_message\"
                          class=\"form-control\">";
        // line 472
        echo $this->getAttribute((isset($context["kassa"]) ? $context["kassa"] : null), "getInvoiceMessage", array(), "method");
        echo "</textarea>
                <p class=\"help-block\">";
        // line 473
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "kassa_invoice_message_description"), "method");
        echo "</p>
            </div>
            <div class=\"col-sm-10 col-sm-offset-4\">
                <label>
                    <input type=\"checkbox\" id=\"kassa-invoice-logo\" name=\"yandex_money_kassa_invoice_logo\"
                           value=\"on\"";
        // line 478
        echo (($this->getAttribute((isset($context["kassa"]) ? $context["kassa"] : null), "getSendInvoiceLogo", array(), "method")) ? (" checked") : (""));
        echo " />
                    ";
        // line 479
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "kassa_invoice_logo_label"), "method");
        echo "
                </label>
            </div>
        </div>

        <div class=\"form-group\">
            <div class=\"col-sm-2 control-label\"><strong>";
        // line 485
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "kassa_before_redirect_label"), "method");
        echo "</strong></div>
            <div class=\"col-sm-10\">
                <label>
                    <input type=\"checkbox\" name=\"yandex_money_kassa_create_order_before_redirect\"
                           id=\"yandex_money_kassa_create_order_before_redirect\"
                           value=\"on\" ";
        // line 490
        if ($this->getAttribute((isset($context["kassa"]) ? $context["kassa"] : null), "getCreateOrderBeforeRedirect", array(), "method")) {
            echo "checked";
        }
        echo " />
                    ";
        // line 491
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "kassa_create_order_label"), "method");
        echo "
                </label><br/>
                <label>
                    <input type=\"checkbox\" name=\"yandex_money_kassa_clear_cart_before_redirect\"
                           id=\"yandex_money_kassa_clear_cart_before_redirect\"
                           value=\"on\" ";
        // line 496
        if ($this->getAttribute((isset($context["kassa"]) ? $context["kassa"] : null), "getClearCartBeforeRedirect", array(), "method")) {
            echo "checked";
        }
        echo " />
                    ";
        // line 497
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "kassa_clear_cart_label"), "method");
        echo "
                </label>
            </div>
        </div>

        <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"kassa-success-order-status\">
                ";
        // line 504
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "kassa_success_order_status_label"), "method");
        echo "
            </label>
            <div class=\"col-sm-10\">
                <select id=\"kassa-success-order-status\" name=\"yandex_money_kassa_success_order_status\"
                        class=\"form-control\">
                    ";
        // line 509
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["orderStatuses"]) ? $context["orderStatuses"] : null));
        foreach ($context['_seq'] as $context["id"] => $context["name"]) {
            // line 510
            echo "                        <option value=\"";
            echo $context["id"];
            echo "\"";
            echo ((($this->getAttribute((isset($context["kassa"]) ? $context["kassa"] : null), "getSuccessOrderStatusId", array(), "method") == $context["id"])) ? (" selected") : (""));
            echo ">";
            echo $context["name"];
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 512
        echo "                </select>
                <p class=\"help-block\">";
        // line 513
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "kassa_success_order_status_description"), "method");
        echo "</p>
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"kassa-min-payment-amount\">
                ";
        // line 518
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "kassa_minimum_payment_amount_label"), "method");
        echo "
            </label>
            <div class=\"col-sm-10\">
                <input type=\"text\" id=\"kassa-min-payment-amount\" name=\"yandex_money_kassa_minimum_payment_amount\"
                       value=\"";
        // line 522
        echo $this->getAttribute((isset($context["kassa"]) ? $context["kassa"] : null), "getMinPaymentAmount", array(), "method");
        echo "\" class=\"form-control\"/>
                <p class=\"help-block\">";
        // line 523
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "kassa_minimum_payment_amount_description"), "method");
        echo "</p>
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"kassa-geo-zone\">
                ";
        // line 528
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "kassa_geo_zone_label"), "method");
        echo "
            </label>
            <div class=\"col-sm-10\">
                <select id=\"kassa-geo-zone\" name=\"yandex_money_kassa_geo_zone\" class=\"form-control\">
                    <option value=\"0\"";
        // line 532
        echo ((($this->getAttribute((isset($context["kassa"]) ? $context["kassa"] : null), "getGeoZoneId", array(), "method") == 0)) ? (" selected") : (""));
        echo ">";
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "kassa_any_geo_zone"), "method");
        echo "</option>
                    ";
        // line 533
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["geoZones"]) ? $context["geoZones"] : null));
        foreach ($context['_seq'] as $context["id"] => $context["name"]) {
            // line 534
            echo "                        <option value=\"";
            echo $context["id"];
            echo "\"";
            echo ((($this->getAttribute((isset($context["kassa"]) ? $context["kassa"] : null), "getGeoZoneId", array(), "method") == $context["id"])) ? (" selected") : (""));
            echo ">";
            echo $context["name"];
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 536
        echo "                </select>
                <p class=\"help-block\">";
        // line 537
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "kassa_geo_zone_description"), "method");
        echo "</p>
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"kassa-debug-log\">
                ";
        // line 542
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "kassa_debug_log_label"), "method");
        echo "
            </label>
            <div class=\"col-sm-10\">
                <select id=\"kassa-debug-log\" name=\"yandex_money_kassa_debug_log\" class=\"form-control\">
                    <option value=\"off\"";
        // line 546
        echo (($this->getAttribute((isset($context["kassa"]) ? $context["kassa"] : null), "getDebugLog", array(), "method")) ? ("") : (" selected"));
        echo ">";
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "kassa_debug_log_off"), "method");
        echo "</option>
                    <option value=\"on\"";
        // line 547
        echo (($this->getAttribute((isset($context["kassa"]) ? $context["kassa"] : null), "getDebugLog", array(), "method")) ? (" selected") : (""));
        echo ">";
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "kassa_debug_log_on"), "method");
        echo "</option>
                </select>
                <p class=\"help-block\">";
        // line 549
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "kassa_debug_log_description"), "method");
        echo "</p>
                <p class=\"help-block\"><a href=\"";
        // line 550
        echo (isset($context["kassa_logs_link"]) ? $context["kassa_logs_link"] : null);
        echo "\">";
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "kassa_view_logs"), "method");
        echo "</a></p>
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 554
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "kassa_payment_list_label"), "method");
        echo "</label>
            <div class=\"col-sm-9\">
                <p class=\"help-block\"><a
                            href=\"";
        // line 557
        echo (isset($context["kassa_payments_link"]) ? $context["kassa_payments_link"] : null);
        echo "\">";
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "kassa_payment_list_link"), "method");
        echo "</a></p>
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"kassa-sort-order\">
                ";
        // line 562
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "kassa_sort_order_label"), "method");
        echo "
            </label>
            <div class=\"col-sm-10\">
                <input type=\"text\" id=\"kassa-sort-order\" name=\"yandex_money_kassa_sort_order\"
                       value=\"";
        // line 566
        echo (isset($context["yandex_money_kassa_sort_order"]) ? $context["yandex_money_kassa_sort_order"] : null);
        echo "\" class=\"form-control\"/>
                <p class=\"help-block\">";
        // line 567
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "kassa_sort_order_description"), "method");
        echo "</p>
            </div>
        </div>
    </div>
</div>

<script type=\"text/javascript\">

    jQuery(document).ready(function () {

        function togglePaymentMode(value) {
            if (value == 'kassa') {
                jQuery('#kassa-payment-mode-kassa-container').slideDown();
                jQuery('#kassa-payment-mode-shop-container').slideUp();
            } else {
                jQuery('#kassa-payment-mode-kassa-container').slideUp();
                jQuery('#kassa-payment-mode-shop-container').slideDown();
            }
        }

        function toggleSendReceipt(value) {
            if (value) {
                jQuery('.receipt-only').slideDown();
            } else {
                jQuery('.receipt-only').slideUp();
            }
        }

        function toggleSecondReceipt(value) {
            if (value == 1) {
                jQuery('.second-receipt-wrapper').slideDown();
            } else {
                jQuery('.second-receipt-wrapper').slideUp();
            }
        }

        function toggleInvoice(value) {
            if (value) {
                jQuery('.invoice-only').slideDown();
            } else {
                jQuery('.invoice-only').slideUp();
            }
        }

        function toggleStatuses(value) {
            if (value) {
                jQuery('.statuses-wrapper').slideDown();
            } else {
                jQuery('.statuses-wrapper').slideUp();
            }
        }

        var form = document.getElementById('form-payment-yandex-money');
        togglePaymentMode(form.yandex_money_kassa_payment_mode.value);
        toggleSendReceipt(form.yandex_money_kassa_send_receipt.checked);
        toggleSecondReceipt(form.yandex_money_kassa_second_receipt_enable.value);
        toggleInvoice(form.yandex_money_kassa_invoice.checked);

        jQuery('#kassa-enable-hold-mode').bind('change', function () {
            toggleStatuses(this.checked);
        });

        jQuery('input[name=yandex_money_kassa_payment_mode]').click(function () {
            togglePaymentMode(form.yandex_money_kassa_payment_mode.value)
        });

        jQuery('#kassa-send-receipt').bind('change', function () {
            toggleSendReceipt(this.checked);
        });

        jQuery('input[name=yandex_money_kassa_second_receipt_enable]').bind('change', function () {
            toggleSecondReceipt(this.value);
        });

        jQuery('#kassa-invoice').bind('change', function () {
            toggleInvoice(this.checked);
        });

        jQuery('input[name=yandex_money_kassa_add_installments_block]').on('change', function () {
            var checked = this.checked;
            jQuery('input[name=yandex_money_kassa_add_installments_block]').each(function () {
                this.checked = checked;
            });
        });
    });

</script>";
    }

    public function getTemplateName()
    {
        return "extension/payment/yandex_money/kassa.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1245 => 567,  1241 => 566,  1234 => 562,  1224 => 557,  1218 => 554,  1209 => 550,  1205 => 549,  1198 => 547,  1192 => 546,  1185 => 542,  1177 => 537,  1174 => 536,  1161 => 534,  1157 => 533,  1151 => 532,  1144 => 528,  1136 => 523,  1132 => 522,  1125 => 518,  1117 => 513,  1114 => 512,  1101 => 510,  1097 => 509,  1089 => 504,  1079 => 497,  1073 => 496,  1065 => 491,  1059 => 490,  1051 => 485,  1042 => 479,  1038 => 478,  1030 => 473,  1026 => 472,  1019 => 468,  1013 => 465,  1009 => 464,  1002 => 460,  997 => 458,  989 => 453,  985 => 452,  974 => 444,  970 => 443,  963 => 439,  948 => 431,  939 => 429,  925 => 418,  917 => 412,  904 => 410,  900 => 409,  892 => 404,  883 => 398,  876 => 394,  872 => 393,  866 => 390,  862 => 389,  855 => 385,  848 => 381,  843 => 378,  830 => 376,  826 => 375,  818 => 370,  811 => 365,  798 => 363,  794 => 362,  786 => 357,  778 => 351,  769 => 347,  756 => 345,  752 => 344,  747 => 342,  743 => 341,  736 => 339,  732 => 337,  728 => 336,  721 => 332,  717 => 331,  708 => 325,  700 => 320,  697 => 319,  684 => 317,  680 => 316,  672 => 311,  664 => 306,  653 => 298,  649 => 297,  638 => 289,  633 => 287,  629 => 286,  624 => 284,  615 => 278,  610 => 276,  606 => 275,  600 => 272,  588 => 262,  575 => 260,  571 => 259,  561 => 252,  555 => 248,  542 => 246,  538 => 245,  530 => 240,  523 => 236,  512 => 228,  508 => 227,  491 => 212,  482 => 208,  469 => 206,  465 => 205,  460 => 203,  456 => 202,  449 => 200,  445 => 198,  441 => 197,  434 => 193,  430 => 192,  421 => 186,  412 => 180,  409 => 179,  396 => 177,  392 => 176,  384 => 171,  375 => 165,  370 => 163,  366 => 162,  360 => 159,  350 => 152,  346 => 151,  340 => 148,  329 => 140,  324 => 138,  320 => 137,  311 => 131,  308 => 130,  293 => 128,  289 => 127,  283 => 124,  275 => 118,  269 => 116,  267 => 115,  262 => 113,  258 => 112,  254 => 110,  245 => 107,  241 => 106,  237 => 105,  233 => 104,  230 => 103,  226 => 102,  219 => 98,  215 => 97,  206 => 91,  202 => 90,  194 => 85,  190 => 84,  181 => 78,  177 => 77,  166 => 69,  162 => 68,  154 => 63,  147 => 58,  141 => 56,  135 => 54,  133 => 53,  128 => 51,  124 => 50,  119 => 48,  112 => 43,  106 => 41,  100 => 39,  98 => 38,  94 => 37,  90 => 36,  85 => 34,  76 => 28,  72 => 27,  65 => 22,  58 => 18,  55 => 17,  53 => 16,  45 => 13,  41 => 12,  34 => 8,  30 => 6,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if kassa.isTestMode() %}*/
/*     <div class="alert alert-info">*/
/*         <i class="fa fa-exclamation-circle"></i>{{ language.get('kassa_test_mode_description') }}*/
/*     </div>*/
/* {% endif %}*/
/* <div class="panel panel-default">*/
/*     <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ language.get('kassa_page_title') }}</h3>*/
/*     </div>*/
/*     <div class="panel-body">*/
/*         <div>*/
/*             <p>{{ language.get('kassa_header_description') }}</p>*/
/*             <p>{{ language.get('kassa_version_string') }}:&nbsp;{{ module_version }}</p>*/
/*         </div>*/
/* */
/*         {% if error_kassa_invalid_credentials is defined %}*/
/*             <div class="alert alert-danger"><i*/
/*                         class="fa fa-exclamation-circle"></i> {{ error_kassa_invalid_credentials }}*/
/*                 <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*             </div>*/
/*         {% endif %}*/
/* */
/*         <div class="form-group">*/
/*             <div class="col-sm-10 col-sm-offset-2">*/
/*                 <label>*/
/*                     <input type="checkbox" id="kassa-enabled" name="yandex_money_kassa_enabled"*/
/*                            value="on"{{ kassa.isEnabled() ? ' checked' : '' }} class="enable-button"/>*/
/*                     {{ language.get('kassa_enable_label') }}*/
/*                 </label>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="kassa-shop-id">{{ language.get('kassa_shop_id_label') }}</label>*/
/*             <div class="col-sm-10">*/
/*                 <input type="text" name="yandex_money_kassa_shop_id" value="{{ kassa.getShopId() }}"*/
/*                        placeholder="{{ language.get('kassa_shop_id_label') }}" id="kassa-shop-id" class="form-control"/>*/
/*                 {% if error_kassa_shop_id is defined and error_kassa_shop_id %}*/
/*                     <div class="text-danger">{{ error_kassa_shop_id }}</div>*/
/*                 {% else %}*/
/*                     <p class="help-block">{{ language.get('kassa_shop_id_description') }}</p>*/
/*                 {% endif %}*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="form-group required">*/
/*             <label class="col-sm-2 control-label"*/
/*                    for="kassa-password">{{ language.get('kassa_password_label') }}</label>*/
/*             <div class="col-sm-10">*/
/*                 <input type="text" name="yandex_money_kassa_password" value="{{ kassa.getPassword() }}"*/
/*                        placeholder="{{ language.get('kassa_password_label') }}" id="kassa-password"*/
/*                        class="form-control"/>*/
/*                 {% if error_kassa_password is defined and error_kassa_password %}*/
/*                     <div class="text-danger">{{ error_kassa_password }}</div>*/
/*                 {% else %}*/
/*                     <p class="help-block">{{ language.get('kassa_password_description') }}</p>*/
/*                 {% endif %}*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*             <label class="col-sm-2 control-label"*/
/*                    for="kassa-payment-mode">{{ language.get('kassa_payment_mode_label') }}</label>*/
/*             <div class="col-sm-10">*/
/*                 <label class="form-check-label">*/
/*                     <input type="radio" name="yandex_money_kassa_payment_mode" value="kassa"*/
/*                            id="kassa-payment-mode-kassa"*/
/*                            class="form-check-input"{{ kassa.getEpl() ? ' checked' : '' }} />*/
/*                     {{ language.get('kassa_payment_mode_kassa_label') }}*/
/*                 </label>*/
/*             </div>*/
/*             <div class="col-sm-10 col-sm-offset-2" style="padding-bottom: 10px;"*/
/*                  id="kassa-payment-mode-kassa-container">*/
/*                 <label class="form-check-label">*/
/*                     <input type="checkbox" name="yandex_money_kassa_use_yandex_button" value="on"*/
/*                            id="kassa-use-yandex-button"*/
/*                            class="form-check-input"{{ kassa.useYandexButton() ? ' checked' : '' }} />*/
/*                     {{ language.get('kassa_use_yandex_button_label') }}*/
/*                 </label>*/
/*                 <br/>*/
/*                 <label class="form-check-label">*/
/*                     <input type="checkbox" name="yandex_money_kassa_use_installments_button" value="on"*/
/*                            id="kassa-use-installments-button"*/
/*                            class="form-check-input"{{ kassa.useInstallmentsButton() ? ' checked' : '' }} />*/
/*                     {{ language.get('kassa_use_installments_button_label') }}*/
/*                 </label>*/
/*                 <br>*/
/*                 <label class="form-check-label" style="margin-left: 20px;">*/
/*                     <input type="checkbox" name="yandex_money_kassa_add_installments_block" value="on"*/
/*                            class="form-check-input"{{ kassa.getAddInstallmentsBlock() ? ' checked' : '' }} />*/
/*                     {{ language.get('kassa_add_installments_block_label') }}*/
/*                 </label>*/
/*             </div>*/
/*             <div class="col-sm-10 col-sm-offset-2">*/
/*                 <label class="form-check-label">*/
/*                     <input type="radio" name="yandex_money_kassa_payment_mode" value="shop" id="kassa-payment-mode-shop"*/
/*                            class="form-check-input"{{ kassa.getEpl() ? '' : ' checked' }} />*/
/*                     {{ language.get('kassa_payment_mode_shop_label') }}*/
/*                 </label>*/
/*             </div>*/
/*             <div class="col-sm-10 col-sm-offset-2" id="kassa-payment-mode-shop-container">*/
/*                 {% for id, enabled in kassa.getPaymentMethods() %}*/
/*                     <label class="form-check-label">*/
/*                         <input type="checkbox" name="yandex_money_kassa_payment_method_{{ id }}" value="on"*/
/*                                id="kassa-payment-method-{{ id }}"*/
/*                                class="form-check-input"{{ enabled ? ' checked' : '' }} />*/
/*                         {{ language.get('kassa_payment_method_' ~ id) }}*/
/*                     </label><br/>*/
/*                 {% endfor %}*/
/*                 <label class="form-check-label" style="margin-left: 20px;">*/
/*                     <input type="checkbox" name="yandex_money_kassa_add_installments_block" value="on"*/
/*                            class="form-check-input"{{ kassa.getAddInstallmentsBlock() ? ' checked' : '' }} />*/
/*                     {{ language.get('kassa_add_installments_block_label') }}*/
/*                 </label>*/
/*                 {% if error_kassa_payment_method %}*/
/*                     <div class="text-danger">{{ error_kassa_payment_method }}</div>*/
/*                 {% endif %}*/
/*             </div>*/
/*         </div>*/
/* */
/*         <!-- Currency Start-->*/
/* */
/*         <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="yandex-money-kassa-currency">{{ language.get('kassa_currency') }}</label>*/
/*             <div class="col-sm-5">*/
/*                 <select id="yandex-money-kassa-currency" name="yandex_money_kassa_currency" class="form-control">*/
/*                     {% for code, data in kassa_currencies %}*/
/*                         <option value="{{ code }}"{{ kassa.getCurrency() == code ? ' selected' : '' }}>{{ data.code }} ({{ data.title }})</option>*/
/*                     {% endfor %}*/
/*                 </select>*/
/*                 <p class="help-block">{{ language.get('kassa_currency_help') }}</p>*/
/*             </div>*/
/*             <div class="col-sm-5">*/
/*                 <label class="form-check-label">*/
/*                     <input type="checkbox" name="yandex_money_kassa_currency_convert" value="on"*/
/*                            id="currency_convert="*/
/*                            class="form-check-input"{{ kassa.getCurrencyConvert() ? ' checked' : '' }} />*/
/*                     {{ language.get('kassa_currency_convert') }}*/
/*                 </label>*/
/*                 <p class="help-block">{{ language.get('kassa_currency_convert_help') }}</p>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <!-- Sbbol Start-->*/
/* */
/*         <div class="form-group">*/
/*             <label class="col-sm-2 control-label"*/
/*                    for="b2b_sberbank_enabled">{{ language.get('b2b_sberbank_label') }}</label>*/
/*             <div class="col-sm-10">*/
/*                 <input type="checkbox" id="b2b_sberbank_enabled" name="yandex_money_kassa_b2b_sberbank_enabled"*/
/*                        value="on"{{ kassa.getB2bSberbankEnabled() ? ' checked' : '' }} />*/
/*                 {{ language.get('b2b_sberbank_on_label') }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <div class="col-sm-10 col-sm-offset-2">*/
/*                 <div class="form-group">*/
/*                     <label class="col-sm-2 control-label"*/
/*                            for="b2b-sberbank-description-template">{{ language.get('b2b_sberbank_template_label') }}</label>*/
/*                     <div class="col-sm-10">*/
/*                         <input type="text" name="yandex_money_kassa_b2b_sberbank_payment_purpose"*/
/*                                value="{{ kassa.getB2bSberbankPaymentPurpose() }}"*/
/*                                placeholder="{{ language.get('kassa_default_payment_description') }}"*/
/*                                id="_b2b_sberbank_payment_purpose" class="form-control"/>*/
/*                         <p class="help-block">{{ language.get('b2b_sberbank_template_help') }}</p>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="form-group">*/
/*                     <label class="col-sm-2 control-label" for="kassa-tax-rate-default">*/
/*                         {{ language.get('b2b_sberbank_vat_default_label') }}*/
/*                     </label>*/
/*                     <div class="col-sm-10">*/
/*                         <select id="b2b-tax-rate-default" name="yandex_money_kassa_b2b_tax_rate_default"*/
/*                                 class="form-control">*/
/*                             {% for id, name in b2bTaxRates %}*/
/*                                 <option value="{{ id }}"{{ kassa.getB2bSberbankDefaultTaxRate() == id ? ' selected' : '' }}>{{ name }}</option>*/
/*                             {% endfor %}*/
/*                         </select>*/
/*                         <p class="help-block">{{ language.get('b2b_sberbank_vat_default_help') }}</p>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="form-group">*/
/*                     <label class="col-sm-2 control-label">*/
/*                         {{ language.get('b2b_sberbank_vat_label') }}*/
/*                     </label>*/
/*                     <div class="col-sm-10">*/
/*                         <table class="table">*/
/*                             <thead>*/
/*                             <tr>*/
/*                                 <th>{{ language.get('b2b_sberbank_vat_cms_label') }}</th>*/
/*                                 <th>{{ language.get('b2b_sberbank_vat_sbbol_label') }}</th>*/
/*                             </tr>*/
/*                             </thead>*/
/*                             <tbody>*/
/*                             {% for id, name in shopTaxRates %}*/
/*                                 <tr>*/
/*                                     <td>*/
/*                                         <label class="control-label" for="b2b-tax-rate-{{ id }}">{{ name }}</td>*/
/*                                     <td>*/
/*                                         <select id="b2b-tax-rate-{{ id }}"*/
/*                                                 name="yandex_money_kassa_b2b_tax_rates[{{ id }}]"*/
/*                                                 class="form-control">*/
/*                                             {% for taxRateId, taxRateName in b2bTaxRates %}*/
/*                                                 <option value="{{ taxRateId }}"{{ kassa.getB2bTaxRateId(id) == taxRateId ? ' selected' : '' }}>{{ taxRateName }}</option>*/
/*                                             {% endfor %}*/
/*                                         </select>*/
/*                                     </td>*/
/*                                 </tr>*/
/*                             {% endfor %}*/
/*                             </tbody>*/
/*                         </table>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <!-- Sbbol End -->*/
/* */
/* */
/*         <div class="form-group">*/
/*             <div class="col-sm-10 col-sm-offset-2">*/
/*                 <label>*/
/*                     <input type="checkbox" id="kassa-enable-hold-mode"*/
/*                            name="yandex_money_kassa_enable_hold_mode"*/
/*                            value="on" {{ kassa.getEnableHoldMode() ? 'checked' : '' }}/>*/
/*                     {{ language.get('kassa_hold_setting_label') }}*/
/*                 </label>*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 <div class="col-sm-10 col-sm-offset-2">*/
/*                     <div class="statuses-wrapper">*/
/* */
/*                         <div id="kassa-statuses-label" class="col-sm-offset-6 col-sm-6">*/
/*                             <label> {{ language.get('kassa_statuses_description_label') }} </label>*/
/*                         </div>*/
/* */
/*                         <label class="col-sm-6 control-label" for="kassa-hold-order-status">*/
/*                             {{ language.get('kassa_hold_order_status_label') }}*/
/*                         </label>*/
/*                         <div class="col-sm-6" style="margin-bottom: 10px;">*/
/*                             <select id="kassa-hold-order-status" name="yandex_money_kassa_hold_order_status"*/
/*                                     class="form-control">*/
/*                                 {% for id, name in orderStatuses %}*/
/*                                     <option value="{{ id }}"{{ kassa.getHoldOrderStatusId() == id ? ' selected' : '' }}>{{ name }}</option>*/
/*                                 {% endfor %}*/
/*                             </select>*/
/*                         </div>*/
/* */
/*                         <label class="col-sm-6 control-label" for="kassa-cancel-order-status">*/
/*                             {{ language.get('kassa_cancel_order_status_label') }}*/
/*                         </label>*/
/* */
/*                         <div class="col-sm-6">*/
/*                             <select id="kassa-cancel-order-status" name="yandex_money_kassa_cancel_order_status"*/
/*                                     class="form-control">*/
/* */
/*                                 {% for id, name in orderStatuses %}*/
/*                                     <option value="{{ id }}"{{ kassa.getOrderCanceledStatus() == id ? ' selected' : '' }}> {{ name }}</option>*/
/*                                 {% endfor %}*/
/*                             </select>*/
/*                         </div>*/
/* */
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*             <label class="col-sm-2 control-label"*/
/*                    for="kassa-payment-description">{{ language.get('kassa_payment_description_label') }}</label>*/
/*             <div class="col-sm-10">*/
/*                 <input type="text" name="yandex_money_kassa_payment_description"*/
/*                        value="{{ kassa.getPaymentDescription() }}"*/
/*                        placeholder="{{ language.get('kassa_default_payment_description') }}"*/
/*                        id="kassa-payment-description" class="form-control"/>*/
/*                 <p class="help-block">{{ language.get('kassa_payment_description_description') }}</p>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*             <label class="col-sm-2 control-label"*/
/*                    for="kassa-display-name">{{ language.get('kassa_display_name_label') }}</label>*/
/*             <div class="col-sm-10">*/
/*                 <input type="text" name="yandex_money_kassa_display_name" value="{{ kassa.getDisplayName() }}"*/
/*                        placeholder="{{ language.get('kassa_display_name_label') }}" id="kassa-display-name"*/
/*                        class="form-control"/>*/
/*                 <p class="help-block">{{ language.get('kassa_display_name_description') }}</p>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*             <div class="col-sm-10 col-sm-offset-2">*/
/*                 <label>*/
/*                     <input type="checkbox" id="kassa-send-receipt" name="yandex_money_kassa_send_receipt"*/
/*                            value="on"{{ kassa.isSendReceipt() ? ' checked' : '' }} />*/
/*                     {{ language.get('kassa_send_receipt_label') }}*/
/*                 </label>*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <div class="col-sm-10 col-sm-offset-2">*/
/*                 <div class="form-group receipt-only">*/
/*                     <div class="col-sm-10 col-sm-offset-2">*/
/*                         <h4>{{ language.get('kassa_send_receipt_tax_rate_title') }}</h4>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="form-group receipt-only">*/
/*                     <label class="col-sm-2 control-label" for="kassa-tax-rate-default">*/
/*                         {{ language.get('kassa_tax_rate_default_label') }}*/
/*                     </label>*/
/*                     <div class="col-sm-10">*/
/*                         <select id="kassa-tax-rate-default" name="yandex_money_kassa_tax_rate_default"*/
/*                                 class="form-control">*/
/*                             {% for id, name in kassaTaxRates %}*/
/*                                 <option value="{{ id }}"{{ kassa.getDefaultTaxRate() == id ? ' selected' : '' }}>{{ name }}</option>*/
/*                             {% endfor %}*/
/*                         </select>*/
/*                         <p class="help-block">{{ language.get('kassa_tax_rate_default_description') }}</p>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="form-group receipt-only">*/
/*                     <label class="col-sm-2 control-label">*/
/*                         {{ language.get('kassa_tax_rate_table_caption') }}*/
/*                     </label>*/
/*                     <div class="col-sm-10">*/
/*                         <table class="table">*/
/*                             <thead>*/
/*                             <tr>*/
/*                                 <th>{{ language.get('kassa_shop_tax_rate_header') }}</th>*/
/*                                 <th>{{ language.get('kassa_kassa_tax_rate_header') }}</th>*/
/*                             </tr>*/
/*                             </thead>*/
/*                             <tbody>*/
/*                             {% for id, name in shopTaxRates %}*/
/*                                 <tr>*/
/*                                     <td>*/
/*                                         <label class="control-label" for="kassa-tax-rate-{{ id }}">{{ name }}</td>*/
/*                                     <td>*/
/*                                         <select id="kassa-tax-rate-{{ id }}"*/
/*                                                 name="yandex_money_kassa_tax_rates[{{ id }}]"*/
/*                                                 class="form-control">*/
/*                                             {% for taxRateId, taxRateName in kassaTaxRates %}*/
/*                                                 <option value="{{ taxRateId }}"{{ kassa.getTaxRateId(id) == taxRateId ? ' selected' : '' }}>{{ taxRateName }}</option>*/
/*                                             {% endfor %}*/
/*                                         </select>*/
/*                                     </td>*/
/*                                 </tr>*/
/*                             {% endfor %}*/
/*                             </tbody>*/
/*                         </table>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="form-group receipt-only">*/
/*                     <label class="col-sm-2 control-label" for="kassa-tax-rate-default">*/
/*                         {{ language.get('kassa_payment_mode_default_label') }}*/
/*                     </label>*/
/*                     <div class="col-sm-10">*/
/*                         <select id="kassa-payment-mode-default" name="yandex_money_kassa_payment_mode_default"*/
/*                                 class="form-control">*/
/*                             {% for id, name in kassa.getPaymentModeEnum() %}*/
/*                                 <option value="{{ id }}"{{ kassa.getDefaultPaymentMode() == id ? ' selected' : '' }}>{{ name }}</option>*/
/*                             {% endfor %}*/
/*                         </select>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="form-group receipt-only">*/
/*                     <label class="col-sm-2 control-label" for="kassa-tax-rate-default">*/
/*                         {{ language.get('kassa_payment_subject_default_label') }}*/
/*                     </label>*/
/*                     <div class="col-sm-10">*/
/*                         <select id="kassa-tax-rate-default" name="yandex_money_kassa_payment_subject_default"*/
/*                                 class="form-control">*/
/*                             {% for id, name in kassa.getPaymentSubjectEnum() %}*/
/*                                 <option value="{{ id }}"{{ kassa.getDefaultPaymentSubject() == id ? ' selected' : '' }}>{{ name }}</option>*/
/*                             {% endfor %}*/
/*                         </select>*/
/*                     </div>*/
/*                 </div>*/
/*                 <p class="help-block receipt-only">{{ language.get('kassa_payment_subject_default_description') }}</p>*/
/*                 <div class="form-group receipt-only">*/
/* */
/*                     <label class="col-sm-2 control-label">*/
/*                         {{ language.get('kassa_second_receipt_header') }}*/
/*                     </label>*/
/*                     <div class="col-sm-10">*/
/*                         <label style="font-weight: 600; padding-top: 9px; cursor: pointer" class="form-check-label">*/
/*                             <input style="vertical-align:middle;margin:-2px 3px 0 0;cursor: pointer" type="radio" name="yandex_money_kassa_second_receipt_enable" value="1" class="form-check-input" {{ kassa.isSecondReceipt() ? ' checked' : '' }}/>*/
/*                             {{ language.get('kassa_second_receipt_enable') }}*/
/*                         </label>*/
/*                         <label style="font-weight: 600; margin-left: 10px; cursor: pointer" class="form-check-label">*/
/*                             <input style="vertical-align:middle;margin:-2px 3px 0 0;cursor: pointer" type="radio" name="yandex_money_kassa_second_receipt_enable" value="0" class="form-check-input" {{ kassa.isSecondReceipt() ? ' ' : ' checked' }}/>*/
/*                             {{ language.get('kassa_second_receipt_disable') }}*/
/*                         </label>*/
/*                     </div>*/
/*                     <div class="col-sm-10 col-sm-offset-2 second-receipt-wrapper">*/
/*                         <p>{{ language.get('kassa_second_receipt_description') }}</p>*/
/*                         <table class="table table-hover">*/
/*                             <tbody>*/
/*                             <tr>*/
/*                                 <td style="border: none">*/
/*                                     <label class="control-label">*/
/*                                         {{ language.get('kassa_second_receipt_enable_label') }}*/
/*                                     </label>*/
/*                                 </td>*/
/*                                 <td style="border: none">*/
/*                                     <select name="yandex_money_kassa_second_receipt_status" class="form-control col-xl-4 col-md-4" data-toggle="tooltip" data-placement="left" title="">*/
/*                                         {% for id, name in orderStatuses %}*/
/*                                             <option value="{{ id }}"{{ kassa.getSecondReceiptStatus == id ? ' selected' : '' }}>{{ name }}</option>*/
/*                                         {% endfor %}*/
/*                                     </select>*/
/*                                 </td>*/
/*                             </tr>*/
/*                             </tbody>*/
/*                         </table>*/
/* */
/*                         <p class="help-block">{{ language.get('kassa_second_receipt_help_info') }}</p>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <label class="col-sm-2 control-label">Показывать ссылку на сайт Кассы</label>*/
/*             <div class="col-sm-10">*/
/*                 <select id="kassa-debug-log" name="yandex_money_kassa_show_in_footer" class="form-control">*/
/*                     <option value="off"*/
/*                             {% if not kassa.getShowLinkInFooter() %}selected{% endif %}>{{ language.get('kassa_debug_log_off') }}</option>*/
/*                     <option value="on"*/
/*                             {% if kassa.getShowLinkInFooter() %}selected{% endif %}>{{ language.get('kassa_debug_log_on') }}</option>*/
/*                 </select>*/
/*                 <p class="help-block">Ссылка будет отображаться в подвале вашего сайта.</p>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="kassa-notification-url">*/
/*                 {{ language.get('kassa_notification_url_label') }}*/
/*             </label>*/
/*             <div class="col-sm-10">*/
/*                 <input type="text" id="kassa-notification-url" name="kassa_notification_url"*/
/*                        value="{{ notificationUrl }}" class="form-control" disabled/>*/
/*                 <p class="help-block">{{ language.get('kassa_notification_url_description') }}</p>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*             <div class="col-sm-10 col-sm-offset-2">*/
/*                 <label>*/
/*                     <input type="checkbox" id="kassa-invoice" name="yandex_money_kassa_invoice"*/
/*                            value="on"{{ kassa.isInvoicesEnabled() ? ' checked' : '' }} />*/
/*                     {{ language.get('kassa_invoice_label') }}*/
/*                 </label>*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group invoice-only">*/
/*             <label class="col-sm-2 control-label">{{ language.get('kassa_invoice_heading_label') }}</label>*/
/*             <label class="col-sm-2 control-label" for="kassa-invoice-subject">*/
/*                 {{ language.get('kassa_invoice_subject_label') }}*/
/*             </label>*/
/*             <div class="col-sm-8">*/
/*                 <input type="text" id="kassa-invoice-subject" name="yandex_money_kassa_invoice_subject"*/
/*                        value="{{ kassa.getInvoiceSubject() }}" class="form-control"/>*/
/*                 <p class="help-block">{{ language.get('kassa_invoice_subject_description') }}</p>*/
/*             </div>*/
/*             <label class="col-sm-2 col-sm-offset-2 control-label" for="kassa-invoice-message">*/
/*                 {{ language.get('kassa_invoice_message_label') }}*/
/*             </label>*/
/*             <div class="col-sm-8">*/
/*                 <textarea id="kassa-invoice-message" name="yandex_money_kassa_invoice_message"*/
/*                           class="form-control">{{ kassa.getInvoiceMessage() }}</textarea>*/
/*                 <p class="help-block">{{ language.get('kassa_invoice_message_description') }}</p>*/
/*             </div>*/
/*             <div class="col-sm-10 col-sm-offset-4">*/
/*                 <label>*/
/*                     <input type="checkbox" id="kassa-invoice-logo" name="yandex_money_kassa_invoice_logo"*/
/*                            value="on"{{ kassa.getSendInvoiceLogo() ? ' checked' : '' }} />*/
/*                     {{ language.get('kassa_invoice_logo_label') }}*/
/*                 </label>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*             <div class="col-sm-2 control-label"><strong>{{ language.get('kassa_before_redirect_label') }}</strong></div>*/
/*             <div class="col-sm-10">*/
/*                 <label>*/
/*                     <input type="checkbox" name="yandex_money_kassa_create_order_before_redirect"*/
/*                            id="yandex_money_kassa_create_order_before_redirect"*/
/*                            value="on" {% if kassa.getCreateOrderBeforeRedirect() %}checked{% endif %} />*/
/*                     {{ language.get('kassa_create_order_label') }}*/
/*                 </label><br/>*/
/*                 <label>*/
/*                     <input type="checkbox" name="yandex_money_kassa_clear_cart_before_redirect"*/
/*                            id="yandex_money_kassa_clear_cart_before_redirect"*/
/*                            value="on" {% if kassa.getClearCartBeforeRedirect() %}checked{% endif %} />*/
/*                     {{ language.get('kassa_clear_cart_label') }}*/
/*                 </label>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="kassa-success-order-status">*/
/*                 {{ language.get('kassa_success_order_status_label') }}*/
/*             </label>*/
/*             <div class="col-sm-10">*/
/*                 <select id="kassa-success-order-status" name="yandex_money_kassa_success_order_status"*/
/*                         class="form-control">*/
/*                     {% for id, name in orderStatuses %}*/
/*                         <option value="{{ id }}"{{ kassa.getSuccessOrderStatusId() == id ? ' selected' : '' }}>{{ name }}</option>*/
/*                     {% endfor %}*/
/*                 </select>*/
/*                 <p class="help-block">{{ language.get('kassa_success_order_status_description') }}</p>*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="kassa-min-payment-amount">*/
/*                 {{ language.get('kassa_minimum_payment_amount_label') }}*/
/*             </label>*/
/*             <div class="col-sm-10">*/
/*                 <input type="text" id="kassa-min-payment-amount" name="yandex_money_kassa_minimum_payment_amount"*/
/*                        value="{{ kassa.getMinPaymentAmount() }}" class="form-control"/>*/
/*                 <p class="help-block">{{ language.get('kassa_minimum_payment_amount_description') }}</p>*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="kassa-geo-zone">*/
/*                 {{ language.get('kassa_geo_zone_label') }}*/
/*             </label>*/
/*             <div class="col-sm-10">*/
/*                 <select id="kassa-geo-zone" name="yandex_money_kassa_geo_zone" class="form-control">*/
/*                     <option value="0"{{ kassa.getGeoZoneId() == 0 ? ' selected' : '' }}>{{ language.get('kassa_any_geo_zone') }}</option>*/
/*                     {% for id, name in geoZones %}*/
/*                         <option value="{{ id }}"{{ kassa.getGeoZoneId() == id ? ' selected' : '' }}>{{ name }}</option>*/
/*                     {% endfor %}*/
/*                 </select>*/
/*                 <p class="help-block">{{ language.get('kassa_geo_zone_description') }}</p>*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="kassa-debug-log">*/
/*                 {{ language.get('kassa_debug_log_label') }}*/
/*             </label>*/
/*             <div class="col-sm-10">*/
/*                 <select id="kassa-debug-log" name="yandex_money_kassa_debug_log" class="form-control">*/
/*                     <option value="off"{{ kassa.getDebugLog() ? '' : ' selected' }}>{{ language.get('kassa_debug_log_off') }}</option>*/
/*                     <option value="on"{{ kassa.getDebugLog() ? ' selected' : '' }}>{{ language.get('kassa_debug_log_on') }}</option>*/
/*                 </select>*/
/*                 <p class="help-block">{{ language.get('kassa_debug_log_description') }}</p>*/
/*                 <p class="help-block"><a href="{{ kassa_logs_link }}">{{ language.get('kassa_view_logs') }}</a></p>*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <label class="col-sm-2 control-label">{{ language.get('kassa_payment_list_label') }}</label>*/
/*             <div class="col-sm-9">*/
/*                 <p class="help-block"><a*/
/*                             href="{{ kassa_payments_link }}">{{ language.get('kassa_payment_list_link') }}</a></p>*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="kassa-sort-order">*/
/*                 {{ language.get('kassa_sort_order_label') }}*/
/*             </label>*/
/*             <div class="col-sm-10">*/
/*                 <input type="text" id="kassa-sort-order" name="yandex_money_kassa_sort_order"*/
/*                        value="{{ yandex_money_kassa_sort_order }}" class="form-control"/>*/
/*                 <p class="help-block">{{ language.get('kassa_sort_order_description') }}</p>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* <script type="text/javascript">*/
/* */
/*     jQuery(document).ready(function () {*/
/* */
/*         function togglePaymentMode(value) {*/
/*             if (value == 'kassa') {*/
/*                 jQuery('#kassa-payment-mode-kassa-container').slideDown();*/
/*                 jQuery('#kassa-payment-mode-shop-container').slideUp();*/
/*             } else {*/
/*                 jQuery('#kassa-payment-mode-kassa-container').slideUp();*/
/*                 jQuery('#kassa-payment-mode-shop-container').slideDown();*/
/*             }*/
/*         }*/
/* */
/*         function toggleSendReceipt(value) {*/
/*             if (value) {*/
/*                 jQuery('.receipt-only').slideDown();*/
/*             } else {*/
/*                 jQuery('.receipt-only').slideUp();*/
/*             }*/
/*         }*/
/* */
/*         function toggleSecondReceipt(value) {*/
/*             if (value == 1) {*/
/*                 jQuery('.second-receipt-wrapper').slideDown();*/
/*             } else {*/
/*                 jQuery('.second-receipt-wrapper').slideUp();*/
/*             }*/
/*         }*/
/* */
/*         function toggleInvoice(value) {*/
/*             if (value) {*/
/*                 jQuery('.invoice-only').slideDown();*/
/*             } else {*/
/*                 jQuery('.invoice-only').slideUp();*/
/*             }*/
/*         }*/
/* */
/*         function toggleStatuses(value) {*/
/*             if (value) {*/
/*                 jQuery('.statuses-wrapper').slideDown();*/
/*             } else {*/
/*                 jQuery('.statuses-wrapper').slideUp();*/
/*             }*/
/*         }*/
/* */
/*         var form = document.getElementById('form-payment-yandex-money');*/
/*         togglePaymentMode(form.yandex_money_kassa_payment_mode.value);*/
/*         toggleSendReceipt(form.yandex_money_kassa_send_receipt.checked);*/
/*         toggleSecondReceipt(form.yandex_money_kassa_second_receipt_enable.value);*/
/*         toggleInvoice(form.yandex_money_kassa_invoice.checked);*/
/* */
/*         jQuery('#kassa-enable-hold-mode').bind('change', function () {*/
/*             toggleStatuses(this.checked);*/
/*         });*/
/* */
/*         jQuery('input[name=yandex_money_kassa_payment_mode]').click(function () {*/
/*             togglePaymentMode(form.yandex_money_kassa_payment_mode.value)*/
/*         });*/
/* */
/*         jQuery('#kassa-send-receipt').bind('change', function () {*/
/*             toggleSendReceipt(this.checked);*/
/*         });*/
/* */
/*         jQuery('input[name=yandex_money_kassa_second_receipt_enable]').bind('change', function () {*/
/*             toggleSecondReceipt(this.value);*/
/*         });*/
/* */
/*         jQuery('#kassa-invoice').bind('change', function () {*/
/*             toggleInvoice(this.checked);*/
/*         });*/
/* */
/*         jQuery('input[name=yandex_money_kassa_add_installments_block]').on('change', function () {*/
/*             var checked = this.checked;*/
/*             jQuery('input[name=yandex_money_kassa_add_installments_block]').each(function () {*/
/*                 this.checked = checked;*/
/*             });*/
/*         });*/
/*     });*/
/* */
/* </script>*/
