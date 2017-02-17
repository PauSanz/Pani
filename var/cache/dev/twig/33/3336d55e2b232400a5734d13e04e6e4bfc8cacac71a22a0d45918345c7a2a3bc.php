<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_2b975ac0ecdcb0b8f9ba78ebecd896e0eb47be8a32c32d0511fde3011742e0bf extends Twig_Template
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
        $__internal_961e4694c774adf2f9e5bc4a1b68720bb99c3babc9ff0843e52965598fa178e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_961e4694c774adf2f9e5bc4a1b68720bb99c3babc9ff0843e52965598fa178e3->enter($__internal_961e4694c774adf2f9e5bc4a1b68720bb99c3babc9ff0843e52965598fa178e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_4e95472989f59bb2351a3c5bfcc3a8702c2e5e3a169ec8348a6abd49187e37f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e95472989f59bb2351a3c5bfcc3a8702c2e5e3a169ec8348a6abd49187e37f0->enter($__internal_4e95472989f59bb2351a3c5bfcc3a8702c2e5e3a169ec8348a6abd49187e37f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_961e4694c774adf2f9e5bc4a1b68720bb99c3babc9ff0843e52965598fa178e3->leave($__internal_961e4694c774adf2f9e5bc4a1b68720bb99c3babc9ff0843e52965598fa178e3_prof);

        
        $__internal_4e95472989f59bb2351a3c5bfcc3a8702c2e5e3a169ec8348a6abd49187e37f0->leave($__internal_4e95472989f59bb2351a3c5bfcc3a8702c2e5e3a169ec8348a6abd49187e37f0_prof);

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
", "@Framework/Form/money_widget.html.php", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\money_widget.html.php");
    }
}
