<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// ------------------------------------------------------------------------

/**
 * 扩展CI的CI_input类
 *
 * @package		CodeIgniter
 * @subpackage	Libraries
 * @category	MY_Input
 * @author		South
 */
class MY_Input extends CI_Input {
	private $uri_segment = 3;
	
	public function set_segment($uri_segment=3){
		$this->uri_segment = $uri_segment;
	}
	
	public function is_post(){
		return ($this->server('REQUEST_METHOD') === 'POST'); 
	}
	
	function post($index = NULL, $xss_clean = FALSE, $strip=TRUE)
	{
		return $this->filter( parent::post($index, $xss_clean) , $strip, FALSE);
	}
	
	public function get($index = NULL, $xss_clean = FALSE, $strip=TRUE)
	{
		/*
		函数第一个参数可以设置偏移量，默认设置为3，因为一般情况下你的URI包含 控制器名 / 函数名 作为第一个和第二个分段。
		http://codeigniter.org.cn/user_guide/libraries/uri.html
		*/
		static $CI = null;
		if ($CI === null)
		{
			$CI = & get_instance();
		}
		$argv = $CI->uri->uri_to_assoc($this->uri_segment);
		if ($argv)
		{
			$_GET = array_merge($_GET, $argv);
		}
		return $this->filter( parent::get($index, $xss_clean), $strip ) ;
	}
	
	public function filter($str, $strip=TRUE, $is_urlencode=TRUE)
	{
		if (is_string($str))
		{
			if ($strip)
			{
				$str = strip_tags( $str );
			}else
			{
				$this->RemoveUrl( $str );
			}
			if ( $is_urlencode === TRUE ) $str = urldecode( $str );
		}elseif (is_array($str))
		{
			foreach($str as $key => $val) 
			{
                $str[$key] = $this->filter($val);
            }
            
		}
		return $str;
	}
	
	public function RemoveUrl(&$c)
	{
		preg_match_all("~<a[^>]*>(.*?)</a>~is", $c,$m);
		if (!$m[1])return;
		$replace_old = array();
		$replace_new = array();
		$count = count($m[0]);
		for($i=0;$i<$count;$i++)
		{
		
			if (strpos($m[0][$i], 'http://')===false || strpos($m[0][$i], 'trjcn.com')===false)
			{
				$replace_old[] = $m[0][$i];
				$replace_new[] = $m[1][$i];
			}
		}
		if ($replace_old)
		{
			$c = str_replace($replace_old, $replace_new, $c);	
		}
		
		//替换只有半个的
		preg_match_all("~<a[^>]*>~is", $c,$m);
		if (!$m[0])return;
		$count = count($m[0]);
		for($i=0;$i<$count;$i++)
		{
			if (strpos($m[0][$i], 'http://')===false || strpos($m[0][$i], 'trjcn.com')===false)
			{
				$replace_old[] = $m[0][$i];
				$replace_new[] = '';
			}
		}
		if ($replace_old)
		{
			$c = str_replace($replace_old, $replace_new, $c);	
		}
		
	}
	
	public function RemoveXSS($val)
    {
	   // remove all non-printable characters. CR(0a) and LF(0b) and TAB(9) are allowed   
	   // this prevents some character re-spacing such as <java\0script>   
	   // note that you have to handle splits with \n, \r, and \t later since they *are* allowed in some inputs   
	   $val = preg_replace('/([\x00-\x08][\x0b-\x0c][\x0e-\x20])/', '', $val);   
	      
	   // straight replacements, the user should never need these since they're normal characters   
	   // this prevents like <IMG SRC=&#X40&#X61&#X76&#X61&#X73&#X63&#X72&#X69&#X70&#X74&#X3A&#X61&#X6C&#X65&#X72&#X74&#X28&#X27&#X58&#X53&#X53&#X27&#X29>   
	   $search = 'abcdefghijklmnopqrstuvwxyz';   
	   $search .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';   
	   $search .= '1234567890!@#$%^&*()';   
	   $search .= '~`";:?+/={}[]-_|\'\\';   
	   for ($i = 0; $i < strlen($search); $i++) {   
	      // ;? matches the ;, which is optional   
	      // 0{0,7} matches any padded zeros, which are optional and go up to 8 chars   
	      
	      // &#x0040 @ search for the hex values   
	      $val = preg_replace('/(&#[x|X]0{0,8}'.dechex(ord($search[$i])).';?)/i', $search[$i], $val); // with a ;   
	      // &#00064 @ 0{0,7} matches '0' zero to seven times   
	      $val = preg_replace('/(&#0{0,8}'.ord($search[$i]).';?)/', $search[$i], $val); // with a ;   
	   }   
	      
	   // now the only remaining whitespace attacks are \t, \n, and \r   
	   $ra1 = Array('javascript', 'vbscript', 'expression', 'applet', 'meta', 'xml', 'blink', 'link', 'script', 'embed', 'object', 'iframe', 'frame', 'frameset', 'ilayer', 'layer', 'bgsound', 'title', 'base');   
	   $ra2 = Array('onabort', 'onactivate', 'onafterprint', 'onafterupdate', 'onbeforeactivate', 'onbeforecopy', 'onbeforecut', 'onbeforedeactivate', 'onbeforeeditfocus', 'onbeforepaste', 'onbeforeprint', 'onbeforeunload', 'onbeforeupdate', 'onblur', 'onbounce', 'oncellchange', 'onchange', 'onclick', 'oncontextmenu', 'oncontrolselect', 'oncopy', 'oncut', 'ondataavailable', 'ondatasetchanged', 'ondatasetcomplete', 'ondblclick', 'ondeactivate', 'ondrag', 'ondragend', 'ondragenter', 'ondragleave', 'ondragover', 'ondragstart', 'ondrop', 'onerror', 'onerrorupdate', 'onfilterchange', 'onfinish', 'onfocus', 'onfocusin', 'onfocusout', 'onhelp', 'onkeydown', 'onkeypress', 'onkeyup', 'onlayoutcomplete', 'onload', 'onlosecapture', 'onmousedown', 'onmouseenter', 'onmouseleave', 'onmousemove', 'onmouseout', 'onmouseover', 'onmouseup', 'onmousewheel', 'onmove', 'onmoveend', 'onmovestart', 'onpaste', 'onpropertychange', 'onreadystatechange', 'onreset', 'onresize', 'onresizeend', 'onresizestart', 'onrowenter', 'onrowexit', 'onrowsdelete', 'onrowsinserted', 'onscroll', 'onselect', 'onselectionchange', 'onselectstart', 'onstart', 'onstop', 'onsubmit', 'onunload');   
	   $ra = array_merge($ra1, $ra2);   
	      
	   $found = true; // keep replacing as long as the previous round replaced something   
	   while ($found == true) {   
	      $val_before = $val;   
	      for ($i = 0; $i < sizeof($ra); $i++) {   
	         $pattern = '/';   
	         for ($j = 0; $j < strlen($ra[$i]); $j++) {   
	            if ($j > 0) {   
	               $pattern .= '(';   
	               $pattern .= '(&#[x|X]0{0,8}([9][a][b]);?)?';   
	               $pattern .= '|(&#0{0,8}([9][10][13]);?)?';   
	               $pattern .= ')?';   
	            }   
	            $pattern .= $ra[$i][$j];   
	         }   
	         $pattern .= '/i';   
	         $replacement = substr($ra[$i], 0, 2).'_'.substr($ra[$i], 2); // add in <> to nerf the tag   
	         $val = preg_replace($pattern, $replacement, $val); // filter out the hex tags   
	      }  
	      if ($val_before == $val)
	      {   
            // no replacements were made, so exit the loop   
            $found = false;   
          }    
	   }
	   return $val;
	}  
	
	/**
	 * 自定义url
	 * @param $query 如：a-b-c-d1,d2,d3-e
	 * @param $uri_segment
	 * @return array
	 */
	function get_param($query, $uri_segment=3)
	{
		$ver = array();
		$CI =& get_instance();
		$param = $CI->uri->uri_to_assoc($uri_segment);
		if ($param)
		{
			$param = array_keys($param);
			$param = explode('-', $param[0]);
		}
		$query = explode('-', $query);
		foreach($query as $k=>$field)
		{
			$val = isset($param[$k]) ? $param[$k] : '';
			$ver['map'][$field] = $val;
			if ($field == 'page')
			{
				$ver['map'][$field] = ':page';					
			}
			 
			if(strpos($field, ',') !==false)
			{
				$field 	= explode(',', $field);
				$val 	= explode(',', $val);
				foreach($field as $_k=>$_field)
				{
					$ver[$_field] = $this->filter(isset($val[$_k]) ? $val[$_k] : '');
				}
			}
			else
			{
				$ver[$field] = $this->filter($val);
			}
		}
		
		$ver['param'] = '/'.join('-', $ver['map']);
		unset($ver['map']);
		return $ver;
	}
	
	public function ip_address()
	{
		$ip = isset($_SERVER['HTTP_X_REAL_IP']) ? $_SERVER['HTTP_X_REAL_IP'] : 0;
		if (!$ip)
		{
			$ip = parent::ip_address();
		}
		return $ip;
	}
	
}
// END MY_input Class

/* End of file MY_Input.php */
/* Location: ./system/libraries/MY_Input.php */