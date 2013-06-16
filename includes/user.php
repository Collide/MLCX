<?php


	class user extends model
	{
		public $table = 'users';
		
		public function exists( $user )
		{
			$q = mysql_query("SELECT id FROM ". $this->table . " WHERE username = '". $user ."' ");
			$r = mysql_fetch_assoc($q);
			
			return $r['id'];
		}
		
		public function view( $id )
		{

			$q = mysql_query("SELECT * FROM ". $this->table ." WHERE id = '". $id ."' ");
			$this->data = mysql_fetch_assoc($q);
			
			$this->data['url'] = $this->table . '.php?id='. $this->data['id'];
			
			$this->data['description'] = substr($this->data['content'],0,50).'..';
									
			return $this->data;
			
		}
		
	}
	
?>