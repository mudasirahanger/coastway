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
        echo "</main>
<footer>
  <div class=\"container\">
    <div class=\"row\">
      
        <div class=\"col-sm-3\">
        <h5><a href=\"";
        // line 7
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
        // line 16
        echo ($context["text_service"] ?? null);
        echo "</h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"";
        // line 18
        echo ($context["contact"] ?? null);
        echo "\">";
        echo ($context["text_contact"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 19
        echo ($context["return"] ?? null);
        echo "\">";
        echo ($context["text_return"] ?? null);
        echo "</a></li>
          ";
        // line 20
        if (($context["gdpr"] ?? null)) {
            // line 21
            echo "            <li><a href=\"";
            echo ($context["gdpr"] ?? null);
            echo "\">";
            echo ($context["text_gdpr"] ?? null);
            echo "</a></li>
          ";
        }
        // line 23
        echo "          <li><a href=\"";
        echo ($context["sitemap"] ?? null);
        echo "\">";
        echo ($context["text_sitemap"] ?? null);
        echo "</a></li>
        </ul>
      </div>
      ";
        // line 26
        if (($context["informations"] ?? null)) {
            // line 27
            echo "        <div class=\"col-sm-3\">
          <h5>";
            // line 28
            echo ($context["text_information"] ?? null);
            echo "</h5>
          <ul class=\"list-unstyled\">
            ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 31
                echo "              <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 31);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 31);
                echo "</a></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "          </ul>
        </div>
      ";
        }
        // line 36
        echo "      <div class=\"col-sm-3\">
        <h5>Follow us</h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"\">facebook</li>
          <li><a href=\"\">Instagram</li>
        </ul>
      </div>
    </div>

    <!-- <p>";
        // line 45
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
        // line 55
        echo ($context["cookie"] ?? null);
        echo "
<script src=\"";
        // line 56
        echo ($context["bootstrap"] ?? null);
        echo "\" type=\"text/javascript\"></script>
";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 58
            echo "  <script src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["script"], "href", [], "any", false, false, false, 58);
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
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
        return array (  168 => 60,  159 => 58,  155 => 57,  151 => 56,  147 => 55,  134 => 45,  123 => 36,  118 => 33,  107 => 31,  103 => 30,  98 => 28,  95 => 27,  93 => 26,  84 => 23,  76 => 21,  74 => 20,  68 => 19,  62 => 18,  57 => 16,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/common/footer.twig", "C:\\xampp8.1\\htdocs\\zuhaibleathers.local\\catalog\\view\\template\\common\\footer.twig");
    }
}
