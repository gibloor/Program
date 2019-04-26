<?
class searchModel extends Model{
  public function searchIdLogin($login){
    $sql = "SELECT id FROM users WHERE login ='$login'";

    $stmt = $this->db->prepare($sql);
    $stmt->bindValue(":id", $id, PDO::PARAM_INT);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    foreach($result as $key=>$value)
    {
      $user= $value;
    }
  }
}
