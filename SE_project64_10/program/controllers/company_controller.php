<?php class CompanyController{
    public function index()
    {
        $id_l=$_GET['id_l'];
        $lecturer=Lecturer::get($id_l);
        $company_List=Company::getAll();
        require_once("./views/company/index_company.php");
    }
    public function indexs()
    {
        $id_s=$_GET['id_s'];
        $student=Student::get($id_s);
        $company_List=Company::getAll();
        require_once("./views/company/indexs_company.php");
    }
    public function newCompany(){
        $id_l=$_GET['id_l'];
        $lecturer=Lecturer::get($id_l);
        $company_List=Company::getAll();
        require_once('./views/company/new_company.php');
    }
     public function addCompany()
     {
         $name_c=$_GET['name_c'];
        $address_c=$_GET['address_c'];
         $phone_c=$_GET['phone_c'];
        $quantity=$_GET['quantity'];
        $income=$_GET['income'];
        Company::Add($name_c,$address_c,$phone_c,$quantity,$income);
        CompanyController::index();
    }
    public function updateForm()
    {
        $id_l=$_GET['id_l'];
        $lecturer=Lecturer::get($id_l);
        $id_c=$_GET['id_c'];
        $company=Company::get($id_c);
        require_once('./views/company/updateForm.php');
       
    }
    public function update()
    {
        $id_c=$_GET['id_c'];
        $name_c=$_GET['name_c'];
        $address_c=$_GET['address_c'];
         $phone_c=$_GET['phone_c'];
        $quantity=$_GET['quantity'];
        $income=$_GET['income'];
        $id_l=$_GET['id_l'];
        $lecturer=Lecturer::get($id_l);
        Company:: update($id_c,$name_c,$address_c,$phone_c,$quantity,$income);
        CompanyController::index();
    }
    public function search()
    {
        $id_l=$_GET['id_l'];
        $lecturer=Lecturer::get($id_l);
        $key=$_GET['key'];
        $company_List=Company::search($key);
        require_once('./views/company/index_company.php');
    }
    public function searchs()
    {
        $id_s=$_GET['id_s'];
        $student=Student::get($id_s);
        $key=$_GET['key'];
        $company_List=Company::search($key);
        require_once('./views/company/indexs_company.php');
    }
    public function deleteConfirm()
    {
        $id_l=$_GET['id_l'];
        $lecturer=Lecturer::get($id_l);
        $id_c=$_GET['id_c'];
        $company=Company::get($id_c);
        require_once('./views/company/deleteConfirm.php');


    }
    public function delete()
    {
        $id_l=$_GET['id_l'];
        $lecturer=Lecturer::get($id_l);
        $id_c=$_GET['id_c'];
        Company::delete($id_c);
        CompanyController::index();

    }
    

}
?>