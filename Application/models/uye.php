<?php
class uye extends Model
{
    public function uyeListe()
    {
        $query = $this->db->prepare("SELECT * FROM uyeler");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>