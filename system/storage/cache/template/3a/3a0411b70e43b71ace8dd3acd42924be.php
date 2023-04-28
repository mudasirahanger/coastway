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

/* catalog/view/template/common/header.twig */
class __TwigTemplate_d178ea71c9360d135dc5a15dd0550af9 extends Template
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
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 2
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\">
<head>
  <meta charset=\"UTF-8\"/>
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <title>";
        // line 7
        echo ($context["title"] ?? null);
        echo "</title>
  <base href=\"";
        // line 8
        echo ($context["base"] ?? null);
        echo "\"/>
  ";
        // line 9
        if (($context["description"] ?? null)) {
            // line 10
            echo "    <meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\"/>
  ";
        }
        // line 12
        echo "  ";
        if (($context["keywords"] ?? null)) {
            // line 13
            echo "    <meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\"/>
  ";
        }
        // line 15
        echo "  <script src=\"";
        echo ($context["jquery"] ?? null);
        echo "\" type=\"text/javascript\"></script>
  <link href=\"";
        // line 16
        echo ($context["bootstrap"] ?? null);
        echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\"/>
  <link href=\"";
        // line 17
        echo ($context["icons"] ?? null);
        echo "\" type=\"text/css\" rel=\"stylesheet\"/>
  <link href=\"";
        // line 18
        echo ($context["stylesheet"] ?? null);
        echo "\" type=\"text/css\" rel=\"stylesheet\"/>
  <!-- custom -->
  <link href=\"catalog/view/stylesheet/custom.css\" rel=\"stylesheet\" type=\"text/css\"/>
  <script type=\"text/javascript\" src=\"catalog/view/javascript/jquery/datetimepicker/moment.min.js\"></script>
  <script type=\"text/javascript\" src=\"catalog/view/javascript/jquery/datetimepicker/moment-with-locales.min.js\"></script>
  <script type=\"text/javascript\" src=\"catalog/view/javascript/jquery/datetimepicker/daterangepicker.js\"></script>
  <link href=\"catalog/view/javascript/jquery/datetimepicker/daterangepicker.css\" rel=\"stylesheet\" type=\"text/css\"/>
  <script src=\"catalog/view/javascript/common.js\" type=\"text/javascript\"></script>
  ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 27
            echo "    <link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 27);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 27);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 27);
            echo "\"/>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 30
            echo "    <script src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["script"], "href", [], "any", false, false, false, 30);
            echo "\" type=\"text/javascript\"></script>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 33
            echo "    <link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 33);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 33);
            echo "\"/>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 36
            echo "    ";
            echo $context["analytic"];
            echo "
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "</head>
<body>
<div id=\"alert\" class=\"toast-container position-fixed top-0 end-0 p-3\"></div>
<nav id=\"top\" class=\"border-top-rmv\">
  <div class=\"container\">
    <div class=\"nav float-start\">
      <ul class=\"list-inline\">
        <!-- <li class=\"list-inline-item\">";
        // line 45
        echo ($context["currency"] ?? null);
        echo "</li>
        <li class=\"list-inline-item\">";
        // line 46
        echo ($context["language"] ?? null);
        echo "</li> -->
        <li class=\"list-inline-item\">30-day free returns</li>
        <li class=\"list-inline-item\">Fast and free delivery over \$100*</li>
      </ul>
    </div>
    <div class=\"nav float-end\">
      <ul class=\"list-inline\">
        <li class=\"list-inline-item\"><a href=\"";
        // line 53
        echo ($context["contact"] ?? null);
        echo "\">Find a store</a></li>
        <li class=\"list-inline-item\"><a href=\"";
        // line 54
        echo ($context["contact"] ?? null);
        echo "\">Customer Service</a></li>
      </ul>
    </div>
  </div>
</nav>
<header class=\"border-header\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-3 col-lg-3\">
        <div id=\"logo\">
            <h1><a href=\"";
        // line 64
        echo ($context["home"] ?? null);
        echo "\" style=\"color:#795C34;font-weight:900\">COASTWAY</a></h1>
        </div>
      </div>
      <div class=\"col-md-6\">
          ";
        // line 68
        echo ($context["menu"] ?? null);
        echo " 
      </div>
      <div class=\"col-md-3 col-lg-3\">
        <ul class=\"list-inline menu-top-right\">
          <li class=\"list-inline-item\"><a href=\"\"><i class=\"fa-solid fa-search\"></i> </a></li>
          <li class=\"list-inline-item\"><a href=\"";
        // line 73
        echo ($context["wishlist"] ?? null);
        echo "\"><i class=\"fa-solid fa-heart\"></i></a></li>
          <li class=\"list-inline-item\"><a href=\"";
        // line 74
        echo ($context["shopping_cart"] ?? null);
        echo "\"><i class=\"fa-solid fa-shopping-bag\"></i></a></li>
          <li class=\"list-inline-item\"><a href=\"";
        // line 75
        echo ($context["login"] ?? null);
        echo "\"><i class=\"fa-solid fa-user\"></i></a></li>
        </ul>
      </div>
      <!-- <div class=\"col-md-5\">";
        // line 78
        echo ($context["search"] ?? null);
        echo "</div> -->
      <!-- <div id=\"header-cart\" class=\"col-md-4 col-lg-3\">";
        // line 79
        echo ($context["cart"] ?? null);
        echo "</div> -->
    </div>
  </div>
</header>
<main>
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 79,  229 => 78,  223 => 75,  219 => 74,  215 => 73,  207 => 68,  200 => 64,  187 => 54,  183 => 53,  173 => 46,  169 => 45,  160 => 38,  151 => 36,  146 => 35,  135 => 33,  130 => 32,  121 => 30,  116 => 29,  103 => 27,  99 => 26,  88 => 18,  84 => 17,  80 => 16,  75 => 15,  69 => 13,  66 => 12,  60 => 10,  58 => 9,  54 => 8,  50 => 7,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/common/header.twig", "C:\\xampp8.1\\htdocs\\zuhaibleathers.local\\catalog\\view\\template\\common\\header.twig");
    }
}
