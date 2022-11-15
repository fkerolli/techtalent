<div class="full-width-header">
<?php $teczilla_top_header_enable =  get_theme_mod('teczilla_top_header_enable',0); 

            if($teczilla_top_header_enable=='1'){

            ?>            
            <div class="toolbar-area hidden-md">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="toolbar-contact">
                                <?php 
                                $teczilla_header_mail = get_theme_mod('teczilla_header_mail','');
                                $teczilla_header_phone = get_theme_mod('teczilla_header_phone','');
                                $teczilla_header_address = get_theme_mod('teczilla_header_address','');
                                 ?>
                                <ul>
                                    <?php if(!empty($teczilla_header_mail)) {  ?>
                                    <li><i class="fa fa-envelope"></i><a href="mailto:<?php echo esc_url($teczilla_header_mail); ?>"><?php echo esc_html($teczilla_header_mail); ?></a></li> 
                                    <?php } if(!empty($teczilla_header_phone)) { ?>                             
                                    <li>|</li>
                                    
                                    <li><i class="fa fa-phone"></i><a><?php echo esc_html($teczilla_header_phone); ?></a></li>
                                                                        <?php } if(!empty($teczilla_header_address)) { ?>

                                    <li>|</li>
                                    <li><i class="fa fa-map-marker"></i><a><?php echo esc_html($teczilla_header_address); ?></a></li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                              <div class="col-md-4">
                              
                            <div class="toolbar-sl-share">

                                <ul>
                                <?php
                                $teczilla_services_no        = 4;
                                $teczilla_services_icons     = array();
                                for( $i = 1; $i <= $teczilla_services_no; $i++ ) {
                                    $teczilla_services_icons = get_theme_mod('teczilla_service_page_icon'.$i);
                                $teczilla_service_page_url = get_theme_mod('teczilla_service_page_url'.$i);

                                if(!empty($teczilla_services_icons)) {
                                ?>

                                <li><a href="<?php echo esc_url($teczilla_service_page_url); ?>" class="tec-icons"><i class="fa <?php echo esc_attr($teczilla_services_icons); ?>"></i></a></li>
                               <?php

                               } }?> 


                                </ul>
                                 
                            </div>
                            </div>
                        </div>
                
                    </div>
                </div>
            </div>

        <?php } ?>
  
            <!--Header Start-->

            <header id="tec-header" class="tec-header">
                <!-- Menu Start -->
    <?php $teczilla_sticky_thumb = get_theme_mod('teczilla_sticky_thumb',0);
     if($teczilla_sticky_thumb==0){
    
            if($teczilla_top_header_enable=='1'){
                if(!is_user_logged_in() || is_customize_preview()) { ?>
                <div class="teczilla-menu-area menu-sticky tec-software-stick">
                    <?php }else{ ?>
                    <div class="teczilla-menu-area menu-sticky">
                    <?php } }else{ ?>
                        <div class="teczilla-menu-area menu-sticky tophead"> <?php
                    } ?>
                <?php 
                } else { ?>
                <div class="menu-area">
                    <?php } ?> 
                    <div class="container-fluid">
                        <div class="row">

                            <div class="col-md-3">
                                <div class="logo-area">
                                     <?php
                                        if( function_exists( 'has_custom_logo' ) && has_custom_logo() ){
                                        the_custom_logo();
                                        } 
                                        if (display_header_text()==true){ 
                                        ?>
                                         <h1 class="avadanta-title">
                                             <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                                             <?php esc_html(bloginfo( 'title' )); ?>
                                             </a>
                                         </h1>
                                        <?php } ?>
                                </div>
                            </div>
                            
                            <div class="col-lg-7 text-left">
                                <nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e('Top Menu', 'teczilla-software' ); ?>">
                                    <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><i class="fa fa-bars"></i></button>
                                         <?php
                                         if ( has_nav_menu( 'primary' ) ) {
                                            wp_nav_menu( array(
                                                'theme_location' => 'primary',
                                                'menu_id'        => 'primary-menu',

                                            ) );
                                        }
                                                else
                                                        {
                                                        ?>
                                    <ul class="teczilla-add-menu">
                                        <li class="header-menus">
                                            <a href="<?php echo esc_url( admin_url( 'nav-menus.php' ));  ?>"><?php echo esc_html__( 'Add Main Menu', 'teczilla-software' ); ?>
                                            </a>
                                        </li>
                                    </ul>
                                    <?php
                                    }
                                    ?>
                                </nav>
                            </div>
                             <?php 
                                $teczilla_header_button_address = get_theme_mod('teczilla_header_button_address','Know More'); 
                                $teczilla_header_button_url = get_theme_mod('teczilla_header_button_url','#'); 
                                if($teczilla_header_button_address !=="" && $teczilla_header_button_url !=="") {
                                ?>
                            <div class="col-md-2 buttn">
                                <nav id="site-navigation" class="main-navigation" role="navigation">
                                    <div id="primary-menu" class="menu">
                                        <ul><li class="btn"><a href="<?php echo esc_url($teczilla_header_button_url); ?>"><?php echo esc_html($teczilla_header_button_address); ?></a></li></ul>
                                    </div>
                                </nav>
                            </div>
                        <?php } ?>
                        </div>
                    </div>
                </div>
                <!-- Menu End -->
            </header>
            <!--Header End-->
        </div>