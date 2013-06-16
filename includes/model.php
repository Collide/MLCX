<?php

	class model
	{
	
		public $table = false;
		public $data = array();
		public $fields = array();

				
		public function view( $id )
		{
			
			$q = mysql_query("SELECT * FROM ". $this->table ." WHERE id = '". $id ."' ");
			$this->data = mysql_fetch_assoc($q);
			
			$this->data['url'] = $this->table . '.php?id='. $this->data['id'];
			
			$this->data['description'] = substr($this->data['content'],0,50).'..';
									
			return $this->data;
			
		}
		
		
		public function query( $limit=10, $sql=false )
		{
			
			$posts = array();
			
			$q = mysql_query("SELECT id FROM ". $this->table ." ". $sql ." LIMIT ". $limit  );
			while( $r = mysql_fetch_array($q, MYSQL_ASSOC) )
			{
				
			
				$post = new $this->table();
				$posts[] = $post->view( $r['id'] );
			}

									
			return $posts;
			
		}
		
		public function set( $key, $value )
		{
			
			$this->fields[ $key ] =  $value;
			
		}
		
		
		public function get( $key )
		{
			return $this->fields[ $key ];	
		}
		
		public function get_fields()
		{
			
			if( !$this->fields ){ return false; }
			
			$sql = array();
			
			foreach( $this->fields as $key=>$value )
			{
				if($key != 'id')
				{
					$sql[] = $key . " = '". mysql_real_escape_string($value) ."'" ;
				}
			}
			
			return implode(',', $sql);
			
		}
		
		public function save()
		{
			
			$sql = "INSERT IGNORE INTO ". $this->table ." SET ". $this->get_fields() ." ";
			mysql_query($sql);
			
			return mysql_insert_id();
			
		}
		
		public function update()
		{
			
			$sql = "UPDATE ". $this->table ." SET ". $this->get_fields() ." WHERE id = '". $this->field['id'] ."'  ";
			mysql_query($sql);
						
		}
		
		public function delete()
		{
			
			$sql = "DELETE ". $this->table ." WHERE id = '". $this->field['id'] ."'  ";
			mysql_query($sql);
			
		}
		
		
	}

?>