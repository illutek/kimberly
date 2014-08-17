<div id="wrap">
    <div class="container">
    <!-- #header -->
    <div id="header" class="sixteen columns clearfix">   
        
            <div class="inner">
    
                    <?php if ($site_name): ?>
                    <div id="site-name"<?php if ($hide_site_name) { print ' class="element-invisible"'; } ?>>
                    <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><?php print $site_name; ?></a>
                    </div>
                    <?php endif; ?>
                
            </div>
        </div><!-- /#header -->

        <!-- #navigation -->
        <div id="navigation" class="sixteen columns clearfix">
        
            <div class="menu-header">
            <?php if ($page['header']) : ?>
                <?php print drupal_render($page['header']); ?>
                <?php else : ?>
                <?php 
                if (module_exists('i18n_menu')) {
                $main_menu_tree = i18n_menu_translated_tree(variable_get('menu_main_links_source', 'main-menu'));
                } else { 
                $main_menu_tree = menu_tree(variable_get('menu_main_links_source', 'main-menu')); 
                } ?>
                <div class="content">
                <?php print drupal_render($main_menu_tree); ?>
                </div>
            <?php endif; ?>
            </div>            
        </div><!-- /#navigation -->

        <div class="clear"></div>  

     
        <!-- #submenu -->
        
            <div id="submenu" class="sixteen columns">
                <ul class="submenu">
                    <li class="portfolio1"><a href="project1">Portfolio1</a></li>
                    <li class="portfolio2"><a href="project2">Portfolio2</a></li>
                    <li class="portfolio3"><a href="project3">Portfolio3</a></li>
                    <li class="portfolio4"><a href="project4">Portfolio4</a></li>
                    <li class="portfolio5"><a href="project5">Portfolio5</a></li>
                </ul>               
            </div>
        
        <!-- /#submenu -->
        <?php if ($page['sidebar_first']): ?>
        <!-- #sidebar-first -->
        <div id="sidebar-first" class="five columns">
            <?php print render($page['sidebar_first']); ?>
        </div><!-- /#sidebar-first -->
        <?php endif; ?>
        
        <?php if ($page['sidebar_first'] && $page['sidebar_second']) { ?>
        <div id="content" class="six columns">
        <?php } elseif ($page['sidebar_first'] || $page['sidebar_second']) { ?>
        <div id="content" class="eleven columns">
		<?php } else { ?>
        <div id="content" class="sixteen columns clearfix">    
        <?php } ?>
        
            <?php if ($messages): ?>
                <div id="messages">
                <?php print $messages; ?>
                </div><!-- /#messages -->
            <?php endif; ?>
        
            <div id="main">
            
                <?php if ($page['highlighted']): ?><div id="highlighted" class="clearfix"><?php print render($page['highlighted']); ?></div><?php endif; ?>
                
                <?php print render($title_prefix); ?>
                
                <?php if ($title): ?>
                <h1 class="title" id="page-title">
                  <?php print $title; ?>
                </h1>
                <?php endif; ?>
                
                <?php print render($title_suffix); ?>
                
                <?php if ($tabs): ?>
                <div class="tabs">
                  <?php print render($tabs); ?>
                </div>
                <?php endif; ?>
                
                <?php print render($page['help']); ?>
                
                <?php if ($action_links): ?>
                <ul class="action-links">
                  <?php print render($action_links); ?>
                </ul>
                <?php endif; ?>
                
                <?php print render($page['content']); ?>
                
            </div>
        
        </div><!-- /#content -->
        
        <?php if ($page['sidebar_second']): ?>
        <!-- #sidebar-first -->
        <div id="sidebar-second" class="five columns">
            <?php print render($page['sidebar_second']); ?>
        </div><!-- /#sidebar-first -->
        <?php endif; ?>
        
        <div class="clear"></div>
        
        <?php if ($page['featured_left'] || $page['featured_right']): ?>
        <!-- #featured -->
        <div id="featured" class="sixteen columns clearfix">
            
            <?php if ($page['featured_left'] && $page['featured_right']) { ?>
            <div class="one_half">
            <?php print render($page['featured_left']); ?>
            </div>
            
            <div class="one_half last">
            <?php print render($page['featured_right']); ?>
            </div>
            <?php } else { ?>
                
            <?php print render($page['featured_left']); ?>
            <?php print render($page['featured_right']); ?>
            
            <?php } ?>
            
        </div><!-- /#featured -->
        <?php endif; ?>
        
	</div>
        
	<div id="footer" >
        <div class="container">
        	<div class="sixteen columns clearfix">
                
                <?php if ($page['footer']): print render($page['footer']); endif; ?>
                
                <div class="clear"></div>
                
                <div id="credits">&copy
                <?php print(date('Y') . ' ');?>
                <?php if (!empty($site_name)):?>
                <?php print $site_name;?>
                <?php endif;?>
                
                </div>
        	</div>
        </div>
    </div>
    
</div> <!-- /#wrap -->

<script type="text/javascript">
    jQuery("#views_slideshow_controls_text_pause_portfolio-block").css("display", "none")
    jQuery("#views_slideshow_controls_text_pause_handwork-page").css("display", "none")
    jQuery("#views_slideshow_controls_text_pause_projecten-page").css("display", "none")
    jQuery("#views_slideshow_controls_text_pause_projecten-page_1").css("display", "none")
    jQuery("#views_slideshow_controls_text_pause_projecten-page_2").css("display", "none")
    jQuery("#views_slideshow_controls_text_pause_projecten-page_3").css("display", "none")
    jQuery("#views_slideshow_controls_text_pause_projecten-page_4").css("display", "none")
</script>

