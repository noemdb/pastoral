<?php
namespace App\Models\sys\Extension\User;

trait TraitsMiddleware {

    //is admin
    public function isAdmin()
    {       
        if ($this->status) {   
            $arr_area = ['SISTEMA'];  
            $arr_rol = ['ADMINISTRADOR'];                      
            return  $this->hasAreRol($arr_area,$arr_rol);
        }
    }
    public function IsDirector()
    {
        if ($this->status) {    
            $arr_area = ['DIRECCIÓN'];                    
            $arr_rol = ['DIRECTOR'];                    
            return  $this->hasAreRol($arr_area,$arr_rol);
        }
    }
    public function IsCandidate()
    {
        if ($this->status) {    
            $arr_area = ['ASPIRANTADO'];                    
            $arr_rol = ['COOPERADOR'];                    
            return  $this->hasAreRol($arr_area,$arr_rol);
        }
    }
    public function IsCooperator()
    {
        if ($this->status) {    
            $arr_area = ['ASPIRANTADO'];                    
            $arr_rol = ['COOPERADOR'];                    
            return  $this->hasAreRol($arr_area,$arr_rol);
        }
    }
    public function IsReligious() //representant
    {
        if ($this->status) {    
            $arr_area = ['ASPIRANTADO'];                    
            $arr_rol = ['RELIGIOSO'];                    
            return  $this->hasAreRol($arr_area,$arr_rol);
        }
    }
    public function IsCoordinator()
    {
        if ($this->status) {    
            $arr_area = ['COORDINACION'];                    
            $arr_rol = ['COORDINADOR'];                    
            return  $this->hasAreRol($arr_area,$arr_rol);
        }
    }
    public function IsSubcoordinator()
    {
        if ($this->status) {    
            $arr_area = ['COORDINACION'];                    
            $arr_rol = ['SUBCOORDINADOR'];                    
            return  $this->hasAreRol($arr_area,$arr_rol);
        }
    }
    public function IsEstudiant() //estudiant
    {
        if ($this->status) {    
            $arr_area = ['COMUNIDAD'];                    
            $arr_rol = ['CATEQUIZANDO'];                    
            return  $this->hasAreRol($arr_area,$arr_rol);
        }
    }
    public function IsPresident() //president
    {
        if ($this->status) {    
            $arr_area = ['PRESIDENCIA'];                    
            $arr_rol = ['PRESIDENTE'];                    
            return  $this->hasAreRol($arr_area,$arr_rol);
        }
    }
    public function IsSecretary() //secretary
    {
        if ($this->status) {    
            $arr_area = ['SECRETARÍA'];                    
            $arr_rol = ['SECRETARIO'];                    
            return  $this->hasAreRol($arr_area,$arr_rol);
        }
    }
    public function IsTeacher() //teacher
    {
        if ($this->status) {    
            $arr_area = ['FORMADORES'];                    
            $arr_rol = ['CATEQUISTA'];                    
            return  $this->hasAreRol($arr_area,$arr_rol);
        }
    }
    public function IsRepresentant() //representant
    {
        if ($this->status) {    
            $arr_area = ['COMUNIDAD'];                    
            $arr_rol = ['REPRESENTANTE'];                    
            return  $this->hasAreRol($arr_area,$arr_rol);
        }
    }


}
