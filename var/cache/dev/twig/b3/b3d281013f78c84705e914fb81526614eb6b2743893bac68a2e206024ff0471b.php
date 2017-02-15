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
        $__internal_6b703e243f5121f5df618d64bcda8f3bb9871c5f4a00453d6c1ee02bff32d926 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b703e243f5121f5df618d64bcda8f3bb9871c5f4a00453d6c1ee02bff32d926->enter($__internal_6b703e243f5121f5df618d64bcda8f3bb9871c5f4a00453d6c1ee02bff32d926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_2a9059d0136c197e7a5743390a9298fbb67ba3d17e157990d468b5049960873e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a9059d0136c197e7a5743390a9298fbb67ba3d17e157990d468b5049960873e->enter($__internal_2a9059d0136c197e7a5743390a9298fbb67ba3d17e157990d468b5049960873e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_6b703e243f5121f5df618d64bcda8f3bb9871c5f4a00453d6c1ee02bff32d926->leave($__internal_6b703e243f5121f5df618d64bcda8f3bb9871c5f4a00453d6c1ee02bff32d926_prof);

        
        $__internal_2a9059d0136c197e7a5743390a9298fbb67ba3d17e157990d468b5049960873e->leave($__internal_2a9059d0136c197e7a5743390a9298fbb67ba3d17e157990d468b5049960873e_prof);

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
