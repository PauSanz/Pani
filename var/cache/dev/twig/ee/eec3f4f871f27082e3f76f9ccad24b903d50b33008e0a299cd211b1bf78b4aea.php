<?php

/* base.html.twig */
class __TwigTemplate_4121a87bcfe731533423ab6c3c7ef40f0f275283f6f10104a91411921f8965f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d0736f9b7d0b661cee4185170229320c4baf11aa4baa9a1ffc4b20fc489b84bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0736f9b7d0b661cee4185170229320c4baf11aa4baa9a1ffc4b20fc489b84bd->enter($__internal_d0736f9b7d0b661cee4185170229320c4baf11aa4baa9a1ffc4b20fc489b84bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_4229d9696d05139cac9ab0a90f81cfae39e9ddac6c940999301678fa8abc98b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4229d9696d05139cac9ab0a90f81cfae39e9ddac6c940999301678fa8abc98b2->enter($__internal_4229d9696d05139cac9ab0a90f81cfae39e9ddac6c940999301678fa8abc98b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_d0736f9b7d0b661cee4185170229320c4baf11aa4baa9a1ffc4b20fc489b84bd->leave($__internal_d0736f9b7d0b661cee4185170229320c4baf11aa4baa9a1ffc4b20fc489b84bd_prof);

        
        $__internal_4229d9696d05139cac9ab0a90f81cfae39e9ddac6c940999301678fa8abc98b2->leave($__internal_4229d9696d05139cac9ab0a90f81cfae39e9ddac6c940999301678fa8abc98b2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d9e281eeb08bb500d913c21e732584e2a41e49c9ddbc99e21b7845d4bcb68324 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9e281eeb08bb500d913c21e732584e2a41e49c9ddbc99e21b7845d4bcb68324->enter($__internal_d9e281eeb08bb500d913c21e732584e2a41e49c9ddbc99e21b7845d4bcb68324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c16e9131b6c57f488322c0494a7288bc59fed2574fabd98f085ef58ede9595d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c16e9131b6c57f488322c0494a7288bc59fed2574fabd98f085ef58ede9595d0->enter($__internal_c16e9131b6c57f488322c0494a7288bc59fed2574fabd98f085ef58ede9595d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c16e9131b6c57f488322c0494a7288bc59fed2574fabd98f085ef58ede9595d0->leave($__internal_c16e9131b6c57f488322c0494a7288bc59fed2574fabd98f085ef58ede9595d0_prof);

        
        $__internal_d9e281eeb08bb500d913c21e732584e2a41e49c9ddbc99e21b7845d4bcb68324->leave($__internal_d9e281eeb08bb500d913c21e732584e2a41e49c9ddbc99e21b7845d4bcb68324_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7c5ad022a42992821ae6f782037c53352592d09dff759247b5204a34aa32d091 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c5ad022a42992821ae6f782037c53352592d09dff759247b5204a34aa32d091->enter($__internal_7c5ad022a42992821ae6f782037c53352592d09dff759247b5204a34aa32d091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_4f080552526134f53cff92d875662788b9776d493ab7ca237a44b5884b5049ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f080552526134f53cff92d875662788b9776d493ab7ca237a44b5884b5049ea->enter($__internal_4f080552526134f53cff92d875662788b9776d493ab7ca237a44b5884b5049ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_4f080552526134f53cff92d875662788b9776d493ab7ca237a44b5884b5049ea->leave($__internal_4f080552526134f53cff92d875662788b9776d493ab7ca237a44b5884b5049ea_prof);

        
        $__internal_7c5ad022a42992821ae6f782037c53352592d09dff759247b5204a34aa32d091->leave($__internal_7c5ad022a42992821ae6f782037c53352592d09dff759247b5204a34aa32d091_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_934eea3423d70f2ed7b25506cdc1eaf3ceaf249a24d93bc35014f11d48ee9256 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_934eea3423d70f2ed7b25506cdc1eaf3ceaf249a24d93bc35014f11d48ee9256->enter($__internal_934eea3423d70f2ed7b25506cdc1eaf3ceaf249a24d93bc35014f11d48ee9256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8c11eadf6d35f6bfe2c0e49f63a3e428914ff1378e40cdf5a1a196ea5dcaa83b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c11eadf6d35f6bfe2c0e49f63a3e428914ff1378e40cdf5a1a196ea5dcaa83b->enter($__internal_8c11eadf6d35f6bfe2c0e49f63a3e428914ff1378e40cdf5a1a196ea5dcaa83b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8c11eadf6d35f6bfe2c0e49f63a3e428914ff1378e40cdf5a1a196ea5dcaa83b->leave($__internal_8c11eadf6d35f6bfe2c0e49f63a3e428914ff1378e40cdf5a1a196ea5dcaa83b_prof);

        
        $__internal_934eea3423d70f2ed7b25506cdc1eaf3ceaf249a24d93bc35014f11d48ee9256->leave($__internal_934eea3423d70f2ed7b25506cdc1eaf3ceaf249a24d93bc35014f11d48ee9256_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ab7f497b5119299c9846cd22e2d148facfd89a1368509519377d8f71306adc13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab7f497b5119299c9846cd22e2d148facfd89a1368509519377d8f71306adc13->enter($__internal_ab7f497b5119299c9846cd22e2d148facfd89a1368509519377d8f71306adc13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_db72ef3a09e47df1320bfdd81d020c0c23b4e38ef53599b735a2802e25c3f368 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db72ef3a09e47df1320bfdd81d020c0c23b4e38ef53599b735a2802e25c3f368->enter($__internal_db72ef3a09e47df1320bfdd81d020c0c23b4e38ef53599b735a2802e25c3f368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_db72ef3a09e47df1320bfdd81d020c0c23b4e38ef53599b735a2802e25c3f368->leave($__internal_db72ef3a09e47df1320bfdd81d020c0c23b4e38ef53599b735a2802e25c3f368_prof);

        
        $__internal_ab7f497b5119299c9846cd22e2d148facfd89a1368509519377d8f71306adc13->leave($__internal_ab7f497b5119299c9846cd22e2d148facfd89a1368509519377d8f71306adc13_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\Pani-final\\app\\Resources\\views\\base.html.twig");
    }
}
