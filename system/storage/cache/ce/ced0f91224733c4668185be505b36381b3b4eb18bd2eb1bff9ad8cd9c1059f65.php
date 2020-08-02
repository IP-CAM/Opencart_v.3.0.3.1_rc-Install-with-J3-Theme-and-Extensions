<?php

/* default/template/common/footer.twig */
class __TwigTemplate_1529a8e19e9001b19693e9509b86f7d2eb774392dd35e1ae81dc94f7a615949d extends Twig_Template
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
        echo "
            ";
        // line 2
        echo (isset($context["yandex_metrika_html_code"]) ? $context["yandex_metrika_html_code"] : null);
        echo "
            <script type=\"text/javascript\">
                window.dataLayer = window.dataLayer || [];
                function sendEcommerceAdd(id, quantity) {
                   \$.ajax({
                        url: 'index.php?route=extension/payment/yandex_money/productInfo',
                        type: 'post',
                        data: 'id=' + id,
                        dataType: 'json',
                        success: function(json) {
                            json.quantity = quantity;
                            dataLayer.push({ecommerce: {add: {products: [json]}}});
                        }
                    });
                }
                \$(window).on(\"load\", function () {
                    var opencartCartAdd = cart.add;
                    cart.add = function (product_id, quantity) {
                        opencartCartAdd(product_id, quantity);
                        sendEcommerceAdd(product_id, typeof(quantity) !== 'undefined' ? parseInt(quantity) : 1);
                    };

                    \$('#button-cart').on('click', function() {
                        var ecommerce_product = new Array();
                        sendEcommerceAdd(\$('#product input[name=\"product_id\"]').val(), parseInt(\$('#product input[name=\"quantity\"]').val()));
                    });
                });
            </script>
            
<footer>
  <div class=\"container\">
    <div class=\"row\">
      ";
        // line 34
        if ((isset($context["informations"]) ? $context["informations"] : null)) {
            // line 35
            echo "      <div class=\"col-sm-3\">
        <h5>";
            // line 36
            echo (isset($context["text_information"]) ? $context["text_information"] : null);
            echo "</h5>
        <ul class=\"list-unstyled\">
         ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["informations"]) ? $context["informations"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 39
                echo "          <li><a href=\"";
                echo $this->getAttribute($context["information"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["information"], "title", array());
                echo "</a></li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "        </ul>
      </div>
      ";
        }
        // line 44
        echo "      <div class=\"col-sm-3\">
        <h5>";
        // line 45
        echo (isset($context["text_service"]) ? $context["text_service"] : null);
        echo "</h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"";
        // line 47
        echo (isset($context["contact"]) ? $context["contact"] : null);
        echo "\">";
        echo (isset($context["text_contact"]) ? $context["text_contact"] : null);
        echo "</a></li>
          <li><a href=\"";
        // line 48
        echo (isset($context["return"]) ? $context["return"] : null);
        echo "\">";
        echo (isset($context["text_return"]) ? $context["text_return"] : null);
        echo "</a></li>
          <li><a href=\"";
        // line 49
        echo (isset($context["sitemap"]) ? $context["sitemap"] : null);
        echo "\">";
        echo (isset($context["text_sitemap"]) ? $context["text_sitemap"] : null);
        echo "</a></li>
        </ul>
      </div>
      <div class=\"col-sm-3\">
        <h5>";
        // line 53
        echo (isset($context["text_extra"]) ? $context["text_extra"] : null);
        echo "</h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"";
        // line 55
        echo (isset($context["manufacturer"]) ? $context["manufacturer"] : null);
        echo "\">";
        echo (isset($context["text_manufacturer"]) ? $context["text_manufacturer"] : null);
        echo "</a></li>
          <li><a href=\"";
        // line 56
        echo (isset($context["voucher"]) ? $context["voucher"] : null);
        echo "\">";
        echo (isset($context["text_voucher"]) ? $context["text_voucher"] : null);
        echo "</a></li>
          <li><a href=\"";
        // line 57
        echo (isset($context["affiliate"]) ? $context["affiliate"] : null);
        echo "\">";
        echo (isset($context["text_affiliate"]) ? $context["text_affiliate"] : null);
        echo "</a></li>
          <li><a href=\"";
        // line 58
        echo (isset($context["special"]) ? $context["special"] : null);
        echo "\">";
        echo (isset($context["text_special"]) ? $context["text_special"] : null);
        echo "</a></li>
        </ul>
      </div>
      <div class=\"col-sm-3\">
        <h5>";
        // line 62
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "</h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"";
        // line 64
        echo (isset($context["account"]) ? $context["account"] : null);
        echo "\">";
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "</a></li>
          <li><a href=\"";
        // line 65
        echo (isset($context["order"]) ? $context["order"] : null);
        echo "\">";
        echo (isset($context["text_order"]) ? $context["text_order"] : null);
        echo "</a></li>
          <li><a href=\"";
        // line 66
        echo (isset($context["wishlist"]) ? $context["wishlist"] : null);
        echo "\">";
        echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
        echo "</a></li>
          <li><a href=\"";
        // line 67
        echo (isset($context["newsletter"]) ? $context["newsletter"] : null);
        echo "\">";
        echo (isset($context["text_newsletter"]) ? $context["text_newsletter"] : null);
        echo "</a></li>
        </ul>
      </div>
    </div>
    <hr>
    <p>";
        // line 72
        echo (isset($context["powered"]) ? $context["powered"] : null);
        echo "</p>

            ";
        // line 74
        if ((array_key_exists("yandex_money_kassa_show_in_footer", $context) && (isset($context["yandex_money_kassa_show_in_footer"]) ? $context["yandex_money_kassa_show_in_footer"] : null))) {
            // line 75
            echo "            <p><a href=\"https://kassa.yandex.ru/?_openstat=promo;merchants;opencart2\">Работает Яндекс.Касса</a></p>
            ";
        }
        // line 77
        echo "            
  </div>
</footer>
";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["scripts"]) ? $context["scripts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 81
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "<!--
OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
Please donate via PayPal to donate@opencart.com
//-->
</body></html>";
    }

    public function getTemplateName()
    {
        return "default/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 83,  201 => 81,  197 => 80,  192 => 77,  188 => 75,  186 => 74,  181 => 72,  171 => 67,  165 => 66,  159 => 65,  153 => 64,  148 => 62,  139 => 58,  133 => 57,  127 => 56,  121 => 55,  116 => 53,  107 => 49,  101 => 48,  95 => 47,  90 => 45,  87 => 44,  82 => 41,  71 => 39,  67 => 38,  62 => 36,  59 => 35,  57 => 34,  22 => 2,  19 => 1,);
    }
}
/* */
/*             {{ yandex_metrika_html_code }}*/
/*             <script type="text/javascript">*/
/*                 window.dataLayer = window.dataLayer || [];*/
/*                 function sendEcommerceAdd(id, quantity) {*/
/*                    $.ajax({*/
/*                         url: 'index.php?route=extension/payment/yandex_money/productInfo',*/
/*                         type: 'post',*/
/*                         data: 'id=' + id,*/
/*                         dataType: 'json',*/
/*                         success: function(json) {*/
/*                             json.quantity = quantity;*/
/*                             dataLayer.push({ecommerce: {add: {products: [json]}}});*/
/*                         }*/
/*                     });*/
/*                 }*/
/*                 $(window).on("load", function () {*/
/*                     var opencartCartAdd = cart.add;*/
/*                     cart.add = function (product_id, quantity) {*/
/*                         opencartCartAdd(product_id, quantity);*/
/*                         sendEcommerceAdd(product_id, typeof(quantity) !== 'undefined' ? parseInt(quantity) : 1);*/
/*                     };*/
/* */
/*                     $('#button-cart').on('click', function() {*/
/*                         var ecommerce_product = new Array();*/
/*                         sendEcommerceAdd($('#product input[name="product_id"]').val(), parseInt($('#product input[name="quantity"]').val()));*/
/*                     });*/
/*                 });*/
/*             </script>*/
/*             */
/* <footer>*/
/*   <div class="container">*/
/*     <div class="row">*/
/*       {% if informations %}*/
/*       <div class="col-sm-3">*/
/*         <h5>{{ text_information }}</h5>*/
/*         <ul class="list-unstyled">*/
/*          {% for information in informations %}*/
/*           <li><a href="{{ information.href }}">{{ information.title }}</a></li>*/
/*           {% endfor %}*/
/*         </ul>*/
/*       </div>*/
/*       {% endif %}*/
/*       <div class="col-sm-3">*/
/*         <h5>{{ text_service }}</h5>*/
/*         <ul class="list-unstyled">*/
/*           <li><a href="{{ contact }}">{{ text_contact }}</a></li>*/
/*           <li><a href="{{ return }}">{{ text_return }}</a></li>*/
/*           <li><a href="{{ sitemap }}">{{ text_sitemap }}</a></li>*/
/*         </ul>*/
/*       </div>*/
/*       <div class="col-sm-3">*/
/*         <h5>{{ text_extra }}</h5>*/
/*         <ul class="list-unstyled">*/
/*           <li><a href="{{ manufacturer }}">{{ text_manufacturer }}</a></li>*/
/*           <li><a href="{{ voucher }}">{{ text_voucher }}</a></li>*/
/*           <li><a href="{{ affiliate }}">{{ text_affiliate }}</a></li>*/
/*           <li><a href="{{ special }}">{{ text_special }}</a></li>*/
/*         </ul>*/
/*       </div>*/
/*       <div class="col-sm-3">*/
/*         <h5>{{ text_account }}</h5>*/
/*         <ul class="list-unstyled">*/
/*           <li><a href="{{ account }}">{{ text_account }}</a></li>*/
/*           <li><a href="{{ order }}">{{ text_order }}</a></li>*/
/*           <li><a href="{{ wishlist }}">{{ text_wishlist }}</a></li>*/
/*           <li><a href="{{ newsletter }}">{{ text_newsletter }}</a></li>*/
/*         </ul>*/
/*       </div>*/
/*     </div>*/
/*     <hr>*/
/*     <p>{{ powered }}</p>*/
/* */
/*             {% if yandex_money_kassa_show_in_footer is defined and yandex_money_kassa_show_in_footer %}*/
/*             <p><a href="https://kassa.yandex.ru/?_openstat=promo;merchants;opencart2">Работает Яндекс.Касса</a></p>*/
/*             {% endif %}*/
/*             */
/*   </div>*/
/* </footer>*/
/* {% for script in scripts %}*/
/* <script src="{{ script }}" type="text/javascript"></script>*/
/* {% endfor %}*/
/* <!--*/
/* OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.*/
/* Please donate via PayPal to donate@opencart.com*/
/* //-->*/
/* </body></html>*/
