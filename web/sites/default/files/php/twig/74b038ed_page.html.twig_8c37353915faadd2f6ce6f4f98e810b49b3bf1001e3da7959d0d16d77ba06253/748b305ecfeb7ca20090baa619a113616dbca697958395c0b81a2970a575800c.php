<?php

/* themes/shila-drupal-theme/templates/layout/page.html.twig */
class __TwigTemplate_9bbe97a1dc8b5e06afa11fa85e31bac0c9a9982d428a44ac22b9caa07540e583 extends Twig_Template
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
        $tags = array("if" => 41);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 40
        echo "<div class=\"layout-container\">
  ";
        // line 41
        if ($this->getAttribute(($context["page"] ?? null), "off_canvas", array())) {
            // line 42
            echo "    <input id=\"off-canvas-checkbox\" type=\"checkbox\">
    <label for=\"off-canvas-checkbox\" id=\"off-canvas-label\" onclick=\"\"></label>
  ";
        }
        // line 45
        echo "  <div class=\"page\">
    ";
        // line 46
        if ($this->getAttribute(($context["page"] ?? null), "header", array())) {
            // line 47
            echo "      ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
            echo "
    ";
        }
        // line 49
        echo "    <main role=\"main\" class=\"main page__content\">
      <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 51
        echo "      ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "
    </main>
    ";
        // line 53
        if ($this->getAttribute(($context["page"] ?? null), "footer", array())) {
            // line 54
            echo "      ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer", array()), "html", null, true));
            echo "
    ";
        }
        // line 56
        echo "  </div>
  ";
        // line 57
        if ($this->getAttribute(($context["page"] ?? null), "off_canvas", array())) {
            // line 58
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "off_canvas", array()), "html", null, true));
            echo "
  ";
        }
        // line 60
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "themes/shila-drupal-theme/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 60,  86 => 58,  84 => 57,  81 => 56,  75 => 54,  73 => 53,  67 => 51,  64 => 49,  58 => 47,  56 => 46,  53 => 45,  48 => 42,  46 => 41,  43 => 40,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/shila-drupal-theme/templates/layout/page.html.twig", "/Users/bach/Sites/Projects/Sandbox/unh/drupalpatternlab/web/themes/shila-drupal-theme/templates/layout/page.html.twig");
    }
}
