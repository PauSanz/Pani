<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_548bcaa49779f00f944e90208efd9609ffbc26896996f67ee7c056a88554c014 extends Twig_Template
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
        $__internal_c4d94fc5026a88a0dd0486d7a52728f236c5aafb6c01bb661303e2cb47214035 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4d94fc5026a88a0dd0486d7a52728f236c5aafb6c01bb661303e2cb47214035->enter($__internal_c4d94fc5026a88a0dd0486d7a52728f236c5aafb6c01bb661303e2cb47214035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_579b81407f5137e64f1f7aae4cb7256be4d551295151af447f5b9498e55b8ccd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_579b81407f5137e64f1f7aae4cb7256be4d551295151af447f5b9498e55b8ccd->enter($__internal_579b81407f5137e64f1f7aae4cb7256be4d551295151af447f5b9498e55b8ccd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_c4d94fc5026a88a0dd0486d7a52728f236c5aafb6c01bb661303e2cb47214035->leave($__internal_c4d94fc5026a88a0dd0486d7a52728f236c5aafb6c01bb661303e2cb47214035_prof);

        
        $__internal_579b81407f5137e64f1f7aae4cb7256be4d551295151af447f5b9498e55b8ccd->leave($__internal_579b81407f5137e64f1f7aae4cb7256be4d551295151af447f5b9498e55b8ccd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
