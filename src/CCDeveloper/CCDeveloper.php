<?php
/**
 * Controller for development and testing purpose, helpful methods for the developer.
 * 
 * @package MuffinCore
 */
class CCDeveloper implements IController {

  /**
    * Implementing interface IController. All controllers must have an index action.
   */
  public function Index() {  
    $this->Menu();
	$mu = CMuffin::Instance();
	$mu->data['favicon'] = $mu->request->base_url . '/img/muffin.ico'; 
	$mu->data['top_image']= $mu->request->base_url .'/img/muffin.png';
  }


  /**
    * Create a list of links in the supported ways.
   */
  public function Links() { 
	
	$mu = (isset($this->mu)) ? $this->mu : CMuffin::Instance();
	
    $this->Menu();    
      
    $url = 'developer/links';
    $current      = $mu->request->CreateUrl($url);

    $mu->request->cleanUrl = false;
    $mu->request->querystringUrl = false;    
    $default      = $mu->request->CreateUrl($url);
    
    $mu->request->cleanUrl = true;
    $clean        = $mu->request->CreateUrl($url);    
    
    $mu->request->cleanUrl = false;
    $mu->request->querystringUrl = true;    
    $querystring  = $mu->request->CreateUrl($url);
    
    $mu->data['main'] .= <<<EOD
<h2>CRequest::CreateUrl()</h2>
<p>Here is a list of urls created using above method with various settings. All links should lead to
this same page.</p>
<ul>
<li><a href='$current'>This is the current setting</a>
<li><a href='$default'>This would be the default url</a>
<li><a href='$clean'>This should be a clean url</a>
<li><a href='$querystring'>This should be a querystring like url</a>
</ul>
<p>Enables various and flexible url-strategy.</p>
EOD;
  }


  /**
    * Create a method that shows the menu, same for all methods
   */
  private function Menu() {  
    $mu = CMuffin::Instance();
    $menu = array('developer', 'developer/index', 'developer/links');
    
    $html = null;
    foreach($menu as $val) {
      $html .= "<li><a href='" . $mu->request->CreateUrl($val) . "'>$val</a>";  
    }
    
    $mu->data['title'] = "The Developer Controller";
    $mu->data['main'] = <<<EOD
<h1>The Developer Controller</h1>
<p>This is what you can do for now:</p>
<ul>
$html
</ul>
EOD;
  }
  
}  