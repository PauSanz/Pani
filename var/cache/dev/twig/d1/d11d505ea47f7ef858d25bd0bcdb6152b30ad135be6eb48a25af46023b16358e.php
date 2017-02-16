<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_dece533eae3a867b80852feeb852d1e792806433d3124856faabc9498796bf79 extends Twig_Template
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
        $__internal_793bf1c8549dd0dd2785d47869c6c03dccd19280aab268bd87ef52efe58d71b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_793bf1c8549dd0dd2785d47869c6c03dccd19280aab268bd87ef52efe58d71b3->enter($__internal_793bf1c8549dd0dd2785d47869c6c03dccd19280aab268bd87ef52efe58d71b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_fae171ae4e9490e26c1c4c9ca2f7e2cc4ee50fce7df7a037aa9aa7452eb673d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fae171ae4e9490e26c1c4c9ca2f7e2cc4ee50fce7df7a037aa9aa7452eb673d4->enter($__internal_fae171ae4e9490e26c1c4c9ca2f7e2cc4ee50fce7df7a037aa9aa7452eb673d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_793bf1c8549dd0dd2785d47869c6c03dccd19280aab268bd87ef52efe58d71b3->leave($__internal_793bf1c8549dd0dd2785d47869c6c03dccd19280aab268bd87ef52efe58d71b3_prof);

        
        $__internal_fae171ae4e9490e26c1c4c9ca2f7e2cc4ee50fce7df7a037aa9aa7452eb673d4->leave($__internal_fae171ae4e9490e26c1c4c9ca2f7e2cc4ee50fce7df7a037aa9aa7452eb673d4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
