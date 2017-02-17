<?php

/* :client:new.html.twig */
class __TwigTemplate_c9c2d235376b6586b5fcf5cadd59aa14b2cc142d493ce82414c9084eed8d8b11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":client:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a4ac09a73e4ff2c3c4fc3298e7e36e08cd0324719fb06368bbc7f29d2a51fef4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4ac09a73e4ff2c3c4fc3298e7e36e08cd0324719fb06368bbc7f29d2a51fef4->enter($__internal_a4ac09a73e4ff2c3c4fc3298e7e36e08cd0324719fb06368bbc7f29d2a51fef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":client:new.html.twig"));

        $__internal_3c2659f2a03c5567e10b3b36a961f498c6feeb908edd111774927fbfdee7f762 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c2659f2a03c5567e10b3b36a961f498c6feeb908edd111774927fbfdee7f762->enter($__internal_3c2659f2a03c5567e10b3b36a961f498c6feeb908edd111774927fbfdee7f762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":client:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4ac09a73e4ff2c3c4fc3298e7e36e08cd0324719fb06368bbc7f29d2a51fef4->leave($__internal_a4ac09a73e4ff2c3c4fc3298e7e36e08cd0324719fb06368bbc7f29d2a51fef4_prof);

        
        $__internal_3c2659f2a03c5567e10b3b36a961f498c6feeb908edd111774927fbfdee7f762->leave($__internal_3c2659f2a03c5567e10b3b36a961f498c6feeb908edd111774927fbfdee7f762_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0571a70b1234aad12861b6f1dd531b4bdec086dcc5483ee7e7f9eda4e67e164f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0571a70b1234aad12861b6f1dd531b4bdec086dcc5483ee7e7f9eda4e67e164f->enter($__internal_0571a70b1234aad12861b6f1dd531b4bdec086dcc5483ee7e7f9eda4e67e164f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6057ca35d6bd2361ef181efd8bf9306d6a142064f0ef44d5d27223f40265a318 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6057ca35d6bd2361ef181efd8bf9306d6a142064f0ef44d5d27223f40265a318->enter($__internal_6057ca35d6bd2361ef181efd8bf9306d6a142064f0ef44d5d27223f40265a318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Client creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("client_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_6057ca35d6bd2361ef181efd8bf9306d6a142064f0ef44d5d27223f40265a318->leave($__internal_6057ca35d6bd2361ef181efd8bf9306d6a142064f0ef44d5d27223f40265a318_prof);

        
        $__internal_0571a70b1234aad12861b6f1dd531b4bdec086dcc5483ee7e7f9eda4e67e164f->leave($__internal_0571a70b1234aad12861b6f1dd531b4bdec086dcc5483ee7e7f9eda4e67e164f_prof);

    }

    public function getTemplateName()
    {
        return ":client:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Client creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('client_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":client:new.html.twig", "C:\\xampp\\htdocs\\Pani-final\\app/Resources\\views/client/new.html.twig");
    }
}
