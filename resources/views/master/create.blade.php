@extends('layouts.master-page')
  <!--  <h1>Ajoutez un nouveau master :</h1>-->
  @section('body')
      

  <center>
      
<table>
<tr><td colspan="6"><br></td><tr>
   <tr>
        <td colspan="6" class="bg-success text-white"><center><b>Pour la création dun master veuillez remplir les inations ci-dessous </center></td>
    </tr>


    <tr>
        <td><br> intituleIntitulé du master </td>
        
        <td colspan="5">  intitule 
              intitule 
        </td>
        
     </tr>
     <tr>  
            <td> typeType du master </td>
            <td>  type 
                 type 
            </td>
            <td></td>
            <td> departementDépartement </td>
            <td colspan="2">  departement 
                 departement </td>
     </tr>
     
     <tr>
        <td colspan="2"> deadline </td>
        
        <td colspan="4">  deadline 
              deadline 
        </td>
        
     </tr>

    <tr>
        <td colspan="2"> goDisplay </td>
        
        <td colspan="4">  goDisplay 
              goDisplay 
        </td>
        
     </tr>

     
      <tr>
        <td colspan="2"> haveOption </td>
        
        <td colspan="4">  haveOption 
              haveOption 
        </td>
        
     </tr>


    <tr>
        <th colspan="6"><br><p  style="color:red;">Critère 1: Moyennes</p> </th>
    </tr>
    <tr>
        <th colspan="6"><br>Ajoutez les coefficients pour chaque semestre Ex: 02 utiliser  au lieu de  </th>
    </tr>

     <tr>
        <td style="text-align:right"> coefMoyenneS1Coefficient semestre 1 :</td>
        <td>  coefMoyenneS1 
             coefMoyenneS1 </td>
    
        </td>
        <td></td>
        <td style="text-align:right"> coefMoyenneS2Coefficient semestre 2 :</td>
        
        <td>  coefMoyenneS2 
             coefMoyenneS2 </td>
     </tr>
     <tr>
        <td style="text-align:right"> coefMoyenneS3Coefficient semestre 3 :</td>
        
        <td>  coefMoyenneS3 
             coefMoyenneS3 </td>
         <td></td>
        <td style="text-align:right"> coefMoyenneS4Coefficient semestre 4 :</td>
        
        <td>  coefMoyenneS4 
             coefMoyenneS4 </td>
     
     </tr>
     <tr>
        <td style="text-align:right"> coefMoyenneS5Coefficient semestre 5 :</td>
        
        <td>  coefMoyenneS5 
             coefMoyenneS5 </td>
        <td></td>
        <td style="text-align:right"> coefMoyenneS6Coefficient semestre 6 :</td>
        
        <td>  coefMoyenneS6 
             coefMoyenneS6 </td>
     </tr>
     
    <tr>
        <th colspan="6"><br>Si vous voulez ajouter un coefficient pour la moyenne de la licence </br>0 si vous ne voulez pas compter cette moyenne</th>
    </tr>

     <tr>
        <td style="text-align:right"> coefMoyenneLicenceCoefficient licence :</td>
        
        <td>  coefMoyenneLicence 
             coefMoyenneLicence </td>
     </tr>

     <tr>
        <th colspan="6"><br><p  style="color:red;">Critère 2: Mentions</p> </th>
    </tr>
       
    <tr>
        <th colspan="6"><br>Si vous voulez ajouter des bonus pour les mentions du Deug</th>
    </tr>

<tr>
        <td style="text-align:right"> deugMin1Intervalle 1: &nbsp;&nbsp;&nbsp;&nbsp; min </td>
        
        <td>  deugMin1 
             deugMin1 </td>
     
        <td style="text-align:right"> deugMax1 max </td>
        
        <td>  deugMax1 
             deugMax1 </td>
     
        <td style="text-align:right"> bonusDeug1 bonus </td>
        
        <td>  bonusDeug1 
             bonusDeug1 </td>
     </tr>
      <tr>
        <td style="text-align:right"> deugMin2Intervalle 2:  &nbsp;&nbsp;&nbsp;&nbsp; min </td>
       
        <td>  deugMin2 
             deugMin2 </td>
     
        <td style="text-align:right"> deugMax2max </td>
        
        <td>  deugMax2 
             deugMax2 </td>
     
        <td style="text-align:right"> bonusDeug2bonus </td>
        
        <td>  bonusDeug2 
             bonusDeug2 </td>
     </tr>
      <tr>
        <td style="text-align:right"> deugMin3Intervalle 3:  &nbsp;&nbsp;&nbsp;&nbsp; min </td>
       
        <td>  deugMin3 
             deugMin3 </td>
     
        <td style="text-align:right"> deugMax3max </td>
       
        <td>  deugMax3 
             deugMax3 </td>
    
        <td style="text-align:right"> bonusDeug3bonus </td>
       
        <td>  bonusDeug3 
             bonusDeug3 </td>
     </tr>
      <tr>
        <td style="text-align:right"> deugMin4Intervalle 4:  &nbsp;&nbsp;&nbsp;&nbsp; min </td>
        
        <td>  deugMin4 
             deugMin4 </td>
     
        <td style="text-align:right"> deugMax4max </td>
       
        <td>  deugMax4 
             deugMax4 </td>
    
        <td style="text-align:right"> bonusDeug4bonus </td>
       
        <td>  bonusDeug4 
             bonusDeug4 </td>
     </tr>
      <tr>
        <td style="text-align:right"> deugMin5Intervalle 5:  &nbsp;&nbsp;&nbsp;&nbsp; min </td>
        
        <td>  deugMin5 
             deugMin5 </td>
     
        <td style="text-align:right"> deugMax5max </td>
        
        <td>  deugMax5 
             deugMax5 </td>
     
        <td style="text-align:right"> bonusDeug5bonus </td>
       
        <td>  bonusDeug5 
             bonusDeug5 </td>
     </tr>
      <tr>
        <td style="text-align:right"> deugMin6Intervalle 6:  &nbsp;&nbsp;&nbsp;&nbsp; min </td>
        
        <td>  deugMin6 
             deugMin6 </td>
     
        <td style="text-align:right"> deugMax6max </td>
        
        <td>  deugMax6 
             deugMax6 </td>
     
        <td style="text-align:right"> bonusDeug6bonus </td>
        
        <td>  bonusDeug6 
             bonusDeug6 </td>
     </tr>
     
    <tr>
        <th colspan="6"><br>Si vous voulez ajouter des bonus pour les mentions de S5 et S6</th>
    </tr>

      <tr>
        <td style="text-align:right"> s5s6Min1Intervalle 1:  &nbsp;&nbsp;&nbsp;&nbsp; min </td>
     
        <td>  s5s6Min1 
             s5s6Min1 </td>
     
        <td style="text-align:right"> s5s6Max1max </td>
       
        <td>  s5s6Max1 
             s5s6Max1 </td>
     
        <td style="text-align:right"> bonusS5s61bonus </td>
        
        <td>  bonusS5s61 
             bonusS5s61 </td>
     </tr>
      <tr>
        <td style="text-align:right"> s5s6Min2Intervalle 2:  &nbsp;&nbsp;&nbsp;&nbsp; min </td>
        
        <td>  s5s6Min2 
             s5s6Min2 </td>
    
        <td style="text-align:right"> s5s6Max2max </td>
       
        <td>  s5s6Max2 
             s5s6Max2 </td>
     
        <td style="text-align:right"> bonusS5s62bonus </td>
       
        <td>  bonusS5s62 
             bonusS5s62 </td>
     </tr>
      <tr>
        <td style="text-align:right"> s5s6Min3Intervalle 3:  &nbsp;&nbsp;&nbsp;&nbsp; min </td>
      
        <td>  s5s6Min3 
             s5s6Min3 </td>
     
        <td style="text-align:right"> s5s6Max3max </td>
    
        <td>  s5s6Max3 
             s5s6Max3 </td>
     
        <td style="text-align:right"> bonusS5s63bonus </td>
       
        <td>  bonusS5s63 
             bonusS5s63 </td>
     </tr>
      <tr>
        <td style="text-align:right"> s5s6Min4Intervalle 4:  &nbsp;&nbsp;&nbsp;&nbsp; min </td>
        
        <td>  s5s6Min4 
             s5s6Min4 </td>
     
        <td style="text-align:right"> s5s6Max4max </td>
      
        <td>  s5s6Max4 
             s5s6Max4 </td>
    
        <td style="text-align:right"> bonusS5s64bonus </td>
        
        <td>  bonusS5s64 
             bonusS5s64 </td>
     </tr>
      <tr>
        <td style="text-align:right"> s5s6Min5Intervalle 5:  &nbsp;&nbsp;&nbsp;&nbsp; min </td>
       
        <td>  s5s6Min5 
             s5s6Min5 </td>
     
        <td style="text-align:right"> s5s6Max5max </td>
       
        <td>  s5s6Max5 
             s5s6Max5 </td>
     
        <td style="text-align:right"> bonusS5s65bonus </td>
       
        <td>  bonusS5s65 
             bonusS5s65 </td>
     </tr>
      <tr>
        <td style="text-align:right"> s5s6Min6Intervalle 6:  &nbsp;&nbsp;&nbsp;&nbsp; min </td>
        
        <td>  s5s6Min6 
             s5s6Min6 </td>
     
        <td style="text-align:right"> s5s6Max6max </td>
    
        <td>  s5s6Max6 
             s5s6Max6 </td>
     
        <td style="text-align:right"> bonusS5s66bonus </td>
       
        <td>  bonusS5s66 
             bonusS5s66 </td>
     </tr>

    <tr>
        <th colspan="6"><br>Si vous voulez ajouter des bonus pour les mentions de la licence</th>
    </tr>
     <tr>
        <td style="text-align:right"> nceMin1Intervalle 1:  &nbsp;&nbsp;&nbsp;&nbsp; min </td>
       
        <td>  nceMin1 
             nceMin1 </td>
     
        <td style="text-align:right"> nceMax1max </td>
       
        <td>  nceMax1 
             nceMax1 </td>
     
        <td style="text-align:right"> bonusLicence1bonus </td>
       
        <td>  bonusLicence1 
             bonusLicence1 </td>
     </tr>
     <tr>
        <td style="text-align:right"> nceMin2Intervalle 2:  &nbsp;&nbsp;&nbsp;&nbsp; min </td>
       
        <td>  nceMin2 
             nceMin2 </td>
     
        <td style="text-align:right"> nceMax2max </td>
      
        <td>  nceMax2 
             nceMax2 </td>
     
        <td style="text-align:right"> bonusLicence2bonus </td>
      
        <td>  bonusLicence2 
             bonusLicence2 </td>
     </tr>
     <tr>
        <td style="text-align:right"> nceMin3Intervalle 3:  &nbsp;&nbsp;&nbsp;&nbsp; min </td>
        
        <td>  nceMin3 
             nceMin3 </td>
    
        <td style="text-align:right"> nceMax3max </td>
        
        <td>  nceMax3 
             nceMax3 </td>
     
        <td style="text-align:right"> bonusLicence3bonus </td>
      
        <td>  bonusLicence3 
             bonusLicence3 </td>
     </tr>
     <tr>
        <td style="text-align:right"> nceMin4Intervalle 4:  &nbsp;&nbsp;&nbsp;&nbsp; min </td>
       
        <td>  nceMin4 
             nceMin4 </td>
     
        <td style="text-align:right"> nceMax4max </td>
      
        <td>  nceMax4 
             nceMax4 </td>
     
        <td style="text-align:right"> bonusLicence4bonus </td>
        
        <td>  bonusLicence4 
             bonusLicence4 </td>
     </tr>
     <tr>
        <td style="text-align:right"> nceMin5Intervalle 5:  &nbsp;&nbsp;&nbsp;&nbsp; min </td>
       
        <td>  nceMin5 
             nceMin5 </td>
    
        <td style="text-align:right"> nceMax5max </td>
        
        <td>  nceMax5 
             nceMax5 </td>
     
        <td style="text-align:right"> bonusLicence5bonus </td>
     
        <td>  bonusLicence5 
             bonusLicence5 </td>
     </tr>
     <tr>
        <td style="text-align:right"> nceMin6Intervalle 6:  &nbsp;&nbsp;&nbsp;&nbsp; min </td>
     
        <td>  nceMin6 
             nceMin6 </td>
     
        <td style="text-align:right"> nceMax6max </td>
  
        <td>  nceMax6 
             nceMax6 </td>
     
        <td style="text-align:right"> bonusLicence6bonus </td>
    
        <td>  bonusLicence6 
             bonusLicence6 </td>
     </tr>

     <tr>
        <th colspan="6"><br><p  style="color:red;">Critère 3: Validation en ordinaire</p> </th>
    </tr>

    <tr>
        <th colspan="6"><br>Si vous voulez ajouter des bonus pour la validation en ordinaire </th>
    </tr>

     <tr>
        <td style="text-align:right"> ordinaireS1 </td>
        
        <td>  ordinaireS1 
             ordinaireS1 </td>
     </tr>
      <tr>
        <td style="text-align:right"> ordinaireS2 </td>
        
        <td>  ordinaireS2 
             ordinaireS2 </td>
     </tr>
      <tr>
        <td style="text-align:right"> ordinaireS3 </td>
        
        <td>  ordinaireS3 
             ordinaireS3 </td>
     </tr>
      <tr>
        <td style="text-align:right"> ordinaireS4 </td>
        
        <td>  ordinaireS4 
             ordinaireS4 </td>
     </tr>
      <tr>
        <td style="text-align:right"> ordinaireS5 </td>
        
        <td>  ordinaireS5 
             ordinaireS5 </td>
     </tr>
      <tr>
        <td style="text-align:right"> ordinaireS6 </td>
        
        <td>  ordinaireS6 
             ordinaireS6 </td>
     </tr>

     <tr>
        <th colspan="6"><br><p  style="color:red;">Critère 4: Ancienneté du Diplôme</p> </th>
    </tr>
       
    <tr>
        <th colspan="6"><br>Si vous voulez ajouter des bonus pour lancienneté du Diplôme</th>
    </tr>

    <tr>
        <td style="text-align:right"> ancienteDiplome0anAncienneté du Diplôme = 0 an </td>
        
        <td>  ancienteDiplome0an 
             ancienteDiplome0an </td>
     </tr>
     <tr>
        <td style="text-align:right"> ancienteDiplome1anAncienneté du Diplôme = 1 an </td>
        
        <td>  ancienteDiplome1an 
             ancienteDiplome1an </td>
     </tr>
     <tr>
        <td style="text-align:right" width="250px"> ancienteDiplome2ansAncienneté du Diplôme = 2 ans </td>
        
        <td>  ancienteDiplome2ans 
             ancienteDiplome2ans </td>
     </tr>
     <tr>
        <td style="text-align:right"> ancienteDiplome3ansAncienneté du Diplôme = 3 ans </td>
        
        <td>  ancienteDiplome3ans 
             ancienteDiplome3ans </td>
     </tr>

     <tr>
        <th colspan="6"><br><p  style="color:red;">Critère 5: Durée du Diplôme</p> </th>
    </tr>
     
    <tr>
        <th colspan="6"><br>Si vous voulez ajouter des bonus pour la durée du diplôme</th>
    </tr>

      <tr>
        <td style="text-align:right"> dureeDiplome3ansDurée du Diplôme = 3 ans </td>
        
        <td>  dureeDiplome3ans 
             dureeDiplome3ans </td>
     </tr>
      <tr>
        <td style="text-align:right"> dureeDiplome4ansDurée du Diplôme = 4 ans </td>
        
        <td>  dureeDiplome4ans 
             dureeDiplome4ans </td>
     </tr>
      <tr>
        <td style="text-align:right"> dureeDiplome5ansDurée du Diplôme = 5 ans </td>
        
        <td>  dureeDiplome5ans 
             dureeDiplome5ans </td>
     </tr>

      <tr>
        <td style="text-align:right"> dureeDiplome6ansDurée du Diplôme = 6 ans </td>
        
        <td>  dureeDiplome6ans 
             dureeDiplome6ans </td>
     </tr>

     <tr>
        <th colspan="6"><br><p  style="color:red;">Critère 6: Prerequis</p> </th>
    </tr>
     
    <tr>
        <th colspan="6"><br>Si vous voulez ajouter des bonus pour les prerequis</th>
    </tr>

     <tr>
        <td  align="center"> prerequis1 </td>
        
        <td>  prerequis1 
             prerequis1 </td>
            
            <td > bonusprerequis1 </td>
        
        <td>  bonusprerequis1 
             bonusprerequis1 </td>
     </tr>
      <tr>
        <td align="center"> prerequis2 </td>
        
        <td>  prerequis2 
             prerequis2 </td>
            
             <td style="text-align:right"> bonusprerequis2 </td>
        
        <td>  bonusprerequis2 
             bonusprerequis2 </td>
     </tr>
      <tr>
        <td align="center"> prerequis3 </td>
        
        <td>  prerequis3 
             prerequis3 </td>
            
             <td style="text-align:right"> bonusprerequis3 </td>
        
        <td>  bonusprerequis3 
             bonusprerequis3 </td>
     </tr>
      <tr>
        <td align="center"> prerequis4 </td>
        
        <td>  prerequis4 
             prerequis4 </td>
           
             <td style="text-align:right"> bonusprerequis4 </td>
      
        <td>  bonusprerequis4 
             bonusprerequis4 </td>
     </tr>
    
<tr>
<td colspan="6"><hr><center> rest </center></td>
</tr>

</table>



</center>
@endsection