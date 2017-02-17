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
        $__internal_98bae4b02755b7acdc35e61a1f2796c3b37c0fe91d13e8899833990208f2aa55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98bae4b02755b7acdc35e61a1f2796c3b37c0fe91d13e8899833990208f2aa55->enter($__internal_98bae4b02755b7acdc35e61a1f2796c3b37c0fe91d13e8899833990208f2aa55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_beea34e45c0ac2981300d0057912a82a535cdd46afc1432f2766586d13cb6915 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_beea34e45c0ac2981300d0057912a82a535cdd46afc1432f2766586d13cb6915->enter($__internal_beea34e45c0ac2981300d0057912a82a535cdd46afc1432f2766586d13cb6915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_98bae4b02755b7acdc35e61a1f2796c3b37c0fe91d13e8899833990208f2aa55->leave($__internal_98bae4b02755b7acdc35e61a1f2796c3b37c0fe91d13e8899833990208f2aa55_prof);

        
        $__internal_beea34e45c0ac2981300d0057912a82a535cdd46afc1432f2766586d13cb6915->leave($__internal_beea34e45c0ac2981300d0057912a82a535cdd46afc1432f2766586d13cb6915_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5a08b4256f88cb4f1e684923e63a188de595bac5717fca71c0a9c857e06ea6f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a08b4256f88cb4f1e684923e63a188de595bac5717fca71c0a9c857e06ea6f5->enter($__internal_5a08b4256f88cb4f1e684923e63a188de595bac5717fca71c0a9c857e06ea6f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6c4e574c11568d27d65c16fe25c7ff219245ed5768f45f6e096f0a0cfd712d0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c4e574c11568d27d65c16fe25c7ff219245ed5768f45f6e096f0a0cfd712d0f->enter($__internal_6c4e574c11568d27d65c16fe25c7ff219245ed5768f45f6e096f0a0cfd712d0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6c4e574c11568d27d65c16fe25c7ff219245ed5768f45f6e096f0a0cfd712d0f->leave($__internal_6c4e574c11568d27d65c16fe25c7ff219245ed5768f45f6e096f0a0cfd712d0f_prof);

        
        $__internal_5a08b4256f88cb4f1e684923e63a188de595bac5717fca71c0a9c857e06ea6f5->leave($__internal_5a08b4256f88cb4f1e684923e63a188de595bac5717fca71c0a9c857e06ea6f5_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d653efb2e6a2150ea20e5fb45c207b03299778dc933408b46e26a447f352696f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d653efb2e6a2150ea20e5fb45c207b03299778dc933408b46e26a447f352696f->enter($__internal_d653efb2e6a2150ea20e5fb45c207b03299778dc933408b46e26a447f352696f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f0521a0fdd762eb65f318d7055e3418c2cab63d521715fc344e4f7f76a241299 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0521a0fdd762eb65f318d7055e3418c2cab63d521715fc344e4f7f76a241299->enter($__internal_f0521a0fdd762eb65f318d7055e3418c2cab63d521715fc344e4f7f76a241299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f0521a0fdd762eb65f318d7055e3418c2cab63d521715fc344e4f7f76a241299->leave($__internal_f0521a0fdd762eb65f318d7055e3418c2cab63d521715fc344e4f7f76a241299_prof);

        
        $__internal_d653efb2e6a2150ea20e5fb45c207b03299778dc933408b46e26a447f352696f->leave($__internal_d653efb2e6a2150ea20e5fb45c207b03299778dc933408b46e26a447f352696f_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_4c238e394fa81f9addd9c80b1da9351b3cf981b64cf67637112eeb9616d101ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c238e394fa81f9addd9c80b1da9351b3cf981b64cf67637112eeb9616d101ea->enter($__internal_4c238e394fa81f9addd9c80b1da9351b3cf981b64cf67637112eeb9616d101ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_632221c15752a71165afa2bf8181c830dc6faf8a22123bdb096f57c2829fe285 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_632221c15752a71165afa2bf8181c830dc6faf8a22123bdb096f57c2829fe285->enter($__internal_632221c15752a71165afa2bf8181c830dc6faf8a22123bdb096f57c2829fe285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_632221c15752a71165afa2bf8181c830dc6faf8a22123bdb096f57c2829fe285->leave($__internal_632221c15752a71165afa2bf8181c830dc6faf8a22123bdb096f57c2829fe285_prof);

        
        $__internal_4c238e394fa81f9addd9c80b1da9351b3cf981b64cf67637112eeb9616d101ea->leave($__internal_4c238e394fa81f9addd9c80b1da9351b3cf981b64cf67637112eeb9616d101ea_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4fec914a15b577c21bf4aff1affe7387edd800c6bed959042def7ec0064bb9af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fec914a15b577c21bf4aff1affe7387edd800c6bed959042def7ec0064bb9af->enter($__internal_4fec914a15b577c21bf4aff1affe7387edd800c6bed959042def7ec0064bb9af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_378eee56001fe50512a0ac41e40ce6b878aba277a32ec88cd438005549cfe33d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_378eee56001fe50512a0ac41e40ce6b878aba277a32ec88cd438005549cfe33d->enter($__internal_378eee56001fe50512a0ac41e40ce6b878aba277a32ec88cd438005549cfe33d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_378eee56001fe50512a0ac41e40ce6b878aba277a32ec88cd438005549cfe33d->leave($__internal_378eee56001fe50512a0ac41e40ce6b878aba277a32ec88cd438005549cfe33d_prof);

        
        $__internal_4fec914a15b577c21bf4aff1affe7387edd800c6bed959042def7ec0064bb9af->leave($__internal_4fec914a15b577c21bf4aff1affe7387edd800c6bed959042def7ec0064bb9af_prof);

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
