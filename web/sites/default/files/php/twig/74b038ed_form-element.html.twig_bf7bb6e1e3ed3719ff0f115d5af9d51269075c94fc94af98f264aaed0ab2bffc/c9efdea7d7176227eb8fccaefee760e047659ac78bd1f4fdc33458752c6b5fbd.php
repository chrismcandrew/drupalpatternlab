<?php

/* themes/shila-drupal-theme/templates/form/form-element.html.twig */
class __TwigTemplate_71b85decfb199813d59a51b1eaead4d9c6ec233b3a42a3a431ba9dca64384ce9 extends Twig_Template
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
        $tags = array("set" => 48, "include" => 67);
        $filters = array("clean_class" => 51);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'include'),
                array('clean_class'),
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

        // line 48
        $context["classes"] = array(0 => "js-form-item", 1 => "form-item", 2 => ("js-form-type-" . \Drupal\Component\Utility\Html::getClass(        // line 51
($context["type"] ?? null))), 3 => ("form-item-" . \Drupal\Component\Utility\Html::getClass(        // line 52
($context["name"] ?? null))), 4 => ("js-form-item-" . \Drupal\Component\Utility\Html::getClass(        // line 53
($context["name"] ?? null))), 5 => ((!twig_in_filter(        // line 54
($context["title_display"] ?? null), array(0 => "after", 1 => "before"))) ? ("form-no-label") : ("")), 6 => (((        // line 55
($context["disabled"] ?? null) == "disabled")) ? ("form-disabled") : ("")), 7 => ((        // line 56
($context["errors"] ?? null)) ? ("form-item--error") : ("")));
        // line 60
        $context["description_classes"] = array(0 => "description", 1 => (((        // line 62
($context["description_display"] ?? null) == "invisible")) ? ("visually-hidden") : ("")));
        // line 65
        $context["attributes"] = $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method");
        // line 66
        $context["description_attributes"] = $this->getAttribute($this->getAttribute(($context["description"] ?? null), "attributes", array()), "addClass", array(0 => ($context["description_classes"] ?? null)), "method");
        // line 67
        $this->loadTemplate("@molecules/forms/shila-form-element/shila-form-element.html.twig", "themes/shila-drupal-theme/templates/form/form-element.html.twig", 67)->display($context);
    }

    public function getTemplateName()
    {
        return "themes/shila-drupal-theme/templates/form/form-element.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 67,  56 => 66,  54 => 65,  52 => 62,  51 => 60,  49 => 56,  48 => 55,  47 => 54,  46 => 53,  45 => 52,  44 => 51,  43 => 48,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/shila-drupal-theme/templates/form/form-element.html.twig", "/Users/bach/Sites/Projects/Sandbox/unh/drupalpatternlab/web/themes/shila-drupal-theme/templates/form/form-element.html.twig");
    }
}
