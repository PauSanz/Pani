<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_bb589a6dd291b61b795e1b32ab4fa249a6e33604ea936d84ea7ccdf0b2a6ec59 extends Twig_Template
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
        $__internal_bbbc13f5f776f52754877de5a47c64d6eba8483fabb92b2a04c85db0777f43a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbbc13f5f776f52754877de5a47c64d6eba8483fabb92b2a04c85db0777f43a7->enter($__internal_bbbc13f5f776f52754877de5a47c64d6eba8483fabb92b2a04c85db0777f43a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_a1dacfcf90246e8309ed3e1e900211f9b7c2d2d7d38bcd7202b1ecbd77b814c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1dacfcf90246e8309ed3e1e900211f9b7c2d2d7d38bcd7202b1ecbd77b814c9->enter($__internal_a1dacfcf90246e8309ed3e1e900211f9b7c2d2d7d38bcd7202b1ecbd77b814c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_bbbc13f5f776f52754877de5a47c64d6eba8483fabb92b2a04c85db0777f43a7->leave($__internal_bbbc13f5f776f52754877de5a47c64d6eba8483fabb92b2a04c85db0777f43a7_prof);

        
        $__internal_a1dacfcf90246e8309ed3e1e900211f9b7c2d2d7d38bcd7202b1ecbd77b814c9->leave($__internal_a1dacfcf90246e8309ed3e1e900211f9b7c2d2d7d38bcd7202b1ecbd77b814c9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\money_widget.html.php");
    }
}
