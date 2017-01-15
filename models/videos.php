<?php
class videos extends model {

	public function getList($qt) {
		$array = array();

		$sql = "SELECT * FROM videos LIMIT ".$qt;
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}

}