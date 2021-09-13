<?php defined('BASEPATH') or exit('No direct script access allowed');

class dtbs extends CI_Model
{
    function kontrol($email,$password){
        $sonuc = $this->db->select('*')
        ->from('kullanicilar')
        ->group_start()
        ->or_where('email' ,$email)
        ->or_where('username',$email)
        ->or_where('phone',$email)
        ->group_end()
        ->where('password' ,$password)
        ->where('durum' ,1)
        ->get()->row(); 
        return $sonuc;      

    }

    function listele($from)
    {
        $sonuc = $this->db->select('*')->from($from)
        ->order_by('id', 'desc')->get()->result_array();
        return $sonuc;
    }
    function haftaListele($from)
    {
        $sonuc = $this->db->select('*')->from($from)
        ->order_by('id', 'asc')->get()->result_array();
        return $sonuc;
    }

    function cek($id, $from)
    {
        $sonuc = $this->db->select('*')->from($from)
        ->where('id', $id)->get()->row_array();
        return $sonuc;
    }
    function mesajCek($id, $from)
    {
      $data = array($id, $this->session->userdata('userdata')->id);
      $sonuc = $this->db->select('*')->from($from)->where_in('alici_id', $data)
      ->where_in('gonderen_id', $data)->get()->row_array();
      return $sonuc;
  }

  function MesajListele($id, $from)
  {
    $data = array($id, $this->session->userdata('userdata')->id);
    $sonuc = $this->db->select('*')->from($from)->where_in('alici_id', $data)
    ->where_in('gonderen_id', $data)
    ->order_by('id', 'asc')->get()->result_array();
    return $sonuc;

}
function guncelle($data = array(), $id, $where, $from)
{
    $sonuc = $this->db->where($where, $id)->update($from, $data);
    return $sonuc;
}
function ekle($from, $data = array())
{
    $sonuc = $this->db->insert($from, $data);
    return  $sonuc;
}
function sil($id, $where, $from)
{
    $sonuc = $this->db->delete($from, array($where => $id));
    return $sonuc;
}

function projeCek($id, $from)
{
    $sonuc = $this->db->select('*')->from($from)
    ->where('o_id', $id)->get()->row_array();
    return $sonuc;
}
function haftaOgrenciDurum($id, $from)
{
    $sonuc = $this->db->select('*')->from($from)
    ->where('oID', $id)->where('durum',1)->get()->result_array();
    return $sonuc;
}

function mailara($id)
{
    $result = $this->db->like('email',$id)->from('kullanicilar')->where('email',$id)->get()->row();
    return $result;
}

function sinif_donemCek($sinifId,$donemId,$from){
    $sonuc = $this->db->select('*')->from($from)
    ->where('sinifId', $sinifId)->where('donemId', $donemId)->get()->row_array();
    return $sonuc;
}

function dersHaftaListele($id, $from)
{
    $sonuc = $this->db->select('*')->from($from)->where('dersID',$id)
    ->order_by('id', 'ASC')->get()->result_array();
    return $sonuc;
}
function dersHaftaListeleOgr($id, $from)
{
    $sonuc = $this->db->select('*')->from($from)->where('dersID',$id)->where('durum',1)
    ->order_by('id', 'ASC')->get()->result_array();
    return $sonuc;
}

function sinif_donemCekKullaniciKayit($sinifId,$donemId, $from)
{
    $sonuc = $this->db->select('*')->from($from)
    ->where('sinifId', $sinifId)->where('donemId', $donemId)->get()->row_array();
    return $sonuc;
}

function sinif_donemCekKullaniciGoster($sinifId, $from)
{
    $sonuc = $this->db->select('*')->from($from)
    ->where('sinifId', $sinifId)->get()->row_array();
    return $sonuc;
}

function sinifKullaniciListele($id, $from)
{
    $sonuc = $this->db->select('*')->from($from)->where('sinifDonemId',$id)
    ->order_by('id', 'ASC')->get()->result_array();
    return $sonuc;
}

function sinifIdCek(){
    $sonuc = $this->db->select('*')->from('sinif')->order_by('id', 'desc')->limit(1)->get()->row_array();
    return $sonuc;
}

function dersIdIdCek(){
    $sonuc = $this->db->select('*')->from('dersler')->order_by('id', 'desc')->limit(1)->get()->row_array();
    return $sonuc;
}


function sinifGuncelleDonemCek($id, $from)
{
    $sonuc = $this->db->select('*')->from($from)
    ->where('sinifId', $id)->get()->row_array();
    return $sonuc;
}

function ogrenciDersListele($id, $from)
{
    $sonuc = $this->db->select('*')->from($from)->where('sinifDonemId',$id)
    ->order_by('id', 'ASC')->get()->result_array();
    return $sonuc;
}

function odevCek($id1,$id, $from)
{
    $sonuc = $this->db->select('*')->from($from)
    ->where('ogrenciId', $id1)->where('haftaId', $id)->get()->row_array();
    return $sonuc;
}

function dersNotlari($id, $from)
{
    $sonuc = $this->db->select('*')->from($from)->where('haftaID',$id)
    ->order_by('id', 'ASC')->get()->result_array();
    return $sonuc;
}

function detayCek($sef,$from){
  $sonuc = $this->db->select('*')->from($from)
  ->where('sef', $sef)->get()->row_array();
  return $sonuc;
}

function bloghit($sef){
    $sonuc= $this->db->select('*')->from('bloglar')->where('sef',$sef)->get()->row_array();
    return $sonuc;
}

function siraliListele($from)
{
    $sonuc = $this->db->select('*')->from($from)
    ->order_by('sira', 'asc')->get()->result_array();
    return $sonuc;
}
function hitBlog($from)
{
    $sonuc = $this->db->select('*')->from($from)->limit(8)
    ->order_by('hit', 'desc')->get()->result_array();
    return $sonuc;
}

function eskiBlog($from)
{
    $sonuc = $this->db->select('*')->from($from)->limit(8)
    ->order_by('id', 'asc')->get()->result_array();
    return $sonuc;
}

function yeniBlog($from)
{
    $sonuc = $this->db->select('*')->from($from)->limit(8)
    ->order_by('id', 'desc')->get()->result_array();
    return $sonuc;
}

    function sef_listele($from){
        $sonuc = $this->db->select('sef')->from($from)->get()->result_array();
        return $sonuc;
    }

}
