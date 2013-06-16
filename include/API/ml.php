<?php

	require_once 'ml/meli.php';
	require_once 'htmlsql/snoopy.class.php';
	require_once 'htmlsql/htmlsql.class.php';
    
    /* API mejorada para suplir funcionalidad que carece la libreria actual */
    
	class ml
	{
		
		public $api = false;
		
		// main connect
		public function connect( $appID, $secret )
		{
			
			$this->api = new Meli(array(
						        'appId'         => $appID,
						        'secret'        => $secret,
						    ));
		    			
		}
		
		// get item info
		public function item( $id )
		{
			
			$r = $this->api->get( '/items/'. $id );
			$r = $r['json'];
			
			return $r;
		}
		
		// get item comments
		public function item_comments( $id )
		{
			if(!$id){ return false; }
			
			$r = file_get_contents('https://api.mercadolibre.com/questions/search?item='. $id);
			$r = json_decode($r, true);
			
			return $r['questions'];
			
		}

		
		// get user items
		public function user_items( $id, $search=false )
		{
		
			if($search)
			{
				$sql[] = "q=".$search;
			}
			
			if( is_numeric($id) )
			{
				$sql[] = "seller_id=".$id;
			}
			else
			{
				$sql[] = "nickname=".$id;
			}
			
			$html = file_get_contents('https://api.mercadolibre.com/sites/MLA/search?' . implode('&', $sql) );
			$r = json_decode($html, true);
			
			return $r['results'];
			
		}
		
		public function user_reputation( $id )
		{
			
			$user = $this->user( $id );
			
			$html = file_get_contents("http://perfil.mercadolibre.com.ar/" . $user['username']);
			$html = explode('<div class="list_line"></div>', $html);
			$html = explode('<div id="pag_btn">', $html[1]);
			$html = $html[0];
			
			$html = str_replace('<div id="replica_icon">','',$html);
			$html = str_replace('.gif"></div>' ,'.gif">', $html);
						
			$wsql = new htmlsql();
						
			// connect to a string
		    if (!$wsql->connect('string', $html))
		    {
		        print 'Error while connecting: ' . $wsql->error;
		        exit;
		    }
		    
		    $wsql->query('SELECT * FROM div WHERE $id == "content_box" ');
		    
		    $r = array();
		    
		    foreach($wsql->fetch_array() as $_row)
		    {
		    			    				    	
		    	$item = array();
		     
		    	$rsql = new htmlsql();
		    	$rsql->connect('string', $_row['text']);
		    	$rsql->query('SELECT * FROM img ');
		    	
		    	foreach($rsql->fetch_array() as $row)
			    {
			    
			    	 $item['image'] = $row['src'];	         
			    }
			    
			    $x = explode('>"', $_row['text']);
			    $item['text'] = str_replace('"','',$x[1]);	         
			    
			    
		        $r[] = 	$item;
		        
		        	         
		    }
		    
		    return $r;
		    
		}
				
		// get eshop user picture
		public function user_picture( $id, $user )
		{
			$html = file_get_contents( 'http://eshops.mercadolibre.com.ar/' . urlencode($user) );
			
			if( strpos($html, 'eShop inexistente') !== false )
			{
				return false;
			}
			
			return 'http://www.mercadolibre.com.ar/org-img/eshops/ES2/logos/final/'. $id .'.jpg';				
						
		}
		
		// get user info
		public function user( $id )
		{
			$id = $this->user_id( $id );
			
			$r = $this->api->get( '/users/'. $id );
			$r = $r['json'];
			
			$level = explode('_', $r['seller_reputation']['level_id']);
			
			$r['username'] = $r['nickname'];
			$r['seller_reputation']['level'] = $level[0];
			$r['seller_reputation']['color'] = $level[1];
			
			
			$r['seller_reputation']['image'] = 'http://www.mercadolibre.com/org-img/rp2/termometro/termometro_'. $r['seller_reputation']['level'] .'_1.jpg';
			
			$r['picture'] = $this->user_picture($id, $r['username']);
			
			return $r;
		}
		
		// get user ID
		public function user_id( $user )
		{
			
			if(!$user){ return false; }
				
			if( is_numeric($user) )
			{
				return $user;
			}

			$html = file_get_contents( 'http://perfil.mercadolibre.com.ar/' . urlencode($user) );
						
			$code = '<input type="hidden" name="id" value="';
			$html = explode($code, $html);
			$html = explode('"', $html[1]);
			
			$user_id = $html[0];
			
			if( is_numeric($user_id) )
			{
				return $user_id;
			}
			
			return false;
			
		}
		
		
		// about me
		public function me()
		{
			
			$user_id = $this->api->initConnect();
			
			if($user_id)
			{
				$user = $this->api->getWithAccessToken('/users/me');
				return $user;
			}
			
			return false;
			
		}
		
		// get lucky! Daft Punk
		public function get_lucky()
		{
			$login_url = $this->api->getLoginUrl();
			return $login_url;	
		}
		
	}

?>