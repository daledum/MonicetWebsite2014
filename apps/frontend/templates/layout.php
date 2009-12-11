<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
  </head>
  <body>
    <div id="_div_background">
	    <div id="_div_page">
	        <div id="_div_main">
	            <ul id="_ul_languages">
	               <li><?php echo link_to('<img alt="en" title="' . __('English') . '" src="/images/en.png"/>', 'language/change?sf_culture=en'); ?></li>
	               <li><?php echo link_to('<img alt="pt" title="' . __('Portuguese') . '" src="/images/pt.png"/>', 'language/change?sf_culture=pt'); ?></li>
	            </ul>
	            <div id="_div_main_left">
	                <ul id="_ul_main_menu" style="list-style-type: disc;">
	                    <li><?php echo link_to(__('Home'), 'home/index'); ?></li>
	                    <li><?php echo link_to(__('Background'), 'background/index'); ?></li>
	                    <li><?php echo link_to(__('Objectives'), 'objectives/index'); ?></li>
	                    <li><?php echo link_to(__('Team and Partners'), 'team/index'); ?></li>
	                    <li><?php echo link_to(__('Consorcium'), 'consorcium/index'); ?></li>
	                    <li><?php echo link_to(__('Consultants'), 'consultants/index'); ?></li>
	                </ul>
	            </div>
	            <div id="_div_main_center">
	                <div id="_div_main_content">
	                    <?php echo $sf_content ?>
	                </div>
	            </div>
	            <div id="_div_main_recent_news">
	               <p id="_div_main_recent_news_header"><?php echo __('News'); ?></p>
	               <?php include_component('news', 'recentNews') ?>
	            </div>
	            <?php include_component('consorcium', 'consorciumElements') ?>
	        </div>
	    </div>
    </div>
    <div id="_div_footer">
        <div>
            <span id="_span_support"><?php echo __('Support'); ?>: &nbsp;</span>
            <ul id="_ul_support">
                <li>......</li>
            </ul>
            <p><?php echo __('developed by'); ?> <a href="http://www.morfose.net">morfose</a>&copy;2009</p>
        </div>
    </div>
  </body>
</html>