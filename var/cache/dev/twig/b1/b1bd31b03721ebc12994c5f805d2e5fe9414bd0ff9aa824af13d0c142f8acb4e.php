<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_e3dd3fcec98b9598adbbda2902b15ece9856c667421bac9f24eff70e939156bf extends Twig_Template
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
        $__internal_b1df5255de3d88bd3cca0d2197af2cb4bd15108ecd3e4322a24a899ea66dedbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1df5255de3d88bd3cca0d2197af2cb4bd15108ecd3e4322a24a899ea66dedbb->enter($__internal_b1df5255de3d88bd3cca0d2197af2cb4bd15108ecd3e4322a24a899ea66dedbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_74fec26352d86dd085e8f82de484b81a1ff9ed295d024ae121426be669c4b03d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74fec26352d86dd085e8f82de484b81a1ff9ed295d024ae121426be669c4b03d->enter($__internal_74fec26352d86dd085e8f82de484b81a1ff9ed295d024ae121426be669c4b03d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_b1df5255de3d88bd3cca0d2197af2cb4bd15108ecd3e4322a24a899ea66dedbb->leave($__internal_b1df5255de3d88bd3cca0d2197af2cb4bd15108ecd3e4322a24a899ea66dedbb_prof);

        
        $__internal_74fec26352d86dd085e8f82de484b81a1ff9ed295d024ae121426be669c4b03d->leave($__internal_74fec26352d86dd085e8f82de484b81a1ff9ed295d024ae121426be669c4b03d_prof);

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
", "@Framework/Form/url_widget.html.php", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
