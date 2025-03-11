<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <form action="end.php" method="post">



        <div class="container">
            <img src="./iihmr.jpeg" alt="iihmr">
          
            </div>
          
          <span style="color: gray;"><h3>Annexure-4 Checklist for PI to Submit for Initial Review of Research Proposal</h3></span>
          <h3>Check list for Initial Review Submission Form for Research Proposal</h3>
          
            
            <tr>
              <td><label for="moic">Serial No of IRB application (for office use only):</label></td>
              <label for="moic"><input type="text" id="moic" name="moic" value=""></label><br>
            </tr><br>
          
          <br>
          
          <strong><label for="zinda"><b>Date of Submission:</b></label></strong>
          <label for="yes"><input type=" datetime-local " id="yes" name="zinda" value=""></label><br>
          <br>
          
          <fieldset>
          
            <table border = "1">
              <tr>
               
                <th class="col1">Sr No</th>
                <th>Type of Document</th>
                <th class="col2">Check</th>
              </tr>
              <tr>
                <td  class="col1">1</td>
                <td>Title of the research proposal</td>
                <td><textarea id="text" name="question1" cols="150" rows="10"></textarea></td>
              </tr>
              <tr>
                <td  class="col1">2</td>
                <td>Name of the Principal Investigator with qualification and designation</td>
                <td><input type="text" id="checkbox" name="question2" value=""></td>
              </tr>
              <!-- Add more rows for each question -->
              <tr>
                <td  class="col1">3</td>
                <td>Name of the Co-Investigator(s) with qualifications and designation</td>
                <td><input type="text" id="checkbox" name="question3" value=""></td>
              </tr>
          
              <tr>
                <td  class="col1">4</td>
                <td>Name of the Institute/Organization/Hospital/ where research will be conducted</td>
                <td><input type="text" id="checkbox" name="question4" value=""></td>
              </tr>
          
              <tr>
                <td  class="col1">5</td>
                <td>Forwarding letter from the Head of the Department/ Institution/ Guide.</td>
                <td><input type="checkbox" id="checkbox" name="question5" value="yes"></td>
              </tr>
          
              <tr>
                <td  class="col1">6</td>
                <td> Protocol of the proposed research: (includes and is not limited to) clear research objectives, the rationale for undertaking the investigations in human participants in the light of the existing knowledge, inclusion, and exclusion criteria for entry of participants. The Precise description of the methodology of the proposed research, including sample size, type of study design (observational, experimental, pilot, randomized, blinded etc.), intended intervention, dosages of drugs, route of administration, duration of treatment and details of invasive procedures if any, Plan to withdraw or withhold standard therapies during research. Plan for
                  statistical analysis of the study. Ethical issues in the study and plans to address these issues.
                  .</td>
                <td><input type="checkbox" id="checkbox" name="question6" value="yes"></td>
              </tr>
          
              <tr>
                <td  class="col1">7</td>
                <td>Proposal should be submitted with all relevant enclosures like proforma, case report forms, questionnaires, follow-up cards, participant recruitment procedures and brochures, if any, Informed consent process, including patient information sheet and informed consent form in English and local language(s). Investigator's brochure for trial on drugs/devices/vaccines/herbal remedies and statement of relevant regulatory clearances.</td>
                <td><input type="checkbox" id="checkbox" name="question7" value="yes"></td>
              </tr>
          
              <tr>
                <td  class="col1">8</td>
                <td>Source of funding and financial requirements for the project.</td>
                <td><input type="checkbox" id="checkbox" name="question8" value="yes"></td>
              </tr>
          
          
              <tr>
                <td  class="col1">9</td>
                <td>For any drug/ device trial, all relevant pre-clinical animal data and
                  clinical trial data from other centers within the country/ other countries, if available.
                  </td>
                <td><input type="checkbox" id="checkbox" name="question9" value="yes"></td>
              </tr>
          
          
              <tr>
                <td  class="col1">10</td>
                <td>Usefulness of the project/ trial</td>
                <td><input type="checkbox" id="checkbox" name="question10" value="yes"></td>
              </tr>
          
          
              <tr>
                <td  class="col1">11</td>
                <td>Expected 'benefits' to volunteers/ community. 'Benefits' to other
                  categories if any
                  .</td>
                <td><input type="checkbox" id="checkbox" name="question11" value="yes"></td>
              </tr>
          
          
              <tr>
                <td  class="col1">12</td>
                <td>Explain all anticipated 'risks'  (adverse events, injury, discomfort) of the project.Efforts taken to minimize the risks. Proposed compensation and reimbursement of incidental expenses and management of research related and unrelated injury/ illness during and after research period.
                  Description of the arrangements for indemnity, if applicable in study-related injuries and description of the arrangements for insurance coverage for research participants, if applicable.
                  .</td>
                <td><input type="checkbox" id="checkbox" name="question12" value="yes"></td>
              </tr>
          
              <tr>
                <td  class="col1">13</td>
                <td>Agreement to report all Serious Adverse Events(SAE) to IHMRB-IRB.</td>
                <td><input type="checkbox" id="checkbox" name="question13" value="yes"></td>
              </tr>
          
              <tr>
                <td  class="col1">14</td>
                <td>An account of storage and maintenance of all data collected during the
                  trial.
                  </td>
                <td><input type="checkbox" id="checkbox" name="question14" value="yes"></td>
              </tr>
          
          
              <tr>
                <td  class="col1">15</td>
                <td>Research proposals approval by scientific advisory committee
                  <td>
                    <input type="radio" id="yes" name="question15" value="yes">
                    <label for="yes">Yes</label>
                    <br>
                    <input type="radio" id="No" name="question15" value="No">
                    <label for="No">No</label>
                    <br>
                    <input type="radio" id="Not Applicable" name="question15" value="Not Applicable">
                    <label for="Not Applicable">Not Applicable</label>
                    <br>
                  </td>
                  </td>
                  </tr>
          
                  <td  class="col1">16</td>
                <td>For international collaborative, study details about foreign collaborators and documents for review of Health Ministry's Screening Committee
                  (HMSC) or appropriate Committees under other agencies/authority like Drug Controller General of India (DCGI)</td>
                <td><input type="checkbox" id="checkbox" name="question16" value="yes"></td>
              </tr>
          
          
              <tr>
                <td  class="col1">17</td>
                <td>For exchange of biological material in international collaborative study a MoU/ Material
                  </td>
                <td><input type="checkbox" id="checkbox" name="question17" value="yes"></td>
              </tr>
          
          
              <tr>
                <td  class="col1">18</td>
                <td>Transfer Agreement between the collaborating partners.
                  </td>
                <td><input type="checkbox" id="checkbox" name="question18" value="yes"></td>
              </tr>
          
          
              <tr>
                <td  class="col1">19</td>
                <td>Statement of conflicts   of interest, if any
                  <td>
                    <input type="radio" id="yes" name="question191" value="yes">
                    <label for="yes">Yes</label>
                    <br>
                    <input type="radio" id="No" name="question191" value="No">
                    <label for="No">No</label>
                    <br>
                   
                   
          
                    <label>if yes,specify</label>
          <table>
            <tr>
              <td><textarea id="question19" name="question19" cols="150" rows="10"></textarea></td>
            </tr>
          </table>
          
          
          
                  
                  </td>
                  </td>
                 
              </tr>
          
          
              <tr>
                <td  class="col1">20</td>
                <td>Agreement to comply with the relevant national and applicable international guidelines,Good Clinical Practices(GCP) protocols for
                  clinical trials.
                  
                  </td>
                <td><input type="checkbox" id="checkbox" name="question20" value="yes"></td>
              </tr>
          
          
              <tr>
                <td  class="col1">21</td>
                <td>All significant previous decisions (e.g., those leading to a negative decision or modified protocol) by other ECs or regulatory authorities for the proposed study (whether in the same location or elsewhere) and an indication of the modification(s) to the protocol made on that account. <i> If yes furnish letter/document</i>
                
                  </td>
                  <td>
                    <input type="radio" id="yes" name="question21" value="yes">
                    <label for="yes">Yes</label>
                    <br>
                    <input type="radio" id="No" name="question21" value="No">
                    <label for="No">No</label>
                    <br>
                  </td>
              </tr>
                
              </tr>
          
              <tr>
                <td  class="col1">22</td>
                <td>A statement on, probable ethical issues and steps taken to tackle the
                  same such as justification for washout of standard drug, or the use of placebo control.
                  
                  </td>
                <td><input type="checkbox" id="checkbox" name="question22" value="yes"></td>
              </tr>
          
          
              <tr>
                <td  class="col1">23</td>
                <td>Curriculum vitae of all the investigators with relevant publications in last five years.
                  </td>
                <td><input type="checkbox" id="checkbox" name="question23" value="yes"></td>
              </tr>
          
              <tr>
                <td  class="col1">24</td>
                <td>Plans for publication of results / positive or negative / while maintaining the privacy and confidentiality of the study participants
                  .</td>
                  <td>
                    <input type="radio" id="yes" name="question24" value="yes">
                    <label for="yes">Yes</label>
                    <br>
                    <input type="radio" id="No" name="question24" value="No">
                    <label for="No">No</label>
                    <br>
                  </td>
              </tr>
               
            
          
          
              <tr>
                <td  class="col1">25</td>
                <td>Any other information relevant to the study.
          
          
                  </td>
                  <td><textarea id="text" name="question25" cols="150" rows="10"></textarea></td>
                 
              </tr>
              
            </table>
            
          
          
            <p>Note: The above information and enclosures should be furnished wherever necessary depending upon the nature of the study proposal</p>
            
          
          </fieldset>
          
          
            <div class="container">
            <img src="./iihmr.jpeg" alt="iihmr">
          
            </div>
            <span style="color: gray;"><h3 style="text-align: center;"> Annexure-5 IRB  SUBMISSION FORM </h3><br></span>
          
          
            <h2 style="text-align: center;">Form to be filled by the Principal Investigator (PI) for submission to Institutional Review Board (IRB), IIHMR Bangalore</h2><br>
          
          
             <h3>Section A - Declaration by the PI Team</h3>
          
             <fieldset>
              
                <table>
                  <h4>PI Details</h4>
                   <tr>
                    
                     <td><label for="ftata">Name</label></td>
                     <td><input type="text" id="ftata" name="ftata"></td>
                   </tr>
          
                   <tr>
                    
                    <td><label for="smcopy">Designation</label></td>
                    <td><input type="text" id="smcopy" name="smcopy"></td>
                  </tr>
          
                  <tr>
                    
                    <td><label for="mkjco">Department</label></td>
                    <td><input type="text" id="mkjco" name="mkjco"></td>
                  </tr>
          
                   
                     <tr>
                         <td><label for="qualification12">Qualifications</label></td>
                         <td><input type="qualification12" id="qualification12" name="qualification12"></td>
                       </tr>
          
          
          
                       <tr>
                        
                        <td> <label for="afd1">Address</label></td>
                         <td><input type="text" id="afd1" name="afd1"></td>
                         
                         </tr>
          
          
          
          
                       <tr>
                        
                     <td> <label for="tel1">Telephone Number</label></td>
                      <td><input type="tel" id="tel1" name="tel1"></td>
                      
                      </tr>
               
                     
                            
          
                     
                      <tr>
                         <td>
                       <label for="email12">Email</label>
                      <td><input type="email" id="email12" name="email12"></td>
                       </td>
                       </tr>
          
                       <tr>
                        <td>
                      <label for="tblenum34">No of projects already with Investigator</label>
                     <td> <input type="number" id="tblenum34" name="tblenum34"></td>
                      </td>
                      </tr>
          
                      
          
                       
                <tr>
                        
                  <td> <label for="sgtrpp1">Signature</label></td>
                   <td><input type="text" id="sgtrpp1" name="sgtrpp1"></td>
                   
                   </tr>
          
                      
          
                   </table>
          
          
          <!--table2-->
          
          <table>
            <h4>Co.PI/Collaborators</h4>
             <tr>
              
               <td><label for="rapido">Name</label></td>
               <td><input type="text" id="rapido" name="rapido"></td>
             </tr>
          
             <tr>
              
              <td><label for="rapido21">Designation</label></td>
              <td><input type="text" id="rapido21" name="rapido21"></td>
            </tr>
          
            <tr>
              
              <td><label for="rapido89">Department</label></td>
              <td><input type="text" id="rapido89" name="rapido89"></td>
            </tr>
          
             
               <tr>
                   <td><label for="qualification210">Qualifications</label></td>
                   <td><input type="qualification210" id="qualification210" name="qualification210"></td>
                 </tr>
          
               
          
          
            
                 <tr>
                        
                  <td> <label for="afd2">Address</label></td>
                   <td><input type="text" id="afd2" name="afd2"></td>
                   
                   </tr>
          
          
          
          
          
                 <tr>
                        
                  <td> <label for="tel2">Telephone Number</label></td>
                   <td><input type="tel" id="tel2" name="tel2"></td>
                   
                   </tr>
          
          
          
          
                <tr>
                   <td>
                 <label for="email1">Email</label>
                 <td><input type="email" id="email1" name="email1"></td>
                 </td>
                 </tr>
          
                 <tr>
                  <td>
                <label for="mosam45">No of projects already with Investigator</label>
               <td> <input type="number" id="mosam45" name="mosam45"></td>
                </td>
                </tr>
          
                
          
                 
                <tr>
                        
                  <td> <label for="sgtrpp2">Signature</label></td>
                   <td><input type="text" id="sgtrpp2" name="sgtrpp2"></td>
                   
                   </tr>
          
                
          
             </table>
          
          
          <!--table3-->
          
          <table>
            <h4>Co.PI/Collaborators</h4>
             <tr>
              
               <td><label for="trrrc">Name</label></td>
               <td><input type="text" id="trrrc" name="trrrc"></td>
             </tr>
          
             <tr>
              
              <td><label for="trrrc1">Designation</label></td>
              <td><input type="text" id="trrrc1" name="trrrc1"></td>
            </tr>
          
            <tr>
              
              <td><label for="trrrc2">Department</label></td>
              <td><input type="text" id="trrrc2" name="trrrc2"></td>
            </tr>
          
             
               <tr>
                   <td><label for="qual">Qualifications</label></td>
                   <td><input type="qualification" id="qual" name="qual"></td>
                 </tr>
          
          
          
          
                 <tr>
                        
                  <td> <label for="afd3">Address</label></td>
                   <td><input type="text" id="afd3" name="afd3"></td>
                   
                   </tr>
          
          
          
          
                 <tr>
                        
                  <td> <label for="tel3">Telephone Number</label></td>
                   <td><input type="tel" id="tel3" name="tel3"></td>
                   
                   </tr>
          
          
          
                
          
                 
                <tr>
                   <td>
                 <label for="email2">Email</label>
               <td>  <input type="email" id="email2" name="email2"></td>
                 </td>
                 </tr>
          
                 <tr>
                  <td>
                <label for="fanho">No of projects already with Investigator</label>
               <td><input type="number" id="fanho" name="fanho"></td>
                </td>
                </tr>
          
                
          
                 
                <tr>
                        
                  <td> <label for="sgtrpp3">Signature</label></td>
                   <td><input type="text" id="sgtrpp3" name="sgtrpp3"></td>
                   
                   </tr>
          
                
          
             </table>
          
          
          <!--table4-->
          
          <table>
            <h4>Co.PI/Collaborators</h4>
             <tr>
              
               <td><label for="ctreb">Name</label></td>
               <td><input type="text" id="ctreb" name="ctreb"></td>
             </tr>
          
             <tr>
              
              <td><label for="ctreb1">Designation</label></td>
              <td><input type="text" id="ctreb1" name="ctreb1"></td>
            </tr>
          
            <tr>
              
              <td><label for="ctreb2">Department</label></td>
              <td><input type="text" id="ctreb2" name="ctreb2"></td>
            </tr>
          
             
               <tr>
                   <td><label for="qfivaty">Qualifications</label></td>
                   <td><input type="qualification" id="qfivaty" name="qfivaty"></td>
                 </tr>
          
                
          
          
                 <tr>
                        
                  <td> <label for="afd4">Address</label></td>
                   <td><input type="text" id="afd4" name="afd4"></td>
                   
                   </tr> 
          
          
          
                 <tr>
                        
                  <td> <label for="tel4">Telephone Number</label></td>
                   <td><input type="tel" id="tel4" name="tel4"></td>
                   
                   </tr>
          
          
               
                  
          
          
          
                <tr>
                   <td>
                 <label for="eghigy">Email</label>
                 <td><input type="email" id="eghigy" name="eghigy"></td>
                 </td>
                 </tr>
          
                 <tr>
                  <td>
                <label for="pioyht">No of projects already with Investigator</label>
               <td> <input type="number" id="pioyht" name="pioyht"></td>
                </td>
                </tr>
          
                
          
                
                <tr>
                        
                  <td> <label for="sgtrpp4">Signature</label></td>
                   <td><input type="text" id="sgtrpp4" name="sgtrpp4"></td>
                   
                   </tr>
          
                
          
             </table>
          
          
          <!--table5-->
          <table>
            <h4>Co.PI/Collaborators</h4>
             <tr>
              
               <td><label for="krmo">Name</label></td>
               <td><input type="text" id="krmo" name="krmo"></td>
             </tr>
          
             <tr>
              
              <td><label for="krmo1">Designation</label></td>
              <td><input type="text" id="krmo1" name="krmo1"></td>
            </tr>
          
            <tr>
              
              <td><label for="krmo2">Department</label></td>
              <td><input type="text" id="krmo2" name="krmo2"></td>
            </tr>
          
             
               <tr>
                   <td><label for="slhjsh">Qualifications</label></td>
                   <td><input type="qualification" id="slhjsh" name="slhjsh"></td>
                 </tr>
          
          
          
          
                 <tr>
                        
                  <td> <label for="afd5">Address</label></td>
                   <td><input type="text" id="afd5" name="afd5"></td>
                   
                   </tr>
          
          
          
          
          
                 <tr>
                        
                  <td> <label for="tel5">Telephone Number</label></td>
                   <td><input type="tel" id="tel5" name="tel5"></td>
                   
                   </tr>
          
          
          
                 
          
          
               
                <tr>
                   <td>
                 <label for="bjrang">Email</label>
               <td> <input type="email" id="bjrang" name="bjrang"></td>
                 </td>
                 </tr>
          
                 <tr>
                  <td>
                <label for="pgle">No of projects already with Investigator</label>
               <td><input type="number" id="pgle" name="pgle"></td>
                </td>
                </tr>
          
          
               
                <tr>
                        
                  <td> <label for="sgtrpp5">Signature</label></td>
                   <td><input type="text" id="sgtrpp5" name="sgtrpp5"></td>
                   
                   </tr>
          
                 
          
          
            </table>
          
            <h4>Please attach detailed Curriculum Vitae of all Investigators (with subject specific publications limited to previous 5 years)</h4>
          
          </fieldset>
          
          
          
          
          
          
          
          
                   <h3>    Section B </h3>
           
              <fieldset>
                
               
              <!--question 1-->
                <legend></legend>
                <legend>1. Funding agency or Sponsor Information (<i> tick appropriately</i>)</legend><br>
                <label for="government of india and undertaking agencies"><input type="radio" id="government of india and undertaking agencies" name="customer" value="government of india and undertaking agencies">(a) Government of India and undertaking agencies</label><br>
                <label for="private for profit"><input type="radio" id="private for profit" name="customer" value="private for profit">(b) Private for profit</label><br>
             
                <label for="private  not for profit"><input type="radio" id="private  not for profit" name="customer" value="private  not for profit">(c) Private  not for profit</label><br>
          
                <label for="self-sponsored"><input type="radio" id="self-sponsored" name="customer" value="self-sponsored">(d) Self-sponsored</label><br>
          
                <label for="Academic"><input type="radio" id="Academic" name="customer" value="Academic">(e) Academic</label><br>
          
                <label for="international donor agency"><input type="radio" id="international donor agency" name="customer" value="international donor agency">(f) International donor agency</label><br>
          <br><hr>
                <label for="name">1.1 Name and Contact details of the sponsor/ funding agency </label>
             <input type="text"  id="name"  name="name"      ><br><hr>
               
          <br>
             <label for="name">1.2 Approximate budget (in rupees)</label>
             <input type="text" id="name1" name="name1"><br><hr>
               <br>
              <!--question 2-->
               <legend>2. Type of Study design (<i>tick appropriately</i>)</legend><br>
                <label for="cross sectional survey"><input type="radio" id="cross sectional survey" name="customer1" value="cross sectional survey">(a) Cross Sectional Survey</label><br>
                <label for="case control study"><input type="radio" id="case control study" name="customer1" value="case control study">(b) Case Control Study </label><br>
             
                <label for="cohort study"><input type="radio" id="cohort study" name="customer1" value="cohort study">(c) Cohort Study</label><br>
          
                <label for="Randomized controlled Trial"><input type="radio" id="Randomized controlled Trial" name="customer1" value="Randomized controlled Trial">(d) Randomized   Controlled Trial</label><br>
          
                <label for="systemetic review"><input type="radio" id="systemetic review" name="customer1" value="systematic Review">(e) Systematic Review</label><br>
          
                <label for="Literature Review"><input type="radio" id="Literature Review" name="customer1" value="Literature Review">(f) Literature Review</label><br>
          
                <label for="other"><input type="radio" id="other" name="customer1" value="other">(g) Other (specify)</label><br><hr>
          <br>
               <!--question 3-->
               <legend>3. Type of Centers (<i>tick appropriately</i>)</legend><br>
                <label for="single centre"><input type="radio" id="single centre" name="customer2" value="single centre">(a) Single Centre</label><br>
                <label for="multi centric"><input type="radio" id="multi centric" name="customer2" value="multi centric">(b) Multi Centric </label><br><hr>
             
            <!--question 4-->
           
          
            
             
            <td> <label for="name2">4. Study Site/s</label></td>
            <td><input type="text" id="name2" name="name2"></td><br><hr>
            
             
             <br>
          
          
          
          
          
             <!--question 5-->
             <legend>5. Type of Review (<i>tick appropriately</i>)</legend><br>
                <label for="new"><input type="radio" id="new" name="customer3" value="New">(a) New </label><br>
                <label for="revision"><input type="radio" id="revision" name="customer3" value="Revision">(b) Revision </label><br><hr>
          
               <!-- Question 6 -->
  <legend>6. Further information for clinical trials (<i>tick appropriately</i>)</legend>
  <label for="trialType">Applicable:</label>
  <select id="trialType" name="trialType" onchange="handleSelectChangeTrial()">
    <option value="none" selected disabled hidden>Applicable</option>
    <option value="Drug Trial">Drug Trial</option>
    <option value="Vaccine Trial">Vaccine Trial</option>
    <option value="Device Trial">Device Trial</option>
    <option value="Alternative Medicine Trial">Alternative Medicine Trial</option>
  </select>
  <br><br>
  <label for="NotApplicable">
    <input type="radio" id="NotApplicable" name="customer4" value="Not Applicable" onchange="handleRadioChangeTrial()">Not Applicable
  </label>
  <br><hr>

  <!-- Question 6.1 -->
  <legend>6.1 Is the Intervention Already Approved or Marketed? (<i>tick appropriately</i>)</legend>
  <label for="luthajd">Applicable:</label>
  <select id="luthajd" name="luthajd" onchange="handleSelectChange()">
    <option value="none" selected disabled hidden>Applicable</option>
    <option value="Approved for India">(a) Approved for India</option>
    <option value="Approved for USA">(b) Approved for USA</option>
    <option value="Approved for EU">(c) Approved for EU</option>
    <option value="Marketed in India">(d) Marketed in India</option>
    <option value="Marketed in USA">(e) Marketed in USA</option>
    <option value="Marketed in EU">(f) Marketed in EU</option>
    <option value="Approved for other Markets">(g) Approved for Other Markets</option>
    <option value="Marketed for other Markets">(h) Marketed for Other Markets</option>
  </select>
  <br><br>
  <label for="marketedOther">
    <input type="radio" id="marketedOther" name="nature" value="Not Applicable" onchange="handleRadioChange()">Not Applicable
  </label>
  <br><hr>
          
                 <!--question 7-->
                 <legend>7. For the Investigational New Drug (IND) </legend><br>
                 
                 
                 <label for="Applicable"><input type="radio" id="Applicable" name="drug1" value="Applicable"> Applicable</label><br>
                 <label for="No Applicable"><input type="radio" id="No Applicable" name="drug1" value="Not Applicable"> Not Applicable</label><br>
            <br>
                 <!--
                 <label for="drug"> Please Mention IND No:</label><br>
                 <textarea id="text" name="drug" cols="150" rows="10"   ></textarea><br><hr>
                 -->
          
          
             
               
               
               
            <td> <label for="drug">Please mention IND No</label></td>
            <td><input type="text" id="drug" name="drug"></td><br>
            <br>
            <hr>
            
          
          
                 <!--question 7.1-->
                 <legend>7.1 Additional Information for IND (<i>tick appropriately</i>) </legend><br>
                 <legend>(a) Investigator's Brochure submited </legend><br>
                <label for="yes"><input type="radio" id="yes" name="informat" value="yes"> Yes</label><br>
                <label for="No"><input type="radio" id="No" name="informat" value="No"> No</label><br>
                
                <label for="Not Applicable"><input type="radio" id="Not Applicable" name="informat" value="Not Applicable"> Not Applicable</label><br>
                 <br>
                <legend>(b) In vitro studies data</legend><br>
                <label for="yes"><input type="radio" id="yes" name="informat1" value="yes"> Yes</label><br>
                <label for="No"><input type="radio" id="No" name="informat1" value="No"> No</label><br>
               
                <label for="Not Applicable"><input type="radio" id="Not Applicable" name="informat1" value="Not Applicable"> Not Applicable</label><br>
                <br>
                <legend>(c) Preclinical Studies done</legend><br>
                <label for="yes"><input type="radio" id="yes" name="informat2" value="yes"> Yes</label><br>
                <label for="No"><input type="radio" id="No" name="informat2" value="No"> No</label><br>
               
                <label for="Not Applicable"><input type="radio" id="Not Applicable" name="informat2" value="Not Applicable"> No Applicable</label><br>
                <br>
                <legend>(d) Phases of Clinical Study</legend><br>
                <label for="phase 1"><input type="radio" id="phase 1" name="doll" value="phase 1"> Phase 1</label><br>
                <label for="phase 2"><input type="radio" id="phase 2" name="doll" value="phase 2"> Phase 2</label><br>
                <label for=" phase 3"><input type="radio" id=" phase 3" name="doll" value=" phase 3">  Phase 3</label><br>
                <label for="phase 4"><input type="radio" id="phase 4" name="doll" value="phase 4">  Phase 4</label><br>
               
                <label for="Not Applicable"><input type="radio" id="Not Applicable" name="doll" value="Not Applicable"> Not Applicable</label><br>
                <br>
                <label for="drug">(e) Are you aware of this study/similar study being done elsewhere?if yes, attach details</label><br>
                <br>
                <textarea id="text" name="earth" cols="150" rows="10"   ></textarea><br>
               
               
                <!--
                <label for=""><input type="text" id="text" name="earth" value=""></label><br><hr>
                <br>
          
                -->
          
                <!--question 8-->
                <hr>
                <br>
                <label for="area">8. <b>Summary of the proposal</b>- Introduction, review of literature, aim(s) & objectives, justification for the study, methodology describing the potential risks & benefits, outcome measures, statistical analysis and whether it is of national significance with rationale (Word limit 500):</label><br>
                <br>
          <textarea id="text" name="area" cols="150" rows="16"   ></textarea><br><hr>
          
            
               <!--9.study participansts-->
               <legend><strong>9. Study Participants </strong><br>
                <br>
               <label for="studypar">9.1 No of subjects</label><br>
                <label for="studypar"><input type="text" id="studypar" name="studypar" value=""></label><br><hr>
                 
                <label for="studypar1">9.2 Duration of study (in Months)</label>
                <label for="studypar1"><input type="text" id="studypar1" name="studypar1" value=""></label><br><hr>
          
                <legend>9.3 Will subjects from both Gender be  recruited </legend>
                <label for="yes"><input type="radio" id="yes" name="recruited" value="yes"> Yes</label><br>
                <label for="No"><input type="radio" id="No" name="recruited" value="No"> No</label><br><hr>
                 
                <legend>9.4 Type of subjects</legend>
                <label for="Volunteers"><input type="radio" id="Volunteers" name="recruited1" value="Volunteers"> Volunteers</label><br>
                <label for="patients"><input type="radio" id="patients" name="recruited1" value="patients"> Patients</label><br><hr>
                
                <legend>9.5 Does study involve vulnerable subjects</legend>
                <label for="yes"><input type="radio" id="yes" name="recruited2" value="yes"> Yes</label><br>
                <label for="No"><input type="radio" id="No" name="recruited2" value="No"> No</label><br><hr>
                 
                
               <!--question 1.5.1-->
          
                <legend>9.6 If Vulnerable subjects are involved, please select the appropriate subject</legend>
                <label for="pregnant woman"><input type="checkbox" id="pregnant woman" name="recruited36" value="pregnant woman">(a) Pregnant women</label><br>
                <label for="children"><input type="checkbox" id="children" name="recruited37" value="children">(b)Children</label><br>
                <label for="ELDERLY"><input type="checkbox" id="ELDERLy" name="recruited38" value="ELDERLY">(c)Elderly</label><br>
                <label for="foetus"><input type="checkbox" id="foetus" name="recruited39" value="foetus">(d)Foetus</label><br>
                <label for="illiterate"><input type="checkbox" id="illiterate" name="recruited40" value="illiterate">(e) Illiterate</label><br>
                <label for="spacially abled"><input type="checkbox" id="spacially abled" name="recruited41" value="spacially abled">(f) Specially Abled</label><br>
                <label for="terminally ill"><input type="checkbox" id="terminally ill" name="recruited42" value="terminally ill">(g) Terminally ill</label><br>
                <label for="seriously ill"><input type="checkbox" id="seriously ill" name="recruited43" value="seriously ill">(h) Seriously ill</label><br>
                <label for="Mentally Challenged"><input type="checkbox" id="Mentally Challenged" name="recruited44" value="Mentally Challenged">(i) Mentally challenged</label><br>
                <label for="recruited45">(j) Others (Specify)</label>
                <input type="text" id="recruited45" name="recruited45" value=""><hr>
                
                <!--question 1.6-->
          
                <legend>9.7 Does the Study involve special subjects</legend>
                <label for="yes"><input type="radio" id="yes" name="recruited4" value="yes"> Yes</label><br>
                <label for="No"><input type="radio" id="No" name="recruited4" value="No"> No</label><br><hr>
                 
                 <!--question 1.6.1-->
                 
                <legend>9.8 If Special subjects are involved, please select the appropriate subject</legend>
                <label for="Captives"><input type="checkbox" id="Captives" name="recruited55" value="woman ">(a) Captives</label><br>
                <label for="Institutionalized"><input type="checkbox" id="Institutionalized" name="recruited56" value="Institutionalized">(b) Institutionalized</label><br>
                <label for="Employees"><input type="checkbox" id="Employees" name="recruited57" value="Employees">(c) Employees</label><br>
                <label for="Student"><input type="checkbox" id="Student" name="recruited58" value="Student">(d) Students</label><br>
                <label for="Nurses and dependent staff"><input type="checkbox" id="Nurses and dependent staff" name="recruited59" value="Nurses and dependent staff">(e) Nurses and Dependent Staff</label><br>
                <label for="Aemed Forces Member"><input type="checkbox" id="Aemed Forces Member" name="recruited60" value="Aemed Forces Member">(f) Armed Forces Members</label><br>
                <label for="Transgender"><input type="checkbox" id="Transgender" name="recruited61" value="Transgender">(g) Transgender</label><br>
                <label for="recruited62">(h) Others (Specify)</label>
                <input type="text" id="recruited62" name="recruited62" value=""><hr>
          
              <!--question 10-->
              <legend><strong>10. Privacy and confidentiality</strong></legend>
                <legend>10.1 Does the data collected from the subjects involved  (<i>tick appropriately</i>)</legend>
                <label for="Direct identifiers"><input type="radio" id="Direct identifiers" name="recruited6" value="Direct identifiers ">(a) Direct Identifiers</label><br>
                <label for="IDirect identifiers/coded"><input type="radio" id="IDirect identifiers/coded" name="recruited6" value="Institutionalized">(b) Indirect Identifiers/coded</label><br>
                <label for="completely anonymized/delinked"><input type="radio" id="completely anonymized/delinked" name="recruited6" value="completely anonymized/delinked">(c) Completely anonymized/delinked</label><br><hr>
          
                <legend>10.2 Will the study staff be trained for the confidential handling of data:</legend>
                <label for="yes"><input type="radio" id="yes" name="recruited7" value="yes"> Yes</label><br>
                <label for="No"><input type="radio" id="No" name="recruited7" value="No"> No</label><br><hr>
                 
             <!--question 11-->
             <legend><strong>11. Information on the use of biological/ hazardous materials </strong></legend><br>
               
             <legend>(a) Does the study involve the use of foetal tissue or abortus
              </legend><br>
             <label for="yes"><input type="radio" id="yes" name="materials1" value="yes"> Yes</label><br>
             <label for="No"><input type="radio" id="No" name="materials1" value="No"> No</label><br>
               <br>
               
             <legend>(b) Does the study involve the use of organs or body fluids</legend><br>
             <label for="yes"><input type="radio" id="yes" name="materials2" value="yes"> Yes</label><br>
             <label for="No"><input type="radio" id="No" name="materials2" value="No"> No</label><br>
              <br>
              
             <legend>(c) If the study involves the use of recombinant/gene therapy, has Department of Biotechnology (DBT) approval for rDNA products been obtained
              </legend><br>
             <label for="yes"><input type="radio" id="yes" name="materials3" value="yes"> Yes</label><br>
             <label for="No"><input type="radio" id="No" name="materials3" value="No"> No</label><br>
              <br>
              
             <legend>(d) Does the study involve the use of pre-existing/stored/leftover samples
              </legend><br>
             <label for="yes"><input type="radio" id="yes" name="materials4" value="yes"> Yes</label><br>
             <label for="No"><input type="radio" id="No" name="materials4" value="No"> No</label><br>
              <br>
             
             <legend>(e) Does the study involve the collection for banking/future research
              </legend><br>
             <label for="yes"><input type="radio" id="yes" name="materials5" value="yes"> Yes</label><br>
             <label for="No"><input type="radio" id="No" name="materials5" value="No"> No</label><br>
              <br>
             
             <legend>(f) If the study involves the use of ionizing radiation/radioisotopes, has Bhaba Atomic Research Centre (BARC) approval for Radioactive Isotopes been obtained?
              </legend><br>
             <label for="yes"><input type="radio" id="yes" name="materials6" value="yes"> Yes</label><br>
             <label for="No"><input type="radio" id="No" name="materials6" value="No"> No</label><br>
                    <br> 
             
             <legend>(g) Does the study involve the use of Infectious/biohazardous specimens</legend><br>
             <label for="yes"><input type="radio" id="yes" name="materials7" value="yes"> Yes</label><br>
             <label for="No"><input type="radio" id="No" name="materials7" value="No"> No</label><br>
              <br>
             
             <legend>(h) If the use of infectious/biohazardous specimens is involved, are the protocols for proper disposal of the material being prepared
              </legend><br>
             <label for="yes"><input type="radio" id="yes" name="materials8" value="yes"> Yes</label><br>
             <label for="No"><input type="radio" id="No" name="materials8" value="No"> No</label><br>
              <br>
          
             <legend>(i) Will any sample collected from the patients be sent abroad?
              </legend><br>
             <label for="yes"><input type="radio" id="yes" name="materials9" value="yes"> Yes</label><br>
             <label for="No"><input type="radio" id="No" name="materials9" value="No"> No</label><br>
              <br>
          
             <legend>(j) If Yes, is the proposal being submitted for clearance from Health Ministry's Screening Committee (HMSC) for international collaboration?</legend><br>
             <label for="yes"><input type="radio" id="yes" name="materials10" value="yes"> Yes</label><br>
             <label for="No"><input type="radio" id="No" name="materials10" value="No"> No</label><br><hr>
              
          <br>
          
             <!--question 12-->
             <legend><strong>12. Informed Consent</strong></legend><br>
             <legend>12.1 Type of consent to be obtained from the subjects (<i>tick appropriately</i>)
            </legend><br>
             <label for=" Written"><input type="radio" id=" Written" name="obtaineds" value=" Written"> Written</label><br>
             <label for="Oral"><input type="radio" id="Oral" name="obtaineds" value="Oral"> Oral</label><br>
             <label for="Audio-Visual"><input type="radio" id="Audio-Visual" name="obtaineds" value="Audio-Visual"> Audio-Visual</label><br><hr>
                
             <legend>12.2 Who will obtain the informed consent (<i>tick appropriately</i>)</legend>
<br>
<label>
    <input type="radio" id="pi_or_copi" name="systemetic1" value="PI or Co-PI" onclick="toggleOtherInput(false)"> PI or Co-PI
</label>
<br>
<label>
    <input type="radio" id="nurses" name="systemetic1" value="Nurses" onclick="toggleOtherInput(false)"> Nurse
</label>
<br>
<label>
    <input type="radio" id="counsellor" name="systemetic1" value="Counsellor" onclick="toggleOtherInput(false)"> Counsellor
</label>
<br>
<label>
    <input type="radio" id="research_staff" name="systemetic1" value="Research Staff" onclick="toggleOtherInput(false)"> Research Staff
</label>
<br>
<label>
    <input type="radio" id="physician" name="systemetic1" value="Physician" onclick="toggleOtherInput(false)"> Physician
</label>
<br>
<label>
    <input type="radio" id="other_radio" name="systemetic1" value="Other" onclick="toggleOtherInput(true)"> Other
</label>
<br>
<!-- Text input initially hidden -->
<input type="text" id="other_text" name="other_text" placeholder="Specify if Other" style="display: none;" oninput="updateOtherValue()">
<br>
<hr>
             
             <!-- <label for="other">Other</label>
             <input type="text" id="other" name="systemetic" value="">
             <br>
             <hr> -->
          
          
          
          
          
          
          
          
          
          
             
            
             <legend>12.3 Will any advertising be done for the recruitment of Subjects?
              </legend><br>
             <label for="yes"><input type="radio" id="yes" name="krishna" value="yes"> Yes</label><br>
             <label for="No"><input type="radio" id="No" name="krishna" value="No"> No</label><br><hr>
              
          
             <label for="radthy"><input type="checkbox" id="radthy" name="radthy" value="yes">12.4  If yes, then attach the sample of the promotional material with the proposal
             </label><br><hr>
          
          
             <!--question 13-->
             <legend><strong>13. Risks & Benefits</strong><br>
              <br>
              <legend>13.1 Is the risk reasonable compared to the anticipated benefits to subjects/community/country?
          
                </legend><br>
               <label for="yes"><input type="radio" id="yes" name="technology1" value="yes"> Yes</label><br>
               <label for="No"><input type="radio" id="No" name="technology1" value="No"> No</label><br><hr>
                
                 
               <legend>13.2 Is there physical/social/psychological risk/discomfort?
                </legend><br>
               <label for="yes"><input type="radio" id="yes" name="technology2" value="yes"> Yes</label><br>
               <label for="No"><input type="radio" id="No" name="technology2" value="No"> No</label><br><hr>
                
                
               <legend>13.3 Is there any risk for the subjects
                </legend><br>
               <label for="yes"><input type="radio" id="yes" name="technology3" value="yes"> Yes</label><br>
               <label for="No"><input type="radio" id="No" name="technology3" value="No"> No</label><br><hr>
          
          
               <label for="risk321">13.3.1 If yes, please explain the risk</label><br>
               <br>
               <textarea id="text" name="risk321" cols="150" rows="10"   ></textarea><br><hr>
               
          
               <legend>13.4 Are there any benefits for the subjects
                </legend><br>
               <label for="yes"><input type="radio" id="yes" name="benfits890" value="yes"> Yes</label><br>
               <label for="No"><input type="radio" id="No" name="benfits890" value="No"> No</label><br><hr>
          
          
               <label for="benfits900">13.4.1 If yes, please explain the benefits</label><br>
               <br>
               <textarea id="text" name="benfits900" cols="150" rows="10" ></textarea><br><hr>
          
             <!--question 14 -->
             <legend><strong>14. Information regarding data monitoring</strong><br>
              <br>
          
              <legend>(a) Is there a data & safety monitoring committee/Board (DSMB)?</legend><br>
               <label for="yes"><input type="radio" id="yes" name="regardings" value="yes"> Yes</label><br>
               <label for="No"><input type="radio" id="No" name="regardings" value="No"> No</label><br> 
               <br>  
               <legend>(b) Is there a plan for reporting adverse events?
            </legend><br>
               <label for="yes"><input type="radio" id="yes" name="regardings1" value="yes"> Yes</label><br>
               <label for="No"><input type="radio" id="No" name="regardings1" value="No"> No</label><br>
               <br>
               <legend>(c) Is there a plan for interim analysis of data?
                </legend><br>
               <label for="yes"><input type="radio" id="yes" name="regardings2" value="yes"> Yes</label><br>
               <label for="No"><input type="radio" id="No" name="regardings2" value="No"> No</label><br>
               <br>
               <legend>(d) Are there plans for storage and maintenance of all trial databases?
               </legend><br>
               <label for="yes"><input type="radio" id="yes" name="regardings3" value="yes"> Yes</label><br>
               <label for="No"><input type="radio" id="No" name="regardings3" value="No"> No</label><br>
               <br>
              
               <legend>(e) Is there compensation for participation? If yes,
                </legend><br>
               <label for="Monetary"><input type="radio" id="Monetary" name="regardings41" value="Monetary"> Monetary </label><br>
               <label for="In Kind"><input type="radio" id="In Kind" name="regardings41" value="In Kind"> In Kind</label><br>
               
          
          
          
              <label for="regardings4">Specify amount and type</label>
              <input type="text" id="regardings4" name="regardings4" value="">
              <br>
              <br>
          
               <legend>(f) Is there compensation for injury?
                </legend><br>
            <label for="By Sponsor"><input type="radio" id="By Sponsor" name="regardings5" value="By Sponsor"> By Sponsor</label><br>
            <label for="By Investigator"><input type="radio" id="By Investigator" name="regardings5" value="By Investigator"> By Investigator</label><br>
            <label for="By Insurance"><input type="radio" id="By Insurance" name="regardings5" value="By Insurance"> By Insurance</label><br>
               <label for="by any other company"><input type="radio" id="by any other company" name="regardings5" value="by any other company"> By any other company</label><br><hr>
            <br>
                   <!--question 15-->
                   <legend><strong>15. Declaration on Conflict  of Interest</strong></legend><br>
                   <legend>Do you have conflict of interest? (financial/non financial)
                    </legend><br>
                    
                <label for="yes"><input type="radio" id="yes" name="interest" value="yes"> Yes</label><br>
                   <label for="No"><input type="radio" id="No" name="interest" value="No"> No</label><br>
                    <br>
          
                   <label for="interest1">If Yes, specify:</label><br>
                   <br>
                   <textarea id="text" name="interest1" cols="150" rows="10"   maxlength="50"></textarea><br>
                  
                   <br>
                   <label for="interest2"> Conflict of interest for any other investigator(s) (if yes, please explain in brief)
                    </label><br>
                    <br>
                   <textarea id="text" name="interest2" cols="150" rows="10"   maxlength="50"></textarea><br><hr>
              
               <!--quetion 16-->
               <label for="engilshs"><input type="checkbox" id="engilshs" name="engilshs" value="yes">16.  Please attach the informed consent form in English </label><br><hr>
          
               <!--question 17-->
               <label for="vtreac"><input type="checkbox" id="vtreac" name="vtreac" value="yes">17. Please attach the informed consent form in regional language (if any) </label><br>
          
               
             
          
               <br>
                
                <label for="dado1">Signature of the  PI with Date </label>
                <input type="text" id="dado1" name="dado1" value=""><hr>
               
                  
                <label for="dado">Signature of the Head of Institution with Date and Stamp </label>
                <input type="text" id="dado" name="dado" value=""><hr>
          
          
          
          
              
          
                   
          
              </fieldset>
              
          
             <input class="submit" type="submit" value="Submit">
            
           




        </form>









    <script src="script.js"></script>
</body>
</html>