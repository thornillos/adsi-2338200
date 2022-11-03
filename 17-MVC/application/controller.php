<?php
class Controller {
    public $load;
    public $model;
    function __construct() {
        $this->load = new Load();
        $this->model = new Model();
        if($_GET){
            if($_GET['method']=='show'){
                $this->show();   
            }
            if($_GET['method']=='delete'){
                $this->delete();   
            }
            if($_GET['method']=='edit'){
                $this->edit();   
            }
            if($_GET['method']=='update'){
                $this->update();   
            }
            if($_GET['method']=='add'){
                $this->viewAdd();   
            }
            if($_GET['method']=='newUser'){
                $this->newUser();   
            }
        }
        else {
            $this->welcome();
        }
    }

    function inicio() {
        $datos = $this->model->infoUsuario();
        $this->load->view('welcome.php', $datos);
    }

    private function welcome() {
            $data = $this->model->ListUsers();
            $this->load->view('welcome.php', $data); 
    }

    public function show(){
            $id = $_GET['id'];
            $data = $this->model->oneUser($id);
            $this->load->view('infoUser.php', $data);
    }
    public function edit(){
            $id = $_GET['id'];
            $data = $this->model->oneUser($id);
            $rol = $this->model->ListUsers();
            $this->load->view('editUser.php', $data, $rol);
    }
    public function delete(){
            $id = $_GET['id'];

            $data = $this->model->oneUser($id);
            $olimg = mysqli_fetch_array($data);
            $oldPhoto = $olimg[3];
            
            $resp = $this->model->deleteUser($id);

            if($resp){
                $_SESSION['eliminado'] = true;
                $this->deleteimg("public/img/$oldPhoto");
                header("location: ./");
            }
    }
    public function deleteimg($toDelete){
        unlink($toDelete);
    }
    public function update(){
        if($_POST){
            $fullname = $_POST['fullname'];
            $email = $_POST['email'];
            $rol = $_POST['rol'];
            $id = $_GET['id'];

            $data = $this->model->oneUser($id);
            $olimg = mysqli_fetch_row($data);
            $oldPhoto = $olimg[3];            
            if($_FILES['imgPerfil']){
                $ruta = "public/img/";
                $photo = $_FILES['imgPerfil']['name'];
                $cdimg = move_uploaded_file($_FILES['imgPerfil']['tmp_name'],$ruta.$photo);
                if($cdimg){
                    $this->deleteimg("public/img/$oldPhoto");
                }
            }else {
                $photo = $oldPhoto;
            }
            $resp = $this->model->updateUser($fullname,$email,$rol,$id,$photo);
            if($resp){
                $_SESSION['actualizado'] = true;
                header("location: ./");
            }
        }
    }

    public function viewAdd(){
        $this->load->view('add.php');
    }

    public function newUser(){
        if($_POST){
            $name =$_POST['fullname'];
            $email =$_POST['email'];
            $rol=$_POST['rol']; 
            if($_FILES){
                $ruta = "public/img/";
                $photo = $_FILES['imgPerfil']['name'];
                $cdimg = move_uploaded_file($_FILES['imgPerfil']['tmp_name'],$ruta.$photo);
                if($cdimg){
                    $_SESSION['imgMove'] = true;
                }
            }else{
                $photo = "nophoto.png";
            } 
            $resp = $this->model->addUser($name,$email,$rol,$photo);
            if($resp){
                $_SESSION['creado'] = true;
                header("location: ./");
            }
        }
    }

} //end class