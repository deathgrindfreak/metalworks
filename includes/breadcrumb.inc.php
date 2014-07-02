<?php

// breadcrumb - creates a breadcrumb from $url
function breadcrumb($dbc, $url) {

    $url_array = parse_url($url);
    $protocol = strpos(strtolower($_SERVER['SERVER_PROTOCOL']), 'https') === FALSE ? 'http' : 'https';
    $host = $_SERVER['HTTP_HOST'];

    
    // Check whether the path is forum.php or showthread.php
    if (ltrim($url_array['path'], '/\\') == 'showthread.php') {

        // Get the forum id
        $thread_id = $_GET['t'];

        // Get the forum title
        $query = "SELECT threads.forum_id, forums.forum_subject 
                  FROM threads
                  INNER JOIN forums USING (forum_id)
                  WHERE thread_id = " . $thread_id; 

        $s = $dbc->query($query);
        $r = $s->fetch_array(MYSQLI_ASSOC);
        
        // Title of the forum
        $title = $r['forum_subject'];
        $forum_id = $r['forum_id'];

        // Close the connection
        $s->close();
        
        //$host = $explode('/', $host)[sizeof($explode

        $forum_url = $protocol . '://204.158.158.53/webdev-project/forum.php?f=' . $forum_id . '&page=1';

        $crumb = '> ' . '<a href="' . $forum_url . '">' . strtoupper($title) . '</a>';

        echo $crumb;
    }
}

// get_prev - parse the previous url for passing to login/logout redirect
function get_prev($page_url, $url) {
    
	$exp = explode('/', $page_url);

	return $exp[sizeof($exp) - 1];
}

// get_prev - parse the previous url for passing to login/logout redirect
function push_prev($page_url, $url) {
    
	$exp = explode('/', $url);

	return $exp[sizeof($exp) - 1];
}
