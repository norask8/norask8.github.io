<?php
  class Team{
    public function __construct($name) {
      $this->name = $name;
    }
    public function hello(){
      echo '私は'.$this->name."です\n";
    }
    public function get_Name(){
      return $this->$name;
    }
    publicfunction getImage(){
      return $this->image;
    }
  }
  $real = new Team('レアル・マドリード');
  $atle = new Team('アトレティコ');
  $leicester = new Team('レスター');
  $mainz = new Team('マインツ');
  $real->hello();
 ?>
