<?php  if (! defined('BASEPATH')) exit('No direct script access allowed');


/**
 * Class stamp_model
 */
class dinas_model extends CI_Model
{

    /**
     * Constructor
     */
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

     
    function get_all_akun_non_admin()
    {
       $query = $this->db->query("select * from users us join users_groups ug on(us.id = ug.user_id) where ug.group_id != 1");

        return $query->result();
    }
    function get_all_wilayah($nama_kabupaten)
    {
       $query = $this->db->query("select prov.IDProvinsi,prov.Nama as nama_provinsi,         
                                        kab.IDKabupaten,kab.Nama as nama_kabupaten, 
                                        kec.IDKecamatan, kec.Nama as nama_kecamatan,
                                        kel.idKelurahan, kel.Nama as nama_desa   
                                from provinsi prov
                                join kabupaten kab on(prov.idProvinsi = kab.idProvinsi)
                                join kecamatan kec on(kab.IDKabupaten = kec.IDKabupaten)
                                join kelurahan kel on(kel.IDKecamatan = kec.IDKecamatan)
                                where kab.Nama like  '%".$nama_kabupaten."%'");

        return $query->result();
    }
    function get_kecamatan_by_name($nama_kabupaten)
    {
       $query = $this->db->query("select kab.IDKabupaten,kab.Nama as nama_kabupaten, 
                                        kec.IDKecamatan, kec.Nama as nama_kecamatan 
                                from kabupaten kab  
                                join kecamatan kec on(kab.IDKabupaten = kec.IDKabupaten)
                                where kab.Nama like  '%".$nama_kabupaten."%'");
        return $query->result();
    }
}