<?php
defined ('BASEPATH') or exit ('No direct script acces allowed');
class Indek_model extends CI_Model
{
	public function get_data()
	{
		$cars = array(
			array(191240000934,'deni detiawan','Laki-laki','2019','jepara')
			,array(171240000988,'ahmad syarif','Laki-laki','2017','kudus')
			,array(171240000989,'ummiqulsum','perempuan','2017','jepara')
			,array(181240000987,'abduh somat','Laki-laki','2018','pati')
			,array(181240000989,'soleh mukarom','Laki-laki','2018','kudus')
			,array(181240000976,'siti qomariah','perempuan','2018','jepara')
		);
		return $cars;
	}
}