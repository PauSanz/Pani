<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_841de668e0710b00073832b496127d5bfb678ba1ef750def646f3b188f7f556f extends Twig_Template
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
        $__internal_29bbffdacacf0185eb89e89dbf6f964a1bf20873f2112b220024ba11ff4ced04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29bbffdacacf0185eb89e89dbf6f964a1bf20873f2112b220024ba11ff4ced04->enter($__internal_29bbffdacacf0185eb89e89dbf6f964a1bf20873f2112b220024ba11ff4ced04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_b4ba896cc53dbae2ee2e936c0bec88fe8775b8dc71a97631ef5c113acbd90d23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4ba896cc53dbae2ee2e936c0bec88fe8775b8dc71a97631ef5c113acbd90d23->enter($__internal_b4ba896cc53dbae2ee2e936c0bec88fe8775b8dc71a97631ef5c113acbd90d23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_29bbffdacacf0185eb89e89dbf6f964a1bf20873f2112b220024ba11ff4ced04->leave($__internal_29bbffdacacf0185eb89e89dbf6f964a1bf20873f2112b220024ba11ff4ced04_prof);

        
        $__internal_b4ba896cc53dbae2ee2e936c0bec88fe8775b8dc71a97631ef5c113acbd90d23->leave($__internal_b4ba896cc53dbae2ee2e936c0bec88fe8775b8dc71a97631ef5c113acbd90d23_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
