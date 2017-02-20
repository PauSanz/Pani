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
        $__internal_af04b284f1f4aab3f8a1beec159b24c93d484407568a40c910b7fc49e628e421 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af04b284f1f4aab3f8a1beec159b24c93d484407568a40c910b7fc49e628e421->enter($__internal_af04b284f1f4aab3f8a1beec159b24c93d484407568a40c910b7fc49e628e421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_be2da47153554a2837778460b0855416f269f22165ff8e1d2b1987f9d8dcadd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be2da47153554a2837778460b0855416f269f22165ff8e1d2b1987f9d8dcadd2->enter($__internal_be2da47153554a2837778460b0855416f269f22165ff8e1d2b1987f9d8dcadd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_af04b284f1f4aab3f8a1beec159b24c93d484407568a40c910b7fc49e628e421->leave($__internal_af04b284f1f4aab3f8a1beec159b24c93d484407568a40c910b7fc49e628e421_prof);

        
        $__internal_be2da47153554a2837778460b0855416f269f22165ff8e1d2b1987f9d8dcadd2->leave($__internal_be2da47153554a2837778460b0855416f269f22165ff8e1d2b1987f9d8dcadd2_prof);

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
