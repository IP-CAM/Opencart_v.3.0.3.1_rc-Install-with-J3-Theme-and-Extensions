<?php

/* default/template/common/csp_search.twig */
class __TwigTemplate_b4b3b45763c404edae3f6480127bd233469e6d1f8c5dab0bda5d9f08af9b1ece extends Twig_Template
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
        echo "<div id=\"search\" class=\"input-group\">
  <input type=\"text\" name=\"search\" value=\"";
        // line 2
        echo (isset($context["search"]) ? $context["search"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["text_search"]) ? $context["text_search"] : null);
        echo "\" class=\"form-control input-lg\" />
  <span class=\"input-group-btn\">
    <button type=\"button\" class=\"btn btn-default btn-lg\"><i class=\"fa fa-search\"></i></button>
  </span>
</div>
<script type=\"text/javascript\"><!--
\$(document).ready(function() { \$('#search input[name=\\'search\\']').parent().find('button').off('click'); \$('#search input[name=\\'search\\']').parent().find('button').on('click', function() { var url = '";
        // line 8
        echo (isset($context["csp_search_url"]) ? $context["csp_search_url"] : null);
        echo "'; var value = \$('header #search input[name=\\'search\\']').val(); if (value) {if (url.indexOf('?') > -1) {url += '&search=' + encodeURIComponent(value);} else {url += '?search=' + encodeURIComponent(value);}} location = url; });});
--></script>";
    }

    public function getTemplateName()
    {
        return "default/template/common/csp_search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 8,  22 => 2,  19 => 1,);
    }
}
/* <div id="search" class="input-group">*/
/*   <input type="text" name="search" value="{{ search }}" placeholder="{{ text_search }}" class="form-control input-lg" />*/
/*   <span class="input-group-btn">*/
/*     <button type="button" class="btn btn-default btn-lg"><i class="fa fa-search"></i></button>*/
/*   </span>*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/* $(document).ready(function() { $('#search input[name=\'search\']').parent().find('button').off('click'); $('#search input[name=\'search\']').parent().find('button').on('click', function() { var url = '{{csp_search_url}}'; var value = $('header #search input[name=\'search\']').val(); if (value) {if (url.indexOf('?') > -1) {url += '&search=' + encodeURIComponent(value);} else {url += '?search=' + encodeURIComponent(value);}} location = url; });});*/
/* --></script>*/
