<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_249942dc1bd6a1fa3960de53da2e6bf496c8faf802bdcd909d0f5790bcd286db extends Twig_Template
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
        $__internal_59a405e45f093b76276545725158b11992a7edb2b99db4e590232983611181c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59a405e45f093b76276545725158b11992a7edb2b99db4e590232983611181c4->enter($__internal_59a405e45f093b76276545725158b11992a7edb2b99db4e590232983611181c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_d9ebd6e67775caadb1079abf11ccae038a13826390bec42bb4fd3480b0fe65b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9ebd6e67775caadb1079abf11ccae038a13826390bec42bb4fd3480b0fe65b6->enter($__internal_d9ebd6e67775caadb1079abf11ccae038a13826390bec42bb4fd3480b0fe65b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_59a405e45f093b76276545725158b11992a7edb2b99db4e590232983611181c4->leave($__internal_59a405e45f093b76276545725158b11992a7edb2b99db4e590232983611181c4_prof);

        
        $__internal_d9ebd6e67775caadb1079abf11ccae038a13826390bec42bb4fd3480b0fe65b6->leave($__internal_d9ebd6e67775caadb1079abf11ccae038a13826390bec42bb4fd3480b0fe65b6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
