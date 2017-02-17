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
        $__internal_71e8ce11b4170f79cc1c5fa45f2d14aa5a512d17033d9d0eab2f2c91ab41eb09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71e8ce11b4170f79cc1c5fa45f2d14aa5a512d17033d9d0eab2f2c91ab41eb09->enter($__internal_71e8ce11b4170f79cc1c5fa45f2d14aa5a512d17033d9d0eab2f2c91ab41eb09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_236f7e96c28c4aa2172e8138029d1824eb730710b9731c4e7e2ecf45015247a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_236f7e96c28c4aa2172e8138029d1824eb730710b9731c4e7e2ecf45015247a0->enter($__internal_236f7e96c28c4aa2172e8138029d1824eb730710b9731c4e7e2ecf45015247a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_71e8ce11b4170f79cc1c5fa45f2d14aa5a512d17033d9d0eab2f2c91ab41eb09->leave($__internal_71e8ce11b4170f79cc1c5fa45f2d14aa5a512d17033d9d0eab2f2c91ab41eb09_prof);

        
        $__internal_236f7e96c28c4aa2172e8138029d1824eb730710b9731c4e7e2ecf45015247a0->leave($__internal_236f7e96c28c4aa2172e8138029d1824eb730710b9731c4e7e2ecf45015247a0_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6a3d525ef4ece774b68ed1a2e2f6aec9a2288fbcf37e9387d1752b1c4675ad5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a3d525ef4ece774b68ed1a2e2f6aec9a2288fbcf37e9387d1752b1c4675ad5b->enter($__internal_6a3d525ef4ece774b68ed1a2e2f6aec9a2288fbcf37e9387d1752b1c4675ad5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2e28d48976d797a23f428d2adb5749e0e86053d975a64a9887df85f510a23413 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e28d48976d797a23f428d2adb5749e0e86053d975a64a9887df85f510a23413->enter($__internal_2e28d48976d797a23f428d2adb5749e0e86053d975a64a9887df85f510a23413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_2e28d48976d797a23f428d2adb5749e0e86053d975a64a9887df85f510a23413->leave($__internal_2e28d48976d797a23f428d2adb5749e0e86053d975a64a9887df85f510a23413_prof);

        
        $__internal_6a3d525ef4ece774b68ed1a2e2f6aec9a2288fbcf37e9387d1752b1c4675ad5b->leave($__internal_6a3d525ef4ece774b68ed1a2e2f6aec9a2288fbcf37e9387d1752b1c4675ad5b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7dd35df76b7d5d8243bc9e7f077c4497933990bece8a8b989906458dd950ed48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dd35df76b7d5d8243bc9e7f077c4497933990bece8a8b989906458dd950ed48->enter($__internal_7dd35df76b7d5d8243bc9e7f077c4497933990bece8a8b989906458dd950ed48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_bb3f6c4fb4b63313a8dcf109218c8bad078cd9085c244aa3442aba05cbd4b02b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb3f6c4fb4b63313a8dcf109218c8bad078cd9085c244aa3442aba05cbd4b02b->enter($__internal_bb3f6c4fb4b63313a8dcf109218c8bad078cd9085c244aa3442aba05cbd4b02b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_bb3f6c4fb4b63313a8dcf109218c8bad078cd9085c244aa3442aba05cbd4b02b->leave($__internal_bb3f6c4fb4b63313a8dcf109218c8bad078cd9085c244aa3442aba05cbd4b02b_prof);

        
        $__internal_7dd35df76b7d5d8243bc9e7f077c4497933990bece8a8b989906458dd950ed48->leave($__internal_7dd35df76b7d5d8243bc9e7f077c4497933990bece8a8b989906458dd950ed48_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_6c386608df85d1680eb6a4a8ed52cbdddc0efa36210b55e6061659a553b65280 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c386608df85d1680eb6a4a8ed52cbdddc0efa36210b55e6061659a553b65280->enter($__internal_6c386608df85d1680eb6a4a8ed52cbdddc0efa36210b55e6061659a553b65280_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3803357f06fd2db0386ddabd69d8043507d1060e4fd41b2d668426ee522a2c29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3803357f06fd2db0386ddabd69d8043507d1060e4fd41b2d668426ee522a2c29->enter($__internal_3803357f06fd2db0386ddabd69d8043507d1060e4fd41b2d668426ee522a2c29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3803357f06fd2db0386ddabd69d8043507d1060e4fd41b2d668426ee522a2c29->leave($__internal_3803357f06fd2db0386ddabd69d8043507d1060e4fd41b2d668426ee522a2c29_prof);

        
        $__internal_6c386608df85d1680eb6a4a8ed52cbdddc0efa36210b55e6061659a553b65280->leave($__internal_6c386608df85d1680eb6a4a8ed52cbdddc0efa36210b55e6061659a553b65280_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_048be9f23af61ecc0591113e8620e321a70adcf026fb0e69fe8ceadd22cc2768 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_048be9f23af61ecc0591113e8620e321a70adcf026fb0e69fe8ceadd22cc2768->enter($__internal_048be9f23af61ecc0591113e8620e321a70adcf026fb0e69fe8ceadd22cc2768_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e1f3cd2dc0b91de6a2dca246986809910578ee4622cc2d72d66c29e51927e3c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1f3cd2dc0b91de6a2dca246986809910578ee4622cc2d72d66c29e51927e3c8->enter($__internal_e1f3cd2dc0b91de6a2dca246986809910578ee4622cc2d72d66c29e51927e3c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e1f3cd2dc0b91de6a2dca246986809910578ee4622cc2d72d66c29e51927e3c8->leave($__internal_e1f3cd2dc0b91de6a2dca246986809910578ee4622cc2d72d66c29e51927e3c8_prof);

        
        $__internal_048be9f23af61ecc0591113e8620e321a70adcf026fb0e69fe8ceadd22cc2768->leave($__internal_048be9f23af61ecc0591113e8620e321a70adcf026fb0e69fe8ceadd22cc2768_prof);

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
