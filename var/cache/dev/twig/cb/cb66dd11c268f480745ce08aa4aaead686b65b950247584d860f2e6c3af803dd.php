<?php

/* clinicaPaniBundle:Default:dtllsvisita.html.twig */
class __TwigTemplate_490fd22d9691728065e4e46b7bc71e2b67e79ecba38187ac75a682e85a30a079 extends Twig_Template
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
        $__internal_cbc730ec300165916ee5d0230dcf2621162512951928493e04ec70f409b78946 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbc730ec300165916ee5d0230dcf2621162512951928493e04ec70f409b78946->enter($__internal_cbc730ec300165916ee5d0230dcf2621162512951928493e04ec70f409b78946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:dtllsvisita.html.twig"));

        $__internal_6579be8442e568cc6068c6691757904d34ab50c622508a06d7d9c3ef2d9cace4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6579be8442e568cc6068c6691757904d34ab50c622508a06d7d9c3ef2d9cace4->enter($__internal_6579be8442e568cc6068c6691757904d34ab50c622508a06d7d9c3ef2d9cace4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:dtllsvisita.html.twig"));

        // line 1
        $this->displayBlock('title', $context, $blocks);
        // line 2
        $this->displayBlock('page_content', $context, $blocks);
        
        $__internal_cbc730ec300165916ee5d0230dcf2621162512951928493e04ec70f409b78946->leave($__internal_cbc730ec300165916ee5d0230dcf2621162512951928493e04ec70f409b78946_prof);

        
        $__internal_6579be8442e568cc6068c6691757904d34ab50c622508a06d7d9c3ef2d9cace4->leave($__internal_6579be8442e568cc6068c6691757904d34ab50c622508a06d7d9c3ef2d9cace4_prof);

    }

    // line 1
    public function block_title($context, array $blocks = array())
    {
        $__internal_fa8db0e7ec5cb9f8cc491904d7ab4ba1d46f47496c9dcc6eefc72a25d2fd0bd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa8db0e7ec5cb9f8cc491904d7ab4ba1d46f47496c9dcc6eefc72a25d2fd0bd3->enter($__internal_fa8db0e7ec5cb9f8cc491904d7ab4ba1d46f47496c9dcc6eefc72a25d2fd0bd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_67a700eabfa6b05be10c22fa0bada56e28844b75e5b763038a68ad8ae1ed19e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67a700eabfa6b05be10c22fa0bada56e28844b75e5b763038a68ad8ae1ed19e6->enter($__internal_67a700eabfa6b05be10c22fa0bada56e28844b75e5b763038a68ad8ae1ed19e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Clinica Pani";
        
        $__internal_67a700eabfa6b05be10c22fa0bada56e28844b75e5b763038a68ad8ae1ed19e6->leave($__internal_67a700eabfa6b05be10c22fa0bada56e28844b75e5b763038a68ad8ae1ed19e6_prof);

        
        $__internal_fa8db0e7ec5cb9f8cc491904d7ab4ba1d46f47496c9dcc6eefc72a25d2fd0bd3->leave($__internal_fa8db0e7ec5cb9f8cc491904d7ab4ba1d46f47496c9dcc6eefc72a25d2fd0bd3_prof);

    }

    // line 2
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_34a5a968ebcb55d28694d3cc19ad6bc3db5b1a66e5954103005ea26fcba3907e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34a5a968ebcb55d28694d3cc19ad6bc3db5b1a66e5954103005ea26fcba3907e->enter($__internal_34a5a968ebcb55d28694d3cc19ad6bc3db5b1a66e5954103005ea26fcba3907e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_2d0166729894b585f3f82318a063a8cd3956c76a2077bd8afc9b9abeac1035bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d0166729894b585f3f82318a063a8cd3956c76a2077bd8afc9b9abeac1035bf->enter($__internal_2d0166729894b585f3f82318a063a8cd3956c76a2077bd8afc9b9abeac1035bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 3
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-12 col-lg-12 col-md-12\">
                <h4 class=\"\">";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["ref"]) ? $context["ref"] : $this->getContext($context, "ref")), "html", null, true);
        echo "</h4>
            </div>
                <div class=\"col-sm-12 col-lg-12 col-md-12\">
                    <p>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["visita"]) ? $context["visita"] : $this->getContext($context, "visita")), "ref", array()), "html", null, true);
        echo "</p>
                    <p>";
        // line 10
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["visita"]) ? $context["visita"] : $this->getContext($context, "visita")), "data", array()), "d-m-Y"), "html", null, true);
        echo "</p>
                    <p>";
        // line 11
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["visita"]) ? $context["visita"] : $this->getContext($context, "visita")), "hora", array()), "H:i:s"), "html", null, true);
        echo "</p>
                    <p>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["visita"]) ? $context["visita"] : $this->getContext($context, "visita")), "tipusvisita", array()), "tipus", array()), "html", null, true);
        echo "</p>
                    <p>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["visita"]) ? $context["visita"] : $this->getContext($context, "visita")), "descripcio", array()), "html", null, true);
        echo "</p>
                    <p>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["visita"]) ? $context["visita"] : $this->getContext($context, "visita")), "metgevisitat", array()), "nom", array()), "html", null, true);
        echo "</p>
                    <p>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["visita"]) ? $context["visita"] : $this->getContext($context, "visita")), "metgevisitat", array()), "cognom", array()), "html", null, true);
        echo "</p>
                    <p>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["visita"]) ? $context["visita"] : $this->getContext($context, "visita")), "metgevisitat", array()), "dni", array()), "html", null, true);
        echo "</p>
                    <p>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["visita"]) ? $context["visita"] : $this->getContext($context, "visita")), "pacientvisitat", array()), "nom", array()), "html", null, true);
        echo "</p>                    
                    <p>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["visita"]) ? $context["visita"] : $this->getContext($context, "visita")), "pacientvisitat", array()), "cognom", array()), "html", null, true);
        echo "</p>
                    <p>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["visita"]) ? $context["visita"] : $this->getContext($context, "visita")), "pacientvisitat", array()), "dni", array()), "html", null, true);
        echo "</p>
                </div>
        </div>
    </div>
";
        
        $__internal_2d0166729894b585f3f82318a063a8cd3956c76a2077bd8afc9b9abeac1035bf->leave($__internal_2d0166729894b585f3f82318a063a8cd3956c76a2077bd8afc9b9abeac1035bf_prof);

        
        $__internal_34a5a968ebcb55d28694d3cc19ad6bc3db5b1a66e5954103005ea26fcba3907e->leave($__internal_34a5a968ebcb55d28694d3cc19ad6bc3db5b1a66e5954103005ea26fcba3907e_prof);

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
{% endblock %}", "clinicaPaniBundle:Default:dtllsvisita.html.twig", "C:\\xampp\\htdocs\\Pani-final\\src\\clinicaPaniBundle/Resources/views/Default/dtllsvisita.html.twig");
    }
}
