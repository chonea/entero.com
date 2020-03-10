<div id="wrapper">
    <div class="w1">
        <div id="header">
            <div class="header-frame">
                <div class="header-holder">
                    <h1 class="logo"><a href="<?php print $front_page; ?>"><?php print $site_name; ?></a></h1>
                    <div class="panel">
                        <?php print render($page['header']); ?>
                    </div>
                </div>
                <div id="nav">
                    <?php print render($page['navigation']); ?>
                </div>
                <?php print render($page['carousel']); ?>
                <?php print render($page['frontpagepost']); ?>
            </div>
        </div>
        <div id="main">
            <div class="info-box">
                <?php print render($page['front3blocks']); ?>
            </div>
            <?php if (render($page['front4blocks'])): ?>
                <div class="item-box">
                    <div class="item-holder">
                        <div class="columns-box">
                            <div class="holder">
                                <div class="frame">
                                    <div class="content-holder">
                                        <?php print render($page['front4blocks']); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
        <div id="footer">
            <dl>
                <dt>Web Design by:</dt>
                <dd><a href="http://www.verticalmotion.ca" target="_blank">Vertical Motion</a></dd>
            </dl>
            <?php
                global $flag;
                $flag = 1;
                print render($page['footer']);
            ?>
            <p>Copyright <?php echo date('Y'); ?> Entero Corporation</p>
            <script type="text/javascript">
<?php /* NO LONGER NEEDED - USING UNIVERSAL ANALYTICS
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-2900698-1']);
_gaq.push(['_trackPageview']);

(function() {
var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();
*/ ?>
</script>
            <script type="text/javascript">
/* <![CDATA[ */
document.write (
'<img src="http://www3.entero.com/acton/bn/2600/visitor.gif?ts='+
new Date().getTime()+
'&ref='+escape(document.referrer) + '">'
);
/* ]]> */
</script>


        </div>
    </div>
</div>