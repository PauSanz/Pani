<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_dac9ff7ddf7198b493c34af17936e9afbb8864a3abc7b78b7530e7bb051c0f28 extends Twig_Template
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
        $__internal_e7d63ffae637768aa21f1849b04a6086b50955aff6fce68c3c5c099aa5eda2b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7d63ffae637768aa21f1849b04a6086b50955aff6fce68c3c5c099aa5eda2b4->enter($__internal_e7d63ffae637768aa21f1849b04a6086b50955aff6fce68c3c5c099aa5eda2b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_958796732eb5037d9aa6da3034fb29732f72fb89adaf3a2fc5bd487c9293a297 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_958796732eb5037d9aa6da3034fb29732f72fb89adaf3a2fc5bd487c9293a297->enter($__internal_958796732eb5037d9aa6da3034fb29732f72fb89adaf3a2fc5bd487c9293a297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_e7d63ffae637768aa21f1849b04a6086b50955aff6fce68c3c5c099aa5eda2b4->leave($__internal_e7d63ffae637768aa21f1849b04a6086b50955aff6fce68c3c5c099aa5eda2b4_prof);

        
        $__internal_958796732eb5037d9aa6da3034fb29732f72fb89adaf3a2fc5bd487c9293a297->leave($__internal_958796732eb5037d9aa6da3034fb29732f72fb89adaf3a2fc5bd487c9293a297_prof);

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
", "@Framework/Form/attributes.html.php", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
