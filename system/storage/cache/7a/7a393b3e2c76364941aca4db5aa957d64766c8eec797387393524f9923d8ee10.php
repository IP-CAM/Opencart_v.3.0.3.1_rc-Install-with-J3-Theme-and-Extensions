<?php

/* extension/payment/yandex_money.twig */
class __TwigTemplate_81510c1671034bb9735485a842de14951b38f99c29b79360b82181d5266fc4e2 extends Twig_Template
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
                <button type=\"submit\" form=\"form-payment-yandex-money\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "button_save"), "method");
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
                <a href=\"";
        // line 7
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "button_cancel"), "method");
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a>
            </div>
            <h1>";
        // line 9
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "module_title"), "method");
        echo "</h1>
            <ul class=\"breadcrumb\">
                ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
            echo "                <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "            </ul>
        </div>
    </div>

    <div class=\"container-fluid\">
        ";
        // line 19
        if ((isset($context["successMessage"]) ? $context["successMessage"] : null)) {
            // line 20
            echo "        <div class=\"alert alert-success\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["successMessage"]) ? $context["successMessage"] : null);
            echo "
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
        </div>
        ";
        }
        // line 24
        echo "        ";
        if ((isset($context["is_needed_show_nps"]) ? $context["is_needed_show_nps"] : null)) {
            // line 25
            echo "            <div class=\"alert alert-success yandex_money_nps_block\">
                <i class=\"fa fa-exclamation-circle\"></i>
                ";
            // line 27
            echo (isset($context["nps_block_text"]) ? $context["nps_block_text"] : null);
            echo "
                <button type=\"button\" class=\"close yandex_money_nps_close\"  data-dismiss=\"alert\"
                        data-link=\"";
            // line 29
            echo (isset($context["callback_off_nps"]) ? $context["callback_off_nps"] : null);
            echo "\">&times;</button>
            </div>
        ";
        }
        // line 32
        echo "        <ul class=\"nav nav-tabs\">
            <li";
        // line 33
        echo ((((isset($context["lastActiveTab"]) ? $context["lastActiveTab"] : null) == "tab-kassa")) ? (" class=\"active\"") : (""));
        echo "><a href=\"#tab-kassa\" data-toggle=\"tab\">";
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "kassa_tab_header"), "method");
        echo "</a></li>
            <li";
        // line 34
        echo ((((isset($context["lastActiveTab"]) ? $context["lastActiveTab"] : null) == "tab-wallet")) ? (" class=\"active\"") : (""));
        echo "><a href=\"#tab-wallet\" data-toggle=\"tab\">";
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "wallet_tab_header"), "method");
        echo "</a></li>
            <li";
        // line 35
        echo ((((isset($context["lastActiveTab"]) ? $context["lastActiveTab"] : null) == "tab-billing")) ? (" class=\"active\"") : (""));
        echo "><a href=\"#tab-billing\" data-toggle=\"tab\">";
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "billing_tab_header"), "method");
        echo "</a></li>
            <li";
        // line 36
        echo ((((isset($context["lastActiveTab"]) ? $context["lastActiveTab"] : null) == "tab-metrika")) ? (" class=\"active\"") : (""));
        echo "><a href=\"#tab-metrika\" data-toggle=\"tab\">";
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "metrika_tab_header"), "method");
        echo "</a></li>
            <li";
        // line 37
        echo ((((isset($context["lastActiveTab"]) ? $context["lastActiveTab"] : null) == "tab-market")) ? (" class=\"active\"") : (""));
        echo "><a href=\"#tab-market\" data-toggle=\"tab\">";
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "market_tab_header"), "method");
        echo "</a></li>
            <li";
        // line 38
        echo ((((isset($context["lastActiveTab"]) ? $context["lastActiveTab"] : null) == "tab-updater")) ? (" class=\"active\"") : (""));
        echo "><a href=\"#tab-updater\" data-toggle=\"tab\">";
        echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "get", array(0 => "updater_tab_header"), "method");
        echo "</a></li>
        </ul>
        <form action=\"";
        // line 40
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-payment-yandex-money\" class=\"form-horizontal\">
            <input type=\"hidden\" name=\"yandex_money_nps_prev_vote_time\" value=\"";
        // line 41
        echo (isset($context["yandex_money_nps_prev_vote_time"]) ? $context["yandex_money_nps_prev_vote_time"] : null);
        echo "\">
            <input type=\"hidden\" name=\"language_reload\" value=\"1\" />
            <input type=\"hidden\" name=\"last_active_tab\" id=\"last-active-tab\" value=\"";
        // line 43
        echo (isset($context["lastActiveTab"]) ? $context["lastActiveTab"] : null);
        echo "\" />
            <div class=\"tab-content bootstrap\">
                <div class=\"tab-pane";
        // line 45
        echo ((((isset($context["lastActiveTab"]) ? $context["lastActiveTab"] : null) == "tab-kassa")) ? (" active") : (""));
        echo "\" id=\"tab-kassa\">
                    ";
        // line 46
        $this->loadTemplate("extension/payment/yandex_money/kassa.twig", "extension/payment/yandex_money.twig", 46)->display($context);
        // line 47
        echo "                </div>
                <div class=\"tab-pane";
        // line 48
        echo ((((isset($context["lastActiveTab"]) ? $context["lastActiveTab"] : null) == "tab-wallet")) ? (" active") : (""));
        echo "\" id=\"tab-wallet\">
                    ";
        // line 49
        $this->loadTemplate("extension/payment/yandex_money/wallet.twig", "extension/payment/yandex_money.twig", 49)->display($context);
        // line 50
        echo "                </div>
                <div class=\"tab-pane";
        // line 51
        echo ((((isset($context["lastActiveTab"]) ? $context["lastActiveTab"] : null) == "tab-billing")) ? (" active") : (""));
        echo "\" id=\"tab-billing\">
                    ";
        // line 52
        $this->loadTemplate("extension/payment/yandex_money/billing.twig", "extension/payment/yandex_money.twig", 52)->display($context);
        // line 53
        echo "                </div>
                <div class=\"tab-pane";
        // line 54
        echo ((((isset($context["lastActiveTab"]) ? $context["lastActiveTab"] : null) == "tab-metrika")) ? (" active") : (""));
        echo "\" id=\"tab-metrika\">
                    ";
        // line 55
        $this->loadTemplate("extension/payment/yandex_money/metrika.twig", "extension/payment/yandex_money.twig", 55)->display($context);
        // line 56
        echo "                </div>
                <div class=\"tab-pane";
        // line 57
        echo ((((isset($context["lastActiveTab"]) ? $context["lastActiveTab"] : null) == "tab-market")) ? (" active") : (""));
        echo "\" id=\"tab-market\">
                    ";
        // line 58
        $this->loadTemplate("extension/payment/yandex_money/market.twig", "extension/payment/yandex_money.twig", 58)->display($context);
        // line 59
        echo "                </div>
                <div class=\"tab-pane";
        // line 60
        echo ((((isset($context["lastActiveTab"]) ? $context["lastActiveTab"] : null) == "tab-updater")) ? (" active") : (""));
        echo "\" id=\"tab-updater\">
                    ";
        // line 61
        $this->loadTemplate("extension/payment/yandex_money/updater.twig", "extension/payment/yandex_money.twig", 61)->display($context);
        // line 62
        echo "                </div>
            </div>
        </form>
    </div>
</div>

<script>
jQuery(document).ready(function () {
    var buttons = jQuery('.enable-button');
    buttons.change(function () {
        if (this.checked) {
            for (var i = 0; i < buttons.length; ++i) {
                if (buttons[i] != this) {
                    buttons[i].checked = false;
                }
            }
        }
    });
    var currentTabInput = jQuery('#last-active-tab')[0];
    \$('ul.nav-tabs li').on('shown.bs.tab', function (e) {
        currentTabInput.value = e.target.getAttribute('href').substr(1);
    });

    function yandex_money_nps_close() {
        \$.ajax({url: \$('.yandex_money_nps_close').data('link')})
            .done(function () {
                \$('.yandex_money_nps_block').slideUp();
                \$('input[name=yandex_money_nps_prev_vote_time]').val('";
        // line 89
        echo (isset($context["yandex_money_nps_current_vote_time"]) ? $context["yandex_money_nps_current_vote_time"] : null);
        echo "');
            });
    }

    function yandex_money_nps_goto() {
        window.open('https://yandex.ru/poll/5YnSCJumJDKHPi4hLiMDyZ');
        yandex_money_nps_close();
    }

    \$('.yandex_money_nps_link').on('click', yandex_money_nps_goto);
    \$('.yandex_money_nps_close').on('click', yandex_money_nps_close);
});
</script>

";
        // line 103
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "extension/payment/yandex_money.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 103,  228 => 89,  199 => 62,  197 => 61,  193 => 60,  190 => 59,  188 => 58,  184 => 57,  181 => 56,  179 => 55,  175 => 54,  172 => 53,  170 => 52,  166 => 51,  163 => 50,  161 => 49,  157 => 48,  154 => 47,  152 => 46,  148 => 45,  143 => 43,  138 => 41,  134 => 40,  127 => 38,  121 => 37,  115 => 36,  109 => 35,  103 => 34,  97 => 33,  94 => 32,  88 => 29,  83 => 27,  79 => 25,  76 => 24,  68 => 20,  66 => 19,  59 => 14,  48 => 12,  44 => 11,  39 => 9,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*     <div class="page-header">*/
/*         <div class="container-fluid">*/
/*             <div class="pull-right">*/
/*                 <button type="submit" form="form-payment-yandex-money" data-toggle="tooltip" title="{{ language.get('button_save') }}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/*                 <a href="{{ cancel }}" data-toggle="tooltip" title="{{ language.get('button_cancel') }}" class="btn btn-default"><i class="fa fa-reply"></i></a>*/
/*             </div>*/
/*             <h1>{{ language.get('module_title') }}</h1>*/
/*             <ul class="breadcrumb">*/
/*                 {% for breadcrumb in breadcrumbs %}*/
/*                 <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*                 {% endfor %}*/
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="container-fluid">*/
/*         {%  if successMessage %}*/
/*         <div class="alert alert-success"><i class="fa fa-exclamation-circle"></i> {{ successMessage }}*/
/*             <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*         </div>*/
/*         {%  endif %}*/
/*         {%  if is_needed_show_nps %}*/
/*             <div class="alert alert-success yandex_money_nps_block">*/
/*                 <i class="fa fa-exclamation-circle"></i>*/
/*                 {{ nps_block_text }}*/
/*                 <button type="button" class="close yandex_money_nps_close"  data-dismiss="alert"*/
/*                         data-link="{{ callback_off_nps }}">&times;</button>*/
/*             </div>*/
/*         {% endif %}*/
/*         <ul class="nav nav-tabs">*/
/*             <li{{ (lastActiveTab == 'tab-kassa' ? ' class="active"' : '') }}><a href="#tab-kassa" data-toggle="tab">{{ language.get('kassa_tab_header') }}</a></li>*/
/*             <li{{ (lastActiveTab == 'tab-wallet' ? ' class="active"' : '') }}><a href="#tab-wallet" data-toggle="tab">{{ language.get('wallet_tab_header') }}</a></li>*/
/*             <li{{ (lastActiveTab == 'tab-billing' ? ' class="active"' : '') }}><a href="#tab-billing" data-toggle="tab">{{ language.get('billing_tab_header') }}</a></li>*/
/*             <li{{ (lastActiveTab == 'tab-metrika' ? ' class="active"' : '') }}><a href="#tab-metrika" data-toggle="tab">{{ language.get('metrika_tab_header') }}</a></li>*/
/*             <li{{ (lastActiveTab == 'tab-market' ? ' class="active"' : '') }}><a href="#tab-market" data-toggle="tab">{{ language.get('market_tab_header') }}</a></li>*/
/*             <li{{ (lastActiveTab == 'tab-updater' ? ' class="active"' : '') }}><a href="#tab-updater" data-toggle="tab">{{ language.get('updater_tab_header') }}</a></li>*/
/*         </ul>*/
/*         <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-payment-yandex-money" class="form-horizontal">*/
/*             <input type="hidden" name="yandex_money_nps_prev_vote_time" value="{{ yandex_money_nps_prev_vote_time }}">*/
/*             <input type="hidden" name="language_reload" value="1" />*/
/*             <input type="hidden" name="last_active_tab" id="last-active-tab" value="{{ lastActiveTab }}" />*/
/*             <div class="tab-content bootstrap">*/
/*                 <div class="tab-pane{{ (lastActiveTab == 'tab-kassa' ? ' active' : '') }}" id="tab-kassa">*/
/*                     {% include 'extension/payment/yandex_money/kassa.twig' %}*/
/*                 </div>*/
/*                 <div class="tab-pane{{ (lastActiveTab == 'tab-wallet' ? ' active' : '') }}" id="tab-wallet">*/
/*                     {% include 'extension/payment/yandex_money/wallet.twig' %}*/
/*                 </div>*/
/*                 <div class="tab-pane{{ (lastActiveTab == 'tab-billing' ? ' active' : '') }}" id="tab-billing">*/
/*                     {% include 'extension/payment/yandex_money/billing.twig' %}*/
/*                 </div>*/
/*                 <div class="tab-pane{{ (lastActiveTab == 'tab-metrika' ? ' active' : '') }}" id="tab-metrika">*/
/*                     {% include 'extension/payment/yandex_money/metrika.twig' %}*/
/*                 </div>*/
/*                 <div class="tab-pane{{ (lastActiveTab == 'tab-market' ? ' active' : '') }}" id="tab-market">*/
/*                     {% include 'extension/payment/yandex_money/market.twig' %}*/
/*                 </div>*/
/*                 <div class="tab-pane{{ (lastActiveTab == 'tab-updater' ? ' active' : '') }}" id="tab-updater">*/
/*                     {% include 'extension/payment/yandex_money/updater.twig' %}*/
/*                 </div>*/
/*             </div>*/
/*         </form>*/
/*     </div>*/
/* </div>*/
/* */
/* <script>*/
/* jQuery(document).ready(function () {*/
/*     var buttons = jQuery('.enable-button');*/
/*     buttons.change(function () {*/
/*         if (this.checked) {*/
/*             for (var i = 0; i < buttons.length; ++i) {*/
/*                 if (buttons[i] != this) {*/
/*                     buttons[i].checked = false;*/
/*                 }*/
/*             }*/
/*         }*/
/*     });*/
/*     var currentTabInput = jQuery('#last-active-tab')[0];*/
/*     $('ul.nav-tabs li').on('shown.bs.tab', function (e) {*/
/*         currentTabInput.value = e.target.getAttribute('href').substr(1);*/
/*     });*/
/* */
/*     function yandex_money_nps_close() {*/
/*         $.ajax({url: $('.yandex_money_nps_close').data('link')})*/
/*             .done(function () {*/
/*                 $('.yandex_money_nps_block').slideUp();*/
/*                 $('input[name=yandex_money_nps_prev_vote_time]').val('{{ yandex_money_nps_current_vote_time }}');*/
/*             });*/
/*     }*/
/* */
/*     function yandex_money_nps_goto() {*/
/*         window.open('https://yandex.ru/poll/5YnSCJumJDKHPi4hLiMDyZ');*/
/*         yandex_money_nps_close();*/
/*     }*/
/* */
/*     $('.yandex_money_nps_link').on('click', yandex_money_nps_goto);*/
/*     $('.yandex_money_nps_close').on('click', yandex_money_nps_close);*/
/* });*/
/* </script>*/
/* */
/* {{ footer }}*/
