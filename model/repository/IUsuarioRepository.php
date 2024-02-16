<?php



/**
 *
 * @author wadmin
 */
interface IUsuarioRepository extends IBaseRepository{
  public function findUsuarioByEmail($email): Usuario;
}
