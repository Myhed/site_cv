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


		public function ifUserExist($id_utilisateurs){


			$query = $this->dbh->query("SELECT $id_utilisateurs FROM $this->table WHERE $this->primaryKey = $id_utilisateurs ");

			$ifUserExist = $query->rowCount();

			return $ifUserExist;

		}
}