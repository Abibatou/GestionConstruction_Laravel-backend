<?php

namespace App\Http\Controllers;
use App\Construction;
use App\Quincaillerie;
use App\NomQuincaillerie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Guard;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class GestionConstruction extends Controller
{
    public function Login(Request $request)
    {
        
        try {
            
               $username=$request->username;
               $password= $request->password ;
                
             
                if  (!empty( $username) && (!empty(  $password))){
                    if (strlen($password)>= 6){
                        
                        if (count(DB::table('constructions')->where('username', $username)
                        ->where ('password', $password)
                        ->get())) {                           
                               $message =  'Connexion réussie';
                          
                       
                            }else {
                                $message = 'Veuillez réessayer';
                            }

                    
            
                       
                    }else {
                        $message = 'Votre mot de passe doit contenir mminimum 6 lettres !!!';
                    }

                }else {
                    $message = 'Veuillez saisir tous les champs';
                }
                return response()->json($message);
                    
            }       
                   
    
    catch(Exception $e)
		    {
		    echo $e->getMessage();
            }
        }
  


    public function Register(Request $request)

    {
         
         $message = 'bonjour';
        try {
            
                $nom=$request->nom;
                $prenom=$request->prenom;
                $username = $request->username;
                $password=$request->password;
                $repetezMotDePasse=$request->repetezMotDePasse;
               
            
             
                if  (!empty($nom) && (!empty($prenom)) && (!empty($username)) && (!empty($password)) && (!empty($repetezMotDePasse))){
                    
                    if( strlen($password) >= 6){
                      
                        if (filter_var($username, FILTER_VALIDATE_EMAIL)) {   
                            if ($password===$repetezMotDePasse) {     
                                
                                $construction = new Construction;
                                $construction->nom = request('nom');
                                $construction->prenom = request('prenom');
                                $construction->username = request('username');
                                $construction->password = request('password');
                                $construction->repetezMotDePasse = request('repetezMotDePasse');
                                $construction->save();
                                $message = 'Inscription réussie';
                        
                        }
                        else{
                            $message = "Les deux mots de passe doivent être identiques";   
                        }
                    }  else {
                               
                        $message = "Le mail est non valide";                 
            }
        }
             else {
                $message ="Votre mot de passe doit contenir minimum 6 caractères";                                                                     
    }
                    }
    else{
        $message = "Veuillez saisir tous les champs";   
    }
        }

        catch(Exception $e)
        {
        echo  $sql . "<br>". $e->getMessage();
        }
        
        return response()->json($message);
    }


    public function index(){
        $quincailleries = Quincaillerie::all();
        
        return response()->json($quincailleries);
    }

    public function store(Request $request){
        
        $nomQuincailleries = NomQuincaillerie::all();
        
        return response()->json($nomQuincailleries);
            
    }

   
}

	  

