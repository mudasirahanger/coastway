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

/* catalog/view/template/common/footer.twig */
class __TwigTemplate_f2049f3122b1f49d7a6a140460b3e106 extends Template
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
        echo "
<div class=\"container\">
    <div class=\"row\">
          <h3 class=\"fheading\">Payment Options</h5>
    </div>
    <div class=\"row text-center\">
         <div class=\"col-md-4 col-sm-4\">
          <a href=\"\"><img src=\"catalog\\view\\image\\card.png\" class=\"img-fluid\"></a>
         </div>
         <div class=\"col-md-4 col-sm-4\">
         <a href=\"\"><img src=\"catalog\\view\\image\\master-card.png\" class=\"img-fluid\"></a>
         </div>
         <div class=\"col-md-4 col-sm-4\">
         <a href=\"\"><img src=\"catalog\\view\\image\\paypal.png\" class=\"img-fluid\"></a>
         </div>
    </div>
</div>
</main>
<footer>
  <div class=\"container\">
    <div class=\"row\">
      
        <div class=\"col-sm-3\">
        <h5><a href=\"";
        // line 24
        echo ($context["home"] ?? null);
        echo "\" style=\"color:#fff;font-weight:900\">COASTWAY</a></h5>
        <p class=\"text-left\">
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
        when an unknown printer took a galley
        </p>
        </div>
    
      <div class=\"col-sm-3\">
        <h5>";
        // line 33
        echo ($context["text_service"] ?? null);
        echo "</h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"";
        // line 35
        echo ($context["contact"] ?? null);
        echo "\">";
        echo ($context["text_contact"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 36
        echo ($context["return"] ?? null);
        echo "\">";
        echo ($context["text_return"] ?? null);
        echo "</a></li>
          ";
        // line 37
        if (($context["gdpr"] ?? null)) {
            // line 38
            echo "            <li><a href=\"";
            echo ($context["gdpr"] ?? null);
            echo "\">";
            echo ($context["text_gdpr"] ?? null);
            echo "</a></li>
          ";
        }
        // line 40
        echo "          <li><a href=\"";
        echo ($context["sitemap"] ?? null);
        echo "\">";
        echo ($context["text_sitemap"] ?? null);
        echo "</a></li>
        </ul>
      </div>
      ";
        // line 43
        if (($context["informations"] ?? null)) {
            // line 44
            echo "        <div class=\"col-sm-3\">
          <h5>";
            // line 45
            echo ($context["text_information"] ?? null);
            echo "</h5>
          <ul class=\"list-unstyled\">
            ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 48
                echo "              <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 48);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 48);
                echo "</a></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "          </ul>
        </div>
      ";
        }
        // line 53
        echo "      <div class=\"col-sm-3\">
        <h5>Follow us</h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"\">facebook</li>
          <li><a href=\"\">Instagram</li>
        </ul>
      </div>
    </div>

    <!-- <p>";
        // line 62
        echo ($context["powered"] ?? null);
        echo "</p> -->
  </div>
  <div class=\"container-fluid mt-5\">
  <div class=\"row\">
       <div class=\"col footbottom\">
           <p class=\"text-center mt-3\">© coastway.com.us 2023</p>
       </div>
     </div>
  </div>
</footer>
";
        // line 72
        echo ($context["cookie"] ?? null);
        echo "
<script src=\"";
        // line 73
        echo ($context["bootstrap"] ?? null);
        echo "\" type=\"text/javascript\"></script>
";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 75
            echo "  <script src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["script"], "href", [], "any", false, false, false, 75);
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "</body></html>
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 77,  176 => 75,  172 => 74,  168 => 73,  164 => 72,  151 => 62,  140 => 53,  135 => 50,  124 => 48,  120 => 47,  115 => 45,  112 => 44,  110 => 43,  101 => 40,  93 => 38,  91 => 37,  85 => 36,  79 => 35,  74 => 33,  62 => 24,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/common/footer.twig", "C:\\xampp8.1\\htdocs\\zuhaibleathers.local\\catalog\\view\\template\\common\\footer.twig");
    }
}
