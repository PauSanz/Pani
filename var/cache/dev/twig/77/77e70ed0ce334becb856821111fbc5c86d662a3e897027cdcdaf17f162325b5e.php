<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_ba06bfa98ee853a1a747b17506774099e14f6edcf9c831b8415133f93f46ac9d extends Twig_Template
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
        $__internal_9aab76cf1e941206f296ed109b610be3fe2a59b9a94c50f416309dcce39a900d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9aab76cf1e941206f296ed109b610be3fe2a59b9a94c50f416309dcce39a900d->enter($__internal_9aab76cf1e941206f296ed109b610be3fe2a59b9a94c50f416309dcce39a900d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_7882a567ab44048e8a28e9d25bc63b2b03b4cf839592c2ec9c0f428052c6b214 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7882a567ab44048e8a28e9d25bc63b2b03b4cf839592c2ec9c0f428052c6b214->enter($__internal_7882a567ab44048e8a28e9d25bc63b2b03b4cf839592c2ec9c0f428052c6b214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_9aab76cf1e941206f296ed109b610be3fe2a59b9a94c50f416309dcce39a900d->leave($__internal_9aab76cf1e941206f296ed109b610be3fe2a59b9a94c50f416309dcce39a900d_prof);

        
        $__internal_7882a567ab44048e8a28e9d25bc63b2b03b4cf839592c2ec9c0f428052c6b214->leave($__internal_7882a567ab44048e8a28e9d25bc63b2b03b4cf839592c2ec9c0f428052c6b214_prof);

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
", "@Framework/Form/search_widget.html.php", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
