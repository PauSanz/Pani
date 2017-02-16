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
        $__internal_c765692c10f0817d058f41d44081ee4b8c81d28c39efcb482ec437dab69ee98f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c765692c10f0817d058f41d44081ee4b8c81d28c39efcb482ec437dab69ee98f->enter($__internal_c765692c10f0817d058f41d44081ee4b8c81d28c39efcb482ec437dab69ee98f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_d177ba0aca66845e3e4c6cea9d270c5d5fca2858985d27aa351dc73a0451200d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d177ba0aca66845e3e4c6cea9d270c5d5fca2858985d27aa351dc73a0451200d->enter($__internal_d177ba0aca66845e3e4c6cea9d270c5d5fca2858985d27aa351dc73a0451200d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_c765692c10f0817d058f41d44081ee4b8c81d28c39efcb482ec437dab69ee98f->leave($__internal_c765692c10f0817d058f41d44081ee4b8c81d28c39efcb482ec437dab69ee98f_prof);

        
        $__internal_d177ba0aca66845e3e4c6cea9d270c5d5fca2858985d27aa351dc73a0451200d->leave($__internal_d177ba0aca66845e3e4c6cea9d270c5d5fca2858985d27aa351dc73a0451200d_prof);

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
