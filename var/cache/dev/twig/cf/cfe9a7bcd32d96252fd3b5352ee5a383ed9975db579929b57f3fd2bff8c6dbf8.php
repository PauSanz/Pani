<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_e75baf544d14334debdb9011590cd4ff2eb394362b774ee9d4827ef13ed32c9d extends Twig_Template
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
        $__internal_b560e313416242801c2d10cb179cf5508109dfb188ddfe91dd424f0f9314c23e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b560e313416242801c2d10cb179cf5508109dfb188ddfe91dd424f0f9314c23e->enter($__internal_b560e313416242801c2d10cb179cf5508109dfb188ddfe91dd424f0f9314c23e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_ad74e40f688feaa912393921cc1acb0934e3c6046af32365f5f7598285a229c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad74e40f688feaa912393921cc1acb0934e3c6046af32365f5f7598285a229c3->enter($__internal_ad74e40f688feaa912393921cc1acb0934e3c6046af32365f5f7598285a229c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_b560e313416242801c2d10cb179cf5508109dfb188ddfe91dd424f0f9314c23e->leave($__internal_b560e313416242801c2d10cb179cf5508109dfb188ddfe91dd424f0f9314c23e_prof);

        
        $__internal_ad74e40f688feaa912393921cc1acb0934e3c6046af32365f5f7598285a229c3->leave($__internal_ad74e40f688feaa912393921cc1acb0934e3c6046af32365f5f7598285a229c3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
