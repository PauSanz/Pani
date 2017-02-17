<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_b5a038303d2bf32b4b2b87323e4fbdc47897dc032901cd53264627a645eef7cf extends Twig_Template
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
        $__internal_5b2c9a953667cfbb914106282689fc0070cbfcc5585810384c4c05443fdd865a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b2c9a953667cfbb914106282689fc0070cbfcc5585810384c4c05443fdd865a->enter($__internal_5b2c9a953667cfbb914106282689fc0070cbfcc5585810384c4c05443fdd865a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_aefcb53275cc6c015354455611ae113f41ab8cb7fba2cb79ba024aee0887322c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aefcb53275cc6c015354455611ae113f41ab8cb7fba2cb79ba024aee0887322c->enter($__internal_aefcb53275cc6c015354455611ae113f41ab8cb7fba2cb79ba024aee0887322c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_5b2c9a953667cfbb914106282689fc0070cbfcc5585810384c4c05443fdd865a->leave($__internal_5b2c9a953667cfbb914106282689fc0070cbfcc5585810384c4c05443fdd865a_prof);

        
        $__internal_aefcb53275cc6c015354455611ae113f41ab8cb7fba2cb79ba024aee0887322c->leave($__internal_aefcb53275cc6c015354455611ae113f41ab8cb7fba2cb79ba024aee0887322c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
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
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "@Twig/Exception/exception.css.twig", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
