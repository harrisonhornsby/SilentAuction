<?php
require_once('mpdf60/mpdf.php');
include 'dbconfigSilentAuction.php';

$DonorId = $_GET["DonorId"];
$sql = "SELECT `BusinessName` FROM `Donors` WHERE Id = $DonorId";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$BusinessName = $row["BusinessName"];

$mpdf = new mPDF();

$html='
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<HTML>
<HEAD>
<META http-equiv="Content-Type" content="text/html; charset=UTF-8">
<META http-equiv="X-UA-Compatible" content="IE=8">
<TITLE>Donation Request</TITLE>
<!-- #include virtual="/convert-pdf-to-html/includes/pdf-to-word-head-tag.htm" -->
<META name="generator" content="BCL easyConverter SDK 5.0.08">
<STYLE type="text/css">

body {margin-top: 0px;margin-left: 0px;}

#page_1 {position:relative; overflow: hidden;margin: 181px 0px 136px 72px;padding: 0px;border: none;width: 744px;}





.ft0{font: 15px \'Times\';line-height: 17px;}
.ft1{font: 15px \'Times\';line-height: 16px;}
.ft2{font: 15px \'Times New Roman\';line-height: 17px;}
.ft3{font: 15px \'Times\';margin-left: 17px;line-height: 17px;}
.ft4{font: 15px \'Times\';text-decoration: underline;color: #0000ff;line-height: 17px;}

.p0{text-align: left;margin-top: 0px;margin-bottom: 0px;}
.p1{text-align: left;padding-right: 73px;margin-top: 16px;margin-bottom: 0px;}
.p2{text-align: justify;padding-right: 85px;margin-top: 16px;margin-bottom: 0px;}
.p3{text-align: left;padding-right: 99px;margin-top: 17px;margin-bottom: 0px;}
.p4{text-align: left;padding-right: 77px;margin-top: 15px;margin-bottom: 0px;}
.p5{text-align: left;padding-left: 24px;margin-top: 2px;margin-bottom: 0px;}
.p6{text-align: left;padding-left: 24px;margin-top: 9px;margin-bottom: 0px;}
.p7{text-align: left;padding-left: 24px;margin-top: 10px;margin-bottom: 0px;}
.p8{text-align: left;padding-right: 131px;margin-top: 11px;margin-bottom: 0px;}
.p9{text-align: left;margin-top: 16px;margin-bottom: 0px;}
.p10{text-align: left;margin-top: 17px;margin-bottom: 0px;}
.p11{text-align: left;margin-top: 33px;margin-bottom: 0px;}




</STYLE>
</HEAD>

<BODY>
<!-- #include virtual="/convert-pdf-to-html/includes/pdf-to-word-body-tag-02242014.htm" -->
<DIV id="page_1">


<P class="p0 ft0"><b>Dear '.$BusinessName.', Friend of W. H. Taylor Elementary School:</b></P>
<P class="p1 ft0">&nbsp;&nbsp;&nbsp;&nbsp;On May 3, 2014 W. H. Taylor Elementary School PTA will hold its annual Silent Auction, one of our major fundraising events. The Silent Auction provides much needed funds for many student enrichment programs and special requests from school staff. In previous years, Auction proceeds have funded classroom supplies, activities and fieldtrips, the PTA Cultural arts program, computers, and specialized reading programs. Starting in 2013, the Taylor PTA, in coordination with the Food Bank of Southeastern Virginia and Eastern Shore, was able to help provide children in our school at risk for hunger with backpacks full of enough food to tide the family over on weekends.</P>
<P class="p2 ft0">&nbsp;&nbsp;&nbsp;&nbsp;I am pleased to report that last year\'s Auction was a tremendous success, with an estimated 500 members of the community attending. As a result, the excitement is already building for the 2014 Silent Auction. Of course, the overall success of the Auction depends equally upon the support of those attending and of those who generously contribute items or services.</P>
<P class="p3 ft0">&nbsp;&nbsp;&nbsp;&nbsp;Community support like yours is what helps make Taylor Elementary one of the most outstanding elementary schools in Norfolk. This year, we plan to again reach out to all Taylor families and to advertise to the greater Hampton Roads community. Accordingly, our PTA anticipates a very large turnout for the 2014 Auction.</P>
<P class="p4 ft1">&nbsp;&nbsp;&nbsp;&nbsp;Should you agree to make a contribution, we will be happy to display your promotional material during the Silent Auction. Additionally, all Silent Auction contributors will receive recognition in:</P>
<P class="p5 ft0"><SPAN class="ft2">-</SPAN><SPAN class="ft3">Taylor Elementary PTA events and newsletter</SPAN></P>
<P class="p6 ft0"><SPAN class="ft2">-</SPAN><SPAN class="ft3">An exhibit located within our school</SPAN></P>
<P class="p7 ft0"><SPAN class="ft2">-</SPAN><SPAN class="ft3">Taylor Elementary PTA Website</SPAN></P>
<P class="p6 ft0"><SPAN class="ft2">-</SPAN><SPAN class="ft3">Taylor PTA Facbook</SPAN></P>
<P class="p6 ft0"><SPAN class="ft2">-</SPAN><SPAN class="ft3">Marketing posters placed throughout the community</SPAN></P>
<P class="p8 ft0">&nbsp;&nbsp;&nbsp;&nbsp;If you would like to participate in our Auction, Please complete the enclosed Contribution Agreement and return it in the enclosed envelope by April 25, 2014, in order to be included in the Auction Program. If you have any questions, or need additional information, please feel free to contact me:</P>
<P class="p0 ft0">757-675-5646 (home), 757-678-9090 (cell) or <A href="mailto:tamarahai@yahoo.com"><SPAN class="ft4">800-345-6789</SPAN></A><A href="mailto:tamarahai@yahoo.com">.</A></P>
<P class="p9 ft0">Thank you in advance for your consideration of this request. We greatly appreciate your generosity.</P>
<P class="p10 ft0">Sincerely,</P>
<P class="p11 ft0">Tamara Haines</P>
<P class="p0 ft0">Chairman, Silent Auction Committee</P>
<P class="p0 ft0">W. H. Taylor Elementary School PTA</P>
<P class="p0 ft0">1122 W. Princess Anne Road</P>
<P class="p0 ft0">Norfolk, Virginia 23517</P>
</DIV>
<!-- #include virtual="/convert-pdf-to-html/includes/pdf-to-word-body-tag-between-content.htm" --></BODY>
</HTML>
';


$html = mb_convert_encoding($html, 'UTF-8', 'UTF-8');
$mpdf->WriteHTML($html);
$mpdf->Output();
?>
