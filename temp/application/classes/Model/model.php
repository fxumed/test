<?php defined('SYSPATH') or die('No direct script access.');
 
class Model_Model extends Model
{
    var $folder = 'temp/';

    public function get_all()
    {

        if(isset($_POST['upload'])){
            if($_POST['put'])
                $file = file_get_contents($_POST['put']);
            else{
                $file = file_get_contents($this->get_file());
            }
        




            if($file){
                $result = $this->search_str($file);
                if(!$result)
                    return 'Строки нет в файле или файл не соответствует условиям';
                else
                    return 'Указаная строка находится в файле на '.$result[1].' позиции, в '.$result[0].' строке';
            }
            else
                return '0';
    }
    }

    public function get_file()
    {

        if(!$this->usloviya())
            return 0;


        $uploadedFile = $this->folder.basename($_FILES['uploadFile']['name']);
        if(is_uploaded_file($_FILES['uploadFile']['tmp_name'])){
            if(move_uploaded_file($_FILES['uploadFile']['tmp_name'],
            $uploadedFile))
            {
                return $uploadedFile;
            }
            else
            {
                return 0;
            }
        }
        else
        {
            return 0;
        }
    }


    public function search_str($file){

        if(!$_POST['str'])
            return 0;
        $file = explode("\n", $file);
        for ($i=0; $i < count($file); $i++) { 
            $str_p = strpos($file[$i], $_POST['str']);
            if($str_p)
                return array(++$i, ++$str_p);
        }
    }


    public function usloviya(){
        $myfile = 'test.yml';
        require_once('vendor/spyc.php');
        $data = Spyc::YAMLLoad($myfile);

        if($data[0]['size'] < $_FILES['uploadFile']['size'] || $data[1]['type'] > $_FILES['uploadFile']['type'])
            return 0;
        else
            return 1;
    }
}