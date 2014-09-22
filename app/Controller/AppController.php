<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
    
    
     public $components = array(
        'Session',
        'Auth' => array(
            'loginRedirect' => array(
                'controller' => 'users',
                'action' => 'index'
            ),
            'logoutRedirect' => array(
                'controller' => 'users',
                'action' => 'login',
                'home'
            ),
            'authenticate' => array(
                'Form' => array(
                    'passwordHasher' => 'Blowfish'
                )
            )
        )
    );
     
     
    public function beforeFilter() {
        $this->Auth->allow('add', 'login');
        $user_data = $this->Auth->user();
//        
//        if(!empty($user_data) && $user_data['role'] == angels::APP_USER_ROLE_ADMIN)
//            {
//               $this->redirect(array('controller'=>'admins','action'=>'index'));
//            }
    }
    
    public function upload_images($filedata=null,$modelname=null,$filename=null,$type=null,$filepath=null) {
        $status = array('status'=> false);
        if(! empty($filedata) || ! empty($modelname) || !empty($filename)) {
        $path = WWW_ROOT.'img'.DS.$filepath.DS  ;
       
        $random_string = angels::random_string(5,'numeric');
        if(move_uploaded_file($filedata[$modelname][$filename]['tmp_name'], $path.$filedata[$modelname][$filename]['name'])) {
            $newFilename = $random_string.'_'.$filedata[$modelname][$filename]['name'];
            rename($path.$filedata[$modelname][$filename]['name'], $path.$newFilename);
            $status = array('status'=>true,'filename'=>$newFilename);
        } else {
            $status = array('status'=>false);
        }
        }
        return $status;
    }
    
    function bb2html($text)
    {
    $bbcode = array("<", ">",
                "[list]", "[*]", "[/list]", 
                "[img]", "[/img]", 
                "[b]", "[/b]", 
                "[u]", "[/u]", 
                "[i]", "[/i]",
                '[color="', "[/color]",
                "[size=\"", "[/size]",
                '[url="', "[/url]",
                "[mail=\"", "[/mail]",
                "[code]", "[/code]",
                "[quote]", "[/quote]",
                '"]');
        $htmlcode = array("&lt;", "&gt;",
                      "<ul>", "<li>", "</ul>", 
                      "<img src=\"", "\">", 
                      "<b>", "</b>", 
                      "<u>", "</u>", 
                      "<i>", "</i>",
                      "<span style=\"color:", "</span>",
                      "<span style=\"font-size:", "</span>",
                      '<a href="', "</a>",
                      "<a href=\"mailto:", "</a>",
                      "<code>", "</code>",
                      "<table width=100% bgcolor=lightgray><tr><td bgcolor=white>", "</td></tr></table>",
                      '">');
        $newtext = str_replace($bbcode, $htmlcode, $text);
        $newtext = nl2br($newtext);//second pass
        return $newtext;
      }
      
   function bbcodeHtml($str) {
  // delete 'http://' because will be added when convert the code
  $str = str_replace('[url=http://', '[url=', $str);
  $str = str_replace('[url]http://', '[url]', $str);

  // Array with RegExp to recognize the code that must be converted
  $bbcode_smiles = array(
    // RegExp for [b]...[/b], [i]...[/i], [u]...[/u], [block]...[/block], [color=code]...[/color], [br]
    '/\[b\](.*?)\[\/b\]/is',
    '/\[i\](.*?)\[\/i\]/is',
    '/\[u\](.*?)\[\/u\]/is',
    '/\[block\](.*?)\[\/block\]/is',
    '/\[color=(.*?)\](.*?)\[\/color\]/is',
    '/\[br\]/is',

    // RegExp for [url=link_address]..link_name..[/url], or [url]..link_address..[/url]
    '/\[url\=(.*?)\](.*?)\[\/url\]/is',
    '/\[url\](.*?)\[\/url\]/is',

    // RegExp for [img=image_address]..image_title[/img], or [img]..image_address..[/img]
    '/\[img\=(.*?)\](.*?)\[\/img\]/is',
    '/\[img\](.*?)\[\/img\]/is',

    // RegExp for sets of characters for smiles: :), :(, :P, :P, ...
    '/:\)/i', '/:\(/i', '/:P/i', '/:S/i', '/:O/i', '/=D\>/i', '/\>:D\</i', '/:D/i', '/:-\*/i'
  );

  // Array with HTML that will replace the bbcode tags, defined inthe same order
  $html_tags = array(
    // <b>...</b>, <i>...</i>, <u>...</u>, <blockquote>...</blockquote>, <span>...</span>, <br/>
    '<b>$1</b>',
    '<i>$1</i>',
    '<u>$1</u>',
    '<blockquote>$1</blockquote>',
    '<span style="color:$1;">$2</span>',
    '<br/>',

    // a href...>...</a>, and <img />
    '<a target="_blank" href="http://$1">$2</a>',
    '<a target="_blank" href="http://$1">$1</a>',
    '<img src="$1" alt="$2" />',
    '<img src="$1" alt="$1" />',

    // The HTML to replace smiles. Here you must add the address of the images with smiles
    '<img src="icos/1.gif" alt=":)" border="0" />',
    '<img src="icos/2.gif" alt=":(" border="0" />',
    '<img src="icos/3.gif" alt=":P" border="0" />',
    '<img src="icos/4.gif" alt=":S" border="0" />',
    '<img src="icos/5.gif" alt=":O" border="0" />',
    '<img src="icos/6.gif" alt="=D&gt;" border="0" />',
    '<img src="icos/7.gif" alt="&gt;: D&lt;" border="0" />',
    '<img src="icos/8.gif" alt=": D" border="0" />',
    '<img src="icos/9.gif" alt=":-*" border="0" />'
  );

  // replace the bbcode
  $str = preg_replace($bbcode_smiles, $html_tags, $str);

  return $str;
}
}
