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
    $professor = sanitize_text_field($data['professorID']);

    wp_insert_post([
        'post_type' => 'like', 
        'post_status' => 'publish', 
        'post_title' => '2nd post test',
        'post_content' => 'Hello World',
        'meta_input' => [
            'liked_professor_id' => $professor
        ]
    ]);
}

function deleteLike()
{
    return 'Thanks for deleting a like';
}