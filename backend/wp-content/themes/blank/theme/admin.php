<?php

/*******************************
        Creating Informações Page
    ********************************/

        /*******************************
        Disabling Guttenber Editor
        ********************************/

        add_filter('use_block_editor_for_post_type','disable_guttemberg_editor');
        function disable_guttemberg_editor() {
            return false;
        }

        /*******************************
        Adding the Options Page in Admin Menu
            *Create a page called "General Information", then change the ID and at get_page_by_path() of this page at the line below
        ********************************/

        add_action('admin_menu', 'linked_url');
        function linked_url() {
            add_menu_page('linked_url','General infos','read','post.php?post=6&action=edit','', 'dashicons-admin-generic',  90);
        }

        /*******************************
        Hiding the Options Page
        ********************************/

        add_filter('parse_query','exclude_pages_from_admin');
        function exclude_pages_from_admin($query){
            global $pagenow,$post_type;
            if(is_admin() && $pagenow == 'edit.php' && $post_type == 'page') {
                $settings_page = get_page_by_path('information', NULL,'page')->ID;
                $query->query_vars['post__not_in'] = array($settings_page);
            }
        }