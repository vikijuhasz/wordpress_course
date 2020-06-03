<?php 

add_action('rest_api_init', 'universityLikeRoutes');

function universityLikeRoutes()
{
    register_rest_route('university/v1', 'manageLike', [
        'methods' => 'POST',
        'callback' => 'createLike'
    ]);

    register_rest_route('university/v1', 'manageLike', [
        'methods' => 'DELETE',
        'callback' => 'deleteLike'
    ]);
}

function createLike($data)
{
    if (is_user_logged_in()) {
        $professor = sanitize_text_field($data['professorID']);

        $likeExists = new WP_Query([
            'author' => get_current_user_id(),
            'post_type' =>'like',
            'meta_query' => [
                [
                    'key' => 'liked_professor_id',
                    'compare' => '=',
                    'value' => $professor
                ]
            ]
        ]);

        if ($likeExists->found_posts == 0 && get_post_type($professor) == 'professor') {
            return wp_insert_post([
                'post_type' => 'like', 
                'post_status' => 'publish', 
                'post_title' => '2nd post test',
                'post_content' => 'Hello World',
                'meta_input' => [
                    'liked_professor_id' => $professor
                ]
            ]); 
        } else {
            die("Invalid professor id");
        }        
    } else {
        die("Only logged in users can create a like");
    }
}

function deleteLike($data)
{
    $likeId = sanitize_textarea_field($data['like']);
    if (get_current_user_id() == get_post_field('post_author', $likeId) && get_post_type($likeId) == 'like') {
        wp_delete_post($likeId, true);
        return 'Congrats, like deleted.';
    } else {
        die('You do not have permission to delete that');
    }
}