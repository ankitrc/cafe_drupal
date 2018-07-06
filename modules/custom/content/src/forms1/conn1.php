<?php
  namespace Drupal\content\forms1;
  class conn1{
      public static function other_db_connect($name){
        return \Drupal\Core\Database\Database::getConnection($name);
      }
      public static function db_connect(){
        return \Drupal::database();
      }
      public static function hey(){
        return 'yuppssswwwss';
      }
  }
