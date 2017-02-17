<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_ba4ae6009d75e433a538813d37b22ae62c1aadf7f2453b7ba4419ab24c13d67f extends Twig_Template
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
        $__internal_b9663581b2aa6437d7197c5a11e26423223dbf196ee6637491933c0b62dccdc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9663581b2aa6437d7197c5a11e26423223dbf196ee6637491933c0b62dccdc9->enter($__internal_b9663581b2aa6437d7197c5a11e26423223dbf196ee6637491933c0b62dccdc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_0faf1d6f144655dc9c185b8dfb6d4015273689009bace0870d94f0f4254cb80a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0faf1d6f144655dc9c185b8dfb6d4015273689009bace0870d94f0f4254cb80a->enter($__internal_0faf1d6f144655dc9c185b8dfb6d4015273689009bace0870d94f0f4254cb80a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_b9663581b2aa6437d7197c5a11e26423223dbf196ee6637491933c0b62dccdc9->leave($__internal_b9663581b2aa6437d7197c5a11e26423223dbf196ee6637491933c0b62dccdc9_prof);

        
        $__internal_0faf1d6f144655dc9c185b8dfb6d4015273689009bace0870d94f0f4254cb80a->leave($__internal_0faf1d6f144655dc9c185b8dfb6d4015273689009bace0870d94f0f4254cb80a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
