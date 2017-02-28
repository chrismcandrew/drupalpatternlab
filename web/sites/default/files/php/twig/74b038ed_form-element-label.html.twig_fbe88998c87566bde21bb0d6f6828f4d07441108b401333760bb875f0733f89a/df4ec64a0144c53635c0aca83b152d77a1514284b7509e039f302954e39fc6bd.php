<?php

/* themes/shila-drupal-theme/templates/form/form-element-label.html.twig */
class __TwigTemplate_b20b93e5d9545144d55260484cf7ad68a453fda9cc8807b31a95c1a482407359 extends Twig_Template
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
        $tags = array("set" => 16, "include" => 24);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'include'),
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

        // line 16
        $context["classes"] = array(0 => (((        // line 17
($context["title_display"] ?? null) == "after")) ? ("option") : ("")), 1 => (((        // line 18
($context["title_display"] ?? null) == "invisible")) ? ("visually-hidden") : ("")), 2 => ((        // line 19
($context["required"] ?? null)) ? ("js-form-required") : ("")), 3 => ((        // line 20
($context["required"] ?? null)) ? ("form-required") : ("")));
        // line 23
        $context["attributes"] = $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method");
        // line 24
        $this->loadTemplate("@atoms/forms/shila-label/shila-label.html.twig", "themes/shila-drupal-theme/templates/form/form-element-label.html.twig", 24)->display($context);
    }

    public function getTemplateName()
    {
        return "themes/shila-drupal-theme/templates/form/form-element-label.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 24,  49 => 23,  47 => 20,  46 => 19,  45 => 18,  44 => 17,  43 => 16,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/shila-drupal-theme/templates/form/form-element-label.html.twig", "/Users/bach/Sites/Projects/Sandbox/unh/drupalpatternlab/web/themes/shila-drupal-theme/templates/form/form-element-label.html.twig");
    }
}
