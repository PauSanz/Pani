<?php

/* client/edit.html.twig */
class __TwigTemplate_1f71fcc62618d2dfeeffd8d5d23ab67366ccefe66ea7f6f5de1f427835698d94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "client/edit.html.twig", 1);
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
        $__internal_198ac6cb5e7422408cba1a28ce9df7e326069c15eb9a377adbd9ac16a520410d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_198ac6cb5e7422408cba1a28ce9df7e326069c15eb9a377adbd9ac16a520410d->enter($__internal_198ac6cb5e7422408cba1a28ce9df7e326069c15eb9a377adbd9ac16a520410d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "client/edit.html.twig"));

        $__internal_2940c648d7dd986d12f270eb4c82420cb66121ea968350fed6da4602aa35c7dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2940c648d7dd986d12f270eb4c82420cb66121ea968350fed6da4602aa35c7dc->enter($__internal_2940c648d7dd986d12f270eb4c82420cb66121ea968350fed6da4602aa35c7dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "client/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_198ac6cb5e7422408cba1a28ce9df7e326069c15eb9a377adbd9ac16a520410d->leave($__internal_198ac6cb5e7422408cba1a28ce9df7e326069c15eb9a377adbd9ac16a520410d_prof);

        
        $__internal_2940c648d7dd986d12f270eb4c82420cb66121ea968350fed6da4602aa35c7dc->leave($__internal_2940c648d7dd986d12f270eb4c82420cb66121ea968350fed6da4602aa35c7dc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0f090dd4db7197d0ae75f5f69a2e299a28362da18ffc2d5cdccf17d252a15aa9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f090dd4db7197d0ae75f5f69a2e299a28362da18ffc2d5cdccf17d252a15aa9->enter($__internal_0f090dd4db7197d0ae75f5f69a2e299a28362da18ffc2d5cdccf17d252a15aa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cff3eafc79b6f13377223c89559fba2802047fccc040e2fa3a26d8f369a593d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cff3eafc79b6f13377223c89559fba2802047fccc040e2fa3a26d8f369a593d9->enter($__internal_cff3eafc79b6f13377223c89559fba2802047fccc040e2fa3a26d8f369a593d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Client edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("client_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_cff3eafc79b6f13377223c89559fba2802047fccc040e2fa3a26d8f369a593d9->leave($__internal_cff3eafc79b6f13377223c89559fba2802047fccc040e2fa3a26d8f369a593d9_prof);

        
        $__internal_0f090dd4db7197d0ae75f5f69a2e299a28362da18ffc2d5cdccf17d252a15aa9->leave($__internal_0f090dd4db7197d0ae75f5f69a2e299a28362da18ffc2d5cdccf17d252a15aa9_prof);

    }

    public function getTemplateName()
    {
        return "client/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Client edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('client_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "client/edit.html.twig", "C:\\xampp\\htdocs\\Pani-final\\app\\Resources\\views\\client\\edit.html.twig");
    }
}
