<?php
  namespace Drupal\selection\check;
    class conn{
      public static function other_db_connect($name){
        return \Drupal\Core\Database\Database::getConnection($name);
      }
      public static function db_connect(){
        return \Drupal::database();
      }
  }
