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
        $__internal_affbc0e75fdd8bb6d3e34627e99f380cd9847982e37ede4b1232550f1f9be6a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_affbc0e75fdd8bb6d3e34627e99f380cd9847982e37ede4b1232550f1f9be6a4->enter($__internal_affbc0e75fdd8bb6d3e34627e99f380cd9847982e37ede4b1232550f1f9be6a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_756b48ffaaad70f61ebbd33064ee5c95303dae54c7a99c6ca1fafcd32ea916b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_756b48ffaaad70f61ebbd33064ee5c95303dae54c7a99c6ca1fafcd32ea916b2->enter($__internal_756b48ffaaad70f61ebbd33064ee5c95303dae54c7a99c6ca1fafcd32ea916b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_affbc0e75fdd8bb6d3e34627e99f380cd9847982e37ede4b1232550f1f9be6a4->leave($__internal_affbc0e75fdd8bb6d3e34627e99f380cd9847982e37ede4b1232550f1f9be6a4_prof);

        
        $__internal_756b48ffaaad70f61ebbd33064ee5c95303dae54c7a99c6ca1fafcd32ea916b2->leave($__internal_756b48ffaaad70f61ebbd33064ee5c95303dae54c7a99c6ca1fafcd32ea916b2_prof);

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
