<?php

/* welcome.html */
class __TwigTemplate_34c7ae78c810931d17b4f3a15bc53458beadf669e29abe854ce9ae1a9ea7d493 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "welcome.html", 1);
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
.videoWrapper {
  position: relative;
  padding-bottom: 56.25%; /* 16:9 */
  /*padding-top: 25px;*/
  height: 0;
}
.videoWrapper iframe {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}
</style>

<div class=\"wrap about-wrap\">
  <h1>";
        // line 22
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Welcome to MailPoet");
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "version", array()), "html", null, true);
        echo "</h1>

  <p class=\"about-text\">";
        // line 24
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Thank you for helping us test and improve this new version of MailPoet. You're one of our extra-special beta testers. We really appreciate your help!");
        echo "
  </p>
  <div style=\"position: absolute; top: .2em; right: 0;\"><img src=\"";
        // line 26
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("welcome_template/mailpoet-logo.png");
        echo "\" alt=\"";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("MailPoet Logo");
        echo "\" /></div>

  <h2 class=\"nav-tab-wrapper wp-clearfix\">
    <a href=\"admin.php?page=mailpoet-welcome\" class=\"nav-tab nav-tab-active\">";
        // line 29
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Welcome");
        echo "</a>
    <a href=\"admin.php?page=mailpoet-update\" class=\"nav-tab\">";
        // line 30
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("What's new");
        echo "</a>
  </h2>

  <div class=\"headline-feature feature-video\">
    <div class=\"videoWrapper\">
      <iframe width=\"1050\" height=\"591\" src=\"https://player.vimeo.com/video/184501111?title=0&byline=0&portrait=0\" frameborder=\"0\" webkitallowfullscreen=\"\" mozallowfullscreen=\"\" allowfullscreen=\"\"></iframe>
    </div>
  </div>

  <hr>

  <div class=\"feature-section two-col\">
    <h2>";
        // line 42
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Help Us Improve MailPoet");
        echo "</h2>
    <div class=\"col\">
      <h3>";
        // line 44
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("We Need Your Feedback");
        echo "</h3>
      <p>";
        // line 45
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("As a beta tester, you have a very important job: to tell us what you think of this new version. If you love it or absolutely hate it, tell us! Any and all feedback is useful.");
        echo "</p>
      <p>";
        // line 46
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("To get in touch with us, simply click on this blue circle");
        echo " <img width=\"30\" style=\"margin:0\" src=\"";
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("welcome_template/beacon.png");
        echo "\" alt=\"Beacon\" /> ";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("in the bottom right corner of your screen. This button is visible on all MailPoet pages on your WordPress dashboard.");
        echo "</p>
    </div>
    <div class=\"col\">
      <h3>";
        // line 49
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Share Your Data With Us");
        echo "</h3>
      <p>";
        // line 50
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("By sharing your data <i>anonymously</i> with us, you can help us understand how people use MailPoet and what sort of features they like and don't like.");
        echo " <a href=\"http://docs.mailpoet.com/article/36-share-your-data\" target=\"_blank\">";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Find out more");
        echo " &rarr;</a>
      <br><br>
      <label>
        <input type=\"checkbox\" id=\"mailpoet_analytics_enabled\" value=\"1\"
        ";
        // line 54
        if ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "analytics", array()), "enabled", array())) {
            echo "checked=\"checked\"";
        }
        // line 55
        echo "        />&nbsp;";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Yes, I want to help!");
        echo "
      </label>
      </p>
    </div>
  </div>

  <hr>

  <div class=\"feature-section one-col\">
    <h2>";
        // line 64
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Subscribe To Our Newsletter");
        echo "</h2>
    <p>";
        // line 65
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("About once a month, we send out a pretty cool newsletter ourselves.");
        echo "</p>
    <p>";
        // line 66
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Sign up to get: Tips and tricks, special offers and important plugin updates!");
        echo "</p>
    <p>
    <iframe width=\"380\" scrolling=\"no\" frameborder=\"0\" src=\"http://www.mailpoet.com/?wysija-page=1&controller=subscribers&action=wysija_outter&wysija_form=5&external_site=1&wysijap=subscriptions-3\" class=\"iframe-wysija\" vspace=\"0\" tabindex=\"0\" style=\"border-style: none; display:block; visibility: visible; background-color: #f1f1f1!important;\" marginwidth=\"0\" marginheight=\"0\" hspace=\"0\" allowtransparency=\"true\" title=\"Subscribe To Our Newsletter\"></iframe>
    </p>
  </div>

  <hr>

  <div clas=\"feature-section one-col\">
    <br>
    <p style=\"text-align: center\"><a class=\"button button-primary\" href=\"admin.php?page=mailpoet-newsletters\">";
        // line 76
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Awesome! Now, take me to MailPoet");
        echo " &rarr;</a></p>
  </div>

</div>

<script type=\"text/javascript\">
jQuery(function(\$) {
  // Find all videos
  var \$allVideos = \$(\"iframe[src^='//player.vimeo.com'], iframe[src^='//www.youtube.com']\"),
  // The element that is fluid width
  \$fluidEl = \$(\"body\");
  // Figure out and save aspect ratio for each video
  \$allVideos.each(function() {
    \$(this)
      .data('aspectRatio', this.height / this.width)
      // and remove the hard coded width/height
      .removeAttr('height')
      .removeAttr('width');
  });
  // When the window is resized
  \$(window).resize(function() {
  var newWidth = \$fluidEl.width();
  // Resize all videos according to their own aspect ratio
  \$allVideos.each(function() {
    var \$el = \$(this);
    \$el
      .width(newWidth)
      .height(newWidth * \$el.data('aspectRatio'));
    });
  // Kick off one resize to fix all videos on page load
  }).resize();

    \$(function() {
      \$(\"#mailpoet_analytics_enabled\").on(\"click\", function() {
        var is_enabled = \$(this).is(\":checked\") ? true : \"\";
        MailPoet.Ajax.post({
          endpoint: \"settings\",
          action: \"set\",
          data: {
            analytics: { enabled: (is_enabled)}
          }
        })
      })
    });
});
</script>

";
    }

    public function getTemplateName()
    {
        return "welcome.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 76,  151 => 66,  147 => 65,  143 => 64,  130 => 55,  126 => 54,  117 => 50,  113 => 49,  103 => 46,  99 => 45,  95 => 44,  90 => 42,  75 => 30,  71 => 29,  63 => 26,  58 => 24,  51 => 22,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "welcome.html", "/Users/Mac/Sites/Works/encyklopedie/wp-content/plugins/mailpoet/views/welcome.html");
    }
}
