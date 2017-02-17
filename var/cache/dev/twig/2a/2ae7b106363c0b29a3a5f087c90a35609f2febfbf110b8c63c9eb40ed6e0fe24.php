<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_71fad4b8f8f0a704383a073e7530ad0ab79a4eda6e833cddba57eb6d5755386c extends Twig_Template
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
        $__internal_d175af62e584e53a319ad6e8bb7259593a627f966ecb96ec0217f028229fac22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d175af62e584e53a319ad6e8bb7259593a627f966ecb96ec0217f028229fac22->enter($__internal_d175af62e584e53a319ad6e8bb7259593a627f966ecb96ec0217f028229fac22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_b2fe40b990fc04c5df1f91452282ea6cb248476452f09ff6c3ac3285b9863ec7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2fe40b990fc04c5df1f91452282ea6cb248476452f09ff6c3ac3285b9863ec7->enter($__internal_b2fe40b990fc04c5df1f91452282ea6cb248476452f09ff6c3ac3285b9863ec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_d175af62e584e53a319ad6e8bb7259593a627f966ecb96ec0217f028229fac22->leave($__internal_d175af62e584e53a319ad6e8bb7259593a627f966ecb96ec0217f028229fac22_prof);

        
        $__internal_b2fe40b990fc04c5df1f91452282ea6cb248476452f09ff6c3ac3285b9863ec7->leave($__internal_b2fe40b990fc04c5df1f91452282ea6cb248476452f09ff6c3ac3285b9863ec7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
