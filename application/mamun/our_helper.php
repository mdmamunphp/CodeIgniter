<?php

    function fileExtension($field){

        if($_FILES[$field]['name'] != ""){

            $ext = pathinfo($_FILES[$field]['name']);
            $ext = strtolower($ext['extension']);
            if($ext != "jpg" && $ext != "png" && $ext != "gif" && $ext != "jpeg"){

                return '';

            }

            return $ext;

        }
        return "";
    }



?>