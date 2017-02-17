<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_9c10f6c23fadcd05dc81cb9a6167fe0506ed20ba4a39d2b95ee11e8337aa8d2c extends Twig_Template
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
        $__internal_a0acc53fd7e55f42f993db82e18ca957cba57f9b24e009e2cbb24ea3222385b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0acc53fd7e55f42f993db82e18ca957cba57f9b24e009e2cbb24ea3222385b2->enter($__internal_a0acc53fd7e55f42f993db82e18ca957cba57f9b24e009e2cbb24ea3222385b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_e11519c3534a11045fc3e55ec0bdcb04c1536a5d6b8a79cd8a25eeb802f039cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e11519c3534a11045fc3e55ec0bdcb04c1536a5d6b8a79cd8a25eeb802f039cd->enter($__internal_e11519c3534a11045fc3e55ec0bdcb04c1536a5d6b8a79cd8a25eeb802f039cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_a0acc53fd7e55f42f993db82e18ca957cba57f9b24e009e2cbb24ea3222385b2->leave($__internal_a0acc53fd7e55f42f993db82e18ca957cba57f9b24e009e2cbb24ea3222385b2_prof);

        
        $__internal_e11519c3534a11045fc3e55ec0bdcb04c1536a5d6b8a79cd8a25eeb802f039cd->leave($__internal_e11519c3534a11045fc3e55ec0bdcb04c1536a5d6b8a79cd8a25eeb802f039cd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
