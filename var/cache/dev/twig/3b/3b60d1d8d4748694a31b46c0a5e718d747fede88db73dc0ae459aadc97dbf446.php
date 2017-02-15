<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_cd6bde29c12e4a2fad6dc1d6352473d5a801a0fc30fd61fb769919c8608a3c95 extends Twig_Template
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
        $__internal_001a3f3ae1050a52b26e413a77129e060a41f2d3a3afe004da79a4c817114b05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_001a3f3ae1050a52b26e413a77129e060a41f2d3a3afe004da79a4c817114b05->enter($__internal_001a3f3ae1050a52b26e413a77129e060a41f2d3a3afe004da79a4c817114b05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_bf89727eef0e7c430295c1eea444d34c74d4865f943c98d29a37c6a09bf049c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf89727eef0e7c430295c1eea444d34c74d4865f943c98d29a37c6a09bf049c3->enter($__internal_bf89727eef0e7c430295c1eea444d34c74d4865f943c98d29a37c6a09bf049c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_001a3f3ae1050a52b26e413a77129e060a41f2d3a3afe004da79a4c817114b05->leave($__internal_001a3f3ae1050a52b26e413a77129e060a41f2d3a3afe004da79a4c817114b05_prof);

        
        $__internal_bf89727eef0e7c430295c1eea444d34c74d4865f943c98d29a37c6a09bf049c3->leave($__internal_bf89727eef0e7c430295c1eea444d34c74d4865f943c98d29a37c6a09bf049c3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
