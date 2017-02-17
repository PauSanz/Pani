<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_7da94c75a485bd5d8225de6e30d7d8888732ffc8123f20fbe3f06471ca4eb03e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6982582293d9f9499f95297b0462bdd207c0a2690692165802f27b2d764d58d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6982582293d9f9499f95297b0462bdd207c0a2690692165802f27b2d764d58d3->enter($__internal_6982582293d9f9499f95297b0462bdd207c0a2690692165802f27b2d764d58d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_95cf5462695e210daad978c7d478cdb4ff5ef2a29073f95176ae018cd6d6364e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95cf5462695e210daad978c7d478cdb4ff5ef2a29073f95176ae018cd6d6364e->enter($__internal_95cf5462695e210daad978c7d478cdb4ff5ef2a29073f95176ae018cd6d6364e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_6982582293d9f9499f95297b0462bdd207c0a2690692165802f27b2d764d58d3->leave($__internal_6982582293d9f9499f95297b0462bdd207c0a2690692165802f27b2d764d58d3_prof);

        
        $__internal_95cf5462695e210daad978c7d478cdb4ff5ef2a29073f95176ae018cd6d6364e->leave($__internal_95cf5462695e210daad978c7d478cdb4ff5ef2a29073f95176ae018cd6d6364e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
