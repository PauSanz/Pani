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
        $__internal_19fcd9d54b66ef6d4548db745d8a94df817e23444703d698d3d09b41f29911e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19fcd9d54b66ef6d4548db745d8a94df817e23444703d698d3d09b41f29911e9->enter($__internal_19fcd9d54b66ef6d4548db745d8a94df817e23444703d698d3d09b41f29911e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_8c2c18dd2522e655c9de6a924aeaaa8d01582a86d5d0ea61eeb9955dcda8882c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c2c18dd2522e655c9de6a924aeaaa8d01582a86d5d0ea61eeb9955dcda8882c->enter($__internal_8c2c18dd2522e655c9de6a924aeaaa8d01582a86d5d0ea61eeb9955dcda8882c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_19fcd9d54b66ef6d4548db745d8a94df817e23444703d698d3d09b41f29911e9->leave($__internal_19fcd9d54b66ef6d4548db745d8a94df817e23444703d698d3d09b41f29911e9_prof);

        
        $__internal_8c2c18dd2522e655c9de6a924aeaaa8d01582a86d5d0ea61eeb9955dcda8882c->leave($__internal_8c2c18dd2522e655c9de6a924aeaaa8d01582a86d5d0ea61eeb9955dcda8882c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_14222ecc9be64ad6a203ab40ca2061df2164afd3a918fc86588b2e4b95bfade2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14222ecc9be64ad6a203ab40ca2061df2164afd3a918fc86588b2e4b95bfade2->enter($__internal_14222ecc9be64ad6a203ab40ca2061df2164afd3a918fc86588b2e4b95bfade2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0568c0cd44c0d19149e9763c0ea638db3e8b9cd838fd64b69bc0d4f04c51494a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0568c0cd44c0d19149e9763c0ea638db3e8b9cd838fd64b69bc0d4f04c51494a->enter($__internal_0568c0cd44c0d19149e9763c0ea638db3e8b9cd838fd64b69bc0d4f04c51494a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_0568c0cd44c0d19149e9763c0ea638db3e8b9cd838fd64b69bc0d4f04c51494a->leave($__internal_0568c0cd44c0d19149e9763c0ea638db3e8b9cd838fd64b69bc0d4f04c51494a_prof);

        
        $__internal_14222ecc9be64ad6a203ab40ca2061df2164afd3a918fc86588b2e4b95bfade2->leave($__internal_14222ecc9be64ad6a203ab40ca2061df2164afd3a918fc86588b2e4b95bfade2_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1a649e81fd239e86985f344e2d78600b3f26e9ad3e4418244696ab9a4e7fb5f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a649e81fd239e86985f344e2d78600b3f26e9ad3e4418244696ab9a4e7fb5f7->enter($__internal_1a649e81fd239e86985f344e2d78600b3f26e9ad3e4418244696ab9a4e7fb5f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0ba48e5c2bf6b48c52caad648f730ea95b361084e3654fbba82b74d2f0570ecb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ba48e5c2bf6b48c52caad648f730ea95b361084e3654fbba82b74d2f0570ecb->enter($__internal_0ba48e5c2bf6b48c52caad648f730ea95b361084e3654fbba82b74d2f0570ecb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_0ba48e5c2bf6b48c52caad648f730ea95b361084e3654fbba82b74d2f0570ecb->leave($__internal_0ba48e5c2bf6b48c52caad648f730ea95b361084e3654fbba82b74d2f0570ecb_prof);

        
        $__internal_1a649e81fd239e86985f344e2d78600b3f26e9ad3e4418244696ab9a4e7fb5f7->leave($__internal_1a649e81fd239e86985f344e2d78600b3f26e9ad3e4418244696ab9a4e7fb5f7_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_d0342e15fa81cd1573eac237ce1daa269f7eb966e1724ae0d3ec35461eba8f53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0342e15fa81cd1573eac237ce1daa269f7eb966e1724ae0d3ec35461eba8f53->enter($__internal_d0342e15fa81cd1573eac237ce1daa269f7eb966e1724ae0d3ec35461eba8f53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6249716c882a668e6e90a192674594d870b530f84c0183d9b1d34d488789be25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6249716c882a668e6e90a192674594d870b530f84c0183d9b1d34d488789be25->enter($__internal_6249716c882a668e6e90a192674594d870b530f84c0183d9b1d34d488789be25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6249716c882a668e6e90a192674594d870b530f84c0183d9b1d34d488789be25->leave($__internal_6249716c882a668e6e90a192674594d870b530f84c0183d9b1d34d488789be25_prof);

        
        $__internal_d0342e15fa81cd1573eac237ce1daa269f7eb966e1724ae0d3ec35461eba8f53->leave($__internal_d0342e15fa81cd1573eac237ce1daa269f7eb966e1724ae0d3ec35461eba8f53_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_184c677760c01aec250423d3b099d20dd6a639d34e02d4c095afa3408998765a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_184c677760c01aec250423d3b099d20dd6a639d34e02d4c095afa3408998765a->enter($__internal_184c677760c01aec250423d3b099d20dd6a639d34e02d4c095afa3408998765a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f6f133f23d650eaffdd324c59cf3fb87449aafd7cf325c488757c73eb810907a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6f133f23d650eaffdd324c59cf3fb87449aafd7cf325c488757c73eb810907a->enter($__internal_f6f133f23d650eaffdd324c59cf3fb87449aafd7cf325c488757c73eb810907a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f6f133f23d650eaffdd324c59cf3fb87449aafd7cf325c488757c73eb810907a->leave($__internal_f6f133f23d650eaffdd324c59cf3fb87449aafd7cf325c488757c73eb810907a_prof);

        
        $__internal_184c677760c01aec250423d3b099d20dd6a639d34e02d4c095afa3408998765a->leave($__internal_184c677760c01aec250423d3b099d20dd6a639d34e02d4c095afa3408998765a_prof);

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
