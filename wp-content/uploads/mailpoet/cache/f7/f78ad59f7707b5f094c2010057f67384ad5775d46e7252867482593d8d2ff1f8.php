<?php

/* update.html */
class __TwigTemplate_b621a62aadb24cfa48a7c6ad6cc8f4d670c96af1d7f2f296587305ea334fa7b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "update.html", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
<style type=\"text/css\">
#mailpoet-changelog ul {
  list-style: disc;
  padding-left: 20px;
}
</style>

<div class=\"wrap about-wrap\">
  <h1>";
        // line 13
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Welcome to MailPoet");
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "version", array()), "html", null, true);
        echo "</h1>

  <p class=\"about-text\">";
        // line 15
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Thank you for helping us test and improve this new version of MailPoet. You're one of our extra-special beta testers. We really appreciate your help!");
        echo "
  </p>
  <div style=\"position: absolute; top: .2em; right: 0;\"><img src=\"";
        // line 17
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("welcome_template/mailpoet-logo.png");
        echo "\" alt=\"MailPoet Logo\" /></div>

  <h2 class=\"nav-tab-wrapper wp-clearfix\">
    <a href=\"admin.php?page=mailpoet-welcome\" class=\"nav-tab\">";
        // line 20
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Welcome");
        echo "</a>
    <a href=\"admin.php?page=mailpoet-update\" class=\"nav-tab nav-tab-active\">";
        // line 21
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("What's New");
        echo "</a>
  </h2>

  <div id=\"mailpoet-changelog\" clas=\"feature-section one-col\">
    <h2>";
        // line 25
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("List of Changes");
        echo "</h2>
    <h3>3.0.0-beta.7.1 - 2016-12-06</h3>
    <ul>
      <li>Improved: allow user to restart sending after sending method failure;</li>
      <li>Fixed: subscribers are not added to lists after import;</li>
      <li>Fixed: sending should stop when newsletter is trashed;</li>
      <li>Fixed: update database schema after an update which fixes an SQL error;</li>
      <li>Fixed: status of sent newsletters is showing \"paused\" instead of \"sent\";</li>
      <li>Fixed: dividers in Automatic Latest Posts posts are not displayed. Thx Gregor!;</li>
      <li>Fixed: shortcodes (ie, first name) are not rendered when sending a preview;</li>
      <li>Fixed: count of confirmed subscribers only in step 2 of import is erroneous.</li>
    </ul>
    <br>
    <h3>3.0.0-beta.6 - 2016-11-29</h3>
    <ul>
      <li>Added: \"bounced\" status has been added to subscribers;</li>
      <li>Improved: execution time enforced between individual send operations. Avoids duplicate sending on really slow servers;</li>
      <li>Improved: Welcome emails are given higher priority for sending;</li>
      <li>Fixed: Welcome emails are not scheduled for WP users;</li>
      <li>Fixed: Unicode characters in FROM/REPLY-TO/TO fields are not rendered;</li>
      <li>Fixed: sending HTML emails with Amazon SES works again. Kudos Alex for reporting;</li>
      <li>Fixed: import fails when subscriber already exists in the database but the email is in different case format. Thx Ellen for telling us;</li>
      <li>Fixed: ampersand char (\"&\") inside the subject line won't throw errors in browser preview. Thanks Michel for reporting.</li>
    </ul>
    <br>
  </div>

  <hr>

  <div clas=\"feature-section one-col\">
    <br>
    <p style=\"text-align: center\"><a class=\"button button-primary\" href=\"admin.php?page=mailpoet-newsletters\">";
        // line 56
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Awesome! Now, take me to MailPoet");
        echo " &rarr;</a> <a class=\"button button-secondary\" href=\"https://wordpress.org/plugins/mailpoet/changelog/\" target=\"_blank\">";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("View all changes");
        echo " &rarr;</a></p>
  </div>

</div>

";
    }

    public function getTemplateName()
    {
        return "update.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 56,  71 => 25,  64 => 21,  60 => 20,  54 => 17,  49 => 15,  42 => 13,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "update.html", "/Users/Mac/Sites/Works/encyklopedie/wp-content/plugins/mailpoet/views/update.html");
    }
}
