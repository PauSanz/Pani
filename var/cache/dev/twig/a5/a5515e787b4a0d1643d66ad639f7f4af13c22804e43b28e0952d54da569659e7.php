<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_af9d5bdf6c09edefd9bfb7319280c22aa25d12dc7917a84d01005859b6866263 extends Twig_Template
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
        $__internal_30a3dacd185398c5aa083a29bbd1c7b3943a0c69c0673467d0e8d6cd16e44a4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30a3dacd185398c5aa083a29bbd1c7b3943a0c69c0673467d0e8d6cd16e44a4e->enter($__internal_30a3dacd185398c5aa083a29bbd1c7b3943a0c69c0673467d0e8d6cd16e44a4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_76377b3a5119bd69857971d387fdcd0ad7afa105f9ad9fcdaef4a10e719e3639 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76377b3a5119bd69857971d387fdcd0ad7afa105f9ad9fcdaef4a10e719e3639->enter($__internal_76377b3a5119bd69857971d387fdcd0ad7afa105f9ad9fcdaef4a10e719e3639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_30a3dacd185398c5aa083a29bbd1c7b3943a0c69c0673467d0e8d6cd16e44a4e->leave($__internal_30a3dacd185398c5aa083a29bbd1c7b3943a0c69c0673467d0e8d6cd16e44a4e_prof);

        
        $__internal_76377b3a5119bd69857971d387fdcd0ad7afa105f9ad9fcdaef4a10e719e3639->leave($__internal_76377b3a5119bd69857971d387fdcd0ad7afa105f9ad9fcdaef4a10e719e3639_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
