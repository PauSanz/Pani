<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_c6b29fdb34b2ae741a02c62ef09a0660ef07dc2dc26ca52bccb62100c7d7df5b extends Twig_Template
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
        $__internal_32f99bdad7e86edc89586d82a0f8238c7682691fa27057962fde21163d2a13a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32f99bdad7e86edc89586d82a0f8238c7682691fa27057962fde21163d2a13a4->enter($__internal_32f99bdad7e86edc89586d82a0f8238c7682691fa27057962fde21163d2a13a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_9a5064e578e45b7d9aeaa17ad12a1fa37a58e185b92366cdb58fbd5715f363cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a5064e578e45b7d9aeaa17ad12a1fa37a58e185b92366cdb58fbd5715f363cb->enter($__internal_9a5064e578e45b7d9aeaa17ad12a1fa37a58e185b92366cdb58fbd5715f363cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_32f99bdad7e86edc89586d82a0f8238c7682691fa27057962fde21163d2a13a4->leave($__internal_32f99bdad7e86edc89586d82a0f8238c7682691fa27057962fde21163d2a13a4_prof);

        
        $__internal_9a5064e578e45b7d9aeaa17ad12a1fa37a58e185b92366cdb58fbd5715f363cb->leave($__internal_9a5064e578e45b7d9aeaa17ad12a1fa37a58e185b92366cdb58fbd5715f363cb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
