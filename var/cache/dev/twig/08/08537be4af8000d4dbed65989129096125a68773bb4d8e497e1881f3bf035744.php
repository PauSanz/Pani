<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_8a4d41bb74f452199bf28de936c450a734ad83d53d445b4d2685954a776bba10 extends Twig_Template
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
        $__internal_f9c7dd76a55961582473a3bd693debe1a8c0215f35c2fc0c985eea31e3bc36f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9c7dd76a55961582473a3bd693debe1a8c0215f35c2fc0c985eea31e3bc36f4->enter($__internal_f9c7dd76a55961582473a3bd693debe1a8c0215f35c2fc0c985eea31e3bc36f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_4f8cd06c26d9a65d8b8484958a922418a9e64c40510a0d6996330aeaaa4dfaec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f8cd06c26d9a65d8b8484958a922418a9e64c40510a0d6996330aeaaa4dfaec->enter($__internal_4f8cd06c26d9a65d8b8484958a922418a9e64c40510a0d6996330aeaaa4dfaec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_f9c7dd76a55961582473a3bd693debe1a8c0215f35c2fc0c985eea31e3bc36f4->leave($__internal_f9c7dd76a55961582473a3bd693debe1a8c0215f35c2fc0c985eea31e3bc36f4_prof);

        
        $__internal_4f8cd06c26d9a65d8b8484958a922418a9e64c40510a0d6996330aeaaa4dfaec->leave($__internal_4f8cd06c26d9a65d8b8484958a922418a9e64c40510a0d6996330aeaaa4dfaec_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
