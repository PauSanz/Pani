<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_05d5f23bb60f8f5480e89cecd36b816689189ece8b021478b2a8ca486daaa7d0 extends Twig_Template
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
        $__internal_5d2c95a45d7170cc8a13bb329a6fa55120a246459f40d6c43a4f9a8e8df921b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d2c95a45d7170cc8a13bb329a6fa55120a246459f40d6c43a4f9a8e8df921b3->enter($__internal_5d2c95a45d7170cc8a13bb329a6fa55120a246459f40d6c43a4f9a8e8df921b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_9519bca6d6f608a71c1b66f5bf422ae9a1947b9394c25058b781dbffc4502caf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9519bca6d6f608a71c1b66f5bf422ae9a1947b9394c25058b781dbffc4502caf->enter($__internal_9519bca6d6f608a71c1b66f5bf422ae9a1947b9394c25058b781dbffc4502caf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_5d2c95a45d7170cc8a13bb329a6fa55120a246459f40d6c43a4f9a8e8df921b3->leave($__internal_5d2c95a45d7170cc8a13bb329a6fa55120a246459f40d6c43a4f9a8e8df921b3_prof);

        
        $__internal_9519bca6d6f608a71c1b66f5bf422ae9a1947b9394c25058b781dbffc4502caf->leave($__internal_9519bca6d6f608a71c1b66f5bf422ae9a1947b9394c25058b781dbffc4502caf_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
