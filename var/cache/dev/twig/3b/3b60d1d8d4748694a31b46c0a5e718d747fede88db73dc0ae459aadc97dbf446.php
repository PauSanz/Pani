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
        $__internal_0705794e6127f3531e07efbdfeac8331032720def90f4b729f9857b0d7aea20d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0705794e6127f3531e07efbdfeac8331032720def90f4b729f9857b0d7aea20d->enter($__internal_0705794e6127f3531e07efbdfeac8331032720def90f4b729f9857b0d7aea20d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_b385a4db6209b90b6bd8dada37f65ca6cf7c6795835c9862f311b87a3f0f22ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b385a4db6209b90b6bd8dada37f65ca6cf7c6795835c9862f311b87a3f0f22ad->enter($__internal_b385a4db6209b90b6bd8dada37f65ca6cf7c6795835c9862f311b87a3f0f22ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_0705794e6127f3531e07efbdfeac8331032720def90f4b729f9857b0d7aea20d->leave($__internal_0705794e6127f3531e07efbdfeac8331032720def90f4b729f9857b0d7aea20d_prof);

        
        $__internal_b385a4db6209b90b6bd8dada37f65ca6cf7c6795835c9862f311b87a3f0f22ad->leave($__internal_b385a4db6209b90b6bd8dada37f65ca6cf7c6795835c9862f311b87a3f0f22ad_prof);

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
