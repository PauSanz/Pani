<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_f36809a933f07499a17a19595c53b10aa963ae08aa007722828a211328d0e041 extends Twig_Template
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
        $__internal_d1671e5c72a474a7a2a0cda78e4dcc13b8978e352718f6cfa6a8cd662405318f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1671e5c72a474a7a2a0cda78e4dcc13b8978e352718f6cfa6a8cd662405318f->enter($__internal_d1671e5c72a474a7a2a0cda78e4dcc13b8978e352718f6cfa6a8cd662405318f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_37c848ea10ca2901ebbf4c866875466c5b96b95ab244075b3cab3fc867acdf23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37c848ea10ca2901ebbf4c866875466c5b96b95ab244075b3cab3fc867acdf23->enter($__internal_37c848ea10ca2901ebbf4c866875466c5b96b95ab244075b3cab3fc867acdf23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_d1671e5c72a474a7a2a0cda78e4dcc13b8978e352718f6cfa6a8cd662405318f->leave($__internal_d1671e5c72a474a7a2a0cda78e4dcc13b8978e352718f6cfa6a8cd662405318f_prof);

        
        $__internal_37c848ea10ca2901ebbf4c866875466c5b96b95ab244075b3cab3fc867acdf23->leave($__internal_37c848ea10ca2901ebbf4c866875466c5b96b95ab244075b3cab3fc867acdf23_prof);

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
", "@Framework/Form/submit_widget.html.php", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
