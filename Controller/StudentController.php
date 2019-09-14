<?php

include_once('Model/Student.php');

class StudentController{
    /**
     * Index Student
     * Fetch all data and return it with the view
     */
    public function index(){
        $Student = new Student;
        if (isset($_GET['filter'])) {
            $q = $Student->filter($_GET['filter']);
        }else{
            $q = $Student->all();
        }

        $data=[
            'title' =>  'Index Student ',
            'data'  =>  $q
        ];

        include_once('View/Student/Index.php');
    }

    /**
     * Create Student
     * Return the view for creating new Student records
     */
    public function create(){    
        $data=[
            'title' =>  'Create Student',
            'data'  =>  'ABC',
        ];

        include_once('View/Student/Create.php');
    }

    /**
     * Store Student
     * Insert record into Student and return to create with flash message
     */
    public function store(){
        $Student = new Student;
        if($Student->insert($_POST)){
            $_SESSION['message'] = "Success";
            header('location:create');
        }else{
            $_SESSION['message'] = "Failed";
            header('location:create');
        }
    }

    /**
     * Edit Student
     * Fetch data of a certain $id and return it with the view for editing
     */
    public function edit($id){
        $data=[
            'title' =>  'Edit Student ',
            'data'  =>  Student::find($id),
        ];

        include_once('View/Student/Edit.php');
    }
    
    /**
     * Index Student
     * Update record of $id and return to edit view with message
     */
    public function update($id){
        
    }

    /**
     * Destroy Student
     * cease to exist
     */
    public function destroy($id){

    }
}