<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_28e0390647397dc850855c2e15f8b5f03e44bf2bab3365e8d1ccb7939ec2f10c extends Twig_Template
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
        $__internal_caeb2a8db54d670528e6d023ab4200ecf4c981cd24347a87d3b0912459df48ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_caeb2a8db54d670528e6d023ab4200ecf4c981cd24347a87d3b0912459df48ec->enter($__internal_caeb2a8db54d670528e6d023ab4200ecf4c981cd24347a87d3b0912459df48ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_036fc71b357f67106245aaa8b855b46c0b0c5516b3bfe7c56e230c3c6f7d1ef1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_036fc71b357f67106245aaa8b855b46c0b0c5516b3bfe7c56e230c3c6f7d1ef1->enter($__internal_036fc71b357f67106245aaa8b855b46c0b0c5516b3bfe7c56e230c3c6f7d1ef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_caeb2a8db54d670528e6d023ab4200ecf4c981cd24347a87d3b0912459df48ec->leave($__internal_caeb2a8db54d670528e6d023ab4200ecf4c981cd24347a87d3b0912459df48ec_prof);

        
        $__internal_036fc71b357f67106245aaa8b855b46c0b0c5516b3bfe7c56e230c3c6f7d1ef1->leave($__internal_036fc71b357f67106245aaa8b855b46c0b0c5516b3bfe7c56e230c3c6f7d1ef1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\repeated_row.html.php");
    }
}
