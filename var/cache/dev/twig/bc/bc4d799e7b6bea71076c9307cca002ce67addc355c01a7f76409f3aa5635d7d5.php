<?php

/* ::base.html.twig */
class __TwigTemplate_3ea59ae5df692ebf5ad296f987e9a2f56f8e14ea50d3bb5fece9bed50b91a10a extends Twig_Template
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
        $__internal_13e62deeb2a4e0fd500b935f08c1feac94d28a87cd0d4d2443b0d5baac34a0a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13e62deeb2a4e0fd500b935f08c1feac94d28a87cd0d4d2443b0d5baac34a0a7->enter($__internal_13e62deeb2a4e0fd500b935f08c1feac94d28a87cd0d4d2443b0d5baac34a0a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_be59e09f0eb1d08ea86deba8e10d280f1ad01f4094240066eb4d301604bee3ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be59e09f0eb1d08ea86deba8e10d280f1ad01f4094240066eb4d301604bee3ab->enter($__internal_be59e09f0eb1d08ea86deba8e10d280f1ad01f4094240066eb4d301604bee3ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_13e62deeb2a4e0fd500b935f08c1feac94d28a87cd0d4d2443b0d5baac34a0a7->leave($__internal_13e62deeb2a4e0fd500b935f08c1feac94d28a87cd0d4d2443b0d5baac34a0a7_prof);

        
        $__internal_be59e09f0eb1d08ea86deba8e10d280f1ad01f4094240066eb4d301604bee3ab->leave($__internal_be59e09f0eb1d08ea86deba8e10d280f1ad01f4094240066eb4d301604bee3ab_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3f607156067a54f261d1c5210732d25ec58d9a342006a7cb650110cf82fe261e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f607156067a54f261d1c5210732d25ec58d9a342006a7cb650110cf82fe261e->enter($__internal_3f607156067a54f261d1c5210732d25ec58d9a342006a7cb650110cf82fe261e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1959de6e29e2912b4fe635e0e0f9c09044a9a93864a3a66b2a0100d5ee0560dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1959de6e29e2912b4fe635e0e0f9c09044a9a93864a3a66b2a0100d5ee0560dc->enter($__internal_1959de6e29e2912b4fe635e0e0f9c09044a9a93864a3a66b2a0100d5ee0560dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1959de6e29e2912b4fe635e0e0f9c09044a9a93864a3a66b2a0100d5ee0560dc->leave($__internal_1959de6e29e2912b4fe635e0e0f9c09044a9a93864a3a66b2a0100d5ee0560dc_prof);

        
        $__internal_3f607156067a54f261d1c5210732d25ec58d9a342006a7cb650110cf82fe261e->leave($__internal_3f607156067a54f261d1c5210732d25ec58d9a342006a7cb650110cf82fe261e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cfe00c33704f0073bfd48bf0b8436c68191457d76e128aeedfc7885b69b7f664 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfe00c33704f0073bfd48bf0b8436c68191457d76e128aeedfc7885b69b7f664->enter($__internal_cfe00c33704f0073bfd48bf0b8436c68191457d76e128aeedfc7885b69b7f664_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_1176b5adc9da6586ef718f8c59833c9de79c7eeea51f628389eaf11bbb2959bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1176b5adc9da6586ef718f8c59833c9de79c7eeea51f628389eaf11bbb2959bb->enter($__internal_1176b5adc9da6586ef718f8c59833c9de79c7eeea51f628389eaf11bbb2959bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1176b5adc9da6586ef718f8c59833c9de79c7eeea51f628389eaf11bbb2959bb->leave($__internal_1176b5adc9da6586ef718f8c59833c9de79c7eeea51f628389eaf11bbb2959bb_prof);

        
        $__internal_cfe00c33704f0073bfd48bf0b8436c68191457d76e128aeedfc7885b69b7f664->leave($__internal_cfe00c33704f0073bfd48bf0b8436c68191457d76e128aeedfc7885b69b7f664_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c425b2b35a24dfefbae9d0171199449ac4bf993bdae3db41fa8daf67857dc42b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c425b2b35a24dfefbae9d0171199449ac4bf993bdae3db41fa8daf67857dc42b->enter($__internal_c425b2b35a24dfefbae9d0171199449ac4bf993bdae3db41fa8daf67857dc42b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f3e160ea7372961e459f48578886ccfbc8f3c3f8aa99f685c9637cb9dc70b30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f3e160ea7372961e459f48578886ccfbc8f3c3f8aa99f685c9637cb9dc70b30->enter($__internal_6f3e160ea7372961e459f48578886ccfbc8f3c3f8aa99f685c9637cb9dc70b30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f3e160ea7372961e459f48578886ccfbc8f3c3f8aa99f685c9637cb9dc70b30->leave($__internal_6f3e160ea7372961e459f48578886ccfbc8f3c3f8aa99f685c9637cb9dc70b30_prof);

        
        $__internal_c425b2b35a24dfefbae9d0171199449ac4bf993bdae3db41fa8daf67857dc42b->leave($__internal_c425b2b35a24dfefbae9d0171199449ac4bf993bdae3db41fa8daf67857dc42b_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3a157f1be3bb2222a84857e9befdc69a9f29a8a6c6d989d27276089e9a177a2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a157f1be3bb2222a84857e9befdc69a9f29a8a6c6d989d27276089e9a177a2d->enter($__internal_3a157f1be3bb2222a84857e9befdc69a9f29a8a6c6d989d27276089e9a177a2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_8ea5ac1b005b1e79d8e19257f39b1f2e8938066c4ae890023f34a338d8b286d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ea5ac1b005b1e79d8e19257f39b1f2e8938066c4ae890023f34a338d8b286d4->enter($__internal_8ea5ac1b005b1e79d8e19257f39b1f2e8938066c4ae890023f34a338d8b286d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_8ea5ac1b005b1e79d8e19257f39b1f2e8938066c4ae890023f34a338d8b286d4->leave($__internal_8ea5ac1b005b1e79d8e19257f39b1f2e8938066c4ae890023f34a338d8b286d4_prof);

        
        $__internal_3a157f1be3bb2222a84857e9befdc69a9f29a8a6c6d989d27276089e9a177a2d->leave($__internal_3a157f1be3bb2222a84857e9befdc69a9f29a8a6c6d989d27276089e9a177a2d_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
", "::base.html.twig", "C:\\xampp\\htdocs\\Pani-final\\app/Resources\\views/base.html.twig");
    }
}
