<?php
  class Weekday {
    function find ($input) {

      if((preg_match("/^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/", $input))||(preg_match("/^[0-9]{1}\/[0-9]{2}\/[0-9]{4}$/", $input))){
        $check_array = explode('/',$input);
        if(checkdate($check_array[0], $check_array[1], $check_array[2]) == 1) {
          $date = date_create($input);
          return date_format($date,'m/d/Y l');
        } else {
          return "Please enter an actual date!";
        }
      } elseif ((preg_match("/^[0-9]{2}-[0-9]{2}-[0-9]{4}$/", $input))||(preg_match("/^[0-9]{1}-[0-9]{2}-[0-9]{4}$/", $input))){
        $check_array = explode('-',$input);
        if(checkdate($check_array[0], $check_array[1], $check_array[2]) == 1) {
          return DateTime::createFromFormat('m-d-Y',$input)->format('m-d-Y l');
        } else {
          return "Please enter an actual date!";
        }
      } else {
        return "Please enter a valid date!";
      }
    }
  }
?>
