<?php

/* default/template/extension/quickcheckout/checkout.twig */
class __TwigTemplate_1e25e7c924e7fb5c5d9b3f4d57b4c997bf6f872e47e066591581deece5104d8e extends Twig_Template
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
        echo "
<div class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            echo " 
    <li><a href=\"";
            // line 5
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo " 
  </ul>
  <div class=\"row\">";
        // line 8
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo " 
    ";
        // line 9
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 10
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 11
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 12
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 13
            echo "    ";
        } else {
            echo "   
    ";
            // line 14
            $context["class"] = "col-sm-12";
            // line 15
            echo "    ";
        }
        // line 16
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      <div class=\"category-head\">
        <h1 class=\"main-underline\">";
        // line 18
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      </div>
\t  ";
        // line 20
        if (false) {
            // line 21
            echo "\t  <!-- FontAwesome for themes that require it -->
\t  <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css\">
\t  ";
        }
        // line 24
        echo "\t  <div id=\"warning-messages\">
\t  \t";
        // line 25
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 26
            echo "\t\t  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
\t\t    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t  </div>
\t\t";
        }
        // line 30
        echo "\t  </div>
\t  <div id=\"success-messages\"></div>
\t  ";
        // line 32
        if ((isset($context["mobile_stylesheet"]) ? $context["mobile_stylesheet"] : null)) {
            // line 33
            echo "\t  <link rel=\"stylesheet\" media=\"screen and (min-width: 701px) and (max-width: 99999px)\" href=\"";
            echo (isset($context["stylesheet"]) ? $context["stylesheet"] : null);
            echo "\" />
\t  <link rel=\"stylesheet\" media=\"screen and (min-width: 1px) and (max-width: 700px)\" href=\"";
            // line 34
            echo (isset($context["mobile_stylesheet"]) ? $context["mobile_stylesheet"] : null);
            echo "\" />
\t  ";
        } else {
            // line 35
            echo "   
\t  <link rel=\"stylesheet\" href=\"";
            // line 36
            echo (isset($context["stylesheet"]) ? $context["stylesheet"] : null);
            echo "\" />
\t  ";
        }
        // line 38
        echo "
\t  ";
        // line 39
        if ((isset($context["html_header"]) ? $context["html_header"] : null)) {
            echo " 
\t  ";
            // line 40
            echo (isset($context["html_header"]) ? $context["html_header"] : null);
            echo " 
\t  ";
        }
        // line 41
        echo " 

\t  <div id=\"quickcheckoutconfirm\">
\t  \t";
        // line 44
        if (((isset($context["quickcheckout_layout"]) ? $context["quickcheckout_layout"] : null) == "4")) {
            echo " 
\t\t\t<div class=\"qc-col-0\">
\t\t\t\t";
            // line 46
            if (( !(isset($context["logged"]) ? $context["logged"] : null) && (isset($context["login_module"]) ? $context["login_module"] : null))) {
                echo " 
\t\t\t\t\t<div class=\"qc-step\" data-col=\"";
                // line 47
                echo $this->getAttribute($this->getAttribute((isset($context["step"]) ? $context["step"] : null), "login", array(), "array"), "column", array(), "array");
                echo "\" data-row=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["step"]) ? $context["step"] : null), "login", array(), "array"), "row", array(), "array");
                echo "\">
\t\t\t\t\t  <div id=\"login-box\">
\t\t\t\t\t\t<div id=\"checkout\">
\t\t\t\t\t\t  <div class=\"quickcheckout-heading\"><i class=\"fa fa-sign-in\"></i> ";
                // line 50
                echo (isset($context["text_checkout_option"]) ? $context["text_checkout_option"] : null);
                echo "</div>
\t\t\t\t\t\t  <div class=\"quickcheckout-content\">";
                // line 51
                echo (isset($context["login"]) ? $context["login"] : null);
                echo "</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"or\">";
                // line 53
                echo (isset($context["text_or"]) ? $context["text_or"] : null);
                echo "</div>
\t\t\t\t\t </div>
\t\t\t\t\t </div>
\t\t\t\t";
            }
            // line 56
            echo " 
\t\t\t\t
\t\t\t\t<div class=\"qc-step\" data-col=\"";
            // line 58
            echo $this->getAttribute($this->getAttribute((isset($context["step"]) ? $context["step"] : null), "payment_address", array(), "array"), "column", array(), "array");
            echo "\" data-row=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["step"]) ? $context["step"] : null), "payment_address", array(), "array"), "row", array(), "array");
            echo "\">
\t\t\t\t\t<div id=\"payment-address\">
\t\t\t\t\t  <div class=\"quickcheckout-heading\"><i class=\"fa fa-user\"></i> ";
            // line 60
            echo (( !(isset($context["logged"]) ? $context["logged"] : null)) ? ((isset($context["text_checkout_account"]) ? $context["text_checkout_account"] : null)) : ((isset($context["text_checkout_payment_address"]) ? $context["text_checkout_payment_address"] : null)));
            echo "</div>
\t\t\t\t\t  <div class=\"quickcheckout-content\">";
            // line 61
            echo (((isset($context["guest"]) ? $context["guest"] : null)) ? ((isset($context["guest"]) ? $context["guest"] : null)) : ((isset($context["payment_address"]) ? $context["payment_address"] : null)));
            echo "</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t";
            // line 65
            if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
                echo " 
\t\t\t\t<div class=\"qc-step ";
                // line 66
                if ( !(isset($context["show_shipping_address"]) ? $context["show_shipping_address"] : null)) {
                    echo "hidden";
                }
                echo "\" data-col=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["step"]) ? $context["step"] : null), "shipping_address", array(), "array"), "column", array(), "array");
                echo "\" data-row=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["step"]) ? $context["step"] : null), "shipping_address", array(), "array"), "row", array(), "array");
                echo "\">
\t\t\t\t\t<div id=\"shipping-address\">
\t\t\t\t\t  <div class=\"quickcheckout-heading\"><i class=\"fa fa-user\"></i> ";
                // line 68
                echo (isset($context["text_checkout_shipping_address"]) ? $context["text_checkout_shipping_address"] : null);
                echo "</div>
\t\t\t\t\t  <div class=\"quickcheckout-content\">";
                // line 69
                echo (((isset($context["shipping_address"]) ? $context["shipping_address"] : null)) ? ((isset($context["shipping_address"]) ? $context["shipping_address"] : null)) : (""));
                echo "</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
            }
            // line 72
            echo " 

\t\t\t\t";
            // line 74
            if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
                echo " 
\t\t\t\t<div class=\"qc-step ";
                // line 75
                if ( !(isset($context["shipping_module"]) ? $context["shipping_module"] : null)) {
                    echo "hidden";
                }
                echo "\" data-col=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["step"]) ? $context["step"] : null), "shipping_method", array(), "array"), "column", array(), "array");
                echo "\" data-row=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["step"]) ? $context["step"] : null), "shipping_method", array(), "array"), "row", array(), "array");
                echo "\">
\t\t\t\t\t<div id=\"shipping-method\">
\t\t\t\t\t  <div class=\"quickcheckout-heading\"><i class=\"fa fa-truck\"></i> ";
                // line 77
                echo (isset($context["text_checkout_shipping_method"]) ? $context["text_checkout_shipping_method"] : null);
                echo "</div>
\t\t\t\t\t  <div class=\"quickcheckout-content\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
            }
            // line 82
            echo "
\t\t\t\t<div class=\"qc-step ";
            // line 83
            if ( !(isset($context["payment_module"]) ? $context["payment_module"] : null)) {
                echo "hidden";
            }
            echo "\" data-col=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["step"]) ? $context["step"] : null), "payment_method", array(), "array"), "column", array(), "array");
            echo "\" data-row=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["step"]) ? $context["step"] : null), "payment_method", array(), "array"), "row", array(), "array");
            echo "\">
\t\t\t\t\t<div id=\"payment-method\">
\t\t\t\t\t  <div class=\"quickcheckout-heading\"><i class=\"fa fa-credit-card\"></i> ";
            // line 85
            echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
            echo "</div>
\t\t\t\t\t  <div class=\"quickcheckout-content\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t";
            // line 90
            if ((isset($context["cart_module"]) ? $context["cart_module"] : null)) {
                echo " 
\t\t\t\t<div class=\"qc-step\" data-col=\"";
                // line 91
                echo $this->getAttribute($this->getAttribute((isset($context["step"]) ? $context["step"] : null), "cart", array(), "array"), "column", array(), "array");
                echo "\" data-row=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["step"]) ? $context["step"] : null), "cart", array(), "array"), "row", array(), "array");
                echo "\">
\t\t\t\t  <div id=\"cart1\">
\t\t\t\t\t<div class=\"quickcheckout-content\" style=\"border:none; padding: 0px;\"></div>
\t\t\t\t  </div>
\t\t\t\t</div> 
\t\t\t\t";
            }
            // line 97
            echo "
\t\t\t\t";
            // line 98
            if ((((isset($context["voucher_module"]) ? $context["voucher_module"] : null) || (isset($context["coupon_module"]) ? $context["coupon_module"] : null)) || (isset($context["reward_module"]) ? $context["reward_module"] : null))) {
                echo " 
\t\t\t\t<div class=\"qc-step\" data-col=\"";
                // line 99
                echo $this->getAttribute($this->getAttribute((isset($context["step"]) ? $context["step"] : null), "coupons", array(), "array"), "column", array(), "array");
                echo "\" data-row=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["step"]) ? $context["step"] : null), "coupons", array(), "array"), "row", array(), "array");
                echo "\">
\t\t\t\t  <div id=\"voucher\">
\t\t\t\t\t<div class=\"quickcheckout-content\" style=\"border:none; padding: 0px;overflow: hidden;\">";
                // line 101
                echo (isset($context["voucher"]) ? $context["voucher"] : null);
                echo "</div>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t\t";
            }
            // line 105
            echo "\t\t\t\t
\t\t\t\t<div class=\"qc-step\" data-col=\"";
            // line 106
            echo $this->getAttribute($this->getAttribute((isset($context["step"]) ? $context["step"] : null), "confirm", array(), "array"), "column", array(), "array");
            echo "\" data-row=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["step"]) ? $context["step"] : null), "confirm", array(), "array"), "row", array(), "array");
            echo "\">
\t\t\t\t\t<div id=\"terms\">
\t\t\t\t\t\t<div class=\"quickcheckout-content text-right\">";
            // line 108
            echo (isset($context["terms"]) ? $context["terms"] : null);
            echo "</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"qc-col-1 col-md-";
            // line 113
            echo $this->getAttribute((isset($context["column"]) ? $context["column"] : null), 1, array(), "array");
            echo "\">
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-";
            // line 115
            echo $this->getAttribute((isset($context["column"]) ? $context["column"] : null), 4, array(), "array");
            echo "\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"qc-col-2 col-md-";
            // line 117
            if ($this->getAttribute((isset($context["column"]) ? $context["column"] : null), 4, array(), "array")) {
                echo twig_round((($this->getAttribute((isset($context["column"]) ? $context["column"] : null), 2, array(), "array") / $this->getAttribute((isset($context["column"]) ? $context["column"] : null), 4, array(), "array")) * 12), 0, "floor");
            } else {
                echo "0";
            }
            echo "\">
\t\t    \t\t\t</div>
\t\t    \t\t\t<div class=\"qc-col-3 col-md-";
            // line 119
            if ($this->getAttribute((isset($context["column"]) ? $context["column"] : null), 4, array(), "array")) {
                echo (12 - twig_round((($this->getAttribute((isset($context["column"]) ? $context["column"] : null), 2, array(), "array") / $this->getAttribute((isset($context["column"]) ? $context["column"] : null), 4, array(), "array")) * 12), 0, "floor"));
            } else {
                echo "0";
            }
            echo "\">
\t\t    \t\t\t</div>
\t\t\t\t\t\t<div class=\"qc-col-4 col-md-12\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<script>
\t\t\t\$(function() {
\t\t\t\t\$('.qc-step').each(function(){
\t\t\t\t\t\$(this).appendTo('.qc-col-' + \$(this).attr('data-col'));\t
\t\t\t\t})
\t\t\t\t\$('.qc-step').tsort({attr:'data-row'});
\t\t\t})
\t\t\t</script>

\t\t";
        } else {
            // line 137
            echo "
\t\t\t<div id=\"quickcheckout-disable\">
\t\t\t  ";
            // line 139
            if (( !(isset($context["logged"]) ? $context["logged"] : null) && (isset($context["login_module"]) ? $context["login_module"] : null))) {
                echo " 
\t\t\t  <div class=\"quickcheckoutmid\" id=\"login-box\">
\t\t\t\t<div id=\"checkout\">
\t\t\t\t  <div class=\"quickcheckout-heading\"><i class=\"fa fa-sign-in\"></i> ";
                // line 142
                echo (isset($context["text_checkout_option"]) ? $context["text_checkout_option"] : null);
                echo "</div>
\t\t\t\t  <div class=\"quickcheckout-content\">";
                // line 143
                echo (isset($context["login"]) ? $context["login"] : null);
                echo "</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"or\">";
                // line 145
                echo (isset($context["text_or"]) ? $context["text_or"] : null);
                echo "</div>
\t\t\t  </div>
\t\t\t  ";
            }
            // line 147
            echo " 
\t\t\t  <div class=\"quickcheckoutleft\">
\t\t\t\t<div id=\"payment-address\">
\t\t\t\t  <div class=\"quickcheckout-heading\"><i class=\"fa fa-user\"></i> ";
            // line 150
            echo (( !(isset($context["logged"]) ? $context["logged"] : null)) ? ((isset($context["text_checkout_account"]) ? $context["text_checkout_account"] : null)) : ((isset($context["text_checkout_payment_address"]) ? $context["text_checkout_payment_address"] : null)));
            echo "</div>
\t\t\t\t  <div class=\"quickcheckout-content\">";
            // line 151
            echo (((isset($context["guest"]) ? $context["guest"] : null)) ? ((isset($context["guest"]) ? $context["guest"] : null)) : ((isset($context["payment_address"]) ? $context["payment_address"] : null)));
            echo "</div>
\t\t\t\t</div>
\t\t\t\t";
            // line 153
            if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
                echo " 
\t\t\t\t<div id=\"shipping-address\" ";
                // line 154
                if ( !(isset($context["show_shipping_address"]) ? $context["show_shipping_address"] : null)) {
                    echo "class=\"hidden\"";
                }
                echo ">
\t\t\t\t  <div class=\"quickcheckout-heading\"><i class=\"fa fa-user\"></i> ";
                // line 155
                echo (isset($context["text_checkout_shipping_address"]) ? $context["text_checkout_shipping_address"] : null);
                echo "</div>
\t\t\t\t  <div class=\"quickcheckout-content\">";
                // line 156
                echo (((isset($context["shipping_address"]) ? $context["shipping_address"] : null)) ? ((isset($context["shipping_address"]) ? $context["shipping_address"] : null)) : (""));
                echo "</div>
\t\t\t\t</div>
\t\t\t\t";
            }
            // line 158
            echo " 
\t\t\t  </div>
\t\t\t  <div class=\"quickcheckoutright\">
\t\t\t\t";
            // line 161
            if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
                echo " 
\t\t\t\t<div id=\"shipping-method\" ";
                // line 162
                if ( !(isset($context["shipping_module"]) ? $context["shipping_module"] : null)) {
                    echo "class=\"hidden\"";
                }
                echo ">
\t\t\t\t  <div class=\"quickcheckout-heading\"><i class=\"fa fa-truck\"></i> ";
                // line 163
                echo (isset($context["text_checkout_shipping_method"]) ? $context["text_checkout_shipping_method"] : null);
                echo "</div>
\t\t\t\t  <div class=\"quickcheckout-content\"></div>
\t\t\t\t</div>
\t\t\t\t";
            }
            // line 167
            echo "\t\t\t\t<div id=\"payment-method\" ";
            if ( !(isset($context["payment_module"]) ? $context["payment_module"] : null)) {
                echo "class=\"hidden\"";
            }
            echo ">
\t\t\t\t  <div class=\"quickcheckout-heading\"><i class=\"fa fa-credit-card\"></i> ";
            // line 168
            echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
            echo "</div>
\t\t\t\t  <div class=\"quickcheckout-content\"></div>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t  ";
            // line 172
            if (((isset($context["quickcheckout_layout"]) ? $context["quickcheckout_layout"] : null) == "2")) {
                echo " 
\t\t\t\t<div class=\"quickcheckoutleft\">
\t\t\t\t  ";
                // line 174
                if ((isset($context["cart_module"]) ? $context["cart_module"] : null)) {
                    echo " 
\t\t\t\t  <div id=\"cart1\">
\t\t\t\t\t<div class=\"quickcheckout-content\" style=\"border:none; padding: 0px;\"></div>
\t\t\t\t  </div>
\t\t\t\t  ";
                }
                // line 179
                echo "\t\t\t\t</div>
\t\t\t\t<div style=\"clear:right;\"></div>
\t\t\t\t<div class=\"quickcheckoutright\">
\t\t\t\t  ";
                // line 182
                if ((((isset($context["voucher_module"]) ? $context["voucher_module"] : null) || (isset($context["coupon_module"]) ? $context["coupon_module"] : null)) || (isset($context["reward_module"]) ? $context["reward_module"] : null))) {
                    echo " 
\t\t\t\t  <div id=\"voucher\">
\t\t\t\t\t<div class=\"quickcheckout-content\" style=\"border:none; padding: 0px;overflow: hidden;\">";
                    // line 184
                    echo (isset($context["voucher"]) ? $context["voucher"] : null);
                    echo "</div>
\t\t\t\t  </div>
\t\t\t\t  ";
                }
                // line 187
                echo "\t\t\t\t</div>
\t\t\t  ";
            } elseif (((            // line 188
(isset($context["quickcheckout_layout"]) ? $context["quickcheckout_layout"] : null) == "1") || ((isset($context["quickcheckout_layout"]) ? $context["quickcheckout_layout"] : null) == "3"))) {
                // line 189
                echo "\t\t\t\t";
                if (((((isset($context["cart_module"]) ? $context["cart_module"] : null) || (isset($context["voucher_module"]) ? $context["voucher_module"] : null)) || (isset($context["coupon_module"]) ? $context["coupon_module"] : null)) || (isset($context["reward_module"]) ? $context["reward_module"] : null))) {
                    // line 190
                    echo "\t\t\t\t<div class=\"quickcheckoutleft extra-width\">
\t\t\t\t  ";
                    // line 191
                    if ((isset($context["cart_module"]) ? $context["cart_module"] : null)) {
                        // line 192
                        echo "\t\t\t\t  <div id=\"cart1\">
\t\t\t\t\t<div class=\"quickcheckout-content\" style=\"border:none; padding: 0px;\"></div>
\t\t\t\t  </div>
\t\t\t\t  ";
                    }
                    // line 196
                    echo "\t\t\t\t  ";
                    if ((((isset($context["voucher_module"]) ? $context["voucher_module"] : null) || (isset($context["coupon_module"]) ? $context["coupon_module"] : null)) || (isset($context["reward_module"]) ? $context["reward_module"] : null))) {
                        // line 197
                        echo "\t\t\t\t  <div id=\"voucher\">
\t\t\t\t\t<div class=\"quickcheckout-content\" style=\"border:none; padding: 0px;overflow: hidden;\">";
                        // line 198
                        echo (isset($context["voucher"]) ? $context["voucher"] : null);
                        echo "</div>
\t\t\t\t  </div>
\t\t\t\t  ";
                    }
                    // line 201
                    echo "\t\t\t\t</div>
\t\t\t\t";
                }
                // line 202
                echo " 
\t\t\t  ";
            }
            // line 204
            echo "\t\t\t  <div style=\"clear: both;\"></div>
\t\t\t</div>

\t\t\t<div class=\"quickcheckoutmid\">
\t\t\t  <div id=\"terms\">
\t\t\t\t<div class=\"quickcheckout-content text-right\">";
            // line 209
            echo (isset($context["terms"]) ? $context["terms"] : null);
            echo "</div>
\t\t\t  </div>
\t\t\t</div>

\t\t";
        }
        // line 214
        echo "
\t  </div>

\t  ";
        // line 217
        if ((isset($context["html_footer"]) ? $context["html_footer"] : null)) {
            // line 218
            echo "\t  ";
            echo (isset($context["html_footer"]) ? $context["html_footer"] : null);
            echo "
\t  ";
        }
        // line 220
        echo "
\t";
        // line 221
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
  ";
        // line 222
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>

";
        // line 225
        if ((isset($context["custom_css"]) ? $context["custom_css"] : null)) {
            // line 226
            echo "<style type=\"text/css\">
";
            // line 227
            echo (isset($context["custom_css"]) ? $context["custom_css"] : null);
            echo "
</style>
";
        }
        // line 229
        echo " 
<script type=\"text/javascript\"><!--
";
        // line 231
        if ((isset($context["load_screen"]) ? $context["load_screen"] : null)) {
            echo " 
\$(window).load(function() {
    \$.blockUI({
\t\tmessage: '<h1 style=\"color:#ffffff;\">";
            // line 234
            echo (isset($context["text_please_wait"]) ? $context["text_please_wait"] : null);
            echo "</h1>',
\t\tcss: {
\t\t\tborder: 'none',
\t\t\tpadding: '15px',
\t\t\tbackgroundColor: '#000000',
\t\t\t'-webkit-border-radius': '10px',
\t\t\t'-moz-border-radius': '10px',
\t\t\t'-khtml-border-radius': '10px',
\t\t\t'border-radius': '10px',
\t\t\topacity: .8,
\t\t\tcolor: '#ffffff'
\t\t}
\t});
\t
\tsetTimeout(function() {
\t\t\$.unblockUI();
\t}, 2000);
});
";
        }
        // line 252
        echo " 

";
        // line 254
        if ( !(isset($context["logged"]) ? $context["logged"] : null)) {
            // line 255
            echo "\t";
            if ((isset($context["save_data"]) ? $context["save_data"] : null)) {
                // line 256
                echo "\t// Save form data
\t\$(document).on('change', '#payment-address input[type=\\'text\\'], #payment-address select', function() {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=extension/quickcheckout/checkout/save&type=payment',
\t\t\ttype: 'post',
\t\t\tdata: \$('#payment-address input[type=\\'text\\'], #payment-address input[type=\\'password\\'], #payment-address input[type=\\'checkbox\\']:checked, #payment-address input[type=\\'radio\\']:checked, #payment-address input[type=\\'hidden\\'], #payment-address select, #payment-address textarea'),
\t\t\tdataType: 'json',
\t\t\tcache: false,
\t\t\tsuccess: function(json) {
\t\t\t\t// No action needed
\t\t\t},
\t\t\t";
                // line 267
                if ((isset($context["debug"]) ? $context["debug"] : null)) {
                    echo " 
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t\t";
                }
                // line 271
                echo " 
\t\t});
\t});

\t\$(document).on('change', '#shipping-address input[type=\\'text\\'], #shipping-address select', function() {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=extension/quickcheckout/checkout/save&type=shipping',
\t\t\ttype: 'post',
\t\t\tdata: \$('#shipping-address input[type=\\'text\\'], #shipping-address input[type=\\'password\\'], #shipping-address input[type=\\'checkbox\\']:checked, #shipping-address input[type=\\'radio\\']:checked, #shipping-address input[type=\\'hidden\\'], #shipping-address select, #shipping-address textarea'),
\t\t\tdataType: 'json',
\t\t\tcache: false,
\t\t\tsuccess: function(json) {
\t\t\t\t// No action needed
\t\t\t},
\t\t\t";
                // line 285
                if ((isset($context["debug"]) ? $context["debug"] : null)) {
                    echo " 
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t\t";
                }
                // line 289
                echo " 
\t\t});
\t});
\t";
            }
            // line 292
            echo " 
\t
\t";
            // line 294
            if ((isset($context["login_module"]) ? $context["login_module"] : null)) {
                echo " 
\t// Login Form Clicked
\t\$(document).on('click', '#button-login', function() {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=extension/quickcheckout/login/validate',
\t\t\ttype: 'post',
\t\t\tdata: \$('#checkout #login :input'),
\t\t\tdataType: 'json',
\t\t\tcache: false,
\t\t\tbeforeSend: function() {
\t\t\t\t\$('#button-login').prop('disabled', true);
\t\t\t\t\$('#button-login').button('loading');
\t\t\t},
\t\t\tcomplete: function() {
\t\t\t\t\$('#button-login').prop('disabled', false);
\t\t\t\t\$('#button-login').button('reset');
\t\t\t},
\t\t\tsuccess: function(json) {
\t\t\t\t\$('.alert').remove();

\t\t\t\tif (json['redirect']) {
\t\t\t\t\tlocation = json['redirect'];
\t\t\t\t} else if (json['error']) {
\t\t\t\t\t\$('#warning-messages').prepend('<div class=\"alert alert-danger\" style=\"display: none;\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '</div>');
\t\t\t\t\t
\t\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');
\t\t\t\t\t
\t\t\t\t\t\$('.alert-danger').fadeIn('slow');
\t\t\t\t}
\t\t\t},
\t\t\t";
                // line 324
                if ((isset($context["debug"]) ? $context["debug"] : null)) {
                    echo " 
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t\t";
                }
                // line 328
                echo " 
\t\t});
\t});
\t";
            }
            // line 331
            echo " 

// Validate Register
function validateRegister() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/quickcheckout/register/validate',
\t\ttype: 'post',
\t\tdata: \$('#payment-address input[type=\\'text\\'], #payment-address input[type=\\'password\\'], #payment-address input[type=\\'checkbox\\']:checked, #payment-address input[type=\\'radio\\']:checked, #payment-address input[type=\\'hidden\\'], #payment-address select, #payment-address textarea'),
\t\tdataType: 'json',
\t\tcache: false,
\t\tsuccess: function(json) {
\t\t\t\$('.alert, .text-danger').remove();

\t\t\tif (json['redirect']) {
\t\t\t\tlocation = json['redirect'];
\t\t\t} else if (json['error']) {
\t\t\t\t\$('#button-payment-method').prop('disabled', false);
\t\t\t\t\$('#button-payment-method').button('reset');
\t\t\t\t\$('#terms input[type=\\'checkbox\\']').prop('checked', false);
\t\t\t\t
\t\t\t\t\$('.fa-spinner').remove();
\t\t\t\t
\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');
\t\t\t\t\t\t\t
\t\t\t\tif (json['error']['warning']) {
\t\t\t\t\t\$('#warning-messages').prepend('<div class=\"alert alert-danger\" style=\"display: none;\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '</div>');
\t\t\t\t\t
\t\t\t\t\t\$('.alert-danger').fadeIn('slow');
\t\t\t\t}

\t\t\t\t";
            // line 361
            if ((isset($context["text_error"]) ? $context["text_error"] : null)) {
                echo " 
\t\t\t\t\tif (json['error']['password']) {
\t\t\t\t\t\t\$('#payment-address input[name=\\'password\\']').after('<div class=\"text-danger\">' + json['error']['password'] + '</div>');
\t\t\t\t\t}

\t\t\t\t\tif (json['error']['confirm']) {
\t\t\t\t\t\t\$('#payment-address input[name=\\'confirm\\']').after('<div class=\"text-danger\">' + json['error']['confirm'] + '</div>');
\t\t\t\t\t}
\t\t\t\t";
            }
            // line 369
            echo " 
\t\t\t\t";
            // line 370
            if ((isset($context["highlight_error"]) ? $context["highlight_error"] : null)) {
                echo " 
\t\t\t\t\tif (json['error']['password']) {
\t\t\t\t\t\t\$('#payment-address input[name=\\'password\\']').css('border', '1px solid #f00').css('background', '#F8ACAC');
\t\t\t\t\t}

\t\t\t\t\tif (json['error']['confirm']) {
\t\t\t\t\t\t\$('#payment-address input[name=\\'confirm\\']').css('border', '1px solid #f00').css('background', '#F8ACAC');
\t\t\t\t\t}
\t\t\t\t";
            }
            // line 378
            echo " 
\t\t\t} else {
\t\t\t\t";
            // line 380
            if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
                echo " 
\t\t\t\tvar shipping_address = \$('#payment-address input[name=\\'shipping_address\\']:checked').val();

\t\t\t\tif (shipping_address) {
\t\t\t\t\tvalidateShippingMethod();
\t\t\t\t} else {
\t\t\t\t\tvalidateGuestShippingAddress();
\t\t\t\t}
\t\t\t\t";
            } else {
                // line 388
                echo "  
\t\t\t\tvalidatePaymentMethod();
\t\t\t\t";
            }
            // line 390
            echo " 
\t\t\t}
\t\t},
\t\t";
            // line 393
            if ((isset($context["debug"]) ? $context["debug"] : null)) {
                echo " 
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t\t";
            }
            // line 397
            echo " 
\t});
}

// Validate Guest Payment Address
function validateGuestAddress() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/quickcheckout/guest/validate',
\t\ttype: 'post',
\t\tdata: \$('#payment-address input[type=\\'text\\'], #payment-address input[type=\\'checkbox\\']:checked, #payment-address input[type=\\'radio\\']:checked, #payment-address select, #payment-address textarea'),
\t\tdataType: 'json',
\t\tcache: false,
\t\tsuccess: function(json) {\t\t
\t\t\t\$('.alert, .text-danger').remove();

\t\t\tif (json['redirect']) {
\t\t\t\tlocation = json['redirect'];
\t\t\t} else if (json['error']) {
\t\t\t\t\$('#button-payment-method').prop('disabled', false);
\t\t\t\t\$('#button-payment-method').button('reset');
\t\t\t\t\$('#terms input[type=\\'checkbox\\']').prop('checked', false);
\t\t\t\t
\t\t\t\t\$('.fa-spinner').remove();
\t\t\t\t
\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');
\t\t\t
\t\t\t\tif (json['error']['warning']) {
\t\t\t\t\t\$('#warning-messages').prepend('<div class=\"alert alert-danger\" style=\"display: none;\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '</div>');
\t\t\t\t\t
\t\t\t\t\t\$('.alert-danger').fadeIn('slow');
\t\t\t\t}

\t\t\t\t";
            // line 429
            if ((isset($context["text_error"]) ? $context["text_error"] : null)) {
                echo " 
\t\t\t\t\tfor (i in json['error']) {
\t\t\t\t\t\tvar element = \$('#input-payment-' + i.replace('_', '-'));
\t\t\t\t\t\t
\t\t\t\t\t\tif (\$(element).parent().hasClass('input-group')) {
\t\t\t\t\t\t\t\$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t";
            }
            // line 439
            echo " 
\t\t\t\t";
            // line 440
            if ((isset($context["highlight_error"]) ? $context["highlight_error"] : null)) {
                echo " 
\t\t\t\t\tfor (i in json['error']) {
\t\t\t\t\t\tvar element = \$('#input-payment-' + i.replace('_', '-'));

\t\t\t\t\t\t\$(element).css('border', '1px solid #f00').css('background', '#F8ACAC');
\t\t\t\t\t}
\t\t\t\t";
            }
            // line 446
            echo " 
\t\t\t} else {
\t\t\t\tvar create_account = \$('#payment-address input[name=\\'create_account\\']:checked').val();

\t\t\t\t";
            // line 450
            if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
                echo " 
\t\t\t\tvar shipping_address = \$('#payment-address input[name=\\'shipping_address\\']:checked').val();

\t\t\t\tif (create_account) {
\t\t\t\t\tvalidateRegister();
\t\t\t\t} else {
\t\t\t\t\tif (shipping_address) {
\t\t\t\t\t\tvalidateShippingMethod();
\t\t\t\t\t} else {
\t\t\t\t\t\tvalidateGuestShippingAddress();
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\t";
            } else {
                // line 462
                echo "   
\t\t\t\tif (create_account) {
\t\t\t\t\tvalidateRegister();
\t\t\t\t} else {
\t\t\t\t\tvalidatePaymentMethod();
\t\t\t\t}
\t\t\t\t";
            }
            // line 469
            echo "\t\t\t}
\t\t},
\t\t";
            // line 471
            if ((isset($context["debug"]) ? $context["debug"] : null)) {
                echo " 
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t\t";
            }
            // line 475
            echo " 
\t});
}

// Validate Guest Shipping Address
function validateGuestShippingAddress() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/quickcheckout/guest_shipping/validate',
\t\ttype: 'post',
\t\tdata: \$('#shipping-address input[type=\\'text\\'], #shipping-address input[type=\\'checkbox\\']:checked, #shipping-address input[type=\\'radio\\']:checked, #shipping-address select, #shipping-address textarea'),
\t\tdataType: 'json',
\t\tcache: false,
\t\tsuccess: function(json) {
\t\t\t\$('.alert, .text-danger').remove();

\t\t\tif (json['redirect']) {
\t\t\t\tlocation = json['redirect'];
\t\t\t} else if (json['error']) {
\t\t\t\t\$('#button-payment-method').prop('disabled', false);
\t\t\t\t\$('#button-payment-method').button('reset');
\t\t\t\t\$('#terms input[type=\\'checkbox\\']').prop('checked', false);
\t\t\t\t
\t\t\t\t\$('.fa-spinner').remove();
\t\t\t\t
\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');
\t\t\t\t
\t\t\t\tif (json['error']['warning']) {
\t\t\t\t\t\$('#warning-messages').prepend('<div class=\"alert alert-danger\" style=\"display: none;\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '</div>');
\t\t\t\t\t
\t\t\t\t\t\$('.alert-danger').fadeIn('slow');
\t\t\t\t}

\t\t\t\t";
            // line 507
            if ((isset($context["text_error"]) ? $context["text_error"] : null)) {
                echo " 
\t\t\t\t\tfor (i in json['error']) {
\t\t\t\t\t\tvar element = \$('#input-shipping-' + i.replace('_', '-'));
\t\t\t\t\t\t
\t\t\t\t\t\tif (\$(element).parent().hasClass('input-group')) {
\t\t\t\t\t\t\t\$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t";
            }
            // line 517
            echo " 
\t\t\t\t";
            // line 518
            if ((isset($context["highlight_error"]) ? $context["highlight_error"] : null)) {
                echo " 
\t\t\t\t\tfor (i in json['error']) {
\t\t\t\t\t\tvar element = \$('#input-shipping-' + i.replace('_', '-'));

\t\t\t\t\t\t\$(element).css('border', '1px solid #f00').css('background', '#F8ACAC');
\t\t\t\t\t}
\t\t\t\t";
            }
            // line 524
            echo " 
\t\t\t} else {
\t\t\t\tvalidateShippingMethod();
\t\t\t}
\t\t},
\t\t";
            // line 529
            if ((isset($context["debug"]) ? $context["debug"] : null)) {
                echo " 
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t\t";
            }
            // line 533
            echo " 
\t});
}

// Confirm Payment
\$(document).on('click', '#button-payment-method', function() {
\t\$('#button-payment-method').prop('disabled', true);
\t\$('#button-payment-method').button('loading');
\t
\t\$('#button-payment-method').after('<i class=\"fa fa-spinner fa-spin\"></i>');
\t
\tvalidateGuestAddress();
});
";
        } else {
            // line 546
            echo "   
// Validate Payment Address
function validatePaymentAddress() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/quickcheckout/payment_address/validate',
\t\ttype: 'post',
\t\tdata: \$('#payment-address input[type=\\'text\\'], #payment-address input[type=\\'password\\'], #payment-address input[type=\\'checkbox\\']:checked, #payment-address input[type=\\'radio\\']:checked, #payment-address input[type=\\'hidden\\'], #payment-address select, #payment-address textarea'),
\t\tdataType: 'json',
\t\tcache: false,
\t\tsuccess: function(json) {
\t\t\t\$('.alert, .text-danger').remove();

\t\t\tif (json['redirect']) {
\t\t\t\tlocation = json['redirect'];
\t\t\t} else if (json['error']) {
\t\t\t\t\$('#button-payment-method').prop('disabled', false);
\t\t\t\t\$('#button-payment-method').button('reset');
\t\t\t\t\$('#terms input[type=\\'checkbox\\']').prop('checked', false);
\t\t\t\t
\t\t\t\t\$('.fa-spinner').remove();
\t\t\t\t
\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');
\t\t\t\t
\t\t\t\tif (json['error']['warning']) {
\t\t\t\t\t\$('#warning-messages').prepend('<div class=\"alert alert-danger\" style=\"display: none;\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '</div>');
\t\t\t\t\t
\t\t\t\t\t\$('.alert-danger').fadeIn('slow');
\t\t\t\t}

\t\t\t\t";
            // line 575
            if ((isset($context["text_error"]) ? $context["text_error"] : null)) {
                echo " 
\t\t\t\t\tfor (i in json['error']) {
\t\t\t\t\t\tvar element = \$('#input-payment-' + i.replace('_', '-'));
\t\t\t\t\t\t
\t\t\t\t\t\tif (\$(element).parent().hasClass('input-group')) {
\t\t\t\t\t\t\t\$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t";
            }
            // line 585
            echo " 
\t\t\t\t";
            // line 586
            if ((isset($context["highlight_error"]) ? $context["highlight_error"] : null)) {
                echo " 
\t\t\t\t\tfor (i in json['error']) {
\t\t\t\t\t\tvar element = \$('#input-payment-' + i.replace('_', '-'));

\t\t\t\t\t\t\$(element).css('border', '1px solid #f00').css('background', '#F8ACAC');
\t\t\t\t\t}
\t\t\t\t";
            }
            // line 592
            echo " 
\t\t\t} else {
\t\t\t\t";
            // line 594
            if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
                echo " 
\t\t\t\t\tvalidateShippingAddress();
\t\t\t\t";
            } else {
                // line 596
                echo "   
\t\t\t\t\tvalidatePaymentMethod();
\t\t\t\t";
            }
            // line 599
            echo "\t\t\t}
\t\t},
\t\t";
            // line 601
            if ((isset($context["debug"]) ? $context["debug"] : null)) {
                echo " 
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t\t";
            }
            // line 605
            echo " 
\t});
}

";
            // line 609
            if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
                echo " 
// Validate Shipping Address
function validateShippingAddress() {
\tvar payment_mode = \$('input[name=\"payment_address\"]:checked').val();
\tif (payment_mode == 'new') {
\t\t";
                // line 614
                if (((isset($context["logged"]) ? $context["logged"] : null) &&  !(isset($context["show_shipping_address"]) ? $context["show_shipping_address"] : null))) {
                    // line 615
                    echo "\t\t\tvar addressType = '#payment-address';
\t\t\tvar shipping_mode = 'input[name=\"shipping_address\"]:checked, ';
\t\t";
                } else {
                    // line 618
                    echo "\t\t\tvar addressType = '#shipping-address';
\t\t\tvar shipping_mode = '';
\t\t";
                }
                // line 621
                echo "\t} else {
\t\tvar addressType = '#shipping-address';
\t\tvar shipping_mode = '';
\t}
\t\$.ajax({
\t\turl: 'index.php?route=extension/quickcheckout/shipping_address/validate',
\t\ttype: 'post',
\t\tdata: \$(shipping_mode + addressType +' input[type=\\'text\\'], '+addressType +' input[type=\\'password\\'], '+addressType +' input[type=\\'checkbox\\']:checked, '+addressType +' input[type=\\'radio\\']:checked, '+addressType +' select, '+addressType +' textarea'),
\t\tdataType: 'json',
\t\tcache: false,
\t\tsuccess: function(json) {
\t\t\t\$('.alert, .text-danger').remove();

\t\t\tif (json['redirect']) {
\t\t\t\tlocation = json['redirect'];
\t\t\t} else if (json['error']) {
\t\t\t\t\$('#button-payment-method').prop('disabled', false);
\t\t\t\t\$('#button-payment-method').button('reset');
\t\t\t\t\$('#terms input[type=\\'checkbox\\']').prop('checked', false);
\t\t\t\t
\t\t\t\t\$('.fa-spinner').remove();
\t\t\t\t
\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');
\t\t\t\t
\t\t\t\tif (json['error']['warning']) {
\t\t\t\t\t\$('#warning-messages').prepend('<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"> ' + json['error']['warning'] + '</div>');
\t\t\t\t\t
\t\t\t\t\t\$('.alert-danger').fadeIn('slow');
\t\t\t\t}

\t\t\t\t";
                // line 651
                if ((isset($context["text_error"]) ? $context["text_error"] : null)) {
                    echo " 
\t\t\t\t\tfor (i in json['error']) {
\t\t\t\t\t\tvar element = \$('#input-shipping-' + i.replace('_', '-'));
\t\t\t\t\t\t
\t\t\t\t\t\tif (\$(element).parent().hasClass('input-group')) {
\t\t\t\t\t\t\t\$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t";
                }
                // line 661
                echo " 
\t\t\t\t";
                // line 662
                if ((isset($context["highlight_error"]) ? $context["highlight_error"] : null)) {
                    echo " 
\t\t\t\t\tfor (i in json['error']) {
\t\t\t\t\t\tvar element = \$('#input-shipping-' + i.replace('_', '-'));

\t\t\t\t\t\t\$(element).css('border', '1px solid #f00').css('background', '#F8ACAC');
\t\t\t\t\t}
\t\t\t\t";
                }
                // line 668
                echo " 
\t\t\t} else {
\t\t\t\tvalidateShippingMethod();
\t\t\t}
\t\t},
\t\t";
                // line 673
                if ((isset($context["debug"]) ? $context["debug"] : null)) {
                    echo " 
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t\t";
                }
                // line 677
                echo " 
\t});
}
";
            }
            // line 680
            echo " 

// Confirm payment
\$(document).on('click', '#button-payment-method', function() {
\t\$('#button-payment-method').prop('disabled', true);
\t\$('#button-payment-method').button('loading');
\t
\t\$('#button-payment-method').after('<i class=\"fa fa-spinner fa-spin\"></i>');
\t
\tvalidatePaymentAddress();
});
";
        }
        // line 691
        echo "// Close if logged php

// Payment Method
function reloadPaymentMethod() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/quickcheckout/payment_method',
\t\ttype: 'post',
\t\tdata: \$('#payment-address input[type=\\'text\\'], #payment-address input[type=\\'checkbox\\']:checked, #payment-address input[type=\\'radio\\']:checked, #payment-address input[type=\\'hidden\\'], #payment-address select, #payment-address textarea, #payment-method input[type=\\'text\\'], #payment-method input[type=\\'checkbox\\']:checked, #payment-method input[type=\\'radio\\']:checked, #payment-method input[type=\\'hidden\\'], #payment-method select, #payment-method textarea'),
\t\tdataType: 'html',
\t\tcache: false,
\t\tbeforeSend: function() {
\t\t\tmoduleLoad(\$('#payment-method'), ";
        // line 702
        echo (isset($context["loading_display"]) ? $context["loading_display"] : null);
        echo " );
\t\t},
\t\tsuccess: function(html) {
\t\t\tmoduleLoaded(\$('#payment-method'), ";
        // line 705
        echo (isset($context["loading_display"]) ? $context["loading_display"] : null);
        echo " );
\t\t\t
\t\t\t\$('#payment-method .quickcheckout-content').html(html);
\t\t\t
\t\t\t";
        // line 709
        if ((isset($context["load_screen"]) ? $context["load_screen"] : null)) {
            echo " 
\t\t\t\$.unblockUI();
\t\t\t";
        }
        // line 711
        echo " 
\t\t},
\t\t";
        // line 713
        if ((isset($context["debug"]) ? $context["debug"] : null)) {
            echo " 
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t\t";
        }
        // line 717
        echo " 
\t});
}

function reloadPaymentMethodById(address_id) {
\t\$.ajax({
\t\turl: 'index.php?route=extension/quickcheckout/payment_method&address_id=' + address_id,
\t\ttype: 'post',
\t\tdata: \$('#payment-method input[type=\\'checkbox\\']:checked, #payment-method input[type=\\'radio\\']:checked, #payment-method input[type=\\'hidden\\'], #payment-method select, #payment-method textarea'),
\t\tdataType: 'html',
\t\tcache: false,
\t\tbeforeSend: function() {
\t\t\tmoduleLoad(\$('#payment-method'), ";
        // line 729
        echo (isset($context["loading_display"]) ? $context["loading_display"] : null);
        echo " );
\t\t},
\t\tsuccess: function(html) {
\t\t\tmoduleLoaded(\$('#payment-method'), ";
        // line 732
        echo (isset($context["loading_display"]) ? $context["loading_display"] : null);
        echo " );
\t\t\t
\t\t\t\$('#payment-method .quickcheckout-content').html(html);
\t\t\t
\t\t\t";
        // line 736
        if ((isset($context["load_screen"]) ? $context["load_screen"] : null)) {
            echo " 
\t\t\t\$.unblockUI();
\t\t\t";
        }
        // line 738
        echo " 
\t\t},
\t\t";
        // line 740
        if ((isset($context["debug"]) ? $context["debug"] : null)) {
            echo " 
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t\t";
        }
        // line 744
        echo " 
\t});
}

// Validate Payment Method
function validatePaymentMethod() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/quickcheckout/payment_method/validate',
\t\ttype: 'post',
\t\tdata: \$('#payment-method select, #payment-method input[type=\\'radio\\']:checked, #payment-method input[type=\\'checkbox\\']:checked, #payment-method textarea'),
\t\tdataType: 'json',
\t\tcache: false,
\t\tsuccess: function(json) {
\t\t\t\$('.alert, .text-danger').remove();

\t\t\tif (json['redirect']) {
\t\t\t\tlocation = json['redirect'];
\t\t\t} else if (json['error']) {
\t\t\t\t\$('#button-payment-method').prop('disabled', false);
\t\t\t\t\$('#button-payment-method').button('reset');
\t\t\t\t\$('#terms input[type=\\'checkbox\\']').prop('checked', false);
\t\t\t\t
\t\t\t\t\$('.fa-spinner').remove();
\t\t\t\t
\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');
\t\t\t\t
\t\t\t\tif (json['error']['warning']) {
\t\t\t\t\t\$('#warning-messages').prepend('<div class=\"alert alert-danger\" style=\"display: none;\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '</div>');
\t\t\t\t\t
\t\t\t\t\t\$('.alert-danger').fadeIn('slow');
\t\t\t\t}
\t\t\t} else {
\t\t\t\tvalidateTerms();
\t\t\t}
\t\t},
\t\t";
        // line 779
        if ((isset($context["debug"]) ? $context["debug"] : null)) {
            echo " 
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t\t";
        }
        // line 783
        echo " 
\t});
}

// Shipping Method
";
        // line 788
        if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
            echo " 
\tfunction reloadShippingMethod(type) {
\t\tif (type == 'payment') {
\t\t\tvar post_data = \$('#payment-address input[type=\\'text\\'], #payment-address input[type=\\'checkbox\\']:checked, #payment-address input[type=\\'radio\\']:checked, #payment-address input[type=\\'hidden\\'], #payment-address select, #payment-address textarea, #shipping-method input[type=\\'text\\'], #shipping-method input[type=\\'checkbox\\']:checked, #shipping-method input[type=\\'radio\\']:checked, #shipping-method input[type=\\'hidden\\'], #shipping-method select, #shipping-method textarea');
\t\t} else {
\t\t\tvar post_data = \$('#shipping-address input[type=\\'text\\'], #shipping-address input[type=\\'checkbox\\']:checked, #shipping-address input[type=\\'radio\\']:checked, #shipping-address input[type=\\'hidden\\'], #shipping-address select, #shipping-address textarea, #shipping-method input[type=\\'text\\'], #shipping-method input[type=\\'checkbox\\']:checked, #shipping-method input[type=\\'radio\\']:checked, #shipping-method input[type=\\'hidden\\'], #shipping-method select, #shipping-method textarea');
\t\t}
\t\t
\t\t\$.ajax({
\t\t\turl: 'index.php?route=extension/quickcheckout/shipping_method',
\t\t\ttype: 'post',
\t\t\tdata: post_data,
\t\t\tdataType: 'html',
\t\t\tcache: false,
\t\t\tbeforeSend: function() {
\t\t\t\tmoduleLoad(\$('#shipping-method'), ";
            // line 803
            echo (isset($context["loading_display"]) ? $context["loading_display"] : null);
            echo " );
\t\t\t},
\t\t\tsuccess: function(html) {
\t\t\t\tmoduleLoaded(\$('#shipping-method'), ";
            // line 806
            echo (isset($context["loading_display"]) ? $context["loading_display"] : null);
            echo " );
\t\t\t\t
\t\t\t\t\$('#shipping-method .quickcheckout-content').html(html);
\t\t\t},
\t\t\t";
            // line 810
            if ((isset($context["debug"]) ? $context["debug"] : null)) {
                echo " 
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t\t";
            }
            // line 814
            echo " 
\t\t});
\t}

\tfunction reloadShippingMethodById(address_id) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=extension/quickcheckout/shipping_method&address_id=' + address_id,
\t\t\ttype: 'post',
\t\t\tdata: \$('#shipping-method input[type=\\'text\\'], #shipping-method input[type=\\'checkbox\\']:checked, #shipping-method input[type=\\'radio\\']:checked, #shipping-method input[type=\\'hidden\\'], #shipping-method select, #shipping-method textarea'),
\t\t\tdataType: 'html',
\t\t\tcache: false,
\t\t\tbeforeSend: function() {
\t\t\t\tmoduleLoad(\$('#shipping-method'), ";
            // line 826
            echo (isset($context["loading_display"]) ? $context["loading_display"] : null);
            echo " );
\t\t\t},
\t\t\tsuccess: function(html) {
\t\t\t\tmoduleLoaded(\$('#shipping-method'), ";
            // line 829
            echo (isset($context["loading_display"]) ? $context["loading_display"] : null);
            echo " );
\t\t\t\t
\t\t\t\t\$('#shipping-method .quickcheckout-content').html(html);
\t\t\t},
\t\t\t";
            // line 833
            if ((isset($context["debug"]) ? $context["debug"] : null)) {
                echo " 
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t\t";
            }
            // line 837
            echo " 
\t\t});
\t}

\t// Validate Shipping Method
\tfunction validateShippingMethod() {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=extension/quickcheckout/shipping_method/validate',
\t\t\ttype: 'post',
\t\t\tdata: \$('#shipping-method select, #shipping-method input[type=\\'radio\\']:checked, #shipping-method textarea, #shipping-method input[type=\\'text\\']'),
\t\t\tdataType: 'json',
\t\t\tcache: false,
\t\t\tsuccess: function(json) {
\t\t\t\t\$('.alert, .text-danger').remove();

\t\t\t\tif (json['redirect']) {
\t\t\t\t\tlocation = json['redirect'];
\t\t\t\t} else if (json['error']) {
\t\t\t\t\t\$('#button-payment-method').prop('disabled', false);
\t\t\t\t\t\$('#button-payment-method').button('reset');
\t\t\t\t\t\$('#terms input[type=\\'checkbox\\']').prop('checked', false);
\t\t\t\t\t
\t\t\t\t\t\$('.fa-spinner').remove();
\t\t\t\t\t
\t\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');
\t\t\t\t
\t\t\t\t\tif (json['error']['warning']) {
\t\t\t\t\t\t\$('#warning-messages').prepend('<div class=\"alert alert-danger\" style=\"display: none;\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '</div>');
\t\t\t\t\t
\t\t\t\t\t\t\$('.alert-danger').fadeIn('slow');
\t\t\t\t\t}
\t\t\t\t} else {
\t\t\t\t\tvalidatePaymentMethod();
\t\t\t\t}
\t\t\t},
\t\t\t";
            // line 872
            if ((isset($context["debug"]) ? $context["debug"] : null)) {
                echo " 
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t\t";
            }
            // line 876
            echo " 
\t\t});
\t}
";
        }
        // line 879
        echo " 

// Validate confirm button
function validateTerms() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/quickcheckout/terms/validate',
\t\ttype: 'post',
\t\tdata: \$('#terms input[type=\\'checkbox\\']:checked'),
\t\tdataType: 'json',
\t\tcache: false,
\t\tsuccess: function(json) {
\t\t\tif (json['redirect']) {
\t\t\t\tlocation = json['redirect'];
\t\t\t}
\t\t
\t\t\tif (json['error']) {
\t\t\t\t\$('#button-payment-method').prop('disabled', false);
\t\t\t\t\$('#button-payment-method').button('reset');
\t\t\t\t\$('#terms input[type=\\'checkbox\\']').prop('checked', false);
\t\t\t\t
\t\t\t\t\$('.fa-spinner').remove();
\t\t\t\t
\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');
\t\t\t\t
\t\t\t\tif (json['error']['warning']) {
\t\t\t\t\t\$('#warning-messages').prepend('<div class=\"alert alert-danger\" style=\"display: none;\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '</div>');
\t\t\t\t\t
\t\t\t\t\t\$('.alert-danger').fadeIn('slow');
\t\t\t\t}
\t\t\t} else {
\t\t\t\tloadConfirm();
\t\t\t}
\t\t},
\t\t";
        // line 912
        if ((isset($context["debug"]) ? $context["debug"] : null)) {
            echo " 
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t\t";
        }
        // line 916
        echo " 
\t});
}

// Load confirm
function loadConfirm() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/quickcheckout/confirm',
\t\tdataType: 'html',
\t\tcache: false,
\t\tbeforeSend: function() {
\t\t\t";
        // line 927
        if ((isset($context["confirmation_page"]) ? $context["confirmation_page"] : null)) {
            echo " 
\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');
\t\t\t
\t\t\t\t";
            // line 930
            if ((isset($context["slide_effect"]) ? $context["slide_effect"] : null)) {
                echo " 
\t\t\t\t\$('#quickcheckoutconfirm').slideUp('slow');
\t\t\t\t";
            } else {
                // line 932
                echo "   
\t\t\t\t\$('#quickcheckoutconfirm').html('<div class=\"text-center\"><i class=\"fa fa-spinner fa-spin fa-5x\"></i></div>');
\t\t\t\t";
            }
            // line 934
            echo " 
\t\t\t
\t\t\t\t";
            // line 936
            if ((isset($context["load_screen"]) ? $context["load_screen"] : null)) {
                echo " 
\t\t\t\t\$.blockUI({
\t\t\t\t\tmessage: '<h1 style=\"color:#ffffff;\">";
                // line 938
                echo (isset($context["text_please_wait"]) ? $context["text_please_wait"] : null);
                echo "</h1>',
\t\t\t\t\tcss: {
\t\t\t\t\t\tborder: 'none',
\t\t\t\t\t\tpadding: '15px',
\t\t\t\t\t\tbackgroundColor: '#000000',
\t\t\t\t\t\t'-webkit-border-radius': '10px',
\t\t\t\t\t\t'-moz-border-radius': '10px',
\t\t\t\t\t\t'-khtml-border-radius': '10px',
\t\t\t\t\t\t'border-radius': '10px',
\t\t\t\t\t\topacity: .8,
\t\t\t\t\t\tcolor: '#ffffff'
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\t";
            }
            // line 951
            echo " 
\t\t\t";
        }
        // line 953
        echo "\t\t},
\t\tsuccess: function(html) {
\t\t\t";
        // line 955
        if ((isset($context["confirmation_page"]) ? $context["confirmation_page"] : null)) {
            echo " 
\t\t\t\t";
            // line 956
            if ((isset($context["load_screen"]) ? $context["load_screen"] : null)) {
                echo " 
\t\t\t\t\$.unblockUI();
\t\t\t\t";
            }
            // line 958
            echo " 
\t\t\t\t
\t\t\t\t\$('#quickcheckoutconfirm').hide().html(html);
\t\t\t\t
\t\t\t\t";
            // line 962
            if ( !(isset($context["auto_submit"]) ? $context["auto_submit"] : null)) {
                echo " 
\t\t\t\t\t";
                // line 963
                if ((isset($context["slide_effect"]) ? $context["slide_effect"] : null)) {
                    echo " 
\t\t\t\t\t\$('#quickcheckoutconfirm').slideDown('slow');
\t\t\t\t\t";
                } else {
                    // line 965
                    echo "   
\t\t\t\t\t\$('#quickcheckoutconfirm').show();
\t\t\t\t\t";
                }
                // line 967
                echo " 
\t\t\t\t";
            } else {
                // line 968
                echo "   
\t\t\t\t\$('#quickcheckoutconfirm').after('<div class=\"text-center\"><i class=\"fa fa-spinner fa-spin fa-5x\"></i></div>');
\t\t\t\t";
            }
            // line 971
            echo "\t\t\t";
        } else {
            echo "   
\t\t\t\t\$('#terms .terms').hide();
\t\t\t\t\$('#payment').html(html).slideDown('fast');
\t\t\t\t
\t\t\t\t";
            // line 975
            if ((isset($context["auto_submit"]) ? $context["auto_submit"] : null)) {
                echo " 
\t\t\t\t\$('#payment').hide().after('<div class=\"text-center\"><i class=\"fa fa-spinner fa-spin fa-5x\"></i></div>');
\t\t\t\t";
            }
            // line 977
            echo " 
\t\t\t\t
\t\t\t\t\$('html, body').animate({ scrollTop: \$('#terms').offset().top }, 'slow');
\t\t\t\t
\t\t\t\tdisableCheckout();
\t\t\t";
        }
        // line 983
        echo "\t\t},
\t\t";
        // line 984
        if ((isset($context["debug"]) ? $context["debug"] : null)) {
            echo " 
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t\t";
        }
        // line 988
        echo " 
\t});
}

// Load cart
";
        // line 993
        if ((isset($context["cart_module"]) ? $context["cart_module"] : null)) {
            echo " 
function loadCart() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/quickcheckout/cart',
\t\tdataType: 'html',
\t\tcache: false,
\t\tbeforeSend: function() {
\t\t\t\$('.tooltip').remove();
\t\t\t
\t\t\tmoduleLoad(\$('#cart1'), ";
            // line 1002
            echo (isset($context["loading_display"]) ? $context["loading_display"] : null);
            echo " );
\t\t},
\t\tsuccess: function(html) {
\t\t\tmoduleLoaded(\$('#cart1'), ";
            // line 1005
            echo (isset($context["loading_display"]) ? $context["loading_display"] : null);
            echo " );
\t\t\t
\t\t\t\$('#cart1 .quickcheckout-content').html(html);
\t\t},
\t\t";
            // line 1009
            if ((isset($context["debug"]) ? $context["debug"] : null)) {
                echo " 
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t\t";
            }
            // line 1013
            echo " 
\t});
}

\t";
            // line 1017
            if ( !(isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
                echo " 
\t\$(document).ready(function(){
\t\tloadCart();
\t});
\t";
            }
            // line 1021
            echo " 
";
        }
        // line 1022
        echo " 

";
        // line 1024
        if ((((isset($context["voucher_module"]) ? $context["voucher_module"] : null) || (isset($context["coupon_module"]) ? $context["coupon_module"] : null)) || (isset($context["reward_module"]) ? $context["reward_module"] : null))) {
            echo " 
// Validate Coupon
\$(document).on('click', '#button-coupon', function() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/quickcheckout/voucher/validateCoupon',
\t\ttype: 'post',
\t\tdata: \$('#coupon-content :input'),
\t\tdataType: 'json',
\t\tcache: false,
\t\tbeforeSend: function() {
\t\t\t\$('#button-coupon').prop('disabled', true);
\t\t\t\$('#button-coupon').after('<i class=\"fa fa-spinner fa-spin\"></i>');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-coupon').prop('disabled', false);
\t\t\t\$('#coupon-content .fa-spinner').remove();
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert').remove();
\t\t\t
\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');

\t\t\tif (json['success']) {
\t\t\t\t\$('#success-messages').prepend('<div class=\"alert alert-success\" style=\"display:none;\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');
\t\t\t\t
\t\t\t\t\$('.alert-success').fadeIn('slow');
\t\t\t} else if (json['error']) {
\t\t\t\t\$('#warning-messages').prepend('<div class=\"alert alert-danger\" style=\"display: none;\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '</div>');

\t\t\t\t\$('.alert-danger').fadeIn('slow');
\t\t\t}

\t\t\t";
            // line 1056
            if ( !(isset($context["logged"]) ? $context["logged"] : null)) {
                echo " 
\t\t\t\tif (\$('#payment-address input[name=\\'shipping_address\\']:checked').val()) {
\t\t\t\t\treloadPaymentMethod();
\t\t\t\t\t
\t\t\t\t\t";
                // line 1060
                if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
                    echo " 
\t\t\t\t\treloadShippingMethod('payment');
\t\t\t\t\t";
                }
                // line 1062
                echo " 
\t\t\t\t} else {
\t\t\t\t\treloadPaymentMethod();
\t\t\t\t\t
\t\t\t\t\t";
                // line 1066
                if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
                    echo " 
\t\t\t\t\treloadShippingMethod('shipping');
\t\t\t\t\t";
                }
                // line 1068
                echo " 
\t\t\t\t}
\t\t\t";
            } else {
                // line 1070
                echo "   
\t\t\t\tif (\$('#payment-address input[name=\\'payment_address\\']:checked').val() == 'new') {
\t\t\t\t\treloadPaymentMethod();
\t\t\t\t} else {
\t\t\t\t\treloadPaymentMethodById(\$('#payment-address select[name=\\'address_id\\']').val());
\t\t\t\t}
\t\t\t\t
\t\t\t\t";
                // line 1077
                if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
                    echo " 
\t\t\t\tif (\$('#shipping-address input[name=\\'shipping_address\\']:checked').val() == 'new') {
\t\t\t\t\treloadShippingMethod('shipping');
\t\t\t\t} else {
\t\t\t\t\treloadShippingMethodById(\$('#shipping-address select[name=\\'address_id\\']').val());
\t\t\t\t}
\t\t\t\t";
                }
                // line 1083
                echo " 
\t\t\t";
            }
            // line 1084
            echo " 
\t\t\t
\t\t\t";
            // line 1086
            if ( !(isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
                echo " 
\t\t\tloadCart();
\t\t\t";
            }
            // line 1088
            echo " 
\t\t},
\t\t";
            // line 1090
            if ((isset($context["debug"]) ? $context["debug"] : null)) {
                echo " 
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t\t";
            }
            // line 1094
            echo " 
\t});
});

\$(document).on('click', '#button-voucher', function() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/quickcheckout/voucher/validateVoucher',
\t\ttype: 'post',
\t\tdata: \$('#voucher-content :input'),
\t\tdataType: 'json',
\t\tcache: false,
\t\tbeforeSend: function() {
\t\t\t\$('#button-voucher').prop('disabled', true);
\t\t\t\$('#button-voucher').after('<i class=\"fa fa-spinner fa-spin\"></i>');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-voucher').prop('disabled', false);
\t\t\t\$('#voucher-content .fa-spinner').remove();
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert').remove();
\t\t\t
\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');

\t\t\tif (json['success']) {
\t\t\t\t\$('#success-messages').prepend('<div class=\"alert alert-success\" style=\"display:none;\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');
\t\t\t\t
\t\t\t\t\$('.alert-success').fadeIn('slow');
\t\t\t} else if (json['error']) {
\t\t\t\t\$('#warning-messages').prepend('<div class=\"alert alert-danger\" style=\"display: none;\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '</div>');

\t\t\t\t\$('.alert-danger').fadeIn('slow');
\t\t\t}

\t\t\t";
            // line 1128
            if ( !(isset($context["logged"]) ? $context["logged"] : null)) {
                echo " 
\t\t\t\tif (\$('#payment-address input[name=\\'shipping_address\\']:checked').val()) {
\t\t\t\t\treloadPaymentMethod();
\t\t\t\t\t
\t\t\t\t\t";
                // line 1132
                if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
                    echo " 
\t\t\t\t\treloadShippingMethod('payment');
\t\t\t\t\t";
                }
                // line 1134
                echo " 
\t\t\t\t} else {
\t\t\t\t\treloadPaymentMethod();
\t\t\t\t\t
\t\t\t\t\t";
                // line 1138
                if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
                    echo " 
\t\t\t\t\treloadShippingMethod('shipping');
\t\t\t\t\t";
                }
                // line 1140
                echo " 
\t\t\t\t}
\t\t\t";
            } else {
                // line 1142
                echo "   
\t\t\t\tif (\$('#payment-address input[name=\\'payment_address\\']:checked').val() == 'new') {
\t\t\t\t\treloadPaymentMethod();
\t\t\t\t} else {
\t\t\t\t\treloadPaymentMethodById(\$('#payment-address select[name=\\'address_id\\']').val());
\t\t\t\t}
\t\t\t\t
\t\t\t\t";
                // line 1149
                if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
                    echo " 
\t\t\t\tif (\$('#shipping-address input[name=\\'shipping_address\\']:checked').val() == 'new') {
\t\t\t\t\treloadShippingMethod('shipping');
\t\t\t\t} else {
\t\t\t\t\treloadShippingMethodById(\$('#shipping-address select[name=\\'address_id\\']').val());
\t\t\t\t}
\t\t\t\t";
                }
                // line 1155
                echo " 
\t\t\t";
            }
            // line 1157
            echo "\t\t\t
\t\t\t";
            // line 1158
            if ( !(isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
                echo " 
\t\t\tloadCart();
\t\t\t";
            }
            // line 1160
            echo " 
\t\t},
\t\t";
            // line 1162
            if ((isset($context["debug"]) ? $context["debug"] : null)) {
                echo " 
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t\t";
            }
            // line 1166
            echo " 
\t});
});

\$(document).on('click', '#button-reward', function() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/quickcheckout/voucher/validateReward',
\t\ttype: 'post',
\t\tdata: \$('#reward-content :input'),
\t\tdataType: 'json',
\t\tcache: false,
\t\tbeforeSend: function() {
\t\t\t\$('#button-reward').prop('disabled', true);
\t\t\t\$('#button-reward').after('<i class=\"fa fa-spinner fa-spin\"></i>');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-reward').prop('disabled', false);
\t\t\t\$('#reward-content .fa-spinner').remove();
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert').remove();
\t\t\t
\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');

\t\t\tif (json['success']) {
\t\t\t\t\$('#success-messages').prepend('<div class=\"alert alert-success\" style=\"display:none;\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');
\t\t\t\t
\t\t\t\t\$('.alert-success').fadeIn('slow');
\t\t\t} else if (json['error']) {
\t\t\t\t\$('#warning-messages').prepend('<div class=\"alert alert-danger\" style=\"display: none;\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '</div>');

\t\t\t\t\$('.alert-danger').fadeIn('slow');
\t\t\t}

\t\t\t";
            // line 1200
            if ( !(isset($context["logged"]) ? $context["logged"] : null)) {
                echo " 
\t\t\t\tif (\$('#payment-address input[name=\\'shipping_address\\']:checked').val()) {
\t\t\t\t\treloadPaymentMethod();
\t\t\t\t\t
\t\t\t\t\t";
                // line 1204
                if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
                    echo " 
\t\t\t\t\treloadShippingMethod('payment');
\t\t\t\t\t";
                }
                // line 1206
                echo " 
\t\t\t\t} else {
\t\t\t\t\treloadPaymentMethod();
\t\t\t\t\t
\t\t\t\t\t";
                // line 1210
                if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
                    echo " 
\t\t\t\t\treloadShippingMethod('shipping');
\t\t\t\t\t";
                }
                // line 1212
                echo " 
\t\t\t\t}
\t\t\t";
            } else {
                // line 1214
                echo "   
\t\t\t\tif (\$('#payment-address input[name=\\'payment_address\\']:checked').val() == 'new') {
\t\t\t\t\treloadPaymentMethod();
\t\t\t\t} else {
\t\t\t\t\treloadPaymentMethodById(\$('#payment-address select[name=\\'address_id\\']').val());
\t\t\t\t}
\t\t\t\t
\t\t\t\t";
                // line 1221
                if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
                    echo " 
\t\t\t\tif (\$('#shipping-address input[name=\\'shipping_address\\']:checked').val() == 'new') {
\t\t\t\t\treloadShippingMethod('shipping');
\t\t\t\t} else {
\t\t\t\t\treloadShippingMethodById(\$('#shipping-address select[name=\\'address_id\\']').val());
\t\t\t\t}
\t\t\t\t";
                }
                // line 1227
                echo " 
\t\t\t";
            }
            // line 1229
            echo "\t\t\t
\t\t\t";
            // line 1230
            if ( !(isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
                echo " 
\t\t\tloadCart();
\t\t\t";
            }
            // line 1232
            echo " 
\t\t},
\t\t";
            // line 1234
            if ((isset($context["debug"]) ? $context["debug"] : null)) {
                echo " 
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t\t";
            }
            // line 1238
            echo " 
\t});
});
";
        }
        // line 1242
        echo "
";
        // line 1243
        if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
            echo " 
\$(document).on('focusout', 'input[name=\\'postcode\\']', function() {
\t";
            // line 1245
            if ( !(isset($context["logged"]) ? $context["logged"] : null)) {
                echo " 
\tif (\$('#payment-address input[name=\\'shipping_address\\']:checked').val()) {
\t\treloadShippingMethod('payment');
\t} else {
\t\treloadShippingMethod('shipping');
\t}
\t";
            } else {
                // line 1251
                echo "   
\tif (\$('#shipping-address input[name=\\'shipping_address\\']:checked').val() == 'new') {
\t\treloadShippingMethod('shipping');
\t} else {
\t\treloadShippingMethodById(\$('#shipping-address select[name=\\'address_id\\']').val());
\t}
\t";
            }
            // line 1257
            echo " 
});
";
        }
        // line 1260
        echo "
";
        // line 1261
        if ((isset($context["highlight_error"]) ? $context["highlight_error"] : null)) {
            echo " 
\t\$(document).on('keydown', 'input', function() {
\t\t\$(this).css('background', '').css('border', '');
\t\t
\t\t\$(this).siblings('.text-danger').remove();
\t});
\t\$(document).on('change', 'select', function() {
\t\t\$(this).css('background', '').css('border', '');
\t\t
\t\t\$(this).siblings('.text-danger').remove();
\t});
";
        }
        // line 1272
        echo " 

";
        // line 1274
        if ((isset($context["edit_cart"]) ? $context["edit_cart"] : null)) {
            echo " 
\$(document).on('click', '.button-update', function() {

\tvar quantity = \$(this).parents('.quantity').find('input.qc-product-qantity');
\tif (quantity.length){
\t\tif (\$(this).data('type')=='increase') {
\t\t\tquantity.val(parseInt(quantity.val())+1);
\t\t} else if (\$(this).data('type')=='decrease') {
\t\t\tquantity.val(parseInt(quantity.val())-1);
\t\t}
\t}
\t
\t\$.ajax({
\t\turl: 'index.php?route=extension/quickcheckout/cart/update',
\t\ttype: 'post',
\t\tdata: \$('#cart1 :input'),
\t\tdataType: 'json',
\t\tcache: false,
\t\tbeforeSend: function() {
\t\t\t//\$('#cart1 .button-update').prop('disabled', true);
\t\t},
\t\tsuccess: function(json) {
\t\t\tif (json['redirect']) {
\t\t\t\tlocation = json['redirect'];
\t\t\t} else {
\t\t\t\tif (json['error']['stock']) {
\t\t\t\t\t\$('#button-payment-method').attr(\"disabled\", true);
\t\t\t\t} else if (json['error']['warning']) {
\t\t\t\t\t\t\$('#warning-messages').html('<div class=\"alert alert-danger\" style=\"display: none;\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '</div>');
\t\t\t\t\t\t\$('.alert-danger').fadeIn('slow');
\t\t\t\t\t\t\$('#button-payment-method').attr(\"disabled\", true);
\t\t\t\t} else {
\t\t\t\t\t\$('#warning-messages').html('');
\t\t\t\t\t\$('#button-payment-method').removeAttr(\"disabled\");
\t\t\t\t}

\t\t\t\t";
            // line 1310
            if ( !(isset($context["logged"]) ? $context["logged"] : null)) {
                echo " 
\t\t\t\t\tif (\$('#payment-address input[name=\\'shipping_address\\']:checked').val()) {
\t\t\t\t\t\treloadPaymentMethod();
\t\t\t\t\t\t
\t\t\t\t\t\t";
                // line 1314
                if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
                    echo " 
\t\t\t\t\t\treloadShippingMethod('payment');
\t\t\t\t\t\t";
                }
                // line 1316
                echo " 
\t\t\t\t\t} else {
\t\t\t\t\t\treloadPaymentMethod();
\t\t\t\t\t\t
\t\t\t\t\t\t";
                // line 1320
                if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
                    echo " 
\t\t\t\t\t\treloadShippingMethod('shipping');
\t\t\t\t\t\t";
                }
                // line 1322
                echo " 
\t\t\t\t\t}
\t\t\t\t";
            } else {
                // line 1324
                echo "   
\t\t\t\t\tif (\$('#payment-address input[name=\\'payment_address\\']:checked').val() == 'new') {
\t\t\t\t\t\treloadPaymentMethod();
\t\t\t\t\t} else {
\t\t\t\t\t\treloadPaymentMethodById(\$('#payment-address select[name=\\'address_id\\']').val());
\t\t\t\t\t}
\t\t\t\t\t
\t\t\t\t\t";
                // line 1331
                if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
                    echo " 
\t\t\t\t\tif (\$('#shipping-address input[name=\\'shipping_address\\']:checked').val() == 'new') {
\t\t\t\t\t\treloadShippingMethod('shipping');
\t\t\t\t\t} else {
\t\t\t\t\t\treloadShippingMethodById(\$('#shipping-address select[name=\\'address_id\\']').val());
\t\t\t\t\t}
\t\t\t\t\t";
                }
                // line 1337
                echo " 
\t\t\t\t";
            }
            // line 1338
            echo " 
\t\t\t\t
\t\t\t\t";
            // line 1340
            if ( !(isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
                echo " 
\t\t\t\tloadCart();
\t\t\t\t";
            }
            // line 1342
            echo " 
\t\t\t}
\t\t},
\t\t";
            // line 1345
            if ((isset($context["debug"]) ? $context["debug"] : null)) {
                echo " 
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t\t";
            }
            // line 1349
            echo " 
\t});
});

\$(document).on('click', '.button-remove', function() {
\tvar remove_id = \$(this).attr('data-remove');

\t\$.ajax({
\t\turl: 'index.php?route=extension/quickcheckout/cart/update&remove=' + remove_id,
\t\ttype: 'get',
\t\tdataType: 'json',
\t\tcache: false,
\t\tbeforeSend: function() {
\t\t\t\$('#cart1 .button-remove').prop('disabled', true);
\t\t},
\t\tsuccess: function(json) {
\t\t\tif (json['redirect']) {
\t\t\t\tlocation = json['redirect'];
\t\t\t} else {
\t\t\t\t";
            // line 1368
            if ( !(isset($context["logged"]) ? $context["logged"] : null)) {
                echo " 
\t\t\t\t\tif (\$('#payment-address input[name=\\'shipping_address\\']:checked').val()) {
\t\t\t\t\t\treloadPaymentMethod();
\t\t\t\t\t\t
\t\t\t\t\t\t";
                // line 1372
                if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
                    echo " 
\t\t\t\t\t\treloadShippingMethod('payment');
\t\t\t\t\t\t";
                }
                // line 1374
                echo " 
\t\t\t\t\t} else {
\t\t\t\t\t\treloadPaymentMethod();
\t\t\t\t\t\t
\t\t\t\t\t\t";
                // line 1378
                if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
                    echo " 
\t\t\t\t\t\treloadShippingMethod('shipping');
\t\t\t\t\t\t";
                }
                // line 1380
                echo " 
\t\t\t\t\t}
\t\t\t\t";
            } else {
                // line 1382
                echo "   
\t\t\t\t\tif (\$('#payment-address input[name=\\'payment_address\\']:checked').val() == 'new') {
\t\t\t\t\t\treloadPaymentMethod();
\t\t\t\t\t} else {
\t\t\t\t\t\treloadPaymentMethodById(\$('#payment-address select[name=\\'address_id\\']').val());
\t\t\t\t\t}
\t\t\t\t\t
\t\t\t\t\t";
                // line 1389
                if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
                    echo " 
\t\t\t\t\tif (\$('#shipping-address input[name=\\'shipping_address\\']:checked').val() == 'new') {
\t\t\t\t\t\treloadShippingMethod('shipping');
\t\t\t\t\t} else {
\t\t\t\t\t\treloadShippingMethodById(\$('#shipping-address select[name=\\'address_id\\']').val());
\t\t\t\t\t}
\t\t\t\t\t";
                }
                // line 1395
                echo " 
\t\t\t\t";
            }
            // line 1397
            echo "\t\t\t\t
\t\t\t\t";
            // line 1398
            if ( !(isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
                echo " 
\t\t\t\tloadCart();
\t\t\t\t";
            }
            // line 1400
            echo " 
\t\t\t}
\t\t},
\t\t";
            // line 1403
            if ((isset($context["debug"]) ? $context["debug"] : null)) {
                echo " 
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t\t";
            }
            // line 1407
            echo " 
\t});

\treturn false;
});
";
        }
        // line 1413
        echo "
\$('.date').datetimepicker({
\tformat: 'YYYY-MM-DD',
\tlocale: 'ru'
});

\$('.time').datetimepicker({
\tformat: 'HH:mm',
\tlocale: 'ru'
});

\$('.datetime').datetimepicker({
\tlocale: 'ru'
});
//--></script>
";
        // line 1428
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 1429
            echo "\t<script type=\"text/javascript\"><!--
\t\t  \t\$('#button-payment-method').attr(\"disabled\", true);
\t//--></script>
";
        }
        // line 1433
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "default/template/extension/quickcheckout/checkout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2366 => 1433,  2360 => 1429,  2358 => 1428,  2341 => 1413,  2333 => 1407,  2325 => 1403,  2320 => 1400,  2314 => 1398,  2311 => 1397,  2307 => 1395,  2297 => 1389,  2288 => 1382,  2283 => 1380,  2277 => 1378,  2271 => 1374,  2265 => 1372,  2258 => 1368,  2237 => 1349,  2229 => 1345,  2224 => 1342,  2218 => 1340,  2214 => 1338,  2210 => 1337,  2200 => 1331,  2191 => 1324,  2186 => 1322,  2180 => 1320,  2174 => 1316,  2168 => 1314,  2161 => 1310,  2122 => 1274,  2118 => 1272,  2103 => 1261,  2100 => 1260,  2095 => 1257,  2086 => 1251,  2076 => 1245,  2071 => 1243,  2068 => 1242,  2062 => 1238,  2054 => 1234,  2050 => 1232,  2044 => 1230,  2041 => 1229,  2037 => 1227,  2027 => 1221,  2018 => 1214,  2013 => 1212,  2007 => 1210,  2001 => 1206,  1995 => 1204,  1988 => 1200,  1952 => 1166,  1944 => 1162,  1940 => 1160,  1934 => 1158,  1931 => 1157,  1927 => 1155,  1917 => 1149,  1908 => 1142,  1903 => 1140,  1897 => 1138,  1891 => 1134,  1885 => 1132,  1878 => 1128,  1842 => 1094,  1834 => 1090,  1830 => 1088,  1824 => 1086,  1820 => 1084,  1816 => 1083,  1806 => 1077,  1797 => 1070,  1792 => 1068,  1786 => 1066,  1780 => 1062,  1774 => 1060,  1767 => 1056,  1732 => 1024,  1728 => 1022,  1724 => 1021,  1716 => 1017,  1710 => 1013,  1702 => 1009,  1695 => 1005,  1689 => 1002,  1677 => 993,  1670 => 988,  1662 => 984,  1659 => 983,  1651 => 977,  1645 => 975,  1637 => 971,  1632 => 968,  1628 => 967,  1623 => 965,  1617 => 963,  1613 => 962,  1607 => 958,  1601 => 956,  1597 => 955,  1593 => 953,  1589 => 951,  1572 => 938,  1567 => 936,  1563 => 934,  1558 => 932,  1552 => 930,  1546 => 927,  1533 => 916,  1525 => 912,  1490 => 879,  1484 => 876,  1476 => 872,  1439 => 837,  1431 => 833,  1424 => 829,  1418 => 826,  1404 => 814,  1396 => 810,  1389 => 806,  1383 => 803,  1365 => 788,  1358 => 783,  1350 => 779,  1313 => 744,  1305 => 740,  1301 => 738,  1295 => 736,  1288 => 732,  1282 => 729,  1268 => 717,  1260 => 713,  1256 => 711,  1250 => 709,  1243 => 705,  1237 => 702,  1224 => 691,  1210 => 680,  1204 => 677,  1196 => 673,  1189 => 668,  1179 => 662,  1176 => 661,  1162 => 651,  1130 => 621,  1125 => 618,  1120 => 615,  1118 => 614,  1110 => 609,  1104 => 605,  1096 => 601,  1092 => 599,  1087 => 596,  1081 => 594,  1077 => 592,  1067 => 586,  1064 => 585,  1050 => 575,  1019 => 546,  1003 => 533,  995 => 529,  988 => 524,  978 => 518,  975 => 517,  961 => 507,  927 => 475,  919 => 471,  915 => 469,  906 => 462,  890 => 450,  884 => 446,  874 => 440,  871 => 439,  857 => 429,  823 => 397,  815 => 393,  810 => 390,  805 => 388,  793 => 380,  789 => 378,  777 => 370,  774 => 369,  762 => 361,  730 => 331,  724 => 328,  716 => 324,  683 => 294,  679 => 292,  673 => 289,  665 => 285,  649 => 271,  641 => 267,  628 => 256,  625 => 255,  623 => 254,  619 => 252,  597 => 234,  591 => 231,  587 => 229,  581 => 227,  578 => 226,  576 => 225,  570 => 222,  566 => 221,  563 => 220,  557 => 218,  555 => 217,  550 => 214,  542 => 209,  535 => 204,  531 => 202,  527 => 201,  521 => 198,  518 => 197,  515 => 196,  509 => 192,  507 => 191,  504 => 190,  501 => 189,  499 => 188,  496 => 187,  490 => 184,  485 => 182,  480 => 179,  472 => 174,  467 => 172,  460 => 168,  453 => 167,  446 => 163,  440 => 162,  436 => 161,  431 => 158,  425 => 156,  421 => 155,  415 => 154,  411 => 153,  406 => 151,  402 => 150,  397 => 147,  391 => 145,  386 => 143,  382 => 142,  376 => 139,  372 => 137,  347 => 119,  338 => 117,  333 => 115,  328 => 113,  320 => 108,  313 => 106,  310 => 105,  303 => 101,  296 => 99,  292 => 98,  289 => 97,  278 => 91,  274 => 90,  266 => 85,  255 => 83,  252 => 82,  244 => 77,  233 => 75,  229 => 74,  225 => 72,  218 => 69,  214 => 68,  203 => 66,  199 => 65,  192 => 61,  188 => 60,  181 => 58,  177 => 56,  170 => 53,  165 => 51,  161 => 50,  153 => 47,  149 => 46,  144 => 44,  139 => 41,  134 => 40,  130 => 39,  127 => 38,  122 => 36,  119 => 35,  114 => 34,  109 => 33,  107 => 32,  103 => 30,  95 => 26,  93 => 25,  90 => 24,  85 => 21,  83 => 20,  78 => 18,  70 => 16,  67 => 15,  65 => 14,  60 => 13,  57 => 12,  54 => 11,  51 => 10,  49 => 9,  45 => 8,  41 => 6,  31 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div class="container">*/
/*   <ul class="breadcrumb">*/
/*     {% for breadcrumb in breadcrumbs %} */
/*     <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*     {% endfor %} */
/*   </ul>*/
/*   <div class="row">{{ column_left }} */
/*     {% if column_left and column_right %}*/
/*     {% set class = 'col-sm-6' %}*/
/*     {% elseif column_left or column_right %}*/
/*     {% set class = 'col-sm-9' %}*/
/*     {% else %}   */
/*     {% set class = 'col-sm-12' %}*/
/*     {% endif %}*/
/*     <div id="content" class="{{ class }}">{{ content_top }}*/
/*       <div class="category-head">*/
/*         <h1 class="main-underline">{{ heading_title }}</h1>*/
/*       </div>*/
/* 	  {% if false %}*/
/* 	  <!-- FontAwesome for themes that require it -->*/
/* 	  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">*/
/* 	  {% endif %}*/
/* 	  <div id="warning-messages">*/
/* 	  	{% if error_warning %}*/
/* 		  <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/* 		    <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/* 		  </div>*/
/* 		{% endif %}*/
/* 	  </div>*/
/* 	  <div id="success-messages"></div>*/
/* 	  {% if mobile_stylesheet %}*/
/* 	  <link rel="stylesheet" media="screen and (min-width: 701px) and (max-width: 99999px)" href="{{ stylesheet }}" />*/
/* 	  <link rel="stylesheet" media="screen and (min-width: 1px) and (max-width: 700px)" href="{{ mobile_stylesheet }}" />*/
/* 	  {% else %}   */
/* 	  <link rel="stylesheet" href="{{ stylesheet }}" />*/
/* 	  {% endif %}*/
/* */
/* 	  {% if html_header %} */
/* 	  {{ html_header }} */
/* 	  {% endif %} */
/* */
/* 	  <div id="quickcheckoutconfirm">*/
/* 	  	{% if quickcheckout_layout == '4' %} */
/* 			<div class="qc-col-0">*/
/* 				{% if not logged and login_module %} */
/* 					<div class="qc-step" data-col="{{ step['login']['column'] }}" data-row="{{ step['login']['row'] }}">*/
/* 					  <div id="login-box">*/
/* 						<div id="checkout">*/
/* 						  <div class="quickcheckout-heading"><i class="fa fa-sign-in"></i> {{ text_checkout_option }}</div>*/
/* 						  <div class="quickcheckout-content">{{ login }}</div>*/
/* 						</div>*/
/* 						<div class="or">{{ text_or }}</div>*/
/* 					 </div>*/
/* 					 </div>*/
/* 				{% endif %} */
/* 				*/
/* 				<div class="qc-step" data-col="{{ step['payment_address']['column'] }}" data-row="{{ step['payment_address']['row'] }}">*/
/* 					<div id="payment-address">*/
/* 					  <div class="quickcheckout-heading"><i class="fa fa-user"></i> {{ not logged ? text_checkout_account : text_checkout_payment_address }}</div>*/
/* 					  <div class="quickcheckout-content">{{ guest ? guest : payment_address }}</div>*/
/* 					</div>*/
/* 				</div>*/
/* */
/* 				{% if shipping_required %} */
/* 				<div class="qc-step {% if not show_shipping_address %}{{ 'hidden' }}{% endif %}" data-col="{{ step['shipping_address']['column'] }}" data-row="{{ step['shipping_address']['row'] }}">*/
/* 					<div id="shipping-address">*/
/* 					  <div class="quickcheckout-heading"><i class="fa fa-user"></i> {{ text_checkout_shipping_address }}</div>*/
/* 					  <div class="quickcheckout-content">{{ shipping_address ? shipping_address }}</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				{% endif %} */
/* */
/* 				{% if shipping_required %} */
/* 				<div class="qc-step {% if not shipping_module %}{{ 'hidden' }}{% endif %}" data-col="{{ step['shipping_method']['column'] }}" data-row="{{ step['shipping_method']['row'] }}">*/
/* 					<div id="shipping-method">*/
/* 					  <div class="quickcheckout-heading"><i class="fa fa-truck"></i> {{ text_checkout_shipping_method }}</div>*/
/* 					  <div class="quickcheckout-content"></div>*/
/* 					</div>*/
/* 				</div>*/
/* 				{% endif %}*/
/* */
/* 				<div class="qc-step {% if not payment_module %}{{ 'hidden' }}{% endif %}" data-col="{{ step['payment_method']['column'] }}" data-row="{{ step['payment_method']['row'] }}">*/
/* 					<div id="payment-method">*/
/* 					  <div class="quickcheckout-heading"><i class="fa fa-credit-card"></i> {{ text_checkout_payment_method }}</div>*/
/* 					  <div class="quickcheckout-content"></div>*/
/* 					</div>*/
/* 				</div>*/
/* */
/* 				{% if cart_module %} */
/* 				<div class="qc-step" data-col="{{ step['cart']['column'] }}" data-row="{{ step['cart']['row'] }}">*/
/* 				  <div id="cart1">*/
/* 					<div class="quickcheckout-content" style="border:none; padding: 0px;"></div>*/
/* 				  </div>*/
/* 				</div> */
/* 				{% endif %}*/
/* */
/* 				{% if voucher_module or coupon_module or reward_module %} */
/* 				<div class="qc-step" data-col="{{ step['coupons']['column'] }}" data-row="{{ step['coupons']['row'] }}">*/
/* 				  <div id="voucher">*/
/* 					<div class="quickcheckout-content" style="border:none; padding: 0px;overflow: hidden;">{{ voucher }}</div>*/
/* 				  </div>*/
/* 				</div>*/
/* 				{% endif %}*/
/* 				*/
/* 				<div class="qc-step" data-col="{{ step['confirm']['column'] }}" data-row="{{ step['confirm']['row'] }}">*/
/* 					<div id="terms">*/
/* 						<div class="quickcheckout-content text-right">{{ terms }}</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="row">*/
/* 				<div class="qc-col-1 col-md-{{ column[1] }}">*/
/* 				</div>*/
/* 				<div class="col-md-{{ column[4] }}">*/
/* 					<div class="row">*/
/* 						<div class="qc-col-2 col-md-{% if column[4] %}{{ ((column[2] / column[4])*12)|round(0, 'floor') }}{% else %}{{ '0' }}{% endif %}">*/
/* 		    			</div>*/
/* 		    			<div class="qc-col-3 col-md-{% if column[4] %}{{ 12 - ((column[2] / column[4])*12)|round(0, 'floor') }}{% else %}{{ '0' }}{% endif %}">*/
/* 		    			</div>*/
/* 						<div class="qc-col-4 col-md-12">*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 			<script>*/
/* 			$(function() {*/
/* 				$('.qc-step').each(function(){*/
/* 					$(this).appendTo('.qc-col-' + $(this).attr('data-col'));	*/
/* 				})*/
/* 				$('.qc-step').tsort({attr:'data-row'});*/
/* 			})*/
/* 			</script>*/
/* */
/* 		{% else %}*/
/* */
/* 			<div id="quickcheckout-disable">*/
/* 			  {% if not logged and login_module %} */
/* 			  <div class="quickcheckoutmid" id="login-box">*/
/* 				<div id="checkout">*/
/* 				  <div class="quickcheckout-heading"><i class="fa fa-sign-in"></i> {{ text_checkout_option }}</div>*/
/* 				  <div class="quickcheckout-content">{{ login }}</div>*/
/* 				</div>*/
/* 				<div class="or">{{ text_or }}</div>*/
/* 			  </div>*/
/* 			  {% endif %} */
/* 			  <div class="quickcheckoutleft">*/
/* 				<div id="payment-address">*/
/* 				  <div class="quickcheckout-heading"><i class="fa fa-user"></i> {{ not logged ? text_checkout_account : text_checkout_payment_address }}</div>*/
/* 				  <div class="quickcheckout-content">{{ guest ? guest : payment_address }}</div>*/
/* 				</div>*/
/* 				{% if shipping_required %} */
/* 				<div id="shipping-address" {% if not show_shipping_address %}{{ 'class="hidden"' }}{% endif %}>*/
/* 				  <div class="quickcheckout-heading"><i class="fa fa-user"></i> {{ text_checkout_shipping_address }}</div>*/
/* 				  <div class="quickcheckout-content">{{ shipping_address ? shipping_address }}</div>*/
/* 				</div>*/
/* 				{% endif %} */
/* 			  </div>*/
/* 			  <div class="quickcheckoutright">*/
/* 				{% if shipping_required %} */
/* 				<div id="shipping-method" {% if not shipping_module %}{{ 'class="hidden"' }}{% endif %}>*/
/* 				  <div class="quickcheckout-heading"><i class="fa fa-truck"></i> {{ text_checkout_shipping_method }}</div>*/
/* 				  <div class="quickcheckout-content"></div>*/
/* 				</div>*/
/* 				{% endif %}*/
/* 				<div id="payment-method" {% if not payment_module %}{{ 'class="hidden"' }}{% endif %}>*/
/* 				  <div class="quickcheckout-heading"><i class="fa fa-credit-card"></i> {{ text_checkout_payment_method }}</div>*/
/* 				  <div class="quickcheckout-content"></div>*/
/* 				</div>*/
/* 			  </div>*/
/* 			  {% if quickcheckout_layout == '2' %} */
/* 				<div class="quickcheckoutleft">*/
/* 				  {% if cart_module %} */
/* 				  <div id="cart1">*/
/* 					<div class="quickcheckout-content" style="border:none; padding: 0px;"></div>*/
/* 				  </div>*/
/* 				  {% endif %}*/
/* 				</div>*/
/* 				<div style="clear:right;"></div>*/
/* 				<div class="quickcheckoutright">*/
/* 				  {% if voucher_module or coupon_module or reward_module %} */
/* 				  <div id="voucher">*/
/* 					<div class="quickcheckout-content" style="border:none; padding: 0px;overflow: hidden;">{{ voucher }}</div>*/
/* 				  </div>*/
/* 				  {% endif %}*/
/* 				</div>*/
/* 			  {% elseif quickcheckout_layout == '1' or quickcheckout_layout == '3' %}*/
/* 				{% if cart_module or voucher_module or coupon_module or reward_module %}*/
/* 				<div class="quickcheckoutleft extra-width">*/
/* 				  {% if cart_module %}*/
/* 				  <div id="cart1">*/
/* 					<div class="quickcheckout-content" style="border:none; padding: 0px;"></div>*/
/* 				  </div>*/
/* 				  {% endif %}*/
/* 				  {% if voucher_module or coupon_module or reward_module %}*/
/* 				  <div id="voucher">*/
/* 					<div class="quickcheckout-content" style="border:none; padding: 0px;overflow: hidden;">{{ voucher }}</div>*/
/* 				  </div>*/
/* 				  {% endif %}*/
/* 				</div>*/
/* 				{% endif %} */
/* 			  {% endif %}*/
/* 			  <div style="clear: both;"></div>*/
/* 			</div>*/
/* */
/* 			<div class="quickcheckoutmid">*/
/* 			  <div id="terms">*/
/* 				<div class="quickcheckout-content text-right">{{ terms }}</div>*/
/* 			  </div>*/
/* 			</div>*/
/* */
/* 		{% endif %}*/
/* */
/* 	  </div>*/
/* */
/* 	  {% if html_footer %}*/
/* 	  {{ html_footer }}*/
/* 	  {% endif %}*/
/* */
/* 	{{ content_bottom }}</div>*/
/*   {{ column_right }}</div>*/
/* </div>*/
/* */
/* {% if custom_css %}*/
/* <style type="text/css">*/
/* {{ custom_css }}*/
/* </style>*/
/* {% endif %} */
/* <script type="text/javascript"><!--*/
/* {% if load_screen %} */
/* $(window).load(function() {*/
/*     $.blockUI({*/
/* 		message: '<h1 style="color:#ffffff;">{{ text_please_wait }}</h1>',*/
/* 		css: {*/
/* 			border: 'none',*/
/* 			padding: '15px',*/
/* 			backgroundColor: '#000000',*/
/* 			'-webkit-border-radius': '10px',*/
/* 			'-moz-border-radius': '10px',*/
/* 			'-khtml-border-radius': '10px',*/
/* 			'border-radius': '10px',*/
/* 			opacity: .8,*/
/* 			color: '#ffffff'*/
/* 		}*/
/* 	});*/
/* 	*/
/* 	setTimeout(function() {*/
/* 		$.unblockUI();*/
/* 	}, 2000);*/
/* });*/
/* {% endif %} */
/* */
/* {% if not logged %}*/
/* 	{% if save_data %}*/
/* 	// Save form data*/
/* 	$(document).on('change', '#payment-address input[type=\'text\'], #payment-address select', function() {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=extension/quickcheckout/checkout/save&type=payment',*/
/* 			type: 'post',*/
/* 			data: $('#payment-address input[type=\'text\'], #payment-address input[type=\'password\'], #payment-address input[type=\'checkbox\']:checked, #payment-address input[type=\'radio\']:checked, #payment-address input[type=\'hidden\'], #payment-address select, #payment-address textarea'),*/
/* 			dataType: 'json',*/
/* 			cache: false,*/
/* 			success: function(json) {*/
/* 				// No action needed*/
/* 			},*/
/* 			{% if debug %} */
/* 			error: function(xhr, ajaxOptions, thrownError) {*/
/* 				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 			}*/
/* 			{% endif %} */
/* 		});*/
/* 	});*/
/* */
/* 	$(document).on('change', '#shipping-address input[type=\'text\'], #shipping-address select', function() {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=extension/quickcheckout/checkout/save&type=shipping',*/
/* 			type: 'post',*/
/* 			data: $('#shipping-address input[type=\'text\'], #shipping-address input[type=\'password\'], #shipping-address input[type=\'checkbox\']:checked, #shipping-address input[type=\'radio\']:checked, #shipping-address input[type=\'hidden\'], #shipping-address select, #shipping-address textarea'),*/
/* 			dataType: 'json',*/
/* 			cache: false,*/
/* 			success: function(json) {*/
/* 				// No action needed*/
/* 			},*/
/* 			{% if debug %} */
/* 			error: function(xhr, ajaxOptions, thrownError) {*/
/* 				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 			}*/
/* 			{% endif %} */
/* 		});*/
/* 	});*/
/* 	{% endif %} */
/* 	*/
/* 	{% if login_module %} */
/* 	// Login Form Clicked*/
/* 	$(document).on('click', '#button-login', function() {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=extension/quickcheckout/login/validate',*/
/* 			type: 'post',*/
/* 			data: $('#checkout #login :input'),*/
/* 			dataType: 'json',*/
/* 			cache: false,*/
/* 			beforeSend: function() {*/
/* 				$('#button-login').prop('disabled', true);*/
/* 				$('#button-login').button('loading');*/
/* 			},*/
/* 			complete: function() {*/
/* 				$('#button-login').prop('disabled', false);*/
/* 				$('#button-login').button('reset');*/
/* 			},*/
/* 			success: function(json) {*/
/* 				$('.alert').remove();*/
/* */
/* 				if (json['redirect']) {*/
/* 					location = json['redirect'];*/
/* 				} else if (json['error']) {*/
/* 					$('#warning-messages').prepend('<div class="alert alert-danger" style="display: none;"><i class="fa fa-exclamation-circle"></i> ' + json['error']['warning'] + '</div>');*/
/* 					*/
/* 					$('html, body').animate({ scrollTop: 0 }, 'slow');*/
/* 					*/
/* 					$('.alert-danger').fadeIn('slow');*/
/* 				}*/
/* 			},*/
/* 			{% if debug %} */
/* 			error: function(xhr, ajaxOptions, thrownError) {*/
/* 				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 			}*/
/* 			{% endif %} */
/* 		});*/
/* 	});*/
/* 	{% endif %} */
/* */
/* // Validate Register*/
/* function validateRegister() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=extension/quickcheckout/register/validate',*/
/* 		type: 'post',*/
/* 		data: $('#payment-address input[type=\'text\'], #payment-address input[type=\'password\'], #payment-address input[type=\'checkbox\']:checked, #payment-address input[type=\'radio\']:checked, #payment-address input[type=\'hidden\'], #payment-address select, #payment-address textarea'),*/
/* 		dataType: 'json',*/
/* 		cache: false,*/
/* 		success: function(json) {*/
/* 			$('.alert, .text-danger').remove();*/
/* */
/* 			if (json['redirect']) {*/
/* 				location = json['redirect'];*/
/* 			} else if (json['error']) {*/
/* 				$('#button-payment-method').prop('disabled', false);*/
/* 				$('#button-payment-method').button('reset');*/
/* 				$('#terms input[type=\'checkbox\']').prop('checked', false);*/
/* 				*/
/* 				$('.fa-spinner').remove();*/
/* 				*/
/* 				$('html, body').animate({ scrollTop: 0 }, 'slow');*/
/* 							*/
/* 				if (json['error']['warning']) {*/
/* 					$('#warning-messages').prepend('<div class="alert alert-danger" style="display: none;"><i class="fa fa-exclamation-circle"></i> ' + json['error']['warning'] + '</div>');*/
/* 					*/
/* 					$('.alert-danger').fadeIn('slow');*/
/* 				}*/
/* */
/* 				{% if text_error %} */
/* 					if (json['error']['password']) {*/
/* 						$('#payment-address input[name=\'password\']').after('<div class="text-danger">' + json['error']['password'] + '</div>');*/
/* 					}*/
/* */
/* 					if (json['error']['confirm']) {*/
/* 						$('#payment-address input[name=\'confirm\']').after('<div class="text-danger">' + json['error']['confirm'] + '</div>');*/
/* 					}*/
/* 				{% endif %} */
/* 				{% if highlight_error %} */
/* 					if (json['error']['password']) {*/
/* 						$('#payment-address input[name=\'password\']').css('border', '1px solid #f00').css('background', '#F8ACAC');*/
/* 					}*/
/* */
/* 					if (json['error']['confirm']) {*/
/* 						$('#payment-address input[name=\'confirm\']').css('border', '1px solid #f00').css('background', '#F8ACAC');*/
/* 					}*/
/* 				{% endif %} */
/* 			} else {*/
/* 				{% if shipping_required %} */
/* 				var shipping_address = $('#payment-address input[name=\'shipping_address\']:checked').val();*/
/* */
/* 				if (shipping_address) {*/
/* 					validateShippingMethod();*/
/* 				} else {*/
/* 					validateGuestShippingAddress();*/
/* 				}*/
/* 				{% else %}  */
/* 				validatePaymentMethod();*/
/* 				{% endif %} */
/* 			}*/
/* 		},*/
/* 		{% if debug %} */
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 		{% endif %} */
/* 	});*/
/* }*/
/* */
/* // Validate Guest Payment Address*/
/* function validateGuestAddress() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=extension/quickcheckout/guest/validate',*/
/* 		type: 'post',*/
/* 		data: $('#payment-address input[type=\'text\'], #payment-address input[type=\'checkbox\']:checked, #payment-address input[type=\'radio\']:checked, #payment-address select, #payment-address textarea'),*/
/* 		dataType: 'json',*/
/* 		cache: false,*/
/* 		success: function(json) {		*/
/* 			$('.alert, .text-danger').remove();*/
/* */
/* 			if (json['redirect']) {*/
/* 				location = json['redirect'];*/
/* 			} else if (json['error']) {*/
/* 				$('#button-payment-method').prop('disabled', false);*/
/* 				$('#button-payment-method').button('reset');*/
/* 				$('#terms input[type=\'checkbox\']').prop('checked', false);*/
/* 				*/
/* 				$('.fa-spinner').remove();*/
/* 				*/
/* 				$('html, body').animate({ scrollTop: 0 }, 'slow');*/
/* 			*/
/* 				if (json['error']['warning']) {*/
/* 					$('#warning-messages').prepend('<div class="alert alert-danger" style="display: none;"><i class="fa fa-exclamation-circle"></i> ' + json['error']['warning'] + '</div>');*/
/* 					*/
/* 					$('.alert-danger').fadeIn('slow');*/
/* 				}*/
/* */
/* 				{% if text_error %} */
/* 					for (i in json['error']) {*/
/* 						var element = $('#input-payment-' + i.replace('_', '-'));*/
/* 						*/
/* 						if ($(element).parent().hasClass('input-group')) {*/
/* 							$(element).parent().after('<div class="text-danger">' + json['error'][i] + '</div>');*/
/* 						} else {*/
/* 							$(element).after('<div class="text-danger">' + json['error'][i] + '</div>');*/
/* 						}*/
/* 					}*/
/* 				{% endif %} */
/* 				{% if highlight_error %} */
/* 					for (i in json['error']) {*/
/* 						var element = $('#input-payment-' + i.replace('_', '-'));*/
/* */
/* 						$(element).css('border', '1px solid #f00').css('background', '#F8ACAC');*/
/* 					}*/
/* 				{% endif %} */
/* 			} else {*/
/* 				var create_account = $('#payment-address input[name=\'create_account\']:checked').val();*/
/* */
/* 				{% if shipping_required %} */
/* 				var shipping_address = $('#payment-address input[name=\'shipping_address\']:checked').val();*/
/* */
/* 				if (create_account) {*/
/* 					validateRegister();*/
/* 				} else {*/
/* 					if (shipping_address) {*/
/* 						validateShippingMethod();*/
/* 					} else {*/
/* 						validateGuestShippingAddress();*/
/* 					}*/
/* 				}*/
/* 				{% else %}   */
/* 				if (create_account) {*/
/* 					validateRegister();*/
/* 				} else {*/
/* 					validatePaymentMethod();*/
/* 				}*/
/* 				{% endif %}*/
/* 			}*/
/* 		},*/
/* 		{% if debug %} */
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 		{% endif %} */
/* 	});*/
/* }*/
/* */
/* // Validate Guest Shipping Address*/
/* function validateGuestShippingAddress() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=extension/quickcheckout/guest_shipping/validate',*/
/* 		type: 'post',*/
/* 		data: $('#shipping-address input[type=\'text\'], #shipping-address input[type=\'checkbox\']:checked, #shipping-address input[type=\'radio\']:checked, #shipping-address select, #shipping-address textarea'),*/
/* 		dataType: 'json',*/
/* 		cache: false,*/
/* 		success: function(json) {*/
/* 			$('.alert, .text-danger').remove();*/
/* */
/* 			if (json['redirect']) {*/
/* 				location = json['redirect'];*/
/* 			} else if (json['error']) {*/
/* 				$('#button-payment-method').prop('disabled', false);*/
/* 				$('#button-payment-method').button('reset');*/
/* 				$('#terms input[type=\'checkbox\']').prop('checked', false);*/
/* 				*/
/* 				$('.fa-spinner').remove();*/
/* 				*/
/* 				$('html, body').animate({ scrollTop: 0 }, 'slow');*/
/* 				*/
/* 				if (json['error']['warning']) {*/
/* 					$('#warning-messages').prepend('<div class="alert alert-danger" style="display: none;"><i class="fa fa-exclamation-circle"></i> ' + json['error']['warning'] + '</div>');*/
/* 					*/
/* 					$('.alert-danger').fadeIn('slow');*/
/* 				}*/
/* */
/* 				{% if text_error %} */
/* 					for (i in json['error']) {*/
/* 						var element = $('#input-shipping-' + i.replace('_', '-'));*/
/* 						*/
/* 						if ($(element).parent().hasClass('input-group')) {*/
/* 							$(element).parent().after('<div class="text-danger">' + json['error'][i] + '</div>');*/
/* 						} else {*/
/* 							$(element).after('<div class="text-danger">' + json['error'][i] + '</div>');*/
/* 						}*/
/* 					}*/
/* 				{% endif %} */
/* 				{% if highlight_error %} */
/* 					for (i in json['error']) {*/
/* 						var element = $('#input-shipping-' + i.replace('_', '-'));*/
/* */
/* 						$(element).css('border', '1px solid #f00').css('background', '#F8ACAC');*/
/* 					}*/
/* 				{% endif %} */
/* 			} else {*/
/* 				validateShippingMethod();*/
/* 			}*/
/* 		},*/
/* 		{% if debug %} */
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 		{% endif %} */
/* 	});*/
/* }*/
/* */
/* // Confirm Payment*/
/* $(document).on('click', '#button-payment-method', function() {*/
/* 	$('#button-payment-method').prop('disabled', true);*/
/* 	$('#button-payment-method').button('loading');*/
/* 	*/
/* 	$('#button-payment-method').after('<i class="fa fa-spinner fa-spin"></i>');*/
/* 	*/
/* 	validateGuestAddress();*/
/* });*/
/* {% else %}   */
/* // Validate Payment Address*/
/* function validatePaymentAddress() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=extension/quickcheckout/payment_address/validate',*/
/* 		type: 'post',*/
/* 		data: $('#payment-address input[type=\'text\'], #payment-address input[type=\'password\'], #payment-address input[type=\'checkbox\']:checked, #payment-address input[type=\'radio\']:checked, #payment-address input[type=\'hidden\'], #payment-address select, #payment-address textarea'),*/
/* 		dataType: 'json',*/
/* 		cache: false,*/
/* 		success: function(json) {*/
/* 			$('.alert, .text-danger').remove();*/
/* */
/* 			if (json['redirect']) {*/
/* 				location = json['redirect'];*/
/* 			} else if (json['error']) {*/
/* 				$('#button-payment-method').prop('disabled', false);*/
/* 				$('#button-payment-method').button('reset');*/
/* 				$('#terms input[type=\'checkbox\']').prop('checked', false);*/
/* 				*/
/* 				$('.fa-spinner').remove();*/
/* 				*/
/* 				$('html, body').animate({ scrollTop: 0 }, 'slow');*/
/* 				*/
/* 				if (json['error']['warning']) {*/
/* 					$('#warning-messages').prepend('<div class="alert alert-danger" style="display: none;"><i class="fa fa-exclamation-circle"></i> ' + json['error']['warning'] + '</div>');*/
/* 					*/
/* 					$('.alert-danger').fadeIn('slow');*/
/* 				}*/
/* */
/* 				{% if text_error %} */
/* 					for (i in json['error']) {*/
/* 						var element = $('#input-payment-' + i.replace('_', '-'));*/
/* 						*/
/* 						if ($(element).parent().hasClass('input-group')) {*/
/* 							$(element).parent().after('<div class="text-danger">' + json['error'][i] + '</div>');*/
/* 						} else {*/
/* 							$(element).after('<div class="text-danger">' + json['error'][i] + '</div>');*/
/* 						}*/
/* 					}*/
/* 				{% endif %} */
/* 				{% if highlight_error %} */
/* 					for (i in json['error']) {*/
/* 						var element = $('#input-payment-' + i.replace('_', '-'));*/
/* */
/* 						$(element).css('border', '1px solid #f00').css('background', '#F8ACAC');*/
/* 					}*/
/* 				{% endif %} */
/* 			} else {*/
/* 				{% if shipping_required %} */
/* 					validateShippingAddress();*/
/* 				{% else %}   */
/* 					validatePaymentMethod();*/
/* 				{% endif %}*/
/* 			}*/
/* 		},*/
/* 		{% if debug %} */
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 		{% endif %} */
/* 	});*/
/* }*/
/* */
/* {% if shipping_required %} */
/* // Validate Shipping Address*/
/* function validateShippingAddress() {*/
/* 	var payment_mode = $('input[name="payment_address"]:checked').val();*/
/* 	if (payment_mode == 'new') {*/
/* 		{% if logged and not show_shipping_address %}*/
/* 			var addressType = '#payment-address';*/
/* 			var shipping_mode = 'input[name="shipping_address"]:checked, ';*/
/* 		{% else %}*/
/* 			var addressType = '#shipping-address';*/
/* 			var shipping_mode = '';*/
/* 		{% endif %}*/
/* 	} else {*/
/* 		var addressType = '#shipping-address';*/
/* 		var shipping_mode = '';*/
/* 	}*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=extension/quickcheckout/shipping_address/validate',*/
/* 		type: 'post',*/
/* 		data: $(shipping_mode + addressType +' input[type=\'text\'], '+addressType +' input[type=\'password\'], '+addressType +' input[type=\'checkbox\']:checked, '+addressType +' input[type=\'radio\']:checked, '+addressType +' select, '+addressType +' textarea'),*/
/* 		dataType: 'json',*/
/* 		cache: false,*/
/* 		success: function(json) {*/
/* 			$('.alert, .text-danger').remove();*/
/* */
/* 			if (json['redirect']) {*/
/* 				location = json['redirect'];*/
/* 			} else if (json['error']) {*/
/* 				$('#button-payment-method').prop('disabled', false);*/
/* 				$('#button-payment-method').button('reset');*/
/* 				$('#terms input[type=\'checkbox\']').prop('checked', false);*/
/* 				*/
/* 				$('.fa-spinner').remove();*/
/* 				*/
/* 				$('html, body').animate({ scrollTop: 0 }, 'slow');*/
/* 				*/
/* 				if (json['error']['warning']) {*/
/* 					$('#warning-messages').prepend('<div class="alert alert-danger"><i class="fa fa-exclamation-circle"> ' + json['error']['warning'] + '</div>');*/
/* 					*/
/* 					$('.alert-danger').fadeIn('slow');*/
/* 				}*/
/* */
/* 				{% if text_error %} */
/* 					for (i in json['error']) {*/
/* 						var element = $('#input-shipping-' + i.replace('_', '-'));*/
/* 						*/
/* 						if ($(element).parent().hasClass('input-group')) {*/
/* 							$(element).parent().after('<div class="text-danger">' + json['error'][i] + '</div>');*/
/* 						} else {*/
/* 							$(element).after('<div class="text-danger">' + json['error'][i] + '</div>');*/
/* 						}*/
/* 					}*/
/* 				{% endif %} */
/* 				{% if highlight_error %} */
/* 					for (i in json['error']) {*/
/* 						var element = $('#input-shipping-' + i.replace('_', '-'));*/
/* */
/* 						$(element).css('border', '1px solid #f00').css('background', '#F8ACAC');*/
/* 					}*/
/* 				{% endif %} */
/* 			} else {*/
/* 				validateShippingMethod();*/
/* 			}*/
/* 		},*/
/* 		{% if debug %} */
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 		{% endif %} */
/* 	});*/
/* }*/
/* {% endif %} */
/* */
/* // Confirm payment*/
/* $(document).on('click', '#button-payment-method', function() {*/
/* 	$('#button-payment-method').prop('disabled', true);*/
/* 	$('#button-payment-method').button('loading');*/
/* 	*/
/* 	$('#button-payment-method').after('<i class="fa fa-spinner fa-spin"></i>');*/
/* 	*/
/* 	validatePaymentAddress();*/
/* });*/
/* {% endif %}// Close if logged php*/
/* */
/* // Payment Method*/
/* function reloadPaymentMethod() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=extension/quickcheckout/payment_method',*/
/* 		type: 'post',*/
/* 		data: $('#payment-address input[type=\'text\'], #payment-address input[type=\'checkbox\']:checked, #payment-address input[type=\'radio\']:checked, #payment-address input[type=\'hidden\'], #payment-address select, #payment-address textarea, #payment-method input[type=\'text\'], #payment-method input[type=\'checkbox\']:checked, #payment-method input[type=\'radio\']:checked, #payment-method input[type=\'hidden\'], #payment-method select, #payment-method textarea'),*/
/* 		dataType: 'html',*/
/* 		cache: false,*/
/* 		beforeSend: function() {*/
/* 			moduleLoad($('#payment-method'), {{ loading_display }} );*/
/* 		},*/
/* 		success: function(html) {*/
/* 			moduleLoaded($('#payment-method'), {{ loading_display }} );*/
/* 			*/
/* 			$('#payment-method .quickcheckout-content').html(html);*/
/* 			*/
/* 			{% if load_screen %} */
/* 			$.unblockUI();*/
/* 			{% endif %} */
/* 		},*/
/* 		{% if debug %} */
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 		{% endif %} */
/* 	});*/
/* }*/
/* */
/* function reloadPaymentMethodById(address_id) {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=extension/quickcheckout/payment_method&address_id=' + address_id,*/
/* 		type: 'post',*/
/* 		data: $('#payment-method input[type=\'checkbox\']:checked, #payment-method input[type=\'radio\']:checked, #payment-method input[type=\'hidden\'], #payment-method select, #payment-method textarea'),*/
/* 		dataType: 'html',*/
/* 		cache: false,*/
/* 		beforeSend: function() {*/
/* 			moduleLoad($('#payment-method'), {{ loading_display }} );*/
/* 		},*/
/* 		success: function(html) {*/
/* 			moduleLoaded($('#payment-method'), {{ loading_display }} );*/
/* 			*/
/* 			$('#payment-method .quickcheckout-content').html(html);*/
/* 			*/
/* 			{% if load_screen %} */
/* 			$.unblockUI();*/
/* 			{% endif %} */
/* 		},*/
/* 		{% if debug %} */
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 		{% endif %} */
/* 	});*/
/* }*/
/* */
/* // Validate Payment Method*/
/* function validatePaymentMethod() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=extension/quickcheckout/payment_method/validate',*/
/* 		type: 'post',*/
/* 		data: $('#payment-method select, #payment-method input[type=\'radio\']:checked, #payment-method input[type=\'checkbox\']:checked, #payment-method textarea'),*/
/* 		dataType: 'json',*/
/* 		cache: false,*/
/* 		success: function(json) {*/
/* 			$('.alert, .text-danger').remove();*/
/* */
/* 			if (json['redirect']) {*/
/* 				location = json['redirect'];*/
/* 			} else if (json['error']) {*/
/* 				$('#button-payment-method').prop('disabled', false);*/
/* 				$('#button-payment-method').button('reset');*/
/* 				$('#terms input[type=\'checkbox\']').prop('checked', false);*/
/* 				*/
/* 				$('.fa-spinner').remove();*/
/* 				*/
/* 				$('html, body').animate({ scrollTop: 0 }, 'slow');*/
/* 				*/
/* 				if (json['error']['warning']) {*/
/* 					$('#warning-messages').prepend('<div class="alert alert-danger" style="display: none;"><i class="fa fa-exclamation-circle"></i> ' + json['error']['warning'] + '</div>');*/
/* 					*/
/* 					$('.alert-danger').fadeIn('slow');*/
/* 				}*/
/* 			} else {*/
/* 				validateTerms();*/
/* 			}*/
/* 		},*/
/* 		{% if debug %} */
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 		{% endif %} */
/* 	});*/
/* }*/
/* */
/* // Shipping Method*/
/* {% if shipping_required %} */
/* 	function reloadShippingMethod(type) {*/
/* 		if (type == 'payment') {*/
/* 			var post_data = $('#payment-address input[type=\'text\'], #payment-address input[type=\'checkbox\']:checked, #payment-address input[type=\'radio\']:checked, #payment-address input[type=\'hidden\'], #payment-address select, #payment-address textarea, #shipping-method input[type=\'text\'], #shipping-method input[type=\'checkbox\']:checked, #shipping-method input[type=\'radio\']:checked, #shipping-method input[type=\'hidden\'], #shipping-method select, #shipping-method textarea');*/
/* 		} else {*/
/* 			var post_data = $('#shipping-address input[type=\'text\'], #shipping-address input[type=\'checkbox\']:checked, #shipping-address input[type=\'radio\']:checked, #shipping-address input[type=\'hidden\'], #shipping-address select, #shipping-address textarea, #shipping-method input[type=\'text\'], #shipping-method input[type=\'checkbox\']:checked, #shipping-method input[type=\'radio\']:checked, #shipping-method input[type=\'hidden\'], #shipping-method select, #shipping-method textarea');*/
/* 		}*/
/* 		*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=extension/quickcheckout/shipping_method',*/
/* 			type: 'post',*/
/* 			data: post_data,*/
/* 			dataType: 'html',*/
/* 			cache: false,*/
/* 			beforeSend: function() {*/
/* 				moduleLoad($('#shipping-method'), {{ loading_display }} );*/
/* 			},*/
/* 			success: function(html) {*/
/* 				moduleLoaded($('#shipping-method'), {{ loading_display }} );*/
/* 				*/
/* 				$('#shipping-method .quickcheckout-content').html(html);*/
/* 			},*/
/* 			{% if debug %} */
/* 			error: function(xhr, ajaxOptions, thrownError) {*/
/* 				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 			}*/
/* 			{% endif %} */
/* 		});*/
/* 	}*/
/* */
/* 	function reloadShippingMethodById(address_id) {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=extension/quickcheckout/shipping_method&address_id=' + address_id,*/
/* 			type: 'post',*/
/* 			data: $('#shipping-method input[type=\'text\'], #shipping-method input[type=\'checkbox\']:checked, #shipping-method input[type=\'radio\']:checked, #shipping-method input[type=\'hidden\'], #shipping-method select, #shipping-method textarea'),*/
/* 			dataType: 'html',*/
/* 			cache: false,*/
/* 			beforeSend: function() {*/
/* 				moduleLoad($('#shipping-method'), {{ loading_display }} );*/
/* 			},*/
/* 			success: function(html) {*/
/* 				moduleLoaded($('#shipping-method'), {{ loading_display }} );*/
/* 				*/
/* 				$('#shipping-method .quickcheckout-content').html(html);*/
/* 			},*/
/* 			{% if debug %} */
/* 			error: function(xhr, ajaxOptions, thrownError) {*/
/* 				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 			}*/
/* 			{% endif %} */
/* 		});*/
/* 	}*/
/* */
/* 	// Validate Shipping Method*/
/* 	function validateShippingMethod() {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=extension/quickcheckout/shipping_method/validate',*/
/* 			type: 'post',*/
/* 			data: $('#shipping-method select, #shipping-method input[type=\'radio\']:checked, #shipping-method textarea, #shipping-method input[type=\'text\']'),*/
/* 			dataType: 'json',*/
/* 			cache: false,*/
/* 			success: function(json) {*/
/* 				$('.alert, .text-danger').remove();*/
/* */
/* 				if (json['redirect']) {*/
/* 					location = json['redirect'];*/
/* 				} else if (json['error']) {*/
/* 					$('#button-payment-method').prop('disabled', false);*/
/* 					$('#button-payment-method').button('reset');*/
/* 					$('#terms input[type=\'checkbox\']').prop('checked', false);*/
/* 					*/
/* 					$('.fa-spinner').remove();*/
/* 					*/
/* 					$('html, body').animate({ scrollTop: 0 }, 'slow');*/
/* 				*/
/* 					if (json['error']['warning']) {*/
/* 						$('#warning-messages').prepend('<div class="alert alert-danger" style="display: none;"><i class="fa fa-exclamation-circle"></i> ' + json['error']['warning'] + '</div>');*/
/* 					*/
/* 						$('.alert-danger').fadeIn('slow');*/
/* 					}*/
/* 				} else {*/
/* 					validatePaymentMethod();*/
/* 				}*/
/* 			},*/
/* 			{% if debug %} */
/* 			error: function(xhr, ajaxOptions, thrownError) {*/
/* 				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 			}*/
/* 			{% endif %} */
/* 		});*/
/* 	}*/
/* {% endif %} */
/* */
/* // Validate confirm button*/
/* function validateTerms() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=extension/quickcheckout/terms/validate',*/
/* 		type: 'post',*/
/* 		data: $('#terms input[type=\'checkbox\']:checked'),*/
/* 		dataType: 'json',*/
/* 		cache: false,*/
/* 		success: function(json) {*/
/* 			if (json['redirect']) {*/
/* 				location = json['redirect'];*/
/* 			}*/
/* 		*/
/* 			if (json['error']) {*/
/* 				$('#button-payment-method').prop('disabled', false);*/
/* 				$('#button-payment-method').button('reset');*/
/* 				$('#terms input[type=\'checkbox\']').prop('checked', false);*/
/* 				*/
/* 				$('.fa-spinner').remove();*/
/* 				*/
/* 				$('html, body').animate({ scrollTop: 0 }, 'slow');*/
/* 				*/
/* 				if (json['error']['warning']) {*/
/* 					$('#warning-messages').prepend('<div class="alert alert-danger" style="display: none;"><i class="fa fa-exclamation-circle"></i> ' + json['error']['warning'] + '</div>');*/
/* 					*/
/* 					$('.alert-danger').fadeIn('slow');*/
/* 				}*/
/* 			} else {*/
/* 				loadConfirm();*/
/* 			}*/
/* 		},*/
/* 		{% if debug %} */
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 		{% endif %} */
/* 	});*/
/* }*/
/* */
/* // Load confirm*/
/* function loadConfirm() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=extension/quickcheckout/confirm',*/
/* 		dataType: 'html',*/
/* 		cache: false,*/
/* 		beforeSend: function() {*/
/* 			{% if confirmation_page %} */
/* 				$('html, body').animate({ scrollTop: 0 }, 'slow');*/
/* 			*/
/* 				{% if slide_effect %} */
/* 				$('#quickcheckoutconfirm').slideUp('slow');*/
/* 				{% else %}   */
/* 				$('#quickcheckoutconfirm').html('<div class="text-center"><i class="fa fa-spinner fa-spin fa-5x"></i></div>');*/
/* 				{% endif %} */
/* 			*/
/* 				{% if load_screen %} */
/* 				$.blockUI({*/
/* 					message: '<h1 style="color:#ffffff;">{{ text_please_wait }}</h1>',*/
/* 					css: {*/
/* 						border: 'none',*/
/* 						padding: '15px',*/
/* 						backgroundColor: '#000000',*/
/* 						'-webkit-border-radius': '10px',*/
/* 						'-moz-border-radius': '10px',*/
/* 						'-khtml-border-radius': '10px',*/
/* 						'border-radius': '10px',*/
/* 						opacity: .8,*/
/* 						color: '#ffffff'*/
/* 					}*/
/* 				});*/
/* 				{% endif %} */
/* 			{% endif %}*/
/* 		},*/
/* 		success: function(html) {*/
/* 			{% if confirmation_page %} */
/* 				{% if load_screen %} */
/* 				$.unblockUI();*/
/* 				{% endif %} */
/* 				*/
/* 				$('#quickcheckoutconfirm').hide().html(html);*/
/* 				*/
/* 				{% if not auto_submit %} */
/* 					{% if slide_effect %} */
/* 					$('#quickcheckoutconfirm').slideDown('slow');*/
/* 					{% else %}   */
/* 					$('#quickcheckoutconfirm').show();*/
/* 					{% endif %} */
/* 				{% else %}   */
/* 				$('#quickcheckoutconfirm').after('<div class="text-center"><i class="fa fa-spinner fa-spin fa-5x"></i></div>');*/
/* 				{% endif %}*/
/* 			{% else %}   */
/* 				$('#terms .terms').hide();*/
/* 				$('#payment').html(html).slideDown('fast');*/
/* 				*/
/* 				{% if auto_submit %} */
/* 				$('#payment').hide().after('<div class="text-center"><i class="fa fa-spinner fa-spin fa-5x"></i></div>');*/
/* 				{% endif %} */
/* 				*/
/* 				$('html, body').animate({ scrollTop: $('#terms').offset().top }, 'slow');*/
/* 				*/
/* 				disableCheckout();*/
/* 			{% endif %}*/
/* 		},*/
/* 		{% if debug %} */
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 		{% endif %} */
/* 	});*/
/* }*/
/* */
/* // Load cart*/
/* {% if cart_module %} */
/* function loadCart() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=extension/quickcheckout/cart',*/
/* 		dataType: 'html',*/
/* 		cache: false,*/
/* 		beforeSend: function() {*/
/* 			$('.tooltip').remove();*/
/* 			*/
/* 			moduleLoad($('#cart1'), {{ loading_display }} );*/
/* 		},*/
/* 		success: function(html) {*/
/* 			moduleLoaded($('#cart1'), {{ loading_display }} );*/
/* 			*/
/* 			$('#cart1 .quickcheckout-content').html(html);*/
/* 		},*/
/* 		{% if debug %} */
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 		{% endif %} */
/* 	});*/
/* }*/
/* */
/* 	{% if not shipping_required %} */
/* 	$(document).ready(function(){*/
/* 		loadCart();*/
/* 	});*/
/* 	{% endif %} */
/* {% endif %} */
/* */
/* {% if voucher_module or coupon_module or reward_module %} */
/* // Validate Coupon*/
/* $(document).on('click', '#button-coupon', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=extension/quickcheckout/voucher/validateCoupon',*/
/* 		type: 'post',*/
/* 		data: $('#coupon-content :input'),*/
/* 		dataType: 'json',*/
/* 		cache: false,*/
/* 		beforeSend: function() {*/
/* 			$('#button-coupon').prop('disabled', true);*/
/* 			$('#button-coupon').after('<i class="fa fa-spinner fa-spin"></i>');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-coupon').prop('disabled', false);*/
/* 			$('#coupon-content .fa-spinner').remove();*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert').remove();*/
/* 			*/
/* 			$('html, body').animate({ scrollTop: 0 }, 'slow');*/
/* */
/* 			if (json['success']) {*/
/* 				$('#success-messages').prepend('<div class="alert alert-success" style="display:none;"><i class="fa fa-check-circle"></i> ' + json['success'] + '</div>');*/
/* 				*/
/* 				$('.alert-success').fadeIn('slow');*/
/* 			} else if (json['error']) {*/
/* 				$('#warning-messages').prepend('<div class="alert alert-danger" style="display: none;"><i class="fa fa-exclamation-circle"></i> ' + json['error']['warning'] + '</div>');*/
/* */
/* 				$('.alert-danger').fadeIn('slow');*/
/* 			}*/
/* */
/* 			{% if not logged %} */
/* 				if ($('#payment-address input[name=\'shipping_address\']:checked').val()) {*/
/* 					reloadPaymentMethod();*/
/* 					*/
/* 					{% if shipping_required %} */
/* 					reloadShippingMethod('payment');*/
/* 					{% endif %} */
/* 				} else {*/
/* 					reloadPaymentMethod();*/
/* 					*/
/* 					{% if shipping_required %} */
/* 					reloadShippingMethod('shipping');*/
/* 					{% endif %} */
/* 				}*/
/* 			{% else %}   */
/* 				if ($('#payment-address input[name=\'payment_address\']:checked').val() == 'new') {*/
/* 					reloadPaymentMethod();*/
/* 				} else {*/
/* 					reloadPaymentMethodById($('#payment-address select[name=\'address_id\']').val());*/
/* 				}*/
/* 				*/
/* 				{% if shipping_required %} */
/* 				if ($('#shipping-address input[name=\'shipping_address\']:checked').val() == 'new') {*/
/* 					reloadShippingMethod('shipping');*/
/* 				} else {*/
/* 					reloadShippingMethodById($('#shipping-address select[name=\'address_id\']').val());*/
/* 				}*/
/* 				{% endif %} */
/* 			{% endif %} */
/* 			*/
/* 			{% if not shipping_required %} */
/* 			loadCart();*/
/* 			{% endif %} */
/* 		},*/
/* 		{% if debug %} */
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 		{% endif %} */
/* 	});*/
/* });*/
/* */
/* $(document).on('click', '#button-voucher', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=extension/quickcheckout/voucher/validateVoucher',*/
/* 		type: 'post',*/
/* 		data: $('#voucher-content :input'),*/
/* 		dataType: 'json',*/
/* 		cache: false,*/
/* 		beforeSend: function() {*/
/* 			$('#button-voucher').prop('disabled', true);*/
/* 			$('#button-voucher').after('<i class="fa fa-spinner fa-spin"></i>');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-voucher').prop('disabled', false);*/
/* 			$('#voucher-content .fa-spinner').remove();*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert').remove();*/
/* 			*/
/* 			$('html, body').animate({ scrollTop: 0 }, 'slow');*/
/* */
/* 			if (json['success']) {*/
/* 				$('#success-messages').prepend('<div class="alert alert-success" style="display:none;"><i class="fa fa-check-circle"></i> ' + json['success'] + '</div>');*/
/* 				*/
/* 				$('.alert-success').fadeIn('slow');*/
/* 			} else if (json['error']) {*/
/* 				$('#warning-messages').prepend('<div class="alert alert-danger" style="display: none;"><i class="fa fa-exclamation-circle"></i> ' + json['error']['warning'] + '</div>');*/
/* */
/* 				$('.alert-danger').fadeIn('slow');*/
/* 			}*/
/* */
/* 			{% if not logged %} */
/* 				if ($('#payment-address input[name=\'shipping_address\']:checked').val()) {*/
/* 					reloadPaymentMethod();*/
/* 					*/
/* 					{% if shipping_required %} */
/* 					reloadShippingMethod('payment');*/
/* 					{% endif %} */
/* 				} else {*/
/* 					reloadPaymentMethod();*/
/* 					*/
/* 					{% if shipping_required %} */
/* 					reloadShippingMethod('shipping');*/
/* 					{% endif %} */
/* 				}*/
/* 			{% else %}   */
/* 				if ($('#payment-address input[name=\'payment_address\']:checked').val() == 'new') {*/
/* 					reloadPaymentMethod();*/
/* 				} else {*/
/* 					reloadPaymentMethodById($('#payment-address select[name=\'address_id\']').val());*/
/* 				}*/
/* 				*/
/* 				{% if shipping_required %} */
/* 				if ($('#shipping-address input[name=\'shipping_address\']:checked').val() == 'new') {*/
/* 					reloadShippingMethod('shipping');*/
/* 				} else {*/
/* 					reloadShippingMethodById($('#shipping-address select[name=\'address_id\']').val());*/
/* 				}*/
/* 				{% endif %} */
/* 			{% endif %}*/
/* 			*/
/* 			{% if not shipping_required %} */
/* 			loadCart();*/
/* 			{% endif %} */
/* 		},*/
/* 		{% if debug %} */
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 		{% endif %} */
/* 	});*/
/* });*/
/* */
/* $(document).on('click', '#button-reward', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=extension/quickcheckout/voucher/validateReward',*/
/* 		type: 'post',*/
/* 		data: $('#reward-content :input'),*/
/* 		dataType: 'json',*/
/* 		cache: false,*/
/* 		beforeSend: function() {*/
/* 			$('#button-reward').prop('disabled', true);*/
/* 			$('#button-reward').after('<i class="fa fa-spinner fa-spin"></i>');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-reward').prop('disabled', false);*/
/* 			$('#reward-content .fa-spinner').remove();*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert').remove();*/
/* 			*/
/* 			$('html, body').animate({ scrollTop: 0 }, 'slow');*/
/* */
/* 			if (json['success']) {*/
/* 				$('#success-messages').prepend('<div class="alert alert-success" style="display:none;"><i class="fa fa-check-circle"></i> ' + json['success'] + '</div>');*/
/* 				*/
/* 				$('.alert-success').fadeIn('slow');*/
/* 			} else if (json['error']) {*/
/* 				$('#warning-messages').prepend('<div class="alert alert-danger" style="display: none;"><i class="fa fa-exclamation-circle"></i> ' + json['error']['warning'] + '</div>');*/
/* */
/* 				$('.alert-danger').fadeIn('slow');*/
/* 			}*/
/* */
/* 			{% if not logged %} */
/* 				if ($('#payment-address input[name=\'shipping_address\']:checked').val()) {*/
/* 					reloadPaymentMethod();*/
/* 					*/
/* 					{% if shipping_required %} */
/* 					reloadShippingMethod('payment');*/
/* 					{% endif %} */
/* 				} else {*/
/* 					reloadPaymentMethod();*/
/* 					*/
/* 					{% if shipping_required %} */
/* 					reloadShippingMethod('shipping');*/
/* 					{% endif %} */
/* 				}*/
/* 			{% else %}   */
/* 				if ($('#payment-address input[name=\'payment_address\']:checked').val() == 'new') {*/
/* 					reloadPaymentMethod();*/
/* 				} else {*/
/* 					reloadPaymentMethodById($('#payment-address select[name=\'address_id\']').val());*/
/* 				}*/
/* 				*/
/* 				{% if shipping_required %} */
/* 				if ($('#shipping-address input[name=\'shipping_address\']:checked').val() == 'new') {*/
/* 					reloadShippingMethod('shipping');*/
/* 				} else {*/
/* 					reloadShippingMethodById($('#shipping-address select[name=\'address_id\']').val());*/
/* 				}*/
/* 				{% endif %} */
/* 			{% endif %}*/
/* 			*/
/* 			{% if not shipping_required %} */
/* 			loadCart();*/
/* 			{% endif %} */
/* 		},*/
/* 		{% if debug %} */
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 		{% endif %} */
/* 	});*/
/* });*/
/* {% endif %}*/
/* */
/* {% if shipping_required %} */
/* $(document).on('focusout', 'input[name=\'postcode\']', function() {*/
/* 	{% if not logged %} */
/* 	if ($('#payment-address input[name=\'shipping_address\']:checked').val()) {*/
/* 		reloadShippingMethod('payment');*/
/* 	} else {*/
/* 		reloadShippingMethod('shipping');*/
/* 	}*/
/* 	{% else %}   */
/* 	if ($('#shipping-address input[name=\'shipping_address\']:checked').val() == 'new') {*/
/* 		reloadShippingMethod('shipping');*/
/* 	} else {*/
/* 		reloadShippingMethodById($('#shipping-address select[name=\'address_id\']').val());*/
/* 	}*/
/* 	{% endif %} */
/* });*/
/* {% endif %}*/
/* */
/* {% if highlight_error %} */
/* 	$(document).on('keydown', 'input', function() {*/
/* 		$(this).css('background', '').css('border', '');*/
/* 		*/
/* 		$(this).siblings('.text-danger').remove();*/
/* 	});*/
/* 	$(document).on('change', 'select', function() {*/
/* 		$(this).css('background', '').css('border', '');*/
/* 		*/
/* 		$(this).siblings('.text-danger').remove();*/
/* 	});*/
/* {% endif %} */
/* */
/* {% if edit_cart %} */
/* $(document).on('click', '.button-update', function() {*/
/* */
/* 	var quantity = $(this).parents('.quantity').find('input.qc-product-qantity');*/
/* 	if (quantity.length){*/
/* 		if ($(this).data('type')=='increase') {*/
/* 			quantity.val(parseInt(quantity.val())+1);*/
/* 		} else if ($(this).data('type')=='decrease') {*/
/* 			quantity.val(parseInt(quantity.val())-1);*/
/* 		}*/
/* 	}*/
/* 	*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=extension/quickcheckout/cart/update',*/
/* 		type: 'post',*/
/* 		data: $('#cart1 :input'),*/
/* 		dataType: 'json',*/
/* 		cache: false,*/
/* 		beforeSend: function() {*/
/* 			//$('#cart1 .button-update').prop('disabled', true);*/
/* 		},*/
/* 		success: function(json) {*/
/* 			if (json['redirect']) {*/
/* 				location = json['redirect'];*/
/* 			} else {*/
/* 				if (json['error']['stock']) {*/
/* 					$('#button-payment-method').attr("disabled", true);*/
/* 				} else if (json['error']['warning']) {*/
/* 						$('#warning-messages').html('<div class="alert alert-danger" style="display: none;"><i class="fa fa-exclamation-circle"></i> ' + json['error']['warning'] + '</div>');*/
/* 						$('.alert-danger').fadeIn('slow');*/
/* 						$('#button-payment-method').attr("disabled", true);*/
/* 				} else {*/
/* 					$('#warning-messages').html('');*/
/* 					$('#button-payment-method').removeAttr("disabled");*/
/* 				}*/
/* */
/* 				{% if not logged %} */
/* 					if ($('#payment-address input[name=\'shipping_address\']:checked').val()) {*/
/* 						reloadPaymentMethod();*/
/* 						*/
/* 						{% if shipping_required %} */
/* 						reloadShippingMethod('payment');*/
/* 						{% endif %} */
/* 					} else {*/
/* 						reloadPaymentMethod();*/
/* 						*/
/* 						{% if shipping_required %} */
/* 						reloadShippingMethod('shipping');*/
/* 						{% endif %} */
/* 					}*/
/* 				{% else %}   */
/* 					if ($('#payment-address input[name=\'payment_address\']:checked').val() == 'new') {*/
/* 						reloadPaymentMethod();*/
/* 					} else {*/
/* 						reloadPaymentMethodById($('#payment-address select[name=\'address_id\']').val());*/
/* 					}*/
/* 					*/
/* 					{% if shipping_required %} */
/* 					if ($('#shipping-address input[name=\'shipping_address\']:checked').val() == 'new') {*/
/* 						reloadShippingMethod('shipping');*/
/* 					} else {*/
/* 						reloadShippingMethodById($('#shipping-address select[name=\'address_id\']').val());*/
/* 					}*/
/* 					{% endif %} */
/* 				{% endif %} */
/* 				*/
/* 				{% if not shipping_required %} */
/* 				loadCart();*/
/* 				{% endif %} */
/* 			}*/
/* 		},*/
/* 		{% if debug %} */
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 		{% endif %} */
/* 	});*/
/* });*/
/* */
/* $(document).on('click', '.button-remove', function() {*/
/* 	var remove_id = $(this).attr('data-remove');*/
/* */
/* 	$.ajax({*/
/* 		url: 'index.php?route=extension/quickcheckout/cart/update&remove=' + remove_id,*/
/* 		type: 'get',*/
/* 		dataType: 'json',*/
/* 		cache: false,*/
/* 		beforeSend: function() {*/
/* 			$('#cart1 .button-remove').prop('disabled', true);*/
/* 		},*/
/* 		success: function(json) {*/
/* 			if (json['redirect']) {*/
/* 				location = json['redirect'];*/
/* 			} else {*/
/* 				{% if not logged %} */
/* 					if ($('#payment-address input[name=\'shipping_address\']:checked').val()) {*/
/* 						reloadPaymentMethod();*/
/* 						*/
/* 						{% if shipping_required %} */
/* 						reloadShippingMethod('payment');*/
/* 						{% endif %} */
/* 					} else {*/
/* 						reloadPaymentMethod();*/
/* 						*/
/* 						{% if shipping_required %} */
/* 						reloadShippingMethod('shipping');*/
/* 						{% endif %} */
/* 					}*/
/* 				{% else %}   */
/* 					if ($('#payment-address input[name=\'payment_address\']:checked').val() == 'new') {*/
/* 						reloadPaymentMethod();*/
/* 					} else {*/
/* 						reloadPaymentMethodById($('#payment-address select[name=\'address_id\']').val());*/
/* 					}*/
/* 					*/
/* 					{% if shipping_required %} */
/* 					if ($('#shipping-address input[name=\'shipping_address\']:checked').val() == 'new') {*/
/* 						reloadShippingMethod('shipping');*/
/* 					} else {*/
/* 						reloadShippingMethodById($('#shipping-address select[name=\'address_id\']').val());*/
/* 					}*/
/* 					{% endif %} */
/* 				{% endif %}*/
/* 				*/
/* 				{% if not shipping_required %} */
/* 				loadCart();*/
/* 				{% endif %} */
/* 			}*/
/* 		},*/
/* 		{% if debug %} */
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 		{% endif %} */
/* 	});*/
/* */
/* 	return false;*/
/* });*/
/* {% endif %}*/
/* */
/* $('.date').datetimepicker({*/
/* 	format: 'YYYY-MM-DD',*/
/* 	locale: 'ru'*/
/* });*/
/* */
/* $('.time').datetimepicker({*/
/* 	format: 'HH:mm',*/
/* 	locale: 'ru'*/
/* });*/
/* */
/* $('.datetime').datetimepicker({*/
/* 	locale: 'ru'*/
/* });*/
/* //--></script>*/
/* {% if error_warning %}*/
/* 	<script type="text/javascript"><!--*/
/* 		  	$('#button-payment-method').attr("disabled", true);*/
/* 	//--></script>*/
/* {% endif %}*/
/* {{ footer }}*/
