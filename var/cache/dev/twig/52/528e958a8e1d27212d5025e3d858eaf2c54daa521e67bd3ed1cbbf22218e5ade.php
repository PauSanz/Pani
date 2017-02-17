<?php

/* ::base.html.twig */
class __TwigTemplate_aa068f60139572ba38c888cd19d2a7b936fa05b8d69f1ddd0141087ead89194d extends Twig_Template
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
        $__internal_6bacb9d446048a9d857bf365ac1eee8e4fb29135e9dccd1963a2a05cfbccb90e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bacb9d446048a9d857bf365ac1eee8e4fb29135e9dccd1963a2a05cfbccb90e->enter($__internal_6bacb9d446048a9d857bf365ac1eee8e4fb29135e9dccd1963a2a05cfbccb90e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_6372048d3d91f025e689b1f9747707bb7e52a882a26ab2278a0ad53476e98c06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6372048d3d91f025e689b1f9747707bb7e52a882a26ab2278a0ad53476e98c06->enter($__internal_6372048d3d91f025e689b1f9747707bb7e52a882a26ab2278a0ad53476e98c06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_6bacb9d446048a9d857bf365ac1eee8e4fb29135e9dccd1963a2a05cfbccb90e->leave($__internal_6bacb9d446048a9d857bf365ac1eee8e4fb29135e9dccd1963a2a05cfbccb90e_prof);

        
        $__internal_6372048d3d91f025e689b1f9747707bb7e52a882a26ab2278a0ad53476e98c06->leave($__internal_6372048d3d91f025e689b1f9747707bb7e52a882a26ab2278a0ad53476e98c06_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_10a3e054f32698b7e866e4a044207a5e0b7f05c6812ff43603de980189054014 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10a3e054f32698b7e866e4a044207a5e0b7f05c6812ff43603de980189054014->enter($__internal_10a3e054f32698b7e866e4a044207a5e0b7f05c6812ff43603de980189054014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e7f98a5bca158e2d953274289bdaecfe858a6293e074add40dd9fb8b59ab060a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7f98a5bca158e2d953274289bdaecfe858a6293e074add40dd9fb8b59ab060a->enter($__internal_e7f98a5bca158e2d953274289bdaecfe858a6293e074add40dd9fb8b59ab060a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e7f98a5bca158e2d953274289bdaecfe858a6293e074add40dd9fb8b59ab060a->leave($__internal_e7f98a5bca158e2d953274289bdaecfe858a6293e074add40dd9fb8b59ab060a_prof);

        
        $__internal_10a3e054f32698b7e866e4a044207a5e0b7f05c6812ff43603de980189054014->leave($__internal_10a3e054f32698b7e866e4a044207a5e0b7f05c6812ff43603de980189054014_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d204a14ba69b4d18603e15a3f823233adb870b7c8bdb8b11243cca46eba8b7ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d204a14ba69b4d18603e15a3f823233adb870b7c8bdb8b11243cca46eba8b7ef->enter($__internal_d204a14ba69b4d18603e15a3f823233adb870b7c8bdb8b11243cca46eba8b7ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_074f230de269381572cb75815fe456a46e5c91ea49ff239680a41b68f1aaf8f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_074f230de269381572cb75815fe456a46e5c91ea49ff239680a41b68f1aaf8f5->enter($__internal_074f230de269381572cb75815fe456a46e5c91ea49ff239680a41b68f1aaf8f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_074f230de269381572cb75815fe456a46e5c91ea49ff239680a41b68f1aaf8f5->leave($__internal_074f230de269381572cb75815fe456a46e5c91ea49ff239680a41b68f1aaf8f5_prof);

        
        $__internal_d204a14ba69b4d18603e15a3f823233adb870b7c8bdb8b11243cca46eba8b7ef->leave($__internal_d204a14ba69b4d18603e15a3f823233adb870b7c8bdb8b11243cca46eba8b7ef_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_76a7dbb0f942be97f2bc958a72213f0af8547551b9b0a7dd7d0c778f35085303 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76a7dbb0f942be97f2bc958a72213f0af8547551b9b0a7dd7d0c778f35085303->enter($__internal_76a7dbb0f942be97f2bc958a72213f0af8547551b9b0a7dd7d0c778f35085303_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_195c33e05e059c11cc0a012fec5cd97a5d8082ab09e015cb5d8807c69de5af4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_195c33e05e059c11cc0a012fec5cd97a5d8082ab09e015cb5d8807c69de5af4c->enter($__internal_195c33e05e059c11cc0a012fec5cd97a5d8082ab09e015cb5d8807c69de5af4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_195c33e05e059c11cc0a012fec5cd97a5d8082ab09e015cb5d8807c69de5af4c->leave($__internal_195c33e05e059c11cc0a012fec5cd97a5d8082ab09e015cb5d8807c69de5af4c_prof);

        
        $__internal_76a7dbb0f942be97f2bc958a72213f0af8547551b9b0a7dd7d0c778f35085303->leave($__internal_76a7dbb0f942be97f2bc958a72213f0af8547551b9b0a7dd7d0c778f35085303_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_360988f63c80afa758669a258eef878609e126a9345d204f1738c7fbede01398 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_360988f63c80afa758669a258eef878609e126a9345d204f1738c7fbede01398->enter($__internal_360988f63c80afa758669a258eef878609e126a9345d204f1738c7fbede01398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a4bfa3cf1e5b500195641a62545c8f8b4bf4bb56493603996b365ff354335f7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4bfa3cf1e5b500195641a62545c8f8b4bf4bb56493603996b365ff354335f7c->enter($__internal_a4bfa3cf1e5b500195641a62545c8f8b4bf4bb56493603996b365ff354335f7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a4bfa3cf1e5b500195641a62545c8f8b4bf4bb56493603996b365ff354335f7c->leave($__internal_a4bfa3cf1e5b500195641a62545c8f8b4bf4bb56493603996b365ff354335f7c_prof);

        
        $__internal_360988f63c80afa758669a258eef878609e126a9345d204f1738c7fbede01398->leave($__internal_360988f63c80afa758669a258eef878609e126a9345d204f1738c7fbede01398_prof);

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
", "::base.html.twig", "C:\\xampp\\htdocs\\clinica-pani\\app/Resources\\views/base.html.twig");
    }
}
