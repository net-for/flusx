<?php
$ask->months   = array(
    '1'  => 'January',
    '2'  => 'February',
    '3'  =>'March',
    '4'  =>'April',
    '5'  =>'May',
    '6'  =>'June',
    '7'  =>'July',
    '8'  =>'August',
    '9'  =>'September',
    '10' =>'October',
    '11' =>'November',
    '12' =>'December'
);
$ask->notif_data = array(
    'ask_question' => array(
        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 512 512"><path fill="currentColor" d="M294.1 256L167 129c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.3 34 0L345 239c9.1 9.1 9.3 23.7.7 33.1L201.1 417c-4.7 4.7-10.9 7-17 7s-12.3-2.3-17-7c-9.4-9.4-9.4-24.6 0-33.9l127-127.1z"></path></svg>',
        'text' => __('notification_asked_you_question'),
        'action' => __('notification_answer_it')
    ),
    'answer_question' => array(
        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 512 512"><path fill="currentColor" d="M256 105c-101.8 0-188.4 62.4-224 151 35.6 88.6 122.2 151 224 151s188.4-62.4 224-151c-35.6-88.6-122.2-151-224-151zm0 251.7c-56 0-101.8-45.3-101.8-100.7S200 155.3 256 155.3 357.8 200.6 357.8 256 312 356.7 256 356.7zm0-161.1c-33.6 0-61.1 27.2-61.1 60.4s27.5 60.4 61.1 60.4 61.1-27.2 61.1-60.4-27.5-60.4-61.1-60.4z"></path></svg>',
        'text' => __('notification_answered_your_question'),
        'action' => __('notification_view_answer'),
        'data_load' => '?link1=timeline&id=null&postid={{ID}}'
    ),
    'followed_u' => array(
        'icon' => '<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 487.958 487.958" style="enable-background:new 0 0 487.958 487.958;" xml:space="preserve"><g><path d="M483.058,215.613l-215.5-177.6c-4-3.3-9.6-4-14.3-1.8c-4.7,2.2-7.7,7-7.7,12.2v93.6c-104.6,3.8-176.5,40.7-213.9,109.8c-32.2,59.6-31.9,130.2-31.6,176.9c0,3.8,0,7.4,0,10.8c0,6.1,4.1,11.5,10.1,13.1c1.1,0.3,2.3,0.4,3.4,0.4c4.8,0,9.3-2.5,11.7-6.8c73-128.7,133.1-134.9,220.2-135.2v93.3c0,5.2,3,10,7.8,12.2s10.3,1.5,14.4-1.8l215.4-178.2c3.1-2.6,4.9-6.4,4.9-10.4S486.158,218.213,483.058,215.613z M272.558,375.613v-78.1c0-3.6-1.4-7-4-9.5c-2.5-2.5-6-4-9.5-4c-54.4,0-96.1,1.5-136.6,20.4c-35,16.3-65.3,44-95.2,87.5c1.2-39.7,6.4-87.1,28.1-127.2c34.4-63.6,101-95.1,203.7-96c7.4-0.1,13.4-6.1,13.4-13.5v-78.2l180.7,149.1L272.558,375.613z"/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>',
        'text' => __('notification_followed_u'),
        'action' => '',
        'data_load' => ''
    ),
    'visit_profile' => array(
        'icon' => '<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 487.958 487.958" style="enable-background:new 0 0 487.958 487.958;" xml:space="preserve"><g><path d="M483.058,215.613l-215.5-177.6c-4-3.3-9.6-4-14.3-1.8c-4.7,2.2-7.7,7-7.7,12.2v93.6c-104.6,3.8-176.5,40.7-213.9,109.8c-32.2,59.6-31.9,130.2-31.6,176.9c0,3.8,0,7.4,0,10.8c0,6.1,4.1,11.5,10.1,13.1c1.1,0.3,2.3,0.4,3.4,0.4c4.8,0,9.3-2.5,11.7-6.8c73-128.7,133.1-134.9,220.2-135.2v93.3c0,5.2,3,10,7.8,12.2s10.3,1.5,14.4-1.8l215.4-178.2c3.1-2.6,4.9-6.4,4.9-10.4S486.158,218.213,483.058,215.613z M272.558,375.613v-78.1c0-3.6-1.4-7-4-9.5c-2.5-2.5-6-4-9.5-4c-54.4,0-96.1,1.5-136.6,20.4c-35,16.3-65.3,44-95.2,87.5c1.2-39.7,6.4-87.1,28.1-127.2c34.4-63.6,101-95.1,203.7-96c7.4-0.1,13.4-6.1,13.4-13.5v-78.2l180.7,149.1L272.558,375.613z"/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>',
        'text' => __('notification_profile_visit_u'),
        'action' => '',
        'data_load' => ''
    ),
    'like' => array(
        'icon' => '<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 487.958 487.958" style="enable-background:new 0 0 487.958 487.958;" xml:space="preserve"><g><path d="M483.058,215.613l-215.5-177.6c-4-3.3-9.6-4-14.3-1.8c-4.7,2.2-7.7,7-7.7,12.2v93.6c-104.6,3.8-176.5,40.7-213.9,109.8c-32.2,59.6-31.9,130.2-31.6,176.9c0,3.8,0,7.4,0,10.8c0,6.1,4.1,11.5,10.1,13.1c1.1,0.3,2.3,0.4,3.4,0.4c4.8,0,9.3-2.5,11.7-6.8c73-128.7,133.1-134.9,220.2-135.2v93.3c0,5.2,3,10,7.8,12.2s10.3,1.5,14.4-1.8l215.4-178.2c3.1-2.6,4.9-6.4,4.9-10.4S486.158,218.213,483.058,215.613z M272.558,375.613v-78.1c0-3.6-1.4-7-4-9.5c-2.5-2.5-6-4-9.5-4c-54.4,0-96.1,1.5-136.6,20.4c-35,16.3-65.3,44-95.2,87.5c1.2-39.7,6.4-87.1,28.1-127.2c34.4-63.6,101-95.1,203.7-96c7.4-0.1,13.4-6.1,13.4-13.5v-78.2l180.7,149.1L272.558,375.613z"/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>',
        'text' => __('like_your_question'),
        'action' => '',
        'data_load' => ''
    ),
    'like_replay' => array(
        'icon' => '<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 487.958 487.958" style="enable-background:new 0 0 487.958 487.958;" xml:space="preserve"><g><path d="M483.058,215.613l-215.5-177.6c-4-3.3-9.6-4-14.3-1.8c-4.7,2.2-7.7,7-7.7,12.2v93.6c-104.6,3.8-176.5,40.7-213.9,109.8c-32.2,59.6-31.9,130.2-31.6,176.9c0,3.8,0,7.4,0,10.8c0,6.1,4.1,11.5,10.1,13.1c1.1,0.3,2.3,0.4,3.4,0.4c4.8,0,9.3-2.5,11.7-6.8c73-128.7,133.1-134.9,220.2-135.2v93.3c0,5.2,3,10,7.8,12.2s10.3,1.5,14.4-1.8l215.4-178.2c3.1-2.6,4.9-6.4,4.9-10.4S486.158,218.213,483.058,215.613z M272.558,375.613v-78.1c0-3.6-1.4-7-4-9.5c-2.5-2.5-6-4-9.5-4c-54.4,0-96.1,1.5-136.6,20.4c-35,16.3-65.3,44-95.2,87.5c1.2-39.7,6.4-87.1,28.1-127.2c34.4-63.6,101-95.1,203.7-96c7.4-0.1,13.4-6.1,13.4-13.5v-78.2l180.7,149.1L272.558,375.613z"/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>',
        'text' => __('like_your_replay'),
        'action' => __('notification_view_replay'),
        'data_load' => '?link1=timeline&id=null&postid={{ID}}'
    ),
    'user_ask' => array(
        'icon' => '<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 487.958 487.958" style="enable-background:new 0 0 487.958 487.958;" xml:space="preserve"><g><path d="M483.058,215.613l-215.5-177.6c-4-3.3-9.6-4-14.3-1.8c-4.7,2.2-7.7,7-7.7,12.2v93.6c-104.6,3.8-176.5,40.7-213.9,109.8c-32.2,59.6-31.9,130.2-31.6,176.9c0,3.8,0,7.4,0,10.8c0,6.1,4.1,11.5,10.1,13.1c1.1,0.3,2.3,0.4,3.4,0.4c4.8,0,9.3-2.5,11.7-6.8c73-128.7,133.1-134.9,220.2-135.2v93.3c0,5.2,3,10,7.8,12.2s10.3,1.5,14.4-1.8l215.4-178.2c3.1-2.6,4.9-6.4,4.9-10.4S486.158,218.213,483.058,215.613z M272.558,375.613v-78.1c0-3.6-1.4-7-4-9.5c-2.5-2.5-6-4-9.5-4c-54.4,0-96.1,1.5-136.6,20.4c-35,16.3-65.3,44-95.2,87.5c1.2-39.7,6.4-87.1,28.1-127.2c34.4-63.6,101-95.1,203.7-96c7.4-0.1,13.4-6.1,13.4-13.5v-78.2l180.7,149.1L272.558,375.613z"/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>',
        'text' => __('user_ask'),
        'action' => __('notification_view_question'),
        'data_load' => '?link1=timeline&id=null&postid={{ID}}'
    ),
    'mention_post' => array(
        'icon' => '<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 487.958 487.958" style="enable-background:new 0 0 487.958 487.958;" xml:space="preserve"><g><path d="M483.058,215.613l-215.5-177.6c-4-3.3-9.6-4-14.3-1.8c-4.7,2.2-7.7,7-7.7,12.2v93.6c-104.6,3.8-176.5,40.7-213.9,109.8c-32.2,59.6-31.9,130.2-31.6,176.9c0,3.8,0,7.4,0,10.8c0,6.1,4.1,11.5,10.1,13.1c1.1,0.3,2.3,0.4,3.4,0.4c4.8,0,9.3-2.5,11.7-6.8c73-128.7,133.1-134.9,220.2-135.2v93.3c0,5.2,3,10,7.8,12.2s10.3,1.5,14.4-1.8l215.4-178.2c3.1-2.6,4.9-6.4,4.9-10.4S486.158,218.213,483.058,215.613z M272.558,375.613v-78.1c0-3.6-1.4-7-4-9.5c-2.5-2.5-6-4-9.5-4c-54.4,0-96.1,1.5-136.6,20.4c-35,16.3-65.3,44-95.2,87.5c1.2-39.7,6.4-87.1,28.1-127.2c34.4-63.6,101-95.1,203.7-96c7.4-0.1,13.4-6.1,13.4-13.5v-78.2l180.7,149.1L272.558,375.613z"/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>',
        'text' => __('mention_post'),
        'action' => __('notification_view_question'),
        'data_load' => '?link1=timeline&id=null&postid={{ID}}'
    ),
    'mention_replay' => array(
        'icon' => '<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 487.958 487.958" style="enable-background:new 0 0 487.958 487.958;" xml:space="preserve"><g><path d="M483.058,215.613l-215.5-177.6c-4-3.3-9.6-4-14.3-1.8c-4.7,2.2-7.7,7-7.7,12.2v93.6c-104.6,3.8-176.5,40.7-213.9,109.8c-32.2,59.6-31.9,130.2-31.6,176.9c0,3.8,0,7.4,0,10.8c0,6.1,4.1,11.5,10.1,13.1c1.1,0.3,2.3,0.4,3.4,0.4c4.8,0,9.3-2.5,11.7-6.8c73-128.7,133.1-134.9,220.2-135.2v93.3c0,5.2,3,10,7.8,12.2s10.3,1.5,14.4-1.8l215.4-178.2c3.1-2.6,4.9-6.4,4.9-10.4S486.158,218.213,483.058,215.613z M272.558,375.613v-78.1c0-3.6-1.4-7-4-9.5c-2.5-2.5-6-4-9.5-4c-54.4,0-96.1,1.5-136.6,20.4c-35,16.3-65.3,44-95.2,87.5c1.2-39.7,6.4-87.1,28.1-127.2c34.4-63.6,101-95.1,203.7-96c7.4-0.1,13.4-6.1,13.4-13.5v-78.2l180.7,149.1L272.558,375.613z"/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>',
        'text' => __('mention_your_question_replay'),
        'action' => __('notification_view_replay'),
        'data_load' => '?link1=timeline&id=null&postid={{ID}}'
    ),
    'mention_answer' => array(
        'icon' => '<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 487.958 487.958" style="enable-background:new 0 0 487.958 487.958;" xml:space="preserve"><g><path d="M483.058,215.613l-215.5-177.6c-4-3.3-9.6-4-14.3-1.8c-4.7,2.2-7.7,7-7.7,12.2v93.6c-104.6,3.8-176.5,40.7-213.9,109.8c-32.2,59.6-31.9,130.2-31.6,176.9c0,3.8,0,7.4,0,10.8c0,6.1,4.1,11.5,10.1,13.1c1.1,0.3,2.3,0.4,3.4,0.4c4.8,0,9.3-2.5,11.7-6.8c73-128.7,133.1-134.9,220.2-135.2v93.3c0,5.2,3,10,7.8,12.2s10.3,1.5,14.4-1.8l215.4-178.2c3.1-2.6,4.9-6.4,4.9-10.4S486.158,218.213,483.058,215.613z M272.558,375.613v-78.1c0-3.6-1.4-7-4-9.5c-2.5-2.5-6-4-9.5-4c-54.4,0-96.1,1.5-136.6,20.4c-35,16.3-65.3,44-95.2,87.5c1.2-39.7,6.4-87.1,28.1-127.2c34.4-63.6,101-95.1,203.7-96c7.4-0.1,13.4-6.1,13.4-13.5v-78.2l180.7,149.1L272.558,375.613z"/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>',
        'text' => __('mention_your_question_answer'),
        'action' => __('notification_view_answer'),
        'data_load' => '?link1=timeline&id=null&postid={{ID}}'
    ),
    'replay_question' => array(
        'icon' => '<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 487.958 487.958" style="enable-background:new 0 0 487.958 487.958;" xml:space="preserve"><g><path d="M483.058,215.613l-215.5-177.6c-4-3.3-9.6-4-14.3-1.8c-4.7,2.2-7.7,7-7.7,12.2v93.6c-104.6,3.8-176.5,40.7-213.9,109.8c-32.2,59.6-31.9,130.2-31.6,176.9c0,3.8,0,7.4,0,10.8c0,6.1,4.1,11.5,10.1,13.1c1.1,0.3,2.3,0.4,3.4,0.4c4.8,0,9.3-2.5,11.7-6.8c73-128.7,133.1-134.9,220.2-135.2v93.3c0,5.2,3,10,7.8,12.2s10.3,1.5,14.4-1.8l215.4-178.2c3.1-2.6,4.9-6.4,4.9-10.4S486.158,218.213,483.058,215.613z M272.558,375.613v-78.1c0-3.6-1.4-7-4-9.5c-2.5-2.5-6-4-9.5-4c-54.4,0-96.1,1.5-136.6,20.4c-35,16.3-65.3,44-95.2,87.5c1.2-39.7,6.4-87.1,28.1-127.2c34.4-63.6,101-95.1,203.7-96c7.4-0.1,13.4-6.1,13.4-13.5v-78.2l180.7,149.1L272.558,375.613z"/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>',
        'text' => __('replay_your_question'),
        'action' => __('notification_view_replay'),
        'data_load' => '?link1=timeline&id=null&postid={{ID}}'
    ),
    'share' => array(
        'icon' => '<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 487.958 487.958" style="enable-background:new 0 0 487.958 487.958;" xml:space="preserve"><g><path d="M483.058,215.613l-215.5-177.6c-4-3.3-9.6-4-14.3-1.8c-4.7,2.2-7.7,7-7.7,12.2v93.6c-104.6,3.8-176.5,40.7-213.9,109.8c-32.2,59.6-31.9,130.2-31.6,176.9c0,3.8,0,7.4,0,10.8c0,6.1,4.1,11.5,10.1,13.1c1.1,0.3,2.3,0.4,3.4,0.4c4.8,0,9.3-2.5,11.7-6.8c73-128.7,133.1-134.9,220.2-135.2v93.3c0,5.2,3,10,7.8,12.2s10.3,1.5,14.4-1.8l215.4-178.2c3.1-2.6,4.9-6.4,4.9-10.4S486.158,218.213,483.058,215.613z M272.558,375.613v-78.1c0-3.6-1.4-7-4-9.5c-2.5-2.5-6-4-9.5-4c-54.4,0-96.1,1.5-136.6,20.4c-35,16.3-65.3,44-95.2,87.5c1.2-39.7,6.4-87.1,28.1-127.2c34.4-63.6,101-95.1,203.7-96c7.4-0.1,13.4-6.1,13.4-13.5v-78.2l180.7,149.1L272.558,375.613z"/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>',
        'text' => __('share_your_question'),
        'action' => __('notification_view_question'),
        'data_load' => '?link1=timeline&id=null&postid={{ID}}'
    )
);

$ask->countries_name = array(
    '0' => 'Select Country',
    '1' => 'United States',
    '2' => 'Canada',
    '3' => 'Afghanistan',
    '4' => 'Albania',
    '5' => 'Algeria',
    '6' => 'American Samoa',
    '7' => 'Andorra',
    '8' => 'Angola',
    '9' => 'Anguilla',
    '10' => 'Antarctica',
    '11' => 'Antigua and/or Barbuda',
    '12' => 'Argentina',
    '13' => 'Armenia',
    '14' => 'Aruba',
    '15' => 'Australia',
    '16' => 'Austria',
    '17' => 'Azerbaijan',
    '18' => 'Bahamas',
    '19' => 'Bahrain',
    '20' => 'Bangladesh',
    '21' => 'Barbados',
    '22' => 'Belarus',
    '23' => 'Belgium',
    '24' => 'Belize',
    '25' => 'Benin',
    '26' => 'Bermuda',
    '27' => 'Bhutan',
    '28' => 'Bolivia',
    '29' => 'Bosnia and Herzegovina',
    '30' => 'Botswana',
    '31' => 'Bouvet Island',
    '32' => 'Brazil',
    '34' => 'Brunei Darussalam',
    '35' => 'Bulgaria',
    '36' => 'Burkina Faso',
    '37' => 'Burundi',
    '38' => 'Cambodia',
    '39' => 'Cameroon',
    '40' => 'Cape Verde',
    '41' => 'Cayman Islands',
    '42' => 'Central African Republic',
    '43' => 'Chad',
    '44' => 'Chile',
    '45' => 'China',
    '46' => 'Christmas Island',
    '47' => 'Cocos (Keeling) Islands',
    '48' => 'Colombia',
    '49' => 'Comoros',
    '50' => 'Congo',
    '51' => 'Cook Islands',
    '52' => 'Costa Rica',
    '53' => 'Croatia (Hrvatska)',
    '54' => 'Cuba',
    '55' => 'Cyprus',
    '56' => 'Czech Republic',
    '57' => 'Denmark',
    '58' => 'Djibouti',
    '59' => 'Dominica',
    '60' => 'Dominican Republic',
    '61' => 'East Timor',
    '62' => 'Ecuador',
    '63' => 'Egypt',
    '64' => 'El Salvador',
    '65' => 'Equatorial Guinea',
    '66' => 'Eritrea',
    '67' => 'Estonia',
    '68' => 'Ethiopia',
    '69' => 'Falkland Islands (Malvinas)',
    '70' => 'Faroe Islands',
    '71' => 'Fiji',
    '72' => 'Finland',
    '73' => 'France',
    '74' => 'France, Metropolitan',
    '75' => 'French Guiana',
    '76' => 'French Polynesia',
    '77' => 'French Southern Territories',
    '78' => 'Gabon',
    '79' => 'Gambia',
    '80' => 'Georgia',
    '81' => 'Germany',
    '82' => 'Ghana',
    '83' => 'Gibraltar',
    '84' => 'Greece',
    '85' => 'Greenland',
    '86' => 'Grenada',
    '87' => 'Guadeloupe',
    '88' => 'Guam',
    '89' => 'Guatemala',
    '90' => 'Guinea',
    '91' => 'Guinea-Bissau',
    '92' => 'Guyana',
    '93' => 'Haiti',
    '94' => 'Heard and Mc Donald Islands',
    '95' => 'Honduras',
    '96' => 'Hong Kong',
    '97' => 'Hungary',
    '98' => 'Iceland',
    '99' => 'India',
    '100' => 'Indonesia',
    '101' => 'Iran (Islamic Republic of)',
    '102' => 'Iraq',
    '103' => 'Ireland',
    '104' => 'Israel',
    '105' => 'Italy',
    '106' => 'Ivory Coast',
    '107' => 'Jamaica',
    '108' => 'Japan',
    '109' => 'Jordan',
    '110' => 'Kazakhstan',
    '111' => 'Kenya',
    '112' => 'Kiribati',
    '113' => 'Korea, Democratic People\'s Republic of',
    '114' => 'Korea, Republic of',
    '115' => 'Kosovo',
    '116' => 'Kuwait',
    '117' => 'Kyrgyzstan',
    '118' => 'Lao People\'s Democratic Republic',
    '119' => 'Latvia',
    '120' => 'Lebanon',
    '121' => 'Lesotho',
    '122' => 'Liberia',
    '123' => 'Libyan Arab Jamahiriya',
    '124' => 'Liechtenstein',
    '125' => 'Lithuania',
    '126' => 'Luxembourg',
    '127' => 'Macau',
    '128' => 'Macedonia',
    '129' => 'Madagascar',
    '130' => 'Malawi',
    '131' => 'Malaysia',
    '132' => 'Maldives',
    '133' => 'Mali',
    '134' => 'Malta',
    '135' => 'Marshall Islands',
    '136' => 'Martinique',
    '137' => 'Mauritania',
    '138' => 'Mauritius',
    '139' => 'Mayotte',
    '140' => 'Mexico',
    '141' => 'Micronesia, Federated States of',
    '142' => 'Moldova, Republic of',
    '143' => 'Monaco',
    '144' => 'Mongolia',
    '145' => 'Montenegro',
    '146' => 'Montserrat',
    '147' => 'Morocco',
    '148' => 'Mozambique',
    '149' => 'Myanmar',
    '150' => 'Namibia',
    '151' => 'Nauru',
    '152' => 'Nepal',
    '153' => 'Netherlands',
    '154' => 'Netherlands Antilles',
    '155' => 'New Caledonia',
    '156' => 'New Zealand',
    '157' => 'Nicaragua',
    '158' => 'Niger',
    '159' => 'Nigeria',
    '160' => 'Niue',
    '161' => 'Norfork Island',
    '162' => 'Northern Mariana Islands',
    '163' => 'Norway',
    '164' => 'Oman',
    '165' => 'Pakistan',
    '166' => 'Palau',
    '167' => 'Panama',
    '168' => 'Papua New Guinea',
    '169' => 'Paraguay',
    '170' => 'Peru',
    '171' => 'Philippines',
    '172' => 'Pitcairn',
    '173' => 'Poland',
    '174' => 'Portugal',
    '175' => 'Puerto Rico',
    '176' => 'Qatar',
    '177' => 'Reunion',
    '178' => 'Romania',
    '179' => 'Russian Federation',
    '180' => 'Rwanda',
    '181' => 'Saint Kitts and Nevis',
    '182' => 'Saint Lucia',
    '183' => 'Saint Vincent and the Grenadines',
    '184' => 'Samoa',
    '185' => 'San Marino',
    '186' => 'Sao Tome and Principe',
    '187' => 'Saudi Arabia',
    '188' => 'Senegal',
    '189' => 'Serbia',
    '190' => 'Seychelles',
    '191' => 'Sierra Leone',
    '192' => 'Singapore',
    '193' => 'Slovakia',
    '194' => 'Slovenia',
    '195' => 'Solomon Islands',
    '196' => 'Somalia',
    '197' => 'South Africa',
    '198' => 'South Georgia South Sandwich Islands',
    '199' => 'Spain',
    '200' => 'Sri Lanka',
    '201' => 'St. Helena',
    '202' => 'St. Pierre and Miquelon',
    '203' => 'Sudan',
    '204' => 'Suriname',
    '205' => 'Svalbarn and Jan Mayen Islands',
    '206' => 'Swaziland',
    '207' => 'Sweden',
    '208' => 'Switzerland',
    '209' => 'Syrian Arab Republic',
    '210' => 'Taiwan',
    '211' => 'Tajikistan',
    '212' => 'Tanzania, United Republic of',
    '213' => 'Thailand',
    '214' => 'Togo',
    '215' => 'Tokelau',
    '216' => 'Tonga',
    '217' => 'Trinidad and Tobago',
    '218' => 'Tunisia',
    '219' => 'Turkey',
    '220' => 'Turkmenistan',
    '221' => 'Turks and Caicos Islands',
    '222' => 'Tuvalu',
    '223' => 'Uganda',
    '224' => 'Ukraine',
    '225' => 'United Arab Emirates',
    '226' => 'United Kingdom',
    '227' => 'United States minor outlying islands',
    '228' => 'Uruguay',
    '229' => 'Uzbekistan',
    '230' => 'Vanuatu',
    '231' => 'Vatican City State',
    '232' => 'Venezuela',
    '233' => 'Vietnam',
    '238' => 'Yemen',
    '239' => 'Yugoslavia',
    '240' => 'Zaire',
    '241' => 'Zambia',
    '242' => 'Zimbabwe'
);

$ad_media_types = array(
    'video/mp4',
    'video/mov',
    'video/mpeg',
    'video/flv',
    'video/avi',
    'video/webm',
    'video/quicktime',
    'image/png',
    'image/jpeg',
    'image/gif'
);