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
    public function IsCooperator()
    {
        if ($this->status) {    
            $arr_area = ['ASPIRANTADO'];                    
            $arr_rol = ['COOPERADOR'];
            return  $this->hasAreRol($arr_area,$arr_rol);
        }
    }
    public function IsPostulant()
    {
        if ($this->status) {    
            $arr_area = ['POSTULANTADO'];                    
            $arr_rol = ['POSTULANTE'];                    
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
    public function IsEstudiant()
    {
        if ($this->status) {    
            $arr_area = ['COMUNIDAD'];                    
            $arr_rol = ['CATEQUIZANDO'];                    
            return  $this->hasAreRol($arr_area,$arr_rol);
        }
    }
    public function IsPresident()
    {
        if ($this->status) {    
            $arr_area = ['PRESIDENCIA'];                    
            $arr_rol = ['PRESIDENTE'];                    
            return  $this->hasAreRol($arr_area,$arr_rol);
        }
    }
    public function IsSecretary()
    {
        if ($this->status) {    
            $arr_area = ['SECRETARÍA'];                    
            $arr_rol = ['SECRETARIO'];                    
            return  $this->hasAreRol($arr_area,$arr_rol);
        }
    }
    public function IsTeacher()
    {
        if ($this->status) {    
            $arr_area = ['FORMADORES'];                    
            $arr_rol = ['CATEQUISTA'];                    
            return  $this->hasAreRol($arr_area,$arr_rol);
        }
    }
    public function IsRepresentant()
    {
        if ($this->status) {    
            $arr_area = ['COMUNIDAD'];                    
            $arr_rol = ['REPRESENTANTE'];                    
            return  $this->hasAreRol($arr_area,$arr_rol);
        }
    }

    public function getPrefixAttribute()
    {
        $prefix = ($this->isAdmin()) ? 'admin' : null ;
        $prefix = ($this->IsDirector()) ? 'director' : $prefix ;
        $prefix = ($this->IsCooperator()) ? 'cooperator' : $prefix ;
        $prefix = ($this->IsPostulant()) ? 'postulant' : $prefix ;
        $prefix = ($this->IsCoordinator()) ? 'coordinator' : $prefix ;
        $prefix = ($this->IsSubcoordinator()) ? 'subcoordinator' : $prefix ;
        $prefix = ($this->IsEstudiant()) ? 'estudiant' : $prefix ;
        $prefix = ($this->IsPresident()) ? 'president' : $prefix ;
        $prefix = ($this->IsSecretary()) ? 'secretary' : $prefix ;
        $prefix = ($this->IsTeacher()) ? 'teacher' : $prefix ;
        $prefix = ($this->IsRepresentant()) ? 'representant' : $prefix ;
        return $prefix;
    }


}
