<?php
namespace App\Models\sys\Extension\User;

use App\Models\sys\Profile;
use App\Models\sys\Rol;

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
            if ($this->rol) {                
                $count = $this->rol->whereIn('area', ['SISTEMA','ASPIRANTADO'])->whereIn('rol', ['ADMINISTRADOR','COOPERADOR'])->count();
                return ($count > 0) ? true:false;
            }
        }
    }
    public function IsCoordinator()
    {
        if ($this->status) {
            if ($this->rol) {                
                $count = $this->rol->whereIn('area', ['SISTEMA','COORDINACION'])->whereIn('rol', ['ADMINISTRADOR','COORDINADOR'])->count();
                return ($count > 0) ? true:false;
            }
        }
    }
    public function IsEstudiant()
    {
        if ($this->status) {
            if ($this->rol) {                
                $count = $this->rol->whereIn('area', ['SISTEMA','COMUNIDAD'])->whereIn('rol', ['ADMINISTRADOR','CATEQUIZANDO'])->count();
                return ($count > 0) ? true:false;
            }
        }
    }
    public function IsPresident()
    {
        if ($this->status) {
            if ($this->rol) {                
                $count = $this->rol->whereIn('area', ['SISTEMA','PRESIDENCIA'])->whereIn('rol', ['ADMINISTRADOR','PRESIDENTE'])->count();
                return ($count > 0) ? true:false;
            }
        }
    }
    public function IsSecretary()
    {
        if ($this->status) {
            if ($this->rol) {                
                $count = $this->rol->whereIn('area', ['SISTEMA','SECRETARÍA'])->whereIn('rol', ['ADMINISTRADOR','SECRETARIO'])->count();
                return ($count > 0) ? true:false;
            }
        }
    }
    public function IsSubcoordinator()
    {
        if ($this->status) {
            if ($this->rol) {                
                $count = $this->rol->whereIn('area', ['SISTEMA','COORDINACION'])->whereIn('rol', ['ADMINISTRADOR','ASISTENTE'])->count();
                return ($count > 0) ? true:false;
            }
        }
    }
    public function IsTeacher()
    {
        if ($this->status) {
            if ($this->rol) {                
                $count = $this->rol->whereIn('area', ['SISTEMA','FORMADORES'])->whereIn('rol', ['ADMINISTRADOR','CATEQUISTA'])->count();
                return ($count > 0) ? true:false;
            }
        }
    }

}
