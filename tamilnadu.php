<!DOCTYPE html>
<html>
<head>
<meta charset ="UTF=8" lang="en">
<title> TAMILNADU </title>
<link rel="stylesheet" href="Styles.css">
</head>
<style>
  table
  {
    color:white;
    font-size:20px; 
    background-color:white;
  }
  th,td
  {
   font-size:20px;
   font-family:courier;
   font-weight:bold; 
   background-color:maroon;
   border-color:white;
   border:1px solid white;
   padding:20px;
   color:white;
  }
  form
  {
    font-family:courier;
    font-size:30px;
  }
  big
  {
    font-family:courier;
    font-size:30px;
  }
  #hn
  {
   color:yellow;
   font-size:300%;
   font-family:courier;
  }
  input[type=submit] {
  background-color: #009933;
  color: white;
  font-weight:bold; 
  padding: 10px 25px;
  font-size:13px;
  box-shadow:4px 4px #00802b;
}
</style>
<body id=tenth>
   <h1 id=h7>Tamil Nadu Chennai Coronavirus July 20, 21 Highlights: 4,965 fresh cases and 75 deaths reported in TN</h1>
   <p id=p15>Tamil Nadu Chennai Coronavirus (Covid-19), Lockdown Latest News July 20, 21 Highlights: As of Monday, the number of active COVID-19 cases in Tamil Nadu is 51,348.</p>
   <img src="coronavirus_test.jpg" alt="jpg" class="middle">
   <pre id=pre2>Tamil Nadu Chennai Coronavirus News July 20, 21 Highlights:
    Four members of the family of Tamil Nadu Health Secretary J Radhakrishnan have
     tested positive for COVID-19.

While Radhakrishnan has tested negative, his wife, son, father-in-law and 
mother-in-law have all tested positive and are currently undergoing treatment at 
Kings Institute of Preventive Medicine and Research at Guindy, Chennai.

Meanwhile, Tamil Nadu recorded 4,985 positive cases of COVID-19 on Monday, 
bringing the state tally to 1,75,678. Among these, Chennai reported 1,298 
positive cases, bringing the city’s total to 87,235.

Tamil Nadu recorded 70 deaths on Monday, putting the state toll at 2,551. 
As many as 63 of them had succumbed due to comorbidities.

As of Monday, the number of active COVID-19 cases in Tamil Nadu is 51,348.
 Till date, 1,06,828 men, 68,827 women and 23 transgenders have tested 
 positive for the virus in the state.
</pre>
<h2 id=h8>Tamil Nadu announces dedicated hospital for COVID-19 patients</h2>
<p id=p16>The Omandurar Government Multispeciality Hospital on Mount Road is being
 converted into a special facility with 350 beds, to treat COVID-19 patients, 
 Tamil Nadu Health Minister C. Vijayabaskar said.

The other operations of the hospital would be wound down and it will be 
dedicated towards the treatment of patients who test positive for SARS-CoV-2.</p>
<img id=fourteen src="corona_hosp.jpg" alt="jpg" class="middle">
<h3 id=h9>Coronavirus: Tamil Nadu govt designates 21 public hospitals for COVID-19 treatment</h3>
<pre id=pre3>The Tamil Nadu government has notified as many as 21 State-run hospitals
 including the Rajiv Gandhi Government General Hospital here, one of the oldest 
 institutions in the country as designated hospitals for treating coronavirus patients.

All the four government run medical college hospitals here, the TN Government 
Multi Specialty hospital at Omandurar Estate, the RGGGH, Stanley Medical College 
hospital and the Kilpauk Medical College hospital will cater to Chennai, and 
adjoining districts of Tiruvallur, Kancheepuram and Chengelpet.

Besides the hospitals here, the government medical college hospitals in 16 other
districts including Madurai, Tiruchirappalli, Sivaganga, Vellore, Salem, Erode 
(IRT Perundurai), Thanjavur and Kanyakumari were designated by the government for 
treatment of COVID-19 patients.

In Coimbatore, the Government ESI Hospital (GEH) is the designated facility to treat 
the virus cases and people testing positive from nearby Tirupur and the Nilgiris will 
also be treated at the GEH.

A government order said that the government hereby directs that all COVID-19 positive 
cases shall be referred to the above exclusively designated COVID-19 hospitals as 
soon as the test results confirm positive, without any delay, duly following all 
transfer protocols as per guidelines of the Centre.

All 37 districts shall have thier own exclusive isolation room for admission and 
treating influenza like illness and severe acute respiratory illness patients, the order said.

In addition, each district should also have one exclusive facility for quarantine 
purposes preferably inside the health facility, the government said in its order.
</pre>
<h3 id=hn>Corona Tests taken in TAMILNADU:</h3>
<b><big style="color:white;" >Enter the Name of District in Tamilnadu to view the corona test details</big></b>
<form method="get">
    <br><b><big style="color:white;">District Name: </big></b><input type="text" name="District">
  <input name="submit" type="submit">
</form>

<?php
$host='localhost';
$username='Deepika';
$password='Deepu123#';
$dbname='corona_database';

$con=mysqli_connect($host,$username,$password,$dbname);
if(!$con)
{
  echo"Database not connected Properly";
}


$DID=NULL;
if (isset($_GET['submit'])) 
{
  $DID=$_GET['District'];
}
$res=mysqli_query($con,"SELECT * FROM tn_corona_cases WHERE District_Name='$DID'");
while($row=mysqli_fetch_row($res)) 
{
  echo "<br><br><table border=1>";
  echo"<tr>
  <th colspan=2>District Name</th>
  <th colspan=3>Total Cases</th>
  <th colspan=4>Recovery</th>
  <th colspan=5>No.of.Deaths</th>
  <th colspan=6>Active Cases</th>
  </tr>";
  echo "<tr>
  <td colspan=2> $row[0]</td>
  <td colspan=3> $row[1]</td>
  <td colspan=4> $row[2]</td>
  <td colspan=5> $row[3]</td>
  <td colspan=6> $row[4]</td>
  </tr>";
  echo "</table>";
}
?>
<h3 id=h10><b>HELPLINE</b></h3>
	<img id=fifteen src="coronapic6.png" alt="png" class="middle"/>
<p id=p17>
 CONTACT US FOR HELP:<br>
 Landline :044-26890561<br>
 Mobile   :9961534208<br>
 Mail id  : coronaawareness@gmail.com<br>
 HELPLINE : 1075(GOVT.)</p>
 <p id=p16 ><b>To get more information :</b></p>
<centre><a style="color:yellow;" href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019"><b>CLICK HERE</b></a></centre>
<img id=fifteen src="coronapic5.jpg" alt="jpg" class="middle"/>
    <h3 id=h10>STAY HOME! STAY SAFE !!</h3>

</body>
</html>	
