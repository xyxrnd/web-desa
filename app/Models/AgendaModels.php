<?php

namespace App\Models;

use CodeIgniter\Model;

class AgendaModels extends Model
{
    protected $table = 'tbl_agenda';
    protected $primaryKey = 'id_agenda';
    protected $allowedFields = ['nama_agenda', 'deskripsi', 'foto_agenda', 'dibuat_tanggal', 'tanggal'];

    public function data_agenda($id_agenda)
    {
        return $this->find($id_agenda);
    }

    public function update_data($data, $id_agenda)
    {
        $query = $this->db->table($this->table)->update(
            $data,
            array('id_agenda' => $id_agenda)
        );
        return $query;
    }

    public function delete_data($id_agenda)
    {
        $query = $this->db->table($this->table)->delete(array('id_agenda' => $id_agenda));
        return $query;
    }
}
