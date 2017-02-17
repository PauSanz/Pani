<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_4200d37ffa52f13af3d7ac4d14c8c6961ae98f0e2e8954cb8adc54233b648d9f extends Twig_Template
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
        $__internal_93039c9336ad64aa1fd5edbe646de2e0a7024be96c703f9304c47f43766ef43a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93039c9336ad64aa1fd5edbe646de2e0a7024be96c703f9304c47f43766ef43a->enter($__internal_93039c9336ad64aa1fd5edbe646de2e0a7024be96c703f9304c47f43766ef43a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_083e5b574042c1d385624d8ee92695f4c8e746b906a3d7cec53125e74017e1c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_083e5b574042c1d385624d8ee92695f4c8e746b906a3d7cec53125e74017e1c2->enter($__internal_083e5b574042c1d385624d8ee92695f4c8e746b906a3d7cec53125e74017e1c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_93039c9336ad64aa1fd5edbe646de2e0a7024be96c703f9304c47f43766ef43a->leave($__internal_93039c9336ad64aa1fd5edbe646de2e0a7024be96c703f9304c47f43766ef43a_prof);

        
        $__internal_083e5b574042c1d385624d8ee92695f4c8e746b906a3d7cec53125e74017e1c2->leave($__internal_083e5b574042c1d385624d8ee92695f4c8e746b906a3d7cec53125e74017e1c2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
