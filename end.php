<?php
require_once('tcpdf/tcpdf.php'); // Adjust the path as needed



// Retrieve form data

//table 1

$ftata= isset($_POST['ftata']) ? $_POST['ftata'] : 'N/A';
$smcopy= isset($_POST['smcopy']) ? $_POST['smcopy'] : 'N/A';
$mkjco= isset($_POST['mkjco']) ? $_POST['mkjco'] : 'N/A';
$qualification12=isset($_POST['qualification12']) ? $_POST['qualification12'] : 'N/A';
$afd1=isset($_POST['afd1']) ? $_POST['afd1'] : 'N/A';
$tel1=isset($_POST['tel1']) ? $_POST['tel1'] : 'N/A';

$email12=isset($_POST['email12']) ? $_POST['email12'] : 'N/A';
$tblenum34=isset($_POST['tblenum34']) ? $_POST['tblenum34'] : 'N/A';
$sgtrpp1=isset($_POST['sgtrpp1']) ? $_POST['sgtrpp1'] : 'N/A';


//table2
$rapido=isset($_POST['rapido']) ? $_POST['rapido'] : 'N/A';
$rapido21=isset($_POST['rapido21']) ? $_POST['rapido21'] : 'N/A';
$rapido89=isset($_POST['rapido89']) ? $_POST['rapido89'] : 'N/A';
$qualification210=isset($_POST['qualification210']) ? $_POST['qualification210'] : 'N/A';
$afd2=isset($_POST['afd2']) ? $_POST['afd2'] : 'N/A';
$tel2=isset($_POST['tel2']) ? $_POST['tel2'] : 'N/A';

$email1=isset($_POST['email1']) ? $_POST['email1'] : 'N/A';
$mosam45=isset($_POST['mosam45']) ? $_POST['mosam45'] : 'N/A';
$sgtrpp2=isset($_POST['sgtrpp2']) ? $_POST['sgtrpp2'] : 'N/A';


//table3
$trrrc=isset($_POST['trrrc']) ? $_POST['trrrc'] : 'N/A';
$trrrc1=isset($_POST['trrrc1']) ? $_POST['trrrc1'] : 'N/A';
$trrrc2=isset($_POST['trrrc2']) ? $_POST['trrrc2'] : 'N/A';
$qual=isset($_POST['qual']) ? $_POST['qual'] : 'N/A';
$afd3=isset($_POST['afd3']) ? $_POST['afd3'] : 'N/A';
$tel3=isset($_POST['tel3']) ? $_POST['tel3'] : 'N/A';

$email2=isset($_POST['email2']) ? $_POST['email2'] : 'N/A';
$fanho=isset($_POST['fanho']) ? $_POST['fanho'] : 'N/A';
$sgtrpp3=isset($_POST['sgtrpp3']) ? $_POST['sgtrpp3'] : 'N/A';




//table4
$ctreb=isset($_POST['ctreb']) ? $_POST['ctreb'] : 'N/A';
$ctreb1=isset($_POST['ctreb1']) ? $_POST['ctreb1'] : 'N/A';
$ctreb2=isset($_POST['ctreb2']) ? $_POST['ctreb2'] : 'N/A';
$qfivaty=isset($_POST['qfivaty']) ? $_POST['qfivaty'] : 'N/A';
$afd4=isset($_POST['afd4']) ? $_POST['afd4'] : 'N/A';
$tel4=isset($_POST['tel4']) ? $_POST['tel4'] : 'N/A';

$eghigy=isset($_POST['eghigy']) ? $_POST['eghigy'] : 'N/A';
$pioyht=isset($_POST['pioyht']) ? $_POST['pioyht'] : 'N/A';
$sgtrpp4=isset($_POST['sgtrpp4']) ? $_POST['sgtrpp4'] : 'N/A';



//tabel5
$krmo=isset($_POST['krmo']) ? $_POST['krmo'] : 'N/A';
$krmo1=isset($_POST['krmo1']) ? $_POST['krmo1'] : 'N/A';
$krmo2=isset($_POST['krmo2']) ? $_POST['krmo2'] : 'N/A';
$slhjsh=isset($_POST['slhjsh']) ? $_POST['slhjsh'] : 'N/A';
$afd5=isset($_POST['afd5']) ? $_POST['afd5'] : 'N/A';
$tel5=isset($_POST['tel5']) ? $_POST['tel5'] : 'N/A';

$bjrang=isset($_POST['bjrang']) ? $_POST['bjrang'] : 'N/A';
$pgle=isset($_POST['pgle']) ? $_POST['pgle'] : 'N/A';

$sgtrpp5=isset($_POST['sgtrpp5']) ? $_POST['sgtrpp5'] : 'N/A';

//pdf file upload






















$customer = isset($_POST['customer']) ? $_POST['customer'] : 'N/A';
$name = isset($_POST['name']) ? $_POST['name'] : 'N/A';
$name1 = isset($_POST['name1']) ? $_POST['name1'] : 'N/A';
$customer1=isset($_POST['customer1']) ? $_POST['customer1'] : 'N/A';
$customer2=isset($_POST['customer2']) ? $_POST['customer2'] : 'N/A';
$name2=isset($_POST['name2']) ? $_POST['name2'] : 'N/A';
$customer3=isset($_POST['customer3']) ? $_POST['customer3'] : 'N/A';




$trialType = isset($_POST['trialType']) ? $_POST['trialType'] : 'N/A';
$customer4=  isset($_POST['customer4']) ? $_POST['customer4'] : 'N/A';


$nature=isset($_POST['nature']) ? $_POST['nature'] : 'N/A';
$luthajd=isset($_POST['luthajd']) ? $_POST['luthajd'] : 'N/A';

$drug1=isset($_POST['drug1']) ? $_POST['drug1'] : 'N/A';
$drug=isset($_POST['drug']) ? $_POST['drug'] : 'N/A';
$informat=isset($_POST['informat']) ? $_POST['informat'] : 'N/A';
$informat1=isset($_POST['informat1']) ? $_POST['informat1'] : 'N/A';
$informat2=isset($_POST['informat2']) ? $_POST['informat2'] : 'N/A';
$doll=isset($_POST['doll']) ? $_POST['doll'] : 'N/A';
$earth=isset($_POST['earth']) ? $_POST['earth'] : 'N/A';
$area=isset($_POST['area']) ? $_POST['area'] : 'N/A';
$studypar=isset($_POST['studypar']) ? $_POST['studypar'] : 'N/A';
$studypar1=isset($_POST['studypar1']) ? $_POST['studypar1'] : 'N/A';
$recruited=isset($_POST['recruited']) ? $_POST['recruited'] : 'N/A';
$recruited1=isset($_POST['recruited1']) ? $_POST['recruited1'] : 'N/A';
$recruited2=isset($_POST['recruited2']) ? $_POST['recruited2'] : 'N/A';

$recruited36=isset($_POST['recruited36']) ? $_POST['recruited36'] : 'N/A';
$recruited37=isset($_POST['recruited37']) ? $_POST['recruited37'] : 'N/A';
$recruited38=isset($_POST['recruited38']) ? $_POST['recruited38'] : 'N/A';
$recruited39=isset($_POST['recruited39']) ? $_POST['recruited39'] : 'N/A';
$recruited40=isset($_POST['recruited40']) ? $_POST['recruited40'] : 'N/A';
$recruited41=isset($_POST['recruited41']) ? $_POST['recruited41'] : 'N/A';
$recruited42=isset($_POST['recruited42']) ? $_POST['recruited42'] : 'N/A';
$recruited43=isset($_POST['recruited43']) ? $_POST['recruited43'] : 'N/A';
$recruited44=isset($_POST['recruited44']) ? $_POST['recruited44'] : 'N/A';
$recruited45=isset($_POST['recruited45']) ? $_POST['recruited45'] : 'N/A';



$recruited4=isset($_POST['recruited4']) ? $_POST['recruited4'] : 'N/A';



$recruited55=isset($_POST['recruited55']) ? $_POST['recruited55'] : 'N/A';
$recruited56=isset($_POST['recruited56']) ? $_POST['recruited56'] : 'N/A';
$recruited57=isset($_POST['recruited57']) ? $_POST['recruited57'] : 'N/A';
$recruited58=isset($_POST['recruited58']) ? $_POST['recruited58'] : 'N/A';
$recruited59=isset($_POST['recruited59']) ? $_POST['recruited59'] : 'N/A';
$recruited60=isset($_POST['recruited60']) ? $_POST['recruited60'] : 'N/A';
$recruited61=isset($_POST['recruited61']) ? $_POST['recruited61'] : 'N/A';
$recruited62=isset($_POST['recruited62']) ? $_POST['recruited62'] : 'N/A';














$recruited6=isset($_POST['recruited6']) ? $_POST['recruited6'] : 'N/A';
$recruited7=isset($_POST['recruited7']) ? $_POST['recruited7'] : 'N/A';
$materials1=isset($_POST['materials1']) ? $_POST['materials1'] : 'N/A';
$materials2=isset($_POST['materials2']) ? $_POST['materials2'] : 'N/A';
$materials3=isset($_POST['materials3']) ? $_POST['materials3'] : 'N/A';
$materials4=isset($_POST['materials4']) ? $_POST['materials4'] : 'N/A';
$materials5=isset($_POST['materials5']) ? $_POST['materials5'] : 'N/A';
$materials6=isset($_POST['materials6']) ? $_POST['materials6'] : 'N/A';
$materials7=isset($_POST['materials7']) ? $_POST['materials7'] : 'N/A';
$materials8=isset($_POST['materials8']) ? $_POST['materials8'] : 'N/A';
$materials9=isset($_POST['materials9']) ? $_POST['materials9'] : 'N/A';
$materials10=isset($_POST['materials10']) ? $_POST['materials10'] : 'N/A';
$obtaineds=isset($_POST['obtaineds']) ? $_POST['obtaineds'] : 'N/A';

$systemetic1=isset($_POST['systemetic1']) ? $_POST['systemetic1'] : 'N/A';
// $systemetic= isset($_POST['systemetic']) ? $_POST['systemetic'] : 'N/A';
$krishna= isset($_POST['krishna']) ? $_POST['krishna'] : 'N/A';
$radthy= isset($_POST['radthy']) ? $_POST['radthy'] : 'N/A';
$technology1 = isset($_POST['technology1']) ? $_POST['technology1'] : 'N/A';
$technology2 = isset($_POST['technology2']) ? $_POST['technology2'] : 'N/A';
$technology3 = isset($_POST['technology3']) ? $_POST['technology3'] : 'N/A';
$risk321=isset($_POST['risk321']) ? $_POST['risk321'] : 'N/A';
$benfits890=isset($_POST['benfits890']) ? $_POST['benfits890'] : 'N/A';
$benfits900=isset($_POST['benfits900']) ? $_POST['benfits900'] : 'N/A';
$regardings=isset($_POST['regardings']) ? $_POST['regardings'] : 'N/A';
$regardings1=isset($_POST['regardings1']) ? $_POST['regardings1'] : 'N/A';
$regardings2=isset($_POST['regardings2']) ? $_POST['regardings2'] : 'N/A';
$regardings3=isset($_POST['regardings3']) ? $_POST['regardings3'] : 'N/A';
$regardings41=isset($_POST['regardings41']) ? $_POST['regardings41'] : 'N/A';
$regardings4=isset($_POST['regardings4']) ? $_POST['regardings4'] : 'N/A';
$regardings5=isset($_POST['regardings5']) ? $_POST['regardings5'] : 'N/A';
$interest=isset($_POST['interest']) ? $_POST['interest'] : 'N/A';
$interest1=isset($_POST['interest1']) ? $_POST['interest1'] : 'N/A';
$interest2=isset($_POST['interest2']) ? $_POST['interest2'] : 'N/A';
$engilshs=isset($_POST['engilshs']) ? $_POST['engilshs'] : 'N/A';
$dado1=isset($_POST['dado1']) ? $_POST['dado1'] : 'N/A';
$dado=isset($_POST['dado']) ? $_POST['dado'] : 'N/A';



$textnmo=isset($_POST['textnmo']) ? $_POST['textnmo'] : 'N/A';
$moic=isset($_POST['moic']) ? $_POST['moic'] : 'N/A';

$vtreac=isset($_POST['vtreac']) ? $_POST['vtreac'] : 'N/A';





$zinda=isset($_POST['zinda']) ? $_POST['zinda'] : 'N/A'; 

if ($zinda !== 'N/A') {
    $zinda = str_replace('T', ' ', $zinda);
}

$question1=isset($_POST['question1']) ? $_POST['question1'] : 'N/A';
$question2=isset($_POST['question2']) ? $_POST['question2'] : 'N/A';
$question3=isset($_POST['question3']) ? $_POST['question3'] : 'N/A';
$question4=isset($_POST['question4']) ? $_POST['question4'] : 'N/A';
$question5=isset($_POST['question5']) ? $_POST['question5'] : 'N/A';
$question6=isset($_POST['question6']) ? $_POST['question6'] : 'N/A';
$question7=isset($_POST['question7']) ? $_POST['question7'] : 'N/A';
$question8=isset($_POST['question8']) ? $_POST['question8'] : 'N/A';
$question9=isset($_POST['question9']) ? $_POST['question9'] : 'N/A';
$question10=isset($_POST['question10']) ? $_POST['question10'] : 'N/A';
$question11=isset($_POST['question11']) ? $_POST['question11'] : 'N/A';
$question12=isset($_POST['question12']) ? $_POST['question12'] : 'N/A';
$question13=isset($_POST['question13']) ? $_POST['question13'] : 'N/A';
$question14=isset($_POST['question14']) ? $_POST['question14'] : 'N/A';
$question15=isset($_POST['question15']) ? $_POST['question15'] : 'N/A';
$question16=isset($_POST['question16']) ? $_POST['question16'] : 'N/A';
$question17=isset($_POST['question17']) ? $_POST['question17'] : 'N/A';
$question18=isset($_POST['question18']) ? $_POST['question18'] : 'N/A';

$question191=isset($_POST['question191']) ? $_POST['question191'] : 'N/A';

$question19=isset($_POST['question19']) ? $_POST['question19'] : 'N/A';
$question20=isset($_POST['question20']) ? $_POST['question20'] : 'N/A';
$question21=isset($_POST['question21']) ? $_POST['question21'] : 'N/A';
$question22=isset($_POST['question22']) ? $_POST['question22'] : 'N/A';
$question23=isset($_POST['question23']) ? $_POST['question23'] : 'N/A';
$question24=isset($_POST['question24']) ? $_POST['question24'] : 'N/A';
$question25=isset($_POST['question25']) ? $_POST['question25'] : 'N/A';





// Create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// Set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Your Name');
$pdf->SetTitle('Form Submission');
$pdf->SetSubject('Form Submission Details');

// Add a page
$pdf->AddPage();


// Set some content to print
$html = <<<EOD




<style>






table {
    border-collapse: collapse;
    width: 100%;
    page-break-inside: auto;
  }
  th, td {
    border: 1px solid black;
    padding: 8px;
    text-align: left;
  }
  th {
    background-color: #f2f2f2;
  }
  .vertical-line {
    border-left: 1px solid black;
  }
  .col2 {
    width: 50%;
  }
  .col1{
    width: 6%;
  }
  .question-col {
    width: 45%;
  }
   

  .gray-text {
    color: gray;
    text-align: center;
    margin: 20px; /* Adjust margin as needed */
    padding: 10px; /* Adjust padding as needed */
}

tr{
   page-break-inside: avoid;
   page-break-after: auto;

}

  
  </style>

<div>
<br></br>
<br></br>
<img src="./iihmr.jpeg" alt='image'>
<span style="color: gray;  text-align: center;"><h3>Annexure-4 Checklist for PI to Submit for Initial Review of Research Proposal</h3></span>
<h3>Check list for Initial Review Submission Form for Research Proposal</h3>
<p><strong>Serial No of IRB application (for office use only):</strong> $moic</p>

<p><strong>Date of Submission: </strong> $zinda </strong></p>

</div>






<table  border="1" cellpadding="4"; >
  
    <tr>
      <th class="col1"><strong>Sr No</strong></th>
      <th class="question-col"><strong>Type of Document</strong> </th>
      <th class="col2"><strong>Check</strong></th>
    </tr>

  <tbody>
    <tr>
      <td class="col1">1</td>
      <td class="question-col"><strong>Title of the research proposal</strong>:</td>
      <td>$question1</td>
    </tr>
    <tr>
      <td class="col1">2</td>
      <td class="question-col">Name of the Principal Investigator with qualification and designation</td>
      <td>$question2</td>
    </tr>
    <tr>
      <td class="col1">3</td>
      <td class="question-col">Name of the Co-Investigator(s) with qualifications and designation</td>
      <td>$question3</td>
    </tr>
    <tr>
      <td class="col1">4</td>
      <td class="question-col">Name of the Institute/Organization/Hospital where research will be conducted</td>
      <td>$question4</td>
    </tr>
 
    <tr>
    <td class="col1">5</td>
    <td class="question-col">Forwarding letter from the Head of the Department/ Institution/ Guide.</td>
    <td>$question5</td>
  </tr>
  
 
  
  <tr>
  <td>6.</td>
    <td class="question-col">Protocol of the proposed research: (includes and is not limited to) clear research objectives, the rationale for undertaking the investigations in human participants in the light of the existing knowledge, inclusion, and exclusion criteria for entry of participants. The Precise description of the methodology of the proposed research, including sample size, type of study design (observational, experimental, pilot, randomized, blinded etc.), intended intervention, dosages of drugs, route of administration, duration of treatment and details of invasive procedures if any, Plan to withdraw or withhold standard therapies during research.
    Plan for statistical analysis of the study. Ethical issues in the study and plans to address these issues.</td>
    <td>$question6</td>
  </tr>
  
  
  <tr>
     <td>7</td>
    <td  class="question-col" >Proposal should be submitted with all relevant enclosures like pro forma, case report forms, questionnaires, follow-up cards, participant recruitment procedures and brochures, if any, Informed consent process, including patient information sheet and informed consent form in English and local language(s). Investigator's brochure for trial on drugs/devices/vaccines/herbal remedies and statement of relevant regulatory clearances.</td>
    <td>$question7</td>
  </tr>
  <tr>
    <td class="col1">8</td>
    <td class="question-col">Source of funding and financial requirements for the project.</td>
    <td>$question8</td>
  </tr>
  <tr>
    <td class="col1">9</td>
    <td class="question-col">For any drug/device trial, all relevant pre-clinical animal data and clinical trial data from other centers within the country/other countries, if available.</td>
    <td>$question9</td>
  </tr>
  <tr>
    <td class="col1">10</td>
    <td class="question-col">Usefulness of the project / trial.</td>
    <td>$question10</td>
  </tr>
  <tr>
    <td class="col1">11</td>
    <td class="question-col">Expected 'benefits' to volunteers/ community. 'Benefits' to other categories if any.</td>
    <td>$question11</td>
  </tr>
  <tr>
    <td  class="col1">12</td>
    <td class="question-col">Explain all anticipated 'risks' (adverse events, injury, discomfort) of the project. Efforts taken to minimize the risks. Proposed compensation and reimbursement of incidental expenses and management of research related and unrelated injury/illness during and after research period. Description of the arrangements for indemnity, if applicable in study-related injuries and description of the arrangements for insurance coverage for research participants, if applicable.</td>
    <td>$question12</td>
  </tr>
  <tr>
    <td class="col1">13</td>
    <td class="question-col">Agreement to report all Serious Adverse Events (SAE) to IHMRB-IRB.</td>
    <td>$question13</td>
  </tr>
  <tr>
    <td class="col1">14</td>
    <td class="question-col">An account of storage and maintenance of all data collected during the trial.</td>
    <td>$question14</td>
  </tr>
  <tr>
    <td class="col1">15</td>
    <td class="question-col">Research proposals approval by scientific advisory committee</td>
    <td>$question15</td>
  </tr>
  
  <tr>
    <td class="col1">16</td>
    <td class="question-col">For international collaborative, study details about foreign collaborators and documents for review of Health Ministry's Screening Committee (HMSC) or appropriate Committees under other agencies/authority like Drug Controller General of India (DCGI)</td>
    <td>$question16</td>
  </tr>

  <tr>
    <td class="col1">17</td>
    <td class="question-col">For exchange of biological material in international collaborative study a MoU/ Material</td>
    <td>$question17</td>
  </tr>
  <tr>
    <td class="col1">18</td>
    <td class="question-col">Transfer Agreement between the collaborating partners.</td>
    <td>$question18</td>
  </tr>
  <tr>
    <td class="col1">19</td>
    <td class="question-col">Statement of conflicts of interest, if any.</td>
    <td>$question19</td>
  </tr>
  <tr>
    <td class="col1">20</td>
    <td class="question-col">Agreement to comply with the relevant national and applicable international guidelines, Good Clinical Practices (GCP) protocols for clinical trials.</td>
    <td>$question20</td>
  </tr>

<tr>
      <td class="col1">21</td>
      <td class="question-col">All significant previous decisions (e.g., those leading to a negative decision or modified protocol) by other ECs or regulatory authorities for the proposed study (whether in the same location or elsewhere) and an indication of the modification(s) to the protocol made on that account.</td>
      <td>$question21</td>
    </tr>
    <tr>
      <td class="col1">22</td>
      <td class="question-col">A statement on, probable ethical issues and steps taken to tackle the same such as justification for washout of standard drug, or the use of placebo control.</td>
      <td>$question22</td>
    </tr>
    <tr>
      <td class="col1">23</td>
      <td class="question-col">Curriculum vitae of all the investigators with relevant publications in last five years.</td>
      <td>$question23</td>
    </tr>
    <tr>
      <td class="col1">24</td>
      <td class="question-col">Plans for publication of results /positive or negative/ while maintaining the privacy and confidentiality of the study participants.</td>
      <td>$question24</td>
    </tr>
    <tr>
      <td class="col1">25</td>
      <td class="question-col">Any other information relevant to the study.</td>
      <td>$question25</td>
    </tr>

</tbody>
</table>
<h4>Note:The above information and enclosures should be furnished wherever necessary depending upon the nature of the study proposal</h4>
<br>
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
<br>
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
<br>
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
<br>
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;

<div style="page-break-before: always;">
    <img src="./iihmr.jpeg" alt="IIHMR Bangalore Logo">
    <h3 style="text-align: center; color: gray;">Annexure-5 IRB Submission Form</h3>
</div>

<h2 style="text-align: center;">Form to be filled by the Principal Investigator (PI)</h2>
<h3 style="text-align: center;">Declaration by the PI Team</h3>
<table border="1" cellpadding="4">
    <tr>
        <td><strong>Name</strong></td>
        <td>$ftata</td>
    </tr>
    <tr>
        <td><strong>Designation</strong></td>
        <td>$smcopy</td>
    </tr>
    <tr>
        <td><strong>Department</strong></td>
        <td>$mkjco</td>
    </tr>
    <tr>
        <td><strong>Qualifications</strong></td>
        <td>$qualification12</td>
    </tr>
    <tr>
        <td><strong>Address</strong></td>
        <td>$afd1</td>
    </tr>
    <tr>
        <td><strong>Telephone number</strong></td>
        <td>$tel1</td>
    </tr>
    <tr>
        <td><strong>Email</strong></td>
        <td>$email12</td>
    </tr>
    <tr>
        <td><strong>No of projects already with Investigator</strong></td>
        <td>$tblenum34</td>
    </tr>
    <tr>
        <td><strong>Signature</strong></td>
        <td>$sgtrpp1</td>
    </tr>
</table>
<hr>


<h3>Co.PI/Collaborators</h3>
<table border="1" cellpadding="4">
    <tr>
        <td><strong>Name</strong></td>
        <td>$rapido</td>
    </tr>
    <tr>
        <td><strong>Designation</strong></td>
        <td>$rapido21</td>
    </tr>
    <tr>
        <td><strong>Department</strong></td>
        <td>$rapido89</td>
    </tr>
    <tr>
        <td><strong>Qualifications</strong></td>
        <td>$qualification210</td>
    </tr>
    <tr>
        <td><strong>Address</strong></td>
        <td>$afd2</td>
    </tr>
    <tr>
        <td><strong>Telephone number</strong></td>
        <td>$tel2</td>
    </tr>
    <tr>
        <td><strong>Email</strong></td>
        <td>$email1</td>
    </tr>
    <tr>
        <td><strong>No of projects already with Investigator</strong></td>
        <td>$mosam45</td>
    </tr>
    <tr>
        <td><strong>Signature</strong></td>
        <td>$sgtrpp2</td>
    </tr>
</table>
<hr>













<hr>
<h3>Co.PI/Collaborators:</h3>
<table border="1" cellpadding="4">
    <tr>
        <td><strong>Name</strong></td>
        <td>$trrrc</td>
    </tr>
    <tr>
        <td><strong>Designation</strong></td>
        <td>$trrrc1</td>
    </tr>
    <tr>
        <td><strong>Department</strong></td>
        <td>$trrrc2</td>
    </tr>
    <tr>
        <td><strong>Qualifications</strong></td>
        <td>$qual</td>
    </tr>
    <tr>
        <td><strong>Address</strong></td>
        <td>$afd3</td>
    </tr>
    <tr>
        <td><strong>Telephone number</strong></td>
        <td>$tel3</td>
    </tr>
    <tr>
        <td><strong>Email</strong></td>
        <td>$email2</td>
    </tr>
    <tr>
        <td><strong>No of projects already with Investigator</strong></td>
        <td>$fanho</td>
    </tr>
    <tr>
        <td><strong>Signature</strong></td>
        <td>$sgtrpp3</td>
    </tr>
</table>
<hr>


<hr>
<h3>Co.PI/Collaborators:</h3>
<table border="1" cellpadding="6">
    <tr>
        <td><strong>Name</strong></td>
        <td>$ctreb</td>
    </tr>
    <tr>
        <td><strong>Designation</strong></td>
        <td>$ctreb1</td>
    </tr>
    <tr>
        <td><strong>Department</strong></td>
        <td>$ctreb2</td>
    </tr>
    <tr>
        <td><strong>Qualifications</strong></td>
        <td>$qfivaty</td>
    </tr>
    <tr>
        <td><strong>Address</strong></td>
        <td>$afd4</td>
    </tr>
    <tr>
        <td><strong>Telephone number</strong></td>
        <td>$tel4</td>
    </tr>
    <tr>
        <td><strong>Email</strong></td>
        <td>$eghigy</td>
    </tr>
    <tr>
        <td><strong>No of projects already with Investigator</strong></td>
        <td>$pioyht</td>
    </tr>
    <tr>
        <td><strong>Signature</strong></td>
        <td>$sgtrpp4</td>
    </tr>
</table>
<hr>


<hr>
<h3>Co.PI/Collaborators:</h3>
<table border="1" cellpadding="4">
    <tr>
        <td><strong>Name</strong></td>
        <td>$krmo</td>
    </tr>
    <tr>
        <td><strong>Designation</strong></td>
        <td>$krmo1</td>
    </tr>
    <tr>
        <td><strong>Department</strong></td>
        <td>$krmo2</td>
    </tr>
    <tr>
        <td><strong>Qualifications</strong></td>
        <td>$slhjsh</td>
    </tr>
    <tr>
        <td><strong>Address</strong></td>
        <td>$afd5</td>
    </tr>
    <tr>
        <td><strong>Telephone number</strong></td>
        <td>$tel5</td>
    </tr>
    <tr>
        <td><strong>Email</strong></td>
        <td>$bjrang</td>
    </tr>
    <tr>
        <td><strong>No of projects already with Investigator</strong></td>
        <td>$pgle</td>
    </tr>
    <tr>
        <td><strong>Signature</strong></td>
        <td>$sgtrpp5</td>
    </tr>
</table>
 
<h4>Please attach detailed Curriculum Vitae of all Investigators (with subject specific publications limited to previous 5 years)</h3>
<table border="1" cellpadding="4";>
    <tr>
        <td><strong>1. Funding Agency or Sponsor Information</strong></td>
        <td>$customer</td>
    </tr>
    <tr>
        <td><strong>1.1 Name and Contact Details of the sponsor/ funding agency</strong></td>
        <td>$name</td>
    </tr>
    <tr>
        <td><strong>1.2 Approximate Budget(in rupees)</strong></td>
        <td>$name1</td>
    </tr>
    <tr>
        <td><strong>2. Type of Study design</strong> </td>
        <td>$customer1</td>
    </tr>
    <tr>
        <td><strong>3. Type of Centers</strong> </td>
        <td>$customer2</td>
    </tr>
    <tr>
        <td><strong>4. Study Site/s</strong> </td>
        <td>$name2</td>
    </tr>
    <tr>
        <td><strong>5. Type of Review</strong> </td>
        <td>$customer3</td>
    </tr>
    <tr>
        <td><strong>6. Further information for clinical trials</strong> </td>
    </tr>
    <tr>
        <td>Applicable</td>
        <td>$trialType</td>
    </tr>
    <tr>
        <td>Not Applicable</td>
        <td>$customer4</td>
    </tr>





    <tr>
        <td  colspan="2"><strong>6.1 Is the intervention already approved or marketed</strong> </td>
    </tr>
        <tr>
        <td>Applicable</td>
        <td>$luthajd</td>
    </tr>
    <tr>
       <td>Not Applicable</td>
        <td>$nature</td>
    </tr>





    
    <tr>
        <td>7. For the Investigational New Drug (IND)</td>
        <td>$drug1 $drug</td>
    </tr>
    <tr>
        <td  colspan="2">7.1 Additional Information for IND</td>
       
    </tr>
    <tr>
        <td>(a) Investigator's Brochure submitted</td>
        <td>$informat</td>
    </tr>

    <tr>
    <td>(b) In vitro studies data</td>
    <td>$informat1</td>
</tr>
    <tr>
        <td>(c) Preclinical Studies done</td>
        <td>$informat2</td>
    </tr>
    <tr>
        <td>(d) Phases of Clinical Study</td>
        <td>$doll</td>
    </tr>
    <tr>
        <td>(e) Are You Aware of this study/ similar study being done elsewhere? If yes, attach details</td>
        <td>$earth</td>
    </tr>

   
<tr>
<td><strong>8. Summary of the proposal</strong>- Introduction, review of literature, aim(s) & objectives, justification for the study, methodology describing the potential risks & benefits, outcome measures, statistical analysis and whether it is of national significance with rationale (Word limit 500):</td>
<td>$area</td>
</tr>
<tr>
<td colspan="2"><h4>9. Study Participants</h4></td>

</tr>





<tr>
<td>9.1 No of subjects</td>
<td>$studypar</td>
</tr>
<tr>
<td>9.2 Duration of study (in Months)</td>
<td>$studypar1</td>
</tr>
<tr>
<td>9.3 Will subjects from both Gender be recruited</td>
<td>$recruited</td>
</tr>
<tr>
<td>9.4 Type of subjects</td>
<td>$recruited1</td>
</tr>


<tr>
<td>9.5 Does Study involve vulnerable subjects</td>
<td>$recruited2</td>
</tr>


<tr>
<td>9.6 If Vulnerable subjects are involved, please select the appropriate subject</td>
<td>$recruited36  $recruited37 $recruited38  $recruited39  $recruited40  $recruited41  $recruited42  $recruited43   $recruited44  $recruited45</td>
</tr>




<tr>
<td>9.7  Does the Study involve special subjects</td>
<td>$recruited2</td>
</tr>



<tr>
<td>9.8 If Special subjects are involved, please select the appropriate subject</td>
<td>$recruited55, $recruited56, $recruited57, $recruited58, $recruited59, $recruited60, $recruited61, $recruited62</td>
</tr>

<tr>
<td colspan="2"><h4>10. Privacy and confidentiality</h4></td>
</tr>
<tr>
<td>10.1 Does the data collected from the subjects involved </td>
<td>$recruited6</td>
</tr>
<tr>
<td>10.2 Will the study staff be trained for the confidential handling of data</td>
<td>$recruited7</td>
</tr>

<tr>
<td colspan="2"><h4>11. Information on the use of biological/ hazardous materials</h4></td>
</tr>
<tr>
<td>(a) Does the study involve the use of foetal tissue or abortus</td>
<td>$materials1</td>
</tr>
<tr>
<td>(b) Does the study involve the use of organs or body fluids</td>
<td>$materials2</td>
</tr>
<tr>
<td>(c) If the study involves the use of recombinant/gene therapy, has Department of Biotechnology (DBT) approval for rDNA products been obtained</td>
<td>$materials3</td>
</tr>
<tr>
<td>(d) Does the study involve the use of pre-existing/stored/leftover samples</td>
<td>$materials4</td>
</tr>
<tr>
<td>(e) Does the study involve the collection for banking/future research</td>
<td>$materials5</td>
</tr>
<tr>
<td>(f) If the study involves the use of ionizing radiation/radioisotopes, has Bhabha Atomic Research Centre (BARC) approval for Radioactive Isotopes been obtained?</td>
<td>$materials6</td>
</tr>
<tr>
<td>(g) Does the study involve the use of Infectious/biohazardous specimens</td>
<td>$materials7</td>
</tr>
<tr>
<td>(h) If the use of infectious/biohazardous specimens is involved, are the protocols for proper disposal of the material being prepared</td>
<td>$materials8</td>
</tr>
<tr>
<td>(i) Will any sample collected from the patients be sent abroad?</td>
<td>$materials9</td>
</tr>
<tr>
<td>(j) If Yes, is the proposal being submitted for clearance from Health Ministry's Screening Committee (HMSC) for international collaboration?</td>
<td>$materials10</td>
</tr>

<tr>
<td colspan="2"><h4>12. Informed Consent</h4></td>
</tr>

<tr>
<td>12.1 Type of consent to be obtained from the subjects (tick appropriately)</td>
<td>$obtaineds</td>
</tr>


<tr>
<td>12.2 Who will obtain the informed consent  (tick appropriately)</td>
<td>$systemetic1</td>
</tr>



<tr>
<td>12.3 Will any advertising be done for the recruitment of Subjects?</td>
<td>$krishna</td>
</tr>


<tr>
<td>12.4 If yes, then attach the sample of the promotional material with the proposal</td>
<td>$radthy</td>
</tr>




<tr>
<td colspan="2"><h4>13. Risks and Benefits</h4></td>
</tr>



<tr>
<td>13.1 Is the risk reasonable compared to the anticipated benefits to subjects/ community/ country?</td>
<td>$technology1</td>
</tr>


<tr>
<td>13.2 Is there physical/social/psychological risk/discomfort?</td>
<td>$technology2</td>
</tr>



<tr>
<td>13.3 Is there any risk for the subjects</td>
<td>$technology3</td>
</tr>


<tr>
<td>13.3.1 If yes, please explain the risk</td>
<td>$risk321</td>
</tr>


<tr>
<td>13.4 Are there any benefits for the subjects</td>
<td>$benfits890</td>
</tr>

<tr>
<td>13.4.1 If yes, please explain the benefits</td>
<td>$benfits900</td>
</tr>




<tr>
<td colspan="2"><h4>14. Information regarding data monitoring</h4></td>
</tr>



<tr>
<td>(a) Is there a data & safety monitoring committee/ Board (DSMB)?  </td>
<td>$regardings</td>
</tr>
<tr>
<td>(b) Is there a plan for reporting adverse events? </td>
<td>$regardings1</td>
</tr>
<tr>
<td>(c) Is there a plan for interim analysis of data? </td>
<td>$regardings2</td>
</tr>
<tr>
<td>(d) Are there plans for storage and maintenance of all trial databases?</td>
<td>$regardings3</td>
</tr>
<tr>
<td>(e) Is there compensation for participation? If yes,</td>
<td>$regardings41  $regardings4</td>

</tr>
<tr>
<td>(f) Is there compensation for injury?</td>
<td>$regardings5</td>
</tr>



<tr>
<td colspan="2"><h4>15. Declaration on Conflict of Interest</h4></td>
</tr>

<tr>
<td>Do you have conflict of interest? (financial/non financial)</td>
<td>$interest</td>
</tr>


<tr>
<td>If Yes, specify.</td>
<td>$interest1</td>
</tr>



<tr>
<td>Conflict of interest for any other investigator(s) (if yes, please explain in brief) </td>
<td>$interest2</td>
</tr>



<tr>
<td><strong>16. Please attach the informed consent form in English</strong></td>
<td>$engilshs</td>
</tr>



<tr>
<td><strong>17. Please attach the informed consent form in regional language(if any)</strong> </td>
<td>$vtreac</td>
</tr>


<tr>
<td>Signature of the  PI with Date</td>
<td>$dado1</td>
</tr>


<tr>
<td>Signature of the Head of Institution with Date and Stamp</td>
<td>$dado</td>
</tr>














</table>








EOD;

// Print text using writeHTML()
$pdf->writeHTML($html, true, false, true, false, '');

// Close and output PDF document
$pdf->Output('form_submission.pdf', 'I');
?>