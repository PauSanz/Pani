<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_438f95d2b8c6ae583edf5be0a0d7ac7aa708a2d782ceefea0f61bfe756daeb06 extends Twig_Template
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
        $__internal_20a584e762c94f33e72a6529e5533436f0ab8bec766e2054abd3d5c50dbaced6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20a584e762c94f33e72a6529e5533436f0ab8bec766e2054abd3d5c50dbaced6->enter($__internal_20a584e762c94f33e72a6529e5533436f0ab8bec766e2054abd3d5c50dbaced6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_41ba36471415a23ca352be07038c0bb24fdedddf9332886a90f52d48908209d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41ba36471415a23ca352be07038c0bb24fdedddf9332886a90f52d48908209d8->enter($__internal_41ba36471415a23ca352be07038c0bb24fdedddf9332886a90f52d48908209d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_20a584e762c94f33e72a6529e5533436f0ab8bec766e2054abd3d5c50dbaced6->leave($__internal_20a584e762c94f33e72a6529e5533436f0ab8bec766e2054abd3d5c50dbaced6_prof);

        
        $__internal_41ba36471415a23ca352be07038c0bb24fdedddf9332886a90f52d48908209d8->leave($__internal_41ba36471415a23ca352be07038c0bb24fdedddf9332886a90f52d48908209d8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
