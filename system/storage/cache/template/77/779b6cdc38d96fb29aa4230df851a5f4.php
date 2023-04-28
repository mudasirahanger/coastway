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

/* catalog/view/template/product/thumb.twig */
class __TwigTemplate_cebd547d253e7c5aa0db721a2a80cbf4 extends Template
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
        echo "<form method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"";
        echo ($context["cart"] ?? null);
        echo "\" data-oc-target=\"#header-cart\">
  <div class=\"product-thumb\">
    <div class=\"image\"><a href=\"";
        // line 3
        echo ($context["href"] ?? null);
        echo "\"><img src=\"";
        echo ($context["thumb"] ?? null);
        echo "\" alt=\"";
        echo ($context["name"] ?? null);
        echo "\" title=\"";
        echo ($context["name"] ?? null);
        echo "\" class=\"img-fluid\"/></a></div>
    <div class=\"content\">
      <div class=\"description\">
        <h4><a href=\"";
        // line 6
        echo ($context["href"] ?? null);
        echo "\">";
        echo ($context["name"] ?? null);
        echo "</a></h4>
        ";
        // line 7
        if (($context["price"] ?? null)) {
            // line 8
            echo "          <div class=\"price\">
            ";
            // line 9
            if ( !($context["special"] ?? null)) {
                // line 10
                echo "              <span class=\"price-new\">";
                echo ($context["price"] ?? null);
                echo "</span>
            ";
            } else {
                // line 12
                echo "              <span class=\"price-new\">";
                echo ($context["special"] ?? null);
                echo "</span> <span class=\"price-old\">";
                echo ($context["price"] ?? null);
                echo "</span>
            ";
            }
            // line 13
            echo "           
          </div>
        ";
        }
        // line 16
        echo "        ";
        if ((($context["review_status"] ?? null) && ($context["rating"] ?? null))) {
            // line 17
            echo "          <div class=\"rating\">
            ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 19
                echo "              ";
                if ((($context["rating"] ?? null) < $context["i"])) {
                    // line 20
                    echo "                <span class=\"fa-stack\"><i class=\"fa-regular fa-star fa-stack-1x\"></i></span>
              ";
                } else {
                    // line 22
                    echo "                <span class=\"fa-stack\"><i class=\"fa-solid fa-star fa-stack-1x\"></i><i class=\"fa-regular fa-star fa-stack-1x\"></i></span>
              ";
                }
                // line 24
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "          </div>
        ";
        }
        // line 27
        echo "      </div>
      <!-- <div class=\"button-group\">
        <button type=\"submit\" formaction=\"";
        // line 29
        echo ($context["add_to_cart"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_cart"] ?? null);
        echo "\"><i class=\"fa-solid fa-shopping-cart\"></i></button>
        <button type=\"submit\" formaction=\"";
        // line 30
        echo ($context["add_to_wishlist"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_wishlist"] ?? null);
        echo "\"><i class=\"fa-solid fa-heart\"></i></button>
        <button type=\"submit\" formaction=\"";
        // line 31
        echo ($context["add_to_compare"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_compare"] ?? null);
        echo "\"><i class=\"fa-solid fa-arrow-right-arrow-left\"></i></button>
      </div> -->
    </div>
    <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 34
        echo ($context["product_id"] ?? null);
        echo "\"/>
    <input type=\"hidden\" name=\"quantity\" value=\"";
        // line 35
        echo ($context["minimum"] ?? null);
        echo "\"/>
  </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/product/thumb.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 35,  142 => 34,  134 => 31,  128 => 30,  122 => 29,  118 => 27,  114 => 25,  108 => 24,  104 => 22,  100 => 20,  97 => 19,  93 => 18,  90 => 17,  87 => 16,  82 => 13,  74 => 12,  68 => 10,  66 => 9,  63 => 8,  61 => 7,  55 => 6,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/product/thumb.twig", "C:\\xampp8.1\\htdocs\\zuhaibleathers.local\\catalog\\view\\template\\product\\thumb.twig");
    }
}
