               	<?php  
                // Test
                //wp_insert_post( );
                // Create post object
                $my_post = array();
                $my_post['ID']            = '140';
                $my_post['post_title']    = 'My post';
                $my_post['post_content']  = 'This is my post.';
                $my_post['post_status']   = '4656546456';
                $my_post['post_author']   = 1;
                $my_post['post_category'] = array(0);
                // Insert the post into the database
                wp_insert_post( $my_post );
