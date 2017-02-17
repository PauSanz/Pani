<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_b124abf8e1ee7f9d3bfbd371b1e444633ae7c2267f94ff6dec1cbe52cfe8601b extends Twig_Template
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
        $__internal_132140ad664e8c86fc5692da7f7b91db1283c4f98df367c9a433bb13067a4f2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_132140ad664e8c86fc5692da7f7b91db1283c4f98df367c9a433bb13067a4f2d->enter($__internal_132140ad664e8c86fc5692da7f7b91db1283c4f98df367c9a433bb13067a4f2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_da26c3d0b3526e5dd6a429d014600133994cec362a8491a79c1d9c5d9a7e9339 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da26c3d0b3526e5dd6a429d014600133994cec362a8491a79c1d9c5d9a7e9339->enter($__internal_da26c3d0b3526e5dd6a429d014600133994cec362a8491a79c1d9c5d9a7e9339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_132140ad664e8c86fc5692da7f7b91db1283c4f98df367c9a433bb13067a4f2d->leave($__internal_132140ad664e8c86fc5692da7f7b91db1283c4f98df367c9a433bb13067a4f2d_prof);

        
        $__internal_da26c3d0b3526e5dd6a429d014600133994cec362a8491a79c1d9c5d9a7e9339->leave($__internal_da26c3d0b3526e5dd6a429d014600133994cec362a8491a79c1d9c5d9a7e9339_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
