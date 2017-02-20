<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_739da95cb7243c55bb5700a0789afe60c231595ac5e49ca421abbcdc3a0cd681 extends Twig_Template
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
        $__internal_f47996e0a32698637a33acc08a3b7bbeda6e71dae4c106512feb301d24c5743e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f47996e0a32698637a33acc08a3b7bbeda6e71dae4c106512feb301d24c5743e->enter($__internal_f47996e0a32698637a33acc08a3b7bbeda6e71dae4c106512feb301d24c5743e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_1c35d61882b9686abf6a30d9d008e44e22c869663ba78fe86a79a18778510268 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c35d61882b9686abf6a30d9d008e44e22c869663ba78fe86a79a18778510268->enter($__internal_1c35d61882b9686abf6a30d9d008e44e22c869663ba78fe86a79a18778510268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_f47996e0a32698637a33acc08a3b7bbeda6e71dae4c106512feb301d24c5743e->leave($__internal_f47996e0a32698637a33acc08a3b7bbeda6e71dae4c106512feb301d24c5743e_prof);

        
        $__internal_1c35d61882b9686abf6a30d9d008e44e22c869663ba78fe86a79a18778510268->leave($__internal_1c35d61882b9686abf6a30d9d008e44e22c869663ba78fe86a79a18778510268_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
