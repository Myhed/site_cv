<?php 

namespace Model;

use \W\Model\Model;

class HomeAdminModel extends Model{

		public $data = [];

		public function getColumnName(){

				$column = $this->dbh->query("SELECT * FROM $this->table");

				for($i = 0; $i < $column->columnCount(); $i++){

					$columns = $column->getColumnMeta($i);

					array_push($this->data,$columns);
		}
	}
}