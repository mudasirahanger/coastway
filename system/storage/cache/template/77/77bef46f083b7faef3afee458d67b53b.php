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

/* catalog/view/template/common/menu.twig */
class __TwigTemplate_926ffb414a312f5f39d88b837891dc1a extends Template
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
        if (($context["categories"] ?? null)) {
            // line 2
            echo "<ul class=\"list-inline menu-top\">
          <li class=\"list-inline-item\"><a href=\"/\">Home</a></li>
          ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 5
                echo "          <li class=\"list-inline-item\"><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 5);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 5);
                echo "</a></li>     
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 6
            echo "     
          <li class=\"list-inline-item\"><a href=\"\" class=\"sale-color\">Sale</a></li>
        </ul>
  <!-- <div class=\"container\">
    <nav id=\"menu\" class=\"navbar navbar-expand-lg navbar-light bg-primary\">
      <div id=\"category\" class=\"d-block d-sm-block d-lg-none\">";
            // line 11
            echo ($context["text_category"] ?? null);
            echo "</div>
      <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#narbar-menu\"><i class=\"fa-solid fa-bars\"></i></button>
      <div class=\"collapse navbar-collapse\" id=\"narbar-menu\">
        <ul class=\"nav navbar-nav\">
          ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 16
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 16)) {
                    // line 17
                    echo "              <li class=\"nav-item dropdown\"><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 17);
                    echo "\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 17);
                    echo "</a>
                <div class=\"dropdown-menu\">
                  <div class=\"dropdown-inner\">
                    ";
                    // line 20
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 20), (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 20)) / twig_round(twig_get_attribute($this->env, $this->source, $context["category"], "column", [], "any", false, false, false, 20), 1, "ceil"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                        // line 21
                        echo "                      <ul class=\"list-unstyled\">
                        ";
                        // line 22
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["children"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 23
                            echo "                          <li><a href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 23);
                            echo "\" class=\"nav-link\">";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 23);
                            echo "</a></li>
                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 25
                        echo "                      </ul>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 27
                    echo "                  </div>
                  <a href=\"";
                    // line 28
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 28);
                    echo "\" class=\"see-all\">";
                    echo ($context["text_all"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 28);
                    echo "</a>
                </div>
              </li>
            ";
                } else {
                    // line 32
                    echo "              <li class=\"nav-item\"><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 32);
                    echo "\" class=\"nav-link\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 32);
                    echo "</a></li>
            ";
                }
                // line 34
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "        </ul>
      </div>
    </nav>
  </div> -->
";
        }
    }

    public function getTemplateName()
    {
        return "catalog/view/template/common/menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 35,  139 => 34,  131 => 32,  120 => 28,  117 => 27,  110 => 25,  99 => 23,  95 => 22,  92 => 21,  88 => 20,  79 => 17,  76 => 16,  72 => 15,  65 => 11,  58 => 6,  47 => 5,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/common/menu.twig", "C:\\xampp8.1\\htdocs\\zuhaibleathers.local\\catalog\\view\\template\\common\\menu.twig");
    }
}
