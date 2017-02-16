<?php

/* clinicaPaniBundle:Default:dtllsvisita.html.twig */
class __TwigTemplate_393e6f8a91cefab8c77a8d48c1d3eb617e5ff6e8a7730df107f1543ce73355dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'page_content' => array($this, 'block_page_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_38417ee0325546f3b86d2425806e258dae9eb19fa37dbc9e359cc98fee8f48c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38417ee0325546f3b86d2425806e258dae9eb19fa37dbc9e359cc98fee8f48c4->enter($__internal_38417ee0325546f3b86d2425806e258dae9eb19fa37dbc9e359cc98fee8f48c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:dtllsvisita.html.twig"));

        $__internal_aebe7d1095d58300db02487b09a3a1e0dca33aa3666e71b4bfc4bbc8a7198570 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aebe7d1095d58300db02487b09a3a1e0dca33aa3666e71b4bfc4bbc8a7198570->enter($__internal_aebe7d1095d58300db02487b09a3a1e0dca33aa3666e71b4bfc4bbc8a7198570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:dtllsvisita.html.twig"));

        // line 1
        $this->displayBlock('title', $context, $blocks);
        // line 2
        $this->displayBlock('page_content', $context, $blocks);
        
        $__internal_38417ee0325546f3b86d2425806e258dae9eb19fa37dbc9e359cc98fee8f48c4->leave($__internal_38417ee0325546f3b86d2425806e258dae9eb19fa37dbc9e359cc98fee8f48c4_prof);

        
        $__internal_aebe7d1095d58300db02487b09a3a1e0dca33aa3666e71b4bfc4bbc8a7198570->leave($__internal_aebe7d1095d58300db02487b09a3a1e0dca33aa3666e71b4bfc4bbc8a7198570_prof);

    }

    // line 1
    public function block_title($context, array $blocks = array())
    {
        $__internal_9342b98999c371064a625d17baa2456a518dc87f279eeec0d147026116c778f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9342b98999c371064a625d17baa2456a518dc87f279eeec0d147026116c778f6->enter($__internal_9342b98999c371064a625d17baa2456a518dc87f279eeec0d147026116c778f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1e756fa1c50b895c5ae5f86141f2fd160631c9f2af8649e98d7d50df70c77d7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e756fa1c50b895c5ae5f86141f2fd160631c9f2af8649e98d7d50df70c77d7c->enter($__internal_1e756fa1c50b895c5ae5f86141f2fd160631c9f2af8649e98d7d50df70c77d7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Clinica Pani";
        
        $__internal_1e756fa1c50b895c5ae5f86141f2fd160631c9f2af8649e98d7d50df70c77d7c->leave($__internal_1e756fa1c50b895c5ae5f86141f2fd160631c9f2af8649e98d7d50df70c77d7c_prof);

        
        $__internal_9342b98999c371064a625d17baa2456a518dc87f279eeec0d147026116c778f6->leave($__internal_9342b98999c371064a625d17baa2456a518dc87f279eeec0d147026116c778f6_prof);

    }

    // line 2
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_4ced9e58f953cf43e1c9640a7cb3c6280f74cafc2f08850826e4b6e3e9771af9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ced9e58f953cf43e1c9640a7cb3c6280f74cafc2f08850826e4b6e3e9771af9->enter($__internal_4ced9e58f953cf43e1c9640a7cb3c6280f74cafc2f08850826e4b6e3e9771af9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_a88e0db7c344ab7835eac50e83d7f9818e0678d47f4d586513ac741a2924efbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a88e0db7c344ab7835eac50e83d7f9818e0678d47f4d586513ac741a2924efbe->enter($__internal_a88e0db7c344ab7835eac50e83d7f9818e0678d47f4d586513ac741a2924efbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 3
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-12 col-lg-12 col-md-12\">
                <h4 class=\"\">";
        // line 6
        echo twig_escape_filter($this->env, ($context["ref"] ?? $this->getContext($context, "ref")), "html", null, true);
        echo "</h4>
            </div>
                <div class=\"col-sm-12 col-lg-12 col-md-12\">
                    <p>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["visita"] ?? $this->getContext($context, "visita")), "ref", array()), "html", null, true);
        echo "</p>
                    <p>";
        // line 10
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["visita"] ?? $this->getContext($context, "visita")), "data", array()), "d-m-Y"), "html", null, true);
        echo "</p>
                    <p>";
        // line 11
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["visita"] ?? $this->getContext($context, "visita")), "hora", array()), "H:i:s"), "html", null, true);
        echo "</p>
                    <p>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["visita"] ?? $this->getContext($context, "visita")), "tipusvisita", array()), "tipus", array()), "html", null, true);
        echo "</p>
                    <p>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["visita"] ?? $this->getContext($context, "visita")), "descripcio", array()), "html", null, true);
        echo "</p>
                    <p>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["visita"] ?? $this->getContext($context, "visita")), "metgevisitat", array()), "nom", array()), "html", null, true);
        echo "</p>
                    <p>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["visita"] ?? $this->getContext($context, "visita")), "metgevisitat", array()), "cognom", array()), "html", null, true);
        echo "</p>
                    <p>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["visita"] ?? $this->getContext($context, "visita")), "metgevisitat", array()), "dni", array()), "html", null, true);
        echo "</p>
                    <p>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["visita"] ?? $this->getContext($context, "visita")), "pacientvisitat", array()), "nom", array()), "html", null, true);
        echo "</p>                    
                    <p>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["visita"] ?? $this->getContext($context, "visita")), "pacientvisitat", array()), "cognom", array()), "html", null, true);
        echo "</p>
                    <p>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["visita"] ?? $this->getContext($context, "visita")), "pacientvisitat", array()), "dni", array()), "html", null, true);
        echo "</p>
                </div>
        </div>
    </div>
";
        
        $__internal_a88e0db7c344ab7835eac50e83d7f9818e0678d47f4d586513ac741a2924efbe->leave($__internal_a88e0db7c344ab7835eac50e83d7f9818e0678d47f4d586513ac741a2924efbe_prof);

        
        $__internal_4ced9e58f953cf43e1c9640a7cb3c6280f74cafc2f08850826e4b6e3e9771af9->leave($__internal_4ced9e58f953cf43e1c9640a7cb3c6280f74cafc2f08850826e4b6e3e9771af9_prof);

    }

    public function getTemplateName()
    {
        return "clinicaPaniBundle:Default:dtllsvisita.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  117 => 19,  113 => 18,  109 => 17,  105 => 16,  101 => 15,  97 => 14,  93 => 13,  89 => 12,  85 => 11,  81 => 10,  77 => 9,  71 => 6,  66 => 3,  57 => 2,  39 => 1,  29 => 2,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block title %}Clinica Pani{% endblock %}
{% block page_content %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-12 col-lg-12 col-md-12\">
                <h4 class=\"\">{{ ref }}</h4>
            </div>
                <div class=\"col-sm-12 col-lg-12 col-md-12\">
                    <p>{{ visita.ref }}</p>
                    <p>{{ visita.data|date('d-m-Y') }}</p>
                    <p>{{ visita.hora|date('H:i:s') }}</p>
                    <p>{{ visita.tipusvisita.tipus }}</p>
                    <p>{{ visita.descripcio }}</p>
                    <p>{{ visita.metgevisitat.nom }}</p>
                    <p>{{ visita.metgevisitat.cognom }}</p>
                    <p>{{ visita.metgevisitat.dni }}</p>
                    <p>{{ visita.pacientvisitat.nom }}</p>                    
                    <p>{{ visita.pacientvisitat.cognom }}</p>
                    <p>{{ visita.pacientvisitat.dni }}</p>
                </div>
        </div>
    </div>
{% endblock %}", "clinicaPaniBundle:Default:dtllsvisita.html.twig", "C:\\xampp\\htdocs\\clinica-pani\\src\\clinicaPaniBundle\\Resources\\views\\Default\\dtllsvisita.html.twig");
    }
}
