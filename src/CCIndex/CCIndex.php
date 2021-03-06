<?php

/**
 * Standard controller layout.
 * 
 * @package MuffinCore
 *
 * @author Jonathan
 */
class CCIndex implements IController {

    /**
     * Implementing interface IController. All controllers must have an index action.
     */
    public function Index() {
        global $mu;
        $mu->data['title'] = "The Index Controller";
		$mu->data['main'] = "<h1>The Index Controller</h1>";
		$mu->data['favicon'] = $mu->request->base_url . '/img/muffin.ico'; 
		$mu->data['top_image']= $mu->request->base_url .'/img/muffin.png';
    }

}

?>
